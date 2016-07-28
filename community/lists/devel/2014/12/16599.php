<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 10:56:24 2014" -->
<!-- isoreceived="20141215155624" -->
<!-- sent="Mon, 15 Dec 2014 08:56:22 -0700" -->
<!-- isosent="20141215155622" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627" -->
<!-- id="20141215155622.GA76569_at_pn1246003.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8FBD68BB-6D99-47DB-A9E0-BE39A582433B_at_open-mpi.org" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-15 10:56:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16600.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<li><strong>Previous message:</strong> <a href="16598.php">Marco Atzeri: "Re: [OMPI devel] 1.8.4rc4 now out for testing"</a>
<li><strong>In reply to:</strong> <a href="16581.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16600.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<li><strong>Reply:</strong> <a href="16600.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not yet. I am still trying to pinpoint the problem. From what I can tell
<br>
the SGI version of XPMEM should be nearly identical to the Cray
<br>
version. I should have this figured out this week. If I don't get it
<br>
fixed by Wed I will open a pull request to remove the check for
<br>
sn/xpmem.h.
<br>
<p>-Nathan
<br>
<p>On Fri, Dec 12, 2014 at 07:50:11PM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Nathan - does this need to come to 1.8.4? Or do you want to go with Paul&#226;&#128;&#153;s suggested fix?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 12, 2014, at 8:09 AM, gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev2">&gt; &gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev2">&gt; &gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The branch, master has been updated
</span><br>
<span class="quotelev2">&gt; &gt;       via  38d66272c51fd531181d9dc282a7260f40270f64 (commit)
</span><br>
<span class="quotelev2">&gt; &gt;      from  f4aecdbfd22a74feadab5566d2d595b65be4a8cb (commit)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev2">&gt; &gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev2">&gt; &gt; revisions in full, below.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://github.com/open-mpi/ompi/commit/38d66272c51fd531181d9dc282a7260f40270f64">https://github.com/open-mpi/ompi/commit/38d66272c51fd531181d9dc282a7260f40270f64</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; commit 38d66272c51fd531181d9dc282a7260f40270f64
</span><br>
<span class="quotelev2">&gt; &gt; Author: Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date:   Fri Dec 12 09:09:01 2014 -0700
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    btl/vader: fix compile on SGI UV
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/opal/mca/btl/vader/btl_vader_component.c b/opal/mca/btl/vader/btl_vader_component.c
</span><br>
<span class="quotelev2">&gt; &gt; index 7061612..aabf03d 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/opal/mca/btl/vader/btl_vader_component.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/opal/mca/btl/vader/btl_vader_component.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -354,9 +354,8 @@ static void mca_btl_vader_check_single_copy (void)
</span><br>
<span class="quotelev2">&gt; &gt; #if OPAL_BTL_VADER_HAVE_XPMEM
</span><br>
<span class="quotelev2">&gt; &gt;     if (MCA_BTL_VADER_XPMEM == mca_btl_vader_component.single_copy_mechanism) {
</span><br>
<span class="quotelev2">&gt; &gt;         /* try to create an xpmem segment for the entire address space */
</span><br>
<span class="quotelev2">&gt; &gt; -        mca_btl_vader_component.my_seg_id = xpmem_make (0, VADER_MAX_ADDRESS, XPMEM_PERMIT_MODE, (void *)0666);
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -        if (-1 == mca_btl_vader_component.my_seg_id) {
</span><br>
<span class="quotelev2">&gt; &gt; +        rc = mca_btl_vader_xpmem_init ();
</span><br>
<span class="quotelev2">&gt; &gt; +        if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev2">&gt; &gt;             if (MCA_BTL_VADER_XPMEM == initial_mechanism) {
</span><br>
<span class="quotelev2">&gt; &gt;                 opal_show_help(&quot;help-btl-vader.txt&quot;, &quot;xpmem-make-failed&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                                true, opal_process_info.nodename, errno,
</span><br>
<span class="quotelev2">&gt; &gt; @@ -364,11 +363,7 @@ static void mca_btl_vader_check_single_copy (void)
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;             mca_btl_vader_select_next_single_copy_mechanism ();
</span><br>
<span class="quotelev2">&gt; &gt; -        } else {
</span><br>
<span class="quotelev2">&gt; &gt; -            mca_btl_vader.super.btl_get = mca_btl_vader_get_xpmem;
</span><br>
<span class="quotelev2">&gt; &gt; -            mca_btl_vader.super.btl_put = mca_btl_vader_get_xpmem;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/opal/mca/btl/vader/btl_vader_xpmem.c b/opal/mca/btl/vader/btl_vader_xpmem.c
</span><br>
<span class="quotelev2">&gt; &gt; index 7e362ea..4bb9a3b 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/opal/mca/btl/vader/btl_vader_xpmem.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/opal/mca/btl/vader/btl_vader_xpmem.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -19,6 +19,19 @@
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #if OPAL_BTL_VADER_HAVE_XPMEM
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +int mca_btl_vader_xpmem_init (void)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    mca_btl_vader_component.my_seg_id = xpmem_make (0, VADER_MAX_ADDRESS, XPMEM_PERMIT_MODE, (void *)0666);
</span><br>
<span class="quotelev2">&gt; &gt; +    if (-1 == mca_btl_vader_component.my_seg_id) {
</span><br>
<span class="quotelev2">&gt; &gt; +        return OPAL_ERR_NOT_AVAILABLE;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    mca_btl_vader.super.btl_get = mca_btl_vader_get_xpmem;
</span><br>
<span class="quotelev2">&gt; &gt; +    mca_btl_vader.super.btl_put = mca_btl_vader_get_xpmem;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; /* look up the remote pointer in the peer rcache and attach if
</span><br>
<span class="quotelev2">&gt; &gt;  * necessary */
</span><br>
<span class="quotelev2">&gt; &gt; mca_mpool_base_registration_t *vader_get_registation (struct mca_btl_base_endpoint_t *ep, void *rem_ptr,
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/opal/mca/btl/vader/btl_vader_xpmem.h b/opal/mca/btl/vader/btl_vader_xpmem.h
</span><br>
<span class="quotelev2">&gt; &gt; index 1be188a..e040e26 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/opal/mca/btl/vader/btl_vader_xpmem.h
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/opal/mca/btl/vader/btl_vader_xpmem.h
</span><br>
<span class="quotelev2">&gt; &gt; @@ -22,6 +22,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;   #include &lt;sn/xpmem.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   typedef int64_t xpmem_segid_t;
</span><br>
<span class="quotelev2">&gt; &gt; +  typedef int64_t xpmem_apid_t;
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /* look up the remote pointer in the peer rcache and attach if
</span><br>
<span class="quotelev2">&gt; &gt; @@ -30,6 +31,8 @@
</span><br>
<span class="quotelev2">&gt; &gt; /* largest address we can attach to using xpmem */
</span><br>
<span class="quotelev2">&gt; &gt; #define VADER_MAX_ADDRESS ((uintptr_t)0x7ffffffff000ul)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +int mca_btl_vader_xpmem_init (void);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; mca_mpool_base_registration_t *vader_get_registation (struct mca_btl_base_endpoint_t *endpoint, void *rem_ptr,
</span><br>
<span class="quotelev2">&gt; &gt;  						      size_t size, int flags, void **local_ptr);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Summary of changes:
</span><br>
<span class="quotelev2">&gt; &gt; opal/mca/btl/vader/btl_vader_component.c |  9 ++-------
</span><br>
<span class="quotelev2">&gt; &gt; opal/mca/btl/vader/btl_vader_xpmem.c     | 13 +++++++++++++
</span><br>
<span class="quotelev2">&gt; &gt; opal/mca/btl/vader/btl_vader_xpmem.h     |  3 +++
</span><br>
<span class="quotelev2">&gt; &gt; 3 files changed, 18 insertions(+), 7 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; hooks/post-receive
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; open-mpi/ompi
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; ompi-commits mailing list
</span><br>
<span class="quotelev2">&gt; &gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16581.php">http://www.open-mpi.org/community/lists/devel/2014/12/16581.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16599/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16600.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<li><strong>Previous message:</strong> <a href="16598.php">Marco Atzeri: "Re: [OMPI devel] 1.8.4rc4 now out for testing"</a>
<li><strong>In reply to:</strong> <a href="16581.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16600.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<li><strong>Reply:</strong> <a href="16600.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
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
