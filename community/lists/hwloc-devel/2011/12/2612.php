<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4041";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 12:20:08 2011" -->
<!-- isoreceived="20111213172008" -->
<!-- sent="Tue, 13 Dec 2011 12:19:59 -0500" -->
<!-- isosent="20111213171959" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4041" -->
<!-- id="7F26F364-EBD8-46DE-8399-E6F388FECDEE_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4EE7891B.2040404_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4041<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-13 12:19:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2613.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2611.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4041"</a>
<li><strong>In reply to:</strong> <a href="2611.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4041"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p>On Dec 13, 2011, at 12:19 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; You should also error out if --enable-cuda is given and cuda isn't
</span><br>
<span class="quotelev1">&gt; found. We got some complains about this for XML and PCI. Just duplicate
</span><br>
<span class="quotelev1">&gt; the xml_happy stuff for cuda.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 13/12/2011 18:15, sthibaul_at_[hidden] a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Author: sthibaul
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2011-12-13 12:15:09 EST (Tue, 13 Dec 2011)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 4041
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/4041">https://svn.open-mpi.org/trac/hwloc/changeset/4041</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; add --disable-cuda
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;   branches/cuda/config/hwloc_internal.m4 |     5 +++++                                   
</span><br>
<span class="quotelev2">&gt;&gt;   1 files changed, 5 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: branches/cuda/config/hwloc_internal.m4
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- branches/cuda/config/hwloc_internal.m4	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ branches/cuda/config/hwloc_internal.m4	2011-12-13 12:15:09 EST (Tue, 13 Dec 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -65,6 +65,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;                   AS_HELP_STRING([--disable-pci],
</span><br>
<span class="quotelev2">&gt;&gt;                                  [Disable the PCI device discovery using libpci]))
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +    # CUDA?
</span><br>
<span class="quotelev2">&gt;&gt; +    AC_ARG_ENABLE([cuda],
</span><br>
<span class="quotelev2">&gt;&gt; +                  AS_HELP_STRING([--disable-cuda],
</span><br>
<span class="quotelev2">&gt;&gt; +                                 [Disable the CUDA device discovery using libcudart]))
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;     # Linux libnuma
</span><br>
<span class="quotelev2">&gt;&gt;     AC_ARG_ENABLE([libnuma],
</span><br>
<span class="quotelev2">&gt;&gt;                   AS_HELP_STRING([--disable-libnuma],
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="2613.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2611.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4041"</a>
<li><strong>In reply to:</strong> <a href="2611.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4041"</a>
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
