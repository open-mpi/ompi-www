<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 16 14:49:28 2009" -->
<!-- isoreceived="20090716184928" -->
<!-- sent="Thu, 16 Jul 2009 14:49:24 -0400" -->
<!-- isosent="20090716184924" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698" -->
<!-- id="A222F662-1B34-45E6-8589-E91D8F044652_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="24CC1E5C-0922-4E37-ABE5-144AF1A4D44B_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-16 14:49:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6456.php">Ralph Castain: "Re: [OMPI devel] XML output"</a>
<li><strong>Previous message:</strong> <a href="6454.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<li><strong>In reply to:</strong> <a href="6453.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6454.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
r21701 is a bad fix.  By definition, we now get #warnings in the build.
<br>
<p>By the comment that you guys wrote in ompi_convertor.h, that header  
<br>
file should not exist -- it should be removed and all calls to those  
<br>
functions should be replaced with their updated interfaces.
<br>
<p><p><p>On Jul 16, 2009, at 2:42 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; There was a missing header. 21701 should fixes the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 16, 2009, at 14:31 , Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; George --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This does not compile.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; btl_sctp.c: In function `mca_btl_sctp_prepare_dst':
</span><br>
<span class="quotelev2">&gt; &gt; btl_sctp.c:339: error: implicit declaration of function
</span><br>
<span class="quotelev2">&gt; &gt; `ompi_datatype_type_lb'
</span><br>
<span class="quotelev2">&gt; &gt; btl_sctp.c:339: error: `ompi_datatype_t' undeclared (first use in
</span><br>
<span class="quotelev2">&gt; &gt; this function)
</span><br>
<span class="quotelev2">&gt; &gt; btl_sctp.c:339: error: (Each undeclared identifier is reported only
</span><br>
<span class="quotelev2">&gt; &gt; once
</span><br>
<span class="quotelev2">&gt; &gt; btl_sctp.c:339: error: for each function it appears in.)
</span><br>
<span class="quotelev2">&gt; &gt; btl_sctp.c:339: error: syntax error before ')' token
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there a missing header file?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 16, 2009, at 2:25 PM, &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Author: bosilca
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: 2009-07-16 14:25:08 EDT (Thu, 16 Jul 2009)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; New Revision: 21698
</span><br>
<span class="quotelev3">&gt; &gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21698">https://svn.open-mpi.org/trac/ompi/changeset/21698</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No opal datatype functions in the BTL. The datatype attached to the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; convertor is an ompi_datatype_t so calling the ompi level functions
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is the way to go.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   trunk/ompi/mca/btl/pcie/btl_pcie.c |     2 +-
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   trunk/ompi/mca/btl/sctp/btl_sctp.c |     2 +-
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   2 files changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Modified: trunk/ompi/mca/btl/pcie/btl_pcie.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  
</span><br>
<span class="quotelev1">&gt; =====================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- trunk/ompi/mca/btl/pcie/btl_pcie.c  (original)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ trunk/ompi/mca/btl/pcie/btl_pcie.c  2009-07-16 14:25:08 EDT
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (Thu, 16 Jul 2009)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -360,7 +360,7 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     if(NULL == frag) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         return NULL;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     }
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -    ompi_datatype_type_lb(convertor-&gt;pDesc, &amp;lb);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    ompi_datatype_type_lb((ompi_datatype_t*)convertor-&gt;pDesc,  
</span><br>
<span class="quotelev1">&gt; &amp;lb);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     frag-&gt;segment.seg_addr.pval = convertor-&gt;pBaseBuf + lb +
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         convertor-&gt;bConverted;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     if(NULL == registration) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Modified: trunk/ompi/mca/btl/sctp/btl_sctp.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  
</span><br>
<span class="quotelev1">&gt; =====================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- trunk/ompi/mca/btl/sctp/btl_sctp.c  (original)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ trunk/ompi/mca/btl/sctp/btl_sctp.c  2009-07-16 14:25:08 EDT
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (Thu, 16 Jul 2009)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -336,7 +336,7 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         return NULL;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -    opal_datatype_type_lb(convertor-&gt;pDesc, &amp;lb);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    ompi_datatype_type_lb((ompi_datatype_t*)convertor-&gt;pDesc,  
</span><br>
<span class="quotelev1">&gt; &amp;lb);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     frag-&gt;segments-&gt;seg_len = *size;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     frag-&gt;segments-&gt;seg_addr.pval = convertor-&gt;pBaseBuf + lb +
</span><br>
<span class="quotelev3">&gt; &gt;&gt; convertor-&gt;bConverted;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6456.php">Ralph Castain: "Re: [OMPI devel] XML output"</a>
<li><strong>Previous message:</strong> <a href="6454.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<li><strong>In reply to:</strong> <a href="6453.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6454.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
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
