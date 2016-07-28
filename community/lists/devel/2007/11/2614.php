<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 14 09:52:22 2007" -->
<!-- isoreceived="20071114145222" -->
<!-- sent="Wed, 14 Nov 2007 16:52:16 +0200" -->
<!-- isosent="20071114145216" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723" -->
<!-- id="20071114145216.GE3532_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="473B09B6.1050302_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-14 09:52:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2615.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<li><strong>Previous message:</strong> <a href="2613.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<li><strong>In reply to:</strong> <a href="2613.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2615.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Nov 14, 2007 at 06:44:06AM -0800, Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following files bother me about this commit:
</span><br>
<span class="quotelev1">&gt;      trunk/ompi/mca/btl/sctp/sctp_writev.c
</span><br>
<span class="quotelev1">&gt;      trunk/ompi/mca/btl/sctp/sctp_writev.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They bother me for 2 reasons:
</span><br>
<span class="quotelev1">&gt; 1. Their naming does not follow the prefix rule
</span><br>
<span class="quotelev1">&gt; 2. They are LGPL licensed. While I personally like the LGPL, I do not 
</span><br>
<span class="quotelev1">&gt; believe it is compatible with the BSD license that OMPI is distributed 
</span><br>
<span class="quotelev1">&gt; under. I think (though I could be wrong) that these files need to be 
</span><br>
<span class="quotelev1">&gt; removed from the repository and the functionality implemented in some 
</span><br>
<span class="quotelev1">&gt; other way.
</span><br>
<p>Is function that fills a couple of struct fields can be reimplemented in
<br>
any other way? :)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; penoff_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Author: penoff
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2007-11-13 18:39:16 EST (Tue, 13 Nov 2007)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 16723
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16723">https://svn.open-mpi.org/trac/ompi/changeset/16723</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; initial SCTP BTL commit
</span><br>
<span class="quotelev2">&gt; &gt; Added:
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/.ompi_ignore
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/.ompi_unignore
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/Makefile.am
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/btl_sctp.c
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/btl_sctp.h
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_addr.h
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_component.c
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_component.h
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_endpoint.c
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_endpoint.h
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_frag.c
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_frag.h
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_hdr.h
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_proc.c
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_proc.h
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_recv_handler.c
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_recv_handler.h
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_utils.c
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_utils.h
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/configure.m4
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/configure.params
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/sctp_writev.c
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/sctp_writev.h
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Diff not shown due to size (201438 bytes).
</span><br>
<span class="quotelev2">&gt; &gt; To see the diff, run the following command:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 	svn diff -r 16722:16723 --no-diff-deleted
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2615.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<li><strong>Previous message:</strong> <a href="2613.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<li><strong>In reply to:</strong> <a href="2613.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2615.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
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
