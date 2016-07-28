<?
$subject_val = "Re: [OMPI users] MPI_Abort under slurm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 25 15:29:47 2013" -->
<!-- isoreceived="20130225202947" -->
<!-- sent="Mon, 25 Feb 2013 12:29:40 -0800" -->
<!-- isosent="20130225202940" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Abort under slurm" -->
<!-- id="4F9EA838-B787-4C99-BEA8-F9DB5411C46F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEgXUH=r8ap5SUJOXWWN69Yp+5idVKx-i4mgXXn=HNZx8VHv4A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Abort under slurm<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-25 15:29:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21462.php">Simon DeDeo: "[OMPI users] rcu_sched stalls on CPU"</a>
<li><strong>Previous message:</strong> <a href="21460.php">Bokassa: "[OMPI users] MPI_Abort under slurm"</a>
<li><strong>In reply to:</strong> <a href="21460.php">Bokassa: "[OMPI users] MPI_Abort under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21463.php">Bokassa: "Re: [OMPI users] MPI_Abort under slurm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 25, 2013, at 10:38 AM, Bokassa &lt;bokassa_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt;    I noticed that MPI_Abort() does not abort the tasks if the mpi program is started using srun.
</span><br>
<span class="quotelev1">&gt; I call MPI_Abort() from rank 0, this process exit, but the other ranks keep running or waiting for IO 
</span><br>
<span class="quotelev1">&gt; on the other nodes. The only way to kill the job is to use scancel. 
</span><br>
<span class="quotelev1">&gt; However if I use mpirun under a slurm allocation then MPI_Abort() works as expected aborting 
</span><br>
<span class="quotelev1">&gt; all tasks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this a known issue?
</span><br>
<p>What version of OMPI are you using? Slurm should detect the process failure and kill the job, unless it was configured not to do so.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, David
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
<li><strong>Next message:</strong> <a href="21462.php">Simon DeDeo: "[OMPI users] rcu_sched stalls on CPU"</a>
<li><strong>Previous message:</strong> <a href="21460.php">Bokassa: "[OMPI users] MPI_Abort under slurm"</a>
<li><strong>In reply to:</strong> <a href="21460.php">Bokassa: "[OMPI users] MPI_Abort under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21463.php">Bokassa: "Re: [OMPI users] MPI_Abort under slurm"</a>
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
