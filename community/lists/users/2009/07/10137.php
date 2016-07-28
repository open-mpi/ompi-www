<?
$subject_val = "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 29 17:46:49 2009" -->
<!-- isoreceived="20090729214649" -->
<!-- sent="Wed, 29 Jul 2009 15:46:35 -0600" -->
<!-- isosent="20090729214635" -->
<!-- name="Adams, Brian M" -->
<!-- email="briadam_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)" -->
<!-- id="A0801CEC7AFED846978515099D145DA5153BD5507A_at_ES01SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="f1daddaa0907291423s664474d4h4c02492791f3d4a5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)<br>
<strong>From:</strong> Adams, Brian M (<em>briadam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-29 17:46:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10138.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Previous message:</strong> <a href="10136.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2347.php">Maestas, Christopher Daniel: "[OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10138.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Reply:</strong> <a href="10138.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph (all),
<br>
<p>I'm resurrecting this 2006 thread for a status check.  The new 1.3.x machinefile behavior is great (thanks!) -- I can use machinefiles to manage multiple simultaneous mpiruns within a single torque allocation (where the hosts are a subset of $PBS_NODEFILE).  However, this requires some careful management of machinefiles.
<br>
<p>I'm curious if OpenMPI now directly supports the behavior I need, described in general in the quote below.  Specifically, given a single PBS/Torque allocation of M*N processors, I will run a serial program that will fork M times.  Each of the M forked processes calls 'mpirun -np N application.exe' and blocks until completion.  This seems akin to the case you described of &quot;mpiruns executed in separate windows/prompts.&quot;
<br>
<p>What I'd like to see is the M processes &quot;tiled&quot; across the available slots, so all M*N processors are used.  What I see instead appears at face value to be the first N resources being oversubscribed M times.  
<br>
<p>Also, when one of the forked processes returns, I'd like to be able to spawn another and have its mpirun schedule on the resources freed by the previous one that exited.  Is any of this possible?
<br>
<p>I tried starting an orted (1.3.3, roughly as you suggested below), but got this error:
<br>
<p><span class="quotelev1">&gt; orted --daemonize
</span><br>
[gy8:25871] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 125
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[gy8:25871] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file orted/orted_main.c at line 323
<br>
<p>I spared the debugging info as I'm not even sure this is a correct invocation...
<br>
<p>Thanks for any suggestions you can offer!
<br>
Brian
<br>
----------
<br>
Brian M. Adams, PhD (briadam_at_[hidden])
<br>
Optimization and Uncertainty Quantification
<br>
Sandia National Laboratories, Albuquerque, NM
<br>
<a href="http://www.sandia.gov/~briadam">http://www.sandia.gov/~briadam</a>
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; From: Ralph Castain (rhc_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Date: 2006-12-12 00:46:59
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Chris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some of this is doable with today's code....and one of these 
</span><br>
<span class="quotelev1">&gt; behaviors is not. :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI/OpenRTE can be run in &quot;persistent&quot; mode - this 
</span><br>
<span class="quotelev1">&gt; allows multiple jobs to share the same allocation. This works 
</span><br>
<span class="quotelev1">&gt; much as you describe (syntax is slightly different, of 
</span><br>
<span class="quotelev1">&gt; course!) - the first mpirun will map using whatever mode was 
</span><br>
<span class="quotelev1">&gt; requested, then the next mpirun will map starting from where 
</span><br>
<span class="quotelev1">&gt; the first one left off.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I *believe* you can run each mpirun in the background. 
</span><br>
<span class="quotelev1">&gt; However, I don't know if this has really been tested enough 
</span><br>
<span class="quotelev1">&gt; to support such a claim. All testing that I know about 
</span><br>
<span class="quotelev1">&gt; to-date has executed mpirun in the foreground - thus, your 
</span><br>
<span class="quotelev1">&gt; example would execute sequentially instead of in parallel.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know people have tested multiple mpirun's operating in 
</span><br>
<span class="quotelev1">&gt; parallel within a single allocation (i.e., persistent mode) 
</span><br>
<span class="quotelev1">&gt; where the mpiruns are executed in separate windows/prompts. 
</span><br>
<span class="quotelev1">&gt; So I suspect you could do something like you describe - just 
</span><br>
<span class="quotelev1">&gt; haven't personally verified it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where we definitely differ is that Open MPI/RTE will *not* 
</span><br>
<span class="quotelev1">&gt; block until resources are freed up from the prior mpiruns. 
</span><br>
<span class="quotelev1">&gt; Instead, we will attempt to execute each mpirun immediately - 
</span><br>
<span class="quotelev1">&gt; and will error out the one(s) that try to execute without 
</span><br>
<span class="quotelev1">&gt; sufficient resources. I imagine we could provide the kind of 
</span><br>
<span class="quotelev1">&gt; &quot;flow control&quot; you describe, but I'm not sure when that might happen.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am (in my copious free time...haha) working on an 
</span><br>
<span class="quotelev1">&gt; &quot;orteboot&quot; program that will startup a virtual machine to 
</span><br>
<span class="quotelev1">&gt; make the persistent mode of operation a little easier. For 
</span><br>
<span class="quotelev1">&gt; now, though, you can do it by:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. starting up the &quot;server&quot; using the following command:
</span><br>
<span class="quotelev1">&gt; orted --seed --persistent --scope public [--universe foo]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. do your mpirun commands. They will automagically find the 
</span><br>
<span class="quotelev1">&gt; &quot;server&quot; and connect to it. If you specified a universe name 
</span><br>
<span class="quotelev1">&gt; when starting the server, then you must specify the same 
</span><br>
<span class="quotelev1">&gt; universe name on your mpirun commands.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When you are done, you will have to (unfortunately) manually 
</span><br>
<span class="quotelev1">&gt; &quot;kill&quot; the server and remove its session directory. I have a 
</span><br>
<span class="quotelev1">&gt; program called &quot;ortehalt&quot;
</span><br>
<span class="quotelev1">&gt; in the trunk that will do this cleanly for you, but it isn't 
</span><br>
<span class="quotelev1">&gt; yet in the release distributions. You are welcome to use it, 
</span><br>
<span class="quotelev1">&gt; though, if you are working with the trunk - I can't promise 
</span><br>
<span class="quotelev1">&gt; it is bulletproof yet, but it seems to be working.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/11/06 8:07 PM, &quot;Maestas, Christopher Daniel&quot; 
</span><br>
<span class="quotelev1">&gt; &lt;cdmaest_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sometimes we have users that like to do from within a single job 
</span><br>
<span class="quotelev2">&gt; &gt; (think schedule within an job scheduler allocation):
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpiexec -n X myprog&quot;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpiexec -n Y myprog2&quot;
</span><br>
<span class="quotelev2">&gt; &gt; Does mpiexec within Open MPI keep track of the node list it 
</span><br>
<span class="quotelev1">&gt; is using 
</span><br>
<span class="quotelev2">&gt; &gt; if it binds to a particular scheduler?
</span><br>
<span class="quotelev2">&gt; &gt; For example with 4 nodes (2ppn SMP):
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpiexec -n 2 myprog&quot;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpiexec -n 2 myprog2&quot;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpiexec -n 1 myprog3&quot;
</span><br>
<span class="quotelev2">&gt; &gt; And assume this is by-slot allocation we would have the following
</span><br>
<span class="quotelev2">&gt; &gt; allocation:
</span><br>
<span class="quotelev2">&gt; &gt; node1 - processor1 - myprog
</span><br>
<span class="quotelev2">&gt; &gt; - processor2 - myprog
</span><br>
<span class="quotelev2">&gt; &gt; node2 - processor1 - myprog2
</span><br>
<span class="quotelev2">&gt; &gt; - processor2 - myprog2
</span><br>
<span class="quotelev2">&gt; &gt; And for a by-node allocation:
</span><br>
<span class="quotelev2">&gt; &gt; node1 - processor1 - myprog
</span><br>
<span class="quotelev2">&gt; &gt; - processor2 - myprog2
</span><br>
<span class="quotelev2">&gt; &gt; node2 - processor1 - myprog
</span><br>
<span class="quotelev2">&gt; &gt; - processor2 - myprog2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think this is possible using ssh cause it shouldn't really matter 
</span><br>
<span class="quotelev2">&gt; &gt; how many times it spawns, but with something like torque it 
</span><br>
<span class="quotelev1">&gt; would get 
</span><br>
<span class="quotelev2">&gt; &gt; restricted to a max process launch of 4. We would want the third 
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec to block processes and eventually be run on the first 
</span><br>
<span class="quotelev2">&gt; &gt; available node allocation that frees up from myprog or myprog2 ....
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For example for torque, we had to add the following to osc mpiexec:
</span><br>
<span class="quotelev2">&gt; &gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; Finally, since only one mpiexec can be the master at a 
</span><br>
<span class="quotelev1">&gt; time, if your 
</span><br>
<span class="quotelev2">&gt; &gt; code setup requires that mpiexec exit to get a result, you 
</span><br>
<span class="quotelev1">&gt; can start a 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;dummy&quot;
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec first in your batch
</span><br>
<span class="quotelev2">&gt; &gt; job:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec -server
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It runs no tasks itself but handles the connections of 
</span><br>
<span class="quotelev1">&gt; other transient 
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec clients.
</span><br>
<span class="quotelev2">&gt; &gt; It will shut down cleanly when the batch job exits or you 
</span><br>
<span class="quotelev1">&gt; may kill the 
</span><br>
<span class="quotelev2">&gt; &gt; server explicitly.
</span><br>
<span class="quotelev2">&gt; &gt; If the server is killed with SIGTERM (or HUP or INT), it will exit 
</span><br>
<span class="quotelev2">&gt; &gt; with a status of zero if there were no clients connected at 
</span><br>
<span class="quotelev1">&gt; the time. 
</span><br>
<span class="quotelev2">&gt; &gt; If there were still clients using the server, the server 
</span><br>
<span class="quotelev1">&gt; will kill all 
</span><br>
<span class="quotelev2">&gt; &gt; their tasks, disconnect from the clients, and exit with status 1.
</span><br>
<span class="quotelev2">&gt; &gt; ---
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So a user ran:
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec -server
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec -n 2 myprog
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec -n 2 myprog2
</span><br>
<span class="quotelev2">&gt; &gt; And the server kept track of the allocation ... I would 
</span><br>
<span class="quotelev1">&gt; think that the 
</span><br>
<span class="quotelev2">&gt; &gt; orted could do this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sorry if this sounds confusing ... But I'm sure it will 
</span><br>
<span class="quotelev1">&gt; clear up with 
</span><br>
<span class="quotelev2">&gt; &gt; any further responses I make. :-) -cdm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10138.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Previous message:</strong> <a href="10136.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2347.php">Maestas, Christopher Daniel: "[OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10138.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Reply:</strong> <a href="10138.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
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
