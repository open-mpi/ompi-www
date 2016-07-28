<?
$subject_val = "[OMPI devel] RFC: [UPDATE] Add some basic CUDA-aware support to reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 12:29:12 2014" -->
<!-- isoreceived="20140521162912" -->
<!-- sent="Wed, 21 May 2014 09:28:27 -0700" -->
<!-- isosent="20140521162827" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: [UPDATE] Add some basic CUDA-aware support to reductions" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F360457390FD_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: [UPDATE] Add some basic CUDA-aware support to reductions<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-21 12:28:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14835.php">Gilles Gouaillardet: "[OMPI devel] *neighbor_alltoall* are broken"</a>
<li><strong>Previous message:</strong> <a href="14833.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31838 - trunk/ompi/mca/pml/ob1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
NOTE: This is an update to the RFC after review and help from George
<br>
<p>WHAT: Add some basic support so that reduction functions can support GPU buffers.  Create new coll module that is only compiled in when CUDA-aware support is compiled in.  This patch moves the GPU data into a host buffer before the reduction call and move it back to GPU after the reduction call.  Changes have no effect if CUDA-aware support is not compiled in. 
<br>
<p>WHY: Users of CUDA-aware support expect reductions to work. 
<br>
<p>WHEN: Friday, May 23, 2014 
<br>
<p><p><p>-----------------------------------------------------------------------------------
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
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14834/collcuda.diff">collcuda.diff</a>
</ul>
<!-- attachment="collcuda.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14835.php">Gilles Gouaillardet: "[OMPI devel] *neighbor_alltoall* are broken"</a>
<li><strong>Previous message:</strong> <a href="14833.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31838 - trunk/ompi/mca/pml/ob1"</a>
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
