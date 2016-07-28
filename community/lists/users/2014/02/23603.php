<?
$subject_val = "Re: [OMPI users] one more finding in openmpi-1.7.5a1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 13 23:03:57 2014" -->
<!-- isoreceived="20140214040357" -->
<!-- sent="Fri, 14 Feb 2014 13:03:34 +0900" -->
<!-- isosent="20140214040334" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] one more finding in openmpi-1.7.5a1" -->
<!-- id="OF6FCC2B47.20546C3E-ON49257C7F.001615B1-49257C7F.00165BF1_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFFA8EBB1D.CAA73823-ON49257C7F.000F6F18-49257C7F.000FF46D_at_jcity.maeda.co.jp" -->
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
<strong>Date:</strong> 2014-02-13 23:03:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23604.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23602.php">Saliya Ekanayake: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<li><strong>In reply to:</strong> <a href="23601.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23604.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Reply:</strong> <a href="23604.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've found it. Please add 2 lines(770, 771) in rmaps_base_frame.c:
<br>
<p>&nbsp;&nbsp;&nbsp;747      if (NULL == spec) {
<br>
&nbsp;&nbsp;&nbsp;748          /* check for map-by object directives - we set the
<br>
&nbsp;&nbsp;&nbsp;749           * ranking to match if one was given
<br>
&nbsp;&nbsp;&nbsp;750           */
<br>
&nbsp;&nbsp;&nbsp;751          if (ORTE_MAPPING_GIVEN &amp; ORTE_GET_MAPPING_DIRECTIVE
<br>
(mapping)) {
<br>
&nbsp;&nbsp;&nbsp;752              if (ORTE_MAPPING_BYCORE == ORTE_GET_MAPPING_POLICY
<br>
(mapping)) {
<br>
&nbsp;&nbsp;&nbsp;753                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_CORE);
<br>
&nbsp;&nbsp;&nbsp;754              } else if (ORTE_MAPPING_BYNODE ==
<br>
ORTE_GET_MAPPING_POLICY(mapping)) {
<br>
&nbsp;&nbsp;&nbsp;755                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NODE);
<br>
&nbsp;&nbsp;&nbsp;756              } else if (ORTE_MAPPING_BYL1CACHE ==
<br>
ORTE_GET_MAPPING_POLICY(mapping)) {
<br>
&nbsp;&nbsp;&nbsp;757                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L1CACHE);
<br>
&nbsp;&nbsp;&nbsp;758              } else if (ORTE_MAPPING_BYL2CACHE ==
<br>
ORTE_GET_MAPPING_POLICY(mapping)) {
<br>
&nbsp;&nbsp;&nbsp;759                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L2CACHE);
<br>
&nbsp;&nbsp;&nbsp;760              } else if (ORTE_MAPPING_BYL3CACHE ==
<br>
ORTE_GET_MAPPING_POLICY(mapping)) {
<br>
&nbsp;&nbsp;&nbsp;761                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L3CACHE);
<br>
&nbsp;&nbsp;&nbsp;762              } else if (ORTE_MAPPING_BYSOCKET ==
<br>
ORTE_GET_MAPPING_POLICY(mapping)) {
<br>
&nbsp;&nbsp;&nbsp;763                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SOCKET);
<br>
&nbsp;&nbsp;&nbsp;764              } else if (ORTE_MAPPING_BYNUMA ==
<br>
ORTE_GET_MAPPING_POLICY(mapping)) {
<br>
&nbsp;&nbsp;&nbsp;765                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NUMA);
<br>
&nbsp;&nbsp;&nbsp;766              } else if (ORTE_MAPPING_BYBOARD ==
<br>
ORTE_GET_MAPPING_POLICY(mapping)) {
<br>
&nbsp;&nbsp;&nbsp;767                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_BOARD);
<br>
&nbsp;&nbsp;&nbsp;768              } else if (ORTE_MAPPING_BYHWTHREAD ==
<br>
ORTE_GET_MAPPING_POLICY(mapping)) {
<br>
&nbsp;&nbsp;&nbsp;769                  ORTE_SET_RANKING_POLICY(tmp,
<br>
ORTE_RANK_BY_HWTHREAD);
<br>
&nbsp;&nbsp;&nbsp;770              } else if (ORTE_MAPPING_PPR == ORTE_GET_MAPPING_POLICY
<br>
(mapping)) {
<br>
&nbsp;&nbsp;&nbsp;771                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SLOT);
<br>
&nbsp;&nbsp;&nbsp;772              }
<br>
<p>Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; You are welcome, Ralph.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, after fixing it, I'm facing another problem whin I use ppr option:
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage openmpi-1.7.4]$ mpirun -np 2 -map-by ppr:1:socket
</span><br>
-bind-to
<br>
<span class="quotelev1">&gt; socket -report-bindings ~/mis/openmpi/demos/m
</span><br>
<span class="quotelev1">&gt; yprog
</span><br>
<span class="quotelev1">&gt; [manage.cluster:28057] [[25570,0],0] ORTE_ERROR_LOG: Not implemented in
</span><br>
<span class="quotelev1">&gt; file rmaps_ppr.c at line 389
</span><br>
<span class="quotelev1">&gt; [manage.cluster:28057] [[25570,0],0] ORTE_ERROR_LOG: Not implemented in
</span><br>
<span class="quotelev1">&gt; file base/rmaps_base_map_job.c at line 285
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I confirmed it worked when it reverted back.
</span><br>
<span class="quotelev1">&gt; I'm a little bit confused. Could you take a look?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks - these used to be bitmaps, but changed when we started getting
</span><br>
so
<br>
<span class="quotelev1">&gt; many options. Sadly, they are very rarely used, so bugs like this can go
</span><br>
<span class="quotelev1">&gt; unnoticed for long times. Appreciate you taking such
</span><br>
<span class="quotelev2">&gt; &gt; a close look at them.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 13, 2014, at 4:55 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I would report one more finding in openmpi-1.7.5a1.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Because ORTE_MAPPING_BY...s are not a bit field expression,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; at orte_rmaps_base_set_ranking_policy in rmaps_base_frame.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; you should not use &quot;&amp;&quot; to compare them:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   747      if (NULL == spec) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   748          /* check for map-by object directives - we set the
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   749           * ranking to match if one was given
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   750           */
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   751          if (ORTE_MAPPING_GIVEN &amp; ORTE_GET_MAPPING_DIRECTIVE
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   752              if (ORTE_MAPPING_BYCORE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   753                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
ORTE_RANK_BY_CORE);
<br>
<span class="quotelev3">&gt; &gt; &gt;   754              } else if (ORTE_MAPPING_BYNODE ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   755                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
ORTE_RANK_BY_NODE);
<br>
<span class="quotelev3">&gt; &gt; &gt;   756              } else if (ORTE_MAPPING_BYL1CACHE ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   757                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev1">&gt; ORTE_RANK_BY_L1CACHE);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   758              } else if (ORTE_MAPPING_BYL2CACHE ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   759                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev1">&gt; ORTE_RANK_BY_L2CACHE);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   760              } else if (ORTE_MAPPING_BYL3CACHE ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   761                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev1">&gt; ORTE_RANK_BY_L3CACHE);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   762              } else if (ORTE_MAPPING_BYSOCKET ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   763                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev1">&gt; ORTE_RANK_BY_SOCKET);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   764              } else if (ORTE_MAPPING_BYNUMA ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   765                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
ORTE_RANK_BY_NUMA);
<br>
<span class="quotelev3">&gt; &gt; &gt;   766              } else if (ORTE_MAPPING_BYBOARD ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   767                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev1">&gt; ORTE_RANK_BY_BOARD);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   768              } else if (ORTE_MAPPING_BYHWTHREAD ==
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   769                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_RANK_BY_HWTHREAD);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   770              }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Tetsuya Mishima
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
<li><strong>Next message:</strong> <a href="23604.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23602.php">Saliya Ekanayake: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<li><strong>In reply to:</strong> <a href="23601.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23604.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Reply:</strong> <a href="23604.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
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
