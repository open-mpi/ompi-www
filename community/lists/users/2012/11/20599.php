<?
$subject_val = "[OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 11:58:24 2012" -->
<!-- isoreceived="20121101155824" -->
<!-- sent="Thu, 1 Nov 2012 15:56:48 +0000" -->
<!-- isosent="20121101155648" -->
<!-- name="J R Jones" -->
<!-- email="j.r.jones_at_[hidden]" -->
<!-- subject="[OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers" -->
<!-- id="50929BC0.5030004_at_soton.ac.uk" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> J R Jones (<em>j.r.jones_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-01 11:56:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20600.php">Ralph Castain: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<li><strong>Previous message:</strong> <a href="20598.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20600.php">Ralph Castain: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<li><strong>Reply:</strong> <a href="20600.php">Ralph Castain: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<li><strong>Reply:</strong> <a href="20617.php">Orion Poplawski: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I am trying to build OpenMPI 1.6.3 with the Intel compilers, but one of 
<br>
the tests in make check fails with a segmentation fault.  I wondered if 
<br>
anyone else has come across this and if so, how they got around it?
<br>
<p>$ icc --version
<br>
icc (ICC) 12.0.4 20110427
<br>
<p>I have logged the output of the build process and include it  as a 
<br>
tarball.  The interesting part seems to be this, in make.check:
<br>
<p>[blue34:26873] Datatype 0x6794570[] size 36000 align 8 id 0 length 6 used 3
<br>
true_lb 0 true_ub 39592 (true_extent 39592) lb 0 ub 39592 (extent 39592)
<br>
nbElems 4500 loops 2 flags 104 (commited )-c-----GD--[---][---]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;contain OPAL_FLOAT8
<br>
--C--------[---][---]      OPAL_LOOP 450 times the next 2 elements extent 88
<br>
--C---P-D--[---][---]    OPAL_FLOAT8 count 10 disp 0x0 (0) extent 8 
<br>
(size 80)
<br>
--C--------[---][---]  OPAL_END_LOOP prev 2 elements first elem 
<br>
displacement 0 size of data 80
<br>
-------G---[---][---]  OPAL_END_LOOP prev 3 elements first elem 
<br>
displacement 0 size of data 36000
<br>
Optimized description
<br>
--C--------[---][---]      OPAL_LOOP 450 times the next 2 elements extent 88
<br>
-cC---P-DB-[---][---]     OPAL_UINT1 count 80 disp 0x0 (0) extent 1 
<br>
(size 80)
<br>
--C--------[---][---]  OPAL_END_LOOP prev 2 elements first elem 
<br>
displacement 0 size of data 80
<br>
-------G---[---][---]  OPAL_END_LOOP prev 3 elements first elem 
<br>
displacement 0 size of data 36000
<br>
<p>/bin/sh: line 5: 26873 Segmentation fault      ${dir}$tst
<br>
FAIL: opal_datatype_test
<br>
<p>Has anyone seen this issue before?
<br>
<p>Thanks
<br>
<p>Jess
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>application/x-bzip attachment: <a href="../../att-20599/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20600.php">Ralph Castain: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<li><strong>Previous message:</strong> <a href="20598.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20600.php">Ralph Castain: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<li><strong>Reply:</strong> <a href="20600.php">Ralph Castain: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<li><strong>Reply:</strong> <a href="20617.php">Orion Poplawski: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
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
