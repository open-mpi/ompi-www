<?
$subject_val = "[OMPI users] default num_procs of round_robin_mapper with cpus-per-proc option";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 19:28:28 2014" -->
<!-- isoreceived="20140123002828" -->
<!-- sent="Thu, 23 Jan 2014 09:28:02 +0900" -->
<!-- isosent="20140123002802" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] default num_procs of round_robin_mapper with cpus-per-proc option" -->
<!-- id="OFC2040090.EBF032E3-ON49257C69.00025958-49257C69.00029AD9_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> [OMPI users] default num_procs of round_robin_mapper with cpus-per-proc option<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20default%20num_procs%20of%20round_robin_mapper%20with%20cpus-per-proc%20option"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-01-22 19:28:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23431.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper with cpus-per-proc option"</a>
<li><strong>Previous message:</strong> <a href="23429.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23431.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper with cpus-per-proc option"</a>
<li><strong>Reply:</strong> <a href="23431.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper with cpus-per-proc option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, I want to ask you one more thing about default setting of
<br>
num_procs
<br>
when we don't specify the -np option and we set the cpus-per-proc &gt; 1.
<br>
<p>In this case, the round_robin_mapper sets num_procs = num_slots as below:
<br>
<p>rmaps_rr.c:
<br>
130        if (0 == app-&gt;num_procs) {
<br>
131            /* set the num_procs to equal the number of slots on these
<br>
mapped nodes */
<br>
132            app-&gt;num_procs = num_slots;
<br>
133        }
<br>
<p>However, because of cpus_per_rank &gt; 1, this num_procs will be refused at
<br>
the
<br>
line 61 in rmaps_rr_mappers.c as below, unless we switch on the
<br>
oversubscribe
<br>
directive.
<br>
<p>rmaps_rr_mappers.c:
<br>
61    if (num_slots &lt; ((int)app-&gt;num_procs *
<br>
orte_rmaps_base.cpus_per_rank)) {
<br>
62        if (ORTE_MAPPING_NO_OVERSUBSCRIBE &amp; ORTE_GET_MAPPING_DIRECTIVE
<br>
(jdata-&gt;map-&gt;mapping)) {
<br>
63            orte_show_help(&quot;help-orte-rmaps-base.txt&quot;,
<br>
&quot;orte-rmaps-base:alloc-error&quot;,
<br>
64                           true, app-&gt;num_procs, app-&gt;app);
<br>
65            return ORTE_ERR_SILENT;
<br>
66        }
<br>
67    }
<br>
<p>Therefore, I think the default num_procs should be equal to the number of
<br>
num_slots divided by cpus/rank:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;app-&gt;num_procs = num_slots / orte_rmaps_base.cpus_per_rank;
<br>
<p>This would be more convinient for most of people who want to use the
<br>
-cpus-per-proc option. I already confirmed it worked well. Please consider
<br>
to apply this fix to 1.7.4.
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23431.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper with cpus-per-proc option"</a>
<li><strong>Previous message:</strong> <a href="23429.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23431.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper with cpus-per-proc option"</a>
<li><strong>Reply:</strong> <a href="23431.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper with cpus-per-proc option"</a>
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
