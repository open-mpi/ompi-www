<?
$subject_val = "Re: [OMPI devel] Update orte_proc structure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 12:34:18 2008" -->
<!-- isoreceived="20081001163418" -->
<!-- sent="Wed, 1 Oct 2008 10:34:11 -0600" -->
<!-- isosent="20081001163411" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Update orte_proc structure" -->
<!-- id="ADA8CE0D-8C45-42CA-9458-086C186BC032_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-01 12:34:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4726.php">Leonardo Fialho: "Re: [OMPI devel] Update orte_proc structure"</a>
<li><strong>Previous message:</strong> <a href="4724.php">Jon Mason: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<li><strong>In reply to:</strong> <a href="4723.php">Leonardo Fialho: "[OMPI devel] Update orte_proc structure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4727.php">Leonardo Fialho: "Re: [OMPI devel] Update orte_proc structure"</a>
<li><strong>Reply:</strong> <a href="4727.php">Leonardo Fialho: "Re: [OMPI devel] Update orte_proc structure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not entirely sure what you are doing here. The orte_job_t,  
<br>
orte_node_t, and orte_proc_t objects are only used on mpirun - the  
<br>
arrays built from those objects are only defined on mpirun itself, not  
<br>
on any orted.
<br>
<p>When you say &quot;orte daemon which acts as HNP&quot;, are you implying that  
<br>
you have some orted out there that is trying to behave like an HNP? Or  
<br>
do you really mean mpirun itself?
<br>
<p>I suspect the reason you are seeing a difference is that orte-ps only  
<br>
gets its info from mpirun, and you are somehow storing the modified  
<br>
data on an orted instead.
<br>
<p>Did you modify orted itself to create and store an orte_job_t array?  
<br>
This would not be a good idea as a significant amount of code in the  
<br>
system expects that array to only exist  inside of mpirun. You could  
<br>
run into some really strange behavior in various scenarios.
<br>
<p>Ralph
<br>
<p><p>On Oct 1, 2008, at 9:09 AM, Leonardo Fialho wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
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
<span class="quotelev1">&gt;   /* protector node */
</span><br>
<span class="quotelev1">&gt;   orte_process_name_t protector;
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
<span class="quotelev1">&gt;   ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
</span><br>
<span class="quotelev1">&gt;  goto CLEANUP;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; procs = (orte_proc_t**)jdata-&gt;procs-&gt;addr;
</span><br>
<span class="quotelev1">&gt; if (NULL == procs[sender_vpid] ) {
</span><br>
<span class="quotelev1">&gt;   ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
</span><br>
<span class="quotelev1">&gt;   goto CLEANUP;
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
<span class="quotelev1">&gt;       protector = orte_util_print_name_args(&amp;vpid-&gt;protector);
</span><br>
<span class="quotelev1">&gt;       printf(&quot;%*s |&quot;,   len_protector, protector);
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Leonardo Fialho
</span><br>
<span class="quotelev1">&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev1">&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev1">&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev1">&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev1">&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev1">&gt; Fax: +34-93-581-2478
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
<li><strong>Next message:</strong> <a href="4726.php">Leonardo Fialho: "Re: [OMPI devel] Update orte_proc structure"</a>
<li><strong>Previous message:</strong> <a href="4724.php">Jon Mason: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<li><strong>In reply to:</strong> <a href="4723.php">Leonardo Fialho: "[OMPI devel] Update orte_proc structure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4727.php">Leonardo Fialho: "Re: [OMPI devel] Update orte_proc structure"</a>
<li><strong>Reply:</strong> <a href="4727.php">Leonardo Fialho: "Re: [OMPI devel] Update orte_proc structure"</a>
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
