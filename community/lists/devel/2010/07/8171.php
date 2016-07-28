<?
$subject_val = "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 11 00:25:23 2010" -->
<!-- isoreceived="20100711042523" -->
<!-- sent="Sun, 11 Jul 2010 16:25:05 +1200" -->
<!-- isosent="20100711042505" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down" -->
<!-- id="a4980db7cb9c95b6214b9cde00e07edc.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8ECD6B3B-C2FA-401A-9023-DA67D2E68FDF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down<br>
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20v1.5:%20thumbs%20up%20or%20down?%20-%20Thumbs%20Down"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-07-11 00:25:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8172.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Previous message:</strong> <a href="8170.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8145.php">Jeff Squyres: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8180.php">Jeff Squyres: "[OMPI devel] configure patch (was: v1.5: thumbs up or down? - Thumbs Down)"</a>
<li><strong>Reply:</strong> <a href="8180.php">Jeff Squyres: "[OMPI devel] configure patch (was: v1.5: thumbs up or down? - Thumbs Down)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt; &gt; OK, I humbly withdraw (a) above but now, equally humbly, suggest
</span><br>
<span class="quotelev2">&gt; &gt; that instead of using a list, those things be turned into standard,
</span><br>
<span class="quotelev2">&gt; &gt; single-target, configure options, vis:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --with-XXXX=
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --enable-XXXX=
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; True, this would be better.  I believe that Brian didn't initially do it
</span><br>
<span class="quotelev1">&gt; this way for some subtle reasons, but I confess that I don't remember
</span><br>
<span class="quotelev1">&gt; exactly why.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patches would be welcome here.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<p><p>Here you go, as per our offlist discussion, a patch that allows
<br>
one to deselect addons individually,
<br>
<p>--enable-addon1=no --disable-addon3
<br>
<p>which is required because you can't build up
<br>
<p>--enable-contrib-no-build=addon1 --enable-contrib-no-build=addon2
<br>
<p>options as the build system only honours the last one.
<br>
<p>What this does is use the value of
<br>
<p>--enable-addon1       (yes)
<br>
--enable-addon1=yes   (yes)
<br>
--enable-addon1=no    (no)
<br>
--disable-addon1      (no)
<br>
<p>or sets it to &quot;yes&quot; if you don't give anything, thereby maintaining
<br>
the default of build all the contribs unless told otherwise.
<br>
<p><p>$ diff -u openmpi-1.5rc3{-vanilla,}/config/ompi_contrib.m4
<br>
--- openmpi-1.5rc3-vanilla/config/ompi_contrib.m4       2009-12-09
<br>
10:33:28.000000000 +1300
<br>
+++ openmpi-1.5rc3/config/ompi_contrib.m4       2010-07-11
<br>
15:43:56.000000000 +1200
<br>
@@ -99,6 +99,16 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_show_subsubsubtitle &quot;$1 (m4 configuration macro)&quot;
<br>
<p>+    AC_ARG_ENABLE([$1],
<br>
+            [AS_HELP_STRING([--disable-$1],
<br>
+              [disable support for contributed package $1])],
<br>
+            [],
<br>
+            [enable_$1=yes])
<br>
+
<br>
+    if test &quot;x$enable_$1&quot; != xyes ; then
<br>
+        DISABLE_contrib_$1=yes
<br>
+    fi
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_CONTRIB_HAPPY=0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$DISABLE_contrib_$1&quot; = &quot;&quot; -a &quot;$DISABLE_contrib_all&quot; = &quot;&quot;; then
<br>
<p><p><p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8172.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Previous message:</strong> <a href="8170.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8145.php">Jeff Squyres: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8180.php">Jeff Squyres: "[OMPI devel] configure patch (was: v1.5: thumbs up or down? - Thumbs Down)"</a>
<li><strong>Reply:</strong> <a href="8180.php">Jeff Squyres: "[OMPI devel] configure patch (was: v1.5: thumbs up or down? - Thumbs Down)"</a>
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
