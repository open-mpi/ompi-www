<?
$subject_val = "[OMPI users] Weird error with OMPI 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 11:53:14 2014" -->
<!-- isoreceived="20140829155314" -->
<!-- sent="Fri, 29 Aug 2014 11:53:13 -0400" -->
<!-- isosent="20140829155313" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="[OMPI users] Weird error with OMPI 1.6.3" -->
<!-- id="5400A1E9.6050308_at_calculquebec.ca" -->
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
<strong>Subject:</strong> [OMPI users] Weird error with OMPI 1.6.3<br>
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-29 11:53:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25190.php">Maxime Boissonneault: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="25188.php">Shamis, Pavel: "Re: [OMPI users] open shmem optimization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25190.php">Maxime Boissonneault: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="25190.php">Maxime Boissonneault: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am having a weird error with OpenMPI 1.6.3. I run a non-MPI command 
<br>
just to exclude any code error. Here is the error I get  (I run with set 
<br>
-x to get the exact command that are run).
<br>
<p>++ mpiexec -npersocket 1 ls -la
<br>
--------------------------------------------------------------------------
<br>
The requested stdin target is out of range for this job - it points
<br>
to a process rank that is greater than the number of processes in the
<br>
job.
<br>
<p>Specified target: 0
<br>
Number of procs: 0
<br>
<p>This could be caused by specifying a negative number for the stdin
<br>
target, or by mistyping the desired rank. Remember that MPI ranks begin
<br>
with 0, not 1.
<br>
<p>Please correct the cmd line and try again.
<br>
<p>How can I debug that ?
<br>
<p>Thanks,
<br>
<p><pre>
-- 
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25190.php">Maxime Boissonneault: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="25188.php">Shamis, Pavel: "Re: [OMPI users] open shmem optimization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25190.php">Maxime Boissonneault: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="25190.php">Maxime Boissonneault: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
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
