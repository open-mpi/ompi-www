<?
$subject_val = "[OMPI users] Difficulty with MPI_Unpack";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  7 22:41:19 2010" -->
<!-- isoreceived="20100208034119" -->
<!-- sent="Sun, 07 Feb 2010 22:40:55 -0500" -->
<!-- isosent="20100208034055" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="[OMPI users] Difficulty with MPI_Unpack" -->
<!-- id="4B6F87C7.2000803_at_ias.edu" -->
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
<strong>Subject:</strong> [OMPI users] Difficulty with MPI_Unpack<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-07 22:40:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12034.php">Andreea Costea: "[OMPI users] OpenMPI checkpoint/restart on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="12032.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12036.php">Jed Brown: "Re: [OMPI users] Difficulty with MPI_Unpack"</a>
<li><strong>Reply:</strong> <a href="12036.php">Jed Brown: "Re: [OMPI users] Difficulty with MPI_Unpack"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, everyone. I'm having trouble packing/unpacking this structure:
<br>
<p>typedef struct{
<br>
&nbsp;&nbsp;int index;
<br>
&nbsp;&nbsp;int* coords;
<br>
}point;
<br>
<p>The size of the coords array is not known a priori, so it needs to be a
<br>
dynamic array. I'm trying to send it from one node to another using
<br>
MPI_Pack/MPI_Unpack as shown below. When I unpack it, I get this error
<br>
when unpacking the coords array:
<br>
<p>[fatboy:07360] *** Process received signal ***
<br>
[fatboy:07360] Signal: Segmentation fault (11)
<br>
[fatboy:07360] Signal code: Address not mapped (1)
<br>
[fatboy:07360] Failing at address: (nil)
<br>
<p>Any idea what I'm doing wrong here? Any help/advice will be greatly
<br>
appreciated. I've compared my code to Pacheco's book and a few other
<br>
examples online, and everything looks okay. I'm sure I'm overlooking
<br>
something minor and trivial.
<br>
<p><pre>
--
Prentice
if (rank == 0) {
    /* assign values to a_point */
    position = 0;
    buffer = malloc(4 * sizeof(int));
    buff_size = (4 * sizeof(int));
    MPI_Pack(&amp;a_point.index, 1, MPI_INT, buffer, buff_size, &amp;position,
MPI_COMM_WORLD);
    MPI_Pack(a_point.coords, 3, MPI_INT, buffer, buff_size, &amp;position,
MPI_COMM_WORLD);
    MPI_Send(buffer, buff_size, MPI_PACKED, 1, 0, MPI_COMM_WORLD);
    }
}
if (rank == 1) {
    buffer = malloc(4 * sizeof(int));
    buff_size = (4 * sizeof(int));
    MPI_Recv(buffer, buff_size, MPI_PACKED, 0, 0, MPI_COMM_WORLD, &amp;status);
    position = 0;
    MPI_Unpack(buffer, buff_size, &amp;position, &amp;b_point.index, 1, MPI_INT,
MPI_COMM_WORLD);
    printf(&quot;b_point.index = %i\n&quot;, b_point.index);
    /*everything works up to this point! */
    MPI_Unpack(buffer, buff_size, &amp;position, b_point.coords, 3, MPI_INT,
MPI_COMM_WORLD);    /*
    printf(&quot;b_point.coords = (%i, %i, %i)\n&quot;, b_point.coords[0],
b_point.coords[1], b_point.coords[2]);
  }
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12034.php">Andreea Costea: "[OMPI users] OpenMPI checkpoint/restart on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="12032.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12036.php">Jed Brown: "Re: [OMPI users] Difficulty with MPI_Unpack"</a>
<li><strong>Reply:</strong> <a href="12036.php">Jed Brown: "Re: [OMPI users] Difficulty with MPI_Unpack"</a>
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
