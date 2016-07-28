<?
$subject_val = "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 15 08:30:57 2012" -->
<!-- isoreceived="20121015123057" -->
<!-- sent="Mon, 15 Oct 2012 14:30:43 +0200" -->
<!-- isosent="20121015123043" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request" -->
<!-- id="F8513590-CB55-4CA1-8B6F-C42423FA3452_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DF152F4B8E08AE4AAF80927EA5DC03AC0E8A3656_at_G01JPEXMBYT02" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-15 08:30:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11600.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>Previous message:</strong> <a href="11598.php">N.M. Maclaren: "Re: [OMPI devel] MPI_Reduce() is losing precision"</a>
<li><strong>In reply to:</strong> <a href="11595.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11600.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>Reply:</strong> <a href="11600.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Takahiro,
<br>
<p>I fail to see the cases your patch addresses. I recognize I did not have the time to look over all the instances where we deal with persistent inactive requests, but at the first occurrence, the one in req_test.c line 68, the case you exhibit there is already covered by the test &quot;request-&gt;req_state == OMPI_REQUEST_INACTIVE&quot;. I see similar checks in all the other test/wait files. Basically, it doesn't matter that we leave the last returned error code on an inactive request, as we always return MPI_STATUS_EMPTY in the status for such requests.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;george.
<br>
<p>&nbsp;
<br>
On Oct 15, 2012, at 07:02 , &quot;Kawashima, Takahiro&quot; &lt;t-kawashima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Open MPI developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How is my updated patch?
</span><br>
<span class="quotelev1">&gt; If there is an another concern, I'll try to update it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The bugs are:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (1) MPI_SOURCE of MPI_Status for a null request must be MPI_ANY_SOURCE.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (2) MPI_Status for an inactive request must be an empty status.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (3) Possible BUS errors on sparc64 processors.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  r23554 fixed possible BUS errors on sparc64 processors.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  But the fix seems to be insufficient.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  We should use OMPI_STATUS_SET macro for all user-supplied
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  MPI_Status objects.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regarding #3, see also a trac 3218. I'm putting a fix back today. Sorry
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for the delay. One proposed solution was extending the use of the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_STATUS_SET macros, but I think the consensus was to fix the problem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the Fortran layer. Indeed, the Fortran layer already routinely
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; converts between Fortran and C statuses. The problem was that we started
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; introducing optimizations to bypass the Fortran-to-C conversion and that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; optimization was employed too liberally (e..g, in situations that would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; introduce the alignment errors you're describing). My patch will clean
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that up. I'll try to put it back in the next few hours.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry, I didn't notice the ticket 3218.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now I've confirmed your commit r27403.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your modification is better for my issue (3).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With r27403, my patch for issue (1) and (2) needs modification.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll re-send modified patch in a few hours.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The updated patch is attached.
</span><br>
<span class="quotelev2">&gt;&gt; This patch addresses bugs (1) and (2) in my previous mail
</span><br>
<span class="quotelev2">&gt;&gt; and fixes some typos in comments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11600.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>Previous message:</strong> <a href="11598.php">N.M. Maclaren: "Re: [OMPI devel] MPI_Reduce() is losing precision"</a>
<li><strong>In reply to:</strong> <a href="11595.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11600.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>Reply:</strong> <a href="11600.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
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
