<?
$subject_val = "[OMPI devel] bug in mca_mpool_base_module_create()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 10:40:00 2009" -->
<!-- isoreceived="20090420144000" -->
<!-- sent="Mon, 20 Apr 2009 16:39:49 +0200 (CEST)" -->
<!-- isosent="20090420143949" -->
<!-- name="Roberto Ammendola" -->
<!-- email="roberto.ammendola_at_[hidden]" -->
<!-- subject="[OMPI devel] bug in mca_mpool_base_module_create()" -->
<!-- id="45760.141.108.7.31.1240238389.squirrel_at_141.108.7.31" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="49E8D1BF.4060200_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] bug in mca_mpool_base_module_create()<br>
<strong>From:</strong> Roberto Ammendola (<em>roberto.ammendola_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-20 10:39:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5847.php">Jeff Squyres: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<li><strong>Previous message:</strong> <a href="5845.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20003 (Solaris	malloc.h issue)"</a>
<li><strong>In reply to:</strong> <a href="5843.php">Eugene Loh: "[OMPI devel] FAQ updates"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5847.php">Jeff Squyres: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<li><strong>Reply:</strong> <a href="5847.php">Jeff Squyres: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found a small bug in function mca_mpool_base_module_create() where if a
<br>
bad name is provided for mpool component, last iterated component is
<br>
returned, instead of NULL. I suggest a solution:
<br>
<p>===================================================================
<br>
--- ompi/mca/mpool/base/mpool_base_lookup.c     (revision 21042)
<br>
+++ ompi/mca/mpool/base/mpool_base_lookup.c     (working copy)
<br>
@@ -75,11 +75,14 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (item = opal_list_get_first(&amp;mca_mpool_base_components);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item != opal_list_get_end(&amp;mca_mpool_base_components);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item = opal_list_get_next(item)) {
<br>
+         mca_mpool_base_component_t* c;
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_base_component_list_item_t *cli =
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(mca_base_component_list_item_t *) item;
<br>
-         component =
<br>
+         c =
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(mca_mpool_base_component_t *) cli-&gt;cli_component;
<br>
-         if(0 == strcmp(component-&gt;mpool_version.mca_component_name,
<br>
name)) {
<br>
+         if(0 == strcmp(c-&gt;mpool_version.mca_component_name, name)) {
<br>
+             component = c;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5847.php">Jeff Squyres: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<li><strong>Previous message:</strong> <a href="5845.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20003 (Solaris	malloc.h issue)"</a>
<li><strong>In reply to:</strong> <a href="5843.php">Eugene Loh: "[OMPI devel] FAQ updates"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5847.php">Jeff Squyres: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<li><strong>Reply:</strong> <a href="5847.php">Jeff Squyres: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
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
