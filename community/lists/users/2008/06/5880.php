<?
$subject_val = "[OMPI users] wrong results from MPI_Scatter with strided vector";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 02:37:19 2008" -->
<!-- isoreceived="20080616063719" -->
<!-- sent="Mon, 16 Jun 2008 08:36:33 +0200 (CEST)" -->
<!-- isosent="20080616063633" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] wrong results from MPI_Scatter with strided vector" -->
<!-- id="200806160636.m5G6aXPj009462_at_rs1.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] wrong results from MPI_Scatter with strided vector<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-16 02:36:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5881.php">George Bosilca: "Re: [OMPI users] wrong results from MPI_Scatter with strided vector"</a>
<li><strong>Previous message:</strong> <a href="5879.php">Dirk Eddelbuettel: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5881.php">George Bosilca: "Re: [OMPI users] wrong results from MPI_Scatter with strided vector"</a>
<li><strong>Reply:</strong> <a href="5881.php">George Bosilca: "Re: [OMPI users] wrong results from MPI_Scatter with strided vector"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a problem with derived data types and MPI_Scatter/MPI_Gather in C
<br>
(Solaris 10 sparc, openmpi-1.2.4).
<br>
<p>I want to distribute the columns of a matrix with MPI_Scatter/MPI_Gather.
<br>
Unfortunately my program didn't work with my derived data type, so I used
<br>
a 2x2 matrix to figure out what's wrong and added a printf statement after
<br>
MPI_Scatter to print the contents of the column vector of each process. The
<br>
process with rank 1 didn't get the values &quot;2&quot; and &quot;4&quot; (see below), but more
<br>
or less 0. Now I used a 4x2 matrix and still a 2-element column vector (so
<br>
I should see the upper 2x2 &quot;matrix&quot; in my columns) to get an idea which
<br>
values are used for process 1. As you can see below it got &quot;5&quot; and &quot;7&quot;, i.e.
<br>
the values of the first column of the lower 2x2 matrix and not the values of
<br>
the block which starts after the first element of the first block (a[2][0]
<br>
instead of a[0][1]).
<br>
<p>Since I wasn't sure if I could use MPI_Type_struct I rewrote the program
<br>
with MPI_Type_vector. This time the result was better but still not
<br>
satisfying. Process 1 got values from the second column but one value too
<br>
late (starting with a[1][1] instead of a[1][0]).
<br>
<p>I run into the same problem with MPICH, MPICH2, and LAM-MPI, so that I have
<br>
probably misunderstood something or have a programming error. Since I dont't
<br>
know how to proceed, I would be very grateful if someone could tell me if I
<br>
can't use a strided vector with MPI_Scatter or if it is eventually a bug in
<br>
the implementations of the MPI libraries (how unlikely it is). Mainly I've
<br>
implemented this part in the following way (the full program code is appended).
<br>
<p>&nbsp;&nbsp;int blockcounts[2] = {1, 1};
<br>
<p>&nbsp;&nbsp;MPI_Datatype  types[2]       = {MPI_DOUBLE, MPI_UB};
<br>
&nbsp;&nbsp;MPI_Aint      offsets[2]     = {0, Q * sizeof (double)};
<br>
&nbsp;&nbsp;MPI_Datatype  coltype;
<br>
&nbsp;&nbsp;MPI_Type_struct (2, blockcounts, offsets, types, &amp;coltype);
<br>
&nbsp;&nbsp;MPI_Type_commit (&amp;coltype);
<br>
&nbsp;&nbsp;MPI_Scatter (matrix, P, coltype, column, P, MPI_DOUBLE, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD);
<br>
<p><p><p>MPI_Type_struct
<br>
===============
<br>
<p>tyr e5 158 mpiexec -mca btl ^udapl -np 2 e5_1a
<br>
<p>original matrix:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1     2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3     4
<br>
<p>rank: 0  c0: 1  c1: 3
<br>
rank: 1  c0: 5.51719e-313  c1: 4.24399e-314
<br>
<p><p>tyr e5 160 mpiexec -mca btl ^udapl -np 2 e5_1a
<br>
<p>original matrix:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1     2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3     4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5     6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7     8
<br>
<p>rank: 0  c0: 1  c1: 3
<br>
rank: 1  c0: 5  c1: 7
<br>
<p><p><p>MPI_Type_vector
<br>
===============
<br>
<p>tyr e5 119 mpiexec -mca btl ^udapl -np 2 e5_1b
<br>
<p>original matrix:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1     2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3     4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5     6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7     8
<br>
<p>rank: 0  c0: 1  c1: 3
<br>
rank: 1  c0: 4  c1: 6
<br>
<p><p>Thank you very much for any help or suggestions in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>

<br><hr>
<ul>
<li>TEXT/x-sun-c-file attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5880/e5_1a.c">e5_1a.c</a>
</ul>
<!-- attachment="e5_1a.c" -->
<hr>
<ul>
<li>TEXT/x-sun-c-file attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5880/e5_1b.c">e5_1b.c</a>
</ul>
<!-- attachment="e5_1b.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5881.php">George Bosilca: "Re: [OMPI users] wrong results from MPI_Scatter with strided vector"</a>
<li><strong>Previous message:</strong> <a href="5879.php">Dirk Eddelbuettel: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5881.php">George Bosilca: "Re: [OMPI users] wrong results from MPI_Scatter with strided vector"</a>
<li><strong>Reply:</strong> <a href="5881.php">George Bosilca: "Re: [OMPI users] wrong results from MPI_Scatter with strided vector"</a>
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
