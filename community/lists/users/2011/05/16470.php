<?
$subject_val = "[OMPI users] Help: HPL Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  7 04:29:15 2011" -->
<!-- isoreceived="20110507082915" -->
<!-- sent="Sat, 7 May 2011 16:29:10 +0800" -->
<!-- isosent="20110507082910" -->
<!-- name="Lee Eric" -->
<!-- email="openlinuxsource_at_[hidden]" -->
<!-- subject="[OMPI users] Help: HPL Problem" -->
<!-- id="BANLkTin2aMN5qrLsSW22jNZmoNzN1S9SKQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Help: HPL Problem<br>
<strong>From:</strong> Lee Eric (<em>openlinuxsource_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-07 04:29:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16471.php">Dmitry N. Mikushin: "Re: [OMPI users] Help: HPL Problem"</a>
<li><strong>Previous message:</strong> <a href="16469.php">Ralph Castain: "Re: [OMPI users] Error when trying to kill a spawned process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16471.php">Dmitry N. Mikushin: "Re: [OMPI users] Help: HPL Problem"</a>
<li><strong>Reply:</strong> <a href="16471.php">Dmitry N. Mikushin: "Re: [OMPI users] Help: HPL Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I encountered following error messages when I compiled HPL.
<br>
<p>make[2]: Entering directory
<br>
`/pool/measure/hpl-2.0/testing/ptest/Linux_PII_FBLAS'
<br>
/pool/MPI/openmpi/bin/mpif90 -DAdd__ -DF77_INTEGER=int
<br>
-DStringSunStyle  -I/pool/measure/hpl-2.0/include
<br>
-I/pool/measure/hpl-2.0/include/Linux_PII_FBLAS
<br>
-I/pool/MPI/openmpi/include -fomit-frame-pointer -O3 -funroll-loops -W
<br>
-Wall -o /pool/measure/hpl-2.0/bin/Linux_PII_FBLAS/xhpl HPL_pddriver.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HPL_pdinfo.o           HPL_pdtest.o
<br>
/pool/measure/hpl-2.0/lib/Linux_PII_FBLAS/libhpl.a
<br>
/pool/libs/BLAS/blas_LINUX.a /pool/MPI/openmpi/lib/libmpi.so
<br>
/usr/bin/ld: cannot find -ldl
<br>
/usr/bin/ld: cannot find -lnsl
<br>
/usr/bin/ld: cannot find -lutil
<br>
/usr/bin/ld: cannot find -lm
<br>
/usr/bin/ld: cannot find -ldl
<br>
/usr/bin/ld: cannot find -lm
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [dexe.grd] Error 1
<br>
make[2]: Leaving directory `/pool/measure/hpl-2.0/testing/ptest/Linux_PII_FBLAS'
<br>
make[1]: *** [build_tst] Error 2
<br>
make[1]: Leaving directory `/pool/measure/hpl-2.0'
<br>
make: *** [build] Error 2
<br>
<p>And the attachment is the make file I created. OS is Fedora 14 x86_64.
<br>
<p>Could anyone show me where is going wrong? Thanks.
<br>
<p>Eric
<br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16470/Make.Linux_PII_FBLAS">Make.Linux_PII_FBLAS</a>
</ul>
<!-- attachment="Make.Linux_PII_FBLAS" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16471.php">Dmitry N. Mikushin: "Re: [OMPI users] Help: HPL Problem"</a>
<li><strong>Previous message:</strong> <a href="16469.php">Ralph Castain: "Re: [OMPI users] Error when trying to kill a spawned process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16471.php">Dmitry N. Mikushin: "Re: [OMPI users] Help: HPL Problem"</a>
<li><strong>Reply:</strong> <a href="16471.php">Dmitry N. Mikushin: "Re: [OMPI users] Help: HPL Problem"</a>
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
