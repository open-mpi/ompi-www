<?
$subject_val = "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 23:33:23 2012" -->
<!-- isoreceived="20120131043323" -->
<!-- sent="Mon, 30 Jan 2012 23:33:16 -0500" -->
<!-- isosent="20120131043316" -->
<!-- name="Tom Bryan" -->
<!-- email="tombry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="CB4CD93C.126C3%tombry_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A7FAFA3A-F239-4FCD-B1A8-8020D2EF2A04_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Tom Bryan (<em>tombry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-30 23:33:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18326.php">Rayson Ho: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18324.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile"</a>
<li><strong>In reply to:</strong> <a href="18313.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18326.php">Rayson Ho: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18326.php">Rayson Ho: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18337.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/29/12 5:44 PM, &quot;Reuti&quot; &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; you compiled Open MPI --with-sge I assume, as the above is working - fine.
</span><br>
<p>Yes, we compiled --with-sge.
<br>
<p><span class="quotelev2">&gt;&gt; #$ -pe orte 1-
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This number should match the processes you want to start plus one the master.
</span><br>
<span class="quotelev1">&gt; Otherwise SGE might refuse to start a process on a remote node if you have set
</span><br>
<span class="quotelev1">&gt; up a tight integration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Suppose you want to start 4 additional tasks, you would need 5 in total from
</span><br>
<span class="quotelev1">&gt; SGE.
</span><br>
<p>OK, thanks.  I'll try other values.
<br>
<p><span class="quotelev2">&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev2">&gt;&gt; #$ -j yes
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH=/${VXR_STATIC}/openmpi-1.5.4/lib
</span><br>
<span class="quotelev2">&gt;&gt; ./mpitest $*
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The mpitest program is the one that calls Spawn_multiple.  In this case, it
</span><br>
<span class="quotelev2">&gt;&gt; just tries to run multiple copies of itself.  If I restrict my SGE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I never used spawn_mutiple, but isn't it necessary to start it with mpiexec
</span><br>
<span class="quotelev1">&gt; too and call MPI_Init?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpiexec ./mpitest -np 1
</span><br>
<p>I don't think so.  In any case, when I restrict the SGE grid to run all of
<br>
my orte parallel environment jobs on one machine, the application runs fine.
<br>
I only have problems if one or more of the spawned children gets scheduled
<br>
to another node.  
<br>
<p><span class="quotelev1">&gt; to override the detected slots by the tight integration into SGE. Otherwise it
</span><br>
<span class="quotelev1">&gt; might be running only as a serial one. The additional 4 spawned processes can
</span><br>
<span class="quotelev1">&gt; then be added inside your application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The line to initialize MPI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if( MPI::Init( MPI::THREAD_MULTIPLE ) != MPI::THREAD_MULTIPLE )
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I replaced the complete if... by a plain MPI::Init(); and get a suitable
</span><br>
<span class="quotelev1">&gt; output (see attached, qsub -pe openmpi 4 and changed _nProc to 3) in a tight
</span><br>
<span class="quotelev1">&gt; integration into SGE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NB: What is MPI::Init( MPI::THREAD_MULTIPLE ) supposed to do, output a feature
</span><br>
<span class="quotelev1">&gt; of MPI?
</span><br>
<p>Well, I'm new to MPI, so I'm not sure.  The program was actually written by
<br>
a co-worker.  I think that it's supposed to set up a bunch of things and
<br>
also verify that our build has the requested level of thread support.
<br>
<p>My co-worker clarified today that he actually had this exact code working
<br>
last year on a test cluster that we set up.  Now we're trying to put
<br>
together a production cluster with the latest version of Open MPI and SGE
<br>
(Son of Grid Engine), but Mpitest is now hanging as described in my first
<br>
e-mail.
<br>
<p><span class="quotelev1">&gt; Is it for an actual application where you need this feature? In the MPI
</span><br>
<span class="quotelev1">&gt; documentation it's discouraged to start it this way for performance reasons.
</span><br>
<p>For our use, yes, spawn_multiple makes sense.  We won't be spawning lots and
<br>
lots of jobs in quick succession.  We're using MPI as an robust way to get
<br>
IPC as we spawn multiple child processes while using SGE to help us with
<br>
load balancing our compute nodes.
<br>
<p><span class="quotelev1">&gt; Anyway:
</span><br>
<span class="quotelev1">&gt; do you see on the master node of the parallel job in:
</span><br>
<p>Yes, I should have included that kind of output.  I'll have to run it again
<br>
with the cols option, but I used pstree to see that I have mpitest --child
<br>
processes as children of orted by way of sge_shepherd and sge_execd.
<br>
<p>Thanks,
<br>
---Tom
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18326.php">Rayson Ho: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18324.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile"</a>
<li><strong>In reply to:</strong> <a href="18313.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18326.php">Rayson Ho: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18326.php">Rayson Ho: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18337.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
