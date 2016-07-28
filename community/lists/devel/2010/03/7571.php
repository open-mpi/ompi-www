<?
$subject_val = "[OMPI devel] Some questions about checkpoint/restart (2)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  9 00:19:35 2010" -->
<!-- isoreceived="20100309051935" -->
<!-- sent="Tue, 09 Mar 2010 14:20:11 +0900" -->
<!-- isosent="20100309052011" -->
<!-- name="Takayuki Seki" -->
<!-- email="seki_at_[hidden]" -->
<!-- subject="[OMPI devel] Some questions about checkpoint/restart (2)" -->
<!-- id="4B95DA8B.9070104_at_np.css.fujitsu.com" -->
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
<strong>Subject:</strong> [OMPI devel] Some questions about checkpoint/restart (2)<br>
<strong>From:</strong> Takayuki Seki (<em>seki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-09 00:20:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7572.php">hu yaohui: "[OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Previous message:</strong> <a href="7570.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (1)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2nd question is as follows:
<br>
<p>(2) The result of persistent communication after taking checkpoint is incorrect.
<br>
<p>In persistent communication,
<br>
after MPI_Start is executed by the sender and before MPI_Start is executed by the receiver,
<br>
when the checkpoint is taken, wrong data is received.
<br>
<p>Framework         : crcp
<br>
Component         : bkmrk
<br>
The source file   : ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
<br>
The function name : drain_message_copy_remove_persistent
<br>
<p>Here's the code that causes the problem:
<br>
<p>#define BLOCKNUM 1
<br>
#define SLPTIM  60
<br>
<p>&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send_init(&amp;buf[0],BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD,&amp;req1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { buf[i] = (1000+i); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Start(&amp;req1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep1 start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIM);  /** take checkpoint at this point **/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep1 end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req1,&amp;sts1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request_free(&amp;req1);
<br>
&nbsp;&nbsp;} else { /* rank 1 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv_init(&amp;buf[0],BLOCKNUM,MPI_INT,0,100,MPI_COMM_WORLD,&amp;req1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep1 start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIM);  /** take checkpoint at this point **/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep1 end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { buf[i] = 0; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Start(&amp;req1); MPI_Wait(&amp;req1,&amp;sts1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d pass-3 %d \n&quot;,rank,buf[0]); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { if(buf[i] != (1000+i)) { MPI_Abort(MPI_COMM_WORLD,1); } } /* The error occurs at this point */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request_free(&amp;req1);
<br>
&nbsp;&nbsp;}
<br>
<p>* Take checkpoint while Process 0 and Process 1 are in sleep function
<br>
<p>* The received data is not equal to the sent data.
<br>
&nbsp;&nbsp;Therefore, MPI_Abort is executed.
<br>
<p>* I think that the wrong datatype(ompi_datatype_t) is specified as the first argument of
<br>
&nbsp;&nbsp;ompi_ddt_copy_content_same_ddt function in drain_message_copy_remove_persistent function.
<br>
<p>* Because it is the datatype used at the temporary-receive done by the checkpoint action,
<br>
&nbsp;&nbsp;and the datatype is BYTE(MPI_BYTE) type.
<br>
<p>* I think that the datatype to be used should be what the user specified thru &quot;ompi_request_t *request&quot;.
<br>
&nbsp;&nbsp;In ompi_crcp_bkmrk_pml_start_drain_irecv_init function,
<br>
&nbsp;&nbsp;It seem to be referred as follows:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;static int ompi_crcp_bkmrk_pml_start_drain_irecv_init(ompi_request_t **request, bool *found_drain)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;breq = (mca_pml_base_request_t *)(*request);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tmp_ddt_size = (breq-&gt;req_datatype)-&gt;size;
<br>
<p><p>-bash-3.2$ cat t_mpi_question-2.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>#define BLOCKNUM 1
<br>
#define SLPTIM  60
<br>
<p>int main(int ac,char **av)
<br>
{
<br>
&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;int rank,size;
<br>
&nbsp;&nbsp;int *buf;
<br>
&nbsp;&nbsp;MPI_Status  sts1;
<br>
&nbsp;&nbsp;MPI_Request req1;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;ac,&amp;av);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
&nbsp;&nbsp;if (size != 2) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
<p>&nbsp;&nbsp;buf = (int *)malloc(sizeof(int)*BLOCKNUM);
<br>
&nbsp;&nbsp;if (buf == NULL) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
<p>&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send_init(&amp;buf[0],BLOCKNUM,MPI_INT,1,100,MPI_COMM_WORLD,&amp;req1);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { buf[i] = (1000+i); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Start(&amp;req1);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep1 start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIM);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep1 end   \n&quot;,rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req1,&amp;sts1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request_free(&amp;req1);
<br>
&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv_init(&amp;buf[0],BLOCKNUM,MPI_INT,0,100,MPI_COMM_WORLD,&amp;req1);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep1 start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIM);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep1 end   \n&quot;,rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { buf[i] = 0; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Start(&amp;req1); MPI_Wait(&amp;req1,&amp;sts1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d pass-3 %d \n&quot;,rank,buf[0]); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { if(buf[i] != (1000+i)) { MPI_Abort(MPI_COMM_WORLD,1); } }
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request_free(&amp;req1);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;free(buf);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d Program End \n&quot;,rank); fflush(stdout);
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
<li><strong>Next message:</strong> <a href="7572.php">hu yaohui: "[OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Previous message:</strong> <a href="7570.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (1)"</a>
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
