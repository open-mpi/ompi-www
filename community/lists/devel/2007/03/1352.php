<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar  7 08:19:27 2007" -->
<!-- isoreceived="20070307131927" -->
<!-- sent="Wed, 07 Mar 2007 14:17:01 +0100" -->
<!-- isosent="20070307131701" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC][PATCH] option to use libumem for opal object system" -->
<!-- id="45EEBB4D.7010905_at_informatik.uni-halle.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="07A203D9-E4FA-4469-BF89-5E8C90F89F1F_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2007-03-07 08:17:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1353.php">Tim Mattox: "[OMPI devel] Open MPI v1.2rc2 has been posted"</a>
<li><strong>Previous message:</strong> <a href="1351.php">George Bosilca: "Re: [OMPI devel] [RFC][PATCH] option to use libumem for opal object system"</a>
<li><strong>In reply to:</strong> <a href="1351.php">George Bosilca: "Re: [OMPI devel] [RFC][PATCH] option to use libumem for opal object system"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>my main object was the object caching facility for pure performance
<br>
reason. And as I wrote I don't even test it. All the debug and align
<br>
features was out of my mind. Only to get the object caching feature from
<br>
libumem is a little bloaty, I must admit. But maybe there is a realy
<br>
performance boost noticeable. Than it would be better to include a object
<br>
cache into OMPIs own memory subsystem. But something showed up by
<br>
including this second memory subsystem: I found 2 piece of code that use
<br>
just a free() to release an object created with OBJ_NEW(), this wouldn't
<br>
show up without using libumem (or any other memory system other than that
<br>
of OMPI). And a second case where the situation is the other way around. I
<br>
have attached a diff to show the 3 places. And lastly the chaining of all
<br>
classes is not practical when using dynamic object loading (mca
<br>
components). Because the objects are unloaded befor the class system is
<br>
shutdown.
<br>
<p>Bert
<br>
<p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1352/fix_misused_frees_instead_of_OBJ_RELEASE.patch">fix_misused_frees_instead_of_OBJ_RELEASE.patch</a>
</ul>
<!-- attachment="fix_misused_frees_instead_of_OBJ_RELEASE.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1353.php">Tim Mattox: "[OMPI devel] Open MPI v1.2rc2 has been posted"</a>
<li><strong>Previous message:</strong> <a href="1351.php">George Bosilca: "Re: [OMPI devel] [RFC][PATCH] option to use libumem for opal object system"</a>
<li><strong>In reply to:</strong> <a href="1351.php">George Bosilca: "Re: [OMPI devel] [RFC][PATCH] option to use libumem for opal object system"</a>
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
