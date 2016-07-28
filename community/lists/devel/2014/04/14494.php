<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31369 - trunk/ompi/include";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 11:43:20 2014" -->
<!-- isoreceived="20140411154320" -->
<!-- sent="Fri, 11 Apr 2014 11:43:18 -0400" -->
<!-- isosent="20140411154318" -->
<!-- name="Tim Mattox" -->
<!-- email="tmattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31369 - trunk/ompi/include" -->
<!-- id="CALwSR2V-soH+emUc_29KHpiJc_gHzELY_vFWQLswBFF6gXWD1Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3B9FCB6D-A5F8-42A9-A645-6BBE2E1BE73D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31369 - trunk/ompi/include<br>
<strong>From:</strong> Tim Mattox (<em>tmattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-11 11:43:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14495.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI f2f devel meeting: week of June 23"</a>
<li><strong>Previous message:</strong> <a href="14493.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31369 -	trunk/ompi/include"</a>
<li><strong>In reply to:</strong> <a href="14493.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31369 -	trunk/ompi/include"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, that makes much more sense.  I'll return to my ompi-svn-lurker mode
<br>
now.  :-)
<br>
<p><p>On Fri, Apr 11, 2014 at 11:37 AM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Note that it's mpif.h.in, not mpif.h.  It gets filled in via
</span><br>
<span class="quotelev1">&gt; configure/AC_DEFINE.  On the trunk, for example, it's replaced by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Enable warnings in wrong usage (e.g. deprecated) in user-level code */
</span><br>
<span class="quotelev1">&gt; #ifndef OMPI_WANT_MPI_INTERFACE_WARNING
</span><br>
<span class="quotelev1">&gt; #define OMPI_WANT_MPI_INTERFACE_WARNING 1
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 11, 2014, at 11:26 AM, Tim Mattox &lt;tmattox_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; This #ifndef sequence below the comment doesn't look right...
</span><br>
<span class="quotelev2">&gt; &gt; &quot;if BLAH is NOT defined, undefine BLAH&quot;  ????
</span><br>
<span class="quotelev2">&gt; &gt; That doesn't accomplish anything as far as I can tell.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Apr 11, 2014 at 11:17 AM, &lt;svn-commit-mailer_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Author: jsquyres (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2014-04-11 11:17:48 EDT (Fri, 11 Apr 2014)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 31369
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31369">https://svn.open-mpi.org/trac/ompi/changeset/31369</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; mpi.h.in: We're long past the v1.5 series; this comment can go away
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/include/mpi.h.in |     2 --
</span><br>
<span class="quotelev2">&gt; &gt;    1 files changed, 0 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/include/mpi.h.in
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/include/mpi.h.in Fri Apr 11 00:16:28 2014        (r31368)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/include/mpi.h.in 2014-04-11 11:17:48 EDT (Fri, 11 Apr
</span><br>
<span class="quotelev1">&gt; 2014)      (r31369)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -168,8 +168,6 @@
</span><br>
<span class="quotelev2">&gt; &gt;  #undef OMPI_PARAM_CHECK
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  /* Enable warnings in wrong usage (e.g. deprecated) in user-level code
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev2">&gt; &gt; -/* XXX This __disabled__ by default for Open MPI-1.5, but will be
</span><br>
<span class="quotelev1">&gt; __enabled__ for Open MPI-1.7 by default */
</span><br>
<span class="quotelev2">&gt; &gt; -/* Users should be notified about this proposed change. */
</span><br>
<span class="quotelev2">&gt; &gt;  #ifndef OMPI_WANT_MPI_INTERFACE_WARNING
</span><br>
<span class="quotelev2">&gt; &gt;  #undef OMPI_WANT_MPI_INTERFACE_WARNING
</span><br>
<span class="quotelev2">&gt; &gt;  #endif
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Tim Mattox, Ph.D. - tmattox_at_[hidden]
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14492.php">http://www.open-mpi.org/community/lists/devel/2014/04/14492.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14493.php">http://www.open-mpi.org/community/lists/devel/2014/04/14493.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - tmattox_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14494/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14495.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI f2f devel meeting: week of June 23"</a>
<li><strong>Previous message:</strong> <a href="14493.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31369 -	trunk/ompi/include"</a>
<li><strong>In reply to:</strong> <a href="14493.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31369 -	trunk/ompi/include"</a>
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
