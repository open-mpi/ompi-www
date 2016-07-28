<?
$subject_val = "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 20:07:31 2011" -->
<!-- isoreceived="20110414000731" -->
<!-- sent="Wed, 13 Apr 2011 18:07:24 -0600" -->
<!-- isosent="20110414000724" -->
<!-- name="Ken Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly" -->
<!-- id="1302739644.30331.10.camel_at_localhost.localdomain" -->
<!-- charset="utf-8" -->
<!-- inreplyto="13FBB71B-BE58-45A4-AA2E-6BB8CDE81975_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2011-04-13 20:07:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9173.php">Ralph Castain: "[OMPI devel] Exit status"</a>
<li><strong>Previous message:</strong> <a href="9171.php">George Bosilca: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>In reply to:</strong> <a href="9171.php">George Bosilca: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9189.php">George Bosilca: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Reply:</strong> <a href="9189.php">George Bosilca: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George, Yes. GPUDirect eliminated an additional (host) memory buffering
<br>
step between the HCA and the GPU that took CPU cycles.
<br>
<p>I was never very comfortable with the kernel patch necessary, nor the
<br>
patched OFED required to make it all work.  Having said that, it did
<br>
provide a ~14% improvement in throughput on some of my code. Not bad.
<br>
<p>Now comes GPUDirect 2.0 (mostly helping GPU-GPU across PCIe) and Unified
<br>
Virtual Addressing. Holds great promise, but the real understanding
<br>
comes from whitebox analysis, and instrumenting my app code.
<br>
<p>On Wed, 2011-04-13 at 17:21 -0400, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 13, 2011, at 14:48 , Rolf vandeVaart wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This work does not depend on GPU Direct.  It is making use of the fact that one can malloc memory, register it with IB, and register it with CUDA via the new 4.0 API cuMemHostRegister API.  Then one can copy device memory into this memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wasn't that the point behind GPUDirect? To allow direct memory copy between the GPU and the network card without external intervention?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>=====================
<br>
Kenneth A. Lloyd
<br>
CEO - Director of Systems Science
<br>
Watt Systems Technologies Inc.
<br>
www.wattsys.com
<br>
kenneth.lloyd_at_[hidden] 
<br>
<p>This e-mail is covered by the Electronic Communications Privacy Act, 18
<br>
U.S.C. 2510-2521 and is intended only for the addressee named above. It
<br>
may contain privileged or confidential information. If you are not the
<br>
addressee you must not copy, distribute, disclose or use any of the
<br>
information in it. If you have received it in error please delete it and
<br>
immediately notify the sender.
<br>
<p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9172/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9173.php">Ralph Castain: "[OMPI devel] Exit status"</a>
<li><strong>Previous message:</strong> <a href="9171.php">George Bosilca: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>In reply to:</strong> <a href="9171.php">George Bosilca: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9189.php">George Bosilca: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Reply:</strong> <a href="9189.php">George Bosilca: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
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
