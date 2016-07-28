<?
$subject_val = "[OMPI users] error for openmpi-dev-3762-gf2e33c7 with Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  2 10:49:45 2016" -->
<!-- isoreceived="20160402144945" -->
<!-- sent="Sat, 2 Apr 2016 16:49:05 +0200" -->
<!-- isosent="20160402144905" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] error for openmpi-dev-3762-gf2e33c7 with Solaris" -->
<!-- id="56FFDBE1.5080405_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] error for openmpi-dev-3762-gf2e33c7 with Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-02 10:49:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28869.php">Ralph Castain: "Re: [OMPI users] error for openmpi-dev-3762-gf2e33c7 with Solaris"</a>
<li><strong>Previous message:</strong> <a href="28867.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.x, mpirun and Slurm 15.08 problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28869.php">Ralph Castain: "Re: [OMPI users] error for openmpi-dev-3762-gf2e33c7 with Solaris"</a>
<li><strong>Reply:</strong> <a href="28869.php">Ralph Castain: "Re: [OMPI users] error for openmpi-dev-3762-gf2e33c7 with Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to build openmpi-dev-3762-gf2e33c7 on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux
<br>
12.1 x86_64) with gcc-5.2.0 and Sun C 5.13. I was successful on
<br>
my Linux machine, but I got the following errors on both Solaris
<br>
platforms with both compilers.
<br>
<p><p>GCC-5.2.0
<br>
=========
<br>
<p>sunpc1 openmpi-dev-3762-gf2e33c7-SunOS.x86_64.64_gcc 80 tail -14 log.make.SunOS.x86_64.64_gcc
<br>
&nbsp;&nbsp;&nbsp;CC       base/mpool_base_tree.lo
<br>
&nbsp;&nbsp;&nbsp;CC       base/mpool_base_default.lo
<br>
../../../../openmpi-dev-3762-gf2e33c7/opal/mca/mpool/base/mpool_base_default.c: In function 'mca_mpool_default_alloc':
<br>
../../../../openmpi-dev-3762-gf2e33c7/opal/mca/mpool/base/mpool_base_default.c:38:11: warning: implicit declaration of function 'OPAL_ALIGN_PTR' [-Wimplicit-function-declaration]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = OPAL_ALIGN_PTR((intptr_t) addr + 8, align, void *);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../openmpi-dev-3762-gf2e33c7/opal/mca/mpool/base/mpool_base_default.c:38:54: error: expected expression before 'void'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = OPAL_ALIGN_PTR((intptr_t) addr + 8, align, void *);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
make[2]: *** [base/mpool_base_default.lo] Error 1
<br>
make[2]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3762-gf2e33c7-SunOS.x86_64.64_gcc/opal/mca/mpool'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3762-gf2e33c7-SunOS.x86_64.64_gcc/opal'
<br>
make: *** [all-recursive] Error 1
<br>
sunpc1 openmpi-dev-3762-gf2e33c7-SunOS.x86_64.64_gcc 81
<br>
<p><p><p>SUN C 5.13
<br>
==========
<br>
<p>sunpc1 openmpi-dev-3762-gf2e33c7-SunOS.x86_64.64_cc 83 tail -20 log.make.SunOS.x86_64.64_cc
<br>
&nbsp;&nbsp;&nbsp;CC       base/mpool_base_tree.lo
<br>
&quot;../../../../openmpi-dev-3762-gf2e33c7/opal/include/opal/sys/amd64/atomic.h&quot;, line 163: warning: parameter in inline asm statement unused: %3
<br>
&quot;../../../../openmpi-dev-3762-gf2e33c7/opal/include/opal/sys/amd64/atomic.h&quot;, line 209: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../openmpi-dev-3762-gf2e33c7/opal/include/opal/sys/amd64/atomic.h&quot;, line 230: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../openmpi-dev-3762-gf2e33c7/opal/include/opal/sys/amd64/atomic.h&quot;, line 251: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../openmpi-dev-3762-gf2e33c7/opal/include/opal/sys/amd64/atomic.h&quot;, line 272: warning: parameter in inline asm statement unused: %2
<br>
&nbsp;&nbsp;&nbsp;CC       base/mpool_base_default.lo
<br>
&quot;../../../../openmpi-dev-3762-gf2e33c7/opal/include/opal/sys/amd64/atomic.h&quot;, line 163: warning: parameter in inline asm statement unused: %3
<br>
&quot;../../../../openmpi-dev-3762-gf2e33c7/opal/include/opal/sys/amd64/atomic.h&quot;, line 209: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../openmpi-dev-3762-gf2e33c7/opal/include/opal/sys/amd64/atomic.h&quot;, line 230: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../openmpi-dev-3762-gf2e33c7/opal/include/opal/sys/amd64/atomic.h&quot;, line 251: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../openmpi-dev-3762-gf2e33c7/opal/include/opal/sys/amd64/atomic.h&quot;, line 272: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../openmpi-dev-3762-gf2e33c7/opal/mca/mpool/base/mpool_base_default.c&quot;, line 38: warning: implicit function declaration: OPAL_ALIGN_PTR
<br>
&quot;../../../../openmpi-dev-3762-gf2e33c7/opal/mca/mpool/base/mpool_base_default.c&quot;, line 38: syntax error before or at: void
<br>
cc: acomp failed for ../../../../openmpi-dev-3762-gf2e33c7/opal/mca/mpool/base/mpool_base_default.c
<br>
make[2]: *** [base/mpool_base_default.lo] Error 1
<br>
make[2]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3762-gf2e33c7-SunOS.x86_64.64_cc/opal/mca/mpool'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3762-gf2e33c7-SunOS.x86_64.64_cc/opal'
<br>
make: *** [all-recursive] Error 1
<br>
sunpc1 openmpi-dev-3762-gf2e33c7-SunOS.x86_64.64_cc 84
<br>
<p><p>I would be grateful if somebody can fix the problem. Thank you very
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
<li><strong>Next message:</strong> <a href="28869.php">Ralph Castain: "Re: [OMPI users] error for openmpi-dev-3762-gf2e33c7 with Solaris"</a>
<li><strong>Previous message:</strong> <a href="28867.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.x, mpirun and Slurm 15.08 problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28869.php">Ralph Castain: "Re: [OMPI users] error for openmpi-dev-3762-gf2e33c7 with Solaris"</a>
<li><strong>Reply:</strong> <a href="28869.php">Ralph Castain: "Re: [OMPI users] error for openmpi-dev-3762-gf2e33c7 with Solaris"</a>
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
