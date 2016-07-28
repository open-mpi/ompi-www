<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26934 - trunk/ompi/mca/io/ompio";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  1 09:01:41 2012" -->
<!-- isoreceived="20120801130141" -->
<!-- sent="Wed, 01 Aug 2012 08:01:34 -0500" -->
<!-- isosent="20120801130134" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r26934 - trunk/ompi/mca/io/ompio" -->
<!-- id="501928AE.2030501_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120801040848.6A22015FA7A_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r26934 - trunk/ompi/mca/io/ompio<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-01 09:01:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11356.php">Christopher Yeoh: "[OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Previous message:</strong> <a href="11354.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
oops, thanks Ralph, overlooked that one...
<br>
<p>Edgar
<br>
<p>On 7/31/2012 11:08 PM, svn-commit-mailer_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev1">&gt; Date: 2012-08-01 00:08:47 EDT (Wed, 01 Aug 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 26934
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26934">https://svn.open-mpi.org/trac/ompi/changeset/26934</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add missing include file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/io/ompio/Makefile.am |     1 +                                       
</span><br>
<span class="quotelev1">&gt;    1 files changed, 1 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/io/ompio/Makefile.am
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/io/ompio/Makefile.am	Tue Jul 31 17:50:34 2012	(r26933)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/io/ompio/Makefile.am	2012-08-01 00:08:47 EDT (Wed, 01 Aug 2012)	(r26934)
</span><br>
<span class="quotelev1">&gt; @@ -42,6 +42,7 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  sources = \
</span><br>
<span class="quotelev1">&gt;          io_ompio.h \
</span><br>
<span class="quotelev1">&gt; +        io_ompio_nbc.h \
</span><br>
<span class="quotelev1">&gt;          io_ompio.c \
</span><br>
<span class="quotelev1">&gt;          io_ompio_component.c \
</span><br>
<span class="quotelev1">&gt;          io_ompio_module.c \
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11355/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11356.php">Christopher Yeoh: "[OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Previous message:</strong> <a href="11354.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
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
