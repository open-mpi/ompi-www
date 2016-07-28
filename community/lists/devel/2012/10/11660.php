<?
$subject_val = "[OMPI devel] Warnings in trunk: libnbc and coll-nbc";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 27 12:41:00 2012" -->
<!-- isoreceived="20121027164100" -->
<!-- sent="Sat, 27 Oct 2012 09:40:53 -0700" -->
<!-- isosent="20121027164053" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Warnings in trunk: libnbc and coll-nbc" -->
<!-- id="D7DCC53B-6DBA-4ECA-98EE-A3D6D0FAAE09_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Warnings in trunk: libnbc and coll-nbc<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-27 12:40:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11661.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11659.php">Ralph Castain: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
coll_libnbc_component.c: In function 'libnbc_module_destruct':
<br>
coll_libnbc_component.c:274: warning: pointer targets in passing argument 1 of 'opal_atomic_add_32' differ in signedness
<br>
coll_libnbc_component.c:274: warning: signed and unsigned type in conditional expression
<br>
nbc.c: In function 'NBC_Init_handle':
<br>
nbc.c:560: warning: pointer targets in passing argument 1 of 'opal_atomic_add_32' differ in signedness
<br>
nbc.c:560: warning: signed and unsigned type in conditional expression
<br>
<p><p>Wasn't seeing these before, so might be from some recent change...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11661.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11659.php">Ralph Castain: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
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
