<?
$subject_val = "[OMPI users] Problem building 1.10.1 on OSX:";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 26 11:44:17 2015" -->
<!-- isoreceived="20151126164417" -->
<!-- sent="Thu, 26 Nov 2015 09:44:11 -0700" -->
<!-- isosent="20151126164411" -->
<!-- name="JR Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="[OMPI users] Problem building 1.10.1 on OSX:" -->
<!-- id="565736DB.20804_at_txcorp.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem building 1.10.1 on OSX:<br>
<strong>From:</strong> JR Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-26 11:44:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28112.php">Ralph Castain: "Re: [OMPI users] Problem building 1.10.1 on OSX:"</a>
<li><strong>Previous message:</strong> <a href="28110.php">Ralph Castain: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28112.php">Ralph Castain: "Re: [OMPI users] Problem building 1.10.1 on OSX:"</a>
<li><strong>Reply:</strong> <a href="28112.php">Ralph Castain: "Re: [OMPI users] Problem building 1.10.1 on OSX:"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i.e., Yosemite,
<br>
<p>$ uname -a
<br>
Darwin numbersixe.carys.home 14.5.0 Darwin Kernel Version 14.5.0: Tue 
<br>
Sep  1 21:23:09 PDT 2015; root:xnu-2782.50.1~1/RELEASE_X86_64 x86_64
<br>
<p>but also occurs on El Capitan:
<br>
<p>ln -s 
<br>
/Users/cary/projects/vorpalall/builds/openmpi-1.10.1/static/../ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/otfmerge.c 
<br>
otfmerge.c
<br>
ln -s 
<br>
/Users/cary/projects/vorpalall/builds/openmpi-1.10.1/static/../ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/handler.c 
<br>
handler.c
<br>
&nbsp;&nbsp;&nbsp;CC       otfmerge_mpi-otfmerge.o
<br>
&nbsp;&nbsp;&nbsp;CC       otfmerge_mpi-handler.o
<br>
&nbsp;&nbsp;&nbsp;CCLD     otfmerge-mpi
<br>
ld: library not found for -lmpi
<br>
clang: error: linker command failed with exit code 1 (use -v to see 
<br>
invocation)
<br>
make[10]: *** [otfmerge-mpi] Error 1
<br>
make[9]: *** [all-recursive] Error 1
<br>
make[8]: *** [all-recursive] Error 1
<br>
make[7]: *** [all-recursive] Error 1
<br>
make[6]: *** [all] Error 2
<br>
make[5]: *** [all-recursive] Error 1
<br>
<p>This has been a long-standing bug that gets fixed by any of
<br>
&nbsp;&nbsp;&nbsp;--disable-vt
<br>
&nbsp;&nbsp;&nbsp;not using &quot;make -j&quot;
<br>
&nbsp;&nbsp;&nbsp;restarting the build, i.e., typing make at the point where this fails
<br>
<p>So I suspect a missing dependency.
<br>
<p>John Cary
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28112.php">Ralph Castain: "Re: [OMPI users] Problem building 1.10.1 on OSX:"</a>
<li><strong>Previous message:</strong> <a href="28110.php">Ralph Castain: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28112.php">Ralph Castain: "Re: [OMPI users] Problem building 1.10.1 on OSX:"</a>
<li><strong>Reply:</strong> <a href="28112.php">Ralph Castain: "Re: [OMPI users] Problem building 1.10.1 on OSX:"</a>
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
