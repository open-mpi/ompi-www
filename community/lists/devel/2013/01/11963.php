<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 20:57:23 2013" -->
<!-- isoreceived="20130123015723" -->
<!-- sent="Wed, 23 Jan 2013 01:57:14 +0000" -->
<!-- isosent="20130123015714" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request" -->
<!-- id="DF152F4B8E08AE4AAF80927EA5DC03AC0E9A87A6_at_G01JPEXMBYT02" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="3EF78697-F06D-42C6-ACCC-B4A12EFD7FAE_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-22 20:57:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11964.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="11962.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<li><strong>In reply to:</strong> <a href="11962.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11978.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<li><strong>Reply:</strong> <a href="11978.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>I reported the bug three months ago.
<br>
Your commit r27880 resolved one of the bugs reported by me,
<br>
in another approach.
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2012/10/11555.php">http://www.open-mpi.org/community/lists/devel/2012/10/11555.php</a>
<br>
<p>But other bugs are still open.
<br>
<p>&quot;(1) MPI_SOURCE of MPI_Status for a null request must be MPI_ANY_SOURCE.&quot;
<br>
in my previous mail is not fixed yet. This can be fixed by my patch
<br>
(ompi/mpi/c/wait.c and ompi/request/request.c part only) attached
<br>
in my another mail.
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2012/10/11561.php">http://www.open-mpi.org/community/lists/devel/2012/10/11561.php</a>
<br>
<p>&quot;(2) MPI_Status for an inactive request must be an empty status.&quot;
<br>
in my previous mail is partially fixed. MPI_Wait is fixed by your
<br>
r27880. But MPI_Waitall and MPI_Testall should be fixed.
<br>
Codes similar to your r27880 should be inserted to
<br>
ompi_request_default_wait_all and ompi_request_default_test_all.
<br>
<p>You can confirm the fixes by the test program status.c attached in
<br>
my previous mail. Run with -n 2. 
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2012/10/11555.php">http://www.open-mpi.org/community/lists/devel/2012/10/11555.php</a>
<br>
<p>Regards,
<br>
Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p><span class="quotelev1">&gt; To be honest it was hanging in one of my repos for some time. If I'm not mistaken it is somehow related to one active ticket (but I couldn't find the info). It might be good to push it upstream.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 22, 2013, at 16:27 , &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; George --
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is there any reason not to CMR this to v1.6 and v1.7?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 21, 2013, at 6:35 AM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Author: bosilca (George Bosilca)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: 2013-01-21 06:35:42 EST (Mon, 21 Jan 2013)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; New Revision: 27880
</span><br>
<span class="quotelev3">&gt; &gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/27880">https://svn.open-mpi.org/trac/ompi/changeset/27880</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My understanding is that an MPI_WAIT() on an inactive request should
</span><br>
<span class="quotelev3">&gt; &gt;&gt; return the empty status (MPI 3.0 page 52 line 46).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Text files modified: 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  trunk/ompi/request/req_wait.c |     3 +++                                     
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  1 files changed, 3 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Modified: trunk/ompi/request/req_wait.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- trunk/ompi/request/req_wait.c	Sat Jan 19 19:33:42 2013	(r27879)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ trunk/ompi/request/req_wait.c	2013-01-21 06:35:42 EST (Mon, 21 Jan 2013)	(r27880)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -61,6 +61,9 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    if( req-&gt;req_persistent ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        if( req-&gt;req_state == OMPI_REQUEST_INACTIVE ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +            if (MPI_STATUS_IGNORE != status) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +                *status = ompi_status_empty;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +            }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            return OMPI_SUCCESS;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        req-&gt;req_state = OMPI_REQUEST_INACTIVE;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11964.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="11962.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<li><strong>In reply to:</strong> <a href="11962.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11978.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<li><strong>Reply:</strong> <a href="11978.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
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
