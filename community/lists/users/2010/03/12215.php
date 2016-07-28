<?
$subject_val = "[OMPI users] Limit to number of processes on one node?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 11:51:24 2010" -->
<!-- isoreceived="20100303165124" -->
<!-- sent="Wed, 03 Mar 2010 11:51:19 -0500" -->
<!-- isosent="20100303165119" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="[OMPI users] Limit to number of processes on one node?" -->
<!-- id="4B8E9387.6040405_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Limit to number of processes on one node?<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 11:51:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12216.php">Ralph Castain: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Previous message:</strong> <a href="12214.php">Prentice Bisbal: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12216.php">Ralph Castain: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Reply:</strong> <a href="12216.php">Ralph Castain: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Reply:</strong> <a href="12218.php">Eugene Loh: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there a limit on how many MPI processes can run on a single host?
<br>
<p>I have a user trying to test his code on the command-line on a single
<br>
host before running it on our cluster like so:
<br>
<p>mpirun -np X foo
<br>
<p>When he tries to run it on large number of process (X = 256, 512), the
<br>
program fails, and I can reproduce this with a simple &quot;Hello, World&quot;
<br>
program:
<br>
<p>$ mpirun -np 256 mpihello
<br>
mpirun noticed that job rank 0 with PID 0 on node juno.sns.ias.edu
<br>
exited on signal 15 (Terminated).
<br>
252 additional processes aborted (not shown)
<br>
<p>I've done some testing and found that X &lt;155 for this program to work.
<br>
Is this a bug, part of the standard, or design/implementation decision?
<br>
<p><p><pre>
-- 
Prentice Bisbal
Linux Software Support Specialist/System Administrator
School of Natural Sciences
Institute for Advanced Study
Princeton, NJ
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12216.php">Ralph Castain: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Previous message:</strong> <a href="12214.php">Prentice Bisbal: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12216.php">Ralph Castain: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Reply:</strong> <a href="12216.php">Ralph Castain: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Reply:</strong> <a href="12218.php">Eugene Loh: "Re: [OMPI users] Limit to number of processes on one node?"</a>
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
