<?
$subject_val = "Re: [OMPI devel] RFC: hwloc object userdata";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  3 10:22:26 2012" -->
<!-- isoreceived="20121003142226" -->
<!-- sent="Wed, 3 Oct 2012 16:22:35 +0200" -->
<!-- isosent="20121003142235" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: hwloc object userdata" -->
<!-- id="2CFC6D05-5BEE-42DF-BCEA-6BEC42CE3784_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="530E6F90-F79A-4907-BDFF-A8BA323032B7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: hwloc object userdata<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-03 10:22:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11547.php">Jeff Squyres: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
<li><strong>Previous message:</strong> <a href="11545.php">Jeff Squyres: "[OMPI devel] RFC: hwloc object userdata"</a>
<li><strong>In reply to:</strong> <a href="11545.php">Jeff Squyres: "[OMPI devel] RFC: hwloc object userdata"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11547.php">Jeff Squyres: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
<li><strong>Reply:</strong> <a href="11547.php">Jeff Squyres: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the case such a functionality become necessary, I would suggest we use a mechanism similar to the attributes in MPI (but without the multi-language mess). That will allow whoever want to attach data to a hwloc node, to do it without the mess of dealing with reserving a slot. It might require a little bit more memory, but so far the number of nodes in the HWLOC data is limited.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Oct 3, 2012, at 16:13 , Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: allowing multiple entities in the OMPI code base to hang data off hwloc_obj-&gt;userdata
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: anticipating that more parts of the OMPI code base will be using the hwloc data
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: hwloc base
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: no real hurry; Ralph and I just identified the potential for this issue this morning.  We're not aware of it being an actual problem (yet).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MORE DETAIL:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The rmaps base (in mpirun) is currently hanging its own data off various objects in the hwloc topology tree.  However, it should be noted that the hwloc topology tree is a global data structure in each MPI processes; multiple upper-level entities in the ORTE and OMPI layers may want to hang their own userdata off hwloc objects.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph and I figured that some functionality could be added to the hwloc base to hang a opal_pointer_array off each hwloc object; each array value will be a (void*).  Then upper-level entities can reserve a slot in all the pointer arrays and store whatever they want in their (void*) slot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, if the openib BTL wants to use the hwloc data and hang its own userdata off hwloc objects, it can call the hwloc base and reserve a slot.  The hwloc base will say &quot;Ok, you can have slot 7&quot;.  Then the openib BTL can always use slot 7 in the opal_pointer_array off any hwloc object.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does this sound reasonable?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11547.php">Jeff Squyres: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
<li><strong>Previous message:</strong> <a href="11545.php">Jeff Squyres: "[OMPI devel] RFC: hwloc object userdata"</a>
<li><strong>In reply to:</strong> <a href="11545.php">Jeff Squyres: "[OMPI devel] RFC: hwloc object userdata"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11547.php">Jeff Squyres: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
<li><strong>Reply:</strong> <a href="11547.php">Jeff Squyres: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
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
