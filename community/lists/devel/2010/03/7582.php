<?
$subject_val = "[OMPI devel] Some questions about checkpoint/restart (4)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 01:27:23 2010" -->
<!-- isoreceived="20100312062723" -->
<!-- sent="Fri, 12 Mar 2010 15:27:54 +0900" -->
<!-- isosent="20100312062754" -->
<!-- name="Takayuki Seki" -->
<!-- email="seki_at_[hidden]" -->
<!-- subject="[OMPI devel] Some questions about checkpoint/restart (4)" -->
<!-- id="4B99DEEA.8010709_at_np.css.fujitsu.com" -->
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
<strong>Subject:</strong> [OMPI devel] Some questions about checkpoint/restart (4)<br>
<strong>From:</strong> Takayuki Seki (<em>seki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 01:27:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7583.php">Joshua Hursey: "[OMPI devel] Build issue: mpi_portable_platform.h"</a>
<li><strong>Previous message:</strong> <a href="7581.php">Takayuki Seki: "[OMPI devel] ome questions about checkpoint/restart (3)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
4th question is as follows:
<br>
<p>(4) The pointer variables for information about communicator in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the ompi_crcp_bkmrk_pml_drain_message_ref_t structure and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the ompi_crcp_bkmrk_pml_traffic_message_ref_t structure
<br>
<p>Areas which was freed by the datatype-framework is referred in bkmrk-component.
<br>
<p>Framework         : crcp
<br>
Component         : bkmrk
<br>
The source file   : ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.h
<br>
<p>The source file   : ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
<br>
The function name : do_send_msg_detail, etc..
<br>
<p>Here's the code that may cause the problem:
<br>
<p>#define BLOCKNUM 1048576
<br>
#define SLPTIM 60
<br>
<p>&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_dup(MPI_COMM_WORLD,&amp;commforcomm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(wbuf,BLOCKNUM,MPI_INT,1,100,commforcomm,&amp;sreq); MPI_Wait(&amp;sreq,&amp;ssts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(wbuf,BLOCKNUM,MPI_INT,1,100,commforcomm,&amp;sreq); MPI_Wait(&amp;sreq,&amp;ssts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(wbuf,BLOCKNUM,MPI_INT,1,100,commforcomm,&amp;sreq); MPI_Wait(&amp;sreq,&amp;ssts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free(&amp;commforcomm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(wbuf,BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD,&amp;sreq); MPI_Wait(&amp;sreq,&amp;ssts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(wbuf,BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD,&amp;sreq); MPI_Wait(&amp;sreq,&amp;ssts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(wbuf,BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD,&amp;sreq); MPI_Wait(&amp;sreq,&amp;ssts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(wbuf,BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD); /** take checkpoint at this point **/
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else {  /* rank 1 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_dup(MPI_COMM_WORLD,&amp;commforcomm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,0,100,commforcomm,&amp;rreq); MPI_Wait(&amp;rreq,&amp;rsts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,0,100,commforcomm,&amp;rreq); MPI_Wait(&amp;rreq,&amp;rsts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,0,100,commforcomm,&amp;rreq); MPI_Wait(&amp;rreq,&amp;rsts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free(&amp;commforcomm);
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
<p>* Take checkpoint while Process 0 is in MPI_Send function and Process 1 is in sleep function
<br>
<p>* When checkpoint is taken, &quot;commforcomm&quot; communicator is already freed.
<br>
&nbsp;&nbsp;Although &quot;commforcomm&quot; communicator is already freed when checkpoint is taken,
<br>
&nbsp;&nbsp;the information about &quot;commforcomm&quot; communicator is referred via these structure in the checkpoint action.
<br>
<p>&nbsp;&nbsp;Areas which is pointed by the &quot;commforcomm&quot; communicator pointer variable are already freed and values of the address may be already broken.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;struct ompi_crcp_bkmrk_pml_drain_message_ref_t {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/** Communicator pointer */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_communicator_t* comm;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;struct ompi_crcp_bkmrk_pml_traffic_message_ref_t {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/** Communicator pointer */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_communicator_t* comm;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;static int do_send_msg_detail( ... ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm_my_rank  = ompi_comm_rank(msg_ref-&gt;comm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>* I think that these structures should have information about communicator itself locally.
<br>
&nbsp;&nbsp;they are c_contextid,c_my_rank,etc..
<br>
<p><p>-bash-3.2$ cat t_mpi_question-4.c
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
&nbsp;&nbsp;MPI_Status rsts,ssts;
<br>
&nbsp;&nbsp;MPI_Request rreq,sreq;
<br>
&nbsp;&nbsp;MPI_Comm commforcomm;
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
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_dup(MPI_COMM_WORLD,&amp;commforcomm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { wbuf[i] = (100 + i); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(wbuf,BLOCKNUM,MPI_INT,1,100,commforcomm,&amp;sreq); MPI_Wait(&amp;sreq,&amp;ssts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { wbuf[i] = (200 + i); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(wbuf,BLOCKNUM,MPI_INT,1,100,commforcomm,&amp;sreq); MPI_Wait(&amp;sreq,&amp;ssts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { wbuf[i] = (300 + i); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(wbuf,BLOCKNUM,MPI_INT,1,100,commforcomm,&amp;sreq); MPI_Wait(&amp;sreq,&amp;ssts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free(&amp;commforcomm);
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
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(wbuf,BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_dup(MPI_COMM_WORLD,&amp;commforcomm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { rbuf[i] = 0; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,0,100,commforcomm,&amp;rreq); MPI_Wait(&amp;rreq,&amp;rsts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { if (rbuf[i] != (100 + i)) { abort(); } }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { rbuf[i] = 0; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,0,100,commforcomm,&amp;rreq); MPI_Wait(&amp;rreq,&amp;rsts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { if (rbuf[i] != (200 + i)) { abort(); } }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { rbuf[i] = 0; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(rbuf,BLOCKNUM,MPI_INT,0,100,commforcomm,&amp;rreq); MPI_Wait(&amp;rreq,&amp;rsts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { if (rbuf[i] != (300 + i)) { abort(); } }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free(&amp;commforcomm);
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
<li><strong>Next message:</strong> <a href="7583.php">Joshua Hursey: "[OMPI devel] Build issue: mpi_portable_platform.h"</a>
<li><strong>Previous message:</strong> <a href="7581.php">Takayuki Seki: "[OMPI devel] ome questions about checkpoint/restart (3)"</a>
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
