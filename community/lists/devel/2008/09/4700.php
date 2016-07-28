<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19628";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 14:32:37 2008" -->
<!-- isoreceived="20080924183237" -->
<!-- sent="Wed, 24 Sep 2008 14:32:29 -0400" -->
<!-- isosent="20080924183229" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19628" -->
<!-- id="07918037-EDF6-4828-BAC5-38BECF66271A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200809241759.m8OHx1Y6031547_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-24 14:32:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4701.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19628"</a>
<li><strong>Previous message:</strong> <a href="4699.php">Ralph Castain: "Re: [OMPI devel] 1.2.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4701.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19628"</a>
<li><strong>Reply:</strong> <a href="4701.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19628"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For the NEWS: I don't think this was a regression.  Did we really have  
<br>
those casts initially and remove them in v1.2.6?  I thought Brad said  
<br>
they only first *noticed* it in v1.2.6 -- I don't know where the  
<br>
change actually came from (it could actually be in the hardware or the  
<br>
driver reporting much larger numbers that they used to).
<br>
<p><p><p>On Sep 24, 2008, at 1:59 PM, timattox_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: timattox
</span><br>
<span class="quotelev1">&gt; Date: 2008-09-24 13:59:00 EDT (Wed, 24 Sep 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 19628
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/19628">https://svn.open-mpi.org/trac/ompi/changeset/19628</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Closes #1526, #1515: Fix handling of max_cqe, which  makes IBM eHCA  
</span><br>
<span class="quotelev1">&gt; work again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Submitted by bbenton, Reviewed by jsquyres, RM-Approved by tdd.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patch applied which adds some typecasts to btl_openib.c.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, bumped the VERSION.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   branches/v1.2/NEWS                             |     6 ++++++
</span><br>
<span class="quotelev1">&gt;   branches/v1.2/VERSION                          |     4 ++--
</span><br>
<span class="quotelev1">&gt;   branches/v1.2/ompi/mca/btl/openib/btl_openib.c |     8 ++++----
</span><br>
<span class="quotelev1">&gt;   3 files changed, 12 insertions(+), 6 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.2/NEWS
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.2/NEWS	(original)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.2/NEWS	2008-09-24 13:59:00 EDT (Wed, 24 Sep 2008)
</span><br>
<span class="quotelev1">&gt; @@ -26,6 +26,12 @@
</span><br>
<span class="quotelev1">&gt; bug fixes (and other actions) for each version of Open MPI since
</span><br>
<span class="quotelev1">&gt; version 1.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +1.2.8
</span><br>
<span class="quotelev1">&gt; +-----
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +- Fix a regession introduced in 1.2.6 for the IBM eHCA. See ticket  
</span><br>
<span class="quotelev1">&gt; #1526.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; 1.2.7
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.2/VERSION
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.2/VERSION	(original)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.2/VERSION	2008-09-24 13:59:00 EDT (Wed, 24 Sep 2008)
</span><br>
<span class="quotelev1">&gt; @@ -8,7 +8,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; major=1
</span><br>
<span class="quotelev1">&gt; minor=2
</span><br>
<span class="quotelev1">&gt; -release=7
</span><br>
<span class="quotelev1">&gt; +release=8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # greek is used for alpha or beta release tags.  If it is non-empty,
</span><br>
<span class="quotelev1">&gt; # it will be appended to the version number.  It does not have to be
</span><br>
<span class="quotelev1">&gt; @@ -17,7 +17,7 @@
</span><br>
<span class="quotelev1">&gt; # only requirement is that it must be entirely printable ASCII
</span><br>
<span class="quotelev1">&gt; # characters and have no white space.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -greek=rc6
</span><br>
<span class="quotelev1">&gt; +greek=b1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # If want_svn=1, then the SVN r number will be included in the overall
</span><br>
<span class="quotelev1">&gt; # Open MPI version number in some form.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.2/ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.2/ompi/mca/btl/openib/btl_openib.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.2/ompi/mca/btl/openib/btl_openib.c	2008-09-24  
</span><br>
<span class="quotelev1">&gt; 13:59:00 EDT (Wed, 24 Sep 2008)
</span><br>
<span class="quotelev1">&gt; @@ -257,8 +257,8 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if(min_cq_size &gt; (int32_t) mca_btl_openib_component.ib_cq_size) {
</span><br>
<span class="quotelev1">&gt; -        mca_btl_openib_component.ib_cq_size = min_cq_size &gt;  
</span><br>
<span class="quotelev1">&gt; openib_btl-&gt;hca-&gt;ib_dev_attr.max_cqe ?
</span><br>
<span class="quotelev1">&gt; -            openib_btl-&gt;hca-&gt;ib_dev_attr.max_cqe : min_cq_size;
</span><br>
<span class="quotelev1">&gt; +        mca_btl_openib_component.ib_cq_size = min_cq_size &gt;  
</span><br>
<span class="quotelev1">&gt; (uint32_t)openib_btl-&gt;hca-&gt;ib_dev_attr.max_cqe ?
</span><br>
<span class="quotelev1">&gt; +            (uint32_t)openib_btl-&gt;hca-&gt;ib_dev_attr.max_cqe :  
</span><br>
<span class="quotelev1">&gt; min_cq_size;
</span><br>
<span class="quotelev1">&gt; #if OMPI_MCA_BTL_OPENIB_HAVE_RESIZE_CQ
</span><br>
<span class="quotelev1">&gt;         if(!first_time) {
</span><br>
<span class="quotelev1">&gt;             rc = ibv_resize_cq(openib_btl-&gt;ib_cq[BTL_OPENIB_LP_QP],  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.ib_cq_size);
</span><br>
<span class="quotelev1">&gt; @@ -280,8 +280,8 @@
</span><br>
<span class="quotelev1">&gt;     if(first_time) {
</span><br>
<span class="quotelev1">&gt;         /* never been here before, setup cq and srq */
</span><br>
<span class="quotelev1">&gt;         mca_btl_openib_component.ib_cq_size = (int)  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.ib_cq_size &gt;
</span><br>
<span class="quotelev1">&gt; -            openib_btl-&gt;hca-&gt;ib_dev_attr.max_cqe ?
</span><br>
<span class="quotelev1">&gt; -            openib_btl-&gt;hca-&gt;ib_dev_attr.max_cqe :
</span><br>
<span class="quotelev1">&gt; +            (uint32_t)openib_btl-&gt;hca-&gt;ib_dev_attr.max_cqe ?
</span><br>
<span class="quotelev1">&gt; +            (uint32_t)openib_btl-&gt;hca-&gt;ib_dev_attr.max_cqe :
</span><br>
<span class="quotelev1">&gt;             (int) mca_btl_openib_component.ib_cq_size;
</span><br>
<span class="quotelev1">&gt;         return mca_btl_openib_create_cq_srq(openib_btl);
</span><br>
<span class="quotelev1">&gt;     }
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4701.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19628"</a>
<li><strong>Previous message:</strong> <a href="4699.php">Ralph Castain: "Re: [OMPI devel] 1.2.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4701.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19628"</a>
<li><strong>Reply:</strong> <a href="4701.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19628"</a>
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
