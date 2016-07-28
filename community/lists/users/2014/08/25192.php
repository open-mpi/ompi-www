<?
$subject_val = "Re: [OMPI users] Weird error with OMPI 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 12:40:37 2014" -->
<!-- isoreceived="20140829164037" -->
<!-- sent="Fri, 29 Aug 2014 12:40:37 -0400" -->
<!-- isosent="20140829164037" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Weird error with OMPI 1.6.3" -->
<!-- id="5400AD05.1050509_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="959EC28F-DD58-403C-8FDF-32A655391907_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-08-29 12:40:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25193.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25191.php">Ralph Castain: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="25191.php">Ralph Castain: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25194.php">Ralph Castain: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="25194.php">Ralph Castain: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is still there in 1.6.5 (we also have it).
<br>
<p>I am just wondering if there is something wrong in our installation that 
<br>
makes MPI unabled to detect that there are two sockets per node if we do 
<br>
not include a npernode directive.
<br>
<p>Maxime
<br>
<p>Le 2014-08-29 12:31, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; No, it isn't - but we aren't really maintaining the 1.6 series any 
</span><br>
<span class="quotelev1">&gt; more. You might try updating to 1.6.5 and see if it remains there
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 29, 2014, at 9:12 AM, Maxime Boissonneault 
</span><br>
<span class="quotelev1">&gt; &lt;maxime.boissonneault_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:maxime.boissonneault_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like
</span><br>
<span class="quotelev2">&gt;&gt; -npersocket 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cannot be used alone. If I do
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -npernode 2 -npersocket 1 ls -la
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; then I get no error message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this expected behavior ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maxime
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 2014-08-29 11:53, Maxime Boissonneault a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am having a weird error with OpenMPI 1.6.3. I run a non-MPI 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command just to exclude any code error. Here is the error I get (I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run with set -x to get the exact command that are run).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ++ mpiexec -npersocket 1 ls -la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The requested stdin target is out of range for this job - it points
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to a process rank that is greater than the number of processes in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Specified target: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Number of procs: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This could be caused by specifying a negative number for the stdin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; target, or by mistyping the desired rank. Remember that MPI ranks begin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with 0, not 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please correct the cmd line and try again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How can I debug that ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev2">&gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this 
</span><br>
<span class="quotelev2">&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2014/08/25190.php">http://www.open-mpi.org/community/lists/users/2014/08/25190.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25191.php">http://www.open-mpi.org/community/lists/users/2014/08/25191.php</a>
</span><br>
<p><p><pre>
-- 
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25192/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25193.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25191.php">Ralph Castain: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="25191.php">Ralph Castain: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25194.php">Ralph Castain: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="25194.php">Ralph Castain: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
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
