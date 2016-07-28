<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 16 14:45:09 2009" -->
<!-- isoreceived="20090716184509" -->
<!-- sent="Thu, 16 Jul 2009 14:45:04 -0400" -->
<!-- isosent="20090716184504" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698" -->
<!-- id="7CA522C9-F711-4A1C-AB38-914423F5FEC0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="808D55F2-FAC1-4E27-AF8A-87BC93F30624_at_cisco.com" -->
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
<strong>Date:</strong> 2009-07-16 14:45:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6455.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<li><strong>Previous message:</strong> <a href="6453.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<li><strong>In reply to:</strong> <a href="6451.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Even worse, I was trying to fix this by changing btl_sctp.c from
<br>
<p>#include &quot;opal/datatype/opal_convertor.h&quot;
<br>
<p>to
<br>
<p>#include &quot;ompi/datatype/ompi_convertor.h&quot;
<br>
<p>But then I get
<br>
<p>#warning &quot;This header file should only be included as a convenience.  
<br>
Please use the opal_convert.h header, functions and macros&quot;
<br>
<p>And the top of that file has the following:
<br>
<p>/*
<br>
&nbsp;&nbsp;* XXX TODO To be deleted again.
<br>
&nbsp;&nbsp;* Very small interface to have code, which depends on  
<br>
ompi_convertor_prepare... interface
<br>
&nbsp;&nbsp;* to work, still...
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;* However, still any header #include &quot;opal/datatype/ 
<br>
opal_convertor.h&quot; will need
<br>
&nbsp;&nbsp;* to be renamed to #include &quot;ompi/datatype/ompi_convertor.h&quot;
<br>
&nbsp;&nbsp;*/
<br>
<p>WTF?
<br>
<p>I dislike that this header was put in as a workaround to not have to  
<br>
update other code to match the new interface (i.e., they're all 1- 
<br>
liner inline functions).  This is significantly icky and should be  
<br>
fixed.  If you're going to update the interface, then update it.   
<br>
Don't put a patchwork around making it look like you didn't update it.
<br>
<p><p><p><p><p>On Jul 16, 2009, at 2:31 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; George --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This does not compile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl_sctp.c: In function `mca_btl_sctp_prepare_dst':
</span><br>
<span class="quotelev1">&gt; btl_sctp.c:339: error: implicit declaration of function
</span><br>
<span class="quotelev1">&gt; `ompi_datatype_type_lb'
</span><br>
<span class="quotelev1">&gt; btl_sctp.c:339: error: `ompi_datatype_t' undeclared (first use in this
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt; btl_sctp.c:339: error: (Each undeclared identifier is reported only  
</span><br>
<span class="quotelev1">&gt; once
</span><br>
<span class="quotelev1">&gt; btl_sctp.c:339: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; btl_sctp.c:339: error: syntax error before ')' token
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a missing header file?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 16, 2009, at 2:25 PM, &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2009-07-16 14:25:08 EDT (Thu, 16 Jul 2009)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 21698
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21698">https://svn.open-mpi.org/trac/ompi/changeset/21698</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; No opal datatype functions in the BTL. The datatype attached to the
</span><br>
<span class="quotelev2">&gt; &gt; convertor is an ompi_datatype_t so calling the ompi level functions
</span><br>
<span class="quotelev2">&gt; &gt; is the way to go.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/pcie/btl_pcie.c |     2 +-
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/sctp/btl_sctp.c |     2 +-
</span><br>
<span class="quotelev2">&gt; &gt;    2 files changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/mca/btl/pcie/btl_pcie.c
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/mca/btl/pcie/btl_pcie.c  (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/mca/btl/pcie/btl_pcie.c  2009-07-16 14:25:08 EDT
</span><br>
<span class="quotelev2">&gt; &gt; (Thu, 16 Jul 2009)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -360,7 +360,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;      if(NULL == frag) {
</span><br>
<span class="quotelev2">&gt; &gt;          return NULL;
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt; -    ompi_datatype_type_lb(convertor-&gt;pDesc, &amp;lb);
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_datatype_type_lb((ompi_datatype_t*)convertor-&gt;pDesc, &amp;lb);
</span><br>
<span class="quotelev2">&gt; &gt;      frag-&gt;segment.seg_addr.pval = convertor-&gt;pBaseBuf + lb +
</span><br>
<span class="quotelev2">&gt; &gt;          convertor-&gt;bConverted;
</span><br>
<span class="quotelev2">&gt; &gt;      if(NULL == registration) {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/mca/btl/sctp/btl_sctp.c
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/mca/btl/sctp/btl_sctp.c  (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/mca/btl/sctp/btl_sctp.c  2009-07-16 14:25:08 EDT
</span><br>
<span class="quotelev2">&gt; &gt; (Thu, 16 Jul 2009)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -336,7 +336,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;          return NULL;
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    opal_datatype_type_lb(convertor-&gt;pDesc, &amp;lb);
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_datatype_type_lb((ompi_datatype_t*)convertor-&gt;pDesc, &amp;lb);
</span><br>
<span class="quotelev2">&gt; &gt;      frag-&gt;segments-&gt;seg_len = *size;
</span><br>
<span class="quotelev2">&gt; &gt;      frag-&gt;segments-&gt;seg_addr.pval = convertor-&gt;pBaseBuf + lb +
</span><br>
<span class="quotelev2">&gt; &gt; convertor-&gt;bConverted;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="6455.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<li><strong>Previous message:</strong> <a href="6453.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<li><strong>In reply to:</strong> <a href="6451.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
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
