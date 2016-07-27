<?
$subject_val = "Re: [hwloc-devel] embedding m4 code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  7 12:15:12 2009" -->
<!-- isoreceived="20091207171512" -->
<!-- sent="Mon, 7 Dec 2009 12:15:07 -0500" -->
<!-- isosent="20091207171507" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] embedding m4 code" -->
<!-- id="281B40E3-696A-4BB4-B4F4-588C6D06CF0D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B1A583F.6070603_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-07 12:15:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0482.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1444)"</a>
<li><strong>Previous message:</strong> <a href="0480.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1441)"</a>
<li><strong>In reply to:</strong> <a href="0478.php">Brice Goglin: "Re: [hwloc-devel] embedding m4 code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0496.php">Samuel Thibault: "Re: [hwloc-devel] embedding m4 code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 5, 2009, at 7:55 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; 1) I don't understand this but I hope you know what you're doing since I
</span><br>
<span class="quotelev1">&gt; seem to remember that it was related to the failure to build with
</span><br>
<span class="quotelev1">&gt; autoconf 2.63.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -ACLOCAL_AMFLAGS = -I config -I m4
</span><br>
<span class="quotelev1">&gt; +# Note that the -I directory must *exactly* match what was specified
</span><br>
<span class="quotelev1">&gt; +# via AC_CONFIG_MACRO_DIR in configure.ac.
</span><br>
<span class="quotelev1">&gt; +ACLOCAL_AMFLAGS = -I ./config
</span><br>
<p>Yes, I *think* I got this stuff right (I had to twonk with it a bit), but I'll double check AC2.63 just to be sure.
<br>
<p><span class="quotelev1">&gt; 2) Is there a s/disable/enable/ needed in this comment?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +# Disable building the executables
</span><br>
<span class="quotelev1">&gt; +AC_DEFUN([HWLOC_ENABLE_EXECUTABLES],[
</span><br>
<p>Fixed; thx.
<br>
<p><span class="quotelev1">&gt; 3) I am surprised to see HWLOC_SYM_PREFIX{,_CAPS}. I seem to remember
</span><br>
<span class="quotelev1">&gt; you saying it was a mistake in PLPA and you wouldn't do the same in hwloc.
</span><br>
<p>Correct -- this is a cut-n-paste-ism from PLPA.  I hadn't ripped it out yet.  It will go.
<br>
<p><span class="quotelev1">&gt; 4) There are some configure checks that might need to remain in the main
</span><br>
<span class="quotelev1">&gt; configure since they may only be used by tools or tests (which embedded
</span><br>
<span class="quotelev1">&gt; should not build, right?):
</span><br>
<span class="quotelev1">&gt; * cairo (tools only)
</span><br>
<span class="quotelev1">&gt; * wchar/libtermcap/curses (maybe tools only)
</span><br>
<span class="quotelev1">&gt; * libibverbs (tests only)
</span><br>
<span class="quotelev1">&gt; * libnuma (tests only)
</span><br>
<span class="quotelev1">&gt; * bash? (Linux test only)
</span><br>
<span class="quotelev1">&gt; * xmllint? (xml test only)
</span><br>
<span class="quotelev1">&gt; * HWLOC_CHECK_DIFF_U (tests only)
</span><br>
<p>Embedded hwloc *can* build these things (tools and tests); it's just not the default.  OMPI, for example, will not build the hwloc executables because we'll only want the library code to be slurped into OMPI's larger libraries.
<br>
<p><span class="quotelev1">&gt; 5) There are a bunch of OMPI that should be replaced with hwloc in the
</span><br>
<span class="quotelev1">&gt; comments :)
</span><br>
<p>Oops.  :-)  I found one regarding the version (in configure.ac) -- I can't find any others.  Can you cite?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0482.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1444)"</a>
<li><strong>Previous message:</strong> <a href="0480.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1441)"</a>
<li><strong>In reply to:</strong> <a href="0478.php">Brice Goglin: "Re: [hwloc-devel] embedding m4 code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0496.php">Samuel Thibault: "Re: [hwloc-devel] embedding m4 code"</a>
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
