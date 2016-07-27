<?
$subject_val = "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 19 15:53:00 2012" -->
<!-- isoreceived="20120219205300" -->
<!-- sent="Sun, 19 Feb 2012 12:52:46 -0800" -->
<!-- isosent="20120219205246" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk" -->
<!-- id="4F41611E.9060208_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120219204533.GR4383_at_type.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-19 15:52:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2884.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4323)"</a>
<li><strong>Previous message:</strong> <a href="2882.php">Samuel Thibault: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<li><strong>In reply to:</strong> <a href="2882.php">Samuel Thibault: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/19/2012 12:45 PM, Samuel Thibault wrote:
<br>
[snip[
<br>
<span class="quotelev1">&gt; Ah, right, it's an inline, so we need to declare it first with the
</span><br>
<span class="quotelev1">&gt; attribute, and then define it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static __hwloc_inline const char *
</span><br>
<span class="quotelev1">&gt; hwloc_obj_get_info_by_name(hwloc_obj_t obj, const char *name)  __hwloc_attribute_pure;
</span><br>
<span class="quotelev1">&gt; static __hwloc_inline const char *
</span><br>
<span class="quotelev1">&gt; hwloc_obj_get_info_by_name(hwloc_obj_t obj, const char *name)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; does it work that way?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<p>Yes.  That worked!
<br>
-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2884.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4323)"</a>
<li><strong>Previous message:</strong> <a href="2882.php">Samuel Thibault: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<li><strong>In reply to:</strong> <a href="2882.php">Samuel Thibault: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<!-- nextthread="start" -->
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
