<?
$subject_val = "Re: [OMPI users] Busy waiting [was Re:  (no subject)]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 06:56:14 2008" -->
<!-- isoreceived="20080424105614" -->
<!-- sent="Thu, 24 Apr 2008 12:56:03 +0200" -->
<!-- isosent="20080424105603" -->
<!-- name="Ingo Josopait" -->
<!-- email="ingo.josopait_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Busy waiting [was Re:  (no subject)]" -->
<!-- id="48106743.5030305_at_gmx.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080423221959.GA23971_at_eponymous" -->
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
<strong>Subject:</strong> Re: [OMPI users] Busy waiting [was Re:  (no subject)]<br>
<strong>From:</strong> Ingo Josopait (<em>ingo.josopait_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 06:56:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5482.php">Tomas Ukkonen: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5480.php">Andy Georgi: "[OMPI users] coll_tuned_decision_fixed.c"</a>
<li><strong>In reply to:</strong> <a href="5474.php">Barry Rountree: "[OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5484.php">Alberto Giannetti: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Reply:</strong> <a href="5484.php">Alberto Giannetti: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Reply:</strong> <a href="5491.php">Barry Rountree: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using one of the nodes as a desktop computer. Therefore it is most
<br>
important for me that the mpi program is not so greedily acquiring cpu
<br>
time. But I would imagine that the energy consumption is generally a big
<br>
issue, since energy is a major cost factor in a computer cluster. When a
<br>
cpu is idle, it uses considerably less energy. Last time I checked my
<br>
computer used 180W when both cpu cores were working and 110W when both
<br>
cores were idle.
<br>
<p>I just made a small hack to solve the problem. I inserted a simple sleep
<br>
call into the function 'opal_condition_wait':
<br>
<p>--- orig/openmpi-1.2.6/opal/threads/condition.h
<br>
+++ openmpi-1.2.6/opal/threads/condition.h
<br>
@@ -78,6 +78,7 @@
<br>
&nbsp;#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (c-&gt;c_signaled == 0) {
<br>
+           usleep(1000);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_progress();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>The usleep call will let the program sleep for about 4 ms (it won't
<br>
sleep for a shorter time because of some timer granularity). But that is
<br>
good enough for me. The cpu usage is (almost) zero when the tasks are
<br>
waiting for one another.
<br>
<p>For a proper implementation you would want to actively poll without a
<br>
sleep call for a few milliseconds, and then use some other method that
<br>
sleeps not for a fixed time, but until new messages arrive.
<br>
<p><p><p>Barry Rountree schrieb:
<br>
<span class="quotelev1">&gt; On Wed, Apr 23, 2008 at 11:38:41PM +0200, Ingo Josopait wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I can think of several advantages that using blocking or signals to
</span><br>
<span class="quotelev2">&gt;&gt; reduce the cpu load would have:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Reduced energy consumption
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not necessarily.  Any time the program ends up running longer, the
</span><br>
<span class="quotelev1">&gt; cluster is up and running (and wasting electricity) for that amount of
</span><br>
<span class="quotelev1">&gt; time.  In the case where lots of tiny messages are being sent you could
</span><br>
<span class="quotelev1">&gt; easily end up using more energy.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Running additional background programs could be done far more efficiently
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's usually more efficient -- especially in terms of cache -- to batch
</span><br>
<span class="quotelev1">&gt; up programs to run one after the other instead of running them
</span><br>
<span class="quotelev1">&gt; simultaneously.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - It would be much simpler to examine the load balance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is true, but it's still pretty trivial to measure load imbalance.
</span><br>
<span class="quotelev1">&gt; MPI allows you to write a wrapper library that intercepts any MPI_*
</span><br>
<span class="quotelev1">&gt; call.  You can instrument the code however you like, then call PMPI_*,
</span><br>
<span class="quotelev1">&gt; then catch the return value, finish your instrumentation, and return
</span><br>
<span class="quotelev1">&gt; control to your program.  Here's some pseudocode:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int MPI_Barrier(MPI_Comm comm){
</span><br>
<span class="quotelev1">&gt; 	gettimeofday(&amp;start, NULL);
</span><br>
<span class="quotelev1">&gt; 	rc=PMPI_Barrier( comm );
</span><br>
<span class="quotelev1">&gt; 	gettimeofday(&amp;stop, NULL);
</span><br>
<span class="quotelev1">&gt; 	fprintf( logfile, &quot;Barrier on node %d took %lf seconds\n&quot;,
</span><br>
<span class="quotelev1">&gt; 		rank, delta(&amp;stop, &amp;start) );
</span><br>
<span class="quotelev1">&gt; 	return rc;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've got some code that does this for all of the MPI calls in OpenMPI
</span><br>
<span class="quotelev1">&gt; (ah, the joys of writing C code using python scripts).  Let me know if
</span><br>
<span class="quotelev1">&gt; you'd find it useful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It may depend on the type of program and the computational environment,
</span><br>
<span class="quotelev2">&gt;&gt; but there are certainly many cases in which putting the system in idle
</span><br>
<span class="quotelev2">&gt;&gt; mode would be advantageous. This is especially true for programs with
</span><br>
<span class="quotelev2">&gt;&gt; low network traffic and/or high load imbalances.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;grin&gt;  I could use a few more benchmarks like that.  Seriously, if
</span><br>
<span class="quotelev1">&gt; you're mostly concerned about saving energy, a quick hack is to set a
</span><br>
<span class="quotelev1">&gt; timer as soon as you enter an MPI call (say for 100ms) and if the timer
</span><br>
<span class="quotelev1">&gt; goes off while you're still in the call, use DVS to drop your CPU
</span><br>
<span class="quotelev1">&gt; frequency to the lowest value it has.  Then, when you exit the MPI call,
</span><br>
<span class="quotelev1">&gt; pop it back up to the highest frequency.  This can save a significant
</span><br>
<span class="quotelev1">&gt; amount of energy, but even here there can be a performance penalty.  For
</span><br>
<span class="quotelev1">&gt; example, UMT2K schleps around very large messages, and you really need
</span><br>
<span class="quotelev1">&gt; to be running as fast as possible during the MPI_Waitall calls or the
</span><br>
<span class="quotelev1">&gt; program will slow down by 1% or so (thus using more energy).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doing this just for Barriers and Allreduces seems to speed up the
</span><br>
<span class="quotelev1">&gt; program a tiny bit, but I haven't done enough runs to make sure this
</span><br>
<span class="quotelev1">&gt; isn't an artifact.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (This is my dissertation topic, so before asking any question be advised
</span><br>
<span class="quotelev1">&gt; that I WILL talk your ear off.)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;spin for a while and then block&quot; method that you mentioned earlier
</span><br>
<span class="quotelev2">&gt;&gt; seems to be a good compromise. Just do polling for some time that is
</span><br>
<span class="quotelev2">&gt;&gt; long compared to the corresponding system call, and then go to sleep if
</span><br>
<span class="quotelev2">&gt;&gt; nothing happens. In this way, the latency would be only marginally
</span><br>
<span class="quotelev2">&gt;&gt; increased, while less cpu time is wasted in the polling loops, and I
</span><br>
<span class="quotelev2">&gt;&gt; would be much happier.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm interested in seeing what this does for energy savings.  Are you
</span><br>
<span class="quotelev1">&gt; volunteering to test a patch?  (I've got four other papers I need to
</span><br>
<span class="quotelev1">&gt; get finished up, so it'll be a few weeks before I start coding.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Barry Rountree
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate, Computer Science
</span><br>
<span class="quotelev1">&gt; University of Georgia
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres schrieb:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 23, 2008, at 3:49 PM, Danesh Daroui wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do you really mean that Open-MPI uses busy loop in order to handle
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; incomming calls? It seems to be incorrect since
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; spinning is a very bad and inefficient technique for this purpose.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It depends on what you're optimizing for.  :-)  We're optimizing for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; minimum message passing latency on hosts that are not oversubscribed;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; polling is very good at that.  Polling is much better than blocking,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; particularly if the blocking involves a system call (which will be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;slow&quot;).  Note that in a compute-heavy environment, they nodes are  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; going to be running at 100% CPU anyway.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also keep in mind that you're only going to have &quot;waste&quot; spinning in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI if you have a loosely/poorly synchronized application.  Granted,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some applications are this way by nature, but we have not chosen to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; optimize spare CPU cycles for them.  As I said in a prior mail, adding  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a blocking strategy is on the to-do list, but it's fairly low in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; priority right now.  Someone may care / improve the message passing  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; engine to include blocking, but it hasn't happened yet.  Want to work  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on it?  :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And for reference: almost all MPI's do busy polling to minimize  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; latency.  Some of them will shift to blocking if nothing happens for a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;long&quot; time.  This second piece is what OMPI is lacking.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Why
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; don't you use blocking and/or signals instead of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW: I mentioned this in my other mail -- latency is quite definitely  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; negatively impacted when you use such mechanisms.  Blocking and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signals are &quot;slow&quot; (in comparison to polling).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think the priority of this task is very high because polling
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; just wastes resources of the system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In production HPC environments, the entire resource is dedicated to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the MPI app anyway, so there's nothing else that really needs it.  So  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we allow them to busy-spin.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is a mode to call yield() in the middle of every OMPI progress  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loop, but it's only helpful for loosely/poorly synchronized MPI apps  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and ones that use TCP or shared memory.  Low latency networks such as  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IB or Myrinet won't be as friendly to this setting because they're  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; busy polling (i.e., they call yield() much less frequently, if at all).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On the other hand,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; what Alberto claims is not reasonable to me.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Alberto,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Are you oversubscribing one node which means that you are running  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code on a single processor machine, pretending
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to have four CPUs?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Did you compile Open-MPI or installed from RPM?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Receiving process shouldn't be that expensive.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Danesh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres skrev:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Because on-node communication typically uses shared memory, so we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; currently have to poll.  Additionally, when using mixed on/off-node
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communication, we have to alternate between polling shared memory and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; polling the network.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Additionally, we actively poll because it's the best way to lower
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; latency.  MPI implementations are almost always first judged on their
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; latency, not [usually] their CPU utilization.  Going to sleep in a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; blocking system call will definitely negatively impact latency.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We have plans for implementing the &quot;spin for a while and then block&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; technique (as has been used in other MPI's and middleware layers),  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it hasn't been a high priority.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Apr 23, 2008, at 12:19 PM, Alberto Giannetti wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks Torje. I wonder what is the benefit of looping on the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; incoming
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; message-queue socket rather than using system I/O signals, like read
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; () or select().
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Apr 23, 2008, at 12:10 PM, Torje Henriksen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Alberto,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The blocked processes are in fact spin-waiting. While they don't  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; anything better to do (waiting for that message), they will check
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; their incoming message-queues in a loop.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; So the MPI_Recv()-operation is blocking, but it doesn't mean that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; processes are blocked by the OS scheduler.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I hope that made some sense :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Torje
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Apr 23, 2008, at 5:34 PM, Alberto Giannetti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have simple MPI program that sends data to processor rank 0. The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; communication works well but when I run the program on more than 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; processors (-np 4) the extra receivers waiting for data run on &gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 90%
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CPU load. I understand MPI_Recv() is a blocking operation, but why
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; does it consume so much CPU compared to a regular system read()?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; void process_sender(int);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; void process_receiver(int);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; int rank;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Processor %d (%d) initialized\n&quot;, rank, getpid());
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; if( rank == 1 )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   process_sender(rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; else
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   process_receiver(rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; void process_sender(int rank)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; int i, j, size;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; float data[100];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Status status;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Processor %d initializing data...\n&quot;, rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; for( i = 0; i &lt; 100; ++i )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   data[i] = i;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Processor %d sending data...\n&quot;, rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Send(data, 100, MPI_FLOAT, 0, 55, MPI_COMM_WORLD);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Processor %d sent data\n&quot;, rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; void process_receiver(int rank)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; int count;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; float value[200];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Status status;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Processor %d waiting for data...\n&quot;, rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Recv(value, 200, MPI_FLOAT, MPI_ANY_SOURCE, 55,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Processor %d Got data from processor %d\n&quot;, rank,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; status.MPI_SOURCE);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Get_count(&amp;status, MPI_FLOAT, &amp;count);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Processor %d, Got %d elements\n&quot;, rank, count);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="5482.php">Tomas Ukkonen: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5480.php">Andy Georgi: "[OMPI users] coll_tuned_decision_fixed.c"</a>
<li><strong>In reply to:</strong> <a href="5474.php">Barry Rountree: "[OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5484.php">Alberto Giannetti: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Reply:</strong> <a href="5484.php">Alberto Giannetti: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Reply:</strong> <a href="5491.php">Barry Rountree: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
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
