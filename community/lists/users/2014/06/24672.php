<?
$subject_val = "[OMPI users] affinity issues under cpuset torque 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 18 22:48:27 2014" -->
<!-- isoreceived="20140619024827" -->
<!-- sent="Wed, 18 Jun 2014 22:48:24 -0400" -->
<!-- isosent="20140619024824" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] affinity issues under cpuset torque 1.8.1" -->
<!-- id="A4E3956C-D4D5-40BD-A373-77A021D273DA_at_umich.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] affinity issues under cpuset torque 1.8.1<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-18 22:48:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24673.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24671.php">Pascal Paschos: "[OMPI users] make check with external libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24673.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24673.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have started using 1.8.1 for some codes (meep in this case) and it sometimes works fine, but in a few cases I am seeing ranks being given overlapping CPU assignments, not always though.
<br>
<p>Example job, default binding options (so by-core right?):
<br>
<p>Assigned nodes, the one in question is nyx5398, we use torque CPU sets, and use TM to spawn.
<br>
<p>[nyx5406:2][nyx5427:2][nyx5506:2][nyx5311:3]
<br>
[nyx5329:4][nyx5398:4][nyx5396:11][nyx5397:11]
<br>
[nyx5409:11][nyx5411:11][nyx5412:3]
<br>
<p>[root_at_nyx5398 ~]# hwloc-bind --get --pid 16065
<br>
0x00000200
<br>
[root_at_nyx5398 ~]# hwloc-bind --get --pid 16066
<br>
0x00000800
<br>
[root_at_nyx5398 ~]# hwloc-bind --get --pid 16067
<br>
0x00000200
<br>
[root_at_nyx5398 ~]# hwloc-bind --get --pid 16068
<br>
0x00000800
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
[root_at_nyx5398 ~]# cat /dev/cpuset/torque/12703230.nyx.engin.umich.edu/cpus 
<br>
8-11
<br>
<p>So torque claims the CPU set setup for the job has 4 cores, but as you can see the ranks were giving identical binding. 
<br>
<p>I checked the pids they were part of the correct CPU set, I also checked, orted:
<br>
<p>[root_at_nyx5398 ~]# hwloc-bind --get --pid 16064
<br>
0x00000f00
<br>
[root_at_nyx5398 ~]# hwloc-calc --intersect PU 16064
<br>
ignored unrecognized argument 16064
<br>
<p>[root_at_nyx5398 ~]# hwloc-calc --intersect PU 0x00000f00
<br>
8,9,10,11
<br>
<p>Which is exactly what I would expect.
<br>
<p>So ummm, i'm lost why this might happen?  What else should I check?  Like I said not all jobs show this behavior.
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
<p><p><p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24672/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24673.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24671.php">Pascal Paschos: "[OMPI users] make check with external libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24673.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24673.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
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
