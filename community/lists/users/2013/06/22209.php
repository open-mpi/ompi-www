<?
$subject_val = "[OMPI users] MPI_Allgatherv error for relative large data on distributed machine, same machine is ok. Narrow down the prob.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 24 19:22:19 2013" -->
<!-- isoreceived="20130624232219" -->
<!-- sent="Mon, 24 Jun 2013 16:22:15 -0700" -->
<!-- isosent="20130624232215" -->
<!-- name="ryan He" -->
<!-- email="ryan.qing.he_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Allgatherv error for relative large data on distributed machine, same machine is ok. Narrow down the prob." -->
<!-- id="CAKnZkDBNZyC+zT-J5XLMBcF5BTwBjfLzv4Cv2kZ8aCsW+X3==w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Allgatherv error for relative large data on distributed machine, same machine is ok. Narrow down the prob.<br>
<strong>From:</strong> ryan He (<em>ryan.qing.he_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-24 19:22:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22210.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows - policy"</a>
<li><strong>Previous message:</strong> <a href="22208.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI on Windows - policy"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p><p>&nbsp;I meet a strange problem using MPI_Allgatherv when the send buf size
<br>
becomes bigger but not that big.
<br>
<p>The following simple testing code of MPI_Allgatherv runs fine when I use
<br>
processors on same machine.
<br>
<p>However, when I use processors on different machine, I see following
<br>
problems on different send buf size.
<br>
<p><p>&nbsp;1. Bufsize = 2^28, run on 2 processors. OK
<br>
<p>2. Bufsize = 2^28, run on 4 processors. Error
<br>
<p>[btl_tcp_frag.c:209:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv
<br>
error (0xffffffff85f526f8, 2147483592) Bad address(1)
<br>
<p>3. Bufsize = 2^28 &#150; 1, run on 4 or 5 or 6 processors. OK
<br>
<p>4. Bufsize = 2^29, run on 2 processors. Error shown below OR hang there
<br>
with no error shown
<br>
<p>[btl_tcp_frag.c:209:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv
<br>
error (0xffffffff964605d0, 2147483632) Bad address(1)
<br>
<p>5. Bufsize =2^29-1, run on 2 processors. OK
<br>
<p>6. Bufsize =2^29-1 , run on 4 processors. hang there with no error shown
<br>
<p><p>&nbsp;I suspect the error is that when receive buf reaches 2^30,
<br>
mca_btl_tcp_frag_recv will have some number close to int limit. However,
<br>
this suspect is not well supported by the testcase above. And I have no
<br>
clue why there is this limit. The problem may also be in network
<br>
configuration since same machine doesn&#146;t have this problem.
<br>
<p><p>&nbsp;Please take a look at the following test code and help me to solve the
<br>
problem.
<br>
<p><p>&nbsp;#include &lt;stdio.h&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22209/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22210.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows - policy"</a>
<li><strong>Previous message:</strong> <a href="22208.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI on Windows - policy"</a>
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
