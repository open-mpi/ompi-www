<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 14 09:46:00 2007" -->
<!-- isoreceived="20070814134600" -->
<!-- sent="Tue, 14 Aug 2007 15:44:50 +0200" -->
<!-- isosent="20070814134450" -->
<!-- name="Sven Stork" -->
<!-- email="stork_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848" -->
<!-- id="200708141544.50396.stork_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="46C1ACDF.30506_at_cs.indiana.edu" -->
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
<strong>From:</strong> Sven Stork (<em>stork_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-14 09:44:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2147.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<li><strong>Previous message:</strong> <a href="2145.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<li><strong>In reply to:</strong> <a href="2145.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2147.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<li><strong>Reply:</strong> <a href="2147.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday 14 August 2007 15:23, Tim Prins wrote:
<br>
<span class="quotelev1">&gt; This might be breaking things on odin. All our 64 bit openib mtt tests 
</span><br>
<span class="quotelev1">&gt; have the following output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [odin003.cs.indiana.edu:30971] Wrong QP specification (QP 0 
</span><br>
<span class="quotelev1">&gt; &quot;P,128,256,128,16:S,1024,256,128,32:S,4096,256,128,32:S,65536,256,128,32&quot;). 
</span><br>
<span class="quotelev1">&gt; Point-to-point QP get 1-5 parameters
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, on my debug build I do not get any errors. Is anyone else 
</span><br>
<span class="quotelev1">&gt; seeing this?
</span><br>
<p>Just checked the mtt webpage for our viscluster which is 64. And It shows the 
<br>
same error message. By locking to the commit it looks like that the first  
<br>
triple has been extended to a quadruple ?
<br>
<p>Cheers,
<br>
&nbsp;&nbsp;Sven 
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Author: jsquyres
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2007-08-13 17:51:05 EDT (Mon, 13 Aug 2007)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 15848
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15848">https://svn.open-mpi.org/trac/ompi/changeset/15848</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; Change the default receive_queues value per
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2007/08/2100.php">http://www.open-mpi.org/community/lists/devel/2007/08/2100.php</a>.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/openib/btl_openib_mca.c |     2 +-                                      
</span><br>
<span class="quotelev2">&gt; &gt;    1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_mca.c
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
==============================================================================
<br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/mca/btl/openib/btl_openib_mca.c	(original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/mca/btl/openib/btl_openib_mca.c	2007-08-13 17:51:05 EDT 
</span><br>
(Mon, 13 Aug 2007)
<br>
<span class="quotelev2">&gt; &gt; @@ -477,7 +477,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;      char *str;
</span><br>
<span class="quotelev2">&gt; &gt;      char **queues, **params = NULL;
</span><br>
<span class="quotelev2">&gt; &gt;      int num_pp_qps = 0, num_srq_qps = 0, qp = 0, ret = OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt; &gt; -    char *default_qps 
</span><br>
= &quot;P,128,16,4;S,1024,256,128,32;S,4096,256,128,32;S,65536,256,128,32&quot;;
<br>
<span class="quotelev2">&gt; &gt; +    char *default_qps 
</span><br>
= &quot;P,128,256,128,16:S,1024,256,128,32:S,4096,256,128,32:S,65536,256,128,32&quot;;
<br>
<span class="quotelev2">&gt; &gt;      uint32_t max_qp_size, max_size_needed;
</span><br>
<span class="quotelev2">&gt; &gt;      
</span><br>
<span class="quotelev2">&gt; &gt;      reg_string(&quot;receive_queues&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2147.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<li><strong>Previous message:</strong> <a href="2145.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<li><strong>In reply to:</strong> <a href="2145.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2147.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<li><strong>Reply:</strong> <a href="2147.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
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
