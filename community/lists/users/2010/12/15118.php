<?
$subject_val = "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 19:26:30 2010" -->
<!-- isoreceived="20101214002630" -->
<!-- sent="Mon, 13 Dec 2010 16:26:15 -0800" -->
<!-- isosent="20101214002615" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?" -->
<!-- id="4D06B9A7.7060009_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E1PSIAO-0000Bh-8W_at_mendel.bio.caltech.edu" -->
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
<strong>Date:</strong> 2010-12-13 19:26:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15119.php">David Zhang: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>Previous message:</strong> <a href="15117.php">David Mathog: "[OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>In reply to:</strong> <a href="15117.php">David Mathog: "[OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15119.php">David Zhang: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>Reply:</strong> <a href="15119.php">David Zhang: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David Mathog wrote:
<br>
<p><span class="quotelev1">&gt;Is there a rule of thumb for when it is best to contact N workers with
</span><br>
<span class="quotelev1">&gt;MPI_Bcast vs. when it is best to use a loop which cycles N times and
</span><br>
<span class="quotelev1">&gt;moves the same information with MPI_Send to one worker at a time?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
The rule of thumb is to use a collective whenever you can.  The 
<br>
rationale is that the programming should be easier/cleaner and the 
<br>
underlying MPI implementation has the opportunity to do something clever.
<br>
<p><span class="quotelev1">&gt;For that matter, other than the coding semantics, is there any real
</span><br>
<span class="quotelev1">&gt;difference between the two approaches?  That is, does MPI_Bcast really
</span><br>
<span class="quotelev1">&gt;broadcast, daisy chain, or use other similar methods to reduce bandwidth
</span><br>
<span class="quotelev1">&gt;use when distributing its message, or does it just go ahead and run
</span><br>
<span class="quotelev1">&gt;MPI_Send in a loop anyway, but hide the details from the programmer?
</span><br>
<span class="quotelev1">&gt;
</span><br>
I believe most MPI implementations, including OMPI, make an attempt to 
<br>
&quot;do the right thing&quot;.  Multiple algorithms are available and the best 
<br>
one is chosen based on run-time conditions.
<br>
<p>With any luck, you're better off with collective calls.  Of course, 
<br>
there are no guarantees.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15119.php">David Zhang: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>Previous message:</strong> <a href="15117.php">David Mathog: "[OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>In reply to:</strong> <a href="15117.php">David Mathog: "[OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15119.php">David Zhang: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>Reply:</strong> <a href="15119.php">David Zhang: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
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
