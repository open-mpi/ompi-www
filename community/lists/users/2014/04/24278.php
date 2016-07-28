<?
$subject_val = "[OMPI users] Error in openmpi-1.9a1r31561 using gcc or cc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 30 11:12:19 2014" -->
<!-- isoreceived="20140430151219" -->
<!-- sent="Wed, 30 Apr 2014 17:11:34 +0200 (CEST)" -->
<!-- isosent="20140430151134" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] Error in openmpi-1.9a1r31561 using gcc or cc" -->
<!-- id="201404301511.s3UFBYUU012794_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] Error in openmpi-1.9a1r31561 using gcc or cc<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-30 11:11:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24279.php">Ralph Castain: "Re: [OMPI users] Error in openmpi-1.9a1r31561 using gcc or cc"</a>
<li><strong>Previous message:</strong> <a href="24277.php">Siegmar Gross: "[OMPI users] Error in openmpi-1.8.2a1r31556 with Sun C 5.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24279.php">Ralph Castain: "Re: [OMPI users] Error in openmpi-1.9a1r31561 using gcc or cc"</a>
<li><strong>Reply:</strong> <a href="24279.php">Ralph Castain: "Re: [OMPI users] Error in openmpi-1.9a1r31561 using gcc or cc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to install openmpi-1.9a1r31561 on my machines (openSUSE
<br>
Linux 12.1 x86_64, Solaris 10 x86_64, and Solaris 10 Sparc) with
<br>
&quot;Sun C 5.12&quot; and gcc-4.9.0.
<br>
<p>I got the following error on all platforms using gcc.
<br>
<p>tyr openmpi-1.9a1r31561-Linux.x86_64.64_gcc 146 tail -15 log.make.Linux.x86_64.64_gcc 
<br>
&nbsp;&nbsp;CC       group/group_bitmap.lo
<br>
&nbsp;&nbsp;CC       info/info.lo
<br>
&nbsp;&nbsp;CC       message/message.lo
<br>
&nbsp;&nbsp;CC       op/op.lo
<br>
&nbsp;&nbsp;CC       proc/proc.lo
<br>
../../openmpi-1.9a1r31561/ompi/proc/proc.c: In function 'ompi_proc_unpack':
<br>
../../openmpi-1.9a1r31561/ompi/proc/proc.c:797:66: error: expected ';' before ')' token
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void**)&amp;new_arch, OPAL_UINT32);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r31561/ompi/proc/proc.c:797:66: error:
<br>
&nbsp;&nbsp;expected statement before ')' token
<br>
make[2]: *** [proc/proc.lo] Error 1
<br>
make[2]: Leaving directory `.../ompi'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `.../ompi'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-1.9a1r31561-Linux.x86_64.64_gcc 147 
<br>
<p><p><p><p>I got the following error on all platforms using cc.
<br>
<p>tyr openmpi-1.9a1r31561-Linux.x86_64.64_cc 154 tail -8 log.make.Linux.x86_64.64_cc
<br>
&quot;../../openmpi-1.9a1r31561/opal/include/opal/sys/atomic_impl.h&quot;,
<br>
&nbsp;&nbsp;line 217: warning: statement not reached
<br>
&quot;../../openmpi-1.9a1r31561/ompi/proc/proc.c&quot;, line 797:
<br>
&nbsp;&nbsp;syntax error before or at: )
<br>
cc: acomp failed for ../../openmpi-1.9a1r31561/ompi/proc/proc.c
<br>
make[2]: *** [proc/proc.lo] Error 1
<br>
make[2]: Leaving directory `.../ompi'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `.../ompi'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-1.9a1r31561-Linux.x86_64.64_cc 155 
<br>
<p><p>I configured with the following commands.
<br>
<p>../openmpi-1.9a1r31561/configure --prefix=/usr/local/openmpi-1.9_64_gcc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.9_64_gcc/lib64 \
<br>
&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.8.0/bin \
<br>
&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.8.0/include \
<br>
&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.8.0 \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m64 -L/usr/local/gcc-4.9.0/lib64&quot; \
<br>
&nbsp;&nbsp;CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
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
&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;--without-verbs \
<br>
&nbsp;&nbsp;--without-sctp \
<br>
&nbsp;&nbsp;--with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
<br>
<p><p>../openmpi-1.9a1r31561/configure --prefix=/usr/local/openmpi-1.9_64_cc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.9_64_cc/lib64 \
<br>
&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.8.0/bin \
<br>
&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.8.0/include \
<br>
&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.8.0 \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
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
&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;--without-verbs \
<br>
&nbsp;&nbsp;--without-sctp \
<br>
&nbsp;&nbsp;--with-wrapper-cflags=-m64 \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
<br>
<p><p>I would be grateful if somebody could solve the problems. Thank
<br>
you very much for any help in advance.
<br>
<p><p>I got the following warnings using Sun C and no warnings with gcc,
<br>
if somebody is interested in warnings. By the way, I get the same
<br>
warnings with openmpi-1.8.2a1r31556.
<br>
<p>tyr openmpi-1.9a1r31561-Linux.x86_64.64_cc 159 grep warning log.make.Linux.x86_64.64_cc | sort | uniq
<br>
&quot;../../../../../../../openmpi-1.9a1r31561/opal/mca/hwloc/hwloc172/hwloc/src/topology-custom.c&quot;, line 85: warning: 
<br>
initializer will be sign-extended: -1
<br>
&quot;../../../../../../../openmpi-1.9a1r31561/opal/mca/hwloc/hwloc172/hwloc/src/topology-linux.c&quot;, line 2505: warning: 
<br>
initializer will be sign-extended: -1
<br>
&quot;../../../../../../../openmpi-1.9a1r31561/opal/mca/hwloc/hwloc172/hwloc/src/topology-synthetic.c&quot;, line 433: 
<br>
warning: initializer will be sign-extended: -1
<br>
&quot;../../../../../../../openmpi-1.9a1r31561/opal/mca/hwloc/hwloc172/hwloc/src/topology-xml.c&quot;, line 1152: warning: 
<br>
initializer will be sign-extended: -1
<br>
&quot;../../../../../openmpi-1.9a1r31561/opal/include/opal/sys/amd64/atomic.h&quot;, line 136: warning: parameter in inline 
<br>
asm statement unused: %3
<br>
&quot;../../../../../openmpi-1.9a1r31561/opal/include/opal/sys/amd64/atomic.h&quot;, line 182: warning: parameter in inline 
<br>
asm statement unused: %2
<br>
&quot;../../../../../openmpi-1.9a1r31561/opal/include/opal/sys/amd64/atomic.h&quot;, line 203: warning: parameter in inline 
<br>
asm statement unused: %2
<br>
&quot;../../../../../openmpi-1.9a1r31561/opal/include/opal/sys/amd64/atomic.h&quot;, line 224: warning: parameter in inline 
<br>
asm statement unused: %2
<br>
&quot;../../../../../openmpi-1.9a1r31561/opal/include/opal/sys/amd64/atomic.h&quot;, line 245: warning: parameter in inline 
<br>
asm statement unused: %2
<br>
&quot;../../../../../openmpi-1.9a1r31561/opal/include/opal/sys/atomic_impl.h&quot;, line 167: warning: statement not reached
<br>
&quot;../../../../../openmpi-1.9a1r31561/opal/include/opal/sys/atomic_impl.h&quot;, line 192: warning: statement not reached
<br>
&quot;../../../../../openmpi-1.9a1r31561/opal/include/opal/sys/atomic_impl.h&quot;, line 217: warning: statement not reached
<br>
&quot;../../../../../openmpi-1.9a1r31561/orte/mca/odls/default/odls_default_module.c&quot;, line 564: warning: statement not 
<br>
reached
<br>
<p><p><p>&quot;gcc&quot; reports the following warning for openmpi-1.8.2a1r31556.
<br>
I don't see this warning in openmpi-1.9a1r31561.
<br>
<p>tyr openmpi-1.8.2a1r31556-Linux.x86_64.64_gcc 176 grep warning \
<br>
&nbsp;log.make.Linux.x86_64.64_gcc | sort | uniq
<br>
../../../../../openmpi-1.8.2a1r31556/ompi/mpi/java/java/CartComm.java:100:
<br>
&nbsp;&nbsp;warning: no description for @throws
<br>
...
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24279.php">Ralph Castain: "Re: [OMPI users] Error in openmpi-1.9a1r31561 using gcc or cc"</a>
<li><strong>Previous message:</strong> <a href="24277.php">Siegmar Gross: "[OMPI users] Error in openmpi-1.8.2a1r31556 with Sun C 5.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24279.php">Ralph Castain: "Re: [OMPI users] Error in openmpi-1.9a1r31561 using gcc or cc"</a>
<li><strong>Reply:</strong> <a href="24279.php">Ralph Castain: "Re: [OMPI users] Error in openmpi-1.9a1r31561 using gcc or cc"</a>
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
