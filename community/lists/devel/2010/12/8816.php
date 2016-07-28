<?
$subject_val = "Re: [OMPI devel] Some questions about checkpoint/restart (16)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 22 14:12:07 2010" -->
<!-- isoreceived="20101222191207" -->
<!-- sent="Wed, 22 Dec 2010 14:11:55 -0500" -->
<!-- isosent="20101222191155" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Some questions about checkpoint/restart (16)" -->
<!-- id="528303E2-0705-4D9B-9A95-A897E3C91E60_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D11B1BC.4000506_at_np.css.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Some questions about checkpoint/restart (16)<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-22 14:11:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8817.php">Eugene Loh: "[OMPI devel] async thread in openib BTL"</a>
<li><strong>Previous message:</strong> <a href="8815.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (16)"</a>
<li><strong>In reply to:</strong> <a href="8815.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (16)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8820.php">Takayuki Seki: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<li><strong>Reply:</strong> <a href="8820.php">Takayuki Seki: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the questions. Keep them coming. I hope to have some time after the first of the year to make some progress on some of the others. But for this one, I think you are correct. Does the attached patch (created from the Open MPI trunk r24190) fix this particular issue? If so, I'll go ahead and commit it to the trunk and ask for it to be brought over the to release series.
<br>
<p>Thanks again,
<br>
Josh
<br>
<p><p>

<br><p>
<p><p>On Dec 22, 2010, at 3:07 AM, Takayuki Seki wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a new question about Checkpoint/Restart.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 16th question is as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (16) If a program uses MPI_Init_thread function,
</span><br>
<span class="quotelev1">&gt;     checkpoint cannot be taken by the opal_cr_thread_fn thread.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Framework         : ompi/mpi
</span><br>
<span class="quotelev1">&gt; Component         : c
</span><br>
<span class="quotelev1">&gt; The source file   : ompi/mpi/c/init_thread.c
</span><br>
<span class="quotelev1">&gt; The function name : MPI_Init_thread
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the code that causes the problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  #define LOOP 60
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;   rank=%d 60 seconds sleeping start   \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  for (i=0;i&lt;LOOP;i++) {  /* Take checkpoint while the process is in this loop. */
</span><br>
<span class="quotelev1">&gt;     sleep(1);
</span><br>
<span class="quotelev1">&gt;     if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;       printf(&quot;   rank=%d loop=%d \n&quot;,rank,i); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;   rank=%d 60 seconds sleeping finished \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;   rank=%d executes Finalize \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * This problem can be confirmed even by execution by one process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mpiexec -n 1 .... ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Take checkpoint while the process is in the loop to which it takes 60 seconds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Example of restart result of a program using MPI_Init.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bash-3.2$ ompi-restart ompi_global_snapshot_20762.ckpt
</span><br>
<span class="quotelev1">&gt;   rank=0 loop=42
</span><br>
<span class="quotelev1">&gt;   rank=0 loop=43
</span><br>
<span class="quotelev1">&gt;   rank=0 loop=44
</span><br>
<span class="quotelev1">&gt;   rank=0 loop=45
</span><br>
<span class="quotelev1">&gt;   rank=0 loop=46
</span><br>
<span class="quotelev1">&gt;   rank=0 loop=47
</span><br>
<span class="quotelev1">&gt;   rank=0 loop=48
</span><br>
<span class="quotelev1">&gt;   rank=0 loop=49
</span><br>
<span class="quotelev1">&gt;   rank=0 loop=50
</span><br>
<span class="quotelev1">&gt;   rank=0 loop=51
</span><br>
<span class="quotelev1">&gt;   rank=0 loop=52
</span><br>
<span class="quotelev1">&gt;   rank=0 loop=53
</span><br>
<span class="quotelev1">&gt;   rank=0 loop=54
</span><br>
<span class="quotelev1">&gt;   rank=0 loop=55
</span><br>
<span class="quotelev1">&gt;   rank=0 loop=56
</span><br>
<span class="quotelev1">&gt;   rank=0 loop=57
</span><br>
<span class="quotelev1">&gt;   rank=0 loop=58
</span><br>
<span class="quotelev1">&gt;   rank=0 loop=59
</span><br>
<span class="quotelev1">&gt;   rank=0 60 seconds sleeping finished
</span><br>
<span class="quotelev1">&gt;   rank=0 executes Finalize
</span><br>
<span class="quotelev1">&gt;   rank=0 program end
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Because checkpoint was taken by opal_cr_thread_fn function immediately
</span><br>
<span class="quotelev1">&gt;  when the checkpoint operation was executed,
</span><br>
<span class="quotelev1">&gt;  the program restarts from the loop.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Example of restart result of a program using MPI_Init_thread.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bash-3.2$ ompi-restart ompi_global_snapshot_20660.ckpt
</span><br>
<span class="quotelev1">&gt;   rank=0 executes Finalize
</span><br>
<span class="quotelev1">&gt;   rank=0 program end
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  It is in the MPI_Barrier function after the loop
</span><br>
<span class="quotelev1">&gt;  that checkpoint was actually taken.
</span><br>
<span class="quotelev1">&gt;  Therefore, the program restarts from MPI_Barrier function.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * I think that it is the problem that MPI_Init_thread does not execute OPAL_CR_INIT_LIBRARY.
</span><br>
<span class="quotelev1">&gt;  So, opal_cr_thread_is_active still remains in false condition.
</span><br>
<span class="quotelev1">&gt;  Therefore, the following while loop does not terminate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /*
</span><br>
<span class="quotelev1">&gt;     * Wait to become active
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt;    while( !opal_cr_thread_is_active &amp;&amp; !opal_cr_thread_is_done) {
</span><br>
<span class="quotelev1">&gt;        sched_yield();
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * MPI_Init_thread uses OPAL_CR_ENTER_LIBRARY and OPAL_CR_EXIT_LIBRARY.
</span><br>
<span class="quotelev1">&gt;  I think it is not correct.
</span><br>
<span class="quotelev1">&gt;  Because MPI_Init_thread is an initialization function of MPI,
</span><br>
<span class="quotelev1">&gt;  I think that it should be the same specification as MPI_Init.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bash-3.2$ cat t_mpi_question-16.c
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
<span class="quotelev1">&gt; #define LOOP           60
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int ac,char **av)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int i;
</span><br>
<span class="quotelev1">&gt;  int rank,size;
</span><br>
<span class="quotelev1">&gt;  int required,provided,provided_for_query;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  required = MPI_THREAD_SINGLE;
</span><br>
<span class="quotelev1">&gt;  provided = -1;
</span><br>
<span class="quotelev1">&gt;  provided_for_query = -1;
</span><br>
<span class="quotelev1">&gt; #if defined(USE_INITTHREAD)
</span><br>
<span class="quotelev1">&gt;  MPI_Init_thread(&amp;ac,&amp;av,required,&amp;provided);
</span><br>
<span class="quotelev1">&gt;  MPI_Query_thread(&amp;provided_for_query);
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;ac,&amp;av);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev1">&gt;  if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;   rank=%d sz=%d required=%d provided=%d provided_for_query=%d \n&quot;
</span><br>
<span class="quotelev1">&gt;       ,rank,size,required,provided,provided_for_query); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;   rank=%d 60 seconds sleeping start   \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  for (i=0;i&lt;LOOP;i++) {
</span><br>
<span class="quotelev1">&gt;     sleep(1);
</span><br>
<span class="quotelev1">&gt;     if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;       printf(&quot;   rank=%d loop=%d \n&quot;,rank,i); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;   rank=%d 60 seconds sleeping finished \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;   rank=%d executes Finalize \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  if (rank == 0) {
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
<span class="quotelev1">&gt; 
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
<br>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8816/cr_init_thread.patch">cr_init_thread.patch</a>
</ul>
<!-- attachment="cr_init_thread.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8817.php">Eugene Loh: "[OMPI devel] async thread in openib BTL"</a>
<li><strong>Previous message:</strong> <a href="8815.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (16)"</a>
<li><strong>In reply to:</strong> <a href="8815.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (16)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8820.php">Takayuki Seki: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<li><strong>Reply:</strong> <a href="8820.php">Takayuki Seki: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
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
