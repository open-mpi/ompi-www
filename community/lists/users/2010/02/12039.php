<?
$subject_val = "Re: [OMPI users] Difficulty with MPI_Unpack";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 10:33:41 2010" -->
<!-- isoreceived="20100208153341" -->
<!-- sent="Mon, 08 Feb 2010 10:33:34 -0500" -->
<!-- isosent="20100208153334" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Difficulty with MPI_Unpack" -->
<!-- id="4B702ECE.1000509_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="871vgwug4q.fsf_at_59A2.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Difficulty with MPI_Unpack<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-08 10:33:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12040.php">Benjamin Gaudio: "[OMPI users] openmpi-default-hostfile"</a>
<li><strong>Previous message:</strong> <a href="12038.php">Joshua Hursey: "Re: [OMPI users] OpenMPI checkpoint/restart on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="12036.php">Jed Brown: "Re: [OMPI users] Difficulty with MPI_Unpack"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jed Brown wrote:
<br>
<span class="quotelev1">&gt; On Sun, 07 Feb 2010 22:40:55 -0500, Prentice Bisbal &lt;prentice_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello, everyone. I'm having trouble packing/unpacking this structure:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; typedef struct{
</span><br>
<span class="quotelev2">&gt;&gt;   int index;
</span><br>
<span class="quotelev2">&gt;&gt;   int* coords;
</span><br>
<span class="quotelev2">&gt;&gt; }point;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The size of the coords array is not known a priori, so it needs to be a
</span><br>
<span class="quotelev2">&gt;&gt; dynamic array. I'm trying to send it from one node to another using
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Pack/MPI_Unpack as shown below. When I unpack it, I get this error
</span><br>
<span class="quotelev2">&gt;&gt; when unpacking the coords array:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [fatboy:07360] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [fatboy:07360] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [fatboy:07360] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [fatboy:07360] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like b_point.coords = NULL.  Has this been allocated on rank=1?
</span><br>
<p>Yep, that was the problem. I left that out. I can't believe I overlooked
<br>
something so obvious. Thanks for the code review. Thanks to Brian
<br>
Austin, too,  who also found that mistake.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You might need to use MPI_Get_count to decide how much to allocate.
</span><br>
<span class="quotelev1">&gt; Also, if you don't have a convenient upper bound on the size of the
</span><br>
<span class="quotelev1">&gt; receive buffer, you can use MPI_Probe followed by MPI_Get_count to
</span><br>
<span class="quotelev1">&gt; determine this before calling MPI_Recv.
</span><br>
<p>Thanks for the tip. I'll take a look at those functions.
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12040.php">Benjamin Gaudio: "[OMPI users] openmpi-default-hostfile"</a>
<li><strong>Previous message:</strong> <a href="12038.php">Joshua Hursey: "Re: [OMPI users] OpenMPI checkpoint/restart on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="12036.php">Jed Brown: "Re: [OMPI users] Difficulty with MPI_Unpack"</a>
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
