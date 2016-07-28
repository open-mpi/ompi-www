<?
$subject_val = "Re: [OMPI users] default num_procs of round_robin_mapper	with	cpus-per-proc option";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 25 11:48:04 2014" -->
<!-- isoreceived="20140125164804" -->
<!-- sent="Sat, 25 Jan 2014 08:47:04 -0800" -->
<!-- isosent="20140125164704" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] default num_procs of round_robin_mapper	with	cpus-per-proc option" -->
<!-- id="40076304-A33C-4758-BAC6-BDBF6487334F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF5FEB6B7C.E114280C-ON49257C69.001D0BC6-49257C69.001EE6FF_at_jcity.maeda.co.jp" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-25 11:47:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23461.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of	round_robin_mapper	with	cpus-per-proc option"</a>
<li><strong>Previous message:</strong> <a href="23459.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="23434.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of round_robin_mapper	with	cpus-per-proc option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23461.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of	round_robin_mapper	with	cpus-per-proc option"</a>
<li><strong>Reply:</strong> <a href="23461.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of	round_robin_mapper	with	cpus-per-proc option"</a>
<li><strong>Reply:</strong> <a href="23462.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of	round_robin_mapper	with	cpus-per-proc option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Been tied up the last few days, but I did spend some time thinking about this some more - and I think I'm going to leave the current behavior as-is, adding a check to see if you specify map-by core along with cpus-per-proc to generate an error in that situation. My reasoning is that map-by core is a very specific directive - you are telling me to map each process to a specific core. If you then tell me to bind that process to multiple cpus, you are creating an inherent conflict that I don't readily know how to resolve.
<br>
<p>IMO, the best solution is to generate an error and suggest you map-by slot instead. This frees me to bind as many cpus to that allocated slot as you care to specify, and removes the conflict.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Jan 22, 2014, at 9:37 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your explanation, Ralph.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But it's really subtle to understand for me ...
</span><br>
<span class="quotelev1">&gt; Anyway, I'd like to report what I found through verbose output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;-map-by core&quot; calls &quot;bind in place&quot; as below:
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage work]$ mpirun -np 4 -hostfile pbs_hosts -report-bindings
</span><br>
<span class="quotelev1">&gt; -cpus-per-proc 4 -map-by core -mca rmaps_base_v
</span><br>
<span class="quotelev1">&gt; erbose 10 ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [manage.cluster:11362] mca:rmaps: compute bindings for job [8729,1] with
</span><br>
<span class="quotelev1">&gt; policy CORE
</span><br>
<span class="quotelev1">&gt; [manage.cluster:11362] mca:rmaps: bindings for job [8729,1] - core to core
</span><br>
<span class="quotelev1">&gt; [manage.cluster:11362] mca:rmaps: bind in place for job [8729,1] with
</span><br>
<span class="quotelev1">&gt; bindings CORE
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the other hand, &quot;-map-by slot&quot; calls &quot;bind downward&quot; as below:
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage work]$ mpirun -np 4 -hostfile pbs_hosts -report-bindings
</span><br>
<span class="quotelev1">&gt; -cpus-per-proc 4 -map-by slot -mca rmaps_base_v
</span><br>
<span class="quotelev1">&gt; erbose 10 ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [manage.cluster:12032] mca:rmaps: compute bindings for job [8571,1] with
</span><br>
<span class="quotelev1">&gt; policy CORE
</span><br>
<span class="quotelev1">&gt; [manage.cluster:12032] mca:rmaps: bind downward for job [8571,1] with
</span><br>
<span class="quotelev1">&gt; bindings CORE
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think your best guess is right and something is wrong with
</span><br>
<span class="quotelev1">&gt; bind_in_place function. I have to say the logic of source code
</span><br>
<span class="quotelev1">&gt; is so complex that I could not figure it out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 22, 2014, at 8:08 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks, Ralph.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have one more question. I'm sorry to ask you many things ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not a problem
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you tell me the difference between &quot;map-by slot&quot; and &quot;map-by
</span><br>
<span class="quotelev1">&gt; core&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From my understanding, slot is the synonym of core.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not really - see below
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But those behaviors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using openmpi-1.7.4rc2 with the cpus-per-proc option are quite
</span><br>
<span class="quotelev1">&gt; different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as shown below. I tried to browse the source code but I could not make
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clear so far.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is a little subtle, I fear. When you tell us &quot;map-by slot&quot;, we assign
</span><br>
<span class="quotelev1">&gt; each process to an allocated slot without associating it to any specific
</span><br>
<span class="quotelev1">&gt; cpu or core. When we then bind to core (as we do by
</span><br>
<span class="quotelev2">&gt;&gt; default), we balance the binding across the sockets to improve
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When you tell us &quot;map-by core&quot;, then we directly associate each process
</span><br>
<span class="quotelev1">&gt; with a specific core. So when we bind, we bind you to that core. This will
</span><br>
<span class="quotelev1">&gt; cause us to fully use all the cores on the first
</span><br>
<span class="quotelev2">&gt;&gt; socket before we move to the next.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm a little puzzled by your output as it appears that cpus-per-proc was
</span><br>
<span class="quotelev1">&gt; ignored, so that's something I'd have to look at more carefully. Best guess
</span><br>
<span class="quotelev1">&gt; is that we aren't skipping cores to account for
</span><br>
<span class="quotelev2">&gt;&gt; the cpus-per-core setting, and thus the procs are being mapped to
</span><br>
<span class="quotelev1">&gt; consecutive cores - which wouldn't be very good if we then bound them to
</span><br>
<span class="quotelev1">&gt; multiple neighboring cores as they'd fall on top of each
</span><br>
<span class="quotelev2">&gt;&gt; other.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ un-managed environment] (node05,06 has 8 cores each)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mishima_at_manage work]$ cat pbs_hosts
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node05
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node05
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node05
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node05
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node05
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node05
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node05
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node05
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node06
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node06
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node06
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node06
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node06
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node06
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node06
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node06
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mishima_at_manage work]$ mpirun -np 4 -hostfile pbs_hosts
</span><br>
<span class="quotelev1">&gt; -report-bindings
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cpus-per-proc 4 -map-by slot ~/mis/openmpi/dem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; os/myprog
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node05.cluster:23949] MCW rank 1 bound to socket 1[core 4[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 5[hwt 0]], socket 1[core 6[hwt 0]], so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cket 1[core 7[hwt 0]]: [./././.][B/B/B/B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node05.cluster:23949] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cket 0[core 3[hwt 0]]: [B/B/B/B][./././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node06.cluster:22139] MCW rank 3 bound to socket 1[core 4[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 5[hwt 0]], socket 1[core 6[hwt 0]], so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cket 1[core 7[hwt 0]]: [./././.][B/B/B/B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node06.cluster:22139] MCW rank 2 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cket 0[core 3[hwt 0]]: [B/B/B/B][./././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 0 of 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 1 of 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 3 of 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 2 of 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mishima_at_manage work]$ mpirun -np 4 -hostfile pbs_hosts
</span><br>
<span class="quotelev1">&gt; -report-bindings
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cpus-per-proc 4 -map-by core ~/mis/openmpi/dem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; os/myprog
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node05.cluster:23985] MCW rank 1 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [./B/./.][./././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node05.cluster:23985] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [B/././.][./././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node06.cluster:22175] MCW rank 3 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [./B/./.][./././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node06.cluster:22175] MCW rank 2 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [B/././.][./././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 2 of 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 3 of 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 0 of 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 1 of 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (note) I have the same behavior in the managed environment by Torque
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Seems like a reasonable, minimal risk request - will do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 22, 2014, at 4:28 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Ralph, I want to ask you one more thing about default setting of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; num_procs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when we don't specify the -np option and we set the cpus-per-proc &gt;
</span><br>
<span class="quotelev1">&gt; 1.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In this case, the round_robin_mapper sets num_procs = num_slots as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; below:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rmaps_rr.c:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 130        if (0 == app-&gt;num_procs) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 131            /* set the num_procs to equal the number of slots on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mapped nodes */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 132            app-&gt;num_procs = num_slots;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 133        }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, because of cpus_per_rank &gt; 1, this num_procs will be refused
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; line 61 in rmaps_rr_mappers.c as below, unless we switch on the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; oversubscribe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; directive.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rmaps_rr_mappers.c:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 61    if (num_slots &lt; ((int)app-&gt;num_procs *
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; orte_rmaps_base.cpus_per_rank)) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 62        if (ORTE_MAPPING_NO_OVERSUBSCRIBE &amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE_GET_MAPPING_DIRECTIVE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (jdata-&gt;map-&gt;mapping)) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 63            orte_show_help(&quot;help-orte-rmaps-base.txt&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;orte-rmaps-base:alloc-error&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 64                           true, app-&gt;num_procs, app-&gt;app);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 65            return ORTE_ERR_SILENT;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 66        }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 67    }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Therefore, I think the default num_procs should be equal to the
</span><br>
<span class="quotelev1">&gt; number
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; num_slots divided by cpus/rank:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         app-&gt;num_procs = num_slots / orte_rmaps_base.cpus_per_rank;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This would be more convinient for most of people who want to use the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -cpus-per-proc option. I already confirmed it worked well. Please
</span><br>
<span class="quotelev3">&gt;&gt;&gt; consider
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to apply this fix to 1.7.4.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23461.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of	round_robin_mapper	with	cpus-per-proc option"</a>
<li><strong>Previous message:</strong> <a href="23459.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="23434.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of round_robin_mapper	with	cpus-per-proc option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23461.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of	round_robin_mapper	with	cpus-per-proc option"</a>
<li><strong>Reply:</strong> <a href="23461.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of	round_robin_mapper	with	cpus-per-proc option"</a>
<li><strong>Reply:</strong> <a href="23462.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of	round_robin_mapper	with	cpus-per-proc option"</a>
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
