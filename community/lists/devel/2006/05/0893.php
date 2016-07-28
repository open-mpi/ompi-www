<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 24 10:27:29 2006" -->
<!-- isoreceived="20060524142729" -->
<!-- sent="Wed, 24 May 2006 10:27:13 -0400" -->
<!-- isosent="20060524142713" -->
<!-- name="Paul Donohue" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Oversubscription/Scheduling Bug" -->
<!-- id="20060524142713.GO4690_at_TopQuark.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF8C3CE1_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Paul Donohue (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-24 10:27:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0894.php">George Bosilca: "Re: [OMPI devel] behavior of the r2 component"</a>
<li><strong>Previous message:</strong> <a href="0892.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>In reply to:</strong> <a href="0892.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0897.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt; &gt; Since I have single-processor nodes, the obvious solution 
</span><br>
<span class="quotelev2">&gt; &gt; would be to set slots=0 for each of my nodes, so that using 1 
</span><br>
<span class="quotelev2">&gt; &gt; slot for every run causes the nodes to be oversubscribed.  
</span><br>
<span class="quotelev2">&gt; &gt; However, it seems that slots=0 is treated like 
</span><br>
<span class="quotelev2">&gt; &gt; slots=infinity, so my processes run in Aggressive Mode, and I 
</span><br>
<span class="quotelev2">&gt; &gt; loose the ability to oversubscribe my node using two 
</span><br>
<span class="quotelev2">&gt; &gt; independent processes.
</span><br>
<span class="quotelev1">&gt; I'd prefer to keep the slots=0 synonymous to &quot;infinity&quot;, if only for
</span><br>
<span class="quotelev1">&gt; historical reasons (it's also less code to change :-) ).
</span><br>
Understandable. 'slots=0' mapping to 'infinity' is useful feature, I think.  I only mentioned it because I figured I should give justification as to why mpi_yield_when_idle working properly was necessary (since it is not possible to duplicate its functionality by mucking with the slots value).
<br>
<p><span class="quotelev2">&gt; &gt; So, I tried setting '--mca mpi_yield_when_idle 1', since this 
</span><br>
<span class="quotelev2">&gt; &gt; sounded like it was meant to force Degraded Mode.  But, it 
</span><br>
<span class="quotelev2">&gt; &gt; didn't seem to do anything - my processes still ran in 
</span><br>
<span class="quotelev2">&gt; &gt; Aggressive Mode.  I skimmed through the source code real 
</span><br>
<span class="quotelev2">&gt; &gt; quick, and it doesn't look like mpi_yield_when_idle is ever 
</span><br>
<span class="quotelev2">&gt; &gt; actually used.
</span><br>
<span class="quotelev1">&gt; Are you sure?  How did you test this?
</span><br>
<p>I'm using OpenMPI 1.0.2 (incase it makes a difference)
<br>
<p>$ mpirun -np 2 --hostfile test --host psd.umd.edu --mca mpi_yield_when_idle 1 --mca orte_debug 1 hostname 2&gt;&amp;1 | grep yield
<br>
[psd:30325] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --debug --bootproxy 1 --name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename &lt;template&gt; --universe paul_at_psd:default-universe-30325 --nsreplica &quot;0.0.0;tcp://128.8.96.50:35281&quot; --gprreplica &quot;0.0.0;tcp://128.8.96.50:35281&quot; --mpi-call-yield 0
<br>
[psd:30325] pls:rsh: not oversubscribed -- setting mpi_yield_when_idle to 0
<br>
[psd:30325] pls:rsh: executing: orted --debug --bootproxy 1 --name 0.0.1 --num_procs 2 --vpid_start 0 --nodename psd.umd.edu --universe paul_at_psd:default-universe-30325 --nsreplica &quot;0.0.0;tcp://128.8.96.50:35281&quot; --gprreplica &quot;0.0.0;tcp://128.8.96.50:35281&quot; --mpi-call-yield 0
<br>
$
<br>
<p>When it runs the worker processes, it passes --mpi-call-yield 0 to the workers even though I set mpi_yield_when_idle to 1
<br>
<p>Perhaps this has something to do with it:
<br>
(lines 689-703 of orte/mca/pls/rsh/pls_rsh_module.c)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* set the progress engine schedule for this node.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* if node_slots is set to zero, then we default to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* NOT being oversubscribed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ras_node-&gt;node_slots &gt; 0 &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_get_size(&amp;rmaps_node-&gt;node_procs) &gt; ras_node-&gt;node_slots) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mca_pls_rsh_component.debug) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;pls:rsh: oversubscribed -- setting mpi_yield_when_idle to 1 (%d %d)&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ras_node-&gt;node_slots, opal_list_get_size(&amp;rmaps_node-&gt;node_procs));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(argv[call_yield_index]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argv[call_yield_index] = strdup(&quot;1&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mca_pls_rsh_component.debug) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;pls:rsh: not oversubscribed -- setting mpi_yield_when_idle to 0&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(argv[call_yield_index]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argv[call_yield_index] = strdup(&quot;0&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>It looks like mpi_yield_when_idle is ignored and only slots are taken into account...
<br>
<p><span class="quotelev1">&gt; It may be difficult to tell if this behavior is working properly
</span><br>
<span class="quotelev1">&gt; because, by definition, if you're in an oversubscribed situation
</span><br>
<span class="quotelev1">&gt; (assuming that all your processes are trying to fully utilize the CPU),
</span><br>
<span class="quotelev1">&gt; the entire system could be running pretty slowly anyway.
</span><br>
<p>In my case (fortunately? unfortunately?), it's fairly obvious when Degraded mode Aggressive mode are being used, since one process is idle (waiting for user input) while the other one is running.  Even though the node is actually oversubscribed, in Degraded mode, the running process should be able to use most of the CPU since the idle process isn't doing much.
<br>
<p><span class="quotelev1">&gt; I just did a small test: running 3 processes on a 2-way SMP.  Each MPI
</span><br>
<span class="quotelev1">&gt; process sends a short message around in a ring pattern 100 times:
</span><br>
<p>I tried testing 4 processes on a 2-way SMP as well.
<br>
One pair of processes is waiting on STDIN.
<br>
The other pair of processes is running calculations.
<br>
<p>First, I ran only the calculations without the STDIN processes - 35.5 second run time
<br>
Then I ran both pairs of processes, using slots=2 in my hostfile, and mpi_yield_when_idle=1 for both pairs - 25 minute run time
<br>
Then I ran both pairs of processes, using slots=1 in my hostfile - 48 second run time
<br>
<p>Pretty drastic difference ;-)
<br>
<p><span class="quotelev2">&gt; &gt; I also noticed another bug in the scheduler:
</span><br>
<span class="quotelev2">&gt; &gt; hostfile:
</span><br>
<span class="quotelev2">&gt; &gt;  A slots=2 max-slots=2
</span><br>
<span class="quotelev2">&gt; &gt;  B slots=2 max-slots=2
</span><br>
<span class="quotelev2">&gt; &gt; 'mpirun -np 5' quits with an over-subscription error
</span><br>
<span class="quotelev2">&gt; &gt; 'mpirun -np 3 --host B' hangs and just chews up CPU cycles forever
</span><br>
<span class="quotelev1">&gt; Yoinks; this is definitely a bug.  I've filed a bug in our tracker to
</span><br>
<span class="quotelev1">&gt; get this fixed.  Thanks for reporting it.
</span><br>
:)
<br>
<p>(From the bug in the tracker:)
<br>
<span class="quotelev2">&gt;&gt;(I'm assuming that the &quot;--hostfile hostfile&quot; is implicit in the above
</span><br>
<span class="quotelev2">&gt;&gt;examples and was simply omitted for brevity)
</span><br>
Actually, I was using /usr/local/etc/openmpi-default-hostfile
<br>
So, yeah, '--hostfile /usr/local/etc/openmpi-default-hostfile' was implicit
<br>
<p><span class="quotelev2">&gt; &gt; And finally, on <a href="http://www.open-mpi.org/faq/?category=tuning">http://www.open-mpi.org/faq/?category=tuning</a> 
</span><br>
<span class="quotelev2">&gt; &gt; - 11. How do I tell Open MPI to use processor and/or memory affinity?
</span><br>
<span class="quotelev2">&gt; &gt; It mentions that OpenMPI will automatically disable processor 
</span><br>
<span class="quotelev2">&gt; &gt; affinity on oversubscribed nodes.  When I first read it, I 
</span><br>
<span class="quotelev1">&gt; Correct.
</span><br>
<span class="quotelev2">&gt; &gt; made the assumption that processor affinity and Degraded Mode 
</span><br>
<span class="quotelev2">&gt; &gt; were incompatible.  However, it seems that independent 
</span><br>
<span class="quotelev2">&gt; &gt; non-oversubscribed processes running in Degraded Mode work 
</span><br>
<span class="quotelev2">&gt; &gt; fine with processor affinity - it's only actually 
</span><br>
<span class="quotelev2">&gt; &gt; oversubscribed processes which have problems.  A note that 
</span><br>
<span class="quotelev2">&gt; &gt; Degraded Mode and Processor Affinity work together even 
</span><br>
<span class="quotelev2">&gt; &gt; though Processor Affinity and oversubscription do not would be nice.
</span><br>
<span class="quotelev1">&gt; Good point.  I'll update the FAQ later today; thanks!
</span><br>
Sweet!  It would probably be worth mentioning mpi_yield_when_idle=1 in there too - it took some digging for me to find that option
<br>
(After it's fixed, of course ;-) )
<br>
<p>Thanks a bunch!
<br>
-Paul
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0894.php">George Bosilca: "Re: [OMPI devel] behavior of the r2 component"</a>
<li><strong>Previous message:</strong> <a href="0892.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>In reply to:</strong> <a href="0892.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0897.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
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
