<?
$subject_val = "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 17:02:53 2012" -->
<!-- isoreceived="20121102210253" -->
<!-- sent="Fri, 02 Nov 2012 15:02:48 -0600" -->
<!-- isosent="20121102210248" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers" -->
<!-- id="509434F8.1040305_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50929BC0.5030004_at_soton.ac.uk" -->
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
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-02 17:02:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20629.php">Jeff Squyres: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<li><strong>Previous message:</strong> <a href="20627.php">Orion Poplawski: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<li><strong>In reply to:</strong> <a href="20610.php">J R Jones: "[OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20629.php">Jeff Squyres: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<li><strong>Reply:</strong> <a href="20629.php">Jeff Squyres: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/01/2012 09:56 AM, J R Jones wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to build OpenMPI 1.6.3 with the Intel compilers, but one of the
</span><br>
<span class="quotelev1">&gt; tests in make check fails with a segmentation fault.  I wondered if anyone
</span><br>
<span class="quotelev1">&gt; else has come across this and if so, how they got around it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ icc --version
</span><br>
<span class="quotelev1">&gt; icc (ICC) 12.0.4 20110427
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have logged the output of the build process and include it  as a tarball.
</span><br>
<span class="quotelev1">&gt; The interesting part seems to be this, in make.check:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [blue34:26873] Datatype 0x6794570[] size 36000 align 8 id 0 length 6 used 3
</span><br>
<span class="quotelev1">&gt; true_lb 0 true_ub 39592 (true_extent 39592) lb 0 ub 39592 (extent 39592)
</span><br>
<span class="quotelev1">&gt; nbElems 4500 loops 2 flags 104 (commited )-c-----GD--[---][---]
</span><br>
<span class="quotelev1">&gt;     contain OPAL_FLOAT8
</span><br>
<span class="quotelev1">&gt; --C--------[---][---]      OPAL_LOOP 450 times the next 2 elements extent 88
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]    OPAL_FLOAT8 count 10 disp 0x0 (0) extent 8 (size 80)
</span><br>
<span class="quotelev1">&gt; --C--------[---][---]  OPAL_END_LOOP prev 2 elements first elem displacement 0
</span><br>
<span class="quotelev1">&gt; size of data 80
</span><br>
<span class="quotelev1">&gt; -------G---[---][---]  OPAL_END_LOOP prev 3 elements first elem displacement 0
</span><br>
<span class="quotelev1">&gt; size of data 36000
</span><br>
<span class="quotelev1">&gt; Optimized description
</span><br>
<span class="quotelev1">&gt; --C--------[---][---]      OPAL_LOOP 450 times the next 2 elements extent 88
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]     OPAL_UINT1 count 80 disp 0x0 (0) extent 1 (size 80)
</span><br>
<span class="quotelev1">&gt; --C--------[---][---]  OPAL_END_LOOP prev 2 elements first elem displacement 0
</span><br>
<span class="quotelev1">&gt; size of data 80
</span><br>
<span class="quotelev1">&gt; -------G---[---][---]  OPAL_END_LOOP prev 3 elements first elem displacement 0
</span><br>
<span class="quotelev1">&gt; size of data 36000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 5: 26873 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: opal_datatype_test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone seen this issue before?
</span><br>
<p>Seems to be working okay for me with icc (ICC) 13.0.1 20121010 x86_64, though 
<br>
perhaps it's dependent on compile flags...
<br>
<p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA, Boulder Office                  FAX: 303-415-9702
3380 Mitchell Lane                       orion_at_[hidden]
Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20629.php">Jeff Squyres: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<li><strong>Previous message:</strong> <a href="20627.php">Orion Poplawski: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<li><strong>In reply to:</strong> <a href="20610.php">J R Jones: "[OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20629.php">Jeff Squyres: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<li><strong>Reply:</strong> <a href="20629.php">Jeff Squyres: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
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
