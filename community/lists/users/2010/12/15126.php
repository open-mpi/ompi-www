<?
$subject_val = "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 14 11:54:14 2010" -->
<!-- isoreceived="20101214165414" -->
<!-- sent="Tue, 14 Dec 2010 08:54:10 -0800" -->
<!-- isosent="20101214165410" -->
<!-- name="David Mathog" -->
<!-- email="mathog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?" -->
<!-- id="E1PSY8g-0000TK-DL_at_mendel.bio.caltech.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] MPI_Bcast vs. per worker MPI_Send?" -->
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
<strong>From:</strong> David Mathog (<em>mathog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-14 11:54:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15127.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>Previous message:</strong> <a href="15125.php">Eugene Loh: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Maybe in reply to:</strong> <a href="15117.php">David Mathog: "[OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15127.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>Reply:</strong> <a href="15127.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So the 2/2 consensus is to use the collective.  That is straightforward
<br>
for the send part of this, since all workers are sent the same data.
<br>
<p>For the receive I do not see how to use a collective.  Each worker sends
<br>
back a data structure, and the structures are of of varying size.  This
<br>
is almost always the case in Bioinformatics, where what is usually
<br>
coming back from each worker is a count M of the number of significant
<br>
results, M x (fixed size data per result: scores and the like), and M x
<br>
sequences or sequence alignments.  M runs from 0 to Z, where in
<br>
pathological cases, Z is a very large number, and the size of the
<br>
sequences or alignments returned also varies. 
<br>
<p>The current code on the master does within a loop over the N workers:
<br>
<p>&nbsp;&nbsp;MPI_probe
<br>
&nbsp;&nbsp;MPI_Get_Count
<br>
&nbsp;&nbsp;MPI_Receive
<br>
&nbsp;&nbsp;unpack received data into a result structure
<br>
&nbsp;&nbsp;set a pointer in an array of length N to this result
<br>
<p>So MPI_gather isn't going to do.  Possibly MPI_gatherv would, but we
<br>
cannot know ahead of time how big the largest result is going to be,
<br>
which makes preallocating memory difficult.
<br>
<p>Is there by any chance an &quot;MPI_Get_Counts&quot; (a collective form of
<br>
MPI_Get_Count)?  That would let the preceding loop be replaced by
<br>
<p>&nbsp;&nbsp;MPI_Get_Counts
<br>
&nbsp;&nbsp;(allocate memory as needed)
<br>
&nbsp;&nbsp;MPI_Gatherv
<br>
<p>although I guess even that wouldn't be very efficient with memory,
<br>
because there would usually be huge holes in the recv buffer.
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
<li><strong>Next message:</strong> <a href="15127.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>Previous message:</strong> <a href="15125.php">Eugene Loh: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Maybe in reply to:</strong> <a href="15117.php">David Mathog: "[OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15127.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>Reply:</strong> <a href="15127.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
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
