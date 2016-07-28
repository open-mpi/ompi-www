<?
$subject_val = "Re: [OMPI devel] usage of mca variables in orte-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 09:50:03 2014" -->
<!-- isoreceived="20140317135003" -->
<!-- sent="Mon, 17 Mar 2014 14:50:02 +0100" -->
<!-- isosent="20140317135002" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] usage of mca variables in orte-restart" -->
<!-- id="20140317135002.GG12337_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7153A8817FC_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Date:</strong> 2014-03-17 09:50:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14355.php">Nathan Hjelm: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>Previous message:</strong> <a href="14353.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<li><strong>In reply to:</strong> <a href="14349.php">Hjelm, Nathan T: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14355.php">Nathan Hjelm: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>Reply:</strong> <a href="14355.php">Nathan Hjelm: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar 14, 2014 at 10:18:06PM +0000, Hjelm, Nathan T wrote:
<br>
<span class="quotelev1">&gt; The preferred way is to use mca_base_var_find and then call mca_base_var_[set|get]_value. For performance sake we only look at the environment when the variable is registered.
</span><br>
<p>I believe I found a bug in mca_base_var_set_value using bool variables:
<br>
<p>#0  0x00007f6e0d8fb800 in mca_base_var_enum_bool_sfv (self=0x7f6e0dbabc20 &lt;mca_base_var_enum_bool&gt;, value=0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;string_value=0x0) at ../../../../opal/mca/base/mca_base_var_enum.c:82
<br>
#1  0x00007f6e0d8f45d6 in mca_base_var_set_value (vari=120, value=0x4031e6, size=0, source=MCA_BASE_VAR_SOURCE_DEFAULT, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;source_file=0x0) at ../../../../opal/mca/base/mca_base_var.c:636
<br>
#2  0x0000000000401e44 in main (argc=7, argv=0x7fffa72a0a78) at ../../../../opal/tools/opal-restart/opal-restart.c:223
<br>
<p>I am using set_value like this:
<br>
<p>bool test=false;
<br>
mca_base_var_set_value(idx, &amp;test, 0, MCA_BASE_VAR_SOURCE_DEFAULT, NULL);
<br>
<p>As the size is ignored I am just setting it to '0'.
<br>
<p>mca_base_var_set_value() does 
<br>
<p>ret = var-&gt;mbv_enumerator-&gt;string_from_value(var-&gt;mbv_enumerator,((int *) value)[0], NULL);
<br>
<p>which calls mca_base_var_enum_bool_sfv() with the last parameter set to NULL:
<br>
<p>static int mca_base_var_enum_bool_sfv (mca_base_var_enum_t *self, const int value,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const char **string_value)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;*string_value = value ? &quot;true&quot; : &quot;false&quot;;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return OPAL_SUCCESS;
<br>
}
<br>
<p>and here it tries to access the last parameter (string_value) which has
<br>
been set to NULL. As I cannot find any usage of mca_base_var_set_value()
<br>
with bool variables this code path has probably not been used until now.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14355.php">Nathan Hjelm: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>Previous message:</strong> <a href="14353.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<li><strong>In reply to:</strong> <a href="14349.php">Hjelm, Nathan T: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14355.php">Nathan Hjelm: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>Reply:</strong> <a href="14355.php">Nathan Hjelm: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
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
