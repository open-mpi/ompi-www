<?
$subject_val = "Re: [OMPI users] Memory leak in my code";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 13:21:36 2009" -->
<!-- isoreceived="20090226182136" -->
<!-- sent="Thu, 26 Feb 2009 18:21:29 -0000" -->
<!-- isosent="20090226182129" -->
<!-- name="Mark Allan" -->
<!-- email="Mark_Allan_1978_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory leak in my code" -->
<!-- id="000001c9983f$0babcd60$23036820$_at_co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49A6D3EE.9020509_at_web.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Memory leak in my code<br>
<strong>From:</strong> Mark Allan (<em>Mark_Allan_1978_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-26 13:21:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8218.php">Mostyn Lewis: "[OMPI users] Latest SVN failures"</a>
<li><strong>Previous message:</strong> <a href="8216.php">doriankrause: "Re: [OMPI users] Memory leak in my code"</a>
<li><strong>In reply to:</strong> <a href="8216.php">doriankrause: "Re: [OMPI users] Memory leak in my code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene / Dorian,
<br>
<p>Thanks for the advice.  I didn't appreciate that it was necessary to
<br>
explicitly complete the first send by an MPI call.  I assumed that when the
<br>
second receive was complete the first send must also have been completed and
<br>
all would be ok.  In any case, I'm now using MPI_Probe to eliminate the
<br>
first send anyway (thanks Eugene).
<br>
<p>I pass the recvData pointer by reference to nonBlockingRecv as I wish to
<br>
control the memory deletion elsewhere.  I think this achieves the same as
<br>
Dorian points out below.
<br>
<p>Thanks,
<br>
<p>Mark.
<br>
<p>-----Original Message-----
<br>
From: doriankrause_at_[hidden] [mailto:doriankrause_at_[hidden]] 
<br>
Sent: 26 February 2009 17:40
<br>
To: mark_allan_1978_at_[hidden]; Open MPI Users
<br>
Subject: Re: [OMPI users] Memory leak in my code
<br>
<p>Mark Allan wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With this simple code I find I am getting a memory leak when I run on 2
</span><br>
processors.  Can anyone advise why?
<br>
<span class="quotelev1">&gt;   
</span><br>
<p>I suspect the prototype of nonBlockingRecv is actually
<br>
<p>MPI_Request nonBlockingRecv(int **t, int &amp;size, const int tag, const int 
<br>
senderRank)
<br>
<p>and in this case you need to use
<br>
<p>(*t) = malloc(...)
<br>
<p>inside the function.
<br>
<p>Additionally you should pass the recvData pointer by reference, i.e.
<br>
<p>MPI_Request r = nonBlockingRecv(&amp;recvData,size,rank,0);
<br>
<p><p>It strange though, that the free(recvData) did not fail...
<br>
<p>Dorian
<br>
<p><p><span class="quotelev1">&gt; I'm fairly new to MPI (have only done very simple things in the past).
</span><br>
I'm trying to do a non-blocking send/recv (from any proc to any proc) but
<br>
the receiving processor doesn't know how much data it is going to be sent,
<br>
hence the the blocking recv of the size in order to allocate the buffer.  Is
<br>
there a better way of doing this?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Request
</span><br>
<span class="quotelev1">&gt; nonBlockingSend(int *t, int size, const int tag, const int
</span><br>
destinationRank)
<br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Request request1;
</span><br>
<span class="quotelev1">&gt;     MPI_Isend(&amp;size,1,MPI_INT,destinationRank,0,MPI_COMM_WORLD,&amp;request1);
</span><br>
<span class="quotelev1">&gt;     MPI_Request request;
</span><br>
<span class="quotelev1">&gt;     MPI_Isend(t,size,MPI_INT,destinationRank,tag,MPI_COMM_WORLD,&amp;request);
</span><br>
<span class="quotelev1">&gt;     return request;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Request
</span><br>
<span class="quotelev1">&gt; nonBlockingRecv(int *&amp;t, int &amp;size, const int tag, const int senderRank)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Status s1;
</span><br>
<span class="quotelev1">&gt;     MPI_Recv(&amp;size,1,MPI_INT,senderRank,0,MPI_COMM_WORLD,&amp;s1);
</span><br>
<span class="quotelev1">&gt;     t = (int *) malloc(size*sizeof(int));
</span><br>
<span class="quotelev1">&gt;     MPI_Request request;
</span><br>
<span class="quotelev1">&gt;     MPI_Irecv(t,size,MPI_INT,senderRank,tag,MPI_COMM_WORLD,&amp;request);
</span><br>
<span class="quotelev1">&gt;     return request;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void
</span><br>
<span class="quotelev1">&gt; communicationComplete(MPI_Request &amp;r)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Status status;
</span><br>
<span class="quotelev1">&gt;     MPI_Wait(&amp;r,&amp;status);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void
</span><br>
<span class="quotelev1">&gt; barrier()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     int numProcs,rank;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD,&amp;numProcs);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int numIts = 10000000;
</span><br>
<span class="quotelev1">&gt;     int bufSize = 10;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     // Setup send buffers
</span><br>
<span class="quotelev1">&gt;     int *sendData = (int *) malloc(bufSize*sizeof(int));
</span><br>
<span class="quotelev1">&gt;     for(int i=0;i&lt;bufSize;i++)
</span><br>
<span class="quotelev1">&gt;     sendData[i] = i;
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     // Perform send and recvs
</span><br>
<span class="quotelev1">&gt;     for(int i=0;i&lt;numIts;i++)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;     if(rank==0)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;         for(int proc = 1; proc&lt;numProcs;proc++)
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;         MPI_Request r = nonBlockingSend(sendData,bufSize,proc,proc);
</span><br>
<span class="quotelev1">&gt;         communicationComplete(r);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     else
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;         int *recvData;
</span><br>
<span class="quotelev1">&gt;         int size;
</span><br>
<span class="quotelev1">&gt;         MPI_Request r = nonBlockingRecv(recvData,size,rank,0);
</span><br>
<span class="quotelev1">&gt;         communicationComplete(r);
</span><br>
<span class="quotelev1">&gt;         free(recvData);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     barrier();
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     free(sendData);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     return 1;
</span><br>
<span class="quotelev1">&gt; }
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
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
___________________________________________________________ 
<br>
All new Yahoo! Mail &quot;The new Interface is stunning in its simplicity and ease of use.&quot; - PC Magazine 
<br>
<a href="http://uk.docs.yahoo.com/nowyoucan.html">http://uk.docs.yahoo.com/nowyoucan.html</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8218.php">Mostyn Lewis: "[OMPI users] Latest SVN failures"</a>
<li><strong>Previous message:</strong> <a href="8216.php">doriankrause: "Re: [OMPI users] Memory leak in my code"</a>
<li><strong>In reply to:</strong> <a href="8216.php">doriankrause: "Re: [OMPI users] Memory leak in my code"</a>
<!-- nextthread="start" -->
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
