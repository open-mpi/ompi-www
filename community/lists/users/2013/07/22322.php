<?
$subject_val = "Re: [OMPI users] knem/openmpi performance?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 15 13:31:50 2013" -->
<!-- isoreceived="20130715173150" -->
<!-- sent="Mon, 15 Jul 2013 17:31:39 +0000" -->
<!-- isosent="20130715173139" -->
<!-- name="Elken, Tom" -->
<!-- email="tom.elken_at_[hidden]" -->
<!-- subject="Re: [OMPI users] knem/openmpi performance?" -->
<!-- id="1182FB2B5679CE4B8BAD97725F014BB7328217E1_at_FMSMSX104.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.GSO.2.00.1307121232500.2549_at_sunserv3" -->
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
<strong>Subject:</strong> Re: [OMPI users] knem/openmpi performance?<br>
<strong>From:</strong> Elken, Tom (<em>tom.elken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-15 13:31:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22323.php">Mudassar Majeed: "[OMPI users] Thought you'd find this interesting"</a>
<li><strong>Previous message:</strong> <a href="22321.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>In reply to:</strong> <a href="22319.php">Mark Dixon: "Re: [OMPI users] knem/openmpi performance?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22326.php">Mark Dixon: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Reply:</strong> <a href="22326.php">Mark Dixon: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Reply:</strong> <a href="22332.php">Dave Love: "Re: [OMPI users] knem/openmpi performance?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I was hoping that someone might have some examples of real application
</span><br>
<span class="quotelev1">&gt; behaviour rather than micro benchmarks. It can be crazy hard to get that
</span><br>
<span class="quotelev1">&gt; information from users.
</span><br>
[Tom] 
<br>
I don't have direct performance information on knem, but with Intel's (formerly QLogic's) PSM layer as delivered in our software stack (Intel True Scale Fabric Suite) known as IFS, there is a kcopy module that assists shared memory MPI bandwidth in a way similar to knem.
<br>
<p>We ran SPEC MPI2007 benchmarks quite a while ago and kcopy showed about a 2% advantage on average over the 13 applications that make up the suite. -- There were codes which did not benefit, but no downside.  This was run over 16 nodes at 8 cores per node, so not very fat nodes.
<br>
<p>More interestingly, on one of our software revs. a few years ago, a bug crept in which disabled kcopy.  A customer filed an issue that one of their apps slowed down by 30%.  Fixing that bug restored the previous performance.  The application was proprietary, so I don't even know what it did in general.  It was run over multiple nodes, so this was not a single-node performance comparison.
<br>
<p>More recently, some customers with large memory nodes, and &gt; 40 cores per node found kcopy was important to the performance of their most important app, a finite element code (I don't have a percentage figure).
<br>
<p>kcopy works with Open MPI over PSM , so using knem instead of kcopy is not likely to speed up that configuration much (unless you get your PSM from OFED or a Linux distro, then that won't include kcopy; we weren't able to get kcopy accepted upstream).  Recent PSM (from OFED 3.5 say) can be built to use knem for kernel-assisted copies.     kcopy also works with the other MPIs that support PSM.
<br>
<p>Hope these anecdotes are relevant to Open MPI users considering knem.
<br>
<p>-Tom Elken  
<br>
<p><p><p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unusually for us, we're putting in a second cluster with the same
</span><br>
<span class="quotelev1">&gt; architecture, CPUs, memory and OS as the last one. I might be able to use
</span><br>
<span class="quotelev1">&gt; this as a bigger stick to get some better feedback. If so, I'll pass it
</span><br>
<span class="quotelev1">&gt; on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Darius Buntinas, Brice Goglin, et al. wrote an excellent paper about
</span><br>
<span class="quotelev2">&gt; &gt; exactly this set of issues; see <a href="http://runtime.bordeaux.inria.fr/knem/">http://runtime.bordeaux.inria.fr/knem/</a>.
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll definitely take a look - thanks again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Mark Dixon                       Email    : m.c.dixon_at_[hidden]
</span><br>
<span class="quotelev1">&gt; HPC/Grid Systems Support         Tel (int): 35429
</span><br>
<span class="quotelev1">&gt; Information Systems Services     Tel (ext): +44(0)113 343 5429
</span><br>
<span class="quotelev1">&gt; University of Leeds, LS2 9JT, UK
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22323.php">Mudassar Majeed: "[OMPI users] Thought you'd find this interesting"</a>
<li><strong>Previous message:</strong> <a href="22321.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>In reply to:</strong> <a href="22319.php">Mark Dixon: "Re: [OMPI users] knem/openmpi performance?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22326.php">Mark Dixon: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Reply:</strong> <a href="22326.php">Mark Dixon: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Reply:</strong> <a href="22332.php">Dave Love: "Re: [OMPI users] knem/openmpi performance?"</a>
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
