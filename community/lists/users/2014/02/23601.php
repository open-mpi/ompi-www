<?
$subject_val = "Re: [OMPI users] one more finding in openmpi-1.7.5a1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 13 21:53:59 2014" -->
<!-- isoreceived="20140214025359" -->
<!-- sent="Fri, 14 Feb 2014 11:53:37 +0900" -->
<!-- isosent="20140214025337" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] one more finding in openmpi-1.7.5a1" -->
<!-- id="OFFA8EBB1D.CAA73823-ON49257C7F.000F6F18-49257C7F.000FF46D_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D47D9316-3B2A-4CC9-A0B7-45702065B3CD_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-02-13 21:53:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23602.php">Saliya Ekanayake: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<li><strong>Previous message:</strong> <a href="23600.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="23600.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23603.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Reply:</strong> <a href="23603.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are welcome, Ralph.
<br>
<p>But, after fixing it, I'm facing another problem whin I use ppr option:
<br>
[mishima_at_manage openmpi-1.7.4]$ mpirun -np 2 -map-by ppr:1:socket -bind-to
<br>
socket -report-bindings ~/mis/openmpi/demos/m
<br>
yprog
<br>
[manage.cluster:28057] [[25570,0],0] ORTE_ERROR_LOG: Not implemented in
<br>
file rmaps_ppr.c at line 389
<br>
[manage.cluster:28057] [[25570,0],0] ORTE_ERROR_LOG: Not implemented in
<br>
file base/rmaps_base_map_job.c at line 285
<br>
<p>I confirmed it worked when it reverted back.
<br>
I'm a little bit confused. Could you take a look?
<br>
<p>Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; Thanks - these used to be bitmaps, but changed when we started getting so
</span><br>
many options. Sadly, they are very rarely used, so bugs like this can go
<br>
unnoticed for long times. Appreciate you taking such
<br>
<span class="quotelev1">&gt; a close look at them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 13, 2014, at 4:55 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would report one more finding in openmpi-1.7.5a1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Because ORTE_MAPPING_BY...s are not a bit field expression,
</span><br>
<span class="quotelev2">&gt; &gt; at orte_rmaps_base_set_ranking_policy in rmaps_base_frame.c
</span><br>
<span class="quotelev2">&gt; &gt; you should not use &quot;&amp;&quot; to compare them:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   747      if (NULL == spec) {
</span><br>
<span class="quotelev2">&gt; &gt;   748          /* check for map-by object directives - we set the
</span><br>
<span class="quotelev2">&gt; &gt;   749           * ranking to match if one was given
</span><br>
<span class="quotelev2">&gt; &gt;   750           */
</span><br>
<span class="quotelev2">&gt; &gt;   751          if (ORTE_MAPPING_GIVEN &amp; ORTE_GET_MAPPING_DIRECTIVE
</span><br>
<span class="quotelev2">&gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;   752              if (ORTE_MAPPING_BYCORE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev2">&gt; &gt; (mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;   753                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_CORE);
</span><br>
<span class="quotelev2">&gt; &gt;   754              } else if (ORTE_MAPPING_BYNODE ==
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;   755                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NODE);
</span><br>
<span class="quotelev2">&gt; &gt;   756              } else if (ORTE_MAPPING_BYL1CACHE ==
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;   757                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
ORTE_RANK_BY_L1CACHE);
<br>
<span class="quotelev2">&gt; &gt;   758              } else if (ORTE_MAPPING_BYL2CACHE ==
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;   759                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
ORTE_RANK_BY_L2CACHE);
<br>
<span class="quotelev2">&gt; &gt;   760              } else if (ORTE_MAPPING_BYL3CACHE ==
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;   761                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
ORTE_RANK_BY_L3CACHE);
<br>
<span class="quotelev2">&gt; &gt;   762              } else if (ORTE_MAPPING_BYSOCKET ==
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;   763                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
ORTE_RANK_BY_SOCKET);
<br>
<span class="quotelev2">&gt; &gt;   764              } else if (ORTE_MAPPING_BYNUMA ==
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;   765                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NUMA);
</span><br>
<span class="quotelev2">&gt; &gt;   766              } else if (ORTE_MAPPING_BYBOARD ==
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;   767                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
ORTE_RANK_BY_BOARD);
<br>
<span class="quotelev2">&gt; &gt;   768              } else if (ORTE_MAPPING_BYHWTHREAD ==
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;   769                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_RANK_BY_HWTHREAD);
</span><br>
<span class="quotelev2">&gt; &gt;   770              }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
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
<li><strong>Next message:</strong> <a href="23602.php">Saliya Ekanayake: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<li><strong>Previous message:</strong> <a href="23600.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="23600.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23603.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Reply:</strong> <a href="23603.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
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
