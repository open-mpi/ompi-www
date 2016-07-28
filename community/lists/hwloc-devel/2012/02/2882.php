<?
$subject_val = "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 19 15:45:38 2012" -->
<!-- isoreceived="20120219204538" -->
<!-- sent="Sun, 19 Feb 2012 21:45:33 +0100" -->
<!-- isosent="20120219204533" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk" -->
<!-- id="20120219204533.GR4383_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1454935974.878926.1329683870225.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-19 15:45:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2883.php">Paul H. Hargrove: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<li><strong>Previous message:</strong> <a href="2881.php">Paul H. Hargrove: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<li><strong>Maybe in reply to:</strong> <a href="2876.php">Paul H. Hargrove: "[hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2883.php">Paul H. Hargrove: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<li><strong>Reply:</strong> <a href="2883.php">Paul H. Hargrove: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul H. Hargrove, le Sun 19 Feb 2012 21:37:50 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; On 2/19/2012 10:54 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev2">&gt; &gt;Does it still complain if using the following?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;static __hwloc_inline const char *
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  hwloc_obj_get_info_by_name(hwloc_obj_t obj, const char *name) __hwloc_attribute_pure
</span><br>
<span class="quotelev2">&gt; &gt;That'd be safer to make sure that the attribute is applied to the
</span><br>
<span class="quotelev2">&gt; &gt;function, not something else.
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I should have mentioned that I had tried Samuel's suggested form first.
</span><br>
<span class="quotelev1">&gt; Yes, it complains but worse considers this form to by a syntax error rather
</span><br>
<span class="quotelev1">&gt; than just warning about it:
</span><br>
<span class="quotelev2">&gt; &gt;  CC     topology.lo
</span><br>
<span class="quotelev2">&gt; &gt;&quot;/users/phh1/hwloc-trunk/include/hwloc.h&quot;, line 1247.1: 1506-277 (S)
</span><br>
<span class="quotelev2">&gt; &gt;Syntax error: possible missing ';' or ','?
</span><br>
<span class="quotelev2">&gt; &gt;make[1]: *** [topology.lo] Error 1
</span><br>
<p>Ah, right, it's an inline, so we need to declare it first with the
<br>
attribute, and then define it:
<br>
<p>static __hwloc_inline const char *
<br>
hwloc_obj_get_info_by_name(hwloc_obj_t obj, const char *name)  __hwloc_attribute_pure;
<br>
static __hwloc_inline const char *
<br>
hwloc_obj_get_info_by_name(hwloc_obj_t obj, const char *name)
<br>
{
<br>
...
<br>
}
<br>
<p>does it work that way?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2883.php">Paul H. Hargrove: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<li><strong>Previous message:</strong> <a href="2881.php">Paul H. Hargrove: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<li><strong>Maybe in reply to:</strong> <a href="2876.php">Paul H. Hargrove: "[hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2883.php">Paul H. Hargrove: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<li><strong>Reply:</strong> <a href="2883.php">Paul H. Hargrove: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
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
