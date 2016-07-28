<?
$subject_val = "Re: [OMPI users] How to multiply two matrices?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 09:20:11 2015" -->
<!-- isoreceived="20151028132011" -->
<!-- sent="Wed, 28 Oct 2015 09:20:07 -0400" -->
<!-- isosent="20151028132007" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to multiply two matrices?" -->
<!-- id="CAMJJpkWGcgN6uMDuzJBRf2OUskYzrebSaWQNC25syQ6PG-FK1A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DUB125-W255ED680FBB668E08D99F197210_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to multiply two matrices?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-28 09:20:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27932.php">Diego Avesani: "[OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>Previous message:</strong> <a href="27930.php">Ibrahim Ikhlawi: "[OMPI users] How to multiply two matrices?"</a>
<li><strong>In reply to:</strong> <a href="27930.php">Ibrahim Ikhlawi: "[OMPI users] How to multiply two matrices?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you want to remain in the traditional methods (complexity n^3), what you
<br>
need is a GEMM (generalized matrix multiplication), and it is provided in
<br>
C, for dense matrices, by ScaLAPACK. The implementation provided on your
<br>
blog is indeed a rough cut, there are better solutions (matrices divided in
<br>
blocks k-cyclic) proposed by the SUMMA and PUMMA algorithms.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Wed, Oct 28, 2015 at 9:14 AM, Ibrahim Ikhlawi &lt;ibrahim_22s_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what is the best way to multiply two matrices with java-openmpi.
</span><br>
<span class="quotelev1">&gt; Is the way in this link the right way to do that? Also split the first
</span><br>
<span class="quotelev1">&gt; matrix row wise and multiply each one with the second matrix (each row on a
</span><br>
<span class="quotelev1">&gt; processor) then collect the results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link:
</span><br>
<span class="quotelev1">&gt; <a href="https://anjanavk.wordpress.com/2011/01/08/matrix-multiplication-in-parallel-using-open-mpi/">https://anjanavk.wordpress.com/2011/01/08/matrix-multiplication-in-parallel-using-open-mpi/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards
</span><br>
<span class="quotelev1">&gt; Ibrahim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27930.php">http://www.open-mpi.org/community/lists/users/2015/10/27930.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27931/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27932.php">Diego Avesani: "[OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>Previous message:</strong> <a href="27930.php">Ibrahim Ikhlawi: "[OMPI users] How to multiply two matrices?"</a>
<li><strong>In reply to:</strong> <a href="27930.php">Ibrahim Ikhlawi: "[OMPI users] How to multiply two matrices?"</a>
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
