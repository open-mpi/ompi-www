<?
$subject_val = "[OMPI devel] Segfault in odls_fork_local_procs() for some values of npersocket";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 03:09:02 2011" -->
<!-- isoreceived="20111108080902" -->
<!-- sent="Tue, 08 Nov 2011 09:01:57 +0100" -->
<!-- isosent="20111108080157" -->
<!-- name="nadia.derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="[OMPI devel] Segfault in odls_fork_local_procs() for some values of npersocket" -->
<!-- id="1320739317.12633.9.camel_at_B014522" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Segfault in odls_fork_local_procs() for some values of npersocket<br>
<strong>From:</strong> nadia.derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 03:01:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9935.php">Ashley Pittman: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Previous message:</strong> <a href="9933.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9936.php">Ralph Castain: "Re: [OMPI devel] Segfault in odls_fork_local_procs() for some values of npersocket"</a>
<li><strong>Reply:</strong> <a href="9936.php">Ralph Castain: "Re: [OMPI devel] Segfault in odls_fork_local_procs() for some values of npersocket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>In v1.5, when mpirun is called with both the &quot;-bind-to-core&quot; and
<br>
&quot;-npersocket&quot; options, and the npersocket value leads to less procs than
<br>
sockets allocated on one node, we get a segfault
<br>
<p>Testing environment:
<br>
openmpi v1.5
<br>
2 nodes with 4 8-cores sockets each
<br>
mpirun -n 10 -bind-to-core -npersocket 2
<br>
<p>I was expecting to get:
<br>
&nbsp;&nbsp;&nbsp;. ranks 0-1 : node 0 - socket 0
<br>
&nbsp;&nbsp;&nbsp;. ranks 2-3 : node 0 - socket 1
<br>
&nbsp;&nbsp;&nbsp;. ranks 4-5 : node 0 - socket 2
<br>
&nbsp;&nbsp;&nbsp;. ranks 6-7 : node 0 - socket 3
<br>
&nbsp;&nbsp;&nbsp;. ranks 8-9 : node 1 - socket 0
<br>
<p>Instead of that, everything worked fine on node 0, and I got a segfault
<br>
on node 1, with a stack that looks like:
<br>
<p>[derbeyn_at_berlin18 ~]$ mpirun --host berlin18,berlin26 -n 10
<br>
-bind-to-core -npersocket 2 sleep 900
<br>
[berlin26:21531] *** Process received signal ***
<br>
[berlin26:21531] Signal: Floating point exception (8)
<br>
[berlin26:21531] Signal code: Integer divide-by-zero (1)
<br>
[berlin26:21531] Failing at address: 0x7fed13731d63
<br>
[berlin26:21531] [ 0] /lib64/libpthread.so.0(+0xf490) [0x7fed15327490]
<br>
[berlin26:21531]
<br>
[ 1] /home_nfs/derbeyn/DISTS/openmpi-v1.5/lib/openmpi/mca_odls_default.so(+0x2d63) [0x7fed13731d63]
<br>
[berlin26:21531]
<br>
[ 2] /home_nfs/derbeyn/DISTS/openmpi-v1.5/lib/libopen-rte.so.3(orte_odls_base_default_launch_local+0xaf3) [0x7fed15e1fe73]
<br>
[berlin26:21531]
<br>
[ 3] /home_nfs/derbeyn/DISTS/openmpi-v1.5/lib/openmpi/mca_odls_default.so(+0x1d10) [0x7fed13730d10]
<br>
[berlin26:21531]
<br>
[ 4] /home_nfs/derbeyn/DISTS/openmpi-v1.5/lib/libopen-rte.so.3(+0x3804d)
<br>
[0x7fed15e1004d]
<br>
[berlin26:21531]
<br>
[ 5] /home_nfs/derbeyn/DISTS/openmpi-v1.5/lib/libopen-rte.so.3(orte_daemon_cmd_processor+0x4aa) [0x7fed15e1209a]
<br>
[berlin26:21531]
<br>
[ 6] /home_nfs/derbeyn/DISTS/openmpi-v1.5/lib/libopen-rte.so.3(+0x74ee8)
<br>
[0x7fed15e4cee8]
<br>
[berlin26:21531]
<br>
[ 7] /home_nfs/derbeyn/DISTS/openmpi-v1.5/lib/libopen-rte.so.3(orte_daemon+0x8d8) [0x7fed15e0f268]
<br>
[berlin26:21531] [ 8] /home_nfs/derbeyn/DISTS/openmpi-v1.5/bin/orted()
<br>
[0x4008c6]
<br>
[berlin26:21531] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)
<br>
[0x7fed14fa7c9d]
<br>
[berlin26:21531] [10] /home_nfs/derbeyn/DISTS/openmpi-v1.5/bin/orted()
<br>
[0x400799]
<br>
[berlin26:21531] *** End of error message ***
<br>
<p>The reason for this issue is that the npersocket value is taken into
<br>
account during the very first phase of mpirun (rmaps/load_balance) to
<br>
claim the slots on each node:
<br>
npersocket() (in rmaps/load_balance/rmaps_lb.c) claims
<br>
&nbsp;&nbsp;&nbsp;. 8 slots on node 0 (4 sockets * 2 persocket)
<br>
&nbsp;&nbsp;&nbsp;. 2 slots on node 1 (10 total ranks - 8 already claimed)
<br>
<p>But when we come to odls_default_fork_local_proc() (in
<br>
odls/default/odls_default_module.c) npersocket is actually recomputed.
<br>
Everything works fine on node 0. But on node 1, we have:
<br>
&nbsp;&nbsp;&nbsp;. jobdat-&gt;policy has both ORTE_BIND_TO_CORE and ORTE_MAPPING_NPERXXX
<br>
&nbsp;&nbsp;&nbsp;. npersocket is recomputed the following way:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;npersocket = jobdat-&gt;num_local_procs/orte_odls_globals.num_sockets
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= 2 / 4 = 0
<br>
&nbsp;&nbsp;&nbsp;. later on, when the starting point is computed:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;logical_cpu = (lrank % npersocket) * jobdat-&gt;cpus_per_rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;we get the divide-by-zero exception.
<br>
<p>The problem comes, in my mind, from the fact we are recomputing the
<br>
npersocket on the local nodes instead of storing it in the jobdat
<br>
structure (as it is done today for the policy, the cpus_per_rank, the
<br>
stride,...).
<br>
Recomputing this value leads either to the segfault I got, or even to
<br>
wrong mappings: if we had had 4 slots claimed on node 1, the result
<br>
would have been 1 rank per socket (since we have 4-sockets nodes)
<br>
instead of 2 ranks on the first 2 sockets.
<br>
<p>The attached patch is a fix proposal implementing my suggestion of
<br>
storing the npersocket into the jobdat.
<br>
<p>This patch applies on v1.5. Waiting for your comments...
<br>
<p>Regards,
<br>
Nadia
<br>
<p><pre>
-- 
Nadia Derbey

</pre>
<p>
<p><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9934/001_dont_recompute_npersocket_on_local_nodes.patch">001_dont_recompute_npersocket_on_local_nodes.patch</a>
</ul>
<!-- attachment="001_dont_recompute_npersocket_on_local_nodes.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9935.php">Ashley Pittman: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Previous message:</strong> <a href="9933.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9936.php">Ralph Castain: "Re: [OMPI devel] Segfault in odls_fork_local_procs() for some values of npersocket"</a>
<li><strong>Reply:</strong> <a href="9936.php">Ralph Castain: "Re: [OMPI devel] Segfault in odls_fork_local_procs() for some values of npersocket"</a>
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
