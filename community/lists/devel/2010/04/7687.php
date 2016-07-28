<?
$subject_val = "[OMPI devel] Some questions about checkpoint/restart (10)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  2 00:55:57 2010" -->
<!-- isoreceived="20100402045557" -->
<!-- sent="Fri, 02 Apr 2010 13:55:51 +0900" -->
<!-- isosent="20100402045551" -->
<!-- name="Takayuki Seki" -->
<!-- email="seki_at_[hidden]" -->
<!-- subject="[OMPI devel] Some questions about checkpoint/restart (10)" -->
<!-- id="4BB578D7.8000506_at_np.css.fujitsu.com" -->
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
<strong>Subject:</strong> [OMPI devel] Some questions about checkpoint/restart (10)<br>
<strong>From:</strong> Takayuki Seki (<em>seki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-02 00:55:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7688.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (11)"</a>
<li><strong>Previous message:</strong> <a href="7686.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (9)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(10) Receiving which has element size 0 terminates abnormally after taking checkpoint.
<br>
<p>Framework         : crcp
<br>
Component         : bkmrk
<br>
The source file   : ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
<br>
The function name : drain_message_copy_remove
<br>
<p>&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;j=100;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(&amp;j,0,MPI_INT,1,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);  /** take checkpoint at this point **/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);  /** take checkpoint at this point **/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(&amp;j,0,MPI_INT,0,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;sts);
<br>
<p>* Take checkpoint while Process 0 and Process 1 are in sleep function,
<br>
&nbsp;&nbsp;then program terminates abnormally with following message:
<br>
<p>&nbsp;&nbsp;*** An error occurred in MPI_Irecv
<br>
&nbsp;&nbsp;*** on communicator MPI_COMM_WORLD
<br>
&nbsp;&nbsp;*** MPI_ERR_BUFFER: invalid buffer pointer
<br>
&nbsp;&nbsp;*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
<p>* ompi_ddt_copy_content_same_ddt function returns true
<br>
&nbsp;&nbsp;in drain_message_copy_remove function and an error occurs.
<br>
<p>* In drain_message_copy_remove function,
<br>
&nbsp;&nbsp;If count is 0, it returns true.
<br>
&nbsp;&nbsp;it is as follows:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* empty data ? then do nothing. This should normally be trapped
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* at a higher level.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if( 0 == count ) return 1;
<br>
<p>* If count is 0,
<br>
&nbsp;&nbsp;Is it necessary that drain_message_copy_remove function calls
<br>
&nbsp;&nbsp;copy function(ompi_ddt_copy_content_same_ddt)?
<br>
<p><p>-bash-3.2$ cat t_mpi_question-10.c
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
<p>main(int ac,char **av)
<br>
{
<br>
&nbsp;&nbsp;int rank,size,cc,i,j;
<br>
&nbsp;&nbsp;MPI_Request req;
<br>
&nbsp;&nbsp;MPI_Status sts;
<br>
<p>&nbsp;&nbsp;rank=0;
<br>
&nbsp;&nbsp;j=0;
<br>
&nbsp;&nbsp;MPI_Init(&amp;ac,&amp;av);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
<p>&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;j=100;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(&amp;j,0,MPI_INT,1,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d sleep end   \n&quot;,rank); fflush(stdout);
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
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(&amp;j,0,MPI_INT,0,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;printf(&quot;   rank=%d pass-2 %d \n&quot;,rank,j); fflush(stdout);
<br>
&nbsp;&nbsp;if ((rank == 1) &amp;&amp; (j != 0)) { MPI_Abort(MPI_COMM_WORLD,1); }
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
<li><strong>Next message:</strong> <a href="7688.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (11)"</a>
<li><strong>Previous message:</strong> <a href="7686.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (9)"</a>
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
