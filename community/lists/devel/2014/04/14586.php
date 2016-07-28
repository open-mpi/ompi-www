<?
$subject_val = "[OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 12:52:08 2014" -->
<!-- isoreceived="20140423165208" -->
<!-- sent="Wed, 23 Apr 2014 17:52:08 +0100" -->
<!-- isosent="20140423165208" -->
<!-- name="Rupert Nash" -->
<!-- email="rupert.nash_at_[hidden]" -->
<!-- subject="[OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault" -->
<!-- id="E41B3B96-3F03-411B-BA61-44D3697CCA17_at_ed.ac.uk" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault<br>
<strong>From:</strong> Rupert Nash (<em>rupert.nash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-23 12:52:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14587.php">Paul Hargrove: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>Previous message:</strong> <a href="14585.php">Nathan Hjelm: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14588.php">George Bosilca: "Re: [OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault"</a>
<li><strong>Reply:</strong> <a href="14588.php">George Bosilca: "Re: [OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault"</a>
<li><strong>Maybe reply:</strong> <a href="14592.php">Rupert Nash: "Re: [OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello devel list 
<br>
<p>I've been trying to use a non-blocking MPI_Iallreduce in a CFD application I'm working on, but it kept segfaulting on me. I have reduced it to a simple test case - see the gist here for the full code
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://gist.github.com/rupertnash/11222282">https://gist.github.com/rupertnash/11222282</a>
<br>
build and run with:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpicc test.c -o test &amp;&amp; mpirun -n 2 ./test
<br>
<p>I am working on OS X Mavericks with open-mpi 1.8 built from the source tarball. 
<br>
<p>Through some debugging I have narrowed the problem down:
<br>
In ompi/mca/coll/libnbc/nbc.c, in NBC_Start_round, where the code switches on which type of operation has been put in the schedule:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case OP:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NBC_DEBUG(5, &quot;  OP   (offset %li) &quot;, (long)ptr-(long)myschedule);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NBC_GET_BYTES(ptr,opargs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NBC_DEBUG(5, &quot;*buf1: %p, buf2: %p, count: %i, type: %lu)\n&quot;, opargs.buf1, opargs.buf2, opargs.count, (unsigned long)opargs.datatype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* get buffers */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* SNIP */
<br>
---&gt;    ompi_3buff_op_reduce(opargs.op, buf1, buf2, buf3, opargs.count, opargs.datatype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
<p>The line marked with an arrow --&gt; is the problem. Looking at the comments describing ompi_3buff_op_reduce, it states &quot;This function will *only* be invoked on intrinsic MPI_Ops.&quot; Examining the code bears this out as it's clearly indexing into a table of function pointers, which are all null for a user-defined MPI_Op.
<br>
<p>Presumably the fix will be to replace the use of the 3buffer version with the usual ompi_op_reduce, at least of non-intrinsic operations. I have made a temporary patch by replacing the arrowed line with the following:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (0 != (opargs.op-&gt;o_flags &amp; OMPI_OP_FLAGS_INTRINSIC)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_3buff_op_reduce(opargs.op, buf1, buf2, buf3, opargs.count, opargs.datatype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_op_reduce(opargs.op, buf1, buf3, opargs.count, opargs.datatype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_op_reduce(opargs.op, buf2, buf3, opargs.count, opargs.datatype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
However this is the first time I've looked under the hood of OpenMPI. Hopefully you can patch it properly soon.
<br>
<p>Best wishes,
<br>
<p>Rupert
<br>
<pre>
-- 
The University of Edinburgh is a charitable body, registered in
Scotland, with registration number SC005336.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14587.php">Paul Hargrove: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>Previous message:</strong> <a href="14585.php">Nathan Hjelm: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14588.php">George Bosilca: "Re: [OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault"</a>
<li><strong>Reply:</strong> <a href="14588.php">George Bosilca: "Re: [OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault"</a>
<li><strong>Maybe reply:</strong> <a href="14592.php">Rupert Nash: "Re: [OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault"</a>
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
