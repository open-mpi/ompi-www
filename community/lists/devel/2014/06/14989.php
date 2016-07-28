<?
$subject_val = "[OMPI devel] iallgather failures with coll ml";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 13:55:30 2014" -->
<!-- isoreceived="20140606175530" -->
<!-- sent="Fri, 6 Jun 2014 10:55:28 -0700" -->
<!-- isosent="20140606175528" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] iallgather failures with coll ml" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F36046C6EA79_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> [OMPI devel] iallgather failures with coll ml<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-06 13:55:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14990.php">Rolf vandeVaart: "[OMPI devel] Strange intercomm_create, spawn, spawn_multiple hang on trunk"</a>
<li><strong>Previous message:</strong> <a href="14988.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15003.php">Rolf vandeVaart: "Re: [OMPI devel] iallgather failures with coll ml"</a>
<li><strong>Reply:</strong> <a href="15003.php">Rolf vandeVaart: "Re: [OMPI devel] iallgather failures with coll ml"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On the trunk, I am seeing failures of the ibm tests iallgather and iallgather_in_place.  Is this a known issue?
<br>
<p>$ mpirun --mca btl self,sm,tcp --mca coll ml,basic,libnbc --host drossetti-ivy0,drossetti-ivy0,drossetti-ivy1,drossetti-ivy1 -np 4 iallgather
<br>
[**ERROR**]: MPI_COMM_WORLD rank 0, file iallgather.c:77:
<br>
bad answer (0) at index 1 of 4 (should be 1)
<br>
[**ERROR**]: MPI_COMM_WORLD rank 1, file iallgather.c:77:
<br>
bad answer (0) at index 1 of 4 (should be 1)
<br>
<p>Interestingly, there is an MCA param to disable it in coll ml which allows the test to pass.
<br>
<p>$ mpirun --mca coll_ml_disable_allgather 1 --mca btl self,sm,tcp --mca coll ml,basic,libnbc --host drossetti-ivy0,drossetti-ivy0,drossetti-ivy1,drossetti-ivy1 -np 4 iallgather
<br>
$ echo $?
<br>
0
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14989/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14990.php">Rolf vandeVaart: "[OMPI devel] Strange intercomm_create, spawn, spawn_multiple hang on trunk"</a>
<li><strong>Previous message:</strong> <a href="14988.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15003.php">Rolf vandeVaart: "Re: [OMPI devel] iallgather failures with coll ml"</a>
<li><strong>Reply:</strong> <a href="15003.php">Rolf vandeVaart: "Re: [OMPI devel] iallgather failures with coll ml"</a>
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
