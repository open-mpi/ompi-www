<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 17:51:17 2008" -->
<!-- isoreceived="20080423215117" -->
<!-- sent="Wed, 23 Apr 2008 17:51:05 -0400" -->
<!-- isosent="20080423215105" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="4B2A3294-B895-47D9-A6D7-5F6D5BB5C0FA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="480FAC61.5090907_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] (no subject)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-23 17:51:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5474.php">Barry Rountree: "[OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Previous message:</strong> <a href="5472.php">Ingo Josopait: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="5472.php">Ingo Josopait: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5474.php">Barry Rountree: "[OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Contributions are always welcome.  :-)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/contribute/">http://www.open-mpi.org/community/contribute/</a>
<br>
<p>To be less glib: Open MPI represents the union of the interests of its  
<br>
members.  So far, we've *talked* internally about adding a spin-then- 
<br>
block mechanism, but there's a non-trivial amount of work to make that  
<br>
happen.  Shared memory is the sticking point -- we have some good  
<br>
ideas how to make it work, but no one's had the time / resources to do  
<br>
it.  To be absolutely clear: no one's debating the value of adding  
<br>
blocking progress (as long as it's implemented in a way that  
<br>
absolutely does not affect the performance critical code path).  It's  
<br>
just that so far, it has not been important to any current member to  
<br>
add it (weighed against all the other features that we're working on).
<br>
<p>If you (or anyone) find blocking progress important, we'd love for you  
<br>
to join Open MPI and contribute the the work necessary to make it  
<br>
happen.
<br>
<p><p><p>On Apr 23, 2008, at 5:38 PM, Ingo Josopait wrote:
<br>
<p><span class="quotelev1">&gt; I can think of several advantages that using blocking or signals to
</span><br>
<span class="quotelev1">&gt; reduce the cpu load would have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Reduced energy consumption
</span><br>
<span class="quotelev1">&gt; - Running additional background programs could be done far more  
</span><br>
<span class="quotelev1">&gt; efficiently
</span><br>
<span class="quotelev1">&gt; - It would be much simpler to examine the load balance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It may depend on the type of program and the computational  
</span><br>
<span class="quotelev1">&gt; environment,
</span><br>
<span class="quotelev1">&gt; but there are certainly many cases in which putting the system in idle
</span><br>
<span class="quotelev1">&gt; mode would be advantageous. This is especially true for programs with
</span><br>
<span class="quotelev1">&gt; low network traffic and/or high load imbalances.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;spin for a while and then block&quot; method that you mentioned  
</span><br>
<span class="quotelev1">&gt; earlier
</span><br>
<span class="quotelev1">&gt; seems to be a good compromise. Just do polling for some time that is
</span><br>
<span class="quotelev1">&gt; long compared to the corresponding system call, and then go to sleep  
</span><br>
<span class="quotelev1">&gt; if
</span><br>
<span class="quotelev1">&gt; nothing happens. In this way, the latency would be only marginally
</span><br>
<span class="quotelev1">&gt; increased, while less cpu time is wasted in the polling loops, and I
</span><br>
<span class="quotelev1">&gt; would be much happier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres schrieb:
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 23, 2008, at 3:49 PM, Danesh Daroui wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you really mean that Open-MPI uses busy loop in order to handle
</span><br>
<span class="quotelev3">&gt;&gt;&gt; incomming calls? It seems to be incorrect since
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spinning is a very bad and inefficient technique for this purpose.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It depends on what you're optimizing for.  :-)  We're optimizing for
</span><br>
<span class="quotelev2">&gt;&gt; minimum message passing latency on hosts that are not oversubscribed;
</span><br>
<span class="quotelev2">&gt;&gt; polling is very good at that.  Polling is much better than blocking,
</span><br>
<span class="quotelev2">&gt;&gt; particularly if the blocking involves a system call (which will be
</span><br>
<span class="quotelev2">&gt;&gt; &quot;slow&quot;).  Note that in a compute-heavy environment, they nodes are
</span><br>
<span class="quotelev2">&gt;&gt; going to be running at 100% CPU anyway.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also keep in mind that you're only going to have &quot;waste&quot; spinning in
</span><br>
<span class="quotelev2">&gt;&gt; MPI if you have a loosely/poorly synchronized application.  Granted,
</span><br>
<span class="quotelev2">&gt;&gt; some applications are this way by nature, but we have not chosen to
</span><br>
<span class="quotelev2">&gt;&gt; optimize spare CPU cycles for them.  As I said in a prior mail,  
</span><br>
<span class="quotelev2">&gt;&gt; adding
</span><br>
<span class="quotelev2">&gt;&gt; a blocking strategy is on the to-do list, but it's fairly low in
</span><br>
<span class="quotelev2">&gt;&gt; priority right now.  Someone may care / improve the message passing
</span><br>
<span class="quotelev2">&gt;&gt; engine to include blocking, but it hasn't happened yet.  Want to work
</span><br>
<span class="quotelev2">&gt;&gt; on it?  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And for reference: almost all MPI's do busy polling to minimize
</span><br>
<span class="quotelev2">&gt;&gt; latency.  Some of them will shift to blocking if nothing happens  
</span><br>
<span class="quotelev2">&gt;&gt; for a
</span><br>
<span class="quotelev2">&gt;&gt; &quot;long&quot; time.  This second piece is what OMPI is lacking.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why
</span><br>
<span class="quotelev3">&gt;&gt;&gt; don't you use blocking and/or signals instead of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: I mentioned this in my other mail -- latency is quite  
</span><br>
<span class="quotelev2">&gt;&gt; definitely
</span><br>
<span class="quotelev2">&gt;&gt; negatively impacted when you use such mechanisms.  Blocking and
</span><br>
<span class="quotelev2">&gt;&gt; signals are &quot;slow&quot; (in comparison to polling).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think the priority of this task is very high because polling
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just wastes resources of the system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In production HPC environments, the entire resource is dedicated to
</span><br>
<span class="quotelev2">&gt;&gt; the MPI app anyway, so there's nothing else that really needs it.  So
</span><br>
<span class="quotelev2">&gt;&gt; we allow them to busy-spin.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is a mode to call yield() in the middle of every OMPI progress
</span><br>
<span class="quotelev2">&gt;&gt; loop, but it's only helpful for loosely/poorly synchronized MPI apps
</span><br>
<span class="quotelev2">&gt;&gt; and ones that use TCP or shared memory.  Low latency networks such as
</span><br>
<span class="quotelev2">&gt;&gt; IB or Myrinet won't be as friendly to this setting because they're
</span><br>
<span class="quotelev2">&gt;&gt; busy polling (i.e., they call yield() much less frequently, if at  
</span><br>
<span class="quotelev2">&gt;&gt; all).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On the other hand,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what Alberto claims is not reasonable to me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alberto,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Are you oversubscribing one node which means that you are running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code on a single processor machine, pretending
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to have four CPUs?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Did you compile Open-MPI or installed from RPM?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Receiving process shouldn't be that expensive.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Danesh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres skrev:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Because on-node communication typically uses shared memory, so we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; currently have to poll.  Additionally, when using mixed on/off-node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communication, we have to alternate between polling shared memory  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; polling the network.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Additionally, we actively poll because it's the best way to lower
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; latency.  MPI implementations are almost always first judged on  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; their
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; latency, not [usually] their CPU utilization.  Going to sleep in a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; blocking system call will definitely negatively impact latency.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We have plans for implementing the &quot;spin for a while and then  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; block&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; technique (as has been used in other MPI's and middleware layers),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it hasn't been a high priority.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 23, 2008, at 12:19 PM, Alberto Giannetti wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks Torje. I wonder what is the benefit of looping on the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; incoming
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; message-queue socket rather than using system I/O signals, like  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; read
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; () or select().
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Apr 23, 2008, at 12:10 PM, Torje Henriksen wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi Alberto,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The blocked processes are in fact spin-waiting. While they don't
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; have
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; anything better to do (waiting for that message), they will check
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; their incoming message-queues in a loop.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So the MPI_Recv()-operation is blocking, but it doesn't mean that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; processes are blocked by the OS scheduler.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I hope that made some sense :)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Torje
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Apr 23, 2008, at 5:34 PM, Alberto Giannetti wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have simple MPI program that sends data to processor rank 0.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; communication works well but when I run the program on more  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; than 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; processors (-np 4) the extra receivers waiting for data run on &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 90%
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; CPU load. I understand MPI_Recv() is a blocking operation, but  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; why
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; does it consume so much CPU compared to a regular system read()?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; void process_sender(int);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; void process_receiver(int);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; int rank;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Processor %d (%d) initialized\n&quot;, rank, getpid());
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; if( rank == 1 )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  process_sender(rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  process_receiver(rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; void process_sender(int rank)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; int i, j, size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; float data[100];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Status status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Processor %d initializing data...\n&quot;, rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; for( i = 0; i &lt; 100; ++i )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  data[i] = i;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Processor %d sending data...\n&quot;, rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Send(data, 100, MPI_FLOAT, 0, 55, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Processor %d sent data\n&quot;, rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; void process_receiver(int rank)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; int count;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; float value[200];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Status status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Processor %d waiting for data...\n&quot;, rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Recv(value, 200, MPI_FLOAT, MPI_ANY_SOURCE, 55,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Processor %d Got data from processor %d\n&quot;, rank,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; status.MPI_SOURCE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Get_count(&amp;status, MPI_FLOAT, &amp;count);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Processor %d, Got %d elements\n&quot;, rank, count);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5474.php">Barry Rountree: "[OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Previous message:</strong> <a href="5472.php">Ingo Josopait: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="5472.php">Ingo Josopait: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5474.php">Barry Rountree: "[OMPI users] Busy waiting [was Re:  (no subject)]"</a>
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
