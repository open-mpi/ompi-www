<?
$subject_val = "[OMPI devel] RFC: shiny new variable subsystem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 20:22:51 2013" -->
<!-- isoreceived="20130201012251" -->
<!-- sent="Thu, 31 Jan 2013 18:22:45 -0700" -->
<!-- isosent="20130201012245" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: shiny new variable subsystem" -->
<!-- id="20130201012245.GN99519_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: shiny new variable subsystem<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-31 20:22:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/02/12096.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: shiny new variable subsystem"</a>
<li><strong>Previous message:</strong> <a href="12094.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/02/12096.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: shiny new variable subsystem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/02/12096.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: shiny new variable subsystem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Introduce the MCA variable system. This system is meant as a replacement for the MCA parameter system. It offers a number of improvements over the old system including:
<br>
<p>&nbsp;&nbsp;- Cleaner, expandable API. Instead of providing multiple variable registration functions (reg_int, reg_int_name, reg_string, reg_string_name) there are only two (three when the framework system is introduced): mca_base_var_register() and mca_base_component_var_register().
<br>
<p>&nbsp;&nbsp;- Support for boolean variables.
<br>
<p>&nbsp;&nbsp;- Support for true/false values for integer and boolean variable. ex: setting OMPI_MCA_mca_component_show_load_errors=true will work the same as OMPI_MCA_mca_component_show_load_errors=1.
<br>
<p>&nbsp;&nbsp;- Support for integer enumerations. Example: create a integer variable foo with possible values 0:none, 1:error, 2: warning then any of OMPI_MCA_foo=none OMPI_MCA_foo=0 OMPI_MCA_foo=warning etc will work. A warning is printed for values not enumerated.
<br>
<p>&nbsp;&nbsp;- Support for system-administrator forced variables through the use of etc/openmpi-mca-params-override.conf. A warning is printed (which can be suppressed) for any attempt to override one of these values.
<br>
<p>&nbsp;&nbsp;- Support for variable scopes (constant, read-only, local, all, group, etc). Equivalent to MPI_T scopes.
<br>
<p>&nbsp;&nbsp;- Support for setting verbosity levels for each parameter. This will enable us to add a --level option to ompi_info to reduce the number of variables shown. Equivalent to MPI_T verbosity.
<br>
<p>&nbsp;&nbsp;- Renamed the read_only attribute for parameters to default only. This name better reflects the meaning of these variables.
<br>
<p>&nbsp;&nbsp;- Variables are now broken down by group. A group is a project, framework, or component. Ex: opal, opal_shmem, opal_shmem_mmap. Groups are automatically registered when a variable is registered. You can set a description for a group by calling mca_base_var_group_register before registering any variables. Groups are equivalent to MPI_T categories.
<br>
<p>&nbsp;&nbsp;- Variables must be registered with a backing store that must live at least as long as the variable (no stack variables-- unless of course they are deregistered before return). This means changes to a variable made with mca_base_var_set_value() will be immediately visible in the registered storage. There is no need to &quot;lookup&quot; the value.
<br>
<p>&nbsp;&nbsp;- Environment and file values are only looked up at registration time. After registration a variable can change by either: 1) the registree changes the value, or 2) the value is changed with mca_base_var_set_value().
<br>
<p>&nbsp;&nbsp;- File values are preserved in mca_base_var_file_values so there is no longer a need to recache files. The values are still stored in an opal_list_t. Since the list is only referenced at registration time this shouldn't be an issues.
<br>
<p>&nbsp;&nbsp;- etc
<br>
<p>Why: This RFC is one of a number of RFCs that will eventually bring full support for the MPI tool interface to Open MPI. This change is intended to support the entirely of the MPI tools control variable API (except MPI_T_cvar_write-- that will be supported by a future update). A quick background for this change: the MCA parameter system needed to be augmented to support a number of MPI_T functionality (scope, verbosity, etc). After some discussion Jeff and I decided now would be a good time to greenfield the interface. Given the complexity of the change we will reserve time during the next con-call for further discussion on the why and the what.
<br>
<p>When: Given the size of this change I want to give this a fairly long timeout. Timeout set for Feb 13 @ 1:00 PM EST.
<br>
<p>Please take some time to evaluate the new interface. Let me know if there is anything that can be done to further improve the interface.
<br>
<p>As a heads up. If you have a component that registers any variables please define a mca_register_component_params for your component and move all parameter registration into that function. It will save me a lot of time later.
<br>
<p>-Nathan Hjelm
<br>
HPC-3, LANL
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12095/mca_base_var_v1.patch">mca_base_var_v1.patch</a>
</ul>
<!-- attachment="mca_base_var_v1.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/02/12096.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: shiny new variable subsystem"</a>
<li><strong>Previous message:</strong> <a href="12094.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/02/12096.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: shiny new variable subsystem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/02/12096.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: shiny new variable subsystem"</a>
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
