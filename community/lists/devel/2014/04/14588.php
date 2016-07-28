<?
$subject_val = "Re: [OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 19:20:17 2014" -->
<!-- isoreceived="20140423232017" -->
<!-- sent="Wed, 23 Apr 2014 19:20:16 -0400" -->
<!-- isosent="20140423232016" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault" -->
<!-- id="CAMJJpkXwxkkZquC_rgUDbDBUOiTF1sfiJdvnSq6cUBOL8hZnXA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E41B3B96-3F03-411B-BA61-44D3697CCA17_at_ed.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-23 19:20:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14589.php">Gilles Gouaillardet: "[OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<li><strong>Previous message:</strong> <a href="14587.php">Paul Hargrove: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>In reply to:</strong> <a href="14586.php">Rupert Nash: "[OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14592.php">Rupert Nash: "Re: [OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rupert,
<br>
<p>You are right, the code of any non-blocking reduce is not built with
<br>
user-level op in mind. However, I'm not sure about your patch. One
<br>
reason is that ompi_3buff is doing  target = source1 op source2 while
<br>
&nbsp;&nbsp;&nbsp;ompi_2buf is doing target op= source (notice the op=)
<br>
<p>Thus you can't replace ompi_3buff by 2 ompi_2buff because you
<br>
basically replace target = source1 op source2 by target op= source1 op
<br>
source2
<br>
<p>Moreover, I much nicer solution will be to patch directly the
<br>
ompi_3buff_op_reduce function in op.h to fallback to a user defined
<br>
function when necessary.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Wed, Apr 23, 2014 at 12:52 PM, Rupert Nash &lt;rupert.nash_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello devel list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been trying to use a non-blocking MPI_Iallreduce in a CFD application I'm working on, but it kept segfaulting on me. I have reduced it to a simple test case - see the gist here for the full code
</span><br>
<span class="quotelev1">&gt;         <a href="https://gist.github.com/rupertnash/11222282">https://gist.github.com/rupertnash/11222282</a>
</span><br>
<span class="quotelev1">&gt; build and run with:
</span><br>
<span class="quotelev1">&gt;         mpicc test.c -o test &amp;&amp; mpirun -n 2 ./test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am working on OS X Mavericks with open-mpi 1.8 built from the source tarball.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Through some debugging I have narrowed the problem down:
</span><br>
<span class="quotelev1">&gt; In ompi/mca/coll/libnbc/nbc.c, in NBC_Start_round, where the code switches on which type of operation has been put in the schedule:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       case OP:
</span><br>
<span class="quotelev1">&gt;         NBC_DEBUG(5, &quot;  OP   (offset %li) &quot;, (long)ptr-(long)myschedule);
</span><br>
<span class="quotelev1">&gt;         NBC_GET_BYTES(ptr,opargs);
</span><br>
<span class="quotelev1">&gt;         NBC_DEBUG(5, &quot;*buf1: %p, buf2: %p, count: %i, type: %lu)\n&quot;, opargs.buf1, opargs.buf2, opargs.count, (unsigned long)opargs.datatype);
</span><br>
<span class="quotelev1">&gt;         /* get buffers */
</span><br>
<span class="quotelev1">&gt;         /* SNIP */
</span><br>
<span class="quotelev1">&gt; ---&gt;    ompi_3buff_op_reduce(opargs.op, buf1, buf2, buf3, opargs.count, opargs.datatype);
</span><br>
<span class="quotelev1">&gt;         break;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The line marked with an arrow --&gt; is the problem. Looking at the comments describing ompi_3buff_op_reduce, it states &quot;This function will *only* be invoked on intrinsic MPI_Ops.&quot; Examining the code bears this out as it's clearly indexing into a table of function pointers, which are all null for a user-defined MPI_Op.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Presumably the fix will be to replace the use of the 3buffer version with the usual ompi_op_reduce, at least of non-intrinsic operations. I have made a temporary patch by replacing the arrowed line with the following:
</span><br>
<span class="quotelev1">&gt;         if (0 != (opargs.op-&gt;o_flags &amp; OMPI_OP_FLAGS_INTRINSIC)) {
</span><br>
<span class="quotelev1">&gt;           ompi_3buff_op_reduce(opargs.op, buf1, buf2, buf3, opargs.count, opargs.datatype);
</span><br>
<span class="quotelev1">&gt;         } else {
</span><br>
<span class="quotelev1">&gt;           ompi_op_reduce(opargs.op, buf1, buf3, opargs.count, opargs.datatype);
</span><br>
<span class="quotelev1">&gt;           ompi_op_reduce(opargs.op, buf2, buf3, opargs.count, opargs.datatype);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; However this is the first time I've looked under the hood of OpenMPI. Hopefully you can patch it properly soon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best wishes,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rupert
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; The University of Edinburgh is a charitable body, registered in
</span><br>
<span class="quotelev1">&gt; Scotland, with registration number SC005336.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14586.php">http://www.open-mpi.org/community/lists/devel/2014/04/14586.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14589.php">Gilles Gouaillardet: "[OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<li><strong>Previous message:</strong> <a href="14587.php">Paul Hargrove: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>In reply to:</strong> <a href="14586.php">Rupert Nash: "[OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14592.php">Rupert Nash: "Re: [OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault"</a>
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
