<?
$subject_val = "Re: [OMPI devel] RFC: remove opal progress recursion depth counter";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 18 18:40:35 2013" -->
<!-- isoreceived="20131218234035" -->
<!-- sent="Wed, 18 Dec 2013 16:40:35 -0700" -->
<!-- isosent="20131218234035" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: remove opal progress recursion depth counter" -->
<!-- id="20131218234035.GG41700_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C036C2C0-A648-4806-BC83-387F4FC0F4F8_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: remove opal progress recursion depth counter<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-18 18:40:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13477.php">Siddhartha Jana: "Re: [OMPI devel] Recommended tool to measure packet counters"</a>
<li><strong>Previous message:</strong> <a href="13475.php">Ralph Castain: "Re: [OMPI devel] RFC: remove opal progress recursion depth counter"</a>
<li><strong>In reply to:</strong> <a href="13475.php">Ralph Castain: "Re: [OMPI devel] RFC: remove opal progress recursion depth counter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13484.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
<li><strong>Reply:</strong> <a href="13484.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Opps, yeah. Meant 1.7.5. If people agree with this change I could
<br>
possibly slip it in before Friday but that is unlikely.
<br>
<p>On Wed, Dec 18, 2013 at 03:32:36PM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Ummmm....1.7.4 is leaving the station on Fri, Nathan, so next Tues =&gt; will have to go into 1.7.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 18, 2013, at 3:23 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What: Remove the opal_progress_recursion_depth_counter from
</span><br>
<span class="quotelev2">&gt; &gt; opal_progress.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Why: This counter adds two atomic adds to the critical path when
</span><br>
<span class="quotelev2">&gt; &gt; OPAL_HAVE_THREADS is set (which is the case for most builds). I grepped
</span><br>
<span class="quotelev2">&gt; &gt; through ompi, orte, and opal to find where this value was being used and
</span><br>
<span class="quotelev2">&gt; &gt; did not find anything either inside or outside opal_progress.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When: I want this change to go into 1.7.4 (if possible) so setting a
</span><br>
<span class="quotelev2">&gt; &gt; quick timeout for next Tuesday.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Let me know if there is a good reason to keep this counter and it will
</span><br>
<span class="quotelev2">&gt; &gt; be spared.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan Hjelm
</span><br>
<span class="quotelev2">&gt; &gt; HPC-5, LANL
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13476/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13477.php">Siddhartha Jana: "Re: [OMPI devel] Recommended tool to measure packet counters"</a>
<li><strong>Previous message:</strong> <a href="13475.php">Ralph Castain: "Re: [OMPI devel] RFC: remove opal progress recursion depth counter"</a>
<li><strong>In reply to:</strong> <a href="13475.php">Ralph Castain: "Re: [OMPI devel] RFC: remove opal progress recursion depth counter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13484.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
<li><strong>Reply:</strong> <a href="13484.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
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
