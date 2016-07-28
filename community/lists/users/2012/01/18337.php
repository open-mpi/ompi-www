<?
$subject_val = "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 09:26:46 2012" -->
<!-- isoreceived="20120131142646" -->
<!-- sent="Tue, 31 Jan 2012 15:26:33 +0100" -->
<!-- isosent="20120131142633" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="30BF6F3C-D9DC-4577-9DE4-8195F6D5BD54_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CB4CD93C.126C3%tombry_at_cisco.com" -->
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
<strong>Date:</strong> 2012-01-31 09:26:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18338.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18336.php">Jeff Squyres: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>In reply to:</strong> <a href="18325.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18342.php">Dave Love: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18342.php">Dave Love: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18389.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 31.01.2012 um 05:33 schrieb Tom Bryan:
<br>
<p><span class="quotelev2">&gt;&gt; Suppose you want to start 4 additional tasks, you would need 5 in total from
</span><br>
<span class="quotelev2">&gt;&gt; SGE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK, thanks.  I'll try other values.
</span><br>
<p>BTW: there is a setting in the PE definition to allow one addititonal task:
<br>
<p>$ qconf -sp openmpi
<br>
...
<br>
job_is_first_task  FALSE
<br>
<p>This is useful, in case the master task does only collect the results and doesn't put any load on the machine. For conventional MPI applications it's set to &quot;true&quot; though.
<br>
<p><p><span class="quotelev3">&gt;&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -j yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export LD_LIBRARY_PATH=/${VXR_STATIC}/openmpi-1.5.4/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./mpitest $*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The mpitest program is the one that calls Spawn_multiple.  In this case, it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just tries to run multiple copies of itself.  If I restrict my SGE
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I never used spawn_mutiple, but isn't it necessary to start it with mpiexec
</span><br>
<span class="quotelev2">&gt;&gt; too and call MPI_Init?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpiexec ./mpitest -np 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think so.
</span><br>
<p>In the book &quot;Using MPI-2 by William Gropp at el.&quot; they use it in chapter 7.2.2/page 235 this way, although it's indeed stated in the MPI-2.2 standard on page 329 to create a singleton MPI environment if the application could find the necessary information (i.e. wasn't started by mpiexec).
<br>
<p>Maybe it's a side effect of a tight integration that it would start on the correct nodes (but I face an incorrect allocation of slots and an error message at the end if started without mpiexec), as in this case it has no command line option for the hostfile. How to get the requested nodes if started from the command line?
<br>
<p>Maybe someone from the Open MPI team can clarify the intended behavior in this case.
<br>
<p><p><span class="quotelev1">&gt;  In any case, when I restrict the SGE grid to run all of
</span><br>
<span class="quotelev1">&gt; my orte parallel environment jobs on one machine, the application runs fine.
</span><br>
<span class="quotelev1">&gt; I only have problems if one or more of the spawned children gets scheduled
</span><br>
<span class="quotelev1">&gt; to another node.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; to override the detected slots by the tight integration into SGE. Otherwise it
</span><br>
<span class="quotelev2">&gt;&gt; might be running only as a serial one. The additional 4 spawned processes can
</span><br>
<span class="quotelev2">&gt;&gt; then be added inside your application.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The line to initialize MPI:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if( MPI::Init( MPI::THREAD_MULTIPLE ) != MPI::THREAD_MULTIPLE )
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I replaced the complete if... by a plain MPI::Init(); and get a suitable
</span><br>
<span class="quotelev2">&gt;&gt; output (see attached, qsub -pe openmpi 4 and changed _nProc to 3) in a tight
</span><br>
<span class="quotelev2">&gt;&gt; integration into SGE.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; NB: What is MPI::Init( MPI::THREAD_MULTIPLE ) supposed to do, output a feature
</span><br>
<p>Okay, typo - the _thread is missing.
<br>
<p><p><span class="quotelev2">&gt;&gt; of MPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, I'm new to MPI, so I'm not sure.  The program was actually written by
</span><br>
<span class="quotelev1">&gt; a co-worker.  I think that it's supposed to set up a bunch of things and
</span><br>
<span class="quotelev1">&gt; also verify that our build has the requested level of thread support.
</span><br>
<p>Threads have nothing to do with comm_spawn. Their support is necessary to combine MPI with OpenMP or any other thread library. I couldn't use it initially as I haven't compiled it with --enable-mpi-threads. A plain MPI::Init(); is sufficient here (thread support won't hurt though).
<br>
<p><p><span class="quotelev1">&gt; My co-worker clarified today that he actually had this exact code working
</span><br>
<span class="quotelev1">&gt; last year on a test cluster that we set up.  Now we're trying to put
</span><br>
<span class="quotelev1">&gt; together a production cluster with the latest version of Open MPI and SGE
</span><br>
<span class="quotelev1">&gt; (Son of Grid Engine), but Mpitest is now hanging as described in my first
</span><br>
<span class="quotelev1">&gt; e-mail.
</span><br>
<p>For me it's not hanging. Did you try the alternative startup using mpiexec?
<br>
<p>Aha - BTW: I use 1.4.4
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev2">&gt;&gt; Is it for an actual application where you need this feature? In the MPI
</span><br>
<span class="quotelev2">&gt;&gt; documentation it's discouraged to start it this way for performance reasons.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For our use, yes, spawn_multiple makes sense.  We won't be spawning lots and
</span><br>
<span class="quotelev1">&gt; lots of jobs in quick succession.  We're using MPI as an robust way to get
</span><br>
<span class="quotelev1">&gt; IPC as we spawn multiple child processes while using SGE to help us with
</span><br>
<span class="quotelev1">&gt; load balancing our compute nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anyway:
</span><br>
<span class="quotelev2">&gt;&gt; do you see on the master node of the parallel job in:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I should have included that kind of output.  I'll have to run it again
</span><br>
<span class="quotelev1">&gt; with the cols option, but I used pstree to see that I have mpitest --child
</span><br>
<span class="quotelev1">&gt; processes as children of orted by way of sge_shepherd and sge_execd.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; ---Tom
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
<li><strong>Next message:</strong> <a href="18338.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18336.php">Jeff Squyres: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>In reply to:</strong> <a href="18325.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18342.php">Dave Love: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18342.php">Dave Love: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18389.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
