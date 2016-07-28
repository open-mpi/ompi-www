<?
$subject_val = "[OMPI devel] Some questions about checkpoint/restart (1)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  8 23:52:55 2010" -->
<!-- isoreceived="20100309045255" -->
<!-- sent="Tue, 09 Mar 2010 13:53:14 +0900" -->
<!-- isosent="20100309045314" -->
<!-- name="Takayuki Seki" -->
<!-- email="seki_at_[hidden]" -->
<!-- subject="[OMPI devel] Some questions about checkpoint/restart (1)" -->
<!-- id="4B95D43A.7070806_at_np.css.fujitsu.com" -->
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
<strong>Subject:</strong> [OMPI devel] Some questions about checkpoint/restart (1)<br>
<strong>From:</strong> Takayuki Seki (<em>seki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-08 23:53:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7571.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (2)"</a>
<li><strong>Previous message:</strong> <a href="7569.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying checkpoint/restart of Open MPI.
<br>
I'm using Open MPI 1.4.1 and BLCR 0.8.2.
<br>
But it doesn't work well.
<br>
I'm looking into the source code.
<br>
And I have some questions about checkpoint/restart.
<br>
Could anyone answer my questions ?
<br>
<p><p>I will give them one by one.
<br>
<p>My 1st question is as follows:
<br>
<p>(1) Clearing the send_init_list, recv_init_list.
<br>
<p>Framework         : crcp
<br>
Component         : bkmrk
<br>
The source file   : ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
<br>
The function name : ft_event_finalize_exchange
<br>
<p>I found the comment /* Clear send_init_list */ in ft_event_finalize_exchange function.
<br>
However, the corresponding source code seems to be not clearing send_init_list but clearing send_list.
<br>
<p><p>Source code is as follows:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Clear send_init_list */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(rm_item  = opal_list_get_last(&amp;peer_ref-&gt;send_list);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm_item != opal_list_get_begin(&amp;peer_ref-&gt;send_list);
<br>
<p>Is it correct?
<br>
Send_list seems to be already cleared by this point.
<br>
<p>And, Clearing recv_init_list is in the same.
<br>
The comment is /* Clear recv_init_list */.
<br>
However, the corresponding source code seems to be not clearing recv_init_list but clearing recv_list.
<br>
<p>Recv_list seems to be already cleared by this point.
<br>
<p>Source code is as follows:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Clear recv_init_list */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(rm_item  = opal_list_get_last(&amp;peer_ref-&gt;recv_list);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm_item != opal_list_get_begin(&amp;peer_ref-&gt;recv_list);
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
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Start(&amp;req1); MPI_Wait(&amp;req1,&amp;sts1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Start(&amp;req1); MPI_Wait(&amp;req1,&amp;sts1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep1 start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIM);  /** take checkpoint(1st time) **/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep1 end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Start(&amp;req1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep2 start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIM);  /** take checkpoint(2nd time), and deadlock occurs. **/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep2 end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req1,&amp;sts1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request_free(&amp;req1);
<br>
&nbsp;&nbsp;} else {  /* rank 1 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv_init(&amp;buf[0],BLOCKNUM,MPI_INT,0,100,MPI_COMM_WORLD,&amp;req1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Start(&amp;req1); MPI_Wait(&amp;req1,&amp;sts1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep1 start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIM);   /** take checkpoint(1st time) **/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep1 end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Start(&amp;req1); MPI_Wait(&amp;req1,&amp;sts1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep2 start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIM);  /** take checkpoint(2nd time), and deadlock occurs. **/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep2 end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Start(&amp;req1); MPI_Wait(&amp;req1,&amp;sts1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request_free(&amp;req1);
<br>
&nbsp;&nbsp;}
<br>
<p>* Take checkpoint twice.
<br>
<p>* Take checkpoint while Process 0 is in MPI_Send function and Process 1 is in sleep function
<br>
<p>* Deadlock occurs when checkpoint is taken at the second time.
<br>
<p>* Here's my debugging output.
<br>
<p>&nbsp;rank=1 pass-1 100
<br>
&nbsp;rank=1 sleep1 start   /* 1st checkpoint */
<br>
&nbsp;rank=0 sleep1 start   /* 1st checkpoint */
<br>
&nbsp;rank=1 sleep1 end
<br>
&nbsp;rank=0 sleep1 end
<br>
DEBUG:do_recv_msg_detail_check_drain p_num_sent(from sender)=1   /* MPI_Barrier */
<br>
DEBUG:do_recv_msg_detail_check_drain p_num_sent(from sender)=2
<br>
DEBUG:do_recv_msg_detail_check_drain posted_precv_msg_ref BEFORE-UPDATE matched=0 done=1 num_left_unresolved=2
<br>
DEBUG:do_recv_msg_detail_check_drain posted_precv_msg_ref AFTER-UPDATE  matched=1 done=1 num_left_unresolved=1
<br>
DEBUG: num_left_unresolved=1 goto cleapup
<br>
DEBUG:ft_event_post_drain_message calls wrapped_pml_module-&gt;pml_irecv tag=100 count=1 ddt_size=4
<br>
&nbsp;rank=1 pass-2 200
<br>
&nbsp;rank=1 sleep2 start   /* 2nd checkpoint */
<br>
&nbsp;rank=0 sleep2 start   /* 2nd checkpoint */
<br>
&nbsp;rank=1 sleep2 end
<br>
&nbsp;rank=0 sleep2 end
<br>
DEBUG:do_recv_msg_detail_check_drain p_num_sent(from sender)=3
<br>
&nbsp;&nbsp;&nbsp;/* Sender sent the wrong value(&quot;3&quot;). I think the correct value may be &quot;1&quot;. */
<br>
DEBUG:do_recv_msg_detail_check_drain posted_precv_msg_ref BEFORE-UPDATE matched=1 done=1 num_left_unresolved=3
<br>
DEBUG:do_recv_msg_detail_check_drain posted_precv_msg_ref AFTER-UPDATE  matched=2 done=1 num_left_unresolved=2
<br>
&nbsp;&nbsp;&nbsp;/* The wrong values are set in recv_init_list of receiver,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Because recv_init_list was not cleared in taking checkpoint in the first time. */
<br>
DEBUG: num_left_unresolved=2 goto cleapup
<br>
DEBUG:ft_event_post_drain_message calls wrapped_pml_module-&gt;pml_irecv tag=100 count=1 ddt_size=4
<br>
DEBUG:ft_event_post_drain_message calls wrapped_pml_module-&gt;pml_irecv tag=100 count=1 ddt_size=4
<br>
&nbsp;&nbsp;&nbsp;/* the wrong receiving is issued. */
<br>
<p><p><p>-bash-3.2$ cat t_mpi_question-1.c
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
&nbsp;&nbsp;int i,k,rank,size,cc;
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
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { buf[i] = (100+i); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Start(&amp;req1); MPI_Wait(&amp;req1,&amp;sts1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { buf[i] = (200+i); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Start(&amp;req1); MPI_Wait(&amp;req1,&amp;sts1);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep1 start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIM);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep1 end   \n&quot;,rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { buf[i] = (300+i); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Start(&amp;req1);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep2 start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIM);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep2 end   \n&quot;,rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req1,&amp;sts1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request_free(&amp;req1);
<br>
&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv_init(&amp;buf[0],BLOCKNUM,MPI_INT,0,100,MPI_COMM_WORLD,&amp;req1);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { buf[i] = 0; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Start(&amp;req1); MPI_Wait(&amp;req1,&amp;sts1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d pass-1 %d \n&quot;,rank,buf[0]); fflush(stdout);
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
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d pass-2 %d \n&quot;,rank,buf[0]); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep2 start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIM);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep2 end   \n&quot;,rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;BLOCKNUM;i++) { buf[i] = 0; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Start(&amp;req1); MPI_Wait(&amp;req1,&amp;sts1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d pass-3 %d \n&quot;,rank,buf[0]); fflush(stdout);
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
<li><strong>Next message:</strong> <a href="7571.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (2)"</a>
<li><strong>Previous message:</strong> <a href="7569.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
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
