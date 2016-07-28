<?
$subject_val = "Re: [OMPI devel] bug in MCA_PML_OB1_RECV_REQUEST_UNPACK()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 12:13:04 2009" -->
<!-- isoreceived="20090527161304" -->
<!-- sent="Wed, 27 May 2009 12:12:54 -0400" -->
<!-- isosent="20090527161254" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in MCA_PML_OB1_RECV_REQUEST_UNPACK()" -->
<!-- id="98606312-DF01-4924-AD59-10A0F06452F9_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="59560.141.108.7.31.1243439735.squirrel_at_141.108.7.31" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bug in MCA_PML_OB1_RECV_REQUEST_UNPACK()<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 12:12:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6123.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<li><strong>Previous message:</strong> <a href="6121.php">Roberto Ammendola: "[OMPI devel] bug in MCA_PML_OB1_RECV_REQUEST_UNPACK()"</a>
<li><strong>In reply to:</strong> <a href="6121.php">Roberto Ammendola: "[OMPI devel] bug in MCA_PML_OB1_RECV_REQUEST_UNPACK()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're absolutely right. The patch is already in the trunk (commit  
<br>
r21300), and will be in the next release.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 27, 2009, at 11:55 , Roberto Ammendola wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; i think i found a bug in the ob1 level, while using a multi-segment  
</span><br>
<span class="quotelev1">&gt; frag
</span><br>
<span class="quotelev1">&gt; on receive side. I found that the unpack function add the offset of  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_frag_hdr_t header in every segment, while only the first  
</span><br>
<span class="quotelev1">&gt; one
</span><br>
<span class="quotelev1">&gt; should have. Is that correct?
</span><br>
<span class="quotelev1">&gt; That's the very simple correction:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/pml/ob1/pml_ob1_recvreq.h  (revision 21297)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/pml/ob1/pml_ob1_recvreq.h  (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -263,6 +263,7 @@
</span><br>
<span class="quotelev1">&gt;                 iov[iov_count].iov_base = (IOVBASE_TYPE*)
</span><br>
<span class="quotelev1">&gt;        \
</span><br>
<span class="quotelev1">&gt;                     ((unsigned char*)segment-&gt;seg_addr.pval + offset);
</span><br>
<span class="quotelev1">&gt;        \
</span><br>
<span class="quotelev1">&gt;                 iov_count++;
</span><br>
<span class="quotelev1">&gt;        \
</span><br>
<span class="quotelev1">&gt; +                offset = 0;
</span><br>
<span class="quotelev1">&gt;        \
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;        \
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;        \
</span><br>
<span class="quotelev1">&gt;         PERUSE_TRACE_COMM_OMPI_EVENT (PERUSE_COMM_REQ_XFER_CONTINUE,
</span><br>
<span class="quotelev1">&gt;        \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; greetings
</span><br>
<span class="quotelev1">&gt; roberto
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ______________________________________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Roberto Ammendola    INFN - Roma II - APE group
</span><br>
<span class="quotelev1">&gt; tel: +39-0672594504  email: roberto.ammendola_at_[hidden]   // \
</span><br>
<span class="quotelev1">&gt;     Via della Ricerca Scientifica 1 - 00133 Roma             \\_/ //
</span><br>
<span class="quotelev1">&gt; __________________________________________  ''-.._.-''-.._.. -(||)(')
</span><br>
<span class="quotelev1">&gt;                                                              '''
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
<li><strong>Next message:</strong> <a href="6123.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<li><strong>Previous message:</strong> <a href="6121.php">Roberto Ammendola: "[OMPI devel] bug in MCA_PML_OB1_RECV_REQUEST_UNPACK()"</a>
<li><strong>In reply to:</strong> <a href="6121.php">Roberto Ammendola: "[OMPI devel] bug in MCA_PML_OB1_RECV_REQUEST_UNPACK()"</a>
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
