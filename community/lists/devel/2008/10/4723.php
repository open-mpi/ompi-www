<?
$subject_val = "[OMPI devel] Update orte_proc structure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 11:06:25 2008" -->
<!-- isoreceived="20081001150625" -->
<!-- sent="Wed, 01 Oct 2008 17:09:18 +0200" -->
<!-- isosent="20081001150918" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="[OMPI devel] Update orte_proc structure" -->
<!-- id="48E3929E.5060200_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Update orte_proc structure<br>
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-01 11:09:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4724.php">Jon Mason: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<li><strong>Previous message:</strong> <a href="4722.php">Jeff Squyres: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4725.php">Ralph Castain: "Re: [OMPI devel] Update orte_proc structure"</a>
<li><strong>Reply:</strong> <a href="4725.php">Ralph Castain: "Re: [OMPI devel] Update orte_proc structure"</a>
<li><strong>Reply:</strong> <a href="4726.php">Leonardo Fialho: "Re: [OMPI devel] Update orte_proc structure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I have a little doubt about how to update the orte_proc structure.
<br>
<p>I have modified the orte_proc structure to include another field 
<br>
(orte_name_proc_t type) to describe the node whose store my checkpoints 
<br>
and logs:
<br>
<p>struct orte_proc_t {
<br>
...
<br>
#if OPAL_ENABLE_FT_RADIC == 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* protector node */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_process_name_t protector;
<br>
#endif
<br>
};
<br>
<p>Thus, I have added in orted_comm.c a code which I think that would 
<br>
update de job structure:
<br>
/* Update the structure */
<br>
if (NULL == (jdata = orte_get_job_data_object(sender_jobid))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
<br>
&nbsp;&nbsp;&nbsp;goto CLEANUP;
<br>
}
<br>
procs = (orte_proc_t**)jdata-&gt;procs-&gt;addr;
<br>
if (NULL == procs[sender_vpid] ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;goto CLEANUP;
<br>
}
<br>
procs[sender_vpid]-&gt;protector.jobid = protector_jobid;
<br>
procs[sender_vpid]-&gt;protector.vpid  = protector_vpid;
<br>
opal_output(0, &quot;%s is the protector of %s&quot;, 
<br>
ORTE_NAME_PRINT(&amp;procs[sender_vpid]-&gt;name), 
<br>
ORTE_NAME_PRINT(&amp;procs[sender_vpid]-&gt;protector));
<br>
<p>In the log of the orte daemon which acts as HNP I can see correct 
<br>
informations which was added to the orte_proc structure, but, when I use 
<br>
my modified version of orte-ps I found incorrect information 
<br>
([[INVALID],INVALID]). Bellow is the code I have used in orte-ps:
<br>
<p>#if OPAL_ENABLE_FT_RADIC == 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;protector = orte_util_print_name_args(&amp;vpid-&gt;protector);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%*s |&quot;,   len_protector, protector);
<br>
#endif
<br>
<p>The question is: why the HNP show the correct information, and the 
<br>
orte-ps don&#180;t?
<br>
<p>Thanks
<br>
<pre>
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
<li><strong>Next message:</strong> <a href="4724.php">Jon Mason: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<li><strong>Previous message:</strong> <a href="4722.php">Jeff Squyres: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4725.php">Ralph Castain: "Re: [OMPI devel] Update orte_proc structure"</a>
<li><strong>Reply:</strong> <a href="4725.php">Ralph Castain: "Re: [OMPI devel] Update orte_proc structure"</a>
<li><strong>Reply:</strong> <a href="4726.php">Leonardo Fialho: "Re: [OMPI devel] Update orte_proc structure"</a>
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
