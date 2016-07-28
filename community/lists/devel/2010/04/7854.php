<?
$subject_val = "Re: [OMPI devel] Some questions about checkpoint/restart (11)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 30 09:37:10 2010" -->
<!-- isoreceived="20100430133710" -->
<!-- sent="Fri, 30 Apr 2010 09:37:06 -0400" -->
<!-- isosent="20100430133706" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Some questions about checkpoint/restart (11)" -->
<!-- id="04E8218F-8818-465F-9128-343530C3651E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4BB57D35.3000703_at_np.css.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Some questions about checkpoint/restart (11)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-30 09:37:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7855.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Previous message:</strong> <a href="7853.php">Pascal Deveze: "Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<li><strong>In reply to:</strong> <a href="7688.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (11)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just wanted to followup of this thread. I filed a ticket with all of  
<br>
these issues since many of them are potential bugs that should be  
<br>
fixed for v1.5 (and v1.4 if possible). The link to the ticket is below  
<br>
if you wanted to follow the progress:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2397">https://svn.open-mpi.org/trac/ompi/ticket/2397</a>
<br>
<p>Thanks again for the bug report.  Sorry that it has taken me so long  
<br>
to get back to it (Dissertation writing really takes the wind out of  
<br>
ones sails). I hope to make forward progress on these and other C/R  
<br>
related bugs and feature requests over the next month or so.
<br>
<p>-- Josh
<br>
<p>On Apr 2, 2010, at 1:14 AM, Takayuki Seki wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 11th question is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (11) The communication which uses inter-communicator deadlocks after  
</span><br>
<span class="quotelev1">&gt; taking checkpoint.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Framework         : crcp
</span><br>
<span class="quotelev1">&gt; Component         : bkmrk
</span><br>
<span class="quotelev1">&gt; The source file   : ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
</span><br>
<span class="quotelev1">&gt; The function name : :drain_message_find_any
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the code that causes the problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define SLPTIME 60
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  buf = -1;
</span><br>
<span class="quotelev1">&gt;  if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;    buf = 9014;
</span><br>
<span class="quotelev1">&gt;    MPI_Isend(&amp;buf,1,MPI_INT,0,1000,intercomm,&amp;req);  /* using inter- 
</span><br>
<span class="quotelev1">&gt; communicator */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;    sleep(SLPTIME);  /** take checkpoint at this point **/
</span><br>
<span class="quotelev1">&gt;    printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Wait(&amp;req,&amp;sts);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  else if (rank==1) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;    sleep(SLPTIME);  /** take checkpoint at this point **/
</span><br>
<span class="quotelev1">&gt;    printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    buf = 0;
</span><br>
<span class="quotelev1">&gt;    MPI_Irecv(&amp;buf,1,MPI_INT,0,1000,intercomm,&amp;req);   /* using inter- 
</span><br>
<span class="quotelev1">&gt; communicator */
</span><br>
<span class="quotelev1">&gt;    MPI_Wait(&amp;req,&amp;sts);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Take checkpoint while Process 0 and Process 1 are in sleep function,
</span><br>
<span class="quotelev1">&gt;  then MPI program deadlocks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Here's my debugging output.
</span><br>
<span class="quotelev1">&gt;  ft_event_post_drain_message:Irecv drain_msg_ref=8a2f80 rank=0  
</span><br>
<span class="quotelev1">&gt; tag=1000 cnt=1 ddt=4 to=8c27c0 [datatype-&gt;size=1]
</span><br>
<span class="quotelev1">&gt;  wait_quiesce_drained:xx=0 9014
</span><br>
<span class="quotelev1">&gt;  drain_message_find_any:Compare[peer=0] vpid=0 1 jobid=-431423487  
</span><br>
<span class="quotelev1">&gt; -431423487 grp_proc_count=1 89cea0 1
</span><br>
<span class="quotelev1">&gt;  drain_message_find_any:Compare[peer=0] -&gt; Continue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Because matching of vpid,jobid by orte_util_compare_name_fields is  
</span><br>
<span class="quotelev1">&gt; failed,
</span><br>
<span class="quotelev1">&gt;  drain_message_find_any function does not call drain_message_find.
</span><br>
<span class="quotelev1">&gt;  And received messages in bkmrk is not found.
</span><br>
<span class="quotelev1">&gt;  Is orte_util_compare_name_fields function corresponding to inter- 
</span><br>
<span class="quotelev1">&gt; communicator?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bash-3.2$ cat t_mpi_question-11.c
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define SLPTIME 60
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int ac,char **av)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int rank,size,cc,j,i,buf;
</span><br>
<span class="quotelev1">&gt;  MPI_Request req;
</span><br>
<span class="quotelev1">&gt;  MPI_Status sts;
</span><br>
<span class="quotelev1">&gt;  MPI_Comm localcomm,intercomm;
</span><br>
<span class="quotelev1">&gt;  MPI_Group worldgrp,localgrp;
</span><br>
<span class="quotelev1">&gt;  int local_grp_size,localrank,localsize,interrank,intersize;
</span><br>
<span class="quotelev1">&gt;  int *rank_list;
</span><br>
<span class="quotelev1">&gt;  int local_leader,remote_leader;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  rank=0;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;ac,&amp;av);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev1">&gt;  if (size%2 != 0) { MPI_Abort(MPI_COMM_WORLD,-1); }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  printf(&quot;   rank=%d pass-1 \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_group(MPI_COMM_WORLD,&amp;worldgrp);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  local_grp_size = size / 2;
</span><br>
<span class="quotelev1">&gt;  rank_list = (int *)malloc(sizeof(int) * local_grp_size);
</span><br>
<span class="quotelev1">&gt;  if (rank_list == NULL) { MPI_Abort(MPI_COMM_WORLD,-1); }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  j = ((rank % 2) == 0) ? 0 : 1;
</span><br>
<span class="quotelev1">&gt;  for (i=0;i&lt;local_grp_size;i++) {
</span><br>
<span class="quotelev1">&gt;    rank_list[i] = j;
</span><br>
<span class="quotelev1">&gt;    j+=2;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Group_incl(worldgrp,local_grp_size,rank_list,&amp;localgrp);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_create(MPI_COMM_WORLD,localgrp,&amp;localcomm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(localcomm,&amp;localrank);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(localcomm,&amp;localsize);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  printf(&quot;   rank=%d size=%d pass-3 LOCAL rank=%d size=%d \n&quot;
</span><br>
<span class="quotelev1">&gt;    ,rank,size,localrank,localsize);
</span><br>
<span class="quotelev1">&gt;  fflush(stdout);
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier(localcomm);
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  local_leader  = 0;
</span><br>
<span class="quotelev1">&gt;  remote_leader = ((rank % 2) == 0) ? 1 : 0;
</span><br>
<span class="quotelev1">&gt;  MPI_Intercomm_create(localcomm,local_leader,MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt;                            remote_leader,999,&amp;intercomm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(intercomm,&amp;interrank);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(intercomm,&amp;intersize);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  printf(&quot;   rank=%d size=%d pass-4 LOCAL rank=%d size=%d INTER rank= 
</span><br>
<span class="quotelev1">&gt; %d size=%d \n&quot;
</span><br>
<span class="quotelev1">&gt;    ,rank,size,localrank,localsize,interrank,intersize);
</span><br>
<span class="quotelev1">&gt;  fflush(stdout);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier(intercomm);
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier(localcomm);
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  buf = -1;
</span><br>
<span class="quotelev1">&gt;  if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;    buf = 9014;
</span><br>
<span class="quotelev1">&gt;    MPI_Isend(&amp;buf,1,MPI_INT,0,1000,intercomm,&amp;req);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;    sleep(SLPTIME);
</span><br>
<span class="quotelev1">&gt;    printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Wait(&amp;req,&amp;sts);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  else if (rank==1) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;    sleep(SLPTIME);
</span><br>
<span class="quotelev1">&gt;    printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    buf = 0;
</span><br>
<span class="quotelev1">&gt;    MPI_Irecv(&amp;buf,1,MPI_INT,0,1000,intercomm,&amp;req);
</span><br>
<span class="quotelev1">&gt;    MPI_Wait(&amp;req,&amp;sts);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  printf(&quot;   rank=%d pass-5 buf=%d \n&quot;,rank,buf); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier(intercomm);
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier(localcomm);
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_free(&amp;intercomm);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_free(&amp;localcomm);
</span><br>
<span class="quotelev1">&gt;  MPI_Group_free(&amp;localgrp);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  if (rank ==0) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;   rank=%d program end \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  return(0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7855.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Previous message:</strong> <a href="7853.php">Pascal Deveze: "Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<li><strong>In reply to:</strong> <a href="7688.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (11)"</a>
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
