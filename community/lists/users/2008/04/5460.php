<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 12:20:02 2008" -->
<!-- isoreceived="20080423162002" -->
<!-- sent="Wed, 23 Apr 2008 12:19:43 -0400" -->
<!-- isosent="20080423161943" -->
<!-- name="Alberto Giannetti" -->
<!-- email="albertogiannetti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="65797107-B83F-4AB6-BA37-0DFC50634360_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0752326E-FA67-4863-B4A6-85379C7363DC_at_stud.cs.uit.no" -->
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
<strong>Date:</strong> 2008-04-23 12:19:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5461.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="5459.php">Ingo Josopait: "[OMPI users] idle calls?"</a>
<li><strong>In reply to:</strong> <a href="5458.php">Torje Henriksen: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5461.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="5461.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Torje. I wonder what is the benefit of looping on the incoming  
<br>
message-queue socket rather than using system I/O signals, like read 
<br>
() or select().
<br>
<p>On Apr 23, 2008, at 12:10 PM, Torje Henriksen wrote:
<br>
<span class="quotelev1">&gt; Hi Alberto,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The blocked processes are in fact spin-waiting. While they don't have
</span><br>
<span class="quotelev1">&gt; anything better to do (waiting for that message), they will check
</span><br>
<span class="quotelev1">&gt; their incoming message-queues in a loop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the MPI_Recv()-operation is blocking, but it doesn't mean that the
</span><br>
<span class="quotelev1">&gt; processes are blocked by the OS scheduler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope that made some sense :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Torje
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 23, 2008, at 5:34 PM, Alberto Giannetti wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have simple MPI program that sends data to processor rank 0. The
</span><br>
<span class="quotelev2">&gt;&gt; communication works well but when I run the program on more than 2
</span><br>
<span class="quotelev2">&gt;&gt; processors (-np 4) the extra receivers waiting for data run on &gt; 90%
</span><br>
<span class="quotelev2">&gt;&gt; CPU load. I understand MPI_Recv() is a blocking operation, but why
</span><br>
<span class="quotelev2">&gt;&gt; does it consume so much CPU compared to a regular system read()?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; void process_sender(int);
</span><br>
<span class="quotelev2">&gt;&gt; void process_receiver(int);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   int rank;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;Processor %d (%d) initialized\n&quot;, rank, getpid());
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   if( rank == 1 )
</span><br>
<span class="quotelev2">&gt;&gt;     process_sender(rank);
</span><br>
<span class="quotelev2">&gt;&gt;   else
</span><br>
<span class="quotelev2">&gt;&gt;     process_receiver(rank);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; void process_sender(int rank)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   int i, j, size;
</span><br>
<span class="quotelev2">&gt;&gt;   float data[100];
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;Processor %d initializing data...\n&quot;, rank);
</span><br>
<span class="quotelev2">&gt;&gt;   for( i = 0; i &lt; 100; ++i )
</span><br>
<span class="quotelev2">&gt;&gt;     data[i] = i;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;Processor %d sending data...\n&quot;, rank);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Send(data, 100, MPI_FLOAT, 0, 55, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;Processor %d sent data\n&quot;, rank);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; void process_receiver(int rank)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   int count;
</span><br>
<span class="quotelev2">&gt;&gt;   float value[200];
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;Processor %d waiting for data...\n&quot;, rank);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Recv(value, 200, MPI_FLOAT, MPI_ANY_SOURCE, 55,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;Processor %d Got data from processor %d\n&quot;, rank,
</span><br>
<span class="quotelev2">&gt;&gt; status.MPI_SOURCE);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Get_count(&amp;status, MPI_FLOAT, &amp;count);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;Processor %d, Got %d elements\n&quot;, rank, count);
</span><br>
<span class="quotelev2">&gt;&gt; }
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
<li><strong>Next message:</strong> <a href="5461.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="5459.php">Ingo Josopait: "[OMPI users] idle calls?"</a>
<li><strong>In reply to:</strong> <a href="5458.php">Torje Henriksen: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5461.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="5461.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
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
