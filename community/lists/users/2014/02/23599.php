<?
$subject_val = "[OMPI users] one more finding in openmpi-1.7.5a1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 13 19:55:49 2014" -->
<!-- isoreceived="20140214005549" -->
<!-- sent="Fri, 14 Feb 2014 09:55:26 +0900" -->
<!-- isosent="20140214005526" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] one more finding in openmpi-1.7.5a1" -->
<!-- id="OF29B1EA48.9F8FAF4C-ON49257C7F.0003E263-49257C7F.0005229D_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> [OMPI users] one more finding in openmpi-1.7.5a1<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20one%20more%20finding%20in%20openmpi-1.7.5a1"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-02-13 19:55:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23600.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23598.php">Ralph Castain: "Re: [OMPI users] Questions on MPI I/O and ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23600.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Reply:</strong> <a href="23600.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I would report one more finding in openmpi-1.7.5a1.
<br>
<p>Because ORTE_MAPPING_BY...s are not a bit field expression,
<br>
at orte_rmaps_base_set_ranking_policy in rmaps_base_frame.c
<br>
you should not use &quot;&amp;&quot; to compare them:
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
&nbsp;&nbsp;&nbsp;770              }
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23600.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23598.php">Ralph Castain: "Re: [OMPI users] Questions on MPI I/O and ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23600.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Reply:</strong> <a href="23600.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
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
