<?
$subject_val = "Re: [OMPI users] Highly variable performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 09:35:52 2010" -->
<!-- isoreceived="20100715133552" -->
<!-- sent="Thu, 15 Jul 2010 09:36:18 -0400" -->
<!-- isosent="20100715133618" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Highly variable performance" -->
<!-- id="9755A6C7-D628-4874-A439-8EC70332E247_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87zkzdtbmw.fsf_at_59A2.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Highly variable performance<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-15 09:36:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13652.php">Jeff Squyres: "Re: [OMPI users] OpenMPI flags conditions"</a>
<li><strong>Previous message:</strong> <a href="13650.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI flags conditions"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13216.php">Jed Brown: "[OMPI users] Highly variable performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13657.php">Jed Brown: "Re: [OMPI users] Highly variable performance"</a>
<li><strong>Reply:</strong> <a href="13657.php">Jed Brown: "Re: [OMPI users] Highly variable performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per my other disclaimer, I'm trolling through my disastrous inbox and finding some orphaned / never-answered emails.  Sorry for the delay!
<br>
<p><p>On Jun 2, 2010, at 4:36 PM, Jed Brown wrote:
<br>
<p><span class="quotelev1">&gt; The nodes of interest are 4-socket Opteron 8380 (quad core, 2.5 GHz), connected
</span><br>
<span class="quotelev1">&gt; with QDR InfiniBand.  The benchmark loops over
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Allgather(localdata,nlocal,MPI_DOUBLE,globaldata,nlocal,MPI_DOUBLE,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with nlocal=10000 (80 KiB messages) 10000 times, so it normally runs in
</span><br>
<span class="quotelev1">&gt; a few seconds.  
</span><br>
<p>Just to be clear -- you're running 8 procs locally on an 8 core node, right?  (Cisco is an Intel partner -- I don't follow the AMD line much)  So this should all be local communication with no external network involved, right?
<br>
<p><span class="quotelev1">&gt; #  JOB       TIME (s)      HOST
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompirun
</span><br>
<span class="quotelev1">&gt; lsf.o240562 killed       8*a6200
</span><br>
<span class="quotelev1">&gt; lsf.o240563 9.2110e+01   8*a6200
</span><br>
<span class="quotelev1">&gt; lsf.o240564 1.5638e+01   8*a6237
</span><br>
<span class="quotelev1">&gt; lsf.o240565 1.3873e+01   8*a6228
</span><br>
<p>Am I reading that right that it's 92 seconds vs. 13 seconds?  Woof!
<br>
<p><span class="quotelev1">&gt; ompirun -mca btl self,sm
</span><br>
<span class="quotelev1">&gt; lsf.o240574 1.6916e+01   8*a6237
</span><br>
<span class="quotelev1">&gt; lsf.o240575 1.7456e+01   8*a6200
</span><br>
<span class="quotelev1">&gt; lsf.o240576 1.4183e+01   8*a6161
</span><br>
<span class="quotelev1">&gt; lsf.o240577 1.3254e+01   8*a6203
</span><br>
<span class="quotelev1">&gt; lsf.o240578 1.8848e+01   8*a6274
</span><br>
<p>13 vs. 18 seconds.  Better, but still dodgy.
<br>
<p><span class="quotelev1">&gt; prun (quadrics)
</span><br>
<span class="quotelev1">&gt; lsf.o240602 1.6168e+01   4*a2108+4*a2109
</span><br>
<span class="quotelev1">&gt; lsf.o240603 1.6746e+01   4*a2110+4*a2111
</span><br>
<span class="quotelev1">&gt; lsf.o240604 1.6371e+01   4*a2108+4*a2109
</span><br>
<span class="quotelev1">&gt; lsf.o240606 1.6867e+01   4*a2110+4*a2111
</span><br>
<p>Nice and consistent, as you mentioned.  And I assume your notation here means that it's across 2 nodes.
<br>
<p><span class="quotelev1">&gt; ompirun -mca btl self,openib
</span><br>
<span class="quotelev1">&gt; lsf.o240776 3.1463e+01   8*a6203
</span><br>
<span class="quotelev1">&gt; lsf.o240777 3.0418e+01   8*a6264
</span><br>
<span class="quotelev1">&gt; lsf.o240778 3.1394e+01   8*a6203
</span><br>
<span class="quotelev1">&gt; lsf.o240779 3.5111e+01   8*a6274
</span><br>
<p>Also much better.  Probably because all messages are equally penalized by going out to the HCA and back.
<br>
<p><span class="quotelev1">&gt; ompirun -mca self,sm,openib
</span><br>
<span class="quotelev1">&gt; lsf.o240851 1.3848e+01   8*a6244
</span><br>
<span class="quotelev1">&gt; lsf.o240852 1.7362e+01   8*a6237
</span><br>
<span class="quotelev1">&gt; lsf.o240854 1.3266e+01   8*a6204
</span><br>
<span class="quotelev1">&gt; lsf.o240855 1.3423e+01   8*a6276
</span><br>
<p>This should be pretty much the same as sm,self, because openib shouldn't be used for any of the communication (i.e., Open MPI should determine that sm is the &quot;best&quot; transport between all the peers and silently discard openib).
<br>
<p><span class="quotelev1">&gt; ompirun
</span><br>
<span class="quotelev1">&gt; lsf.o240858 1.4415e+01   8*a6244
</span><br>
<span class="quotelev1">&gt; lsf.o240859 1.5092e+01   8*a6237
</span><br>
<span class="quotelev1">&gt; lsf.o240860 1.3940e+01   8*a6204
</span><br>
<span class="quotelev1">&gt; lsf.o240861 1.5521e+01   8*a6276
</span><br>
<span class="quotelev1">&gt; lsf.o240903 1.3273e+01   8*a6234
</span><br>
<span class="quotelev1">&gt; lsf.o240904 1.6700e+01   8*a6206
</span><br>
<span class="quotelev1">&gt; lsf.o240905 1.4636e+01   8*a6269
</span><br>
<span class="quotelev1">&gt; lsf.o240906 1.5056e+01   8*a6234
</span><br>
<p>Strange that this would be different than the first one.  It should be functionally equivalent to --mca self,sm,openib.
<br>
<p><span class="quotelev1">&gt; ompirun -mca self,tcp
</span><br>
<span class="quotelev1">&gt; lsf.o240948 1.8504e+01   8*a6234
</span><br>
<span class="quotelev1">&gt; lsf.o240949 1.9317e+01   8*a6207
</span><br>
<span class="quotelev1">&gt; lsf.o240950 1.8964e+01   8*a6234
</span><br>
<span class="quotelev1">&gt; lsf.o240951 2.0764e+01   8*a6207
</span><br>
<p>Variation here isn't too bad.  The slowdown here (compared to sm) is likely because it's going through the TCP loopback stack vs. &quot;directly&quot; going to the peer in shared memory.
<br>
<p>...a quick look through the rest seems to indicate that they're more-or-less consistent with what you showed above.
<br>
<p>Your later mail says:
<br>
<p><span class="quotelev1">&gt; Following up on this, I have partial resolution.  The primary culprit
</span><br>
<span class="quotelev1">&gt; appears to be stale files in a ramdisk non-uniformly distributed across
</span><br>
<span class="quotelev1">&gt; the sockets, thus interactingly poorly with NUMA.  The slow runs
</span><br>
<span class="quotelev1">&gt; invariably have high numa_miss and numa_foreign counts.  I still have
</span><br>
<span class="quotelev1">&gt; trouble making it explain up to a factor of 10 degredation, but it
</span><br>
<span class="quotelev1">&gt; certainly explains a factor of 3.
</span><br>
<p>Try playing with Open MPI's process affinity options, like --bind-to-core (see mpirun(1)). This may help prevent some OS jitter in moving processes around, and allow pinning memory locally to each NUMA node.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="13652.php">Jeff Squyres: "Re: [OMPI users] OpenMPI flags conditions"</a>
<li><strong>Previous message:</strong> <a href="13650.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI flags conditions"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13216.php">Jed Brown: "[OMPI users] Highly variable performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13657.php">Jed Brown: "Re: [OMPI users] Highly variable performance"</a>
<li><strong>Reply:</strong> <a href="13657.php">Jed Brown: "Re: [OMPI users] Highly variable performance"</a>
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
