<?
$subject_val = "[OMPI users] error building openmpi-dev-685-g881b1dc on Soalris 10";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 12 06:54:19 2015" -->
<!-- isoreceived="20150112115419" -->
<!-- sent="Mon, 12 Jan 2015 12:54:06 +0100 (CET)" -->
<!-- isosent="20150112115406" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] error building openmpi-dev-685-g881b1dc on Soalris 10" -->
<!-- id="201501121154.t0CBs6FO005078_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] error building openmpi-dev-685-g881b1dc on Soalris 10<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-12 06:54:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26166.php">Rolf vandeVaart: "Re: [OMPI users] Segmentation fault when using CUDA Aware feature"</a>
<li><strong>Previous message:</strong> <a href="26164.php">Xun Gong: "[OMPI users] Segmentation fault when using CUDA Aware feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26170.php">Gilles Gouaillardet: "Re: [OMPI users] error building openmpi-dev-685-g881b1dc on Soalris 10"</a>
<li><strong>Reply:</strong> <a href="26170.php">Gilles Gouaillardet: "Re: [OMPI users] error building openmpi-dev-685-g881b1dc on Soalris 10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I tried to build openmpi-dev-685-g881b1dc on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
<br>
x86_64) with gcc-4.9.2 and the new Solaris Studio 12.4 compilers.
<br>
I succedded on Linux but failed on both Solaris systems for both
<br>
compilers with the same error.
<br>
<p>...
<br>
&nbsp;&nbsp;CC       adio/common/ad_prealloc.lo
<br>
&nbsp;&nbsp;CC       adio/common/ad_read.lo
<br>
&quot;/usr/include/sys/feature_tests.h&quot;, line 337: #error: &quot;Compiler or options invalid for pre-UNIX 03 
<br>
X/Open applications and pre-2001 POSIX applications&quot;
<br>
cc: acomp failed for 
<br>
../../../../../../openmpi-dev-685-g881b1dc/ompi/mca/io/romio/romio/adio/common/ad_read.c
<br>
make[4]: *** [adio/common/ad_read.lo] Error 1
<br>
<p><p><p>...
<br>
&nbsp;&nbsp;CC       adio/common/ad_read.lo
<br>
In file included from /usr/include/unistd.h:18:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from 
<br>
../../../../../../openmpi-dev-685-g881b1dc/ompi/mca/io/romio/romio/adio/common/ad_read.c:16:
<br>
/export2/prog/SunOS_sparc/gcc-4.9.2/lib/gcc/sparc-sun-solaris2.10/4.9.2/include-fixed/sys/feature_
<br>
tests.h:346:2: error: #error &quot;Compiler or options invalid for pre-UNIX 03 X/Open applications     
<br>
and pre-2001 POSIX applications&quot;
<br>
&nbsp;#error &quot;Compiler or options invalid for pre-UNIX 03 X/Open applications \
<br>
&nbsp;&nbsp;^
<br>
make[4]: *** [adio/common/ad_read.lo] Error 1
<br>
<p><p>I would be grateful if somebody can fix the problem. Thank you
<br>
very much in advance
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26166.php">Rolf vandeVaart: "Re: [OMPI users] Segmentation fault when using CUDA Aware feature"</a>
<li><strong>Previous message:</strong> <a href="26164.php">Xun Gong: "[OMPI users] Segmentation fault when using CUDA Aware feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26170.php">Gilles Gouaillardet: "Re: [OMPI users] error building openmpi-dev-685-g881b1dc on Soalris 10"</a>
<li><strong>Reply:</strong> <a href="26170.php">Gilles Gouaillardet: "Re: [OMPI users] error building openmpi-dev-685-g881b1dc on Soalris 10"</a>
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
