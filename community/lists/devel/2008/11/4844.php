<?
$subject_val = "[OMPI devel] Error after ompi-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 11:42:24 2008" -->
<!-- isoreceived="20081103164224" -->
<!-- sent="Mon, 03 Nov 2008 17:45:16 +0100" -->
<!-- isosent="20081103164516" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="[OMPI devel] Error after ompi-restart" -->
<!-- id="490F2A9C.5050000_at_aomail.uab.es" -->
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
<strong>Subject:</strong> [OMPI devel] Error after ompi-restart<br>
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-03 11:45:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4845.php">Jeff Squyres: "Re: [OMPI devel] Amateur Guidance"</a>
<li><strong>Previous message:</strong> <a href="4843.php">Shipman, Galen M.: "Re: [OMPI devel] Amateur Guidance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4846.php">Leonardo Fialho: "Re: [OMPI devel] Error after ompi-restart"</a>
<li><strong>Reply:</strong> <a href="4846.php">Leonardo Fialho: "Re: [OMPI devel] Error after ompi-restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I think that exists an error in the trunk version while trying to 
<br>
restore a checkpoint.
<br>
<p>The function orte_util_decode_pidmap while attempts to execute the 
<br>
following code
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* store the data */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0; i &lt; num_procs; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmap.node = nodes[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmap.local_rank = local_rank[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmap.node_rank = node_rank[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_value_array_set_item(procs, i, &amp;pmap);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>produces a segmentation fault
<br>
<p>[nodo2:18027] *** Process received signal ***
<br>
[nodo2:18027] Signal: Segmentation fault (11)
<br>
[nodo2:18027] Signal code: Address not mapped (1)
<br>
[nodo2:18027] Failing at address: (nil)
<br>
<p>I was trying to trace the problem and I think that it occurs in the line 
<br>
opal_value_array_set_item(procs, i, &amp;pmap);
<br>
<p>Thanks,
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="4845.php">Jeff Squyres: "Re: [OMPI devel] Amateur Guidance"</a>
<li><strong>Previous message:</strong> <a href="4843.php">Shipman, Galen M.: "Re: [OMPI devel] Amateur Guidance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4846.php">Leonardo Fialho: "Re: [OMPI devel] Error after ompi-restart"</a>
<li><strong>Reply:</strong> <a href="4846.php">Leonardo Fialho: "Re: [OMPI devel] Error after ompi-restart"</a>
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
