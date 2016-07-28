<?
$subject_val = "Re: [OMPI users] Large send problem: Error when send buf size =2^28 in a simple code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  5 21:37:35 2013" -->
<!-- isoreceived="20130806013735" -->
<!-- sent="Mon, 5 Aug 2013 20:37:09 -0500" -->
<!-- isosent="20130806013709" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Large send problem: Error when send buf size =2^28 in a simple code" -->
<!-- id="CAGKz=u+69Kq3KPzw4ECW2LUBYF8GhrGVy2+zhRfXPfzfDeUWhg_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAKnZkDBHbS7PG1M13Wxb04LZ0XXf5Ccd+YM8iTUJsRotu376zA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-05 21:37:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22447.php">George Bosilca: "Re: [OMPI users] Large send problem: Error when send buf size =2^28 in a simple code"</a>
<li><strong>Previous message:</strong> <a href="22445.php">ryan He: "[OMPI users] Large send problem: Error when send buf size =2^28 in a simple code"</a>
<li><strong>In reply to:</strong> <a href="22445.php">ryan He: "[OMPI users] Large send problem: Error when send buf size =2^28 in a simple code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22447.php">George Bosilca: "Re: [OMPI users] Large send problem: Error when send buf size =2^28 in a simple code"</a>
<li><strong>Reply:</strong> <a href="22447.php">George Bosilca: "Re: [OMPI users] Large send problem: Error when send buf size =2^28 in a simple code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As your code prints OK without verifying the correctness of the
<br>
result, you are only verifying the lack of segfault in OpenMPI, which
<br>
is necessary but not sufficient for correct execution.
<br>
<p>It is not uncommon for MPI implementations to have issues near
<br>
count=2^31.  I can't speak to the extent to which OpenMPI is
<br>
rigorously correct in this respect.  I've yet to find an
<br>
implementation which is end-to-end count-safe, which includes support
<br>
for zettabyte buffers via MPI datatypes for collectives,
<br>
point-to-point, RMA and IO.
<br>
<p>The easy solution for your case is to chop MPI_Allgatherv into
<br>
multiple calls.  In the case where the array of send counts is near
<br>
uniform, you can do N MPI_Allgather calls and 1 MPI_Allgatherv, which
<br>
might help performance in some cases.
<br>
<p>Since most MPI implementations use Send/Recv under the hood for
<br>
collectives, you can aid in the debugging of this issue by testing
<br>
MPI_Send/Recv for count-&gt;2^31.
<br>
<p>Best,
<br>
<p>Jeff
<br>
<p>On Mon, Aug 5, 2013 at 6:48 PM, ryan He &lt;ryan.qing.he_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I write a simple test code to use MPI_Allgatherv function. The problem comes
</span><br>
<span class="quotelev1">&gt; when
</span><br>
<span class="quotelev1">&gt; the send buf size becomes relatively big.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When Bufsize = 2^28 &#150; 1, run on 4 processors. OK
</span><br>
<span class="quotelev1">&gt; When Bufsize = 2^28, run on 4 processors. Error
</span><br>
<span class="quotelev1">&gt; [btl_tcp_frag.c:209:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv
</span><br>
<span class="quotelev1">&gt; error (0xffffffff85f526f8, 2147483592) Bad address(1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When Bufsize =2^29-1, run on 2 processors. OK
</span><br>
<span class="quotelev1">&gt; When Bufsize = 2^29, run on 2 processors. Error
</span><br>
<span class="quotelev1">&gt; [btl_tcp_frag.c:209:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv
</span><br>
<span class="quotelev1">&gt; error (0xffffffff964605d0, 2147483632) Bad address(1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bufsize is not that close to int limit, but readv in mca_btl_tcp_frag_recv
</span><br>
<span class="quotelev1">&gt; has size close to 2147483647. Does anyone have idea why the error comes? Any
</span><br>
<span class="quotelev1">&gt; suggestion to solve or avoid this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The simple test code is attached below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;time.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char ** argv)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int myid,nproc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; long i,j;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; long size;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; long bufsize;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int *rbuf;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int *sbuf;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; char hostname[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int len;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; size = (long) 2*1024*1024*1024-1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;nproc);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Get_processor_name(hostname, &amp;len);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; printf(&quot;I am process %d with pid: %d at %s\n&quot;,myid,getpid(),hostname);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sleep(2);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if (myid == 0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; printf(&quot;size : %ld\n&quot;,size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sbuf = (int *) calloc(size,sizeof(MPI_INT));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if (sbuf == NULL) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; printf(&quot;fail to allocate memory of sbuf\n&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; exit(1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rbuf = (int *) calloc(size,sizeof(MPI_INT));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if (rbuf == NULL) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; printf(&quot;fail to allocate memory of rbuf\n&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; exit(1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int *recvCount = calloc(nproc,sizeof(int));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int *displ = calloc(nproc,sizeof(int));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bufsize = 268435456; //which is 2^28
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for(i=0;i&lt;nproc;++i) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; recvCount[i] = bufsize;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; displ[i] = bufsize*i;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for (i=0;i&lt;bufsize;++i)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sbuf[i] = myid+i;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; printf(&quot;buffer size: %ld recvCount[0]:%d last displ
</span><br>
<span class="quotelev1">&gt; index:%d\n&quot;,bufsize,recvCount[0],displ[nproc-1]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fflush(stdout);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Allgatherv(sbuf,recvCount[0], MPI_INT,rbuf,recvCount,displ,MPI_INT,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; printf(&quot;OK\n&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fflush(stdout);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
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
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22447.php">George Bosilca: "Re: [OMPI users] Large send problem: Error when send buf size =2^28 in a simple code"</a>
<li><strong>Previous message:</strong> <a href="22445.php">ryan He: "[OMPI users] Large send problem: Error when send buf size =2^28 in a simple code"</a>
<li><strong>In reply to:</strong> <a href="22445.php">ryan He: "[OMPI users] Large send problem: Error when send buf size =2^28 in a simple code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22447.php">George Bosilca: "Re: [OMPI users] Large send problem: Error when send buf size =2^28 in a simple code"</a>
<li><strong>Reply:</strong> <a href="22447.php">George Bosilca: "Re: [OMPI users] Large send problem: Error when send buf size =2^28 in a simple code"</a>
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
