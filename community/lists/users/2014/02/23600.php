<?
$subject_val = "Re: [OMPI users] one more finding in openmpi-1.7.5a1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 13 21:35:54 2014" -->
<!-- isoreceived="20140214023554" -->
<!-- sent="Thu, 13 Feb 2014 18:35:37 -0800" -->
<!-- isosent="20140214023537" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] one more finding in openmpi-1.7.5a1" -->
<!-- id="D47D9316-3B2A-4CC9-A0B7-45702065B3CD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF29B1EA48.9F8FAF4C-ON49257C7F.0003E263-49257C7F.0005229D_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] one more finding in openmpi-1.7.5a1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-13 21:35:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23601.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23599.php">tmishima_at_[hidden]: "[OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="23599.php">tmishima_at_[hidden]: "[OMPI users] one more finding in openmpi-1.7.5a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23601.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Reply:</strong> <a href="23601.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks - these used to be bitmaps, but changed when we started getting so many options. Sadly, they are very rarely used, so bugs like this can go unnoticed for long times. Appreciate you taking such a close look at them.
<br>
<p>Ralph
<br>
<p>On Feb 13, 2014, at 4:55 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would report one more finding in openmpi-1.7.5a1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Because ORTE_MAPPING_BY...s are not a bit field expression,
</span><br>
<span class="quotelev1">&gt; at orte_rmaps_base_set_ranking_policy in rmaps_base_frame.c
</span><br>
<span class="quotelev1">&gt; you should not use &quot;&amp;&quot; to compare them:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   747      if (NULL == spec) {
</span><br>
<span class="quotelev1">&gt;   748          /* check for map-by object directives - we set the
</span><br>
<span class="quotelev1">&gt;   749           * ranking to match if one was given
</span><br>
<span class="quotelev1">&gt;   750           */
</span><br>
<span class="quotelev1">&gt;   751          if (ORTE_MAPPING_GIVEN &amp; ORTE_GET_MAPPING_DIRECTIVE
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt;   752              if (ORTE_MAPPING_BYCORE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt;   753                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_CORE);
</span><br>
<span class="quotelev1">&gt;   754              } else if (ORTE_MAPPING_BYNODE ==
</span><br>
<span class="quotelev1">&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt;   755                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NODE);
</span><br>
<span class="quotelev1">&gt;   756              } else if (ORTE_MAPPING_BYL1CACHE ==
</span><br>
<span class="quotelev1">&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt;   757                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L1CACHE);
</span><br>
<span class="quotelev1">&gt;   758              } else if (ORTE_MAPPING_BYL2CACHE ==
</span><br>
<span class="quotelev1">&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt;   759                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L2CACHE);
</span><br>
<span class="quotelev1">&gt;   760              } else if (ORTE_MAPPING_BYL3CACHE ==
</span><br>
<span class="quotelev1">&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt;   761                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L3CACHE);
</span><br>
<span class="quotelev1">&gt;   762              } else if (ORTE_MAPPING_BYSOCKET ==
</span><br>
<span class="quotelev1">&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt;   763                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SOCKET);
</span><br>
<span class="quotelev1">&gt;   764              } else if (ORTE_MAPPING_BYNUMA ==
</span><br>
<span class="quotelev1">&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt;   765                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NUMA);
</span><br>
<span class="quotelev1">&gt;   766              } else if (ORTE_MAPPING_BYBOARD ==
</span><br>
<span class="quotelev1">&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt;   767                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_BOARD);
</span><br>
<span class="quotelev1">&gt;   768              } else if (ORTE_MAPPING_BYHWTHREAD ==
</span><br>
<span class="quotelev1">&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt;   769                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev1">&gt; ORTE_RANK_BY_HWTHREAD);
</span><br>
<span class="quotelev1">&gt;   770              }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23601.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23599.php">tmishima_at_[hidden]: "[OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="23599.php">tmishima_at_[hidden]: "[OMPI users] one more finding in openmpi-1.7.5a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23601.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Reply:</strong> <a href="23601.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
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
