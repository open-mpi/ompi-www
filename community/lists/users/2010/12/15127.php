<?
$subject_val = "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 14 12:04:42 2010" -->
<!-- isoreceived="20101214170442" -->
<!-- sent="Tue, 14 Dec 2010 09:03:21 -0800" -->
<!-- isosent="20101214170321" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?" -->
<!-- id="4D07A359.4040702_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E1PSY8g-0000TK-DL_at_mendel.bio.caltech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-14 12:03:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15128.php">James Dinan: "Re: [OMPI users] One-sided datatype errors"</a>
<li><strong>Previous message:</strong> <a href="15126.php">David Mathog: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>In reply to:</strong> <a href="15126.php">David Mathog: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David Mathog wrote:
<br>
<p><span class="quotelev1">&gt;For the receive I do not see how to use a collective.  Each worker sends
</span><br>
<span class="quotelev1">&gt;back a data structure, and the structures are of of varying size.  This
</span><br>
<span class="quotelev1">&gt;is almost always the case in Bioinformatics, where what is usually
</span><br>
<span class="quotelev1">&gt;coming back from each worker is a count M of the number of significant
</span><br>
<span class="quotelev1">&gt;results, M x (fixed size data per result: scores and the like), and M x
</span><br>
<span class="quotelev1">&gt;sequences or sequence alignments.  M runs from 0 to Z, where in
</span><br>
<span class="quotelev1">&gt;pathological cases, Z is a very large number, and the size of the
</span><br>
<span class="quotelev1">&gt;sequences or alignments returned also varies.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
A collective call might not make sense in this case.
<br>
<p>Arguably, each process could first send a size message (how much stuff 
<br>
is coming) and then the actual data.  In this case, you could do an 
<br>
MPI_Gather, master could allocate space, and then you do an MPI_Gatherv.
<br>
<p>But it may make more sense for you to stick to your point-to-point 
<br>
implementation.  It may allow the master to operate with a smaller 
<br>
footprint and it may allow first finishers to send their results back 
<br>
earlier without everyone waiting for laggards.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15128.php">James Dinan: "Re: [OMPI users] One-sided datatype errors"</a>
<li><strong>Previous message:</strong> <a href="15126.php">David Mathog: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>In reply to:</strong> <a href="15126.php">David Mathog: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
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
