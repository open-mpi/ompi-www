<?
$subject_val = "Re: [OMPI users] loading processes per node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 25 13:38:07 2016" -->
<!-- isoreceived="20160325173807" -->
<!-- sent="Fri, 25 Mar 2016 13:38:04 -0400" -->
<!-- isosent="20160325173804" -->
<!-- name="Ronald Cohen" -->
<!-- email="recohen3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] loading processes per node" -->
<!-- id="CAEcVHtPzt69BwQY+1rUmebSHC9fENkSyO9QFwBAjU6P+t7=4rw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9C4981AB-D8BA-4E58-90FA-1FB55F10D20C_at_open-mpi.org" -->
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
<strong>Date:</strong> 2016-03-25 13:38:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28843.php">Ronald Cohen: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Previous message:</strong> <a href="28841.php">Ronald Cohen: "Re: [OMPI users] loading processes per node"</a>
<li><strong>In reply to:</strong> <a href="28838.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes -- there are 16 cores per node--I want to use 8 mpi processes with
<br>
2 threads each, or 4 mpi processeswith 4 threads each, on each node.
<br>
<p>Ron
<br>
<p><pre>
---
Ron Cohen
recohen3_at_[hidden]
skypename: ronaldcohen
twitter: @recohen3
On Fri, Mar 25, 2016 at 1:29 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt; Interesting - it thinks we have 16 slots/node, so if you just use &#226;&#128;&#156;mpirun
&gt; -np 16&#226;&#128;&#157;, you should wind up with all the procs on one node
&gt;
&gt;
&gt; On Mar 25, 2016, at 10:24 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;
&gt; &#226;&#128;&#148;display-allocation an
&gt; didn't seem to give useful information:
&gt;
&gt; ======================   ALLOCATED NODES   ======================
&gt;        n005: slots=16 max_slots=0 slots_inuse=0 state=UP
&gt;        n008.cluster.com: slots=16 max_slots=0 slots_inuse=0 state=UP
&gt;        n007.cluster.com: slots=16 max_slots=0 slots_inuse=0 state=UP
&gt;        n006.cluster.com: slots=16 max_slots=0 slots_inuse=0 state=UP
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
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28836.php">http://www.open-mpi.org/community/lists/users/2016/03/28836.php</a>
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28838.php">http://www.open-mpi.org/community/lists/users/2016/03/28838.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28843.php">Ronald Cohen: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Previous message:</strong> <a href="28841.php">Ronald Cohen: "Re: [OMPI users] loading processes per node"</a>
<li><strong>In reply to:</strong> <a href="28838.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
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
