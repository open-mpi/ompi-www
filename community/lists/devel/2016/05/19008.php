<?
$subject_val = "[OMPI devel] Datatype flag?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 20 10:22:36 2016" -->
<!-- isoreceived="20160520142236" -->
<!-- sent="Fri, 20 May 2016 07:22:32 -0700" -->
<!-- isosent="20160520142232" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Datatype flag?" -->
<!-- id="53D696F7-9DF2-4FF8-BC1C-7916CFDB9D55_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Datatype flag?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-20 10:22:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19009.php">George Bosilca: "Re: [OMPI devel] Datatype flag?"</a>
<li><strong>Previous message:</strong> <a href="19007.php">Josh Hursey: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19009.php">George Bosilca: "Re: [OMPI devel] Datatype flag?"</a>
<li><strong>Reply:</strong> <a href="19009.php">George Bosilca: "Re: [OMPI devel] Datatype flag?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey folks
<br>
<p>Is there some flag by which the datatype code can know what transport is being used? For example, suppose a transport can handle certain datatype configurations itself, without the converting dealing with them (e.g., contiguous vs non-contiguous). Essentially, it&#226;&#128;&#153;s an &#226;&#128;&#156;offload&#226;&#128;&#157; capability. Although the convertor is currently assigned on a per-peer basis, the logic in such cases might also depend upon the capabilities of the transport being used to communicate to that peer.
<br>
<p>So I&#226;&#128;&#153;m wondering if we have some mechanism by which that capability can be communicated to the datatype code down in OPAL?
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19009.php">George Bosilca: "Re: [OMPI devel] Datatype flag?"</a>
<li><strong>Previous message:</strong> <a href="19007.php">Josh Hursey: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19009.php">George Bosilca: "Re: [OMPI devel] Datatype flag?"</a>
<li><strong>Reply:</strong> <a href="19009.php">George Bosilca: "Re: [OMPI devel] Datatype flag?"</a>
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
