<?
$subject_val = "[OMPI devel] RFC: Add some basic CUDA-aware support to reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 09:57:53 2014" -->
<!-- isoreceived="20140514135753" -->
<!-- sent="Wed, 14 May 2014 06:55:11 -0700" -->
<!-- isosent="20140514135511" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Add some basic CUDA-aware support to reductions" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3601D5E4B58_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Add some basic CUDA-aware support to reductions<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-14 09:55:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14797.php">Nathan Hjelm: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Previous message:</strong> <a href="14795.php">George Bosilca: "Re: [OMPI devel] Non-uniform BTL problems in: openib, tcp, sctp, portals4, vader, scif"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Add some basic support so that reduction functions can support GPU buffers.  
<br>
All this patch does is move the GPU data into a host buffer before the reduction call and move it back to GPU after the reduction call.
<br>
Changes have no effect if CUDA-aware support is not compiled in.
<br>
<p>WHY: Users of CUDA-aware support expect reductions to work.
<br>
<p>WHEN: After next con call, May 20, 2014
<br>
<p>See attached patch.
<br>
<p><p><p><p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14796/reduce.diff">reduce.diff</a>
</ul>
<!-- attachment="reduce.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14797.php">Nathan Hjelm: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Previous message:</strong> <a href="14795.php">George Bosilca: "Re: [OMPI devel] Non-uniform BTL problems in: openib, tcp, sctp, portals4, vader, scif"</a>
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
