<?
$subject_val = "[OMPI devel] Warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 16 23:08:42 2013" -->
<!-- isoreceived="20130717030842" -->
<!-- sent="Tue, 16 Jul 2013 20:08:29 -0700" -->
<!-- isosent="20130717030829" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Warnings" -->
<!-- id="C66ED91E-A65B-4CCF-B2A2-2E6982A3CA97_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Warnings<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-16 23:08:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12636.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="12634.php">Ralph Castain: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On the trunk:
<br>
<p>pml_ob1_component.c: In function 'mca_pml_ob1_component_register':
<br>
pml_ob1_component.c:207: warning: passing argument 12 of 'mca_base_pvar_register' from incompatible pointer type
<br>
pml_ob1_component.c:213: warning: passing argument 12 of 'mca_base_pvar_register' from incompatible pointer type
<br>
<p><p>Looks like something didn't get converted correctly.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12636.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="12634.php">Ralph Castain: "Re: [OMPI devel] ompi_info"</a>
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
