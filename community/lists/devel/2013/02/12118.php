<?
$subject_val = "Re: [OMPI devel] MCA variable system slides and notes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  8 10:35:37 2013" -->
<!-- isoreceived="20130208153537" -->
<!-- sent="Fri, 8 Feb 2013 07:35:29 -0800" -->
<!-- isosent="20130208153529" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MCA variable system slides and notes" -->
<!-- id="23D736FD-A6D1-495A-AAD0-0782826F3953_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ACB84F20-63EF-4A3D-8F06-627913BF0C51_at_icl.utk.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-08 10:35:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12119.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28048 - in trunk: . config ...etc."</a>
<li><strong>Previous message:</strong> <a href="12117.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc using libpci: GPL issue"</a>
<li><strong>In reply to:</strong> <a href="12114.php">George Bosilca: "Re: [OMPI devel] MCA variable system slides and notes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p>Just duplicate it - saves complexity and lowers probability of error
<br>
<p>On Feb 5, 2013, at 11:38 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The major benefit of the second method is that it has the obvious potential to save us some memory. Not much I guess, but somewhere in the order of few Kb.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But in order to save this memory, the originator must keep a pointer to the data in order to be able to free it after the mca_params framework is closed. This means for each string saved (due to the lack of the strdup in the mca_params framework), there will be sizeof(char*) bytes spend in bookkeeping. Thus the memory savings will be drastically lowered, and the benefit of the second approach is strongly compromised.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 5, 2013, at 12:46 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Notes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Variable system currently takes ownership of string values. This is done so strings can be freed when overwritten (by mca_base_var_set_value) or when the variable is deregistered. This requires that initial string values be allocated on the heap (not .DATA, heap, etc). Brian raised a good point that projects/frameworks/components should be responsible for freeing anything they allocate and that it shouldn't be the responsibility of the MCA variable system to free these strings (though we have to handle the mca_base_var_set_value case).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Some options:
</span><br>
<span class="quotelev2">&gt;&gt; 1) Always duplicate the string passed in by the caller. The caller will have to free the original value if it was allocated. Ex:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; tmp = strdup (&quot;some_string_value&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; backing_store = tmp;
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_var_register (..., MCA_BASE_VAR_TYPE_STRING, ..., &amp;backing_store);
</span><br>
<span class="quotelev2">&gt;&gt; free (tmp);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2) Add a flag indicating whether the variable system should call free on the initial value. Ex:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; backing_store = &quot;some_string_value&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_var_register (..., MCA_BASE_VAR_TYPE_STRING, ..., MCA_BASE_VAR_FLAG_STATIC, ..., &amp;backing_store);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If the STATIC flag is not set the variable system takes ownership of the string and frees it later. If the STATIC flag is set the variable system can either 1) use the initial value, or 2) strdup the initial value. There are issues with using the initial value without duplication since the registree would need to ensure the initial value lives as long as the registered variable (not a problem if the value is in .DATA or .BSS).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thoughts on these options? Other options?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; List of initial supported types is adequate: char *, int, and bool. We can re-evaluate later if there is a need for more types.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We need to figure out how Open MPI could read all file values and build an environment that could be passed to the backend to prevent the need to read from files on the backend. This may necessitate modifying the mca_base_var API.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt; &lt;openmpi_mpit.pdf&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="12119.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28048 - in trunk: . config ...etc."</a>
<li><strong>Previous message:</strong> <a href="12117.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc using libpci: GPL issue"</a>
<li><strong>In reply to:</strong> <a href="12114.php">George Bosilca: "Re: [OMPI devel] MCA variable system slides and notes"</a>
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
