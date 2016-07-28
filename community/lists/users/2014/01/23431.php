<?
$subject_val = "Re: [OMPI users] default num_procs of round_robin_mapper with cpus-per-proc option";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 22:43:06 2014" -->
<!-- isoreceived="20140123034306" -->
<!-- sent="Wed, 22 Jan 2014 19:42:22 -0800" -->
<!-- isosent="20140123034222" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] default num_procs of round_robin_mapper with cpus-per-proc option" -->
<!-- id="672BA912-2E40-4EC5-A733-C975427A676E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFC2040090.EBF032E3-ON49257C69.00025958-49257C69.00029AD9_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] default num_procs of round_robin_mapper with cpus-per-proc option<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 22:42:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23432.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of round_robin_mapper with	cpus-per-proc option"</a>
<li><strong>Previous message:</strong> <a href="23430.php">tmishima_at_[hidden]: "[OMPI users] default num_procs of round_robin_mapper with cpus-per-proc option"</a>
<li><strong>In reply to:</strong> <a href="23430.php">tmishima_at_[hidden]: "[OMPI users] default num_procs of round_robin_mapper with cpus-per-proc option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23432.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of round_robin_mapper with	cpus-per-proc option"</a>
<li><strong>Reply:</strong> <a href="23432.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of round_robin_mapper with	cpus-per-proc option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Seems like a reasonable, minimal risk request - will do
<br>
<p>On Jan 22, 2014, at 4:28 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph, I want to ask you one more thing about default setting of
</span><br>
<span class="quotelev1">&gt; num_procs
</span><br>
<span class="quotelev1">&gt; when we don't specify the -np option and we set the cpus-per-proc &gt; 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this case, the round_robin_mapper sets num_procs = num_slots as below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rmaps_rr.c:
</span><br>
<span class="quotelev1">&gt; 130        if (0 == app-&gt;num_procs) {
</span><br>
<span class="quotelev1">&gt; 131            /* set the num_procs to equal the number of slots on these
</span><br>
<span class="quotelev1">&gt; mapped nodes */
</span><br>
<span class="quotelev1">&gt; 132            app-&gt;num_procs = num_slots;
</span><br>
<span class="quotelev1">&gt; 133        }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, because of cpus_per_rank &gt; 1, this num_procs will be refused at
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; line 61 in rmaps_rr_mappers.c as below, unless we switch on the
</span><br>
<span class="quotelev1">&gt; oversubscribe
</span><br>
<span class="quotelev1">&gt; directive.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rmaps_rr_mappers.c:
</span><br>
<span class="quotelev1">&gt; 61    if (num_slots &lt; ((int)app-&gt;num_procs *
</span><br>
<span class="quotelev1">&gt; orte_rmaps_base.cpus_per_rank)) {
</span><br>
<span class="quotelev1">&gt; 62        if (ORTE_MAPPING_NO_OVERSUBSCRIBE &amp; ORTE_GET_MAPPING_DIRECTIVE
</span><br>
<span class="quotelev1">&gt; (jdata-&gt;map-&gt;mapping)) {
</span><br>
<span class="quotelev1">&gt; 63            orte_show_help(&quot;help-orte-rmaps-base.txt&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;orte-rmaps-base:alloc-error&quot;,
</span><br>
<span class="quotelev1">&gt; 64                           true, app-&gt;num_procs, app-&gt;app);
</span><br>
<span class="quotelev1">&gt; 65            return ORTE_ERR_SILENT;
</span><br>
<span class="quotelev1">&gt; 66        }
</span><br>
<span class="quotelev1">&gt; 67    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Therefore, I think the default num_procs should be equal to the number of
</span><br>
<span class="quotelev1">&gt; num_slots divided by cpus/rank:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           app-&gt;num_procs = num_slots / orte_rmaps_base.cpus_per_rank;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This would be more convinient for most of people who want to use the
</span><br>
<span class="quotelev1">&gt; -cpus-per-proc option. I already confirmed it worked well. Please consider
</span><br>
<span class="quotelev1">&gt; to apply this fix to 1.7.4.
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
<li><strong>Next message:</strong> <a href="23432.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of round_robin_mapper with	cpus-per-proc option"</a>
<li><strong>Previous message:</strong> <a href="23430.php">tmishima_at_[hidden]: "[OMPI users] default num_procs of round_robin_mapper with cpus-per-proc option"</a>
<li><strong>In reply to:</strong> <a href="23430.php">tmishima_at_[hidden]: "[OMPI users] default num_procs of round_robin_mapper with cpus-per-proc option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23432.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of round_robin_mapper with	cpus-per-proc option"</a>
<li><strong>Reply:</strong> <a href="23432.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of round_robin_mapper with	cpus-per-proc option"</a>
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
