<?
$subject_val = "Re: [OMPI users] Problem with compilation : statically linked applications";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 14 00:42:19 2010" -->
<!-- isoreceived="20100614044219" -->
<!-- sent="Mon, 14 Jun 2010 10:12:15 +0530" -->
<!-- isosent="20100614044215" -->
<!-- name="Nysal Jan" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with compilation : statically linked applications" -->
<!-- id="AANLkTin5qxSf4r6VnHGU2DAy2aftXoXEgZ4LAPqzgQFZ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinHwAoE-Tf86YSM2s9mIAENcTCDD24HANHr-ZKQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with compilation : statically linked applications<br>
<strong>From:</strong> Nysal Jan (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-14 00:42:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13319.php">Nguyen Toan: "Re: [OMPI users] ompi-restart failed"</a>
<li><strong>Previous message:</strong> <a href="13317.php">HeeJin Kim: "[OMPI users] Problem with compilation : statically linked applications"</a>
<li><strong>In reply to:</strong> <a href="13317.php">HeeJin Kim: "[OMPI users] Problem with compilation : statically linked applications"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
__cxa_get_exception_ptr should be defined in libstdc++ shared library.
<br>
<p>--Nysal
<br>
<p>On Mon, Jun 14, 2010 at 5:51 AM, HeeJin Kim &lt;biduri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had built openmpi-1.4.2 with:
</span><br>
<span class="quotelev1">&gt; configure CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt; --prefix=/home/biduri/program/openmpi --enable-mpi-threads --enable-static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And I have a problem during compilation of q-chem software which uses
</span><br>
<span class="quotelev1">&gt; openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/biduri/program/openmpi/lib/libopen-pal.a(dlopen.o): In function
</span><br>
<span class="quotelev1">&gt; `vm_open':
</span><br>
<span class="quotelev1">&gt; loaders/dlopen.c:(.text+0xad): warning: Using 'dlopen' in statically linked
</span><br>
<span class="quotelev1">&gt; applications requires at runtime the shared libraries from the glibc version
</span><br>
<span class="quotelev1">&gt; used for linking
</span><br>
<span class="quotelev1">&gt; /home/biduri/qchem/par_qchem_op/ccman/ccman.a(properties.o): In function
</span><br>
<span class="quotelev1">&gt; `CalcNonRelaxedTransDipole(Spin, int, int, Spin, int, int, OPDM&amp;, OPDM&amp;,
</span><br>
<span class="quotelev1">&gt; double, int, signed char, _IO_FILE*, signed char, signed char)':
</span><br>
<span class="quotelev1">&gt; properties.C:(.text+0x3df8): undefined reference to
</span><br>
<span class="quotelev1">&gt; `__cxa_get_exception_ptr'
</span><br>
<span class="quotelev1">&gt; /home/biduri/qchem/par_qchem_op/ccman/ccman.a(properties.o): In function
</span><br>
<span class="quotelev1">&gt; `CalcSOCs(AlphaBetaMatr&amp;, BlockTensor&amp;, KMatrix&amp;)':
</span><br>
<span class="quotelev1">&gt; properties.C:(.text+0x52fc): undefined reference to
</span><br>
<span class="quotelev1">&gt; `__cxa_get_exception_ptr'
</span><br>
<span class="quotelev1">&gt; /home/biduri/qchem/par_qchem_op/ccman/ccman.a(ccsd_calc.o): In function
</span><br>
<span class="quotelev1">&gt; `CCSD_Calc::CalculateT(BlockTensor&amp;, BlockTensor&amp;, MutableBlockTensor&amp;,
</span><br>
<span class="quotelev1">&gt; MutableBlockTensor&amp;, signed char)':
</span><br>
<span class="quotelev1">&gt; ccsd_calc.C:(.text+0x2957): undefined reference to
</span><br>
<span class="quotelev1">&gt; `__cxa_get_exception_ptr'
</span><br>
<span class="quotelev1">&gt; /home/biduri/qchem/par_qchem_op/ccman/ccman.a(ccsd_calc.o): In function
</span><br>
<span class="quotelev1">&gt; `CCSD_Calc::CalcLambdaIntermed()':
</span><br>
<span class="quotelev1">&gt; ccsd_calc.C:(.text+0x4409): undefined reference to
</span><br>
<span class="quotelev1">&gt; `__cxa_get_exception_ptr'
</span><br>
<span class="quotelev1">&gt; ............
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Heejin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13318/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13319.php">Nguyen Toan: "Re: [OMPI users] ompi-restart failed"</a>
<li><strong>Previous message:</strong> <a href="13317.php">HeeJin Kim: "[OMPI users] Problem with compilation : statically linked applications"</a>
<li><strong>In reply to:</strong> <a href="13317.php">HeeJin Kim: "[OMPI users] Problem with compilation : statically linked applications"</a>
<!-- nextthread="start" -->
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
