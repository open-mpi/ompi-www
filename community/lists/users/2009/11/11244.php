<?
$subject_val = "Re: [OMPI users] Program hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 20 03:20:30 2009" -->
<!-- isoreceived="20091120082030" -->
<!-- sent="Fri, 20 Nov 2009 10:20:02 +0200" -->
<!-- isosent="20091120082002" -->
<!-- name="vasilis gkanis" -->
<!-- email="gkanis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program hangs" -->
<!-- id="200911201020.02585.gkanis_at_ipta.demokritos.gr" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="b5d787260911191750p5b5a28d8q301bd46cfab95ac4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program hangs<br>
<strong>From:</strong> vasilis gkanis (<em>gkanis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-20 03:20:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11245.php">Rob Latham: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Previous message:</strong> <a href="11243.php">Jiaye Li: "[OMPI users] Program hangs"</a>
<li><strong>In reply to:</strong> <a href="11243.php">Jiaye Li: "[OMPI users] Program hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11247.php">Jiaye Li: "[OMPI users] Program hangs"</a>
<li><strong>Reply:</strong> <a href="11247.php">Jiaye Li: "[OMPI users] Program hangs"</a>
<li><strong>Reply:</strong> <a href="11261.php">Eugene Loh: "Re: [OMPI users] Program hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I also experience a similar problem with the MUMPS solver, when I run it on a 
<br>
cluster. After several hours of running the code does not produce any results, 
<br>
although the command top shows that the program occupies 100% of the CPU.
<br>
<p>The difference here, however, is that the same program runs fine on my PC. The 
<br>
differences between my PC and the cluster are:
<br>
1) 32bit vs 64-bit(cluster)
<br>
2) intel compiler vs portland compiler(cluster)
<br>
<p>Any thoughts on what might cause this?
<br>
<p>Thank you,
<br>
Vasilis
<br>
<p><p>On Friday 20 November 2009 03:50:17 am Jiaye Li wrote:
<br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I installed openmpi-1.3.3 on my single node(cpu) intel 64bit quad-core
</span><br>
<span class="quotelev1">&gt; machine. The compiler info is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***************************************************************************
</span><br>
<span class="quotelev1">&gt; *********************************** intel-icc101018-10.1.018-1.i386
</span><br>
<span class="quotelev1">&gt; libgcc-4.4.0-4.i586
</span><br>
<span class="quotelev1">&gt; gcc-4.4.0-4.i586
</span><br>
<span class="quotelev1">&gt; gcc-gfortran-4.4.0-4.i586
</span><br>
<span class="quotelev1">&gt; gcc-c++-4.4.0-4.i586
</span><br>
<span class="quotelev1">&gt; intel-ifort101018-10.1.018-1.i386
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the architecture is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; processor    : 0
</span><br>
<span class="quotelev1">&gt; vendor_id    : GenuineIntel
</span><br>
<span class="quotelev1">&gt; cpu family    : 6
</span><br>
<span class="quotelev1">&gt; model        : 23
</span><br>
<span class="quotelev1">&gt; model name    : Intel(R) Core(TM)2 Quad CPU    Q9550  @ 2.83GHz
</span><br>
<span class="quotelev1">&gt; stepping    : 10
</span><br>
<span class="quotelev1">&gt; cpu MHz        : 2825.937
</span><br>
<span class="quotelev1">&gt; cache size    : 6144 KB
</span><br>
<span class="quotelev1">&gt; physical id    : 0
</span><br>
<span class="quotelev1">&gt; siblings    : 4
</span><br>
<span class="quotelev1">&gt; core id        : 0
</span><br>
<span class="quotelev1">&gt; cpu cores    : 4
</span><br>
<span class="quotelev1">&gt; apicid        : 0
</span><br>
<span class="quotelev1">&gt; initial apicid    : 0
</span><br>
<span class="quotelev1">&gt; fdiv_bug    : no
</span><br>
<span class="quotelev1">&gt; hlt_bug        : no
</span><br>
<span class="quotelev1">&gt; f00f_bug    : no
</span><br>
<span class="quotelev1">&gt; coma_bug    : no
</span><br>
<span class="quotelev1">&gt; fpu        : yes
</span><br>
<span class="quotelev1">&gt; fpu_exception    : yes
</span><br>
<span class="quotelev1">&gt; cpuid level    : 13
</span><br>
<span class="quotelev1">&gt; wp        : yes
</span><br>
<span class="quotelev1">&gt; flags        : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca
</span><br>
<span class="quotelev1">&gt;  cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe nx lm
</span><br>
<span class="quotelev1">&gt;  constant_tsc arch_perfmon pebs bts pni dtes64 monitor ds_cpl vmx smx est
</span><br>
<span class="quotelev1">&gt;  tm2 ssse3 cx16 xtpr pdcm sse4_1 xsave lahf_lm tpr_shadow vnmi flexpriority
</span><br>
<span class="quotelev1">&gt; bogomips    : 5651.87
</span><br>
<span class="quotelev1">&gt; clflush size    : 64
</span><br>
<span class="quotelev1">&gt; power management:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***************************************************************************
</span><br>
<span class="quotelev1">&gt; ***********************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compiled PWscf program with openmpi and tested the program. At the
</span><br>
<span class="quotelev1">&gt; beginning, the execution of  PW went on well, but after about 10 h, when
</span><br>
<span class="quotelev1">&gt;  the program is going to finish. The program hang there, but the cpu time
</span><br>
<span class="quotelev1">&gt;  is still occupied. (100% taken up by the program). There seems to be
</span><br>
<span class="quotelev1">&gt;  something wrong, somewhere. Any ideas? Thank you in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the config.log of Ompi:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***************************************************************************
</span><br>
<span class="quotelev1">&gt; *********************************** This file contains any messages
</span><br>
<span class="quotelev1">&gt;  produced by compilers while
</span><br>
<span class="quotelev1">&gt; running configure, to aid debugging if configure makes a mistake.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It was created by Open MPI configure 1.3.3, which was
</span><br>
<span class="quotelev1">&gt; generated by GNU Autoconf 2.63.  Invocation command line was
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   $ ./configure --prefix=/opt/openmpi-1.3.3 --disable-static CC=gcc
</span><br>
<span class="quotelev1">&gt;  FC=ifort F77=ifort --enable-shared
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ## --------- ##
</span><br>
<span class="quotelev1">&gt; ## Platform. ##
</span><br>
<span class="quotelev1">&gt; ## --------- ##
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hostname = localhost
</span><br>
<span class="quotelev1">&gt; uname -m = i686
</span><br>
<span class="quotelev1">&gt; uname -r = 2.6.29.4-167.fc11.i686.PAE
</span><br>
<span class="quotelev1">&gt; uname -s = Linux
</span><br>
<span class="quotelev1">&gt; uname -v = #1 SMP Wed May 27 17:28:22 EDT 2009
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/bin/uname -p = unknown
</span><br>
<span class="quotelev1">&gt; /bin/uname -X     = unknown
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /bin/arch              = i686
</span><br>
<span class="quotelev1">&gt; /usr/bin/arch -k       = unknown
</span><br>
<span class="quotelev1">&gt; /usr/convex/getsysinfo = unknown
</span><br>
<span class="quotelev1">&gt; /usr/bin/hostinfo      = unknown
</span><br>
<span class="quotelev1">&gt; /bin/machine           = unknown
</span><br>
<span class="quotelev1">&gt; /usr/bin/oslevel       = unknown
</span><br>
<span class="quotelev1">&gt; /bin/universe          = unknown
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all
</span><br>
<span class="quotelev1">&gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all
</span><br>
<span class="quotelev1">&gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all
</span><br>
<span class="quotelev1">&gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all
</span><br>
<span class="quotelev1">&gt; PATH: /home/jy/.wine/drive_c/windows
</span><br>
<span class="quotelev1">&gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src
</span><br>
<span class="quotelev1">&gt; PATH: /home/jy/bin/vtstscripts
</span><br>
<span class="quotelev1">&gt; PATH: /opt/mpich2-1.2/bin
</span><br>
<span class="quotelev1">&gt; PATH: /opt/intel/fc/10.1.018/bin
</span><br>
<span class="quotelev1">&gt; PATH: /opt/intel/cc/10.1.018/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/lib/qt-3.3/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/kerberos/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/lib/ccache
</span><br>
<span class="quotelev1">&gt; PATH: /usr/local/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/bin
</span><br>
<span class="quotelev1">&gt; PATH: /bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/local/sbin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/sbin
</span><br>
<span class="quotelev1">&gt; PATH: /sbin
</span><br>
<span class="quotelev1">&gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src/scripts
</span><br>
<span class="quotelev1">&gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src/util
</span><br>
<span class="quotelev1">&gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all/scripts
</span><br>
<span class="quotelev1">&gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all/util
</span><br>
<span class="quotelev1">&gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all/scripts
</span><br>
<span class="quotelev1">&gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all/util
</span><br>
<span class="quotelev1">&gt; PATH: /home/jy/bin
</span><br>
<span class="quotelev1">&gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all/scripts
</span><br>
<span class="quotelev1">&gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all/util
</span><br>
<span class="quotelev1">&gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all/scripts
</span><br>
<span class="quotelev1">&gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all/util
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ## ----------- ##
</span><br>
<span class="quotelev1">&gt; ## Core tests. ##
</span><br>
<span class="quotelev1">&gt; ## ----------- ##
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:3424: checking for a BSD-compatible install
</span><br>
<span class="quotelev1">&gt; configure:3492: result: /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; configure:3503: checking whether build environment is sane
</span><br>
<span class="quotelev1">&gt; configure:3546: result: yes
</span><br>
<span class="quotelev1">&gt; configure:3571: checking for a thread-safe mkdir -p
</span><br>
<span class="quotelev1">&gt; configure:3610: result: /bin/mkdir -p
</span><br>
<span class="quotelev1">&gt; configure:3623: checking for gawk
</span><br>
<span class="quotelev1">&gt; configure:3639: found /usr/bin/gawk
</span><br>
<span class="quotelev1">&gt; configure:3650: result: gawk
</span><br>
<span class="quotelev1">&gt; configure:3661: checking whether make sets $(MAKE)
</span><br>
<span class="quotelev1">&gt; configure:3683: result: yes
</span><br>
<span class="quotelev1">&gt; configure:3853: checking how to create a ustar tar archive
</span><br>
<span class="quotelev1">&gt; configure:3866: tar --version
</span><br>
<span class="quotelev1">&gt; tar (GNU tar) 1.22
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2009 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; License GPLv3+: GNU GPL version 3 or later
</span><br>
<span class="quotelev1">&gt;  &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev1">&gt; There is NO WARRANTY, to the extent permitted by law.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .........
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure: exit 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***************************************************************************
</span><br>
<span class="quotelev1">&gt; ***********************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11245.php">Rob Latham: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Previous message:</strong> <a href="11243.php">Jiaye Li: "[OMPI users] Program hangs"</a>
<li><strong>In reply to:</strong> <a href="11243.php">Jiaye Li: "[OMPI users] Program hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11247.php">Jiaye Li: "[OMPI users] Program hangs"</a>
<li><strong>Reply:</strong> <a href="11247.php">Jiaye Li: "[OMPI users] Program hangs"</a>
<li><strong>Reply:</strong> <a href="11261.php">Eugene Loh: "Re: [OMPI users] Program hangs"</a>
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
