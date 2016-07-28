<?
$subject_val = "Re: [OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 08:33:06 2014" -->
<!-- isoreceived="20140424123306" -->
<!-- sent="Thu, 24 Apr 2014 13:32:57 +0100" -->
<!-- isosent="20140424123257" -->
<!-- name="Rupert Nash" -->
<!-- email="rupert.nash_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault" -->
<!-- id="1A1653BB-F77C-4855-B0EE-1BE81B31955D_at_ed.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault" -->
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
<strong>From:</strong> Rupert Nash (<em>rupert.nash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-24 08:32:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14593.php">Pavel V. Kaygorodov: "[OMPI devel] mosix patches"</a>
<li><strong>Previous message:</strong> <a href="14591.php">Lisandro Dalcin: "[OMPI devel] Patch to fix valgrind warning"</a>
<li><strong>Maybe in reply to:</strong> <a href="14586.php">Rupert Nash: "[OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
 ('binary' encoding is not supported, stored as-is)
<p>
Hi George,
<br>
<p>Having looked again you're correct about the two 2buf reductions being wrong. For now, I've updated my patch of nbc.c to copy buf1 into buf3 and then do buf3 OP= buf2 (see below).
<br>
<p>Patching ompi_3buff_op_reduce to cope with user-defined operations is certainly possible, but I don't really understand the implications of doing that for the rest of the codebase (this is the first time I've looked at the internals of OpenMPI).
<br>
<p>Best,
<br>
Rupert
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ompi_op_is_intrinsic(opargs.op)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* This does buf3 = buf1 OP buf2 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_3buff_op_reduce(opargs.op, buf1, buf2, buf3, opargs.count, opargs.datatype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Copy buf1 -&gt; buf3 (if necessary)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* then do buf3 OP= buf2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* If the output is the same as the first input, we don't need to copy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* This only applies to the second if the operator commutes */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (buf1 == buf3) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_op_reduce(opargs.op, buf2, buf3, opargs.count, opargs.datatype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (buf2 == buf3 &amp;&amp; ompi_op_is_commute(opargs.op)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_op_reduce(opargs.op, buf1, buf3, opargs.count, opargs.datatype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;res = NBC_Copy(buf1, opargs.count, opargs.datatype, buf3, opargs.count, opargs.datatype, handle-&gt;comm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(res != NBC_OK) { printf(&quot;NBC_Copy() failed (code: %i)\n&quot;, res); ret=res; goto error; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_op_reduce(opargs.op, buf2, buf3, opargs.count, opargs.datatype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p><span class="quotelev1">&gt; Rupert, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You are right, the code of any non-blocking reduce is not built with 
</span><br>
<span class="quotelev1">&gt; user-level op in mind. However, I'm not sure about your patch. One 
</span><br>
<span class="quotelev1">&gt; reason is that ompi_3buff is doing target = source1 op source2 while 
</span><br>
<span class="quotelev1">&gt;    ompi_2buf is doing target op= source (notice the op=) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thus you can't replace ompi_3buff by 2 ompi_2buff because you 
</span><br>
<span class="quotelev1">&gt; basically replace target = source1 op source2 by target op= source1 op 
</span><br>
<span class="quotelev1">&gt; source2 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Moreover, I much nicer solution will be to patch directly the 
</span><br>
<span class="quotelev1">&gt; ompi_3buff_op_reduce function in op.h to fallback to a user defined 
</span><br>
<span class="quotelev1">&gt; function when necessary. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George. 
</span><br>
<p><p>
<p>
<p>
The University of Edinburgh is a charitable body, registered in
<br>
Scotland, with registration number SC005336.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14592/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14593.php">Pavel V. Kaygorodov: "[OMPI devel] mosix patches"</a>
<li><strong>Previous message:</strong> <a href="14591.php">Lisandro Dalcin: "[OMPI devel] Patch to fix valgrind warning"</a>
<li><strong>Maybe in reply to:</strong> <a href="14586.php">Rupert Nash: "[OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault"</a>
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
