<?
$subject_val = "[OMPI devel] Some questions about checkpoint/restart (5)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 18 05:06:09 2010" -->
<!-- isoreceived="20100318090609" -->
<!-- sent="Thu, 18 Mar 2010 18:06:43 +0900" -->
<!-- isosent="20100318090643" -->
<!-- name="Takayuki Seki" -->
<!-- email="seki_at_[hidden]" -->
<!-- subject="[OMPI devel] Some questions about checkpoint/restart (5)" -->
<!-- id="4BA1ED23.8040609_at_np.css.fujitsu.com" -->
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
<strong>Subject:</strong> [OMPI devel] Some questions about checkpoint/restart (5)<br>
<strong>From:</strong> Takayuki Seki (<em>seki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-18 05:06:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7631.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (6)"</a>
<li><strong>Previous message:</strong> <a href="7629.php">Ralph Castain: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
5th question is as follows:
<br>
<p>(5) Receving with MPI_ANY_SOURCE,MPI_ANY_TAG.
<br>
<p>This problem might have already been announced by the Open MPI Trac with &quot;Ticket #1769&quot;.
<br>
This problem will occur with usual MPI program.
<br>
<p>Framework         : crcp
<br>
Component         : bkmrk
<br>
The source file   : ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
<br>
The function name : do_recv_msg_detail_check_drain,traffic_message_find
<br>
<p>Here's the code that causes the problem:
<br>
<p>#define BLOCKNUM 1048576
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
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(wbuf,BLOCKNUM,MPI_INT,1,200,MPI_COMM_WORLD,&amp;sreq[5]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIM); /** take checkpoint at this point **/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;sreq[5],&amp;ssts[5]);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else {  /* rank 1 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(rbuf,BLOCKNUM,MPI_INT,0,100,MPI_COMM_WORLD,&amp;rsts[2]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,MPI_ANY_SOURCE,MPI_ANY_TAG,MPI_COMM_WORLD,&amp;rreq[3]); MPI_Wait(&amp;rreq[3],&amp;rsts[3]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,0,100,MPI_COMM_WORLD,&amp;rreq[4]); MPI_Wait(&amp;rreq[4],&amp;rsts[4]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIM); /** take checkpoint at this point **/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(rbuf,BLOCKNUM,MPI_INT,0,200,MPI_COMM_WORLD,&amp;rsts[5]);
<br>
&nbsp;&nbsp;}
<br>
<p>* Take checkpoint while Rank 0 and Rank 1 are performing sleep function
<br>
<p>* There are two messages which are considered to be an same condition by MPI_ANY_SOURCE,MPI_ANY_TAG in irecv_list.
<br>
&nbsp;&nbsp;It is as follows:
<br>
<p>[IRECV=1e44a00 comm_id=6019e0/0/1 msgid=6 count=1048576 tag=100 rank=0 proc_name=-833290239/0 matched=0 done=1 active=0 drain=0 ] [c=0 r=1]
<br>
[IRECV=1e44b80 comm_id=6019e0/0/1 msgid=5 count=1048576 tag=-1 rank=-1 proc_name=-833290239/0 matched=0 done=1 active=0 drain=0 ] [c=0 r=1]
<br>
<p>* However, do_recv_msg_detail_check_drain function obtains either message information via traffic_message_find.
<br>
<p>* Therefore, the other message information can not be obtained.
<br>
<p><p>-bash-3.2$ cat t_mpi_question-5.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>#define BLOCKNUM 1048576
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
&nbsp;&nbsp;MPI_Status rsts[4],ssts[4];
<br>
&nbsp;&nbsp;MPI_Request rreq[4],sreq[4];
<br>
&nbsp;&nbsp;int bufsize,count;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;ac,&amp;av);
<br>
<p>&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
&nbsp;&nbsp;printf(&quot; rank=%d size=%d \n&quot;,rank,size); fflush(stdout);
<br>
&nbsp;&nbsp;if (size != 2) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
<p>&nbsp;&nbsp;rbuf    = (int *)malloc(BLOCKNUM * sizeof(int));
<br>
&nbsp;&nbsp;wbuf    = (int *)malloc(BLOCKNUM * sizeof(int));
<br>
&nbsp;&nbsp;if ((rbuf == NULL)||(wbuf == NULL)) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
<p>&nbsp;&nbsp;printf(&quot; rank=%d pass-1 \n&quot;,rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { wbuf[i] = (100+i); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(wbuf,BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { wbuf[i] = (200+i); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(wbuf,BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { wbuf[i] = (300+i); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(wbuf,BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { wbuf[i] = (400+i); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(wbuf,BLOCKNUM,MPI_INT,1,200,MPI_COMM_WORLD,&amp;sreq[0]);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIM);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;sreq[0],&amp;ssts[0]);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { rbuf[i] = 0; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(rbuf,BLOCKNUM,MPI_INT,0,100,MPI_COMM_WORLD,&amp;rsts[0]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { if(rbuf[i] != (100+i)) { MPI_Abort(MPI_COMM_WORLD,1); } }
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { rbuf[i] = 0; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,MPI_ANY_SOURCE,MPI_ANY_TAG,MPI_COMM_WORLD,&amp;rreq[1]); MPI_Wait(&amp;rreq[1],&amp;rsts[0]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { if(rbuf[i] != (200+i)) { MPI_Abort(MPI_COMM_WORLD,1); } }
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { rbuf[i] = 0; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,0,100,MPI_COMM_WORLD,&amp;rreq[2]); MPI_Wait(&amp;rreq[2],&amp;rsts[2]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { if(rbuf[i] != (300+i)) { MPI_Abort(MPI_COMM_WORLD,1); } }
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIM);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { rbuf[i] = 0; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(rbuf,BLOCKNUM,MPI_INT,0,200,MPI_COMM_WORLD,&amp;rsts[3]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { if(rbuf[i] != (400+i)) { MPI_Abort(MPI_COMM_WORLD,1); } }
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;free(rbuf);
<br>
&nbsp;&nbsp;free(wbuf);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d program end \n&quot;,rank); fflush(stdout); fflush(stderr);
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
<li><strong>Next message:</strong> <a href="7631.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (6)"</a>
<li><strong>Previous message:</strong> <a href="7629.php">Ralph Castain: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
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
