<?
$subject_val = "Re: [OMPI devel] non-blocking barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  6 02:47:07 2012" -->
<!-- isoreceived="20120706064707" -->
<!-- sent="Fri, 6 Jul 2012 08:46:08 +0200" -->
<!-- isosent="20120706064608" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] non-blocking barrier" -->
<!-- id="E5142F83-C981-4627-8483-BBF26CCA08DF_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FF67D48.5020602_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] non-blocking barrier<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-06 02:46:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11242.php">George Bosilca: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Previous message:</strong> <a href="11240.php">Eugene Loh: "[OMPI devel] non-blocking barrier"</a>
<li><strong>In reply to:</strong> <a href="11240.php">Eugene Loh: "[OMPI devel] non-blocking barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11246.php">Richard Graham: "Re: [OMPI devel] non-blocking barrier"</a>
<li><strong>Reply:</strong> <a href="11246.php">Richard Graham: "Re: [OMPI devel] non-blocking barrier"</a>
<li><strong>Reply:</strong> <a href="11247.php">Richard Graham: "Re: [OMPI devel] non-blocking barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, it is not right. With the ibarrier usage you're making below, the output should be similar to the first case (all should leave at earlist at 6.0). The ibarrier is still a synchronizing point, all processes MUST reach it before anyone is allowed to leave.
<br>
<p>However, if you move the ibarrier on proc &lt; 2 before the sleep, the output you got become possible.
<br>
<p>&nbsp;&nbsp;George
<br>
<p><p><p>On Jul 6, 2012, at 7:53, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Either there is a problem with MPI_Ibarrier or I don't understand the semantics.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following example is with openmpi-1.9a1r26747.  (Thanks for the fix in 26757.  I tried with that as well with same results.)  I get similar results for different OSes, compilers, bitness, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % cat ibarrier.c
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev1">&gt;    int i, me;
</span><br>
<span class="quotelev1">&gt;    double t0, t1, t2;
</span><br>
<span class="quotelev1">&gt;    MPI_Request req;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    t0 = MPI_Wtime();              /* set &quot;time zero&quot; */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if ( me &lt; 2 ) sleep(3);        /* two processes delay before hitting barrier */
</span><br>
<span class="quotelev1">&gt;    t1 = MPI_Wtime() - t0;
</span><br>
<span class="quotelev1">&gt;    MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    t2 = MPI_Wtime() - t0;
</span><br>
<span class="quotelev1">&gt;    printf(&quot;%d entered at %3.1lf and exited at %3.1lf\n&quot;, me, t1, t2);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if ( me &lt; 2 ) sleep(3);        /* two processes delay before hitting barrier */
</span><br>
<span class="quotelev1">&gt;    t1 = MPI_Wtime() - t0;
</span><br>
<span class="quotelev1">&gt;    MPI_Ibarrier(MPI_COMM_WORLD, &amp;req);
</span><br>
<span class="quotelev1">&gt;    MPI_Wait(&amp;req, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;    t2 = MPI_Wtime() - t0;
</span><br>
<span class="quotelev1">&gt;    printf(&quot;%d entered at %3.1lf and exited at %3.1lf\n&quot;, me, t1, t2);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; % mpirun -n 4 ./a.out
</span><br>
<span class="quotelev1">&gt; 0 entered at 3.0 and exited at 3.0
</span><br>
<span class="quotelev1">&gt; 1 entered at 3.0 and exited at 3.0
</span><br>
<span class="quotelev1">&gt; 2 entered at 0.0 and exited at 3.0
</span><br>
<span class="quotelev1">&gt; 3 entered at 0.0 and exited at 3.0
</span><br>
<span class="quotelev1">&gt; 0 entered at 6.0 and exited at 6.0
</span><br>
<span class="quotelev1">&gt; 1 entered at 6.0 and exited at 6.0
</span><br>
<span class="quotelev1">&gt; 2 entered at 3.0 and exited at 3.0
</span><br>
<span class="quotelev1">&gt; 3 entered at 3.0 and exited at 3.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With the first barrier, no one leaves until the last process has entered.  With the non-blocking barrier, two processes enter and leave before the two laggards arrive at the barrier.  Is that right?
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
<li><strong>Next message:</strong> <a href="11242.php">George Bosilca: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Previous message:</strong> <a href="11240.php">Eugene Loh: "[OMPI devel] non-blocking barrier"</a>
<li><strong>In reply to:</strong> <a href="11240.php">Eugene Loh: "[OMPI devel] non-blocking barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11246.php">Richard Graham: "Re: [OMPI devel] non-blocking barrier"</a>
<li><strong>Reply:</strong> <a href="11246.php">Richard Graham: "Re: [OMPI devel] non-blocking barrier"</a>
<li><strong>Reply:</strong> <a href="11247.php">Richard Graham: "Re: [OMPI devel] non-blocking barrier"</a>
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
