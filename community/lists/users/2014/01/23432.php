<?
$subject_val = "Re: [OMPI users] default num_procs of round_robin_mapper with	cpus-per-proc option";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 23:09:21 2014" -->
<!-- isoreceived="20140123040921" -->
<!-- sent="Thu, 23 Jan 2014 13:08:59 +0900" -->
<!-- isosent="20140123040859" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] default num_procs of round_robin_mapper with	cpus-per-proc option" -->
<!-- id="OF3D123EDA.006C3240-ON49257C69.0015D5E1-49257C69.0016D563_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="672BA912-2E40-4EC5-A733-C975427A676E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] default num_procs of round_robin_mapper with	cpus-per-proc option<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20default%20num_procs%20of%20round_robin_mapper%20with	cpus-per-proc%20option"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-01-22 23:08:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23433.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper with	cpus-per-proc option"</a>
<li><strong>Previous message:</strong> <a href="23431.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper with cpus-per-proc option"</a>
<li><strong>In reply to:</strong> <a href="23431.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper with cpus-per-proc option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23433.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper with	cpus-per-proc option"</a>
<li><strong>Reply:</strong> <a href="23433.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper with	cpus-per-proc option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Ralph.
<br>
<p>I have one more question. I'm sorry to ask you many things ...
<br>
<p>Could you tell me the difference between &quot;map-by slot&quot; and &quot;map-by core&quot;.
<br>
<span class="quotelev1">&gt;From my understanding, slot is the synonym of core. But those behaviors
</span><br>
using openmpi-1.7.4rc2 with the cpus-per-proc option are quite different
<br>
as shown below. I tried to browse the source code but I could not make it
<br>
clear so far.
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p>[ un-managed environment] (node05,06 has 8 cores each)
<br>
<p>[mishima_at_manage work]$ cat pbs_hosts
<br>
node05
<br>
node05
<br>
node05
<br>
node05
<br>
node05
<br>
node05
<br>
node05
<br>
node05
<br>
node06
<br>
node06
<br>
node06
<br>
node06
<br>
node06
<br>
node06
<br>
node06
<br>
node06
<br>
[mishima_at_manage work]$ mpirun -np 4 -hostfile pbs_hosts -report-bindings
<br>
-cpus-per-proc 4 -map-by slot ~/mis/openmpi/dem
<br>
os/myprog
<br>
[node05.cluster:23949] MCW rank 1 bound to socket 1[core 4[hwt 0]], socket
<br>
1[core 5[hwt 0]], socket 1[core 6[hwt 0]], so
<br>
cket 1[core 7[hwt 0]]: [./././.][B/B/B/B]
<br>
[node05.cluster:23949] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket
<br>
0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
<br>
cket 0[core 3[hwt 0]]: [B/B/B/B][./././.]
<br>
[node06.cluster:22139] MCW rank 3 bound to socket 1[core 4[hwt 0]], socket
<br>
1[core 5[hwt 0]], socket 1[core 6[hwt 0]], so
<br>
cket 1[core 7[hwt 0]]: [./././.][B/B/B/B]
<br>
[node06.cluster:22139] MCW rank 2 bound to socket 0[core 0[hwt 0]], socket
<br>
0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
<br>
cket 0[core 3[hwt 0]]: [B/B/B/B][./././.]
<br>
Hello world from process 0 of 4
<br>
Hello world from process 1 of 4
<br>
Hello world from process 3 of 4
<br>
Hello world from process 2 of 4
<br>
[mishima_at_manage work]$ mpirun -np 4 -hostfile pbs_hosts -report-bindings
<br>
-cpus-per-proc 4 -map-by core ~/mis/openmpi/dem
<br>
os/myprog
<br>
[node05.cluster:23985] MCW rank 1 bound to socket 0[core 1[hwt 0]]:
<br>
[./B/./.][./././.]
<br>
[node05.cluster:23985] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././.][./././.]
<br>
[node06.cluster:22175] MCW rank 3 bound to socket 0[core 1[hwt 0]]:
<br>
[./B/./.][./././.]
<br>
[node06.cluster:22175] MCW rank 2 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././.][./././.]
<br>
Hello world from process 2 of 4
<br>
Hello world from process 3 of 4
<br>
Hello world from process 0 of 4
<br>
Hello world from process 1 of 4
<br>
<p>(note) I have the same behavior in the managed environment by Torque
<br>
<p><span class="quotelev1">&gt; Seems like a reasonable, minimal risk request - will do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 22, 2014, at 4:28 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph, I want to ask you one more thing about default setting of
</span><br>
<span class="quotelev2">&gt; &gt; num_procs
</span><br>
<span class="quotelev2">&gt; &gt; when we don't specify the -np option and we set the cpus-per-proc &gt; 1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In this case, the round_robin_mapper sets num_procs = num_slots as
</span><br>
below:
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; rmaps_rr.c:
</span><br>
<span class="quotelev2">&gt; &gt; 130        if (0 == app-&gt;num_procs) {
</span><br>
<span class="quotelev2">&gt; &gt; 131            /* set the num_procs to equal the number of slots on
</span><br>
these
<br>
<span class="quotelev2">&gt; &gt; mapped nodes */
</span><br>
<span class="quotelev2">&gt; &gt; 132            app-&gt;num_procs = num_slots;
</span><br>
<span class="quotelev2">&gt; &gt; 133        }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, because of cpus_per_rank &gt; 1, this num_procs will be refused
</span><br>
at
<br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; line 61 in rmaps_rr_mappers.c as below, unless we switch on the
</span><br>
<span class="quotelev2">&gt; &gt; oversubscribe
</span><br>
<span class="quotelev2">&gt; &gt; directive.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; rmaps_rr_mappers.c:
</span><br>
<span class="quotelev2">&gt; &gt; 61    if (num_slots &lt; ((int)app-&gt;num_procs *
</span><br>
<span class="quotelev2">&gt; &gt; orte_rmaps_base.cpus_per_rank)) {
</span><br>
<span class="quotelev2">&gt; &gt; 62        if (ORTE_MAPPING_NO_OVERSUBSCRIBE &amp;
</span><br>
ORTE_GET_MAPPING_DIRECTIVE
<br>
<span class="quotelev2">&gt; &gt; (jdata-&gt;map-&gt;mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt; 63            orte_show_help(&quot;help-orte-rmaps-base.txt&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; &quot;orte-rmaps-base:alloc-error&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; 64                           true, app-&gt;num_procs, app-&gt;app);
</span><br>
<span class="quotelev2">&gt; &gt; 65            return ORTE_ERR_SILENT;
</span><br>
<span class="quotelev2">&gt; &gt; 66        }
</span><br>
<span class="quotelev2">&gt; &gt; 67    }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Therefore, I think the default num_procs should be equal to the number
</span><br>
of
<br>
<span class="quotelev2">&gt; &gt; num_slots divided by cpus/rank:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;           app-&gt;num_procs = num_slots / orte_rmaps_base.cpus_per_rank;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This would be more convinient for most of people who want to use the
</span><br>
<span class="quotelev2">&gt; &gt; -cpus-per-proc option. I already confirmed it worked well. Please
</span><br>
consider
<br>
<span class="quotelev2">&gt; &gt; to apply this fix to 1.7.4.
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
<li><strong>Next message:</strong> <a href="23433.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper with	cpus-per-proc option"</a>
<li><strong>Previous message:</strong> <a href="23431.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper with cpus-per-proc option"</a>
<li><strong>In reply to:</strong> <a href="23431.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper with cpus-per-proc option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23433.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper with	cpus-per-proc option"</a>
<li><strong>Reply:</strong> <a href="23433.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper with	cpus-per-proc option"</a>
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
