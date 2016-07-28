<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24356";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  3 19:06:09 2011" -->
<!-- isoreceived="20110204000609" -->
<!-- sent="Thu, 3 Feb 2011 19:06:04 -0500" -->
<!-- isosent="20110204000604" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24356" -->
<!-- id="BC1059B9-3055-4AEC-97F4-5889B62F79F1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201102032353.p13NrMsA011530_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24356<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-03 19:06:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8959.php">Eugene Loh: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24356"</a>
<li><strong>Previous message:</strong> <a href="8957.php">Brad Benton: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8959.php">Eugene Loh: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24356"</a>
<li><strong>Reply:</strong> <a href="8959.php">Eugene Loh: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24356"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene --
<br>
<p>This ROMIO fix needs to go upstream.
<br>
<p><p><p><p>On Feb 3, 2011, at 6:53 PM, eugene_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: eugene
</span><br>
<span class="quotelev1">&gt; Date: 2011-02-03 18:53:21 EST (Thu, 03 Feb 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 24356
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24356">https://svn.open-mpi.org/trac/ompi/changeset/24356</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Some minor changes to help the openib BTL build and run on Solaris:
</span><br>
<span class="quotelev1">&gt; - poll() can return POLLRDNORM even if not requested (Solaris bug)
</span><br>
<span class="quotelev1">&gt; - MIN macro not defined in btl_openib.c
</span><br>
<span class="quotelev1">&gt;  and while we're at it, we clean up the MIN definition in ad_bgl_pset.h
</span><br>
<span class="quotelev1">&gt; - btl_openib_connect_rdmacm.c was calling rdma_destroy_id() twice
</span><br>
<span class="quotelev1">&gt;  leading to undefined behavior (a hang on Solaris)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/btl_openib.c                        |     3 +++                                     
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/btl_openib_async.c                  |     7 +++++++                                 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c |     6 +++++-                                  
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/io/romio/romio/adio/ad_bgl/ad_bgl_pset.h       |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   4 files changed, 16 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib.c	2011-02-03 18:53:21 EST (Thu, 03 Feb 2011)
</span><br>
<span class="quotelev1">&gt; @@ -70,6 +70,9 @@
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_UNISTD_H
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; +#ifndef MIN
</span><br>
<span class="quotelev1">&gt; +#define MIN(a,b) ((a)&lt;(b)?(a):(b))
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_module_t mca_btl_openib_module = {
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_async.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib_async.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_async.c	2011-02-03 18:53:21 EST (Thu, 03 Feb 2011)
</span><br>
<span class="quotelev1">&gt; @@ -432,6 +432,13 @@
</span><br>
<span class="quotelev1">&gt;                     /* no events */
</span><br>
<span class="quotelev1">&gt;                     break;
</span><br>
<span class="quotelev1">&gt;                 case POLLIN:
</span><br>
<span class="quotelev1">&gt; +#if defined(__SVR4) &amp;&amp; defined(__sun)
</span><br>
<span class="quotelev1">&gt; +                /*
</span><br>
<span class="quotelev1">&gt; +                 * Need workaround for Solaris IB user verbs since
</span><br>
<span class="quotelev1">&gt; +                 * &quot;Poll on IB async fd returns POLLRDNORM revent even though it is masked out&quot;
</span><br>
<span class="quotelev1">&gt; +                 */
</span><br>
<span class="quotelev1">&gt; +                case POLLIN | POLLRDNORM:
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;                     /* Processing our event */
</span><br>
<span class="quotelev1">&gt;                     if (0 == i) {
</span><br>
<span class="quotelev1">&gt;                         /* 0 poll we use for comunication with main thread */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c	2011-02-03 18:53:21 EST (Thu, 03 Feb 2011)
</span><br>
<span class="quotelev1">&gt; @@ -1922,7 +1922,11 @@
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; out5:
</span><br>
<span class="quotelev1">&gt; -    rdma_destroy_id(context-&gt;id);
</span><br>
<span class="quotelev1">&gt; +    /*
</span><br>
<span class="quotelev1">&gt; +     * Since rdma_create_id() succeeded, we need &quot;rdma_destroy_id(context-&gt;id)&quot;.
</span><br>
<span class="quotelev1">&gt; +     * But don't do it here since it's part of out4:OBJ_RELEASE(context),
</span><br>
<span class="quotelev1">&gt; +     * and we don't want to do it twice.
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; out4:
</span><br>
<span class="quotelev1">&gt;     opal_list_remove_first(&amp;(server-&gt;ids));
</span><br>
<span class="quotelev1">&gt;     OBJ_RELEASE(context);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/io/romio/romio/adio/ad_bgl/ad_bgl_pset.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/io/romio/romio/adio/ad_bgl/ad_bgl_pset.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/io/romio/romio/adio/ad_bgl/ad_bgl_pset.h	2011-02-03 18:53:21 EST (Thu, 03 Feb 2011)
</span><br>
<span class="quotelev1">&gt; @@ -47,7 +47,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #undef MIN
</span><br>
<span class="quotelev1">&gt; -#define MIN(a,b) ((a&lt;b ? a : b))
</span><br>
<span class="quotelev1">&gt; +#define MIN(a,b) ((a)&lt;(b) ? (a) : (b))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Default is to choose 8 aggregator nodes in each 32 CN pset. 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<li><strong>Next message:</strong> <a href="8959.php">Eugene Loh: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24356"</a>
<li><strong>Previous message:</strong> <a href="8957.php">Brad Benton: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8959.php">Eugene Loh: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24356"</a>
<li><strong>Reply:</strong> <a href="8959.php">Eugene Loh: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24356"</a>
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
