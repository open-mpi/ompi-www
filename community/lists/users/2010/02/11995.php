<?
$subject_val = "[OMPI users] MPI_Comm_dup hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  3 13:59:25 2010" -->
<!-- isoreceived="20100203185925" -->
<!-- sent="Wed, 03 Feb 2010 13:59:20 -0500" -->
<!-- isosent="20100203185920" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_dup hangs" -->
<!-- id="4B69C788.3050105_at_ias.edu" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Comm_dup hangs<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-03 13:59:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11996.php">Damien Hocking: "[OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>Previous message:</strong> <a href="11994.php">Shiqing Fan: "Re: [OMPI users] CMake-Windows build of 1.41 with Fortran bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11998.php">Prentice Bisbal: "Re: [OMPI users] MPI_Comm_dup hangs"</a>
<li><strong>Reply:</strong> <a href="11998.php">Prentice Bisbal: "Re: [OMPI users] MPI_Comm_dup hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a problem with MPI_Comm_dup. When I call it in a function, it
<br>
causes my application to hang. Are they any common causes for a problem
<br>
like this? I'm using OpenMPI 1.2.8. Are there any known bugs that could
<br>
be causing this?
<br>
<p>My program seems to hang when it gets to MPI_Comm_dup. Here's an example
<br>
of how I'm using it.
<br>
<p>#include &quot;foo.h&quot;
<br>
<p>/* MPI variables */
<br>
int my_rank;
<br>
int num_proc;
<br>
MPI_Comm euclid_comm;
<br>
<p>void foo(long *arg1, long *arg2, MPI_Comm old_comm);
<br>
<p>int main (int argc, char** argv) {
<br>
<p>&nbsp;&nbsp;/* get options */
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_rank);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;num_proc);
<br>
<p>&nbsp;/* read in some data, yadda, yadda yadda */
<br>
<p>&nbsp;foo(&amp;arg1, &amp;arg2, MPI_COMM_WORLD);
<br>
<p>&nbsp;/ *print results from foo */
<br>
<p>&nbsp;MPI_Finalize();
<br>
<p>}
<br>
<p>void foo(long *arg1, long *arg2, MPI_Comm old_comm)
<br>
{
<br>
&nbsp;&nbsp;MPI_Comm foo_comm;
<br>
&nbsp;&nbsp;int foo_my_rank;
<br>
&nbsp;&nbsp;int foo_num_proc;
<br>
<p>&nbsp;&nbsp;MPI_Comm_dup(old_comm, &amp;foo_comm);
<br>
&nbsp;&nbsp;MPI_Comm_rank(foo_comm, &amp;foo_my_rank);
<br>
&nbsp;&nbsp;MPI_Comm_size(foo_comm, &amp;foo_num_proc);
<br>
<p>&nbsp;&nbsp;/* do stuff */
<br>
<p>}
<br>
<p><p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11996.php">Damien Hocking: "[OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>Previous message:</strong> <a href="11994.php">Shiqing Fan: "Re: [OMPI users] CMake-Windows build of 1.41 with Fortran bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11998.php">Prentice Bisbal: "Re: [OMPI users] MPI_Comm_dup hangs"</a>
<li><strong>Reply:</strong> <a href="11998.php">Prentice Bisbal: "Re: [OMPI users] MPI_Comm_dup hangs"</a>
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
