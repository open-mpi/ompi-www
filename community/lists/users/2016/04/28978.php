<?
$subject_val = "[OMPI users] Error for openmpi-dev-3868-g178c97b with Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 20 04:48:23 2016" -->
<!-- isoreceived="20160420084823" -->
<!-- sent="Wed, 20 Apr 2016 10:48:05 +0200" -->
<!-- isosent="20160420084805" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="[OMPI users] Error for openmpi-dev-3868-g178c97b with Solaris" -->
<!-- id="1b75acc3-949f-5578-b4ee-e9041ecd5d15_at_informatik.hs-fulda.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Error for openmpi-dev-3868-g178c97b with Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-20 04:48:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28979.php">RYAN RAY: "[OMPI users] OpenSHMEM - Undesired Result !!"</a>
<li><strong>Previous message:</strong> <a href="28977.php">Sreenidhi Bharathkar Ramesh: "[OMPI users] OMPI core/thread scaling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28981.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error for openmpi-dev-3868-g178c97b with Solaris"</a>
<li><strong>Reply:</strong> <a href="28981.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error for openmpi-dev-3868-g178c97b with Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to build openmpi-dev-3868-g178c97b on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux
<br>
12.1 x86_64) with gcc-5.2.0 and Sun C 5.13. I was successful on
<br>
my Linux machine, but I got the following errors on both Solaris
<br>
platforms with both compilers.
<br>
<p><p>tyr openmpi-dev-3868-g178c97b-SunOS.sparc.64_gcc 76 tail -15 
<br>
log.make.SunOS.sparc.64_gcc
<br>
make[2]: Entering directory 
<br>
`/export2/src/openmpi-master/openmpi-dev-3868-g178c97b-SunOS.sparc.64_gcc/opal/mca/memory/patcher'
<br>
&nbsp;&nbsp;&nbsp;CC       memory_patcher_component.lo
<br>
../../../../../openmpi-dev-3868-g178c97b/opal/mca/memory/patcher/memory_patcher_component.c: 
<br>
In function 'intercept_madvise':
<br>
../../../../../openmpi-dev-3868-g178c97b/opal/mca/memory/patcher/memory_patcher_component.c:196:19: 
<br>
error: 'POSIX_MADV_DONTNEED' undeclared (first use in this function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;advice == POSIX_MADV_DONTNEED)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../../openmpi-dev-3868-g178c97b/opal/mca/memory/patcher/memory_patcher_component.c:196:19: 
<br>
note: each undeclared identifier is reported only once for each function it 
<br>
appears in
<br>
../../../../../openmpi-dev-3868-g178c97b/opal/mca/memory/patcher/memory_patcher_component.c:202:41: 
<br>
error: 'SYS_madvise' undeclared (first use in this function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;result = memory_patcher_syscall(SYS_madvise, start, length, advice);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
make[2]: *** [memory_patcher_component.lo] Error 1
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-master/openmpi-dev-3868-g178c97b-SunOS.sparc.64_gcc/opal/mca/memory/patcher'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/export2/src/openmpi-master/openmpi-dev-3868-g178c97b-SunOS.sparc.64_gcc/opal'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-dev-3868-g178c97b-SunOS.sparc.64_gcc 77
<br>
<p><p><p><p>tyr openmpi-dev-3868-g178c97b-SunOS.sparc.64_cc 122 tail -10 
<br>
log.make.SunOS.sparc.64_cc
<br>
make[2]: Entering directory 
<br>
`/export2/src/openmpi-master/openmpi-dev-3868-g178c97b-SunOS.sparc.64_cc/opal/mca/memory/patcher'
<br>
&nbsp;&nbsp;&nbsp;CC       memory_patcher_component.lo
<br>
&quot;../../../../../openmpi-dev-3868-g178c97b/opal/mca/memory/patcher/memory_patcher_component.c&quot;, 
<br>
line 196: undefined symbol: POSIX_MADV_DONTNEED
<br>
&quot;../../../../../openmpi-dev-3868-g178c97b/opal/mca/memory/patcher/memory_patcher_component.c&quot;, 
<br>
line 202: undefined symbol: SYS_madvise
<br>
cc: acomp failed for 
<br>
../../../../../openmpi-dev-3868-g178c97b/opal/mca/memory/patcher/memory_patcher_component.c
<br>
make[2]: *** [memory_patcher_component.lo] Error 1
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-master/openmpi-dev-3868-g178c97b-SunOS.sparc.64_cc/opal/mca/memory/patcher'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/export2/src/openmpi-master/openmpi-dev-3868-g178c97b-SunOS.sparc.64_cc/opal'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-dev-3868-g178c97b-SunOS.sparc.64_cc 123
<br>
<p><p><p><p>I would be grateful if somebody can fix the problem. Thank you very
<br>
much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28979.php">RYAN RAY: "[OMPI users] OpenSHMEM - Undesired Result !!"</a>
<li><strong>Previous message:</strong> <a href="28977.php">Sreenidhi Bharathkar Ramesh: "[OMPI users] OMPI core/thread scaling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28981.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error for openmpi-dev-3868-g178c97b with Solaris"</a>
<li><strong>Reply:</strong> <a href="28981.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error for openmpi-dev-3868-g178c97b with Solaris"</a>
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
