<?
$subject_val = "Re: [hwloc-devel] dynamic cpuset_t?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 12:44:48 2009" -->
<!-- isoreceived="20091007164448" -->
<!-- sent="Wed, 7 Oct 2009 18:44:41 +0200" -->
<!-- isosent="20091007164441" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] dynamic cpuset_t?" -->
<!-- id="20091007164441.GM10570_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A1600483-9B5E-4CCA-9017-5066418DE9DC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] dynamic cpuset_t?<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-07 12:44:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0155.php">MPI Team: "[hwloc-devel] Create success (hwloc r0.9.1a1r1117)"</a>
<li><strong>Previous message:</strong> <a href="0153.php">Jeff Squyres: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>In reply to:</strong> <a href="0153.php">Jeff Squyres: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/09/0107.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Wed 07 Oct 2009 12:28:00 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Oct 7, 2009, at 12:20 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; One comment, I see that you have a
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     hwloc_cpuset_copy (which I would have called  duplicate)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; but copy in the sense of assignment is not really possible (i.e.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; reusing an existing allocated cpuset, and initialize it with the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; content of another.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I need to think about this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can we cite any common cases where &quot;copy&quot; is used instead of  
</span><br>
<span class="quotelev1">&gt; &quot;duplicate&quot;?  &quot;copy&quot; is certainly shorter.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI has MPI_COMM_DUP, MPI_TYPE_DUP (&quot;dup&quot;, not &quot;duplicate&quot;).
</span><br>
<p>dup seems fine to me, like strdup &amp; such.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0155.php">MPI Team: "[hwloc-devel] Create success (hwloc r0.9.1a1r1117)"</a>
<li><strong>Previous message:</strong> <a href="0153.php">Jeff Squyres: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>In reply to:</strong> <a href="0153.php">Jeff Squyres: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/09/0107.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
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
