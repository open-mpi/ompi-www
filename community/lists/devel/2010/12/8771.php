<?
$subject_val = "Re: [OMPI devel] memory binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 09:29:47 2010" -->
<!-- isoreceived="20101213142947" -->
<!-- sent="Mon, 13 Dec 2010 09:29:42 -0500" -->
<!-- isosent="20101213142942" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] memory binding" -->
<!-- id="8864390B-CEEF-4A96-A8DD-BF275D8CCF80_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D02A211.7050703_at_anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] memory binding<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-13 09:29:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8772.php">Jeff Squyres: "[OMPI devel] Open MPI 1.5.1rc3"</a>
<li><strong>Previous message:</strong> <a href="8770.php">Guillaume Thouvenin: "[OMPI devel] [PATCH] OSC/RDMA: Fix a potential deadlock"</a>
<li><strong>In reply to:</strong> <a href="8768.php">David Singleton: "[OMPI devel] memory binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8773.php">David Singleton: "Re: [OMPI devel] memory binding"</a>
<li><strong>Reply:</strong> <a href="8773.php">David Singleton: "Re: [OMPI devel] memory binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 10, 2010, at 4:56 PM, David Singleton wrote:
<br>
<p><span class="quotelev1">&gt; Is there any plan to support NUMA memory binding for tasks?
</span><br>
<p>Yes.
<br>
<p>For some details on what we're planning for affinity, see the BOF slides that I presented at SC'10 on the OMPI web site (under &quot;publications&quot;).
<br>
<p><span class="quotelev1">&gt; Even with bind-to-core and memory affinity in 1.4.3 we were seeing 15-20%
</span><br>
<span class="quotelev1">&gt; variation in run times on a Nehalem cluster.  This turned out to be mostly due
</span><br>
<span class="quotelev1">&gt; to bad page placement.  Residual pagecache pages from the last job on a node (or
</span><br>
<span class="quotelev1">&gt; the memory of a suspended job in the case of preemption) could occasionally cause
</span><br>
<span class="quotelev1">&gt; a lot of non-local page placement.  We hacked the libnuma module to MPOL_BIND
</span><br>
<span class="quotelev1">&gt; tasks to their local memory and eliminated the majority of this variability.
</span><br>
<span class="quotelev1">&gt; We are currently running with this as default behaviour since its &quot;the right
</span><br>
<span class="quotelev1">&gt; thing&quot; for 99% of jobs (we have an environment variable to back off to affinity
</span><br>
<span class="quotelev1">&gt; for the rest).
</span><br>
<p>What OS and libnuma version are you running?  It has been my experience that libnuma can lie on RHEL 5 and earlier.  My (possibly flawed) understanding is that this is because of lack of proper kernel support; such &quot;proper&quot; kernel support was only added fairly recently (2.6.30something).
<br>
<p>That aside, it's somewhat disappointing that MPOL_PREFERRED is not working well and that you had to switch to MPOL_BIND.  :-(
<br>
<p>Should we add an MCA parameter to switch between BIND and PREFERRED, and perhaps default to BIND?
<br>
<p><span class="quotelev1">&gt; I'm guessing/hoping doing the above based on hwloc will be easier/more
</span><br>
<span class="quotelev1">&gt; maintainable. As a first pass, when is that likely to be an option?
</span><br>
<p>The first pass of hwloc support will *only* be replacing the paffinity modules.  Memory support using hwloc is definitely planned, but if there are kernel issues, hwloc won't be any better than libnuma.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="8772.php">Jeff Squyres: "[OMPI devel] Open MPI 1.5.1rc3"</a>
<li><strong>Previous message:</strong> <a href="8770.php">Guillaume Thouvenin: "[OMPI devel] [PATCH] OSC/RDMA: Fix a potential deadlock"</a>
<li><strong>In reply to:</strong> <a href="8768.php">David Singleton: "[OMPI devel] memory binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8773.php">David Singleton: "Re: [OMPI devel] memory binding"</a>
<li><strong>Reply:</strong> <a href="8773.php">David Singleton: "Re: [OMPI devel] memory binding"</a>
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
