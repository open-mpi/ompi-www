<?
$subject_val = "Re: [OMPI users] Memory leak in my code";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 12:41:51 2009" -->
<!-- isoreceived="20090226174151" -->
<!-- sent="Thu, 26 Feb 2009 18:39:58 +0100" -->
<!-- isosent="20090226173958" -->
<!-- name="doriankrause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory leak in my code" -->
<!-- id="49A6D3EE.9020509_at_web.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="290882.75340.qm_at_web27101.mail.ukl.yahoo.com" -->
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
<strong>From:</strong> doriankrause (<em>doriankrause_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-26 12:39:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8217.php">Mark Allan: "Re: [OMPI users] Memory leak in my code"</a>
<li><strong>Previous message:</strong> <a href="8215.php">Eugene Loh: "Re: [OMPI users] Memory leak in my code"</a>
<li><strong>In reply to:</strong> <a href="8214.php">Mark Allan: "[OMPI users] Memory leak in my code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8217.php">Mark Allan: "Re: [OMPI users] Memory leak in my code"</a>
<li><strong>Reply:</strong> <a href="8217.php">Mark Allan: "Re: [OMPI users] Memory leak in my code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mark Allan wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With this simple code I find I am getting a memory leak when I run on 2 processors.  Can anyone advise why?
</span><br>
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
<p><p><span class="quotelev1">&gt; I'm fairly new to MPI (have only done very simple things in the past).  I'm trying to do a non-blocking send/recv (from any proc to any proc) but the receiving processor doesn't know how much data it is going to be sent, hence the the blocking recv of the size in order to allocate the buffer.  Is there a better way of doing this?
</span><br>
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
<span class="quotelev1">&gt; nonBlockingSend(int *t, int size, const int tag, const int destinationRank)
</span><br>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8217.php">Mark Allan: "Re: [OMPI users] Memory leak in my code"</a>
<li><strong>Previous message:</strong> <a href="8215.php">Eugene Loh: "Re: [OMPI users] Memory leak in my code"</a>
<li><strong>In reply to:</strong> <a href="8214.php">Mark Allan: "[OMPI users] Memory leak in my code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8217.php">Mark Allan: "Re: [OMPI users] Memory leak in my code"</a>
<li><strong>Reply:</strong> <a href="8217.php">Mark Allan: "Re: [OMPI users] Memory leak in my code"</a>
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
