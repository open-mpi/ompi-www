<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 12:22:28 2007" -->
<!-- isoreceived="20070306172228" -->
<!-- sent="Tue, 06 Mar 2007 18:22:12 +0100" -->
<!-- isosent="20070306172212" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="[OMPI devel] [RFC][PATCH] option to use libumem for opal object system" -->
<!-- id="45EDA344.10005_at_informatik.uni-halle.de" -->
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
<strong>Date:</strong> 2007-03-06 12:22:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1349.php">Bert Wesarg: "[OMPI devel]  [RFC][PATCH] use the new object caching (examples)"</a>
<li><strong>Previous message:</strong> <a href="1347.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object.c: save some memory for the ctor/dtor arrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1349.php">Bert Wesarg: "[OMPI devel]  [RFC][PATCH] use the new object caching (examples)"</a>
<li><strong>Reply:</strong> <a href="1349.php">Bert Wesarg: "[OMPI devel]  [RFC][PATCH] use the new object caching (examples)"</a>
<li><strong>Reply:</strong> <a href="1350.php">Bert Wesarg: "Re: [OMPI devel] [RFC][PATCH] option to use libumem for opal object system"</a>
<li><strong>Reply:</strong> <a href="1351.php">George Bosilca: "Re: [OMPI devel] [RFC][PATCH] option to use libumem for opal object system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>this gives the option to use the umem cache feature from the libumem[1]
<br>
for the opal object system.
<br>
<p>It is full backward compatible to the old system.
<br>
<p>But the patch exists of more changes:
<br>
<p>(1) reorder opal_class_t, in the hope that vital members fit in the first
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cache line
<br>
(2) a per class lock for initialization
<br>
(3) the global class list is now a linked list embeded in the opal_class_t
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(this can be reduced to a stack/single linked list)
<br>
(4) new contructors/destructors for the one time cache initialization
<br>
<p>To complile with this new feature you must configure open-mpi with
<br>
&quot;-DUSE_UMEM&quot; in your CFLAGS, and all other needed build flags to find the
<br>
header and library of lubumem (LDFLAGS, LIBS).
<br>
<p>To full use the object caching of libumem you can use the new macro
<br>
OBJ_CLASS_INSTANCE_CACHE() which have arguments for the cache
<br>
contructors/destructors.
<br>
<p>In the followup mail, I convert the opal_free_list_t and
<br>
orte_pointer_array_t to use the cache for the initialization of the
<br>
opal_mutex_t and opal_condition_t members.
<br>
<p>I have just compiled it with and without USE_UMEM but no benchmarking.
<br>
<p>Comments welcome.
<br>
<p>Greetings
<br>
<p>Bert Wesarg
<br>
<p>PS: I know that you are busy with the OMPI 1.2 release, I just want to
<br>
send it out, befor I forget it.
<br>
<p>[1] solaris: built-in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;other:   <a href="http://sourceforge.net/projects/umem">http://sourceforge.net/projects/umem</a>
<br>
<p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1348/use_umem_for_object_caching.patch">use_umem_for_object_caching.patch</a>
</ul>
<!-- attachment="use_umem_for_object_caching.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1349.php">Bert Wesarg: "[OMPI devel]  [RFC][PATCH] use the new object caching (examples)"</a>
<li><strong>Previous message:</strong> <a href="1347.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object.c: save some memory for the ctor/dtor arrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1349.php">Bert Wesarg: "[OMPI devel]  [RFC][PATCH] use the new object caching (examples)"</a>
<li><strong>Reply:</strong> <a href="1349.php">Bert Wesarg: "[OMPI devel]  [RFC][PATCH] use the new object caching (examples)"</a>
<li><strong>Reply:</strong> <a href="1350.php">Bert Wesarg: "Re: [OMPI devel] [RFC][PATCH] option to use libumem for opal object system"</a>
<li><strong>Reply:</strong> <a href="1351.php">George Bosilca: "Re: [OMPI devel] [RFC][PATCH] option to use libumem for opal object system"</a>
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
