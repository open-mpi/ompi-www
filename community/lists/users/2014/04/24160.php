<?
$subject_val = "[OMPI users] Question on suspending/resuming MPI processes with SIGSTOP";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 15:16:05 2014" -->
<!-- isoreceived="20140411191605" -->
<!-- sent="Fri, 11 Apr 2014 21:16:00 +0200" -->
<!-- isosent="20140411191600" -->
<!-- name="Frank Wein" -->
<!-- email="mcsmurf_at_[hidden]" -->
<!-- subject="[OMPI users] Question on suspending/resuming MPI processes with SIGSTOP" -->
<!-- id="53483F70.60002_at_mcsmurf.de" -->
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
<strong>Subject:</strong> [OMPI users] Question on suspending/resuming MPI processes with SIGSTOP<br>
<strong>From:</strong> Frank Wein (<em>mcsmurf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-11 15:16:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24161.php">Frank Wein: "Re: [OMPI users] Question on suspending/resuming MPI processes with SIGSTOP"</a>
<li><strong>Previous message:</strong> <a href="24159.php">Anthony Alba: "[OMPI users] OpenMPI PMI2 with SLURM 14.03 not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24161.php">Frank Wein: "Re: [OMPI users] Question on suspending/resuming MPI processes with SIGSTOP"</a>
<li><strong>Reply:</strong> <a href="24161.php">Frank Wein: "Re: [OMPI users] Question on suspending/resuming MPI processes with SIGSTOP"</a>
<li><strong>Reply:</strong> <a href="24162.php">Ralph Castain: "Re: [OMPI users] Question on suspending/resuming MPI processes with SIGSTOP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I've got a question on suspending/resuming an process started with
<br>
&quot;mpirun&quot;, I've already found the FAQ entry on this
<br>
<a href="http://www.open-mpi.de/faq/?category=running#suspend-resume">http://www.open-mpi.de/faq/?category=running#suspend-resume</a> but I've
<br>
still got a question on this. Basically for now let's assume I'm running
<br>
all MPI processes on one host only with one multi-core CPU (so I could
<br>
directly send SIGSTOP to other processes if I want to). What I wonder
<br>
about is the following: I want to start multiple (let's say four)
<br>
instances of my program with &quot;mpirun -np 4 ./mybinary&quot; and at some point
<br>
during the program execution I want to suspend two of those four
<br>
processes, those two processes are waiting at an MPI_Barrier() at this
<br>
point. The goal of that is to suspend execution so that those processes
<br>
don't use the CPU at all while they are suspended (that's not the case
<br>
with MPI_Barrier as far as I understand this). So now my question
<br>
basically is: Will it work when I send SIGSTOP signal from my MPI rank 0
<br>
process to these two processes while they are waiting at an MPI_Barrier
<br>
and then those two processes won't use the CPU anymore? Later I want to
<br>
resume the processes with SIGCONT when the other two processes also
<br>
arrived at this MPI_Barrier. Performance of the barrier does not matter
<br>
here, what matters for me is that those suspended processes don't cause
<br>
any CPU usage. I never used SIGSTOP signal so far, so I'm not sure if
<br>
this will work. And before I start coding the logic for this into my
<br>
program, I thought I'll ask here first if this will work at all :).
<br>
<p>Frank
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24161.php">Frank Wein: "Re: [OMPI users] Question on suspending/resuming MPI processes with SIGSTOP"</a>
<li><strong>Previous message:</strong> <a href="24159.php">Anthony Alba: "[OMPI users] OpenMPI PMI2 with SLURM 14.03 not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24161.php">Frank Wein: "Re: [OMPI users] Question on suspending/resuming MPI processes with SIGSTOP"</a>
<li><strong>Reply:</strong> <a href="24161.php">Frank Wein: "Re: [OMPI users] Question on suspending/resuming MPI processes with SIGSTOP"</a>
<li><strong>Reply:</strong> <a href="24162.php">Ralph Castain: "Re: [OMPI users] Question on suspending/resuming MPI processes with SIGSTOP"</a>
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
