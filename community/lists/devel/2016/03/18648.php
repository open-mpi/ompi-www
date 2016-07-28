<?
$subject_val = "[OMPI devel] component progress function optional?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 18:27:49 2016" -->
<!-- isoreceived="20160301232749" -->
<!-- sent="Tue, 1 Mar 2016 18:27:49 -0500" -->
<!-- isosent="20160301232749" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI devel] component progress function optional?" -->
<!-- id="CAHXxYDiPQ=-NbJBPsBGLCgENJN0dKQ=g1KQTy=LhqkoCJG3baw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] component progress function optional?<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-01 18:27:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18649.php">Gilles Gouaillardet: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Previous message:</strong> <a href="18647.php">Nathan Hjelm: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18650.php">George Bosilca: "Re: [OMPI devel] component progress function optional?"</a>
<li><strong>Reply:</strong> <a href="18650.php">George Bosilca: "Re: [OMPI devel] component progress function optional?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>(As you might know), I am working on implementing a new BTL for a
<br>
proprietary fabric, and, taking the path of least effort, copying and
<br>
pasting code from various pre-implemented BTL as is appropriate for our
<br>
hardware. My question is: are there any guidance on which of the functions
<br>
must be implemented and which are optional (i.e. depends on the underlying
<br>
hardware)?
<br>
<p>As a specific example, I see that mca_btl_tcp_component_progress() is never
<br>
implemented although similar functions in other BTLs are.
<br>
<p>Thanks in advance
<br>
Durga
<br>
<p>Life is complex. It has real and imaginary parts.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18648/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18649.php">Gilles Gouaillardet: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Previous message:</strong> <a href="18647.php">Nathan Hjelm: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18650.php">George Bosilca: "Re: [OMPI devel] component progress function optional?"</a>
<li><strong>Reply:</strong> <a href="18650.php">George Bosilca: "Re: [OMPI devel] component progress function optional?"</a>
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
