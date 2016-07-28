<?
$subject_val = "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  6 08:14:26 2012" -->
<!-- isoreceived="20120206131426" -->
<!-- sent="Mon, 6 Feb 2012 14:14:13 +0100" -->
<!-- isosent="20120206131413" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="A2CEACAA-D05F-4C36-A5AF-E91E7AF08D56_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CB51D4C0.129E0%tombry_at_cisco.com" -->
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
<strong>Date:</strong> 2012-02-06 08:14:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18402.php">Evgeniy Shapiro: "Re: [OMPI users] MPI_Barrier, again"</a>
<li><strong>Previous message:</strong> <a href="18400.php">Jeff Squyres: "Re: [OMPI users] Open MPI-1.5.4 --with-mpi-f90-size=large Compilation Error"</a>
<li><strong>In reply to:</strong> <a href="18389.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18406.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18406.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 04.02.2012 um 00:15 schrieb Tom Bryan:
<br>
<p><span class="quotelev1">&gt; OK. I misunderstood you.  I thought that you were saying that spawn_multiple
</span><br>
<span class="quotelev1">&gt; had to call mpiexec for each spawned process.  If you just meant that mpi.sh
</span><br>
<span class="quotelev1">&gt; should launch the initial process with mpiexec, that seems reasonable.  I
</span><br>
<span class="quotelev1">&gt; tried it with and without, and I definitely get better results when using
</span><br>
<span class="quotelev1">&gt; mpiexec.  
</span><br>
<p>Yep.
<br>
<p><p><span class="quotelev1">&gt; If I need MPI_THREAD_MULTIPLE, and openmpi is compiled with thread support,
</span><br>
<span class="quotelev1">&gt; it's not clear to me whether MPI::Init_Thread() and
</span><br>
<span class="quotelev1">&gt; MPI::Inint_Thread(MPI::THREAD_MULTIPLE) would give me the same behavior from
</span><br>
<span class="quotelev1">&gt; Open MPI.
</span><br>
<p>If you need thread support, you will need MPI::Init_Thread and it needs one argument (or three).
<br>
<p>The 2.2 standard states it:
<br>
<p><a href="http://www.mpi-forum.org/docs/">http://www.mpi-forum.org/docs/</a>
<br>
<p>page 384.
<br>
<p><p><span class="quotelev4">&gt;&gt;&gt;&gt; NB: What is MPI::Init( MPI::THREAD_MULTIPLE ) supposed to do, output a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; feature of MPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From the man page:
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread,  as compared to MPI_Init, has a provision to request a
</span><br>
<span class="quotelev1">&gt; certain level of thread support in required....The  level of thread support
</span><br>
<span class="quotelev1">&gt; available to the program is set in provided, except in C++, where it is the
</span><br>
<span class="quotelev1">&gt; return value of the function.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For me it's not hanging. Did you try the alternative startup using mpiexec?
</span><br>
<span class="quotelev2">&gt;&gt; Aha - BTW: I use 1.4.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right, I'm on 1.5.4.
</span><br>
<p>I suggest to use a stable version 1.4.4 for your experiments. As you said you are new MPI, you could get misled between wrong error messages and bugs and error messages due to a programming error on your side.
<br>
<p><p><span class="quotelev1">&gt; Yes, I did try starting with mpiexec.  That helps, but I still don't know
</span><br>
<span class="quotelev1">&gt; whether I understand all of the results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For each experiment, I've attached the output of
</span><br>
<span class="quotelev1">&gt; qfstat -f 
</span><br>
<span class="quotelev1">&gt; qfstat -g t
</span><br>
<span class="quotelev1">&gt; pstree -Aalp &lt;pid of sge_execd&gt;
</span><br>
<span class="quotelev1">&gt; output of mpitest parent and children (mpi.sh.o&lt;job&gt;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ran each test with two different SGE queue configurations.  In one case,
</span><br>
<span class="quotelev1">&gt; the queue with the orte pe is set to include all 5 exec hosts in my gird.
</span><br>
<span class="quotelev1">&gt; In the &quot;single&quot; case, the queue with the orte pe is set to use only a single
</span><br>
<span class="quotelev1">&gt; host.  (The queue configuration isn't shown here, but I changed the queue's
</span><br>
<span class="quotelev1">&gt; hostlist to user either a single host or a host group that includes all of
</span><br>
<span class="quotelev1">&gt; my machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I run qsub on node 17.  The grid machines available for this run are 3, 4,
</span><br>
<span class="quotelev1">&gt; 10, 11, and 16.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some observations:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. I'm still surprised that the SGE behavior is so different when I
</span><br>
<span class="quotelev1">&gt; configure my SGE queue differently.  See test &quot;a&quot; in the .tgz.  When I just
</span><br>
<span class="quotelev1">&gt; run mpitest in mpi.sh and ask for exactly 5 slots (-pe orte 5-5), it works
</span><br>
<span class="quotelev1">&gt; if the queue is configured to use a single host.  I see 1 MASTER and 4
</span><br>
<span class="quotelev1">&gt; SLAVES in qstat -g t, and I get the correct output.
</span><br>
<p>Fine. (&quot;job_is_first_task true&quot; in the PE according to this.)
<br>
<p><p><span class="quotelev1">&gt;  If the queue is set to
</span><br>
<span class="quotelev1">&gt; use multiple hosts, the jobs hang in spawn/init, and I get errors
</span><br>
<span class="quotelev1">&gt; [grid-03.cisco.com][[19159,2],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint
</span><br>
<span class="quotelev1">&gt; _complete_connect] connect() to 192.168.122.1 failed: Connection refused
</span><br>
<span class="quotelev1">&gt; (111)
</span><br>
<p>What is the setting in SGE for:
<br>
<p>$ qconf -sconf
<br>
...
<br>
qlogin_command               builtin
<br>
qlogin_daemon                builtin
<br>
rlogin_command               builtin
<br>
rlogin_daemon                builtin
<br>
rsh_command                  builtin
<br>
rsh_daemon                   builtin
<br>
<p>If it's set to use ssh, you will need a passphrase-less login to other nodes or (better) a hostbased authentication (as it's a one time setup for all users in the future):
<br>
<p><a href="http://arc.liv.ac.uk/SGE/howto/hostbased-ssh.html">http://arc.liv.ac.uk/SGE/howto/hostbased-ssh.html</a>
<br>
<p>But I wonder, why it's working for some nodes? Are there custom configuration per node, and some are faulty:
<br>
<p>$ qconf -sconfl
<br>
<p>And then you can check for each listed one:
<br>
<p>$ qconf -sconf grid-04
<br>
<p>and so on.
<br>
<p>In case you are interested in the meaning and behavior behind these settings:
<br>
<p><a href="http://arc.liv.ac.uk/SGE/htmlman/htmlman5/remote_startup.html">http://arc.liv.ac.uk/SGE/htmlman/htmlman5/remote_startup.html</a>
<br>
<p><p><span class="quotelev1">&gt; [grid-10.cisco.com:05327] [[19159,0],3] routed:binomial: Connection to
</span><br>
<span class="quotelev1">&gt; lifeline [[19159,0],0] lost
</span><br>
<span class="quotelev1">&gt; [grid-16.cisco.com:25196] [[19159,0],1] routed:binomial: Connection to
</span><br>
<span class="quotelev1">&gt; lifeline [[19159,0],0] lost
</span><br>
<span class="quotelev1">&gt; [grid-11.cisco.com:63890] [[19159,0],2] routed:binomial: Connection to
</span><br>
<span class="quotelev1">&gt; lifeline [[19159,0],0] lost
</span><br>
<span class="quotelev1">&gt; So, I'll just assume that mpiexec does some magic that is needed in the
</span><br>
<span class="quotelev1">&gt; multi-machine scenario but not in the single machine scenario.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. I guess I'm not sure how SGE is supposed to behave.  Experiment &quot;a&quot; and
</span><br>
<span class="quotelev1">&gt; &quot;b&quot; were identical except that I changed -pe orte 5-5 to -pe orte 5-.  The
</span><br>
<span class="quotelev1">&gt; single case works like before, and the multiple exec host case fails as
</span><br>
<span class="quotelev1">&gt; before.  The difference is that qstat -g t shows additional SLAVEs that
</span><br>
<span class="quotelev1">&gt; don't seem to correspond to any jobs on the exec hosts.  Are these SLAVEs
</span><br>
<span class="quotelev1">&gt; just slots that are reserved for my job but that I'm not using?  If my job
</span><br>
<span class="quotelev1">&gt; will only use 5 slots, then I should set the SGE qsub job to ask for exactly
</span><br>
<span class="quotelev1">&gt; 5 with &quot;-pe orte 5-5&quot;, right?
</span><br>
<p>Correct. The remaining ones are just unused. You could adjust your application of course to check how many slots were granted, and start slaves according to the information you got to use all granted slots.
<br>
<p><p><span class="quotelev1">&gt; 3. Experiment &quot;d&quot; was similar to &quot;b&quot;, but I use mpi.sh uses &quot;mpiexec -np 1
</span><br>
<span class="quotelev1">&gt; mpitest&quot; instead of running mpitest directly.  Now both the single machine
</span><br>
<span class="quotelev1">&gt; queue and multiple machine queue work.  So, mpiexec seems to make my
</span><br>
<span class="quotelev1">&gt; multi-machine configuration happier.  In this case, I'm still using &quot;-pe
</span><br>
<span class="quotelev1">&gt; orte 5-&quot;, and I'm still seeing the extra SLAVE slots granted in qstat -g t.
</span><br>
<p>Then case a) could show a bug in 1.5.4. For me both we working, but the allocation was different. The correct allocation I only got with &quot;mpiexec -np 1&quot;. In your case 4 were routed to one remote machine: the machine where the jobscript runs is usually the first entry in the machinefile, but on grid-03 you got only one slot by accident, and so the 4 additional ones were routed to the next machine it found in the machinefile.
<br>
<p><p><span class="quotelev1">&gt; 4. Based on &quot;d&quot;, I thought that I could follow the approach in &quot;a&quot;.  That
</span><br>
<span class="quotelev1">&gt; is, for experiment &quot;e&quot;, I used mpiexec -np 1, but I also used -pe orte 5-5.
</span><br>
<span class="quotelev1">&gt; I thought that this would make the multi-machine queue reserve only the 5
</span><br>
<span class="quotelev1">&gt; slots that I needed.  The single machine queue works correctly, but now the
</span><br>
<span class="quotelev1">&gt; multi-machine case hangs with no errors.  The output from qstat and pstree
</span><br>
<span class="quotelev1">&gt; are what I'd expect, but it seems to hang in Span_multiple and Init_thread.
</span><br>
<span class="quotelev1">&gt; I really expected this to work.
</span><br>
<p>Yes, this should work across multiple machines. And it's using `qrsh -inherit ...` so it's failing somewhere in Open MPI - is it working with 1.4.4?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; I'm really confused by experiment &quot;e&quot; with multiple machines in the queue.
</span><br>
<span class="quotelev1">&gt; Based on &quot;a&quot; and &quot;d&quot;, I thought that a combination of mpiexec -np 1 would
</span><br>
<span class="quotelev1">&gt; permit the multi-machine scheduling to work with MPI while the &quot;-pe orte
</span><br>
<span class="quotelev1">&gt; 5-5&quot; would limit the slots to exactly the number that it needed to run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---Tom
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;mpiExperiments.tgz&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="18402.php">Evgeniy Shapiro: "Re: [OMPI users] MPI_Barrier, again"</a>
<li><strong>Previous message:</strong> <a href="18400.php">Jeff Squyres: "Re: [OMPI users] Open MPI-1.5.4 --with-mpi-f90-size=large Compilation Error"</a>
<li><strong>In reply to:</strong> <a href="18389.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18406.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18406.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
