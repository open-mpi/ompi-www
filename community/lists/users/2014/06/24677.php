<?
$subject_val = "Re: [OMPI users] affinity issues under cpuset torque 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 20 12:15:59 2014" -->
<!-- isoreceived="20140620161559" -->
<!-- sent="Fri, 20 Jun 2014 12:15:56 -0400" -->
<!-- isosent="20140620161556" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] affinity issues under cpuset torque 1.8.1" -->
<!-- id="76849339-D261-4566-8BBA-FF5B0715D927_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1A88161F-67DF-4E86-9037-4E8847D97712_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] affinity issues under cpuset torque 1.8.1<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-20 12:15:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24678.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24676.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24676.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24678.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24678.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In this case they are a single socket, but as you can see they could be ether/or depending on the job.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Jun 19, 2014, at 2:44 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry, I should have been clearer - I was asking if cores 8-11 are all on one socket, or span multiple sockets
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 19, 2014, at 11:36 AM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It was a large job spread across.  Our system allows users to ask for 'procs' which are laid out in any format. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The list:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nyx5406:2][nyx5427:2][nyx5506:2][nyx5311:3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nyx5329:4][nyx5398:4][nyx5396:11][nyx5397:11]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nyx5409:11][nyx5411:11][nyx5412:3]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Shows that nyx5406 had 2 cores,  nyx5427 also 2,  nyx5411 had 11.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; They could be spread across any number of sockets configuration.  We start very lax &quot;user requests X procs&quot; and then the user can request more strict requirements from there.  We support mostly serial users, and users can colocate on nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That is good to know, I think we would want to turn our default to 'bind to core' except for our few users who use hybrid mode.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Our CPU set tells you what cores the job is assigned.  So in the problem case provided, the cpuset/cgroup shows only cores 8-11 are available to this job on this node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 18, 2014, at 11:10 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The default binding option depends on the number of procs - it is bind-to core for np=2, and bind-to socket for np &gt; 2. You never said, but should I assume you ran 4 ranks? If so, then we should be trying to bind-to socket.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not sure what your cpuset is telling us - are you binding us to a socket? Are some cpus in one socket, and some in another?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It could be that the cpuset + bind-to socket is resulting in some odd behavior, but I'd need a little more info to narrow it down.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 18, 2014, at 7:48 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have started using 1.8.1 for some codes (meep in this case) and it sometimes works fine, but in a few cases I am seeing ranks being given overlapping CPU assignments, not always though.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Example job, default binding options (so by-core right?):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Assigned nodes, the one in question is nyx5398, we use torque CPU sets, and use TM to spawn.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [nyx5406:2][nyx5427:2][nyx5506:2][nyx5311:3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [nyx5329:4][nyx5398:4][nyx5396:11][nyx5397:11]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [nyx5409:11][nyx5411:11][nyx5412:3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# hwloc-bind --get --pid 16065
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0x00000200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# hwloc-bind --get --pid 16066
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0x00000800
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# hwloc-bind --get --pid 16067
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0x00000200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# hwloc-bind --get --pid 16068
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0x00000800
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# cat /dev/cpuset/torque/12703230.nyx.engin.umich.edu/cpus 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 8-11
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So torque claims the CPU set setup for the job has 4 cores, but as you can see the ranks were giving identical binding. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I checked the pids they were part of the correct CPU set, I also checked, orted:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# hwloc-bind --get --pid 16064
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0x00000f00
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# hwloc-calc --intersect PU 16064
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ignored unrecognized argument 16064
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# hwloc-calc --intersect PU 0x00000f00
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 8,9,10,11
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Which is exactly what I would expect.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So ummm, i'm lost why this might happen?  What else should I check?  Like I said not all jobs show this behavior.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24672.php">http://www.open-mpi.org/community/lists/users/2014/06/24672.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24673.php">http://www.open-mpi.org/community/lists/users/2014/06/24673.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24675.php">http://www.open-mpi.org/community/lists/users/2014/06/24675.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24676.php">http://www.open-mpi.org/community/lists/users/2014/06/24676.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24677/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24678.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24676.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24676.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24678.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24678.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
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
