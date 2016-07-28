<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 30 20:18:13 2013" -->
<!-- isoreceived="20130501001813" -->
<!-- sent="Wed, 1 May 2013 02:18:07 +0200" -->
<!-- isosent="20130501001807" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request" -->
<!-- id="2E823162-078E-4D90-A0FA-AEC026931EF1_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DF152F4B8E08AE4AAF80927EA5DC03AC0E9B1B3C_at_G01JPEXMBYT02" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-30 20:18:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/05/12334.php">Lisandro Dalcin: "[OMPI devel] MPI_Mrecv(..., MPI_STATUS_IGNORE) in Open MPI 1.7.1"</a>
<li><strong>Previous message:</strong> <a href="12332.php">Larry Baker: "Re: [OMPI devel] June OMPI developer's meeting"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/01/11985.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/05/12335.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/05/12335.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Takahiro,
<br>
<p>I went over this ticket and attached a new patch. Basically I went over all the possible cases, both in test and wait, and ensure the behavior is always consistent. Please give it a try, and let us know of the outcome.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p><p><p>On Jan 25, 2013, at 00:53 , &quot;Kawashima, Takahiro&quot; &lt;t-kawashima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've filed the ticket.
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/3475">https://svn.open-mpi.org/trac/ompi/ticket/3475</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks for the summary!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you file tickets about this stuff against 1.7?  Included your patches, etc. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; These are pretty obscure issues and I'm ok not fixing them in the 1.6 branch (unless someone has a burning desire to get them fixed in 1.6). 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But we should properly track and fix these in the 1.7 series. I'd mark them as &quot;critical&quot; so that they don't get lost in the wilderness of other bugs. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 22, 2013, at 8:57 PM, &quot;Kawashima, Takahiro&quot; &lt;t-kawashima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I reported the bug three months ago.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your commit r27880 resolved one of the bugs reported by me,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in another approach.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11555.php">http://www.open-mpi.org/community/lists/devel/2012/10/11555.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But other bugs are still open.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;(1) MPI_SOURCE of MPI_Status for a null request must be MPI_ANY_SOURCE.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in my previous mail is not fixed yet. This can be fixed by my patch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ompi/mpi/c/wait.c and ompi/request/request.c part only) attached
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in my another mail.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11561.php">http://www.open-mpi.org/community/lists/devel/2012/10/11561.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;(2) MPI_Status for an inactive request must be an empty status.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in my previous mail is partially fixed. MPI_Wait is fixed by your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r27880. But MPI_Waitall and MPI_Testall should be fixed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Codes similar to your r27880 should be inserted to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_request_default_wait_all and ompi_request_default_test_all.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can confirm the fixes by the test program status.c attached in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my previous mail. Run with -n 2. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11555.php">http://www.open-mpi.org/community/lists/devel/2012/10/11555.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI development team,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fujitsu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To be honest it was hanging in one of my repos for some time. If I'm not mistaken it is somehow related to one active ticket (but I couldn't find the info). It might be good to push it upstream.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 22, 2013, at 16:27 , &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; George --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is there any reason not to CMR this to v1.6 and v1.7?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jan 21, 2013, at 6:35 AM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Author: bosilca (George Bosilca)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Date: 2013-01-21 06:35:42 EST (Mon, 21 Jan 2013)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; New Revision: 27880
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/27880">https://svn.open-mpi.org/trac/ompi/changeset/27880</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; My understanding is that an MPI_WAIT() on an inactive request should
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; return the empty status (MPI 3.0 page 52 line 46).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; trunk/ompi/request/req_wait.c |     3 +++                                     
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1 files changed, 3 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Modified: trunk/ompi/request/req_wait.c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --- trunk/ompi/request/req_wait.c    Sat Jan 19 19:33:42 2013    (r27879)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +++ trunk/ompi/request/req_wait.c    2013-01-21 06:35:42 EST (Mon, 21 Jan 2013)    (r27880)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; @@ -61,6 +61,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  if( req-&gt;req_persistent ) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      if( req-&gt;req_state == OMPI_REQUEST_INACTIVE ) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +            if (MPI_STATUS_IGNORE != status) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +                *status = ompi_status_empty;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      req-&gt;req_state = OMPI_REQUEST_INACTIVE;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/05/12334.php">Lisandro Dalcin: "[OMPI devel] MPI_Mrecv(..., MPI_STATUS_IGNORE) in Open MPI 1.7.1"</a>
<li><strong>Previous message:</strong> <a href="12332.php">Larry Baker: "Re: [OMPI devel] June OMPI developer's meeting"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/01/11985.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/05/12335.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/05/12335.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
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
