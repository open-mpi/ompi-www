<?
$subject_val = "[OMPI devel] oshmem warning";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 13 17:36:08 2013" -->
<!-- isoreceived="20131013213608" -->
<!-- sent="Sun, 13 Oct 2013 14:36:05 -0700" -->
<!-- isosent="20131013213605" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] oshmem warning" -->
<!-- id="49F60B3D-4987-4990-8F20-E5FEAACFBE0B_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] oshmem warning<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-13 17:36:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13093.php">George Bosilca: "Re: [OMPI devel] &quot;make check&quot; failure in opal_datatype_test (v1.6.5)"</a>
<li><strong>Previous message:</strong> <a href="13091.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7.3rc3 posted"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you meant to use this in your oshmem_info, but forgot to do so:
<br>
<p>../../../oshmem/include/oshmem/frameworks.h:14: warning: &#145;oshmem_frameworks&#146; defined but not used
<br>
<p><p>Looks like that tool isn't quite right/complete. See how the frameworks file is used in orte as an example.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13093.php">George Bosilca: "Re: [OMPI devel] &quot;make check&quot; failure in opal_datatype_test (v1.6.5)"</a>
<li><strong>Previous message:</strong> <a href="13091.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7.3rc3 posted"</a>
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
