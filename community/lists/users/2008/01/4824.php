<?
$subject_val = "[OMPI users] Occasional mpirun hang on completion";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 13 09:55:12 2008" -->
<!-- isoreceived="20080113145512" -->
<!-- sent="Sun, 13 Jan 2008 09:54:47 -0500" -->
<!-- isosent="20080113145447" -->
<!-- name="Barry Rountree" -->
<!-- email="rountree_at_[hidden]" -->
<!-- subject="[OMPI users] Occasional mpirun hang on completion" -->
<!-- id="20080113145447.GA16176_at_eponymous" -->
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
<strong>Subject:</strong> [OMPI users] Occasional mpirun hang on completion<br>
<strong>From:</strong> Barry Rountree (<em>rountree_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-13 09:54:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4825.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Previous message:</strong> <a href="4823.php">Brock Palen: "Re: [OMPI users] OpenMP + OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4825.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Reply:</strong> <a href="4825.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>The following command
<br>
<p>mpirun -np 2 -hostfile ~/hostfile uptime
<br>
<p>will occasionally hang after completing.  The expected output appears on
<br>
the screen, but mpirun needs a SIGKILL to return to the console.  
<br>
<p>This has been verified with OpenMPI v1.2.4 compiled with both icc 9.1
<br>
20061101 (aka 9.1.045) and gcc 4.1.0 20060304 (aka Red Hat 4.1.0-3).  I
<br>
have also tried earlier versions of OpenMPI and found the same bug
<br>
(1.1.2 and 1.2.2).
<br>
<p>Using  -verbose didn't provide any additional output.  I'm happy to help
<br>
tracking down whatever is causing this.
<br>
<p>Many thanks,
<br>
<p>Barry Rountree
<br>
Ph.D. Candidate, Computer Science
<br>
University of Georgia
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4825.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Previous message:</strong> <a href="4823.php">Brock Palen: "Re: [OMPI users] OpenMP + OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4825.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Reply:</strong> <a href="4825.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
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
