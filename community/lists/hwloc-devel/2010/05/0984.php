<?
$subject_val = "Re: [hwloc-devel] Graceful abort for non-C99 compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 12 10:28:00 2010" -->
<!-- isoreceived="20100512142800" -->
<!-- sent="Wed, 12 May 2010 10:27:56 -0400" -->
<!-- isosent="20100512142756" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Graceful abort for non-C99 compilers" -->
<!-- id="218813A7-3668-44A1-BF1D-DB333CEB4AF8_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100511222934.GN4587_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Graceful abort for non-C99 compilers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-12 10:27:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0985.php">Jeff Squyres: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<li><strong>Previous message:</strong> <a href="0983.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2087)"</a>
<li><strong>In reply to:</strong> <a href="0982.php">Samuel Thibault: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0987.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm; not quite.  We need the AC_MSG_ERROR to be at the top level so that it doesn't force embedded usages to error our if hwloc can't be built (e.g., the top level may decide to proceed without hwloc).  $2 and $3 are for success / failure.
<br>
<p>I'll adjust.
<br>
<p><p>On May 11, 2010, at 6:29 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Pavan Balaji, le Mon 10 May 2010 20:56:19 -0500, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; I understand that hwloc requires C99 support. However, for compilers
</span><br>
<span class="quotelev2">&gt; &gt; that don't support C99, would you be willing to gracefully abort during
</span><br>
<span class="quotelev2">&gt; &gt; configure instead of failing at make time?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right, thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="0985.php">Jeff Squyres: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<li><strong>Previous message:</strong> <a href="0983.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2087)"</a>
<li><strong>In reply to:</strong> <a href="0982.php">Samuel Thibault: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0987.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean"</a>
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
