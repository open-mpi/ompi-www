<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 22 03:36:11 2010" -->
<!-- isoreceived="20101222083611" -->
<!-- sent="Wed, 22 Dec 2010 09:36:05 +0100" -->
<!-- isosent="20101222083605" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975" -->
<!-- id="4D11B875.3090108_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201012220828.oBM8StcV001976_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-22 03:36:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1752.php">Guy Streeter: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>Previous message:</strong> <a href="1750.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc6r2967)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1752.php">Guy Streeter: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>Reply:</strong> <a href="1752.php">Guy Streeter: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll backport this in 1.1 later, in case somebody wants to fix the
<br>
English speaking.
<br>
<p>Brice
<br>
<p><p><p>Le 22/12/2010 09:28, bgoglin_at_[hidden] a &#233;crit :
<br>
<span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2010-12-22 03:28:55 EST (Wed, 22 Dec 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 2975
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2975">https://svn.open-mpi.org/trac/hwloc/changeset/2975</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add a FAQ entry about HWLOC_API_VERSION
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/doc/hwloc.doxy |    36 ++++++++++++++++++++++++++++++++++++    
</span><br>
<span class="quotelev1">&gt;    1 files changed, 36 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/doc/hwloc.doxy
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/doc/hwloc.doxy	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/doc/hwloc.doxy	2010-12-22 03:28:55 EST (Wed, 22 Dec 2010)
</span><br>
<span class="quotelev1">&gt; @@ -1294,5 +1294,41 @@
</span><br>
<span class="quotelev1">&gt;  (that may for instance be transmitted between applications through a socket).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +\section faq_upgrade How do I handle API upgrades?
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +The hwloc interface is extended with every new major release.
</span><br>
<span class="quotelev1">&gt; +Any application using the hwloc API should be prepared to check at
</span><br>
<span class="quotelev1">&gt; +compile-time whether some features are available in the currently
</span><br>
<span class="quotelev1">&gt; +installed hwloc distribution.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +To check whether hwloc is at least 1.1, you should use:
</span><br>
<span class="quotelev1">&gt; +\verbatim
</span><br>
<span class="quotelev1">&gt; +#include &lt;hwloc.h&gt;
</span><br>
<span class="quotelev1">&gt; +#if HWLOC_API_VERSION &gt;= 0x00010100
</span><br>
<span class="quotelev1">&gt; +...
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +\endverbatim
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +One of the major changes in hwloc 1.1 is the addition of the bitmap
</span><br>
<span class="quotelev1">&gt; +API. It supersedes the now deprecated cpuset API which will be removed
</span><br>
<span class="quotelev1">&gt; +in a future hwloc release. It is strongly recommended to switch existing
</span><br>
<span class="quotelev1">&gt; +codes to the bitmap API. Keeping support for older hwloc versions is easy.
</span><br>
<span class="quotelev1">&gt; +For instance, if your code uses &lt;tt&gt;hwloc_cpuset_alloc&lt;/tt&gt;, you should use
</span><br>
<span class="quotelev1">&gt; +&lt;tt&gt;hwloc_bitmap_alloc&lt;/tt&gt; instead and add the following code to one of your
</span><br>
<span class="quotelev1">&gt; +common headers:
</span><br>
<span class="quotelev1">&gt; +\verbatim
</span><br>
<span class="quotelev1">&gt; +#include &lt;hwloc.h&gt;
</span><br>
<span class="quotelev1">&gt; +#if HWLOC_API_VERSION &lt; 0x00010100
</span><br>
<span class="quotelev1">&gt; +#define hwloc_bitmap_alloc hwloc_cpuset_alloc
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +\endverbatim
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Similarly, the hwloc 1.0 interface may be detected by comparing
</span><br>
<span class="quotelev1">&gt; +&lt;tt&gt;HWLOC_API_VERSION&lt;/tt&gt; with &lt;tt&gt;0x00010000&lt;/tt&gt;.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +hwloc 0.9 did not define any &lt;tt&gt;HWLOC_API_VERSION&lt;/tt&gt; but this very old
</span><br>
<span class="quotelev1">&gt; +release probably does not deserve support from your application anymore.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  */
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
<li><strong>Next message:</strong> <a href="1752.php">Guy Streeter: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>Previous message:</strong> <a href="1750.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc6r2967)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1752.php">Guy Streeter: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>Reply:</strong> <a href="1752.php">Guy Streeter: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
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
