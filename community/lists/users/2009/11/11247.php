<?
$subject_val = "[OMPI users] Program hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 20 18:09:09 2009" -->
<!-- isoreceived="20091120230909" -->
<!-- sent="Sat, 21 Nov 2009 07:09:04 +0800" -->
<!-- isosent="20091120230904" -->
<!-- name="Jiaye Li" -->
<!-- email="jameslipd_at_[hidden]" -->
<!-- subject="[OMPI users] Program hangs" -->
<!-- id="b5d787260911201509g1c0ca7bdx37951fab7dec5b78_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="200911201020.02585.gkanis_at_ipta.demokritos.gr" -->
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
<strong>Subject:</strong> [OMPI users] Program hangs<br>
<strong>From:</strong> Jiaye Li (<em>jameslipd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-20 18:09:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11248.php">Arunkumar C R: "[OMPI users] Doubt regarding MPI_GATHER"</a>
<li><strong>Previous message:</strong> <a href="11246.php">Jeff Squyres: "[OMPI users] Fwd: Call for participation: MPI Forum User Survey"</a>
<li><strong>In reply to:</strong> <a href="11244.php">vasilis gkanis: "Re: [OMPI users] Program hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11261.php">Eugene Loh: "Re: [OMPI users] Program hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I killed the job and re-submit it. At this can it can go on to run, but
<br>
today I found an even serious problem with Ompi. I compared the results of
<br>
mpich2 and ompi, finding that the results from ompi is wrong, which finished
<br>
prior to the real end. In other word, the optimized structure (by vasp) does
<br>
not converge, but it reported that the run was successful. Amasing! For the
<br>
same initial structure,  run with mpich2 requires 80 ion steps, while the
<br>
run with ompi needs only 40!
<br>
<p>On Fri, Nov 20, 2009 at 4:20 PM, vasilis gkanis
<br>
&lt;gkanis_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also experience a similar problem with the MUMPS solver, when I run it on
</span><br>
<span class="quotelev1">&gt; a
</span><br>
<span class="quotelev1">&gt; cluster. After several hours of running the code does not produce any
</span><br>
<span class="quotelev1">&gt; results,
</span><br>
<span class="quotelev1">&gt; although the command top shows that the program occupies 100% of the CPU.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The difference here, however, is that the same program runs fine on my PC.
</span><br>
<span class="quotelev1">&gt; The
</span><br>
<span class="quotelev1">&gt; differences between my PC and the cluster are:
</span><br>
<span class="quotelev1">&gt; 1) 32bit vs 64-bit(cluster)
</span><br>
<span class="quotelev1">&gt; 2) intel compiler vs portland compiler(cluster)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any thoughts on what might cause this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Vasilis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday 20 November 2009 03:50:17 am Jiaye Li wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I installed openmpi-1.3.3 on my single node(cpu) intel 64bit quad-core
</span><br>
<span class="quotelev2">&gt; &gt; machine. The compiler info is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ***************************************************************************
</span><br>
<span class="quotelev2">&gt; &gt; *********************************** intel-icc101018-10.1.018-1.i386
</span><br>
<span class="quotelev2">&gt; &gt; libgcc-4.4.0-4.i586
</span><br>
<span class="quotelev2">&gt; &gt; gcc-4.4.0-4.i586
</span><br>
<span class="quotelev2">&gt; &gt; gcc-gfortran-4.4.0-4.i586
</span><br>
<span class="quotelev2">&gt; &gt; gcc-c++-4.4.0-4.i586
</span><br>
<span class="quotelev2">&gt; &gt; intel-ifort101018-10.1.018-1.i386
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and the architecture is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; processor    : 0
</span><br>
<span class="quotelev2">&gt; &gt; vendor_id    : GenuineIntel
</span><br>
<span class="quotelev2">&gt; &gt; cpu family    : 6
</span><br>
<span class="quotelev2">&gt; &gt; model        : 23
</span><br>
<span class="quotelev2">&gt; &gt; model name    : Intel(R) Core(TM)2 Quad CPU    Q9550  @ 2.83GHz
</span><br>
<span class="quotelev2">&gt; &gt; stepping    : 10
</span><br>
<span class="quotelev2">&gt; &gt; cpu MHz        : 2825.937
</span><br>
<span class="quotelev2">&gt; &gt; cache size    : 6144 KB
</span><br>
<span class="quotelev2">&gt; &gt; physical id    : 0
</span><br>
<span class="quotelev2">&gt; &gt; siblings    : 4
</span><br>
<span class="quotelev2">&gt; &gt; core id        : 0
</span><br>
<span class="quotelev2">&gt; &gt; cpu cores    : 4
</span><br>
<span class="quotelev2">&gt; &gt; apicid        : 0
</span><br>
<span class="quotelev2">&gt; &gt; initial apicid    : 0
</span><br>
<span class="quotelev2">&gt; &gt; fdiv_bug    : no
</span><br>
<span class="quotelev2">&gt; &gt; hlt_bug        : no
</span><br>
<span class="quotelev2">&gt; &gt; f00f_bug    : no
</span><br>
<span class="quotelev2">&gt; &gt; coma_bug    : no
</span><br>
<span class="quotelev2">&gt; &gt; fpu        : yes
</span><br>
<span class="quotelev2">&gt; &gt; fpu_exception    : yes
</span><br>
<span class="quotelev2">&gt; &gt; cpuid level    : 13
</span><br>
<span class="quotelev2">&gt; &gt; wp        : yes
</span><br>
<span class="quotelev2">&gt; &gt; flags        : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca
</span><br>
<span class="quotelev2">&gt; &gt;  cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe nx lm
</span><br>
<span class="quotelev2">&gt; &gt;  constant_tsc arch_perfmon pebs bts pni dtes64 monitor ds_cpl vmx smx est
</span><br>
<span class="quotelev2">&gt; &gt;  tm2 ssse3 cx16 xtpr pdcm sse4_1 xsave lahf_lm tpr_shadow vnmi
</span><br>
<span class="quotelev1">&gt; flexpriority
</span><br>
<span class="quotelev2">&gt; &gt; bogomips    : 5651.87
</span><br>
<span class="quotelev2">&gt; &gt; clflush size    : 64
</span><br>
<span class="quotelev2">&gt; &gt; power management:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ***************************************************************************
</span><br>
<span class="quotelev2">&gt; &gt; ***********************************
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I compiled PWscf program with openmpi and tested the program. At the
</span><br>
<span class="quotelev2">&gt; &gt; beginning, the execution of  PW went on well, but after about 10 h, when
</span><br>
<span class="quotelev2">&gt; &gt;  the program is going to finish. The program hang there, but the cpu time
</span><br>
<span class="quotelev2">&gt; &gt;  is still occupied. (100% taken up by the program). There seems to be
</span><br>
<span class="quotelev2">&gt; &gt;  something wrong, somewhere. Any ideas? Thank you in advance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is the config.log of Ompi:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ***************************************************************************
</span><br>
<span class="quotelev2">&gt; &gt; *********************************** This file contains any messages
</span><br>
<span class="quotelev2">&gt; &gt;  produced by compilers while
</span><br>
<span class="quotelev2">&gt; &gt; running configure, to aid debugging if configure makes a mistake.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It was created by Open MPI configure 1.3.3, which was
</span><br>
<span class="quotelev2">&gt; &gt; generated by GNU Autoconf 2.63.  Invocation command line was
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   $ ./configure --prefix=/opt/openmpi-1.3.3 --disable-static CC=gcc
</span><br>
<span class="quotelev2">&gt; &gt;  FC=ifort F77=ifort --enable-shared
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ## --------- ##
</span><br>
<span class="quotelev2">&gt; &gt; ## Platform. ##
</span><br>
<span class="quotelev2">&gt; &gt; ## --------- ##
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hostname = localhost
</span><br>
<span class="quotelev2">&gt; &gt; uname -m = i686
</span><br>
<span class="quotelev2">&gt; &gt; uname -r = 2.6.29.4-167.fc11.i686.PAE
</span><br>
<span class="quotelev2">&gt; &gt; uname -s = Linux
</span><br>
<span class="quotelev2">&gt; &gt; uname -v = #1 SMP Wed May 27 17:28:22 EDT 2009
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /usr/bin/uname -p = unknown
</span><br>
<span class="quotelev2">&gt; &gt; /bin/uname -X     = unknown
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /bin/arch              = i686
</span><br>
<span class="quotelev2">&gt; &gt; /usr/bin/arch -k       = unknown
</span><br>
<span class="quotelev2">&gt; &gt; /usr/convex/getsysinfo = unknown
</span><br>
<span class="quotelev2">&gt; &gt; /usr/bin/hostinfo      = unknown
</span><br>
<span class="quotelev2">&gt; &gt; /bin/machine           = unknown
</span><br>
<span class="quotelev2">&gt; &gt; /usr/bin/oslevel       = unknown
</span><br>
<span class="quotelev2">&gt; &gt; /bin/universe          = unknown
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /home/jy/.wine/drive_c/windows
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /home/jy/bin/vtstscripts
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /opt/mpich2-1.2/bin
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /opt/intel/fc/10.1.018/bin
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /opt/intel/cc/10.1.018/bin
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /usr/lib/qt-3.3/bin
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /usr/kerberos/bin
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /usr/lib/ccache
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /usr/local/bin
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /usr/bin
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /bin
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /usr/local/sbin
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /usr/sbin
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /sbin
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src/scripts
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src/util
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all/scripts
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all/util
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all/scripts
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all/util
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /home/jy/bin
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all/scripts
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all/util
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all/scripts
</span><br>
<span class="quotelev2">&gt; &gt; PATH: /home/jy/Download/XCrySDen-1.5.21-src-all/util
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ## ----------- ##
</span><br>
<span class="quotelev2">&gt; &gt; ## Core tests. ##
</span><br>
<span class="quotelev2">&gt; &gt; ## ----------- ##
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; configure:3424: checking for a BSD-compatible install
</span><br>
<span class="quotelev2">&gt; &gt; configure:3492: result: /usr/bin/install -c
</span><br>
<span class="quotelev2">&gt; &gt; configure:3503: checking whether build environment is sane
</span><br>
<span class="quotelev2">&gt; &gt; configure:3546: result: yes
</span><br>
<span class="quotelev2">&gt; &gt; configure:3571: checking for a thread-safe mkdir -p
</span><br>
<span class="quotelev2">&gt; &gt; configure:3610: result: /bin/mkdir -p
</span><br>
<span class="quotelev2">&gt; &gt; configure:3623: checking for gawk
</span><br>
<span class="quotelev2">&gt; &gt; configure:3639: found /usr/bin/gawk
</span><br>
<span class="quotelev2">&gt; &gt; configure:3650: result: gawk
</span><br>
<span class="quotelev2">&gt; &gt; configure:3661: checking whether make sets $(MAKE)
</span><br>
<span class="quotelev2">&gt; &gt; configure:3683: result: yes
</span><br>
<span class="quotelev2">&gt; &gt; configure:3853: checking how to create a ustar tar archive
</span><br>
<span class="quotelev2">&gt; &gt; configure:3866: tar --version
</span><br>
<span class="quotelev2">&gt; &gt; tar (GNU tar) 1.22
</span><br>
<span class="quotelev2">&gt; &gt; Copyright (C) 2009 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt; &gt; License GPLv3+: GNU GPL version 3 or later
</span><br>
<span class="quotelev2">&gt; &gt;  &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev2">&gt; &gt; There is NO WARRANTY, to the extent permitted by law.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; .........
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; configure: exit 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ***************************************************************************
</span><br>
<span class="quotelev2">&gt; &gt; ***********************************
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Sincerely yours
Jiaye Li
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11247/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11248.php">Arunkumar C R: "[OMPI users] Doubt regarding MPI_GATHER"</a>
<li><strong>Previous message:</strong> <a href="11246.php">Jeff Squyres: "[OMPI users] Fwd: Call for participation: MPI Forum User Survey"</a>
<li><strong>In reply to:</strong> <a href="11244.php">vasilis gkanis: "Re: [OMPI users] Program hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11261.php">Eugene Loh: "Re: [OMPI users] Program hangs"</a>
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
