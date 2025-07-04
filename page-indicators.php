<?php
/* Template Name: Indicadores */
get_header(); ?>
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://es.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Fuente: TradingView</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
  {
  "colorTheme": "dark",
  "locale": "es",
  "largeChartUrl": "",
  "isTransparent": false,
  "showSymbolLogo": true,
  "backgroundColor": "#0F0F0F",
  "support_host": "https://www.tradingview.com",
  "width": "100%",
  "height": 500,
  "symbolsGroups": [
        {
            "name": "Forex",
            "symbols": [
                {
                "name": "FX:EURUSD",
                "displayName": "EUR a USD"
                },
                {
                "name": "FX_IDC:USDCLP",
                "displayName": "USD a CLP"
                },
                {
                "name": "FX_IDC:CLPUSD",
                "displayName": "CLP a USD"
                },
                {
                "name": "BITSTAMP:BTCUSD",
                "displayName": "BITCOINT"
                },
                {
                "name": "FX_IDC:CLFCLP",
                "displayName": "UNIDAD DE FOMENTO"
                }
            ]
        },
        {
              "name": "Futures",
                "symbols": [
                    {
                    "name": "BMFBOVESPA:EUR1!",
                    "displayName": "Euro"
                    },
                    {
                    "name": "CMCMARKETS:GOLD",
                    "displayName": "Gold"
                    },
                    {
                    "name": "PYTH:WTI3!",
                    "displayName": "WTI Curdo Petroleo"
                    },
                    {
                    "name": "BMFBOVESPA:CCM1!",
                    "displayName": "MAiz"
                    }
                ]
        }
    ]
}
  </script>
</div>
<!-- TradingView Widget END -->
<?php get_footer(); ?>