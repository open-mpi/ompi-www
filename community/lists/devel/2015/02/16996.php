<?
$subject_val = "Re: [OMPI devel] MCA Aliases";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 11:58:05 2015" -->
<!-- isoreceived="20150219165805" -->
<!-- sent="Thu, 19 Feb 2015 08:58:01 -0800" -->
<!-- isosent="20150219165801" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MCA Aliases" -->
<!-- id="AEFF5546-7338-4040-B349-4D4A86AECBFC_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAG4F6z_CzFzEAPCuVUwCZrW92tfkms2btdPOHpLruOY4XW0h2w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MCA Aliases<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-19 11:58:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16997.php">Joshua Ladd: "Re: [OMPI devel] MCA Aliases"</a>
<li><strong>Previous message:</strong> <a href="16995.php">Joshua Ladd: "[OMPI devel] MCA Aliases"</a>
<li><strong>In reply to:</strong> <a href="16995.php">Joshua Ladd: "[OMPI devel] MCA Aliases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16997.php">Joshua Ladd: "Re: [OMPI devel] MCA Aliases"</a>
<li><strong>Reply:</strong> <a href="16997.php">Joshua Ladd: "Re: [OMPI devel] MCA Aliases"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We call it a &#226;&#128;&#156;synonym&#226;&#128;&#157; - but yes, you certainly can, and we do it in many places. From mca_base_var.h:
<br>
<p>/**
<br>
&nbsp;* Register a synonym name for an MCA variable.
<br>
&nbsp;*
<br>
&nbsp;* @param[in] synonym_for The index of the original variable. This index
<br>
&nbsp;* must not refer to a synonym.
<br>
&nbsp;* @param[in] project_name The project this synonym belongs to. Should
<br>
&nbsp;* not be NULL (except for legacy reasons).
<br>
&nbsp;* @param[in] framework_name The framework this synonym belongs to.
<br>
&nbsp;* @param[in] component_name The component this synonym belongs to.
<br>
&nbsp;* @param[in] synonym_name The synonym name.
<br>
&nbsp;* @param[in] flags Flags for this synonym.
<br>
&nbsp;*
<br>
&nbsp;* @returns index Variable index for new synonym on success.
<br>
&nbsp;* @returns OPAL_ERR_BAD_VAR If synonym_for does not reference a valid
<br>
&nbsp;* variable.
<br>
&nbsp;* @returns OPAL_ERR_OUT_OF_RESOURCE If memory could not be allocated.
<br>
&nbsp;* @returns OPAL_ERROR For all other errors.
<br>
&nbsp;* 
<br>
&nbsp;* Upon success, this function creates a synonym MCA variable
<br>
&nbsp;* that will be treated almost exactly like the original.  The
<br>
&nbsp;* type (int or string) is irrelevant; this function simply
<br>
&nbsp;* creates a new name that by which the same variable value is
<br>
&nbsp;* accessible.  
<br>
&nbsp;*
<br>
&nbsp;* Note that the original variable name has precendence over all
<br>
&nbsp;* synonyms.  For example, consider the case if variable is
<br>
&nbsp;* originally registered under the name &quot;A&quot; and is later
<br>
&nbsp;* registered with synonyms &quot;B&quot; and &quot;C&quot;.  If the user sets values
<br>
&nbsp;* for both MCA variable names &quot;A&quot; and &quot;B&quot;, the value associated
<br>
&nbsp;* with the &quot;A&quot; name will be used and the value associated with
<br>
&nbsp;* the &quot;B&quot; will be ignored (and will not even be visible by the
<br>
&nbsp;* mca_base_var_*() API).  If the user sets values for both MCA
<br>
&nbsp;* variable names &quot;B&quot; and &quot;C&quot; (and does *not* set a value for
<br>
&nbsp;* &quot;A&quot;), it is undefined as to which value will be used.
<br>
&nbsp;*/
<br>
OPAL_DECLSPEC int mca_base_var_register_synonym (int synonym_for, const char *project_name,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const char *framework_name,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const char *component_name,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const char *synonym_name,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_base_var_syn_flag_t flags);
<br>
<p><p><span class="quotelev1">&gt; On Feb 19, 2015, at 8:54 AM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible to define an alias for an MCA parameter? Grepping around the interwebs, it seems there was an RFC along these lines in 2008. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3613.php">http://www.open-mpi.org/community/lists/devel/2008/04/3613.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2008/04/3613.php">http://www.open-mpi.org/community/lists/devel/2008/04/3613.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It doesn't appear that the functionality was added or, if it was, it has since been removed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16995.php">http://www.open-mpi.org/community/lists/devel/2015/02/16995.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16996/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16997.php">Joshua Ladd: "Re: [OMPI devel] MCA Aliases"</a>
<li><strong>Previous message:</strong> <a href="16995.php">Joshua Ladd: "[OMPI devel] MCA Aliases"</a>
<li><strong>In reply to:</strong> <a href="16995.php">Joshua Ladd: "[OMPI devel] MCA Aliases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16997.php">Joshua Ladd: "Re: [OMPI devel] MCA Aliases"</a>
<li><strong>Reply:</strong> <a href="16997.php">Joshua Ladd: "Re: [OMPI devel] MCA Aliases"</a>
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
