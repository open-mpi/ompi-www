<?
$subject_val = "[OMPI users] incorrect verbose output in bind_downwards";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 10 04:16:08 2014" -->
<!-- isoreceived="20140310081608" -->
<!-- sent="Mon, 10 Mar 2014 17:15:25 +0900" -->
<!-- isosent="20140310081525" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] incorrect verbose output in bind_downwards" -->
<!-- id="OF8B4FD01E.2A5CD7CA-ON49257C97.002CAB85-49257C97.002D6A8D_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] incorrect verbose output in bind_downwards<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20incorrect%20verbose%20output%20in%20bind_downwards"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-03-10 04:15:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23787.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Previous message:</strong> <a href="23785.php">Saliya Ekanayake: "[OMPI users] SIGSEV when running OMPI Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23789.php">Ralph Castain: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<li><strong>Reply:</strong> <a href="23789.php">Ralph Castain: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, I would report one more small thing.
<br>
<p>The verbose output in bind_downwards sometimes gives incorrect binding-map
<br>
when I use heterogeneous nodes with different topologies. I confirmed that
<br>
this             patch             fixed            the            problem:
<br>
<p>--- rmaps_base_binding.c        2014-03-06 12:08:17 +0900
<br>
+++ rmaps_base_binding.try.c    2014-03-07 18:27:42 +0900
<br>
@@ -322,6 +322,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_bitmap_list_asprintf(&amp;proc-&gt;cpu_bitmap, totalcpuset);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if            (4            &lt;            opal_output_get_verbosity
<br>
(orte_rmaps_base_framework.framework_output)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char tmp1[1024], tmp2[1024];
<br>
+            opal_hwloc_topology = node-&gt;topology;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if   (OPAL_ERR_NOT_BOUND   ==   opal_hwloc_base_cset2str(tmp1,
<br>
sizeof(tmp1), totalcpuset)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(orte_rmaps_base_framework.framework_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;%s PROC %s ON %s IS NOT BOUND&quot;,
<br>
<p>Tetsuya                                                             Mishima
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23787.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Previous message:</strong> <a href="23785.php">Saliya Ekanayake: "[OMPI users] SIGSEV when running OMPI Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23789.php">Ralph Castain: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<li><strong>Reply:</strong> <a href="23789.php">Ralph Castain: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
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
