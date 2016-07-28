<?
$subject_val = "Re: [OMPI devel] MCA variable system slides and notes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 14:38:08 2013" -->
<!-- isoreceived="20130205193808" -->
<!-- sent="Tue, 5 Feb 2013 14:38:02 -0500" -->
<!-- isosent="20130205193802" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MCA variable system slides and notes" -->
<!-- id="ACB84F20-63EF-4A3D-8F06-627913BF0C51_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130205174648.GD69096_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MCA variable system slides and notes<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-05 14:38:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12115.php">Jeff Squyres (jsquyres): "[OMPI devel] hwloc using libpci: GPL issue"</a>
<li><strong>Previous message:</strong> <a href="12113.php">Nathan Hjelm: "[OMPI devel] RFC: update lustre check to use only -llustreapi"</a>
<li><strong>In reply to:</strong> <a href="12112.php">Nathan Hjelm: "[OMPI devel] MCA variable system slides and notes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12118.php">Ralph Castain: "Re: [OMPI devel] MCA variable system slides and notes"</a>
<li><strong>Reply:</strong> <a href="12118.php">Ralph Castain: "Re: [OMPI devel] MCA variable system slides and notes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The major benefit of the second method is that it has the obvious potential to save us some memory. Not much I guess, but somewhere in the order of few Kb.
<br>
<p>But in order to save this memory, the originator must keep a pointer to the data in order to be able to free it after the mca_params framework is closed. This means for each string saved (due to the lack of the strdup in the mca_params framework), there will be sizeof(char*) bytes spend in bookkeeping. Thus the memory savings will be drastically lowered, and the benefit of the second approach is strongly compromised.
<br>
<p><p>&nbsp;&nbsp;George.
<br>
<p>On Feb 5, 2013, at 12:46 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Notes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Variable system currently takes ownership of string values. This is done so strings can be freed when overwritten (by mca_base_var_set_value) or when the variable is deregistered. This requires that initial string values be allocated on the heap (not .DATA, heap, etc). Brian raised a good point that projects/frameworks/components should be responsible for freeing anything they allocate and that it shouldn't be the responsibility of the MCA variable system to free these strings (though we have to handle the mca_base_var_set_value case).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some options:
</span><br>
<span class="quotelev1">&gt; 1) Always duplicate the string passed in by the caller. The caller will have to free the original value if it was allocated. Ex:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tmp = strdup (&quot;some_string_value&quot;);
</span><br>
<span class="quotelev1">&gt; backing_store = tmp;
</span><br>
<span class="quotelev1">&gt; mca_base_var_register (..., MCA_BASE_VAR_TYPE_STRING, ..., &amp;backing_store);
</span><br>
<span class="quotelev1">&gt; free (tmp);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) Add a flag indicating whether the variable system should call free on the initial value. Ex:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; backing_store = &quot;some_string_value&quot;;
</span><br>
<span class="quotelev1">&gt; mca_base_var_register (..., MCA_BASE_VAR_TYPE_STRING, ..., MCA_BASE_VAR_FLAG_STATIC, ..., &amp;backing_store);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the STATIC flag is not set the variable system takes ownership of the string and frees it later. If the STATIC flag is set the variable system can either 1) use the initial value, or 2) strdup the initial value. There are issues with using the initial value without duplication since the registree would need to ensure the initial value lives as long as the registered variable (not a problem if the value is in .DATA or .BSS).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thoughts on these options? Other options?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; List of initial supported types is adequate: char *, int, and bool. We can re-evaluate later if there is a need for more types.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We need to figure out how Open MPI could read all file values and build an environment that could be passed to the backend to prevent the need to read from files on the backend. This may necessitate modifying the mca_base_var API.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; &lt;openmpi_mpit.pdf&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="12115.php">Jeff Squyres (jsquyres): "[OMPI devel] hwloc using libpci: GPL issue"</a>
<li><strong>Previous message:</strong> <a href="12113.php">Nathan Hjelm: "[OMPI devel] RFC: update lustre check to use only -llustreapi"</a>
<li><strong>In reply to:</strong> <a href="12112.php">Nathan Hjelm: "[OMPI devel] MCA variable system slides and notes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12118.php">Ralph Castain: "Re: [OMPI devel] MCA variable system slides and notes"</a>
<li><strong>Reply:</strong> <a href="12118.php">Ralph Castain: "Re: [OMPI devel] MCA variable system slides and notes"</a>
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
