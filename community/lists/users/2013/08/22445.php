<?
$subject_val = "[OMPI users] Large send problem: Error when send buf size =2^28 in a simple code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  5 19:48:46 2013" -->
<!-- isoreceived="20130805234846" -->
<!-- sent="Mon, 5 Aug 2013 16:48:42 -0700" -->
<!-- isosent="20130805234842" -->
<!-- name="ryan He" -->
<!-- email="ryan.qing.he_at_[hidden]" -->
<!-- subject="[OMPI users] Large send problem: Error when send buf size =2^28 in a simple code" -->
<!-- id="CAKnZkDBHbS7PG1M13Wxb04LZ0XXf5Ccd+YM8iTUJsRotu376zA_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] Large send problem: Error when send buf size =2^28 in a simple code<br>
<strong>From:</strong> ryan He (<em>ryan.qing.he_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-05 19:48:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22446.php">Jeff Hammond: "Re: [OMPI users] Large send problem: Error when send buf size =2^28 in a simple code"</a>
<li><strong>Previous message:</strong> <a href="22444.php">Jeff Squyres (jsquyres): "[OMPI users] Migrating www.open-mpi.org"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22446.php">Jeff Hammond: "Re: [OMPI users] Large send problem: Error when send buf size =2^28 in a simple code"</a>
<li><strong>Reply:</strong> <a href="22446.php">Jeff Hammond: "Re: [OMPI users] Large send problem: Error when send buf size =2^28 in a simple code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>I write a simple test code to use MPI_Allgatherv function. The problem
<br>
comes when
<br>
the send buf size becomes relatively big.
<br>
<p>When Bufsize = 2^28 &#150; 1, run on 4 processors. OK
<br>
When Bufsize = 2^28, run on 4 processors. Error
<br>
[btl_tcp_frag.c:209:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv
<br>
error (0xffffffff85f526f8, 2147483592) Bad address(1)
<br>
<p>When Bufsize =2^29-1, run on 2 processors. OK
<br>
When Bufsize = 2^29, run on 2 processors. Error
<br>
[btl_tcp_frag.c:209:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv
<br>
error (0xffffffff964605d0, 2147483632) Bad address(1)
<br>
<p>Bufsize is not that close to int limit, but readv in mca_btl_tcp_frag_recv
<br>
has size close to 2147483647. Does anyone have idea why the error comes?
<br>
Any suggestion to solve or avoid this problem?
<br>
<p>The simple test code is attached below:
<br>
<p>#include &lt;stdio.h&gt;
<br>
<p>#include &lt;stdlib.h&gt;
<br>
<p>#include &lt;string.h&gt;
<br>
<p>#include &lt;unistd.h&gt;
<br>
<p>#include &lt;time.h&gt;
<br>
<p>#include &quot;mpi.h&quot;
<br>
<p>&nbsp;int main(int argc, char ** argv)
<br>
<p>{
<br>
<p>&nbsp;int myid,nproc;
<br>
<p>long i,j;
<br>
<p>long size;
<br>
<p>long bufsize;
<br>
<p>int *rbuf;
<br>
<p>int *sbuf;
<br>
<p>char hostname[MPI_MAX_PROCESSOR_NAME];
<br>
<p>int len;
<br>
<p>&nbsp;size = (long) 2*1024*1024*1024-1;
<br>
<p>&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
<br>
<p>MPI_Comm_size(MPI_COMM_WORLD, &amp;nproc);
<br>
<p>MPI_Get_processor_name(hostname, &amp;len);
<br>
<p>printf(&quot;I am process %d with pid: %d at %s\n&quot;,myid,getpid(),hostname);
<br>
<p>sleep(2);
<br>
<p><p>&nbsp;if (myid == 0)
<br>
<p>printf(&quot;size : %ld\n&quot;,size);
<br>
<p>sbuf = (int *) calloc(size,sizeof(MPI_INT));
<br>
<p>if (sbuf == NULL) {
<br>
<p>printf(&quot;fail to allocate memory of sbuf\n&quot;);
<br>
<p>exit(1);
<br>
<p>}
<br>
<p>rbuf = (int *) calloc(size,sizeof(MPI_INT));
<br>
<p>if (rbuf == NULL) {
<br>
<p>printf(&quot;fail to allocate memory of rbuf\n&quot;);
<br>
<p>exit(1);
<br>
<p>}
<br>
<p>&nbsp;int *recvCount = calloc(nproc,sizeof(int));
<br>
<p>int *displ = calloc(nproc,sizeof(int));
<br>
<p>&nbsp;bufsize = 268435456; //which is 2^28
<br>
<p>for(i=0;i&lt;nproc;++i) {
<br>
<p>recvCount[i] = bufsize;
<br>
<p>displ[i] = bufsize*i;
<br>
<p>}
<br>
<p>&nbsp;for (i=0;i&lt;bufsize;++i)
<br>
<p>sbuf[i] = myid+i;
<br>
<p>printf(&quot;buffer size: %ld recvCount[0]:%d last displ
<br>
index:%d\n&quot;,bufsize,recvCount[0],displ[nproc-1]);
<br>
<p>fflush(stdout);
<br>
<p><p>&nbsp;MPI_Allgatherv(sbuf,recvCount[0], MPI_INT,rbuf,recvCount,displ,MPI_INT,
<br>
<p>MPI_COMM_WORLD);
<br>
<p><p>&nbsp;printf(&quot;OK\n&quot;);
<br>
<p>fflush(stdout);
<br>
<p>&nbsp;MPI_Finalize();
<br>
<p>return 0;
<br>
<p>&nbsp;}
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22445/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22446.php">Jeff Hammond: "Re: [OMPI users] Large send problem: Error when send buf size =2^28 in a simple code"</a>
<li><strong>Previous message:</strong> <a href="22444.php">Jeff Squyres (jsquyres): "[OMPI users] Migrating www.open-mpi.org"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22446.php">Jeff Hammond: "Re: [OMPI users] Large send problem: Error when send buf size =2^28 in a simple code"</a>
<li><strong>Reply:</strong> <a href="22446.php">Jeff Hammond: "Re: [OMPI users] Large send problem: Error when send buf size =2^28 in a simple code"</a>
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
