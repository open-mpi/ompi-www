<?
$subject_val = "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  5 15:29:10 2011" -->
<!-- isoreceived="20110905192910" -->
<!-- sent="Mon, 05 Sep 2011 21:29:05 +0200" -->
<!-- isosent="20110905192905" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity" -->
<!-- id="4E652301.7000806_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4E63EE0D.6000706_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-05 15:29:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17157.php">Rodrigo Oliveira: "Re: [OMPI users] Flow control in OMPI"</a>
<li><strong>Previous message:</strong> <a href="17155.php">Jai Dayal: "[OMPI users] error on malloc"</a>
<li><strong>In reply to:</strong> <a href="17153.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17159.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Reply:</strong> <a href="17159.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 04/09/2011 23:30, Brice Goglin a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Le 04/09/2011 22:35, Ake Sandgren a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, 2011-09-04 at 22:13 +0200, Brice Goglin wrote: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you log again on this node (with same cgroups enabled), run
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     hwloc-gather-topology &lt;name&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and send the resulting &lt;name&gt;.output and &lt;name&gt;.tar.bz2?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Send them to the hwloc-devel or open a ticket on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/hwloc">https://svn.open-mpi.org/trac/hwloc</a> (or send them to me in private if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you don't want to subscribe).
</span><br>
<span class="quotelev2">&gt;&gt; Since it's a bit late here i'm lazy and sending to you directly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Output from both nodes involved in the batchjob
</span><br>
<span class="quotelev2">&gt;&gt; slurm -N 2 --ntasks-per-node=1 ... was what i was using.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope it helps. If not let me know if there is anything else i can do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /&#195;&#133;ke S.
</span><br>
<span class="quotelev1">&gt; Thanks, I understand the problem but it's not easy to fix. To workaround
</span><br>
<span class="quotelev1">&gt; the crash until I come with a real fix, you can comment-out
</span><br>
<span class="quotelev1">&gt;     hwloc_topology__set_distance_matrix()
</span><br>
<span class="quotelev1">&gt; at the end of look_sysfsnode() in topology-linux.c
</span><br>
<p>Dear Ake,
<br>
Could you try the attached patch? It's not optimized, but it's probably
<br>
going in the right direction.
<br>
(and don't forget to remove the above comment-out if you tried it).
<br>
Thanks
<br>
Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17156/fix-distances-vs-cgroup.patch">fix-distances-vs-cgroup.patch</a>
</ul>
<!-- attachment="fix-distances-vs-cgroup.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17157.php">Rodrigo Oliveira: "Re: [OMPI users] Flow control in OMPI"</a>
<li><strong>Previous message:</strong> <a href="17155.php">Jai Dayal: "[OMPI users] error on malloc"</a>
<li><strong>In reply to:</strong> <a href="17153.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17159.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Reply:</strong> <a href="17159.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
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
