<?
$subject_val = "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 11:45:00 2011" -->
<!-- isoreceived="20110414154500" -->
<!-- sent="Thu, 14 Apr 2011 09:44:53 -0600" -->
<!-- isosent="20110414154453" -->
<!-- name="Ken Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly" -->
<!-- id="1302795893.20669.4.camel_at_localhost.localdomain" -->
<!-- charset="utf-8" -->
<!-- inreplyto="6E615031-D504-43A7-9E88-3DCD1A0DD0D6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly<br>
<strong>From:</strong> Ken Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 11:44:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9188.php">Shamis, Pavel: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<li><strong>Previous message:</strong> <a href="9186.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>In reply to:</strong> <a href="9185.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9191.php">Brice Goglin: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Reply:</strong> <a href="9191.php">Brice Goglin: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd suggest supporting CUDA device queries in carto and hwloc.
<br>
<p>Ken
<br>
<p><p>On Thu, 2011-04-14 at 11:25 -0400, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 13, 2011, at 12:47 PM, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; By default, the code is disable and has to be configured into the library.
</span><br>
<span class="quotelev2">&gt; &gt;   --with-cuda(=DIR)       Build cuda support, optionally adding DIR/include,
</span><br>
<span class="quotelev2">&gt; &gt;                                              DIR/lib, and DIR/lib64
</span><br>
<span class="quotelev2">&gt; &gt;   --with-cuda-libdir=DIR  Search for cuda libraries in DIR
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My $0.02: cuda shouldn't be disabled by default (and only enabled if you --with-cuda).  If configure finds all the Right cuda magic, then cuda support should be enabled by default.  Just like all other optional support libraries that OMPI uses.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More specifically: the cuda support code in OMPI should strive to be such that it can be enabled by default and not cause any performance penalties to codes that do not need/use any cuda stuff.  I'm not saying I know how to do that -- I'm just saying that that should be the goal.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9187/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9188.php">Shamis, Pavel: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<li><strong>Previous message:</strong> <a href="9186.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>In reply to:</strong> <a href="9185.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9191.php">Brice Goglin: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Reply:</strong> <a href="9191.php">Brice Goglin: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
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
