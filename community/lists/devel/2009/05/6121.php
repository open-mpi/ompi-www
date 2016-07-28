<?
$subject_val = "[OMPI devel] bug in MCA_PML_OB1_RECV_REQUEST_UNPACK()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 11:55:48 2009" -->
<!-- isoreceived="20090527155548" -->
<!-- sent="Wed, 27 May 2009 17:55:35 +0200 (CEST)" -->
<!-- isosent="20090527155535" -->
<!-- name="Roberto Ammendola" -->
<!-- email="roberto.ammendola_at_[hidden]" -->
<!-- subject="[OMPI devel] bug in MCA_PML_OB1_RECV_REQUEST_UNPACK()" -->
<!-- id="59560.141.108.7.31.1243439735.squirrel_at_141.108.7.31" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] bug in MCA_PML_OB1_RECV_REQUEST_UNPACK()<br>
<strong>From:</strong> Roberto Ammendola (<em>roberto.ammendola_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 11:55:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6122.php">George Bosilca: "Re: [OMPI devel] bug in MCA_PML_OB1_RECV_REQUEST_UNPACK()"</a>
<li><strong>Previous message:</strong> <a href="6120.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21285"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6122.php">George Bosilca: "Re: [OMPI devel] bug in MCA_PML_OB1_RECV_REQUEST_UNPACK()"</a>
<li><strong>Reply:</strong> <a href="6122.php">George Bosilca: "Re: [OMPI devel] bug in MCA_PML_OB1_RECV_REQUEST_UNPACK()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
i think i found a bug in the ob1 level, while using a multi-segment frag
<br>
on receive side. I found that the unpack function add the offset of the
<br>
mca_pml_ob1_frag_hdr_t header in every segment, while only the first one
<br>
should have. Is that correct?
<br>
That's the very simple correction:
<br>
<p>--- ompi/mca/pml/ob1/pml_ob1_recvreq.h  (revision 21297)
<br>
+++ ompi/mca/pml/ob1/pml_ob1_recvreq.h  (working copy)
<br>
@@ -263,6 +263,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iov[iov_count].iov_base = (IOVBASE_TYPE*)                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((unsigned char*)segment-&gt;seg_addr.pval + offset);   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iov_count++;                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\
<br>
+                offset = 0;                                              
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}                                                            
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}                                                                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PERUSE_TRACE_COMM_OMPI_EVENT (PERUSE_COMM_REQ_XFER_CONTINUE,     
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\
<br>
<p><p>greetings
<br>
roberto
<br>
<p><pre>
-- 
______________________________________________________________________
     Roberto Ammendola    INFN - Roma II - APE group
tel: +39-0672594504  email: roberto.ammendola_at_[hidden]   // \
     Via della Ricerca Scientifica 1 - 00133 Roma             \\_/ //
__________________________________________  ''-.._.-''-.._.. -(||)(')
                                                              '''
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6122.php">George Bosilca: "Re: [OMPI devel] bug in MCA_PML_OB1_RECV_REQUEST_UNPACK()"</a>
<li><strong>Previous message:</strong> <a href="6120.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21285"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6122.php">George Bosilca: "Re: [OMPI devel] bug in MCA_PML_OB1_RECV_REQUEST_UNPACK()"</a>
<li><strong>Reply:</strong> <a href="6122.php">George Bosilca: "Re: [OMPI devel] bug in MCA_PML_OB1_RECV_REQUEST_UNPACK()"</a>
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
