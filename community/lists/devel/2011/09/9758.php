<?
$subject_val = "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 09:55:18 2011" -->
<!-- isoreceived="20110912135518" -->
<!-- sent="Mon, 12 Sep 2011 09:55:13 -0400" -->
<!-- isosent="20110912135513" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen" -->
<!-- id="114B8799-9A87-4DB3-80E4-106E18FB8FEC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="00f901cc7152$526e5080$f74af180$_at_lloyd@wattsys.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 09:55:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9759.php">Jeff Squyres: "[OMPI devel] Availability of hwloc topology info"</a>
<li><strong>Previous message:</strong> <a href="9757.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>In reply to:</strong> <a href="9757.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OPAL_HAVE_HWLOC will always be defined to 0 or 1.
<br>
<p><p>On Sep 12, 2011, at 9:46 AM, Kenneth Lloyd wrote:
<br>
<p><span class="quotelev1">&gt; According to <a href="http://gcc.gnu.org/onlinedocs/cpp/If.html">http://gcc.gnu.org/onlinedocs/cpp/If.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;The `#if' directive allows you to test the value of an arithmetic
</span><br>
<span class="quotelev1">&gt; expression, rather than the mere existence of one macro.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the objective to test for the existence of the macro, its value, or its
</span><br>
<span class="quotelev1">&gt; value IFF it exists?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ken Lloyd
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Monday, September 12, 2011 7:07 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 12, 2011, at 8:51 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *** Remember that although the opal_hwloc_topology global variable will
</span><br>
<span class="quotelev1">&gt; always be available, ##IT MAY BE NULL## on platforms where hwloc was
</span><br>
<span class="quotelev1">&gt; compiled out / not supported.  Therefore, you MUST protect access to hwloc
</span><br>
<span class="quotelev1">&gt; API calls with #if OPAL_HAVE_HWLOC!  See the original RFC text below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oops!  Ralph just reminded me that this was slightly inaccurate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If hwloc is not present, then the global variable opal_hwloc_topology won't
</span><br>
<span class="quotelev1">&gt; be present at all (because its corresponding hwloc type won't be available).
</span><br>
<span class="quotelev1">&gt; Hence, the example in the original RFC isn't quite right:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (NULL != opal_hwloc_topology) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #if OPAL_HAVE_HWLOC
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     // ...use hwloc API, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This really should be:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if OPAL_HAVE_HWLOC
</span><br>
<span class="quotelev1">&gt;  if (NULL != opal_hwloc_topology) {
</span><br>
<span class="quotelev1">&gt;      // ...use hwloc API, etc.
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the confusion!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; No virus found in this message.
</span><br>
<span class="quotelev1">&gt; Checked by AVG - www.avg.com
</span><br>
<span class="quotelev1">&gt; Version: 10.0.1392 / Virus Database: 1520/3891 - Release Date: 09/11/11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="9759.php">Jeff Squyres: "[OMPI devel] Availability of hwloc topology info"</a>
<li><strong>Previous message:</strong> <a href="9757.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>In reply to:</strong> <a href="9757.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
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
