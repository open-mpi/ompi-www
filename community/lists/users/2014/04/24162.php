<?
$subject_val = "Re: [OMPI users] Question on suspending/resuming MPI processes with SIGSTOP";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 15:52:07 2014" -->
<!-- isoreceived="20140411195207" -->
<!-- sent="Fri, 11 Apr 2014 12:51:06 -0700" -->
<!-- isosent="20140411195106" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on suspending/resuming MPI processes with SIGSTOP" -->
<!-- id="CE47D791-3D40-442B-B89B-3C468E39ABA9_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53483F70.60002_at_mcsmurf.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on suspending/resuming MPI processes with SIGSTOP<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-11 15:51:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24163.php">Anthony Alba: "Re: [OMPI users] OpenMPI PMI2 with SLURM 14.03 not working [SOLVED]"</a>
<li><strong>Previous message:</strong> <a href="24161.php">Frank Wein: "Re: [OMPI users] Question on suspending/resuming MPI processes with SIGSTOP"</a>
<li><strong>In reply to:</strong> <a href="24160.php">Frank Wein: "[OMPI users] Question on suspending/resuming MPI processes with SIGSTOP"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid our suspend/resume support only allows the signal to be applied to *all* procs, not selectively to some. For that matter, I'm unaware of any MPI-level API for hitting a proc with a signal - so I'm not sure how you would programmatically have rank0 suspend some other ranks.
<br>
<p>On Apr 11, 2014, at 12:16 PM, Frank Wein &lt;mcsmurf_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I've got a question on suspending/resuming an process started with
</span><br>
<span class="quotelev1">&gt; &quot;mpirun&quot;, I've already found the FAQ entry on this
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.de/faq/?category=running#suspend-resume">http://www.open-mpi.de/faq/?category=running#suspend-resume</a> but I've
</span><br>
<span class="quotelev1">&gt; still got a question on this. Basically for now let's assume I'm running
</span><br>
<span class="quotelev1">&gt; all MPI processes on one host only with one multi-core CPU (so I could
</span><br>
<span class="quotelev1">&gt; directly send SIGSTOP to other processes if I want to). What I wonder
</span><br>
<span class="quotelev1">&gt; about is the following: I want to start multiple (let's say four)
</span><br>
<span class="quotelev1">&gt; instances of my program with &quot;mpirun -np 4 ./mybinary&quot; and at some point
</span><br>
<span class="quotelev1">&gt; during the program execution I want to suspend two of those four
</span><br>
<span class="quotelev1">&gt; processes, those two processes are waiting at an MPI_Barrier() at this
</span><br>
<span class="quotelev1">&gt; point. The goal of that is to suspend execution so that those processes
</span><br>
<span class="quotelev1">&gt; don't use the CPU at all while they are suspended (that's not the case
</span><br>
<span class="quotelev1">&gt; with MPI_Barrier as far as I understand this). So now my question
</span><br>
<span class="quotelev1">&gt; basically is: Will it work when I send SIGSTOP signal from my MPI rank 0
</span><br>
<span class="quotelev1">&gt; process to these two processes while they are waiting at an MPI_Barrier
</span><br>
<span class="quotelev1">&gt; and then those two processes won't use the CPU anymore? Later I want to
</span><br>
<span class="quotelev1">&gt; resume the processes with SIGCONT when the other two processes also
</span><br>
<span class="quotelev1">&gt; arrived at this MPI_Barrier. Performance of the barrier does not matter
</span><br>
<span class="quotelev1">&gt; here, what matters for me is that those suspended processes don't cause
</span><br>
<span class="quotelev1">&gt; any CPU usage. I never used SIGSTOP signal so far, so I'm not sure if
</span><br>
<span class="quotelev1">&gt; this will work. And before I start coding the logic for this into my
</span><br>
<span class="quotelev1">&gt; program, I thought I'll ask here first if this will work at all :).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Frank
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
<li><strong>Next message:</strong> <a href="24163.php">Anthony Alba: "Re: [OMPI users] OpenMPI PMI2 with SLURM 14.03 not working [SOLVED]"</a>
<li><strong>Previous message:</strong> <a href="24161.php">Frank Wein: "Re: [OMPI users] Question on suspending/resuming MPI processes with SIGSTOP"</a>
<li><strong>In reply to:</strong> <a href="24160.php">Frank Wein: "[OMPI users] Question on suspending/resuming MPI processes with SIGSTOP"</a>
<!-- nextthread="start" -->
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
