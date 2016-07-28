<?
$subject_val = "[OMPI devel] RFC: hwloc object userdata";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  3 10:13:26 2012" -->
<!-- isoreceived="20121003141326" -->
<!-- sent="Wed, 3 Oct 2012 10:13:28 -0400" -->
<!-- isosent="20121003141328" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: hwloc object userdata" -->
<!-- id="530E6F90-F79A-4907-BDFF-A8BA323032B7_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: hwloc object userdata<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-03 10:13:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11546.php">George Bosilca: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
<li><strong>Previous message:</strong> <a href="11544.php">Jeff Squyres: "Re: [OMPI devel] nightly tarballs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11546.php">George Bosilca: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
<li><strong>Reply:</strong> <a href="11546.php">George Bosilca: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: allowing multiple entities in the OMPI code base to hang data off hwloc_obj-&gt;userdata
<br>
<p>WHY: anticipating that more parts of the OMPI code base will be using the hwloc data
<br>
<p>WHERE: hwloc base
<br>
<p>WHEN: no real hurry; Ralph and I just identified the potential for this issue this morning.  We're not aware of it being an actual problem (yet).
<br>
<p>MORE DETAIL:
<br>
<p>The rmaps base (in mpirun) is currently hanging its own data off various objects in the hwloc topology tree.  However, it should be noted that the hwloc topology tree is a global data structure in each MPI processes; multiple upper-level entities in the ORTE and OMPI layers may want to hang their own userdata off hwloc objects.
<br>
<p>Ralph and I figured that some functionality could be added to the hwloc base to hang a opal_pointer_array off each hwloc object; each array value will be a (void*).  Then upper-level entities can reserve a slot in all the pointer arrays and store whatever they want in their (void*) slot.
<br>
<p>For example, if the openib BTL wants to use the hwloc data and hang its own userdata off hwloc objects, it can call the hwloc base and reserve a slot.  The hwloc base will say &quot;Ok, you can have slot 7&quot;.  Then the openib BTL can always use slot 7 in the opal_pointer_array off any hwloc object.
<br>
<p>Does this sound reasonable?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11546.php">George Bosilca: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
<li><strong>Previous message:</strong> <a href="11544.php">Jeff Squyres: "Re: [OMPI devel] nightly tarballs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11546.php">George Bosilca: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
<li><strong>Reply:</strong> <a href="11546.php">George Bosilca: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
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
