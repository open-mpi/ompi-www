<?
$subject_val = "Re: [hwloc-devel] embedding m4 code";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec  5 07:55:32 2009" -->
<!-- isoreceived="20091205125532" -->
<!-- sent="Sat, 05 Dec 2009 13:55:27 +0100" -->
<!-- isosent="20091205125527" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] embedding m4 code" -->
<!-- id="4B1A583F.6070603_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BAA3D899-EDFD-4465-A085-22D7F9184A94_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] embedding m4 code<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-05 07:55:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0479.php">Samuel Thibault: "Re: [hwloc-devel] embedding m4 code"</a>
<li><strong>Previous message:</strong> <a href="0477.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1439)"</a>
<li><strong>In reply to:</strong> <a href="0476.php">Jeff Squyres: "[hwloc-devel] embedding m4 code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0479.php">Samuel Thibault: "Re: [hwloc-devel] embedding m4 code"</a>
<li><strong>Reply:</strong> <a href="0479.php">Samuel Thibault: "Re: [hwloc-devel] embedding m4 code"</a>
<li><strong>Reply:</strong> <a href="0481.php">Jeff Squyres: "Re: [hwloc-devel] embedding m4 code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I think I have the first part of the embedding code done -- it builds and compiles hwloc just like today's build system does (but a bunch of the m4 behind the scenes has moved around quite a bit to enable the embedding stuff).  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you guys try builds on the supported platforms to see if I broke anything?  I only have access to rhel4, rhel5, and osx.  The code is in a mercurial branch here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://bitbucket.org/jsquyres/hwloc-embedded/">http://bitbucket.org/jsquyres/hwloc-embedded/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm working on the actual embedding stuff now, but wanted to ensure that I at least got the first parts right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I didn't test it but I read the diff, here are some comments/questions:
<br>
<p>1) I don't understand this but I hope you know what you're doing since I
<br>
seem to remember that it was related to the failure to build with
<br>
autoconf 2.63.
<br>
<p>-ACLOCAL_AMFLAGS = -I config -I m4
<br>
+# Note that the -I directory must *exactly* match what was specified
<br>
+# via AC_CONFIG_MACRO_DIR in configure.ac.
<br>
+ACLOCAL_AMFLAGS = -I ./config
<br>
<p><p>2) Is there a s/disable/enable/ needed in this comment?
<br>
<p>+# Disable building the executables
<br>
+AC_DEFUN([HWLOC_ENABLE_EXECUTABLES],[
<br>
<p><p>3) I am surprised to see HWLOC_SYM_PREFIX{,_CAPS}. I seem to remember
<br>
you saying it was a mistake in PLPA and you wouldn't do the same in hwloc.
<br>
<p>4) There are some configure checks that might need to remain in the main
<br>
configure since they may only be used by tools or tests (which embedded
<br>
should not build, right?):
<br>
* cairo (tools only)
<br>
* wchar/libtermcap/curses (maybe tools only)
<br>
* libibverbs (tests only)
<br>
* libnuma (tests only)
<br>
* bash? (Linux test only)
<br>
* xmllint? (xml test only)
<br>
* HWLOC_CHECK_DIFF_U (tests only)
<br>
<p><p>5) There are a bunch of OMPI that should be replaced with hwloc in the
<br>
comments :)
<br>
<p><p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0479.php">Samuel Thibault: "Re: [hwloc-devel] embedding m4 code"</a>
<li><strong>Previous message:</strong> <a href="0477.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1439)"</a>
<li><strong>In reply to:</strong> <a href="0476.php">Jeff Squyres: "[hwloc-devel] embedding m4 code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0479.php">Samuel Thibault: "Re: [hwloc-devel] embedding m4 code"</a>
<li><strong>Reply:</strong> <a href="0479.php">Samuel Thibault: "Re: [hwloc-devel] embedding m4 code"</a>
<li><strong>Reply:</strong> <a href="0481.php">Jeff Squyres: "Re: [hwloc-devel] embedding m4 code"</a>
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
