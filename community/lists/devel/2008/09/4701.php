<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19628";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 15:40:34 2008" -->
<!-- isoreceived="20080924194034" -->
<!-- sent="Wed, 24 Sep 2008 15:40:30 -0400" -->
<!-- isosent="20080924194030" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19628" -->
<!-- id="ea86ce220809241240g361d3222jc7474200ef813d43_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="07918037-EDF6-4828-BAC5-38BECF66271A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19628<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-24 15:40:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4702.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19628"</a>
<li><strong>Previous message:</strong> <a href="4700.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19628"</a>
<li><strong>In reply to:</strong> <a href="4700.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19628"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4702.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19628"</a>
<li><strong>Reply:</strong> <a href="4702.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19628"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, regression might not technically be the right word, but from a user's
<br>
perspective, it would seem like it.
<br>
<p>That is, if I understand the implications of the bug that was fixed in 1.2.6 via
<br>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/17883">https://svn.open-mpi.org/trac/ompi/changeset/17883</a>
<br>
Since, prior to that fix, the IBM eHCA got lucky and worked because
<br>
we were comparing to the wrong parameter which was much smaller, AFAIK.
<br>
I'm open to a better wording in the NEWS file.  Something like &quot;a
<br>
fix in 1.2.6 revealed a latent bug that affected the IBM eHCA?&quot;
<br>
<p>On Wed, Sep 24, 2008 at 2:32 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; For the NEWS: I don't think this was a regression.  Did we really have those
</span><br>
<span class="quotelev1">&gt; casts initially and remove them in v1.2.6?  I thought Brad said they only
</span><br>
<span class="quotelev1">&gt; first *noticed* it in v1.2.6 -- I don't know where the change actually came
</span><br>
<span class="quotelev1">&gt; from (it could actually be in the hardware or the driver reporting much
</span><br>
<span class="quotelev1">&gt; larger numbers that they used to).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 24, 2008, at 1:59 PM, timattox_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: timattox
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2008-09-24 13:59:00 EDT (Wed, 24 Sep 2008)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 19628
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/19628">https://svn.open-mpi.org/trac/ompi/changeset/19628</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Closes #1526, #1515: Fix handling of max_cqe, which  makes IBM eHCA work
</span><br>
<span class="quotelev2">&gt;&gt; again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Submitted by bbenton, Reviewed by jsquyres, RM-Approved by tdd.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Patch applied which adds some typecasts to btl_openib.c.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, bumped the VERSION.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;  branches/v1.2/NEWS                             |     6 ++++++
</span><br>
<span class="quotelev2">&gt;&gt;  branches/v1.2/VERSION                          |     4 ++--
</span><br>
<span class="quotelev2">&gt;&gt;  branches/v1.2/ompi/mca/btl/openib/btl_openib.c |     8 ++++----
</span><br>
<span class="quotelev2">&gt;&gt;  3 files changed, 12 insertions(+), 6 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: branches/v1.2/NEWS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- branches/v1.2/NEWS  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ branches/v1.2/NEWS  2008-09-24 13:59:00 EDT (Wed, 24 Sep 2008)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -26,6 +26,12 @@
</span><br>
<span class="quotelev2">&gt;&gt; bug fixes (and other actions) for each version of Open MPI since
</span><br>
<span class="quotelev2">&gt;&gt; version 1.0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +1.2.8
</span><br>
<span class="quotelev2">&gt;&gt; +-----
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +- Fix a regession introduced in 1.2.6 for the IBM eHCA. See ticket #1526.
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.7
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: branches/v1.2/VERSION
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- branches/v1.2/VERSION       (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ branches/v1.2/VERSION       2008-09-24 13:59:00 EDT (Wed, 24 Sep 2008)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -8,7 +8,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; major=1
</span><br>
<span class="quotelev2">&gt;&gt; minor=2
</span><br>
<span class="quotelev2">&gt;&gt; -release=7
</span><br>
<span class="quotelev2">&gt;&gt; +release=8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # greek is used for alpha or beta release tags.  If it is non-empty,
</span><br>
<span class="quotelev2">&gt;&gt; # it will be appended to the version number.  It does not have to be
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,7 +17,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; # only requirement is that it must be entirely printable ASCII
</span><br>
<span class="quotelev2">&gt;&gt; # characters and have no white space.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -greek=rc6
</span><br>
<span class="quotelev2">&gt;&gt; +greek=b1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # If want_svn=1, then the SVN r number will be included in the overall
</span><br>
<span class="quotelev2">&gt;&gt; # Open MPI version number in some form.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: branches/v1.2/ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- branches/v1.2/ompi/mca/btl/openib/btl_openib.c      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ branches/v1.2/ompi/mca/btl/openib/btl_openib.c      2008-09-24
</span><br>
<span class="quotelev2">&gt;&gt; 13:59:00 EDT (Wed, 24 Sep 2008)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -257,8 +257,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    if(min_cq_size &gt; (int32_t) mca_btl_openib_component.ib_cq_size) {
</span><br>
<span class="quotelev2">&gt;&gt; -        mca_btl_openib_component.ib_cq_size = min_cq_size &gt;
</span><br>
<span class="quotelev2">&gt;&gt; openib_btl-&gt;hca-&gt;ib_dev_attr.max_cqe ?
</span><br>
<span class="quotelev2">&gt;&gt; -            openib_btl-&gt;hca-&gt;ib_dev_attr.max_cqe : min_cq_size;
</span><br>
<span class="quotelev2">&gt;&gt; +        mca_btl_openib_component.ib_cq_size = min_cq_size &gt;
</span><br>
<span class="quotelev2">&gt;&gt; (uint32_t)openib_btl-&gt;hca-&gt;ib_dev_attr.max_cqe ?
</span><br>
<span class="quotelev2">&gt;&gt; +            (uint32_t)openib_btl-&gt;hca-&gt;ib_dev_attr.max_cqe : min_cq_size;
</span><br>
<span class="quotelev2">&gt;&gt; #if OMPI_MCA_BTL_OPENIB_HAVE_RESIZE_CQ
</span><br>
<span class="quotelev2">&gt;&gt;        if(!first_time) {
</span><br>
<span class="quotelev2">&gt;&gt;            rc = ibv_resize_cq(openib_btl-&gt;ib_cq[BTL_OPENIB_LP_QP],
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_openib_component.ib_cq_size);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -280,8 +280,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;    if(first_time) {
</span><br>
<span class="quotelev2">&gt;&gt;        /* never been here before, setup cq and srq */
</span><br>
<span class="quotelev2">&gt;&gt;        mca_btl_openib_component.ib_cq_size = (int)
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_openib_component.ib_cq_size &gt;
</span><br>
<span class="quotelev2">&gt;&gt; -            openib_btl-&gt;hca-&gt;ib_dev_attr.max_cqe ?
</span><br>
<span class="quotelev2">&gt;&gt; -            openib_btl-&gt;hca-&gt;ib_dev_attr.max_cqe :
</span><br>
<span class="quotelev2">&gt;&gt; +            (uint32_t)openib_btl-&gt;hca-&gt;ib_dev_attr.max_cqe ?
</span><br>
<span class="quotelev2">&gt;&gt; +            (uint32_t)openib_btl-&gt;hca-&gt;ib_dev_attr.max_cqe :
</span><br>
<span class="quotelev2">&gt;&gt;            (int) mca_btl_openib_component.ib_cq_size;
</span><br>
<span class="quotelev2">&gt;&gt;        return mca_btl_openib_create_cq_srq(openib_btl);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
 I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4702.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19628"</a>
<li><strong>Previous message:</strong> <a href="4700.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19628"</a>
<li><strong>In reply to:</strong> <a href="4700.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19628"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4702.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19628"</a>
<li><strong>Reply:</strong> <a href="4702.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19628"</a>
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
