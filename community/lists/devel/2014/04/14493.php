<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31369 -	trunk/ompi/include";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 11:37:11 2014" -->
<!-- isoreceived="20140411153711" -->
<!-- sent="Fri, 11 Apr 2014 15:37:10 +0000" -->
<!-- isosent="20140411153710" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31369 -	trunk/ompi/include" -->
<!-- id="3B9FCB6D-A5F8-42A9-A645-6BBE2E1BE73D_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CALwSR2UQXz0pu1K8D0=xM2RzShDKmMNNdxykWF+8vS_=piQrJQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31369 -	trunk/ompi/include<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-11 11:37:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14494.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31369 - trunk/ompi/include"</a>
<li><strong>Previous message:</strong> <a href="14492.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31369 - trunk/ompi/include"</a>
<li><strong>In reply to:</strong> <a href="14492.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31369 - trunk/ompi/include"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14494.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31369 - trunk/ompi/include"</a>
<li><strong>Reply:</strong> <a href="14494.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31369 - trunk/ompi/include"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that it's mpif.h.in, not mpif.h.  It gets filled in via configure/AC_DEFINE.  On the trunk, for example, it's replaced by:
<br>
<p>/* Enable warnings in wrong usage (e.g. deprecated) in user-level code */
<br>
#ifndef OMPI_WANT_MPI_INTERFACE_WARNING
<br>
#define OMPI_WANT_MPI_INTERFACE_WARNING 1
<br>
#endif
<br>
<p><p>On Apr 11, 2014, at 11:26 AM, Tim Mattox &lt;tmattox_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This #ifndef sequence below the comment doesn't look right...
</span><br>
<span class="quotelev1">&gt; &quot;if BLAH is NOT defined, undefine BLAH&quot;  ????
</span><br>
<span class="quotelev1">&gt; That doesn't accomplish anything as far as I can tell.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 11, 2014 at 11:17 AM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Author: jsquyres (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt; Date: 2014-04-11 11:17:48 EDT (Fri, 11 Apr 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 31369
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31369">https://svn.open-mpi.org/trac/ompi/changeset/31369</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; mpi.h.in: We're long past the v1.5 series; this comment can go away
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/include/mpi.h.in |     2 --
</span><br>
<span class="quotelev1">&gt;    1 files changed, 0 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/include/mpi.h.in
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/include/mpi.h.in Fri Apr 11 00:16:28 2014        (r31368)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/include/mpi.h.in 2014-04-11 11:17:48 EDT (Fri, 11 Apr 2014)      (r31369)
</span><br>
<span class="quotelev1">&gt; @@ -168,8 +168,6 @@
</span><br>
<span class="quotelev1">&gt;  #undef OMPI_PARAM_CHECK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  /* Enable warnings in wrong usage (e.g. deprecated) in user-level code */
</span><br>
<span class="quotelev1">&gt; -/* XXX This __disabled__ by default for Open MPI-1.5, but will be __enabled__ for Open MPI-1.7 by default */
</span><br>
<span class="quotelev1">&gt; -/* Users should be notified about this proposed change. */
</span><br>
<span class="quotelev1">&gt;  #ifndef OMPI_WANT_MPI_INTERFACE_WARNING
</span><br>
<span class="quotelev1">&gt;  #undef OMPI_WANT_MPI_INTERFACE_WARNING
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - tmattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14492.php">http://www.open-mpi.org/community/lists/devel/2014/04/14492.php</a>
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
<li><strong>Next message:</strong> <a href="14494.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31369 - trunk/ompi/include"</a>
<li><strong>Previous message:</strong> <a href="14492.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31369 - trunk/ompi/include"</a>
<li><strong>In reply to:</strong> <a href="14492.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31369 - trunk/ompi/include"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14494.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31369 - trunk/ompi/include"</a>
<li><strong>Reply:</strong> <a href="14494.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31369 - trunk/ompi/include"</a>
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
