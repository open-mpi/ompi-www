<?
$subject_val = "Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 19 10:45:05 2008" -->
<!-- isoreceived="20080719144505" -->
<!-- sent="Sat, 19 Jul 2008 10:44:55 -0400" -->
<!-- isosent="20080719144455" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3" -->
<!-- id="ED69BF31-1BC7-452C-9EA3-02D5DCDB11EC_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C263C17A-25B5-463B-9873-FAAFF3BBE7C7_at_eecs.utk.edu" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-19 10:44:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4382.php">Funda Wang: "[OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;"</a>
<li><strong>Previous message:</strong> <a href="4380.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3"</a>
<li><strong>In reply to:</strong> <a href="4380.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff is referring to changes made over a year and a half ago when the  
<br>
checkpoint/restart work came into the trunk. This was a change in  
<br>
component_base_data_t from using a 'bool checkpointable' to a  
<br>
bitfield that can encode many more options (FT related and otherwise)  
<br>
for component metadata.
<br>
<p>The other change was adding a 'query' function for mca_base_select to  
<br>
the mca_base_componet structure. This is not FT related, but general  
<br>
code cleanup.
<br>
<p>Both of these changes require the versions of these data structures  
<br>
to be incremented. There was an RFC that went across devel-core with  
<br>
the subject &quot;RFC: MCA Base Component Version Change&quot; with more details.
<br>
<p>So in short there is nothing new happening with these structures as a  
<br>
result of the meeting, just that the structure has changed since v1.2.
<br>
<p>-- Josh
<br>
<p>On Jul 19, 2008, at 9:34 AM, Aur&#233;lien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What modifications are taking place in the mca_base_component_t for  
</span><br>
<span class="quotelev1">&gt; FT purposes ? I don't remember talking about this particular point  
</span><br>
<span class="quotelev1">&gt; during the meeting. I'm Just curious :]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 18 juil. 08 &#224; 09:51, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Add MCA base component parameter registration function
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY:
</span><br>
<span class="quotelev2">&gt;&gt; a) The component &quot;open&quot; function has been overloaded as the MCA  
</span><br>
<span class="quotelev2">&gt;&gt; component parameter registration function; we've long talked about  
</span><br>
<span class="quotelev2">&gt;&gt; fixing this
</span><br>
<span class="quotelev2">&gt;&gt; b) mca_base_component_t is already changing for v1.3 for the FT  
</span><br>
<span class="quotelev2">&gt;&gt; stuff; since this is the core struct for *all* components, it  
</span><br>
<span class="quotelev2">&gt;&gt; would be good to change this struct *once* (vs. once for v1.3 and  
</span><br>
<span class="quotelev2">&gt;&gt; then again for v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: mca.h, the MCA base component open functions, and at least  
</span><br>
<span class="quotelev2">&gt;&gt; 1 or 2 components for testing purposes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHEN: before v1.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: Friday, 25 July 2008
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We've long-since talked about how the MCA component &quot;open&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; function was incorrectly overloaded to be components' MCA  
</span><br>
<span class="quotelev2">&gt;&gt; parameter registration functions.  We've also long-since talked  
</span><br>
<span class="quotelev2">&gt;&gt; about splitting &quot;open&quot; into two functions: the [real] open  
</span><br>
<span class="quotelev2">&gt;&gt; function, and the component MCA parameter registration function.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Such a change, for example, would allow ompi_info to only call the  
</span><br>
<span class="quotelev2">&gt;&gt; parameter registration function -- not the open function (because  
</span><br>
<span class="quotelev2">&gt;&gt; open is allowed to reserve resources).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For v1.3, we propose adding this registration function to  
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_component_t and converting a small number of components  
</span><br>
<span class="quotelev2">&gt;&gt; to use it (just for testing purposes).  The main idea here is that  
</span><br>
<span class="quotelev2">&gt;&gt; the mca_base_component_t struct stuff already changed for v1.3 for  
</span><br>
<span class="quotelev2">&gt;&gt; FT stuff; it would be good to get in all foreseeable changes for  
</span><br>
<span class="quotelev2">&gt;&gt; v1.3 so that we don't have to change it again for v1.4.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Specifically: we know we want the MCA param registration function  
</span><br>
<span class="quotelev2">&gt;&gt; split out, so let's add that function for v1.3 and make it  
</span><br>
<span class="quotelev2">&gt;&gt; backwards compatible (e.g., call both the registration and open  
</span><br>
<span class="quotelev2">&gt;&gt; functions if they are !=NULL).  For v1.4, do a full-scale  
</span><br>
<span class="quotelev2">&gt;&gt; conversion of all components and make ompi_info properly take  
</span><br>
<span class="quotelev2">&gt;&gt; advantage of the new parameter registration function.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4382.php">Funda Wang: "[OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;"</a>
<li><strong>Previous message:</strong> <a href="4380.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3"</a>
<li><strong>In reply to:</strong> <a href="4380.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3"</a>
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
