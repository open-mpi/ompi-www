<?
$subject_val = "Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 19 09:34:21 2008" -->
<!-- isoreceived="20080719133421" -->
<!-- sent="Sat, 19 Jul 2008 09:34:08 -0400" -->
<!-- isosent="20080719133408" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3" -->
<!-- id="C263C17A-25B5-463B-9873-FAAFF3BBE7C7_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2FD59BCF-B0BA-4637-B572-AFBC7BAC674B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-19 09:34:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4381.php">Josh Hursey: "Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3"</a>
<li><strong>Previous message:</strong> <a href="4379.php">Jeff Squyres: "[OMPI devel] RFC: further changing mca_base_component_t before v1.3"</a>
<li><strong>In reply to:</strong> <a href="4379.php">Jeff Squyres: "[OMPI devel] RFC: further changing mca_base_component_t before v1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4381.php">Josh Hursey: "Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3"</a>
<li><strong>Reply:</strong> <a href="4381.php">Josh Hursey: "Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>What modifications are taking place in the mca_base_component_t for FT  
<br>
purposes ? I don't remember talking about this particular point during  
<br>
the meeting. I'm Just curious :]
<br>
<p>Aurelien
<br>
<p>Le 18 juil. 08 &#224; 09:51, Jeff Squyres a &#233;crit :
<br>
<p><span class="quotelev1">&gt; WHAT: Add MCA base component parameter registration function
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY:
</span><br>
<span class="quotelev1">&gt; a) The component &quot;open&quot; function has been overloaded as the MCA  
</span><br>
<span class="quotelev1">&gt; component parameter registration function; we've long talked about  
</span><br>
<span class="quotelev1">&gt; fixing this
</span><br>
<span class="quotelev1">&gt; b) mca_base_component_t is already changing for v1.3 for the FT  
</span><br>
<span class="quotelev1">&gt; stuff; since this is the core struct for *all* components, it would  
</span><br>
<span class="quotelev1">&gt; be good to change this struct *once* (vs. once for v1.3 and then  
</span><br>
<span class="quotelev1">&gt; again for v1.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: mca.h, the MCA base component open functions, and at least 1  
</span><br>
<span class="quotelev1">&gt; or 2 components for testing purposes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHEN: before v1.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Friday, 25 July 2008
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've long-since talked about how the MCA component &quot;open&quot; function  
</span><br>
<span class="quotelev1">&gt; was incorrectly overloaded to be components' MCA parameter  
</span><br>
<span class="quotelev1">&gt; registration functions.  We've also long-since talked about  
</span><br>
<span class="quotelev1">&gt; splitting &quot;open&quot; into two functions: the [real] open function, and  
</span><br>
<span class="quotelev1">&gt; the component MCA parameter registration function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Such a change, for example, would allow ompi_info to only call the  
</span><br>
<span class="quotelev1">&gt; parameter registration function -- not the open function (because  
</span><br>
<span class="quotelev1">&gt; open is allowed to reserve resources).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For v1.3, we propose adding this registration function to  
</span><br>
<span class="quotelev1">&gt; mca_base_component_t and converting a small number of components to  
</span><br>
<span class="quotelev1">&gt; use it (just for testing purposes).  The main idea here is that the  
</span><br>
<span class="quotelev1">&gt; mca_base_component_t struct stuff already changed for v1.3 for FT  
</span><br>
<span class="quotelev1">&gt; stuff; it would be good to get in all foreseeable changes for v1.3  
</span><br>
<span class="quotelev1">&gt; so that we don't have to change it again for v1.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically: we know we want the MCA param registration function  
</span><br>
<span class="quotelev1">&gt; split out, so let's add that function for v1.3 and make it backwards  
</span><br>
<span class="quotelev1">&gt; compatible (e.g., call both the registration and open functions if  
</span><br>
<span class="quotelev1">&gt; they are !=NULL).  For v1.4, do a full-scale conversion of all  
</span><br>
<span class="quotelev1">&gt; components and make ompi_info properly take advantage of the new  
</span><br>
<span class="quotelev1">&gt; parameter registration function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="4381.php">Josh Hursey: "Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3"</a>
<li><strong>Previous message:</strong> <a href="4379.php">Jeff Squyres: "[OMPI devel] RFC: further changing mca_base_component_t before v1.3"</a>
<li><strong>In reply to:</strong> <a href="4379.php">Jeff Squyres: "[OMPI devel] RFC: further changing mca_base_component_t before v1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4381.php">Josh Hursey: "Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3"</a>
<li><strong>Reply:</strong> <a href="4381.php">Josh Hursey: "Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3"</a>
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
