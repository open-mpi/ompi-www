<?
$subject_val = "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 13:25:44 2010" -->
<!-- isoreceived="20100122182544" -->
<!-- sent="Fri, 22 Jan 2010 19:25:30 +0100" -->
<!-- isosent="20100122182530" -->
<!-- name="Holger Berger" -->
<!-- email="hberger_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4" -->
<!-- id="201001221925.30620.hberger_at_hpce.nec.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4" -->
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
<strong>Subject:</strong> Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4<br>
<strong>From:</strong> Holger Berger (<em>hberger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-22 13:25:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7349.php">Lenny Verkhovsky: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<li><strong>Previous message:</strong> <a href="7347.php">Shiqing Fan: "[OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<li><strong>Maybe in reply to:</strong> <a href="7347.php">Shiqing Fan: "[OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7349.php">Lenny Verkhovsky: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<li><strong>Reply:</strong> <a href="7349.php">Lenny Verkhovsky: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tracked this down a bit, and my impression is that this piece of code in
<br>
coll_tuned_component.c
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (ompi_coll_tuned_use_dynamic_rules) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_base_param_reg_string(&amp;mca_coll_tuned_component.super.collm_version,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;dynamic_rules_filename&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;Filename of configuration file that contains the dynamic (@runtime) decision function rules&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;false, false, ompi_coll_tuned_dynamic_rules_filename,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;ompi_coll_tuned_dynamic_rules_filename);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( ompi_coll_tuned_dynamic_rules_filename ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_OUTPUT((ompi_coll_tuned_stream,&quot;coll:tuned:component_open Reading collective rules file [%s]&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_dynamic_rules_filename));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = ompi_coll_tuned_read_rules_config_file( ompi_coll_tuned_dynamic_rules_filename,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;(mca_coll_tuned_component.all_base_rules), COLLCOUNT);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( rc &gt;= 0 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_OUTPUT((ompi_coll_tuned_stream,&quot;coll:tuned:module_open Read %d valid rules\n&quot;, rc));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_OUTPUT((ompi_coll_tuned_stream,&quot;coll:tuned:module_open Reading collective rules file failed\n&quot;));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_coll_tuned_component.all_base_rules = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;....
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Does not initialize the msg_rules as ompi_coll_tuned_read_rules_config_file does it by calling
<br>
ompi_coll_tuned_mk_msg_rules in the case that
<br>
<p>ompi_coll_tuned_use_dynamic_rules is TRUE
<br>
and
<br>
ompi_coll_tuned_dynamic_rules_filename is FALSE
<br>
<p>which leads to a crash in line 
<br>
&nbsp;&nbsp;if( (NULL == base_com_rule) || (0 == base_com_rule-&gt;n_msg_sizes)) 
<br>
in coll_tuned_dynamic_rules.c:361
<br>
as base_com_rule seems to unitialized, but NOT zero, and points somewhere...
<br>
<p><p>That is probably not inteneded, as it prohibits the selection of an algorithm
<br>
by switch like -mca coll_tuned_alltoall_algorithm 2.
<br>
<p>Hope that helps fixing it...
<br>
<p><p><p><p><p><pre>
-- 
Holger Berger
System Integration and Support
HPCE Division NEC Deutschland GmbH
Tel: +49-711-6877035 hberger_at_[hidden]
Fax: +49-711-6877145 <a href="http://www.nec.com/de">http://www.nec.com/de</a>
NEC Deutschland GmbH, Hansaallee 101, 40549 D&#252;sseldorf
Gesch&#228;ftsf&#252;hrer Yuya Momose
Handelsregister D&#252;sseldorf HRB 57941; VAT ID DE129424743
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7349.php">Lenny Verkhovsky: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<li><strong>Previous message:</strong> <a href="7347.php">Shiqing Fan: "[OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<li><strong>Maybe in reply to:</strong> <a href="7347.php">Shiqing Fan: "[OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7349.php">Lenny Verkhovsky: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<li><strong>Reply:</strong> <a href="7349.php">Lenny Verkhovsky: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
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
