<?
$subject_val = "Re: [OMPI users] affinity issues under cpuset torque 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 18 23:10:25 2014" -->
<!-- isoreceived="20140619031025" -->
<!-- sent="Wed, 18 Jun 2014 20:10:22 -0700" -->
<!-- isosent="20140619031022" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] affinity issues under cpuset torque 1.8.1" -->
<!-- id="C4FF0C5B-C44C-4DBD-93EA-6E176A17E7E7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A4E3956C-D4D5-40BD-A373-77A021D273DA_at_umich.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-18 23:10:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24674.php">Siegmar Gross: "Re: [OMPI users] Program abortion at a simple MPI_Get Programm"</a>
<li><strong>Previous message:</strong> <a href="24672.php">Brock Palen: "[OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24672.php">Brock Palen: "[OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24675.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24675.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The default binding option depends on the number of procs - it is bind-to core for np=2, and bind-to socket for np &gt; 2. You never said, but should I assume you ran 4 ranks? If so, then we should be trying to bind-to socket.
<br>
<p>I'm not sure what your cpuset is telling us - are you binding us to a socket? Are some cpus in one socket, and some in another?
<br>
<p>It could be that the cpuset + bind-to socket is resulting in some odd behavior, but I'd need a little more info to narrow it down.
<br>
<p><p>On Jun 18, 2014, at 7:48 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have started using 1.8.1 for some codes (meep in this case) and it sometimes works fine, but in a few cases I am seeing ranks being given overlapping CPU assignments, not always though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Example job, default binding options (so by-core right?):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Assigned nodes, the one in question is nyx5398, we use torque CPU sets, and use TM to spawn.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [nyx5406:2][nyx5427:2][nyx5506:2][nyx5311:3]
</span><br>
<span class="quotelev1">&gt; [nyx5329:4][nyx5398:4][nyx5396:11][nyx5397:11]
</span><br>
<span class="quotelev1">&gt; [nyx5409:11][nyx5411:11][nyx5412:3]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_nyx5398 ~]# hwloc-bind --get --pid 16065
</span><br>
<span class="quotelev1">&gt; 0x00000200
</span><br>
<span class="quotelev1">&gt; [root_at_nyx5398 ~]# hwloc-bind --get --pid 16066
</span><br>
<span class="quotelev1">&gt; 0x00000800
</span><br>
<span class="quotelev1">&gt; [root_at_nyx5398 ~]# hwloc-bind --get --pid 16067
</span><br>
<span class="quotelev1">&gt; 0x00000200
</span><br>
<span class="quotelev1">&gt; [root_at_nyx5398 ~]# hwloc-bind --get --pid 16068
</span><br>
<span class="quotelev1">&gt; 0x00000800
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_nyx5398 ~]# cat /dev/cpuset/torque/12703230.nyx.engin.umich.edu/cpus 
</span><br>
<span class="quotelev1">&gt; 8-11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So torque claims the CPU set setup for the job has 4 cores, but as you can see the ranks were giving identical binding. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I checked the pids they were part of the correct CPU set, I also checked, orted:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_nyx5398 ~]# hwloc-bind --get --pid 16064
</span><br>
<span class="quotelev1">&gt; 0x00000f00
</span><br>
<span class="quotelev1">&gt; [root_at_nyx5398 ~]# hwloc-calc --intersect PU 16064
</span><br>
<span class="quotelev1">&gt; ignored unrecognized argument 16064
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_nyx5398 ~]# hwloc-calc --intersect PU 0x00000f00
</span><br>
<span class="quotelev1">&gt; 8,9,10,11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which is exactly what I would expect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So ummm, i'm lost why this might happen?  What else should I check?  Like I said not all jobs show this behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24672.php">http://www.open-mpi.org/community/lists/users/2014/06/24672.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24674.php">Siegmar Gross: "Re: [OMPI users] Program abortion at a simple MPI_Get Programm"</a>
<li><strong>Previous message:</strong> <a href="24672.php">Brock Palen: "[OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24672.php">Brock Palen: "[OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24675.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24675.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
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
