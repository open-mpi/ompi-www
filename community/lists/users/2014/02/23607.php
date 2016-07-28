<?
$subject_val = "Re: [OMPI users] one more finding in openmpi-1.7.5a1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 14 00:56:54 2014" -->
<!-- isoreceived="20140214055654" -->
<!-- sent="Fri, 14 Feb 2014 07:56:52 +0200" -->
<!-- isosent="20140214055652" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] one more finding in openmpi-1.7.5a1" -->
<!-- id="CAAO1KyYpeSKzZ1-a0jvo-jE-yyrpOpCF7eYh3ej_4tMTTqCPDg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF52E73678.EE0C6F02-ON49257C7F.001EB388-49257C7F.001F36D9_at_jcity.maeda.co.jp" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-14 00:56:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23608.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23606.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="23606.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23608.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Reply:</strong> <a href="23608.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for prompt help.
<br>
Could you please resent the patch as attachment which can be applied with
<br>
&quot;patch&quot; command, my mail client messes long lines.
<br>
<p><p>On Fri, Feb 14, 2014 at 7:40 AM, &lt;tmishima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;             } else if (ORTE_MAPPING_BYCORE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_CORE);
</span><br>
<span class="quotelev1">&gt;             } else if (ORTE_MAPPING_BYL1CACHE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L1CACHE);
</span><br>
<span class="quotelev1">&gt;             } else if (ORTE_MAPPING_BYL2CACHE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L2CACHE);
</span><br>
<span class="quotelev1">&gt;             } else if (ORTE_MAPPING_BYL3CACHE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L3CACHE);
</span><br>
<span class="quotelev1">&gt;             } else if (ORTE_MAPPING_BYSOCKET == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SOCKET);
</span><br>
<span class="quotelev1">&gt;             } else if (ORTE_MAPPING_BYNUMA == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NUMA);
</span><br>
<span class="quotelev1">&gt;             } else if (ORTE_MAPPING_BYBOARD == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_BOARD);
</span><br>
<span class="quotelev1">&gt;             } else if (ORTE_MAPPING_BYHWTHREAD == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_HWTHREAD);
</span><br>
<span class="quotelev1">&gt;             } else if (ORTE_MAPPING_PPR == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SLOT);
</span><br>
<span class="quotelev1">&gt;             } else if (ORTE_MAPPING_BYDIST == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SLOT);
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
<span class="quotelev2">&gt; &gt; 07:03:15 [vegas12.mtr.labs.mlnx:01646] [[26922,0],0] ORTE_ERROR_LOG: Not
</span><br>
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
<span class="quotelev2">&gt; &gt; On Fri, Feb 14, 2014 at 6:35 AM,  &lt;tmishima_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sorry, one more shot - byslot was dropped!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     if (NULL == spec) {
</span><br>
<span class="quotelev2">&gt; &gt;         /* check for map-by object directives - we set the
</span><br>
<span class="quotelev2">&gt; &gt;          * ranking to match if one was given
</span><br>
<span class="quotelev2">&gt; &gt;          */
</span><br>
<span class="quotelev2">&gt; &gt;         if (ORTE_MAPPING_GIVEN &amp; ORTE_GET_MAPPING_DIRECTIVE(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;             if (ORTE_MAPPING_BYSLOT == ORTE_GET_MAPPING_POLICY(mapping))
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev2">&gt; &gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SLOT);
</span><br>
<span class="quotelev2">&gt; &gt;             } else if (ORTE_MAPPING_BYNODE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev2">&gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NODE);
</span><br>
<span class="quotelev2">&gt; &gt; #if OPAL_HAVE_HWLOC
</span><br>
<span class="quotelev2">&gt; &gt;             } else if (ORTE_MAPPING_BYCORE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev2">&gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_CORE);
</span><br>
<span class="quotelev2">&gt; &gt;             } else if (ORTE_MAPPING_BYL1CACHE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev2">&gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L1CACHE);
</span><br>
<span class="quotelev2">&gt; &gt;             } else if (ORTE_MAPPING_BYL2CACHE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev2">&gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L2CACHE);
</span><br>
<span class="quotelev2">&gt; &gt;             } else if (ORTE_MAPPING_BYL3CACHE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev2">&gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L3CACHE);
</span><br>
<span class="quotelev2">&gt; &gt;             } else if (ORTE_MAPPING_BYSOCKET == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev2">&gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SOCKET);
</span><br>
<span class="quotelev2">&gt; &gt;             } else if (ORTE_MAPPING_BYNUMA == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev2">&gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NUMA);
</span><br>
<span class="quotelev2">&gt; &gt;             } else if (ORTE_MAPPING_BYBOARD == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev2">&gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_BOARD);
</span><br>
<span class="quotelev2">&gt; &gt;             } else if (ORTE_MAPPING_BYHWTHREAD == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev2">&gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_HWTHREAD);
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
<span class="quotelev3">&gt; &gt; &gt; 747      if (NULL == spec) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 748          /* check for map-by object directives - we set the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 749           * ranking to match if one was given
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 750           */
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 751          if (ORTE_MAPPING_GIVEN &amp; ORTE_GET_MAPPING_DIRECTIVE
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 752              if (ORTE_MAPPING_BYCORE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 753                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_CORE);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 754              } else if (ORTE_MAPPING_BYNODE ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 755                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NODE);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 756              } else if (ORTE_MAPPING_BYL1CACHE ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 757                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev1">&gt; ORTE_RANK_BY_L1CACHE);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 758              } else if (ORTE_MAPPING_BYL2CACHE ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 759                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev1">&gt; ORTE_RANK_BY_L2CACHE);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 760              } else if (ORTE_MAPPING_BYL3CACHE ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 761                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev1">&gt; ORTE_RANK_BY_L3CACHE);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 762              } else if (ORTE_MAPPING_BYSOCKET ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 763                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SOCKET);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 764              } else if (ORTE_MAPPING_BYNUMA ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 765                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NUMA);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 766              } else if (ORTE_MAPPING_BYBOARD ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 767                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_BOARD);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 768              } else if (ORTE_MAPPING_BYHWTHREAD ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 769                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_RANK_BY_HWTHREAD);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 770              } else if (ORTE_MAPPING_PPR == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 771                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SLOT);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 772              }
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
<span class="quotelev4">&gt; &gt; &gt; &gt; [manage.cluster:28057] [[25570,0],0] ORTE_ERROR_LOG: Not implemented
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; file rmaps_ppr.c at line 389
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [manage.cluster:28057] [[25570,0],0] ORTE_ERROR_LOG: Not implemented
</span><br>
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
<span class="quotelev4">&gt; &gt; &gt; &gt; many options. Sadly, they are very rarely used, so bugs like this can
</span><br>
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
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   747      if (NULL == spec) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   748          /* check for map-by object directives - we set the
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   749           * ranking to match if one was given
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   750           */
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   751          if (ORTE_MAPPING_GIVEN &amp;
</span><br>
<span class="quotelev1">&gt; ORTE_GET_MAPPING_DIRECTIVE
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   752              if (ORTE_MAPPING_BYCORE ==
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   753                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_RANK_BY_CORE);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   754              } else if (ORTE_MAPPING_BYNODE ==
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   755                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_RANK_BY_NODE);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   756              } else if (ORTE_MAPPING_BYL1CACHE ==
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   757                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ORTE_RANK_BY_L1CACHE);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   758              } else if (ORTE_MAPPING_BYL2CACHE ==
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   759                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ORTE_RANK_BY_L2CACHE);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   760              } else if (ORTE_MAPPING_BYL3CACHE ==
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   761                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ORTE_RANK_BY_L3CACHE);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   762              } else if (ORTE_MAPPING_BYSOCKET ==
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   763                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ORTE_RANK_BY_SOCKET);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   764              } else if (ORTE_MAPPING_BYNUMA ==
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   765                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_RANK_BY_NUMA);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   766              } else if (ORTE_MAPPING_BYBOARD ==
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   767                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ORTE_RANK_BY_BOARD);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   768              } else if (ORTE_MAPPING_BYHWTHREAD ==
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   769                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ORTE_RANK_BY_HWTHREAD);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;   770              }
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_______________________________________________
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23607/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23608.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23606.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="23606.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23608.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Reply:</strong> <a href="23608.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
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
