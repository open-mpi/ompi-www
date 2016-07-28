<?
$subject_val = "Re: [OMPI users] MPI_Abort under slurm";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 26 14:09:38 2013" -->
<!-- isoreceived="20130226190938" -->
<!-- sent="Tue, 26 Feb 2013 11:09:31 -0800" -->
<!-- isosent="20130226190931" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Abort under slurm" -->
<!-- id="9AE5B724-F753-4122-8E66-A73566E7E1C9_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEgXUHmwULz2STXVkvDnNgfu7ezCKS+tC_hV8thrT9pFpBMdvw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-02-26 14:09:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21465.php">Ralph Castain: "[OMPI users] Programming with Big Data in R"</a>
<li><strong>Previous message:</strong> <a href="21463.php">Bokassa: "Re: [OMPI users] MPI_Abort under slurm"</a>
<li><strong>In reply to:</strong> <a href="21463.php">Bokassa: "Re: [OMPI users] MPI_Abort under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21478.php">Bokassa: "Re: [OMPI users] MPI_Abort under slurm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It should work - check the following srun option:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-K, --kill-on-bad-exit[=0|1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Controls whether or not to terminate a job if any task exits with a non-zero exit code. If this option is not specified, the default action  will  be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;based  upon  the  SLURM  configuration parameter of KillOnBadExit. If this option is specified, it will take precedence over KillOnBadExit. An option
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argument of zero will not terminate the job. A non-zero argument or no argument will terminate the job.  Note: This option takes precedence over  the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-W, --wait option to terminate the job immediately if a task exits with a non-zero exit code.
<br>
<p>My guess is that your configuration parameter for KillOnBadExit has not been specified, or you aborted with a zero status.
<br>
<p><p>On Feb 26, 2013, at 9:08 AM, Bokassa &lt;bokassa_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph, thanks for your answer. I am using:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;mpirun --version
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.5.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and slurm 2.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should I try to upgrade to 1.6.5?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /David/Bigagli
</span><br>
<span class="quotelev1">&gt; www.davidbigagli.com
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 25, 2013 at 7:38 PM, Bokassa &lt;bokassa_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi, 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, David
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21464/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21465.php">Ralph Castain: "[OMPI users] Programming with Big Data in R"</a>
<li><strong>Previous message:</strong> <a href="21463.php">Bokassa: "Re: [OMPI users] MPI_Abort under slurm"</a>
<li><strong>In reply to:</strong> <a href="21463.php">Bokassa: "Re: [OMPI users] MPI_Abort under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21478.php">Bokassa: "Re: [OMPI users] MPI_Abort under slurm"</a>
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
