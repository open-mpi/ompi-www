<?
$subject_val = "Re: [OMPI devel] Error after ompi-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 10:14:03 2008" -->
<!-- isoreceived="20081104151403" -->
<!-- sent="Tue, 04 Nov 2008 16:16:56 +0100" -->
<!-- isosent="20081104151656" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error after ompi-restart" -->
<!-- id="49106768.6060605_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="490F2A9C.5050000_at_aomail.uab.es" -->
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
<strong>Date:</strong> 2008-11-04 10:16:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4847.php">Josh Hursey: "Re: [OMPI devel] Error after ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="4845.php">Jeff Squyres: "Re: [OMPI devel] Amateur Guidance"</a>
<li><strong>In reply to:</strong> <a href="4844.php">Leonardo Fialho: "[OMPI devel] Error after ompi-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4847.php">Josh Hursey: "Re: [OMPI devel] Error after ompi-restart"</a>
<li><strong>Reply:</strong> <a href="4847.php">Josh Hursey: "Re: [OMPI devel] Error after ompi-restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#180;m not sure, but I think that line 659 on file 
<br>
orte/mca/ess/env/ess_env_module.c should contain
<br>
<p>if (ORTE_SUCCESS != (ret = 
<br>
orte_ess_base_build_nidmap(orte_process_info.sync_buf, &amp;nidmap, *jmap*))) {
<br>
<p>But actually it contains
<br>
<p>if (ORTE_SUCCESS != (ret = 
<br>
orte_ess_base_build_nidmap(orte_process_info.sync_buf, &amp;nidmap, 
<br>
*&amp;jmap-&gt;pmap*))) {
<br>
<p>No?
<br>
<p>Leonardo
<br>
<p><p>Leonardo Fialho escribi&#243;:
<br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that exists an error in the trunk version while trying to 
</span><br>
<span class="quotelev1">&gt; restore a checkpoint.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The function orte_util_decode_pidmap while attempts to execute the 
</span><br>
<span class="quotelev1">&gt; following code
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /* store the data */
</span><br>
<span class="quotelev1">&gt;    for (i=0; i &lt; num_procs; i++) {
</span><br>
<span class="quotelev1">&gt;        pmap.node = nodes[i];
</span><br>
<span class="quotelev1">&gt;        pmap.local_rank = local_rank[i];
</span><br>
<span class="quotelev1">&gt;        pmap.node_rank = node_rank[i];
</span><br>
<span class="quotelev1">&gt;        opal_value_array_set_item(procs, i, &amp;pmap);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; produces a segmentation fault
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [nodo2:18027] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [nodo2:18027] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [nodo2:18027] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [nodo2:18027] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was trying to trace the problem and I think that it occurs in the 
</span><br>
<span class="quotelev1">&gt; line opal_value_array_set_item(procs, i, &amp;pmap);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="4847.php">Josh Hursey: "Re: [OMPI devel] Error after ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="4845.php">Jeff Squyres: "Re: [OMPI devel] Amateur Guidance"</a>
<li><strong>In reply to:</strong> <a href="4844.php">Leonardo Fialho: "[OMPI devel] Error after ompi-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4847.php">Josh Hursey: "Re: [OMPI devel] Error after ompi-restart"</a>
<li><strong>Reply:</strong> <a href="4847.php">Josh Hursey: "Re: [OMPI devel] Error after ompi-restart"</a>
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
