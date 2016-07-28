<?
$subject_val = "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  4 21:16:49 2012" -->
<!-- isoreceived="20121005011649" -->
<!-- sent="Fri, 5 Oct 2012 01:16:40 +0000" -->
<!-- isosent="20121005011640" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request" -->
<!-- id="DF152F4B8E08AE4AAF80927EA5DC03AC0E892C95_at_G01JPEXMBYT02" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="506D94D2.1010708_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-04 21:16:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11561.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>Previous message:</strong> <a href="11559.php">Eugene Loh: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>In reply to:</strong> <a href="11557.php">Eugene Loh: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11561.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>Reply:</strong> <a href="11561.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Eugene,
<br>
<p><span class="quotelev2">&gt; &gt; I found some bugs in Open MPI and attach a patch to fix them.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The bugs are:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (1) MPI_SOURCE of MPI_Status for a null request must be MPI_ANY_SOURCE.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (2) MPI_Status for an inactive request must be an empty status.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (3) Possible BUS errors on sparc64 processors.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   r23554 fixed possible BUS errors on sparc64 processors.
</span><br>
<span class="quotelev2">&gt; &gt;   But the fix seems to be insufficient.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   We should use OMPI_STATUS_SET macro for all user-supplied
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Status objects.
</span><br>
<span class="quotelev1">&gt; Regarding #3, see also a trac 3218. I'm putting a fix back today. Sorry
</span><br>
<span class="quotelev1">&gt; for the delay. One proposed solution was extending the use of the
</span><br>
<span class="quotelev1">&gt; OMPI_STATUS_SET macros, but I think the consensus was to fix the problem
</span><br>
<span class="quotelev1">&gt; in the Fortran layer. Indeed, the Fortran layer already routinely
</span><br>
<span class="quotelev1">&gt; converts between Fortran and C statuses. The problem was that we started
</span><br>
<span class="quotelev1">&gt; introducing optimizations to bypass the Fortran-to-C conversion and that
</span><br>
<span class="quotelev1">&gt; optimization was employed too liberally (e..g, in situations that would
</span><br>
<span class="quotelev1">&gt; introduce the alignment errors you're describing). My patch will clean
</span><br>
<span class="quotelev1">&gt; that up. I'll try to put it back in the next few hours.
</span><br>
<p>Sorry, I didn't notice the ticket 3218.
<br>
Now I've confirmed your commit r27403.
<br>
Your modification is better for my issue (3).
<br>
<p>With r27403, my patch for issue (1) and (2) needs modification.
<br>
I'll re-send modified patch in a few hours.
<br>
<p>Regards,
<br>
<p>Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11561.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>Previous message:</strong> <a href="11559.php">Eugene Loh: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>In reply to:</strong> <a href="11557.php">Eugene Loh: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11561.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>Reply:</strong> <a href="11561.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
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
