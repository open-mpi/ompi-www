<?
$subject_val = "[OMPI devel] Some questions about checkpoint/restart (9)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  2 00:32:03 2010" -->
<!-- isoreceived="20100402043203" -->
<!-- sent="Fri, 02 Apr 2010 13:32:34 +0900" -->
<!-- isosent="20100402043234" -->
<!-- name="Takayuki Seki" -->
<!-- email="seki_at_[hidden]" -->
<!-- subject="[OMPI devel] Some questions about checkpoint/restart (9)" -->
<!-- id="4BB57362.8000504_at_np.css.fujitsu.com" -->
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
<strong>Subject:</strong> [OMPI devel] Some questions about checkpoint/restart (9)<br>
<strong>From:</strong> Takayuki Seki (<em>seki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-02 00:32:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7687.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (10)"</a>
<li><strong>Previous message:</strong> <a href="7685.php">Eugene Loh: "[OMPI devel] adding ping-pong test to examples directory?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7689.php">Takayuki Seki: "Re: [OMPI devel] Some questions about checkpoint/restart (9)"</a>
<li><strong>Reply:</strong> <a href="7689.php">Takayuki Seki: "Re: [OMPI devel] Some questions about checkpoint/restart (9)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
9th question is as follows:
<br>
<p>(9) The communication which has different element size in sender and receiver
<br>
&nbsp;&nbsp;&nbsp;&nbsp;deadlocks after taking checkpoint.
<br>
<p>Framework         : crcp
<br>
Component         : bkmrk
<br>
The source file   : ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
<br>
The function name : drain_message_find
<br>
<p>Here's the code that causes the problem:
<br>
<p>#define WORKBUFSIZE 4
<br>
#define SLPTIME 60
<br>
<p>&nbsp;&nbsp;int rbuf[WORKBUFSIZE];
<br>
&nbsp;&nbsp;int j;
<br>
<p>&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;if (rank == 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);  /** take checkpoint at this point **/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(&amp;rbuf[0],WORKBUFSIZE,MPI_INT,0,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;j=rbuf[0];
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else {  /* rank 0 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;j=100;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(&amp;j,1,MPI_INT,1,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);  /** take checkpoint at this point **/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;printf(&quot;   rank=%d pass-2 %d %d \n&quot;,rank,j,sts._count); fflush(stdout);
<br>
<p><p>* Take checkpoint while Process 0 and Process 1 are in sleep function,
<br>
&nbsp;&nbsp;then MPI program deadlocks.
<br>
<p>* element size does not match in drain_message_find.
<br>
&nbsp;drain_message_find:My=1 drain_msg=e6fc80 [peer=0/0 count=4/1 comm=6014e0 ID 0/0/0 R=1/1 tag=1000/1000 ddt_size=4/4 [datatype-&gt;size=1]] [done=1
<br>
active=0 already_posted=0]
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Check the datatype size, if specified for a match */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( ddt_size != PROBE_ANY_SIZE &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;count    != PROBE_ANY_COUNT) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Check the datatype size and count to make sure it matches   */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((drain_msg-&gt;count   ) != count   ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(drain_msg-&gt;ddt_size) != ddt_size) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;drain_msg-&gt;count is 1.
<br>
&nbsp;&nbsp;count            is 4.
<br>
&nbsp;&nbsp;drain_msg-&gt;ddt_size is 4.
<br>
&nbsp;&nbsp;ddt_size            is 4.
<br>
<p>* If Open MPI is built with --enable-debug configure option,
<br>
&nbsp;&nbsp;and openib btl is selected on running MPI job,
<br>
&nbsp;&nbsp;the following message is printed in mca_btl_openib_ft_event.
<br>
<p>&nbsp;&nbsp;t_mpi_question-9.out: ../../../../../ompi/mca/btl/openib/btl_openib.c:1433:
<br>
&nbsp;&nbsp;mca_btl_openib_ft_event: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) == ((opal_object_t *)
<br>
(&amp;mca_btl_openib_component.ib_procs))-&gt;obj_magic_id' failed.
<br>
<p>* The following programs behave in the same.
<br>
<p>&nbsp;&nbsp;1) t_mpi_question-9-packunpack.c
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Sender  : MPI_Isend(&amp;workbuf[0],j,MPI_PACKED,1,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Receiver: #define WORKBUFSIZ 64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char workbuf[WORKBUFSIZ];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(&amp;workbuf[0],WORKBUFSIZ,MPI_PACKED,0,1000,MPI_COMM_WORLD,&amp;req);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;drain_message_find:My=1 drain_msg=794200 [peer=0/0 count=64/20 comm=601ba0 ID 0/0/0 R=1/1 tag=1000/1000 ddt_size=1/1 [datatype-&gt;size=1]] [done=1
<br>
active=0 already_posted=0]
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;drain_msg-&gt;count is 20.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;count            is 64.
<br>
<p>&nbsp;&nbsp;2) t_mpi_question-9-contiguous.c
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Sender  : cc=MPI_Type_contiguous(50,MPI_INT,&amp;newdt);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Isend(&amp;buf[0][0],1,newdt,1,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Receiver: cc=MPI_Irecv(&amp;buf[0][0],50,MPI_INT,0,1000,MPI_COMM_WORLD,&amp;req);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;drain_message_find:My=1 drain_msg=1658200 [peer=0/0 count=50/1 comm=601840 ID 0/0/0 R=1/1 tag=1000/1000 ddt_size=4/200 [datatype-&gt;size=1]] [done=1
<br>
active=0 already_posted=0]
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;drain_msg-&gt;count is 1.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;count            is 50.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;drain_msg-&gt;ddt_size is 200.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ddt_size            is 4.
<br>
<p>&nbsp;&nbsp;3) t_mpi_question-9-vector.c
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Sender  :  cc=MPI_Type_vector(10,1,10,MPI_INT,&amp;newdt);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Isend(&amp;buf[0][0],1,newdt,1,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Recevier:  cc=MPI_Irecv(&amp;buf[0][0],10,MPI_INT,0,1000,MPI_COMM_WORLD,&amp;req);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;drain_message_find:My=1 drain_msg=20ad900 [peer=0/0 count=10/1 comm=601840 ID 0/0/0 R=1/1 tag=1000/1000 ddt_size=4/40 [datatype-&gt;size=1]] [done=1
<br>
active=0 already_posted=0]
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;drain_msg-&gt;count is 1.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;count            is 10.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;drain_msg-&gt;ddt_size is 40.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ddt_size            is 4.
<br>
<p><p>-bash-3.2$ cat t_mpi_question-9.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>#define WORKBUFSIZE 4
<br>
#define SLPTIME 60
<br>
<p>int main(int ac,char **av)
<br>
{
<br>
&nbsp;&nbsp;int rank,size,cc,i,j;
<br>
&nbsp;&nbsp;MPI_Request req;
<br>
&nbsp;&nbsp;MPI_Status sts;
<br>
&nbsp;&nbsp;int rbuf[WORKBUFSIZE];
<br>
<p>&nbsp;&nbsp;rank=0;
<br>
&nbsp;&nbsp;j=0;
<br>
&nbsp;&nbsp;memset((void *)rbuf,0,sizeof(int)*WORKBUFSIZE);
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;ac,&amp;av);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
<p>&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;if (rank == 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(&amp;rbuf[0],WORKBUFSIZE,MPI_INT,0,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;j=rbuf[0];
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;j=100;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(&amp;j,1,MPI_INT,1,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;printf(&quot;   rank=%d pass-2 %d %d \n&quot;,rank,j,sts._count); fflush(stdout);
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;if (rank ==0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d program end \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;return(0);
<br>
}
<br>
<p><p>-bash-3.2$ cat t_mpi_question-9-cotiguous.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>#define SLPTIME 60
<br>
#define ITEMNUM 10
<br>
<p>int buf[ITEMNUM][ITEMNUM];
<br>
int main(int ac,char **av)
<br>
{
<br>
&nbsp;&nbsp;int rank,size,cc,i,j;
<br>
&nbsp;&nbsp;MPI_Request req;
<br>
&nbsp;&nbsp;MPI_Status sts;
<br>
&nbsp;&nbsp;MPI_Datatype newdt;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;ac,&amp;av);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
<p>&nbsp;&nbsp;for (i=0;i&lt;ITEMNUM;i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (j=0;j&lt;ITEMNUM;j++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0) { buf[i][j] = (i*100)+j; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else           { buf[i][j] = -1; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;cc=MPI_Type_contiguous(50,MPI_INT,&amp;newdt);
<br>
&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;cc=MPI_Type_commit(&amp;newdt);
<br>
&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Isend(&amp;buf[0][0],1,newdt,1,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Type_free(&amp;newdt);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Irecv(&amp;buf[0][0],50,MPI_INT,0,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Type_free(&amp;newdt);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;for (i=0;i&lt;ITEMNUM;i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d size=%d i=%d [%3d %3d %3d %3d %3d %3d %3d %3d %3d %3d] \n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,rank,size,i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,buf[i][0],buf[i][1],buf[i][2],buf[i][3],buf[i][4]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,buf[i][5],buf[i][6],buf[i][7],buf[i][8],buf[i][9]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fflush(stdout);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;if (rank ==0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d program end \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;return(0);
<br>
}
<br>
<p><p>-bash-3.2$ cat t_mpi_question-9-vector.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>#define SLPTIME 60
<br>
#define ITEMNUM 10
<br>
<p>int buf[ITEMNUM][ITEMNUM];
<br>
int main(int ac,char **av)
<br>
{
<br>
&nbsp;&nbsp;int rank,size,cc,i,j;
<br>
&nbsp;&nbsp;MPI_Request req;
<br>
&nbsp;&nbsp;MPI_Status sts;
<br>
&nbsp;&nbsp;MPI_Datatype newdt;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;ac,&amp;av);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
<p>&nbsp;&nbsp;for (i=0;i&lt;ITEMNUM;i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (j=0;j&lt;ITEMNUM;j++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0) { buf[i][j] = (i*100)+j; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else           { buf[i][j] = -1; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;cc=MPI_Type_vector(10,1,10,MPI_INT,&amp;newdt);
<br>
&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;cc=MPI_Type_commit(&amp;newdt);
<br>
&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Isend(&amp;buf[0][0],1,newdt,1,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Type_free(&amp;newdt);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Irecv(&amp;buf[0][0],10,MPI_INT,0,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Type_free(&amp;newdt);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;for (i=0;i&lt;ITEMNUM;i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d size=%d i=%d [%3d %3d %3d %3d %3d %3d %3d %3d %3d %3d] \n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,rank,size,i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,buf[i][0],buf[i][1],buf[i][2],buf[i][3],buf[i][4]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,buf[i][5],buf[i][6],buf[i][7],buf[i][8],buf[i][9]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fflush(stdout);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;if (rank ==0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d program end \n&quot;,rank); fflush(stdout);
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
<li><strong>Next message:</strong> <a href="7687.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (10)"</a>
<li><strong>Previous message:</strong> <a href="7685.php">Eugene Loh: "[OMPI devel] adding ping-pong test to examples directory?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7689.php">Takayuki Seki: "Re: [OMPI devel] Some questions about checkpoint/restart (9)"</a>
<li><strong>Reply:</strong> <a href="7689.php">Takayuki Seki: "Re: [OMPI devel] Some questions about checkpoint/restart (9)"</a>
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
