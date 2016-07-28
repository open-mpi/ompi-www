<?
$subject_val = "Re: [OMPI users] Similar question about MPI_Create_type";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 14:55:11 2010" -->
<!-- isoreceived="20100208195511" -->
<!-- sent="Mon, 08 Feb 2010 20:57:08 +0100" -->
<!-- isosent="20100208195708" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Similar question about MPI_Create_type" -->
<!-- id="87mxzjtsa3.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-08 14:57:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12048.php">Jeff Squyres: "Re: [OMPI users] Executing of external programs"</a>
<li><strong>Previous message:</strong> <a href="12046.php">Prentice Bisbal: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>In reply to:</strong> <a href="12045.php">Prentice Bisbal: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 08 Feb 2010 14:42:15 -0500, Prentice Bisbal &lt;prentice_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I'll give that a try, too. IMHO, MPI_Pack/Unpack looks easier and less
</span><br>
<span class="quotelev1">&gt; error prone, but Pacheco advocates using derived types over
</span><br>
<span class="quotelev1">&gt; MPI_Pack/Unpack.
</span><br>
<p>I would recommend using derived types for big structures, or perhaps for
<br>
long-lived medium-sized structures.  If your structure is static
<br>
(i.e. doesn't contain pointers), then derived types definitely make
<br>
sense and allow you to use that type in collectives.
<br>
<p><span class="quotelev1">&gt; In my situation, rank 0 is reading in a file containing all the coords.
</span><br>
<span class="quotelev1">&gt; So even if other ranks don't have the data, I still need to create the
</span><br>
<span class="quotelev1">&gt; structure on all the nodes, even if I don't populate it with data?
</span><br>
<p>You're populating it by receiving data.  MPI can't allocate the space
<br>
for you, so you have to it up.
<br>
<p><span class="quotelev1">&gt; To clarify: I thought adding a similar structure, b_point in rank 1
</span><br>
<span class="quotelev1">&gt; would be adequate to receive the data from rank 0
</span><br>
<p>You have allocated memory by the time you call MPI_Recv, but you were
<br>
passing an undefined value to MPI_Address, and you certainly can't base
<br>
derived_type an a_point and use it to receive into b_point.
<br>
<p>It would be fine to receive into a_point on rank 1, but whatever you do,
<br>
derived_type has to be created correctly on each process.
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12048.php">Jeff Squyres: "Re: [OMPI users] Executing of external programs"</a>
<li><strong>Previous message:</strong> <a href="12046.php">Prentice Bisbal: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>In reply to:</strong> <a href="12045.php">Prentice Bisbal: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<!-- nextthread="start" -->
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
