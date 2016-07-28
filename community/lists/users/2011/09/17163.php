<?
$subject_val = "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 10:17:52 2011" -->
<!-- isoreceived="20110906141752" -->
<!-- sent="Tue, 6 Sep 2011 10:17:45 -0400" -->
<!-- isosent="20110906141745" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity" -->
<!-- id="D8BEC502-804B-4C7B-98DD-C0364110C98A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E65B2F5.2000107_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-06 10:17:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17164.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Previous message:</strong> <a href="17162.php">Jeff Squyres: "Re: [OMPI users] Flow control in OMPI"</a>
<li><strong>In reply to:</strong> <a href="17159.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17164.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Reply:</strong> <a href="17164.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice --
<br>
<p>Should I apply that patch to the OMPI 1.5 series, or should we do a hwloc 1.2.2 release?  I.e., is this broken on all AMD/Magny-Cours machines?
<br>
<p>Should I also do an emergency OMPI 1.5.x release with (essentially) just this fix?  (OMPI 1.5.x currently contains hwloc 1.2.0)
<br>
<p><p>On Sep 6, 2011, at 1:43 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 05/09/2011 21:29, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Dear Ake,
</span><br>
<span class="quotelev2">&gt;&gt; Could you try the attached patch? It's not optimized, but it's probably
</span><br>
<span class="quotelev2">&gt;&gt; going in the right direction.
</span><br>
<span class="quotelev2">&gt;&gt; (and don't forget to remove the above comment-out if you tried it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, now that I've seen your entire topology, I found out that the
</span><br>
<span class="quotelev1">&gt; real fix is the attached patch. This is actually a Magny-Cours specific
</span><br>
<span class="quotelev1">&gt; problem (having 2 NUMA nodes inside each socket is quite unusual). I've
</span><br>
<span class="quotelev1">&gt; already committed this patch to hwloc trunk and backported to the v1.2
</span><br>
<span class="quotelev1">&gt; branch. It could be applied in OMPI 1.5.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The patch that I sent earlier is not needed as long as cgroups don't
</span><br>
<span class="quotelev1">&gt; reduce the available memory (your cgroups don't). I'll fix this other
</span><br>
<span class="quotelev1">&gt; bug properly soon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;fix-cgroup-vs-magnycours.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17164.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Previous message:</strong> <a href="17162.php">Jeff Squyres: "Re: [OMPI users] Flow control in OMPI"</a>
<li><strong>In reply to:</strong> <a href="17159.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17164.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Reply:</strong> <a href="17164.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
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
