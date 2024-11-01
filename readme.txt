=== Waves Tokens Info ===
Contributors: megacrypto
Donate link: http://megacrypto.online/donation/
Tags: waves tokens info, waves token info, waves tokens price, waves token price, waves token price for wordpress, waves tokens price for wordpress, waves token info for wordpress, waves tokens price for wordpress, waves token price wordpress plugin, waves tokens price wordpress plugin
Requires at least: 4.3
Tested up to: 4.9.6
Stable tag: 4.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==
Waves Tokens Info plugin is a friendly plugin designed for you to show the info of tokens created on waves platform.
With this plugin you can show 24h price, 24h high, 24h low, circulating supply, max supply, total supply, and token's decimal.
This info comes from WAVES DEX.
The info for waves tokens comes from the two links below:
http://marketdata.wavesplatform.com/api/ticker/$id/$priceid => For Waves Tokens Info
https://api.coinmarketcap.com/v1/ticker/waves/?convert=EUR => For Showing the prices of tokens in other currencies.
== Installation ==

The installation is very easy!

1. Upload the plugin in wordpress
2. Activate the plugin
3. Use shortcode [token id="" priceid="" fiat=""] to show the 24h price of a token. ID is the assetID of the token you want to show the token's price. PRICEID is the assetID of the currency you want to show the price with. In waves you can trade anything. PRICEID shows which asset you want to show the token with. For example if you want to show the price of the token in waves type WAVES inside the priceid. If your priceid is WAVES you are able to use fiat option. You can choose to show the price of the token in EUR, USD, BTC or just show it in WAVES. 
EXAMPLE1: [token id="2Hh2B55pq6A3Vs9puNTxFUiot2ZKbKS2nUS8gi7CdSj4" priceid="WAVES" fiat="btc"] => This shows the price of token 2Hh2B55pq6A3Vs9puNTxFUiot2ZKbKS2nUS8gi7CdSj4 exchanged with WAVES on DEX in terms of bitcoin.
EXAMPLE2: [token id="2Hh2B55pq6A3Vs9puNTxFUiot2ZKbKS2nUS8gi7CdSj4" priceid="Gq7vDawnJqNpQFqKLg4wqE8f2KTk6gWDoY1LjKgs6fx"] => This shows the price of token 2Hh2B55pq6A3Vs9puNTxFUiot2ZKbKS2nUS8gi7CdSj4 exchanged with Gq7vDawnJqNpQFqKLg4wqE8f2KTk6gWDoY1LjKgs6fx in terms of Gq7vDawnJqNpQFqKLg4wqE8f2KTk6gWDoY1LjKgs6fx. You Can't use fiat in this option.
** Remember you can use btc, eur, usd, and waves as fiats. The fiats are case sensitive. Write them in lower case always.
** Note that priceid is also case sensetive. Check the priceid on wavesplatform to make sure if you are using the right form.
To show the info of a token you need to use shortcode [tinfo id="" priceid="" type=""]. Put the id of the token in id, the priceid is the price which the token is shown (REMEMBER this is not the price you want to show the token with! This is the price id of what your token has been traded in WAVES DEX).
For type you need to enter what you need to show. List of commands:
    - 24hhigh [Shows the 24h highest price]
    - 24hlow [Shows the 24h lowest price]
    - maxsupply [Shows the max supply of the token]
    - circulatingsupply [Shows the circulating supply of the token]
    - totalsupply [Shows the total supply of the token]
    - 24hvolume [Shows the 24h volume of the token]
    - decimals [Shows the decimals of the token]
    
EXAMPLE : [tinfo id="2Hh2B55pq6A3Vs9puNTxFUiot2ZKbKS2nUS8gi7CdSj4" priceid="WAVES" type="decimals"] => Shows decimals of token 2Hh2B55pq6A3Vs9puNTxFUiot2ZKbKS2nUS8gi7CdSj4 traded with WAVES.
** Remember that 24h high, 24h low, and 24h volume are shown in terms of priceid. 

== Screenshots ==
1. Shortcode 1 - screenshot-1.png
== Changelog ==
= 1.1 = 
The prices are rounded to increase the quality of performance of the plugin and your site. 
= 1.0 =
* no new changes made since 1.0
== Upgrade Notice ==
= 1.1 = 
In the new version the prices are rounded up to make the performance of the script and your site better.
= 1.0 =
In this version you can show 24h price, 24h high, 24h low, circulating supply, max supply, total supply, and token's decimal.




