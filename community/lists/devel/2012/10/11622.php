<?
$subject_val = "[OMPI devel] MPI-RMA on uGNI?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 19 19:21:13 2012" -->
<!-- isoreceived="20121019232113" -->
<!-- sent="Fri, 19 Oct 2012 16:21:07 -0700" -->
<!-- isosent="20121019232107" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI-RMA on uGNI?" -->
<!-- id="CAAvDA16SrQJHArNPEYbzue98WemWFpq0tDFWz6sBZeqU+-8aLg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] MPI-RMA on uGNI?<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-19 19:21:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11623.php">Christopher Yeoh: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Previous message:</strong> <a href="11621.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11624.php">Shamis, Pavel: "Re: [OMPI devel] MPI-RMA on uGNI?"</a>
<li><strong>Reply:</strong> <a href="11624.php">Shamis, Pavel: "Re: [OMPI devel] MPI-RMA on uGNI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to resolve an odd issue I am seeing with my one uGNI-based
<br>
code, and was hoping to use OMPI's uGNI support as an example of correct
<br>
usage.  My particular interest is in RDMA, but as far as I can tell the
<br>
uGNI blt in ompi-trunk doesn't have the btl_put or blt_get entry points.
<br>
&nbsp;So, if I understand correctly, that means osc/pt2pt is used for MPI-RMA
<br>
support on a Cray XE.  Is that correct?
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11622/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11623.php">Christopher Yeoh: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Previous message:</strong> <a href="11621.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11624.php">Shamis, Pavel: "Re: [OMPI devel] MPI-RMA on uGNI?"</a>
<li><strong>Reply:</strong> <a href="11624.php">Shamis, Pavel: "Re: [OMPI devel] MPI-RMA on uGNI?"</a>
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
