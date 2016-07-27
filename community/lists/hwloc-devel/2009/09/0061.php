<?
$subject_val = "Re: [hwloc-devel] doxygen, help2man";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 10:03:52 2009" -->
<!-- isoreceived="20090921140352" -->
<!-- sent="Mon, 21 Sep 2009 16:03:06 +0200" -->
<!-- isosent="20090921140306" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] doxygen, help2man" -->
<!-- id="4AB7879A.7020609_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9E470181-D599-434E-8DC8-B8F7A5936857_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] doxygen, help2man<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 10:03:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0062.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0060.php">Jeff Squyres: "[hwloc-devel] doxygen, help2man"</a>
<li><strong>In reply to:</strong> <a href="0060.php">Jeff Squyres: "[hwloc-devel] doxygen, help2man"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Ugh.  Integrating the &quot;make dist&quot; process with this stuff is
</span><br>
<span class="quotelev1">&gt; surprisingly difficult.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm still trying to fix &quot;make dist&quot; (and distcheck) for VPATH builds. 
</span><br>
<span class="quotelev1">&gt; I may admit defeat on this, and only allow &quot;make dist&quot; to work in
</span><br>
<span class="quotelev1">&gt; non-VPATH builds (the contrib/dist/make_dist_tarball script only works
</span><br>
<span class="quotelev1">&gt; in non-VPATH builds; it checks right up near the top).  Would that be
</span><br>
<span class="quotelev1">&gt; horrible if I didn't allow non-VPATH dist/distcheck?
</span><br>
<p>I always build outside of the source tree for development/testing. But
<br>
it's ok to forbid it for make dist/distcheck.
<br>
<p><span class="quotelev1">&gt; Additionally, I found a tachyon (ha!) in utils/Makefile.am in terms of
</span><br>
<span class="quotelev1">&gt; &quot;make dist&quot;: the man pages depend on the executables (because the man
</span><br>
<span class="quotelev1">&gt; pages are generated via &quot;help2man&quot;).  This is a problem if you:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; svn co ...
</span><br>
<span class="quotelev1">&gt; ./autogen.sh
</span><br>
<span class="quotelev1">&gt; ./configure
</span><br>
<span class="quotelev1">&gt; make dist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The dist will fail because the executables are built, but then fail
</span><br>
<span class="quotelev1">&gt; because libhwloc.la does not exist.
</span><br>
<p>Oh now I understand this failure :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0062.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0060.php">Jeff Squyres: "[hwloc-devel] doxygen, help2man"</a>
<li><strong>In reply to:</strong> <a href="0060.php">Jeff Squyres: "[hwloc-devel] doxygen, help2man"</a>
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
