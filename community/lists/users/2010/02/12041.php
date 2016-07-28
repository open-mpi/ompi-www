<?
$subject_val = "[OMPI users] Similar question about MPI_Create_type";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 13:54:14 2010" -->
<!-- isoreceived="20100208185414" -->
<!-- sent="Mon, 08 Feb 2010 13:54:10 -0500" -->
<!-- isosent="20100208185410" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="[OMPI users] Similar question about MPI_Create_type" -->
<!-- id="4B705DD2.2060500_at_ias.edu" -->
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
<strong>Subject:</strong> [OMPI users] Similar question about MPI_Create_type<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-08 13:54:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12042.php">Jed Brown: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>Previous message:</strong> <a href="12040.php">Benjamin Gaudio: "[OMPI users] openmpi-default-hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12042.php">Jed Brown: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>Reply:</strong> <a href="12042.php">Jed Brown: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, again MPU Users:
<br>
<p>This question is similar to my earlier one about MPI_Pack/Unpack,
<br>
<p>I'm trying to send the following structure, which has a dynamically
<br>
allocated array in it, as a MPI derived type using MPI_Create_type_struct():
<br>
<p>typedef struct{
<br>
&nbsp;&nbsp;&nbsp;int index;
<br>
&nbsp;&nbsp;&nbsp;int* coords;
<br>
}point;
<br>
<p>I would think that this can't be done since the coords array will not be
<br>
&nbsp;&nbsp;contiguous in memory with the rest of the structure, so calculating
<br>
the displacements between  point.index and point.coords will be
<br>
meaningless. However, I'm pretty sure that Pacheco's book implies that
<br>
this can be done (I'd list the exact page(s), but I don't have that book
<br>
handy).
<br>
<p>Am I wrong or right?
<br>
<p>Below my signature is a the code I'm using to test this, which fails as
<br>
I'd expect. Is my thinking right, or is my program wrong? When I run the
<br>
program I get this error:
<br>
<p>&nbsp;*** An error occurred in MPI_Address
<br>
&nbsp;*** on communicator MPI_COMM_WORLD
<br>
&nbsp;*** MPI_ERR_ARG: invalid argument of some other kind
<br>
&nbsp;*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
mpirun noticed that job rank 0 with PID 28286 on node juno.sns.ias.edu
<br>
exited on signal 15 (Terminated).
<br>
<p><pre>
-- 
Prentice
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;mpi.h&gt;
int rank;
MPI_Status status;
int size;
int tag;
typedef struct{
  int index;
  int* coords;
}point;
int block_lengths[2];
MPI_Datatype type_list[2];
MPI_Aint displacements[2];
MPI_Aint start_address;
MPI_Aint address;
MPI_Datatype derived_point;
point a_point, b_point;
int main(int argc, char* argv[])
{
  MPI_Init(&amp;argc, &amp;argv);
  MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
  if (rank == 0) {
    a_point.index = 1;
    a_point.coords = malloc(3 * sizeof(int));
    a_point.coords[0] = 3;
    a_point.coords[1] = 6;
    a_point.coords[2] = 9;
  }
  block_lengths[0] = 1;
  block_lengths[1] = 3;
  type_list[0] = MPI_INT;
  type_list[1] = MPI_INT;
  displacements[0] = 0;
  MPI_Address(&amp;a_point.index, &amp;start_address);
  MPI_Address(a_point.coords, &amp;address);
  displacements[1] = address - start_address;
  MPI_Type_create_struct(2, block_lengths, displacements, type_list,
&amp;derived_point);
  MPI_Type_commit(&amp;derived_point);
  if (rank == 0) {
    MPI_Send(&amp;a_point, 1, derived_point, 1, 0, MPI_COMM_WORLD);
  }
  if (rank == 1) {
    b_point.coords = malloc(3 *sizeof(int));
    MPI_Recv(&amp;b_point, 1, derived_point, 0, 0, MPI_COMM_WORLD, &amp;status);
    printf(&quot;b_point.index = %i\n&quot;, b_point.index);
    printf(&quot;b_point.coords:(%i, %i, %i)\n&quot;, b_point.coords[0],
b_point.coords[1], b_point.coords[2]);
  }
  MPI_Finalize();
  exit(0);
}
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12042.php">Jed Brown: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>Previous message:</strong> <a href="12040.php">Benjamin Gaudio: "[OMPI users] openmpi-default-hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12042.php">Jed Brown: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>Reply:</strong> <a href="12042.php">Jed Brown: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
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
