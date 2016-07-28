<?
$subject_val = "[OMPI users] openmpi-v2.x-dev-650-gb0365f9";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  9 10:19:34 2015" -->
<!-- isoreceived="20151109151934" -->
<!-- sent="Mon, 09 Nov 2015 16:19:08 +0100" -->
<!-- isosent="20151109151908" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-v2.x-dev-650-gb0365f9" -->
<!-- id="5640C77C020000C500066ABA_at_fhfddvz1.rz.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-v2.x-dev-650-gb0365f9<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-09 10:19:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28024.php">Cristian RUIZ: "[OMPI users] Failure handling"</a>
<li><strong>Previous message:</strong> <a href="28022.php">Cristian Camilo Ruiz Sanabria: "Re: [OMPI users] Failure detection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28032.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-v2.x-dev-650-gb0365f9"</a>
<li><strong>Reply:</strong> <a href="28032.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-v2.x-dev-650-gb0365f9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I tried to build openmpi-v2.x-dev-650-gb0365f9 on my
<br>
machines (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE
<br>
Linux 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13 and I got the
<br>
following error on all machines with both compilers.
<br>
<p><p>linpc1 openmpi-v2.x-dev-650-gb0365f9-Linux.x86_64.64_gcc 204 tail -20
<br>
log.make.*
<br>
&nbsp;&nbsp;CC       proc/proc.lo
<br>
In file included from
<br>
../../openmpi-v2.x-dev-650-gb0365f9/ompi/proc/proc.c:38:0:
<br>
../../openmpi-v2.x-dev-650-gb0365f9/ompi/proc/proc.c: In function
<br>
&#195;&#162;ompi_proc_init&#195;&#162;:
<br>
../../openmpi-v2.x-dev-650-gb0365f9/ompi/proc/proc.c:270:32: error:
<br>
&#195;&#162;PMIX_GLOBAL&#195;&#162; undeclared (first use in this function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_MODEX_SEND_VALUE(ret, PMIX_GLOBAL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-v2.x-dev-650-gb0365f9/opal/mca/pmix/pmix.h:61:54: note: in
<br>
definition of macro &#195;&#162;OPAL_MODEX_SEND_VALUE&#195;&#162;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OPAL_SUCCESS != ((r) = opal_pmix.put(sc, &amp;(_kv)))) {   
<br>
&nbsp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-v2.x-dev-650-gb0365f9/ompi/proc/proc.c:270:32: note: each
<br>
undeclared identifier is reported only once for each function it appears
<br>
in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_MODEX_SEND_VALUE(ret, PMIX_GLOBAL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-v2.x-dev-650-gb0365f9/opal/mca/pmix/pmix.h:61:54: note: in
<br>
definition of macro &#195;&#162;OPAL_MODEX_SEND_VALUE&#195;&#162;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OPAL_SUCCESS != ((r) = opal_pmix.put(sc, &amp;(_kv)))) {   
<br>
&nbsp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
make[2]: *** [proc/proc.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-650-gb0365f9-Linux.x86_64.64_gcc/ompi'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-650-gb0365f9-Linux.x86_64.64_gcc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
linpc1 openmpi-v2.x-dev-650-gb0365f9-Linux.x86_64.64_gcc 204 
<br>
<p><p>I would be grateful if somebody can fix the problem. Thank you very much
<br>
for any help in advance.
<br>
<p><p>Best regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28024.php">Cristian RUIZ: "[OMPI users] Failure handling"</a>
<li><strong>Previous message:</strong> <a href="28022.php">Cristian Camilo Ruiz Sanabria: "Re: [OMPI users] Failure detection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28032.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-v2.x-dev-650-gb0365f9"</a>
<li><strong>Reply:</strong> <a href="28032.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-v2.x-dev-650-gb0365f9"</a>
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
