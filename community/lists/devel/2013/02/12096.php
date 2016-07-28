<?
$subject_val = "Re: [OMPI devel] RFC: shiny new variable subsystem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 08:19:36 2013" -->
<!-- isoreceived="20130201131936" -->
<!-- sent="Fri, 1 Feb 2013 13:19:31 +0000" -->
<!-- isosent="20130201131931" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: shiny new variable subsystem" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CC171F_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130201012245.GN99519_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: shiny new variable subsystem<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-01 08:19:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12097.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/01/12095.php">Nathan Hjelm: "[OMPI devel] RFC: shiny new variable subsystem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/01/12095.php">Nathan Hjelm: "[OMPI devel] RFC: shiny new variable subsystem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1.
<br>
<p>Nathan and I have been talking about this for quite a while.  Note that this is the first of several updates that we will have for the MCA param system -- we have a roadmap that can be easily described as two groups of things:
<br>
<p>1. Changes that are intended for v1.7.x: everything to support MPI-3's MPI_T interface
<br>
2. Change that can wait until 1.9: long-standing MCA param feature requests and breaking backwards compatibility
<br>
<p>Like Nathan said, we'll talk through this next Tuesday.  He highlighted most of the important parts, but I wanted to explain one point a little further: as Nathan said, we took the opportunity to greenfield the MCA param API.  Meaning: we designed a whole new OPAL MCA param API, taking into account all that we have learned from years of experience with the current MCA param API.
<br>
<p>This is worth explaining a bit:
<br>
<p>- The new API will be pushed to v1.7.
<br>
- But *the old API will also exist in v1.7* (as a thin shim compatibility layer to the new API)
<br>
- We will update all components and frameworks in both trunk and v1.7 to use the new API
<br>
- Any off-trunk development can still use the old API for the duration of the v1.7/v1.8 series
<br>
- After a while, *we will remove the old API/compatibility shim on the trunk/v1.9* (dates TBD)
<br>
*** Off-trunk development will therefore need to be updated for trunk/v1.9
<br>
<p>The new MCA param API is cleaner, simpler, and provides for a lot of functionality that we don't currently have, like:
<br>
<p>- un-overrideable system-level MCA params (as Nathan described)
<br>
- much shorter default ompi_info output (e.g., by default, only showing users the &lt;some_single_digit_number&gt; MCA params they really care about, not all 6 billion of them)
<br>
- ...and others
<br>
<p><p><p>On Jan 31, 2013, at 8:22 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What: Introduce the MCA variable system. This system is meant as a replacement for the MCA parameter system. It offers a number of improvements over the old system including:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - Cleaner, expandable API. Instead of providing multiple variable registration functions (reg_int, reg_int_name, reg_string, reg_string_name) there are only two (three when the framework system is introduced): mca_base_var_register() and mca_base_component_var_register().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - Support for boolean variables.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - Support for true/false values for integer and boolean variable. ex: setting OMPI_MCA_mca_component_show_load_errors=true will work the same as OMPI_MCA_mca_component_show_load_errors=1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - Support for integer enumerations. Example: create a integer variable foo with possible values 0:none, 1:error, 2: warning then any of OMPI_MCA_foo=none OMPI_MCA_foo=0 OMPI_MCA_foo=warning etc will work. A warning is printed for values not enumerated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - Support for system-administrator forced variables through the use of etc/openmpi-mca-params-override.conf. A warning is printed (which can be suppressed) for any attempt to override one of these values.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - Support for variable scopes (constant, read-only, local, all, group, etc). Equivalent to MPI_T scopes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - Support for setting verbosity levels for each parameter. This will enable us to add a --level option to ompi_info to reduce the number of variables shown. Equivalent to MPI_T verbosity.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - Renamed the read_only attribute for parameters to default only. This name better reflects the meaning of these variables.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - Variables are now broken down by group. A group is a project, framework, or component. Ex: opal, opal_shmem, opal_shmem_mmap. Groups are automatically registered when a variable is registered. You can set a description for a group by calling mca_base_var_group_register before registering any variables. Groups are equivalent to MPI_T categories.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - Variables must be registered with a backing store that must live at least as long as the variable (no stack variables-- unless of course they are deregistered before return). This means changes to a variable made with mca_base_var_set_value() will be immediately visible in the registered storage. There is no need to &quot;lookup&quot; the value.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - Environment and file values are only looked up at registration time. After registration a variable can change by either: 1) the registree changes the value, or 2) the value is changed with mca_base_var_set_value().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - File values are preserved in mca_base_var_file_values so there is no longer a need to recache files. The values are still stored in an opal_list_t. Since the list is only referenced at registration time this shouldn't be an issues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - etc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why: This RFC is one of a number of RFCs that will eventually bring full support for the MPI tool interface to Open MPI. This change is intended to support the entirely of the MPI tools control variable API (except MPI_T_cvar_write-- that will be supported by a future update). A quick background for this change: the MCA parameter system needed to be augmented to support a number of MPI_T functionality (scope, verbosity, etc). After some discussion Jeff and I decided now would be a good time to greenfield the interface. Given the complexity of the change we will reserve time during the next con-call for further discussion on the why and the what.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When: Given the size of this change I want to give this a fairly long timeout. Timeout set for Feb 13 @ 1:00 PM EST.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please take some time to evaluate the new interface. Let me know if there is anything that can be done to further improve the interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a heads up. If you have a component that registers any variables please define a mca_register_component_params for your component and move all parameter registration into that function. It will save me a lot of time later.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; HPC-3, LANL
</span><br>
<span class="quotelev1">&gt; &lt;mca_base_var_v1.patch&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="12097.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/01/12095.php">Nathan Hjelm: "[OMPI devel] RFC: shiny new variable subsystem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/01/12095.php">Nathan Hjelm: "[OMPI devel] RFC: shiny new variable subsystem"</a>
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
