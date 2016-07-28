<?
$subject_val = "Re: [hwloc-devel] MPICH2 question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 10:55:45 2009" -->
<!-- isoreceived="20091021145545" -->
<!-- sent="Wed, 21 Oct 2009 09:55:36 -0500" -->
<!-- isosent="20091021145536" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] MPICH2 question" -->
<!-- id="4ADF20E8.2020903_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20091021142017.GF4693_at_const.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2009-10-21 10:55:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0202.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Previous message:</strong> <a href="0200.php">Samuel Thibault: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>In reply to:</strong> <a href="0199.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0202.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0202.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am not sure how hard it'd be to avoid errors during configure. Are we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sure PKG_* macros or other external things will never use AC_MSG_ERROR ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In principle ac macros always have an &quot;what if not found&quot; part which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allows us to fallback nicely.
</span><br>
<span class="quotelev2">&gt;&gt; Note that if you decide to take this approach, it is important that
</span><br>
<span class="quotelev2">&gt;&gt; neither the configure nor the make fail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've checked configure, only the check for egrep may fail and does not
</span><br>
<span class="quotelev1">&gt; provide any fallback which we could have used. It's only used for the
</span><br>
<span class="quotelev1">&gt; documentation generation, Jeff, maybe we can find an alternative to
</span><br>
<span class="quotelev1">&gt; egrep for what we use it for?
</span><br>
<p>I made a quick pass as well. Here are some comments:
<br>
<p>1. I see a AC_PROG_CC_C99 in the configure.ac. Do you require the
<br>
compiler to be C99 capable always? If yes, then you might want to check
<br>
the return value $ac_cv_prog_cc_c99 and do something with it (maybe abort).
<br>
<p>2. I believe AM_CONDITIONAL is automake-1.11 specific. Can someone
<br>
verify this? If this is correct, then your AM_INIT_AUTOMAKE should
<br>
contain 1.11 as a prereq.
<br>
<p><span class="quotelev1">&gt; make is supposed to always succeed (unless bugs of course :) )
</span><br>
<p>Great! Thanks.
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
<li><strong>Next message:</strong> <a href="0202.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Previous message:</strong> <a href="0200.php">Samuel Thibault: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>In reply to:</strong> <a href="0199.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0202.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0202.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
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
