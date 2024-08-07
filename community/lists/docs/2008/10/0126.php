<?
$subject_val = "Re: [OMPI docs] build proxy agent for eclipse";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  6 14:05:35 2008" -->
<!-- isoreceived="20081006180535" -->
<!-- sent="Mon, 6 Oct 2008 14:05:26 -0400" -->
<!-- isosent="20081006180526" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] build proxy agent for eclipse" -->
<!-- id="C469F093-90B6-42FA-8FA0-B745DE8AE2A9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="115751.44403.qm_at_web55805.mail.re3.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI docs] build proxy agent for eclipse<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-06 14:05:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2009/01/0127.php">nur kholis majid: "[OMPI docs] Open MPI user documentation"</a>
<li><strong>Previous message:</strong> <a href="0125.php">Yen Phi: "[OMPI docs] openmpi(CR)_eclipse-ptp"</a>
<li><strong>In reply to:</strong> <a href="0124.php">Yen Phi: "[OMPI docs] build proxy agent for eclipse"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Two points:
<br>
<p>1. I think it's the PTP team that will need to comment on this issue;  
<br>
they are the maintainers of all of the Eclipse/OMPI integration stuff.
<br>
<p>2. The &quot;docs&quot; list is for Open MPI documentation issues, not for user- 
<br>
level questions or bug reports.  Thanks.
<br>
<p><p>On Oct 2, 2008, at 4:28 PM, Yen Phi wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; When I run &quot;sh BUILD&quot; to build proxy agent for eclipse ptp, it  
</span><br>
<span class="quotelev1">&gt; doesn't have any error and I have ptp_orte_proxy.o and smd.o. But I  
</span><br>
<span class="quotelev1">&gt; can't start resource manager. When I check config.log, I see some  
</span><br>
<span class="quotelev1">&gt; error. This is config.log file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This file contains any messages produced by compilers while
</span><br>
<span class="quotelev1">&gt; running configure, to aid debugging if configure makes a mistake.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It was created by org.eclipse.ptp.orte configure 2.0.0, which was
</span><br>
<span class="quotelev1">&gt; generated by GNU Autoconf 2.61.  Invocation command line was
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ configure --prefix=/home/blackbird/requires/eclipse/plugins/ 
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.linux.x86_2.0.0.200804010706
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
<span class="quotelev1">&gt; hostname = phi-yen.lan
</span><br>
<span class="quotelev1">&gt; uname -m = i686
</span><br>
<span class="quotelev1">&gt; uname -r = 2.6.18-53.el5
</span><br>
<span class="quotelev1">&gt; uname -s = Linux
</span><br>
<span class="quotelev1">&gt; uname -v = #1 SMP Mon Nov 12 02:22:48 EST 2007
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
<span class="quotelev1">&gt; PATH: /home/blackbird/require/jdk1.5.0_16/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/local/bin
</span><br>
<span class="quotelev1">&gt; PATH: .
</span><br>
<span class="quotelev1">&gt; PATH: /home/blackbird/require/jdk1.5.0_16/bin
</span><br>
<span class="quotelev1">&gt; PATH: .
</span><br>
<span class="quotelev1">&gt; PATH: /home/blackbird/requires/jre1.5.0_15/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/local/bin
</span><br>
<span class="quotelev1">&gt; PATH: /home/blackbird/requires/jre1.5.0_15/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/local/bin
</span><br>
<span class="quotelev1">&gt; PATH: /home/blackbird/requires/jre1.5.0_15/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/local/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/lib/qt-3.3/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/kerberos/sbin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/kerberos/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/local/sbin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/local/bin
</span><br>
<span class="quotelev1">&gt; PATH: /sbin
</span><br>
<span class="quotelev1">&gt; PATH: /bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/sbin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/X11R6/bin
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
<span class="quotelev1">&gt; configure:1745: checking for a BSD-compatible install
</span><br>
<span class="quotelev1">&gt; configure:1801: result: /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; configure:1812: checking whether build environment is sane
</span><br>
<span class="quotelev1">&gt; configure:1855: result: yes
</span><br>
<span class="quotelev1">&gt; configure:1920: checking for gawk
</span><br>
<span class="quotelev1">&gt; configure:1936: found /bin/gawk
</span><br>
<span class="quotelev1">&gt; configure:1947: result: gawk
</span><br>
<span class="quotelev1">&gt; configure:1958: checking whether make sets $(MAKE)
</span><br>
<span class="quotelev1">&gt; configure:1979: result: yes
</span><br>
<span class="quotelev1">&gt; configure:2170: checking build system type
</span><br>
<span class="quotelev1">&gt; configure:2188: result: i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt; configure:2287: checking for mpicc
</span><br>
<span class="quotelev1">&gt; configure:2303: found /usr/local/bin/mpicc
</span><br>
<span class="quotelev1">&gt; configure:2314: result: mpicc
</span><br>
<span class="quotelev1">&gt; configure:2350: checking for C compiler version
</span><br>
<span class="quotelev1">&gt; configure:2357: mpicc --version &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.1.2 20070626 (Red Hat 4.1.2-14)
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2006 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There  
</span><br>
<span class="quotelev1">&gt; is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR  
</span><br>
<span class="quotelev1">&gt; PURPOSE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:2360: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:2367: mpicc -v &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; Target: i386-redhat-linux
</span><br>
<span class="quotelev1">&gt; Configured with: ../configure --prefix=/usr --mandir=/usr/share/man  
</span><br>
<span class="quotelev1">&gt; --infodir=/usr/share/info --enable-shared --enable-threads=posix -- 
</span><br>
<span class="quotelev1">&gt; enable-checking=release --with-system-zlib --enable-__cxa_atexit -- 
</span><br>
<span class="quotelev1">&gt; disable-libunwind-exceptions --enable-libgcj-multifile --enable- 
</span><br>
<span class="quotelev1">&gt; languages=c,c++,objc,obj-c++,java,fortran,ada --enable-java-awt=gtk  
</span><br>
<span class="quotelev1">&gt; --disable-dssi --enable-plugin --with-java-home=/usr/lib/jvm/ 
</span><br>
<span class="quotelev1">&gt; java-1.4.2-gcj-1.4.2.0/jre --with-cpu=generic --host=i386-redhat-linux
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.1.2 20070626 (Red Hat 4.1.2-14)
</span><br>
<span class="quotelev1">&gt; configure:2370: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:2377: mpicc -V &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; gcc: '-V' option must have argument
</span><br>
<span class="quotelev1">&gt; configure:2380: $? = 1
</span><br>
<span class="quotelev1">&gt; configure:2403: checking for C compiler default output file name
</span><br>
<span class="quotelev1">&gt; configure:2430: mpicc    conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:2433: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:2471: result: a.out
</span><br>
<span class="quotelev1">&gt; configure:2488: checking whether the C compiler works
</span><br>
<span class="quotelev1">&gt; configure:2498: ./a.out
</span><br>
<span class="quotelev1">&gt; configure:2501: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:2518: result: yes
</span><br>
<span class="quotelev1">&gt; configure:2525: checking whether we are cross compiling
</span><br>
<span class="quotelev1">&gt; configure:2527: result: no
</span><br>
<span class="quotelev1">&gt; configure:2530: checking for suffix of executables
</span><br>
<span class="quotelev1">&gt; configure:2537: mpicc -o conftest    conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:2540: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:2564: result:
</span><br>
<span class="quotelev1">&gt; configure:2570: checking for suffix of object files
</span><br>
<span class="quotelev1">&gt; configure:2596: mpicc -c   conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:2599: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:2622: result: o
</span><br>
<span class="quotelev1">&gt; configure:2626: checking whether we are using the GNU C compiler
</span><br>
<span class="quotelev1">&gt; configure:2655: mpicc -c   conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:2661: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:2678: result: yes
</span><br>
<span class="quotelev1">&gt; configure:2683: checking whether mpicc accepts -g
</span><br>
<span class="quotelev1">&gt; configure:2713: mpicc -c -g  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:2719: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:2818: result: yes
</span><br>
<span class="quotelev1">&gt; configure:2835: checking for mpicc option to accept ISO C89
</span><br>
<span class="quotelev1">&gt; configure:2909: mpicc  -c -g -O2  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:2915: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:2938: result: none needed
</span><br>
<span class="quotelev1">&gt; configure:2967: checking for style of include used by make
</span><br>
<span class="quotelev1">&gt; configure:2995: result: GNU
</span><br>
<span class="quotelev1">&gt; configure:3023: checking dependency style of mpicc
</span><br>
<span class="quotelev1">&gt; configure:3113: result: gcc3
</span><br>
<span class="quotelev1">&gt; configure:3131: checking whether mpicc and cc understand -c and -o  
</span><br>
<span class="quotelev1">&gt; together
</span><br>
<span class="quotelev1">&gt; configure:3166: mpicc -c conftest.c -o conftest2.o &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:3169: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:3175: mpicc -c conftest.c -o conftest2.o &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:3178: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:3189: cc -c conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:3192: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:3200: cc -c conftest.c -o conftest2.o &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:3203: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:3209: cc -c conftest.c -o conftest2.o &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:3212: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:3230: result: yes
</span><br>
<span class="quotelev1">&gt; configure:3268: checking for a BSD-compatible install
</span><br>
<span class="quotelev1">&gt; configure:3324: result: /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; configure:3335: checking whether make sets $(MAKE)
</span><br>
<span class="quotelev1">&gt; configure:3356: result: yes
</span><br>
<span class="quotelev1">&gt; configure:3408: checking for ranlib
</span><br>
<span class="quotelev1">&gt; configure:3424: found /usr/bin/ranlib
</span><br>
<span class="quotelev1">&gt; configure:3435: result: ranlib
</span><br>
<span class="quotelev1">&gt; configure:3467: checking for bitset_new in -lutils
</span><br>
<span class="quotelev1">&gt; configure:3502: mpicc -o conftest -g -O2 -Wall -I../ 
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.utils_2.0.0.200804010706/include -I../ 
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.proxy_2.0.0.200804010706/include   conftest.c - 
</span><br>
<span class="quotelev1">&gt; lutils   -L../org.eclipse.ptp.utils_2.0.0.200804010706 -L../ 
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.proxy_2.0.0.200804010706 &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:3508: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:3526: result: yes
</span><br>
<span class="quotelev1">&gt; configure:3538: checking for proxy_svr_init in -lproxysvr
</span><br>
<span class="quotelev1">&gt; configure:3573: mpicc -o conftest -g -O2 -Wall -I../ 
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.utils_2.0.0.200804010706/include -I../ 
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.proxy_2.0.0.200804010706/include   conftest.c - 
</span><br>
<span class="quotelev1">&gt; lproxysvr  -lutils  -L../org.eclipse.ptp.utils_2.0.0.200804010706 - 
</span><br>
<span class="quotelev1">&gt; L../org.eclipse.ptp.proxy_2.0.0.200804010706 &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:3579: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:3597: result: yes
</span><br>
<span class="quotelev1">&gt; configure:3615: checking how to run the C preprocessor
</span><br>
<span class="quotelev1">&gt; configure:3655: mpicc -E  conftest.c
</span><br>
<span class="quotelev1">&gt; configure:3661: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:3692: mpicc -E  conftest.c
</span><br>
<span class="quotelev1">&gt; conftest.c:12:28: error: ac_nonexistent.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; configure:3698: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;org.eclipse.ptp.orte&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;org-eclipse-ptp-orte&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;2.0.0&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;org.eclipse.ptp.orte 2.0.0&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE &quot;org-eclipse-ptp-orte&quot;
</span><br>
<span class="quotelev1">&gt; | #define VERSION &quot;2.0.0&quot;
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LIBUTILS 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LIBPROXYSVR 1
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #include &lt;ac_nonexistent.h&gt;
</span><br>
<span class="quotelev1">&gt; configure:3731: result: mpicc -E
</span><br>
<span class="quotelev1">&gt; configure:3760: mpicc -E  conftest.c
</span><br>
<span class="quotelev1">&gt; configure:3766: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:3797: mpicc -E  conftest.c
</span><br>
<span class="quotelev1">&gt; conftest.c:12:28: error: ac_nonexistent.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; configure:3803: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;org.eclipse.ptp.orte&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;org-eclipse-ptp-orte&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;2.0.0&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;org.eclipse.ptp.orte 2.0.0&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE &quot;org-eclipse-ptp-orte&quot;
</span><br>
<span class="quotelev1">&gt; | #define VERSION &quot;2.0.0&quot;
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LIBUTILS 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LIBPROXYSVR 1
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #include &lt;ac_nonexistent.h&gt;
</span><br>
<span class="quotelev1">&gt; configure:3841: checking for grep that handles long lines and -e
</span><br>
<span class="quotelev1">&gt; configure:3915: result: /bin/grep
</span><br>
<span class="quotelev1">&gt; configure:3920: checking for egrep
</span><br>
<span class="quotelev1">&gt; configure:3998: result: /bin/grep -E
</span><br>
<span class="quotelev1">&gt; configure:4003: checking for ANSI C header files
</span><br>
<span class="quotelev1">&gt; configure:4033: mpicc -c -g -O2 -Wall -I../ 
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.utils_2.0.0.200804010706/include -I../ 
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.proxy_2.0.0.200804010706/include  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:4039: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:4138: mpicc -o conftest -g -O2 -Wall -I../ 
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.utils_2.0.0.200804010706/include -I../ 
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.proxy_2.0.0.200804010706/include   conftest.c - 
</span><br>
<span class="quotelev1">&gt; lproxysvr -lutils  -L../org.eclipse.ptp.utils_2.0.0.200804010706 - 
</span><br>
<span class="quotelev1">&gt; L../org.eclipse.ptp.proxy_2.0.0.200804010706 &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:4141: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:4147: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:4150: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:4167: result: yes
</span><br>
<span class="quotelev1">&gt; configure:4178: checking return type of signal handlers
</span><br>
<span class="quotelev1">&gt; configure:4206: mpicc -c -g -O2 -Wall -I../ 
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.utils_2.0.0.200804010706/include -I../ 
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.proxy_2.0.0.200804010706/include  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c: In function 'main':
</span><br>
<span class="quotelev1">&gt; conftest.c:19: error: void value not ignored as it ought to be
</span><br>
<span class="quotelev1">&gt; configure:4212: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;org.eclipse.ptp.orte&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;org-eclipse-ptp-orte&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;2.0.0&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;org.eclipse.ptp.orte 2.0.0&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE &quot;org-eclipse-ptp-orte&quot;
</span><br>
<span class="quotelev1">&gt; | #define VERSION &quot;2.0.0&quot;
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LIBUTILS 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LIBPROXYSVR 1
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt; | #include &lt;signal.h&gt;
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | int
</span><br>
<span class="quotelev1">&gt; | main ()
</span><br>
<span class="quotelev1">&gt; | {
</span><br>
<span class="quotelev1">&gt; | return *(signal (0, 0)) (0) == 1;
</span><br>
<span class="quotelev1">&gt; |   ;
</span><br>
<span class="quotelev1">&gt; |   return 0;
</span><br>
<span class="quotelev1">&gt; | }
</span><br>
<span class="quotelev1">&gt; configure:4227: result: void
</span><br>
<span class="quotelev1">&gt; configure:4238: checking for orted
</span><br>
<span class="quotelev1">&gt; configure:4256: found /usr/local/bin/orted
</span><br>
<span class="quotelev1">&gt; configure:4269: result: /usr/local/bin/orted
</span><br>
<span class="quotelev1">&gt; configure:4410: creating ./config.status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ## ---------------------- ##
</span><br>
<span class="quotelev1">&gt; ## Running config.status. ##
</span><br>
<span class="quotelev1">&gt; ## ---------------------- ##
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This file was extended by org.eclipse.ptp.orte config.status 2.0.0,  
</span><br>
<span class="quotelev1">&gt; which was
</span><br>
<span class="quotelev1">&gt; generated by GNU Autoconf 2.61.  Invocation command line was
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   CONFIG_FILES    =
</span><br>
<span class="quotelev1">&gt;   CONFIG_HEADERS  =
</span><br>
<span class="quotelev1">&gt;   CONFIG_LINKS    =
</span><br>
<span class="quotelev1">&gt;   CONFIG_COMMANDS =
</span><br>
<span class="quotelev1">&gt;   $ ./config.status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on phi-yen.lan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; config.status:639: creating Makefile
</span><br>
<span class="quotelev1">&gt; config.status:639: creating config.h
</span><br>
<span class="quotelev1">&gt; config.status:901: executing depfiles commands
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ## ---------------- ##
</span><br>
<span class="quotelev1">&gt; ## Cache variables. ##
</span><br>
<span class="quotelev1">&gt; ## ---------------- ##
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ac_cv_build=i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt; ac_cv_c_compiler_gnu=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CC_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CC_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CFLAGS_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CFLAGS_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CPPFLAGS_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CPPFLAGS_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CPP_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CPP_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_LDFLAGS_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_LDFLAGS_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_LIBS_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_LIBS_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_build_alias_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_build_alias_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_host_alias_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_host_alias_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_target_alias_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_target_alias_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_header_stdc=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_lib_proxysvr_proxy_svr_init=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_lib_utils_bitset_new=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_objext=o
</span><br>
<span class="quotelev1">&gt; ac_cv_path_EGREP='/bin/grep -E'
</span><br>
<span class="quotelev1">&gt; ac_cv_path_GREP=/bin/grep
</span><br>
<span class="quotelev1">&gt; ac_cv_path_ORTED=/usr/local/bin/orted
</span><br>
<span class="quotelev1">&gt; ac_cv_path_install='/usr/bin/install -c'
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_AWK=gawk
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_CPP='mpicc -E'
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_ac_ct_CC=mpicc
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_ac_ct_RANLIB=ranlib
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_cc_c89=
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_cc_g=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_cc_mpicc_c_o=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_make_make_set=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_signal=void
</span><br>
<span class="quotelev1">&gt; am_cv_CC_dependencies_compiler_type=gcc3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ## ----------------- ##
</span><br>
<span class="quotelev1">&gt; ## Output variables. ##
</span><br>
<span class="quotelev1">&gt; ## ----------------- ##
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ACLOCAL='${SHELL} /home/blackbird/requires/eclipse/plugins/ 
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.rm.orte.proxy_2.0.0.200804010706/missing --run  
</span><br>
<span class="quotelev1">&gt; aclocal-1.9'
</span><br>
<span class="quotelev1">&gt; AMDEPBACKSLASH='\'
</span><br>
<span class="quotelev1">&gt; AMDEP_FALSE='#'
</span><br>
<span class="quotelev1">&gt; AMDEP_TRUE=''
</span><br>
<span class="quotelev1">&gt; AMTAR='${SHELL} /home/blackbird/requires/eclipse/plugins/ 
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.rm.orte.proxy_2.0.0.200804010706/missing --run tar'
</span><br>
<span class="quotelev1">&gt; AUTOCONF='${SHELL} /home/blackbird/requires/eclipse/plugins/ 
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.rm.orte.proxy_2.0.0.200804010706/missing --run  
</span><br>
<span class="quotelev1">&gt; autoconf'
</span><br>
<span class="quotelev1">&gt; AUTOHEADER='${SHELL} /home/blackbird/requires/eclipse/plugins/ 
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.rm.orte.proxy_2.0.0.200804010706/missing --run  
</span><br>
<span class="quotelev1">&gt; autoheader'
</span><br>
<span class="quotelev1">&gt; AUTOMAKE='${SHELL} /home/blackbird/requires/eclipse/plugins/ 
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.rm.orte.proxy_2.0.0.200804010706/missing --run  
</span><br>
<span class="quotelev1">&gt; automake-1.9'
</span><br>
<span class="quotelev1">&gt; AWK='gawk'
</span><br>
<span class="quotelev1">&gt; CC='mpicc'
</span><br>
<span class="quotelev1">&gt; CCDEPMODE='depmode=gcc3'
</span><br>
<span class="quotelev1">&gt; CFLAGS='-g -O2 -Wall -I../org.eclipse.ptp.utils_2.0.0.200804010706/ 
</span><br>
<span class="quotelev1">&gt; include -I../org.eclipse.ptp.proxy_2.0.0.200804010706/include'
</span><br>
<span class="quotelev1">&gt; CPP='mpicc -E'
</span><br>
<span class="quotelev1">&gt; CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; CYGPATH_W='echo'
</span><br>
<span class="quotelev1">&gt; DEFS='-DHAVE_CONFIG_H'
</span><br>
<span class="quotelev1">&gt; DEPDIR='.deps'
</span><br>
<span class="quotelev1">&gt; ECHO_C=''
</span><br>
<span class="quotelev1">&gt; ECHO_N='-n'
</span><br>
<span class="quotelev1">&gt; ECHO_T=''
</span><br>
<span class="quotelev1">&gt; EGREP='/bin/grep -E'
</span><br>
<span class="quotelev1">&gt; EXEEXT=''
</span><br>
<span class="quotelev1">&gt; GREP='/bin/grep'
</span><br>
<span class="quotelev1">&gt; INSTALL_DATA='${INSTALL} -m 644'
</span><br>
<span class="quotelev1">&gt; INSTALL_PROGRAM='${INSTALL}'
</span><br>
<span class="quotelev1">&gt; INSTALL_SCRIPT='${INSTALL}'
</span><br>
<span class="quotelev1">&gt; INSTALL_STRIP_PROGRAM='${SHELL} $(install_sh) -c -s'
</span><br>
<span class="quotelev1">&gt; LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; LIBOBJS=''
</span><br>
<span class="quotelev1">&gt; LIBS='-lproxysvr -lutils  -L../ 
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.utils_2.0.0.200804010706 -L../ 
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.proxy_2.0.0.200804010706'
</span><br>
<span class="quotelev1">&gt; LTLIBOBJS=''
</span><br>
<span class="quotelev1">&gt; MAKEINFO='${SHELL} /home/blackbird/requires/eclipse/plugins/ 
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.rm.orte.proxy_2.0.0.200804010706/missing --run  
</span><br>
<span class="quotelev1">&gt; makeinfo'
</span><br>
<span class="quotelev1">&gt; OBJEXT='o'
</span><br>
<span class="quotelev1">&gt; ORTED='/usr/local/bin/orted'
</span><br>
<span class="quotelev1">&gt; PACKAGE='org-eclipse-ptp-orte'
</span><br>
<span class="quotelev1">&gt; PACKAGE_BUGREPORT=''
</span><br>
<span class="quotelev1">&gt; PACKAGE_NAME='org.eclipse.ptp.orte'
</span><br>
<span class="quotelev1">&gt; PACKAGE_STRING='org.eclipse.ptp.orte 2.0.0'
</span><br>
<span class="quotelev1">&gt; PACKAGE_TARNAME='org-eclipse-ptp-orte'
</span><br>
<span class="quotelev1">&gt; PACKAGE_VERSION='2.0.0'
</span><br>
<span class="quotelev1">&gt; PATH_SEPARATOR=':'
</span><br>
<span class="quotelev1">&gt; RANLIB='ranlib'
</span><br>
<span class="quotelev1">&gt; SET_MAKE=''
</span><br>
<span class="quotelev1">&gt; SHELL='/bin/sh'
</span><br>
<span class="quotelev1">&gt; STRIP=''
</span><br>
<span class="quotelev1">&gt; VERSION='2.0.0'
</span><br>
<span class="quotelev1">&gt; ac_ct_CC='mpicc'
</span><br>
<span class="quotelev1">&gt; am__fastdepCC_FALSE='#'
</span><br>
<span class="quotelev1">&gt; am__fastdepCC_TRUE=''
</span><br>
<span class="quotelev1">&gt; am__include='include'
</span><br>
<span class="quotelev1">&gt; am__leading_dot='.'
</span><br>
<span class="quotelev1">&gt; am__quote=''
</span><br>
<span class="quotelev1">&gt; am__tar='${AMTAR} chof - &quot;$$tardir&quot;'
</span><br>
<span class="quotelev1">&gt; am__untar='${AMTAR} xf -'
</span><br>
<span class="quotelev1">&gt; bindir='${exec_prefix}/bin'
</span><br>
<span class="quotelev1">&gt; build='i686-pc-linux-gnu'
</span><br>
<span class="quotelev1">&gt; build_alias=''
</span><br>
<span class="quotelev1">&gt; build_cpu='i686'
</span><br>
<span class="quotelev1">&gt; build_os='linux-gnu'
</span><br>
<span class="quotelev1">&gt; build_vendor='pc'
</span><br>
<span class="quotelev1">&gt; datadir='${datarootdir}'
</span><br>
<span class="quotelev1">&gt; datarootdir='${prefix}/share'
</span><br>
<span class="quotelev1">&gt; docdir='${datarootdir}/doc/${PACKAGE_TARNAME}'
</span><br>
<span class="quotelev1">&gt; dvidir='${docdir}'
</span><br>
<span class="quotelev1">&gt; exec_prefix='${prefix}'
</span><br>
<span class="quotelev1">&gt; host_alias=''
</span><br>
<span class="quotelev1">&gt; htmldir='${docdir}'
</span><br>
<span class="quotelev1">&gt; includedir='${prefix}/include'
</span><br>
<span class="quotelev1">&gt; infodir='${datarootdir}/info'
</span><br>
<span class="quotelev1">&gt; install_sh='/home/blackbird/requires/eclipse/plugins/ 
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.rm.orte.proxy_2.0.0.200804010706/install-sh'
</span><br>
<span class="quotelev1">&gt; libdir='${exec_prefix}/lib'
</span><br>
<span class="quotelev1">&gt; libexecdir='${exec_prefix}/libexec'
</span><br>
<span class="quotelev1">&gt; localedir='${datarootdir}/locale'
</span><br>
<span class="quotelev1">&gt; localstatedir='${prefix}/var'
</span><br>
<span class="quotelev1">&gt; mandir='${datarootdir}/man'
</span><br>
<span class="quotelev1">&gt; mkdir_p='mkdir -p --'
</span><br>
<span class="quotelev1">&gt; oldincludedir='/usr/include'
</span><br>
<span class="quotelev1">&gt; pdfdir='${docdir}'
</span><br>
<span class="quotelev1">&gt; prefix='/home/blackbird/requires/eclipse/plugins/ 
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.linux.x86_2.0.0.200804010706'
</span><br>
<span class="quotelev1">&gt; program_transform_name='s,x,x,'
</span><br>
<span class="quotelev1">&gt; psdir='${docdir}'
</span><br>
<span class="quotelev1">&gt; sbindir='${exec_prefix}/sbin'
</span><br>
<span class="quotelev1">&gt; sharedstatedir='${prefix}/com'
</span><br>
<span class="quotelev1">&gt; sysconfdir='${prefix}/etc'
</span><br>
<span class="quotelev1">&gt; target_alias=''
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ## ----------- ##
</span><br>
<span class="quotelev1">&gt; ## confdefs.h. ##
</span><br>
<span class="quotelev1">&gt; ## ----------- ##
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_NAME &quot;org.eclipse.ptp.orte&quot;
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_TARNAME &quot;org-eclipse-ptp-orte&quot;
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_VERSION &quot;2.0.0&quot;
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_STRING &quot;org.eclipse.ptp.orte 2.0.0&quot;
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_BUGREPORT &quot;&quot;
</span><br>
<span class="quotelev1">&gt; #define PACKAGE &quot;org-eclipse-ptp-orte&quot;
</span><br>
<span class="quotelev1">&gt; #define VERSION &quot;2.0.0&quot;
</span><br>
<span class="quotelev1">&gt; #define HAVE_LIBUTILS 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_LIBPROXYSVR 1
</span><br>
<span class="quotelev1">&gt; #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; #define RETSIGTYPE void
</span><br>
<span class="quotelev1">&gt; #define OMPI 1
</span><br>
<span class="quotelev1">&gt; #define ORTED &quot;/usr/local/bin/orted&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure: exit 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI that I use is the version supporting checkpoint/restart  
</span><br>
<span class="quotelev1">&gt; (trunk r16603). Because it differ from openMPI_1.2,, I change  
</span><br>
<span class="quotelev1">&gt; something in org.eclipse.ptp.rm.orte.proxy_.../src/orte_fixup.h and  
</span><br>
<span class="quotelev1">&gt; org.eclipse.ptp.rm.orte.proxy_.../src/ptp_orte_proxy.c .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In org.eclipse.ptp.rm.orte.proxy_.../src/orte_fixup.h:
</span><br>
<span class="quotelev1">&gt; line 35: orte/tools/orted/orte.h -&gt; orte/orted/orted.h
</span><br>
<span class="quotelev1">&gt; line 93 - 192: orte_ns.create_process_name(&amp;name, 0, jobid, 0) -&gt;  
</span><br>
<span class="quotelev1">&gt; orte_ns.create_process_name(&amp;name, jobid, 0)
</span><br>
<span class="quotelev1">&gt; line 314: orte_pls.terminate_orteds(jobid, &amp;timeout, &amp;attr) -&gt;  
</span><br>
<span class="quotelev1">&gt; orte_pls.terminate_orteds( &amp;timeout, &amp;attr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In org.eclipse.ptp.rm.orte.proxy_.../src/ptp_orte_proxy.c:
</span><br>
<span class="quotelev1">&gt; line 771 - 807: orte_ns.create_process_name(&amp;name, 0, jobid, 0) -&gt;  
</span><br>
<span class="quotelev1">&gt; orte_ns.create_process_name(&amp;name, jobid, 0)
</span><br>
<span class="quotelev1">&gt; line 870: delete  #else /*ORTE_VERSION_1_0*/ case  
</span><br>
<span class="quotelev1">&gt; ORTE_JOB_STATE_AT_STG2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I check all my steps I did when install eclipse ptp but nothing  
</span><br>
<span class="quotelev1">&gt; wrong. I don't know why I can't start resoure manager. Please tell  
</span><br>
<span class="quotelev1">&gt; me what wrong.
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Yen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2009/01/0127.php">nur kholis majid: "[OMPI docs] Open MPI user documentation"</a>
<li><strong>Previous message:</strong> <a href="0125.php">Yen Phi: "[OMPI docs] openmpi(CR)_eclipse-ptp"</a>
<li><strong>In reply to:</strong> <a href="0124.php">Yen Phi: "[OMPI docs] build proxy agent for eclipse"</a>
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
