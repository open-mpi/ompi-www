<?
$subject_val = "Re: [OMPI users] Parallel I/O Usage";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  8 16:47:54 2009" -->
<!-- isoreceived="20090708204754" -->
<!-- sent="Wed, 8 Jul 2009 15:47:44 -0500" -->
<!-- isosent="20090708204744" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Parallel I/O Usage" -->
<!-- id="20090708204744.GF5999_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="beba99aa0907060239t7f2d2cbcmc1620785e11f7ef5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Parallel I/O Usage<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-08 16:47:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9887.php">Lengyel, Florian: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<li><strong>Previous message:</strong> <a href="9885.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>In reply to:</strong> <a href="9834.php">Manuel Holtgrewe: "[OMPI users] Parallel I/O Usage"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jul 06, 2009 at 11:39:59AM +0200, Manuel Holtgrewe wrote:
<br>
<span class="quotelev1">&gt; do I understand the MPI-2 Parallel I/O correctly (C++)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After opening a file with MPI::File::Open, I can use Read_at on the
</span><br>
<span class="quotelev1">&gt; returned file object. I give offsets in bytes and I can perform random
</span><br>
<span class="quotelev1">&gt; access reads from any process at any point of the file without
</span><br>
<span class="quotelev1">&gt; violating correctness (although the performance might/should/will be
</span><br>
<span class="quotelev1">&gt; better using views):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI::File f = MPI::File::Open(MPI::COMM_WORLD, filename, MPI::MODE_RDONLY,
</span><br>
<span class="quotelev1">&gt;                               MPI::INFO_NULL);
</span><br>
<span class="quotelev1">&gt; // ...
</span><br>
<span class="quotelev1">&gt; MPI::Offset pos_in_file = ...;
</span><br>
<span class="quotelev1">&gt; // ...
</span><br>
<span class="quotelev1">&gt; f.Read_at(pos_in_file, buffer, local_n + 1, MPI::INTEGER);
</span><br>
<span class="quotelev1">&gt; // ...
</span><br>
<span class="quotelev1">&gt; f.Close();
</span><br>
<p>why the +1 ?  what's local_n in the first place?
<br>
<p><span class="quotelev1">&gt; I have some problems with the program reading invalid data and want to
</span><br>
<span class="quotelev1">&gt; make sure I am actually using parallel I/O the right way.
</span><br>
<p>I think you're OK here.  What are you seeing?  Is this NFS?
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9887.php">Lengyel, Florian: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<li><strong>Previous message:</strong> <a href="9885.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>In reply to:</strong> <a href="9834.php">Manuel Holtgrewe: "[OMPI users] Parallel I/O Usage"</a>
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
