<?
$subject_val = "Re: [OMPI users] Does MPI_Bsend always use the buffer?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 10:50:07 2007" -->
<!-- isoreceived="20071211155007" -->
<!-- sent="Tue, 11 Dec 2007 10:50:03 -0500" -->
<!-- isosent="20071211155003" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does MPI_Bsend always use the buffer?" -->
<!-- id="9FCB3438-D6C2-4FBE-A94A-5183151AF31B_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071211153338.GD3360_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Does MPI_Bsend always use the buffer?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 10:50:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4639.php">Bradley, Peter C. (MIS/CFD): "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
<li><strong>Previous message:</strong> <a href="4637.php">Gleb Natapov: "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
<li><strong>In reply to:</strong> <a href="4637.php">Gleb Natapov: "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4639.php">Bradley, Peter C. (MIS/CFD): "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 11, 2007, at 10:33 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Dec 11, 2007 at 10:27:32AM -0500, Bradley, Peter C. (MIS/ 
</span><br>
<span class="quotelev1">&gt; CFD) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; In OpenMPI, does MPI_Bsend always copy the message to the user- 
</span><br>
<span class="quotelev2">&gt;&gt; specified
</span><br>
<span class="quotelev2">&gt;&gt; buffer, or will it avoid the copy in situations where it knows the  
</span><br>
<span class="quotelev2">&gt;&gt; send can
</span><br>
<span class="quotelev2">&gt;&gt; complete?
</span><br>
<span class="quotelev1">&gt; If the message size if smaller than eager limit Open MPI will not use
</span><br>
<span class="quotelev1">&gt; user-specified buffer for it.
</span><br>
<p>This is an implementation details. You should avoid relying on such  
<br>
things in a portable MPI applications. The safe assumption here is  
<br>
that MPI_Bsend always copy the buffer, as described in the MPI standard.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4638/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4639.php">Bradley, Peter C. (MIS/CFD): "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
<li><strong>Previous message:</strong> <a href="4637.php">Gleb Natapov: "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
<li><strong>In reply to:</strong> <a href="4637.php">Gleb Natapov: "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4639.php">Bradley, Peter C. (MIS/CFD): "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
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
