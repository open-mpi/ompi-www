<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 28 22:35:34 2006" -->
<!-- isoreceived="20061129033534" -->
<!-- sent="Tue, 28 Nov 2006 20:35:22 -0700" -->
<!-- isosent="20061129033522" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pernode request" -->
<!-- id="C1924E0A.98D%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="347180497203A942A6AA82C85846CBC9034F60CC_at_ES23SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-28 22:35:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2244.php">Brian W. Barrett: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2242.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>In reply to:</strong> <a href="2242.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2245.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Aha - I think we have a misunderstanding. Please see comments below:
<br>
<p><p>On 11/28/06 8:14 PM, &quot;Maestas, Christopher Daniel&quot; &lt;cdmaest_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the feedback Ralph.  Comments below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, November 28, 2006 3:27 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Pernode request
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We already have --pernode, which spawns one process per node. You can
</span><br>
<span class="quotelev1">&gt; also launch one process/slot across all available slots by simply not
</span><br>
<span class="quotelev1">&gt; specifying the number of processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cdm&gt; I think I originally requested the -pernode feature. :-)  I've seen
</span><br>
<span class="quotelev1">&gt; one issue I know of ...
</span><br>
<span class="quotelev1">&gt; When used in the following manner:
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec -pernode -np N&quot; and if N is &gt; allocated nodes, it should error
</span><br>
<span class="quotelev1">&gt; out and not proceed.  I need to update/learn to update the trac ticket
</span><br>
<span class="quotelev1">&gt; on this.
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<p>This is an incorrect usage - the &quot;pernode&quot; option is only intended to be
<br>
used without any specification of the number of processes. Pernode instructs
<br>
the system to spawn one process/node across the entire allocation - we
<br>
simply ignore any attempt to indicate the number of processes.
<br>
<p>I suppose I could check and error out if you specify the number of procs AND
<br>
--pernode. I would have to check the code, to be honest - I may already be
<br>
doing so. Just don't remember :-)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I gather this option would say &quot;spawn N procs/node across all nodes&quot; - I
</span><br>
<span class="quotelev1">&gt; can understand the possible usefulness, but I'm not sure when we would
</span><br>
<span class="quotelev1">&gt; get to it. Also, it isn't clear from the discussion how it differs from
</span><br>
<span class="quotelev1">&gt; our &quot;spawn one proc/slot&quot; option - unless you either (a) don't want to
</span><br>
<span class="quotelev1">&gt; use all the available processors, or (b) want to oversubscribe the
</span><br>
<span class="quotelev1">&gt; nodes. Are either of those something people really would want to do on a
</span><br>
<span class="quotelev1">&gt; frequent enough basis to justify another command line option?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cdm&gt; I was only thinking as we see dual/quad core processors on nodes
</span><br>
<span class="quotelev1">&gt; where this would be helpful.  Something I would see wanting to do in a
</span><br>
<span class="quotelev1">&gt; scaling/profiling study with this is hitting on (a) since we tend to do
</span><br>
<span class="quotelev1">&gt; that to find out sweet spots and get measurements.  Although I can see
</span><br>
<span class="quotelev1">&gt; the case for (b) to easily oversubscribe by some extra count and see
</span><br>
<span class="quotelev1">&gt; what happens there too.  This and the -pernode feature I think make it
</span><br>
<span class="quotelev1">&gt; easy not to have to keep count on the -np when you allocate N nodes.
</span><br>
<span class="quotelev1">&gt; You can just run it on your allocated set.  We tend to submit 1000s of
</span><br>
<span class="quotelev1">&gt; jobs running varying benchmarks and parsing the output and do have users
</span><br>
<span class="quotelev1">&gt; wanting to allocate on a pernode basis without the worry of the -np
</span><br>
<span class="quotelev1">&gt; based on their N size.
</span><br>
<p>It sounds then like having the capability of spawning one proc/slot and
<br>
doing pernode (separately, of course) covers the main options of interest.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just asking for clarity - I don't have any a priori opposition to the
</span><br>
<span class="quotelev1">&gt; notion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cdm&gt; it was more my hope that OSC mpiexec and Open MPI mpiexec options
</span><br>
<span class="quotelev1">&gt; would eventually merge into common options.  A guy can dream can't he?
</span><br>
<span class="quotelev1">&gt; ;-)
</span><br>
<p>Guess that's up to the MPI folks on the team - from an RTE perspective, I
<br>
don't have an opinion either way.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -cdm
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="2244.php">Brian W. Barrett: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2242.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>In reply to:</strong> <a href="2242.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2245.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
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
