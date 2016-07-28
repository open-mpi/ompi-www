<?
$subject_val = "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 31 09:28:57 2009" -->
<!-- isoreceived="20090731132857" -->
<!-- sent="Fri, 31 Jul 2009 07:28:42 -0600" -->
<!-- isosent="20090731132842" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] programs are segfaulting using Torque &amp;amp; OpenMPI" -->
<!-- id="248961DD-1FBF-420C-921B-CD48E74C3B78_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A72EFB2.9080101_at_rug.nl" -->
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
<strong>Subject:</strong> Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-31 09:28:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10154.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Previous message:</strong> <a href="10152.php">Wilko Keegstra: "[OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="10152.php">Wilko Keegstra: "[OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10155.php">Wilko Keegstra: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="10155.php">Wilko Keegstra: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you send the contents of a PBS_NODEFILE from a Torque 2.3.7  
<br>
allocation, and the man page for tm_spawn?
<br>
<p>My only guess would be that something changed in those areas as we  
<br>
don't really use anything else from Torque, and run on Torque-based  
<br>
clusters in production every day. Not sure what version we have here,  
<br>
though I believe it is pretty current (will check).
<br>
<p>You also might want to configure OMPI 1.3.3 with --enable-debug. You  
<br>
could then do a run with -mca ras_base_verbose 5 -mca plm_base_verbose  
<br>
5 --debug-daemons on your mpirun cmd line to get a step-by-step  
<br>
diagnostic output of the interaction with Torque. Should give us some  
<br>
idea of where the failure is occurring.
<br>
<p>Ralph
<br>
<p>On Jul 31, 2009, at 7:20 AM, Wilko Keegstra wrote:
<br>
<p><span class="quotelev1">&gt; hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have the following problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using openmpi 1.3.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; programs (directly and from scripts) submitted with mpiexec are  
</span><br>
<span class="quotelev1">&gt; running
</span><br>
<span class="quotelev1">&gt; fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; programs (directly and from scripts) submitted through Torque 2.3.7
</span><br>
<span class="quotelev1">&gt; with openmpi compiled with --with-tm (and torque-devel) installed
</span><br>
<span class="quotelev1">&gt; give segfaulting of the programs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; programs submitted through Torque 2.3.7 directly with openmpi
</span><br>
<span class="quotelev1">&gt; compiled without --with-tm (and NO torque-devel installed) run fine
</span><br>
<span class="quotelev1">&gt; however mpiexec programs from script (script submiited through torque)
</span><br>
<span class="quotelev1">&gt; are only running on 1 node, so I need openmpi compiled with --with-tm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We also have a cluster running with openmpi 1.2.9 compiled without
</span><br>
<span class="quotelev1">&gt; --with-tm in combination with torque 2.3.3 and everything is running
</span><br>
<span class="quotelev1">&gt; fine, so NO segfaults and mpiexec from script also running on the
</span><br>
<span class="quotelev1">&gt; nodes selected at submitting time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have errors on log files only on the job log file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 7 with PID 3150 on node
</span><br>
<span class="quotelev1">&gt; rugem21.chem.rug.nl exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could anyone please help me,
</span><br>
<span class="quotelev1">&gt; many thanks in advance
</span><br>
<span class="quotelev1">&gt; Wilko Keegstra
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; +-------------------------------------------------------------+
</span><br>
<span class="quotelev1">&gt; | Dr. Wilko Keegstra    priv.phone: +31594514153,+31610477915 |
</span><br>
<span class="quotelev1">&gt; | Groningen University       email: W.Keegstra_at_[hidden]         |
</span><br>
<span class="quotelev1">&gt; | Groningen Biomolecular Sciences and Biotechnology Institute |
</span><br>
<span class="quotelev1">&gt; | Nijenborgh 4               phone: +31503634224              |
</span><br>
<span class="quotelev1">&gt; | 9747 AG GRONINGEN          fax  : +31503634800              |
</span><br>
<span class="quotelev1">&gt; | The Netherlands                                             |
</span><br>
<span class="quotelev1">&gt; +-------------------------------------------------------------+
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
<li><strong>Next message:</strong> <a href="10154.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Previous message:</strong> <a href="10152.php">Wilko Keegstra: "[OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="10152.php">Wilko Keegstra: "[OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10155.php">Wilko Keegstra: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="10155.php">Wilko Keegstra: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
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
