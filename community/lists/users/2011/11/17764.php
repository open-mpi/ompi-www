<?
$subject_val = "[OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 13 22:14:14 2011" -->
<!-- isoreceived="20111114031414" -->
<!-- sent="Sun, 13 Nov 2011 19:13:49 -0800" -->
<!-- isosent="20111114031349" -->
<!-- name="Naor Movshovitz" -->
<!-- email="nmovshov_at_[hidden]" -->
<!-- subject="[OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?" -->
<!-- id="CAFjeFV+SPpkKkprMir+XkxqUKJShUX5siSw34t8Qk_SadffLRg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?<br>
<strong>From:</strong> Naor Movshovitz (<em>nmovshov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-13 22:13:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17765.php">Ralph Castain: "Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?"</a>
<li><strong>Previous message:</strong> <a href="17763.php">Jeff Squyres: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17765.php">Ralph Castain: "Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?"</a>
<li><strong>Reply:</strong> <a href="17765.php">Ralph Castain: "Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have open-mpi v1.5.4, installed from the binary installer for
<br>
Windows. The following program test.c
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;int rank, size;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;printf(&quot;hellow world from rank %d of %d.\n&quot;,rank,size);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>is compiled and linked without issue with
<br>
<p>c:\temp\mpicc test.c
<br>
<p>It also runs without issue with
<br>
<p>c:\temp\mpirun test.exe
<br>
<p>and prints the expected output. However, running the executable directly, as in
<br>
<p>c:\temp\test
<br>
<p>prints the following and then hangs:
<br>
<p>&nbsp;[COMPUTERNAME:03060] [[34061,0],0] ORTE_ERROR_LOG: Value out of
<br>
bounds in file ../../../openmpi-1.5.4\orte\mca\oob\tcp\oob_tcp.c at
<br>
line 1193
<br>
<p>Is this a bug? I normally expect mpi programs to run without problem
<br>
as a standalone executable. I should add that the mpi installation
<br>
does not have any directories/files named in the error log, only
<br>
pre-built binaries.
<br>
<p>Thanks muchly,
<br>
-nuun
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17765.php">Ralph Castain: "Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?"</a>
<li><strong>Previous message:</strong> <a href="17763.php">Jeff Squyres: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17765.php">Ralph Castain: "Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?"</a>
<li><strong>Reply:</strong> <a href="17765.php">Ralph Castain: "Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?"</a>
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
