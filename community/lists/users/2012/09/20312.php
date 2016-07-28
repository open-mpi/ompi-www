<?
$subject_val = "[OMPI users] Memchecker failure with empty struct type";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 15:04:38 2012" -->
<!-- isoreceived="20120925190438" -->
<!-- sent="Tue, 25 Sep 2012 15:04:37 -0400 (EDT)" -->
<!-- isosent="20120925190437" -->
<!-- name="Jeremiah Willcock" -->
<!-- email="jewillco_at_[hidden]" -->
<!-- subject="[OMPI users] Memchecker failure with empty struct type" -->
<!-- id="alpine.LRH.2.02.1209251500260.46469_at_flowerpot.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Memchecker failure with empty struct type<br>
<strong>From:</strong> Jeremiah Willcock (<em>jewillco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 15:04:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20313.php">Jeff Squyres: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Previous message:</strong> <a href="20311.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20316.php">Ralph Castain: "Re: [OMPI users] Memchecker failure with empty struct type"</a>
<li><strong>Reply:</strong> <a href="20316.php">Ralph Castain: "Re: [OMPI users] Memchecker failure with empty struct type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following C program:
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char** argv) {
<br>
&nbsp;&nbsp;&nbsp;int blocklengths;
<br>
&nbsp;&nbsp;&nbsp;MPI_Aint displacements;
<br>
&nbsp;&nbsp;&nbsp;MPI_Datatype types, dt;
<br>
&nbsp;&nbsp;&nbsp;int x;
<br>
&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Type_struct(0, &amp;blocklengths, &amp;displacements, &amp;types, &amp;dt);
<br>
&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;dt);
<br>
&nbsp;&nbsp;&nbsp;MPI_Send(&amp;x, 1, dt, MPI_PROC_NULL, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;MPI_Type_free(&amp;dt);
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>produces a segmentation fault (caused by a NULL pointer dereference) when 
<br>
run with Open MPI 1.6.1, but only when using Valgrind.  Running without 
<br>
Valgrind does not cause any issues; the failure appears to be in the code 
<br>
that checks whether MPI buffers are valid.  The configure flags I used to 
<br>
build Open MPI were a prefix and:
<br>
<p>--disable-pretty-print-stacktrace --enable-mpi-thread-multiple 
<br>
--enable-memchecker --enable-mca-no-build=btl-openib --enable-debug
<br>
<p>and I am using GCC 4.7.1 on Linux.  Is this a known issue?  Thank you for 
<br>
your help.
<br>
<p>-- Jeremiah Willcock
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20313.php">Jeff Squyres: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Previous message:</strong> <a href="20311.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20316.php">Ralph Castain: "Re: [OMPI users] Memchecker failure with empty struct type"</a>
<li><strong>Reply:</strong> <a href="20316.php">Ralph Castain: "Re: [OMPI users] Memchecker failure with empty struct type"</a>
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
