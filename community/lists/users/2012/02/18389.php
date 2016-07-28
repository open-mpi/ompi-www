<?
$subject_val = "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  3 18:15:49 2012" -->
<!-- isoreceived="20120203231549" -->
<!-- sent="Fri, 03 Feb 2012 18:15:26 -0500" -->
<!-- isosent="20120203231526" -->
<!-- name="Tom Bryan" -->
<!-- email="tombry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="CB51D4C0.129E0%tombry_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="30BF6F3C-D9DC-4577-9DE4-8195F6D5BD54_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2012-02-03 18:15:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18390.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18388.php">Mateus Augusto: "[OMPI users] How to join intercommunicators?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18337.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18390.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18390.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18401.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK.  Sorry for the delay.  I needed to read through this thread a few times
<br>
and try some experiments.  Let me reply to a few of these pieces, and then
<br>
I'll talk about those experiments.
<br>
<p>On 1/31/12 9:26 AM, &quot;Reuti&quot; &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; I never used spawn_mutiple, but isn't it necessary to start it with mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; too and call MPI_Init?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpiexec ./mpitest -np 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't think so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the book &quot;Using MPI-2 by William Gropp at el.&quot; they use it in chapter
</span><br>
<span class="quotelev1">&gt; 7.2.2/page 235 this way, although it's indeed stated in the MPI-2.2 standard
</span><br>
<span class="quotelev1">&gt; on page 329 to create a singleton MPI environment if the application could
</span><br>
<span class="quotelev1">&gt; find the necessary information (i.e. wasn't started by mpiexec).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe it's a side effect of a tight integration that it would start on the
</span><br>
<span class="quotelev1">&gt; correct nodes (but I face an incorrect allocation of slots and an error
</span><br>
<span class="quotelev1">&gt; message at the end if started without mpiexec), as in this case it has no
</span><br>
<span class="quotelev1">&gt; command line option for the hostfile. How to get the requested nodes if
</span><br>
<span class="quotelev1">&gt; started from the command line?
</span><br>
<p>OK. I misunderstood you.  I thought that you were saying that spawn_multiple
<br>
had to call mpiexec for each spawned process.  If you just meant that mpi.sh
<br>
should launch the initial process with mpiexec, that seems reasonable.  I
<br>
tried it with and without, and I definitely get better results when using
<br>
mpiexec.  
<br>
<p><span class="quotelev2">&gt;&gt;  In any case, when I restrict the SGE grid to run all of
</span><br>
<span class="quotelev2">&gt;&gt; my orte parallel environment jobs on one machine, the application runs fine.
</span><br>
<span class="quotelev2">&gt;&gt; I only have problems if one or more of the spawned children gets scheduled
</span><br>
<span class="quotelev2">&gt;&gt; to another node.
</span><br>
<p><span class="quotelev3">&gt;&gt;&gt; to override the detected slots by the tight integration into SGE. Otherwise
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it might be running only as a serial one. The additional 4 spawned
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes can then be added inside your application.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The line to initialize MPI:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if( MPI::Init( MPI::THREAD_MULTIPLE ) != MPI::THREAD_MULTIPLE )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I replaced the complete if... by a plain MPI::Init(); and get a suitable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output (see attached, qsub -pe openmpi 4 and changed _nProc to 3) in a tight
</span><br>
<span class="quotelev3">&gt;&gt;&gt; integration into SGE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, typo - the _thread is missing.
</span><br>
<p>I have not tried that change, yet.
<br>
<p>If I need MPI_THREAD_MULTIPLE, and openmpi is compiled with thread support,
<br>
it's not clear to me whether MPI::Init_Thread() and
<br>
MPI::Inint_Thread(MPI::THREAD_MULTIPLE) would give me the same behavior from
<br>
Open MPI.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; NB: What is MPI::Init( MPI::THREAD_MULTIPLE ) supposed to do, output a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; feature of MPI?
</span><br>
<p><span class="quotelev1">&gt;From the man page:
</span><br>
MPI_Init_thread,  as compared to MPI_Init, has a provision to request a
<br>
certain level of thread support in required....The  level of thread support
<br>
available to the program is set in provided, except in C++, where it is the
<br>
return value of the function.
<br>
<p><span class="quotelev1">&gt; For me it's not hanging. Did you try the alternative startup using mpiexec?
</span><br>
<span class="quotelev1">&gt; Aha - BTW: I use 1.4.4
</span><br>
<p>Right, I'm on 1.5.4.
<br>
<p>Yes, I did try starting with mpiexec.  That helps, but I still don't know
<br>
whether I understand all of the results.
<br>
<p>For each experiment, I've attached the output of
<br>
qfstat -f 
<br>
qfstat -g t
<br>
pstree -Aalp &lt;pid of sge_execd&gt;
<br>
output of mpitest parent and children (mpi.sh.o&lt;job&gt;)
<br>
<p>I ran each test with two different SGE queue configurations.  In one case,
<br>
the queue with the orte pe is set to include all 5 exec hosts in my gird.
<br>
In the &quot;single&quot; case, the queue with the orte pe is set to use only a single
<br>
host.  (The queue configuration isn't shown here, but I changed the queue's
<br>
hostlist to user either a single host or a host group that includes all of
<br>
my machines.
<br>
<p>I run qsub on node 17.  The grid machines available for this run are 3, 4,
<br>
10, 11, and 16.
<br>
<p>Some observations:
<br>
<p>1. I'm still surprised that the SGE behavior is so different when I
<br>
configure my SGE queue differently.  See test &quot;a&quot; in the .tgz.  When I just
<br>
run mpitest in mpi.sh and ask for exactly 5 slots (-pe orte 5-5), it works
<br>
if the queue is configured to use a single host.  I see 1 MASTER and 4
<br>
SLAVES in qstat -g t, and I get the correct output.  If the queue is set to
<br>
use multiple hosts, the jobs hang in spawn/init, and I get errors
<br>
[grid-03.cisco.com][[19159,2],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint
<br>
_complete_connect] connect() to 192.168.122.1 failed: Connection refused
<br>
(111)
<br>
[grid-10.cisco.com:05327] [[19159,0],3] routed:binomial: Connection to
<br>
lifeline [[19159,0],0] lost
<br>
[grid-16.cisco.com:25196] [[19159,0],1] routed:binomial: Connection to
<br>
lifeline [[19159,0],0] lost
<br>
[grid-11.cisco.com:63890] [[19159,0],2] routed:binomial: Connection to
<br>
lifeline [[19159,0],0] lost
<br>
So, I'll just assume that mpiexec does some magic that is needed in the
<br>
multi-machine scenario but not in the single machine scenario.
<br>
<p>2. I guess I'm not sure how SGE is supposed to behave.  Experiment &quot;a&quot; and
<br>
&quot;b&quot; were identical except that I changed -pe orte 5-5 to -pe orte 5-.  The
<br>
single case works like before, and the multiple exec host case fails as
<br>
before.  The difference is that qstat -g t shows additional SLAVEs that
<br>
don't seem to correspond to any jobs on the exec hosts.  Are these SLAVEs
<br>
just slots that are reserved for my job but that I'm not using?  If my job
<br>
will only use 5 slots, then I should set the SGE qsub job to ask for exactly
<br>
5 with &quot;-pe orte 5-5&quot;, right?
<br>
<p>3. Experiment &quot;d&quot; was similar to &quot;b&quot;, but I use mpi.sh uses &quot;mpiexec -np 1
<br>
mpitest&quot; instead of running mpitest directly.  Now both the single machine
<br>
queue and multiple machine queue work.  So, mpiexec seems to make my
<br>
multi-machine configuration happier.  In this case, I'm still using &quot;-pe
<br>
orte 5-&quot;, and I'm still seeing the extra SLAVE slots granted in qstat -g t.
<br>
<p>4. Based on &quot;d&quot;, I thought that I could follow the approach in &quot;a&quot;.  That
<br>
is, for experiment &quot;e&quot;, I used mpiexec -np 1, but I also used -pe orte 5-5.
<br>
I thought that this would make the multi-machine queue reserve only the 5
<br>
slots that I needed.  The single machine queue works correctly, but now the
<br>
multi-machine case hangs with no errors.  The output from qstat and pstree
<br>
are what I'd expect, but it seems to hang in Span_multiple and Init_thread.
<br>
I really expected this to work.
<br>
<p>I'm really confused by experiment &quot;e&quot; with multiple machines in the queue.
<br>
Based on &quot;a&quot; and &quot;d&quot;, I thought that a combination of mpiexec -np 1 would
<br>
permit the multi-machine scheduling to work with MPI while the &quot;-pe orte
<br>
5-5&quot; would limit the slots to exactly the number that it needed to run.
<br>
<p>---Tom
<br>
<p><p>
<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18389/mpiExperiments.tgz">mpiExperiments.tgz</a>
</ul>
<!-- attachment="mpiExperiments.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18390.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18388.php">Mateus Augusto: "[OMPI users] How to join intercommunicators?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18337.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18390.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18390.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18401.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
