<?
$subject_val = "[OMPI devel] configure patch (was: v1.5: thumbs up or down? - Thumbs Down)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 14 16:51:48 2010" -->
<!-- isoreceived="20100714205148" -->
<!-- sent="Wed, 14 Jul 2010 16:52:09 -0400" -->
<!-- isosent="20100714205209" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] configure patch (was: v1.5: thumbs up or down? - Thumbs Down)" -->
<!-- id="7A66598F-93A9-4679-9431-F18668BBE356_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="a4980db7cb9c95b6214b9cde00e07edc.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI devel] configure patch (was: v1.5: thumbs up or down? - Thumbs Down)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-14 16:52:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8181.php">nadia.derbey: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Previous message:</strong> <a href="8179.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>In reply to:</strong> <a href="8171.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 11, 2010, at 12:25 AM, &lt;Kevin.Buckley_at_[hidden]&gt; &lt;Kevin.Buckley_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; $ diff -u openmpi-1.5rc3{-vanilla,}/config/ompi_contrib.m4
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.5rc3-vanilla/config/ompi_contrib.m4       2009-12-09
</span><br>
<span class="quotelev1">&gt; 10:33:28.000000000 +1300
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.5rc3/config/ompi_contrib.m4       2010-07-11
</span><br>
<span class="quotelev1">&gt; 15:43:56.000000000 +1200
</span><br>
<span class="quotelev1">&gt; @@ -99,6 +99,16 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      ompi_show_subsubsubtitle &quot;$1 (m4 configuration macro)&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    AC_ARG_ENABLE([$1],
</span><br>
<span class="quotelev1">&gt; +            [AS_HELP_STRING([--disable-$1],
</span><br>
<span class="quotelev1">&gt; +              [disable support for contributed package $1])],
</span><br>
<span class="quotelev1">&gt; +            [],
</span><br>
<span class="quotelev1">&gt; +            [enable_$1=yes])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if test &quot;x$enable_$1&quot; != xyes ; then
</span><br>
<span class="quotelev1">&gt; +        DISABLE_contrib_$1=yes
</span><br>
<span class="quotelev1">&gt; +    fi
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      OMPI_CONTRIB_HAPPY=0
</span><br>
<span class="quotelev1">&gt;      if test &quot;$DISABLE_contrib_$1&quot; = &quot;&quot; -a &quot;$DISABLE_contrib_all&quot; = &quot;&quot;; then
</span><br>
<p>This was far simpler than I had expected.  Excellent!
<br>
<p>I'm going to ping Brian and ensure there's not something hidden/subtle here that we're missing.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8181.php">nadia.derbey: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Previous message:</strong> <a href="8179.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>In reply to:</strong> <a href="8171.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
