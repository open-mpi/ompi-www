<?
$subject_val = "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 01:43:25 2011" -->
<!-- isoreceived="20110906054325" -->
<!-- sent="Tue, 06 Sep 2011 07:43:17 +0200" -->
<!-- isosent="20110906054317" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity" -->
<!-- id="4E65B2F5.2000107_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4E652301.7000806_at_inria.fr" -->
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
<strong>Date:</strong> 2011-09-06 01:43:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17160.php">Simone Pellegrini: "[OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>Previous message:</strong> <a href="17158.php">bhimesh akula: "Re: [OMPI users] I want to check our own modified Ofed stack with MPI application"</a>
<li><strong>In reply to:</strong> <a href="17156.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17163.php">Jeff Squyres: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Reply:</strong> <a href="17163.php">Jeff Squyres: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 05/09/2011 21:29, Brice Goglin a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Dear Ake,
</span><br>
<span class="quotelev1">&gt; Could you try the attached patch? It's not optimized, but it's probably
</span><br>
<span class="quotelev1">&gt; going in the right direction.
</span><br>
<span class="quotelev1">&gt; (and don't forget to remove the above comment-out if you tried it).
</span><br>
<p>Actually, now that I've seen your entire topology, I found out that the
<br>
real fix is the attached patch. This is actually a Magny-Cours specific
<br>
problem (having 2 NUMA nodes inside each socket is quite unusual). I've
<br>
already committed this patch to hwloc trunk and backported to the v1.2
<br>
branch. It could be applied in OMPI 1.5.5.
<br>
<p>The patch that I sent earlier is not needed as long as cgroups don't
<br>
reduce the available memory (your cgroups don't). I'll fix this other
<br>
bug properly soon.
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17159/fix-cgroup-vs-magnycours.patch">fix-cgroup-vs-magnycours.patch</a>
</ul>
<!-- attachment="fix-cgroup-vs-magnycours.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17160.php">Simone Pellegrini: "[OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>Previous message:</strong> <a href="17158.php">bhimesh akula: "Re: [OMPI users] I want to check our own modified Ofed stack with MPI application"</a>
<li><strong>In reply to:</strong> <a href="17156.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17163.php">Jeff Squyres: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Reply:</strong> <a href="17163.php">Jeff Squyres: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
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
