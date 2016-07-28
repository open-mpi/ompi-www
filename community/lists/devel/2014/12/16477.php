<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-477-g09d03a1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 11:09:38 2014" -->
<!-- isoreceived="20141209160938" -->
<!-- sent="Tue, 9 Dec 2014 16:09:36 +0000" -->
<!-- isosent="20141209160936" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-477-g09d03a1" -->
<!-- id="19424CE9-9C37-4460-BF89-6EBD641A4606_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj4UF1veqiSEa-Gzb5XOJ71fynYsMa-cc8y96XicY01qDw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 11:09:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16478.php">George Bosilca: "Re: [OMPI devel] autogen broken"</a>
<li><strong>Previous message:</strong> <a href="16476.php">Nathan Hjelm: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>In reply to:</strong> <a href="16475.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-477-g09d03a1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would, too.  Can you provide more detail than &quot;it's broken&quot;?
<br>
<p><p>On Dec 9, 2014, at 7:59 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Well the build is broken again for cray.  I'd like to have this stop.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2014-12-09 7:23 GMT-08:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; No problem - just wanted to make sure you were aware of it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 9, 2014, at 7:21 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, it did, because Howard's commit was wrong.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure what the exact problem was he was fixing (the commit message wasn't very specific), but the shell variable names were already correct -- they are to indicate whether a specific provider (usnic, in this case) can be built; not the libfabric core.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, there was a problem where provider libs were being unconditionally added; this *may* have been Howard's problem...?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I just pushed a fix for that: <a href="https://github.com/open-mpi/ompi/commit/c40fd09d2a0575e493137158644fd2b610a48aca">https://github.com/open-mpi/ompi/commit/c40fd09d2a0575e493137158644fd2b610a48aca</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Howard's here at the Forum with me; I'll consult with him in person later this morning.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 9, 2014, at 7:15 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I believe this just reverted a commit last night from Howard that he needed to fix the build on the Cray.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Dec 9, 2014, at 5:52 AM, gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The branch, master has been updated
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     via  09d03a154bcb5ba1fae45895a20c7d4ffb9846ab (commit)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    from  18d9fdfd8ddd9e778ea1193a9f44a0b0423b7a76 (commit)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; revisions in full, below.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="https://github.com/open-mpi/ompi/commit/09d03a154bcb5ba1fae45895a20c7d4ffb9846ab">https://github.com/open-mpi/ompi/commit/09d03a154bcb5ba1fae45895a20c7d4ffb9846ab</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; commit 09d03a154bcb5ba1fae45895a20c7d4ffb9846ab
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Date:   Tue Dec 9 05:52:24 2014 -0800
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  libfabric: fix some typos in the usnic configury
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; diff --git a/opal/mca/common/libfabric/configure.m4 b/opal/mca/common/libfabric/configure.m4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; index a255fc3..26b39e1 100644
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --- a/opal/mca/common/libfabric/configure.m4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +++ b/opal/mca/common/libfabric/configure.m4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; @@ -267,12 +267,12 @@ AC_DEFUN([_OPAL_COMMON_LIBFABRIC_CHECK_INCDIR],[
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; AC_DEFUN([_OPAL_COMMON_LIBFABRIC_EMBEDDED_PROVIDER_USNIC],[
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   opal_common_libfabric_usnic_happy=1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   AC_CHECK_HEADER([linux/netlink.h], [],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -                    [opal_common_libfabric_happy=0], [
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +                    [opal_common_libfabric_usnic_happy=0], [
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #include &lt;net/if.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ])
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   AC_CHECK_LIB([nl], [nl_connect], [],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -                 [opal_common_libfabric_happy=0])
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +                 [opal_common_libfabric_usnic_happy=0])
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   opal_common_libfabric_CPPFLAGS=&quot;$opal_common_libfabric_CPPFLAGS -I$OPAL_TOP_SRCDIR/opal/mca/common/libfabric/libfabric/prov/usnic/src -I$OPAL_TOP_SRCDIR/opal/mca/common/libfabric/libfabric/prov/usnic/src/usnic_direct&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   opal_common_libfabric_LIBADD=&quot;\$(OPAL_TOP_BUILDDIR)/opal/mca/common/libfabric/lib${OPAL_LIB_PREFIX}mca_common_libfabric.la&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; @@ -286,5 +286,5 @@ AC_DEFUN([_OPAL_COMMON_LIBFABRIC_EMBEDDED_PROVIDER_USNIC],[
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; # --------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; AC_DEFUN([_OPAL_COMMON_LIBFABRIC_EMBEDDED_PROVIDER_USNIC_CONDITIONALS],[
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   AM_CONDITIONAL([OPAL_COMMON_LIBFABRIC_HAVE_PROVIDER_USNIC],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -                   [test $opal_common_libfabric_happy -eq 1])
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +                   [test $opal_common_libfabric_usnic_happy -eq 1])
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ])
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Summary of changes:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; opal/mca/common/libfabric/configure.m4 | 6 +++---
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1 file changed, 3 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hooks/post-receive
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; open-mpi/ompi
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ompi-commits mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16469.php">http://www.open-mpi.org/community/lists/devel/2014/12/16469.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16471.php">http://www.open-mpi.org/community/lists/devel/2014/12/16471.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16472.php">http://www.open-mpi.org/community/lists/devel/2014/12/16472.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16475.php">http://www.open-mpi.org/community/lists/devel/2014/12/16475.php</a>
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
<li><strong>Next message:</strong> <a href="16478.php">George Bosilca: "Re: [OMPI devel] autogen broken"</a>
<li><strong>Previous message:</strong> <a href="16476.php">Nathan Hjelm: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>In reply to:</strong> <a href="16475.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-477-g09d03a1"</a>
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
