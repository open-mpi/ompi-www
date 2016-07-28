<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 12:05:26 2014" -->
<!-- isoreceived="20141215170526" -->
<!-- sent="Mon, 15 Dec 2014 10:05:24 -0700" -->
<!-- isosent="20141215170524" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627" -->
<!-- id="CAF1Cqj7XVhA6Fm-3X9b6Q8gksXU953ApPVnRO1Ji13PPfVB3Zg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20141215155622.GA76569_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-15 12:05:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16601.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<li><strong>Previous message:</strong> <a href="16599.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<li><strong>In reply to:</strong> <a href="16599.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16601.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<li><strong>Reply:</strong> <a href="16601.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd prefer Paul's suggestion to disable xpmem for sgi/uv for 1.8.X
<br>
Is anyone actually supporting this?
<br>
<p>Howard
<br>
<p>2014-12-15 8:56 GMT-07:00 Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not yet. I am still trying to pinpoint the problem. From what I can tell
</span><br>
<span class="quotelev1">&gt; the SGI version of XPMEM should be nearly identical to the Cray
</span><br>
<span class="quotelev1">&gt; version. I should have this figured out this week. If I don't get it
</span><br>
<span class="quotelev1">&gt; fixed by Wed I will open a pull request to remove the check for
</span><br>
<span class="quotelev1">&gt; sn/xpmem.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 12, 2014 at 07:50:11PM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Nathan - does this need to come to 1.8.4? Or do you want to go with
</span><br>
<span class="quotelev1">&gt; Paul&#226;&#128;&#153;s suggested fix?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Dec 12, 2014, at 8:09 AM, gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This is an automated email from the git hooks/post-receive script. It
</span><br>
<span class="quotelev1">&gt; was
</span><br>
<span class="quotelev3">&gt; &gt; &gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The branch, master has been updated
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       via  38d66272c51fd531181d9dc282a7260f40270f64 (commit)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      from  f4aecdbfd22a74feadab5566d2d595b65be4a8cb (commit)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev3">&gt; &gt; &gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev3">&gt; &gt; &gt; revisions in full, below.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/38d66272c51fd531181d9dc282a7260f40270f64">https://github.com/open-mpi/ompi/commit/38d66272c51fd531181d9dc282a7260f40270f64</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; commit 38d66272c51fd531181d9dc282a7260f40270f64
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Author: Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date:   Fri Dec 12 09:09:01 2014 -0700
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    btl/vader: fix compile on SGI UV
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; diff --git a/opal/mca/btl/vader/btl_vader_component.c
</span><br>
<span class="quotelev1">&gt; b/opal/mca/btl/vader/btl_vader_component.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; index 7061612..aabf03d 100644
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --- a/opal/mca/btl/vader/btl_vader_component.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +++ b/opal/mca/btl/vader/btl_vader_component.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; @@ -354,9 +354,8 @@ static void mca_btl_vader_check_single_copy (void)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #if OPAL_BTL_VADER_HAVE_XPMEM
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     if (MCA_BTL_VADER_XPMEM ==
</span><br>
<span class="quotelev1">&gt; mca_btl_vader_component.single_copy_mechanism) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         /* try to create an xpmem segment for the entire address space
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -        mca_btl_vader_component.my_seg_id = xpmem_make (0,
</span><br>
<span class="quotelev1">&gt; VADER_MAX_ADDRESS, XPMEM_PERMIT_MODE, (void *)0666);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -        if (-1 == mca_btl_vader_component.my_seg_id) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +        rc = mca_btl_vader_xpmem_init ();
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +        if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;             if (MCA_BTL_VADER_XPMEM == initial_mechanism) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 opal_show_help(&quot;help-btl-vader.txt&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;xpmem-make-failed&quot;,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                                true, opal_process_info.nodename, errno,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; @@ -364,11 +363,7 @@ static void mca_btl_vader_check_single_copy (void)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;             }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;             mca_btl_vader_select_next_single_copy_mechanism ();
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -        } else {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -            mca_btl_vader.super.btl_get = mca_btl_vader_get_xpmem;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -            mca_btl_vader.super.btl_put = mca_btl_vader_get_xpmem;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #endif
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; diff --git a/opal/mca/btl/vader/btl_vader_xpmem.c
</span><br>
<span class="quotelev1">&gt; b/opal/mca/btl/vader/btl_vader_xpmem.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; index 7e362ea..4bb9a3b 100644
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --- a/opal/mca/btl/vader/btl_vader_xpmem.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +++ b/opal/mca/btl/vader/btl_vader_xpmem.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; @@ -19,6 +19,19 @@
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #if OPAL_BTL_VADER_HAVE_XPMEM
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +int mca_btl_vader_xpmem_init (void)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +{
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +    mca_btl_vader_component.my_seg_id = xpmem_make (0,
</span><br>
<span class="quotelev1">&gt; VADER_MAX_ADDRESS, XPMEM_PERMIT_MODE, (void *)0666);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +    if (-1 == mca_btl_vader_component.my_seg_id) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +        return OPAL_ERR_NOT_AVAILABLE;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +    }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +    mca_btl_vader.super.btl_get = mca_btl_vader_get_xpmem;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +    mca_btl_vader.super.btl_put = mca_btl_vader_get_xpmem;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +    return OPAL_SUCCESS;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +}
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /* look up the remote pointer in the peer rcache and attach if
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  * necessary */
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mca_mpool_base_registration_t *vader_get_registation (struct
</span><br>
<span class="quotelev1">&gt; mca_btl_base_endpoint_t *ep, void *rem_ptr,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; diff --git a/opal/mca/btl/vader/btl_vader_xpmem.h
</span><br>
<span class="quotelev1">&gt; b/opal/mca/btl/vader/btl_vader_xpmem.h
</span><br>
<span class="quotelev3">&gt; &gt; &gt; index 1be188a..e040e26 100644
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --- a/opal/mca/btl/vader/btl_vader_xpmem.h
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +++ b/opal/mca/btl/vader/btl_vader_xpmem.h
</span><br>
<span class="quotelev3">&gt; &gt; &gt; @@ -22,6 +22,7 @@
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   #include &lt;sn/xpmem.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   typedef int64_t xpmem_segid_t;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +  typedef int64_t xpmem_apid_t;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #endif
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /* look up the remote pointer in the peer rcache and attach if
</span><br>
<span class="quotelev3">&gt; &gt; &gt; @@ -30,6 +31,8 @@
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /* largest address we can attach to using xpmem */
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #define VADER_MAX_ADDRESS ((uintptr_t)0x7ffffffff000ul)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +int mca_btl_vader_xpmem_init (void);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mca_mpool_base_registration_t *vader_get_registation (struct
</span><br>
<span class="quotelev1">&gt; mca_btl_base_endpoint_t *endpoint, void *rem_ptr,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                                                   size_t size, int
</span><br>
<span class="quotelev1">&gt; flags, void **local_ptr);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Summary of changes:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; opal/mca/btl/vader/btl_vader_component.c |  9 ++-------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; opal/mca/btl/vader/btl_vader_xpmem.c     | 13 +++++++++++++
</span><br>
<span class="quotelev3">&gt; &gt; &gt; opal/mca/btl/vader/btl_vader_xpmem.h     |  3 +++
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 3 files changed, 18 insertions(+), 7 deletions(-)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hooks/post-receive
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; open-mpi/ompi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ompi-commits mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16581.php">http://www.open-mpi.org/community/lists/devel/2014/12/16581.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16599.php">http://www.open-mpi.org/community/lists/devel/2014/12/16599.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16600/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16601.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<li><strong>Previous message:</strong> <a href="16599.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<li><strong>In reply to:</strong> <a href="16599.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16601.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<li><strong>Reply:</strong> <a href="16601.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
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
