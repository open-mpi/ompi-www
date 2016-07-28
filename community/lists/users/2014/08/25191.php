<?
$subject_val = "Re: [OMPI users] Weird error with OMPI 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 12:32:27 2014" -->
<!-- isoreceived="20140829163227" -->
<!-- sent="Fri, 29 Aug 2014 09:31:39 -0700" -->
<!-- isosent="20140829163139" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Weird error with OMPI 1.6.3" -->
<!-- id="959EC28F-DD58-403C-8FDF-32A655391907_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5400A653.503_at_calculquebec.ca" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-29 12:31:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25192.php">Maxime Boissonneault: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="25190.php">Maxime Boissonneault: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="25190.php">Maxime Boissonneault: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25192.php">Maxime Boissonneault: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="25192.php">Maxime Boissonneault: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, it isn't - but we aren't really maintaining the 1.6 series any more. You might try updating to 1.6.5 and see if it remains there
<br>
<p>On Aug 29, 2014, at 9:12 AM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It looks like
</span><br>
<span class="quotelev1">&gt; -npersocket 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cannot be used alone. If I do
</span><br>
<span class="quotelev1">&gt; mpiexec -npernode 2 -npersocket 1 ls -la
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then I get no error message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this expected behavior ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maxime
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 2014-08-29 11:53, Maxime Boissonneault a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I am having a weird error with OpenMPI 1.6.3. I run a non-MPI command just to exclude any code error. Here is the error I get (I run with set -x to get the exact command that are run).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ++ mpiexec -npersocket 1 ls -la
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; The requested stdin target is out of range for this job - it points
</span><br>
<span class="quotelev2">&gt;&gt; to a process rank that is greater than the number of processes in the
</span><br>
<span class="quotelev2">&gt;&gt; job.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Specified target: 0
</span><br>
<span class="quotelev2">&gt;&gt; Number of procs: 0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This could be caused by specifying a negative number for the stdin
</span><br>
<span class="quotelev2">&gt;&gt; target, or by mistyping the desired rank. Remember that MPI ranks begin
</span><br>
<span class="quotelev2">&gt;&gt; with 0, not 1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please correct the cmd line and try again.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How can I debug that ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev1">&gt; Ph. D. en physique
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25190.php">http://www.open-mpi.org/community/lists/users/2014/08/25190.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25191/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25192.php">Maxime Boissonneault: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="25190.php">Maxime Boissonneault: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="25190.php">Maxime Boissonneault: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25192.php">Maxime Boissonneault: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="25192.php">Maxime Boissonneault: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
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
