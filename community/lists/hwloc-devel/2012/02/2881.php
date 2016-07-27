<?
$subject_val = "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 19 15:37:26 2012" -->
<!-- isoreceived="20120219203726" -->
<!-- sent="Sun, 19 Feb 2012 12:37:15 -0800" -->
<!-- isosent="20120219203715" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk" -->
<!-- id="4F415D7B.1010801_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120219185410.GV4383_at_type.famille.thibault.fr" -->
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
<strong>Date:</strong> 2012-02-19 15:37:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2882.php">Samuel Thibault: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<li><strong>Previous message:</strong> <a href="2880.php">Samuel Thibault: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<li><strong>In reply to:</strong> <a href="2880.php">Samuel Thibault: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2882.php">Samuel Thibault: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/19/2012 10:54 AM, Samuel Thibault wrote:
<br>
[snip]
<br>
<span class="quotelev1">&gt; Does it still complain if using the following?
</span><br>
<span class="quotelev2">&gt;&gt; static __hwloc_inline const char *
</span><br>
<span class="quotelev2">&gt;&gt;   hwloc_obj_get_info_by_name(hwloc_obj_t obj, const char *name) __hwloc_attribute_pure
</span><br>
<span class="quotelev1">&gt; That'd be safer to make sure that the attribute is applied to the
</span><br>
<span class="quotelev1">&gt; function, not something else.
</span><br>
[snip]
<br>
<p>I should have mentioned that I had tried Samuel's suggested form first.
<br>
Yes, it complains but worse considers this form to by a syntax error 
<br>
rather than just warning about it:
<br>
<span class="quotelev1">&gt;   CC     topology.lo
</span><br>
<span class="quotelev1">&gt; &quot;/users/phh1/hwloc-trunk/include/hwloc.h&quot;, line 1247.1: 1506-277 (S) 
</span><br>
<span class="quotelev1">&gt; Syntax error: possible missing ';' or ','?
</span><br>
<span class="quotelev1">&gt; make[1]: *** [topology.lo] Error 1
</span><br>
<p>So, we are safer sticking with the current form and ignoring the warning.
<br>
<p>-Paul
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
<li><strong>Next message:</strong> <a href="2882.php">Samuel Thibault: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<li><strong>Previous message:</strong> <a href="2880.php">Samuel Thibault: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<li><strong>In reply to:</strong> <a href="2880.php">Samuel Thibault: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2882.php">Samuel Thibault: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
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
