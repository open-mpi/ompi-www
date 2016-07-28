<?
$subject_val = "[OMPI devel] mixing multiple things in a single commit";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 13:33:43 2014" -->
<!-- isoreceived="20140311173343" -->
<!-- sent="Tue, 11 Mar 2014 17:33:41 +0000" -->
<!-- isosent="20140311173341" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] mixing multiple things in a single commit" -->
<!-- id="CD7E2B11-FF5D-438E-96B8-F98B96A30223_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140311172733.A36B1160E62_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] mixing multiple things in a single commit<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-11 13:33:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14324.php">Jeff Squyres (jsquyres): "[OMPI devel] Proposed 1.7.5 shared library version numbers"</a>
<li><strong>Previous message:</strong> <a href="14322.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora	rawhide"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mellanox --
<br>
<p>I realize that we're not always super careful about separating commits, but this one commit contained 2 wholly separate things.
<br>
<p>Can you please separate such obvious different things into multiple commits in the future?  Thanks.
<br>
<p><p><p>On Mar 11, 2014, at 1:27 PM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev1">&gt; Date: 2014-03-11 13:27:33 EDT (Tue, 11 Mar 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 30995
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/30995">https://svn.open-mpi.org/trac/ompi/changeset/30995</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; OSHMEM: various fixes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - -check-shmem-params is OFF by default. It checks OSHMEM API params and will abort on bad input
</span><br>
<span class="quotelev1">&gt; - hcoll do not save fallback coll pointers for unsupported collectives.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; fixed by Val, Roman, reviewed by Miked/Igor
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cmr=v1.7.5:reviewer=ompi-rm1.7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/config/oshmem_configure_options.m4      |    10 +++++-----                              
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/coll/hcoll/coll_hcoll_module.c |    37 +++++++++++++++++++++++--------------   
</span><br>
<span class="quotelev1">&gt;   2 files changed, 28 insertions(+), 19 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/config/oshmem_configure_options.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/config/oshmem_configure_options.m4	Tue Mar 11 12:35:08 2014	(r30994)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/oshmem_configure_options.m4	2014-03-11 13:27:33 EDT (Tue, 11 Mar 2014)	(r30995)
</span><br>
<span class="quotelev1">&gt; @@ -49,15 +49,15 @@
</span><br>
<span class="quotelev1">&gt; AC_MSG_CHECKING([if want OSHMEM API parameter checking])
</span><br>
<span class="quotelev1">&gt; AC_ARG_WITH(oshmem-param-check,
</span><br>
<span class="quotelev1">&gt;     AC_HELP_STRING([--oshmem-param-check(=VALUE)],
</span><br>
<span class="quotelev1">&gt; -                   [behavior of OSHMEM API function parameter checking.  Valid values are: always, never.  If --with-oshmem-param-check is specified with no VALUE argument, it is equivalent to a VALUE of &quot;always&quot;; --without-oshmem-param-check is equivalent to &quot;never&quot; (default: always).]))
</span><br>
<span class="quotelev1">&gt; -shmem_param_check=1
</span><br>
<span class="quotelev1">&gt; +                   [behavior of OSHMEM API function parameter checking.  Valid values are: always, never.  If --with-oshmem-param-check is specified with no VALUE argument, it is equivalent to a VALUE of &quot;always&quot;; --without-oshmem-param-check is equivalent to &quot;never&quot; (default: never).]))
</span><br>
<span class="quotelev1">&gt; +shmem_param_check=0
</span><br>
<span class="quotelev1">&gt; if test &quot;$with_oshmem_param_check&quot; = &quot;no&quot; -o \
</span><br>
<span class="quotelev1">&gt; -    &quot;$with_oshmem_param_check&quot; = &quot;never&quot;; then
</span><br>
<span class="quotelev1">&gt; +    &quot;$with_oshmem_param_check&quot; = &quot;never&quot; -o \
</span><br>
<span class="quotelev1">&gt; +    -z &quot;$with_oshmem_param_check&quot;; then
</span><br>
<span class="quotelev1">&gt;     shmem_param_check=0
</span><br>
<span class="quotelev1">&gt;     AC_MSG_RESULT([never])
</span><br>
<span class="quotelev1">&gt; elif test &quot;$with_oshmem_param_check&quot; = &quot;yes&quot; -o \
</span><br>
<span class="quotelev1">&gt; -    &quot;$with_oshmem_param_check&quot; = &quot;always&quot; -o \
</span><br>
<span class="quotelev1">&gt; -    -z &quot;$with_oshmem_param_check&quot;; then
</span><br>
<span class="quotelev1">&gt; +    &quot;$with_oshmem_param_check&quot; = &quot;always&quot;; then
</span><br>
<span class="quotelev1">&gt;     shmem_param_check=1
</span><br>
<span class="quotelev1">&gt;     AC_MSG_RESULT([always])
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/coll/hcoll/coll_hcoll_module.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/coll/hcoll/coll_hcoll_module.c	Tue Mar 11 12:35:08 2014	(r30994)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/coll/hcoll/coll_hcoll_module.c	2014-03-11 13:27:33 EDT (Tue, 11 Mar 2014)	(r30995)
</span><br>
<span class="quotelev1">&gt; @@ -67,9 +67,15 @@
</span><br>
<span class="quotelev1">&gt;     if (hcoll_module-&gt;hcoll_context != NULL){
</span><br>
<span class="quotelev1">&gt;         OBJ_RELEASE(hcoll_module-&gt;previous_barrier_module);
</span><br>
<span class="quotelev1">&gt;         OBJ_RELEASE(hcoll_module-&gt;previous_bcast_module);
</span><br>
<span class="quotelev1">&gt; -        OBJ_RELEASE(hcoll_module-&gt;previous_reduce_module);
</span><br>
<span class="quotelev1">&gt;         OBJ_RELEASE(hcoll_module-&gt;previous_allreduce_module);
</span><br>
<span class="quotelev1">&gt;         OBJ_RELEASE(hcoll_module-&gt;previous_allgather_module);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        OBJ_RELEASE(hcoll_module-&gt;previous_ibarrier_module);
</span><br>
<span class="quotelev1">&gt; +        OBJ_RELEASE(hcoll_module-&gt;previous_ibcast_module);
</span><br>
<span class="quotelev1">&gt; +        OBJ_RELEASE(hcoll_module-&gt;previous_iallreduce_module);
</span><br>
<span class="quotelev1">&gt; +        OBJ_RELEASE(hcoll_module-&gt;previous_iallgather_module);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /*
</span><br>
<span class="quotelev1">&gt;         OBJ_RELEASE(hcoll_module-&gt;previous_allgatherv_module);
</span><br>
<span class="quotelev1">&gt;         OBJ_RELEASE(hcoll_module-&gt;previous_gather_module);
</span><br>
<span class="quotelev1">&gt;         OBJ_RELEASE(hcoll_module-&gt;previous_gatherv_module);
</span><br>
<span class="quotelev1">&gt; @@ -77,10 +83,8 @@
</span><br>
<span class="quotelev1">&gt;         OBJ_RELEASE(hcoll_module-&gt;previous_alltoallv_module);
</span><br>
<span class="quotelev1">&gt;         OBJ_RELEASE(hcoll_module-&gt;previous_alltoallw_module);
</span><br>
<span class="quotelev1">&gt;         OBJ_RELEASE(hcoll_module-&gt;previous_reduce_scatter_module);
</span><br>
<span class="quotelev1">&gt; -        OBJ_RELEASE(hcoll_module-&gt;previous_ibarrier_module);
</span><br>
<span class="quotelev1">&gt; -        OBJ_RELEASE(hcoll_module-&gt;previous_ibcast_module);
</span><br>
<span class="quotelev1">&gt; -        OBJ_RELEASE(hcoll_module-&gt;previous_iallreduce_module);
</span><br>
<span class="quotelev1">&gt; -        OBJ_RELEASE(hcoll_module-&gt;previous_iallgather_module);
</span><br>
<span class="quotelev1">&gt; +        OBJ_RELEASE(hcoll_module-&gt;previous_reduce_module);
</span><br>
<span class="quotelev1">&gt; +        */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         context_destroyed = 0;
</span><br>
<span class="quotelev1">&gt;         hcoll_destroy_context(hcoll_module-&gt;hcoll_context,
</span><br>
<span class="quotelev1">&gt; @@ -108,21 +112,26 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     HCOL_SAVE_PREV_COLL_API(barrier);
</span><br>
<span class="quotelev1">&gt;     HCOL_SAVE_PREV_COLL_API(bcast);
</span><br>
<span class="quotelev1">&gt; -    HCOL_SAVE_PREV_COLL_API(reduce);
</span><br>
<span class="quotelev1">&gt;     HCOL_SAVE_PREV_COLL_API(allreduce);
</span><br>
<span class="quotelev1">&gt;     HCOL_SAVE_PREV_COLL_API(allgather);
</span><br>
<span class="quotelev1">&gt; -    HCOL_SAVE_PREV_COLL_API(allgatherv);
</span><br>
<span class="quotelev1">&gt; -    HCOL_SAVE_PREV_COLL_API(gather);
</span><br>
<span class="quotelev1">&gt; -    HCOL_SAVE_PREV_COLL_API(gatherv);
</span><br>
<span class="quotelev1">&gt; -    HCOL_SAVE_PREV_COLL_API(alltoall);
</span><br>
<span class="quotelev1">&gt; -    HCOL_SAVE_PREV_COLL_API(alltoallv);
</span><br>
<span class="quotelev1">&gt; -    HCOL_SAVE_PREV_COLL_API(alltoallw);
</span><br>
<span class="quotelev1">&gt; -    HCOL_SAVE_PREV_COLL_API(reduce_scatter);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     HCOL_SAVE_PREV_COLL_API(ibarrier);
</span><br>
<span class="quotelev1">&gt;     HCOL_SAVE_PREV_COLL_API(ibcast);
</span><br>
<span class="quotelev1">&gt;     HCOL_SAVE_PREV_COLL_API(iallreduce);
</span><br>
<span class="quotelev1">&gt;     HCOL_SAVE_PREV_COLL_API(iallgather);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    /*
</span><br>
<span class="quotelev1">&gt; +      These collectives are not yet part of hcoll, so
</span><br>
<span class="quotelev1">&gt; +      don't retain them on hcoll module
</span><br>
<span class="quotelev1">&gt; +    HCOL_SAVE_PREV_COLL_API(reduce_scatter);
</span><br>
<span class="quotelev1">&gt; +    HCOL_SAVE_PREV_COLL_API(gather);
</span><br>
<span class="quotelev1">&gt; +    HCOL_SAVE_PREV_COLL_API(reduce);
</span><br>
<span class="quotelev1">&gt; +    HCOL_SAVE_PREV_COLL_API(allgatherv);
</span><br>
<span class="quotelev1">&gt; +    HCOL_SAVE_PREV_COLL_API(gatherv);
</span><br>
<span class="quotelev1">&gt; +    HCOL_SAVE_PREV_COLL_API(alltoall);
</span><br>
<span class="quotelev1">&gt; +    HCOL_SAVE_PREV_COLL_API(alltoallv);
</span><br>
<span class="quotelev1">&gt; +    HCOL_SAVE_PREV_COLL_API(alltoallw);
</span><br>
<span class="quotelev1">&gt; +    */
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -275,7 +284,7 @@
</span><br>
<span class="quotelev1">&gt;     hcoll_module-&gt;super.coll_ibcast = hcoll_collectives.coll_ibcast ? mca_coll_hcoll_ibcast : NULL;
</span><br>
<span class="quotelev1">&gt;     hcoll_module-&gt;super.coll_iallgather = hcoll_collectives.coll_iallgather ? mca_coll_hcoll_iallgather : NULL;
</span><br>
<span class="quotelev1">&gt;     hcoll_module-&gt;super.coll_iallreduce = hcoll_collectives.coll_iallreduce ? mca_coll_hcoll_iallreduce : NULL;
</span><br>
<span class="quotelev1">&gt; -    hcoll_module-&gt;super.coll_gather = hcoll_collectives.coll_gather ? mca_coll_hcoll_gather : NULL;
</span><br>
<span class="quotelev1">&gt; +    hcoll_module-&gt;super.coll_gather = /*hcoll_collectives.coll_gather ? mca_coll_hcoll_gather :*/ NULL;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *priority = cm-&gt;hcoll_priority;
</span><br>
<span class="quotelev1">&gt;     module = &amp;hcoll_module-&gt;super;
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14324.php">Jeff Squyres (jsquyres): "[OMPI devel] Proposed 1.7.5 shared library version numbers"</a>
<li><strong>Previous message:</strong> <a href="14322.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora	rawhide"</a>
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
