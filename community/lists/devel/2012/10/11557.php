<?
$subject_val = "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  4 09:53:33 2012" -->
<!-- isoreceived="20121004135333" -->
<!-- sent="Thu, 04 Oct 2012 06:53:22 -0700" -->
<!-- isosent="20121004135322" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request" -->
<!-- id="506D94D2.1010708_at_oracle.com" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="DF152F4B8E08AE4AAF80927EA5DC03AC0E892A1A_at_G01JPEXMBYT02" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-04 09:53:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11558.php">Brice Goglin: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>Previous message:</strong> <a href="11556.php">Jeff Squyres: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>In reply to:</strong> <a href="11555.php">Kawashima, Takahiro: "[OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11560.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>Reply:</strong> <a href="11560.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/4/2012 4:00 AM, Kawashima, Takahiro wrote:
<br>
<span class="quotelev1">&gt; Hi Open MPI developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found some bugs in Open MPI and attach a patch to fix them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The bugs are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1) MPI_SOURCE of MPI_Status for a null request must be MPI_ANY_SOURCE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (2) MPI_Status for an inactive request must be an empty status.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (3) Possible BUS errors on sparc64 processors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   r23554 fixed possible BUS errors on sparc64 processors.
</span><br>
<span class="quotelev1">&gt;   But the fix seems to be insufficient.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   We should use OMPI_STATUS_SET macro for all user-supplied
</span><br>
<span class="quotelev1">&gt;   MPI_Status objects.
</span><br>
Regarding #3, see also a trac 3218. I'm putting a fix back today. Sorry
<br>
for the delay. One proposed solution was extending the use of the
<br>
OMPI_STATUS_SET macros, but I think the consensus was to fix the problem
<br>
in the Fortran layer. Indeed, the Fortran layer already routinely
<br>
converts between Fortran and C statuses. The problem was that we started
<br>
introducing optimizations to bypass the Fortran-to-C conversion and that
<br>
optimization was employed too liberally (e..g, in situations that would
<br>
introduce the alignment errors you're describing). My patch will clean
<br>
that up. I'll try to put it back in the next few hours.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11558.php">Brice Goglin: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>Previous message:</strong> <a href="11556.php">Jeff Squyres: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>In reply to:</strong> <a href="11555.php">Kawashima, Takahiro: "[OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11560.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>Reply:</strong> <a href="11560.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
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
