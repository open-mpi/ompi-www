<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar  5 12:12:07 2007" -->
<!-- isoreceived="20070305171207" -->
<!-- sent="Mon, 05 Mar 2007 18:10:56 +0100" -->
<!-- isosent="20070305171056" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] opal/class/opal_object.c: save some memory for the ctor/dtor arrays" -->
<!-- id="45EC4F20.3060906_at_informatik.uni-halle.de" -->
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
<strong>From:</strong> Bert Wesarg (<em>wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-05 12:10:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1330.php">Bert Wesarg: "[OMPI devel] [PATCH] opal/class/opal_object.c: replace the classes array with a linked list"</a>
<li><strong>Previous message:</strong> <a href="1328.php">Jeff Squyres: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1345.php">George Bosilca: "Re: [OMPI devel] [PATCH] opal/class/opal_object.c: save some memory for the ctor/dtor arrays"</a>
<li><strong>Reply:</strong> <a href="1345.php">George Bosilca: "Re: [OMPI devel] [PATCH] opal/class/opal_object.c: save some memory for the ctor/dtor arrays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This saves some memory for the constructors and destructors arrays of a
<br>
class by counting the constructors and destructors while we are counting
<br>
the cls_depth. And the reversion of the constructor array can now be done
<br>
without an extra loop.
<br>
<p>The patch is only compile tested.
<br>
<p>Greetings
<br>
<p>Bert Wesarg
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1329/opal_object-save_some_memory.patch">opal_object-save_some_memory.patch</a>
</ul>
<!-- attachment="opal_object-save_some_memory.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1330.php">Bert Wesarg: "[OMPI devel] [PATCH] opal/class/opal_object.c: replace the classes array with a linked list"</a>
<li><strong>Previous message:</strong> <a href="1328.php">Jeff Squyres: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1345.php">George Bosilca: "Re: [OMPI devel] [PATCH] opal/class/opal_object.c: save some memory for the ctor/dtor arrays"</a>
<li><strong>Reply:</strong> <a href="1345.php">George Bosilca: "Re: [OMPI devel] [PATCH] opal/class/opal_object.c: save some memory for the ctor/dtor arrays"</a>
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
