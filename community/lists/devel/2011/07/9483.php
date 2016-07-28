<?
$subject_val = "[OMPI devel] opal_init/finalize counter --&gt; boolean";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 08:42:05 2011" -->
<!-- isoreceived="20110708124205" -->
<!-- sent="Fri, 8 Jul 2011 08:42:00 -0400" -->
<!-- isosent="20110708124200" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] opal_init/finalize counter --&amp;gt; boolean" -->
<!-- id="E12F5608-8087-40DE-8C9B-77FB6B84A5BD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201107080643.p686hKUn024201_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] opal_init/finalize counter --&gt; boolean<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-08 08:42:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9484.php">George Bosilca: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Previous message:</strong> <a href="9482.php">Eloi Gaudry: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9484.php">George Bosilca: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Reply:</strong> <a href="9484.php">George Bosilca: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Developers --
<br>
<p>Ralph and I talked about this one the other day; he's trying to plug some memory leaks during finalize.  
<br>
<p>Before this commit, there was a counter that counts how many times opal_init*() is invoked.  opal_finalize() decremented the counter, but didn't actually do anything else until the counter went to zero.  The original intent was that we should call finalize exactly as many times as we call initialize, but it appears that we didn't do that (e.g., we call opal_init_util() and then opal_init(), but then only call opal_finalize() once).
<br>
<p>Does anyone have a reason NOT to convert the init/finalize counter to a simple boolean?  (i.e., can you provide a reason to back this change out?)
<br>
<p><p><p>On Jul 8, 2011, at 2:43 AM, rhc_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2011-07-08 02:43:19 EDT (Fri, 08 Jul 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 24862
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24862">https://svn.open-mpi.org/trac/ompi/changeset/24862</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Replace a useless counter with a boolean check to see if we have already passed thru opal_finalize so we don't call finalize, and then don't pass thru it (as was happening on several tools)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/opal/runtime/opal_finalize.c |    16 ++++++----------                        
</span><br>
<span class="quotelev1">&gt;   trunk/opal/runtime/opal_init.c     |    16 ++++++----------                        
</span><br>
<span class="quotelev1">&gt;   trunk/orte/tools/orterun/orterun.c |     4 ----                                    
</span><br>
<span class="quotelev1">&gt;   3 files changed, 12 insertions(+), 24 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/runtime/opal_finalize.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/runtime/opal_finalize.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/runtime/opal_finalize.c	2011-07-08 02:43:19 EDT (Fri, 08 Jul 2011)
</span><br>
<span class="quotelev1">&gt; @@ -54,18 +54,16 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/runtime/opal_cr.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/mca/crs/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -extern int opal_initialized;
</span><br>
<span class="quotelev1">&gt; -extern int opal_util_initialized;
</span><br>
<span class="quotelev1">&gt; +extern bool opal_initialized;
</span><br>
<span class="quotelev1">&gt; +extern bool opal_util_initialized;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; opal_finalize_util(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    if( --opal_util_initialized != 0 ) {
</span><br>
<span class="quotelev1">&gt; -        if( opal_util_initialized &lt; 0 ) {
</span><br>
<span class="quotelev1">&gt; -            return OPAL_ERROR;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; +    if (!opal_util_initialized) {
</span><br>
<span class="quotelev1">&gt;         return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +    opal_util_initialized = false;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* Clear out all the registered MCA params */
</span><br>
<span class="quotelev1">&gt;     mca_base_param_finalize();
</span><br>
<span class="quotelev1">&gt; @@ -111,12 +109,10 @@
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; opal_finalize(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    if( --opal_initialized != 0 ) {
</span><br>
<span class="quotelev1">&gt; -        if( opal_initialized &lt; 0 ) {
</span><br>
<span class="quotelev1">&gt; -            return OPAL_ERROR;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; +    if (!opal_initialized) {
</span><br>
<span class="quotelev1">&gt;         return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +    opal_initialized = false;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* close the checkpoint and restart service */
</span><br>
<span class="quotelev1">&gt;     opal_cr_finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/runtime/opal_init.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/runtime/opal_init.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/runtime/opal_init.c	2011-07-08 02:43:19 EDT (Fri, 08 Jul 2011)
</span><br>
<span class="quotelev1">&gt; @@ -68,8 +68,8 @@
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; const char opal_version_string[] = OPAL_IDENT_STRING;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -int opal_initialized = 0;
</span><br>
<span class="quotelev1">&gt; -int opal_util_initialized = 0;
</span><br>
<span class="quotelev1">&gt; +bool opal_initialized = false;
</span><br>
<span class="quotelev1">&gt; +bool opal_util_initialized = false;
</span><br>
<span class="quotelev1">&gt; int opal_cache_line_size;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int
</span><br>
<span class="quotelev1">&gt; @@ -219,12 +219,10 @@
</span><br>
<span class="quotelev1">&gt;     int ret;
</span><br>
<span class="quotelev1">&gt;     char *error = NULL;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    if( ++opal_util_initialized != 1 ) {
</span><br>
<span class="quotelev1">&gt; -        if( opal_util_initialized &lt; 1 ) {
</span><br>
<span class="quotelev1">&gt; -            return OPAL_ERROR;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; +    if (opal_util_initialized) {
</span><br>
<span class="quotelev1">&gt;         return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +    opal_util_initialized = true;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* JMS See note in runtime/opal.h -- this is temporary; to be
</span><br>
<span class="quotelev1">&gt;        replaced with real hwloc information soon (in trunk/v1.5 and
</span><br>
<span class="quotelev1">&gt; @@ -324,12 +322,10 @@
</span><br>
<span class="quotelev1">&gt;     int ret;
</span><br>
<span class="quotelev1">&gt;     char *error = NULL;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    if( ++opal_initialized != 1 ) {
</span><br>
<span class="quotelev1">&gt; -        if( opal_initialized &lt; 1 ) {
</span><br>
<span class="quotelev1">&gt; -            return OPAL_ERROR;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; +    if (opal_initialized) {
</span><br>
<span class="quotelev1">&gt;         return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +    opal_initialized = true;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* initialize util code */
</span><br>
<span class="quotelev1">&gt;     if (OPAL_SUCCESS != (ret = opal_init_util(pargc, pargv))) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/tools/orterun/orterun.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/tools/orterun/orterun.c	2011-07-08 02:43:19 EDT (Fri, 08 Jul 2011)
</span><br>
<span class="quotelev1">&gt; @@ -618,10 +618,6 @@
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;         return rc;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    /* finalize the OPAL utils. As they are opened again from orte_init-&gt;opal_init
</span><br>
<span class="quotelev1">&gt; -     * we continue to have a reference count on them. So we have to finalize them twice...
</span><br>
<span class="quotelev1">&gt; -     */
</span><br>
<span class="quotelev1">&gt; -    opal_finalize_util();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* check for request to report uri */
</span><br>
<span class="quotelev1">&gt;     if (NULL != orterun_globals.report_uri) {
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
<li><strong>Next message:</strong> <a href="9484.php">George Bosilca: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Previous message:</strong> <a href="9482.php">Eloi Gaudry: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9484.php">George Bosilca: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Reply:</strong> <a href="9484.php">George Bosilca: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
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
