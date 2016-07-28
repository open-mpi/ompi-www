<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 22:50:15 2014" -->
<!-- isoreceived="20141213035015" -->
<!-- sent="Fri, 12 Dec 2014 19:50:11 -0800" -->
<!-- isosent="20141213035011" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627" -->
<!-- id="8FBD68BB-6D99-47DB-A9E0-BE39A582433B_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20141212160945.D7CBD2656C8_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 22:50:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16582.php">Paul Hargrove: "[OMPI devel] [1.8.4rc3+patches] Solaris status summary"</a>
<li><strong>Previous message:</strong> <a href="16580.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16599.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<li><strong>Reply:</strong> <a href="16599.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan - does this need to come to 1.8.4? Or do you want to go with Paul&#226;&#128;&#153;s suggested fix?
<br>
<p><span class="quotelev1">&gt; On Dec 12, 2014, at 8:09 AM, gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev1">&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev1">&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The branch, master has been updated
</span><br>
<span class="quotelev1">&gt;       via  38d66272c51fd531181d9dc282a7260f40270f64 (commit)
</span><br>
<span class="quotelev1">&gt;      from  f4aecdbfd22a74feadab5566d2d595b65be4a8cb (commit)
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
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/38d66272c51fd531181d9dc282a7260f40270f64">https://github.com/open-mpi/ompi/commit/38d66272c51fd531181d9dc282a7260f40270f64</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 38d66272c51fd531181d9dc282a7260f40270f64
</span><br>
<span class="quotelev1">&gt; Author: Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Fri Dec 12 09:09:01 2014 -0700
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    btl/vader: fix compile on SGI UV
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/mca/btl/vader/btl_vader_component.c b/opal/mca/btl/vader/btl_vader_component.c
</span><br>
<span class="quotelev1">&gt; index 7061612..aabf03d 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/btl/vader/btl_vader_component.c
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/btl/vader/btl_vader_component.c
</span><br>
<span class="quotelev1">&gt; @@ -354,9 +354,8 @@ static void mca_btl_vader_check_single_copy (void)
</span><br>
<span class="quotelev1">&gt; #if OPAL_BTL_VADER_HAVE_XPMEM
</span><br>
<span class="quotelev1">&gt;     if (MCA_BTL_VADER_XPMEM == mca_btl_vader_component.single_copy_mechanism) {
</span><br>
<span class="quotelev1">&gt;         /* try to create an xpmem segment for the entire address space */
</span><br>
<span class="quotelev1">&gt; -        mca_btl_vader_component.my_seg_id = xpmem_make (0, VADER_MAX_ADDRESS, XPMEM_PERMIT_MODE, (void *)0666);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        if (-1 == mca_btl_vader_component.my_seg_id) {
</span><br>
<span class="quotelev1">&gt; +        rc = mca_btl_vader_xpmem_init ();
</span><br>
<span class="quotelev1">&gt; +        if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt;             if (MCA_BTL_VADER_XPMEM == initial_mechanism) {
</span><br>
<span class="quotelev1">&gt;                 opal_show_help(&quot;help-btl-vader.txt&quot;, &quot;xpmem-make-failed&quot;,
</span><br>
<span class="quotelev1">&gt;                                true, opal_process_info.nodename, errno,
</span><br>
<span class="quotelev1">&gt; @@ -364,11 +363,7 @@ static void mca_btl_vader_check_single_copy (void)
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             mca_btl_vader_select_next_single_copy_mechanism ();
</span><br>
<span class="quotelev1">&gt; -        } else {
</span><br>
<span class="quotelev1">&gt; -            mca_btl_vader.super.btl_get = mca_btl_vader_get_xpmem;
</span><br>
<span class="quotelev1">&gt; -            mca_btl_vader.super.btl_put = mca_btl_vader_get_xpmem;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/mca/btl/vader/btl_vader_xpmem.c b/opal/mca/btl/vader/btl_vader_xpmem.c
</span><br>
<span class="quotelev1">&gt; index 7e362ea..4bb9a3b 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/btl/vader/btl_vader_xpmem.c
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/btl/vader/btl_vader_xpmem.c
</span><br>
<span class="quotelev1">&gt; @@ -19,6 +19,19 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if OPAL_BTL_VADER_HAVE_XPMEM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +int mca_btl_vader_xpmem_init (void)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    mca_btl_vader_component.my_seg_id = xpmem_make (0, VADER_MAX_ADDRESS, XPMEM_PERMIT_MODE, (void *)0666);
</span><br>
<span class="quotelev1">&gt; +    if (-1 == mca_btl_vader_component.my_seg_id) {
</span><br>
<span class="quotelev1">&gt; +        return OPAL_ERR_NOT_AVAILABLE;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    mca_btl_vader.super.btl_get = mca_btl_vader_get_xpmem;
</span><br>
<span class="quotelev1">&gt; +    mca_btl_vader.super.btl_put = mca_btl_vader_get_xpmem;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; /* look up the remote pointer in the peer rcache and attach if
</span><br>
<span class="quotelev1">&gt;  * necessary */
</span><br>
<span class="quotelev1">&gt; mca_mpool_base_registration_t *vader_get_registation (struct mca_btl_base_endpoint_t *ep, void *rem_ptr,
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/mca/btl/vader/btl_vader_xpmem.h b/opal/mca/btl/vader/btl_vader_xpmem.h
</span><br>
<span class="quotelev1">&gt; index 1be188a..e040e26 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/btl/vader/btl_vader_xpmem.h
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/btl/vader/btl_vader_xpmem.h
</span><br>
<span class="quotelev1">&gt; @@ -22,6 +22,7 @@
</span><br>
<span class="quotelev1">&gt;   #include &lt;sn/xpmem.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   typedef int64_t xpmem_segid_t;
</span><br>
<span class="quotelev1">&gt; +  typedef int64_t xpmem_apid_t;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* look up the remote pointer in the peer rcache and attach if
</span><br>
<span class="quotelev1">&gt; @@ -30,6 +31,8 @@
</span><br>
<span class="quotelev1">&gt; /* largest address we can attach to using xpmem */
</span><br>
<span class="quotelev1">&gt; #define VADER_MAX_ADDRESS ((uintptr_t)0x7ffffffff000ul)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +int mca_btl_vader_xpmem_init (void);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; mca_mpool_base_registration_t *vader_get_registation (struct mca_btl_base_endpoint_t *endpoint, void *rem_ptr,
</span><br>
<span class="quotelev1">&gt;  						      size_t size, int flags, void **local_ptr);
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; opal/mca/btl/vader/btl_vader_component.c |  9 ++-------
</span><br>
<span class="quotelev1">&gt; opal/mca/btl/vader/btl_vader_xpmem.c     | 13 +++++++++++++
</span><br>
<span class="quotelev1">&gt; opal/mca/btl/vader/btl_vader_xpmem.h     |  3 +++
</span><br>
<span class="quotelev1">&gt; 3 files changed, 18 insertions(+), 7 deletions(-)
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16582.php">Paul Hargrove: "[OMPI devel] [1.8.4rc3+patches] Solaris status summary"</a>
<li><strong>Previous message:</strong> <a href="16580.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16599.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<li><strong>Reply:</strong> <a href="16599.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
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
