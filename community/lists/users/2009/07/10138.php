<?
$subject_val = "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 29 18:19:43 2009" -->
<!-- isoreceived="20090729221943" -->
<!-- sent="Wed, 29 Jul 2009 16:19:28 -0600" -->
<!-- isosent="20090729221928" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)" -->
<!-- id="8A94FED8-5EA6-4211-97B3-B145F22DC2F7_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A0801CEC7AFED846978515099D145DA5153BD5507A_at_ES01SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-29 18:19:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10139.php">Sefa Arslan: "[OMPI users] Using dual infiniband HCA cards"</a>
<li><strong>Previous message:</strong> <a href="10137.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>In reply to:</strong> <a href="10137.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10146.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Reply:</strong> <a href="10146.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh my - that does take me back a long way! :-)
<br>
<p>Do you need these processes to be mapped byslot (i.e., do you care if  
<br>
the process ranks are sharing nodes)? If not, why not add &quot;-bynode&quot; to  
<br>
your cmd line?
<br>
<p>Alternatively, given the mapping you want, just do
<br>
<p>mpirun -npernode 1 application.exe
<br>
<p>This would launch one copy on each of your N nodes. So if you fork M  
<br>
times, you'll wind up with the exact pattern you wanted. And, as each  
<br>
one exits, you could immediately launch a replacement without worrying  
<br>
about oversubscription.
<br>
<p>Does that help?
<br>
Ralph
<br>
<p>PS. we dropped that &quot;persistent&quot; operation - caused way too many  
<br>
problems with cleanup and other things. :-)
<br>
<p>On Jul 29, 2009, at 3:46 PM, Adams, Brian M wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph (all),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm resurrecting this 2006 thread for a status check.  The new 1.3.x  
</span><br>
<span class="quotelev1">&gt; machinefile behavior is great (thanks!) -- I can use machinefiles to  
</span><br>
<span class="quotelev1">&gt; manage multiple simultaneous mpiruns within a single torque  
</span><br>
<span class="quotelev1">&gt; allocation (where the hosts are a subset of $PBS_NODEFILE).   
</span><br>
<span class="quotelev1">&gt; However, this requires some careful management of machinefiles.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm curious if OpenMPI now directly supports the behavior I need,  
</span><br>
<span class="quotelev1">&gt; described in general in the quote below.  Specifically, given a  
</span><br>
<span class="quotelev1">&gt; single PBS/Torque allocation of M*N processors, I will run a serial  
</span><br>
<span class="quotelev1">&gt; program that will fork M times.  Each of the M forked processes  
</span><br>
<span class="quotelev1">&gt; calls 'mpirun -np N application.exe' and blocks until completion.   
</span><br>
<span class="quotelev1">&gt; This seems akin to the case you described of &quot;mpiruns executed in  
</span><br>
<span class="quotelev1">&gt; separate windows/prompts.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I'd like to see is the M processes &quot;tiled&quot; across the available  
</span><br>
<span class="quotelev1">&gt; slots, so all M*N processors are used.  What I see instead appears  
</span><br>
<span class="quotelev1">&gt; at face value to be the first N resources being oversubscribed M  
</span><br>
<span class="quotelev1">&gt; times.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, when one of the forked processes returns, I'd like to be able  
</span><br>
<span class="quotelev1">&gt; to spawn another and have its mpirun schedule on the resources freed  
</span><br>
<span class="quotelev1">&gt; by the previous one that exited.  Is any of this possible?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried starting an orted (1.3.3, roughly as you suggested below),  
</span><br>
<span class="quotelev1">&gt; but got this error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orted --daemonize
</span><br>
<span class="quotelev1">&gt; [gy8:25871] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file  
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 125
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_ess_base_select failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [gy8:25871] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file  
</span><br>
<span class="quotelev1">&gt; orted/orted_main.c at line 323
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I spared the debugging info as I'm not even sure this is a correct  
</span><br>
<span class="quotelev1">&gt; invocation...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any suggestions you can offer!
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; Brian M. Adams, PhD (briadam_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Optimization and Uncertainty Quantification
</span><br>
<span class="quotelev1">&gt; Sandia National Laboratories, Albuquerque, NM
</span><br>
<span class="quotelev1">&gt; <a href="http://www.sandia.gov/~briadam">http://www.sandia.gov/~briadam</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain (rhc_at_[hidden])
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2006-12-12 00:46:59
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Chris
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some of this is doable with today's code....and one of these
</span><br>
<span class="quotelev2">&gt;&gt; behaviors is not. :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI/OpenRTE can be run in &quot;persistent&quot; mode - this
</span><br>
<span class="quotelev2">&gt;&gt; allows multiple jobs to share the same allocation. This works
</span><br>
<span class="quotelev2">&gt;&gt; much as you describe (syntax is slightly different, of
</span><br>
<span class="quotelev2">&gt;&gt; course!) - the first mpirun will map using whatever mode was
</span><br>
<span class="quotelev2">&gt;&gt; requested, then the next mpirun will map starting from where
</span><br>
<span class="quotelev2">&gt;&gt; the first one left off.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I *believe* you can run each mpirun in the background.
</span><br>
<span class="quotelev2">&gt;&gt; However, I don't know if this has really been tested enough
</span><br>
<span class="quotelev2">&gt;&gt; to support such a claim. All testing that I know about
</span><br>
<span class="quotelev2">&gt;&gt; to-date has executed mpirun in the foreground - thus, your
</span><br>
<span class="quotelev2">&gt;&gt; example would execute sequentially instead of in parallel.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know people have tested multiple mpirun's operating in
</span><br>
<span class="quotelev2">&gt;&gt; parallel within a single allocation (i.e., persistent mode)
</span><br>
<span class="quotelev2">&gt;&gt; where the mpiruns are executed in separate windows/prompts.
</span><br>
<span class="quotelev2">&gt;&gt; So I suspect you could do something like you describe - just
</span><br>
<span class="quotelev2">&gt;&gt; haven't personally verified it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Where we definitely differ is that Open MPI/RTE will *not*
</span><br>
<span class="quotelev2">&gt;&gt; block until resources are freed up from the prior mpiruns.
</span><br>
<span class="quotelev2">&gt;&gt; Instead, we will attempt to execute each mpirun immediately -
</span><br>
<span class="quotelev2">&gt;&gt; and will error out the one(s) that try to execute without
</span><br>
<span class="quotelev2">&gt;&gt; sufficient resources. I imagine we could provide the kind of
</span><br>
<span class="quotelev2">&gt;&gt; &quot;flow control&quot; you describe, but I'm not sure when that might happen.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am (in my copious free time...haha) working on an
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orteboot&quot; program that will startup a virtual machine to
</span><br>
<span class="quotelev2">&gt;&gt; make the persistent mode of operation a little easier. For
</span><br>
<span class="quotelev2">&gt;&gt; now, though, you can do it by:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. starting up the &quot;server&quot; using the following command:
</span><br>
<span class="quotelev2">&gt;&gt; orted --seed --persistent --scope public [--universe foo]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. do your mpirun commands. They will automagically find the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;server&quot; and connect to it. If you specified a universe name
</span><br>
<span class="quotelev2">&gt;&gt; when starting the server, then you must specify the same
</span><br>
<span class="quotelev2">&gt;&gt; universe name on your mpirun commands.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When you are done, you will have to (unfortunately) manually
</span><br>
<span class="quotelev2">&gt;&gt; &quot;kill&quot; the server and remove its session directory. I have a
</span><br>
<span class="quotelev2">&gt;&gt; program called &quot;ortehalt&quot;
</span><br>
<span class="quotelev2">&gt;&gt; in the trunk that will do this cleanly for you, but it isn't
</span><br>
<span class="quotelev2">&gt;&gt; yet in the release distributions. You are welcome to use it,
</span><br>
<span class="quotelev2">&gt;&gt; though, if you are working with the trunk - I can't promise
</span><br>
<span class="quotelev2">&gt;&gt; it is bulletproof yet, but it seems to be working.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 12/11/06 8:07 PM, &quot;Maestas, Christopher Daniel&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;cdmaest_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sometimes we have users that like to do from within a single job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (think schedule within an job scheduler allocation):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpiexec -n X myprog&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpiexec -n Y myprog2&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does mpiexec within Open MPI keep track of the node list it
</span><br>
<span class="quotelev2">&gt;&gt; is using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if it binds to a particular scheduler?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For example with 4 nodes (2ppn SMP):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpiexec -n 2 myprog&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpiexec -n 2 myprog2&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpiexec -n 1 myprog3&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And assume this is by-slot allocation we would have the following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node1 - processor1 - myprog
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - processor2 - myprog
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node2 - processor1 - myprog2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - processor2 - myprog2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And for a by-node allocation:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node1 - processor1 - myprog
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - processor2 - myprog2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node2 - processor1 - myprog
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - processor2 - myprog2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think this is possible using ssh cause it shouldn't really matter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; how many times it spawns, but with something like torque it
</span><br>
<span class="quotelev2">&gt;&gt; would get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; restricted to a max process launch of 4. We would want the third
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec to block processes and eventually be run on the first
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available node allocation that frees up from myprog or myprog2 ....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For example for torque, we had to add the following to osc mpiexec:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Finally, since only one mpiexec can be the master at a
</span><br>
<span class="quotelev2">&gt;&gt; time, if your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code setup requires that mpiexec exit to get a result, you
</span><br>
<span class="quotelev2">&gt;&gt; can start a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;dummy&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec first in your batch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -server
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It runs no tasks itself but handles the connections of
</span><br>
<span class="quotelev2">&gt;&gt; other transient
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec clients.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It will shut down cleanly when the batch job exits or you
</span><br>
<span class="quotelev2">&gt;&gt; may kill the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; server explicitly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If the server is killed with SIGTERM (or HUP or INT), it will exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with a status of zero if there were no clients connected at
</span><br>
<span class="quotelev2">&gt;&gt; the time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If there were still clients using the server, the server
</span><br>
<span class="quotelev2">&gt;&gt; will kill all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; their tasks, disconnect from the clients, and exit with status 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So a user ran:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -server
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -n 2 myprog
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -n 2 myprog2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And the server kept track of the allocation ... I would
</span><br>
<span class="quotelev2">&gt;&gt; think that the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orted could do this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry if this sounds confusing ... But I'm sure it will
</span><br>
<span class="quotelev2">&gt;&gt; clear up with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any further responses I make. :-) -cdm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="10139.php">Sefa Arslan: "[OMPI users] Using dual infiniband HCA cards"</a>
<li><strong>Previous message:</strong> <a href="10137.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>In reply to:</strong> <a href="10137.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10146.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Reply:</strong> <a href="10146.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
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
