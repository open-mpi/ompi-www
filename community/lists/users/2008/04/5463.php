<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 14:55:26 2008" -->
<!-- isoreceived="20080423185526" -->
<!-- sent="Wed, 23 Apr 2008 14:55:10 -0400" -->
<!-- isosent="20080423185510" -->
<!-- name="Alberto Giannetti" -->
<!-- email="albertogiannetti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="64B733E1-8E55-4692-9D58-05BEF963EFFC_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B444D8B9-F063-4149-ADD7-9766BEF7871C_at_cisco.com" -->
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
<strong>From:</strong> Alberto Giannetti (<em>albertogiannetti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-23 14:55:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5464.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="5462.php">Jeff Squyres: "Re: [OMPI users] idle calls?"</a>
<li><strong>In reply to:</strong> <a href="5461.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5464.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="5464.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am running the test program on Darwin 8.11.1, 1.83 Ghz Intel dual  
<br>
core. My Open MPI install is 1.2.4.
<br>
I can't see any allocated shared memory segment on my system (ipcs - 
<br>
m), although the receiver opens a couple of TCP sockets in listening  
<br>
mode. It looks like my implementation does not use shared memory. Is  
<br>
this a configuration issue?
<br>
<p><span class="quotelev1">&gt; a.out   5628 albertogiannetti    3u  unix        R,W,NB  
</span><br>
<span class="quotelev1">&gt; 0x380b198       0t0          -&gt;0x41ced48
</span><br>
<span class="quotelev1">&gt; a.out   5628 albertogiannetti    4u  unix           R,W  
</span><br>
<span class="quotelev1">&gt; 0x41ced48       0t0          -&gt;0x380b198
</span><br>
<span class="quotelev1">&gt; a.out   5628 albertogiannetti    5u  IPv4        R,W,NB  
</span><br>
<span class="quotelev1">&gt; 0x3d4d920       0t0      TCP *:50969 (LISTEN)
</span><br>
<span class="quotelev1">&gt; a.out   5628 albertogiannetti    6u  IPv4        R,W,NB  
</span><br>
<span class="quotelev1">&gt; 0x3e62394       0t0      TCP 192.168.0.10:50970-&gt;192.168.0.10:50962  
</span><br>
<span class="quotelev1">&gt; (ESTABLISHED)
</span><br>
<span class="quotelev1">&gt; a.out   5628 albertogiannetti    7u  IPv4        R,W,NB  
</span><br>
<span class="quotelev1">&gt; 0x422d228       0t0      TCP *:50973 (LISTEN)
</span><br>
<span class="quotelev1">&gt; a.out   5628 albertogiannetti    8u  IPv4        R,W,NB  
</span><br>
<span class="quotelev1">&gt; 0x2dfd394       0t0      TCP 192.168.0.10:50969-&gt;192.168.0.10:50975  
</span><br>
<span class="quotelev1">&gt; (ESTABLISHED)
</span><br>
<p><p>On Apr 23, 2008, at 12:34 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Because on-node communication typically uses shared memory, so we
</span><br>
<span class="quotelev1">&gt; currently have to poll.  Additionally, when using mixed on/off-node
</span><br>
<span class="quotelev1">&gt; communication, we have to alternate between polling shared memory and
</span><br>
<span class="quotelev1">&gt; polling the network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, we actively poll because it's the best way to lower
</span><br>
<span class="quotelev1">&gt; latency.  MPI implementations are almost always first judged on their
</span><br>
<span class="quotelev1">&gt; latency, not [usually] their CPU utilization.  Going to sleep in a
</span><br>
<span class="quotelev1">&gt; blocking system call will definitely negatively impact latency.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have plans for implementing the &quot;spin for a while and then block&quot;
</span><br>
<span class="quotelev1">&gt; technique (as has been used in other MPI's and middleware layers), but
</span><br>
<span class="quotelev1">&gt; it hasn't been a high priority.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 23, 2008, at 12:19 PM, Alberto Giannetti wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Torje. I wonder what is the benefit of looping on the incoming
</span><br>
<span class="quotelev2">&gt;&gt; message-queue socket rather than using system I/O signals, like read
</span><br>
<span class="quotelev2">&gt;&gt; () or select().
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 23, 2008, at 12:10 PM, Torje Henriksen wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Alberto,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The blocked processes are in fact spin-waiting. While they don't  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anything better to do (waiting for that message), they will check
</span><br>
<span class="quotelev3">&gt;&gt;&gt; their incoming message-queues in a loop.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So the MPI_Recv()-operation is blocking, but it doesn't mean that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes are blocked by the OS scheduler.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope that made some sense :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Torje
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 23, 2008, at 5:34 PM, Alberto Giannetti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have simple MPI program that sends data to processor rank 0. The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communication works well but when I run the program on more than 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processors (-np 4) the extra receivers waiting for data run on &gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 90%
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CPU load. I understand MPI_Recv() is a blocking operation, but why
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; does it consume so much CPU compared to a regular system read()?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; void process_sender(int);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; void process_receiver(int);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  int rank;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  printf(&quot;Processor %d (%d) initialized\n&quot;, rank, getpid());
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  if( rank == 1 )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    process_sender(rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  else
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    process_receiver(rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; void process_sender(int rank)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  int i, j, size;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  float data[100];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  MPI_Status status;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  printf(&quot;Processor %d initializing data...\n&quot;, rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  for( i = 0; i &lt; 100; ++i )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    data[i] = i;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  printf(&quot;Processor %d sending data...\n&quot;, rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  MPI_Send(data, 100, MPI_FLOAT, 0, 55, MPI_COMM_WORLD);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  printf(&quot;Processor %d sent data\n&quot;, rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; void process_receiver(int rank)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  int count;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  float value[200];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  MPI_Status status;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  printf(&quot;Processor %d waiting for data...\n&quot;, rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  MPI_Recv(value, 200, MPI_FLOAT, MPI_ANY_SOURCE, 55,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  printf(&quot;Processor %d Got data from processor %d\n&quot;, rank,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; status.MPI_SOURCE);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  MPI_Get_count(&amp;status, MPI_FLOAT, &amp;count);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  printf(&quot;Processor %d, Got %d elements\n&quot;, rank, count);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="5464.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="5462.php">Jeff Squyres: "Re: [OMPI users] idle calls?"</a>
<li><strong>In reply to:</strong> <a href="5461.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5464.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="5464.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
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
