<?
$subject_val = "Re: [OMPI users] Similar question about MPI_Create_type";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 14:09:52 2010" -->
<!-- isoreceived="20100208190952" -->
<!-- sent="Mon, 08 Feb 2010 20:11:49 +0100" -->
<!-- isosent="20100208191149" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Similar question about MPI_Create_type" -->
<!-- id="87ocjztudm.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B705DD2.2060500_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Similar question about MPI_Create_type<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-08 14:11:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12043.php">Laurence Marks: "[OMPI users] openmpi fails to terminate for errors/signals on some but not all processes"</a>
<li><strong>Previous message:</strong> <a href="12041.php">Prentice Bisbal: "[OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>In reply to:</strong> <a href="12041.php">Prentice Bisbal: "[OMPI users] Similar question about MPI_Create_type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12045.php">Prentice Bisbal: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>Reply:</strong> <a href="12045.php">Prentice Bisbal: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 08 Feb 2010 13:54:10 -0500, Prentice Bisbal &lt;prentice_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; but I don't have that book handy
</span><br>
<p>The standard has lots of examples.
<br>
<p>&nbsp;&nbsp;<a href="http://www.mpi-forum.org/docs/docs.html">http://www.mpi-forum.org/docs/docs.html</a>
<br>
<p>You can do this, but for small structures, you're better off just
<br>
packing buffers.  For large structures containing variable-size fields,
<br>
I think it is clearer to use MPI_BOTTOM instead of offsets from an
<br>
arbitrary (instance-dependent) address.
<br>
<p>[...]
<br>
<p><span class="quotelev1">&gt;   if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;     a_point.index = 1;
</span><br>
<span class="quotelev1">&gt;     a_point.coords = malloc(3 * sizeof(int));
</span><br>
<span class="quotelev1">&gt;     a_point.coords[0] = 3;
</span><br>
<span class="quotelev1">&gt;     a_point.coords[1] = 6;
</span><br>
<span class="quotelev1">&gt;     a_point.coords[2] = 9;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   block_lengths[0] = 1;
</span><br>
<span class="quotelev1">&gt;   block_lengths[1] = 3;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   type_list[0] = MPI_INT;
</span><br>
<span class="quotelev1">&gt;   type_list[1] = MPI_INT;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   displacements[0] = 0;
</span><br>
<span class="quotelev1">&gt;   MPI_Address(&amp;a_point.index, &amp;start_address);
</span><br>
<span class="quotelev1">&gt;   MPI_Address(a_point.coords, &amp;address);
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^^^^^^^^^^^^^^
<br>
<p>Rank 1 has not allocated this yet.
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12043.php">Laurence Marks: "[OMPI users] openmpi fails to terminate for errors/signals on some but not all processes"</a>
<li><strong>Previous message:</strong> <a href="12041.php">Prentice Bisbal: "[OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>In reply to:</strong> <a href="12041.php">Prentice Bisbal: "[OMPI users] Similar question about MPI_Create_type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12045.php">Prentice Bisbal: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>Reply:</strong> <a href="12045.php">Prentice Bisbal: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
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
