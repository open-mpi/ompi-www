<?
$subject_val = "[OMPI devel] non-blocking barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  6 01:53:21 2012" -->
<!-- isoreceived="20120706055321" -->
<!-- sent="Fri, 06 Jul 2012 01:53:12 -0400" -->
<!-- isosent="20120706055312" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] non-blocking barrier" -->
<!-- id="4FF67D48.5020602_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] non-blocking barrier<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-06 01:53:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11241.php">George Bosilca: "Re: [OMPI devel] non-blocking barrier"</a>
<li><strong>Previous message:</strong> <a href="11239.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  ibarrier failures on MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11241.php">George Bosilca: "Re: [OMPI devel] non-blocking barrier"</a>
<li><strong>Reply:</strong> <a href="11241.php">George Bosilca: "Re: [OMPI devel] non-blocking barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Either there is a problem with MPI_Ibarrier or I don't understand the 
<br>
semantics.
<br>
<p>The following example is with openmpi-1.9a1r26747.  (Thanks for the fix 
<br>
in 26757.  I tried with that as well with same results.)  I get similar 
<br>
results for different OSes, compilers, bitness, etc.
<br>
<p>% cat ibarrier.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char** argv) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i, me;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double t0, t1, t2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request req;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t0 = MPI_Wtime();              /* set &quot;time zero&quot; */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( me &lt; 2 ) sleep(3);        /* two processes delay before 
<br>
hitting barrier */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t1 = MPI_Wtime() - t0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t2 = MPI_Wtime() - t0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%d entered at %3.1lf and exited at %3.1lf\n&quot;, me, t1, t2);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( me &lt; 2 ) sleep(3);        /* two processes delay before 
<br>
hitting barrier */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t1 = MPI_Wtime() - t0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Ibarrier(MPI_COMM_WORLD, &amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t2 = MPI_Wtime() - t0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%d entered at %3.1lf and exited at %3.1lf\n&quot;, me, t1, t2);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
% mpirun -n 4 ./a.out
<br>
0 entered at 3.0 and exited at 3.0
<br>
1 entered at 3.0 and exited at 3.0
<br>
2 entered at 0.0 and exited at 3.0
<br>
3 entered at 0.0 and exited at 3.0
<br>
0 entered at 6.0 and exited at 6.0
<br>
1 entered at 6.0 and exited at 6.0
<br>
2 entered at 3.0 and exited at 3.0
<br>
3 entered at 3.0 and exited at 3.0
<br>
<p>With the first barrier, no one leaves until the last process has 
<br>
entered.  With the non-blocking barrier, two processes enter and leave 
<br>
before the two laggards arrive at the barrier.  Is that right?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11241.php">George Bosilca: "Re: [OMPI devel] non-blocking barrier"</a>
<li><strong>Previous message:</strong> <a href="11239.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  ibarrier failures on MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11241.php">George Bosilca: "Re: [OMPI devel] non-blocking barrier"</a>
<li><strong>Reply:</strong> <a href="11241.php">George Bosilca: "Re: [OMPI devel] non-blocking barrier"</a>
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
