<?
$subject_val = "Re: [hwloc-devel] More memory binding questions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 10:19:39 2011" -->
<!-- isoreceived="20110106151939" -->
<!-- sent="Thu, 6 Jan 2011 10:19:15 -0500" -->
<!-- isosent="20110106151915" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] More memory binding questions" -->
<!-- id="BE93ED04-DDD9-464E-AAD6-E117CC0B05E7_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20110106065658.GB5776_at_const.bordeaux.inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 10:19:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1800.php">Guy Streeter: "[hwloc-devel] documentation/implementation questions with the snprintf routines"</a>
<li><strong>Previous message:</strong> <a href="1798.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>In reply to:</strong> <a href="1798.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perfect; thanks!  Commit coming shortly.
<br>
<p>On Jan 6, 2011, at 1:56 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres, le Thu 06 Jan 2011 03:39:28 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; * \note HWLOC_MEMBIND_STRICT is only supported with this function on
</span><br>
<span class="quotelev2">&gt;&gt; * some systems.  If it is specified on an unsupported system, -1 is
</span><br>
<span class="quotelev2">&gt;&gt; * returned and errno is set to ENOSYS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Err, not exactly: there is currently no system where hwloc_get_membind
</span><br>
<span class="quotelev1">&gt; is supported without STRICT but not supported with STRICT.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * If HWLOC_MEMBIND_STRICT is not specified, or if all the process'
</span><br>
<span class="quotelev2">&gt;&gt; * (or thread's) pages have the same memory binding policy,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; policy _and nodeset_ (i.e. actually just one node).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; \p nodeset
</span><br>
<span class="quotelev2">&gt;&gt; * is cleared.  Each page is then examined and has the bit set in \p
</span><br>
<span class="quotelev2">&gt;&gt; * nodeset corresponding to the NUMA node where it is located.  The
</span><br>
<span class="quotelev2">&gt;&gt; * resulting \p nodeset represents the set of NUMA nodes containing
</span><br>
<span class="quotelev2">&gt;&gt; * all the pages in the process (or thread).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samudl
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1800.php">Guy Streeter: "[hwloc-devel] documentation/implementation questions with the snprintf routines"</a>
<li><strong>Previous message:</strong> <a href="1798.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>In reply to:</strong> <a href="1798.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
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
