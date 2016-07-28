<?
$subject_val = "[OMPI users] MPI_Bcast vs. per worker MPI_Send?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 18:50:56 2010" -->
<!-- isoreceived="20101213235056" -->
<!-- sent="Mon, 13 Dec 2010 15:50:52 -0800" -->
<!-- isosent="20101213235052" -->
<!-- name="David Mathog" -->
<!-- email="mathog_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Bcast vs. per worker MPI_Send?" -->
<!-- id="E1PSIAO-0000Bh-8W_at_mendel.bio.caltech.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Bcast vs. per worker MPI_Send?<br>
<strong>From:</strong> David Mathog (<em>mathog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-13 18:50:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15118.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>Previous message:</strong> <a href="15116.php">James Dinan: "[OMPI users] One-sided datatype errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15118.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>Reply:</strong> <a href="15118.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>Maybe reply:</strong> <a href="15126.php">David Mathog: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there a rule of thumb for when it is best to contact N workers with
<br>
MPI_Bcast vs. when it is best to use a loop which cycles N times and
<br>
moves the same information with MPI_Send to one worker at a time?
<br>
<p>For that matter, other than the coding semantics, is there any real
<br>
difference between the two approaches?  That is, does MPI_Bcast really
<br>
broadcast, daisy chain, or use other similar methods to reduce bandwidth
<br>
use when distributing its message, or does it just go ahead and run
<br>
MPI_Send in a loop anyway, but hide the details from the programmer?
<br>
<p>Thanks,
<br>
<p>David Mathog
<br>
mathog_at_[hidden]
<br>
Manager, Sequence Analysis Facility, Biology Division, Caltech
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15118.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>Previous message:</strong> <a href="15116.php">James Dinan: "[OMPI users] One-sided datatype errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15118.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>Reply:</strong> <a href="15118.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>Maybe reply:</strong> <a href="15126.php">David Mathog: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
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
