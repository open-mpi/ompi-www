<?
$subject_val = "Re: [OMPI devel] update configury for Autoconf 2.68";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 24 09:26:51 2010" -->
<!-- isoreceived="20100924132651" -->
<!-- sent="Fri, 24 Sep 2010 09:26:46 -0400" -->
<!-- isosent="20100924132646" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] update configury for Autoconf 2.68" -->
<!-- id="F6CF5DC5-9B35-4190-B38E-42A7DCF42373_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100923181559.GE16526_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] update configury for Autoconf 2.68<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-24 09:26:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8549.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Previous message:</strong> <a href="8547.php">Jeff Squyres: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>In reply to:</strong> <a href="8540.php">Ralf Wildenhues: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8551.php">Ralf Wildenhues: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>Reply:</strong> <a href="8551.php">Ralf Wildenhues: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 23, 2010, at 2:15 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Is the silent-rules clause in AM_INIT_AUTOMAKE exactly equivalent to
</span><br>
<span class="quotelev2">&gt;&gt; calling AM_SILENT_RULES?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<p>Weird -- when I do this:
<br>
<p>Index: configure.ac
<br>
===================================================================
<br>
--- configure.ac	(revision 23795)
<br>
+++ configure.ac	(working copy)
<br>
@@ -82,11 +82,8 @@
<br>
&nbsp;#
<br>
&nbsp;# Init automake
<br>
&nbsp;#
<br>
-AM_INIT_AUTOMAKE([foreign dist-bzip2 subdir-objects no-define 1.10 tar-ustar])
<br>
+AM_INIT_AUTOMAKE([foreign dist-bzip2 subdir-objects no-define 1.11 silent-rules tar-ustar])
<br>
&nbsp;
<br>
-# If Automake supports silent rules, enable them.
<br>
-m4_ifdef([AM_SILENT_RULES], [AM_SILENT_RULES([yes])])
<br>
-
<br>
&nbsp;# Make configure depend on the VERSION file, since it's used in AC_INIT
<br>
&nbsp;AC_SUBST([CONFIGURE_DEPENDENCIES], ['$(top_srcdir)/VERSION'])
<br>
&nbsp;
<br>
I do not get silent rules behavior -- I still get the old verbose behavior.  This is with:
<br>
<p>-----
<br>
[9:23] rtp-jsquyres-8717:~/svn/ompi % automake --version | head -1
<br>
automake (GNU automake) 1.11.1
<br>
[9:23] rtp-jsquyres-8717:~/svn/ompi % libtool --version | head -1
<br>
libtool (GNU libtool) 2.2.10
<br>
[9:23] rtp-jsquyres-8717:~/svn/ompi % autoconf --version | head -1
<br>
autoconf (GNU Autoconf) 2.67
<br>
-----
<br>
<p>Specifically, I only seem to get silent rules behavior if I AM_SILENT_RULES([yes]).  Weird.  I guess I'll remove the m4_ifdef but still leave the AM_SILENT_RULES([yes]).
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
<li><strong>Next message:</strong> <a href="8549.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Previous message:</strong> <a href="8547.php">Jeff Squyres: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>In reply to:</strong> <a href="8540.php">Ralf Wildenhues: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8551.php">Ralf Wildenhues: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>Reply:</strong> <a href="8551.php">Ralf Wildenhues: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
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
