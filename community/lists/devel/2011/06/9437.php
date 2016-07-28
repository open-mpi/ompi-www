<?
$subject_val = "[OMPI devel] Fix a hang in carto_base_select() if carto_module_init() fails";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 28 03:02:49 2011" -->
<!-- isoreceived="20110628070249" -->
<!-- sent="Tue, 28 Jun 2011 09:02:07 +0200" -->
<!-- isosent="20110628070207" -->
<!-- name="nadia.derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="[OMPI devel] Fix a hang in carto_base_select() if carto_module_init() fails" -->
<!-- id="1309244527.390.5.camel_at_B014522" -->
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
<strong>Subject:</strong> [OMPI devel] Fix a hang in carto_base_select() if carto_module_init() fails<br>
<strong>From:</strong> nadia.derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-28 03:02:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9438.php">Xin He: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Previous message:</strong> <a href="9436.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9478.php">Jeff Squyres: "Re: [OMPI devel] Fix a hang in carto_base_select() if carto_module_init() fails"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9478.php">Jeff Squyres: "Re: [OMPI devel] Fix a hang in carto_base_select() if carto_module_init() fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>When using the carto/file module with a syntactically incorrect carto
<br>
file, we get stuck into opal_carto_base_select().
<br>
<p>The attached trivial patch fixes the issue.
<br>
<p>Regards,
<br>
Nadia
<br>
<p><p><pre>
-- 
nadia.derbey &lt;Nadia.Derbey_at_[hidden]&gt;

</pre>
<p>
<p><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9437/carto_base_select.patch">carto_base_select.patch</a>
</ul>
<!-- attachment="carto_base_select.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9438.php">Xin He: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Previous message:</strong> <a href="9436.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9478.php">Jeff Squyres: "Re: [OMPI devel] Fix a hang in carto_base_select() if carto_module_init() fails"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9478.php">Jeff Squyres: "Re: [OMPI devel] Fix a hang in carto_base_select() if carto_module_init() fails"</a>
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
