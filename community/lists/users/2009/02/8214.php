<?
$subject_val = "[OMPI users] Memory leak in my code";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 09:41:22 2009" -->
<!-- isoreceived="20090226144122" -->
<!-- sent="Thu, 26 Feb 2009 14:41:16 +0000 (GMT)" -->
<!-- isosent="20090226144116" -->
<!-- name="Mark Allan" -->
<!-- email="mark_allan_1978_at_[hidden]" -->
<!-- subject="[OMPI users] Memory leak in my code" -->
<!-- id="290882.75340.qm_at_web27101.mail.ukl.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Memory leak in my code<br>
<strong>From:</strong> Mark Allan (<em>mark_allan_1978_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-26 09:41:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8215.php">Eugene Loh: "Re: [OMPI users] Memory leak in my code"</a>
<li><strong>Previous message:</strong> <a href="8213.php">Nader: "[OMPI users] OMPI, and HPUX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8215.php">Eugene Loh: "Re: [OMPI users] Memory leak in my code"</a>
<li><strong>Reply:</strong> <a href="8215.php">Eugene Loh: "Re: [OMPI users] Memory leak in my code"</a>
<li><strong>Reply:</strong> <a href="8216.php">doriankrause: "Re: [OMPI users] Memory leak in my code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>With this simple code I find I am getting a memory leak when I run on 2 processors.&#160; Can anyone advise why?
<br>
<p>I'm fairly new to MPI (have only done very simple things in the past).&#160; I'm trying to do a non-blocking send/recv (from any proc to any proc) but the receiving processor doesn't know how much data it is going to be sent, hence the the blocking recv of the size in order to allocate the buffer.&#160; Is there a better way of doing this?
<br>
<p>Thanks,
<br>
<p>Mark
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>MPI_Request
<br>
nonBlockingSend(int *t, int size, const int tag, const int destinationRank)
<br>
{
<br>
&#160;&#160;&#160; MPI_Request request1;
<br>
&#160;&#160;&#160; MPI_Isend(&amp;size,1,MPI_INT,destinationRank,0,MPI_COMM_WORLD,&amp;request1);
<br>
&#160;&#160;&#160; MPI_Request request;
<br>
&#160;&#160;&#160; MPI_Isend(t,size,MPI_INT,destinationRank,tag,MPI_COMM_WORLD,&amp;request);
<br>
&#160;&#160;&#160; return request;
<br>
}
<br>
<p>MPI_Request
<br>
nonBlockingRecv(int *&amp;t, int &amp;size, const int tag, const int senderRank)
<br>
{
<br>
&#160;&#160;&#160; MPI_Status s1;
<br>
&#160;&#160;&#160; MPI_Recv(&amp;size,1,MPI_INT,senderRank,0,MPI_COMM_WORLD,&amp;s1);
<br>
&#160;&#160;&#160; t = (int *) malloc(size*sizeof(int));
<br>
&#160;&#160;&#160; MPI_Request request;
<br>
&#160;&#160;&#160; MPI_Irecv(t,size,MPI_INT,senderRank,tag,MPI_COMM_WORLD,&amp;request);
<br>
&#160;&#160;&#160; return request;
<br>
}
<br>
<p>void
<br>
communicationComplete(MPI_Request &amp;r)
<br>
{
<br>
&#160;&#160;&#160; MPI_Status status;
<br>
&#160;&#160;&#160; MPI_Wait(&amp;r,&amp;status);
<br>
}
<br>
<p>void
<br>
barrier()
<br>
{
<br>
&#160;&#160;&#160; MPI_Barrier(MPI_COMM_WORLD);
<br>
}
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&#160;&#160;&#160; MPI_Init(&amp;argc,&amp;argv);
<br>
&#160;&#160;&#160; 
<br>
&#160;&#160;&#160; int numProcs,rank;
<br>
&#160;&#160;&#160; MPI_Comm_size(MPI_COMM_WORLD,&amp;numProcs);
<br>
&#160;&#160;&#160; MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
<p>&#160;&#160;&#160; int numIts = 10000000;
<br>
&#160;&#160;&#160; int bufSize = 10;
<br>
<p>&#160;&#160;&#160; // Setup send buffers
<br>
&#160;&#160;&#160; int *sendData = (int *) malloc(bufSize*sizeof(int));
<br>
&#160;&#160;&#160; for(int i=0;i&lt;bufSize;i++)
<br>
&#160;&#160;&#160; sendData[i] = i;
<br>
&#160;&#160;&#160; 
<br>
&#160;&#160;&#160; // Perform send and recvs
<br>
&#160;&#160;&#160; for(int i=0;i&lt;numIts;i++)
<br>
&#160;&#160;&#160; {
<br>
&#160;&#160;&#160; if(rank==0)
<br>
&#160;&#160;&#160; {
<br>
&#160;&#160;&#160; &#160;&#160;&#160; for(int proc = 1; proc&lt;numProcs;proc++)
<br>
&#160;&#160;&#160; &#160;&#160;&#160; {
<br>
&#160;&#160;&#160; &#160;&#160;&#160; MPI_Request r = nonBlockingSend(sendData,bufSize,proc,proc);
<br>
&#160;&#160;&#160; &#160;&#160;&#160; communicationComplete(r);
<br>
&#160;&#160;&#160; &#160;&#160;&#160; }
<br>
&#160;&#160;&#160; }
<br>
&#160;&#160;&#160; else
<br>
&#160;&#160;&#160; {
<br>
&#160;&#160;&#160; &#160;&#160;&#160; int *recvData;
<br>
&#160;&#160;&#160; &#160;&#160;&#160; int size;
<br>
&#160;&#160;&#160; &#160;&#160;&#160; MPI_Request r = nonBlockingRecv(recvData,size,rank,0);
<br>
&#160;&#160;&#160; &#160;&#160;&#160; communicationComplete(r);
<br>
&#160;&#160;&#160; &#160;&#160;&#160; free(recvData);
<br>
&#160;&#160;&#160; }
<br>
&#160;&#160;&#160; barrier();
<br>
&#160;&#160;&#160; }
<br>
&#160;&#160;&#160; free(sendData);
<br>
<p>&#160;&#160;&#160; MPI_Finalize();
<br>
<p>&#160;&#160;&#160; return 1;
<br>
}
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8214/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8215.php">Eugene Loh: "Re: [OMPI users] Memory leak in my code"</a>
<li><strong>Previous message:</strong> <a href="8213.php">Nader: "[OMPI users] OMPI, and HPUX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8215.php">Eugene Loh: "Re: [OMPI users] Memory leak in my code"</a>
<li><strong>Reply:</strong> <a href="8215.php">Eugene Loh: "Re: [OMPI users] Memory leak in my code"</a>
<li><strong>Reply:</strong> <a href="8216.php">doriankrause: "Re: [OMPI users] Memory leak in my code"</a>
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
