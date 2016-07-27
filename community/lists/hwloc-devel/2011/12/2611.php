<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4041";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 12:19:32 2011" -->
<!-- isoreceived="20111213171932" -->
<!-- sent="Tue, 13 Dec 2011 18:19:23 +0100" -->
<!-- isosent="20111213171923" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4041" -->
<!-- id="4EE7891B.2040404_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201112131715.pBDHF9dR030968_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-13 12:19:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2612.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4041"</a>
<li><strong>Previous message:</strong> <a href="2610.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2612.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4041"</a>
<li><strong>Reply:</strong> <a href="2612.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4041"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You should also error out if --enable-cuda is given and cuda isn't
<br>
found. We got some complains about this for XML and PCI. Just duplicate
<br>
the xml_happy stuff for cuda.
<br>
<p>Brice
<br>
<p><p><p>Le 13/12/2011 18:15, sthibaul_at_[hidden] a &#233;crit :
<br>
<span class="quotelev1">&gt; Author: sthibaul
</span><br>
<span class="quotelev1">&gt; Date: 2011-12-13 12:15:09 EST (Tue, 13 Dec 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 4041
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/4041">https://svn.open-mpi.org/trac/hwloc/changeset/4041</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; add --disable-cuda
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    branches/cuda/config/hwloc_internal.m4 |     5 +++++                                   
</span><br>
<span class="quotelev1">&gt;    1 files changed, 5 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/cuda/config/hwloc_internal.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/cuda/config/hwloc_internal.m4	(original)
</span><br>
<span class="quotelev1">&gt; +++ branches/cuda/config/hwloc_internal.m4	2011-12-13 12:15:09 EST (Tue, 13 Dec 2011)
</span><br>
<span class="quotelev1">&gt; @@ -65,6 +65,11 @@
</span><br>
<span class="quotelev1">&gt;                    AS_HELP_STRING([--disable-pci],
</span><br>
<span class="quotelev1">&gt;                                   [Disable the PCI device discovery using libpci]))
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +    # CUDA?
</span><br>
<span class="quotelev1">&gt; +    AC_ARG_ENABLE([cuda],
</span><br>
<span class="quotelev1">&gt; +                  AS_HELP_STRING([--disable-cuda],
</span><br>
<span class="quotelev1">&gt; +                                 [Disable the CUDA device discovery using libcudart]))
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      # Linux libnuma
</span><br>
<span class="quotelev1">&gt;      AC_ARG_ENABLE([libnuma],
</span><br>
<span class="quotelev1">&gt;                    AS_HELP_STRING([--disable-libnuma],
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2612.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4041"</a>
<li><strong>Previous message:</strong> <a href="2610.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2612.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4041"</a>
<li><strong>Reply:</strong> <a href="2612.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4041"</a>
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
