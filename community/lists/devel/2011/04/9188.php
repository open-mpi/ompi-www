<?
$subject_val = "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 11:48:45 2011" -->
<!-- isoreceived="20110414154845" -->
<!-- sent="Thu, 14 Apr 2011 11:48:39 -0400" -->
<!-- isosent="20110414154839" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly" -->
<!-- id="8EB9E7DB-834F-47F0-8AC8-33DA29CEB96E_at_ornl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 11:48:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9189.php">George Bosilca: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9187.php">Ken Lloyd: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>In reply to:</strong> <a href="9185.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9192.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<li><strong>Reply:</strong> <a href="9192.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; By default, the code is disable and has to be configured into the library.
</span><br>
<span class="quotelev2">&gt;&gt;  --with-cuda(=DIR)       Build cuda support, optionally adding DIR/include,
</span><br>
<span class="quotelev2">&gt;&gt;                                             DIR/lib, and DIR/lib64
</span><br>
<span class="quotelev2">&gt;&gt;  --with-cuda-libdir=DIR  Search for cuda libraries in DIR
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My $0.02: cuda shouldn't be disabled by default (and only enabled if you --with-cuda).  If configure finds all the Right cuda magic, then cuda support should be enabled by default.  Just like all other optional support libraries that OMPI uses.
</span><br>
<p>Actually I'm not sure that it is good idea to enable CUDA by default, since it disables zero-copy protocol, that is critical for good performance.
<br>
<p>My 0.02$
<br>
<p>Pasha.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9189.php">George Bosilca: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9187.php">Ken Lloyd: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>In reply to:</strong> <a href="9185.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9192.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<li><strong>Reply:</strong> <a href="9192.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
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
