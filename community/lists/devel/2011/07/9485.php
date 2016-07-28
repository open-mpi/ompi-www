<?
$subject_val = "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 10:15:54 2011" -->
<!-- isoreceived="20110708141554" -->
<!-- sent="Fri, 8 Jul 2011 08:15:43 -0600" -->
<!-- isosent="20110708141543" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_init/finalize counter --&amp;gt; boolean" -->
<!-- id="11E9BDC2-8639-466A-BF1C-CEF9378D479D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1A6D7E93-37FB-4E4E-AB83-D3CB43CEF7DD_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_init/finalize counter --&gt; boolean<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-08 10:15:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9486.php">George Bosilca: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Previous message:</strong> <a href="9484.php">George Bosilca: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>In reply to:</strong> <a href="9484.php">George Bosilca: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9486.php">George Bosilca: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Reply:</strong> <a href="9486.php">George Bosilca: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 8, 2011, at 7:37 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; What memory leaks? My valgrind claims there are basically none at the MPI level, so I'm wondering ...
</span><br>
<p>We leak nearly a megabyte, almost all of it from OPAL, when running a tool. If you look at the commit message, this wasn't about an MPI proc.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, let's make sure everyone understand why there are two initialization functions in OPAL. One has to call opal_init_util before anything else otherwise no access to utilities dealing with the command line, configurations file, output system, help and SOS stuff and so on will be available. Initializing OPAL adds all the other frameworks: the MCA base, memory, backtrace, carto and friends.
</span><br>
<p>Agreed
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now let's look how this is used from the MPI perspective:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_init.c: 309 -&gt; opal_init_util
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_init.c:357 -&gt; orte_init
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  orte_init.c:81 -&gt; opal_init
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    opal_init.c:335 -&gt; opal_init_util
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_finalize.c:430  -&gt; orte_finalize
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  orte_finalize.c:42  -&gt; opal_finalize
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    opal_finalize.c:163  -&gt; opal_finalize_util
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_finalize.c:434  -&gt; opal_finalize_util
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So we have opal_init * 1 and opal_util * 2. Clearly the opal util is not a simple ON/OFF stuff. With Ralph patch the OPAL utilities will disappear as soon as the OMPI layer call orte_fini. Luckily, today there is nothing between the call to orte_fini and opal_finalize_util, so we're safe from a segfault.
</span><br>
<p>The point is that you shouldn't be calling opal_finalize_util separately. We do so now only because of the counter - there is no reason for doing it separately otherwise.
<br>
<p>In other words, we created a counter, and then modified the code to make the counter work. There is no reason for it to exist as there is no use of the opal utilities following the call to orte_finalize.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Moreover, from a software engineering point of view there are two choices for allowing library composition (ORTE using OPAL, OMPI using ORTE and OPAL, something else using OMPI and ORTE and OPAL). Either you do the management at the lowest level using counters, or you provide accessors to check the init/fini state of the library and do the management at the upper level (similar to the MPI library). In Open MPI and this for the last 7 years we chose the first approach. And so far there was no compelling case to switch.
</span><br>
<p>Yes there was - we just never checked it. None of the tools were calling opal_finalize multiple times. There was an inherent understanding that calling orte_finalize would shut everything down. This wasn't the case because this hidden counter wasn't getting zero'd, and so opal_finalize never actually executed.
<br>
<p>Now imagine there is an abnormal termination. You can't know for sure where it occurs - did we increment the counter already, or not? So how many times do I have to call opal_finalize and opal_finalize_util to get them to actually execute?
<br>
<p>The way things sat, I could only loop over opal_finalize and opal_finalize_util until I got back an error indicating it had finally executed. That is plain ugly.
<br>
<p>It isn't a big deal, but creates a hidden 'gotcha' that results in some ugly code to compensate if you want to cleanly terminate under all conditions. If you have a compelling case where someone needs to access the opal utils -after- having called orte_finalize or opal_finalize, then I would welcome hearing about it.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 8, 2011, at 14:42 , Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Developers --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph and I talked about this one the other day; he's trying to plug some memory leaks during finalize.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Before this commit, there was a counter that counts how many times opal_init*() is invoked.  opal_finalize() decremented the counter, but didn't actually do anything else until the counter went to zero.  The original intent was that we should call finalize exactly as many times as we call initialize, but it appears that we didn't do that (e.g., we call opal_init_util() and then opal_init(), but then only call opal_finalize() once).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone have a reason NOT to convert the init/finalize counter to a simple boolean?  (i.e., can you provide a reason to back this change out?)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 8, 2011, at 2:43 AM, rhc_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: rhc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2011-07-08 02:43:19 EDT (Fri, 08 Jul 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 24862
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24862">https://svn.open-mpi.org/trac/ompi/changeset/24862</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Replace a useless counter with a boolean check to see if we have already passed thru opal_finalize so we don't call finalize, and then don't pass thru it (as was happening on several tools)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/opal/runtime/opal_finalize.c |    16 ++++++----------                        
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/opal/runtime/opal_init.c     |    16 ++++++----------                        
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/orte/tools/orterun/orterun.c |     4 ----                                    
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3 files changed, 12 insertions(+), 24 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/opal/runtime/opal_finalize.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/runtime/opal_finalize.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/opal/runtime/opal_finalize.c	2011-07-08 02:43:19 EDT (Fri, 08 Jul 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -54,18 +54,16 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;opal/runtime/opal_cr.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;opal/mca/crs/base/base.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -extern int opal_initialized;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -extern int opal_util_initialized;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +extern bool opal_initialized;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +extern bool opal_util_initialized;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_finalize_util(void)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    if( --opal_util_initialized != 0 ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        if( opal_util_initialized &lt; 0 ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            return OPAL_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (!opal_util_initialized) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       return OPAL_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    opal_util_initialized = false;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /* Clear out all the registered MCA params */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   mca_base_param_finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -111,12 +109,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_finalize(void)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    if( --opal_initialized != 0 ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        if( opal_initialized &lt; 0 ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            return OPAL_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (!opal_initialized) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       return OPAL_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    opal_initialized = false;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /* close the checkpoint and restart service */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   opal_cr_finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/opal/runtime/opal_init.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/runtime/opal_init.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/opal/runtime/opal_init.c	2011-07-08 02:43:19 EDT (Fri, 08 Jul 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -68,8 +68,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; const char opal_version_string[] = OPAL_IDENT_STRING;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -int opal_initialized = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -int opal_util_initialized = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +bool opal_initialized = false;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +bool opal_util_initialized = false;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int opal_cache_line_size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -219,12 +219,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   int ret;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   char *error = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    if( ++opal_util_initialized != 1 ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        if( opal_util_initialized &lt; 1 ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            return OPAL_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (opal_util_initialized) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       return OPAL_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    opal_util_initialized = true;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /* JMS See note in runtime/opal.h -- this is temporary; to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      replaced with real hwloc information soon (in trunk/v1.5 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -324,12 +322,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   int ret;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   char *error = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    if( ++opal_initialized != 1 ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        if( opal_initialized &lt; 1 ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            return OPAL_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (opal_initialized) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       return OPAL_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    opal_initialized = true;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /* initialize util code */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   if (OPAL_SUCCESS != (ret = opal_init_util(pargc, pargv))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/orte/tools/orterun/orterun.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/orte/tools/orterun/orterun.c	2011-07-08 02:43:19 EDT (Fri, 08 Jul 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -618,10 +618,6 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       return rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    /* finalize the OPAL utils. As they are opened again from orte_init-&gt;opal_init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -     * we continue to have a reference count on them. So we have to finalize them twice...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -     */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    opal_finalize_util();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /* check for request to report uri */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   if (NULL != orterun_globals.report_uri) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9486.php">George Bosilca: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Previous message:</strong> <a href="9484.php">George Bosilca: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>In reply to:</strong> <a href="9484.php">George Bosilca: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9486.php">George Bosilca: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Reply:</strong> <a href="9486.php">George Bosilca: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
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
