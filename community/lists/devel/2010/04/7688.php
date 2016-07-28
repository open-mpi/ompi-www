<?
$subject_val = "[OMPI devel] Some questions about checkpoint/restart (11)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  2 01:13:40 2010" -->
<!-- isoreceived="20100402051340" -->
<!-- sent="Fri, 02 Apr 2010 14:14:29 +0900" -->
<!-- isosent="20100402051429" -->
<!-- name="Takayuki Seki" -->
<!-- email="seki_at_[hidden]" -->
<!-- subject="[OMPI devel] Some questions about checkpoint/restart (11)" -->
<!-- id="4BB57D35.3000703_at_np.css.fujitsu.com" -->
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
<strong>Subject:</strong> [OMPI devel] Some questions about checkpoint/restart (11)<br>
<strong>From:</strong> Takayuki Seki (<em>seki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-02 01:14:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7689.php">Takayuki Seki: "Re: [OMPI devel] Some questions about checkpoint/restart (9)"</a>
<li><strong>Previous message:</strong> <a href="7687.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7854.php">Josh Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (11)"</a>
<li><strong>Reply:</strong> <a href="7854.php">Josh Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (11)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
11th question is as follows:
<br>
<p>(11) The communication which uses inter-communicator deadlocks after taking checkpoint.
<br>
<p>Framework         : crcp
<br>
Component         : bkmrk
<br>
The source file   : ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
<br>
The function name : :drain_message_find_any
<br>
<p>Here's the code that causes the problem:
<br>
<p>#define SLPTIME 60
<br>
<p>&nbsp;&nbsp;buf = -1;
<br>
&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf = 9014;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(&amp;buf,1,MPI_INT,0,1000,intercomm,&amp;req);  /* using inter-communicator */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);  /** take checkpoint at this point **/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else if (rank==1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);  /** take checkpoint at this point **/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;buf = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(&amp;buf,1,MPI_INT,0,1000,intercomm,&amp;req);   /* using inter-communicator */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;}
<br>
<p>* Take checkpoint while Process 0 and Process 1 are in sleep function,
<br>
&nbsp;&nbsp;then MPI program deadlocks.
<br>
<p>* Here's my debugging output.
<br>
&nbsp;&nbsp;ft_event_post_drain_message:Irecv drain_msg_ref=8a2f80 rank=0 tag=1000 cnt=1 ddt=4 to=8c27c0 [datatype-&gt;size=1]
<br>
&nbsp;&nbsp;wait_quiesce_drained:xx=0 9014
<br>
&nbsp;&nbsp;drain_message_find_any:Compare[peer=0] vpid=0 1 jobid=-431423487 -431423487 grp_proc_count=1 89cea0 1
<br>
&nbsp;&nbsp;drain_message_find_any:Compare[peer=0] -&gt; Continue
<br>
<p>* Because matching of vpid,jobid by orte_util_compare_name_fields is failed,
<br>
&nbsp;&nbsp;drain_message_find_any function does not call drain_message_find.
<br>
&nbsp;&nbsp;And received messages in bkmrk is not found.
<br>
&nbsp;&nbsp;Is orte_util_compare_name_fields function corresponding to inter-communicator?
<br>
<p><p>-bash-3.2$ cat t_mpi_question-11.c
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
<p>int main(int ac,char **av)
<br>
{
<br>
&nbsp;&nbsp;int rank,size,cc,j,i,buf;
<br>
&nbsp;&nbsp;MPI_Request req;
<br>
&nbsp;&nbsp;MPI_Status sts;
<br>
&nbsp;&nbsp;MPI_Comm localcomm,intercomm;
<br>
&nbsp;&nbsp;MPI_Group worldgrp,localgrp;
<br>
&nbsp;&nbsp;int local_grp_size,localrank,localsize,interrank,intersize;
<br>
&nbsp;&nbsp;int *rank_list;
<br>
&nbsp;&nbsp;int local_leader,remote_leader;
<br>
<p>&nbsp;&nbsp;rank=0;
<br>
&nbsp;&nbsp;MPI_Init(&amp;ac,&amp;av);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
&nbsp;&nbsp;if (size%2 != 0) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
<p>&nbsp;&nbsp;printf(&quot;   rank=%d pass-1 \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;MPI_Comm_group(MPI_COMM_WORLD,&amp;worldgrp);
<br>
<p>&nbsp;&nbsp;local_grp_size = size / 2;
<br>
&nbsp;&nbsp;rank_list = (int *)malloc(sizeof(int) * local_grp_size);
<br>
&nbsp;&nbsp;if (rank_list == NULL) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
<p>&nbsp;&nbsp;j = ((rank % 2) == 0) ? 0 : 1;
<br>
&nbsp;&nbsp;for (i=0;i&lt;local_grp_size;i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rank_list[i] = j;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;j+=2;
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Group_incl(worldgrp,local_grp_size,rank_list,&amp;localgrp);
<br>
&nbsp;&nbsp;MPI_Comm_create(MPI_COMM_WORLD,localgrp,&amp;localcomm);
<br>
<p>&nbsp;&nbsp;MPI_Comm_rank(localcomm,&amp;localrank);
<br>
&nbsp;&nbsp;MPI_Comm_size(localcomm,&amp;localsize);
<br>
<p>&nbsp;&nbsp;printf(&quot;   rank=%d size=%d pass-3 LOCAL rank=%d size=%d \n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,rank,size,localrank,localsize);
<br>
&nbsp;&nbsp;fflush(stdout);
<br>
&nbsp;&nbsp;MPI_Barrier(localcomm);
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;local_leader  = 0;
<br>
&nbsp;&nbsp;remote_leader = ((rank % 2) == 0) ? 1 : 0;
<br>
&nbsp;&nbsp;MPI_Intercomm_create(localcomm,local_leader,MPI_COMM_WORLD,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;remote_leader,999,&amp;intercomm);
<br>
<p>&nbsp;&nbsp;MPI_Comm_rank(intercomm,&amp;interrank);
<br>
&nbsp;&nbsp;MPI_Comm_size(intercomm,&amp;intersize);
<br>
<p>&nbsp;&nbsp;printf(&quot;   rank=%d size=%d pass-4 LOCAL rank=%d size=%d INTER rank=%d size=%d \n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,rank,size,localrank,localsize,interrank,intersize);
<br>
&nbsp;&nbsp;fflush(stdout);
<br>
<p>&nbsp;&nbsp;MPI_Barrier(intercomm);
<br>
&nbsp;&nbsp;MPI_Barrier(localcomm);
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;buf = -1;
<br>
&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf = 9014;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(&amp;buf,1,MPI_INT,0,1000,intercomm,&amp;req);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else if (rank==1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;buf = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(&amp;buf,1,MPI_INT,0,1000,intercomm,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;printf(&quot;   rank=%d pass-5 buf=%d \n&quot;,rank,buf); fflush(stdout);
<br>
<p>&nbsp;&nbsp;MPI_Barrier(intercomm);
<br>
&nbsp;&nbsp;MPI_Barrier(localcomm);
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;MPI_Comm_free(&amp;intercomm);
<br>
&nbsp;&nbsp;MPI_Comm_free(&amp;localcomm);
<br>
&nbsp;&nbsp;MPI_Group_free(&amp;localgrp);
<br>
&nbsp;&nbsp;MPI_Finalize();
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
<li><strong>Next message:</strong> <a href="7689.php">Takayuki Seki: "Re: [OMPI devel] Some questions about checkpoint/restart (9)"</a>
<li><strong>Previous message:</strong> <a href="7687.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7854.php">Josh Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (11)"</a>
<li><strong>Reply:</strong> <a href="7854.php">Josh Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (11)"</a>
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
