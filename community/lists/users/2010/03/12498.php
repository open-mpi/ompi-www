<?
$subject_val = "Re: [OMPI users] strange problem with OpenMPI + rankfile + Intelcompiler 11.0.074 + centos/fedora-12";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 31 10:00:44 2010" -->
<!-- isoreceived="20100331140044" -->
<!-- sent="Wed, 31 Mar 2010 10:00:38 -0400" -->
<!-- isosent="20100331140038" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] strange problem with OpenMPI + rankfile + Intelcompiler 11.0.074 + centos/fedora-12" -->
<!-- id="A7D40FC0-AE66-4375-91F1-F6032B940F77_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C89A99DD-1784-49C5-9FD3-6258060DCBB1_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] strange problem with OpenMPI + rankfile + Intelcompiler 11.0.074 + centos/fedora-12<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-31 10:00:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12499.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="12497.php">Jeff Squyres: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="12416.php">Anton Starikov: "[OMPI users] strange problem with OpenMPI + rankfile + Intel compiler 11.0.074 + centos/fedora-12"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 24, 2010, at 12:49 AM, Anton Starikov wrote:
<br>
<p><span class="quotelev1">&gt; Two different OSes: centos 5.4 (2.6.18 kernel) and Fedora-12 (2.6.32 kernel)
</span><br>
<span class="quotelev1">&gt; Two different CPUs: Opteron 248 and Opteron 8356.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; same binary for OpenMPI. Same binary for user code (vasp compiled for older arch)
</span><br>
<p>Are you sure that the code is binary compatible between the two platforms?  Can you repeat the process with native builds of Open MPI and the app for both architectures?
<br>
<p><span class="quotelev1">&gt; When I supply rankfile, then depending on combo of OS and CPU results are different
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; centos+Opt8356 : works
</span><br>
<span class="quotelev1">&gt; centos+Opt248 : works
</span><br>
<span class="quotelev1">&gt; fedora+Opt8356 : works
</span><br>
<span class="quotelev1">&gt; fedora+Opt248 : fails
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rankfile is (in case of Opt248)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank 0=node014 slot=1
</span><br>
<span class="quotelev1">&gt; rank 1=node014 slot=0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried play with formats, leave one slot (and start one process) - it doesn't change result
</span><br>
<span class="quotelev1">&gt; Without rankfile it works on all combos.
</span><br>
<p>Nifty (meaning: ick!).
<br>
<p>I wonder if the processor affinity code is causing the problem here...?  It could be a problem in a heterogeneous environment if the systems are &quot;close&quot; but not &quot;exact&quot; in terms of binary compatibility...?
<br>
<p><span class="quotelev1">&gt; Just in case, all this happens inside of cpuset which always wraps all slots given in rankfile (I just use torque with cpusets and my custom patch for torque which also creates rankfile for openmpi, in this case MPI tasks are bound to particular cores and multithreaded codes limited by given cpuset).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AFAIR, it also works without problem on both hardware setups with 1.3.x/1.4.0 and 2.6.30 kernel from OpenSuSE 11.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Strangely, but when I run OSU benchmarks (osu_bw etc), it works without any problems.
</span><br>
<p>Can you re-run with a trivial test, like MPI hello world and/or ring?  See the examples/ directory.
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
<li><strong>Next message:</strong> <a href="12499.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="12497.php">Jeff Squyres: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="12416.php">Anton Starikov: "[OMPI users] strange problem with OpenMPI + rankfile + Intel compiler 11.0.074 + centos/fedora-12"</a>
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
