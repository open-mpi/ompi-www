<?
$subject_val = "[OMPI devel] MCA variable system slides and notes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 12:46:53 2013" -->
<!-- isoreceived="20130205174653" -->
<!-- sent="Tue, 5 Feb 2013 10:46:48 -0700" -->
<!-- isosent="20130205174648" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] MCA variable system slides and notes" -->
<!-- id="20130205174648.GD69096_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> [OMPI devel] MCA variable system slides and notes<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-05 12:46:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12113.php">Nathan Hjelm: "[OMPI devel] RFC: update lustre check to use only -llustreapi"</a>
<li><strong>Previous message:</strong> <a href="12111.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12114.php">George Bosilca: "Re: [OMPI devel] MCA variable system slides and notes"</a>
<li><strong>Reply:</strong> <a href="12114.php">George Bosilca: "Re: [OMPI devel] MCA variable system slides and notes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Notes:
<br>
<p>Variable system currently takes ownership of string values. This is done so strings can be freed when overwritten (by mca_base_var_set_value) or when the variable is deregistered. This requires that initial string values be allocated on the heap (not .DATA, heap, etc). Brian raised a good point that projects/frameworks/components should be responsible for freeing anything they allocate and that it shouldn't be the responsibility of the MCA variable system to free these strings (though we have to handle the mca_base_var_set_value case).
<br>
<p>Some options:
<br>
&nbsp;1) Always duplicate the string passed in by the caller. The caller will have to free the original value if it was allocated. Ex:
<br>
<p>&nbsp;tmp = strdup (&quot;some_string_value&quot;);
<br>
&nbsp;backing_store = tmp;
<br>
&nbsp;mca_base_var_register (..., MCA_BASE_VAR_TYPE_STRING, ..., &amp;backing_store);
<br>
&nbsp;free (tmp);
<br>
<p>&nbsp;2) Add a flag indicating whether the variable system should call free on the initial value. Ex:
<br>
<p>&nbsp;backing_store = &quot;some_string_value&quot;;
<br>
&nbsp;mca_base_var_register (..., MCA_BASE_VAR_TYPE_STRING, ..., MCA_BASE_VAR_FLAG_STATIC, ..., &amp;backing_store);
<br>
<p>&nbsp;If the STATIC flag is not set the variable system takes ownership of the string and frees it later. If the STATIC flag is set the variable system can either 1) use the initial value, or 2) strdup the initial value. There are issues with using the initial value without duplication since the registree would need to ensure the initial value lives as long as the registered variable (not a problem if the value is in .DATA or .BSS).
<br>
<p>Thoughts on these options? Other options?
<br>
<p><p>List of initial supported types is adequate: char *, int, and bool. We can re-evaluate later if there is a need for more types.
<br>
<p><p>We need to figure out how Open MPI could read all file values and build an environment that could be passed to the backend to prevent the need to read from files on the backend. This may necessitate modifying the mca_base_var API.
<br>
<p><p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12112/openmpi_mpit.pdf">openmpi_mpit.pdf</a>
</ul>
<!-- attachment="openmpi_mpit.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12113.php">Nathan Hjelm: "[OMPI devel] RFC: update lustre check to use only -llustreapi"</a>
<li><strong>Previous message:</strong> <a href="12111.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12114.php">George Bosilca: "Re: [OMPI devel] MCA variable system slides and notes"</a>
<li><strong>Reply:</strong> <a href="12114.php">George Bosilca: "Re: [OMPI devel] MCA variable system slides and notes"</a>
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
