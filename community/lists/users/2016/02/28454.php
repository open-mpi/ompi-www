<?
$subject_val = "[OMPI users] QP creation failure on iWARP adapter";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  5 03:38:10 2016" -->
<!-- isoreceived="20160205083810" -->
<!-- sent="Fri, 5 Feb 2016 03:38:09 -0500" -->
<!-- isosent="20160205083809" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI users] QP creation failure on iWARP adapter" -->
<!-- id="CAHXxYDiKi6kqDiWNocsQWRZqbno7QpAcpWhnU2PES5XuQrgeOw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] QP creation failure on iWARP adapter<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-05 03:38:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28455.php">Steve Wise: "Re: [OMPI users] QP creation failure on iWARP adapter"</a>
<li><strong>Previous message:</strong> <a href="28453.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28455.php">Steve Wise: "Re: [OMPI users] QP creation failure on iWARP adapter"</a>
<li><strong>Reply:</strong> <a href="28455.php">Steve Wise: "Re: [OMPI users] QP creation failure on iWARP adapter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all
<br>
<p>This is a slightly off-topic post, and hopefully people won't mind
<br>
helping me out.
<br>
<p>I have a very simple setup with two PCs, both with identical Chelsio
<br>
10GE iWARP adapter connected back-to-back.
<br>
<p>With this setup, the TCP channel works fine (with MPI or otherwise).
<br>
But somehow, using RDMA semantics, the QP creation fails. This has
<br>
nothing to do with OpenMPI per se; using standard benchmarking tools
<br>
such as qperf also shows the same behavior.
<br>
<p>I have set both the hard and soft limit on locked memory to
<br>
'unlimited' and have rebooted both PCs and have verified that 'ulimit
<br>
-l' shows 'unlimited' on both nodes. Yet, the QP creation fails. In
<br>
OpenMPI this shows up if I try to use the openib BTL. The OS (on both
<br>
nodes) is CentOS 7, if that matters.
<br>
<p>What am I doing wrong?
<br>
<p>Thanks a lot for any advice.
<br>
<p>Durga
<br>
<p>Life is complex. It has real and imaginary parts.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28455.php">Steve Wise: "Re: [OMPI users] QP creation failure on iWARP adapter"</a>
<li><strong>Previous message:</strong> <a href="28453.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28455.php">Steve Wise: "Re: [OMPI users] QP creation failure on iWARP adapter"</a>
<li><strong>Reply:</strong> <a href="28455.php">Steve Wise: "Re: [OMPI users] QP creation failure on iWARP adapter"</a>
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
