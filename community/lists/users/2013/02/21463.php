<?
$subject_val = "Re: [OMPI users] MPI_Abort under slurm";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 26 12:08:41 2013" -->
<!-- isoreceived="20130226170841" -->
<!-- sent="Tue, 26 Feb 2013 18:08:16 +0100" -->
<!-- isosent="20130226170816" -->
<!-- name="Bokassa" -->
<!-- email="bokassa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Abort under slurm" -->
<!-- id="CAEgXUHmwULz2STXVkvDnNgfu7ezCKS+tC_hV8thrT9pFpBMdvw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Bokassa (<em>bokassa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-26 12:08:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21464.php">Ralph Castain: "Re: [OMPI users] MPI_Abort under slurm"</a>
<li><strong>Previous message:</strong> <a href="21462.php">Simon DeDeo: "[OMPI users] rcu_sched stalls on CPU"</a>
<li><strong>In reply to:</strong> <a href="21460.php">Bokassa: "[OMPI users] MPI_Abort under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21464.php">Ralph Castain: "Re: [OMPI users] MPI_Abort under slurm"</a>
<li><strong>Reply:</strong> <a href="21464.php">Ralph Castain: "Re: [OMPI users] MPI_Abort under slurm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, thanks for your answer. I am using:
<br>
<p><span class="quotelev1">&gt;mpirun --version
</span><br>
mpirun (Open MPI) 1.5.4
<br>
<p>Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>and slurm 2.5.
<br>
<p>Should I try to upgrade to 1.6.5?
<br>
<p><p><p>/David/Bigagli
<br>
www.davidbigagli.com
<br>
<p><p>On Mon, Feb 25, 2013 at 7:38 PM, Bokassa &lt;bokassa_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;    I noticed that MPI_Abort() does not abort the tasks if the mpi program
</span><br>
<span class="quotelev1">&gt; is started using srun.
</span><br>
<span class="quotelev1">&gt; I call MPI_Abort() from rank 0, this process exit, but the other ranks
</span><br>
<span class="quotelev1">&gt; keep running or waiting for IO
</span><br>
<span class="quotelev1">&gt; on the other nodes. The only way to kill the job is to use scancel.
</span><br>
<span class="quotelev1">&gt; However if I use mpirun under a slurm allocation then MPI_Abort() works as
</span><br>
<span class="quotelev1">&gt; expected aborting
</span><br>
<span class="quotelev1">&gt; all tasks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this a known issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21463/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21464.php">Ralph Castain: "Re: [OMPI users] MPI_Abort under slurm"</a>
<li><strong>Previous message:</strong> <a href="21462.php">Simon DeDeo: "[OMPI users] rcu_sched stalls on CPU"</a>
<li><strong>In reply to:</strong> <a href="21460.php">Bokassa: "[OMPI users] MPI_Abort under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21464.php">Ralph Castain: "Re: [OMPI users] MPI_Abort under slurm"</a>
<li><strong>Reply:</strong> <a href="21464.php">Ralph Castain: "Re: [OMPI users] MPI_Abort under slurm"</a>
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
