<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3246";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  7 05:32:26 2011" -->
<!-- isoreceived="20110307103226" -->
<!-- sent="Mon, 07 Mar 2011 11:32:22 +0100" -->
<!-- isosent="20110307103222" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3246" -->
<!-- id="4D74B436.4010501_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201103071030.p27AUs7T029988_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3246<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-07 05:32:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2041.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3246"</a>
<li><strong>Previous message:</strong> <a href="2039.php">Brice Goglin: "Re: [hwloc-devel] pgi 11.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2041.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3246"</a>
<li><strong>Maybe reply:</strong> <a href="2041.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3246"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This goes with the C99 removal. It seems to fix debug-enabled build with
<br>
both gcc and pgi. But I am not familiar with valists, so somebody please
<br>
double-check.
<br>
<p>Brice
<br>
<p><p><p><p>Le 07/03/2011 11:30, bgoglin_at_[hidden] a &#233;crit :
<br>
<span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2011-03-07 05:30:54 EST (Mon, 07 Mar 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 3246
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/3246">https://svn.open-mpi.org/trac/hwloc/changeset/3246</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix va_start invokation in hwloc_debug
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/include/private/debug.h |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;    1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/include/private/debug.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/include/private/debug.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/include/private/debug.h	2011-03-07 05:30:54 EST (Mon, 07 Mar 2011)
</span><br>
<span class="quotelev1">&gt; @@ -23,7 +23,7 @@
</span><br>
<span class="quotelev1">&gt;  #ifdef HWLOC_DEBUG
</span><br>
<span class="quotelev1">&gt;      va_list ap;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -    va_start(s, ap);
</span><br>
<span class="quotelev1">&gt; +    va_start(ap, s);
</span><br>
<span class="quotelev1">&gt;      vfprintf(stderr, s, ap);
</span><br>
<span class="quotelev1">&gt;      va_end(ap);
</span><br>
<span class="quotelev1">&gt;  #endif
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
<li><strong>Next message:</strong> <a href="2041.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3246"</a>
<li><strong>Previous message:</strong> <a href="2039.php">Brice Goglin: "Re: [hwloc-devel] pgi 11.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2041.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3246"</a>
<li><strong>Maybe reply:</strong> <a href="2041.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3246"</a>
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
