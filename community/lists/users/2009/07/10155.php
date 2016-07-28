<?
$subject_val = "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 31 10:35:44 2009" -->
<!-- isoreceived="20090731143544" -->
<!-- sent="Fri, 31 Jul 2009 16:35:38 +0200" -->
<!-- isosent="20090731143538" -->
<!-- name="Wilko Keegstra" -->
<!-- email="w.keegstra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] programs are segfaulting using Torque &amp;amp; OpenMPI" -->
<!-- id="4A73013A.10609_at_rug.nl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="248961DD-1FBF-420C-921B-CD48E74C3B78_at_open-mpi.org" -->
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
<strong>From:</strong> Wilko Keegstra (<em>w.keegstra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-31 10:35:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10156.php">Edgar Gabriel: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Previous message:</strong> <a href="10154.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>In reply to:</strong> <a href="10153.php">Ralph Castain: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10157.php">Ralph Castain: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="10157.php">Ralph Castain: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have recompiled openmpi with the --enabled-debug and --with-tm=/usr/local
<br>
flags, and submitted the job to torque 2.3.7:
<br>
<p>#PBS -q cluster2
<br>
#PBS -l nodes=5:ppn=2
<br>
#PBS -N AlignImages
<br>
#PBS -j oe
<br>
/usr/local/bin/mpiexec -v -mca ras_base_verbose 5 -mca plm_base_verbose
<br>
5 --debug-daemons  -machinefile $PBS_NODEFILE
<br>
/pcs/programs/grip/bin/RunAlignmentMPI DoAlign
<br>
/pcs/pc00/keegstra/work/hm/hemo-mix-psml.img
<br>
/pcs/pc00/keegstra/work/hm/hemo-mix-psml-ali.img 4 9 14 1 2497 360.000
<br>
64.000 /pcs/pc00/keegstra/work/hm/hemo-mix-pref.img 1 7 0
<br>
<p>and the job crashed almost immediately. i have attached:
<br>
tm.3.gz, Job output: AlignImages.o34.gz, momlog-20090731
<br>
<p>I hope you can help me,
<br>
kind regards,
<br>
Wilko
<br>
<p><p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Could you send the contents of a PBS_NODEFILE from a Torque 2.3.7
</span><br>
<span class="quotelev1">&gt; allocation, and the man page for tm_spawn?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My only guess would be that something changed in those areas as we don't
</span><br>
<span class="quotelev1">&gt; really use anything else from Torque, and run on Torque-based clusters
</span><br>
<span class="quotelev1">&gt; in production every day. Not sure what version we have here, though I
</span><br>
<span class="quotelev1">&gt; believe it is pretty current (will check).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You also might want to configure OMPI 1.3.3 with --enable-debug. You
</span><br>
<span class="quotelev1">&gt; could then do a run with -mca ras_base_verbose 5 -mca plm_base_verbose 5
</span><br>
<span class="quotelev1">&gt; --debug-daemons on your mpirun cmd line to get a step-by-step diagnostic
</span><br>
<span class="quotelev1">&gt; output of the interaction with Torque. Should give us some idea of where
</span><br>
<span class="quotelev1">&gt; the failure is occurring.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 31, 2009, at 7:20 AM, Wilko Keegstra wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have the following problem:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using openmpi 1.3.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; programs (directly and from scripts) submitted with mpiexec are running
</span><br>
<span class="quotelev2">&gt;&gt; fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; programs (directly and from scripts) submitted through Torque 2.3.7
</span><br>
<span class="quotelev2">&gt;&gt; with openmpi compiled with --with-tm (and torque-devel) installed
</span><br>
<span class="quotelev2">&gt;&gt; give segfaulting of the programs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; programs submitted through Torque 2.3.7 directly with openmpi
</span><br>
<span class="quotelev2">&gt;&gt; compiled without --with-tm (and NO torque-devel installed) run fine
</span><br>
<span class="quotelev2">&gt;&gt; however mpiexec programs from script (script submiited through torque)
</span><br>
<span class="quotelev2">&gt;&gt; are only running on 1 node, so I need openmpi compiled with --with-tm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We also have a cluster running with openmpi 1.2.9 compiled without
</span><br>
<span class="quotelev2">&gt;&gt; --with-tm in combination with torque 2.3.3 and everything is running
</span><br>
<span class="quotelev2">&gt;&gt; fine, so NO segfaults and mpiexec from script also running on the
</span><br>
<span class="quotelev2">&gt;&gt; nodes selected at submitting time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't have errors on log files only on the job log file:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec noticed that process rank 7 with PID 3150 on node
</span><br>
<span class="quotelev2">&gt;&gt; rugem21.chem.rug.nl exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could anyone please help me,
</span><br>
<span class="quotelev2">&gt;&gt; many thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt; Wilko Keegstra
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; +-------------------------------------------------------------+
</span><br>
<span class="quotelev2">&gt;&gt; | Dr. Wilko Keegstra    priv.phone: +31594514153,+31610477915 |
</span><br>
<span class="quotelev2">&gt;&gt; | Groningen University       email: W.Keegstra_at_[hidden]         |
</span><br>
<span class="quotelev2">&gt;&gt; | Groningen Biomolecular Sciences and Biotechnology Institute |
</span><br>
<span class="quotelev2">&gt;&gt; | Nijenborgh 4               phone: +31503634224              |
</span><br>
<span class="quotelev2">&gt;&gt; | 9747 AG GRONINGEN          fax  : +31503634800              |
</span><br>
<span class="quotelev2">&gt;&gt; | The Netherlands                                             |
</span><br>
<span class="quotelev2">&gt;&gt; +-------------------------------------------------------------+
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
<p><pre>
-- 
+-------------------------------------------------------------+
| Dr. Wilko Keegstra    priv.phone: +31594514153,+31610477915 |
| Groningen University       email: W.Keegstra_at_[hidden]         |
| Groningen Biomolecular Sciences and Biotechnology Institute |
| Nijenborgh 4               phone: +31503634224              |
| 9747 AG GRONINGEN          fax  : +31503634800              |
| The Netherlands                                             |
+-------------------------------------------------------------+



</pre>
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10155/tm.3.gz">tm.3.gz</a>
</ul>
<!-- attachment="tm.3.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10155/AlignImages.o34.gz">AlignImages.o34.gz</a>
</ul>
<!-- attachment="AlignImages.o34.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10155/momlog-20090731.gz">momlog-20090731.gz</a>
</ul>
<!-- attachment="momlog-20090731.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10156.php">Edgar Gabriel: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Previous message:</strong> <a href="10154.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>In reply to:</strong> <a href="10153.php">Ralph Castain: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10157.php">Ralph Castain: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="10157.php">Ralph Castain: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
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
