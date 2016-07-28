<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-477-g09d03a1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 10:15:48 2014" -->
<!-- isoreceived="20141209151548" -->
<!-- sent="Tue, 9 Dec 2014 07:15:41 -0800" -->
<!-- isosent="20141209151541" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-477-g09d03a1" -->
<!-- id="FA9A8B75-BEC9-451F-9B0E-34C0C6315BE1_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20141209135244.EDDC32652C6_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-477-g09d03a1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 10:15:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16470.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>Previous message:</strong> <a href="16468.php">Jeff Squyres (jsquyres): "[OMPI devel] Update to usnic BTL / libfabric"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16471.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-477-g09d03a1"</a>
<li><strong>Reply:</strong> <a href="16471.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-477-g09d03a1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe this just reverted a commit last night from Howard that he needed to fix the build on the Cray.
<br>
<p><p><span class="quotelev1">&gt; On Dec 9, 2014, at 5:52 AM, gitdub_at_[hidden] wrote:
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
<span class="quotelev1">&gt;       via  09d03a154bcb5ba1fae45895a20c7d4ffb9846ab (commit)
</span><br>
<span class="quotelev1">&gt;      from  18d9fdfd8ddd9e778ea1193a9f44a0b0423b7a76 (commit)
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
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/09d03a154bcb5ba1fae45895a20c7d4ffb9846ab">https://github.com/open-mpi/ompi/commit/09d03a154bcb5ba1fae45895a20c7d4ffb9846ab</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 09d03a154bcb5ba1fae45895a20c7d4ffb9846ab
</span><br>
<span class="quotelev1">&gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Tue Dec 9 05:52:24 2014 -0800
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    libfabric: fix some typos in the usnic configury
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/mca/common/libfabric/configure.m4 b/opal/mca/common/libfabric/configure.m4
</span><br>
<span class="quotelev1">&gt; index a255fc3..26b39e1 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/common/libfabric/configure.m4
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/common/libfabric/configure.m4
</span><br>
<span class="quotelev1">&gt; @@ -267,12 +267,12 @@ AC_DEFUN([_OPAL_COMMON_LIBFABRIC_CHECK_INCDIR],[
</span><br>
<span class="quotelev1">&gt; AC_DEFUN([_OPAL_COMMON_LIBFABRIC_EMBEDDED_PROVIDER_USNIC],[
</span><br>
<span class="quotelev1">&gt;     opal_common_libfabric_usnic_happy=1
</span><br>
<span class="quotelev1">&gt;     AC_CHECK_HEADER([linux/netlink.h], [],
</span><br>
<span class="quotelev1">&gt; -                    [opal_common_libfabric_happy=0], [
</span><br>
<span class="quotelev1">&gt; +                    [opal_common_libfabric_usnic_happy=0], [
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;net/if.h&gt;
</span><br>
<span class="quotelev1">&gt; ])
</span><br>
<span class="quotelev1">&gt;     AC_CHECK_LIB([nl], [nl_connect], [],
</span><br>
<span class="quotelev1">&gt; -                 [opal_common_libfabric_happy=0])
</span><br>
<span class="quotelev1">&gt; +                 [opal_common_libfabric_usnic_happy=0])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     opal_common_libfabric_CPPFLAGS=&quot;$opal_common_libfabric_CPPFLAGS -I$OPAL_TOP_SRCDIR/opal/mca/common/libfabric/libfabric/prov/usnic/src -I$OPAL_TOP_SRCDIR/opal/mca/common/libfabric/libfabric/prov/usnic/src/usnic_direct&quot;
</span><br>
<span class="quotelev1">&gt;     opal_common_libfabric_LIBADD=&quot;\$(OPAL_TOP_BUILDDIR)/opal/mca/common/libfabric/lib${OPAL_LIB_PREFIX}mca_common_libfabric.la&quot;
</span><br>
<span class="quotelev1">&gt; @@ -286,5 +286,5 @@ AC_DEFUN([_OPAL_COMMON_LIBFABRIC_EMBEDDED_PROVIDER_USNIC],[
</span><br>
<span class="quotelev1">&gt; # --------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; AC_DEFUN([_OPAL_COMMON_LIBFABRIC_EMBEDDED_PROVIDER_USNIC_CONDITIONALS],[
</span><br>
<span class="quotelev1">&gt;     AM_CONDITIONAL([OPAL_COMMON_LIBFABRIC_HAVE_PROVIDER_USNIC],
</span><br>
<span class="quotelev1">&gt; -                   [test $opal_common_libfabric_happy -eq 1])
</span><br>
<span class="quotelev1">&gt; +                   [test $opal_common_libfabric_usnic_happy -eq 1])
</span><br>
<span class="quotelev1">&gt; ])
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
<span class="quotelev1">&gt; opal/mca/common/libfabric/configure.m4 | 6 +++---
</span><br>
<span class="quotelev1">&gt; 1 file changed, 3 insertions(+), 3 deletions(-)
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
<li><strong>Next message:</strong> <a href="16470.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>Previous message:</strong> <a href="16468.php">Jeff Squyres (jsquyres): "[OMPI devel] Update to usnic BTL / libfabric"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16471.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-477-g09d03a1"</a>
<li><strong>Reply:</strong> <a href="16471.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-477-g09d03a1"</a>
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
