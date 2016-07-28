<?
$subject_val = "Re: [OMPI devel] Error after ompi-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 10:20:29 2008" -->
<!-- isoreceived="20081110152029" -->
<!-- sent="Mon, 10 Nov 2008 10:20:25 -0500" -->
<!-- isosent="20081110152025" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error after ompi-restart" -->
<!-- id="88EFF131-7479-4E4E-884D-3565D22CBFE9_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49107409.5000300_at_aomail.uab.es" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-10 10:20:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4880.php">Nifty niftyompi Mitch: "Re: [OMPI devel] Progress of the asynchronous messages"</a>
<li><strong>Previous message:</strong> <a href="4878.php">Terry Dontje: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<li><strong>In reply to:</strong> <a href="4848.php">Leonardo Fialho: "Re: [OMPI devel] Error after ompi-restart"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the patch. I tested and applied it in r19961 of the Open  
<br>
MPI Trunk. Sorry it took me so long to do so.
<br>
<p>Thanks again,
<br>
Josh
<br>
<p>On Nov 4, 2008, at 11:10 AM, Leonardo Fialho wrote:
<br>
<p><span class="quotelev1">&gt; Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It works fine for me. I think that it is the error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Leonardo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh Hursey escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt; Leonardo,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry I have been really slow in replying, I have been pretty  
</span><br>
<span class="quotelev2">&gt;&gt; swamped lately.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What version of the trunk are you using? I've been seeing C/R  
</span><br>
<span class="quotelev2">&gt;&gt; failures starting around r19872, but I haven't had time to focus on  
</span><br>
<span class="quotelev2">&gt;&gt; trying to find out what is going wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You may be right in your assessment below, I'll try to look into it  
</span><br>
<span class="quotelev2">&gt;&gt; this week. If you find that making this changes fixes your problem,  
</span><br>
<span class="quotelev2">&gt;&gt; let me know and I'll apply the patch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 4, 2008, at 10:16 AM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#180;m not sure, but I think that line 659 on file orte/mca/ess/env/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_env_module.c should contain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_ess_base_build_nidmap(orte_process_info.sync_buf, &amp;nidmap,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *jmap*))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But actually it contains
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_ess_base_build_nidmap(orte_process_info.sync_buf, &amp;nidmap,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *&amp;jmap-&gt;pmap*))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Leonardo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Leonardo Fialho escribi&#243;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think that exists an error in the trunk version while trying to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; restore a checkpoint.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The function orte_util_decode_pidmap while attempts to execute  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the following code
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /* store the data */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  for (i=0; i &lt; num_procs; i++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      pmap.node = nodes[i];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      pmap.local_rank = local_rank[i];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      pmap.node_rank = node_rank[i];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      opal_value_array_set_item(procs, i, &amp;pmap);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; produces a segmentation fault
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [nodo2:18027] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [nodo2:18027] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [nodo2:18027] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [nodo2:18027] Failing at address: (nil)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was trying to trace the problem and I think that it occurs in  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the line opal_value_array_set_item(procs, i, &amp;pmap);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Leonardo Fialho
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fax: +34-93-581-2478
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; -- 
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
<li><strong>Next message:</strong> <a href="4880.php">Nifty niftyompi Mitch: "Re: [OMPI devel] Progress of the asynchronous messages"</a>
<li><strong>Previous message:</strong> <a href="4878.php">Terry Dontje: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<li><strong>In reply to:</strong> <a href="4848.php">Leonardo Fialho: "Re: [OMPI devel] Error after ompi-restart"</a>
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
