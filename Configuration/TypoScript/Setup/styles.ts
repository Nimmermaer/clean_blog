page {
    includeCSS {
        Lora = https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic
        Lora.external = 1
        openSans = https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800
        openSans.external = 1
        bootstrap = EXT:clean_blog/Resources/Public/Libs/bootstrap/css/bootstrap.min.css
        fonts = EXT:clean_blog/Resources/Public/Libs/font-awesome/css/font-awesome.min.css
        cleanBlog = EXT:clean_blog/Resources/Public/Css/clean-blog.min.css
        style = EXT:clean_blog/Resources/Public/Css/style.css
    }

    includeJSFooter {
        jquery = EXT:clean_blog/Resources/Public/Libs/jquery/jquery.min.js
        bootstrap = EXT:clean_blog/Resources/Public/Libs/bootstrap/js/bootstrap.min.js
        cleanBlog = EXT:clean_blog/Resources/Public/Js/clean-blog.min.js
        contact = EXT:clean_blog/Resources/Public/Js/contact_me.js
        validation = EXT:clean_blog/Resources/Public/Js/jqBootstrapValidation.js
        scripts = EXT:clean_blog/Resources/Public/Js/scripts.js
    }

    includeJSLibs {
        html5shiv = https://oss.maxcdn.com/Libs/html5shiv/3.7.0/html5shiv.j
        html5shiv.external = 1
        html5shiv.disableCompression = 1
        html5shiv.excludeFromConcatenation = 1
        html5shiv.allWrap = <!--[if lt IE 9]>|<![endif]-->
        respond = https://oss.maxcdn.com/Libs/respond.js/1.4.2/respond.min.js
        respond.external = 1
        respond.disableCompression = 1
        respond.excludeFromConcatenation = 1
        respond.allWrap = <!--[if lt IE 9]>|<![endif]-->
    }
}

lib.parseFunc {
    allowTags := addToList(time)
}

