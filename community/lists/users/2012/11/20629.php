<?
$subject_val = "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 17:09:01 2012" -->
<!-- isoreceived="20121102210901" -->
<!-- sent="Fri, 2 Nov 2012 17:08:56 -0400" -->
<!-- isosent="20121102210856" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers" -->
<!-- id="560C765F-83D5-4EEF-9303-D972A652D52B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="509434F8.1040305_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-02 17:08:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20630.php">Adam DeConinck: "[OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location"</a>
<li><strong>Previous message:</strong> <a href="20628.php">Orion Poplawski: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<li><strong>In reply to:</strong> <a href="20628.php">Orion Poplawski: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20672.php">Tru Huynh: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<li><strong>Reply:</strong> <a href="20672.php">Tru Huynh: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, we have seen bugs in the intel compiler suite before.  We usually advise people to get the latest version of the particular intel compiler suite version that they have a license to obtain.
<br>
<p>I don't know if that is the exact cause of the issue here, but it's definitely something we've seen before.
<br>
<p><p>On Nov 2, 2012, at 5:02 PM, Orion Poplawski wrote:
<br>
<p><span class="quotelev1">&gt; On 11/01/2012 09:56 AM, J R Jones wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to build OpenMPI 1.6.3 with the Intel compilers, but one of the
</span><br>
<span class="quotelev2">&gt;&gt; tests in make check fails with a segmentation fault.  I wondered if anyone
</span><br>
<span class="quotelev2">&gt;&gt; else has come across this and if so, how they got around it?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ icc --version
</span><br>
<span class="quotelev2">&gt;&gt; icc (ICC) 12.0.4 20110427
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have logged the output of the build process and include it  as a tarball.
</span><br>
<span class="quotelev2">&gt;&gt; The interesting part seems to be this, in make.check:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [blue34:26873] Datatype 0x6794570[] size 36000 align 8 id 0 length 6 used 3
</span><br>
<span class="quotelev2">&gt;&gt; true_lb 0 true_ub 39592 (true_extent 39592) lb 0 ub 39592 (extent 39592)
</span><br>
<span class="quotelev2">&gt;&gt; nbElems 4500 loops 2 flags 104 (commited )-c-----GD--[---][---]
</span><br>
<span class="quotelev2">&gt;&gt;    contain OPAL_FLOAT8
</span><br>
<span class="quotelev2">&gt;&gt; --C--------[---][---]      OPAL_LOOP 450 times the next 2 elements extent 88
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[---][---]    OPAL_FLOAT8 count 10 disp 0x0 (0) extent 8 (size 80)
</span><br>
<span class="quotelev2">&gt;&gt; --C--------[---][---]  OPAL_END_LOOP prev 2 elements first elem displacement 0
</span><br>
<span class="quotelev2">&gt;&gt; size of data 80
</span><br>
<span class="quotelev2">&gt;&gt; -------G---[---][---]  OPAL_END_LOOP prev 3 elements first elem displacement 0
</span><br>
<span class="quotelev2">&gt;&gt; size of data 36000
</span><br>
<span class="quotelev2">&gt;&gt; Optimized description
</span><br>
<span class="quotelev2">&gt;&gt; --C--------[---][---]      OPAL_LOOP 450 times the next 2 elements extent 88
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT1 count 80 disp 0x0 (0) extent 1 (size 80)
</span><br>
<span class="quotelev2">&gt;&gt; --C--------[---][---]  OPAL_END_LOOP prev 2 elements first elem displacement 0
</span><br>
<span class="quotelev2">&gt;&gt; size of data 80
</span><br>
<span class="quotelev2">&gt;&gt; -------G---[---][---]  OPAL_END_LOOP prev 3 elements first elem displacement 0
</span><br>
<span class="quotelev2">&gt;&gt; size of data 36000
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh: line 5: 26873 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: opal_datatype_test
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Has anyone seen this issue before?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seems to be working okay for me with icc (ICC) 13.0.1 20121010 x86_64, though perhaps it's dependent on compile flags...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Orion Poplawski
</span><br>
<span class="quotelev1">&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev1">&gt; NWRA, Boulder Office                  FAX: 303-415-9702
</span><br>
<span class="quotelev1">&gt; 3380 Mitchell Lane                       orion_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20630.php">Adam DeConinck: "[OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location"</a>
<li><strong>Previous message:</strong> <a href="20628.php">Orion Poplawski: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<li><strong>In reply to:</strong> <a href="20628.php">Orion Poplawski: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20672.php">Tru Huynh: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<li><strong>Reply:</strong> <a href="20672.php">Tru Huynh: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
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
