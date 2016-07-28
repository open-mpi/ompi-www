<?
$subject_val = "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 22 10:26:41 2011" -->
<!-- isoreceived="20110222152641" -->
<!-- sent="Tue, 22 Feb 2011 10:26:35 -0500" -->
<!-- isosent="20110222152635" -->
<!-- name="Xianglong Kong" -->
<!-- email="dinosaur8312_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?" -->
<!-- id="AANLkTikefGLYrkbJzQe85X1DgVxdXMUEZVMz9_O-H_xN_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BE282452-D9D9-47A4-981D-3325F2C9D9AF_at_cisco.com" -->
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
<strong>From:</strong> Xianglong Kong (<em>dinosaur8312_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-22 10:26:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15677.php">Bill Rankin: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15675.php">jody: "Re: [OMPI users] WRF Problem running in Parallel"</a>
<li><strong>In reply to:</strong> <a href="15670.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15677.php">Bill Rankin: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Reply:</strong> <a href="15677.php">Bill Rankin: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Thank you for the reply.
<br>
<p>However, using MPI_waitall instead of MPI_wait didn't solve the
<br>
problem. The code would hang at the MPI_waitall. Also, I'm not quit
<br>
understand why the code is inherently unsafe.  Can the non-blocking
<br>
send or receive cause any deadlock?
<br>
<p>Thanks!
<br>
<p>Kong
<br>
<p>On Mon, Feb 21, 2011 at 2:32 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; It's because you're waiting on the receive request to complete before the send request. &#160;This likely works locally because the message transfer is through shared memory and is fast, but it's still an inherently unsafe way to block waiting for completion (i.e., the receive might not complete if the send does not complete).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What you probably want to do is build an array of 2 requests and then issue a single MPI_Waitall() on both of them. &#160;This will allow MPI to progress both requests simultaneously.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 18, 2011, at 11:58 AM, Xianglong Kong wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi, all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m an mpi newbie. I&#146;m trying to connect two desktops in my office
</span><br>
<span class="quotelev2">&gt;&gt; with each other using a crossing cable and implement a parallel code
</span><br>
<span class="quotelev2">&gt;&gt; on them using MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now, the two nodes can ssh to each other without password, and can
</span><br>
<span class="quotelev2">&gt;&gt; successfully run the MPI &#147;Hello world&#148; code. However, when I tried to
</span><br>
<span class="quotelev2">&gt;&gt; use multiple MPI non-blocking sends or receives, the job would hang.
</span><br>
<span class="quotelev2">&gt;&gt; The problem only showed up if the two processes are launched in the
</span><br>
<span class="quotelev2">&gt;&gt; different nodes, the code can run successfully if the two processes
</span><br>
<span class="quotelev2">&gt;&gt; are launched in the same node. Also, the code can run successfully if
</span><br>
<span class="quotelev2">&gt;&gt; there are only one send or/and one receive in each process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the code that can run successfully:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; int myrank, nprocs;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; MPI_Comm_size(MPI_COMM_WORLD, &amp;nprocs);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; MPI_Comm_rank(MPI_COMM_WORLD, &amp;myrank);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; printf(&quot;Hello from processor %d of %d\n&quot;, myrank, nprocs);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; MPI_Request reqs1, reqs2;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; MPI_Status stats1, stats2;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; int tag1=10;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; int tag2=11;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; int buf;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; int mesg;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; int source=1-myrank;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; int dest=1-myrank;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; if(myrank==0)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; {
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; mesg=1;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MPI_Irecv(&amp;buf, 1, MPI_INT, source, tag1, MPI_COMM_WORLD, &amp;reqs1);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MPI_Isend(&amp;mesg, 1, MPI_INT, dest, &#160;tag2, MPI_COMM_WORLD, &amp;reqs2);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; if(myrank==1)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; {
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; mesg=2;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MPI_Irecv(&amp;buf, 1, MPI_INT, source, tag2, MPI_COMM_WORLD, &amp;reqs1);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MPI_Isend(&amp;mesg, 1, MPI_INT, &#160;dest, tag1, MPI_COMM_WORLD, &amp;reqs2);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; MPI_Wait(&amp;reqs1, &amp;stats1);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; printf(&quot;myrank=%d,received the message\n&quot;,myrank);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; MPI_Wait(&amp;reqs2, &amp;stats2);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; printf(&quot;myrank=%d,sent the messages\n&quot;,myrank);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; printf(&quot;myrank=%d, buf=%d\n&quot;,myrank, buf);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And here is the code that will hang
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; int myrank, nprocs;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; MPI_Comm_size(MPI_COMM_WORLD, &amp;nprocs);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; MPI_Comm_rank(MPI_COMM_WORLD, &amp;myrank);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; printf(&quot;Hello from processor %d of %d\n&quot;, myrank, nprocs);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; MPI_Request reqs1, reqs2;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; MPI_Status stats1, stats2;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; int tag1=10;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; int tag2=11;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; int source=1-myrank;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; int dest=1-myrank;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; if(myrank==0)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; {
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; int buf1, buf2;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MPI_Irecv(&amp;buf1, 1, MPI_INT, source, tag1, MPI_COMM_WORLD, &amp;reqs1);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MPI_Irecv(&amp;buf2, 1, MPI_INT, source, tag2, MPI_COMM_WORLD, &amp;reqs2);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MPI_Wait(&amp;reqs1, &amp;stats1);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; printf(&quot;received one message\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MPI_Wait(&amp;reqs2, &amp;stats2);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; printf(&quot;received two messages\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; printf(&quot;myrank=%d, buf1=%d, buf2=%d\n&quot;,myrank, buf1, buf2);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; if(myrank==1)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; {
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; int mesg1=1;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; int mesg2=2;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MPI_Isend(&amp;mesg1, 1, MPI_INT, dest, tag1, MPI_COMM_WORLD, &amp;reqs1);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MPI_Isend(&amp;mesg2, 1, MPI_INT, dest, tag2, MPI_COMM_WORLD, &amp;reqs2);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MPI_Wait(&amp;reqs1, &amp;stats1);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; printf(&quot;sent one message\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MPI_Wait(&amp;reqs2, &amp;stats2);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; printf(&quot;sent two messages\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And the output of the second failed code:
</span><br>
<span class="quotelev2">&gt;&gt; ***********************************************
</span><br>
<span class="quotelev2">&gt;&gt; Hello from processor 0 of 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Received one message
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello from processor 1 of 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent one message
</span><br>
<span class="quotelev2">&gt;&gt; *******************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone help to point out why the second code didn't work?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kong
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
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Xianglong Kong
Department of Mechanical Engineering
University of Rochester
Phone: (585)520-4412
MSN: dinosaur8312_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15677.php">Bill Rankin: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15675.php">jody: "Re: [OMPI users] WRF Problem running in Parallel"</a>
<li><strong>In reply to:</strong> <a href="15670.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15677.php">Bill Rankin: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Reply:</strong> <a href="15677.php">Bill Rankin: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
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
