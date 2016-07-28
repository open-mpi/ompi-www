<?
$subject_val = "Re: [OMPI devel] Error after ompi-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 11:07:55 2008" -->
<!-- isoreceived="20081104160755" -->
<!-- sent="Tue, 04 Nov 2008 17:10:49 +0100" -->
<!-- isosent="20081104161049" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error after ompi-restart" -->
<!-- id="49107409.5000300_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C05826A5-2467-4BA3-BBA0-8A97A4E7BD9B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Error after ompi-restart<br>
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-04 11:10:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4849.php">Tim Mattox: "[OMPI devel] Open MPI v1.3b2 has been posted"</a>
<li><strong>Previous message:</strong> <a href="4847.php">Josh Hursey: "Re: [OMPI devel] Error after ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="4847.php">Josh Hursey: "Re: [OMPI devel] Error after ompi-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4879.php">Josh Hursey: "Re: [OMPI devel] Error after ompi-restart"</a>
<li><strong>Reply:</strong> <a href="4879.php">Josh Hursey: "Re: [OMPI devel] Error after ompi-restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh,
<br>
<p>It works fine for me. I think that it is the error.
<br>
<p>Leonardo
<br>
<p>Josh Hursey escribi&#243;:
<br>
<span class="quotelev1">&gt; Leonardo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry I have been really slow in replying, I have been pretty swamped 
</span><br>
<span class="quotelev1">&gt; lately.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What version of the trunk are you using? I've been seeing C/R failures 
</span><br>
<span class="quotelev1">&gt; starting around r19872, but I haven't had time to focus on trying to 
</span><br>
<span class="quotelev1">&gt; find out what is going wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may be right in your assessment below, I'll try to look into it 
</span><br>
<span class="quotelev1">&gt; this week. If you find that making this changes fixes your problem, 
</span><br>
<span class="quotelev1">&gt; let me know and I'll apply the patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 4, 2008, at 10:16 AM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#180;m not sure, but I think that line 659 on file 
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/ess/env/ess_env_module.c should contain
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if (ORTE_SUCCESS != (ret = 
</span><br>
<span class="quotelev2">&gt;&gt; orte_ess_base_build_nidmap(orte_process_info.sync_buf, &amp;nidmap, 
</span><br>
<span class="quotelev2">&gt;&gt; *jmap*))) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But actually it contains
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if (ORTE_SUCCESS != (ret = 
</span><br>
<span class="quotelev2">&gt;&gt; orte_ess_base_build_nidmap(orte_process_info.sync_buf, &amp;nidmap, 
</span><br>
<span class="quotelev2">&gt;&gt; *&amp;jmap-&gt;pmap*))) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Leonardo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Leonardo Fialho escribi&#243;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think that exists an error in the trunk version while trying to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; restore a checkpoint.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The function orte_util_decode_pidmap while attempts to execute the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following code
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /* store the data */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   for (i=0; i &lt; num_procs; i++) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       pmap.node = nodes[i];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       pmap.local_rank = local_rank[i];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       pmap.node_rank = node_rank[i];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       opal_value_array_set_item(procs, i, &amp;pmap);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; produces a segmentation fault
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nodo2:18027] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nodo2:18027] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nodo2:18027] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nodo2:18027] Failing at address: (nil)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was trying to trace the problem and I think that it occurs in the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line opal_value_array_set_item(procs, i, &amp;pmap);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
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
<li><strong>Next message:</strong> <a href="4849.php">Tim Mattox: "[OMPI devel] Open MPI v1.3b2 has been posted"</a>
<li><strong>Previous message:</strong> <a href="4847.php">Josh Hursey: "Re: [OMPI devel] Error after ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="4847.php">Josh Hursey: "Re: [OMPI devel] Error after ompi-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4879.php">Josh Hursey: "Re: [OMPI devel] Error after ompi-restart"</a>
<li><strong>Reply:</strong> <a href="4879.php">Josh Hursey: "Re: [OMPI devel] Error after ompi-restart"</a>
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
