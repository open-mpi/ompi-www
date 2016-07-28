<?
$subject_val = "Re: [OMPI devel] usage of mca variables in orte-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 04:11:12 2014" -->
<!-- isoreceived="20140318081112" -->
<!-- sent="Tue, 18 Mar 2014 09:11:10 +0100" -->
<!-- isosent="20140318081110" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] usage of mca variables in orte-restart" -->
<!-- id="20140318081110.GA13207_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140317144716.GA28767_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-18 04:11:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14361.php">Ralph Castain: "[OMPI devel] Hang in comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="14359.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<li><strong>In reply to:</strong> <a href="14355.php">Nathan Hjelm: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your fix.
<br>
<p>You say that the environment is only taken in
<br>
account during register. There is another variable set in the
<br>
environment in opal-restart.c. Does the following still work:
<br>
<p>opal-restart.c:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;(void) mca_base_var_env_name(&quot;crs&quot;, &amp;tmp_env_var);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_setenv(tmp_env_var,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;expected_crs_comp,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;true, &amp;environ);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;free(tmp_env_var);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tmp_env_var = NULL;
<br>
<p>The preferred checkpointer is selected like this and in
<br>
opal_crs_base_select() the following happens:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if( OPAL_SUCCESS != mca_base_select(&quot;crs&quot;, opal_crs_base_framework.framework_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;opal_crs_base_framework.framework_components,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(mca_base_module_t **) &amp;best_module,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(mca_base_component_t **) &amp;best_component) ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* This will only happen if no component was selected */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit_status = OPAL_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto cleanup;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Does the mca_base_var_env_name() influence which crs module
<br>
is selected during mca_base_select()? Or do I have to change it
<br>
also to mca_base_var_set_value() to select the preferred crs module?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<p><p>On Mon, Mar 17, 2014 at 08:47:16AM -0600, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; Good catch. Fixing now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 17, 2014 at 02:50:02PM +0100, Adrian Reber wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Mar 14, 2014 at 10:18:06PM +0000, Hjelm, Nathan T wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The preferred way is to use mca_base_var_find and then call mca_base_var_[set|get]_value. For performance sake we only look at the environment when the variable is registered.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I believe I found a bug in mca_base_var_set_value using bool variables:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00007f6e0d8fb800 in mca_base_var_enum_bool_sfv (self=0x7f6e0dbabc20 &lt;mca_base_var_enum_bool&gt;, value=0, 
</span><br>
<span class="quotelev2">&gt; &gt;     string_value=0x0) at ../../../../opal/mca/base/mca_base_var_enum.c:82
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00007f6e0d8f45d6 in mca_base_var_set_value (vari=120, value=0x4031e6, size=0, source=MCA_BASE_VAR_SOURCE_DEFAULT, 
</span><br>
<span class="quotelev2">&gt; &gt;     source_file=0x0) at ../../../../opal/mca/base/mca_base_var.c:636
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x0000000000401e44 in main (argc=7, argv=0x7fffa72a0a78) at ../../../../opal/tools/opal-restart/opal-restart.c:223
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am using set_value like this:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; bool test=false;
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_var_set_value(idx, &amp;test, 0, MCA_BASE_VAR_SOURCE_DEFAULT, NULL);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; As the size is ignored I am just setting it to '0'.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_var_set_value() does 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ret = var-&gt;mbv_enumerator-&gt;string_from_value(var-&gt;mbv_enumerator,((int *) value)[0], NULL);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; which calls mca_base_var_enum_bool_sfv() with the last parameter set to NULL:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; static int mca_base_var_enum_bool_sfv (mca_base_var_enum_t *self, const int value,
</span><br>
<span class="quotelev2">&gt; &gt;                                        const char **string_value)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;     *string_value = value ? &quot;true&quot; : &quot;false&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; and here it tries to access the last parameter (string_value) which has
</span><br>
<span class="quotelev2">&gt; &gt; been set to NULL. As I cannot find any usage of mca_base_var_set_value()
</span><br>
<span class="quotelev2">&gt; &gt; with bool variables this code path has probably not been used until now.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 		Adrian
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14354.php">http://www.open-mpi.org/community/lists/devel/2014/03/14354.php</a>
</span><br>
<p><p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14355.php">http://www.open-mpi.org/community/lists/devel/2014/03/14355.php</a>
</span><br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<p><pre>
-- 
Adrian Reber &lt;adrian_at_[hidden]&gt;            <a href="http://lisas.de/~adrian/">http://lisas.de/~adrian/</a>
printk(KERN_ERR &quot;msp3400: chip reset failed, penguin on i2c bus?\n&quot;);
	2.2.16 /usr/src/linux/drivers/char/msp3400.c

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14360/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14361.php">Ralph Castain: "[OMPI devel] Hang in comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="14359.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<li><strong>In reply to:</strong> <a href="14355.php">Nathan Hjelm: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
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
