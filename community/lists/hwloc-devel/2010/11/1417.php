<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2696";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  4 13:14:45 2010" -->
<!-- isoreceived="20101104171445" -->
<!-- sent="Thu, 04 Nov 2010 18:14:41 +0100" -->
<!-- isosent="20101104171441" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2696" -->
<!-- id="4CD2EA01.2030003_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201011041551.oA4FpgNJ031754_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2696<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-04 13:14:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1418.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Previous message:</strong> <a href="1416.php">Samuel Thibault: "Re: [hwloc-devel] doxygen CSS change?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do we want deprecated attributes for the cpuset API then ? Looks like
<br>
we'd have to switch from #define to static inlines to do so.
<br>
<p>Brice
<br>
<p><p>Le 04/11/2010 16:51, sthibaul_at_[hidden] a &#233;crit :
<br>
<span class="quotelev1">&gt; Author: sthibaul
</span><br>
<span class="quotelev1">&gt; Date: 2010-11-04 11:51:42 EDT (Thu, 04 Nov 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 2696
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2696">https://svn.open-mpi.org/trac/hwloc/changeset/2696</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Avoid breaking existing cpuset-using applications immediately. Include cpuset aliases by default for now.
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/include/hwloc.h |     1 +                                       
</span><br>
<span class="quotelev1">&gt;    1 files changed, 1 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/include/hwloc.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/include/hwloc.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/include/hwloc.h	2010-11-04 11:51:42 EDT (Thu, 04 Nov 2010)
</span><br>
<span class="quotelev1">&gt; @@ -35,6 +35,7 @@
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #include &lt;hwloc/bitmap.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;hwloc/cpuset.h&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #ifdef __cplusplus
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1418.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Previous message:</strong> <a href="1416.php">Samuel Thibault: "Re: [hwloc-devel] doxygen CSS change?"</a>
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
