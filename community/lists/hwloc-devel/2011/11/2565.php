<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4006";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 30 05:59:22 2011" -->
<!-- isoreceived="20111130105922" -->
<!-- sent="Wed, 30 Nov 2011 05:59:18 -0500" -->
<!-- isosent="20111130105918" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4006" -->
<!-- id="F56CF5C2-0A9F-4C63-8AB6-4A16E6F94DC1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201111301013.pAUADoWL008315_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4006<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-30 05:59:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2566.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4006"</a>
<li><strong>Previous message:</strong> <a href="2564.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.1rc1r4004)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2566.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4006"</a>
<li><strong>Maybe reply:</strong> <a href="2566.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4006"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  Already, this small feature is beginning to look unattractive.  :-\
<br>
<p>I see how libnuma is Linux-specific; but is the level of memory binding uniform across all other OS's?  I.e., do we need to print the same kind of granularity of memory support for other OS's?
<br>
<p><p>On Nov 30, 2011, at 5:13 AM, bgoglin_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2011-11-30 05:13:49 EST (Wed, 30 Nov 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 4006
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/4006">https://svn.open-mpi.org/trac/hwloc/changeset/4006</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Only show Memory support status at the end of configure on Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We only print Linux-specific features there, we don't want to show
</span><br>
<span class="quotelev1">&gt; &quot;none&quot; on other OSes if it's wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/configure.ac |     9 +++++++++                               
</span><br>
<span class="quotelev1">&gt;   1 files changed, 9 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/configure.ac
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/configure.ac	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/configure.ac	2011-11-30 05:13:49 EST (Wed, 30 Nov 2011)
</span><br>
<span class="quotelev1">&gt; @@ -183,6 +183,7 @@
</span><br>
<span class="quotelev1">&gt;       [append_env hwloc_numa_status &quot;migrate pages&quot;])
</span><br>
<span class="quotelev1">&gt; AS_IF([test &quot;$hwloc_numa_status&quot; = &quot;&quot;], [hwloc_numa_status=none])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +# Beginning of generic support
</span><br>
<span class="quotelev1">&gt; cat &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; @@ -191,7 +192,15 @@
</span><br>
<span class="quotelev1">&gt; Probe / display PCI devices: $hwloc_pci_happy
</span><br>
<span class="quotelev1">&gt; Graphical output (Cairo):    $hwloc_cairo_happy
</span><br>
<span class="quotelev1">&gt; XML input / output:          $hwloc_xml_status
</span><br>
<span class="quotelev1">&gt; +EOF
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Linux specific support
</span><br>
<span class="quotelev1">&gt; +AS_IF([test &quot;$hwloc_linux&quot; = &quot;yes&quot;], [cat &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt; Memory support:              $hwloc_numa_status
</span><br>
<span class="quotelev1">&gt; +EOF])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# End of generic support
</span><br>
<span class="quotelev1">&gt; +cat &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
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
<li><strong>Next message:</strong> <a href="2566.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4006"</a>
<li><strong>Previous message:</strong> <a href="2564.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.1rc1r4004)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2566.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4006"</a>
<li><strong>Maybe reply:</strong> <a href="2566.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4006"</a>
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
