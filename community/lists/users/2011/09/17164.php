<?
$subject_val = "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 10:35:01 2011" -->
<!-- isoreceived="20110906143501" -->
<!-- sent="Tue, 06 Sep 2011 16:34:56 +0200" -->
<!-- isosent="20110906143456" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity" -->
<!-- id="4E662F90.6060403_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D8BEC502-804B-4C7B-98DD-C0364110C98A_at_cisco.com" -->
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
<strong>Date:</strong> 2011-09-06 10:34:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17165.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>Previous message:</strong> <a href="17163.php">Jeff Squyres: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>In reply to:</strong> <a href="17163.php">Jeff Squyres: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think we'll have problems on all machines with Magny-Cours *and*
<br>
cpuset/cgroups restricting the number of available processors. Not sure
<br>
how widely common this is.
<br>
<p>I just checked the hwloc v1.2 branch changelog. Nothing really matters
<br>
for OMPI except the patch I sent below (commit v1.2_at_3767). The first
<br>
patch I sent about this bug report (commit v1.2_at_3772) is not strictly
<br>
needed because r3767 hides it.
<br>
<p>All other v1.2 commits after 1.2.1 fix things outside of the core hwloc
<br>
lib, or bugs that won't happen in OMPI. So doing a 1.2.2 just for OMPI
<br>
may be a bit overkill. I think you could just apply r3767 (and maybe
<br>
r3772) on top of 1.2.1 in OMPI. Then I don't know if it really deserves
<br>
an emergency OMPI 1.5.x release.
<br>
<p>I was going to write a mail about the roadmap to hwloc-devel, stay
<br>
tuned, we may change our mind for 1.2.2 :)
<br>
<p>Brice
<br>
<p><p><p><p><p>Le 06/09/2011 16:17, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should I apply that patch to the OMPI 1.5 series, or should we do a hwloc 1.2.2 release?  I.e., is this broken on all AMD/Magny-Cours machines?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should I also do an emergency OMPI 1.5.x release with (essentially) just this fix?  (OMPI 1.5.x currently contains hwloc 1.2.0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 6, 2011, at 1:43 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 05/09/2011 21:29, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Ake,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you try the attached patch? It's not optimized, but it's probably
</span><br>
<span class="quotelev3">&gt;&gt;&gt; going in the right direction.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (and don't forget to remove the above comment-out if you tried it).
</span><br>
<span class="quotelev2">&gt;&gt; Actually, now that I've seen your entire topology, I found out that the
</span><br>
<span class="quotelev2">&gt;&gt; real fix is the attached patch. This is actually a Magny-Cours specific
</span><br>
<span class="quotelev2">&gt;&gt; problem (having 2 NUMA nodes inside each socket is quite unusual). I've
</span><br>
<span class="quotelev2">&gt;&gt; already committed this patch to hwloc trunk and backported to the v1.2
</span><br>
<span class="quotelev2">&gt;&gt; branch. It could be applied in OMPI 1.5.5.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The patch that I sent earlier is not needed as long as cgroups don't
</span><br>
<span class="quotelev2">&gt;&gt; reduce the available memory (your cgroups don't). I'll fix this other
</span><br>
<span class="quotelev2">&gt;&gt; bug properly soon.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;fix-cgroup-vs-magnycours.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17165.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>Previous message:</strong> <a href="17163.php">Jeff Squyres: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>In reply to:</strong> <a href="17163.php">Jeff Squyres: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
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
