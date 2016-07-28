<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 26 12:01:34 2006" -->
<!-- isoreceived="20060526160134" -->
<!-- sent="Fri, 26 May 2006 12:01:26 -0400" -->
<!-- isosent="20060526160126" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Oversubscription/Scheduling Bug" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF8FD743_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] Oversubscription/Scheduling Bug" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-26 12:01:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0898.php">Brian W. Barrett: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Previous message:</strong> <a href="0896.php">Andre Lichei: "Re: [OMPI devel] behavior of the r2 component"</a>
<li><strong>Maybe in reply to:</strong> <a href="0851.php">Paul Donohue: "[OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0898.php">Brian W. Barrett: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Reply:</strong> <a href="0898.php">Brian W. Barrett: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Paul Donohue
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, May 24, 2006 10:27 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Oversubscription/Scheduling Bug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI 1.0.2 (incase it makes a difference)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 --hostfile test --host psd.umd.edu --mca 
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle 1 --mca orte_debug 1 hostname 2&gt;&amp;1 | grep yield
</span><br>
<span class="quotelev1">&gt; [psd:30325] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted 
</span><br>
<span class="quotelev1">&gt; --debug --bootproxy 1 --name &lt;template&gt; --num_procs 2 
</span><br>
<span class="quotelev1">&gt; --vpid_start 0 --nodename &lt;template&gt; --universe 
</span><br>
<span class="quotelev1">&gt; paul_at_psd:default-universe-30325 --nsreplica 
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://128.8.96.50:35281&quot; --gprreplica 
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://128.8.96.50:35281&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [psd:30325] pls:rsh: not oversubscribed -- setting 
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 0
</span><br>
<span class="quotelev1">&gt; [psd:30325] pls:rsh: executing: orted --debug --bootproxy 1 
</span><br>
<span class="quotelev1">&gt; --name 0.0.1 --num_procs 2 --vpid_start 0 --nodename 
</span><br>
<span class="quotelev1">&gt; psd.umd.edu --universe paul_at_psd:default-universe-30325 
</span><br>
<span class="quotelev1">&gt; --nsreplica &quot;0.0.0;tcp://128.8.96.50:35281&quot; --gprreplica 
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://128.8.96.50:35281&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When it runs the worker processes, it passes --mpi-call-yield 
</span><br>
<span class="quotelev1">&gt; 0 to the workers even though I set mpi_yield_when_idle to 1
</span><br>
<p>This actually winds up in a comedy of errors.  The end result is that
<br>
mpi_yield_when_idle *is* set to 1 in the MPI processes.
<br>
<p>1. Strictly speaking, you're right that the rsh pls should probably not
<br>
be setting that variable when *not* oversubscribing.  More specifically,
<br>
we should only set it to 1 when we are oversubscribing.  But by point 3
<br>
(below), this is actually harmless.
<br>
<p>2. The orted gets the option &quot;--mpi-call-yield 0&quot;, but it does do the
<br>
Right thing, actually -- it only sets the MCA parameter to 1 if the
<br>
argument to --mpi-call-yield is &gt; 0.  Hence, in this case, it does not
<br>
set the MCA parameter.
<br>
<p>3. mpirun and the orted bundle up MCA parameters from the mpirun command
<br>
line and environment and seed them in the newly-spawned processes.  As
<br>
such, mpirun command line and environment MCA parameters override
<br>
anything that the orted may have set (e.g., via --mpi-call-yield).  This
<br>
is actually by design.
<br>
<p>You can see this by slightly modifying your test command -- run &quot;env&quot;
<br>
instead of &quot;hostname&quot;.  You'll see that the environment variable
<br>
OMPI_MCA_mpi_yield_when_idle is set to the value that you passed in on
<br>
the mpirun command line, regardless of a) whether you're oversubscribing
<br>
or not, and b) whatever is passed in through the orted.
<br>
<p>I'm trying to think of a case where this will not be true, and I think
<br>
it's only platforms where we don't use the orted (e.g., Red Storm, where
<br>
oversubscription is not an issue).
<br>
<p><span class="quotelev1">&gt; I tried testing 4 processes on a 2-way SMP as well.
</span><br>
<span class="quotelev1">&gt; One pair of processes is waiting on STDIN.
</span><br>
<span class="quotelev1">&gt; The other pair of processes is running calculations.
</span><br>
<span class="quotelev1">&gt; First, I ran only the calculations without the STDIN 
</span><br>
<span class="quotelev1">&gt; processes - 35.5 second run time
</span><br>
<span class="quotelev1">&gt; Then I ran both pairs of processes, using slots=2 in my 
</span><br>
<span class="quotelev1">&gt; hostfile, and mpi_yield_when_idle=1 for both pairs - 25 
</span><br>
<span class="quotelev1">&gt; minute run time
</span><br>
<span class="quotelev1">&gt; Then I ran both pairs of processes, using slots=1 in my 
</span><br>
<span class="quotelev1">&gt; hostfile - 48 second run time
</span><br>
<p>This is quite fishy.  Note that the processes blocking on STDIN should
<br>
not be affected by the MPI yield setting -- the MPI yield setting is
<br>
*only* in effect when you're waiting for progress in an MPI function
<br>
(e.g., in MPI_SEND or MPI_RECV or the like).  So:
<br>
<p>- on a 2 way SMP
<br>
- if you have N processes running
<br>
- 2 of which are blocking in MPI calls
<br>
- (N-2) of which are blocking on &lt;STDIN&gt;
<br>
<p>Note that Open MPI's &quot;blocking&quot; calls usually spin trying to make
<br>
progress.  So in the above scenario, you'll have 2 MPI processes
<br>
spinning heavily and probably fully utilizing both CPUs.  The other
<br>
(N-2) processes should not be a factor.
<br>
<p>So the question is -- why does setting mpi_yield_when_idle to 1 take so
<br>
much time?  I'm guessing that it's doing exactly what it's supposed to
<br>
be doing -- lots and lots of yielding (although I agree that a
<br>
difference of 48 seconds -&gt; 25 minutes seems a bit excessive).  The
<br>
constant yielding could be quite expensive.  Are your 2 processes doing
<br>
a lot of very large communications with each other?
<br>
<p><span class="quotelev2">&gt; &gt; Good point.  I'll update the FAQ later today; thanks!
</span><br>
<span class="quotelev1">&gt; Sweet!  It would probably be worth mentioning 
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle=1 in there too - it took some digging for 
</span><br>
<span class="quotelev1">&gt; me to find that option
</span><br>
<span class="quotelev1">&gt; (After it's fixed, of course ;-) )
</span><br>
<p>Will do.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0898.php">Brian W. Barrett: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Previous message:</strong> <a href="0896.php">Andre Lichei: "Re: [OMPI devel] behavior of the r2 component"</a>
<li><strong>Maybe in reply to:</strong> <a href="0851.php">Paul Donohue: "[OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0898.php">Brian W. Barrett: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Reply:</strong> <a href="0898.php">Brian W. Barrett: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
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
