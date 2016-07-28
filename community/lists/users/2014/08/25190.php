<?
$subject_val = "Re: [OMPI users] Weird error with OMPI 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 12:12:04 2014" -->
<!-- isoreceived="20140829161204" -->
<!-- sent="Fri, 29 Aug 2014 12:12:03 -0400" -->
<!-- isosent="20140829161203" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Weird error with OMPI 1.6.3" -->
<!-- id="5400A653.503_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5400A1E9.6050308_at_calculquebec.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Weird error with OMPI 1.6.3<br>
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-29 12:12:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25191.php">Ralph Castain: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="25189.php">Maxime Boissonneault: "[OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="25189.php">Maxime Boissonneault: "[OMPI users] Weird error with OMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25191.php">Ralph Castain: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="25191.php">Ralph Castain: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like
<br>
-npersocket 1
<br>
<p>cannot be used alone. If I do
<br>
mpiexec -npernode 2 -npersocket 1 ls -la
<br>
<p>then I get no error message.
<br>
<p>Is this expected behavior ?
<br>
<p>Maxime
<br>
<p><p>Le 2014-08-29 11:53, Maxime Boissonneault a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am having a weird error with OpenMPI 1.6.3. I run a non-MPI command 
</span><br>
<span class="quotelev1">&gt; just to exclude any code error. Here is the error I get (I run with 
</span><br>
<span class="quotelev1">&gt; set -x to get the exact command that are run).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ++ mpiexec -npersocket 1 ls -la
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The requested stdin target is out of range for this job - it points
</span><br>
<span class="quotelev1">&gt; to a process rank that is greater than the number of processes in the
</span><br>
<span class="quotelev1">&gt; job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specified target: 0
</span><br>
<span class="quotelev1">&gt; Number of procs: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This could be caused by specifying a negative number for the stdin
</span><br>
<span class="quotelev1">&gt; target, or by mistyping the desired rank. Remember that MPI ranks begin
</span><br>
<span class="quotelev1">&gt; with 0, not 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please correct the cmd line and try again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How can I debug that ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="25191.php">Ralph Castain: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="25189.php">Maxime Boissonneault: "[OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="25189.php">Maxime Boissonneault: "[OMPI users] Weird error with OMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25191.php">Ralph Castain: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="25191.php">Ralph Castain: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
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
