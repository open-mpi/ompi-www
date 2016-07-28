<?
$subject_val = "[OMPI users] MPI_Type_free and non-blocking operations";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 08:33:32 2016" -->
<!-- isoreceived="20160113133332" -->
<!-- sent="Wed, 13 Jan 2016 13:33:28 +0000" -->
<!-- isosent="20160113133328" -->
<!-- name="Thomas Ponweiser" -->
<!-- email="Thomas.Ponweiser_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Type_free and non-blocking operations" -->
<!-- id="ABDC446F6E5B1F488295A06A64CA3EFE0144E8B0_at_doug.risc.local" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Type_free and non-blocking operations<br>
<strong>From:</strong> Thomas Ponweiser (<em>Thomas.Ponweiser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-13 08:33:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28264.php">CUDENNEC Loic: "[OMPI users] Call for Papers: 4th Alchemy Workshop on Manycore programming"</a>
<li><strong>Previous message:</strong> <a href="28262.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28265.php">Gilles Gouaillardet: "[OMPI users]  MPI_Type_free and non-blocking operations"</a>
<li><strong>Reply:</strong> <a href="28265.php">Gilles Gouaillardet: "[OMPI users]  MPI_Type_free and non-blocking operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear friends of Open MPI,
<br>
<p>I am currently facing a problem in connection with MPI_Ibcast and MPI_Type_free. I've been able to isolate the problem in a minimalistic test program which I attached. 
<br>
<p>Maybe some of you can tell me what I am doing wrong or confirm that this might be a bug in Open MPI (I am using version 1.10.1).
<br>
<p>Here is what I am doing:
<br>
1) I have two struct types, foo_type and bar_type, as follows:
<br>
<p>typedef struct
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int v[6];
<br>
&nbsp;&nbsp;&nbsp;long l;
<br>
} foo_type;
<br>
<p>typedef struct
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int v[3];
<br>
&nbsp;&nbsp;&nbsp;foo_type foo;
<br>
} bar_type;
<br>
<p>2) I am creating corresponding MPI types (foo_mpitype and bar_mpitype) with MPI_Type_create_struct.
<br>
<p>3) I am freeing foo_mpitype.
<br>
<p>4) I am broadcasting a variable of type bar_type with MPI_Ibcast (using count = 1 and datatype = bar_mpitype).
<br>
<p>5) I am freeing bar_mpitype.
<br>
<p>6) I am waiting for the completion of step 4) with MPI_Wait.
<br>
<p>In step 6) I get a segmentation fault within MPI_Wait, but only if the MPI job is larger than 4 processes.
<br>
<p>Testing with MPICH 3.2, the program seems to work just fine.
<br>
<p>I found out that swapping the steps 5) and 6) helps. But I think this should not make any difference, according to the description of MPI_Type_free at <a href="http://www.mpi-forum.org/docs/mpi-1.1/mpi-11-html/node58.html">http://www.mpi-forum.org/docs/mpi-1.1/mpi-11-html/node58.html</a>: &quot;Any communication that is currently using this datatype will complete normally.&quot; And: &quot; Freeing a datatype does not affect any other datatype that was built from the freed datatype.&quot;
<br>
<p>(In fact, doing the same thing, that is MPI_IBcast followed by MPI_Type_free followed by MPI_Wait, with foo_type and foo_mpitype seems to work fine).
<br>
<p>Thanks in advance for your help, 
<br>
<p>kind regards,
<br>
Thomas
<br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28263/test.c">test.c</a>
</ul>
<!-- attachment="test.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28264.php">CUDENNEC Loic: "[OMPI users] Call for Papers: 4th Alchemy Workshop on Manycore programming"</a>
<li><strong>Previous message:</strong> <a href="28262.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28265.php">Gilles Gouaillardet: "[OMPI users]  MPI_Type_free and non-blocking operations"</a>
<li><strong>Reply:</strong> <a href="28265.php">Gilles Gouaillardet: "[OMPI users]  MPI_Type_free and non-blocking operations"</a>
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
