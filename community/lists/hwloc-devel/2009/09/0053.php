<?
$subject_val = "Re: [hwloc-devel] last API possible changes";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 20 18:12:14 2009" -->
<!-- isoreceived="20090920221214" -->
<!-- sent="Mon, 21 Sep 2009 00:12:07 +0200" -->
<!-- isosent="20090920221207" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] last API possible changes" -->
<!-- id="20090920221207.GV7131_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4AB1EA61.7090900_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] last API possible changes<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-20 18:12:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0054.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0052.php">Brice Goglin: "[hwloc-devel] last API possible changes"</a>
<li><strong>In reply to:</strong> <a href="0052.php">Brice Goglin: "[hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0054.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0054.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Thu 17 Sep 2009 09:50:57 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; * Do we actually need hwloc_get_type_order() or would
</span><br>
<span class="quotelev1">&gt; hwloc_compare_types() be enough? I can't find any example where some
</span><br>
<span class="quotelev1">&gt; type &quot;orders&quot; is not used for direct comparison.
</span><br>
<p>And the latter is probably clearer, indeed.
<br>
<p><span class="quotelev1">&gt; * I think the _above_cpuset() and _below_cpuset() function names are not
</span><br>
<span class="quotelev1">&gt; very clear. I think &quot;inside&quot; may be better that &quot;below&quot; (and rename
</span><br>
<span class="quotelev1">&gt; get_cpuset_objs into get_objs_inside_cpuset as well and move it nearby).
</span><br>
<span class="quotelev1">&gt; And maybe use &quot;covering&quot; instead of &quot;above&quot; since we already have
</span><br>
<span class="quotelev1">&gt; &quot;covering&quot; somewhere else?
</span><br>
<p>That should be fine, yes.
<br>
<p><span class="quotelev1">&gt; Also, we have __hwloc_restrict everywhere in the public API, but also in
</span><br>
<span class="quotelev1">&gt; the manpages? Should we convert the latter into a regular &quot;restrict&quot;
</span><br>
<span class="quotelev1">&gt; keyword ?
</span><br>
<p>I had tried before already through the .cfg and that didn't work.  Since
<br>
we now have our own Makefile rules, I've just added a sed call, which
<br>
also does the same for inline btw.
<br>
<p><span class="quotelev1">&gt; That's all for today :) Better fix this now instead of changing the ABI
</span><br>
<span class="quotelev1">&gt; after the first hwloc release.
</span><br>
<p>Sure :)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0054.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0052.php">Brice Goglin: "[hwloc-devel] last API possible changes"</a>
<li><strong>In reply to:</strong> <a href="0052.php">Brice Goglin: "[hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0054.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0054.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
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
