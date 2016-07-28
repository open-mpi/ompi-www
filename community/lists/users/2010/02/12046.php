<?
$subject_val = "Re: [OMPI users] Similar question about MPI_Create_type";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 14:50:01 2010" -->
<!-- isoreceived="20100208195001" -->
<!-- sent="Mon, 08 Feb 2010 14:49:57 -0500" -->
<!-- isosent="20100208194957" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Similar question about MPI_Create_type" -->
<!-- id="4B706AE5.9040700_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B706917.1060901_at_ias.edu" -->
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
<strong>Date:</strong> 2010-02-08 14:49:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12047.php">Jed Brown: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>Previous message:</strong> <a href="12045.php">Prentice Bisbal: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>In reply to:</strong> <a href="12045.php">Prentice Bisbal: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12047.php">Jed Brown: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Prentice Bisbal wrote:
<br>
<span class="quotelev1">&gt; I hit send to early on my last reply, please forgive me...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jed Brown wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, 08 Feb 2010 13:54:10 -0500, Prentice Bisbal &lt;prentice_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but I don't have that book handy
</span><br>
<span class="quotelev2">&gt;&gt; The standard has lots of examples.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.mpi-forum.org/docs/docs.html">http://www.mpi-forum.org/docs/docs.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, I'll check out those examples.
</span><br>
<span class="quotelev2">&gt;&gt; You can do this, but for small structures, you're better off just
</span><br>
<span class="quotelev2">&gt;&gt; packing buffers.  For large structures containing variable-size fields,
</span><br>
<span class="quotelev2">&gt;&gt; I think it is clearer to use MPI_BOTTOM instead of offsets from an
</span><br>
<span class="quotelev2">&gt;&gt; arbitrary (instance-dependent) address.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll give that a try, too. IMHO, MPI_Pack/Unpack looks easier and less
</span><br>
<span class="quotelev1">&gt; error prone, but Pacheco advocates using derived types over
</span><br>
<span class="quotelev1">&gt; MPI_Pack/Unpack.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   if (rank == 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     a_point.index = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     a_point.coords = malloc(3 * sizeof(int));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     a_point.coords[0] = 3;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     a_point.coords[1] = 6;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     a_point.coords[2] = 9;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   block_lengths[0] = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   block_lengths[1] = 3;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   type_list[0] = MPI_INT;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   type_list[1] = MPI_INT;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   displacements[0] = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Address(&amp;a_point.index, &amp;start_address);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Address(a_point.coords, &amp;address);
</span><br>
<span class="quotelev2">&gt;&gt;                 ^^^^^^^^^^^^^^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rank 1 has not allocated this yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm glad you brought that up. I wanted to ask about that:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my situation, rank 0 is reading in a file containing all the coords.
</span><br>
<span class="quotelev1">&gt; So even if other ranks don't have the data, I still need to create the
</span><br>
<span class="quotelev1">&gt; structure on all the nodes, even if I don't populate it with data?
</span><br>
<p>To clarify: I thought adding a similar structure, b_point in rank 1
<br>
would be adequate to receive the data from rank 0.
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12047.php">Jed Brown: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>Previous message:</strong> <a href="12045.php">Prentice Bisbal: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>In reply to:</strong> <a href="12045.php">Prentice Bisbal: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12047.php">Jed Brown: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
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
