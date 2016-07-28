<?
$subject_val = "Re: [OMPI users] one more finding in openmpi-1.7.5a1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 14 05:24:08 2014" -->
<!-- isoreceived="20140214102408" -->
<!-- sent="Fri, 14 Feb 2014 19:23:46 +0900" -->
<!-- isosent="20140214102346" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] one more finding in openmpi-1.7.5a1" -->
<!-- id="OFAF285650.5B9CB8DF-ON49257C7F.0038EA03-49257C7F.00392B36_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3F49BB4C-0DA6-4196-B593-10B98D4D5872_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-02-14 05:23:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23611.php">Reuti: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23609.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="23609.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23611.php">Reuti: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Reply:</strong> <a href="23611.php">Reuti: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You've found it in the dream, interesting!
<br>
<p>Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; Thanks - hit me in the middle of the night over here that we had missed
</span><br>
some options, but nice to find you had also seen it. Slightly modified
<br>
patch will be applied and brought over to 1.7.5
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 13, 2014, at 10:16 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please try attached patch - from r30723.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (See attached file: patch.rmaps_base_frame.from_r30723)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for prompt help.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Could you please resent the patch as attachment which can be applied
</span><br>
with
<br>
<span class="quotelev2">&gt; &gt; &quot;patch&quot; command, my mail client messes long lines.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Fri, Feb 14, 2014 at 7:40 AM,  &lt;tmishima_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks. I'm not familiar with mindist mapper. But obviously
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking for ORTE_MAPPING_BYDIST is missing. In addition,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ORTE_MAPPING_PPR is missing again by my mistake.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Please try this patch.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; if OPAL_HAVE_HWLOC
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             } else if (ORTE_MAPPING_BYCORE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_CORE);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             } else if (ORTE_MAPPING_BYL1CACHE ==
</span><br>
ORTE_GET_MAPPING_POLICY
<br>
<span class="quotelev3">&gt; &gt;&gt; (mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L1CACHE);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             } else if (ORTE_MAPPING_BYL2CACHE ==
</span><br>
ORTE_GET_MAPPING_POLICY
<br>
<span class="quotelev3">&gt; &gt;&gt; (mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L2CACHE);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             } else if (ORTE_MAPPING_BYL3CACHE ==
</span><br>
ORTE_GET_MAPPING_POLICY
<br>
<span class="quotelev3">&gt; &gt;&gt; (mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L3CACHE);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             } else if (ORTE_MAPPING_BYSOCKET ==
</span><br>
ORTE_GET_MAPPING_POLICY
<br>
<span class="quotelev3">&gt; &gt;&gt; (mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SOCKET);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             } else if (ORTE_MAPPING_BYNUMA == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NUMA);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             } else if (ORTE_MAPPING_BYBOARD == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_BOARD);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             } else if (ORTE_MAPPING_BYHWTHREAD ==
</span><br>
ORTE_GET_MAPPING_POLICY
<br>
<span class="quotelev3">&gt; &gt;&gt; (mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_HWTHREAD);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             } else if (ORTE_MAPPING_PPR == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SLOT);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             } else if (ORTE_MAPPING_BYDIST == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SLOT);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; after this patch we get this in jenkins:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 07:03:15 [vegas12.mtr.labs.mlnx:01646] [[26922,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev2">&gt; &gt; Not
</span><br>
<span class="quotelev3">&gt; &gt;&gt; implemented in file rmaps_mindist_module.c at line 39107:03:15
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [vegas12.mtr.labs.mlnx:01646] [[26922,0],0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; implemented in file base/rmaps_base_map_job.c at line 285
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Fri, Feb 14, 2014 at 6:35 AM,  &lt;tmishima_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sorry, one more shot - byslot was dropped!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     if (NULL == spec) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         /* check for map-by object directives - we set the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;          * ranking to match if one was given
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;          */
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         if (ORTE_MAPPING_GIVEN &amp; ORTE_GET_MAPPING_DIRECTIVE(mapping))
</span><br>
{
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;             if (ORTE_MAPPING_BYSLOT == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev2">&gt; &gt; (mapping))
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SLOT);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;             } else if (ORTE_MAPPING_BYNODE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NODE);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #if OPAL_HAVE_HWLOC
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;             } else if (ORTE_MAPPING_BYCORE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_CORE);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;             } else if (ORTE_MAPPING_BYL1CACHE ==
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L1CACHE);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;             } else if (ORTE_MAPPING_BYL2CACHE ==
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L2CACHE);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;             } else if (ORTE_MAPPING_BYL3CACHE ==
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L3CACHE);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;             } else if (ORTE_MAPPING_BYSOCKET ==
</span><br>
ORTE_GET_MAPPING_POLICY
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SOCKET);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;             } else if (ORTE_MAPPING_BYNUMA == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NUMA);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;             } else if (ORTE_MAPPING_BYBOARD ==
</span><br>
ORTE_GET_MAPPING_POLICY
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_BOARD);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;             } else if (ORTE_MAPPING_BYHWTHREAD ==
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                 ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_HWTHREAD);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #endif
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Tetusya Mishima
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I've found it. Please add 2 lines(770, 771) in rmaps_base_frame.c:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 747      if (NULL == spec) {
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 748          /* check for map-by object directives - we set the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 749           * ranking to match if one was given
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 750           */
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 751          if (ORTE_MAPPING_GIVEN &amp; ORTE_GET_MAPPING_DIRECTIVE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 752              if (ORTE_MAPPING_BYCORE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 753                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
ORTE_RANK_BY_CORE);
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 754              } else if (ORTE_MAPPING_BYNODE ==
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 755                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
ORTE_RANK_BY_NODE);
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 756              } else if (ORTE_MAPPING_BYL1CACHE ==
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 757                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ORTE_RANK_BY_L1CACHE);
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 758              } else if (ORTE_MAPPING_BYL2CACHE ==
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 759                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ORTE_RANK_BY_L2CACHE);
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 760              } else if (ORTE_MAPPING_BYL3CACHE ==
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 761                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ORTE_RANK_BY_L3CACHE);
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 762              } else if (ORTE_MAPPING_BYSOCKET ==
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 763                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_RANK_BY_SOCKET);
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 764              } else if (ORTE_MAPPING_BYNUMA ==
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 765                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
ORTE_RANK_BY_NUMA);
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 766              } else if (ORTE_MAPPING_BYBOARD ==
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 767                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_RANK_BY_BOARD);
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 768              } else if (ORTE_MAPPING_BYHWTHREAD ==
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 769                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ORTE_RANK_BY_HWTHREAD);
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 770              } else if (ORTE_MAPPING_PPR ==
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 771                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
ORTE_RANK_BY_SLOT);
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 772              }
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; You are welcome, Ralph.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; But, after fixing it, I'm facing another problem whin I use ppr
</span><br>
<span class="quotelev3">&gt; &gt;&gt; option:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [mishima_at_manage openmpi-1.7.4]$ mpirun -np 2 -map-by ppr:1:socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -bind-to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; socket -report-bindings ~/mis/openmpi/demos/m
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; yprog
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [manage.cluster:28057] [[25570,0],0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev2">&gt; &gt; implemented
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; file rmaps_ppr.c at line 389
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [manage.cluster:28057] [[25570,0],0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev2">&gt; &gt; implemented
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; file base/rmaps_base_map_job.c at line 285
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I confirmed it worked when it reverted back.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I'm a little bit confused. Could you take a look?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Thanks - these used to be bitmaps, but changed when we started
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; getting
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; so
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; many options. Sadly, they are very rarely used, so bugs like this
</span><br>
<span class="quotelev2">&gt; &gt; can
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; go
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; unnoticed for long times. Appreciate you taking such
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; a close look at them.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Feb 13, 2014, at 4:55 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I would report one more finding in openmpi-1.7.5a1.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Because ORTE_MAPPING_BY...s are not a bit field expression,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; at orte_rmaps_base_set_ranking_policy in rmaps_base_frame.c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; you should not use &quot;&amp;&quot; to compare them:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   747      if (NULL == spec) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   748          /* check for map-by object directives - we set
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   749           * ranking to match if one was given
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   750           */
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   751          if (ORTE_MAPPING_GIVEN &amp;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ORTE_GET_MAPPING_DIRECTIVE
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; (mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   752              if (ORTE_MAPPING_BYCORE ==
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; (mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   753                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ORTE_RANK_BY_CORE);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   754              } else if (ORTE_MAPPING_BYNODE ==
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   755                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ORTE_RANK_BY_NODE);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   756              } else if (ORTE_MAPPING_BYL1CACHE ==
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   757                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ORTE_RANK_BY_L1CACHE);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   758              } else if (ORTE_MAPPING_BYL2CACHE ==
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   759                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ORTE_RANK_BY_L2CACHE);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   760              } else if (ORTE_MAPPING_BYL3CACHE ==
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   761                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ORTE_RANK_BY_L3CACHE);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   762              } else if (ORTE_MAPPING_BYSOCKET ==
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   763                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ORTE_RANK_BY_SOCKET);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   764              } else if (ORTE_MAPPING_BYNUMA ==
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   765                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ORTE_RANK_BY_NUMA);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   766              } else if (ORTE_MAPPING_BYBOARD ==
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   767                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ORTE_RANK_BY_BOARD);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   768              } else if (ORTE_MAPPING_BYHWTHREAD ==
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   769                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ORTE_RANK_BY_HWTHREAD);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   770              }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_______________________________________________
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_______________________________________________
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
&lt;patch.rmaps_base_frame.from_r30723&gt;_______________________________________________
<br>
<p><span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23611.php">Reuti: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23609.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="23609.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23611.php">Reuti: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Reply:</strong> <a href="23611.php">Reuti: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
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
