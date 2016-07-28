<?
$subject_val = "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  7 08:40:15 2013" -->
<!-- isoreceived="20130407124015" -->
<!-- sent="Sun, 7 Apr 2013 14:33:38 +0200 (CEST)" -->
<!-- isosent="20130407123338" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris" -->
<!-- id="201304071233.r37CXcV2019041_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris" -->
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
<strong>Subject:</strong> Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-07 08:33:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21694.php">George Bosilca: "Re: [OMPI users] OpenMPI collective algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="21692.php">Siegmar Gross: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<li><strong>Maybe in reply to:</strong> <a href="21682.php">Siegmar Gross: "[OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p><span class="quotelev1">&gt; Sigh....okay, I fixed it again. Hopefully now it will build
</span><br>
<p>I get the following error on Solaris 10 Sparc with openmpi-1.9.r28297
<br>
and Sun c 5.12.
<br>
<p>...
<br>
tyr openmpi-1.9-SunOS.sparc.64_cc 120 tail -35 log.make.SunOS.sparc.64_cc
<br>
&nbsp;&nbsp;CC       pialltoallw_f.lo
<br>
if test ! -r pibarrier_f.c ; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;pname=`echo pibarrier_f.c | cut -b '2-'` ; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ln -s ../../../../../../openmpi-1.9r28297/ompi/mpi/fortran/mpif-h/$pname 
<br>
pibarrier_f.c ; \
<br>
fi
<br>
&nbsp;&nbsp;CC       pibarrier_f.lo
<br>
if test ! -r pibcast_f.c ; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;pname=`echo pibcast_f.c | cut -b '2-'` ; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ln -s ../../../../../../openmpi-1.9r28297/ompi/mpi/fortran/mpif-h/$pname 
<br>
pibcast_f.c ; \
<br>
fi
<br>
&nbsp;&nbsp;CC       pibcast_f.lo
<br>
mv: cannot stat 'pibcast_f.loT': No such file or directory
<br>
if test ! -r pibsend_f.c ; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;pname=`echo pibsend_f.c | cut -b '2-'` ; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ln -s ../../../../../../openmpi-1.9r28297/ompi/mpi/fortran/mpif-h/$pname 
<br>
pibsend_f.c ; \
<br>
fi
<br>
&nbsp;&nbsp;CC       pibsend_f.lo
<br>
mv: cannot stat 'pibsend_f.loT': No such file or directory
<br>
if test ! -r piexscan_f.c ; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;pname=`echo piexscan_f.c | cut -b '2-'` ; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ln -s ../../../../../../openmpi-1.9r28297/ompi/mpi/fortran/mpif-h/$pname 
<br>
piexscan_f.c ; \
<br>
fi
<br>
&nbsp;&nbsp;CC       piexscan_f.lo
<br>
/opt/solstudio12.3/prod/bin/fbe: No such file or directory
<br>
/opt/solstudio12.3/prod/bin/fbe: error: write error on output file 
<br>
&quot;.libs/piexscan_f.o&quot;
<br>
Failure in /opt/solstudio12.3/prod/bin/fbe, status = 0x100
<br>
Fatal Error exec'ing /opt/solstudio12.3/prod/bin/fbe
<br>
cc: acomp failed for piexscan_f.c
<br>
make[3]: *** [piexscan_f.lo] Error 1
<br>
make[3]: Leaving directory 
<br>
`/export2/src/openmpi-1.9/openmpi-1.9-SunOS.sparc.64_cc/ompi/mpi/fortran/mpif-h/
<br>
profile'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-1.9/openmpi-1.9-SunOS.sparc.64_cc/ompi/mpi/fortran/mpif-h'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/export2/src/openmpi-1.9/openmpi-1.9-SunOS.sparc.64_cc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-1.9-SunOS.sparc.64_cc 121 
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; On Apr 6, 2013, at 3:41 AM, Siegmar Gross 
</span><br>
&lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; today I tried to install openmpi-1.9r28290 and got the following errors.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Solaris 10, Sparc, Sun C 5.12, 32-bit version of openmpi
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Solaris 10, x86_64, Sun C 5.12, 32-bit version of openmpi
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Solaris 10, Sparc, Sun C 5.12, 64-bit version of openmpi
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Solaris 10, x86_64, Sun C 5.12, 64-bit version of openmpi
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ---------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; CC       topology-solaris.lo
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
&quot;../../../../../../../openmpi-1.9r28290/opal/mca/hwloc/hwloc152/hwloc/src/topolo
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; gy-solaris.c&quot;, line 226: undefined symbol: binding
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
&quot;../../../../../../../openmpi-1.9r28290/opal/mca/hwloc/hwloc152/hwloc/src/topolo
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; gy-solaris.c&quot;, line 227: undefined symbol: hwloc_set
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
&quot;../../../../../../../openmpi-1.9r28290/opal/mca/hwloc/hwloc152/hwloc/src/topolo
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; gy-solaris.c&quot;, line 227: warning: improper pointer/integer combination: 
</span><br>
arg #1
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; cc: acomp failed for 
</span><br>
../../../../../../../openmpi-1.9r28290/opal/mca/hwloc/hwloc
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 152/hwloc/src/topology-solaris.c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make[4]: *** [topology-solaris.lo] Error 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Found a missing variable declaration - try with r28293 or above.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Your fix solved &quot;undefined symbol: binding&quot;, but I still get
</span><br>
<span class="quotelev2">&gt; &gt; &quot;undefined symbol: hwloc_set&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr openmpi-1.9-SunOS.sparc.64_cc 40 tail -14 log.make.SunOS.sparc.64_cc
</span><br>
<span class="quotelev2">&gt; &gt;  CC       misc.lo
</span><br>
<span class="quotelev2">&gt; &gt;  CC       topology-solaris.lo
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
&quot;../../../../../../../openmpi-1.9r28293/opal/mca/hwloc/hwloc152/hwloc/src/topolo
<br>
gy-solaris.c&quot;, line 228: undefined 
<br>
<span class="quotelev2">&gt; &gt; symbol: hwloc_set
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
&quot;../../../../../../../openmpi-1.9r28293/opal/mca/hwloc/hwloc152/hwloc/src/topolo
<br>
gy-solaris.c&quot;, line 228: warning: 
<br>
<span class="quotelev2">&gt; &gt; improper pointer/integer combination: arg #1
</span><br>
<span class="quotelev2">&gt; &gt; cc: acomp failed for 
</span><br>
../../../../../../../openmpi-1.9r28293/opal/mca/hwloc/hwloc152/hwloc/src/topolog
<br>
y-solaris.c
<br>
<span class="quotelev2">&gt; &gt; make[4]: *** [topology-solaris.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21694.php">George Bosilca: "Re: [OMPI users] OpenMPI collective algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="21692.php">Siegmar Gross: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<li><strong>Maybe in reply to:</strong> <a href="21682.php">Siegmar Gross: "[OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
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
