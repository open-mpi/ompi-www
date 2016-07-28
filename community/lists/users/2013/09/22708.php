<?
$subject_val = "Re: [OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 21 10:29:09 2013" -->
<!-- isoreceived="20130921142909" -->
<!-- sent="Sat, 21 Sep 2013 14:29:07 +0000" -->
<!-- isosent="20130921142907" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error with &amp;quot;make check&amp;quot; in openmpi-1.7.3a1r29220" -->
<!-- id="C2888BAE-1A06-4838-A9BD-6BF96CE738D1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201309211359.r8LDx4M9012102_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-21 10:29:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22709.php">basma a.azeem: "[OMPI users] FW: FT problem"</a>
<li><strong>Previous message:</strong> <a href="22707.php">Siegmar Gross: "[OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220"</a>
<li><strong>In reply to:</strong> <a href="22707.php">Siegmar Gross: "[OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22710.php">Siegmar Gross: "Re: [OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can uu send a stack trace from the failed DDT-raw test?
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Sep 21, 2013, at 10:05 AM, &quot;Siegmar Gross&quot; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; today I installed 32- and 64-bit versions of openmpi-1.7.3a1r29220 on
</span><br>
<span class="quotelev1">&gt; Solaris Sparc with Sun C 5.12 and gcc.4.8.0. &quot;make check&quot; has the
</span><br>
<span class="quotelev1">&gt; following problem with both versions and both compilers.
</span><br>
<span class="quotelev1">&gt; &quot;make check&quot; works fine with &quot;openmpi-1.6.6a1r29175&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.7.3a1r29220-SunOS.sparc.64_gcc 122
</span><br>
<span class="quotelev1">&gt;  more log.make-check.SunOS.sparc.64_gcc
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  CCLD     ddt_raw
</span><br>
<span class="quotelev1">&gt;  CC       to_self.o
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.7.3a1r29220/test/datatype/to_self.c: In function
</span><br>
<span class="quotelev1">&gt;  'create_indexed_constant_gap_ddt':
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.7.3a1r29220/test/datatype/to_self.c:48:5: warning:
</span><br>
<span class="quotelev1">&gt;  'MPI_Type_struct' is deprecated (declared at ../../ompi/include/mpi.h:1712):
</span><br>
<span class="quotelev1">&gt;   MPI_Type_struct is superseded by MPI_Type_create_struct in MPI-2.0
</span><br>
<span class="quotelev1">&gt;  [-Wdeprecated-declarations]
</span><br>
<span class="quotelev1">&gt;     MPI_Type_struct( number, bLength, displ, types, &amp;dt );
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.7.3a1r29220/test/datatype/to_self.c: In function
</span><br>
<span class="quotelev1">&gt;  'create_indexed_gap_ddt':
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.7.3a1r29220/test/datatype/to_self.c:89:5: warning:
</span><br>
<span class="quotelev1">&gt;  'MPI_Address' is deprecated (declared at ../../ompi/include/mpi.h:1161):
</span><br>
<span class="quotelev1">&gt;   MPI_Address is superseded by MPI_Get_address in MPI-2.0
</span><br>
<span class="quotelev1">&gt;   [-Wdeprecated-declarations]
</span><br>
<span class="quotelev1">&gt;     MPI_Address( &amp;(dt[0].is[0].i[0]), &amp;(displ[0]) );
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.7.3a1r29220/test/datatype/to_self.c:90:5: warning:
</span><br>
<span class="quotelev1">&gt;  'MPI_Address' is deprecated (declared at ../../ompi/include/mpi.h:1161):
</span><br>
<span class="quotelev1">&gt;   MPI_Address is superseded by MPI_Get_address in MPI-2.0
</span><br>
<span class="quotelev1">&gt;   [-Wdeprecated-declarations]
</span><br>
<span class="quotelev1">&gt;     MPI_Address( &amp;(dt[0].is[0].f), &amp;(displ[1]) );
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.7.3a1r29220/test/datatype/to_self.c:93:5: warning:
</span><br>
<span class="quotelev1">&gt;  'MPI_Type_struct' is deprecated (declared at ../../ompi/include/mpi.h:1712):
</span><br>
<span class="quotelev1">&gt;   MPI_Type_struct is superseded by MPI_Type_create_struct in MPI-2.0
</span><br>
<span class="quotelev1">&gt;  [-Wdeprecated-declarations]
</span><br>
<span class="quotelev1">&gt;     MPI_Type_struct( 2, bLength, displ, types, &amp;dt1 );
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.7.3a1r29220/test/datatype/to_self.c:99:5: warning:
</span><br>
<span class="quotelev1">&gt; 'MPI_Address' is deprecated (declared at ../../ompi/include/mpi.h:1161):
</span><br>
<span class="quotelev1">&gt;  MPI_Address is superseded by MPI_Get_address in MPI-2.0
</span><br>
<span class="quotelev1">&gt;  [-Wdeprecated-declarations]
</span><br>
<span class="quotelev1">&gt;     MPI_Address( &amp;(dt[0].v1), &amp;(displ[0]) );
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.7.3a1r29220/test/datatype/to_self.c:100:5: warning:
</span><br>
<span class="quotelev1">&gt;  'MPI_Address' is deprecated (declared at ../../ompi/include/mpi.h:1161
</span><br>
<span class="quotelev1">&gt; /ddt_raw
</span><br>
<span class="quotelev1">&gt; ...skipping
</span><br>
<span class="quotelev1">&gt; PASS: ddt_test
</span><br>
<span class="quotelev1">&gt; /bin/bash: line 5: 20020 Bus Error               ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: ddt_raw
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; 1 of 5 tests failed
</span><br>
<span class="quotelev1">&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; make[3]: *** [check-TESTS] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt;  `/export2/src/openmpi-1.7/openmpi-1.7.3a1r29220-SunOS.sparc.64_gcc/test
</span><br>
<span class="quotelev1">&gt; /datatype'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [check-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;  `/export2/src/openmpi-1.7/openmpi-1.7.3a1r29220-SunOS.sparc.64_gcc/test
</span><br>
<span class="quotelev1">&gt; /datatype'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;  `/export2/src/openmpi-1.7/openmpi-1.7.3a1r29220-SunOS.sparc.64_gcc/test
</span><br>
<span class="quotelev1">&gt; '
</span><br>
<span class="quotelev1">&gt; make: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything is fine with openmpi-1.6.6a1r29175.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.6.6a1r29175-SunOS.sparc.64_gcc 126
</span><br>
<span class="quotelev1">&gt;  more log.make-check.SunOS.sparc.64_gcc
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  CCLD   ddt_raw
</span><br>
<span class="quotelev1">&gt;  CC     to_self.o
</span><br>
<span class="quotelev1">&gt;  CCLD   to_self
</span><br>
<span class="quotelev1">&gt;  CC     ddt_pack.o
</span><br>
<span class="quotelev1">&gt;  CCLD   ddt_pack
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.6.6/openmpi-1.6.6a1r29175-SunOS.sparc.64_gcc/test/dataty
</span><br>
<span class="quotelev1">&gt; pe'
</span><br>
<span class="quotelev1">&gt; make  check-TESTS
</span><br>
<span class="quotelev1">&gt; /ddt_raw
</span><br>
<span class="quotelev1">&gt; ...skipping
</span><br>
<span class="quotelev1">&gt; raw extraction in 2 microsec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------&lt;&lt;
</span><br>
<span class="quotelev1">&gt; PASS: ddt_raw
</span><br>
<span class="quotelev1">&gt; ==================
</span><br>
<span class="quotelev1">&gt; All 5 tests passed
</span><br>
<span class="quotelev1">&gt; ==================
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful if somebody could fix the problem. Thank you
</span><br>
<span class="quotelev1">&gt; very much for any help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22709.php">basma a.azeem: "[OMPI users] FW: FT problem"</a>
<li><strong>Previous message:</strong> <a href="22707.php">Siegmar Gross: "[OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220"</a>
<li><strong>In reply to:</strong> <a href="22707.php">Siegmar Gross: "[OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22710.php">Siegmar Gross: "Re: [OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220"</a>
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
