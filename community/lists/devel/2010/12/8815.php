<?
$subject_val = "[OMPI devel] Some questions about checkpoint/restart (16)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 22 03:05:47 2010" -->
<!-- isoreceived="20101222080547" -->
<!-- sent="Wed, 22 Dec 2010 17:07:24 +0900" -->
<!-- isosent="20101222080724" -->
<!-- name="Takayuki Seki" -->
<!-- email="seki_at_[hidden]" -->
<!-- subject="[OMPI devel] Some questions about checkpoint/restart (16)" -->
<!-- id="4D11B1BC.4000506_at_np.css.fujitsu.com" -->
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
<strong>Subject:</strong> [OMPI devel] Some questions about checkpoint/restart (16)<br>
<strong>From:</strong> Takayuki Seki (<em>seki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-22 03:07:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8816.php">Joshua Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<li><strong>Previous message:</strong> <a href="8814.php">Shamis, Pavel: "Re: [OMPI devel] openib btl_openib_async_thread poll question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8816.php">Joshua Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<li><strong>Reply:</strong> <a href="8816.php">Joshua Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a new question about Checkpoint/Restart.
<br>
<p>16th question is as follows:
<br>
<p>(16) If a program uses MPI_Init_thread function,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checkpoint cannot be taken by the opal_cr_thread_fn thread.
<br>
<p>Framework         : ompi/mpi
<br>
Component         : c
<br>
The source file   : ompi/mpi/c/init_thread.c
<br>
The function name : MPI_Init_thread
<br>
<p><p>Here's the code that causes the problem:
<br>
<p>&nbsp;&nbsp;#define LOOP 60
<br>
<p>&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d 60 seconds sleeping start   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;for (i=0;i&lt;LOOP;i++) {  /* Take checkpoint while the process is in this loop. */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d loop=%d \n&quot;,rank,i); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d 60 seconds sleeping finished \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d executes Finalize \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
<p><p>* This problem can be confirmed even by execution by one process.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpiexec -n 1 .... ./a.out
<br>
<p>* Take checkpoint while the process is in the loop to which it takes 60 seconds.
<br>
<p>* Example of restart result of a program using MPI_Init.
<br>
<p>-bash-3.2$ ompi-restart ompi_global_snapshot_20762.ckpt
<br>
&nbsp;&nbsp;&nbsp;rank=0 loop=42
<br>
&nbsp;&nbsp;&nbsp;rank=0 loop=43
<br>
&nbsp;&nbsp;&nbsp;rank=0 loop=44
<br>
&nbsp;&nbsp;&nbsp;rank=0 loop=45
<br>
&nbsp;&nbsp;&nbsp;rank=0 loop=46
<br>
&nbsp;&nbsp;&nbsp;rank=0 loop=47
<br>
&nbsp;&nbsp;&nbsp;rank=0 loop=48
<br>
&nbsp;&nbsp;&nbsp;rank=0 loop=49
<br>
&nbsp;&nbsp;&nbsp;rank=0 loop=50
<br>
&nbsp;&nbsp;&nbsp;rank=0 loop=51
<br>
&nbsp;&nbsp;&nbsp;rank=0 loop=52
<br>
&nbsp;&nbsp;&nbsp;rank=0 loop=53
<br>
&nbsp;&nbsp;&nbsp;rank=0 loop=54
<br>
&nbsp;&nbsp;&nbsp;rank=0 loop=55
<br>
&nbsp;&nbsp;&nbsp;rank=0 loop=56
<br>
&nbsp;&nbsp;&nbsp;rank=0 loop=57
<br>
&nbsp;&nbsp;&nbsp;rank=0 loop=58
<br>
&nbsp;&nbsp;&nbsp;rank=0 loop=59
<br>
&nbsp;&nbsp;&nbsp;rank=0 60 seconds sleeping finished
<br>
&nbsp;&nbsp;&nbsp;rank=0 executes Finalize
<br>
&nbsp;&nbsp;&nbsp;rank=0 program end
<br>
<p>&nbsp;&nbsp;Because checkpoint was taken by opal_cr_thread_fn function immediately
<br>
&nbsp;&nbsp;when the checkpoint operation was executed,
<br>
&nbsp;&nbsp;the program restarts from the loop.
<br>
<p>* Example of restart result of a program using MPI_Init_thread.
<br>
<p>-bash-3.2$ ompi-restart ompi_global_snapshot_20660.ckpt
<br>
&nbsp;&nbsp;&nbsp;rank=0 executes Finalize
<br>
&nbsp;&nbsp;&nbsp;rank=0 program end
<br>
<p>&nbsp;&nbsp;It is in the MPI_Barrier function after the loop
<br>
&nbsp;&nbsp;that checkpoint was actually taken.
<br>
&nbsp;&nbsp;Therefore, the program restarts from MPI_Barrier function.
<br>
<p><p>* I think that it is the problem that MPI_Init_thread does not execute OPAL_CR_INIT_LIBRARY.
<br>
&nbsp;&nbsp;So, opal_cr_thread_is_active still remains in false condition.
<br>
&nbsp;&nbsp;Therefore, the following while loop does not terminate.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Wait to become active
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;while( !opal_cr_thread_is_active &amp;&amp; !opal_cr_thread_is_done) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sched_yield();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>* MPI_Init_thread uses OPAL_CR_ENTER_LIBRARY and OPAL_CR_EXIT_LIBRARY.
<br>
&nbsp;&nbsp;I think it is not correct.
<br>
&nbsp;&nbsp;Because MPI_Init_thread is an initialization function of MPI,
<br>
&nbsp;&nbsp;I think that it should be the same specification as MPI_Init.
<br>
<p><p>-bash-3.2$ cat t_mpi_question-16.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>#define LOOP           60
<br>
<p>int main(int ac,char **av)
<br>
{
<br>
&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;int rank,size;
<br>
&nbsp;&nbsp;int required,provided,provided_for_query;
<br>
<p>&nbsp;&nbsp;required = MPI_THREAD_SINGLE;
<br>
&nbsp;&nbsp;provided = -1;
<br>
&nbsp;&nbsp;provided_for_query = -1;
<br>
#if defined(USE_INITTHREAD)
<br>
&nbsp;&nbsp;MPI_Init_thread(&amp;ac,&amp;av,required,&amp;provided);
<br>
&nbsp;&nbsp;MPI_Query_thread(&amp;provided_for_query);
<br>
#else
<br>
&nbsp;&nbsp;MPI_Init(&amp;ac,&amp;av);
<br>
#endif
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d sz=%d required=%d provided=%d provided_for_query=%d \n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,rank,size,required,provided,provided_for_query); fflush(stdout);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d 60 seconds sleeping start   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;for (i=0;i&lt;LOOP;i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d loop=%d \n&quot;,rank,i); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d 60 seconds sleeping finished \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d executes Finalize \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;if (rank == 0) {
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
<li><strong>Next message:</strong> <a href="8816.php">Joshua Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<li><strong>Previous message:</strong> <a href="8814.php">Shamis, Pavel: "Re: [OMPI devel] openib btl_openib_async_thread poll question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8816.php">Joshua Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<li><strong>Reply:</strong> <a href="8816.php">Joshua Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
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
