<?
$subject_val = "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 30 14:26:04 2009" -->
<!-- isoreceived="20090730182604" -->
<!-- sent="Thu, 30 Jul 2009 12:25:48 -0600" -->
<!-- isosent="20090730182548" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)" -->
<!-- id="75E90853-3094-413D-A9E8-036D9D2496BF_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A0801CEC7AFED846978515099D145DA5153BD55263_at_ES01SNLNT.srn.sandia.gov" -->
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
<strong>Date:</strong> 2009-07-30 14:25:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10148.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Previous message:</strong> <a href="10146.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>In reply to:</strong> <a href="10146.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10148.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Reply:</strong> <a href="10148.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 30, 2009, at 11:49 AM, Adams, Brian M wrote:
<br>
<p><span class="quotelev1">&gt; Apologies if I'm being confusing; I'm probably trying to get at  
</span><br>
<span class="quotelev1">&gt; atypical use cases.  M and N  need not correspond to the number of  
</span><br>
<span class="quotelev1">&gt; nodes/ppn nor ppn/nodes available.  By node vs. slot doesn't much  
</span><br>
<span class="quotelev1">&gt; matter, as long as in the end I don't oversubscribe any node.  By  
</span><br>
<span class="quotelev1">&gt; slot might be good for efficiency in some apps, but I can't make a  
</span><br>
<span class="quotelev1">&gt; general case for it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think what you proposed offers some help in the case where N is an  
</span><br>
<span class="quotelev1">&gt; integer multiple of the number of available nodes, but perhaps not  
</span><br>
<span class="quotelev1">&gt; in other cases.  I must be missing something here, so instead of  
</span><br>
<span class="quotelev1">&gt; being fully general, perhaps consider a  specific case.  Suppose we  
</span><br>
<span class="quotelev1">&gt; have 4 nodes, 8 ppn (32 slots is I think the ompi language).  I  
</span><br>
<span class="quotelev1">&gt; might want to schedule, for example
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. M=2 simultaneous N=16 processor jobs: Here I believe what you  
</span><br>
<span class="quotelev1">&gt; suggested will work since N is a multiple of the available number of  
</span><br>
<span class="quotelev1">&gt; nodes.  I could use either npernode 4 or just bynode and I think get  
</span><br>
<span class="quotelev1">&gt; the same result: an even distribution of tasks.  (similar applies  
</span><br>
<span class="quotelev1">&gt; to, e.g., 8x4, 4x8)
</span><br>
<p>Yes, agreed
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. M=16 simultaneous N=2 processor jobs: it seems if I use bynode or  
</span><br>
<span class="quotelev1">&gt; npernode, I would end up with 16 processes on each of the first two  
</span><br>
<span class="quotelev1">&gt; nodes (similar applies to, e.g., 32x1 or 10x3).  Scheduling many  
</span><br>
<span class="quotelev1">&gt; small jobs is a common problem for us.
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. M=3 simultaneous, N=10 processor jobs: I think we'd end up with  
</span><br>
<span class="quotelev1">&gt; this distribution (where A-D are nodes and 0-2 jobs)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A 0 0 0 1 1 1 2 2 2
</span><br>
<span class="quotelev1">&gt; B 0 0 0 1 1 1 2 2 2
</span><br>
<span class="quotelev1">&gt; C 0 0   1 1   2 2
</span><br>
<span class="quotelev1">&gt; D 0 0   1 1   2 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where A and B are over-subscribed and there are more than the two  
</span><br>
<span class="quotelev1">&gt; unused slots I'd expect in the whole allocation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, I can manage all these via a script that partitions the  
</span><br>
<span class="quotelev1">&gt; machine files, just wondering which scenarios OpenMPI can manage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Have you looked at the relative indexing in 1.3.3? You could specify  
<br>
any of these in relative index terms, and have one &quot;hostfile&quot; that  
<br>
would support 16x2 operations. This would work then for any allocation.
<br>
<p>Your launch script could even just do it, something like this:
<br>
<p>mpirun -n 2 -host +n0:1,+n1:1 app
<br>
mpirun -n 2 -host +n0:2,+n1:2 app
<br>
<p>etc. Obviously, you could compute the relative indexing and just stick  
<br>
it in as required.
<br>
<p>Likewise, you could use the new &quot;seq&quot; (sequential) mapper to achieve  
<br>
any desired layout, again utilizing relative indexing to avoid having  
<br>
to create a special hostfile for each run.
<br>
<p>Note that in all cases, you can specify a -n N that will tell OMPI to  
<br>
only execute N processes, regardless of what is in the sequential  
<br>
mapper file or -host.
<br>
<p>If none of those work well, please let me know. I'm happy to create  
<br>
the required capability as I'm sure LANL will use it too (know of  
<br>
several similar cases here, but the current options seem okay for them).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, July 29, 2009 4:19 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Multiple mpiexec's within a job
</span><br>
<span class="quotelev2">&gt;&gt; (schedule within a scheduled machinefile/job allocation)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Oh my - that does take me back a long way! :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you need these processes to be mapped byslot (i.e., do you
</span><br>
<span class="quotelev2">&gt;&gt; care if the process ranks are sharing nodes)? If not, why not
</span><br>
<span class="quotelev2">&gt;&gt; add &quot;-bynode&quot; to your cmd line?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alternatively, given the mapping you want, just do
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -npernode 1 application.exe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This would launch one copy on each of your N nodes. So if you
</span><br>
<span class="quotelev2">&gt;&gt; fork M times, you'll wind up with the exact pattern you
</span><br>
<span class="quotelev2">&gt;&gt; wanted. And, as each one exits, you could immediately launch
</span><br>
<span class="quotelev2">&gt;&gt; a replacement without worrying about oversubscription.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does that help?
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS. we dropped that &quot;persistent&quot; operation - caused way too
</span><br>
<span class="quotelev2">&gt;&gt; many problems with cleanup and other things. :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 29, 2009, at 3:46 PM, Adams, Brian M wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph (all),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm resurrecting this 2006 thread for a status check.  The
</span><br>
<span class="quotelev2">&gt;&gt; new 1.3.x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machinefile behavior is great (thanks!) -- I can use
</span><br>
<span class="quotelev2">&gt;&gt; machinefiles to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; manage multiple simultaneous mpiruns within a single torque
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation (where the hosts are a subset of $PBS_NODEFILE).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, this requires some careful management of machinefiles.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm curious if OpenMPI now directly supports the behavior I need,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; described in general in the quote below.  Specifically,
</span><br>
<span class="quotelev2">&gt;&gt; given a single
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS/Torque allocation of M*N processors, I will run a
</span><br>
<span class="quotelev2">&gt;&gt; serial program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that will fork M times.  Each of the M forked processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; calls 'mpirun -np N application.exe' and blocks until completion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This seems akin to the case you described of &quot;mpiruns executed in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; separate windows/prompts.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I'd like to see is the M processes &quot;tiled&quot; across the
</span><br>
<span class="quotelev2">&gt;&gt; available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slots, so all M*N processors are used.  What I see instead
</span><br>
<span class="quotelev2">&gt;&gt; appears at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; face value to be the first N resources being oversubscribed M times.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, when one of the forked processes returns, I'd like to
</span><br>
<span class="quotelev2">&gt;&gt; be able to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spawn another and have its mpirun schedule on the resources
</span><br>
<span class="quotelev2">&gt;&gt; freed by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the previous one that exited.  Is any of this possible?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried starting an orted (1.3.3, roughly as you suggested
</span><br>
<span class="quotelev2">&gt;&gt; below), but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; got this error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orted --daemonize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gy8:25871] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runtime/orte_init.c at line 125
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---- It looks like orte_init failed for some reason; your parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process is likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process can fail during orte_init; some of which are due to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configuration or environment problems.  This failure
</span><br>
<span class="quotelev2">&gt;&gt; appears to be an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; internal failure; here's some additional information (which
</span><br>
<span class="quotelev2">&gt;&gt; may only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be relevant to an Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_ess_base_select failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---- [gy8:25871] [[INVALID],INVALID] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev2">&gt;&gt; found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orted/orted_main.c at line 323
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I spared the debugging info as I'm not even sure this is a correct
</span><br>
<span class="quotelev3">&gt;&gt;&gt; invocation...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for any suggestions you can offer!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian M. Adams, PhD (briadam_at_[hidden]) Optimization and
</span><br>
<span class="quotelev2">&gt;&gt; Uncertainty
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Quantification Sandia National Laboratories, Albuquerque, NM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.sandia.gov/~briadam">http://www.sandia.gov/~briadam</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: Ralph Castain (rhc_at_[hidden])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2006-12-12 00:46:59
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Chris
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Some of this is doable with today's code....and one of these
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; behaviors is not. :-(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI/OpenRTE can be run in &quot;persistent&quot; mode - this allows
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; multiple jobs to share the same allocation. This works much as you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; describe (syntax is slightly different, of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; course!) - the first mpirun will map using whatever mode was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; requested, then the next mpirun will map starting from where the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; first one left off.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I *believe* you can run each mpirun in the background.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, I don't know if this has really been tested enough to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support such a claim. All testing that I know about to-date has
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; executed mpirun in the foreground - thus, your example
</span><br>
<span class="quotelev2">&gt;&gt; would execute
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sequentially instead of in parallel.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I know people have tested multiple mpirun's operating in parallel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; within a single allocation (i.e., persistent mode) where
</span><br>
<span class="quotelev2">&gt;&gt; the mpiruns
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are executed in separate windows/prompts.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So I suspect you could do something like you describe -
</span><br>
<span class="quotelev2">&gt;&gt; just haven't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; personally verified it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Where we definitely differ is that Open MPI/RTE will *not* block
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; until resources are freed up from the prior mpiruns.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Instead, we will attempt to execute each mpirun immediately - and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will error out the one(s) that try to execute without sufficient
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; resources. I imagine we could provide the kind of &quot;flow
</span><br>
<span class="quotelev2">&gt;&gt; control&quot; you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; describe, but I'm not sure when that might happen.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am (in my copious free time...haha) working on an &quot;orteboot&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program that will startup a virtual machine to make the persistent
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mode of operation a little easier. For now, though, you
</span><br>
<span class="quotelev2">&gt;&gt; can do it by:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. starting up the &quot;server&quot; using the following command:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orted --seed --persistent --scope public [--universe foo]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. do your mpirun commands. They will automagically find
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;server&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and connect to it. If you specified a universe name when
</span><br>
<span class="quotelev2">&gt;&gt; starting the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; server, then you must specify the same universe name on
</span><br>
<span class="quotelev2">&gt;&gt; your mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; commands.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When you are done, you will have to (unfortunately)
</span><br>
<span class="quotelev2">&gt;&gt; manually &quot;kill&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the server and remove its session directory. I have a
</span><br>
<span class="quotelev2">&gt;&gt; program called
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;ortehalt&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the trunk that will do this cleanly for you, but it
</span><br>
<span class="quotelev2">&gt;&gt; isn't yet in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the release distributions. You are welcome to use it,
</span><br>
<span class="quotelev2">&gt;&gt; though, if you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are working with the trunk - I can't promise it is
</span><br>
<span class="quotelev2">&gt;&gt; bulletproof yet,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but it seems to be working.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 12/11/06 8:07 PM, &quot;Maestas, Christopher Daniel&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;cdmaest_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sometimes we have users that like to do from within a single job
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (think schedule within an job scheduler allocation):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;mpiexec -n X myprog&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;mpiexec -n Y myprog2&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Does mpiexec within Open MPI keep track of the node list it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is using
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if it binds to a particular scheduler?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For example with 4 nodes (2ppn SMP):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;mpiexec -n 2 myprog&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;mpiexec -n 2 myprog2&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;mpiexec -n 1 myprog3&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; And assume this is by-slot allocation we would have the following
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allocation:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node1 - processor1 - myprog
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - processor2 - myprog
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node2 - processor1 - myprog2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - processor2 - myprog2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; And for a by-node allocation:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node1 - processor1 - myprog
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - processor2 - myprog2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node2 - processor1 - myprog
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - processor2 - myprog2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I think this is possible using ssh cause it shouldn't
</span><br>
<span class="quotelev2">&gt;&gt; really matter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; how many times it spawns, but with something like torque it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would get
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; restricted to a max process launch of 4. We would want the third
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec to block processes and eventually be run on the first
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; available node allocation that frees up from myprog or
</span><br>
<span class="quotelev2">&gt;&gt; myprog2 ....
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For example for torque, we had to add the following to
</span><br>
<span class="quotelev2">&gt;&gt; osc mpiexec:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Finally, since only one mpiexec can be the master at a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; time, if your
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; code setup requires that mpiexec exit to get a result, you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can start a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;dummy&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec first in your batch
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; job:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec -server
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It runs no tasks itself but handles the connections of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; other transient
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec clients.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It will shut down cleanly when the batch job exits or you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; may kill the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; server explicitly.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If the server is killed with SIGTERM (or HUP or INT), it
</span><br>
<span class="quotelev2">&gt;&gt; will exit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with a status of zero if there were no clients connected at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the time.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If there were still clients using the server, the server
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will kill all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; their tasks, disconnect from the clients, and exit with status 1.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So a user ran:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec -server
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec -n 2 myprog
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec -n 2 myprog2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; And the server kept track of the allocation ... I would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; think that the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; orted could do this?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sorry if this sounds confusing ... But I'm sure it will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; clear up with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; any further responses I make. :-) -cdm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10147/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10148.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Previous message:</strong> <a href="10146.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>In reply to:</strong> <a href="10146.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10148.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Reply:</strong> <a href="10148.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
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
