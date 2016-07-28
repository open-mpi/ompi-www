<?
$subject_val = "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel	compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 21:49:57 2009" -->
<!-- isoreceived="20090724014957" -->
<!-- sent="Thu, 23 Jul 2009 21:49:33 -0400" -->
<!-- isosent="20090724014933" -->
<!-- name="Sims, James S. Dr." -->
<!-- email="james.sims_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel	compiler" -->
<!-- id="D7A0423E5E193F40BE6E94126930C49307852451AB_at_MBCLUSTER.xchange.nist.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B51715F7-EC1D-4E93-9CC0-FD172B4B8910_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel	compiler<br>
<strong>From:</strong> Sims, James S. Dr. (<em>james.sims_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 21:49:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10082.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel	compiler"</a>
<li><strong>Previous message:</strong> <a href="10080.php">David Doria: "Re: [OMPI users] Backwards compatibility?"</a>
<li><strong>In reply to:</strong> <a href="10077.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10082.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel	compiler"</a>
<li><strong>Reply:</strong> <a href="10082.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel	compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[sims_at_raritan openmpi]$ mpirun -V
<br>
mpirun (Open MPI) 1.3.1rc4
<br>
<p>________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Thursday, July 23, 2009 5:44 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel        compiler
<br>
<p>What OMPI version are you using?
<br>
<p>On Jul 23, 2009, at 3:00 PM, Sims, James S. Dr. wrote:
<br>
<p><span class="quotelev1">&gt; I have an OpenMPI  program compiled with a version of OpenMPI built
</span><br>
<span class="quotelev1">&gt; using the ifort 10.1
</span><br>
<span class="quotelev1">&gt; compiler. I can compile and run this code with no problem, using the
</span><br>
<span class="quotelev1">&gt; 32 bit
</span><br>
<span class="quotelev1">&gt; version of ifort. And I can also submit batch jobs using torque with
</span><br>
<span class="quotelev1">&gt; this 32-bit code.
</span><br>
<span class="quotelev1">&gt; However, compiling the same code to produce a 64 bit executable
</span><br>
<span class="quotelev1">&gt; produces a code
</span><br>
<span class="quotelev1">&gt; that runs correctly only in the simplest cases. It does not run
</span><br>
<span class="quotelev1">&gt; correctly when run
</span><br>
<span class="quotelev1">&gt; under the torque batch queuing system, running for awhile and then
</span><br>
<span class="quotelev1">&gt; giving a
</span><br>
<span class="quotelev1">&gt; segmentation violation in s section of code that is fine in the 32
</span><br>
<span class="quotelev1">&gt; bit version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have to run the mpi multinode jobs using our torque batch queuing
</span><br>
<span class="quotelev1">&gt; system,
</span><br>
<span class="quotelev1">&gt; but we do have the capability of running the jobs in an interactive
</span><br>
<span class="quotelev1">&gt; batch environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I do a qsub -I -l nodes=1:x4gb
</span><br>
<span class="quotelev1">&gt; I get an interactive session on the remote node assigned to my job.
</span><br>
<span class="quotelev1">&gt; I can run the
</span><br>
<span class="quotelev1">&gt; job using either
</span><br>
<span class="quotelev1">&gt; ./MPI_li_64 or
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 ./MPI_li_64
</span><br>
<span class="quotelev1">&gt; and the job runs successfully to completion. I can also
</span><br>
<span class="quotelev1">&gt; start an interactive shell using
</span><br>
<span class="quotelev1">&gt; qsub -I -l nodes=1:ppn=2:x4gb
</span><br>
<span class="quotelev1">&gt; and I will get a single dual processor (or greater node). On this
</span><br>
<span class="quotelev1">&gt; single node,
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 ./MPI_li_64 works.
</span><br>
<span class="quotelev1">&gt; However, if instead I ask for two nodes in my interactive batch node,
</span><br>
<span class="quotelev1">&gt; qsub -I -l nodes=2:x4gb,
</span><br>
<span class="quotelev1">&gt; Two nodes will be assigned to me but when I enter
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 ./MPI_li_64
</span><br>
<span class="quotelev1">&gt; the job runs awhile, then fails with a
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 23104 on node n339
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can trace this in the intel debugger and see that the segmentation
</span><br>
<span class="quotelev1">&gt; fault is occuring in what should
</span><br>
<span class="quotelev1">&gt; be good code, and in code that executes with no problem when
</span><br>
<span class="quotelev1">&gt; everything is compiled 32-bit. I am
</span><br>
<span class="quotelev1">&gt; at a loss for what could be preventing this code to run within the
</span><br>
<span class="quotelev1">&gt; batch queuing environment in the
</span><br>
<span class="quotelev1">&gt; 64-bit version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jim
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10082.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel	compiler"</a>
<li><strong>Previous message:</strong> <a href="10080.php">David Doria: "Re: [OMPI users] Backwards compatibility?"</a>
<li><strong>In reply to:</strong> <a href="10077.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10082.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel	compiler"</a>
<li><strong>Reply:</strong> <a href="10082.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel	compiler"</a>
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
