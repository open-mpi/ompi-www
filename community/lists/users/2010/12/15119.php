<?
$subject_val = "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 20:21:38 2010" -->
<!-- isoreceived="20101214012138" -->
<!-- sent="Mon, 13 Dec 2010 17:21:13 -0800" -->
<!-- isosent="20101214012113" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?" -->
<!-- id="AANLkTinUx86DmCKbOvWov5uvYZxqvqTOWC=oZqdBu6s+_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D06B9A7.7060009_at_oracle.com" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-13 20:21:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15120.php">Gilbert Grosdidier: "[OMPI users] Use of -mca pml csum"</a>
<li><strong>Previous message:</strong> <a href="15118.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>In reply to:</strong> <a href="15118.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15126.php">David Mathog: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unless your cluster has some weird connection topology and you're trying to
<br>
take advantage of that, collective is the best bet.
<br>
<p>On Mon, Dec 13, 2010 at 4:26 PM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; David Mathog wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Is there a rule of thumb for when it is best to contact N workers with
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Bcast vs. when it is best to use a loop which cycles N times and
</span><br>
<span class="quotelev2">&gt;&gt; moves the same information with MPI_Send to one worker at a time?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; The rule of thumb is to use a collective whenever you can.  The rationale
</span><br>
<span class="quotelev1">&gt; is that the programming should be easier/cleaner and the underlying MPI
</span><br>
<span class="quotelev1">&gt; implementation has the opportunity to do something clever.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  For that matter, other than the coding semantics, is there any real
</span><br>
<span class="quotelev2">&gt;&gt; difference between the two approaches?  That is, does MPI_Bcast really
</span><br>
<span class="quotelev2">&gt;&gt; broadcast, daisy chain, or use other similar methods to reduce bandwidth
</span><br>
<span class="quotelev2">&gt;&gt; use when distributing its message, or does it just go ahead and run
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Send in a loop anyway, but hide the details from the programmer?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I believe most MPI implementations, including OMPI, make an attempt to
</span><br>
<span class="quotelev1">&gt; &quot;do the right thing&quot;.  Multiple algorithms are available and the best one is
</span><br>
<span class="quotelev1">&gt; chosen based on run-time conditions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With any luck, you're better off with collective calls.  Of course, there
</span><br>
<span class="quotelev1">&gt; are no guarantees.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15119/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15120.php">Gilbert Grosdidier: "[OMPI users] Use of -mca pml csum"</a>
<li><strong>Previous message:</strong> <a href="15118.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>In reply to:</strong> <a href="15118.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15126.php">David Mathog: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
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
