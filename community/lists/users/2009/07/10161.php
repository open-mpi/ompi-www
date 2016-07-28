<?
$subject_val = "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 31 13:43:19 2009" -->
<!-- isoreceived="20090731174319" -->
<!-- sent="Fri, 31 Jul 2009 11:43:03 -0600" -->
<!-- isosent="20090731174303" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] programs are segfaulting using Torque &amp;amp; OpenMPI" -->
<!-- id="D6CB2A7C-E45A-47D5-878D-C18F268224D2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="web-122819081_at_mail3.rug.nl" -->
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
<strong>Date:</strong> 2009-07-31 13:43:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10162.php">Gus Correa: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="10160.php">W.Keegstra: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="10160.php">W.Keegstra: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10162.php">Gus Correa: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are launching without Torque, then you will be launching with  
<br>
rsh or ssh. So yes, there will be some differences in the environment.  
<br>
For example, launching via ssh means that you pickup your  
<br>
remote .cshrc (or whatever shell flavor you use), while you don't when  
<br>
launching via Torque.
<br>
<p>You can use 1.3.3 without Torque - it will launch faster than 1.2.9,  
<br>
but still use rsh/ssh to do it. Just build it --without-tm, or at  
<br>
least specify -mca plm rsh on your cmd line.
<br>
<p>As far as anyone can tell, nothing much changed between Torque 2.3.6  
<br>
(which is what we run here every day) and 2.3.7 that could cause a  
<br>
problem. Your debug info clearly shows the launch completing just  
<br>
fine, and the app segfaulting.
<br>
<p>Given your description of random segfaults, it sounds to me like you  
<br>
have a memory corruption issue in your code. The Torque question could  
<br>
just be a red herring having more to do with where in memory you are  
<br>
overwriting things - could be you hit something sensitive a little  
<br>
faster when running under Torque.
<br>
<p>Anyway, if you want, launching under ssh is fine and may help you  
<br>
debug your program.
<br>
<p><p>On Jul 31, 2009, at 11:30 AM, W.Keegstra wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry to bother you again, but the system limits are default limits
</span><br>
<span class="quotelev1">&gt; for openSuSE 11.1, which are as far as I can see the same from
</span><br>
<span class="quotelev1">&gt; OS version `openSuSE 10.0.
</span><br>
<span class="quotelev1">&gt; Furthermore if I specify the node parameter such that the job is
</span><br>
<span class="quotelev1">&gt; running on only 1 node (either with 2 or 8 cores) is runs well.
</span><br>
<span class="quotelev1">&gt; A few weeks ago I put a lot of printf commands in the program that
</span><br>
<span class="quotelev1">&gt; is executed and and the segfaults are completely random through
</span><br>
<span class="quotelev1">&gt; the code. Even completely random on the nodes were the process
</span><br>
<span class="quotelev1">&gt; is running.
</span><br>
<span class="quotelev1">&gt; Every time tm is used because the process is spread over different
</span><br>
<span class="quotelev1">&gt; nodes is goes wrong, if tm is not used because either the process
</span><br>
<span class="quotelev1">&gt; is running on 1 node or openmpi is compiled without tm.
</span><br>
<span class="quotelev1">&gt; The only thing I can think of is that the environment (??) with tm
</span><br>
<span class="quotelev1">&gt; is different from that without tm.
</span><br>
<span class="quotelev1">&gt; May be the fact that the program is using mpi-open, mpi-read and
</span><br>
<span class="quotelev1">&gt; mpi-write to files has something to do with it. I tried for weeks
</span><br>
<span class="quotelev1">&gt; to figure out what the problem is and I still have no idea. In
</span><br>
<span class="quotelev1">&gt; my opinion everthing points to the tm interface.
</span><br>
<span class="quotelev1">&gt; For me the only solution now is sticking to the older programs,
</span><br>
<span class="quotelev1">&gt; e.g. torque 2.3.3 and openmpi 1.2.9, in this case tm is still not
</span><br>
<span class="quotelev1">&gt; needed and everything runs without problems, only 10-15% slower.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; kind regards,
</span><br>
<span class="quotelev1">&gt; Wilko
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, 31 Jul 2009 09:31:55 -0600
</span><br>
<span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; You might check with your sys admin - or checkout the &quot;ulimit&quot; cmd.  
</span><br>
<span class="quotelev2">&gt;&gt; Depends on what the sys admin has set for system limits.
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 31, 2009, at 9:12 AM, Wilko Keegstra wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sofar I don't have a core file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the weird thing is that the same job will run well when openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is compiled without --with-tm.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is the amount of memory, or number of open files different in both
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cases?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How can I force unlimited resources for the job??
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only then I will get a core file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kind regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Wilko
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ummm...this log indicates that OMPI ran perfectly - it is your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; application that segfaulted.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you run gdb (or your favorite debugger) against a core file  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; your app? It looks like something in your app is crashing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As far as I can tell, everything is working fine. We launch and   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wireup
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; just fine, then detect one of your processes has segfaulted - which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; triggers us to kill the remaining processes and terminate the job.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 31, 2009, at 8:35 AM, Wilko Keegstra wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have recompiled openmpi with the --enabled-debug and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --with-tm=/usr/local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; flags, and submitted the job to torque 2.3.7:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #PBS -q cluster2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #PBS -l nodes=5:ppn=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #PBS -N AlignImages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #PBS -j oe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/local/bin/mpiexec -v -mca ras_base_verbose 5 -mca   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; plm_base_verbose
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 5 --debug-daemons  -machinefile $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /pcs/programs/grip/bin/RunAlignmentMPI DoAlign
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /pcs/pc00/keegstra/work/hm/hemo-mix-psml.img
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /pcs/pc00/keegstra/work/hm/hemo-mix-psml-ali.img 4 9 14 1 2497   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 360.000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 64.000 /pcs/pc00/keegstra/work/hm/hemo-mix-pref.img 1 7 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and the job crashed almost immediately. i have attached:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tm.3.gz, Job output: AlignImages.o34.gz, momlog-20090731
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I hope you can help me,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; kind regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Wilko
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Could you send the contents of a PBS_NODEFILE from a Torque 2.3.7
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; allocation, and the man page for tm_spawn?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; My only guess would be that something changed in those areas  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; as  we don't
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; really use anything else from Torque, and run on Torque-based   
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; clusters
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in production every day. Not sure what version we have here,   
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; though I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; believe it is pretty current (will check).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; You also might want to configure OMPI 1.3.3 with --enable- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; debug.  You
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; could then do a run with -mca ras_base_verbose 5 -mca   
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; plm_base_verbose 5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --debug-daemons on your mpirun cmd line to get a step-by-step   
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; diagnostic
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; output of the interaction with Torque. Should give us some  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; idea  of where
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the failure is occurring.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Jul 31, 2009, at 7:20 AM, Wilko Keegstra wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have the following problem:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am using openmpi 1.3.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; programs (directly and from scripts) submitted with mpiexec  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; are  running
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; programs (directly and from scripts) submitted through Torque   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2.3.7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; with openmpi compiled with --with-tm (and torque-devel)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; installed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; give segfaulting of the programs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; programs submitted through Torque 2.3.7 directly with openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; compiled without --with-tm (and NO torque-devel installed)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; run  fine
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; however mpiexec programs from script (script submiited  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; through  torque)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; are only running on 1 node, so I need openmpi compiled with --  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; with-tm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; We also have a cluster running with openmpi 1.2.9 compiled  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; without
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --with-tm in combination with torque 2.3.3 and everything is   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; running
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; fine, so NO segfaults and mpiexec from script also running on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; nodes selected at submitting time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don't have errors on log files only on the job log file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec noticed that process rank 7 with PID 3150 on node
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rugem21.chem.rug.nl exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Could anyone please help me,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; many thanks in advance
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Wilko Keegstra
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; +-------------------------------------------------------------+
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; | Dr. Wilko Keegstra    priv.phone: +31594514153,+31610477915 |
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; | Groningen University       email: W.Keegstra_at_[hidden]         |
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; | Groningen Biomolecular Sciences and Biotechnology Institute |
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; | Nijenborgh 4               phone: +31503634224              |
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; | 9747 AG GRONINGEN          fax  : +31503634800              |
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; | The Netherlands                                             |
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; +-------------------------------------------------------------+
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +-------------------------------------------------------------+
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; | Dr. Wilko Keegstra    priv.phone: +31594514153,+31610477915 |
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; | Groningen University       email: W.Keegstra_at_[hidden]         |
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; | Groningen Biomolecular Sciences and Biotechnology Institute |
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; | Nijenborgh 4               phone: +31503634224              |
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; | 9747 AG GRONINGEN          fax  : +31503634800              |
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; | The Netherlands                                             |
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +-------------------------------------------------------------+
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;tm. 3 .gz &gt; &lt; AlignImages .o34 .gz  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; momlog-20090731.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10162.php">Gus Correa: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="10160.php">W.Keegstra: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="10160.php">W.Keegstra: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10162.php">Gus Correa: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
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
