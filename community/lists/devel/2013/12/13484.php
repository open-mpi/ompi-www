<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 09:42:51 2013" -->
<!-- isoreceived="20131219144251" -->
<!-- sent="Thu, 19 Dec 2013 14:42:37 +0000" -->
<!-- isosent="20131219144237" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter" -->
<!-- id="CED85231.1671A%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131218234035.GG41700_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 09:42:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13485.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>Previous message:</strong> <a href="13483.php">Andreas Sch&#228;fer: "[OMPI devel] Speedup for MPI_Dims_create()"</a>
<li><strong>In reply to:</strong> <a href="13476.php">Nathan Hjelm: "Re: [OMPI devel] RFC: remove opal progress recursion depth counter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13489.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
<li><strong>Reply:</strong> <a href="13489.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Someone who understands the mpi debugging handles code:
<br>
<p>The opal_progress_recursion_depth_counter and opal_progress_thread_counter
<br>
are both only used internally in opal_progress (for book keeping, but
<br>
never any decisions) and are declared in ompi_mpihandles_dll.c, but then
<br>
don't appear to be used.  Is there a disadvantage to:
<br>
<p>&nbsp;1) removing them from mpihandles_dll.c
<br>
<p>or, if that breaks ABI,
<br>
<p>&nbsp;2) Leaving them, but not doing the bookkeeping?
<br>
<p>It's fairly heavyweight bookkeeping, so I agree with Nathan, I'd like to
<br>
remove it.  But I'd like to remove it pre-1.7.4.  Which means today.
<br>
<p>Brian
<br>
<p><p>On 12/18/13 4:40 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Opps, yeah. Meant 1.7.5. If people agree with this change I could
</span><br>
<span class="quotelev1">&gt;possibly slip it in before Friday but that is unlikely.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Wed, Dec 18, 2013 at 03:32:36PM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ummmm....1.7.4 is leaving the station on Fri, Nathan, so next Tues =&gt;
</span><br>
<span class="quotelev2">&gt;&gt;will have to go into 1.7.5
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 18, 2013, at 3:23 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; What: Remove the opal_progress_recursion_depth_counter from
</span><br>
<span class="quotelev3">&gt;&gt; &gt; opal_progress.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Why: This counter adds two atomic adds to the critical path when
</span><br>
<span class="quotelev3">&gt;&gt; &gt; OPAL_HAVE_THREADS is set (which is the case for most builds). I
</span><br>
<span class="quotelev2">&gt;&gt;grepped
</span><br>
<span class="quotelev3">&gt;&gt; &gt; through ompi, orte, and opal to find where this value was being used
</span><br>
<span class="quotelev2">&gt;&gt;and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; did not find anything either inside or outside opal_progress.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; When: I want this change to go into 1.7.4 (if possible) so setting a
</span><br>
<span class="quotelev3">&gt;&gt; &gt; quick timeout for next Tuesday.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Let me know if there is a good reason to keep this counter and it will
</span><br>
<span class="quotelev3">&gt;&gt; &gt; be spared.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -Nathan Hjelm
</span><br>
<span class="quotelev3">&gt;&gt; &gt; HPC-5, LANL
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13485.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>Previous message:</strong> <a href="13483.php">Andreas Sch&#228;fer: "[OMPI devel] Speedup for MPI_Dims_create()"</a>
<li><strong>In reply to:</strong> <a href="13476.php">Nathan Hjelm: "Re: [OMPI devel] RFC: remove opal progress recursion depth counter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13489.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
<li><strong>Reply:</strong> <a href="13489.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
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
