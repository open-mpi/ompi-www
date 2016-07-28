<?
$subject_val = "Re: [OMPI users] loading processes per node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 25 15:56:14 2016" -->
<!-- isoreceived="20160325195614" -->
<!-- sent="Fri, 25 Mar 2016 12:56:08 -0700" -->
<!-- isosent="20160325195608" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] loading processes per node" -->
<!-- id="7E63E21E-4647-43D4-AB7C-0A39C65FCDF2_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAEcVHtOZZwgjSDbFSdLNvCs9nxVTnceqWNee6vkAt_7gjKLBJw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] loading processes per node<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-25 15:56:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28855.php">dpchoudh .: "[OMPI users] Error running mpicc"</a>
<li><strong>Previous message:</strong> <a href="28853.php">Ronald Cohen: "Re: [OMPI users] loading processes per node"</a>
<li><strong>In reply to:</strong> <a href="28853.php">Ronald Cohen: "Re: [OMPI users] loading processes per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28848.php">Ronald Cohen: "Re: [OMPI users] loading processes per node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Mar 25, 2016, at 12:53 PM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should
</span><br>
<span class="quotelev1">&gt; -bind-to-core
</span><br>
<span class="quotelev1">&gt; also help?
</span><br>
<p>No - if you specify pe=N, then you will automatically bind to core
<br>
<p><span class="quotelev1">&gt; Does the error I get matter? Should we install libnumactl
</span><br>
<span class="quotelev1">&gt; and libnumactl-devel packages. ? Thanks!
</span><br>
<p>Yes! The warning you are getting is telling you that memory may not be bound local to your process - which really can hurt performance.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ron
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Ron Cohen
</span><br>
<span class="quotelev1">&gt; recohen3_at_[hidden]
</span><br>
<span class="quotelev1">&gt; skypename: ronaldcohen
</span><br>
<span class="quotelev1">&gt; twitter: @recohen3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Mar 25, 2016 at 3:43 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yeah, it can really have an impact! It is unfortunately highly
</span><br>
<span class="quotelev2">&gt;&gt; application-specific, so all we can do is provide the tools.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As you can see from the binding map, we are tight packing the procs on each
</span><br>
<span class="quotelev2">&gt;&gt; node to maximize the use of shared memory. However, this assumes that each
</span><br>
<span class="quotelev2">&gt;&gt; rank is predominantly going to &#226;&#128;&#156;talk&#226;&#128;&#157; to rank+/-1 - i.e., the pattern
</span><br>
<span class="quotelev2">&gt;&gt; involves nearest neighboring ranks. If that isn&#226;&#128;&#153;t true (e.g., the lowest
</span><br>
<span class="quotelev2">&gt;&gt; ranked process on one node talks to the the lowest ranked process on the
</span><br>
<span class="quotelev2">&gt;&gt; next node, etc.), then this would be a bad mapping for performance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In that case, you can use the &#226;&#128;&#156;rank-by&#226;&#128;&#157; option to maintain the location and
</span><br>
<span class="quotelev2">&gt;&gt; binding, but change the assigned MCW ranks to align with your communication
</span><br>
<span class="quotelev2">&gt;&gt; pattern.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 25, 2016, at 12:28 PM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So I have been experimenting with different mappings, and performance
</span><br>
<span class="quotelev2">&gt;&gt; varies a lot. The best I find is:
</span><br>
<span class="quotelev2">&gt;&gt; -map-by slot:pe=2  -np 32
</span><br>
<span class="quotelev2">&gt;&gt; with 2 threads
</span><br>
<span class="quotelev2">&gt;&gt; which gives
</span><br>
<span class="quotelev2">&gt;&gt; [n001.cluster.com:29647] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev2">&gt;&gt; socket 0[core 1[hwt 0]]: [B/B/./././././.][./././././././.]
</span><br>
<span class="quotelev2">&gt;&gt; [n001.cluster.com:29647] MCW rank 1 bound to socket 0[core 2[hwt 0]],
</span><br>
<span class="quotelev2">&gt;&gt; socket 0[core 3[hwt 0]]: [././B/B/./././.][./././././././.]
</span><br>
<span class="quotelev2">&gt;&gt; [n001.cluster.com:29647] MCW rank 2 bound to socket 0[core 4[hwt 0]],
</span><br>
<span class="quotelev2">&gt;&gt; socket 0[core 5[hwt 0]]: [././././B/B/./.][./././././././.]
</span><br>
<span class="quotelev2">&gt;&gt; [n001.cluster.com:29647] MCW rank 3 bound to socket 0[core 6[hwt 0]],
</span><br>
<span class="quotelev2">&gt;&gt; socket 0[core 7[hwt 0]]: [././././././B/B][./././././././.]
</span><br>
<span class="quotelev2">&gt;&gt; [n001.cluster.com:29647] MCW rank 4 bound to socket 1[core 8[hwt 0]],
</span><br>
<span class="quotelev2">&gt;&gt; socket 1[core 9[hwt 0]]: [./././././././.][B/B/./././././.]
</span><br>
<span class="quotelev2">&gt;&gt; [n001.cluster.com:29647] MCW rank 5 bound to socket 1[core 10[hwt 0]],
</span><br>
<span class="quotelev2">&gt;&gt; socket 1[core 11[hwt 0]]: [./././././././.][././B/B/./././.]
</span><br>
<span class="quotelev2">&gt;&gt; [n001.cluster.com:29647] MCW rank 6 bound to socket 1[core 12[hwt 0]],
</span><br>
<span class="quotelev2">&gt;&gt; socket 1[core 13[hwt 0]]: [./././././././.][././././B/B/./.]
</span><br>
<span class="quotelev2">&gt;&gt; [n001.cluster.com:29647] MCW rank 7 bound to socket 1[core 14[hwt 0]],
</span><br>
<span class="quotelev2">&gt;&gt; socket 1[core 15[hwt 0]]: [./././././././.][././././././B/B]
</span><br>
<span class="quotelev2">&gt;&gt; [n003.cluster.com:29842] MCW rank 16 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev2">&gt;&gt; socket 0[core 1[hwt 0]]: [B/B/./././././.][./././././././.]
</span><br>
<span class="quotelev2">&gt;&gt; [n002.cluster.com:32210] MCW ra
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Ron Cohen
</span><br>
<span class="quotelev2">&gt;&gt; recohen3_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; skypename: ronaldcohen
</span><br>
<span class="quotelev2">&gt;&gt; twitter: @recohen3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Mar 25, 2016 at 3:13 PM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So
</span><br>
<span class="quotelev2">&gt;&gt; -map-by node:pe=2  -np 32
</span><br>
<span class="quotelev2">&gt;&gt; runs and gives great performance, though a little worse than -n 32
</span><br>
<span class="quotelev2">&gt;&gt; it puts the correct number of processes, but does do round robin. Is
</span><br>
<span class="quotelev2">&gt;&gt; there a way to do this without the round robin? Also note the error
</span><br>
<span class="quotelev2">&gt;&gt; message:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev2">&gt;&gt;       n001: slots=16 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev2">&gt;&gt;       n004.cluster.com: slots=16 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev2">&gt;&gt;       n003.cluster.com: slots=16 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev2">&gt;&gt;       n002.cluster.com: slots=16 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev2">&gt;&gt; =================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev2">&gt;&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev2">&gt;&gt; support binding memory to the process location.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Node:  n001
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This usually is due to not having the required NUMA support installed
</span><br>
<span class="quotelev2">&gt;&gt; on the node. In some Linux distributions, the required support is
</span><br>
<span class="quotelev2">&gt;&gt; contained in the libnumactl and libnumactl-devel packages.
</span><br>
<span class="quotelev2">&gt;&gt; This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev2">&gt;&gt; be degraded.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [n001.cluster.com:29316] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev2">&gt;&gt; socket 0[core 1[hwt 0]]: [B/B/./././././.][./././././././.]
</span><br>
<span class="quotelev2">&gt;&gt; [n001.cluster.com:29316] MCW rank 4 bound to socket 0[core 2[hwt 0]],
</span><br>
<span class="quotelev2">&gt;&gt; socket 0[core 3[hwt 0]]: [././B/B/./././.][./././././././.]
</span><br>
<span class="quotelev2">&gt;&gt; [n001.cluster.com:29316] MCW rank 8 bound to socket 0[core 4[hwt 0]],
</span><br>
<span class="quotelev2">&gt;&gt; socket 0[core 5[hwt 0]]: [././././B/B/./.][./././././././.]
</span><br>
<span class="quotelev2">&gt;&gt; [n001.cluster.com:29316] MCW rank 12 bound to socket 0[core 6[hwt 0]],
</span><br>
<span class="quotelev2">&gt;&gt; socket 0[core 7[hwt 0]]: [././././././B/B][./././././././.]
</span><br>
<span class="quotelev2">&gt;&gt; [n001.cluster.com:29316] MCW rank 16 bound to socket 1[core 8[hwt 0]],
</span><br>
<span class="quotelev2">&gt;&gt; socket 1[core 9[hwt 0]]: [./././././././.][B/B/./././././.]
</span><br>
<span class="quotelev2">&gt;&gt; [n001.cluster.com:29316] MCW rank 20 bound to socket 1[core 10[hwt
</span><br>
<span class="quotelev2">&gt;&gt; 0]], socket 1[core 11[hwt 0]]: [./././././././.][././B/B/./././.]
</span><br>
<span class="quotelev2">&gt;&gt; [n001.cluster.com:29316] MCW rank 24 bound to socket 1[core 12[hwt
</span><br>
<span class="quotelev2">&gt;&gt; 0]], socket 1[core 13[hwt 0]]: [./././././././.][././././B/B/./.]
</span><br>
<span class="quotelev2">&gt;&gt; [n001.cluster.com:29316] MCW rank 28 bound to socket 1[core 14[hwt
</span><br>
<span class="quotelev2">&gt;&gt; 0]], socket 1[core 15[hwt 0]]: [./././././././.][././././././B/B]
</span><br>
<span class="quotelev2">&gt;&gt; [n003.cluster.com:29704] MCW rank 22 bound to socket 1[core 10[hwt
</span><br>
<span class="quotelev2">&gt;&gt; 0]], socket 1[core 11[hwt 0]]: [./././././././.][././B/B/./././.]
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Ron Cohen
</span><br>
<span class="quotelev2">&gt;&gt; recohen3_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; skypename: ronaldcohen
</span><br>
<span class="quotelev2">&gt;&gt; twitter: @recohen3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Mar 25, 2016 at 2:32 PM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So it seems my
</span><br>
<span class="quotelev2">&gt;&gt; -map-by core:pe=2 -n 32
</span><br>
<span class="quotelev2">&gt;&gt; should have worked . I would have 32 procs with 2 on each, giving 64 total.
</span><br>
<span class="quotelev2">&gt;&gt; But it doesn't
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Ron Cohen
</span><br>
<span class="quotelev2">&gt;&gt; recohen3_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; skypename: ronaldcohen
</span><br>
<span class="quotelev2">&gt;&gt; twitter: @recohen3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Mar 25, 2016 at 2:19 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; pe=N tells us to map N cores (we call them &#226;&#128;&#156;processing elements&#226;&#128;&#157; because
</span><br>
<span class="quotelev2">&gt;&gt; they could be HTs if you &#226;&#128;&#148;use-hwthreads-as-cpus) to each process. So we will
</span><br>
<span class="quotelev2">&gt;&gt; bind each process to N cores.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So if you want 16 procs, each with two processing elements assigned to them
</span><br>
<span class="quotelev2">&gt;&gt; (which is a good choice if you are using 2 threads/process), then you would
</span><br>
<span class="quotelev2">&gt;&gt; use:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -map-by core:pe=2 -np 16
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you add -report-bindings, you&#226;&#128;&#153;ll see each process bound to two cores,
</span><br>
<span class="quotelev2">&gt;&gt; with the procs tightly packed on each node until that node&#226;&#128;&#153;s cores are fully
</span><br>
<span class="quotelev2">&gt;&gt; utilized. We do handle the unlikely event that you asked for a non-integer
</span><br>
<span class="quotelev2">&gt;&gt; multiple of cores - i.e., if you have 32 cores on a node, and you ask for
</span><br>
<span class="quotelev2">&gt;&gt; pe=6, we will wind up leaving two cores idle.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 25, 2016, at 11:11 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; or is it mpirun -map-by core:pe=8 -n 16 ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Ron Cohen
</span><br>
<span class="quotelev2">&gt;&gt; recohen3_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; skypename: ronaldcohen
</span><br>
<span class="quotelev2">&gt;&gt; twitter: @recohen3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Mar 25, 2016 at 2:10 PM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you--I looked on the man page and it is not clear to me what
</span><br>
<span class="quotelev2">&gt;&gt; pe=2 does. Is that the number of threads? So if I want 16 mpi procs
</span><br>
<span class="quotelev2">&gt;&gt; with 2 threads is it for 32 cores (two nodes)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -map-by core:pe=2 -n 16
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry if I mangled this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ron
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Ron Cohen
</span><br>
<span class="quotelev2">&gt;&gt; recohen3_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; skypename: ronaldcohen
</span><br>
<span class="quotelev2">&gt;&gt; twitter: @recohen3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Mar 25, 2016 at 2:03 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Okay, what I would suggest is that you use the following cmd line:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -map-by core:pe=2 (or 8 or whatever number you want)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This should give you the best performance as it will tight-pack the procs
</span><br>
<span class="quotelev2">&gt;&gt; and assign them to the correct number of cores. See if that helps
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 25, 2016, at 10:38 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1.10.2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ron
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Ron Cohen
</span><br>
<span class="quotelev2">&gt;&gt; recohen3_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; skypename: ronaldcohen
</span><br>
<span class="quotelev2">&gt;&gt; twitter: @recohen3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Mar 25, 2016 at 1:30 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm&#226;&#128;&#166;what version of OMPI are you using?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 25, 2016, at 10:27 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --report-bindings didn't report anything
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Ron Cohen
</span><br>
<span class="quotelev2">&gt;&gt; recohen3_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; skypename: ronaldcohen
</span><br>
<span class="quotelev2">&gt;&gt; twitter: @recohen3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Mar 25, 2016 at 1:24 PM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#148;display-allocation an
</span><br>
<span class="quotelev2">&gt;&gt; didn't seem to give useful information:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev2">&gt;&gt;    n005: slots=16 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev2">&gt;&gt;    n008.cluster.com: slots=16 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev2">&gt;&gt;    n007.cluster.com: slots=16 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev2">&gt;&gt;    n006.cluster.com: slots=16 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev2">&gt;&gt; =================================================================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; for
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -display-allocation  --map-by ppr:8:node -n 32
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ron
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Ron Cohen
</span><br>
<span class="quotelev2">&gt;&gt; recohen3_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; skypename: ronaldcohen
</span><br>
<span class="quotelev2">&gt;&gt; twitter: @recohen3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Mar 25, 2016 at 1:17 PM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Actually there was the same number of procs per node in each case. I
</span><br>
<span class="quotelev2">&gt;&gt; verified this by logging into the nodes while they were running--in
</span><br>
<span class="quotelev2">&gt;&gt; both cases 4 per node .
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ron
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Ron Cohen
</span><br>
<span class="quotelev2">&gt;&gt; recohen3_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; skypename: ronaldcohen
</span><br>
<span class="quotelev2">&gt;&gt; twitter: @recohen3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Mar 25, 2016 at 1:14 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 25, 2016, at 9:59 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is very strange but my program runs slower with any of these
</span><br>
<span class="quotelev2">&gt;&gt; choices than if IO simply use:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun  -n 16
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -l
</span><br>
<span class="quotelev2">&gt;&gt; nodes=n013.cluster.com:ppn=4+n014.cluster.com:ppn=4+n015.cluster.com:ppn=4+n016.cluster.com:ppn=4
</span><br>
<span class="quotelev2">&gt;&gt; for example.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This command will tightly pack as many procs as possible on a node - note
</span><br>
<span class="quotelev2">&gt;&gt; that we may well not see the PBS directives regarding number of ppn. Add
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#148;display-allocation and let&#226;&#128;&#153;s see how many slots we think were assigned on
</span><br>
<span class="quotelev2">&gt;&gt; each node
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The timing for the latter is 165 seconds, and for
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -l nodes=4:ppn=16,pmem=1gb
</span><br>
<span class="quotelev2">&gt;&gt; mpirun  --map-by ppr:4:node -n 16
</span><br>
<span class="quotelev2">&gt;&gt; it is 368 seconds.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It will typically be faster if you pack more procs/node as they can use
</span><br>
<span class="quotelev2">&gt;&gt; shared memory for communication.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ron
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Ron Cohen
</span><br>
<span class="quotelev2">&gt;&gt; recohen3_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; skypename: ronaldcohen
</span><br>
<span class="quotelev2">&gt;&gt; twitter: @recohen3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Mar 25, 2016 at 12:43 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 25, 2016, at 9:40 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you! I will try it!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What would
</span><br>
<span class="quotelev2">&gt;&gt; -cpus-per-proc  4 -n 16
</span><br>
<span class="quotelev2">&gt;&gt; do?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This would bind each process to 4 cores, filling each node with procs until
</span><br>
<span class="quotelev2">&gt;&gt; the cores on that node were exhausted, to a total of 16 processes within the
</span><br>
<span class="quotelev2">&gt;&gt; allocation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ron
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Ron Cohen
</span><br>
<span class="quotelev2">&gt;&gt; recohen3_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; skypename: ronaldcohen
</span><br>
<span class="quotelev2">&gt;&gt; twitter: @recohen3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Mar 25, 2016 at 12:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Add -rank-by node to your cmd line. You&#226;&#128;&#153;ll still get 4 procs/node, but they
</span><br>
<span class="quotelev2">&gt;&gt; will be ranked by node instead of consecutively within a node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 25, 2016, at 9:30 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am using
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun  --map-by ppr:4:node -n 16
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and this loads the processes in round robin fashion. This seems to be
</span><br>
<span class="quotelev2">&gt;&gt; twice as slow for my code as loading them node by node, 4 processes
</span><br>
<span class="quotelev2">&gt;&gt; per node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How can I not load them round robin, but node by node?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ron
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Ron Cohen
</span><br>
<span class="quotelev2">&gt;&gt; recohen3_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; skypename: ronaldcohen
</span><br>
<span class="quotelev2">&gt;&gt; twitter: @recohen3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Ronald Cohen
</span><br>
<span class="quotelev2">&gt;&gt; Geophysical Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; Carnegie Institution
</span><br>
<span class="quotelev2">&gt;&gt; 5251 Broad Branch Rd., N.W.
</span><br>
<span class="quotelev2">&gt;&gt; Washington, D.C. 20015
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28828.php">http://www.open-mpi.org/community/lists/users/2016/03/28828.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28829.php">http://www.open-mpi.org/community/lists/users/2016/03/28829.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28830.php">http://www.open-mpi.org/community/lists/users/2016/03/28830.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28831.php">http://www.open-mpi.org/community/lists/users/2016/03/28831.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28832.php">http://www.open-mpi.org/community/lists/users/2016/03/28832.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28833.php">http://www.open-mpi.org/community/lists/users/2016/03/28833.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28837.php">http://www.open-mpi.org/community/lists/users/2016/03/28837.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28840.php">http://www.open-mpi.org/community/lists/users/2016/03/28840.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28843.php">http://www.open-mpi.org/community/lists/users/2016/03/28843.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28844.php">http://www.open-mpi.org/community/lists/users/2016/03/28844.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28846.php">http://www.open-mpi.org/community/lists/users/2016/03/28846.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28847.php">http://www.open-mpi.org/community/lists/users/2016/03/28847.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28851.php">http://www.open-mpi.org/community/lists/users/2016/03/28851.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28852.php">http://www.open-mpi.org/community/lists/users/2016/03/28852.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28853.php">http://www.open-mpi.org/community/lists/users/2016/03/28853.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28855.php">dpchoudh .: "[OMPI users] Error running mpicc"</a>
<li><strong>Previous message:</strong> <a href="28853.php">Ronald Cohen: "Re: [OMPI users] loading processes per node"</a>
<li><strong>In reply to:</strong> <a href="28853.php">Ronald Cohen: "Re: [OMPI users] loading processes per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28848.php">Ronald Cohen: "Re: [OMPI users] loading processes per node"</a>
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
