<?
$subject_val = "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 31 10:49:53 2009" -->
<!-- isoreceived="20090731144953" -->
<!-- sent="Fri, 31 Jul 2009 08:49:37 -0600" -->
<!-- isosent="20090731144937" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] programs are segfaulting using Torque &amp;amp; OpenMPI" -->
<!-- id="A2EA4732-5CD7-4C86-8901-59F53024D358_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A73013A.10609_at_rug.nl" -->
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
<strong>Date:</strong> 2009-07-31 10:49:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10158.php">Wilko Keegstra: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="10156.php">Edgar Gabriel: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>In reply to:</strong> <a href="10155.php">Wilko Keegstra: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10158.php">Wilko Keegstra: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="10158.php">Wilko Keegstra: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ummm...this log indicates that OMPI ran perfectly - it is your  
<br>
application that segfaulted.
<br>
<p>Can you run gdb (or your favorite debugger) against a core file from  
<br>
your app? It looks like something in your app is crashing.
<br>
<p>As far as I can tell, everything is working fine. We launch and wireup  
<br>
just fine, then detect one of your processes has segfaulted - which  
<br>
triggers us to kill the remaining processes and terminate the job.
<br>
<p><p>On Jul 31, 2009, at 8:35 AM, Wilko Keegstra wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have recompiled openmpi with the --enabled-debug and --with-tm=/ 
</span><br>
<span class="quotelev1">&gt; usr/local
</span><br>
<span class="quotelev1">&gt; flags, and submitted the job to torque 2.3.7:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #PBS -q cluster2
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=5:ppn=2
</span><br>
<span class="quotelev1">&gt; #PBS -N AlignImages
</span><br>
<span class="quotelev1">&gt; #PBS -j oe
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/mpiexec -v -mca ras_base_verbose 5 -mca  
</span><br>
<span class="quotelev1">&gt; plm_base_verbose
</span><br>
<span class="quotelev1">&gt; 5 --debug-daemons  -machinefile $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt; /pcs/programs/grip/bin/RunAlignmentMPI DoAlign
</span><br>
<span class="quotelev1">&gt; /pcs/pc00/keegstra/work/hm/hemo-mix-psml.img
</span><br>
<span class="quotelev1">&gt; /pcs/pc00/keegstra/work/hm/hemo-mix-psml-ali.img 4 9 14 1 2497 360.000
</span><br>
<span class="quotelev1">&gt; 64.000 /pcs/pc00/keegstra/work/hm/hemo-mix-pref.img 1 7 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the job crashed almost immediately. i have attached:
</span><br>
<span class="quotelev1">&gt; tm.3.gz, Job output: AlignImages.o34.gz, momlog-20090731
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope you can help me,
</span><br>
<span class="quotelev1">&gt; kind regards,
</span><br>
<span class="quotelev1">&gt; Wilko
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Could you send the contents of a PBS_NODEFILE from a Torque 2.3.7
</span><br>
<span class="quotelev2">&gt;&gt; allocation, and the man page for tm_spawn?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My only guess would be that something changed in those areas as we  
</span><br>
<span class="quotelev2">&gt;&gt; don't
</span><br>
<span class="quotelev2">&gt;&gt; really use anything else from Torque, and run on Torque-based  
</span><br>
<span class="quotelev2">&gt;&gt; clusters
</span><br>
<span class="quotelev2">&gt;&gt; in production every day. Not sure what version we have here, though I
</span><br>
<span class="quotelev2">&gt;&gt; believe it is pretty current (will check).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You also might want to configure OMPI 1.3.3 with --enable-debug. You
</span><br>
<span class="quotelev2">&gt;&gt; could then do a run with -mca ras_base_verbose 5 -mca  
</span><br>
<span class="quotelev2">&gt;&gt; plm_base_verbose 5
</span><br>
<span class="quotelev2">&gt;&gt; --debug-daemons on your mpirun cmd line to get a step-by-step  
</span><br>
<span class="quotelev2">&gt;&gt; diagnostic
</span><br>
<span class="quotelev2">&gt;&gt; output of the interaction with Torque. Should give us some idea of  
</span><br>
<span class="quotelev2">&gt;&gt; where
</span><br>
<span class="quotelev2">&gt;&gt; the failure is occurring.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 31, 2009, at 7:20 AM, Wilko Keegstra wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have the following problem:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using openmpi 1.3.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; programs (directly and from scripts) submitted with mpiexec are  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; programs (directly and from scripts) submitted through Torque 2.3.7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with openmpi compiled with --with-tm (and torque-devel) installed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; give segfaulting of the programs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; programs submitted through Torque 2.3.7 directly with openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled without --with-tm (and NO torque-devel installed) run fine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; however mpiexec programs from script (script submiited through  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; torque)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are only running on 1 node, so I need openmpi compiled with --with- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We also have a cluster running with openmpi 1.2.9 compiled without
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-tm in combination with torque 2.3.3 and everything is running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fine, so NO segfaults and mpiexec from script also running on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes selected at submitting time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't have errors on log files only on the job log file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec noticed that process rank 7 with PID 3150 on node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rugem21.chem.rug.nl exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could anyone please help me,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; many thanks in advance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Wilko Keegstra
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +-------------------------------------------------------------+
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | Dr. Wilko Keegstra    priv.phone: +31594514153,+31610477915 |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | Groningen University       email: W.Keegstra_at_[hidden]         |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | Groningen Biomolecular Sciences and Biotechnology Institute |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | Nijenborgh 4               phone: +31503634224              |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | 9747 AG GRONINGEN          fax  : +31503634800              |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | The Netherlands                                             |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +-------------------------------------------------------------+
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; &lt;tm. 
</span><br>
<span class="quotelev1">&gt; 3 
</span><br>
<span class="quotelev1">&gt; .gz 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; AlignImages 
</span><br>
<span class="quotelev1">&gt; .o34 
</span><br>
<span class="quotelev1">&gt; .gz 
</span><br>
<span class="quotelev2">&gt; &gt;&lt;momlog-20090731.gz&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="10158.php">Wilko Keegstra: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="10156.php">Edgar Gabriel: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>In reply to:</strong> <a href="10155.php">Wilko Keegstra: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10158.php">Wilko Keegstra: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="10158.php">Wilko Keegstra: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
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
