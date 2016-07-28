<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32711 -	trunk/opal/mca/pmix/cray";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 11 17:02:37 2014" -->
<!-- isoreceived="20140911210237" -->
<!-- sent="Thu, 11 Sep 2014 21:02:35 +0000" -->
<!-- isosent="20140911210235" -->
<!-- name="Pritchard Jr., Howard" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32711 -	trunk/opal/mca/pmix/cray" -->
<!-- id="5F6FB0CDAF4F98419A0D970E1F65ED05B201FE_at_ECS-EXG-P-MB05.win.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CALwSR2VPEmQz0ydP1uKGrWHtT_2Q7yO=crZGVtvoSgqWe2wjag_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32711 -	trunk/opal/mca/pmix/cray<br>
<strong>From:</strong> Pritchard Jr., Howard (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-11 17:02:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15814.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
<li><strong>Previous message:</strong> <a href="15812.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32711 - trunk/opal/mca/pmix/cray"</a>
<li><strong>In reply to:</strong> <a href="15812.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32711 - trunk/opal/mca/pmix/cray"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks, it was bad cut/paste
<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Tim Mattox
<br>
Sent: Thursday, September 11, 2014 2:54 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32711 - trunk/opal/mca/pmix/cray
<br>

<br>
I'm sure that is not what you meant to do...
<br>
the assignment to NULL should occur AFTER the free()...
<br>

<br>
On Thu, Sep 11, 2014 at 4:30 PM, &lt;svn-commit-mailer_at_[hidden]&lt;mailto:svn-commit-mailer_at_[hidden]&gt;&gt; wrote:
<br>
Author: hppritcha (Howard Pritchard)
<br>
Date: 2014-09-11 16:30:40 EDT (Thu, 11 Sep 2014)
<br>
New Revision: 32711
<br>
URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32711">https://svn.open-mpi.org/trac/ompi/changeset/32711</a>
<br>

<br>
Log:
<br>
Fix potential double free in cray pmi cray_fini
<br>

<br>
Text files modified:
<br>
&nbsp;&nbsp;&nbsp;trunk/opal/mca/pmix/cray/pmix_cray.c |     1 +
<br>
&nbsp;&nbsp;&nbsp;1 files changed, 1 insertions(+), 0 deletions(-)
<br>

<br>
Modified: trunk/opal/mca/pmix/cray/pmix_cray.c
<br>
==============================================================================
<br>
--- trunk/opal/mca/pmix/cray/pmix_cray.c        Thu Sep 11 10:51:30 2014        (r32710)
<br>
+++ trunk/opal/mca/pmix/cray/pmix_cray.c        2014-09-11 16:30:40 EDT (Thu, 11 Sep 2014)      (r32711)
<br>
@@ -257,6 +257,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != pmix_lranks) {
<br>
+        pmix_lranks = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(pmix_lranks);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>

<br>
_______________________________________________
<br>
svn-full mailing list
<br>
svn-full_at_[hidden]&lt;mailto:svn-full_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
<br>

<br>

<br>

<br>
--
<br>
Tim Mattox, Ph.D. - tmattox_at_[hidden]&lt;mailto:tmattox_at_[hidden]&gt;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15813/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15814.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
<li><strong>Previous message:</strong> <a href="15812.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32711 - trunk/opal/mca/pmix/cray"</a>
<li><strong>In reply to:</strong> <a href="15812.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32711 - trunk/opal/mca/pmix/cray"</a>
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
