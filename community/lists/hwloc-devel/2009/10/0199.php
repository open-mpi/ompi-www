<?
$subject_val = "Re: [hwloc-devel] MPICH2 question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 10:20:22 2009" -->
<!-- isoreceived="20091021142022" -->
<!-- sent="Wed, 21 Oct 2009 16:20:17 +0200" -->
<!-- isosent="20091021142017" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] MPICH2 question" -->
<!-- id="20091021142017.GF4693_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4ADE61BF.3020807_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] MPICH2 question<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 10:20:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0200.php">Samuel Thibault: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Previous message:</strong> <a href="0198.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>In reply to:</strong> <a href="0189.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0201.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0201.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0207.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pavan Balaji, le Tue 20 Oct 2009 20:19:59 -0500, a &#233;crit :
<br>
<span class="quotelev3">&gt; &gt;&gt; I am not sure how hard it'd be to avoid errors during configure. Are we
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sure PKG_* macros or other external things will never use AC_MSG_ERROR ?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In principle ac macros always have an &quot;what if not found&quot; part which
</span><br>
<span class="quotelev2">&gt; &gt; allows us to fallback nicely.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that if you decide to take this approach, it is important that
</span><br>
<span class="quotelev1">&gt; neither the configure nor the make fail.
</span><br>
<p>I've checked configure, only the check for egrep may fail and does not
<br>
provide any fallback which we could have used. It's only used for the
<br>
documentation generation, Jeff, maybe we can find an alternative to
<br>
egrep for what we use it for?
<br>
<p>make is supposed to always succeed (unless bugs of course :) )
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0200.php">Samuel Thibault: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Previous message:</strong> <a href="0198.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>In reply to:</strong> <a href="0189.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0201.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0201.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0207.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 question"</a>
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
