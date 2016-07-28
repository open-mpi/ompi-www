<?
$subject_val = "Re: [OMPI devel] Segfault in odls_fork_local_procs() for some values of npersocket";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 06:51:46 2011" -->
<!-- isoreceived="20111108115146" -->
<!-- sent="Tue, 8 Nov 2011 04:51:38 -0700" -->
<!-- isosent="20111108115138" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Segfault in odls_fork_local_procs() for some values of npersocket" -->
<!-- id="5FD733B1-4892-4C07-BB76-B5EC569770E8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1320739317.12633.9.camel_at_B014522" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Segfault in odls_fork_local_procs() for some values of npersocket<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 06:51:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9937.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Previous message:</strong> <a href="9935.php">Ashley Pittman: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>In reply to:</strong> <a href="9934.php">nadia.derbey: "[OMPI devel] Segfault in odls_fork_local_procs() for some values of npersocket"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks fine to me - CMR filed. Thanks!
<br>
<p>On Nov 8, 2011, at 1:01 AM, nadia.derbey wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In v1.5, when mpirun is called with both the &quot;-bind-to-core&quot; and
</span><br>
<span class="quotelev1">&gt; &quot;-npersocket&quot; options, and the npersocket value leads to less procs than
</span><br>
<span class="quotelev1">&gt; sockets allocated on one node, we get a segfault
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Testing environment:
</span><br>
<span class="quotelev1">&gt; openmpi v1.5
</span><br>
<span class="quotelev1">&gt; 2 nodes with 4 8-cores sockets each
</span><br>
<span class="quotelev1">&gt; mpirun -n 10 -bind-to-core -npersocket 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was expecting to get:
</span><br>
<span class="quotelev1">&gt;   . ranks 0-1 : node 0 - socket 0
</span><br>
<span class="quotelev1">&gt;   . ranks 2-3 : node 0 - socket 1
</span><br>
<span class="quotelev1">&gt;   . ranks 4-5 : node 0 - socket 2
</span><br>
<span class="quotelev1">&gt;   . ranks 6-7 : node 0 - socket 3
</span><br>
<span class="quotelev1">&gt;   . ranks 8-9 : node 1 - socket 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Instead of that, everything worked fine on node 0, and I got a segfault
</span><br>
<span class="quotelev1">&gt; on node 1, with a stack that looks like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [derbeyn_at_berlin18 ~]$ mpirun --host berlin18,berlin26 -n 10
</span><br>
<span class="quotelev1">&gt; -bind-to-core -npersocket 2 sleep 900
</span><br>
<span class="quotelev1">&gt; [berlin26:21531] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [berlin26:21531] Signal: Floating point exception (8)
</span><br>
<span class="quotelev1">&gt; [berlin26:21531] Signal code: Integer divide-by-zero (1)
</span><br>
<span class="quotelev1">&gt; [berlin26:21531] Failing at address: 0x7fed13731d63
</span><br>
<span class="quotelev1">&gt; [berlin26:21531] [ 0] /lib64/libpthread.so.0(+0xf490) [0x7fed15327490]
</span><br>
<span class="quotelev1">&gt; [berlin26:21531]
</span><br>
<span class="quotelev1">&gt; [ 1] /home_nfs/derbeyn/DISTS/openmpi-v1.5/lib/openmpi/mca_odls_default.so(+0x2d63) [0x7fed13731d63]
</span><br>
<span class="quotelev1">&gt; [berlin26:21531]
</span><br>
<span class="quotelev1">&gt; [ 2] /home_nfs/derbeyn/DISTS/openmpi-v1.5/lib/libopen-rte.so.3(orte_odls_base_default_launch_local+0xaf3) [0x7fed15e1fe73]
</span><br>
<span class="quotelev1">&gt; [berlin26:21531]
</span><br>
<span class="quotelev1">&gt; [ 3] /home_nfs/derbeyn/DISTS/openmpi-v1.5/lib/openmpi/mca_odls_default.so(+0x1d10) [0x7fed13730d10]
</span><br>
<span class="quotelev1">&gt; [berlin26:21531]
</span><br>
<span class="quotelev1">&gt; [ 4] /home_nfs/derbeyn/DISTS/openmpi-v1.5/lib/libopen-rte.so.3(+0x3804d)
</span><br>
<span class="quotelev1">&gt; [0x7fed15e1004d]
</span><br>
<span class="quotelev1">&gt; [berlin26:21531]
</span><br>
<span class="quotelev1">&gt; [ 5] /home_nfs/derbeyn/DISTS/openmpi-v1.5/lib/libopen-rte.so.3(orte_daemon_cmd_processor+0x4aa) [0x7fed15e1209a]
</span><br>
<span class="quotelev1">&gt; [berlin26:21531]
</span><br>
<span class="quotelev1">&gt; [ 6] /home_nfs/derbeyn/DISTS/openmpi-v1.5/lib/libopen-rte.so.3(+0x74ee8)
</span><br>
<span class="quotelev1">&gt; [0x7fed15e4cee8]
</span><br>
<span class="quotelev1">&gt; [berlin26:21531]
</span><br>
<span class="quotelev1">&gt; [ 7] /home_nfs/derbeyn/DISTS/openmpi-v1.5/lib/libopen-rte.so.3(orte_daemon+0x8d8) [0x7fed15e0f268]
</span><br>
<span class="quotelev1">&gt; [berlin26:21531] [ 8] /home_nfs/derbeyn/DISTS/openmpi-v1.5/bin/orted()
</span><br>
<span class="quotelev1">&gt; [0x4008c6]
</span><br>
<span class="quotelev1">&gt; [berlin26:21531] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)
</span><br>
<span class="quotelev1">&gt; [0x7fed14fa7c9d]
</span><br>
<span class="quotelev1">&gt; [berlin26:21531] [10] /home_nfs/derbeyn/DISTS/openmpi-v1.5/bin/orted()
</span><br>
<span class="quotelev1">&gt; [0x400799]
</span><br>
<span class="quotelev1">&gt; [berlin26:21531] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reason for this issue is that the npersocket value is taken into
</span><br>
<span class="quotelev1">&gt; account during the very first phase of mpirun (rmaps/load_balance) to
</span><br>
<span class="quotelev1">&gt; claim the slots on each node:
</span><br>
<span class="quotelev1">&gt; npersocket() (in rmaps/load_balance/rmaps_lb.c) claims
</span><br>
<span class="quotelev1">&gt;   . 8 slots on node 0 (4 sockets * 2 persocket)
</span><br>
<span class="quotelev1">&gt;   . 2 slots on node 1 (10 total ranks - 8 already claimed)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But when we come to odls_default_fork_local_proc() (in
</span><br>
<span class="quotelev1">&gt; odls/default/odls_default_module.c) npersocket is actually recomputed.
</span><br>
<span class="quotelev1">&gt; Everything works fine on node 0. But on node 1, we have:
</span><br>
<span class="quotelev1">&gt;   . jobdat-&gt;policy has both ORTE_BIND_TO_CORE and ORTE_MAPPING_NPERXXX
</span><br>
<span class="quotelev1">&gt;   . npersocket is recomputed the following way:
</span><br>
<span class="quotelev1">&gt;     npersocket = jobdat-&gt;num_local_procs/orte_odls_globals.num_sockets
</span><br>
<span class="quotelev1">&gt;                = 2 / 4 = 0
</span><br>
<span class="quotelev1">&gt;   . later on, when the starting point is computed:
</span><br>
<span class="quotelev1">&gt;     logical_cpu = (lrank % npersocket) * jobdat-&gt;cpus_per_rank;
</span><br>
<span class="quotelev1">&gt;     we get the divide-by-zero exception.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem comes, in my mind, from the fact we are recomputing the
</span><br>
<span class="quotelev1">&gt; npersocket on the local nodes instead of storing it in the jobdat
</span><br>
<span class="quotelev1">&gt; structure (as it is done today for the policy, the cpus_per_rank, the
</span><br>
<span class="quotelev1">&gt; stride,...).
</span><br>
<span class="quotelev1">&gt; Recomputing this value leads either to the segfault I got, or even to
</span><br>
<span class="quotelev1">&gt; wrong mappings: if we had had 4 slots claimed on node 1, the result
</span><br>
<span class="quotelev1">&gt; would have been 1 rank per socket (since we have 4-sockets nodes)
</span><br>
<span class="quotelev1">&gt; instead of 2 ranks on the first 2 sockets.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached patch is a fix proposal implementing my suggestion of
</span><br>
<span class="quotelev1">&gt; storing the npersocket into the jobdat.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This patch applies on v1.5. Waiting for your comments...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nadia
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Nadia Derbey
</span><br>
<span class="quotelev1">&gt; &lt;001_dont_recompute_npersocket_on_local_nodes.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9937.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Previous message:</strong> <a href="9935.php">Ashley Pittman: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>In reply to:</strong> <a href="9934.php">nadia.derbey: "[OMPI devel] Segfault in odls_fork_local_procs() for some values of npersocket"</a>
<!-- nextthread="start" -->
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
