<?
$subject_val = "[OMPI devel] Still problems with del_procs in trunkj";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 11:31:22 2014" -->
<!-- isoreceived="20140523153122" -->
<!-- sent="Fri, 23 May 2014 08:31:21 -0700" -->
<!-- isosent="20140523153121" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Still problems with del_procs in trunkj" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F36045739104_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> [OMPI devel] Still problems with del_procs in trunkj<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-23 11:31:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14837.php">Siddhartha Jana: "[OMPI devel] Threshold for pinning down user-buffers"</a>
<li><strong>Previous message:</strong> <a href="14835.php">Gilles Gouaillardet: "[OMPI devel] *neighbor_alltoall* are broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14839.php">Gilles Gouaillardet: "Re: [OMPI devel] Still problems with del_procs in trunkj"</a>
<li><strong>Reply:</strong> <a href="14839.php">Gilles Gouaillardet: "Re: [OMPI devel] Still problems with del_procs in trunkj"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am still seeing problems with del_procs with openib.  Do we believe everything should be working?  This is with the latest trunk (updated 1 hour ago).
<br>
<p>[rvandevaart_at_drossetti-ivy0 examples]$ mpirun --mca btl_openib_if_include mlx5_0:1 -np 2 -host drossetti-ivy0,drossetti-ivy1 connectivity_cConnectivity test on 2 processes PASSED.
<br>
connectivity_c: ../../../../../ompi/mca/btl/openib/btl_openib.c:1151: mca_btl_openib_del_procs: Assertion `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
<br>
connectivity_c: ../../../../../ompi/mca/btl/openib/btl_openib.c:1151: mca_btl_openib_del_procs: Assertion `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 28443 on node drossetti-ivy1 exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
[rvandevaart_at_drossetti-ivy0 examples]$ 
<br>
-----------------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14837.php">Siddhartha Jana: "[OMPI devel] Threshold for pinning down user-buffers"</a>
<li><strong>Previous message:</strong> <a href="14835.php">Gilles Gouaillardet: "[OMPI devel] *neighbor_alltoall* are broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14839.php">Gilles Gouaillardet: "Re: [OMPI devel] Still problems with del_procs in trunkj"</a>
<li><strong>Reply:</strong> <a href="14839.php">Gilles Gouaillardet: "Re: [OMPI devel] Still problems with del_procs in trunkj"</a>
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
