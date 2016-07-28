<?
$subject_val = "[OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 21 10:05:38 2013" -->
<!-- isoreceived="20130921140538" -->
<!-- sent="Sat, 21 Sep 2013 15:59:04 +0200 (CEST)" -->
<!-- isosent="20130921135904" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] Error with &amp;quot;make check&amp;quot; in openmpi-1.7.3a1r29220" -->
<!-- id="201309211359.r8LDx4M9012102_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-21 09:59:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22708.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220"</a>
<li><strong>Previous message:</strong> <a href="22706.php">Siegmar Gross: "Re: [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22708.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220"</a>
<li><strong>Reply:</strong> <a href="22708.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220"</a>
<li><strong>Maybe reply:</strong> <a href="22710.php">Siegmar Gross: "Re: [OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I installed 32- and 64-bit versions of openmpi-1.7.3a1r29220 on
<br>
Solaris Sparc with Sun C 5.12 and gcc.4.8.0. &quot;make check&quot; has the
<br>
following problem with both versions and both compilers.
<br>
&quot;make check&quot; works fine with &quot;openmpi-1.6.6a1r29175&quot;.
<br>
<p>tyr openmpi-1.7.3a1r29220-SunOS.sparc.64_gcc 122
<br>
&nbsp;&nbsp;more log.make-check.SunOS.sparc.64_gcc
<br>
...
<br>
&nbsp;&nbsp;CCLD     ddt_raw
<br>
&nbsp;&nbsp;CC       to_self.o
<br>
../../../openmpi-1.7.3a1r29220/test/datatype/to_self.c: In function
<br>
&nbsp;&nbsp;'create_indexed_constant_gap_ddt':
<br>
../../../openmpi-1.7.3a1r29220/test/datatype/to_self.c:48:5: warning:
<br>
&nbsp;&nbsp;'MPI_Type_struct' is deprecated (declared at ../../ompi/include/mpi.h:1712):
<br>
&nbsp;&nbsp;&nbsp;MPI_Type_struct is superseded by MPI_Type_create_struct in MPI-2.0
<br>
&nbsp;&nbsp;[-Wdeprecated-declarations]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_struct( number, bLength, displ, types, &amp;dt );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../openmpi-1.7.3a1r29220/test/datatype/to_self.c: In function
<br>
&nbsp;&nbsp;'create_indexed_gap_ddt':
<br>
../../../openmpi-1.7.3a1r29220/test/datatype/to_self.c:89:5: warning:
<br>
&nbsp;&nbsp;'MPI_Address' is deprecated (declared at ../../ompi/include/mpi.h:1161):
<br>
&nbsp;&nbsp;&nbsp;MPI_Address is superseded by MPI_Get_address in MPI-2.0
<br>
&nbsp;&nbsp;&nbsp;[-Wdeprecated-declarations]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Address( &amp;(dt[0].is[0].i[0]), &amp;(displ[0]) );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../openmpi-1.7.3a1r29220/test/datatype/to_self.c:90:5: warning:
<br>
&nbsp;&nbsp;'MPI_Address' is deprecated (declared at ../../ompi/include/mpi.h:1161):
<br>
&nbsp;&nbsp;&nbsp;MPI_Address is superseded by MPI_Get_address in MPI-2.0
<br>
&nbsp;&nbsp;&nbsp;[-Wdeprecated-declarations]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Address( &amp;(dt[0].is[0].f), &amp;(displ[1]) );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../openmpi-1.7.3a1r29220/test/datatype/to_self.c:93:5: warning:
<br>
&nbsp;&nbsp;'MPI_Type_struct' is deprecated (declared at ../../ompi/include/mpi.h:1712):
<br>
&nbsp;&nbsp;&nbsp;MPI_Type_struct is superseded by MPI_Type_create_struct in MPI-2.0
<br>
&nbsp;&nbsp;[-Wdeprecated-declarations]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_struct( 2, bLength, displ, types, &amp;dt1 );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../openmpi-1.7.3a1r29220/test/datatype/to_self.c:99:5: warning:
<br>
&nbsp;'MPI_Address' is deprecated (declared at ../../ompi/include/mpi.h:1161):
<br>
&nbsp;&nbsp;MPI_Address is superseded by MPI_Get_address in MPI-2.0
<br>
&nbsp;&nbsp;[-Wdeprecated-declarations]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Address( &amp;(dt[0].v1), &amp;(displ[0]) );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../openmpi-1.7.3a1r29220/test/datatype/to_self.c:100:5: warning:
<br>
&nbsp;&nbsp;'MPI_Address' is deprecated (declared at ../../ompi/include/mpi.h:1161
<br>
/ddt_raw
<br>
...skipping
<br>
PASS: ddt_test
<br>
/bin/bash: line 5: 20020 Bus Error               ${dir}$tst
<br>
FAIL: ddt_raw
<br>
========================================================
<br>
1 of 5 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
make[3]: *** [check-TESTS] Error 1
<br>
make[3]: Leaving directory
<br>
&nbsp;&nbsp;`/export2/src/openmpi-1.7/openmpi-1.7.3a1r29220-SunOS.sparc.64_gcc/test
<br>
/datatype'
<br>
make[2]: *** [check-am] Error 2
<br>
make[2]: Leaving directory
<br>
&nbsp;&nbsp;`/export2/src/openmpi-1.7/openmpi-1.7.3a1r29220-SunOS.sparc.64_gcc/test
<br>
/datatype'
<br>
make[1]: *** [check-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
&nbsp;&nbsp;`/export2/src/openmpi-1.7/openmpi-1.7.3a1r29220-SunOS.sparc.64_gcc/test
<br>
'
<br>
make: *** [check-recursive] Error 1
<br>
<p><p><p>Everything is fine with openmpi-1.6.6a1r29175.
<br>
<p>tyr openmpi-1.6.6a1r29175-SunOS.sparc.64_gcc 126
<br>
&nbsp;&nbsp;more log.make-check.SunOS.sparc.64_gcc
<br>
...
<br>
&nbsp;&nbsp;CCLD   ddt_raw
<br>
&nbsp;&nbsp;CC     to_self.o
<br>
&nbsp;&nbsp;CCLD   to_self
<br>
&nbsp;&nbsp;CC     ddt_pack.o
<br>
&nbsp;&nbsp;CCLD   ddt_pack
<br>
make[3]: Leaving directory
<br>
&nbsp;&nbsp;
<br>
`/export2/src/openmpi-1.6.6/openmpi-1.6.6a1r29175-SunOS.sparc.64_gcc/test/dataty
<br>
pe'
<br>
make  check-TESTS
<br>
/ddt_raw
<br>
...skipping
<br>
raw extraction in 2 microsec
<br>
<span class="quotelev2">&gt;&gt;--------------------------------------------&lt;&lt;
</span><br>
PASS: ddt_raw
<br>
==================
<br>
All 5 tests passed
<br>
==================
<br>
...
<br>
<p><p>I would be grateful if somebody could fix the problem. Thank you
<br>
very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22708.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220"</a>
<li><strong>Previous message:</strong> <a href="22706.php">Siegmar Gross: "Re: [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22708.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220"</a>
<li><strong>Reply:</strong> <a href="22708.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220"</a>
<li><strong>Maybe reply:</strong> <a href="22710.php">Siegmar Gross: "Re: [OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220"</a>
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
