<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 14 09:44:20 2007" -->
<!-- isoreceived="20071114144420" -->
<!-- sent="Wed, 14 Nov 2007 06:44:06 -0800" -->
<!-- isosent="20071114144406" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723" -->
<!-- id="473B09B6.1050302_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200711132339.lADNdHQN006258_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-14 09:44:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2614.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<li><strong>Previous message:</strong> <a href="2612.php">Terry Dontje: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2614.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<li><strong>Reply:</strong> <a href="2614.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<li><strong>Maybe reply:</strong> <a href="2615.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The following files bother me about this commit:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;trunk/ompi/mca/btl/sctp/sctp_writev.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;trunk/ompi/mca/btl/sctp/sctp_writev.h
<br>
<p>They bother me for 2 reasons:
<br>
1. Their naming does not follow the prefix rule
<br>
2. They are LGPL licensed. While I personally like the LGPL, I do not 
<br>
believe it is compatible with the BSD license that OMPI is distributed 
<br>
under. I think (though I could be wrong) that these files need to be 
<br>
removed from the repository and the functionality implemented in some 
<br>
other way.
<br>
<p>Tim
<br>
<p><p>penoff_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: penoff
</span><br>
<span class="quotelev1">&gt; Date: 2007-11-13 18:39:16 EST (Tue, 13 Nov 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 16723
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16723">https://svn.open-mpi.org/trac/ompi/changeset/16723</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; initial SCTP BTL commit
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/.ompi_ignore
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/.ompi_unignore
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/Makefile.am
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/btl_sctp.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/btl_sctp.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/btl_sctp_addr.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/btl_sctp_component.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/btl_sctp_component.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/btl_sctp_endpoint.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/btl_sctp_endpoint.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/btl_sctp_frag.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/btl_sctp_frag.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/btl_sctp_hdr.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/btl_sctp_proc.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/btl_sctp_proc.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/btl_sctp_recv_handler.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/btl_sctp_recv_handler.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/btl_sctp_utils.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/btl_sctp_utils.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/configure.m4
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/configure.params
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/sctp_writev.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/sctp_writev.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Diff not shown due to size (201438 bytes).
</span><br>
<span class="quotelev1">&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	svn diff -r 16722:16723 --no-diff-deleted
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2614.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<li><strong>Previous message:</strong> <a href="2612.php">Terry Dontje: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2614.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<li><strong>Reply:</strong> <a href="2614.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<li><strong>Maybe reply:</strong> <a href="2615.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
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
