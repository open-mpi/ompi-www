<?
$subject_val = "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  6 07:47:22 2013" -->
<!-- isoreceived="20130406114722" -->
<!-- sent="Sat, 6 Apr 2013 13:40:10 +0200 (CEST)" -->
<!-- isosent="20130406114010" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris" -->
<!-- id="201304061140.r36BeA27001470_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2013-04-06 07:40:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21693.php">Siegmar Gross: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<li><strong>Previous message:</strong> <a href="21691.php">Eric Chamberland: "Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
<li><strong>Maybe in reply to:</strong> <a href="21682.php">Siegmar Gross: "[OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21693.php">Siegmar Gross: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p><span class="quotelev2">&gt; &gt; openSuSE Linux 12.1, x86_64, Sun C 5.12, 32-bit version of openmpi
</span><br>
<span class="quotelev2">&gt; &gt; openSuSE Linux 12.1, x86_64, Sun C 5.12, 64-bit version of openmpi
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;  PPFC     mpi-f08-sizeof.lo
</span><br>
<span class="quotelev2">&gt; &gt;  PPFC     mpi-f08.lo
</span><br>
<span class="quotelev2">&gt; &gt; &quot;../../../../../openmpi-1.9r28290/ompi/mpi/fortran/use-mpi-f08/mpi-f08.F90&quot;, Lin
</span><br>
<span class="quotelev2">&gt; &gt; e = 1, Column = 1: INTERNAL: Interrupt: Segmentation fault
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [mpi-f08.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.32
</span><br>
<span class="quotelev2">&gt; &gt; _cc/ompi/mpi/fortran/use-mpi-f08'
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<p><p>I tried to find out the differences between the current version and
<br>
the last one, which I could build.
<br>
<p><p>linpc1 openmpi-1.9-Linux.x86_64.64_cc 131 grep -- mpi-f08 \
<br>
&nbsp;&nbsp;log.make.Linux.x86_64.64_cc
<br>
&nbsp;&nbsp;PPFC     mpi-f08-types.lo
<br>
&nbsp;&nbsp;PPFC     mpi-f08-interfaces-callbacks.lo
<br>
&nbsp;&nbsp;PPFC     mpi-f08-interfaces.lo
<br>
&nbsp;&nbsp;PPFC     pmpi-f08-interfaces.lo
<br>
Making all in mpi/fortran/use-mpi-f08
<br>
make[2]: Entering directory 
<br>
`/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc/ompi/mpi/fortran/use-mpi-f08'
<br>
&nbsp;&nbsp;PPFC     mpi-f08-sizeof.lo
<br>
&nbsp;&nbsp;PPFC     mpi-f08.lo
<br>
&quot;../../../../../openmpi-1.9r28293/ompi/mpi/fortran/use-mpi-f08/mpi-f08.F90&quot;,
<br>
&nbsp;&nbsp;Line = 1, Column = 1: INTERNAL: Interrupt: Segmentation fault
<br>
make[2]: *** [mpi-f08.lo] Error 1
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc/ompi/mpi/fortran/use-mpi-f08'
<br>
<p><p><p>I have no problem with version openmpi-1.9r28209.
<br>
<p>linpc1 openmpi-1.9-Linux.x86_64.64_cc 136 grep -- mpi-f08 
<br>
../openmpi-1.9-Linux.x86_64.64_cc_r28209/log.make.Linux.x86_64.64_cc
<br>
&nbsp;&nbsp;PPFC     mpi-f08-types.lo
<br>
&nbsp;&nbsp;PPFC     mpi-f08-interfaces-callbacks.lo
<br>
&nbsp;&nbsp;PPFC     mpi-f08-interfaces.lo
<br>
&nbsp;&nbsp;PPFC     pmpi-f08-interfaces.lo
<br>
Making all in mpi/fortran/use-mpi-f08
<br>
make[2]: Entering directory 
<br>
`/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc_r28209/ompi/mpi/fortran/use-mpi-f08
<br>
'
<br>
&nbsp;&nbsp;PPFC     mpi-f08-sizeof.lo
<br>
&nbsp;&nbsp;PPFC     mpi-f08.lo
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc_r28209/ompi/mpi/fortran/use-mpi-f08
<br>
'
<br>
&nbsp;&nbsp;PPFC     mpi-f08-ext-module.lo
<br>
<p><p><p>I get the following differences, when I compare &quot;Makefile&quot; in both directories.
<br>
<p>tyr use-mpi-f08 117 diff 
<br>
/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc/ompi/mpi/fortran/use-mpi-f08/Makefil
<br>
e Makefile
<br>
32c32
<br>
&lt; VPATH = ../../../../../openmpi-1.9r28293/ompi/mpi/fortran/use-mpi-f08
<br>
<pre>
---
&gt; VPATH = ../../../../../openmpi-1.9r28209/ompi/mpi/fortran/use-mpi-f08
362d361
&lt;       $(top_srcdir)/orte/mca/rmaps/rank_file/configure.m4 \
1453c1452
&lt; ACLOCAL = ${SHELL} /export2/src/openmpi-1.9/openmpi-1.9r28293/config/missing --run 
aclocal-1.12
---
&gt; ACLOCAL = ${SHELL} /export2/src/openmpi-1.9/openmpi-1.9r28209/config/missing --run 
aclocal-1.12
1459,1461c1458,1460
&lt; AUTOCONF = ${SHELL} /export2/src/openmpi-1.9/openmpi-1.9r28293/config/missing --run 
autoconf
&lt; AUTOHEADER = ${SHELL} /export2/src/openmpi-1.9/openmpi-1.9r28293/config/missing --run 
autoheader
&lt; AUTOMAKE = ${SHELL} /export2/src/openmpi-1.9/openmpi-1.9r28293/config/missing --run 
automake-1.12
---
&gt; AUTOCONF = ${SHELL} /export2/src/openmpi-1.9/openmpi-1.9r28209/config/missing --run 
autoconf
&gt; AUTOHEADER = ${SHELL} /export2/src/openmpi-1.9/openmpi-1.9r28209/config/missing --run 
autoheader
&gt; AUTOMAKE = ${SHELL} /export2/src/openmpi-1.9/openmpi-1.9r28209/config/missing --run 
automake-1.12
1474c1473
&lt; CPPFLAGS = -I$(top_srcdir) -I$(top_builddir) -I$(top_srcdir)/opal/include 
-I$(top_srcdir)/orte/include -I$(top_srcdir)/ompi/include   
-I/export2/src/openmpi-1.9/openmpi-1.9r28293/opal/mca/hwloc/hwloc152/hwloc/include 
-I/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc/opal/mca/hwloc/hwloc152/hwloc/incl
ude   -I/export2/src/openmpi-1.9/openmpi-1.9r28293/opal/mca/event/libevent2019/libevent 
-I/export2/src/openmpi-1.9/openmpi-1.9r28293/opal/mca/event/libevent2019/libevent/include 
-I/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc/opal/mca/event/libevent2019/libeve
nt/include    
---
&gt; CPPFLAGS = -I$(top_srcdir) -I$(top_builddir) -I$(top_srcdir)/opal/include 
-I$(top_srcdir)/orte/include -I$(top_srcdir)/ompi/include   
-I/export2/src/openmpi-1.9/openmpi-1.9r28209/opal/mca/hwloc/hwloc152/hwloc/include 
-I/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc_r28209/opal/mca/hwloc/hwloc152/hwl
oc/include   
-I/export2/src/openmpi-1.9/openmpi-1.9r28209/opal/mca/event/libevent2019/libevent 
-I/export2/src/openmpi-1.9/openmpi-1.9r28209/opal/mca/event/libevent2019/libevent/include 
-I/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc_r28209/opal/mca/event/libevent2019
/libevent/include    
1520,1521c1519,1520
&lt; HWLOC_top_builddir = 
/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc/opal/mca/hwloc/hwloc152/hwloc
&lt; HWLOC_top_srcdir = 
/export2/src/openmpi-1.9/openmpi-1.9r28293/opal/mca/hwloc/hwloc152/hwloc
---
&gt; HWLOC_top_builddir = 
/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc_r28209/opal/mca/hwloc/hwloc152/hwloc
&gt; HWLOC_top_srcdir = 
/export2/src/openmpi-1.9/openmpi-1.9r28209/opal/mca/hwloc/hwloc152/hwloc
1546c1545
&lt; MAKEINFO = ${SHELL} /export2/src/openmpi-1.9/openmpi-1.9r28293/config/missing --run 
makeinfo
---
&gt; MAKEINFO = ${SHELL} /export2/src/openmpi-1.9/openmpi-1.9r28209/config/missing --run 
makeinfo
1912,1915c1911,1914
&lt; MCA_orte_rmaps_ALL_COMPONENTS =  staged ppr seq resilient round_robin rank_file lama
&lt; MCA_orte_rmaps_ALL_SUBDIRS =  mca/rmaps/staged mca/rmaps/ppr mca/rmaps/seq 
mca/rmaps/resilient mca/rmaps/round_robin mca/rmaps/rank_file mca/rmaps/lama
&lt; MCA_orte_rmaps_DSO_COMPONENTS =  staged ppr seq resilient round_robin rank_file lama
&lt; MCA_orte_rmaps_DSO_SUBDIRS =  mca/rmaps/staged mca/rmaps/ppr mca/rmaps/seq 
mca/rmaps/resilient mca/rmaps/round_robin mca/rmaps/rank_file mca/rmaps/lama
---
&gt; MCA_orte_rmaps_ALL_COMPONENTS =  rank_file staged ppr seq resilient round_robin lama
&gt; MCA_orte_rmaps_ALL_SUBDIRS =  mca/rmaps/rank_file mca/rmaps/staged mca/rmaps/ppr 
mca/rmaps/seq mca/rmaps/resilient mca/rmaps/round_robin mca/rmaps/lama
&gt; MCA_orte_rmaps_DSO_COMPONENTS =  rank_file staged ppr seq resilient round_robin lama
&gt; MCA_orte_rmaps_DSO_SUBDIRS =  mca/rmaps/rank_file mca/rmaps/staged mca/rmaps/ppr 
mca/rmaps/seq mca/rmaps/resilient mca/rmaps/round_robin mca/rmaps/lama
2093c2092
&lt; OMPI_RELEASE_DATE = Apr 05, 2013 (nightly snapshot tarball)
---
&gt; OMPI_RELEASE_DATE = Mar 25, 2013 (nightly snapshot tarball)
2095c2094
&lt; OMPI_REPO_REV = r28293
---
&gt; OMPI_REPO_REV = r28209
2120,2122c2119,2121
&lt; OMPI_TOP_BUILDDIR = /export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc
&lt; OMPI_TOP_SRCDIR = /export2/src/openmpi-1.9/openmpi-1.9r28293
&lt; OMPI_VERSION = 1.9r28293
---
&gt; OMPI_TOP_BUILDDIR = /export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc_r28209
&gt; OMPI_TOP_SRCDIR = /export2/src/openmpi-1.9/openmpi-1.9r28209
&gt; OMPI_VERSION = 1.9r28209
2146c2145
&lt; OPAL_CONFIGURE_DATE = Sat Apr  6 12:03:22 CEST 2013
---
&gt; OPAL_CONFIGURE_DATE = Sat Apr  6 12:43:26 CEST 2013
2164c2163
&lt; OPAL_RELEASE_DATE = Apr 05, 2013 (nightly snapshot tarball)
---
&gt; OPAL_RELEASE_DATE = Mar 25, 2013 (nightly snapshot tarball)
2166,2167c2165,2166
&lt; OPAL_REPO_REV = r28293
&lt; OPAL_VERSION = 1.9r28293
---
&gt; OPAL_REPO_REV = r28209
&gt; OPAL_VERSION = 1.9r28209
2180c2179
&lt; ORTE_RELEASE_DATE = Apr 05, 2013 (nightly snapshot tarball)
---
&gt; ORTE_RELEASE_DATE = Mar 25, 2013 (nightly snapshot tarball)
2182,2183c2181,2182
&lt; ORTE_REPO_REV = r28293
&lt; ORTE_VERSION = 1.9r28293
---
&gt; ORTE_REPO_REV = r28209
&gt; ORTE_VERSION = 1.9r28209
2197c2196
&lt; PACKAGE_STRING = Open MPI 1.9r28293
---
&gt; PACKAGE_STRING = Open MPI 1.9r28209
2200c2199
&lt; PACKAGE_VERSION = 1.9r28293
---
&gt; PACKAGE_VERSION = 1.9r28209
2210c2209
&lt; VERSION = 1.9r28293
---
&gt; VERSION = 1.9r28209
2212,2215c2211,2214
&lt; abs_builddir = 
/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc/ompi/mpi/fortran/use-mpi-f08
&lt; abs_srcdir = 
/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc/../openmpi-1.9r28293/ompi/mpi/fortra
n/use-mpi-f08
&lt; abs_top_builddir = /export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc
&lt; abs_top_srcdir = 
/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc/../openmpi-1.9r28293
---
&gt; abs_builddir = 
/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc_r28209/ompi/mpi/fortran/use-mpi-f08
&gt; abs_srcdir = 
/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc_r28209/../openmpi-1.9r28209/ompi/mpi
/fortran/use-mpi-f08
&gt; abs_top_builddir = /export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc_r28209
&gt; abs_top_srcdir = 
/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc_r28209/../openmpi-1.9r28209
2289c2288
&lt; crs_blcr_CPPFLAGS =   
-I/export2/src/openmpi-1.9/openmpi-1.9r28293/opal/mca/hwloc/hwloc152/hwloc/include 
-I/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc/opal/mca/hwloc/hwloc152/hwloc/incl
ude  
---
&gt; crs_blcr_CPPFLAGS =   
-I/export2/src/openmpi-1.9/openmpi-1.9r28209/opal/mca/hwloc/hwloc152/hwloc/include 
-I/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc_r28209/opal/mca/hwloc/hwloc152/hwl
oc/include  
2293c2292
&lt; crs_dmtcp_CPPFLAGS =   
-I/export2/src/openmpi-1.9/openmpi-1.9r28293/opal/mca/hwloc/hwloc152/hwloc/include 
-I/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc/opal/mca/hwloc/hwloc152/hwloc/incl
ude  
---
&gt; crs_dmtcp_CPPFLAGS =   
-I/export2/src/openmpi-1.9/openmpi-1.9r28209/opal/mca/hwloc/hwloc152/hwloc/include 
-I/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc_r28209/opal/mca/hwloc/hwloc152/hwl
oc/include  
2339c2338
&lt; install_sh = ${SHELL} /export2/src/openmpi-1.9/openmpi-1.9r28293/config/install-sh
---
&gt; install_sh = ${SHELL} /export2/src/openmpi-1.9/openmpi-1.9r28209/config/install-sh
2425c2424
&lt; srcdir = ../../../../../openmpi-1.9r28293/ompi/mpi/fortran/use-mpi-f08
---
&gt; srcdir = ../../../../../openmpi-1.9r28209/ompi/mpi/fortran/use-mpi-f08
2435,2437c2434,2436
&lt; top_ompi_builddir = /export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc
&lt; top_ompi_srcdir = /export2/src/openmpi-1.9/openmpi-1.9r28293
&lt; top_srcdir = ../../../../../openmpi-1.9r28293
---
&gt; top_ompi_builddir = /export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.64_cc_r28209
&gt; top_ompi_srcdir = /export2/src/openmpi-1.9/openmpi-1.9r28209
&gt; top_srcdir = ../../../../../openmpi-1.9r28209
tyr use-mpi-f08 118 
In my opinion the main difference is, that the new Makefile has the
following additional line.
&lt;       $(top_srcdir)/orte/mca/rmaps/rank_file/configure.m4 \
Does anybody see anything else that's different in these two versions
or do you need any other file to track the error? Thank you very much
for any help in advance.
Kind regards
Siegmar
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21693.php">Siegmar Gross: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<li><strong>Previous message:</strong> <a href="21691.php">Eric Chamberland: "Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
<li><strong>Maybe in reply to:</strong> <a href="21682.php">Siegmar Gross: "[OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21693.php">Siegmar Gross: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
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
