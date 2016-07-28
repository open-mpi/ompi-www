<?
$subject_val = "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 29 17:44:57 2012" -->
<!-- isoreceived="20120129224457" -->
<!-- sent="Sun, 29 Jan 2012 23:44:44 +0100" -->
<!-- isosent="20120129224444" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="A7FAFA3A-F239-4FCD-B1A8-8020D2EF2A04_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CB488D37.124C5%tombry_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-29 17:44:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18314.php">Evgeniy Shapiro: "Re: [OMPI users] MPI_Barrier, again"</a>
<li><strong>Previous message:</strong> <a href="18312.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier, again"</a>
<li><strong>In reply to:</strong> <a href="18305.php">Tom Bryan: "[OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18325.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18325.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 27.01.2012 um 23:19 schrieb Tom Bryan:
<br>
<p><span class="quotelev1">&gt; I am in the process of setting up a grid engine (SGE) cluster for running
</span><br>
<span class="quotelev1">&gt; Open MPI applications.  I'll detail the set up below, but my current problem
</span><br>
<span class="quotelev1">&gt; is that this call to Span_multiple never seems to return.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; // Spawn all of the children processes.
</span><br>
<span class="quotelev1">&gt; _intercomm = MPI::COMM_WORLD.Spawn_multiple( _nProc,
</span><br>
<span class="quotelev1">&gt;    const_cast&lt;const char **&gt;(_command),
</span><br>
<span class="quotelev1">&gt;    const_cast&lt;const char ***&gt;(_arg),
</span><br>
<span class="quotelev1">&gt;    _maxProc, _info, 0, errCode );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm new to both SGE and MPI, which is making this problem difficult for me
</span><br>
<span class="quotelev1">&gt; to troubleshoot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can schedule simple (non-MPI) jobs on the SGE grid with qsub.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can use qsub to schedule multiple copies of a simple Hello World type of
</span><br>
<span class="quotelev1">&gt; application using mpirun spawn the processes in a script like this:
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #$ -S /bin/sh
</span><br>
<span class="quotelev1">&gt; #$ -V
</span><br>
<span class="quotelev1">&gt; #$ -pe orte 4
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; #$ -j yes
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/${VXR_STATIC}/openmpi-1.5.4/lib
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 ./mpihello $*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That seems to work.  The processes report the hostname where they were run,
</span><br>
<span class="quotelev1">&gt; and they appear to be scheduled on different machines in my SGE grid.
</span><br>
<p>According to the granted nodes, which you can check in SGE with:
<br>
<p>$ qstat -g t
<br>
<p>you compiled Open MPI --with-sge I assume, as the above is working - fine.
<br>
<p><p><span class="quotelev1">&gt; The problem is with a program, mpitest, that tries to use Spawn_multiple to
</span><br>
<span class="quotelev1">&gt; launch multiple child processes.  The script that I submit to the SGE grid
</span><br>
<span class="quotelev1">&gt; looks like this:
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #$ -S /bin/sh
</span><br>
<span class="quotelev1">&gt; #$ -V
</span><br>
<span class="quotelev1">&gt; #$ -pe orte 1-
</span><br>
<p>This number should match the processes you want to start plus one the master. Otherwise SGE might refuse to start a process on a remote node if you have set up a tight integration.
<br>
<p>Suppose you want to start 4 additional tasks, you would need 5 in total from SGE.
<br>
<p><p><span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; #$ -j yes
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/${VXR_STATIC}/openmpi-1.5.4/lib
</span><br>
<span class="quotelev1">&gt; ./mpitest $*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The mpitest program is the one that calls Spawn_multiple.  In this case, it
</span><br>
<span class="quotelev1">&gt; just tries to run multiple copies of itself.  If I restrict my SGE
</span><br>
<p>I never used spawn_mutiple, but isn't it necessary to start it with mpiexec too and call MPI_Init?
<br>
<p>$ mpiexec ./mpitest -np 1
<br>
<p>to override the detected slots by the tight integration into SGE. Otherwise it might be running only as a serial one. The additional 4 spawned processes can then be added inside your application.
<br>
<p>The line to initialize MPI:
<br>
<p>if( MPI::Init( MPI::THREAD_MULTIPLE ) != MPI::THREAD_MULTIPLE )
<br>
...
<br>
<p>I replaced the complete if... by a plain MPI::Init(); and get a suitable output (see attached, qsub -pe openmpi 4 and changed _nProc to 3) in a tight integration into SGE.
<br>
<p>NB: What is MPI::Init( MPI::THREAD_MULTIPLE ) supposed to do, output a feature of MPI?
<br>
<p><p><span class="quotelev1">&gt; configuration so that the orte parallel environment has to run all jobs on a
</span><br>
<span class="quotelev1">&gt; single host, then mpitest runs to completion, spawning 4 &quot;child&quot; processes
</span><br>
<span class="quotelev1">&gt; that are scheduled via SGE to run on the same host as the root process.  The
</span><br>
<span class="quotelev1">&gt; processes Send and Recv some messages, and the program exits.
</span><br>
<p>Is it for an actual application where you need this feature? In the MPI documentation it's discouraged to start it this way for performance reasons.
<br>
<p><p><span class="quotelev1">&gt; If I permit SGE to schedule jobs on multiple hosts, then the child processes
</span><br>
<span class="quotelev1">&gt; appear to be scheduled and launched.  (That is, I can see them as children
</span><br>
<span class="quotelev1">&gt; of the sge_execd and sge_shepherd processes on various machines.)  But the
</span><br>
<span class="quotelev1">&gt; original call to Spawn_multiple doesn't appear to return in the root
</span><br>
<span class="quotelev1">&gt; mpitest.  I assume that there's some problem setting up the communications
</span><br>
<span class="quotelev1">&gt; channel among the different processes, but it's possible that my mpitest
</span><br>
<span class="quotelev1">&gt; code is just buggy.  I already tried disabling the firewall on all of the
</span><br>
<span class="quotelev1">&gt; machines.  I'm not sure how else to get useful debug information at this
</span><br>
<span class="quotelev1">&gt; stage of the troubleshooting.
</span><br>
<p>Anyway:
<br>
<p>do you see on the master node of the parallel job in:
<br>
<p>$ ps -e f --cols=500
<br>
<p>(f w/o -) the `qrsh -inherit` startups like:
<br>
<p>&nbsp;2861 ?        Sl    10:17 /usr/sge/bin/lx24-x86/sge_execd
<br>
22294 ?        S      0:00  \_ sge_shepherd-3770 -bg
<br>
22296 ?        Ss     0:00      \_ /bin/sh /var/spool/sge/pc15381/job_scripts/3770
<br>
22297 ?        S      0:00          \_ mpiexec -np 1 ./Mpitest
<br>
22298 ?        R      0:07              \_ ./Mpitest
<br>
22299 ?        Sl     0:00              \_ /usr/sge/bin/lx24-x86/qrsh -inherit -nostdin -V pc15370 orted -mca ess env -mca orte_ess_jobid 1491402752 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri &quot;1491402752.0;tcp://192.168.151.101:41663&quot;
<br>
22302 ?        S      0:00              \_ /home/reuti/mpitest/Mpitest --child
<br>
<p>and on the other side:
<br>
<p>27422 ?        Sl     3:48 /usr/sge/bin/lx24-x86/sge_execd
<br>
&nbsp;9900 ?        Sl     0:00  \_ sge_shepherd-3770 -bg
<br>
&nbsp;9901 ?        Ss     0:00      \_ /usr/sge/utilbin/lx24-x86/qrsh_starter /var/spool/sge/pc15370/active_jobs/3770.1/1.pc15370
<br>
&nbsp;9908 ?        S      0:00          \_ orted -mca ess env -mca orte_ess_jobid 1491402752 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri 1491402752.0;tcp://192.168.151.101:41663
<br>
&nbsp;9909 ?        R      0:02              \_ /home/reuti/mpitest/Mpitest --child
<br>
&nbsp;9910 ?        R      0:02              \_ /home/reuti/mpitest/Mpitest --child
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; It would be great if someone could look at the attached code and just let me
</span><br>
<span class="quotelev1">&gt; know whether what I'm doing is horribly incorrect.  If it should work, then
</span><br>
<span class="quotelev1">&gt; I can focus on systems and SGE configuration issues.  If the code is broken
</span><br>
<span class="quotelev1">&gt; and really shouldn't work, then I'd like to fix that first, of course.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; ---Tom
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;mpitest.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18313/output">output</a>
</ul>
<!-- attachment="output" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18314.php">Evgeniy Shapiro: "Re: [OMPI users] MPI_Barrier, again"</a>
<li><strong>Previous message:</strong> <a href="18312.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier, again"</a>
<li><strong>In reply to:</strong> <a href="18305.php">Tom Bryan: "[OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18325.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18325.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
