<?
$subject_val = "Re: [OMPI devel] RFC: hwloc object userdata";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  3 10:39:00 2012" -->
<!-- isoreceived="20121003143900" -->
<!-- sent="Wed, 3 Oct 2012 07:38:53 -0700" -->
<!-- isosent="20121003143853" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: hwloc object userdata" -->
<!-- id="800AAF18-464B-4845-BF70-2C7C52FFD238_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A87F18C2-0187-4A6E-8B51-1DDB951ABC56_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-03 10:38:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11549.php">Sandra Guija: "[OMPI devel]  Open-mpi in red hat 7.3"</a>
<li><strong>Previous message:</strong> <a href="11547.php">Jeff Squyres: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
<li><strong>In reply to:</strong> <a href="11547.php">Jeff Squyres: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you're going that route, we're probably better off using your original &quot;hash&quot; based solution so people can just assign a character string to &quot;point&quot; to their block of data. Otherwise, we get into the problem of potentially overlapping indexes with people on branches.
<br>
<p><p>On Oct 3, 2012, at 7:29 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 3, 2012, at 10:22 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the case such a functionality become necessary, I would suggest we use a mechanism similar to the attributes in MPI (but without the multi-language mess). That will allow whoever want to attach data to a hwloc node, to do it without the mess of dealing with reserving a slot. It might require a little bit more memory, but so far the number of nodes in the HWLOC data is limited.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You mean something like putting this in opal/mca/hwloc/base/base.h:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; typedef enum {
</span><br>
<span class="quotelev1">&gt;  OPAL_HWLOC_BASE_RMAPS_BASE,
</span><br>
<span class="quotelev1">&gt;  OPAL_HWLOC_BASE_BTL_OPENIB,
</span><br>
<span class="quotelev1">&gt;  OPAL_HWLOC_BASE_GEORGE_STUFF,
</span><br>
<span class="quotelev1">&gt;  OPAL_HWLOC_BASE_JEFF_STUFF,
</span><br>
<span class="quotelev1">&gt;  /* ... */
</span><br>
<span class="quotelev1">&gt;  OPAL_HWLOC_BASE_MAX
</span><br>
<span class="quotelev1">&gt; } opal_hwloc_base_userdata_consumers_t;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And then:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0. if any new upper-level consumer wants to hang stuff off hwloc userdata, they just add another enum
</span><br>
<span class="quotelev1">&gt; 1. hwloc base hangs a (void *opal[OPAL_HWLOC_BASE_MAX]) off each hwloc obj
</span><br>
<span class="quotelev1">&gt; 2. each upper level consumer uses their enum to set/get their stuff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that what you're thinking?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 3, 2012, at 16:13 , Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT: allowing multiple entities in the OMPI code base to hang data off hwloc_obj-&gt;userdata
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY: anticipating that more parts of the OMPI code base will be using the hwloc data
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE: hwloc base
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHEN: no real hurry; Ralph and I just identified the potential for this issue this morning.  We're not aware of it being an actual problem (yet).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MORE DETAIL:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The rmaps base (in mpirun) is currently hanging its own data off various objects in the hwloc topology tree.  However, it should be noted that the hwloc topology tree is a global data structure in each MPI processes; multiple upper-level entities in the ORTE and OMPI layers may want to hang their own userdata off hwloc objects.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph and I figured that some functionality could be added to the hwloc base to hang a opal_pointer_array off each hwloc object; each array value will be a (void*).  Then upper-level entities can reserve a slot in all the pointer arrays and store whatever they want in their (void*) slot.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For example, if the openib BTL wants to use the hwloc data and hang its own userdata off hwloc objects, it can call the hwloc base and reserve a slot.  The hwloc base will say &quot;Ok, you can have slot 7&quot;.  Then the openib BTL can always use slot 7 in the opal_pointer_array off any hwloc object.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does this sound reasonable?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="11549.php">Sandra Guija: "[OMPI devel]  Open-mpi in red hat 7.3"</a>
<li><strong>Previous message:</strong> <a href="11547.php">Jeff Squyres: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
<li><strong>In reply to:</strong> <a href="11547.php">Jeff Squyres: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
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
