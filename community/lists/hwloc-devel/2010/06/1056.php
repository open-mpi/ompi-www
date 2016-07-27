<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2223";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 18 09:56:59 2010" -->
<!-- isoreceived="20100618135659" -->
<!-- sent="Fri, 18 Jun 2010 06:56:59 -0700" -->
<!-- isosent="20100618135659" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2223" -->
<!-- id="5984288B-C2D4-4055-AC25-6D5851FD782E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201006180723.o5I7N2Qv032542_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2223<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-18 09:56:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1057.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2223"</a>
<li><strong>Previous message:</strong> <a href="1055.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2222)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1057.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2223"</a>
<li><strong>Reply:</strong> <a href="1057.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2223"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just curious -- what's the intent of assigning to errno like this?  (I ask because I thought that middleware/applications were not supposed to assign to errno)
<br>
<p><p>On Jun 18, 2010, at 12:23 AM, &lt;sthibaul_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: sthibaul
</span><br>
<span class="quotelev1">&gt; Date: 2010-06-18 03:23:02 EDT (Fri, 18 Jun 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 2223
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2223">https://svn.open-mpi.org/trac/hwloc/changeset/2223</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; fix error reporting from pthread_getthrds_np
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/src/topology-aix.c |     2 +-                                     
</span><br>
<span class="quotelev1">&gt;    1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/src/topology-aix.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/src/topology-aix.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/src/topology-aix.c    2010-06-18 03:23:02 EDT (Fri, 18 Jun 2010)
</span><br>
<span class="quotelev1">&gt; @@ -146,7 +146,7 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    struct __pthrdsinfo info;
</span><br>
<span class="quotelev1">&gt;    int size;
</span><br>
<span class="quotelev1">&gt; -  if (pthread_getthrds_np(&amp;pthread, PTHRDSINFO_QUERY_TID, &amp;info, sizeof(info), NULL, &amp;size))
</span><br>
<span class="quotelev1">&gt; +  if ((errno = pthread_getthrds_np(&amp;pthread, PTHRDSINFO_QUERY_TID, &amp;info, sizeof(info), NULL, &amp;size)))
</span><br>
<span class="quotelev1">&gt;      return -1;
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      rsid_t who = { .at_tid = info.__pi_tid };
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
<li><strong>Next message:</strong> <a href="1057.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2223"</a>
<li><strong>Previous message:</strong> <a href="1055.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2222)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1057.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2223"</a>
<li><strong>Reply:</strong> <a href="1057.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2223"</a>
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
