<?
$subject_val = "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 23 10:42:19 2009" -->
<!-- isoreceived="20091123154219" -->
<!-- sent="Mon, 23 Nov 2009 09:42:09 -0600" -->
<!-- isosent="20091123154209" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] nonblocking MPI_File_iwrite() does block?" -->
<!-- id="20091123154208.GB8956_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B0A6149.5080700_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] nonblocking MPI_File_iwrite() does block?<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-23 10:42:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11252.php">Eugene Loh: "Re: [OMPI users] Doubt regarding MPI_GATHER"</a>
<li><strong>Previous message:</strong> <a href="11250.php">Iris Pernille Lohmann: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="11249.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11258.php">Barrett, Brian W: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Reply:</strong> <a href="11258.php">Barrett, Brian W: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Nov 23, 2009 at 11:17:45AM +0100, Christoph Rackwitz wrote:
<br>
<span class="quotelev2">&gt; &gt;If I may ask a slightly different question: you've got periods of I/O
</span><br>
<span class="quotelev2">&gt; &gt;and periods of computation.  Have you evaluated collective I/O?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought about it and I know a way to make it happen too, but I put
</span><br>
<span class="quotelev1">&gt; that on the &quot;to do&quot; pile for possible improvements later on, after
</span><br>
<span class="quotelev1">&gt; I'd have gotten the asynchronous I/O working. My file format
</span><br>
<span class="quotelev1">&gt; contains a struct followed by two matrices (same dimensions). Right
</span><br>
<span class="quotelev1">&gt; now, I write the header via rank 0 and then each rank writes one
</span><br>
<span class="quotelev1">&gt; stripe for each matrix, resulting in two Requests pending. I gather
</span><br>
<span class="quotelev1">&gt; that I'd need to construct one or two more data types for
</span><br>
<span class="quotelev1">&gt; split-collective I/O to be applicable, i.e., so the whole write
</span><br>
<span class="quotelev1">&gt; happens in one call.
</span><br>
<p>If the other processors need header data, perhaps rank 0 can broadcast
<br>
it to everyone else?
<br>
<p>You won't get any overlap with split collectives in any ROMIO-based
<br>
MPI-IO: they have always been implemented in a blocking fashion.  
<br>
<p>You're on the right track: describe the I/O for the two matrices with
<br>
one datatype, then on rank zero use that datatype as one of the
<br>
datatype for a struct type.  
<br>
<p>It's definitely a different way of thinking about I/O than the async
<br>
model.  
<br>
<p>Is it OK to mention MPICH2 on this list?  I did prototype some MPI
<br>
extensions that allowed ROMIO to do true async I/O  (at least as far
<br>
as the underlying operating system supports it).   If you really need
<br>
to experiment with async I/O, I'd love to hear your experiences.   
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
<li><strong>Next message:</strong> <a href="11252.php">Eugene Loh: "Re: [OMPI users] Doubt regarding MPI_GATHER"</a>
<li><strong>Previous message:</strong> <a href="11250.php">Iris Pernille Lohmann: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="11249.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11258.php">Barrett, Brian W: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Reply:</strong> <a href="11258.php">Barrett, Brian W: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
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
