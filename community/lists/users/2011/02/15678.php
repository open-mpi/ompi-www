<?
$subject_val = "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 22 11:40:27 2011" -->
<!-- isoreceived="20110222164027" -->
<!-- sent="Tue, 22 Feb 2011 08:39:55 -0800" -->
<!-- isosent="20110222163955" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?" -->
<!-- id="AANLkTi=6en4HMORBL30k+AuWG-UPyT76UCSbvvGMS5RR_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="76097BB0C025054786EFAB631C4A2E3C09504AF5_at_MERCMBX03R.na.SAS.com" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-22 11:39:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15679.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15677.php">Bill Rankin: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>In reply to:</strong> <a href="15677.php">Bill Rankin: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15679.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think Bill is right.  Here is the description for mpi_finalize:
<br>
<p>This routine cleans up all MPI states. Once this routine is called, no MPI
<br>
routine (not even MPI_Init) may be called, except for MPI_Get_version,
<br>
MPI_Initialized, and MPI_Finalized. Unless there has been a call to
<br>
MPI_Abort, you must ensure that all pending communications involving a
<br>
process are complete before the process calls MPI_Finalize. If the call
<br>
returns, each process may either continue local computations or exit without
<br>
participating in further communication with other processes. *At the moment
<br>
when the last process calls MPI_Finalize, all pending sends must be matched
<br>
by a receive, and all pending receives must be matched by a send. *
<br>
<p>So I believe what Bill is alluding to is that after you called the second
<br>
Isend, your receive side hasn't posted the second Irecv; thus when
<br>
mpi_finalize is called on the send side, the message got thrown out.  When
<br>
your receive side does get to the second Irecv, it is waiting for a message
<br>
that'll never arrive.
<br>
<p>On Tue, Feb 22, 2011 at 8:06 AM, Bill Rankin &lt;Bill.Rankin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Try putting an &quot;MPI_Barrier()&quot; call before your MPI_Finalize() [*].  I
</span><br>
<span class="quotelev1">&gt; suspect that one of the programs (the sending side) is calling Finalize
</span><br>
<span class="quotelev1">&gt; before the receiving side has processed the messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bill
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [*] pet peeve of mine : this should almost always be standard practice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt; &gt; Behalf Of Xianglong Kong
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Tuesday, February 22, 2011 10:27 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Beginner's question: why multiple sends or
</span><br>
<span class="quotelev2">&gt; &gt; receives don't work?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi, Thank you for the reply.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, using MPI_waitall instead of MPI_wait didn't solve the
</span><br>
<span class="quotelev2">&gt; &gt; problem. The code would hang at the MPI_waitall. Also, I'm not quit
</span><br>
<span class="quotelev2">&gt; &gt; understand why the code is inherently unsafe.  Can the non-blocking
</span><br>
<span class="quotelev2">&gt; &gt; send or receive cause any deadlock?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kong
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Feb 21, 2011 at 2:32 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It's because you're waiting on the receive request to complete before
</span><br>
<span class="quotelev2">&gt; &gt; the send request.  This likely works locally because the message
</span><br>
<span class="quotelev2">&gt; &gt; transfer is through shared memory and is fast, but it's still an
</span><br>
<span class="quotelev2">&gt; &gt; inherently unsafe way to block waiting for completion (i.e., the
</span><br>
<span class="quotelev2">&gt; &gt; receive might not complete if the send does not complete).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What you probably want to do is build an array of 2 requests and then
</span><br>
<span class="quotelev2">&gt; &gt; issue a single MPI_Waitall() on both of them.  This will allow MPI to
</span><br>
<span class="quotelev2">&gt; &gt; progress both requests simultaneously.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Feb 18, 2011, at 11:58 AM, Xianglong Kong wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hi, all,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I'm an mpi newbie. I'm trying to connect two desktops in my office
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; with each other using a crossing cable and implement a parallel code
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; on them using MPI.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Now, the two nodes can ssh to each other without password, and can
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; successfully run the MPI &quot;Hello world&quot; code. However, when I tried
</span><br>
<span class="quotelev2">&gt; &gt; to
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; use multiple MPI non-blocking sends or receives, the job would hang.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; The problem only showed up if the two processes are launched in the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; different nodes, the code can run successfully if the two processes
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; are launched in the same node. Also, the code can run successfully
</span><br>
<span class="quotelev2">&gt; &gt; if
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; there are only one send or/and one receive in each process.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Here is the code that can run successfully:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       int myrank, nprocs;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       MPI_Comm_size(MPI_COMM_WORLD, &amp;nprocs);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       MPI_Comm_rank(MPI_COMM_WORLD, &amp;myrank);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       printf(&quot;Hello from processor %d of %d\n&quot;, myrank, nprocs);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       MPI_Request reqs1, reqs2;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       MPI_Status stats1, stats2;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       int tag1=10;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       int tag2=11;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       int buf;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       int mesg;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       int source=1-myrank;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       int dest=1-myrank;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       if(myrank==0)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               mesg=1;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               MPI_Irecv(&amp;buf, 1, MPI_INT, source, tag1,
</span><br>
<span class="quotelev2">&gt; &gt; MPI_COMM_WORLD, &amp;reqs1);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               MPI_Isend(&amp;mesg, 1, MPI_INT, dest,  tag2,
</span><br>
<span class="quotelev2">&gt; &gt; MPI_COMM_WORLD, &amp;reqs2);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       if(myrank==1)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               mesg=2;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               MPI_Irecv(&amp;buf, 1, MPI_INT, source, tag2,
</span><br>
<span class="quotelev2">&gt; &gt; MPI_COMM_WORLD, &amp;reqs1);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               MPI_Isend(&amp;mesg, 1, MPI_INT,  dest, tag1,
</span><br>
<span class="quotelev2">&gt; &gt; MPI_COMM_WORLD, &amp;reqs2);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       MPI_Wait(&amp;reqs1, &amp;stats1);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       printf(&quot;myrank=%d,received the message\n&quot;,myrank);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       MPI_Wait(&amp;reqs2, &amp;stats2);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       printf(&quot;myrank=%d,sent the messages\n&quot;,myrank);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       printf(&quot;myrank=%d, buf=%d\n&quot;,myrank, buf);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       MPI_Finalize();
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       return 0;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; And here is the code that will hang
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       int myrank, nprocs;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       MPI_Comm_size(MPI_COMM_WORLD, &amp;nprocs);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       MPI_Comm_rank(MPI_COMM_WORLD, &amp;myrank);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       printf(&quot;Hello from processor %d of %d\n&quot;, myrank, nprocs);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       MPI_Request reqs1, reqs2;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       MPI_Status stats1, stats2;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       int tag1=10;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       int tag2=11;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       int source=1-myrank;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       int dest=1-myrank;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       if(myrank==0)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               int buf1, buf2;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               MPI_Irecv(&amp;buf1, 1, MPI_INT, source, tag1,
</span><br>
<span class="quotelev2">&gt; &gt; MPI_COMM_WORLD, &amp;reqs1);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               MPI_Irecv(&amp;buf2, 1, MPI_INT, source, tag2,
</span><br>
<span class="quotelev2">&gt; &gt; MPI_COMM_WORLD, &amp;reqs2);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               MPI_Wait(&amp;reqs1, &amp;stats1);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               printf(&quot;received one message\n&quot;);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               MPI_Wait(&amp;reqs2, &amp;stats2);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               printf(&quot;received two messages\n&quot;);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               printf(&quot;myrank=%d, buf1=%d, buf2=%d\n&quot;,myrank, buf1,
</span><br>
<span class="quotelev2">&gt; &gt; buf2);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       if(myrank==1)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               int mesg1=1;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               int mesg2=2;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               MPI_Isend(&amp;mesg1, 1, MPI_INT, dest, tag1,
</span><br>
<span class="quotelev2">&gt; &gt; MPI_COMM_WORLD, &amp;reqs1);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               MPI_Isend(&amp;mesg2, 1, MPI_INT, dest, tag2,
</span><br>
<span class="quotelev2">&gt; &gt; MPI_COMM_WORLD, &amp;reqs2);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               MPI_Wait(&amp;reqs1, &amp;stats1);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               printf(&quot;sent one message\n&quot;);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               MPI_Wait(&amp;reqs2, &amp;stats2);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               printf(&quot;sent two messages\n&quot;);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       MPI_Finalize();
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       return 0;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; And the output of the second failed code:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ***********************************************
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hello from processor 0 of 2
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Received one message
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hello from processor 1 of 2
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Sent one message
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; *******************************************************
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Can anyone help to point out why the second code didn't work?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Kong
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Xianglong Kong
</span><br>
<span class="quotelev2">&gt; &gt; Department of Mechanical Engineering
</span><br>
<span class="quotelev2">&gt; &gt; University of Rochester
</span><br>
<span class="quotelev2">&gt; &gt; Phone: (585)520-4412
</span><br>
<span class="quotelev2">&gt; &gt; MSN: dinosaur8312_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15678/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15679.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15677.php">Bill Rankin: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>In reply to:</strong> <a href="15677.php">Bill Rankin: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15679.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
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
