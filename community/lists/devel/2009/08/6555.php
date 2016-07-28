<?
$subject_val = "[OMPI devel] [PATCH] Better error reporting when failing to load a component";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 08:23:01 2009" -->
<!-- isoreceived="20090803122301" -->
<!-- sent="Mon, 03 Aug 2009 14:23:00 +0200" -->
<!-- isosent="20090803122300" -->
<!-- name="Arthur Huillet" -->
<!-- email="arthur.huillet_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] Better error reporting when failing to load a component" -->
<!-- id="4A76D6A4.9070509_at_bull.net" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] Better error reporting when failing to load a component<br>
<strong>From:</strong> Arthur Huillet (<em>arthur.huillet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-03 08:23:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6556.php">guillaume: "[OMPI devel] btl_openib_component.c -- min_distance"</a>
<li><strong>Previous message:</strong> <a href="6554.php">Ralph Castain: "[OMPI devel] Invalid initializers in pml_base_request and bml_base_open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6564.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
<li><strong>Reply:</strong> <a href="6564.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have recently started working on OpenMPI, and part of my job consists 
<br>
in adding a new module to OpenMPI.
<br>
<p>I would like to take this opportunity to thank the people who have been 
<br>
involved in writing 
<br>
<a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent</a> as it was 
<br>
very helpful.
<br>
<p>Attached is a patch that calls lt_dlerror() in order to show detailed 
<br>
information about what symbol is missing, when a component fails to 
<br>
load. I needed it to find out what was wrong in my module and I believe 
<br>
it can be useful to others as well.
<br>
<p><p><pre>
-- 
Greetings, 
A. Huillet

</pre>
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6555/component_lt_dlerror.patch">component_lt_dlerror.patch</a>
</ul>
<!-- attachment="component_lt_dlerror.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6556.php">guillaume: "[OMPI devel] btl_openib_component.c -- min_distance"</a>
<li><strong>Previous message:</strong> <a href="6554.php">Ralph Castain: "[OMPI devel] Invalid initializers in pml_base_request and bml_base_open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6564.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
<li><strong>Reply:</strong> <a href="6564.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
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
