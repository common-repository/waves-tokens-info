<?php
/**
 * Plugin Name: Waves Tokens Info
 * Plugin URI: http://megacrypto.online
 * Description: This plugin allows you to get some info about all tokens created on waves platform! Price, Decimals, Total Supply, AND MORE!
 * Version: 1.0
 * Author: Mahdi Maymandi-Nejad
 * Author URI: https://maymandi.com/
 * License: MIT
 */

function wavestp_token( $atts ) {
    extract( shortcode_atts( array(
        'id' => '',
        'priceid' => '',
'fiat' => '',
    ), $atts, 'token' ) );

    $demolph_output = wavestp_show( $id,$fiat,$priceid );  
    return $demolph_output;
}
add_shortcode( "token", "wavestp_token" );

function wavestp_show( $id,$fiat,$priceid ) { 
    $response = wp_remote_get( "http://marketdata.wavesplatform.com/api/ticker/$id/$priceid" );
    $body = wp_remote_retrieve_body( $response );
$data = json_decode($body, TRUE);
$cmcap = wp_remote_get("https://api.coinmarketcap.com/v1/ticker/waves/?convert=EUR");
$cmbody = wp_remote_retrieve_body($cmcap);
$cmdata = json_decode($cmbody, TRUE);
    $token = array_search("$id", array_column($data, 'amountAssetID'));
    $price = $data['24h_close'];
    $pricein = $data["priceAssetID"];
    $pricename = $data["priceAssetName"];
    $wprice = $cmdata[0]["price_usd"];
    $btcprice = $cmdata[0]["price_btc"];
     $eurprice = $cmdata[0]["price_eur"];
     if ($pricein == "WAVES"){
    if($fiat == "waves"){
return round($price,5);
    }  elseif ($fiat == "btc"){
        return number_format($price*$btcprice, 4);
    } elseif ($fiat == "eur"){
         return number_format($price*$eurprice, 4);
    }
    else{
         return number_format($price*$wprice, 4);

    }
     } else {
         return "$price $pricename";
     }
} 

function wavestp_tinfo( $atts ) {
    extract( shortcode_atts( array(
        'id' => '',
        'priceid' => '',
'type' => '',
    ), $atts, 'tinfo' ) );

    $demolph_output = wavestp_shinfo( $id,$type,$priceid );  
    return $demolph_output;
}
add_shortcode( "tinfo", "wavestp_tinfo" );

function wavestp_shinfo( $id,$type,$priceid ) { 
     $rinfo = wp_remote_get( "http://marketdata.wavesplatform.com/api/ticker/$id/$priceid" );
    $binfo = wp_remote_retrieve_body( $rinfo );
$dinfo = json_decode($binfo, TRUE);
$decimals = $dinfo["priceAssetDecimals"];
$volume24h = $dinfo["24h_volume"];
$totalsupply = $dinfo["amountAssetTotalSupply"];
$circusupply = $dinfo["amountAssetCirculatingSupply"];
$maxsupply = $dinfo["amountAssetMaxSupply"];
$low24h = $dinfo["24h_low"];
$high24h = $dinfo["24h_high"];
if ($type == "decimals"){
    return $decimals;
} elseif ($type == "24hvolume"){
    return $volume24h;
} elseif ($type == "totalsupply"){
 return $totalsupply;   
} elseif ($type == "circulatingsupply"){
    return $circusupply;
} elseif ($type == "maxsupply"){
    return $maxsupply;
} elseif ($type == "24hlow"){
    return $low24h;
} elseif ($type == "24hhigh"){
    return $high24h;
}
}
?>