<?
$subject_val = "Re: [OMPI devel] Update orte_proc structure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 12:37:44 2008" -->
<!-- isoreceived="20081001163744" -->
<!-- sent="Wed, 01 Oct 2008 18:40:36 +0200" -->
<!-- isosent="20081001164036" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Update orte_proc structure" -->
<!-- id="48E3A804.3060608_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ADA8CE0D-8C45-42CA-9458-086C186BC032_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-10-01 12:40:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4728.php">Jeff Squyres: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<li><strong>Previous message:</strong> <a href="4726.php">Leonardo Fialho: "Re: [OMPI devel] Update orte_proc structure"</a>
<li><strong>In reply to:</strong> <a href="4725.php">Ralph Castain: "Re: [OMPI devel] Update orte_proc structure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4726.php">Leonardo Fialho: "Re: [OMPI devel] Update orte_proc structure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralh,
<br>
<p>My mistake. When I said orted which acts as HNP, in really it is the 
<br>
mpirun. I just want to store one new information in orte_proc in share 
<br>
this information with new deamons ans tools which connect to RTE.
<br>
<p>Thanks,
<br>
Leonardo
<br>
<p>Ralph Castain escribi&#243;:
<br>
<span class="quotelev1">&gt; I'm not entirely sure what you are doing here. The orte_job_t, 
</span><br>
<span class="quotelev1">&gt; orte_node_t, and orte_proc_t objects are only used on mpirun - the 
</span><br>
<span class="quotelev1">&gt; arrays built from those objects are only defined on mpirun itself, not 
</span><br>
<span class="quotelev1">&gt; on any orted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you say &quot;orte daemon which acts as HNP&quot;, are you implying that 
</span><br>
<span class="quotelev1">&gt; you have some orted out there that is trying to behave like an HNP? Or 
</span><br>
<span class="quotelev1">&gt; do you really mean mpirun itself?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect the reason you are seeing a difference is that orte-ps only 
</span><br>
<span class="quotelev1">&gt; gets its info from mpirun, and you are somehow storing the modified 
</span><br>
<span class="quotelev1">&gt; data on an orted instead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you modify orted itself to create and store an orte_job_t array? 
</span><br>
<span class="quotelev1">&gt; This would not be a good idea as a significant amount of code in the 
</span><br>
<span class="quotelev1">&gt; system expects that array to only exist  inside of mpirun. You could 
</span><br>
<span class="quotelev1">&gt; run into some really strange behavior in various scenarios.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 1, 2008, at 9:09 AM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a little doubt about how to update the orte_proc structure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have modified the orte_proc structure to include another field 
</span><br>
<span class="quotelev2">&gt;&gt; (orte_name_proc_t type) to describe the node whose store my 
</span><br>
<span class="quotelev2">&gt;&gt; checkpoints and logs:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; struct orte_proc_t {
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; #if OPAL_ENABLE_FT_RADIC == 1
</span><br>
<span class="quotelev2">&gt;&gt;   /* protector node */
</span><br>
<span class="quotelev2">&gt;&gt;   orte_process_name_t protector;
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thus, I have added in orted_comm.c a code which I think that would 
</span><br>
<span class="quotelev2">&gt;&gt; update de job structure:
</span><br>
<span class="quotelev2">&gt;&gt; /* Update the structure */
</span><br>
<span class="quotelev2">&gt;&gt; if (NULL == (jdata = orte_get_job_data_object(sender_jobid))) {
</span><br>
<span class="quotelev2">&gt;&gt;   ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
</span><br>
<span class="quotelev2">&gt;&gt;  goto CLEANUP;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; procs = (orte_proc_t**)jdata-&gt;procs-&gt;addr;
</span><br>
<span class="quotelev2">&gt;&gt; if (NULL == procs[sender_vpid] ) {
</span><br>
<span class="quotelev2">&gt;&gt;   ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
</span><br>
<span class="quotelev2">&gt;&gt;   goto CLEANUP;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; procs[sender_vpid]-&gt;protector.jobid = protector_jobid;
</span><br>
<span class="quotelev2">&gt;&gt; procs[sender_vpid]-&gt;protector.vpid  = protector_vpid;
</span><br>
<span class="quotelev2">&gt;&gt; opal_output(0, &quot;%s is the protector of %s&quot;, 
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_NAME_PRINT(&amp;procs[sender_vpid]-&gt;name), 
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_NAME_PRINT(&amp;procs[sender_vpid]-&gt;protector));
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the log of the orte daemon which acts as HNP I can see correct 
</span><br>
<span class="quotelev2">&gt;&gt; informations which was added to the orte_proc structure, but, when I 
</span><br>
<span class="quotelev2">&gt;&gt; use my modified version of orte-ps I found incorrect information 
</span><br>
<span class="quotelev2">&gt;&gt; ([[INVALID],INVALID]). Bellow is the code I have used in orte-ps:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #if OPAL_ENABLE_FT_RADIC == 1
</span><br>
<span class="quotelev2">&gt;&gt;       protector = orte_util_print_name_args(&amp;vpid-&gt;protector);
</span><br>
<span class="quotelev2">&gt;&gt;       printf(&quot;%*s |&quot;,   len_protector, protector);
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The question is: why the HNP show the correct information, and the 
</span><br>
<span class="quotelev2">&gt;&gt; orte-ps don&#180;t?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Leonardo Fialho
</span><br>
<span class="quotelev2">&gt;&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev2">&gt;&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev2">&gt;&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev2">&gt;&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev2">&gt;&gt; Fax: +34-93-581-2478
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="4728.php">Jeff Squyres: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<li><strong>Previous message:</strong> <a href="4726.php">Leonardo Fialho: "Re: [OMPI devel] Update orte_proc structure"</a>
<li><strong>In reply to:</strong> <a href="4725.php">Ralph Castain: "Re: [OMPI devel] Update orte_proc structure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4726.php">Leonardo Fialho: "Re: [OMPI devel] Update orte_proc structure"</a>
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
