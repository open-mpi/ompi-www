<?
$subject_val = "[OMPI devel] RFC: further changing mca_base_component_t before v1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 18 09:51:20 2008" -->
<!-- isoreceived="20080718135120" -->
<!-- sent="Fri, 18 Jul 2008 09:51:01 -0400" -->
<!-- isosent="20080718135101" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: further changing mca_base_component_t before v1.3" -->
<!-- id="2FD59BCF-B0BA-4637-B572-AFBC7BAC674B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: further changing mca_base_component_t before v1.3<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-18 09:51:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4380.php">Aurélien Bouteiller: "Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3"</a>
<li><strong>Previous message:</strong> <a href="4378.php">Tim Mattox: "Re: [OMPI devel] Using Mercurial for OMPI devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4380.php">Aurélien Bouteiller: "Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3"</a>
<li><strong>Reply:</strong> <a href="4380.php">Aurélien Bouteiller: "Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Add MCA base component parameter registration function
<br>
<p>WHY:
<br>
a) The component &quot;open&quot; function has been overloaded as the MCA  
<br>
component parameter registration function; we've long talked about  
<br>
fixing this
<br>
b) mca_base_component_t is already changing for v1.3 for the FT stuff;  
<br>
since this is the core struct for *all* components, it would be good  
<br>
to change this struct *once* (vs. once for v1.3 and then again for v1.4)
<br>
<p>WHERE: mca.h, the MCA base component open functions, and at least 1 or  
<br>
2 components for testing purposes
<br>
<p>WHEN: before v1.3
<br>
<p>TIMEOUT: Friday, 25 July 2008
<br>
<p>-------------------------------------
<br>
<p>We've long-since talked about how the MCA component &quot;open&quot; function  
<br>
was incorrectly overloaded to be components' MCA parameter  
<br>
registration functions.  We've also long-since talked about splitting  
<br>
&quot;open&quot; into two functions: the [real] open function, and the component  
<br>
MCA parameter registration function.
<br>
<p>Such a change, for example, would allow ompi_info to only call the  
<br>
parameter registration function -- not the open function (because open  
<br>
is allowed to reserve resources).
<br>
<p>For v1.3, we propose adding this registration function to  
<br>
mca_base_component_t and converting a small number of components to  
<br>
use it (just for testing purposes).  The main idea here is that the  
<br>
mca_base_component_t struct stuff already changed for v1.3 for FT  
<br>
stuff; it would be good to get in all foreseeable changes for v1.3 so  
<br>
that we don't have to change it again for v1.4.
<br>
<p>Specifically: we know we want the MCA param registration function  
<br>
split out, so let's add that function for v1.3 and make it backwards  
<br>
compatible (e.g., call both the registration and open functions if  
<br>
they are !=NULL).  For v1.4, do a full-scale conversion of all  
<br>
components and make ompi_info properly take advantage of the new  
<br>
parameter registration function.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4380.php">Aurélien Bouteiller: "Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3"</a>
<li><strong>Previous message:</strong> <a href="4378.php">Tim Mattox: "Re: [OMPI devel] Using Mercurial for OMPI devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4380.php">Aurélien Bouteiller: "Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3"</a>
<li><strong>Reply:</strong> <a href="4380.php">Aurélien Bouteiller: "Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3"</a>
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
