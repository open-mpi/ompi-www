<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 17:38:49 2008" -->
<!-- isoreceived="20080423213849" -->
<!-- sent="Wed, 23 Apr 2008 23:38:41 +0200" -->
<!-- isosent="20080423213841" -->
<!-- name="Ingo Josopait" -->
<!-- email="ingo.josopait_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="480FAC61.5090907_at_gmx.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F205E6A8-E822-465E-A647-851C07F55601_at_cisco.com" -->
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
<strong>From:</strong> Ingo Josopait (<em>ingo.josopait_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-23 17:38:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5473.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="5471.php">Jeff Squyres: "Re: [OMPI users] Processor affinitiy"</a>
<li><strong>In reply to:</strong> <a href="5469.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5473.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="5473.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="5474.php">Barry Rountree: "[OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can think of several advantages that using blocking or signals to
<br>
reduce the cpu load would have:
<br>
<p>- Reduced energy consumption
<br>
- Running additional background programs could be done far more efficiently
<br>
- It would be much simpler to examine the load balance.
<br>
<p>It may depend on the type of program and the computational environment,
<br>
but there are certainly many cases in which putting the system in idle
<br>
mode would be advantageous. This is especially true for programs with
<br>
low network traffic and/or high load imbalances.
<br>
<p>The &quot;spin for a while and then block&quot; method that you mentioned earlier
<br>
seems to be a good compromise. Just do polling for some time that is
<br>
long compared to the corresponding system call, and then go to sleep if
<br>
nothing happens. In this way, the latency would be only marginally
<br>
increased, while less cpu time is wasted in the polling loops, and I
<br>
would be much happier.
<br>
<p><p><p><p><p>Jeff Squyres schrieb:
<br>
<span class="quotelev1">&gt; On Apr 23, 2008, at 3:49 PM, Danesh Daroui wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do you really mean that Open-MPI uses busy loop in order to handle
</span><br>
<span class="quotelev2">&gt;&gt; incomming calls? It seems to be incorrect since
</span><br>
<span class="quotelev2">&gt;&gt; spinning is a very bad and inefficient technique for this purpose.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It depends on what you're optimizing for.  :-)  We're optimizing for  
</span><br>
<span class="quotelev1">&gt; minimum message passing latency on hosts that are not oversubscribed;  
</span><br>
<span class="quotelev1">&gt; polling is very good at that.  Polling is much better than blocking,  
</span><br>
<span class="quotelev1">&gt; particularly if the blocking involves a system call (which will be  
</span><br>
<span class="quotelev1">&gt; &quot;slow&quot;).  Note that in a compute-heavy environment, they nodes are  
</span><br>
<span class="quotelev1">&gt; going to be running at 100% CPU anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also keep in mind that you're only going to have &quot;waste&quot; spinning in  
</span><br>
<span class="quotelev1">&gt; MPI if you have a loosely/poorly synchronized application.  Granted,  
</span><br>
<span class="quotelev1">&gt; some applications are this way by nature, but we have not chosen to  
</span><br>
<span class="quotelev1">&gt; optimize spare CPU cycles for them.  As I said in a prior mail, adding  
</span><br>
<span class="quotelev1">&gt; a blocking strategy is on the to-do list, but it's fairly low in  
</span><br>
<span class="quotelev1">&gt; priority right now.  Someone may care / improve the message passing  
</span><br>
<span class="quotelev1">&gt; engine to include blocking, but it hasn't happened yet.  Want to work  
</span><br>
<span class="quotelev1">&gt; on it?  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And for reference: almost all MPI's do busy polling to minimize  
</span><br>
<span class="quotelev1">&gt; latency.  Some of them will shift to blocking if nothing happens for a  
</span><br>
<span class="quotelev1">&gt; &quot;long&quot; time.  This second piece is what OMPI is lacking.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Why
</span><br>
<span class="quotelev2">&gt;&gt; don't you use blocking and/or signals instead of
</span><br>
<span class="quotelev2">&gt;&gt; that?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: I mentioned this in my other mail -- latency is quite definitely  
</span><br>
<span class="quotelev1">&gt; negatively impacted when you use such mechanisms.  Blocking and  
</span><br>
<span class="quotelev1">&gt; signals are &quot;slow&quot; (in comparison to polling).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think the priority of this task is very high because polling
</span><br>
<span class="quotelev2">&gt;&gt; just wastes resources of the system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In production HPC environments, the entire resource is dedicated to  
</span><br>
<span class="quotelev1">&gt; the MPI app anyway, so there's nothing else that really needs it.  So  
</span><br>
<span class="quotelev1">&gt; we allow them to busy-spin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a mode to call yield() in the middle of every OMPI progress  
</span><br>
<span class="quotelev1">&gt; loop, but it's only helpful for loosely/poorly synchronized MPI apps  
</span><br>
<span class="quotelev1">&gt; and ones that use TCP or shared memory.  Low latency networks such as  
</span><br>
<span class="quotelev1">&gt; IB or Myrinet won't be as friendly to this setting because they're  
</span><br>
<span class="quotelev1">&gt; busy polling (i.e., they call yield() much less frequently, if at all).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On the other hand,
</span><br>
<span class="quotelev2">&gt;&gt; what Alberto claims is not reasonable to me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alberto,
</span><br>
<span class="quotelev2">&gt;&gt; - Are you oversubscribing one node which means that you are running  
</span><br>
<span class="quotelev2">&gt;&gt; your
</span><br>
<span class="quotelev2">&gt;&gt; code on a single processor machine, pretending
</span><br>
<span class="quotelev2">&gt;&gt; to have four CPUs?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Did you compile Open-MPI or installed from RPM?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Receiving process shouldn't be that expensive.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Danesh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres skrev:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Because on-node communication typically uses shared memory, so we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; currently have to poll.  Additionally, when using mixed on/off-node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communication, we have to alternate between polling shared memory and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; polling the network.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Additionally, we actively poll because it's the best way to lower
</span><br>
<span class="quotelev3">&gt;&gt;&gt; latency.  MPI implementations are almost always first judged on their
</span><br>
<span class="quotelev3">&gt;&gt;&gt; latency, not [usually] their CPU utilization.  Going to sleep in a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blocking system call will definitely negatively impact latency.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have plans for implementing the &quot;spin for a while and then block&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; technique (as has been used in other MPI's and middleware layers),  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it hasn't been a high priority.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 23, 2008, at 12:19 PM, Alberto Giannetti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks Torje. I wonder what is the benefit of looping on the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; incoming
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message-queue socket rather than using system I/O signals, like read
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; () or select().
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 23, 2008, at 12:10 PM, Torje Henriksen wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Alberto,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The blocked processes are in fact spin-waiting. While they don't  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; anything better to do (waiting for that message), they will check
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; their incoming message-queues in a loop.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So the MPI_Recv()-operation is blocking, but it doesn't mean that  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes are blocked by the OS scheduler.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I hope that made some sense :)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Torje
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Apr 23, 2008, at 5:34 PM, Alberto Giannetti wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have simple MPI program that sends data to processor rank 0. The
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; communication works well but when I run the program on more than 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; processors (-np 4) the extra receivers waiting for data run on &gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 90%
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CPU load. I understand MPI_Recv() is a blocking operation, but why
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; does it consume so much CPU compared to a regular system read()?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; void process_sender(int);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; void process_receiver(int);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; int rank;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Processor %d (%d) initialized\n&quot;, rank, getpid());
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; if( rank == 1 )
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   process_sender(rank);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; else
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   process_receiver(rank);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; void process_sender(int rank)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; int i, j, size;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; float data[100];
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Processor %d initializing data...\n&quot;, rank);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; for( i = 0; i &lt; 100; ++i )
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   data[i] = i;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Processor %d sending data...\n&quot;, rank);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Send(data, 100, MPI_FLOAT, 0, 55, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Processor %d sent data\n&quot;, rank);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; void process_receiver(int rank)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; int count;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; float value[200];
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Processor %d waiting for data...\n&quot;, rank);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Recv(value, 200, MPI_FLOAT, MPI_ANY_SOURCE, 55,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Processor %d Got data from processor %d\n&quot;, rank,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; status.MPI_SOURCE);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Get_count(&amp;status, MPI_FLOAT, &amp;count);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Processor %d, Got %d elements\n&quot;, rank, count);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5473.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="5471.php">Jeff Squyres: "Re: [OMPI users] Processor affinitiy"</a>
<li><strong>In reply to:</strong> <a href="5469.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5473.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="5473.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="5474.php">Barry Rountree: "[OMPI users] Busy waiting [was Re:  (no subject)]"</a>
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
