<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-118-ge3be1fb";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 10:52:30 2014" -->
<!-- isoreceived="20141017145230" -->
<!-- sent="Fri, 17 Oct 2014 14:52:29 +0000" -->
<!-- isosent="20141017145229" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-118-ge3be1fb" -->
<!-- id="C034BD81-2018-424E-940D-C0B404A9C770_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20141017143907.61231264960_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-118-ge3be1fb<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-17 10:52:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16067.php">Artem Polyakov: "Re: [OMPI devel] OMPI BCOL hang with PMI1"</a>
<li><strong>Previous message:</strong> <a href="16065.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oy!
<br>
<p>Thanks for removing that debug opal_output...  :-)
<br>
<p><p>On Oct 17, 2014, at 7:39 AM, &lt;gitdub_at_[hidden]&gt; &lt;gitdub_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev1">&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev1">&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The branch, master has been updated
</span><br>
<span class="quotelev1">&gt;       via  e3be1fb9a5f8e3c5a5234e86a88f616a40d2cab8 (commit)
</span><br>
<span class="quotelev1">&gt;      from  f9d620e3a772cdeddd40b4f0789cf59c75b44868 (commit)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev1">&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev1">&gt; revisions in full, below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/e3be1fb9a5f8e3c5a5234e86a88f616a40d2cab8">https://github.com/open-mpi/ompi/commit/e3be1fb9a5f8e3c5a5234e86a88f616a40d2cab8</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit e3be1fb9a5f8e3c5a5234e86a88f616a40d2cab8
</span><br>
<span class="quotelev1">&gt; Author: Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Fri Oct 17 10:38:35 2014 -0400
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Quick pass over the sm-knem code, indent fixes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/mca/btl/sm/btl_sm.c b/opal/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev1">&gt; index 1f61028..d0cc950 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev1">&gt; @@ -395,15 +395,15 @@ sm_btl_first_time_init(mca_btl_sm_t *sm_btl,
</span><br>
<span class="quotelev1">&gt;         return i;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     i = ompi_free_list_init_new(&amp;mca_btl_sm_component.sm_frags_user, 
</span><br>
<span class="quotelev1">&gt; -		    sizeof(mca_btl_sm_user_t),
</span><br>
<span class="quotelev1">&gt; -		    opal_cache_line_size, OBJ_CLASS(mca_btl_sm_user_t),
</span><br>
<span class="quotelev1">&gt; -		    sizeof(mca_btl_sm_hdr_t), opal_cache_line_size,
</span><br>
<span class="quotelev1">&gt; -		    mca_btl_sm_component.sm_free_list_num,
</span><br>
<span class="quotelev1">&gt; -		    mca_btl_sm_component.sm_free_list_max,
</span><br>
<span class="quotelev1">&gt; -		    mca_btl_sm_component.sm_free_list_inc,
</span><br>
<span class="quotelev1">&gt; -		    mca_btl_sm_component.sm_mpool);
</span><br>
<span class="quotelev1">&gt; +            sizeof(mca_btl_sm_user_t),
</span><br>
<span class="quotelev1">&gt; +            opal_cache_line_size, OBJ_CLASS(mca_btl_sm_user_t),
</span><br>
<span class="quotelev1">&gt; +            sizeof(mca_btl_sm_hdr_t), opal_cache_line_size,
</span><br>
<span class="quotelev1">&gt; +            mca_btl_sm_component.sm_free_list_num,
</span><br>
<span class="quotelev1">&gt; +            mca_btl_sm_component.sm_free_list_max,
</span><br>
<span class="quotelev1">&gt; +            mca_btl_sm_component.sm_free_list_inc,
</span><br>
<span class="quotelev1">&gt; +            mca_btl_sm_component.sm_mpool);
</span><br>
<span class="quotelev1">&gt;     if ( OPAL_SUCCESS != i )
</span><br>
<span class="quotelev1">&gt; -	    return i;   
</span><br>
<span class="quotelev1">&gt; +        return i;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mca_btl_sm_component.num_outstanding_frags = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -1000,14 +1000,14 @@ int mca_btl_sm_send( struct mca_btl_base_module_t* btl,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if OPAL_BTL_SM_HAVE_KNEM || OPAL_BTL_SM_HAVE_CMA
</span><br>
<span class="quotelev1">&gt; struct mca_btl_base_descriptor_t* mca_btl_sm_prepare_dst( 
</span><br>
<span class="quotelev1">&gt; -		struct mca_btl_base_module_t* btl,
</span><br>
<span class="quotelev1">&gt; -		struct mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev1">&gt; -		struct mca_mpool_base_registration_t* registration,
</span><br>
<span class="quotelev1">&gt; -		struct opal_convertor_t* convertor,
</span><br>
<span class="quotelev1">&gt; -		uint8_t order,
</span><br>
<span class="quotelev1">&gt; -		size_t reserve,
</span><br>
<span class="quotelev1">&gt; -		size_t* size,
</span><br>
<span class="quotelev1">&gt; -		uint32_t flags)
</span><br>
<span class="quotelev1">&gt; +        struct mca_btl_base_module_t* btl,
</span><br>
<span class="quotelev1">&gt; +        struct mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev1">&gt; +        struct mca_mpool_base_registration_t* registration,
</span><br>
<span class="quotelev1">&gt; +        struct opal_convertor_t* convertor,
</span><br>
<span class="quotelev1">&gt; +        uint8_t order,
</span><br>
<span class="quotelev1">&gt; +        size_t reserve,
</span><br>
<span class="quotelev1">&gt; +        size_t* size,
</span><br>
<span class="quotelev1">&gt; +        uint32_t flags)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     void *ptr;
</span><br>
<span class="quotelev1">&gt;     mca_btl_sm_frag_t* frag;
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/mca/btl/sm/btl_sm.h b/opal/mca/btl/sm/btl_sm.h
</span><br>
<span class="quotelev1">&gt; index 358bed5..fd7271f 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/btl/sm/btl_sm.h
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/btl/sm/btl_sm.h
</span><br>
<span class="quotelev1">&gt; @@ -505,19 +505,19 @@ extern int mca_btl_sm_send(
</span><br>
<span class="quotelev1">&gt;  * Synchronous knem/cma get
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; extern int mca_btl_sm_get_sync(
</span><br>
<span class="quotelev1">&gt; -		struct mca_btl_base_module_t* btl,
</span><br>
<span class="quotelev1">&gt; -		struct mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev1">&gt; -		struct mca_btl_base_descriptor_t* des );
</span><br>
<span class="quotelev1">&gt; +        struct mca_btl_base_module_t* btl,
</span><br>
<span class="quotelev1">&gt; +        struct mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev1">&gt; +        struct mca_btl_base_descriptor_t* des );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; extern struct mca_btl_base_descriptor_t* mca_btl_sm_prepare_dst(
</span><br>
<span class="quotelev1">&gt; -		struct mca_btl_base_module_t* btl,
</span><br>
<span class="quotelev1">&gt; -		struct mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev1">&gt; -		struct mca_mpool_base_registration_t* registration,
</span><br>
<span class="quotelev1">&gt; -		struct opal_convertor_t* convertor,
</span><br>
<span class="quotelev1">&gt; -		uint8_t order,
</span><br>
<span class="quotelev1">&gt; -		size_t reserve,
</span><br>
<span class="quotelev1">&gt; -		size_t* size,
</span><br>
<span class="quotelev1">&gt; -		uint32_t flags);
</span><br>
<span class="quotelev1">&gt; +        struct mca_btl_base_module_t* btl,
</span><br>
<span class="quotelev1">&gt; +        struct mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev1">&gt; +        struct mca_mpool_base_registration_t* registration,
</span><br>
<span class="quotelev1">&gt; +        struct opal_convertor_t* convertor,
</span><br>
<span class="quotelev1">&gt; +        uint8_t order,
</span><br>
<span class="quotelev1">&gt; +        size_t reserve,
</span><br>
<span class="quotelev1">&gt; +        size_t* size,
</span><br>
<span class="quotelev1">&gt; +        uint32_t flags);
</span><br>
<span class="quotelev1">&gt; #endif /* OPAL_BTL_SM_HAVE_KNEM || OPAL_BTL_SM_HAVE_CMA */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if OPAL_BTL_SM_HAVE_KNEM
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/mca/btl/sm/btl_sm_component.c b/opal/mca/btl/sm/btl_sm_component.c
</span><br>
<span class="quotelev1">&gt; index 37bc9f7..4f06742 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/btl/sm/btl_sm_component.c
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/btl/sm/btl_sm_component.c
</span><br>
<span class="quotelev1">&gt; @@ -168,7 +168,7 @@ static int sm_register(void)
</span><br>
<span class="quotelev1">&gt;                                            MCA_BASE_VAR_SCOPE_CONSTANT,
</span><br>
<span class="quotelev1">&gt;                                            &amp;have_knem);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    if (OPAL_BTL_SM_HAVE_KNEM) {
</span><br>
<span class="quotelev1">&gt; +    if (have_knem) {
</span><br>
<span class="quotelev1">&gt;         mca_btl_sm_component.use_knem = -1;
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt;         mca_btl_sm_component.use_knem = 0;
</span><br>
<span class="quotelev1">&gt; @@ -1142,7 +1142,6 @@ int mca_btl_sm_component_progress(void)
</span><br>
<span class="quotelev1">&gt;     if( 0 == mca_btl_sm_component.use_knem ) {
</span><br>
<span class="quotelev1">&gt;         return nevents;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    opal_output(0, &quot;===checking for knem progress&quot;);
</span><br>
<span class="quotelev1">&gt;     while (mca_btl_sm.knem_status_num_used &gt; 0 &amp;&amp;
</span><br>
<span class="quotelev1">&gt;            KNEM_STATUS_PENDING != 
</span><br>
<span class="quotelev1">&gt;            mca_btl_sm.knem_status_array[mca_btl_sm.knem_status_first_used]) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Summary of changes:
</span><br>
<span class="quotelev1">&gt; opal/mca/btl/sm/btl_sm.c           | 32 ++++++++++++++++----------------
</span><br>
<span class="quotelev1">&gt; opal/mca/btl/sm/btl_sm.h           | 22 +++++++++++-----------
</span><br>
<span class="quotelev1">&gt; opal/mca/btl/sm/btl_sm_component.c |  3 +--
</span><br>
<span class="quotelev1">&gt; 3 files changed, 28 insertions(+), 29 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hooks/post-receive
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; open-mpi/ompi
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; ompi-commits mailing list
</span><br>
<span class="quotelev1">&gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
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
<li><strong>Next message:</strong> <a href="16067.php">Artem Polyakov: "Re: [OMPI devel] OMPI BCOL hang with PMI1"</a>
<li><strong>Previous message:</strong> <a href="16065.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
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
