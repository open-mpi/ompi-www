<?
$subject_val = "Re: [OMPI users] one more finding in openmpi-1.7.5a1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 14 01:16:35 2014" -->
<!-- isoreceived="20140214061635" -->
<!-- sent="Fri, 14 Feb 2014 15:16:13 +0900" -->
<!-- isosent="20140214061613" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] one more finding in openmpi-1.7.5a1" -->
<!-- id="OF6B255AEC.EE815150-ON49257C7F.00222DFD-49257C7F.002280D0_at_jcity.maeda.co.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAO1KyYpeSKzZ1-a0jvo-jE-yyrpOpCF7eYh3ej_4tMTTqCPDg_at_mail.gmail.com" -->
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
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20one%20more%20finding%20in%20openmpi-1.7.5a1"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-02-14 01:16:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23609.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23607.php">Mike Dubman: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="23607.php">Mike Dubman: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23609.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Reply:</strong> <a href="23609.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please try attached patch - from r30723.
<br>
<p>(See attached file: patch.rmaps_base_frame.from_r30723)
<br>
<p>Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; Thanks for prompt help.
</span><br>
<span class="quotelev1">&gt; Could you please resent the patch as attachment which can be applied with
</span><br>
&quot;patch&quot; command, my mail client messes long lines.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 14, 2014 at 7:40 AM,  &lt;tmishima_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks. I'm not familiar with mindist mapper. But obviously
</span><br>
<span class="quotelev1">&gt; checking for ORTE_MAPPING_BYDIST is missing. In addition,
</span><br>
<span class="quotelev1">&gt; ORTE_MAPPING_PPR is missing again by my mistake.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please try this patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if OPAL_HAVE_HWLOC
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; } else if (ORTE_MAPPING_BYCORE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_CORE);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; } else if (ORTE_MAPPING_BYL1CACHE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L1CACHE);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; } else if (ORTE_MAPPING_BYL2CACHE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L2CACHE);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; } else if (ORTE_MAPPING_BYL3CACHE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L3CACHE);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; } else if (ORTE_MAPPING_BYSOCKET == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SOCKET);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; } else if (ORTE_MAPPING_BYNUMA == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NUMA);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; } else if (ORTE_MAPPING_BYBOARD == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_BOARD);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; } else if (ORTE_MAPPING_BYHWTHREAD == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_HWTHREAD);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; } else if (ORTE_MAPPING_PPR == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SLOT);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; } else if (ORTE_MAPPING_BYDIST == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SLOT);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; after this patch we get this in jenkins:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 07:03:15 [vegas12.mtr.labs.mlnx:01646] [[26922,0],0] ORTE_ERROR_LOG:
</span><br>
Not
<br>
<span class="quotelev1">&gt; implemented in file rmaps_mindist_module.c at line 39107:03:15
</span><br>
<span class="quotelev1">&gt; [vegas12.mtr.labs.mlnx:01646] [[26922,0],0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev2">&gt; &gt; implemented in file base/rmaps_base_map_job.c at line 285
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Feb 14, 2014 at 6:35 AM, &#160;&lt;tmishima_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sorry, one more shot - byslot was dropped!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; if (NULL == spec) {
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; /* check for map-by object directives - we set the
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160;* ranking to match if one was given
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160;*/
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; if (ORTE_MAPPING_GIVEN &amp; ORTE_GET_MAPPING_DIRECTIVE(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; if (ORTE_MAPPING_BYSLOT == ORTE_GET_MAPPING_POLICY
</span><br>
(mapping))
<br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SLOT);
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; } else if (ORTE_MAPPING_BYNODE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev2">&gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NODE);
</span><br>
<span class="quotelev2">&gt; &gt; #if OPAL_HAVE_HWLOC
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; } else if (ORTE_MAPPING_BYCORE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev2">&gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_CORE);
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; } else if (ORTE_MAPPING_BYL1CACHE ==
</span><br>
ORTE_GET_MAPPING_POLICY
<br>
<span class="quotelev2">&gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L1CACHE);
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; } else if (ORTE_MAPPING_BYL2CACHE ==
</span><br>
ORTE_GET_MAPPING_POLICY
<br>
<span class="quotelev2">&gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L2CACHE);
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; } else if (ORTE_MAPPING_BYL3CACHE ==
</span><br>
ORTE_GET_MAPPING_POLICY
<br>
<span class="quotelev2">&gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L3CACHE);
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; } else if (ORTE_MAPPING_BYSOCKET == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev2">&gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SOCKET);
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; } else if (ORTE_MAPPING_BYNUMA == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev2">&gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NUMA);
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; } else if (ORTE_MAPPING_BYBOARD == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev2">&gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_BOARD);
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; } else if (ORTE_MAPPING_BYHWTHREAD ==
</span><br>
ORTE_GET_MAPPING_POLICY
<br>
<span class="quotelev2">&gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_HWTHREAD);
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tetusya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I've found it. Please add 2 lines(770, 771) in rmaps_base_frame.c:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 747 &#160; &#160; &#160;if (NULL == spec) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 748 &#160; &#160; &#160; &#160; &#160;/* check for map-by object directives - we set the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 749 &#160; &#160; &#160; &#160; &#160; * ranking to match if one was given
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 750 &#160; &#160; &#160; &#160; &#160; */
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 751 &#160; &#160; &#160; &#160; &#160;if (ORTE_MAPPING_GIVEN &amp; ORTE_GET_MAPPING_DIRECTIVE
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 752 &#160; &#160; &#160; &#160; &#160; &#160; &#160;if (ORTE_MAPPING_BYCORE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 753 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_CORE);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 754 &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else if (ORTE_MAPPING_BYNODE ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 755 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NODE);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 756 &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else if (ORTE_MAPPING_BYL1CACHE ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 757 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev1">&gt; ORTE_RANK_BY_L1CACHE);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 758 &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else if (ORTE_MAPPING_BYL2CACHE ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 759 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev1">&gt; ORTE_RANK_BY_L2CACHE);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 760 &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else if (ORTE_MAPPING_BYL3CACHE ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 761 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev1">&gt; ORTE_RANK_BY_L3CACHE);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 762 &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else if (ORTE_MAPPING_BYSOCKET ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 763 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;ORTE_SET_RANKING_POLICY(tmp,
</span><br>
ORTE_RANK_BY_SOCKET);
<br>
<span class="quotelev3">&gt; &gt; &gt; 764 &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else if (ORTE_MAPPING_BYNUMA ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 765 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NUMA);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 766 &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else if (ORTE_MAPPING_BYBOARD ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 767 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;ORTE_SET_RANKING_POLICY(tmp,
</span><br>
ORTE_RANK_BY_BOARD);
<br>
<span class="quotelev3">&gt; &gt; &gt; 768 &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else if (ORTE_MAPPING_BYHWTHREAD ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 769 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_RANK_BY_HWTHREAD);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 770 &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else if (ORTE_MAPPING_PPR ==
</span><br>
ORTE_GET_MAPPING_POLICY
<br>
<span class="quotelev3">&gt; &gt; &gt; (mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 771 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SLOT);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 772 &#160; &#160; &#160; &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; You are welcome, Ralph.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; But, after fixing it, I'm facing another problem whin I use ppr
</span><br>
<span class="quotelev1">&gt; option:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [mishima_at_manage openmpi-1.7.4]$ mpirun -np 2 -map-by ppr:1:socket
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -bind-to
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; socket -report-bindings ~/mis/openmpi/demos/m
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; yprog
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [manage.cluster:28057] [[25570,0],0] ORTE_ERROR_LOG: Not
</span><br>
implemented
<br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; file rmaps_ppr.c at line 389
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [manage.cluster:28057] [[25570,0],0] ORTE_ERROR_LOG: Not
</span><br>
implemented
<br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; file base/rmaps_base_map_job.c at line 285
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I confirmed it worked when it reverted back.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I'm a little bit confused. Could you take a look?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Thanks - these used to be bitmaps, but changed when we started
</span><br>
<span class="quotelev2">&gt; &gt; getting
</span><br>
<span class="quotelev3">&gt; &gt; &gt; so
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; many options. Sadly, they are very rarely used, so bugs like this
</span><br>
can
<br>
<span class="quotelev2">&gt; &gt; go
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; unnoticed for long times. Appreciate you taking such
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; a close look at them.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Ralph
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; On Feb 13, 2014, at 4:55 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; I would report one more finding in openmpi-1.7.5a1.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Because ORTE_MAPPING_BY...s are not a bit field expression,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; at orte_rmaps_base_set_ranking_policy in rmaps_base_frame.c
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; you should not use &quot;&amp;&quot; to compare them:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 747 &#160; &#160; &#160;if (NULL == spec) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 748 &#160; &#160; &#160; &#160; &#160;/* check for map-by object directives - we set
</span><br>
the
<br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 749 &#160; &#160; &#160; &#160; &#160; * ranking to match if one was given
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 750 &#160; &#160; &#160; &#160; &#160; */
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 751 &#160; &#160; &#160; &#160; &#160;if (ORTE_MAPPING_GIVEN &amp;
</span><br>
<span class="quotelev1">&gt; ORTE_GET_MAPPING_DIRECTIVE
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 752 &#160; &#160; &#160; &#160; &#160; &#160; &#160;if (ORTE_MAPPING_BYCORE ==
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 753 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_RANK_BY_CORE);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 754 &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else if (ORTE_MAPPING_BYNODE ==
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 755 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_RANK_BY_NODE);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 756 &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else if (ORTE_MAPPING_BYL1CACHE ==
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 757 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ORTE_RANK_BY_L1CACHE);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 758 &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else if (ORTE_MAPPING_BYL2CACHE ==
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 759 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ORTE_RANK_BY_L2CACHE);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 760 &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else if (ORTE_MAPPING_BYL3CACHE ==
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 761 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ORTE_RANK_BY_L3CACHE);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 762 &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else if (ORTE_MAPPING_BYSOCKET ==
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 763 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ORTE_RANK_BY_SOCKET);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 764 &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else if (ORTE_MAPPING_BYNUMA ==
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 765 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_RANK_BY_NUMA);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 766 &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else if (ORTE_MAPPING_BYBOARD ==
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 767 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ORTE_RANK_BY_BOARD);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 768 &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else if (ORTE_MAPPING_BYHWTHREAD ==
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 769 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ORTE_RANK_BY_HWTHREAD);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &#160; 770 &#160; &#160; &#160; &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_______________________________________________
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_______________________________________________
<br>
<p><span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>

<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23608/patch.rmaps_base_frame.from_r30723">patch.rmaps_base_frame.from_r30723</a>
</ul>
<!-- attachment="patch.rmaps_base_frame.from_r30723" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23609.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23607.php">Mike Dubman: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="23607.php">Mike Dubman: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23609.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Reply:</strong> <a href="23609.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
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
