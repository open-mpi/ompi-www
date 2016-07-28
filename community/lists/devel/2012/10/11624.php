<?
$subject_val = "Re: [OMPI devel] MPI-RMA on uGNI?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 22 10:10:10 2012" -->
<!-- isoreceived="20121022141010" -->
<!-- sent="Mon, 22 Oct 2012 10:10:03 -0400" -->
<!-- isosent="20121022141003" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI-RMA on uGNI?" -->
<!-- id="F4650B4E-FB48-4B6A-8755-7A8E31D774CE_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA16SrQJHArNPEYbzue98WemWFpq0tDFWz6sBZeqU+-8aLg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI-RMA on uGNI?<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-22 10:10:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11625.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27451 - in trunk:	ompi/mca/allocator/bucket ompi/mca/bcol/basesmuma	ompi/mca/bml/base ompi/mca/btl ompi/mca/btl/base	ompi/mca/btl/openib ompi/mca/btl/sm ompi/mca/btl/smcuda	ompi/mca/btl/template ompi/mca/btl/va..."</a>
<li><strong>Previous message:</strong> <a href="11623.php">Christopher Yeoh: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>In reply to:</strong> <a href="11622.php">Paul Hargrove: "[OMPI devel] MPI-RMA on uGNI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11628.php">Paul Hargrove: "Re: [OMPI devel] MPI-RMA on uGNI?"</a>
<li><strong>Reply:</strong> <a href="11628.php">Paul Hargrove: "Re: [OMPI devel] MPI-RMA on uGNI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>Did you look at   mca_btl_ugni_put / mca_btl_ugni_get functions  in the ugni btl ?
<br>
<p>-Pasha
<br>
<p>I am trying to resolve an odd issue I am seeing with my one uGNI-based code, and was hoping to use OMPI's uGNI support as an example of correct usage.  My particular interest is in RDMA, but as far as I can tell the uGNI blt in ompi-trunk doesn't have the btl_put or blt_get entry points.  So, if I understand correctly, that means osc/pt2pt is used for MPI-RMA support on a Cray XE.  Is that correct?
<br>
<p>-Paul
<br>
<p><pre>
--
Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11625.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27451 - in trunk:	ompi/mca/allocator/bucket ompi/mca/bcol/basesmuma	ompi/mca/bml/base ompi/mca/btl ompi/mca/btl/base	ompi/mca/btl/openib ompi/mca/btl/sm ompi/mca/btl/smcuda	ompi/mca/btl/template ompi/mca/btl/va..."</a>
<li><strong>Previous message:</strong> <a href="11623.php">Christopher Yeoh: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>In reply to:</strong> <a href="11622.php">Paul Hargrove: "[OMPI devel] MPI-RMA on uGNI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11628.php">Paul Hargrove: "Re: [OMPI devel] MPI-RMA on uGNI?"</a>
<li><strong>Reply:</strong> <a href="11628.php">Paul Hargrove: "Re: [OMPI devel] MPI-RMA on uGNI?"</a>
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
