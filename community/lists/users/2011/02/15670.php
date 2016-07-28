<?
$subject_val = "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 21 14:32:22 2011" -->
<!-- isoreceived="20110221193222" -->
<!-- sent="Mon, 21 Feb 2011 14:32:16 -0500" -->
<!-- isosent="20110221193216" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?" -->
<!-- id="BE282452-D9D9-47A4-981D-3325F2C9D9AF_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="AANLkTinzhGYMeTftRwuOw-_1TNo9ixRdceJy1VaMVL+r_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-21 14:32:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15671.php">Skouson, Gary B: "[OMPI users] MPI_Comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="15669.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="15656.php">Xianglong Kong: "[OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15676.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Reply:</strong> <a href="15676.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's because you're waiting on the receive request to complete before the send request.  This likely works locally because the message transfer is through shared memory and is fast, but it's still an inherently unsafe way to block waiting for completion (i.e., the receive might not complete if the send does not complete).
<br>
<p>What you probably want to do is build an array of 2 requests and then issue a single MPI_Waitall() on both of them.  This will allow MPI to progress both requests simultaneously.
<br>
<p><p>On Feb 18, 2011, at 11:58 AM, Xianglong Kong wrote:
<br>
<p><span class="quotelev1">&gt; Hi, all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#146;m an mpi newbie. I&#146;m trying to connect two desktops in my office
</span><br>
<span class="quotelev1">&gt; with each other using a crossing cable and implement a parallel code
</span><br>
<span class="quotelev1">&gt; on them using MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, the two nodes can ssh to each other without password, and can
</span><br>
<span class="quotelev1">&gt; successfully run the MPI &#147;Hello world&#148; code. However, when I tried to
</span><br>
<span class="quotelev1">&gt; use multiple MPI non-blocking sends or receives, the job would hang.
</span><br>
<span class="quotelev1">&gt; The problem only showed up if the two processes are launched in the
</span><br>
<span class="quotelev1">&gt; different nodes, the code can run successfully if the two processes
</span><br>
<span class="quotelev1">&gt; are launched in the same node. Also, the code can run successfully if
</span><br>
<span class="quotelev1">&gt; there are only one send or/and one receive in each process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the code that can run successfully:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	int myrank, nprocs;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_size(MPI_COMM_WORLD, &amp;nprocs);
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_rank(MPI_COMM_WORLD, &amp;myrank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	printf(&quot;Hello from processor %d of %d\n&quot;, myrank, nprocs);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI_Request reqs1, reqs2;
</span><br>
<span class="quotelev1">&gt; 	MPI_Status stats1, stats2;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	int tag1=10;
</span><br>
<span class="quotelev1">&gt; 	int tag2=11;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	int buf;
</span><br>
<span class="quotelev1">&gt; 	int mesg;
</span><br>
<span class="quotelev1">&gt; 	int source=1-myrank;
</span><br>
<span class="quotelev1">&gt; 	int dest=1-myrank;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	if(myrank==0)
</span><br>
<span class="quotelev1">&gt; 	{
</span><br>
<span class="quotelev1">&gt; 		mesg=1;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		MPI_Irecv(&amp;buf, 1, MPI_INT, source, tag1, MPI_COMM_WORLD, &amp;reqs1);
</span><br>
<span class="quotelev1">&gt; 		MPI_Isend(&amp;mesg, 1, MPI_INT, dest,  tag2, MPI_COMM_WORLD, &amp;reqs2);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	if(myrank==1)
</span><br>
<span class="quotelev1">&gt; 	{
</span><br>
<span class="quotelev1">&gt; 		mesg=2;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		MPI_Irecv(&amp;buf, 1, MPI_INT, source, tag2, MPI_COMM_WORLD, &amp;reqs1);
</span><br>
<span class="quotelev1">&gt; 		MPI_Isend(&amp;mesg, 1, MPI_INT,  dest, tag1, MPI_COMM_WORLD, &amp;reqs2);
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI_Wait(&amp;reqs1, &amp;stats1);
</span><br>
<span class="quotelev1">&gt; 	printf(&quot;myrank=%d,received the message\n&quot;,myrank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI_Wait(&amp;reqs2, &amp;stats2);
</span><br>
<span class="quotelev1">&gt; 	printf(&quot;myrank=%d,sent the messages\n&quot;,myrank);
</span><br>
<span class="quotelev1">&gt; 			
</span><br>
<span class="quotelev1">&gt; 	printf(&quot;myrank=%d, buf=%d\n&quot;,myrank, buf);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 	return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And here is the code that will hang
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	int myrank, nprocs;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_size(MPI_COMM_WORLD, &amp;nprocs);
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_rank(MPI_COMM_WORLD, &amp;myrank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	printf(&quot;Hello from processor %d of %d\n&quot;, myrank, nprocs);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI_Request reqs1, reqs2;
</span><br>
<span class="quotelev1">&gt; 	MPI_Status stats1, stats2;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	int tag1=10;
</span><br>
<span class="quotelev1">&gt; 	int tag2=11;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	int source=1-myrank;
</span><br>
<span class="quotelev1">&gt; 	int dest=1-myrank;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	if(myrank==0)
</span><br>
<span class="quotelev1">&gt; 	{
</span><br>
<span class="quotelev1">&gt; 		int buf1, buf2;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		MPI_Irecv(&amp;buf1, 1, MPI_INT, source, tag1, MPI_COMM_WORLD, &amp;reqs1);
</span><br>
<span class="quotelev1">&gt; 		MPI_Irecv(&amp;buf2, 1, MPI_INT, source, tag2, MPI_COMM_WORLD, &amp;reqs2);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		MPI_Wait(&amp;reqs1, &amp;stats1);
</span><br>
<span class="quotelev1">&gt; 		printf(&quot;received one message\n&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		MPI_Wait(&amp;reqs2, &amp;stats2);
</span><br>
<span class="quotelev1">&gt; 		printf(&quot;received two messages\n&quot;);
</span><br>
<span class="quotelev1">&gt; 			
</span><br>
<span class="quotelev1">&gt; 		printf(&quot;myrank=%d, buf1=%d, buf2=%d\n&quot;,myrank, buf1, buf2);
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	if(myrank==1)
</span><br>
<span class="quotelev1">&gt; 	{
</span><br>
<span class="quotelev1">&gt; 		int mesg1=1;
</span><br>
<span class="quotelev1">&gt; 		int mesg2=2;	
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		MPI_Isend(&amp;mesg1, 1, MPI_INT, dest, tag1, MPI_COMM_WORLD, &amp;reqs1);
</span><br>
<span class="quotelev1">&gt; 		MPI_Isend(&amp;mesg2, 1, MPI_INT, dest, tag2, MPI_COMM_WORLD, &amp;reqs2);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		MPI_Wait(&amp;reqs1, &amp;stats1);
</span><br>
<span class="quotelev1">&gt; 		printf(&quot;sent one message\n&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		MPI_Wait(&amp;reqs2, &amp;stats2);
</span><br>
<span class="quotelev1">&gt; 		printf(&quot;sent two messages\n&quot;);
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 	return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And the output of the second failed code:
</span><br>
<span class="quotelev1">&gt; ***********************************************
</span><br>
<span class="quotelev1">&gt; Hello from processor 0 of 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Received one message
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello from processor 1 of 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent one message
</span><br>
<span class="quotelev1">&gt; *******************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone help to point out why the second code didn't work?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kong
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15671.php">Skouson, Gary B: "[OMPI users] MPI_Comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="15669.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="15656.php">Xianglong Kong: "[OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15676.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Reply:</strong> <a href="15676.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
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
