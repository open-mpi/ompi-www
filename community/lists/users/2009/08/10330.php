<?
$subject_val = "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 13:55:20 2009" -->
<!-- isoreceived="20090812175520" -->
<!-- sent="Wed, 12 Aug 2009 13:52:56 -0400" -->
<!-- isosent="20090812175256" -->
<!-- name="Sims, James S. Dr." -->
<!-- email="james.sims_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler" -->
<!-- id="D7A0423E5E193F40BE6E94126930C4930785245241_at_MBCLUSTER.xchange.nist.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="76887944-F077-46FE-98AD-1DA40EADDE12_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler<br>
<strong>From:</strong> Sims, James S. Dr. (<em>james.sims_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-12 13:52:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10331.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10329.php">Shiqing Fan: "Re: [OMPI users] Memchecker and Wait"</a>
<li><strong>In reply to:</strong> <a href="10319.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I don't understand what you want me to do. I assume you want me to run the app on n296 as
<br>
rank 0 and run the app on n298 as rank 1, but I don't know how to do that outside of either torque
<br>
or mpirun -hostfile 
<br>
<p>Jim
<br>
<p>P.S. O tried -x LD_LIBRARY_PATH and it doesn't work.
<br>
<p><p>________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Wednesday, August 12, 2009 7:47 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel compiler
<br>
<p>We use Torque with OMPI here on almost every cluster, running 64-bit
<br>
jobs with the Intel compilers, so I doubt the problem is with Torque.
<br>
It is probably an issue with library paths.
<br>
<p>Torque doesn't automatically forward your environment, nor does it
<br>
execute your remote .bashrc (or equivalent) when starting your remote
<br>
process. While ssh also typically doesn't forward the environment
<br>
(though your sys admin may have set it up to do so), it does execute
<br>
the remote .bashrc, which could be setting the correct path. I should
<br>
also note that mpirun will automatically forward LD_LIBRARY_PATH and
<br>
PATH for you, which is something different from what we do for the
<br>
other launchers.
<br>
<p>If you execute your MPI_Ii_64 program locally on each of your nodes
<br>
(i.e., both processes run local), does it work? If so, then try adding
<br>
<p>-x LD_LIBRARY_PATH
<br>
<p>to your mpirun cmd line. This will tell mpirun to pickup your local
<br>
lib-path and forward it for you regardless of the launch environment.
<br>
<p><p>On Aug 11, 2009, at 10:17 PM, Sims, James S. Dr. wrote:
<br>
<p><span class="quotelev1">&gt; Back to this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The last suggestion was to upgrade to 1.3.3, which has been done.
</span><br>
<span class="quotelev1">&gt; Still cannot get this code to
</span><br>
<span class="quotelev1">&gt; run in 64 bit mode with torque. What I can do is run the job in l6
</span><br>
<span class="quotelev1">&gt; bit mode using a  hostfile.
</span><br>
<span class="quotelev1">&gt; Specifically, if I use
</span><br>
<span class="quotelev1">&gt; qsub  -I -l nodes=2:ppn=1 torque allocates two nodes to the job, and
</span><br>
<span class="quotelev1">&gt; since this is an interactive
</span><br>
<span class="quotelev1">&gt; shell, logs me in to the controlling node. In this example process
</span><br>
<span class="quotelev1">&gt; rank 0 is n72 and process rank 1 is n89:
</span><br>
<span class="quotelev1">&gt; [sims_at_n72 4000]$ mpirun --display-allocation -pernode --display-map
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Data for node: Name: n72.clust.nist.gov        Num slots: 1    Max
</span><br>
<span class="quotelev1">&gt; slots: 0
</span><br>
<span class="quotelev1">&gt; Data for node: Name: n89       Num slots: 1    Max slots: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Data for node: Name: n72.clust.nist.gov        Num procs: 1
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [47657,1] Process rank: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Data for node: Name: n89       Num procs: 1
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [47657,1] Process rank: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =============================================================
</span><br>
<span class="quotelev1">&gt; n89
</span><br>
<span class="quotelev1">&gt; n72.clust.nist.gov
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My hostfile is
</span><br>
<span class="quotelev1">&gt; [sims_at_n72 4000]$ cat hostfile
</span><br>
<span class="quotelev1">&gt; n72
</span><br>
<span class="quotelev1">&gt; n89
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If, logged in to n72, I use the command
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 ./MPI_li_64
</span><br>
<span class="quotelev1">&gt; the job fails with a
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 10538 on node n89 exited
</span><br>
<span class="quotelev1">&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I use the command
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --hostfile hostfile ./MPI_li_64
</span><br>
<span class="quotelev1">&gt; the same thing happens.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, if I ssh to n73, for example, and use the command
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --hostfile hostfile ./MPI_li_64
</span><br>
<span class="quotelev1">&gt; everything works fine. So it appears that the problem is with torque.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas?
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
<li><strong>Next message:</strong> <a href="10331.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10329.php">Shiqing Fan: "Re: [OMPI users] Memchecker and Wait"</a>
<li><strong>In reply to:</strong> <a href="10319.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel compiler"</a>
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
