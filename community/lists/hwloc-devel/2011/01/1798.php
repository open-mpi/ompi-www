<?
$subject_val = "Re: [hwloc-devel] More memory binding questions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 01:57:07 2011" -->
<!-- isoreceived="20110106065707" -->
<!-- sent="Thu, 6 Jan 2011 07:56:59 +0100" -->
<!-- isosent="20110106065659" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] More memory binding questions" -->
<!-- id="20110106065658.GB5776_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200891155.2496555.1294281568461.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] More memory binding questions<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 01:56:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1799.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Previous message:</strong> <a href="1797.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Maybe in reply to:</strong> <a href="1773.php">Jeff Squyres: "[hwloc-devel] More memory binding questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1799.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Reply:</strong> <a href="1799.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Thu 06 Jan 2011 03:39:28 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt;  * \note HWLOC_MEMBIND_STRICT is only supported with this function on
</span><br>
<span class="quotelev1">&gt;  * some systems.  If it is specified on an unsupported system, -1 is
</span><br>
<span class="quotelev1">&gt;  * returned and errno is set to ENOSYS.
</span><br>
<p>Err, not exactly: there is currently no system where hwloc_get_membind
<br>
is supported without STRICT but not supported with STRICT.
<br>
<p><span class="quotelev1">&gt;  * If HWLOC_MEMBIND_STRICT is not specified, or if all the process'
</span><br>
<span class="quotelev1">&gt;  * (or thread's) pages have the same memory binding policy,
</span><br>
<p>policy _and nodeset_ (i.e. actually just one node).
<br>
<p><span class="quotelev1">&gt; \p nodeset
</span><br>
<span class="quotelev1">&gt;  * is cleared.  Each page is then examined and has the bit set in \p
</span><br>
<span class="quotelev1">&gt;  * nodeset corresponding to the NUMA node where it is located.  The
</span><br>
<span class="quotelev1">&gt;  * resulting \p nodeset represents the set of NUMA nodes containing
</span><br>
<span class="quotelev1">&gt;  * all the pages in the process (or thread).
</span><br>
<p>Samudl
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1799.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Previous message:</strong> <a href="1797.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Maybe in reply to:</strong> <a href="1773.php">Jeff Squyres: "[hwloc-devel] More memory binding questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1799.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Reply:</strong> <a href="1799.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
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
