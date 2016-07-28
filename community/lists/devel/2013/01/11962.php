<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 19:30:55 2013" -->
<!-- isoreceived="20130123003055" -->
<!-- sent="Tue, 22 Jan 2013 19:30:46 -0500" -->
<!-- isosent="20130123003046" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request" -->
<!-- id="3EF78697-F06D-42C6-ACCC-B4A12EFD7FAE_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC3E08CBBF_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-01-22 19:30:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11963.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<li><strong>Previous message:</strong> <a href="11961.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="11958.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11963.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<li><strong>Reply:</strong> <a href="11963.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To be honest it was hanging in one of my repos for some time. If I'm not mistaken it is somehow related to one active ticket (but I couldn't find the info). It might be good to push it upstream.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Jan 22, 2013, at 16:27 , &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any reason not to CMR this to v1.6 and v1.7?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 21, 2013, at 6:35 AM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca (George Bosilca)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2013-01-21 06:35:42 EST (Mon, 21 Jan 2013)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 27880
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/27880">https://svn.open-mpi.org/trac/ompi/changeset/27880</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; My understanding is that an MPI_WAIT() on an inactive request should
</span><br>
<span class="quotelev2">&gt;&gt; return the empty status (MPI 3.0 page 52 line 46).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/request/req_wait.c |     3 +++                                     
</span><br>
<span class="quotelev2">&gt;&gt;  1 files changed, 3 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/request/req_wait.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/request/req_wait.c	Sat Jan 19 19:33:42 2013	(r27879)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/request/req_wait.c	2013-01-21 06:35:42 EST (Mon, 21 Jan 2013)	(r27880)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -61,6 +61,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    if( req-&gt;req_persistent ) {
</span><br>
<span class="quotelev2">&gt;&gt;        if( req-&gt;req_state == OMPI_REQUEST_INACTIVE ) {
</span><br>
<span class="quotelev2">&gt;&gt; +            if (MPI_STATUS_IGNORE != status) {
</span><br>
<span class="quotelev2">&gt;&gt; +                *status = ompi_status_empty;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt;            return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;        req-&gt;req_state = OMPI_REQUEST_INACTIVE;
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
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11963.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<li><strong>Previous message:</strong> <a href="11961.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="11958.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11963.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<li><strong>Reply:</strong> <a href="11963.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
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
