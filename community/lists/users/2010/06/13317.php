<?
$subject_val = "[OMPI users] Problem with compilation : statically linked applications";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 13 20:21:35 2010" -->
<!-- isoreceived="20100614002135" -->
<!-- sent="Mon, 14 Jun 2010 09:21:25 +0900" -->
<!-- isosent="20100614002125" -->
<!-- name="HeeJin Kim" -->
<!-- email="biduri_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with compilation : statically linked applications" -->
<!-- id="AANLkTinHwAoE-Tf86YSM2s9mIAENcTCDD24HANHr-ZKQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem with compilation : statically linked applications<br>
<strong>From:</strong> HeeJin Kim (<em>biduri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-13 20:21:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13318.php">Nysal Jan: "Re: [OMPI users] Problem with compilation : statically linked applications"</a>
<li><strong>Previous message:</strong> <a href="13316.php">Zhang Linbo: "[OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13318.php">Nysal Jan: "Re: [OMPI users] Problem with compilation : statically linked applications"</a>
<li><strong>Reply:</strong> <a href="13318.php">Nysal Jan: "Re: [OMPI users] Problem with compilation : statically linked applications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I had built openmpi-1.4.2 with:
<br>
configure CC=icc CXX=icpc F77=ifort FC=ifort
<br>
--prefix=/home/biduri/program/openmpi --enable-mpi-threads --enable-static
<br>
<p>And I have a problem during compilation of q-chem software which uses
<br>
openmpi.
<br>
<p><p>/home/biduri/program/openmpi/lib/libopen-pal.a(dlopen.o): In function
<br>
`vm_open':
<br>
loaders/dlopen.c:(.text+0xad): warning: Using 'dlopen' in statically linked
<br>
applications requires at runtime the shared libraries from the glibc version
<br>
used for linking
<br>
/home/biduri/qchem/par_qchem_op/ccman/ccman.a(properties.o): In function
<br>
`CalcNonRelaxedTransDipole(Spin, int, int, Spin, int, int, OPDM&amp;, OPDM&amp;,
<br>
double, int, signed char, _IO_FILE*, signed char, signed char)':
<br>
properties.C:(.text+0x3df8): undefined reference to
<br>
`__cxa_get_exception_ptr'
<br>
/home/biduri/qchem/par_qchem_op/ccman/ccman.a(properties.o): In function
<br>
`CalcSOCs(AlphaBetaMatr&amp;, BlockTensor&amp;, KMatrix&amp;)':
<br>
properties.C:(.text+0x52fc): undefined reference to
<br>
`__cxa_get_exception_ptr'
<br>
/home/biduri/qchem/par_qchem_op/ccman/ccman.a(ccsd_calc.o): In function
<br>
`CCSD_Calc::CalculateT(BlockTensor&amp;, BlockTensor&amp;, MutableBlockTensor&amp;,
<br>
MutableBlockTensor&amp;, signed char)':
<br>
ccsd_calc.C:(.text+0x2957): undefined reference to `__cxa_get_exception_ptr'
<br>
/home/biduri/qchem/par_qchem_op/ccman/ccman.a(ccsd_calc.o): In function
<br>
`CCSD_Calc::CalcLambdaIntermed()':
<br>
ccsd_calc.C:(.text+0x4409): undefined reference to `__cxa_get_exception_ptr'
<br>
............
<br>
<p>Best,
<br>
Heejin
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13317/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13318.php">Nysal Jan: "Re: [OMPI users] Problem with compilation : statically linked applications"</a>
<li><strong>Previous message:</strong> <a href="13316.php">Zhang Linbo: "[OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13318.php">Nysal Jan: "Re: [OMPI users] Problem with compilation : statically linked applications"</a>
<li><strong>Reply:</strong> <a href="13318.php">Nysal Jan: "Re: [OMPI users] Problem with compilation : statically linked applications"</a>
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
