<?
$subject_val = "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 24 01:35:39 2010" -->
<!-- isoreceived="20100124063539" -->
<!-- sent="Sun, 24 Jan 2010 08:35:33 +0200" -->
<!-- isosent="20100124063533" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4" -->
<!-- id="453d39991001232235u617de76ah82c2e831482154b3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201001221925.30620.hberger_at_hpce.nec.com" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-24 01:35:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7350.php">Chris Samuel: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Previous message:</strong> <a href="7348.php">Holger Berger: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<li><strong>In reply to:</strong> <a href="7348.php">Holger Berger: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7371.php">George Bosilca: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<li><strong>Reply:</strong> <a href="7371.php">George Bosilca: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's a known issue.
<br>
try to provide file with rules.
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/2087">https://svn.open-mpi.org/trac/ompi/ticket/2087</a>
<br>
Lenny.
<br>
On Fri, Jan 22, 2010 at 8:25 PM, Holger Berger &lt;hberger_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tracked this down a bit, and my impression is that this piece of code in
</span><br>
<span class="quotelev1">&gt; coll_tuned_component.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (ompi_coll_tuned_use_dynamic_rules) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mca_base_param_reg_string(&amp;mca_coll_tuned_component.super.collm_version,
</span><br>
<span class="quotelev1">&gt;                                  &quot;dynamic_rules_filename&quot;,
</span><br>
<span class="quotelev1">&gt;                                  &quot;Filename of configuration file that
</span><br>
<span class="quotelev1">&gt; contains the dynamic (@runtime) decision function rules&quot;,
</span><br>
<span class="quotelev1">&gt;                                  false, false,
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_dynamic_rules_filename,
</span><br>
<span class="quotelev1">&gt;                                  &amp;ompi_coll_tuned_dynamic_rules_filename);
</span><br>
<span class="quotelev1">&gt;        if( ompi_coll_tuned_dynamic_rules_filename ) {
</span><br>
<span class="quotelev1">&gt;            OPAL_OUTPUT((ompi_coll_tuned_stream,&quot;coll:tuned:component_open
</span><br>
<span class="quotelev1">&gt; Reading collective rules file [%s]&quot;,
</span><br>
<span class="quotelev1">&gt;                         ompi_coll_tuned_dynamic_rules_filename));
</span><br>
<span class="quotelev1">&gt;            rc = ompi_coll_tuned_read_rules_config_file(
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_dynamic_rules_filename,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &amp;(mca_coll_tuned_component.all_base_rules), COLLCOUNT);
</span><br>
<span class="quotelev1">&gt;            if( rc &gt;= 0 ) {
</span><br>
<span class="quotelev1">&gt;                OPAL_OUTPUT((ompi_coll_tuned_stream,&quot;coll:tuned:module_open
</span><br>
<span class="quotelev1">&gt; Read %d valid rules\n&quot;, rc));
</span><br>
<span class="quotelev1">&gt;            } else {
</span><br>
<span class="quotelev1">&gt;                OPAL_OUTPUT((ompi_coll_tuned_stream,&quot;coll:tuned:module_open
</span><br>
<span class="quotelev1">&gt; Reading collective rules file failed\n&quot;));
</span><br>
<span class="quotelev1">&gt;                mca_coll_tuned_component.all_base_rules = NULL;
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;        ....
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does not initialize the msg_rules as ompi_coll_tuned_read_rules_config_file
</span><br>
<span class="quotelev1">&gt; does it by calling
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_mk_msg_rules in the case that
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_use_dynamic_rules is TRUE
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_dynamic_rules_filename is FALSE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which leads to a crash in line
</span><br>
<span class="quotelev1">&gt;  if( (NULL == base_com_rule) || (0 == base_com_rule-&gt;n_msg_sizes))
</span><br>
<span class="quotelev1">&gt; in coll_tuned_dynamic_rules.c:361
</span><br>
<span class="quotelev1">&gt; as base_com_rule seems to unitialized, but NOT zero, and points
</span><br>
<span class="quotelev1">&gt; somewhere...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is probably not inteneded, as it prohibits the selection of an
</span><br>
<span class="quotelev1">&gt; algorithm
</span><br>
<span class="quotelev1">&gt; by switch like -mca coll_tuned_alltoall_algorithm 2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps fixing it...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Holger Berger
</span><br>
<span class="quotelev1">&gt; System Integration and Support
</span><br>
<span class="quotelev1">&gt; HPCE Division NEC Deutschland GmbH
</span><br>
<span class="quotelev1">&gt; Tel: +49-711-6877035 hberger_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Fax: +49-711-6877145 <a href="http://www.nec.com/de">http://www.nec.com/de</a>
</span><br>
<span class="quotelev1">&gt; NEC Deutschland GmbH, Hansaallee 101, 40549 D&#252;sseldorf
</span><br>
<span class="quotelev1">&gt; Gesch&#228;ftsf&#252;hrer Yuya Momose
</span><br>
<span class="quotelev1">&gt; Handelsregister D&#252;sseldorf HRB 57941; VAT ID DE129424743
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7349/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7350.php">Chris Samuel: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Previous message:</strong> <a href="7348.php">Holger Berger: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<li><strong>In reply to:</strong> <a href="7348.php">Holger Berger: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7371.php">George Bosilca: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<li><strong>Reply:</strong> <a href="7371.php">George Bosilca: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
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
