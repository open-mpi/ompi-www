<?
$subject_val = "[OMPI users] Error building openmpi-v1.8.5-40-g7b9e672";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 07:09:02 2015" -->
<!-- isoreceived="20150601110902" -->
<!-- sent="Mon, 1 Jun 2015 13:06:50 +0200 (CEST)" -->
<!-- isosent="20150601110650" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] Error building openmpi-v1.8.5-40-g7b9e672" -->
<!-- id="201506011106.t51B6oqQ008925_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] Error building openmpi-v1.8.5-40-g7b9e672<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-01 07:06:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27010.php">Steve Wise: "[OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Previous message:</strong> <a href="27008.php">Siegmar Gross: "[OMPI users] cc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27018.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-v1.8.5-40-g7b9e672"</a>
<li><strong>Reply:</strong> <a href="27018.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-v1.8.5-40-g7b9e672"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I tried to build openmpi-v1.8.5-40-g7b9e672 on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
<br>
x86_64) with gcc-4.9.2 and Sun C 5.13 and I got the same error
<br>
on all three platforms with both compilers.
<br>
<p>...
<br>
make[2]: Entering directory 
<br>
`/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi/include'
<br>
make  all-am
<br>
make[3]: Entering directory 
<br>
`/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi/include'
<br>
../../../openmpi-v1.8.5-40-g7b9e672/ompi/mpi/fortran/base/gen-mpi-sizeof.pl \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--header=mpif-sizeof.h --ierror=mandatory \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--maxrank=7 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--generate=1 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--real16=1 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--complex32=1
<br>
ln -s 
<br>
../../../openmpi-v1.8.5-40-g7b9e672/opal/include/opal/opal_portable_platform.h 
<br>
mpi_portable_platform.h
<br>
ln: failed to create symbolic link `mpi_portable_platform.h': File exists
<br>
make[3]: *** [mpi_portable_platform.h] Error 1
<br>
make[3]: Leaving directory 
<br>
`/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi/include'
<br>
make[2]: *** [all] Error 2
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi/include'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
linpc1 openmpi-1.8.6-Linux.x86_64.64_gcc 232 
<br>
<p><p>I would be grateful, if somebody could fix the problem. Thank
<br>
you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27010.php">Steve Wise: "[OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Previous message:</strong> <a href="27008.php">Siegmar Gross: "[OMPI users] cc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27018.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-v1.8.5-40-g7b9e672"</a>
<li><strong>Reply:</strong> <a href="27018.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-v1.8.5-40-g7b9e672"</a>
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
