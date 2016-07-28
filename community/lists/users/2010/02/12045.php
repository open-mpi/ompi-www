<?
$subject_val = "Re: [OMPI users] Similar question about MPI_Create_type";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 14:42:22 2010" -->
<!-- isoreceived="20100208194222" -->
<!-- sent="Mon, 08 Feb 2010 14:42:15 -0500" -->
<!-- isosent="20100208194215" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Similar question about MPI_Create_type" -->
<!-- id="4B706917.1060901_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="87ocjztudm.fsf_at_59A2.org" -->
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
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-08 14:42:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12046.php">Prentice Bisbal: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>Previous message:</strong> <a href="12044.php">Lubomir Klimes: "[OMPI users] Executing of external programs"</a>
<li><strong>In reply to:</strong> <a href="12042.php">Jed Brown: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12046.php">Prentice Bisbal: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>Reply:</strong> <a href="12046.php">Prentice Bisbal: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>Reply:</strong> <a href="12047.php">Jed Brown: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I hit send to early on my last reply, please forgive me...
<br>
<p>Jed Brown wrote:
<br>
<span class="quotelev1">&gt; On Mon, 08 Feb 2010 13:54:10 -0500, Prentice Bisbal &lt;prentice_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; but I don't have that book handy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The standard has lots of examples.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.mpi-forum.org/docs/docs.html">http://www.mpi-forum.org/docs/docs.html</a>
</span><br>
<p>Thanks, I'll check out those examples.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can do this, but for small structures, you're better off just
</span><br>
<span class="quotelev1">&gt; packing buffers.  For large structures containing variable-size fields,
</span><br>
<span class="quotelev1">&gt; I think it is clearer to use MPI_BOTTOM instead of offsets from an
</span><br>
<span class="quotelev1">&gt; arbitrary (instance-dependent) address.
</span><br>
<p>I'll give that a try, too. IMHO, MPI_Pack/Unpack looks easier and less
<br>
error prone, but Pacheco advocates using derived types over
<br>
MPI_Pack/Unpack.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   if (rank == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;     a_point.index = 1;
</span><br>
<span class="quotelev2">&gt;&gt;     a_point.coords = malloc(3 * sizeof(int));
</span><br>
<span class="quotelev2">&gt;&gt;     a_point.coords[0] = 3;
</span><br>
<span class="quotelev2">&gt;&gt;     a_point.coords[1] = 6;
</span><br>
<span class="quotelev2">&gt;&gt;     a_point.coords[2] = 9;
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   block_lengths[0] = 1;
</span><br>
<span class="quotelev2">&gt;&gt;   block_lengths[1] = 3;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   type_list[0] = MPI_INT;
</span><br>
<span class="quotelev2">&gt;&gt;   type_list[1] = MPI_INT;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   displacements[0] = 0;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Address(&amp;a_point.index, &amp;start_address);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Address(a_point.coords, &amp;address);
</span><br>
<span class="quotelev1">&gt;                 ^^^^^^^^^^^^^^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rank 1 has not allocated this yet.
</span><br>
<p>I'm glad you brought that up. I wanted to ask about that:
<br>
<p>In my situation, rank 0 is reading in a file containing all the coords.
<br>
So even if other ranks don't have the data, I still need to create the
<br>
structure on all the nodes, even if I don't populate it with data?
<br>
<p>Thanks for the help.
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12046.php">Prentice Bisbal: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>Previous message:</strong> <a href="12044.php">Lubomir Klimes: "[OMPI users] Executing of external programs"</a>
<li><strong>In reply to:</strong> <a href="12042.php">Jed Brown: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12046.php">Prentice Bisbal: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>Reply:</strong> <a href="12046.php">Prentice Bisbal: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>Reply:</strong> <a href="12047.php">Jed Brown: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
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
