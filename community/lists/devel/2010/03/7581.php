<?
$subject_val = "[OMPI devel] ome questions about checkpoint/restart (3)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 01:11:20 2010" -->
<!-- isoreceived="20100312061120" -->
<!-- sent="Fri, 12 Mar 2010 15:11:32 +0900" -->
<!-- isosent="20100312061132" -->
<!-- name="Takayuki Seki" -->
<!-- email="seki_at_[hidden]" -->
<!-- subject="[OMPI devel] ome questions about checkpoint/restart (3)" -->
<!-- id="4B99DB14.6050504_at_np.css.fujitsu.com" -->
<!-- charset="ISO-2022-JP" -->
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
<strong>Subject:</strong> [OMPI devel] ome questions about checkpoint/restart (3)<br>
<strong>From:</strong> Takayuki Seki (<em>seki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 01:11:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7582.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (4)"</a>
<li><strong>Previous message:</strong> <a href="7580.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
3rd question is as follows:
<br>
<p>(3) If the message of the same condition exists in two lists or more,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;an error occurs by assert(need &lt;= found) in send_msg_details function.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I built Open MPI with &quot;--enable-debug&quot; configure option.
<br>
<p>Framework         : crcp
<br>
Component         : bkmrk
<br>
The source file   : ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
<br>
The function name : send_msg_details,do_recv_msg_detail_check_drain
<br>
<p>Here's the code that causes the problem:
<br>
<p>#define BLOCKNUM 1
<br>
#define SLPTIM 60
<br>
<p>&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(wbuf,BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(wbuf,BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(wbuf,BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(wbuf,BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD,&amp;sreq); MPI_Wait(&amp;sreq,&amp;ssts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(wbuf,BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD,&amp;sreq); MPI_Wait(&amp;sreq,&amp;ssts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(wbuf,BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD,&amp;sreq); MPI_Wait(&amp;sreq,&amp;ssts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(wbuf,BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD,&amp;sreq);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIM); /** take checkpoint at this point **/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;sreq,&amp;ssts);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else {  /* rank 1 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,0,100,MPI_COMM_WORLD,&amp;rreq); MPI_Wait(&amp;rreq,&amp;rsts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,0,100,MPI_COMM_WORLD,&amp;rreq); MPI_Wait(&amp;rreq,&amp;rsts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,0,100,MPI_COMM_WORLD,&amp;rreq); MPI_Wait(&amp;rreq,&amp;rsts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,0,100,MPI_COMM_WORLD,&amp;rreq); MPI_Wait(&amp;rreq,&amp;rsts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,0,100,MPI_COMM_WORLD,&amp;rreq); MPI_Wait(&amp;rreq,&amp;rsts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,0,100,MPI_COMM_WORLD,&amp;rreq); MPI_Wait(&amp;rreq,&amp;rsts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIM); /** take checkpoint at this point **/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,0,100,MPI_COMM_WORLD,&amp;rreq);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;rreq,&amp;rsts);
<br>
&nbsp;&nbsp;}
<br>
<p>* Take checkpoint while Process 0 and Process 1 are in sleep function
<br>
<p>* Here's the tag,elements,type,and communicator of the message;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;message tag=100,number of elements=1,data type=MPI_INT,communicator=MPI_COMM_WORLD
<br>
<p>* Send side(Rank 0):
<br>
&nbsp;&nbsp;The information of the message of the same condition exists in both send_list and isend_list.
<br>
<p>* Recv side(Rank 1):
<br>
&nbsp;&nbsp;The information of the message exists in irecv_list only.
<br>
&nbsp;&nbsp;I wonder that there are some problems on messages matching in do_recv_msg_detail_check_drain function.
<br>
<p>* Result
<br>
&nbsp;rank=0 size=2
<br>
&nbsp;rank=1 size=2
<br>
&nbsp;rank=0 sleep start
<br>
&nbsp;rank=1 sleep start
<br>
&nbsp;rank=0 sleep end
<br>
&nbsp;rank=1 sleep end
<br>
t_mpi_question-3.out: ../../../../../ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c:5471: send_msg_details: Assertion `need &lt;= found' failed.
<br>
[camel0:24606] *** Process received signal ***
<br>
[camel0:24606] Signal: Aborted (6)
<br>
[camel0:24606] Signal code:  (-6)
<br>
<p><p>-bash-3.2$ cat t_mpi_question-3.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &lt;time.h&gt;
<br>
#include &lt;limits.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>#define BLOCKNUM 1
<br>
#define SLPTIM 60
<br>
<p>int main(int ac,char **av)
<br>
{
<br>
&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;int rank,size;
<br>
&nbsp;&nbsp;int *wbuf;
<br>
&nbsp;&nbsp;int *rbuf;
<br>
&nbsp;&nbsp;MPI_Status rsts,ssts;
<br>
&nbsp;&nbsp;MPI_Request rreq,sreq;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;ac,&amp;av);
<br>
<p>&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
&nbsp;&nbsp;if (size != 2) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
<p>&nbsp;&nbsp;rbuf    = (int *)malloc(BLOCKNUM * sizeof(int));
<br>
&nbsp;&nbsp;wbuf    = (int *)malloc(BLOCKNUM * sizeof(int));
<br>
&nbsp;&nbsp;if ((rbuf == NULL)||(wbuf == NULL)) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
<p>&nbsp;&nbsp;printf(&quot; rank=%d size=%d \n&quot;,rank,size); fflush(stdout);
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { wbuf[i] = (100 + i); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(wbuf,BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { wbuf[i] = (200 + i); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(wbuf,BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { wbuf[i] = (300 + i); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(wbuf,BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { wbuf[i] = (400 + i); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(wbuf,BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD,&amp;sreq); MPI_Wait(&amp;sreq,&amp;ssts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { wbuf[i] = (500 + i); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(wbuf,BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD,&amp;sreq); MPI_Wait(&amp;sreq,&amp;ssts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { wbuf[i] = (600 + i); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(wbuf,BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD,&amp;sreq); MPI_Wait(&amp;sreq,&amp;ssts);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { wbuf[i] = (700 + i); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(wbuf,BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD,&amp;sreq);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIM);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;sreq,&amp;ssts);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { rbuf[i] = 0; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,0,100,MPI_COMM_WORLD,&amp;rreq); MPI_Wait(&amp;rreq,&amp;rsts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { if (rbuf[i] != (100 + i)) { abort(); } }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { rbuf[i] = 0; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,0,100,MPI_COMM_WORLD,&amp;rreq); MPI_Wait(&amp;rreq,&amp;rsts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { if (rbuf[i] != (200 + i)) { abort(); } }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { rbuf[i] = 0; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,0,100,MPI_COMM_WORLD,&amp;rreq); MPI_Wait(&amp;rreq,&amp;rsts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { if (rbuf[i] != (300 + i)) { abort(); } }
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { rbuf[i] = 0; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,0,100,MPI_COMM_WORLD,&amp;rreq); MPI_Wait(&amp;rreq,&amp;rsts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { if (rbuf[i] != (400 + i)) { abort(); } }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { rbuf[i] = 0; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,0,100,MPI_COMM_WORLD,&amp;rreq); MPI_Wait(&amp;rreq,&amp;rsts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { if (rbuf[i] != (500 + i)) { abort(); } }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { rbuf[i] = 0; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,0,100,MPI_COMM_WORLD,&amp;rreq); MPI_Wait(&amp;rreq,&amp;rsts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { if (rbuf[i] != (600 + i)) { abort(); } }
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIM);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { rbuf[i] = 0; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,0,100,MPI_COMM_WORLD,&amp;rreq);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;rreq,&amp;rsts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { if (rbuf[i] != (700 + i)) { abort(); } }
<br>
&nbsp;&nbsp;}
<br>
<p><p>&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;free(rbuf);
<br>
&nbsp;&nbsp;free(wbuf);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d program end \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;return(0);
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7582.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (4)"</a>
<li><strong>Previous message:</strong> <a href="7580.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
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
