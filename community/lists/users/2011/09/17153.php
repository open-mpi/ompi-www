<?
$subject_val = "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  4 17:31:00 2011" -->
<!-- isoreceived="20110904213100" -->
<!-- sent="Sun, 04 Sep 2011 23:30:53 +0200" -->
<!-- isosent="20110904213053" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity" -->
<!-- id="4E63EE0D.6000706_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1315168522.9050.11.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Date:</strong> 2011-09-04 17:30:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17154.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] problem with MPI-IO at filesizes greater then the 32	Bit limit..."</a>
<li><strong>Previous message:</strong> <a href="17152.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="17151.php">Ake Sandgren: "[OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17156.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Reply:</strong> <a href="17156.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 04/09/2011 22:35, Ake Sandgren a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; On Sun, 2011-09-04 at 22:13 +0200, Brice Goglin wrote: 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you log again on this node (with same cgroups enabled), run
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc-gather-topology &lt;name&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and send the resulting &lt;name&gt;.output and &lt;name&gt;.tar.bz2?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Send them to the hwloc-devel or open a ticket on
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/hwloc">https://svn.open-mpi.org/trac/hwloc</a> (or send them to me in private if
</span><br>
<span class="quotelev2">&gt;&gt; you don't want to subscribe).
</span><br>
<span class="quotelev1">&gt; Since it's a bit late here i'm lazy and sending to you directly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Output from both nodes involved in the batchjob
</span><br>
<span class="quotelev1">&gt; slurm -N 2 --ntasks-per-node=1 ... was what i was using.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope it helps. If not let me know if there is anything else i can do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /&#195;&#133;ke S.
</span><br>
<p>Thanks, I understand the problem but it's not easy to fix. To workaround
<br>
the crash until I come with a real fix, you can comment-out
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology__set_distance_matrix()
<br>
at the end of look_sysfsnode() in topology-linux.c
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17154.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] problem with MPI-IO at filesizes greater then the 32	Bit limit..."</a>
<li><strong>Previous message:</strong> <a href="17152.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="17151.php">Ake Sandgren: "[OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17156.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Reply:</strong> <a href="17156.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
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
