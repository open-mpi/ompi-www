<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 16 14:31:41 2009" -->
<!-- isoreceived="20090716183141" -->
<!-- sent="Thu, 16 Jul 2009 14:31:36 -0400" -->
<!-- isosent="20090716183136" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698" -->
<!-- id="808D55F2-FAC1-4E27-AF8A-87BC93F30624_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200907161825.n6GIP9VG017964_at_sourcehaven.osl.iu.edu" -->
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
<strong>Date:</strong> 2009-07-16 14:31:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6452.php">Ralph Castain: "Re: [OMPI devel] XML output"</a>
<li><strong>Previous message:</strong> <a href="6450.php">Greg Watson: "[OMPI devel] XML output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6453.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<li><strong>Reply:</strong> <a href="6453.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<li><strong>Reply:</strong> <a href="6454.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>
<p>This does not compile.
<br>
<p>btl_sctp.c: In function `mca_btl_sctp_prepare_dst':
<br>
btl_sctp.c:339: error: implicit declaration of function  
<br>
`ompi_datatype_type_lb'
<br>
btl_sctp.c:339: error: `ompi_datatype_t' undeclared (first use in this  
<br>
function)
<br>
btl_sctp.c:339: error: (Each undeclared identifier is reported only once
<br>
btl_sctp.c:339: error: for each function it appears in.)
<br>
btl_sctp.c:339: error: syntax error before ')' token
<br>
<p>Is there a missing header file?
<br>
<p><p><p>On Jul 16, 2009, at 2:25 PM, &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2009-07-16 14:25:08 EDT (Thu, 16 Jul 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 21698
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21698">https://svn.open-mpi.org/trac/ompi/changeset/21698</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; No opal datatype functions in the BTL. The datatype attached to the
</span><br>
<span class="quotelev1">&gt; convertor is an ompi_datatype_t so calling the ompi level functions
</span><br>
<span class="quotelev1">&gt; is the way to go.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/pcie/btl_pcie.c |     2 +-
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/btl_sctp.c |     2 +-
</span><br>
<span class="quotelev1">&gt;    2 files changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/pcie/btl_pcie.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/pcie/btl_pcie.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/pcie/btl_pcie.c  2009-07-16 14:25:08 EDT  
</span><br>
<span class="quotelev1">&gt; (Thu, 16 Jul 2009)
</span><br>
<span class="quotelev1">&gt; @@ -360,7 +360,7 @@
</span><br>
<span class="quotelev1">&gt;      if(NULL == frag) {
</span><br>
<span class="quotelev1">&gt;          return NULL;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    ompi_datatype_type_lb(convertor-&gt;pDesc, &amp;lb);
</span><br>
<span class="quotelev1">&gt; +    ompi_datatype_type_lb((ompi_datatype_t*)convertor-&gt;pDesc, &amp;lb);
</span><br>
<span class="quotelev1">&gt;      frag-&gt;segment.seg_addr.pval = convertor-&gt;pBaseBuf + lb +
</span><br>
<span class="quotelev1">&gt;          convertor-&gt;bConverted;
</span><br>
<span class="quotelev1">&gt;      if(NULL == registration) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/sctp/btl_sctp.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/sctp/btl_sctp.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/sctp/btl_sctp.c  2009-07-16 14:25:08 EDT  
</span><br>
<span class="quotelev1">&gt; (Thu, 16 Jul 2009)
</span><br>
<span class="quotelev1">&gt; @@ -336,7 +336,7 @@
</span><br>
<span class="quotelev1">&gt;          return NULL;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    opal_datatype_type_lb(convertor-&gt;pDesc, &amp;lb);
</span><br>
<span class="quotelev1">&gt; +    ompi_datatype_type_lb((ompi_datatype_t*)convertor-&gt;pDesc, &amp;lb);
</span><br>
<span class="quotelev1">&gt;      frag-&gt;segments-&gt;seg_len = *size;
</span><br>
<span class="quotelev1">&gt;      frag-&gt;segments-&gt;seg_addr.pval = convertor-&gt;pBaseBuf + lb +  
</span><br>
<span class="quotelev1">&gt; convertor-&gt;bConverted;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<li><strong>Next message:</strong> <a href="6452.php">Ralph Castain: "Re: [OMPI devel] XML output"</a>
<li><strong>Previous message:</strong> <a href="6450.php">Greg Watson: "[OMPI devel] XML output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6453.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<li><strong>Reply:</strong> <a href="6453.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<li><strong>Reply:</strong> <a href="6454.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
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
