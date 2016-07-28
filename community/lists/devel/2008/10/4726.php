<?
$subject_val = "Re: [OMPI devel] Update orte_proc structure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 12:34:44 2008" -->
<!-- isoreceived="20081001163444" -->
<!-- sent="Wed, 01 Oct 2008 18:37:37 +0200" -->
<!-- isosent="20081001163737" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Update orte_proc structure" -->
<!-- id="48E3A751.1070908_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48E3929E.5060200_at_aomail.uab.es" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Update orte_proc structure<br>
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-01 12:37:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4727.php">Leonardo Fialho: "Re: [OMPI devel] Update orte_proc structure"</a>
<li><strong>Previous message:</strong> <a href="4725.php">Ralph Castain: "Re: [OMPI devel] Update orte_proc structure"</a>
<li><strong>In reply to:</strong> <a href="4723.php">Leonardo Fialho: "[OMPI devel] Update orte_proc structure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Forget it. I found the problem... a little patch to 
<br>
orte_dt_pack/unpack_fns solve my problem...
<br>
<p>Leonardo
<br>
<p>Leonardo Fialho escribi&#243;:
<br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a little doubt about how to update the orte_proc structure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have modified the orte_proc structure to include another field 
</span><br>
<span class="quotelev1">&gt; (orte_name_proc_t type) to describe the node whose store my 
</span><br>
<span class="quotelev1">&gt; checkpoints and logs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; struct orte_proc_t {
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; #if OPAL_ENABLE_FT_RADIC == 1
</span><br>
<span class="quotelev1">&gt;    /* protector node */
</span><br>
<span class="quotelev1">&gt;    orte_process_name_t protector;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thus, I have added in orted_comm.c a code which I think that would 
</span><br>
<span class="quotelev1">&gt; update de job structure:
</span><br>
<span class="quotelev1">&gt; /* Update the structure */
</span><br>
<span class="quotelev1">&gt; if (NULL == (jdata = orte_get_job_data_object(sender_jobid))) {
</span><br>
<span class="quotelev1">&gt;    ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
</span><br>
<span class="quotelev1">&gt;   goto CLEANUP;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; procs = (orte_proc_t**)jdata-&gt;procs-&gt;addr;
</span><br>
<span class="quotelev1">&gt; if (NULL == procs[sender_vpid] ) {
</span><br>
<span class="quotelev1">&gt;    ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
</span><br>
<span class="quotelev1">&gt;    goto CLEANUP;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; procs[sender_vpid]-&gt;protector.jobid = protector_jobid;
</span><br>
<span class="quotelev1">&gt; procs[sender_vpid]-&gt;protector.vpid  = protector_vpid;
</span><br>
<span class="quotelev1">&gt; opal_output(0, &quot;%s is the protector of %s&quot;, 
</span><br>
<span class="quotelev1">&gt; ORTE_NAME_PRINT(&amp;procs[sender_vpid]-&gt;name), 
</span><br>
<span class="quotelev1">&gt; ORTE_NAME_PRINT(&amp;procs[sender_vpid]-&gt;protector));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the log of the orte daemon which acts as HNP I can see correct 
</span><br>
<span class="quotelev1">&gt; informations which was added to the orte_proc structure, but, when I 
</span><br>
<span class="quotelev1">&gt; use my modified version of orte-ps I found incorrect information 
</span><br>
<span class="quotelev1">&gt; ([[INVALID],INVALID]). Bellow is the code I have used in orte-ps:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if OPAL_ENABLE_FT_RADIC == 1
</span><br>
<span class="quotelev1">&gt;        protector = orte_util_print_name_args(&amp;vpid-&gt;protector);
</span><br>
<span class="quotelev1">&gt;        printf(&quot;%*s |&quot;,   len_protector, protector);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The question is: why the HNP show the correct information, and the 
</span><br>
<span class="quotelev1">&gt; orte-ps don&#180;t?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<p><p><pre>
-- 
Leonardo Fialho
Computer Architecture and Operating Systems Department - CAOS
Universidad Autonoma de Barcelona - UAB
ETSE, Edifcio Q, QC/3088
<a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
Phone: +34-93-581-2888
Fax: +34-93-581-2478
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4727.php">Leonardo Fialho: "Re: [OMPI devel] Update orte_proc structure"</a>
<li><strong>Previous message:</strong> <a href="4725.php">Ralph Castain: "Re: [OMPI devel] Update orte_proc structure"</a>
<li><strong>In reply to:</strong> <a href="4723.php">Leonardo Fialho: "[OMPI devel] Update orte_proc structure"</a>
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
