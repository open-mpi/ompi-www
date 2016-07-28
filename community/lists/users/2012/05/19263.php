<?
$subject_val = "[OMPI users] Uncommitted MPI_Datatype leaks memory heavily";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 13 11:18:18 2012" -->
<!-- isoreceived="20120513151818" -->
<!-- sent="Sun, 13 May 2012 18:18:05 +0300" -->
<!-- isosent="20120513151805" -->
<!-- name="Ilja Honkonen" -->
<!-- email="ilja.honkonen_at_[hidden]" -->
<!-- subject="[OMPI users] Uncommitted MPI_Datatype leaks memory heavily" -->
<!-- id="4FAFD0AD.6010809_at_helsinki.fi" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Uncommitted MPI_Datatype leaks memory heavily<br>
<strong>From:</strong> Ilja Honkonen (<em>ilja.honkonen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-13 11:18:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19264.php">George Bosilca: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>Previous message:</strong> <a href="19262.php">Ralph Castain: "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19264.php">George Bosilca: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>Reply:</strong> <a href="19264.php">George Bosilca: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>The following program leaks memory if compiled with -DLEAK (uses about 7 
<br>
GB in the end but less than 20 MB without -DLEAK).
<br>
<p><p>#include &quot;assert.h&quot;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main(int argc, char* argv[]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(MPI_Init(&amp;argc, &amp;argv) == MPI_SUCCESS);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0; i &lt; 10000000; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype type;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_contiguous(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10 * sizeof(double),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_BYTE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) == MPI_SUCCESS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#ifndef LEAK
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(MPI_Type_commit(&amp;type) == MPI_SUCCESS);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(MPI_Type_free(&amp;type) == MPI_SUCCESS);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(MPI_Finalize() == MPI_SUCCESS);
<br>
}
<br>
<p>Since uncommitted datatypes can be used for creating new ones (MPI-2.2) 
<br>
this behavior seems like a rather nasty bug.
<br>
<p>mpirun --version
<br>
mpirun (Open MPI) 1.5.5
<br>
<p>openmpi compiled with gcc (GCC) 4.5.2
<br>
above program compiled and ran with
<br>
mpicc -DLEAK -O3 leak.c -std=c99 &amp;&amp; mpirun -np 1 ./a.out
<br>
on a single AMD Phenom(tm) II X6 1075T processor. Same thing happens 
<br>
when compiling with mpic++.
<br>
<p>I can't use memchecker because then mpirun segfaults and even
<br>
ompi_info | grep memchecker
<br>
segfaults after printing MCA memchecker: valgrind (...
<br>
<p>Thanks.
<br>
Ilja
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19264.php">George Bosilca: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>Previous message:</strong> <a href="19262.php">Ralph Castain: "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19264.php">George Bosilca: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>Reply:</strong> <a href="19264.php">George Bosilca: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
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
