<?
$subject_val = "[OMPI devel] hcoll destruction via MPI attribute";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 06:45:30 2014" -->
<!-- isoreceived="20140109114530" -->
<!-- sent="Thu, 9 Jan 2014 11:45:29 +0000" -->
<!-- isosent="20140109114529" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] hcoll destruction via MPI attribute" -->
<!-- id="5676A7D4-2315-4B25-98F5-34DA1B3926A0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140109112725.4622F160E0E_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] hcoll destruction via MPI attribute<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 06:45:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13623.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Previous message:</strong> <a href="13621.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - warnings for pointer/integer of different size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13627.php">Joshua Ladd: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Reply:</strong> <a href="13627.php">Joshua Ladd: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike / Devendar --
<br>
<p>I'd like to understand the use case for this a bit more, from the perspective of: is there more infrastructure that we need to provide in the coll framework?  Can you explain what you're trying to do, and when you need your cleanup action(s) to run?
<br>
<p>I ask because this seems a little odd (use an MPI attribute to trigger something during shutdown).  Also, you commented out a bunch of code that doesn't seem to have been replaced with anything -- the attribute delete function simply calls hcoll_group_destroy_notify(); it doesn't do any of the things that the now-commented-out code in the hcoll module destructor does.
<br>
<p>Thanks.
<br>
<p><p><p><p>On Jan 9, 2014, at 6:27 AM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev1">&gt; Date: 2014-01-09 06:27:24 EST (Thu, 09 Jan 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 30175
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/30175">https://svn.open-mpi.org/trac/ompi/changeset/30175</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Create a comm keyval for hcoll component with delete callback function.
</span><br>
<span class="quotelev1">&gt; Set comm attribute with keyval.
</span><br>
<span class="quotelev1">&gt; Wait for pending hcoll module tasks in comm delete callback where PML
</span><br>
<span class="quotelev1">&gt; still valid on the communicator. safely destroy hcoll context during
</span><br>
<span class="quotelev1">&gt; hcoll module destructor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Author: Devendar Bureddy 
</span><br>
<span class="quotelev1">&gt; reviewed by miked
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cmr=v1.7.4:reviewer=ompi-rm1.7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/coll/hcoll/coll_hcoll.h        |     1                                         
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/coll/hcoll/coll_hcoll_module.c |    51 ++++++++++++++++++++++++++++++++++++--- 
</span><br>
<span class="quotelev1">&gt;   2 files changed, 48 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/coll/hcoll/coll_hcoll.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/coll/hcoll/coll_hcoll.h	Thu Jan  9 00:56:29 2014	(r30174)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/coll/hcoll/coll_hcoll.h	2014-01-09 06:27:24 EST (Thu, 09 Jan 2014)	(r30175)
</span><br>
<span class="quotelev1">&gt; @@ -19,6 +19,7 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/mca/coll/base/coll_tags.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/communicator/communicator.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi/attribute/attribute.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/op/op.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/coll/hcoll/coll_hcoll_module.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/coll/hcoll/coll_hcoll_module.c	Thu Jan  9 00:56:29 2014	(r30174)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/coll/hcoll/coll_hcoll_module.c	2014-01-09 06:27:24 EST (Thu, 09 Jan 2014)	(r30175)
</span><br>
<span class="quotelev1">&gt; @@ -10,6 +10,8 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;coll_hcoll.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +int hcoll_comm_attr_keyval;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Initial query function that is invoked during MPI_INIT, allowing
</span><br>
<span class="quotelev1">&gt;  * this module to indicate what level of thread support it provides.
</span><br>
<span class="quotelev1">&gt; @@ -57,6 +59,7 @@
</span><br>
<span class="quotelev1">&gt;     am = &amp;mca_coll_hcoll_component.active_modules;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (hcoll_module-&gt;comm == &amp;ompi_mpi_comm_world.comm){
</span><br>
<span class="quotelev1">&gt; +#if 0
</span><br>
<span class="quotelev1">&gt;         /* If we get here then we are detroying MPI_COMM_WORLD now. So,
</span><br>
<span class="quotelev1">&gt;          * it is safe to destory all the other communicators and corresponding
</span><br>
<span class="quotelev1">&gt;          * hcoll contexts that could still be on the &quot;active_modules&quot; list.
</span><br>
<span class="quotelev1">&gt; @@ -86,6 +89,10 @@
</span><br>
<span class="quotelev1">&gt;                                   (rte_grp_handle_t)hcoll_module-&gt;comm,
</span><br>
<span class="quotelev1">&gt;                                   &amp;context_destroyed);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +        if (OMPI_SUCCESS != ompi_attr_free_keyval(COMM_ATTR, &amp;hcoll_comm_attr_keyval, 0)) {
</span><br>
<span class="quotelev1">&gt; +            HCOL_VERBOSE(1,&quot;hcoll ompi_attr_free_keyval failed&quot;);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     OBJ_RELEASE(hcoll_module-&gt;previous_barrier_module);
</span><br>
<span class="quotelev1">&gt; @@ -104,6 +111,11 @@
</span><br>
<span class="quotelev1">&gt;     OBJ_RELEASE(hcoll_module-&gt;previous_ibcast_module);
</span><br>
<span class="quotelev1">&gt;     OBJ_RELEASE(hcoll_module-&gt;previous_iallreduce_module);
</span><br>
<span class="quotelev1">&gt;     OBJ_RELEASE(hcoll_module-&gt;previous_iallgather_module);
</span><br>
<span class="quotelev1">&gt; +    context_destroyed = 0;
</span><br>
<span class="quotelev1">&gt; +    hcoll_destroy_context(hcoll_module-&gt;hcoll_context,
</span><br>
<span class="quotelev1">&gt; +                                  (rte_grp_handle_t)hcoll_module-&gt;comm,
</span><br>
<span class="quotelev1">&gt; +                                  &amp;context_destroyed);
</span><br>
<span class="quotelev1">&gt; +    assert(context_destroyed);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mca_coll_hcoll_module_clear(hcoll_module);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; @@ -142,7 +154,18 @@
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; +** Communicator free callback
</span><br>
<span class="quotelev1">&gt; +*/
</span><br>
<span class="quotelev1">&gt; +int hcoll_comm_attr_del_fn(MPI_Comm comm, int keyval, void *attr_val, void *extra)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    mca_coll_hcoll_module_t *hcoll_module = (mca_coll_hcoll_module_t*) attr_val;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    hcoll_group_destroy_notify(hcoll_module-&gt;hcoll_context);
</span><br>
<span class="quotelev1">&gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Initialize module on the communicator
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; @@ -150,6 +173,7 @@
</span><br>
<span class="quotelev1">&gt;                                         struct ompi_communicator_t *comm)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     mca_coll_hcoll_module_t *hcoll_module = (mca_coll_hcoll_module_t*) module;
</span><br>
<span class="quotelev1">&gt; +    int ret;
</span><br>
<span class="quotelev1">&gt;     hcoll_module-&gt;comm = comm;
</span><br>
<span class="quotelev1">&gt;     if (OMPI_SUCCESS != __save_coll_handlers(hcoll_module)){
</span><br>
<span class="quotelev1">&gt;         HCOL_ERROR(&quot;coll_hcol: __save_coll_handlers failed&quot;);
</span><br>
<span class="quotelev1">&gt; @@ -166,6 +190,7 @@
</span><br>
<span class="quotelev1">&gt;         return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +#if 0
</span><br>
<span class="quotelev1">&gt;     if (comm != &amp;ompi_mpi_comm_world.comm){
</span><br>
<span class="quotelev1">&gt;         mca_coll_hcoll_module_list_item_wrapper_t *mw =
</span><br>
<span class="quotelev1">&gt;             OBJ_NEW(mca_coll_hcoll_module_list_item_wrapper_t);
</span><br>
<span class="quotelev1">&gt; @@ -174,6 +199,13 @@
</span><br>
<span class="quotelev1">&gt;         opal_list_append(&amp;mca_coll_hcoll_component.active_modules,
</span><br>
<span class="quotelev1">&gt;                          (opal_list_item_t*)mw);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    ret = ompi_attr_set_c(COMM_ATTR, comm, &amp;comm-&gt;c_keyhash, hcoll_comm_attr_keyval, (void *)hcoll_module, false);
</span><br>
<span class="quotelev1">&gt; +    if (OMPI_SUCCESS != ret) {
</span><br>
<span class="quotelev1">&gt; +        HCOL_VERBOSE(1,&quot;hcoll ompi_attr_set_c failed&quot;);
</span><br>
<span class="quotelev1">&gt; +        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; @@ -197,7 +229,7 @@
</span><br>
<span class="quotelev1">&gt;     if (ompi_mpi_finalized){
</span><br>
<span class="quotelev1">&gt;         hcoll_rte_p2p_disabled_notify();
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +#if 0
</span><br>
<span class="quotelev1">&gt;     item = opal_list_get_first(am);
</span><br>
<span class="quotelev1">&gt;     while (item != opal_list_get_end(am)){
</span><br>
<span class="quotelev1">&gt;         item_next = opal_list_get_next(item);
</span><br>
<span class="quotelev1">&gt; @@ -225,10 +257,9 @@
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         item = item_next;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    if (!ompi_mpi_finalized) {
</span><br>
<span class="quotelev1">&gt; -        (*hcoll_progress_fn)();
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; +    (*hcoll_progress_fn)();
</span><br>
<span class="quotelev1">&gt;     OPAL_THREAD_ADD32(&amp;mca_coll_hcoll_component.progress_lock,-1);
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; @@ -245,6 +276,9 @@
</span><br>
<span class="quotelev1">&gt;     mca_coll_base_module_t *module;
</span><br>
<span class="quotelev1">&gt;     mca_coll_hcoll_module_t *hcoll_module;
</span><br>
<span class="quotelev1">&gt;     static bool libhcoll_initialized = false;
</span><br>
<span class="quotelev1">&gt; +    ompi_attribute_fn_ptr_union_t del_fn;
</span><br>
<span class="quotelev1">&gt; +    ompi_attribute_fn_ptr_union_t copy_fn;
</span><br>
<span class="quotelev1">&gt; +    int err;
</span><br>
<span class="quotelev1">&gt;     int rc;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *priority = 0;
</span><br>
<span class="quotelev1">&gt; @@ -269,6 +303,15 @@
</span><br>
<span class="quotelev1">&gt;             HCOL_VERBOSE(0,&quot;Hcol library init failed&quot;);
</span><br>
<span class="quotelev1">&gt;             return NULL;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        copy_fn.attr_communicator_copy_fn = (MPI_Comm_internal_copy_attr_function*) MPI_COMM_NULL_COPY_FN;
</span><br>
<span class="quotelev1">&gt; +        del_fn.attr_communicator_delete_fn = hcoll_comm_attr_del_fn; 
</span><br>
<span class="quotelev1">&gt; +        err = ompi_attr_create_keyval(COMM_ATTR, copy_fn, del_fn, &amp;hcoll_comm_attr_keyval, NULL ,0, NULL);
</span><br>
<span class="quotelev1">&gt; +        if (OMPI_SUCCESS != err) {
</span><br>
<span class="quotelev1">&gt; +            HCOL_VERBOSE(0,&quot;Hcol comm keyval create failed&quot;);
</span><br>
<span class="quotelev1">&gt; +            return NULL;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;         libhcoll_initialized = true;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     hcoll_module = OBJ_NEW(mca_coll_hcoll_module_t);
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
<li><strong>Next message:</strong> <a href="13623.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Previous message:</strong> <a href="13621.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - warnings for pointer/integer of different size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13627.php">Joshua Ladd: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Reply:</strong> <a href="13627.php">Joshua Ladd: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
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
