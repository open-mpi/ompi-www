<?
$subject_val = "Re: [OMPI devel] MCA Aliases";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 12:01:33 2015" -->
<!-- isoreceived="20150219170133" -->
<!-- sent="Thu, 19 Feb 2015 12:01:31 -0500" -->
<!-- isosent="20150219170131" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MCA Aliases" -->
<!-- id="CAG4F6z82OUUXxYDpOzSNa+iiSiyJ-HakD60ELGMLfWoBdweYkw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AEFF5546-7338-4040-B349-4D4A86AECBFC_at_open-mpi.org" -->
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
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-19 12:01:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16998.php">Howard Pritchard: "Re: [OMPI devel] git commit id in coverity"</a>
<li><strong>Previous message:</strong> <a href="16996.php">Ralph Castain: "Re: [OMPI devel] MCA Aliases"</a>
<li><strong>In reply to:</strong> <a href="16996.php">Ralph Castain: "Re: [OMPI devel] MCA Aliases"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!!!
<br>
<p>On Thu, Feb 19, 2015 at 11:58 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We call it a &#226;&#128;&#156;synonym&#226;&#128;&#157; - but yes, you certainly can, and we do it in many
</span><br>
<span class="quotelev1">&gt; places. From mca_base_var.h:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt;  * Register a synonym name for an MCA variable.
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * @param[in] synonym_for The index of the original variable. This index
</span><br>
<span class="quotelev1">&gt;  * must not refer to a synonym.
</span><br>
<span class="quotelev1">&gt;  * @param[in] project_name The project this synonym belongs to. Should
</span><br>
<span class="quotelev1">&gt;  * not be NULL (except for legacy reasons).
</span><br>
<span class="quotelev1">&gt;  * @param[in] framework_name The framework this synonym belongs to.
</span><br>
<span class="quotelev1">&gt;  * @param[in] component_name The component this synonym belongs to.
</span><br>
<span class="quotelev1">&gt;  * @param[in] synonym_name The synonym name.
</span><br>
<span class="quotelev1">&gt;  * @param[in] flags Flags for this synonym.
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * @returns index Variable index for new synonym on success.
</span><br>
<span class="quotelev1">&gt;  * @returns OPAL_ERR_BAD_VAR If synonym_for does not reference a valid
</span><br>
<span class="quotelev1">&gt;  * variable.
</span><br>
<span class="quotelev1">&gt;  * @returns OPAL_ERR_OUT_OF_RESOURCE If memory could not be allocated.
</span><br>
<span class="quotelev1">&gt;  * @returns OPAL_ERROR For all other errors.
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * Upon success, this function creates a synonym MCA variable
</span><br>
<span class="quotelev1">&gt;  * that will be treated almost exactly like the original.  The
</span><br>
<span class="quotelev1">&gt;  * type (int or string) is irrelevant; this function simply
</span><br>
<span class="quotelev1">&gt;  * creates a new name that by which the same variable value is
</span><br>
<span class="quotelev1">&gt;  * accessible.
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * Note that the original variable name has precendence over all
</span><br>
<span class="quotelev1">&gt;  * synonyms.  For example, consider the case if variable is
</span><br>
<span class="quotelev1">&gt;  * originally registered under the name &quot;A&quot; and is later
</span><br>
<span class="quotelev1">&gt;  * registered with synonyms &quot;B&quot; and &quot;C&quot;.  If the user sets values
</span><br>
<span class="quotelev1">&gt;  * for both MCA variable names &quot;A&quot; and &quot;B&quot;, the value associated
</span><br>
<span class="quotelev1">&gt;  * with the &quot;A&quot; name will be used and the value associated with
</span><br>
<span class="quotelev1">&gt;  * the &quot;B&quot; will be ignored (and will not even be visible by the
</span><br>
<span class="quotelev1">&gt;  * mca_base_var_*() API).  If the user sets values for both MCA
</span><br>
<span class="quotelev1">&gt;  * variable names &quot;B&quot; and &quot;C&quot; (and does *not* set a value for
</span><br>
<span class="quotelev1">&gt;  * &quot;A&quot;), it is undefined as to which value will be used.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; OPAL_DECLSPEC int mca_base_var_register_synonym (int synonym_for, const
</span><br>
<span class="quotelev1">&gt; char *project_name,
</span><br>
<span class="quotelev1">&gt;                                                  const char
</span><br>
<span class="quotelev1">&gt; *framework_name,
</span><br>
<span class="quotelev1">&gt;                                                  const char
</span><br>
<span class="quotelev1">&gt; *component_name,
</span><br>
<span class="quotelev1">&gt;                                                  const char *synonym_name,
</span><br>
<span class="quotelev1">&gt;                                                  mca_base_var_syn_flag_t
</span><br>
<span class="quotelev1">&gt; flags);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 19, 2015, at 8:54 AM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible to define an alias for an MCA parameter? Grepping around
</span><br>
<span class="quotelev1">&gt; the interwebs, it seems there was an RFC along these lines in 2008.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3613.php">http://www.open-mpi.org/community/lists/devel/2008/04/3613.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It doesn't appear that the functionality was added or, if it was, it has
</span><br>
<span class="quotelev1">&gt; since been removed.
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16995.php">http://www.open-mpi.org/community/lists/devel/2015/02/16995.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16996.php">http://www.open-mpi.org/community/lists/devel/2015/02/16996.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16997/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16998.php">Howard Pritchard: "Re: [OMPI devel] git commit id in coverity"</a>
<li><strong>Previous message:</strong> <a href="16996.php">Ralph Castain: "Re: [OMPI devel] MCA Aliases"</a>
<li><strong>In reply to:</strong> <a href="16996.php">Ralph Castain: "Re: [OMPI devel] MCA Aliases"</a>
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
