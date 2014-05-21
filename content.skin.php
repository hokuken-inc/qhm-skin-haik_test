<head>
 #{$meta_content_type}
 <title>#{$this_page_title}</title>
 <meta name="keywords" content="#{$keywords}" />
 <meta name="description" content="#{$description}" />
 <meta http-equiv="imagetoolbar" content="no" />
 <link rel="alternate" type="application/rss+xml" title="RSS" href="#{$rss_link}" />
 #{$default_css}
 #{$jquery_script}#{$jquery_cookie_script}
 #{$bootstrap}
 #{$custom_meta}#{$noindex}#{$external_link}#{$clickpad_js}
 #{$head_tag}
 #{$beforescript}
</head>
<body>
#{$toolkit_upper}
<!-- ◆ Head copy ◆ =====================================================  -->
#{$head_copy_tag}
<div id="wrapper"><!-- ■BEGIN id:wrapper -->
<!-- ◆ Header ◆ ========================================================== -->
<div id="header">
#{$logo_header}
</div>
<!-- ◆ Navigator ◆ ======================================================= -->
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigator">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand"></a>
    </div>
    <div class="collapse navbar-collapse" id="navigator">
      #{$site_navigator}
    </div>
  </div>
</nav>
<!-- ◆ Content ◆ ========================================================= -->
<div id="main"><!-- ■BEGIN id:main -->
#{$main_visual}
<div id="wrap_content"><!-- ■BEGIN id:wrap_content -->
<div id="content"><!-- ■BEGIN id:content -->
<h2 class="title">#{$this_right_title}</h2>
<div id="body"><!-- ■BEGIN id:body -->
#{$body}
</div><!-- □END id:body -->
#{$summary}
</div><!-- □END id:content -->
</div><!-- □ END id:wrap_content -->

<div id="main_dummy" style="clear:both;"></div>
</div><!-- □END id:main -->
<!-- ◆ navigator2 ◆ ========================================================== -->
<div id="navigator2"><!-- ■BEGIN id:navigator2 -->
	#{$site_navigator2}
</div><!-- □END id:navigator2 -->
<!-- ◆ Footer ◆ ========================================================== -->
<div id="footer"><!-- ■BEGIN id:footer -->
<div id="copyright"><!-- ■BEGIN id:copyright -->
<p> Copyright &copy; #{$today_year} <a href="#{$modifierlink}">#{$modifier}</a> All Rights Reserved.<br />
 #{$owneraddr}，#{$ownertel}</p>
</div><!-- □END id:copyright -->
<!-- ◆ Toobar ◆ ========================================================== -->
#{$toolkit_bottom}
</div><!-- □END id:footer -->
<!-- ◆ END ◆ ============================================================= -->
</div><!-- □END id:wrapper -->
<!-- ■　QHM copy right■ ============================================== -->
<div id="licence">
#{$licence_tag}
<!-- ■　W3C ロゴ■ ============================================== -->
<p style="text-align:right; margin-top:5px;">
    #{$rss_tag}&nbsp; 
    #{$w3c_tag}</a>
</p>
</div>
<!-- ■　アクセスタグ■ ============================================== -->
#{$accesstag_tag}
#{$lastscript}
</body>
</html>
