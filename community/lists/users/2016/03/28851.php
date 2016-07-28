<?
$subject_val = "Re: [OMPI users] loading processes per node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 25 15:28:52 2016" -->
<!-- isoreceived="20160325192852" -->
<!-- sent="Fri, 25 Mar 2016 15:28:47 -0400" -->
<!-- isosent="20160325192847" -->
<!-- name="Ronald Cohen" -->
<!-- email="recohen3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] loading processes per node" -->
<!-- id="CAEcVHtNk=CWT8a75jNhQ8PM2qqCeXB9rzmgx8_uRk93PB5WVzg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEcVHtN_dNaN+H7dk=VCX19e25y7uKGLEA8ri2jcScUz+K5fCQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-03-25 15:28:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28852.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Previous message:</strong> <a href="28850.php">Ronald Cohen: "Re: [OMPI users] loading processes per node"</a>
<li><strong>In reply to:</strong> <a href="28850.php">Ronald Cohen: "Re: [OMPI users] loading processes per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28852.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Reply:</strong> <a href="28852.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I have been experimenting with different mappings, and performance
<br>
varies a lot. The best I find is:
<br>
-map-by slot:pe=2  -np 32
<br>
with 2 threads
<br>
which gives
<br>
[n001.cluster.com:29647] MCW rank 0 bound to socket 0[core 0[hwt 0]],
<br>
socket 0[core 1[hwt 0]]: [B/B/./././././.][./././././././.]
<br>
[n001.cluster.com:29647] MCW rank 1 bound to socket 0[core 2[hwt 0]],
<br>
socket 0[core 3[hwt 0]]: [././B/B/./././.][./././././././.]
<br>
[n001.cluster.com:29647] MCW rank 2 bound to socket 0[core 4[hwt 0]],
<br>
socket 0[core 5[hwt 0]]: [././././B/B/./.][./././././././.]
<br>
[n001.cluster.com:29647] MCW rank 3 bound to socket 0[core 6[hwt 0]],
<br>
socket 0[core 7[hwt 0]]: [././././././B/B][./././././././.]
<br>
[n001.cluster.com:29647] MCW rank 4 bound to socket 1[core 8[hwt 0]],
<br>
socket 1[core 9[hwt 0]]: [./././././././.][B/B/./././././.]
<br>
[n001.cluster.com:29647] MCW rank 5 bound to socket 1[core 10[hwt 0]],
<br>
socket 1[core 11[hwt 0]]: [./././././././.][././B/B/./././.]
<br>
[n001.cluster.com:29647] MCW rank 6 bound to socket 1[core 12[hwt 0]],
<br>
socket 1[core 13[hwt 0]]: [./././././././.][././././B/B/./.]
<br>
[n001.cluster.com:29647] MCW rank 7 bound to socket 1[core 14[hwt 0]],
<br>
socket 1[core 15[hwt 0]]: [./././././././.][././././././B/B]
<br>
[n003.cluster.com:29842] MCW rank 16 bound to socket 0[core 0[hwt 0]],
<br>
socket 0[core 1[hwt 0]]: [B/B/./././././.][./././././././.]
<br>
[n002.cluster.com:32210] MCW ra
<br>
...
<br>
<p><pre>
---
Ron Cohen
recohen3_at_[hidden]
skypename: ronaldcohen
twitter: @recohen3
On Fri, Mar 25, 2016 at 3:13 PM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt; So
&gt;  -map-by node:pe=2  -np 32
&gt; runs and gives great performance, though a little worse than -n 32
&gt; it puts the correct number of processes, but does do round robin. Is
&gt; there a way to do this without the round robin? Also note the error
&gt; message:
&gt;
&gt;
&gt; ======================   ALLOCATED NODES   ======================
&gt;         n001: slots=16 max_slots=0 slots_inuse=0 state=UP
&gt;         n004.cluster.com: slots=16 max_slots=0 slots_inuse=0 state=UP
&gt;         n003.cluster.com: slots=16 max_slots=0 slots_inuse=0 state=UP
&gt;         n002.cluster.com: slots=16 max_slots=0 slots_inuse=0 state=UP
&gt; =================================================================
&gt; --------------------------------------------------------------------------
&gt; WARNING: a request was made to bind a process. While the system
&gt; supports binding the process itself, at least one node does NOT
&gt; support binding memory to the process location.
&gt;
&gt;   Node:  n001
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
&gt;&gt; So it seems my
&gt;&gt; -map-by core:pe=2 -n 32
&gt;&gt; should have worked . I would have 32 procs with 2 on each, giving 64 total.
&gt;&gt; But it doesn't
&gt;&gt; ---
&gt;&gt; Ron Cohen
&gt;&gt; recohen3_at_[hidden]
&gt;&gt; skypename: ronaldcohen
&gt;&gt; twitter: @recohen3
&gt;&gt;
&gt;&gt;
&gt;&gt; On Fri, Mar 25, 2016 at 2:19 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;&gt;&gt; pe=N tells us to map N cores (we call them &#226;&#128;&#156;processing elements&#226;&#128;&#157; because
&gt;&gt;&gt; they could be HTs if you &#226;&#128;&#148;use-hwthreads-as-cpus) to each process. So we will
&gt;&gt;&gt; bind each process to N cores.
&gt;&gt;&gt;
&gt;&gt;&gt; So if you want 16 procs, each with two processing elements assigned to them
&gt;&gt;&gt; (which is a good choice if you are using 2 threads/process), then you would
&gt;&gt;&gt; use:
&gt;&gt;&gt;
&gt;&gt;&gt; mpirun -map-by core:pe=2 -np 16
&gt;&gt;&gt;
&gt;&gt;&gt; If you add -report-bindings, you&#226;&#128;&#153;ll see each process bound to two cores,
&gt;&gt;&gt; with the procs tightly packed on each node until that node&#226;&#128;&#153;s cores are fully
&gt;&gt;&gt; utilized. We do handle the unlikely event that you asked for a non-integer
&gt;&gt;&gt; multiple of cores - i.e., if you have 32 cores on a node, and you ask for
&gt;&gt;&gt; pe=6, we will wind up leaving two cores idle.
&gt;&gt;&gt;
&gt;&gt;&gt; HTH
&gt;&gt;&gt; Ralph
&gt;&gt;&gt;
&gt;&gt;&gt; On Mar 25, 2016, at 11:11 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt; or is it mpirun -map-by core:pe=8 -n 16 ?
&gt;&gt;&gt;
&gt;&gt;&gt; ---
&gt;&gt;&gt; Ron Cohen
&gt;&gt;&gt; recohen3_at_[hidden]
&gt;&gt;&gt; skypename: ronaldcohen
&gt;&gt;&gt; twitter: @recohen3
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Fri, Mar 25, 2016 at 2:10 PM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt; Thank you--I looked on the man page and it is not clear to me what
&gt;&gt;&gt; pe=2 does. Is that the number of threads? So if I want 16 mpi procs
&gt;&gt;&gt; with 2 threads is it for 32 cores (two nodes)
&gt;&gt;&gt;
&gt;&gt;&gt; mpirun -map-by core:pe=2 -n 16
&gt;&gt;&gt;
&gt;&gt;&gt; ?
&gt;&gt;&gt;
&gt;&gt;&gt; Sorry if I mangled this.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; Ron
&gt;&gt;&gt;
&gt;&gt;&gt; ---
&gt;&gt;&gt; Ron Cohen
&gt;&gt;&gt; recohen3_at_[hidden]
&gt;&gt;&gt; skypename: ronaldcohen
&gt;&gt;&gt; twitter: @recohen3
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Fri, Mar 25, 2016 at 2:03 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt; Okay, what I would suggest is that you use the following cmd line:
&gt;&gt;&gt;
&gt;&gt;&gt; mpirun -map-by core:pe=2 (or 8 or whatever number you want)
&gt;&gt;&gt;
&gt;&gt;&gt; This should give you the best performance as it will tight-pack the procs
&gt;&gt;&gt; and assign them to the correct number of cores. See if that helps
&gt;&gt;&gt;
&gt;&gt;&gt; On Mar 25, 2016, at 10:38 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt; 1.10.2
&gt;&gt;&gt;
&gt;&gt;&gt; Ron
&gt;&gt;&gt;
&gt;&gt;&gt; ---
&gt;&gt;&gt; Ron Cohen
&gt;&gt;&gt; recohen3_at_[hidden]
&gt;&gt;&gt; skypename: ronaldcohen
&gt;&gt;&gt; twitter: @recohen3
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Fri, Mar 25, 2016 at 1:30 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt; Hmmm&#226;&#128;&#166;what version of OMPI are you using?
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Mar 25, 2016, at 10:27 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt; --report-bindings didn't report anything
&gt;&gt;&gt; ---
&gt;&gt;&gt; Ron Cohen
&gt;&gt;&gt; recohen3_at_[hidden]
&gt;&gt;&gt; skypename: ronaldcohen
&gt;&gt;&gt; twitter: @recohen3
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Fri, Mar 25, 2016 at 1:24 PM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt; &#226;&#128;&#148;display-allocation an
&gt;&gt;&gt; didn't seem to give useful information:
&gt;&gt;&gt;
&gt;&gt;&gt; ======================   ALLOCATED NODES   ======================
&gt;&gt;&gt;      n005: slots=16 max_slots=0 slots_inuse=0 state=UP
&gt;&gt;&gt;      n008.cluster.com: slots=16 max_slots=0 slots_inuse=0 state=UP
&gt;&gt;&gt;      n007.cluster.com: slots=16 max_slots=0 slots_inuse=0 state=UP
&gt;&gt;&gt;      n006.cluster.com: slots=16 max_slots=0 slots_inuse=0 state=UP
&gt;&gt;&gt; =================================================================
&gt;&gt;&gt;
&gt;&gt;&gt; for
&gt;&gt;&gt; mpirun -display-allocation  --map-by ppr:8:node -n 32
&gt;&gt;&gt;
&gt;&gt;&gt; Ron
&gt;&gt;&gt;
&gt;&gt;&gt; ---
&gt;&gt;&gt; Ron Cohen
&gt;&gt;&gt; recohen3_at_[hidden]
&gt;&gt;&gt; skypename: ronaldcohen
&gt;&gt;&gt; twitter: @recohen3
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Fri, Mar 25, 2016 at 1:17 PM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt; Actually there was the same number of procs per node in each case. I
&gt;&gt;&gt; verified this by logging into the nodes while they were running--in
&gt;&gt;&gt; both cases 4 per node .
&gt;&gt;&gt;
&gt;&gt;&gt; Ron
&gt;&gt;&gt;
&gt;&gt;&gt; ---
&gt;&gt;&gt; Ron Cohen
&gt;&gt;&gt; recohen3_at_[hidden]
&gt;&gt;&gt; skypename: ronaldcohen
&gt;&gt;&gt; twitter: @recohen3
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Fri, Mar 25, 2016 at 1:14 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Mar 25, 2016, at 9:59 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt; It is very strange but my program runs slower with any of these
&gt;&gt;&gt; choices than if IO simply use:
&gt;&gt;&gt;
&gt;&gt;&gt; mpirun  -n 16
&gt;&gt;&gt; with
&gt;&gt;&gt; #PBS -l
&gt;&gt;&gt; nodes=n013.cluster.com:ppn=4+n014.cluster.com:ppn=4+n015.cluster.com:ppn=4+n016.cluster.com:ppn=4
&gt;&gt;&gt; for example.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; This command will tightly pack as many procs as possible on a node - note
&gt;&gt;&gt; that we may well not see the PBS directives regarding number of ppn. Add
&gt;&gt;&gt; &#226;&#128;&#148;display-allocation and let&#226;&#128;&#153;s see how many slots we think were assigned on
&gt;&gt;&gt; each node
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; The timing for the latter is 165 seconds, and for
&gt;&gt;&gt; #PBS -l nodes=4:ppn=16,pmem=1gb
&gt;&gt;&gt; mpirun  --map-by ppr:4:node -n 16
&gt;&gt;&gt; it is 368 seconds.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; It will typically be faster if you pack more procs/node as they can use
&gt;&gt;&gt; shared memory for communication.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; Ron
&gt;&gt;&gt;
&gt;&gt;&gt; ---
&gt;&gt;&gt; Ron Cohen
&gt;&gt;&gt; recohen3_at_[hidden]
&gt;&gt;&gt; skypename: ronaldcohen
&gt;&gt;&gt; twitter: @recohen3
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Fri, Mar 25, 2016 at 12:43 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Mar 25, 2016, at 9:40 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt; Thank you! I will try it!
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; What would
&gt;&gt;&gt; -cpus-per-proc  4 -n 16
&gt;&gt;&gt; do?
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; This would bind each process to 4 cores, filling each node with procs until
&gt;&gt;&gt; the cores on that node were exhausted, to a total of 16 processes within the
&gt;&gt;&gt; allocation.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; Ron
&gt;&gt;&gt; ---
&gt;&gt;&gt; Ron Cohen
&gt;&gt;&gt; recohen3_at_[hidden]
&gt;&gt;&gt; skypename: ronaldcohen
&gt;&gt;&gt; twitter: @recohen3
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Fri, Mar 25, 2016 at 12:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt; Add -rank-by node to your cmd line. You&#226;&#128;&#153;ll still get 4 procs/node, but they
&gt;&gt;&gt; will be ranked by node instead of consecutively within a node.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Mar 25, 2016, at 9:30 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt; I am using
&gt;&gt;&gt;
&gt;&gt;&gt; mpirun  --map-by ppr:4:node -n 16
&gt;&gt;&gt;
&gt;&gt;&gt; and this loads the processes in round robin fashion. This seems to be
&gt;&gt;&gt; twice as slow for my code as loading them node by node, 4 processes
&gt;&gt;&gt; per node.
&gt;&gt;&gt;
&gt;&gt;&gt; How can I not load them round robin, but node by node?
&gt;&gt;&gt;
&gt;&gt;&gt; Thanks!
&gt;&gt;&gt;
&gt;&gt;&gt; Ron
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; ---
&gt;&gt;&gt; Ron Cohen
&gt;&gt;&gt; recohen3_at_[hidden]
&gt;&gt;&gt; skypename: ronaldcohen
&gt;&gt;&gt; twitter: @recohen3
&gt;&gt;&gt;
&gt;&gt;&gt; ---
&gt;&gt;&gt; Ronald Cohen
&gt;&gt;&gt; Geophysical Laboratory
&gt;&gt;&gt; Carnegie Institution
&gt;&gt;&gt; 5251 Broad Branch Rd., N.W.
&gt;&gt;&gt; Washington, D.C. 20015
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; Link to this post:
&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28828.php">http://www.open-mpi.org/community/lists/users/2016/03/28828.php</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; Link to this post:
&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28829.php">http://www.open-mpi.org/community/lists/users/2016/03/28829.php</a>
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; Link to this post:
&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28830.php">http://www.open-mpi.org/community/lists/users/2016/03/28830.php</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; Link to this post:
&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28831.php">http://www.open-mpi.org/community/lists/users/2016/03/28831.php</a>
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; Link to this post:
&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28832.php">http://www.open-mpi.org/community/lists/users/2016/03/28832.php</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; Link to this post:
&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28833.php">http://www.open-mpi.org/community/lists/users/2016/03/28833.php</a>
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; Link to this post:
&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28837.php">http://www.open-mpi.org/community/lists/users/2016/03/28837.php</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; Link to this post:
&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28840.php">http://www.open-mpi.org/community/lists/users/2016/03/28840.php</a>
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; Link to this post:
&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28843.php">http://www.open-mpi.org/community/lists/users/2016/03/28843.php</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; Link to this post:
&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28844.php">http://www.open-mpi.org/community/lists/users/2016/03/28844.php</a>
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; Link to this post:
&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28846.php">http://www.open-mpi.org/community/lists/users/2016/03/28846.php</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; Link to this post:
&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28847.php">http://www.open-mpi.org/community/lists/users/2016/03/28847.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28852.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Previous message:</strong> <a href="28850.php">Ronald Cohen: "Re: [OMPI users] loading processes per node"</a>
<li><strong>In reply to:</strong> <a href="28850.php">Ronald Cohen: "Re: [OMPI users] loading processes per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28852.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Reply:</strong> <a href="28852.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
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
