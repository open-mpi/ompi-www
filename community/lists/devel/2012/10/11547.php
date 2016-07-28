<?
$subject_val = "Re: [OMPI devel] RFC: hwloc object userdata";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  3 10:29:49 2012" -->
<!-- isoreceived="20121003142949" -->
<!-- sent="Wed, 3 Oct 2012 10:29:53 -0400" -->
<!-- isosent="20121003142953" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: hwloc object userdata" -->
<!-- id="A87F18C2-0187-4A6E-8B51-1DDB951ABC56_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2CFC6D05-5BEE-42DF-BCEA-6BEC42CE3784_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-03 10:29:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11548.php">Ralph Castain: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
<li><strong>Previous message:</strong> <a href="11546.php">George Bosilca: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
<li><strong>In reply to:</strong> <a href="11546.php">George Bosilca: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11548.php">Ralph Castain: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
<li><strong>Reply:</strong> <a href="11548.php">Ralph Castain: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 3, 2012, at 10:22 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; In the case such a functionality become necessary, I would suggest we use a mechanism similar to the attributes in MPI (but without the multi-language mess). That will allow whoever want to attach data to a hwloc node, to do it without the mess of dealing with reserving a slot. It might require a little bit more memory, but so far the number of nodes in the HWLOC data is limited.
</span><br>
<p>You mean something like putting this in opal/mca/hwloc/base/base.h:
<br>
<p>typedef enum {
<br>
&nbsp;&nbsp;OPAL_HWLOC_BASE_RMAPS_BASE,
<br>
&nbsp;&nbsp;OPAL_HWLOC_BASE_BTL_OPENIB,
<br>
&nbsp;&nbsp;OPAL_HWLOC_BASE_GEORGE_STUFF,
<br>
&nbsp;&nbsp;OPAL_HWLOC_BASE_JEFF_STUFF,
<br>
&nbsp;&nbsp;/* ... */
<br>
&nbsp;&nbsp;OPAL_HWLOC_BASE_MAX
<br>
} opal_hwloc_base_userdata_consumers_t;
<br>
<p>And then:
<br>
<p>0. if any new upper-level consumer wants to hang stuff off hwloc userdata, they just add another enum
<br>
1. hwloc base hangs a (void *opal[OPAL_HWLOC_BASE_MAX]) off each hwloc obj
<br>
2. each upper level consumer uses their enum to set/get their stuff
<br>
<p>Is that what you're thinking?
<br>
<p><p><span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 3, 2012, at 16:13 , Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: allowing multiple entities in the OMPI code base to hang data off hwloc_obj-&gt;userdata
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY: anticipating that more parts of the OMPI code base will be using the hwloc data
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: hwloc base
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHEN: no real hurry; Ralph and I just identified the potential for this issue this morning.  We're not aware of it being an actual problem (yet).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MORE DETAIL:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The rmaps base (in mpirun) is currently hanging its own data off various objects in the hwloc topology tree.  However, it should be noted that the hwloc topology tree is a global data structure in each MPI processes; multiple upper-level entities in the ORTE and OMPI layers may want to hang their own userdata off hwloc objects.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph and I figured that some functionality could be added to the hwloc base to hang a opal_pointer_array off each hwloc object; each array value will be a (void*).  Then upper-level entities can reserve a slot in all the pointer arrays and store whatever they want in their (void*) slot.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For example, if the openib BTL wants to use the hwloc data and hang its own userdata off hwloc objects, it can call the hwloc base and reserve a slot.  The hwloc base will say &quot;Ok, you can have slot 7&quot;.  Then the openib BTL can always use slot 7 in the opal_pointer_array off any hwloc object.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does this sound reasonable?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11548.php">Ralph Castain: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
<li><strong>Previous message:</strong> <a href="11546.php">George Bosilca: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
<li><strong>In reply to:</strong> <a href="11546.php">George Bosilca: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11548.php">Ralph Castain: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
<li><strong>Reply:</strong> <a href="11548.php">Ralph Castain: "Re: [OMPI devel] RFC: hwloc object userdata"</a>
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
