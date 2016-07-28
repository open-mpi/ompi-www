<?
$subject_val = "[OMPI users] ompi-checkpoint  --term";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 31 18:39:23 2010" -->
<!-- isoreceived="20100331223923" -->
<!-- sent="Wed, 31 Mar 2010 17:39:17 -0500" -->
<!-- isosent="20100331223917" -->
<!-- name="Addepalli, Srirangam V" -->
<!-- email="srirangam.v.addepalli_at_[hidden]" -->
<!-- subject="[OMPI users] ompi-checkpoint  --term" -->
<!-- id="15F71B097D330B42AA606A4AD8CA9640D4F47A24D7_at_CRATUS.ttu.edu" -->
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
<strong>Subject:</strong> [OMPI users] ompi-checkpoint  --term<br>
<strong>From:</strong> Addepalli, Srirangam V (<em>srirangam.v.addepalli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-31 18:39:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12507.php">Fernando Lemos: "Re: [OMPI users] ompi-checkpoint --term"</a>
<li><strong>Previous message:</strong> <a href="12505.php">David Singleton: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12507.php">Fernando Lemos: "Re: [OMPI users] ompi-checkpoint --term"</a>
<li><strong>Reply:</strong> <a href="12507.php">Fernando Lemos: "Re: [OMPI users] ompi-checkpoint --term"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All.
<br>
I am trying to checkpoint a mpi application that has been started using the follwong mpirun command
<br>
<p>mpirun -am ft-enable-cr -np 8 pw.x  &lt; Ge46.pw.in &gt; Ge46.ph.out
<br>
<p>ompi-checkpoint 31396 ( Works) How ever when i try to terminate the process
<br>
<p>ompi-checkpoint  --term 31396  it never finishes.  How do i bebug this issue. 
<br>
<p>Rangam
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12507.php">Fernando Lemos: "Re: [OMPI users] ompi-checkpoint --term"</a>
<li><strong>Previous message:</strong> <a href="12505.php">David Singleton: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12507.php">Fernando Lemos: "Re: [OMPI users] ompi-checkpoint --term"</a>
<li><strong>Reply:</strong> <a href="12507.php">Fernando Lemos: "Re: [OMPI users] ompi-checkpoint --term"</a>
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
