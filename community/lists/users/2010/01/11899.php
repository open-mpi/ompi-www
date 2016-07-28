<?
$subject_val = "Re: [OMPI users] How to start MPI_Spawn child processes early?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 27 18:07:51 2010" -->
<!-- isoreceived="20100127230751" -->
<!-- sent="Wed, 27 Jan 2010 16:07:43 -0700" -->
<!-- isosent="20100127230743" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to start MPI_Spawn child processes early?" -->
<!-- id="7B9FEAF2-BEB2-4C19-B9E7-4E3D588BA22D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7679_1264630173_o0RM9Rar016238_4B60BD1D.7070401_at_cs.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to start MPI_Spawn child processes early?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-27 18:07:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11900.php">Richard Treumann: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<li><strong>Previous message:</strong> <a href="11898.php">Jaison Paul: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<li><strong>In reply to:</strong> <a href="11898.php">Jaison Paul: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11900.php">Richard Treumann: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<li><strong>Reply:</strong> <a href="11900.php">Richard Treumann: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't imagine how you would do that - only thing I can think of would be to start your &quot;child&quot; processes as one job, then start your &quot;parent&quot; processes and have them do an MPI_Comm_join with the child job.
<br>
<p>That said, I can't imagine that comm_spawn is -that- slow to make much difference to an HPC application! At least, not in anything I've measured.
<br>
<p>On Jan 27, 2010, at 3:24 PM, Jaison Paul wrote:
<br>
<p><span class="quotelev1">&gt; Hi, I am just reposting my early query once again. If anyone one can give some hint, that would be great.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, Jaison
</span><br>
<span class="quotelev1">&gt; ANU
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jaison Paul wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to use MPI for scientific High Performance (hpc) applications. I use MPI_Spawn to create child processes. Is there a way to start child processes early than the parent process, using MPI_Spawn?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I want this because, my experiments showed that the time to spawn the children by parent is too long for HPC apps which slows down the whole process. If the children are ready when parent application process seeks for them, that initial delay can be avoided. Is there a way to do that?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jaison
</span><br>
<span class="quotelev2">&gt;&gt; Australian National University
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11900.php">Richard Treumann: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<li><strong>Previous message:</strong> <a href="11898.php">Jaison Paul: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<li><strong>In reply to:</strong> <a href="11898.php">Jaison Paul: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11900.php">Richard Treumann: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<li><strong>Reply:</strong> <a href="11900.php">Richard Treumann: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
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
