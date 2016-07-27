<?
$subject_val = "Re: [hwloc-devel] MPICH2 question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 21:20:08 2009" -->
<!-- isoreceived="20091021012008" -->
<!-- sent="Tue, 20 Oct 2009 20:19:59 -0500" -->
<!-- isosent="20091021011959" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] MPICH2 question" -->
<!-- id="4ADE61BF.3020807_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20091021005237.GV5589_at_const.famille.thibault.fr" -->
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
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-20 21:19:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0190.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Previous message:</strong> <a href="0188.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1202)"</a>
<li><strong>In reply to:</strong> <a href="0187.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0199.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0199.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; I am not sure how hard it'd be to avoid errors during configure. Are we
</span><br>
<span class="quotelev2">&gt;&gt; sure PKG_* macros or other external things will never use AC_MSG_ERROR ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In principle ac macros always have an &quot;what if not found&quot; part which
</span><br>
<span class="quotelev1">&gt; allows us to fallback nicely.
</span><br>
<p>Note that if you decide to take this approach, it is important that
<br>
neither the configure nor the make fail.
<br>
<p>Alternatively, it is possible for me to build a sandbox sub-configure
<br>
within MPICH2 that'll fork/exec the hwloc configure directly and check
<br>
its exit status before deciding whether to include hwloc or not. This,
<br>
however, assumes that hwloc will either fail in configure or the library
<br>
&nbsp;will be successfully built and might return an error during
<br>
initialization. But even in this case &quot;make&quot; should not fail.
<br>
<p>Personally, I'd prefer the first approach, but can do with the second
<br>
approach as well.
<br>
<p>&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0190.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Previous message:</strong> <a href="0188.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1202)"</a>
<li><strong>In reply to:</strong> <a href="0187.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0199.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0199.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
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
