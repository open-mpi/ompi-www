<?
$subject_val = "Re: [OMPI users] default num_procs of	round_robin_mapper	with	cpus-per-proc option";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 25 14:21:35 2014" -->
<!-- isoreceived="20140125192135" -->
<!-- sent="Sun, 26 Jan 2014 04:21:10 +0900" -->
<!-- isosent="20140125192110" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] default num_procs of	round_robin_mapper	with	cpus-per-proc option" -->
<!-- id="OF927B19DF.29916D54-ON49257C6B.006813EE-49257C6B.006A5A2E_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="40076304-A33C-4758-BAC6-BDBF6487334F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] default num_procs of	round_robin_mapper	with	cpus-per-proc option<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20default%20num_procs%20of	round_robin_mapper	with	cpus-per-proc%20option"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-01-25 14:21:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23462.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of	round_robin_mapper	with	cpus-per-proc option"</a>
<li><strong>Previous message:</strong> <a href="23460.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper	with	cpus-per-proc option"</a>
<li><strong>In reply to:</strong> <a href="23460.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper	with	cpus-per-proc option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23462.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of	round_robin_mapper	with	cpus-per-proc option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, Thank you for your comment.
<br>
<p>I agree with your conclusion that you leave it as it is.
<br>
<p>As far as I checked, this behavior will also happen when
<br>
I try to bind-to the objects which are smaller than
<br>
ncpus-per-proc, ie, l1cache, l2cache and so on.
<br>
<p>So, if it is easy to know the number of cores included
<br>
in the objects, it's better to compare the size and
<br>
ncpu-per-proc, and generate error &amp; suggestion in such
<br>
a situation.
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; Been tied up the last few days, but I did spend some time thinking about
</span><br>
this some more - and I think I'm going to leave the current behavior as-is,
<br>
adding a check to see if you specify map-by core
<br>
<span class="quotelev1">&gt; along with cpus-per-proc to generate an error in that situation. My
</span><br>
reasoning is that map-by core is a very specific directive - you are
<br>
telling me to map each process to a specific core. If you then
<br>
<span class="quotelev1">&gt; tell me to bind that process to multiple cpus, you are creating an
</span><br>
inherent conflict that I don't readily know how to resolve.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMO, the best solution is to generate an error and suggest you map-by
</span><br>
slot instead. This frees me to bind as many cpus to that allocated slot as
<br>
you care to specify, and removes the conflict.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 22, 2014, at 9:37 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your explanation, Ralph.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But it's really subtle to understand for me ...
</span><br>
<span class="quotelev2">&gt; &gt; Anyway, I'd like to report what I found through verbose output.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;-map-by core&quot; calls &quot;bind in place&quot; as below:
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage work]$ mpirun -np 4 -hostfile pbs_hosts
</span><br>
-report-bindings
<br>
<span class="quotelev2">&gt; &gt; -cpus-per-proc 4 -map-by core -mca rmaps_base_v
</span><br>
<span class="quotelev2">&gt; &gt; erbose 10 ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; [manage.cluster:11362] mca:rmaps: compute bindings for job [8729,1]
</span><br>
with
<br>
<span class="quotelev2">&gt; &gt; policy CORE
</span><br>
<span class="quotelev2">&gt; &gt; [manage.cluster:11362] mca:rmaps: bindings for job [8729,1] - core to
</span><br>
core
<br>
<span class="quotelev2">&gt; &gt; [manage.cluster:11362] mca:rmaps: bind in place for job [8729,1] with
</span><br>
<span class="quotelev2">&gt; &gt; bindings CORE
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On the other hand, &quot;-map-by slot&quot; calls &quot;bind downward&quot; as below:
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage work]$ mpirun -np 4 -hostfile pbs_hosts
</span><br>
-report-bindings
<br>
<span class="quotelev2">&gt; &gt; -cpus-per-proc 4 -map-by slot -mca rmaps_base_v
</span><br>
<span class="quotelev2">&gt; &gt; erbose 10 ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; [manage.cluster:12032] mca:rmaps: compute bindings for job [8571,1]
</span><br>
with
<br>
<span class="quotelev2">&gt; &gt; policy CORE
</span><br>
<span class="quotelev2">&gt; &gt; [manage.cluster:12032] mca:rmaps: bind downward for job [8571,1] with
</span><br>
<span class="quotelev2">&gt; &gt; bindings CORE
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think your best guess is right and something is wrong with
</span><br>
<span class="quotelev2">&gt; &gt; bind_in_place function. I have to say the logic of source code
</span><br>
<span class="quotelev2">&gt; &gt; is so complex that I could not figure it out.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jan 22, 2014, at 8:08 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks, Ralph.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have one more question. I'm sorry to ask you many things ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Not a problem
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Could you tell me the difference between &quot;map-by slot&quot; and &quot;map-by
</span><br>
<span class="quotelev2">&gt; &gt; core&quot;.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; From my understanding, slot is the synonym of core.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Not really - see below
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; But those behaviors
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; using openmpi-1.7.4rc2 with the cpus-per-proc option are quite
</span><br>
<span class="quotelev2">&gt; &gt; different
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; as shown below. I tried to browse the source code but I could not
</span><br>
make
<br>
<span class="quotelev2">&gt; &gt; it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; clear so far.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It is a little subtle, I fear. When you tell us &quot;map-by slot&quot;, we
</span><br>
assign
<br>
<span class="quotelev2">&gt; &gt; each process to an allocated slot without associating it to any
</span><br>
specific
<br>
<span class="quotelev2">&gt; &gt; cpu or core. When we then bind to core (as we do by
</span><br>
<span class="quotelev3">&gt; &gt;&gt; default), we balance the binding across the sockets to improve
</span><br>
<span class="quotelev2">&gt; &gt; performance.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; When you tell us &quot;map-by core&quot;, then we directly associate each
</span><br>
process
<br>
<span class="quotelev2">&gt; &gt; with a specific core. So when we bind, we bind you to that core. This
</span><br>
will
<br>
<span class="quotelev2">&gt; &gt; cause us to fully use all the cores on the first
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socket before we move to the next.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm a little puzzled by your output as it appears that cpus-per-proc
</span><br>
was
<br>
<span class="quotelev2">&gt; &gt; ignored, so that's something I'd have to look at more carefully. Best
</span><br>
guess
<br>
<span class="quotelev2">&gt; &gt; is that we aren't skipping cores to account for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the cpus-per-core setting, and thus the procs are being mapped to
</span><br>
<span class="quotelev2">&gt; &gt; consecutive cores - which wouldn't be very good if we then bound them
</span><br>
to
<br>
<span class="quotelev2">&gt; &gt; multiple neighboring cores as they'd fall on top of each
</span><br>
<span class="quotelev3">&gt; &gt;&gt; other.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [ un-managed environment] (node05,06 has 8 cores each)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [mishima_at_manage work]$ cat pbs_hosts
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [mishima_at_manage work]$ mpirun -np 4 -hostfile pbs_hosts
</span><br>
<span class="quotelev2">&gt; &gt; -report-bindings
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -cpus-per-proc 4 -map-by slot ~/mis/openmpi/dem
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; os/myprog
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node05.cluster:23949] MCW rank 1 bound to socket 1[core 4[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1[core 5[hwt 0]], socket 1[core 6[hwt 0]], so
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; cket 1[core 7[hwt 0]]: [./././.][B/B/B/B]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node05.cluster:23949] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; cket 0[core 3[hwt 0]]: [B/B/B/B][./././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node06.cluster:22139] MCW rank 3 bound to socket 1[core 4[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1[core 5[hwt 0]], socket 1[core 6[hwt 0]], so
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; cket 1[core 7[hwt 0]]: [./././.][B/B/B/B]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node06.cluster:22139] MCW rank 2 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; cket 0[core 3[hwt 0]]: [B/B/B/B][./././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 0 of 4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 1 of 4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 3 of 4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 2 of 4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [mishima_at_manage work]$ mpirun -np 4 -hostfile pbs_hosts
</span><br>
<span class="quotelev2">&gt; &gt; -report-bindings
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -cpus-per-proc 4 -map-by core ~/mis/openmpi/dem
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; os/myprog
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node05.cluster:23985] MCW rank 1 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [./B/./.][./././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node05.cluster:23985] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [B/././.][./././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node06.cluster:22175] MCW rank 3 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [./B/./.][./././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node06.cluster:22175] MCW rank 2 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [B/././.][./././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 2 of 4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 3 of 4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 0 of 4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 1 of 4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (note) I have the same behavior in the managed environment by Torque
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Seems like a reasonable, minimal risk request - will do
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Jan 22, 2014, at 4:28 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hi Ralph, I want to ask you one more thing about default setting of
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; num_procs
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; when we don't specify the -np option and we set the cpus-per-proc &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; In this case, the round_robin_mapper sets num_procs = num_slots as
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; below:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; rmaps_rr.c:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 130        if (0 == app-&gt;num_procs) {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 131            /* set the num_procs to equal the number of slots on
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; these
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mapped nodes */
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 132            app-&gt;num_procs = num_slots;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 133        }
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; However, because of cpus_per_rank &gt; 1, this num_procs will be
</span><br>
refused
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; at
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; line 61 in rmaps_rr_mappers.c as below, unless we switch on the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; oversubscribe
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; directive.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; rmaps_rr_mappers.c:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 61    if (num_slots &lt; ((int)app-&gt;num_procs *
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; orte_rmaps_base.cpus_per_rank)) {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 62        if (ORTE_MAPPING_NO_OVERSUBSCRIBE &amp;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ORTE_GET_MAPPING_DIRECTIVE
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; (jdata-&gt;map-&gt;mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 63            orte_show_help(&quot;help-orte-rmaps-base.txt&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &quot;orte-rmaps-base:alloc-error&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 64                           true, app-&gt;num_procs, app-&gt;app);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 65            return ORTE_ERR_SILENT;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 66        }
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 67    }
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Therefore, I think the default num_procs should be equal to the
</span><br>
<span class="quotelev2">&gt; &gt; number
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; of
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; num_slots divided by cpus/rank:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         app-&gt;num_procs = num_slots / orte_rmaps_base.cpus_per_rank;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; This would be more convinient for most of people who want to use
</span><br>
the
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -cpus-per-proc option. I already confirmed it worked well. Please
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; consider
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; to apply this fix to 1.7.4.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
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
<li><strong>Next message:</strong> <a href="23462.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of	round_robin_mapper	with	cpus-per-proc option"</a>
<li><strong>Previous message:</strong> <a href="23460.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper	with	cpus-per-proc option"</a>
<li><strong>In reply to:</strong> <a href="23460.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper	with	cpus-per-proc option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23462.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of	round_robin_mapper	with	cpus-per-proc option"</a>
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
