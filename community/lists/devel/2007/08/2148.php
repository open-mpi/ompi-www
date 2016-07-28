<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 14 10:01:16 2007" -->
<!-- isoreceived="20070814140116" -->
<!-- sent="Tue, 14 Aug 2007 10:01:00 -0400" -->
<!-- isosent="20070814140100" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848" -->
<!-- id="421E503B-04C3-4B7B-A6A2-7550B2CDAEFD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7BF6E6A0-247E-4B94-832E-A57454C2E1BE_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-14 10:01:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2149.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<li><strong>Previous message:</strong> <a href="2147.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<li><strong>In reply to:</strong> <a href="2147.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2149.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<li><strong>Reply:</strong> <a href="2149.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
#$@#$  I see what happened.  The help string for the MCA parameter  
<br>
said &quot;colon&quot; (and that's the string that I sent out last week and  
<br>
pasted into the code yesterday), but the parser was actually checking  
<br>
for semicolons.
<br>
<p><p><p>On Aug 14, 2007, at 9:57 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Looks like the parsing is wrong for the QP specification.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @#!@#$@!#$ I swear I checked this before I committed, but apparently
</span><br>
<span class="quotelev1">&gt; I must have goofed.  I'll go fix now...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 14, 2007, at 9:44 AM, Sven Stork wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tuesday 14 August 2007 15:23, Tim Prins wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This might be breaking things on odin. All our 64 bit openib mtt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tests
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have the following output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [odin003.cs.indiana.edu:30971] Wrong QP specification (QP 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;P,128,256,128,16:S,1024,256,128,32:S,4096,256,128,32:S,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 65536,256,128,32&quot;).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Point-to-point QP get 1-5 parameters
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, on my debug build I do not get any errors. Is anyone else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seeing this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just checked the mtt webpage for our viscluster which is 64. And It
</span><br>
<span class="quotelev2">&gt;&gt; shows the
</span><br>
<span class="quotelev2">&gt;&gt; same error message. By locking to the commit it looks like that the
</span><br>
<span class="quotelev2">&gt;&gt; first
</span><br>
<span class="quotelev2">&gt;&gt; triple has been extended to a quadruple ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;   Sven
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: jsquyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2007-08-13 17:51:05 EDT (Mon, 13 Aug 2007)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 15848
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15848">https://svn.open-mpi.org/trac/ompi/changeset/15848</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Change the default receive_queues value per
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2007/08/2100.php">http://www.open-mpi.org/community/lists/devel/2007/08/2100.php</a>.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    trunk/ompi/mca/btl/openib/btl_openib_mca.c |     2 +-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_mca.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; ========
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/ompi/mca/btl/openib/btl_openib_mca.c	(original)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_mca.c	2007-08-13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 17:51:05 EDT
</span><br>
<span class="quotelev2">&gt;&gt; (Mon, 13 Aug 2007)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -477,7 +477,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      char *str;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      char **queues, **params = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      int num_pp_qps = 0, num_srq_qps = 0, qp = 0, ret = OMPI_ERROR;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    char *default_qps
</span><br>
<span class="quotelev2">&gt;&gt; = &quot;P,128,16,4;S,1024,256,128,32;S,4096,256,128,32;S, 
</span><br>
<span class="quotelev2">&gt;&gt; 65536,256,128,32&quot;;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    char *default_qps
</span><br>
<span class="quotelev2">&gt;&gt; = &quot;P,128,256,128,16:S,1024,256,128,32:S,4096,256,128,32:S,
</span><br>
<span class="quotelev2">&gt;&gt; 65536,256,128,32&quot;;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      uint32_t max_qp_size, max_size_needed;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      reg_string(&quot;receive_queues&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2149.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<li><strong>Previous message:</strong> <a href="2147.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<li><strong>In reply to:</strong> <a href="2147.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2149.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<li><strong>Reply:</strong> <a href="2149.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
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
