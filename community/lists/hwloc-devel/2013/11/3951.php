<?
$subject_val = "Re: [hwloc-devel] Relationship between Cario and X11";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  1 10:12:27 2013" -->
<!-- isoreceived="20131101141227" -->
<!-- sent="Fri, 1 Nov 2013 14:12:25 +0000" -->
<!-- isosent="20131101141225" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Relationship between Cario and X11" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F9A3040_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20131101140759.GV7325_at_type.youpi.perso.aquilenet.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Relationship between Cario and X11<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-01 10:12:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3952.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Previous message:</strong> <a href="3950.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>In reply to:</strong> <a href="3950.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3952.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Reply:</strong> <a href="3952.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cool.  Does the following patch look ok?  If so, I'll commit to master and v1.7:
<br>
<p>diff --git a/config/hwloc_internal.m4 b/config/hwloc_internal.m4
<br>
index b0ac041..bfc3f36 100644
<br>
--- a/config/hwloc_internal.m4
<br>
+++ b/config/hwloc_internal.m4
<br>
@@ -255,31 +255,6 @@ EOF
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_PKG_CHECK_MODULES([CAIRO], [cairo], [cairo_fill],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[hwloc_cairo_happy=yes],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[hwloc_cairo_happy=no])
<br>
-      if test &quot;x$hwloc_cairo_happy&quot; = &quot;xyes&quot;; then
<br>
-        AC_PATH_XTRA
<br>
-       CFLAGS_save=$CFLAGS
<br>
-       LIBS_save=$LIBS
<br>
-
<br>
-       CFLAGS=&quot;$CFLAGS $X_CFLAGS&quot;
<br>
-       LIBS=&quot;$LIBS $X_PRE_LIBS $X_LIBS $X_EXTRA_LIBS&quot;
<br>
-        AC_CHECK_HEADERS([X11/Xlib.h], [
<br>
-          AC_CHECK_HEADERS([X11/Xutil.h X11/keysym.h], [
<br>
-            AC_CHECK_LIB([X11], [XOpenDisplay], [
<br>
-              enable_X11=yes
<br>
-              AC_SUBST([HWLOC_X11_LIBS], [&quot;-lX11&quot;])
<br>
-              AC_DEFINE([HWLOC_HAVE_X11], [1], [Define to 1 if X11 libraries ar
<br>
-            ])]
<br>
-          )],,
<br>
-          [[#include &lt;X11/Xlib.h&gt;]]
<br>
-        )
<br>
-        if test &quot;x$enable_X11&quot; != &quot;xyes&quot;; then
<br>
-          AC_MSG_WARN([X11 headers not found, Cairo/X11 back-end disabled])
<br>
-          hwloc_cairo_happy=no
<br>
-        fi
<br>
-
<br>
-       CFLAGS=$CFLAGS_save
<br>
-       LIBS=$LIBS_save
<br>
-      fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;x$hwloc_cairo_happy&quot; = &quot;xyes&quot;; then
<br>
<p><p><p>On Nov 1, 2013, at 10:07 AM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres (jsquyres), le Fri 01 Nov 2013 14:59:03 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I notice that we have an explicit dependency between Cairo and X11 in configure:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there any reason for this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think if there was any it's now gone.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Indeed, I manually disabled this extra check in configure, and I can still seem to use Cairo in lstopo (e.g., generate PDFs and PNGs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the source code is already fine with it, good!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are there some platforms where linking Cairo depends on X11?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Possibly, but I believe it is hidden, or at least all handled by
</span><br>
<span class="quotelev1">&gt; pkg-config, and so we don't care. Of course we need X11 for our x11
</span><br>
<span class="quotelev1">&gt; backend (which also happens to be using cairo).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3952.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Previous message:</strong> <a href="3950.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>In reply to:</strong> <a href="3950.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3952.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Reply:</strong> <a href="3952.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
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
