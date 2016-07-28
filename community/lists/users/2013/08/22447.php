<?
$subject_val = "Re: [OMPI users] Large send problem: Error when send buf size =2^28 in a simple code";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  6 06:05:44 2013" -->
<!-- isoreceived="20130806100544" -->
<!-- sent="Tue, 6 Aug 2013 12:05:39 +0200" -->
<!-- isosent="20130806100539" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Large send problem: Error when send buf size =2^28 in a simple code" -->
<!-- id="87C5572D-F725-4746-BBED-93DA8A74E13C_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAGKz=u+69Kq3KPzw4ECW2LUBYF8GhrGVy2+zhRfXPfzfDeUWhg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Large send problem: Error when send buf size =2^28 in a simple code<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-06 06:05:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22448.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>Previous message:</strong> <a href="22446.php">Jeff Hammond: "Re: [OMPI users] Large send problem: Error when send buf size =2^28 in a simple code"</a>
<li><strong>In reply to:</strong> <a href="22446.php">Jeff Hammond: "Re: [OMPI users] Large send problem: Error when send buf size =2^28 in a simple code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The provided code sample is not correct, thus the real issue has nothing to do with the amount of data to be handled by the MPI implementation. Scale the amount to allocate down to 2^27 and the issue will still persist&#133;
<br>
<p>Your MPI_Allgatherv operation receives recvCount[i]*MPI_INT from each peer and place it in memory starting from displacement displ[i] from rbuf. Thus, in order for this application to work as you expect the receive buffer should be large enough to contain all the data sent by __all__ peers. This is not the case in this application. In other words the rbuf must be of size*nproc*sizeof(MPI_INT) for your application to be correct. 
<br>
<p>Your application works for 2 processes as 2^28 * 2 = 2 ^ 29, under the limit of allocated memory of 2^30-1. For larger amounts 2^29 * 2 = 2 ^ 30 is larger than the allocated memory 2^30-1, and similar when you increase the number of processes.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Aug 6, 2013, at 03:37 , Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; As your code prints OK without verifying the correctness of the
</span><br>
<span class="quotelev1">&gt; result, you are only verifying the lack of segfault in OpenMPI, which
</span><br>
<span class="quotelev1">&gt; is necessary but not sufficient for correct execution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is not uncommon for MPI implementations to have issues near
</span><br>
<span class="quotelev1">&gt; count=2^31.  I can't speak to the extent to which OpenMPI is
</span><br>
<span class="quotelev1">&gt; rigorously correct in this respect.  I've yet to find an
</span><br>
<span class="quotelev1">&gt; implementation which is end-to-end count-safe, which includes support
</span><br>
<span class="quotelev1">&gt; for zettabyte buffers via MPI datatypes for collectives,
</span><br>
<span class="quotelev1">&gt; point-to-point, RMA and IO.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The easy solution for your case is to chop MPI_Allgatherv into
</span><br>
<span class="quotelev1">&gt; multiple calls.  In the case where the array of send counts is near
</span><br>
<span class="quotelev1">&gt; uniform, you can do N MPI_Allgather calls and 1 MPI_Allgatherv, which
</span><br>
<span class="quotelev1">&gt; might help performance in some cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since most MPI implementations use Send/Recv under the hood for
</span><br>
<span class="quotelev1">&gt; collectives, you can aid in the debugging of this issue by testing
</span><br>
<span class="quotelev1">&gt; MPI_Send/Recv for count-&gt;2^31.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 5, 2013 at 6:48 PM, ryan He &lt;ryan.qing.he_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear All,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I write a simple test code to use MPI_Allgatherv function. The problem comes
</span><br>
<span class="quotelev2">&gt;&gt; when
</span><br>
<span class="quotelev2">&gt;&gt; the send buf size becomes relatively big.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When Bufsize = 2^28 &#150; 1, run on 4 processors. OK
</span><br>
<span class="quotelev2">&gt;&gt; When Bufsize = 2^28, run on 4 processors. Error
</span><br>
<span class="quotelev2">&gt;&gt; [btl_tcp_frag.c:209:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv
</span><br>
<span class="quotelev2">&gt;&gt; error (0xffffffff85f526f8, 2147483592) Bad address(1)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When Bufsize =2^29-1, run on 2 processors. OK
</span><br>
<span class="quotelev2">&gt;&gt; When Bufsize = 2^29, run on 2 processors. Error
</span><br>
<span class="quotelev2">&gt;&gt; [btl_tcp_frag.c:209:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv
</span><br>
<span class="quotelev2">&gt;&gt; error (0xffffffff964605d0, 2147483632) Bad address(1)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Bufsize is not that close to int limit, but readv in mca_btl_tcp_frag_recv
</span><br>
<span class="quotelev2">&gt;&gt; has size close to 2147483647. Does anyone have idea why the error comes? Any
</span><br>
<span class="quotelev2">&gt;&gt; suggestion to solve or avoid this problem?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The simple test code is attached below:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;time.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char ** argv)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int myid,nproc;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; long i,j;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; long size;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; long bufsize;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int *rbuf;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int *sbuf;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; char hostname[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int len;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; size = (long) 2*1024*1024*1024-1;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;nproc);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Get_processor_name(hostname, &amp;len);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; printf(&quot;I am process %d with pid: %d at %s\n&quot;,myid,getpid(),hostname);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; sleep(2);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if (myid == 0)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; printf(&quot;size : %ld\n&quot;,size);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; sbuf = (int *) calloc(size,sizeof(MPI_INT));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if (sbuf == NULL) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; printf(&quot;fail to allocate memory of sbuf\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; exit(1);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; rbuf = (int *) calloc(size,sizeof(MPI_INT));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if (rbuf == NULL) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; printf(&quot;fail to allocate memory of rbuf\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; exit(1);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int *recvCount = calloc(nproc,sizeof(int));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int *displ = calloc(nproc,sizeof(int));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; bufsize = 268435456; //which is 2^28
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; for(i=0;i&lt;nproc;++i) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; recvCount[i] = bufsize;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; displ[i] = bufsize*i;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; for (i=0;i&lt;bufsize;++i)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; sbuf[i] = myid+i;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; printf(&quot;buffer size: %ld recvCount[0]:%d last displ
</span><br>
<span class="quotelev2">&gt;&gt; index:%d\n&quot;,bufsize,recvCount[0],displ[nproc-1]);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Allgatherv(sbuf,recvCount[0], MPI_INT,rbuf,recvCount,displ,MPI_INT,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; printf(&quot;OK\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; return 0;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden]
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
<li><strong>Next message:</strong> <a href="22448.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>Previous message:</strong> <a href="22446.php">Jeff Hammond: "Re: [OMPI users] Large send problem: Error when send buf size =2^28 in a simple code"</a>
<li><strong>In reply to:</strong> <a href="22446.php">Jeff Hammond: "Re: [OMPI users] Large send problem: Error when send buf size =2^28 in a simple code"</a>
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
