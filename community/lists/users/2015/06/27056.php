<?
$subject_val = "[OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 06:44:20 2015" -->
<!-- isoreceived="20150609104420" -->
<!-- sent="Tue, 9 Jun 2015 12:43:50 +0200 (CEST)" -->
<!-- isosent="20150609104350" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks" -->
<!-- id="201506091043.t59AhotT010173_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-09 06:43:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27057.php">Siegmar Gross: "[OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Previous message:</strong> <a href="27055.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27061.php">Nathan Hjelm: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<li><strong>Reply:</strong> <a href="27061.php">Nathan Hjelm: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<li><strong>Maybe reply:</strong> <a href="27075.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<li><strong>Maybe reply:</strong> <a href="27093.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I tried to build openmpi-v1.10-dev-41-g57faa88 on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
<br>
x86_64) with gcc-4.9.2 and Sun C 5.13 and I got the following error
<br>
on all platforms with cc. I have already reported the problem a few
<br>
days ago. Nathan wanted to fix it and I'm not sure if he hasn't had
<br>
time to do it or if it is something different now
<br>
(<a href="https://github.com/open-mpi/ompi-release/pull/299">https://github.com/open-mpi/ompi-release/pull/299</a>). I used the
<br>
following command to configure the package.
<br>
<p>../openmpi-v1.10-dev-59-g4e9cea6/configure --prefix=/usr/local/openmpi-1.10.0_64_gcc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.10.0_64_gcc/lib64 \
<br>
&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.8.0/bin \
<br>
&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.8.0/include \
<br>
&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.8.0 \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
<br>
&nbsp;&nbsp;CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;--enable-mpi-cxx \
<br>
&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;--enable-mpi-java \
<br>
&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;--enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;--without-verbs \
<br>
&nbsp;&nbsp;--with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
<br>
&nbsp;&nbsp;--with-wrapper-cxxflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;--with-wrapper-fcflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
<br>
<p><p>...
<br>
&nbsp;&nbsp;CC       osc_pt2pt_data_move.lo
<br>
../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c: In function 'osc_pt2pt_accumulate_buffer':
<br>
../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c:571:20: error: 'opal_list_item_t' has no member named 'proc_arch'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (proc-&gt;super.proc_arch != ompi_proc_local()-&gt;super.proc_arch) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c:571:58: error: 'opal_list_item_t' has no member named 'proc_arch'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (proc-&gt;super.proc_arch != ompi_proc_local()-&gt;super.proc_arch) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
make[2]: *** [osc_pt2pt_data_move.lo] Error 1
<br>
make[2]: Leaving directory `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-59-g4e9cea6-SunOS.sparc.64_gcc/ompi/mca/osc/pt2pt'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-59-g4e9cea6-SunOS.sparc.64_gcc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-v1.10-dev-59-g4e9cea6-SunOS.sparc.64_gcc 122 
<br>
<p><p><p><p>...
<br>
&nbsp;&nbsp;CC       osc_pt2pt_data_move.lo
<br>
&quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/opal/include/opal/sys/amd64/atomic.h&quot;, line 136: warning: parameter in inline asm statement unused: %3
<br>
&quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/opal/include/opal/sys/amd64/atomic.h&quot;, line 182: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/opal/include/opal/sys/amd64/atomic.h&quot;, line 203: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/opal/include/opal/sys/amd64/atomic.h&quot;, line 224: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/opal/include/opal/sys/amd64/atomic.h&quot;, line 245: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c&quot;, line 571: improper member use: proc_arch
<br>
&quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c&quot;, line 571: improper member use: proc_arch
<br>
cc: acomp failed for ../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c
<br>
make[2]: *** [osc_pt2pt_data_move.lo] Error 1
<br>
make[2]: Leaving directory `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-59-g4e9cea6-Linux.x86_64.64_cc/ompi/mca/osc/pt2pt'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-59-g4e9cea6-Linux.x86_64.64_cc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
linpc1 openmpi-v1.10-dev-59-g4e9cea6-Linux.x86_64.64_cc 197 
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
<li><strong>Next message:</strong> <a href="27057.php">Siegmar Gross: "[OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Previous message:</strong> <a href="27055.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27061.php">Nathan Hjelm: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<li><strong>Reply:</strong> <a href="27061.php">Nathan Hjelm: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<li><strong>Maybe reply:</strong> <a href="27075.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<li><strong>Maybe reply:</strong> <a href="27093.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
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
