<?
$subject_val = "[OMPI devel] mca_base_component_var_register() MCA_BASE_VAR_TYPE_STRING";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 14 11:31:31 2014" -->
<!-- isoreceived="20140214163131" -->
<!-- sent="Fri, 14 Feb 2014 17:31:31 +0100" -->
<!-- isosent="20140214163131" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] mca_base_component_var_register() MCA_BASE_VAR_TYPE_STRING" -->
<!-- id="20140214163131.GL24474_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] mca_base_component_var_register() MCA_BASE_VAR_TYPE_STRING<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-14 11:31:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14144.php">Adrian Reber: "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Previous message:</strong> <a href="14142.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14145.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_base_component_var_register()	MCA_BASE_VAR_TYPE_STRING"</a>
<li><strong>Reply:</strong> <a href="14145.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_base_component_var_register()	MCA_BASE_VAR_TYPE_STRING"</a>
<li><strong>Reply:</strong> <a href="14147.php">Hjelm, Nathan T: "Re: [OMPI devel] mca_base_component_var_register()	MCA_BASE_VAR_TYPE_STRING"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to find out how to deal with string variables. Do I have to
<br>
allocate the memory before calling mca_base_component_var_register() or
<br>
not? It seems it does a strdup() meaning it has to be free()'d while
<br>
closing the component. Looking at other occurrences of string variables
<br>
I see different usages. Sometimes it set to NULL sometimes not. Before
<br>
following a wrong example maybe someone can tell me what the correct
<br>
usage is.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14144.php">Adrian Reber: "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Previous message:</strong> <a href="14142.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14145.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_base_component_var_register()	MCA_BASE_VAR_TYPE_STRING"</a>
<li><strong>Reply:</strong> <a href="14145.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_base_component_var_register()	MCA_BASE_VAR_TYPE_STRING"</a>
<li><strong>Reply:</strong> <a href="14147.php">Hjelm, Nathan T: "Re: [OMPI devel] mca_base_component_var_register()	MCA_BASE_VAR_TYPE_STRING"</a>
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
