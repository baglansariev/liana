<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="yandex-verification" content="6a4af72c2e26a571" />
	<meta name="description" content="<?= $this->asset->getMetaDesc() ?>">
	<meta name="keywords" content="<?= $this->asset->getMetaKeys() ?>">
    <meta name="yandex-verification" content="ddce66650fee26ba" />
	<title><?= $this->asset->getTitle() ?></title>
	<link rel="shortcut icon" href="/public/images/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Marck+Script&display=swap" rel="stylesheet">
    <link  rel="stylesheet" href="/public/style/font-awesome/css/all.min.css">
	<link rel="stylesheet" href="/public/style/bootstrap/bootstrap-grid.css">
    <link rel="stylesheet" href="/public/style/bootstrap/bootstrap.css">
    <link  rel="stylesheet" href="/public/style/owl-carousel/owl.carousel.min.css">
    <link  rel="stylesheet" href="/public/style/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="/public/style/css/main.css">
<!--    <link rel="stylesheet" href="/public/style/css/main.msin.css">-->
    <? foreach($this->asset->getCss() as $css): ?>
	<link rel="stylesheet" href="<?= $css ?>">
	<? endforeach ?>
	<script type="text/javascript" src="/public/style/js/jquery-3.4.0.min.js"></script>
    <script type="text/javascript" src="/public/style/font-awesome/js/all.min.js"></script>
    <script type="text/javascript" src="/public/style/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/public/style/js/masked_input.js"></script>
    <script type="text/javascript" src="/public/style/js/particles.min.js"></script>
    <script type="text/javascript" src="/public/style/js/particles-switcher.js"></script>
<!--	<script type="text/javascript" src="/public/style/js/app.js"></script>-->
	<script type="text/javascript" src="/public/style/js/app.min.js"></script>
    <script src="//code.jivosite.com/widget.js" data-jv-id="h9KLaWxglI" async></script>
	<? foreach($this->asset->getJs() as $js): ?>
	<script type="text/javascript" src="<?= $js ?>"></script>
	<? endforeach ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149797964-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-149797964-1');
    </script>
    <!-- Global site tag (gtag.js) - Google Ads: 703335733 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-703335733"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-703335733');
    </script>
    <!-- Event snippet for Ватсап conversion page -->
    <script>
        gtag('event', 'conversion', {'send_to': 'AW-703335733/l2CgCN2S8q8BELWasM8C'});
    </script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(55697323, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/55697323" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body>
	<?= $content ?>
	<script type="text/javascript" src="/public/style/bootstrap/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="/public/style/bootstrap/bootstrap.js"></script>
</body>
</html>