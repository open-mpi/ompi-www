<?
$subject_val = "Re: [OMPI users] default num_procs of round_robin_mapper	with	cpus-per-proc option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 00:37:30 2014" -->
<!-- isoreceived="20140123053730" -->
<!-- sent="Thu, 23 Jan 2014 14:37:07 +0900" -->
<!-- isosent="20140123053707" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] default num_procs of round_robin_mapper	with	cpus-per-proc option" -->
<!-- id="OF5FEB6B7C.E114280C-ON49257C69.001D0BC6-49257C69.001EE6FF_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="21AE020D-0938-4E8E-A2C3-5D282BEE930F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] default num_procs of round_robin_mapper	with	cpus-per-proc option<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20default%20num_procs%20of%20round_robin_mapper	with	cpus-per-proc%20option"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-01-23 00:37:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23435.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<li><strong>Previous message:</strong> <a href="23433.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper with	cpus-per-proc option"</a>
<li><strong>In reply to:</strong> <a href="23433.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper with	cpus-per-proc option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23460.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper	with	cpus-per-proc option"</a>
<li><strong>Reply:</strong> <a href="23460.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper	with	cpus-per-proc option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your explanation, Ralph.
<br>
<p>But it's really subtle to understand for me ...
<br>
Anyway, I'd like to report what I found through verbose output.
<br>
<p>&quot;-map-by core&quot; calls &quot;bind in place&quot; as below:
<br>
[mishima_at_manage work]$ mpirun -np 4 -hostfile pbs_hosts -report-bindings
<br>
-cpus-per-proc 4 -map-by core -mca rmaps_base_v
<br>
erbose 10 ~/mis/openmpi/demos/myprog
<br>
...
<br>
[manage.cluster:11362] mca:rmaps: compute bindings for job [8729,1] with
<br>
policy CORE
<br>
[manage.cluster:11362] mca:rmaps: bindings for job [8729,1] - core to core
<br>
[manage.cluster:11362] mca:rmaps: bind in place for job [8729,1] with
<br>
bindings CORE
<br>
...
<br>
<p>On the other hand, &quot;-map-by slot&quot; calls &quot;bind downward&quot; as below:
<br>
[mishima_at_manage work]$ mpirun -np 4 -hostfile pbs_hosts -report-bindings
<br>
-cpus-per-proc 4 -map-by slot -mca rmaps_base_v
<br>
erbose 10 ~/mis/openmpi/demos/myprog
<br>
...
<br>
[manage.cluster:12032] mca:rmaps: compute bindings for job [8571,1] with
<br>
policy CORE
<br>
[manage.cluster:12032] mca:rmaps: bind downward for job [8571,1] with
<br>
bindings CORE
<br>
...
<br>
<p>I think your best guess is right and something is wrong with
<br>
bind_in_place function. I have to say the logic of source code
<br>
is so complex that I could not figure it out.
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; On Jan 22, 2014, at 8:08 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks, Ralph.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have one more question. I'm sorry to ask you many things ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not a problem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Could you tell me the difference between &quot;map-by slot&quot; and &quot;map-by
</span><br>
core&quot;.
<br>
<span class="quotelev2">&gt; &gt; From my understanding, slot is the synonym of core.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not really - see below
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; But those behaviors
</span><br>
<span class="quotelev2">&gt; &gt; using openmpi-1.7.4rc2 with the cpus-per-proc option are quite
</span><br>
different
<br>
<span class="quotelev2">&gt; &gt; as shown below. I tried to browse the source code but I could not make
</span><br>
it
<br>
<span class="quotelev2">&gt; &gt; clear so far.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is a little subtle, I fear. When you tell us &quot;map-by slot&quot;, we assign
</span><br>
each process to an allocated slot without associating it to any specific
<br>
cpu or core. When we then bind to core (as we do by
<br>
<span class="quotelev1">&gt; default), we balance the binding across the sockets to improve
</span><br>
performance.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you tell us &quot;map-by core&quot;, then we directly associate each process
</span><br>
with a specific core. So when we bind, we bind you to that core. This will
<br>
cause us to fully use all the cores on the first
<br>
<span class="quotelev1">&gt; socket before we move to the next.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm a little puzzled by your output as it appears that cpus-per-proc was
</span><br>
ignored, so that's something I'd have to look at more carefully. Best guess
<br>
is that we aren't skipping cores to account for
<br>
<span class="quotelev1">&gt; the cpus-per-core setting, and thus the procs are being mapped to
</span><br>
consecutive cores - which wouldn't be very good if we then bound them to
<br>
multiple neighboring cores as they'd fall on top of each
<br>
<span class="quotelev1">&gt; other.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [ un-managed environment] (node05,06 has 8 cores each)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage work]$ cat pbs_hosts
</span><br>
<span class="quotelev2">&gt; &gt; node05
</span><br>
<span class="quotelev2">&gt; &gt; node05
</span><br>
<span class="quotelev2">&gt; &gt; node05
</span><br>
<span class="quotelev2">&gt; &gt; node05
</span><br>
<span class="quotelev2">&gt; &gt; node05
</span><br>
<span class="quotelev2">&gt; &gt; node05
</span><br>
<span class="quotelev2">&gt; &gt; node05
</span><br>
<span class="quotelev2">&gt; &gt; node05
</span><br>
<span class="quotelev2">&gt; &gt; node06
</span><br>
<span class="quotelev2">&gt; &gt; node06
</span><br>
<span class="quotelev2">&gt; &gt; node06
</span><br>
<span class="quotelev2">&gt; &gt; node06
</span><br>
<span class="quotelev2">&gt; &gt; node06
</span><br>
<span class="quotelev2">&gt; &gt; node06
</span><br>
<span class="quotelev2">&gt; &gt; node06
</span><br>
<span class="quotelev2">&gt; &gt; node06
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage work]$ mpirun -np 4 -hostfile pbs_hosts
</span><br>
-report-bindings
<br>
<span class="quotelev2">&gt; &gt; -cpus-per-proc 4 -map-by slot ~/mis/openmpi/dem
</span><br>
<span class="quotelev2">&gt; &gt; os/myprog
</span><br>
<span class="quotelev2">&gt; &gt; [node05.cluster:23949] MCW rank 1 bound to socket 1[core 4[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 1[core 5[hwt 0]], socket 1[core 6[hwt 0]], so
</span><br>
<span class="quotelev2">&gt; &gt; cket 1[core 7[hwt 0]]: [./././.][B/B/B/B]
</span><br>
<span class="quotelev2">&gt; &gt; [node05.cluster:23949] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev2">&gt; &gt; cket 0[core 3[hwt 0]]: [B/B/B/B][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node06.cluster:22139] MCW rank 3 bound to socket 1[core 4[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 1[core 5[hwt 0]], socket 1[core 6[hwt 0]], so
</span><br>
<span class="quotelev2">&gt; &gt; cket 1[core 7[hwt 0]]: [./././.][B/B/B/B]
</span><br>
<span class="quotelev2">&gt; &gt; [node06.cluster:22139] MCW rank 2 bound to socket 0[core 0[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev2">&gt; &gt; cket 0[core 3[hwt 0]]: [B/B/B/B][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 0 of 4
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 1 of 4
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 3 of 4
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 2 of 4
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage work]$ mpirun -np 4 -hostfile pbs_hosts
</span><br>
-report-bindings
<br>
<span class="quotelev2">&gt; &gt; -cpus-per-proc 4 -map-by core ~/mis/openmpi/dem
</span><br>
<span class="quotelev2">&gt; &gt; os/myprog
</span><br>
<span class="quotelev2">&gt; &gt; [node05.cluster:23985] MCW rank 1 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt; [./B/./.][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node05.cluster:23985] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt; [B/././.][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node06.cluster:22175] MCW rank 3 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt; [./B/./.][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node06.cluster:22175] MCW rank 2 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt; [B/././.][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 2 of 4
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 3 of 4
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 0 of 4
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 1 of 4
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (note) I have the same behavior in the managed environment by Torque
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Seems like a reasonable, minimal risk request - will do
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jan 22, 2014, at 4:28 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi Ralph, I want to ask you one more thing about default setting of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; num_procs
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; when we don't specify the -np option and we set the cpus-per-proc &gt;
</span><br>
1.
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; In this case, the round_robin_mapper sets num_procs = num_slots as
</span><br>
<span class="quotelev2">&gt; &gt; below:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; rmaps_rr.c:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 130        if (0 == app-&gt;num_procs) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 131            /* set the num_procs to equal the number of slots on
</span><br>
<span class="quotelev2">&gt; &gt; these
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mapped nodes */
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 132            app-&gt;num_procs = num_slots;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 133        }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; However, because of cpus_per_rank &gt; 1, this num_procs will be refused
</span><br>
<span class="quotelev2">&gt; &gt; at
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; line 61 in rmaps_rr_mappers.c as below, unless we switch on the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; oversubscribe
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; directive.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; rmaps_rr_mappers.c:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 61    if (num_slots &lt; ((int)app-&gt;num_procs *
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; orte_rmaps_base.cpus_per_rank)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 62        if (ORTE_MAPPING_NO_OVERSUBSCRIBE &amp;
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_GET_MAPPING_DIRECTIVE
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (jdata-&gt;map-&gt;mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 63            orte_show_help(&quot;help-orte-rmaps-base.txt&quot;,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;orte-rmaps-base:alloc-error&quot;,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 64                           true, app-&gt;num_procs, app-&gt;app);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 65            return ORTE_ERR_SILENT;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 66        }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 67    }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Therefore, I think the default num_procs should be equal to the
</span><br>
number
<br>
<span class="quotelev2">&gt; &gt; of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; num_slots divided by cpus/rank:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;          app-&gt;num_procs = num_slots / orte_rmaps_base.cpus_per_rank;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This would be more convinient for most of people who want to use the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -cpus-per-proc option. I already confirmed it worked well. Please
</span><br>
<span class="quotelev2">&gt; &gt; consider
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to apply this fix to 1.7.4.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23435.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<li><strong>Previous message:</strong> <a href="23433.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper with	cpus-per-proc option"</a>
<li><strong>In reply to:</strong> <a href="23433.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper with	cpus-per-proc option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23460.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper	with	cpus-per-proc option"</a>
<li><strong>Reply:</strong> <a href="23460.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper	with	cpus-per-proc option"</a>
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
