<?
$subject_val = "[hwloc-devel] last API possible changes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 03:51:34 2009" -->
<!-- isoreceived="20090917075134" -->
<!-- sent="Thu, 17 Sep 2009 09:50:57 +0200" -->
<!-- isosent="20090917075057" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] last API possible changes" -->
<!-- id="4AB1EA61.7090900_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] last API possible changes<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-17 03:50:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0053.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0051.php">Jeff Squyres: "[hwloc-devel] svn up -- doh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0053.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0053.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0074.php">Brice Goglin: "Re: [hwloc-devel] last API possible changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>A couple other things that I am not sure about in the API:
<br>
<p>* In struct hwloc_topology_info, we talked about renaming &quot;is_fake&quot; into
<br>
something else since it means &quot;this topology does not come from the
<br>
local machine&quot; but it's not necessarily &quot;fake&quot;. Any idea?
<br>
<p>* Do we actually need hwloc_get_type_order() or would
<br>
hwloc_compare_types() be enough? I can't find any example where some
<br>
type &quot;orders&quot; is not used for direct comparison.
<br>
<p>* I find it a bit disturbing that get_obj_by_depth() and
<br>
get_nbobjs_by_depth() are in hwloc.h while the corresponding _by_type()
<br>
functions are in hwloc/helpers.h. The latter are indeed inline helpers
<br>
but I think it would be more clear to keep them together? Not sure about
<br>
get_system_obj(), this one may still belong to the helpers.
<br>
<p>* I think the _above_cpuset() and _below_cpuset() function names are not
<br>
very clear. I think &quot;inside&quot; may be better that &quot;below&quot; (and rename
<br>
get_cpuset_objs into get_objs_inside_cpuset as well and move it nearby).
<br>
And maybe use &quot;covering&quot; instead of &quot;above&quot; since we already have
<br>
&quot;covering&quot; somewhere else?
<br>
<p>Also, we have __hwloc_restrict everywhere in the public API, but also in
<br>
the manpages? Should we convert the latter into a regular &quot;restrict&quot;
<br>
keyword ?
<br>
<p>That's all for today :) Better fix this now instead of changing the ABI
<br>
after the first hwloc release.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0053.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0051.php">Jeff Squyres: "[hwloc-devel] svn up -- doh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0053.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0053.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0074.php">Brice Goglin: "Re: [hwloc-devel] last API possible changes"</a>
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
