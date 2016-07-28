<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25621";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 12 18:55:36 2011" -->
<!-- isoreceived="20111212235536" -->
<!-- sent="Mon, 12 Dec 2011 18:55:33 -0500" -->
<!-- isosent="20111212235533" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r25621" -->
<!-- id="9A292A05-BE85-460B-B355-290A6BF42B8D_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201112122052.pBCKqpTK012859_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r25621<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-12 18:55:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10065.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25621"</a>
<li><strong>Previous message:</strong> <a href="10063.php">George Bosilca: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10065.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25621"</a>
<li><strong>Reply:</strong> <a href="10065.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25621"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Broken !!!
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Dec 12, 2011, at 15:52 , hjelmn_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: hjelmn
</span><br>
<span class="quotelev1">&gt; Date: 2011-12-12 15:52:51 EST (Mon, 12 Dec 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 25621
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25621">https://svn.open-mpi.org/trac/ompi/changeset/25621</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; enable ptmalloc with using uGNI
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rmaps/load_balance/
</span><br>
<span class="quotelev1">&gt;      - copied from r25402, /trunk/orte/mca/rmaps/load_balance/
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/memory/linux/hooks.c |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;   1 files changed, 2 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/memory/linux/hooks.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/memory/linux/hooks.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/memory/linux/hooks.c	2011-12-12 15:52:51 EST (Mon, 12 Dec 2011)
</span><br>
<span class="quotelev1">&gt; @@ -791,7 +791,8 @@
</span><br>
<span class="quotelev1">&gt;         0 == stat(&quot;/dev/myri7&quot;, &amp;st) ||
</span><br>
<span class="quotelev1">&gt;         0 == stat(&quot;/dev/myri8&quot;, &amp;st) ||
</span><br>
<span class="quotelev1">&gt;         0 == stat(&quot;/dev/myri9&quot;, &amp;st) ||
</span><br>
<span class="quotelev1">&gt; -        0 == stat(&quot;/dev/ipath&quot;, &amp;st)) {
</span><br>
<span class="quotelev1">&gt; +        0 == stat(&quot;/dev/ipath&quot;, &amp;st) ||
</span><br>
<span class="quotelev1">&gt; +        0 == stat(&quot;/dev/kgni0&quot;, &amp;st)) {
</span><br>
<span class="quotelev1">&gt;         found_driver = true;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10065.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25621"</a>
<li><strong>Previous message:</strong> <a href="10063.php">George Bosilca: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10065.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25621"</a>
<li><strong>Reply:</strong> <a href="10065.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25621"</a>
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
