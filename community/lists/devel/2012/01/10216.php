<?
$subject_val = "[OMPI devel] GPUDirect v1 issues";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 17 08:50:26 2012" -->
<!-- isoreceived="20120117135026" -->
<!-- sent="Tue, 17 Jan 2012 14:50:21 +0100" -->
<!-- isosent="20120117135021" -->
<!-- name="Sebastian Rinke" -->
<!-- email="s.rinke_at_[hidden]" -->
<!-- subject="[OMPI devel] GPUDirect v1 issues" -->
<!-- id="1C765AD9-82A1-4B90-A7CA-0893A1654CF6_at_grs-sim.de" -->
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
<strong>Subject:</strong> [OMPI devel] GPUDirect v1 issues<br>
<strong>From:</strong> Sebastian Rinke (<em>s.rinke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-17 08:50:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10217.php">Rolf vandeVaart: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Previous message:</strong> <a href="10215.php">Y.MATSUMOTO: "[OMPI devel] Gather(linear_sync) is truncated using derived data type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10217.php">Rolf vandeVaart: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Reply:</strong> <a href="10217.php">Rolf vandeVaart: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Maybe reply:</strong> <a href="10219.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Maybe reply:</strong> <a href="10239.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I'm using GPUDirect v1 with Open MPI 1.4.3 and experience blocking MPI_SEND/RECV to block forever.
<br>
<p>For two subsequent MPI_RECV, it hangs if the recv buffer pointer of the second recv points to somewhere, i.e. not at the beginning, 
<br>
in the recv buffer (previously allocated with cudaMallocHost()).
<br>
<p>I tried the same with MVAPICH2 and did not see the problem.
<br>
<p>Does anybody know about issues with GPUDirect v1 using Open MPI?
<br>
<p>Thanks for your help,
<br>
Sebastian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10217.php">Rolf vandeVaart: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Previous message:</strong> <a href="10215.php">Y.MATSUMOTO: "[OMPI devel] Gather(linear_sync) is truncated using derived data type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10217.php">Rolf vandeVaart: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Reply:</strong> <a href="10217.php">Rolf vandeVaart: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Maybe reply:</strong> <a href="10219.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Maybe reply:</strong> <a href="10239.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
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
