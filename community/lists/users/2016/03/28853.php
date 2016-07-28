<?
$subject_val = "Re: [OMPI users] loading processes per node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 25 15:53:12 2016" -->
<!-- isoreceived="20160325195312" -->
<!-- sent="Fri, 25 Mar 2016 15:53:07 -0400" -->
<!-- isosent="20160325195307" -->
<!-- name="Ronald Cohen" -->
<!-- email="recohen3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] loading processes per node" -->
<!-- id="CAEcVHtOZZwgjSDbFSdLNvCs9nxVTnceqWNee6vkAt_7gjKLBJw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="54F99919-E88D-4C68-8A11-D74E8144F7E9_at_open-mpi.org" -->
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
<strong>From:</strong> Ronald Cohen (<em>recohen3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-25 15:53:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28854.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Previous message:</strong> <a href="28852.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>In reply to:</strong> <a href="28852.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28854.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Reply:</strong> <a href="28854.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should
<br>
-bind-to-core
<br>
also help? Does the error I get matter? Should we install libnumactl
<br>
and libnumactl-devel packages. ? Thanks!
<br>
<p>Ron
<br>
<p><pre>
---
Ron Cohen
recohen3_at_[hidden]
skypename: ronaldcohen
twitter: @recohen3
On Fri, Mar 25, 2016 at 3:43 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt; Yeah, it can really have an impact! It is unfortunately highly
&gt; application-specific, so all we can do is provide the tools.
&gt;
&gt; As you can see from the binding map, we are tight packing the procs on each
&gt; node to maximize the use of shared memory. However, this assumes that each
&gt; rank is predominantly going to &#226;&#128;&#156;talk&#226;&#128;&#157; to rank+/-1 - i.e., the pattern
&gt; involves nearest neighboring ranks. If that isn&#226;&#128;&#153;t true (e.g., the lowest
&gt; ranked process on one node talks to the the lowest ranked process on the
&gt; next node, etc.), then this would be a bad mapping for performance.
&gt;
&gt; In that case, you can use the &#226;&#128;&#156;rank-by&#226;&#128;&#157; option to maintain the location and
&gt; binding, but change the assigned MCW ranks to align with your communication
&gt; pattern.
&gt;
&gt; HTH
&gt; Ralph
&gt;
&gt;
&gt;
&gt; On Mar 25, 2016, at 12:28 PM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;
&gt; So I have been experimenting with different mappings, and performance
&gt; varies a lot. The best I find is:
&gt; -map-by slot:pe=2  -np 32
&gt; with 2 threads
&gt; which gives
&gt; [n001.cluster.com:29647] MCW rank 0 bound to socket 0[core 0[hwt 0]],
&gt; socket 0[core 1[hwt 0]]: [B/B/./././././.][./././././././.]
&gt; [n001.cluster.com:29647] MCW rank 1 bound to socket 0[core 2[hwt 0]],
&gt; socket 0[core 3[hwt 0]]: [././B/B/./././.][./././././././.]
&gt; [n001.cluster.com:29647] MCW rank 2 bound to socket 0[core 4[hwt 0]],
&gt; socket 0[core 5[hwt 0]]: [././././B/B/./.][./././././././.]
&gt; [n001.cluster.com:29647] MCW rank 3 bound to socket 0[core 6[hwt 0]],
&gt; socket 0[core 7[hwt 0]]: [././././././B/B][./././././././.]
&gt; [n001.cluster.com:29647] MCW rank 4 bound to socket 1[core 8[hwt 0]],
&gt; socket 1[core 9[hwt 0]]: [./././././././.][B/B/./././././.]
&gt; [n001.cluster.com:29647] MCW rank 5 bound to socket 1[core 10[hwt 0]],
&gt; socket 1[core 11[hwt 0]]: [./././././././.][././B/B/./././.]
&gt; [n001.cluster.com:29647] MCW rank 6 bound to socket 1[core 12[hwt 0]],
&gt; socket 1[core 13[hwt 0]]: [./././././././.][././././B/B/./.]
&gt; [n001.cluster.com:29647] MCW rank 7 bound to socket 1[core 14[hwt 0]],
&gt; socket 1[core 15[hwt 0]]: [./././././././.][././././././B/B]
&gt; [n003.cluster.com:29842] MCW rank 16 bound to socket 0[core 0[hwt 0]],
&gt; socket 0[core 1[hwt 0]]: [B/B/./././././.][./././././././.]
&gt; [n002.cluster.com:32210] MCW ra
&gt; ...
&gt;
&gt; ---
&gt; Ron Cohen
&gt; recohen3_at_[hidden]
&gt; skypename: ronaldcohen
&gt; twitter: @recohen3
&gt;
&gt;
&gt; On Fri, Mar 25, 2016 at 3:13 PM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;
&gt; So
&gt; -map-by node:pe=2  -np 32
&gt; runs and gives great performance, though a little worse than -n 32
&gt; it puts the correct number of processes, but does do round robin. Is
&gt; there a way to do this without the round robin? Also note the error
&gt; message:
&gt;
&gt;
&gt; ======================   ALLOCATED NODES   ======================
&gt;        n001: slots=16 max_slots=0 slots_inuse=0 state=UP
&gt;        n004.cluster.com: slots=16 max_slots=0 slots_inuse=0 state=UP
&gt;        n003.cluster.com: slots=16 max_slots=0 slots_inuse=0 state=UP
&gt;        n002.cluster.com: slots=16 max_slots=0 slots_inuse=0 state=UP
&gt; =================================================================
&gt; --------------------------------------------------------------------------
&gt; WARNING: a request was made to bind a process. While the system
&gt; supports binding the process itself, at least one node does NOT
&gt; support binding memory to the process location.
&gt;
&gt;  Node:  n001
&gt;
&gt; This usually is due to not having the required NUMA support installed
&gt; on the node. In some Linux distributions, the required support is
&gt; contained in the libnumactl and libnumactl-devel packages.
&gt; This is a warning only; your job will continue, though performance may
&gt; be degraded.
&gt; --------------------------------------------------------------------------
&gt; [n001.cluster.com:29316] MCW rank 0 bound to socket 0[core 0[hwt 0]],
&gt; socket 0[core 1[hwt 0]]: [B/B/./././././.][./././././././.]
&gt; [n001.cluster.com:29316] MCW rank 4 bound to socket 0[core 2[hwt 0]],
&gt; socket 0[core 3[hwt 0]]: [././B/B/./././.][./././././././.]
&gt; [n001.cluster.com:29316] MCW rank 8 bound to socket 0[core 4[hwt 0]],
&gt; socket 0[core 5[hwt 0]]: [././././B/B/./.][./././././././.]
&gt; [n001.cluster.com:29316] MCW rank 12 bound to socket 0[core 6[hwt 0]],
&gt; socket 0[core 7[hwt 0]]: [././././././B/B][./././././././.]
&gt; [n001.cluster.com:29316] MCW rank 16 bound to socket 1[core 8[hwt 0]],
&gt; socket 1[core 9[hwt 0]]: [./././././././.][B/B/./././././.]
&gt; [n001.cluster.com:29316] MCW rank 20 bound to socket 1[core 10[hwt
&gt; 0]], socket 1[core 11[hwt 0]]: [./././././././.][././B/B/./././.]
&gt; [n001.cluster.com:29316] MCW rank 24 bound to socket 1[core 12[hwt
&gt; 0]], socket 1[core 13[hwt 0]]: [./././././././.][././././B/B/./.]
&gt; [n001.cluster.com:29316] MCW rank 28 bound to socket 1[core 14[hwt
&gt; 0]], socket 1[core 15[hwt 0]]: [./././././././.][././././././B/B]
&gt; [n003.cluster.com:29704] MCW rank 22 bound to socket 1[core 10[hwt
&gt; 0]], socket 1[core 11[hwt 0]]: [./././././././.][././B/B/./././.]
&gt; ---
&gt; Ron Cohen
&gt; recohen3_at_[hidden]
&gt; skypename: ronaldcohen
&gt; twitter: @recohen3
&gt;
&gt;
&gt; On Fri, Mar 25, 2016 at 2:32 PM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;
&gt; So it seems my
&gt; -map-by core:pe=2 -n 32
&gt; should have worked . I would have 32 procs with 2 on each, giving 64 total.
&gt; But it doesn't
&gt; ---
&gt; Ron Cohen
&gt; recohen3_at_[hidden]
&gt; skypename: ronaldcohen
&gt; twitter: @recohen3
&gt;
&gt;
&gt; On Fri, Mar 25, 2016 at 2:19 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;
&gt; pe=N tells us to map N cores (we call them &#226;&#128;&#156;processing elements&#226;&#128;&#157; because
&gt; they could be HTs if you &#226;&#128;&#148;use-hwthreads-as-cpus) to each process. So we will
&gt; bind each process to N cores.
&gt;
&gt; So if you want 16 procs, each with two processing elements assigned to them
&gt; (which is a good choice if you are using 2 threads/process), then you would
&gt; use:
&gt;
&gt; mpirun -map-by core:pe=2 -np 16
&gt;
&gt; If you add -report-bindings, you&#226;&#128;&#153;ll see each process bound to two cores,
&gt; with the procs tightly packed on each node until that node&#226;&#128;&#153;s cores are fully
&gt; utilized. We do handle the unlikely event that you asked for a non-integer
&gt; multiple of cores - i.e., if you have 32 cores on a node, and you ask for
&gt; pe=6, we will wind up leaving two cores idle.
&gt;
&gt; HTH
&gt; Ralph
&gt;
&gt; On Mar 25, 2016, at 11:11 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;
&gt; or is it mpirun -map-by core:pe=8 -n 16 ?
&gt;
&gt; ---
&gt; Ron Cohen
&gt; recohen3_at_[hidden]
&gt; skypename: ronaldcohen
&gt; twitter: @recohen3
&gt;
&gt;
&gt; On Fri, Mar 25, 2016 at 2:10 PM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;
&gt; Thank you--I looked on the man page and it is not clear to me what
&gt; pe=2 does. Is that the number of threads? So if I want 16 mpi procs
&gt; with 2 threads is it for 32 cores (two nodes)
&gt;
&gt; mpirun -map-by core:pe=2 -n 16
&gt;
&gt; ?
&gt;
&gt; Sorry if I mangled this.
&gt;
&gt;
&gt; Ron
&gt;
&gt; ---
&gt; Ron Cohen
&gt; recohen3_at_[hidden]
&gt; skypename: ronaldcohen
&gt; twitter: @recohen3
&gt;
&gt;
&gt; On Fri, Mar 25, 2016 at 2:03 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;
&gt; Okay, what I would suggest is that you use the following cmd line:
&gt;
&gt; mpirun -map-by core:pe=2 (or 8 or whatever number you want)
&gt;
&gt; This should give you the best performance as it will tight-pack the procs
&gt; and assign them to the correct number of cores. See if that helps
&gt;
&gt; On Mar 25, 2016, at 10:38 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;
&gt; 1.10.2
&gt;
&gt; Ron
&gt;
&gt; ---
&gt; Ron Cohen
&gt; recohen3_at_[hidden]
&gt; skypename: ronaldcohen
&gt; twitter: @recohen3
&gt;
&gt;
&gt; On Fri, Mar 25, 2016 at 1:30 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;
&gt; Hmmm&#226;&#128;&#166;what version of OMPI are you using?
&gt;
&gt;
&gt; On Mar 25, 2016, at 10:27 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;
&gt; --report-bindings didn't report anything
&gt; ---
&gt; Ron Cohen
&gt; recohen3_at_[hidden]
&gt; skypename: ronaldcohen
&gt; twitter: @recohen3
&gt;
&gt;
&gt; On Fri, Mar 25, 2016 at 1:24 PM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;
&gt; &#226;&#128;&#148;display-allocation an
&gt; didn't seem to give useful information:
&gt;
&gt; ======================   ALLOCATED NODES   ======================
&gt;     n005: slots=16 max_slots=0 slots_inuse=0 state=UP
&gt;     n008.cluster.com: slots=16 max_slots=0 slots_inuse=0 state=UP
&gt;     n007.cluster.com: slots=16 max_slots=0 slots_inuse=0 state=UP
&gt;     n006.cluster.com: slots=16 max_slots=0 slots_inuse=0 state=UP
&gt; =================================================================
&gt;
&gt; for
&gt; mpirun -display-allocation  --map-by ppr:8:node -n 32
&gt;
&gt; Ron
&gt;
&gt; ---
&gt; Ron Cohen
&gt; recohen3_at_[hidden]
&gt; skypename: ronaldcohen
&gt; twitter: @recohen3
&gt;
&gt;
&gt; On Fri, Mar 25, 2016 at 1:17 PM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;
&gt; Actually there was the same number of procs per node in each case. I
&gt; verified this by logging into the nodes while they were running--in
&gt; both cases 4 per node .
&gt;
&gt; Ron
&gt;
&gt; ---
&gt; Ron Cohen
&gt; recohen3_at_[hidden]
&gt; skypename: ronaldcohen
&gt; twitter: @recohen3
&gt;
&gt;
&gt; On Fri, Mar 25, 2016 at 1:14 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;
&gt;
&gt; On Mar 25, 2016, at 9:59 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;
&gt; It is very strange but my program runs slower with any of these
&gt; choices than if IO simply use:
&gt;
&gt; mpirun  -n 16
&gt; with
&gt; #PBS -l
&gt; nodes=n013.cluster.com:ppn=4+n014.cluster.com:ppn=4+n015.cluster.com:ppn=4+n016.cluster.com:ppn=4
&gt; for example.
&gt;
&gt;
&gt; This command will tightly pack as many procs as possible on a node - note
&gt; that we may well not see the PBS directives regarding number of ppn. Add
&gt; &#226;&#128;&#148;display-allocation and let&#226;&#128;&#153;s see how many slots we think were assigned on
&gt; each node
&gt;
&gt;
&gt; The timing for the latter is 165 seconds, and for
&gt; #PBS -l nodes=4:ppn=16,pmem=1gb
&gt; mpirun  --map-by ppr:4:node -n 16
&gt; it is 368 seconds.
&gt;
&gt;
&gt; It will typically be faster if you pack more procs/node as they can use
&gt; shared memory for communication.
&gt;
&gt;
&gt; Ron
&gt;
&gt; ---
&gt; Ron Cohen
&gt; recohen3_at_[hidden]
&gt; skypename: ronaldcohen
&gt; twitter: @recohen3
&gt;
&gt;
&gt; On Fri, Mar 25, 2016 at 12:43 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;
&gt;
&gt; On Mar 25, 2016, at 9:40 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;
&gt; Thank you! I will try it!
&gt;
&gt;
&gt; What would
&gt; -cpus-per-proc  4 -n 16
&gt; do?
&gt;
&gt;
&gt; This would bind each process to 4 cores, filling each node with procs until
&gt; the cores on that node were exhausted, to a total of 16 processes within the
&gt; allocation.
&gt;
&gt;
&gt; Ron
&gt; ---
&gt; Ron Cohen
&gt; recohen3_at_[hidden]
&gt; skypename: ronaldcohen
&gt; twitter: @recohen3
&gt;
&gt;
&gt; On Fri, Mar 25, 2016 at 12:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;
&gt; Add -rank-by node to your cmd line. You&#226;&#128;&#153;ll still get 4 procs/node, but they
&gt; will be ranked by node instead of consecutively within a node.
&gt;
&gt;
&gt;
&gt; On Mar 25, 2016, at 9:30 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;
&gt; I am using
&gt;
&gt; mpirun  --map-by ppr:4:node -n 16
&gt;
&gt; and this loads the processes in round robin fashion. This seems to be
&gt; twice as slow for my code as loading them node by node, 4 processes
&gt; per node.
&gt;
&gt; How can I not load them round robin, but node by node?
&gt;
&gt; Thanks!
&gt;
&gt; Ron
&gt;
&gt;
&gt; ---
&gt; Ron Cohen
&gt; recohen3_at_[hidden]
&gt; skypename: ronaldcohen
&gt; twitter: @recohen3
&gt;
&gt; ---
&gt; Ronald Cohen
&gt; Geophysical Laboratory
&gt; Carnegie Institution
&gt; 5251 Broad Branch Rd., N.W.
&gt; Washington, D.C. 20015
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28828.php">http://www.open-mpi.org/community/lists/users/2016/03/28828.php</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28829.php">http://www.open-mpi.org/community/lists/users/2016/03/28829.php</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28830.php">http://www.open-mpi.org/community/lists/users/2016/03/28830.php</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28831.php">http://www.open-mpi.org/community/lists/users/2016/03/28831.php</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28832.php">http://www.open-mpi.org/community/lists/users/2016/03/28832.php</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28833.php">http://www.open-mpi.org/community/lists/users/2016/03/28833.php</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28837.php">http://www.open-mpi.org/community/lists/users/2016/03/28837.php</a>
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28840.php">http://www.open-mpi.org/community/lists/users/2016/03/28840.php</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28843.php">http://www.open-mpi.org/community/lists/users/2016/03/28843.php</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28844.php">http://www.open-mpi.org/community/lists/users/2016/03/28844.php</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28846.php">http://www.open-mpi.org/community/lists/users/2016/03/28846.php</a>
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28847.php">http://www.open-mpi.org/community/lists/users/2016/03/28847.php</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28851.php">http://www.open-mpi.org/community/lists/users/2016/03/28851.php</a>
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28852.php">http://www.open-mpi.org/community/lists/users/2016/03/28852.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28854.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Previous message:</strong> <a href="28852.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>In reply to:</strong> <a href="28852.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28854.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Reply:</strong> <a href="28854.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
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
