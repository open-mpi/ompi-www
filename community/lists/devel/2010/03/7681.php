<?
$subject_val = "[OMPI devel] Some questions about checkpoint/restart (8)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 30 03:06:40 2010" -->
<!-- isoreceived="20100330070640" -->
<!-- sent="Tue, 30 Mar 2010 16:07:37 +0900" -->
<!-- isosent="20100330070737" -->
<!-- name="Takayuki Seki" -->
<!-- email="seki_at_[hidden]" -->
<!-- subject="[OMPI devel] Some questions about checkpoint/restart (8)" -->
<!-- id="4BB1A339.3000507_at_np.css.fujitsu.com" -->
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
<strong>Subject:</strong> [OMPI devel] Some questions about checkpoint/restart (8)<br>
<strong>From:</strong> Takayuki Seki (<em>seki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-30 03:07:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7682.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Previous message:</strong> <a href="7680.php">Nadia Derbey: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework	and ORTE WDC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
8th question is as follows:
<br>
<p>(8) The result of communication which uses derived datatypes which was constructed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;using MPI_Type_vector,MPI_Type_indexed is incorrect after taking checkpoint.
<br>
<p>Framework         : datatype
<br>
Component         : datatype
<br>
The source file   : ompi/datatype/dt_copy.c
<br>
The function name : ompi_ddt_copy_content_same_ddt
<br>
<p>Framework         : crcp
<br>
Component         : bkmrk
<br>
The source file   : ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
<br>
The function name : ?
<br>
<p>Here's the code that causes the problem:
<br>
<p>#define SLPTIME 60
<br>
#define ITEMNUM 10
<br>
<p>int buf[ITEMNUM][ITEMNUM];
<br>
<p>&nbsp;&nbsp;MPI_Type_vector(10,1,10,MPI_INT,&amp;newdt);
<br>
&nbsp;&nbsp;MPI_Type_commit(&amp;newdt);
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(&amp;buf[0][0],1,newdt,1,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);  /** take checkpoint at this point **/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_free(&amp;newdt);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);  /** take checkpoint at this point **/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(&amp;buf[0][0],1,newdt,0,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_free(&amp;newdt);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;for (i=0;i&lt;ITEMNUM;i++) { /* showing the result */
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
<p>* Take checkpoint while Process 0 and Process 1 are in sleep function
<br>
<p>* After receiving data(by MPI_Irecv/Wait), incorrect results are printed.
<br>
&nbsp;&nbsp;Incorrect results are as follows:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rank=1 size=2 i=0 [  0  -1  -1  -1  -1  -1  -1  -1  -1  -1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rank=1 size=2 i=1 [113  -1  -1  -1  -1  -1  -1  -1  -1  -1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rank=1 size=2 i=2 [1734306160  -1  -1  -1  -1  -1  -1  -1  -1  -1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rank=1 size=2 i=3 [1953458291  -1  -1  -1  -1  -1  -1  -1  -1  -1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rank=1 size=2 i=4 [1836017711  -1  -1  -1  -1  -1  -1  -1  -1  -1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rank=1 size=2 i=5 [1853054828  -1  -1  -1  -1  -1  -1  -1  -1  -1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rank=1 size=2 i=6 [7630955  -1  -1  -1  -1  -1  -1  -1  -1  -1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rank=1 size=2 i=7 [1919907629  -1  -1  -1  -1  -1  -1  -1  -1  -1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rank=1 size=2 i=8 [1600938352  -1  -1  -1  -1  -1  -1  -1  -1  -1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rank=1 size=2 i=9 [23761296  -1  -1  -1  -1  -1  -1  -1  -1  -1]
<br>
&nbsp;&nbsp;It seems that ten elements may be copied, but these value are incorrect.
<br>
<p>* Here's my debugging output.
<br>
<p>&nbsp;&nbsp;ft_event_post_drain_message:Irecv drain_msg_ref=e84200 rank=0 tag=1000 cnt=1 ddt=40 to=e8d3a0 [datatype-&gt;size=1]
<br>
&nbsp;&nbsp;wait_quiesce_drained:xx=0 0
<br>
&nbsp;&nbsp;wait_quiesce_drained:xx=1 100
<br>
&nbsp;&nbsp;wait_quiesce_drained:xx=2 200
<br>
&nbsp;&nbsp;wait_quiesce_drained:xx=3 300
<br>
&nbsp;&nbsp;wait_quiesce_drained:xx=4 400
<br>
&nbsp;&nbsp;wait_quiesce_drained:xx=5 500
<br>
&nbsp;&nbsp;wait_quiesce_drained:xx=6 600
<br>
&nbsp;&nbsp;wait_quiesce_drained:xx=7 700
<br>
&nbsp;&nbsp;wait_quiesce_drained:xx=8 800
<br>
&nbsp;&nbsp;wait_quiesce_drained:xx=9 900
<br>
&nbsp;&nbsp;ompi_ddt_copy_content_same_ddt:Start size=40 flag=102/4 count=1
<br>
<p>* I think that receiver received message correctly in the bkmrk.
<br>
&nbsp;&nbsp;Received messages are contiguous.
<br>
<p>* I think that the problem is copy processing in ompi_ddt_copy_content_same_ddt.
<br>
&nbsp;&nbsp;Or is using ompi_ddt_copy_content_same_ddt function wrong?
<br>
<p>* the first argument(datatype) of ompi_ddt_copy_content_same_ddt function in
<br>
&nbsp;&nbsp;drain_message_copy_remove is specified by user's application
<br>
&nbsp;&nbsp;Hexadecimal value of datatype-&gt;flags is 0x102.
<br>
&nbsp;&nbsp;It does not contain DT_FLAG_CONTIGUOUS and it will mean derived datatype.
<br>
<p>* I think that problem occurs at the following parts of ompi_ddt_copy_content_same_ddt function.
<br>
&nbsp;&nbsp;Both source and destination use the same information of datatype which is specified by
<br>
&nbsp;&nbsp;user's application.
<br>
&nbsp;&nbsp;But source(received messages in the bkmrk) is simple contiguous messages.
<br>
<p>&nbsp;&nbsp;-------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;destination += datatype-&gt;true_lb;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;source      += datatype-&gt;true_lb;
<br>
<p>&nbsp;&nbsp;-------------------
<br>
&nbsp;&nbsp;ptrdiff_t extent = (datatype-&gt;ub - datatype-&gt;lb);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;destination += extent;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;source += extent;
<br>
<p>&nbsp;&nbsp;-------------------
<br>
&nbsp;&nbsp;pStack = (dt_stack_t*)alloca( sizeof(dt_stack_t) * (datatype-&gt;btypes[DT_LOOP] + 1) );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;source      = (unsigned char*)source_base + pStack-&gt;disp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;destination = (unsigned char*)destination_base + pStack-&gt;disp;
<br>
<p>* If the source datatype is different from the destination datatype,
<br>
&nbsp;&nbsp;Should not ompi_ddt_copy_content_same_ddt function be used?
<br>
<p><p>-bash-3.2$ cat t_mpi_question-8.c
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
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Wait(&amp;req,&amp;sts);
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
<p>&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Irecv(&amp;buf[0][0],1,newdt,0,1000,MPI_COMM_WORLD,&amp;req);
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
<p>&nbsp;&nbsp;cc =  MPI_Finalize();
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
<p>-bash-3.2$ cat t_mpi_question-8-type_indexed.c
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
&nbsp;&nbsp;int block_length[ITEMNUM];
<br>
&nbsp;&nbsp;int disp[ITEMNUM];
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;ac,&amp;av);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
<p>&nbsp;&nbsp;for (i=0;i&lt;ITEMNUM;i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;block_length[i] = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;disp[i]         = (i * ITEMNUM);
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
<p>&nbsp;&nbsp;cc=MPI_Type_indexed(10,&amp;block_length[0],&amp;disp[0],MPI_INT,&amp;newdt);
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
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Wait(&amp;req,&amp;sts);
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
<p>&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Irecv(&amp;buf[0][0],1,newdt,0,1000,MPI_COMM_WORLD,&amp;req);
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
<p>&nbsp;&nbsp;cc =  MPI_Finalize();
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
<p>-bash-3.2$ cat t_mpi_question-8-LBUB.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>#define ITEMNUM_1                  10
<br>
#define SLPTIME                    60
<br>
<p>int buf[ITEMNUM_1][ITEMNUM_1];
<br>
int main(int ac,char **av)
<br>
{
<br>
&nbsp;&nbsp;int rank,size,cc,i,j,k;
<br>
&nbsp;&nbsp;MPI_Request req;
<br>
&nbsp;&nbsp;MPI_Status sts;
<br>
&nbsp;&nbsp;MPI_Datatype newdt;
<br>
&nbsp;&nbsp;int itmnum,newdt_size;
<br>
&nbsp;&nbsp;int b_l[3];
<br>
&nbsp;&nbsp;MPI_Aint dp[3],newdt_extent,newdt_lb,newdt_ub;
<br>
&nbsp;&nbsp;MPI_Datatype dt[3];
<br>
<p>&nbsp;&nbsp;itmnum = 10;
<br>
&nbsp;&nbsp;rank=0;
<br>
&nbsp;&nbsp;MPI_Init(&amp;ac,&amp;av);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
<p>&nbsp;&nbsp;for (i=0;i&lt;ITEMNUM_1;i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (j=0;j&lt;ITEMNUM_1;j++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0) { buf[i][j] = (i*100)+j; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else           { buf[i][j] = -1; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;b_l[0] = b_l[1] = b_l[2] = 1;
<br>
&nbsp;&nbsp;dt[0] = MPI_LB;
<br>
&nbsp;&nbsp;dt[1] = MPI_INT;
<br>
&nbsp;&nbsp;dt[2] = MPI_UB;
<br>
&nbsp;&nbsp;dp[0] = 0;
<br>
&nbsp;&nbsp;dp[1] = 8;
<br>
&nbsp;&nbsp;dp[2] = 20;
<br>
&nbsp;&nbsp;MPI_Type_struct(3,&amp;b_l[0],&amp;dp[0],&amp;dt[0],&amp;newdt);
<br>
&nbsp;&nbsp;MPI_Type_commit(&amp;newdt);
<br>
<p>&nbsp;&nbsp;MPI_Type_size(newdt,&amp;newdt_size);
<br>
&nbsp;&nbsp;MPI_Type_extent(newdt,&amp;newdt_extent);
<br>
&nbsp;&nbsp;MPI_Type_lb(newdt,&amp;newdt_lb);
<br>
&nbsp;&nbsp;MPI_Type_ub(newdt,&amp;newdt_ub);
<br>
<p>&nbsp;&nbsp;printf(&quot;   rank=%d newdt size=%d extent=%d lb=%d ub=%d itmnum=%d \n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,rank,newdt_size,newdt_extent,newdt_lb,newdt_ub,itmnum);
<br>
&nbsp;&nbsp;fflush(stdout);
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(&amp;buf[0][0],itmnum,newdt,1,1000,MPI_COMM_WORLD,&amp;req);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_free(&amp;newdt);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(&amp;buf[0][0],itmnum,newdt,0,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_free(&amp;newdt);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;for (i=0;i&lt;ITEMNUM_1;i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d size=%d i=%d/%d [%3d %3d %3d %3d %3d %3d %3d %3d %3d %3d] \n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,rank,size,i,itmnum
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
<li><strong>Next message:</strong> <a href="7682.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Previous message:</strong> <a href="7680.php">Nadia Derbey: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework	and ORTE WDC"</a>
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
