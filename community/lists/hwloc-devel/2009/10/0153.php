<?
$subject_val = "Re: [hwloc-devel] dynamic cpuset_t?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 12:28:18 2009" -->
<!-- isoreceived="20091007162818" -->
<!-- sent="Wed, 7 Oct 2009 12:28:00 -0400" -->
<!-- isosent="20091007162800" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] dynamic cpuset_t?" -->
<!-- id="A1600483-9B5E-4CCA-9017-5066418DE9DC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4ACCBFE4.6040804_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-07 12:28:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0154.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Previous message:</strong> <a href="0152.php">Brice Goglin: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>In reply to:</strong> <a href="0152.php">Brice Goglin: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0154.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="0154.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 7, 2009, at 12:20 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt; &gt; One comment, I see that you have a
</span><br>
<span class="quotelev2">&gt; &gt;     hwloc_cpuset_copy (which I would have called  duplicate)
</span><br>
<span class="quotelev2">&gt; &gt; but copy in the sense of assignment is not really possible (i.e.
</span><br>
<span class="quotelev2">&gt; &gt; reusing an existing allocated cpuset, and initialize it with the
</span><br>
<span class="quotelev2">&gt; &gt; content of another.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to think about this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Can we cite any common cases where &quot;copy&quot; is used instead of  
<br>
&quot;duplicate&quot;?  &quot;copy&quot; is certainly shorter.  :-)
<br>
<p>MPI has MPI_COMM_DUP, MPI_TYPE_DUP (&quot;dup&quot;, not &quot;duplicate&quot;).
<br>
<p>If we don't like the verb &quot;copy&quot;, how about &quot;clone&quot;?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0154.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Previous message:</strong> <a href="0152.php">Brice Goglin: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>In reply to:</strong> <a href="0152.php">Brice Goglin: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0154.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="0154.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
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
