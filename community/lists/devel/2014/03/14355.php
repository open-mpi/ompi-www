<?
$subject_val = "Re: [OMPI devel] usage of mca variables in orte-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 10:47:19 2014" -->
<!-- isoreceived="20140317144719" -->
<!-- sent="Mon, 17 Mar 2014 08:47:16 -0600" -->
<!-- isosent="20140317144716" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] usage of mca variables in orte-restart" -->
<!-- id="20140317144716.GA28767_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140317135002.GG12337_at_lisas.de" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-17 10:47:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14356.php">Jeff Squyres (jsquyres): "[OMPI devel] ompi-tests &quot;ompimtttester&quot; account password changed"</a>
<li><strong>Previous message:</strong> <a href="14354.php">Adrian Reber: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>In reply to:</strong> <a href="14354.php">Adrian Reber: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14360.php">Adrian Reber: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>Reply:</strong> <a href="14360.php">Adrian Reber: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good catch. Fixing now.
<br>
<p>-Nathan
<br>
<p>On Mon, Mar 17, 2014 at 02:50:02PM +0100, Adrian Reber wrote:
<br>
<span class="quotelev1">&gt; On Fri, Mar 14, 2014 at 10:18:06PM +0000, Hjelm, Nathan T wrote:
</span><br>
<span class="quotelev2">&gt; &gt; The preferred way is to use mca_base_var_find and then call mca_base_var_[set|get]_value. For performance sake we only look at the environment when the variable is registered.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe I found a bug in mca_base_var_set_value using bool variables:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #0  0x00007f6e0d8fb800 in mca_base_var_enum_bool_sfv (self=0x7f6e0dbabc20 &lt;mca_base_var_enum_bool&gt;, value=0, 
</span><br>
<span class="quotelev1">&gt;     string_value=0x0) at ../../../../opal/mca/base/mca_base_var_enum.c:82
</span><br>
<span class="quotelev1">&gt; #1  0x00007f6e0d8f45d6 in mca_base_var_set_value (vari=120, value=0x4031e6, size=0, source=MCA_BASE_VAR_SOURCE_DEFAULT, 
</span><br>
<span class="quotelev1">&gt;     source_file=0x0) at ../../../../opal/mca/base/mca_base_var.c:636
</span><br>
<span class="quotelev1">&gt; #2  0x0000000000401e44 in main (argc=7, argv=0x7fffa72a0a78) at ../../../../opal/tools/opal-restart/opal-restart.c:223
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using set_value like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bool test=false;
</span><br>
<span class="quotelev1">&gt; mca_base_var_set_value(idx, &amp;test, 0, MCA_BASE_VAR_SOURCE_DEFAULT, NULL);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As the size is ignored I am just setting it to '0'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca_base_var_set_value() does 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ret = var-&gt;mbv_enumerator-&gt;string_from_value(var-&gt;mbv_enumerator,((int *) value)[0], NULL);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which calls mca_base_var_enum_bool_sfv() with the last parameter set to NULL:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int mca_base_var_enum_bool_sfv (mca_base_var_enum_t *self, const int value,
</span><br>
<span class="quotelev1">&gt;                                        const char **string_value)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     *string_value = value ? &quot;true&quot; : &quot;false&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and here it tries to access the last parameter (string_value) which has
</span><br>
<span class="quotelev1">&gt; been set to NULL. As I cannot find any usage of mca_base_var_set_value()
</span><br>
<span class="quotelev1">&gt; with bool variables this code path has probably not been used until now.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14354.php">http://www.open-mpi.org/community/lists/devel/2014/03/14354.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14355/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14356.php">Jeff Squyres (jsquyres): "[OMPI devel] ompi-tests &quot;ompimtttester&quot; account password changed"</a>
<li><strong>Previous message:</strong> <a href="14354.php">Adrian Reber: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>In reply to:</strong> <a href="14354.php">Adrian Reber: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14360.php">Adrian Reber: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>Reply:</strong> <a href="14360.php">Adrian Reber: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
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
