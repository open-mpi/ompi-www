<?
$subject_val = "Re: [OMPI devel] usage of mca variables in orte-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 14 17:58:27 2014" -->
<!-- isoreceived="20140314215827" -->
<!-- sent="Fri, 14 Mar 2014 14:57:31 -0700" -->
<!-- isosent="20140314215731" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] usage of mca variables in orte-restart" -->
<!-- id="ED5A121F-DD62-423B-A29F-17AE0F054F4D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140314210521.GA12337_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] usage of mca variables in orte-restart<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-14 17:57:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14349.php">Hjelm, Nathan T: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>Previous message:</strong> <a href="14347.php">Adrian Reber: "[OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>In reply to:</strong> <a href="14347.php">Adrian Reber: "[OMPI devel] usage of mca variables in orte-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14349.php">Hjelm, Nathan T: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't believe we support changing the value of an MCA param on-the-fly - you'd need to transfer it to an appropriate-level global that you can change as required
<br>
<p>On Mar 14, 2014, at 2:05 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am now trying to run orte-restart. As far as I understand it
</span><br>
<span class="quotelev1">&gt; orte-restart analyzes the checkpoint metadata and then tries to exec()
</span><br>
<span class="quotelev1">&gt; mpirun which then starts opal-restart. During the startup of
</span><br>
<span class="quotelev1">&gt; opal-restart (during initialize()) detection of the best CRS module is
</span><br>
<span class="quotelev1">&gt; disabled:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /* 
</span><br>
<span class="quotelev1">&gt;     * Turn off the selection of the CRS component,
</span><br>
<span class="quotelev1">&gt;     * we need to do that later
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt;    (void) mca_base_var_env_name(&quot;crs_base_do_not_select&quot;, &amp;tmp_env_var);
</span><br>
<span class="quotelev1">&gt;    opal_setenv(tmp_env_var,
</span><br>
<span class="quotelev1">&gt;                &quot;1&quot;, /* turn off the selection */
</span><br>
<span class="quotelev1">&gt;                true, &amp;environ);
</span><br>
<span class="quotelev1">&gt;    free(tmp_env_var);
</span><br>
<span class="quotelev1">&gt;    tmp_env_var = NULL;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This seems to work. Later when actually selecting the correct CRS module
</span><br>
<span class="quotelev1">&gt; to restart the checkpointed process the selection is enabled again:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /* Re-enable the selection of the CRS component, so we can choose the right one */
</span><br>
<span class="quotelev1">&gt;    (void) mca_base_var_env_name(&quot;crs_base_do_not_select&quot;, &amp;tmp_env_var);
</span><br>
<span class="quotelev1">&gt;    opal_setenv(tmp_env_var,
</span><br>
<span class="quotelev1">&gt;                &quot;0&quot;, /* turn on the selection */
</span><br>
<span class="quotelev1">&gt;                true, &amp;environ);
</span><br>
<span class="quotelev1">&gt;    free(tmp_env_var);
</span><br>
<span class="quotelev1">&gt;    tmp_env_var = NULL;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This does not seem to have an effect. The one reason why it does not work
</span><br>
<span class="quotelev1">&gt; is pretty obvious. The mca variable crs_base_do_not_select is registered during
</span><br>
<span class="quotelev1">&gt; opal_crs_base_register() and written to the bool variable opal_crs_base_do_not_select
</span><br>
<span class="quotelev1">&gt; only once (during register). Later in opal_crs_base_select() this bool
</span><br>
<span class="quotelev1">&gt; variable is queried if select should run or not and as it is only changed
</span><br>
<span class="quotelev1">&gt; during register it never changes. So from the code flow it cannot work
</span><br>
<span class="quotelev1">&gt; and is probably the result of one of the rewrites since C/R was introduced.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To fix this I am trying to read the value of the MCA variable
</span><br>
<span class="quotelev1">&gt; opal_crs_base_do_not_select during opal_crs_base_select() like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; idx = mca_base_var_find(&quot;opal&quot;, &quot;crs&quot;, &quot;base&quot;, &quot;do_not_select&quot;)
</span><br>
<span class="quotelev1">&gt; mca_base_var_get_value(idx, &amp;value, NULL, NULL);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This also seems to work because it is different if I change the first
</span><br>
<span class="quotelev1">&gt; opal_setenv() during initialize(). The problem I am seeing is that the
</span><br>
<span class="quotelev1">&gt; second opal_setenv() (back to 0) cannot be detected using mca_base_var_get_value().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So my question is: what is the preferred way to read and write MCA
</span><br>
<span class="quotelev1">&gt; variables to access them in the different modules? Is the existing
</span><br>
<span class="quotelev1">&gt; code still correct? There is also mca_base_var_set_value() should I rather
</span><br>
<span class="quotelev1">&gt; use this to set 'opal_crs_base_do_not_select'. I was, however, not able
</span><br>
<span class="quotelev1">&gt; to use mca_base_var_set_value() without a segfault. There are not much
</span><br>
<span class="quotelev1">&gt; uses of mca_base_var_set_value() in the existing code and none uses
</span><br>
<span class="quotelev1">&gt; a bool variable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also discovered I can just access to global C variable 'opal_crs_base_do_not_select'
</span><br>
<span class="quotelev1">&gt; from opal-restart.c as well as from opal_crs_base_select(). This also works.
</span><br>
<span class="quotelev1">&gt; This would solve my problem setting and reading MCA variables.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14347.php">http://www.open-mpi.org/community/lists/devel/2014/03/14347.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14349.php">Hjelm, Nathan T: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>Previous message:</strong> <a href="14347.php">Adrian Reber: "[OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>In reply to:</strong> <a href="14347.php">Adrian Reber: "[OMPI devel] usage of mca variables in orte-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14349.php">Hjelm, Nathan T: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
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
