<?
$subject_val = "[OMPI devel] potential memory leak in mpi_type_create_struct_f()?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 23 07:07:55 2010" -->
<!-- isoreceived="20100723110755" -->
<!-- sent="Fri, 23 Jul 2010 13:13:52 +0200" -->
<!-- isosent="20100723111352" -->
<!-- name="nadia.derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="[OMPI devel] potential memory leak in mpi_type_create_struct_f()?" -->
<!-- id="1279883632.15370.4054.camel_at_B014522" -->
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
<strong>Subject:</strong> [OMPI devel] potential memory leak in mpi_type_create_struct_f()?<br>
<strong>From:</strong> nadia.derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-23 07:13:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8213.php">Jeff Squyres: "Re: [OMPI devel] potential memory leak in mpi_type_create_struct_f()?"</a>
<li><strong>Previous message:</strong> <a href="8211.php">N.M. Maclaren: "[OMPI devel] Weird problem with strace, and question about transfers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8213.php">Jeff Squyres: "Re: [OMPI devel] potential memory leak in mpi_type_create_struct_f()?"</a>
<li><strong>Reply:</strong> <a href="8213.php">Jeff Squyres: "Re: [OMPI devel] potential memory leak in mpi_type_create_struct_f()?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>In ompi/mpi/f77/type_create_struct_f.c, routine
<br>
mpi_type_create_struct_f() mallocates c_type_old_array, but never frees
<br>
it.
<br>
<p>Regards,
<br>
Nadia
<br>
<p><pre>
-- 
nadia.derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8213.php">Jeff Squyres: "Re: [OMPI devel] potential memory leak in mpi_type_create_struct_f()?"</a>
<li><strong>Previous message:</strong> <a href="8211.php">N.M. Maclaren: "[OMPI devel] Weird problem with strace, and question about transfers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8213.php">Jeff Squyres: "Re: [OMPI devel] potential memory leak in mpi_type_create_struct_f()?"</a>
<li><strong>Reply:</strong> <a href="8213.php">Jeff Squyres: "Re: [OMPI devel] potential memory leak in mpi_type_create_struct_f()?"</a>
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
