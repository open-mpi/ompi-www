<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jun 24 17:11:32 2007" -->
<!-- isoreceived="20070624211132" -->
<!-- sent="Sun, 24 Jun 2007 14:11:28 -0700 (PDT)" -->
<!-- isosent="20070624211128" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd: intel/openmpi" -->
<!-- id="124813.36014.qm_at_web58912.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-24 17:11:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3546.php">Gabb, Henry: "Re: [OMPI users] intel/openmpi"</a>
<li><strong>Previous message:</strong> <a href="3544.php">Francesco Pietra: "Re: [OMPI users] intel/openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the mistake &quot;CXX=/opt/.....icc&quot; below. Actually the command was
<br>
issued correctly, with &quot;CXX=/ot/...icpc&quot;. I have checked that directly  by
<br>
searching back for issued commands.
<br>
francesco pietra
<br>
<p><p>--- Francesco Pietra &lt;chiendarret_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Date: Sun, 24 Jun 2007 01:47:13 -0700 (PDT)
</span><br>
<span class="quotelev1">&gt; From: Francesco Pietra &lt;chiendarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: intel/openmpi
</span><br>
<span class="quotelev1">&gt; To: openmpi &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; CC: jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Recently you kindly helped me about plans to compile openmpi with intels. I
</span><br>
<span class="quotelev1">&gt; printed your mail, sorry for not having the electronic any more.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, the issue reported here does not seem to be about openmpi, rather about
</span><br>
<span class="quotelev1">&gt; intels as installed on my dual-core opterons on a Tyan S2895/Thunder K8We
</span><br>
<span class="quotelev1">&gt; mainboard, with Linux Debian amd64 etch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Therefore, please disregard this email if you believe it is of no interest
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt; openmpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An attempt to compile openmpi-1.2.3 with intels on the above system,
</span><br>
<span class="quotelev1">&gt; reportedly
</span><br>
<span class="quotelev1">&gt; because of C++ failure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The command (as user) was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./configure CC=/opt/intel/cce/9.1.042/bin/icc
</span><br>
<span class="quotelev1">&gt; CXX=/opt/intel/cce/9.1.042/bin/icc F77=/opt/intel/fce/9.1.036/bin/ifort
</span><br>
<span class="quotelev1">&gt; FC=/opt/intel/fce/9.1.036/bin/ifort --with-libnuma=/usr/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; relevant on the screen:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --checking whether /opt/intel/cce/9.1.042/iccp accepts -g... no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --dependency style of /opt/intel/cce/9.1.042/icpc ... none
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --This is a problem of the local compiler, not of openmpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached is the config.log.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; francesco pietra
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt;
</span><br>
____________________________________________________________________________________
<br>
<span class="quotelev1">&gt; Moody friends. Drama queens. Your life? Nope! - their life, your story. Play
</span><br>
<span class="quotelev1">&gt; Sims Stories at Yahoo! Games.
</span><br>
<span class="quotelev1">&gt; <a href="http://sims.yahoo.com/">http://sims.yahoo.com/</a>  &gt; This file contains any messages produced by
</span><br>
compilers while
<br>
<span class="quotelev1">&gt; running configure, to aid debugging if configure makes a mistake.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It was created by Open MPI configure 1.2.3, which was
</span><br>
<span class="quotelev1">&gt; generated by GNU Autoconf 2.59.  Invocation command line was
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   $ ./configure CC=/opt/intel/cce/9.1.042/bin/icc
</span><br>
<span class="quotelev1">&gt; CXX=/opt/intel/cce/9.1.042/icpc F77=/opt/intel/fce/9.1.036/bin/ifort
</span><br>
<span class="quotelev1">&gt; FC=/opt/intel/fce/9.1.036/bin/ifort --with-libnuma=/usr/lib
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
<span class="quotelev1">&gt; hostname = deb64
</span><br>
<span class="quotelev1">&gt; uname -m = x86_64
</span><br>
<span class="quotelev1">&gt; uname -r = 2.6.18-3-amd64
</span><br>
<span class="quotelev1">&gt; uname -s = Linux
</span><br>
<span class="quotelev1">&gt; uname -v = #1 SMP Mon Dec 4 17:04:37 CET 2006
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/bin/uname -p = unknown
</span><br>
<span class="quotelev1">&gt; /bin/uname -X     = unknown
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /bin/arch              = x86_64
</span><br>
<span class="quotelev1">&gt; /usr/bin/arch -k       = unknown
</span><br>
<span class="quotelev1">&gt; /usr/convex/getsysinfo = unknown
</span><br>
<span class="quotelev1">&gt; hostinfo               = unknown
</span><br>
<span class="quotelev1">&gt; /bin/machine           = unknown
</span><br>
<span class="quotelev1">&gt; /usr/bin/oslevel       = unknown
</span><br>
<span class="quotelev1">&gt; /bin/universe          = unknown
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PATH: /home/francesco/nwchem50/bin
</span><br>
<span class="quotelev1">&gt; PATH: /opt/intel/cce/9.1.042/bin
</span><br>
<span class="quotelev1">&gt; PATH: /opt/intel/fce/9.1.036/bin
</span><br>
<span class="quotelev1">&gt; PATH: /home/francesco/gmmx06
</span><br>
<span class="quotelev1">&gt; PATH: /usr/local/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/bin
</span><br>
<span class="quotelev1">&gt; PATH: /bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/bin/X11
</span><br>
<span class="quotelev1">&gt; PATH: /usr/games
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
<span class="quotelev1">&gt; configure:1833: checking for a BSD-compatible install
</span><br>
<span class="quotelev1">&gt; configure:1888: result: /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; configure:1899: checking whether build environment is sane
</span><br>
<span class="quotelev1">&gt; configure:1942: result: yes
</span><br>
<span class="quotelev1">&gt; configure:2007: checking for gawk
</span><br>
<span class="quotelev1">&gt; configure:2036: result: no
</span><br>
<span class="quotelev1">&gt; configure:2007: checking for mawk
</span><br>
<span class="quotelev1">&gt; configure:2023: found /usr/bin/mawk
</span><br>
<span class="quotelev1">&gt; configure:2033: result: mawk
</span><br>
<span class="quotelev1">&gt; configure:2043: checking whether make sets $(MAKE)
</span><br>
<span class="quotelev1">&gt; configure:2063: result: yes
</span><br>
<span class="quotelev1">&gt; configure:2352: checking Open MPI version
</span><br>
<span class="quotelev1">&gt; configure:2354: result: 1.2.3
</span><br>
<span class="quotelev1">&gt; configure:2356: checking Open MPI Subversion repository version
</span><br>
<span class="quotelev1">&gt; configure:2358: result: r15136
</span><br>
<span class="quotelev1">&gt; configure:2454: checking Open Run-Time Environment version
</span><br>
<span class="quotelev1">&gt; configure:2456: result: 1.2.3
</span><br>
<span class="quotelev1">&gt; configure:2458: checking Open Run-Time Environment Subversion repository
</span><br>
<span class="quotelev1">&gt; version
</span><br>
<span class="quotelev1">&gt; configure:2460: result: r15136
</span><br>
<span class="quotelev1">&gt; configure:2556: checking Open Portable Access Layer version
</span><br>
<span class="quotelev1">&gt; configure:2558: result: 1.2.3
</span><br>
<span class="quotelev1">&gt; configure:2560: checking Open Portable Access Layer Subversion repository
</span><br>
<span class="quotelev1">&gt; version
</span><br>
<span class="quotelev1">&gt; configure:2562: result: r15136
</span><br>
<span class="quotelev1">&gt; configure:2619: builddir: /usr/local/openmpi-1.2.3
</span><br>
<span class="quotelev1">&gt; configure:2621: srcdir: /usr/local/openmpi-1.2.3
</span><br>
<span class="quotelev1">&gt; configure:2643: checking build system type
</span><br>
<span class="quotelev1">&gt; configure:2661: result: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; configure:2689: checking host system type
</span><br>
<span class="quotelev1">&gt; configure:2703: result: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; configure:2730: checking for ompi_clean
</span><br>
<span class="quotelev1">&gt; configure:2763: result: no
</span><br>
<span class="quotelev1">&gt; configure:2857: checking Whether to run code coverage
</span><br>
<span class="quotelev1">&gt; configure:2884: result: no
</span><br>
<span class="quotelev1">&gt; configure:2894: checking whether to debug memory usage
</span><br>
<span class="quotelev1">&gt; configure:2906: result: no
</span><br>
<span class="quotelev1">&gt; configure:2926: checking whether to profile memory usage
</span><br>
<span class="quotelev1">&gt; configure:2938: result: no
</span><br>
<span class="quotelev1">&gt; configure:2958: checking if want developer-level compiler pickyness
</span><br>
<span class="quotelev1">&gt; configure:2970: result: no
</span><br>
<span class="quotelev1">&gt; configure:2985: checking if want developer-level debugging code
</span><br>
<span class="quotelev1">&gt; configure:2997: result: no
</span><br>
<span class="quotelev1">&gt; configure:3027: checking if want Fortran 77 bindings
</span><br>
<span class="quotelev1">&gt; configure:3035: result: yes
</span><br>
<span class="quotelev1">&gt; configure:3049: checking if want Fortran 90 bindings
</span><br>
<span class="quotelev1">&gt; configure:3057: result: yes
</span><br>
<span class="quotelev1">&gt; configure:3066: checking desired Fortran 90 bindings &quot;size&quot;
</span><br>
<span class="quotelev1">&gt; configure:3148: result: small
</span><br>
<span class="quotelev1">&gt; configure:3155: checking whether to enable PMPI
</span><br>
<span class="quotelev1">&gt; configure:3163: result: yes
</span><br>
<span class="quotelev1">&gt; configure:3180: checking if want C++ bindings
</span><br>
<span class="quotelev1">&gt; configure:3188: result: yes
</span><br>
<span class="quotelev1">&gt; configure:3197: checking if want MPI::SEEK_SET support
</span><br>
<span class="quotelev1">&gt; configure:3205: result: yes
</span><br>
<span class="quotelev1">&gt; configure:3223: checking if want to enable weak symbol support
</span><br>
<span class="quotelev1">&gt; configure:3231: result: yes
</span><br>
<span class="quotelev1">&gt; configure:3244: checking if want run-time MPI parameter checking
</span><br>
<span class="quotelev1">&gt; configure:3265: result: runtime
</span><br>
<span class="quotelev1">&gt; configure:3288: checking if want to install OMPI header files
</span><br>
<span class="quotelev1">&gt; configure:3301: result: no
</span><br>
<span class="quotelev1">&gt; configure:3319: checking if want pretty-print stacktrace
</span><br>
<span class="quotelev1">&gt; configure:3331: result: yes
</span><br>
<span class="quotelev1">&gt; configure:3344: checking if want deprecated executable names
</span><br>
<span class="quotelev1">&gt; configure:3356: result: no
</span><br>
<span class="quotelev1">&gt; configure:3376: checking if peruse support is required
</span><br>
<span class="quotelev1">&gt; configure:3388: result: no
</span><br>
<span class="quotelev1">&gt; configure:3413: checking max supported array dimension in F90 MPI bindings
</span><br>
<span class="quotelev1">&gt; configure:3428: result: 4
</span><br>
<span class="quotelev1">&gt; configure:3433: checking if pty support should be enabled
</span><br>
<span class="quotelev1">&gt; configure:3445: result: yes
</span><br>
<span class="quotelev1">&gt; configure:3458: checking if user wants dlopen support
</span><br>
<span class="quotelev1">&gt; configure:3473: result: yes
</span><br>
<span class="quotelev1">&gt; configure:3481: checking if heterogeneous support should be enabled
</span><br>
<span class="quotelev1">&gt; configure:3493: result: yes
</span><br>
<span class="quotelev1">&gt; configure:3507: checking if want trace file debugging
</span><br>
<span class="quotelev1">&gt; configure:3519: result: no
</span><br>
<span class="quotelev1">&gt; configure:3593: checking if want IPv6 support
</span><br>
<span class="quotelev1">&gt; configure:3605: result: yes (if underlying system supports it)
</span><br>
<span class="quotelev1">&gt; configure:3618: checking if want orterun &quot;--prefix&quot; behavior to be enabled by
</span><br>
<span class="quotelev1">&gt; default
</span><br>
<span class="quotelev1">&gt; configure:3638: result: no
</span><br>
<span class="quotelev1">&gt; configure:3859: checking for style of include used by make
</span><br>
<span class="quotelev1">&gt; configure:3887: result: GNU
</span><br>
<span class="quotelev1">&gt; configure:3963: checking for gcc
</span><br>
<span class="quotelev1">&gt; configure:3989: result: /opt/intel/cce/9.1.042/bin/icc
</span><br>
<span class="quotelev1">&gt; configure:4233: checking for C compiler version
</span><br>
<span class="quotelev1">&gt; configure:4236: /opt/intel/cce/9.1.042/bin/icc --version &lt;/dev/null &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; icc (ICC) 9.1 20060707
</span><br>
<span class="quotelev1">&gt; Copyright (C) 1985-2006 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:4239: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:4241: /opt/intel/cce/9.1.042/bin/icc -v &lt;/dev/null &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; Version 9.1 
</span><br>
<span class="quotelev1">&gt; configure:4244: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:4246: /opt/intel/cce/9.1.042/bin/icc -V &lt;/dev/null &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; Intel(R) C Compiler for Intel(R) EM64T-based applications, Version 9.1   
</span><br>
<span class="quotelev1">&gt; Build 20060707 Package ID: &lt;installpackageid&gt;
</span><br>
<span class="quotelev1">&gt; Copyright (C) 1985-2006 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; FOR NON-COMMERCIAL USE ONLY
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:4249: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:4272: checking for C compiler default output file name
</span><br>
<span class="quotelev1">&gt; configure:4275: /opt/intel/cce/9.1.042/bin/icc -DNDEBUG    conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:4278: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:4324: result: a.out
</span><br>
<span class="quotelev1">&gt; configure:4329: checking whether the C compiler works
</span><br>
<span class="quotelev1">&gt; configure:4335: ./a.out
</span><br>
<span class="quotelev1">&gt; configure:4338: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:4355: result: yes
</span><br>
<span class="quotelev1">&gt; configure:4362: checking whether we are cross compiling
</span><br>
<span class="quotelev1">&gt; configure:4364: result: no
</span><br>
<span class="quotelev1">&gt; configure:4367: checking for suffix of executables
</span><br>
<span class="quotelev1">&gt; configure:4369: /opt/intel/cce/9.1.042/bin/icc -o conftest -DNDEBUG   
</span><br>
<span class="quotelev1">&gt; conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:4372: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:4397: result: 
</span><br>
<span class="quotelev1">&gt; configure:4403: checking for suffix of object files
</span><br>
<span class="quotelev1">&gt; configure:4424: /opt/intel/cce/9.1.042/bin/icc -c -DNDEBUG   conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:4427: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:4449: result: o
</span><br>
<span class="quotelev1">&gt; configure:4453: checking whether we are using the GNU C compiler
</span><br>
<span class="quotelev1">&gt; configure:4477: /opt/intel/cce/9.1.042/bin/icc -c -DNDEBUG   conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:4483: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:4487: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:4490: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:4493: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:4496: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:4509: result: yes
</span><br>
<span class="quotelev1">&gt; configure:4515: checking whether /opt/intel/cce/9.1.042/bin/icc accepts -g
</span><br>
<span class="quotelev1">&gt; configure:4536: /opt/intel/cce/9.1.042/bin/icc -c -g  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:4542: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:4546: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:4549: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:4552: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:4555: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:4566: result: yes
</span><br>
<span class="quotelev1">&gt; configure:4583: checking for /opt/intel/cce/9.1.042/bin/icc option to accept
</span><br>
<span class="quotelev1">&gt; ANSI C
</span><br>
<span class="quotelev1">&gt; configure:4653: /opt/intel/cce/9.1.042/bin/icc  -c -DNDEBUG   conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:4659: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:4663: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:4666: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:4669: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:4672: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:4690: result: none needed
</span><br>
<span class="quotelev1">&gt; configure:4708: /opt/intel/cce/9.1.042/bin/icc -c -DNDEBUG   conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(2): error: identifier &quot;choke&quot; is undefined
</span><br>
<span class="quotelev1">&gt;     choke me
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; conftest.c(3): error: expected a &quot;;&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compilation aborted for conftest.c (code 2)
</span><br>
<span class="quotelev1">&gt; configure:4714: $? = 2
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; |   choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:4849: checking dependency style of /opt/intel/cce/9.1.042/bin/icc
</span><br>
<span class="quotelev1">&gt; configure:4939: result: gcc3
</span><br>
<span class="quotelev1">&gt; configure:4967: checking whether /opt/intel/cce/9.1.042/bin/icc and cc
</span><br>
<span class="quotelev1">&gt; understand -c and -o together
</span><br>
<span class="quotelev1">&gt; configure:4997: /opt/intel/cce/9.1.042/bin/icc -c conftest.c -o conftest.o
</span><br>
<span class="quotelev2">&gt; &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:5000: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:5002: /opt/intel/cce/9.1.042/bin/icc -c conftest.c -o conftest.o
</span><br>
<span class="quotelev2">&gt; &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:5005: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:5012: cc -c conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:5015: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:5018: cc -c conftest.c -o conftest.o &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:5021: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:5023: cc -c conftest.c -o conftest.o &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:5026: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:5044: result: yes
</span><br>
<span class="quotelev1">&gt; configure:5075: checking how to run the C preprocessor
</span><br>
<span class="quotelev1">&gt; configure:5110: /opt/intel/cce/9.1.042/bin/icc -E  conftest.c
</span><br>
<span class="quotelev1">&gt; configure:5116: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:5148: /opt/intel/cce/9.1.042/bin/icc -E  conftest.c
</span><br>
<span class="quotelev1">&gt; conftest.c(38): error #5: could not open source file &quot;ac_nonexistent.h&quot;
</span><br>
<span class="quotelev1">&gt;   #include &lt;ac_nonexistent.h&gt;
</span><br>
<span class="quotelev1">&gt;                              ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:5154: $? = 2
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;x86_64-unknown-linux-gnu&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;/opt/intel/cce/9.1.042/bin/icc&quot;
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #include &lt;ac_nonexistent.h&gt;
</span><br>
<span class="quotelev1">&gt; configure:5193: result: /opt/intel/cce/9.1.042/bin/icc -E
</span><br>
<span class="quotelev1">&gt; configure:5217: /opt/intel/cce/9.1.042/bin/icc -E  conftest.c
</span><br>
<span class="quotelev1">&gt; configure:5223: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:5255: /opt/intel/cce/9.1.042/bin/icc -E  conftest.c
</span><br>
<span class="quotelev1">&gt; conftest.c(38): error #5: could not open source file &quot;ac_nonexistent.h&quot;
</span><br>
<span class="quotelev1">&gt;   #include &lt;ac_nonexistent.h&gt;
</span><br>
<span class="quotelev1">&gt;                              ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:5261: $? = 2
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;x86_64-unknown-linux-gnu&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;/opt/intel/cce/9.1.042/bin/icc&quot;
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #include &lt;ac_nonexistent.h&gt;
</span><br>
<span class="quotelev1">&gt; configure:5305: checking for egrep
</span><br>
<span class="quotelev1">&gt; configure:5315: result: grep -E
</span><br>
<span class="quotelev1">&gt; configure:5332: checking for the C compiler vendor
</span><br>
<span class="quotelev1">&gt; configure:5360: /opt/intel/cce/9.1.042/bin/icc -c -DNDEBUG   conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:5366: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:5370: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:5373: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:5376: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:5379: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:6589: result: intel
</span><br>
<span class="quotelev1">&gt; configure:6597: checking for ANSI C header files
</span><br>
<span class="quotelev1">&gt; configure:6622: /opt/intel/cce/9.1.042/bin/icc -c -DNDEBUG   conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:6628: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:6632: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:6635: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:6638: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:6641: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:6730: /opt/intel/cce/9.1.042/bin/icc -o conftest -DNDEBUG   
</span><br>
<span class="quotelev1">&gt; conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:6733: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:6735: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:6738: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:6753: result: yes
</span><br>
<span class="quotelev1">&gt; configure:7385: checking if /opt/intel/cce/9.1.042/bin/icc supports
</span><br>
<span class="quotelev1">&gt; -finline-functions
</span><br>
<span class="quotelev1">&gt; configure:7406: /opt/intel/cce/9.1.042/bin/icc -c -DNDEBUG 
</span><br>
<span class="quotelev1">&gt; -finline-functions  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:7412: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:7416: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:7419: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:7422: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:7425: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:7436: result: yes
</span><br>
<span class="quotelev1">&gt; configure:7446: checking if /opt/intel/cce/9.1.042/bin/icc supports
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt; configure:7467: /opt/intel/cce/9.1.042/bin/icc -c -DNDEBUG 
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:7473: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:7477: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:7480: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:7483: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:7486: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:7497: result: yes
</span><br>
<span class="quotelev1">&gt; configure:7573: WARNING:  -fno-strict-aliasing has been added to CFLAGS
</span><br>
<span class="quotelev1">&gt; configure:7592: checking if /opt/intel/cce/9.1.042/bin/icc supports -restrict
</span><br>
<span class="quotelev1">&gt; configure:7613: /opt/intel/cce/9.1.042/bin/icc -c -DNDEBUG -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:7619: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:7623: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:7626: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:7629: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:7632: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:7643: result: yes
</span><br>
<span class="quotelev1">&gt; configure:7720: WARNING:  -restrict has been added to CFLAGS
</span><br>
<span class="quotelev1">&gt; configure:7727: checking if /opt/intel/cce/9.1.042/bin/icc supports
</span><br>
<span class="quotelev1">&gt; __builtin_expect
</span><br>
<span class="quotelev1">&gt; configure:7749: /opt/intel/cce/9.1.042/bin/icc -o conftest -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:7755: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:7759: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:7762: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:7765: test -s conftest
</span><br>
<span class="quotelev1">&gt; configure:7768: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:7780: result: yes
</span><br>
<span class="quotelev1">&gt; configure:7794: checking if /opt/intel/cce/9.1.042/bin/icc supports
</span><br>
<span class="quotelev1">&gt; __builtin_prefetch
</span><br>
<span class="quotelev1">&gt; configure:7816: /opt/intel/cce/9.1.042/bin/icc -o conftest -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:7822: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:7826: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:7829: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:7832: test -s conftest
</span><br>
<span class="quotelev1">&gt; configure:7835: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:7847: result: yes
</span><br>
<span class="quotelev1">&gt; configure:7942: checking for C optimization flags
</span><br>
<span class="quotelev1">&gt; configure:8006: result: -O3 -DNDEBUG -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt; -restrict
</span><br>
<span class="quotelev1">&gt; configure:8042: checking for sys/types.h
</span><br>
<span class="quotelev1">&gt; configure:8058: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:8064: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8068: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8071: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8074: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8077: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8088: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8042: checking for sys/stat.h
</span><br>
<span class="quotelev1">&gt; configure:8058: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:8064: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8068: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8071: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8074: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8077: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8088: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8042: checking for stdlib.h
</span><br>
<span class="quotelev1">&gt; configure:8058: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:8064: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8068: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8071: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8074: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8077: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8088: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8042: checking for string.h
</span><br>
<span class="quotelev1">&gt; configure:8058: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:8064: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8068: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8071: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8074: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8077: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8088: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8042: checking for memory.h
</span><br>
<span class="quotelev1">&gt; configure:8058: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:8064: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8068: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8071: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8074: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8077: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8088: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8042: checking for strings.h
</span><br>
<span class="quotelev1">&gt; configure:8058: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:8064: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8068: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8071: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8074: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8077: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8088: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8042: checking for inttypes.h
</span><br>
<span class="quotelev1">&gt; configure:8058: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:8064: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8068: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8071: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8074: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8077: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8088: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8042: checking for stdint.h
</span><br>
<span class="quotelev1">&gt; configure:8058: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:8064: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8068: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8071: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8074: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8077: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8088: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8042: checking for unistd.h
</span><br>
<span class="quotelev1">&gt; configure:8058: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:8064: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8068: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8071: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8074: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8077: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8088: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8100: checking for long long
</span><br>
<span class="quotelev1">&gt; configure:8124: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(88): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((long long *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:8130: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8134: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8137: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8140: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8143: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8154: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8165: checking for long double
</span><br>
<span class="quotelev1">&gt; configure:8189: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(89): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((long double *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:8195: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8199: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8202: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8205: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8208: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8219: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8230: checking for int8_t
</span><br>
<span class="quotelev1">&gt; configure:8254: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(90): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((int8_t *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:8260: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8264: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8267: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8270: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8273: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8284: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8295: checking for uint8_t
</span><br>
<span class="quotelev1">&gt; configure:8319: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(91): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((uint8_t *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:8325: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8329: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8332: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8335: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8338: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8349: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8360: checking for int16_t
</span><br>
<span class="quotelev1">&gt; configure:8384: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(92): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((int16_t *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:8390: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8394: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8397: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8400: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8403: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8414: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8425: checking for uint16_t
</span><br>
<span class="quotelev1">&gt; configure:8449: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(93): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((uint16_t *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:8455: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8459: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8462: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8465: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8468: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8479: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8490: checking for int32_t
</span><br>
<span class="quotelev1">&gt; configure:8514: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(94): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((int32_t *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:8520: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8524: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8527: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8530: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8533: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8544: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8555: checking for uint32_t
</span><br>
<span class="quotelev1">&gt; configure:8579: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(95): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((uint32_t *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:8585: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8589: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8592: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8595: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8598: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8609: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8620: checking for int64_t
</span><br>
<span class="quotelev1">&gt; configure:8644: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(96): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((int64_t *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:8650: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8654: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8657: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8660: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8663: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8674: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8685: checking for uint64_t
</span><br>
<span class="quotelev1">&gt; configure:8709: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(97): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((uint64_t *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:8715: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8719: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8722: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8725: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8728: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8739: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8750: checking for intptr_t
</span><br>
<span class="quotelev1">&gt; configure:8774: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(98): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((intptr_t *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:8780: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8784: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8787: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8790: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8793: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8804: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8815: checking for uintptr_t
</span><br>
<span class="quotelev1">&gt; configure:8839: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(99): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((uintptr_t *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:8845: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8849: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8852: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8855: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8858: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8869: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8880: checking for mode_t
</span><br>
<span class="quotelev1">&gt; configure:8904: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(100): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((mode_t *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:8910: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8914: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8917: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8920: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8923: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8934: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8945: checking for ssize_t
</span><br>
<span class="quotelev1">&gt; configure:8969: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(101): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((ssize_t *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:8975: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8979: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:8982: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8985: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:8988: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8999: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9010: checking for ptrdiff_t
</span><br>
<span class="quotelev1">&gt; configure:9034: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(102): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((ptrdiff_t *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:9040: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9044: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:9047: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9050: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:9053: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9064: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9080: checking for char
</span><br>
<span class="quotelev1">&gt; configure:9104: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(103): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((char *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:9110: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9114: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:9117: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9120: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:9123: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9134: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9137: checking size of char
</span><br>
<span class="quotelev1">&gt; configure:9456: /opt/intel/cce/9.1.042/bin/icc -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9459: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9461: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:9464: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9487: result: 1
</span><br>
<span class="quotelev1">&gt; configure:9494: checking for short
</span><br>
<span class="quotelev1">&gt; configure:9518: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(104): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((short *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:9524: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9528: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:9531: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9534: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:9537: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9548: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9551: checking size of short
</span><br>
<span class="quotelev1">&gt; configure:9870: /opt/intel/cce/9.1.042/bin/icc -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9873: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9875: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:9878: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9901: result: 2
</span><br>
<span class="quotelev1">&gt; configure:9908: checking for int
</span><br>
<span class="quotelev1">&gt; configure:9932: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(105): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((int *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:9938: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9942: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:9945: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9948: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:9951: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9962: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9965: checking size of int
</span><br>
<span class="quotelev1">&gt; configure:10284: /opt/intel/cce/9.1.042/bin/icc -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:10287: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:10289: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:10292: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:10315: result: 4
</span><br>
<span class="quotelev1">&gt; configure:10322: checking for long
</span><br>
<span class="quotelev1">&gt; configure:10346: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(106): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((long *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:10352: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:10356: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:10359: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:10362: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:10365: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:10376: result: yes
</span><br>
<span class="quotelev1">&gt; configure:10379: checking size of long
</span><br>
<span class="quotelev1">&gt; configure:10698: /opt/intel/cce/9.1.042/bin/icc -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:10701: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:10703: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:10706: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:10729: result: 8
</span><br>
<span class="quotelev1">&gt; configure:10737: checking for long long
</span><br>
<span class="quotelev1">&gt; configure:10791: result: yes
</span><br>
<span class="quotelev1">&gt; configure:10794: checking size of long long
</span><br>
<span class="quotelev1">&gt; configure:11113: /opt/intel/cce/9.1.042/bin/icc -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:11116: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:11118: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:11121: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:11144: result: 8
</span><br>
<span class="quotelev1">&gt; configure:11153: checking for long double
</span><br>
<span class="quotelev1">&gt; configure:11207: result: yes
</span><br>
<span class="quotelev1">&gt; configure:11210: checking size of long double
</span><br>
<span class="quotelev1">&gt; configure:11529: /opt/intel/cce/9.1.042/bin/icc -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:11532: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:11534: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:11537: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:11560: result: 16
</span><br>
<span class="quotelev1">&gt; configure:11568: checking for float
</span><br>
<span class="quotelev1">&gt; configure:11592: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(109): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((float *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:11598: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:11602: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:11605: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:11608: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:11611: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:11622: result: yes
</span><br>
<span class="quotelev1">&gt; configure:11625: checking size of float
</span><br>
<span class="quotelev1">&gt; configure:11944: /opt/intel/cce/9.1.042/bin/icc -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:11947: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:11949: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:11952: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:11975: result: 4
</span><br>
<span class="quotelev1">&gt; configure:11982: checking for double
</span><br>
<span class="quotelev1">&gt; configure:12006: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(110): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((double *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:12012: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:12016: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:12019: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:12022: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:12025: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:12036: result: yes
</span><br>
<span class="quotelev1">&gt; configure:12039: checking size of double
</span><br>
<span class="quotelev1">&gt; configure:12358: /opt/intel/cce/9.1.042/bin/icc -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:12361: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:12363: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:12366: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:12389: result: 8
</span><br>
<span class="quotelev1">&gt; configure:12396: checking for void *
</span><br>
<span class="quotelev1">&gt; configure:12420: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(111): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((void * *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:12426: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:12430: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:12433: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:12436: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:12439: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:12450: result: yes
</span><br>
<span class="quotelev1">&gt; configure:12453: checking size of void *
</span><br>
<span class="quotelev1">&gt; configure:12772: /opt/intel/cce/9.1.042/bin/icc -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:12775: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:12777: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:12780: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:12803: result: 8
</span><br>
<span class="quotelev1">&gt; configure:12810: checking for size_t
</span><br>
<span class="quotelev1">&gt; configure:12834: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(112): warning #279: controlling expression is constant
</span><br>
<span class="quotelev1">&gt;   if ((size_t *) 0)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:12840: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:12844: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:12847: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:12850: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:12853: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:12864: result: yes
</span><br>
<span class="quotelev1">&gt; configure:12867: checking size of size_t
</span><br>
<span class="quotelev1">&gt; configure:13186: /opt/intel/cce/9.1.042/bin/icc -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:13189: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:13191: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:13194: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:13217: result: 8
</span><br>
<span class="quotelev1">&gt; configure:13225: checking for ssize_t
</span><br>
<span class="quotelev1">&gt; configure:13279: result: yes
</span><br>
<span class="quotelev1">&gt; configure:13282: checking size of ssize_t
</span><br>
<span class="quotelev1">&gt; configure:13601: /opt/intel/cce/9.1.042/bin/icc -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:13604: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:13606: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:13609: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:13632: result: 8
</span><br>
<span class="quotelev1">&gt; configure:13641: checking for ptrdiff_t
</span><br>
<span class="quotelev1">&gt; configure:13695: result: yes
</span><br>
<span class="quotelev1">&gt; configure:13698: checking size of ptrdiff_t
</span><br>
<span class="quotelev1">&gt; configure:14017: /opt/intel/cce/9.1.042/bin/icc -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:14020: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:14022: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:14025: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:14048: result: 8
</span><br>
<span class="quotelev1">&gt; configure:14062: checking alignment of char
</span><br>
<span class="quotelev1">&gt; configure:14465: /opt/intel/cce/9.1.042/bin/icc -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:14468: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:14470: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:14473: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:14493: result: 1
</span><br>
<span class="quotelev1">&gt; configure:14505: checking alignment of short
</span><br>
<span class="quotelev1">&gt; configure:14908: /opt/intel/cce/9.1.042/bin/icc -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:14911: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:14913: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:14916: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:14936: result: 2
</span><br>
<span class="quotelev1">&gt; configure:14948: checking alignment of wchar_t
</span><br>
<span class="quotelev1">&gt; configure:15351: /opt/intel/cce/9.1.042/bin/icc -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:15354: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:15356: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:15359: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:15379: result: 4
</span><br>
<span class="quotelev1">&gt; configure:15391: checking alignment of int
</span><br>
<span class="quotelev1">&gt; configure:15794: /opt/intel/cce/9.1.042/bin/icc -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:15797: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:15799: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:15802: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:15822: result: 4
</span><br>
<span class="quotelev1">&gt; configure:15834: checking alignment of long
</span><br>
<span class="quotelev1">&gt; configure:16237: /opt/intel/cce/9.1.042/bin/icc -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:16240: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:16242: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:16245: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:16265: result: 8
</span><br>
<span class="quotelev1">&gt; configure:16278: checking alignment of long long
</span><br>
<span class="quotelev1">&gt; configure:16681: /opt/intel/cce/9.1.042/bin/icc -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:16684: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:16686: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:16689: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:16709: result: 8
</span><br>
<span class="quotelev1">&gt; configure:16722: checking alignment of float
</span><br>
<span class="quotelev1">&gt; configure:17125: /opt/intel/cce/9.1.042/bin/icc -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:17128: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:17130: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:17133: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:17153: result: 4
</span><br>
<span class="quotelev1">&gt; configure:17165: checking alignment of double
</span><br>
<span class="quotelev1">&gt; configure:17568: /opt/intel/cce/9.1.042/bin/icc -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:17571: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:17573: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:17576: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:17596: result: 8
</span><br>
<span class="quotelev1">&gt; configure:17609: checking alignment of long double
</span><br>
<span class="quotelev1">&gt; configure:18012: /opt/intel/cce/9.1.042/bin/icc -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:18015: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:18017: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:18020: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:18040: result: 16
</span><br>
<span class="quotelev1">&gt; configure:18053: checking alignment of void *
</span><br>
<span class="quotelev1">&gt; configure:18456: /opt/intel/cce/9.1.042/bin/icc -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:18459: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:18461: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:18464: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:18484: result: 8
</span><br>
<span class="quotelev1">&gt; configure:18501: checking for C bool type
</span><br>
<span class="quotelev1">&gt; configure:18520: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(126): error: identifier &quot;bool&quot; is undefined
</span><br>
<span class="quotelev1">&gt;   bool bar, foo = true; bar = foo;
</span><br>
<span class="quotelev1">&gt;   ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; conftest.c(126): error: identifier &quot;true&quot; is undefined
</span><br>
<span class="quotelev1">&gt;   bool bar, foo = true; bar = foo;
</span><br>
<span class="quotelev1">&gt;                   ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compilation aborted for conftest.c (code 2)
</span><br>
<span class="quotelev1">&gt; configure:18526: $? = 2
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;x86_64-unknown-linux-gnu&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;/opt/intel/cce/9.1.042/bin/icc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; | #if HAVE_SYS_TYPES_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #if HAVE_SYS_STAT_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;sys/stat.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #if STDC_HEADERS
</span><br>
<span class="quotelev1">&gt; | # include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; | # include &lt;stddef.h&gt;
</span><br>
<span class="quotelev1">&gt; | #else
</span><br>
<span class="quotelev1">&gt; | # if HAVE_STDLIB_H
</span><br>
<span class="quotelev1">&gt; | #  include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; | # endif
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #if HAVE_STRING_H
</span><br>
<span class="quotelev1">&gt; | # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
</span><br>
<span class="quotelev1">&gt; | #  include &lt;memory.h&gt;
</span><br>
<span class="quotelev1">&gt; | # endif
</span><br>
<span class="quotelev1">&gt; | # include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #if HAVE_STRINGS_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;strings.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #if HAVE_INTTYPES_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;inttypes.h&gt;
</span><br>
<span class="quotelev1">&gt; | #else
</span><br>
<span class="quotelev1">&gt; | # if HAVE_STDINT_H
</span><br>
<span class="quotelev1">&gt; | #  include &lt;stdint.h&gt;
</span><br>
<span class="quotelev1">&gt; | # endif
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #if HAVE_UNISTD_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | int
</span><br>
<span class="quotelev1">&gt; | main ()
</span><br>
<span class="quotelev1">&gt; | {
</span><br>
<span class="quotelev1">&gt; | bool bar, foo = true; bar = foo;
</span><br>
<span class="quotelev1">&gt; |   ;
</span><br>
<span class="quotelev1">&gt; |   return 0;
</span><br>
<span class="quotelev1">&gt; | }
</span><br>
<span class="quotelev1">&gt; configure:18554: result: no
</span><br>
<span class="quotelev1">&gt; configure:18582: checking for inline
</span><br>
<span class="quotelev1">&gt; configure:18603: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG  -Werror
</span><br>
<span class="quotelev1">&gt; -ansi  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(91): error: identifier &quot;inline&quot; is undefined
</span><br>
<span class="quotelev1">&gt;   static inline foo_t static_foo () {return 0; }
</span><br>
<span class="quotelev1">&gt;          ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; conftest.c(91): error: &quot;foo_t&quot; has already been declared in the current scope
</span><br>
<span class="quotelev1">&gt;   static inline foo_t static_foo () {return 0; }
</span><br>
<span class="quotelev1">&gt;                 ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; conftest.c(91): error: expected a &quot;;&quot;
</span><br>
<span class="quotelev1">&gt;   static inline foo_t static_foo () {return 0; }
</span><br>
<span class="quotelev1">&gt;                       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; conftest.c(94): error #12: parsing restarts here after previous syntax error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compilation aborted for conftest.c (code 2)
</span><br>
<span class="quotelev1">&gt; configure:18609: $? = 2
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;x86_64-unknown-linux-gnu&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;/opt/intel/cce/9.1.042/bin/icc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; | typedef int foo_t;
</span><br>
<span class="quotelev1">&gt; | static inline foo_t static_foo () {return 0; }
</span><br>
<span class="quotelev1">&gt; | inline foo_t foo () {return 0; }
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; configure:18603: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG  -Werror
</span><br>
<span class="quotelev1">&gt; -ansi  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:18609: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:18613: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:18616: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:18619: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:18622: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:18634: result: __inline__
</span><br>
<span class="quotelev1">&gt; configure:18659: checking for C/C++ restrict keyword
</span><br>
<span class="quotelev1">&gt; configure:18677: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG  -Werror
</span><br>
<span class="quotelev1">&gt; -ansi  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(92): error: expected a &quot;;&quot;
</span><br>
<span class="quotelev1">&gt;   float * restrict x;
</span><br>
<span class="quotelev1">&gt;                    ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compilation aborted for conftest.c (code 2)
</span><br>
<span class="quotelev1">&gt; configure:18683: $? = 2
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;x86_64-unknown-linux-gnu&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;/opt/intel/cce/9.1.042/bin/icc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; | #define inline __inline__
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | float * restrict x;
</span><br>
<span class="quotelev1">&gt; configure:18677: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG  -Werror
</span><br>
<span class="quotelev1">&gt; -ansi  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:18683: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:18687: test -z 
</span><br>
<span class="quotelev1">&gt; 			 || test ! -s conftest.err
</span><br>
<span class="quotelev1">&gt; configure:18690: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:18693: test -s conftest.o
</span><br>
<span class="quotelev1">&gt; configure:18696: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:18708: result: __restrict
</span><br>
<span class="quotelev1">&gt; configure:18725: checking for weak symbol support
</span><br>
<span class="quotelev1">&gt; configure:18756: /opt/intel/cce/9.1.042/bin/icc -O3 -DNDEBUG  -Werror -ansi 
</span><br>
<span class="quotelev1">&gt; -c conftest_weak.c
</span><br>
<span class="quotelev1">&gt; configure:18763: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:18773: /opt/intel/cce/9.1.042/bin/icc -O3 -DNDEBUG  -Werror -ansi 
</span><br>
<span class="quotelev1">&gt; conftest.c conftest_weak.o -o conftest  
</span><br>
<span class="quotelev1">&gt; configure:18780: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:18807: result: yes
</span><br>
<span class="quotelev1">&gt; configure:19078: checking for C++ compiler version
</span><br>
<span class="quotelev1">&gt; configure:19081: /opt/intel/cce/9.1.042/icpc --version &lt;/dev/null &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 19082: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:19084: $? = 127
</span><br>
<span class="quotelev1">&gt; configure:19086: /opt/intel/cce/9.1.042/icpc -v &lt;/dev/null &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 19087: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:19089: $? = 127
</span><br>
<span class="quotelev1">&gt; configure:19091: /opt/intel/cce/9.1.042/icpc -V &lt;/dev/null &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 19092: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:19094: $? = 127
</span><br>
<span class="quotelev1">&gt; configure:19097: checking whether we are using the GNU C++ compiler
</span><br>
<span class="quotelev1">&gt; configure:19121: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 19122: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:19127: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;x86_64-unknown-linux-gnu&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;/opt/intel/cce/9.1.042/bin/icc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; | #define inline __inline__
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #define restrict __restrict
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MPI_PROFILING 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_HAVE_WEAK_SYMBOLS 1
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | int
</span><br>
<span class="quotelev1">&gt; | main ()
</span><br>
<span class="quotelev1">&gt; | {
</span><br>
<span class="quotelev1">&gt; | #ifndef __GNUC__
</span><br>
<span class="quotelev1">&gt; |        choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; |   ;
</span><br>
<span class="quotelev1">&gt; |   return 0;
</span><br>
<span class="quotelev1">&gt; | }
</span><br>
<span class="quotelev1">&gt; configure:19153: result: no
</span><br>
<span class="quotelev1">&gt; configure:19159: checking whether /opt/intel/cce/9.1.042/icpc accepts -g
</span><br>
<span class="quotelev1">&gt; configure:19180: /opt/intel/cce/9.1.042/icpc -c -g  conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 19181: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:19186: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;x86_64-unknown-linux-gnu&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;/opt/intel/cce/9.1.042/bin/icc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; | #define inline __inline__
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #define restrict __restrict
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MPI_PROFILING 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_HAVE_WEAK_SYMBOLS 1
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | int
</span><br>
<span class="quotelev1">&gt; | main ()
</span><br>
<span class="quotelev1">&gt; | {
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; |   ;
</span><br>
<span class="quotelev1">&gt; |   return 0;
</span><br>
<span class="quotelev1">&gt; | }
</span><br>
<span class="quotelev1">&gt; configure:19210: result: no
</span><br>
<span class="quotelev1">&gt; configure:19252: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 19253: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:19258: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;x86_64-unknown-linux-gnu&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;/opt/intel/cce/9.1.042/bin/icc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; | #define inline __inline__
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #define restrict __restrict
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MPI_PROFILING 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_HAVE_WEAK_SYMBOLS 1
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; | int
</span><br>
<span class="quotelev1">&gt; | main ()
</span><br>
<span class="quotelev1">&gt; | {
</span><br>
<span class="quotelev1">&gt; | exit (42);
</span><br>
<span class="quotelev1">&gt; |   ;
</span><br>
<span class="quotelev1">&gt; |   return 0;
</span><br>
<span class="quotelev1">&gt; | }
</span><br>
<span class="quotelev1">&gt; configure:19252: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 19253: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:19258: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;x86_64-unknown-linux-gnu&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;/opt/intel/cce/9.1.042/bin/icc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; | #define inline __inline__
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #define restrict __restrict
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MPI_PROFILING 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_HAVE_WEAK_SYMBOLS 1
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | extern &quot;C&quot; void std::exit (int) throw (); using std::exit;
</span><br>
<span class="quotelev1">&gt; | #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; | int
</span><br>
<span class="quotelev1">&gt; | main ()
</span><br>
<span class="quotelev1">&gt; | {
</span><br>
<span class="quotelev1">&gt; | exit (42);
</span><br>
<span class="quotelev1">&gt; |   ;
</span><br>
<span class="quotelev1">&gt; |   return 0;
</span><br>
<span class="quotelev1">&gt; | }
</span><br>
<span class="quotelev1">&gt; configure:19252: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 19253: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:19258: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;x86_64-unknown-linux-gnu&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;/opt/intel/cce/9.1.042/bin/icc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; | #define inline __inline__
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #define restrict __restrict
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MPI_PROFILING 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_HAVE_WEAK_SYMBOLS 1
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | extern &quot;C&quot; void std::exit (int); using std::exit;
</span><br>
<span class="quotelev1">&gt; | #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; | int
</span><br>
<span class="quotelev1">&gt; | main ()
</span><br>
<span class="quotelev1">&gt; | {
</span><br>
<span class="quotelev1">&gt; | exit (42);
</span><br>
<span class="quotelev1">&gt; |   ;
</span><br>
<span class="quotelev1">&gt; |   return 0;
</span><br>
<span class="quotelev1">&gt; | }
</span><br>
<span class="quotelev1">&gt; configure:19252: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 19253: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:19258: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;x86_64-unknown-linux-gnu&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;/opt/intel/cce/9.1.042/bin/icc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; | #define inline __inline__
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #define restrict __restrict
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MPI_PROFILING 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_HAVE_WEAK_SYMBOLS 1
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | extern &quot;C&quot; void exit (int) throw ();
</span><br>
<span class="quotelev1">&gt; | #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; | int
</span><br>
<span class="quotelev1">&gt; | main ()
</span><br>
<span class="quotelev1">&gt; | {
</span><br>
<span class="quotelev1">&gt; | exit (42);
</span><br>
<span class="quotelev1">&gt; |   ;
</span><br>
<span class="quotelev1">&gt; |   return 0;
</span><br>
<span class="quotelev1">&gt; | }
</span><br>
<span class="quotelev1">&gt; configure:19252: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 19253: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:19258: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;x86_64-unknown-linux-gnu&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;/opt/intel/cce/9.1.042/bin/icc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; | #define inline __inline__
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #define restrict __restrict
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MPI_PROFILING 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_HAVE_WEAK_SYMBOLS 1
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | extern &quot;C&quot; void exit (int);
</span><br>
<span class="quotelev1">&gt; | #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; | int
</span><br>
<span class="quotelev1">&gt; | main ()
</span><br>
<span class="quotelev1">&gt; | {
</span><br>
<span class="quotelev1">&gt; | exit (42);
</span><br>
<span class="quotelev1">&gt; |   ;
</span><br>
<span class="quotelev1">&gt; |   return 0;
</span><br>
<span class="quotelev1">&gt; | }
</span><br>
<span class="quotelev1">&gt; configure:19252: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 19253: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:19258: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;x86_64-unknown-linux-gnu&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;/opt/intel/cce/9.1.042/bin/icc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; | #define inline __inline__
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #define restrict __restrict
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MPI_PROFILING 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_HAVE_WEAK_SYMBOLS 1
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | void exit (int);
</span><br>
<span class="quotelev1">&gt; | #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; | int
</span><br>
<span class="quotelev1">&gt; | main ()
</span><br>
<span class="quotelev1">&gt; | {
</span><br>
<span class="quotelev1">&gt; | exit (42);
</span><br>
<span class="quotelev1">&gt; |   ;
</span><br>
<span class="quotelev1">&gt; |   return 0;
</span><br>
<span class="quotelev1">&gt; | }
</span><br>
<span class="quotelev1">&gt; configure:19341: checking dependency style of /opt/intel/cce/9.1.042/icpc
</span><br>
<span class="quotelev1">&gt; configure:19431: result: none
</span><br>
<span class="quotelev1">&gt; configure:19453: checking how to run the C++ preprocessor
</span><br>
<span class="quotelev1">&gt; configure:19484: /opt/intel/cce/9.1.042/icpc -E  conftest.cc
</span><br>
<span class="quotelev1">&gt; ./configure: line 19485: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:19490: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;x86_64-unknown-linux-gnu&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;/opt/intel/cce/9.1.042/bin/icc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; | #define inline __inline__
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #define restrict __restrict
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MPI_PROFILING 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_HAVE_WEAK_SYMBOLS 1
</span><br>
<span class="quotelev1">&gt; | #ifdef __cplusplus
</span><br>
<span class="quotelev1">&gt; | void exit (int);
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #ifdef __STDC__
</span><br>
<span class="quotelev1">&gt; | # include &lt;limits.h&gt;
</span><br>
<span class="quotelev1">&gt; | #else
</span><br>
<span class="quotelev1">&gt; | # include &lt;assert.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | 		     Syntax error
</span><br>
<span class="quotelev1">&gt; configure:19484: /opt/intel/cce/9.1.042/icpc -E  conftest.cc
</span><br>
<span class="quotelev1">&gt; ./configure: line 19485: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:19490: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;x86_64-unknown-linux-gnu&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;/opt/intel/cce/9.1.042/bin/icc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; | #define inline __inline__
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #define restrict __restrict
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MPI_PROFILING 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_HAVE_WEAK_SYMBOLS 1
</span><br>
<span class="quotelev1">&gt; | #ifdef __cplusplus
</span><br>
<span class="quotelev1">&gt; | void exit (int);
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #ifdef __STDC__
</span><br>
<span class="quotelev1">&gt; | # include &lt;limits.h&gt;
</span><br>
<span class="quotelev1">&gt; | #else
</span><br>
<span class="quotelev1">&gt; | # include &lt;assert.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | 		     Syntax error
</span><br>
<span class="quotelev1">&gt; configure:19484: /lib/cpp  conftest.cc
</span><br>
<span class="quotelev1">&gt; configure:19490: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:19522: /lib/cpp  conftest.cc
</span><br>
<span class="quotelev1">&gt; conftest.cc:98:28: error: ac_nonexistent.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; configure:19528: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;x86_64-unknown-linux-gnu&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;/opt/intel/cce/9.1.042/bin/icc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; | #define inline __inline__
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #define restrict __restrict
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MPI_PROFILING 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_HAVE_WEAK_SYMBOLS 1
</span><br>
<span class="quotelev1">&gt; | #ifdef __cplusplus
</span><br>
<span class="quotelev1">&gt; | void exit (int);
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #include &lt;ac_nonexistent.h&gt;
</span><br>
<span class="quotelev1">&gt; configure:19567: result: /lib/cpp
</span><br>
<span class="quotelev1">&gt; configure:19591: /lib/cpp  conftest.cc
</span><br>
<span class="quotelev1">&gt; configure:19597: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:19629: /lib/cpp  conftest.cc
</span><br>
<span class="quotelev1">&gt; conftest.cc:98:28: error: ac_nonexistent.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; configure:19635: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;x86_64-unknown-linux-gnu&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;/opt/intel/cce/9.1.042/bin/icc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; | #define inline __inline__
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #define restrict __restrict
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MPI_PROFILING 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_HAVE_WEAK_SYMBOLS 1
</span><br>
<span class="quotelev1">&gt; | #ifdef __cplusplus
</span><br>
<span class="quotelev1">&gt; | void exit (int);
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #include &lt;ac_nonexistent.h&gt;
</span><br>
<span class="quotelev1">&gt; configure:19691: checking for the C++ compiler vendor
</span><br>
<span class="quotelev1">&gt; configure:19719: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 19720: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:19725: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #if !( defined(__INTEL_COMPILER) || defined(__ICC) )
</span><br>
<span class="quotelev1">&gt; | #error &quot;condition defined(__INTEL_COMPILER) || defined(__ICC) not met&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:19760: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 19761: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:19766: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #ifndef __GNUC__
</span><br>
<span class="quotelev1">&gt; | #error &quot;symbol __GNUC__ not defined&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:19801: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 19802: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:19807: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #ifndef __TURBOC__
</span><br>
<span class="quotelev1">&gt; | #error &quot;symbol __TURBOC__ not defined&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:19842: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 19843: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:19848: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #ifndef __BORLANDC__
</span><br>
<span class="quotelev1">&gt; | #error &quot;symbol __BORLANDC__ not defined&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:19883: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 19884: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:19889: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #ifndef __COMO__
</span><br>
<span class="quotelev1">&gt; | #error &quot;symbol __COMO__ not defined&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:19924: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 19925: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:19930: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #if !( defined(__DECC) || defined(VAXC) || defined(__VAXC) )
</span><br>
<span class="quotelev1">&gt; | #error &quot;condition defined(__DECC) || defined(VAXC) || defined(__VAXC) not
</span><br>
<span class="quotelev1">&gt; met&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:19958: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 19959: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:19964: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #if !( defined(__osf__) &amp;&amp; defined(__LANGUAGE_C__) )
</span><br>
<span class="quotelev1">&gt; | #error &quot;condition defined(__osf__) &amp;&amp; defined(__LANGUAGE_C__) not met&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:19992: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 19993: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:19998: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #ifndef __DECCXX
</span><br>
<span class="quotelev1">&gt; | #error &quot;symbol __DECCXX not defined&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20037: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 20038: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:20043: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #ifndef _CRAYC
</span><br>
<span class="quotelev1">&gt; | #error &quot;symbol _CRAYC not defined&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20078: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 20079: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:20084: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #ifndef __DCC__
</span><br>
<span class="quotelev1">&gt; | #error &quot;symbol __DCC__ not defined&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20119: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 20120: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:20125: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #if !( defined(__DMC__) || defined(__SC__) || defined(__ZTC__) )
</span><br>
<span class="quotelev1">&gt; | #error &quot;condition defined(__DMC__) || defined(__SC__) || defined(__ZTC__)
</span><br>
<span class="quotelev1">&gt; not met&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20160: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 20161: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:20166: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #if !( defined(__HP_cc) || defined(__HP_aCC) )
</span><br>
<span class="quotelev1">&gt; | #error &quot;condition defined(__HP_cc) || defined(__HP_aCC) not met&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20201: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 20202: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:20207: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #if !( defined(__xlC__) || defined(__IBMC__) || defined(__IBMCPP__) )
</span><br>
<span class="quotelev1">&gt; | #error &quot;condition defined(__xlC__) || defined(__IBMC__) ||
</span><br>
<span class="quotelev1">&gt; defined(__IBMCPP__) not met&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20235: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 20236: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:20241: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #if !( defined(_AIX) &amp;&amp; !defined(__GNUC__) )
</span><br>
<span class="quotelev1">&gt; | #error &quot;condition defined(_AIX) &amp;&amp; !defined(__GNUC__) not met&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20278: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 20279: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:20284: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #ifndef __KCC
</span><br>
<span class="quotelev1">&gt; | #error &quot;symbol __KCC not defined&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20319: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 20320: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:20325: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #ifndef __LCC__
</span><br>
<span class="quotelev1">&gt; | #error &quot;symbol __LCC__ not defined&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20360: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 20361: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:20366: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #ifndef __HIGHC__
</span><br>
<span class="quotelev1">&gt; | #error &quot;symbol __HIGHC__ not defined&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20401: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 20402: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:20407: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #ifndef __MWERKS__
</span><br>
<span class="quotelev1">&gt; | #error &quot;symbol __MWERKS__ not defined&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20442: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 20443: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:20448: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #if !( defined(sgi) || defined(__sgi) )
</span><br>
<span class="quotelev1">&gt; | #error &quot;condition defined(sgi) || defined(__sgi) not met&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20483: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 20484: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:20489: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #if !( defined(__MRC__) || defined(MPW_C) || defined(MPW_CPLUS) )
</span><br>
<span class="quotelev1">&gt; | #error &quot;condition defined(__MRC__) || defined(MPW_C) || defined(MPW_CPLUS)
</span><br>
<span class="quotelev1">&gt; not met&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20532: /opt/intel/cce/9.1.042/bin/icc -c -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c(2): catastrophic error: #error directive: &quot;condition
</span><br>
<span class="quotelev1">&gt; defined(_MSC_VER) || defined(__MSC_VER) not met&quot;
</span><br>
<span class="quotelev1">&gt;   #error &quot;condition defined(_MSC_VER) || defined(__MSC_VER) not met&quot;
</span><br>
<span class="quotelev1">&gt;    ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compilation aborted for conftest.c (code 4)
</span><br>
<span class="quotelev1">&gt; configure:20538: $? = 4
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #if !( defined(_MSC_VER) || defined(__MSC_VER) )
</span><br>
<span class="quotelev1">&gt; | #error &quot;condition defined(_MSC_VER) || defined(__MSC_VER) not met&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20579: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 20580: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:20585: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #ifndef __CC_NORCROFT
</span><br>
<span class="quotelev1">&gt; | #error &quot;symbol __CC_NORCROFT not defined&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20620: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 20621: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:20626: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #ifndef __POCC__
</span><br>
<span class="quotelev1">&gt; | #error &quot;symbol __POCC__ not defined&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20661: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 20662: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:20667: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #ifndef __PGI
</span><br>
<span class="quotelev1">&gt; | #error &quot;symbol __PGI not defined&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20702: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 20703: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:20708: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #if !( defined(SASC) || defined(__SASC) || defined(__SASC__) )
</span><br>
<span class="quotelev1">&gt; | #error &quot;condition defined(SASC) || defined(__SASC) || defined(__SASC__) not
</span><br>
<span class="quotelev1">&gt; met&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20743: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 20744: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:20749: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #if !( defined(__SUNPRO_C) || defined(__SUNPRO_CC) )
</span><br>
<span class="quotelev1">&gt; | #error &quot;condition defined(__SUNPRO_C) || defined(__SUNPRO_CC) not met&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20784: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 20785: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:20790: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #ifndef __TenDRA__
</span><br>
<span class="quotelev1">&gt; | #error &quot;symbol __TenDRA__ not defined&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20825: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 20826: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:20831: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #ifndef __TINYC__
</span><br>
<span class="quotelev1">&gt; | #error &quot;symbol __TINYC__ not defined&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20866: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 20867: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:20872: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #ifndef __USLC__
</span><br>
<span class="quotelev1">&gt; | #error &quot;symbol __USLC__ not defined&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20907: /opt/intel/cce/9.1.042/icpc -c -DNDEBUG   conftest.cc &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 20908: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:20913: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #ifndef __WATCOMC__
</span><br>
<span class="quotelev1">&gt; | #error &quot;symbol __WATCOMC__ not defined&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20948: result: unknown
</span><br>
<span class="quotelev1">&gt; configure:20970: checking if C++ compiler works
</span><br>
<span class="quotelev1">&gt; configure:21045: /opt/intel/cce/9.1.042/icpc -o conftest -DNDEBUG   
</span><br>
<span class="quotelev1">&gt; conftest.cc  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ./configure: line 21046: /opt/intel/cce/9.1.042/icpc: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; configure:21048: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: program exited with status 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;x86_64-unknown-linux-gnu&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;/opt/intel/cce/9.1.042/bin/icc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; | #define inline __inline__
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #define restrict __restrict
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MPI_PROFILING 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_HAVE_WEAK_SYMBOLS 1
</span><br>
<span class="quotelev1">&gt; | #ifdef __cplusplus
</span><br>
<span class="quotelev1">&gt; | void exit (int);
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CXX &quot;/opt/intel/cce/9.1.042/icpc&quot;
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #include &lt;string&gt;
</span><br>
<span class="quotelev1">&gt; | int
</span><br>
<span class="quotelev1">&gt; | main ()
</span><br>
<span class="quotelev1">&gt; | {
</span><br>
<span class="quotelev1">&gt; | std::string foo = &quot;Hello, world&quot;
</span><br>
<span class="quotelev1">&gt; |   ;
</span><br>
<span class="quotelev1">&gt; |   return 0;
</span><br>
<span class="quotelev1">&gt; | }
</span><br>
<span class="quotelev1">&gt; configure:21073: result: no
</span><br>
<span class="quotelev1">&gt; configure:21087: error: Could not run a simple C++ program.  Aborting.
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
<span class="quotelev1">&gt; ac_cv_build=x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; ac_cv_build_alias=x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; ac_cv_c_compiler_gnu=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_c_inline=__inline__
</span><br>
<span class="quotelev1">&gt; ac_cv_c_restrict=__restrict
</span><br>
<span class="quotelev1">&gt; ac_cv_cxx_compiler_gnu=no
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CCASFLAGS_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CCASFLAGS_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CCAS_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CCAS_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CC_set=set
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CC_value=/opt/intel/cce/9.1.042/bin/icc
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
<span class="quotelev1">&gt; ac_cv_env_CXXCPP_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CXXCPP_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CXXFLAGS_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CXXFLAGS_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CXX_set=set
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CXX_value=/opt/intel/cce/9.1.042/icpc
</span><br>
<span class="quotelev1">&gt; ac_cv_env_F77_set=set
</span><br>
<span class="quotelev1">&gt; ac_cv_env_F77_value=/opt/intel/fce/9.1.036/bin/ifort
</span><br>
<span class="quotelev1">&gt; ac_cv_env_FCFLAGS_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_FCFLAGS_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_FC_set=set
</span><br>
<span class="quotelev1">&gt; ac_cv_env_FC_value=/opt/intel/fce/9.1.036/bin/ifort
</span><br>
<span class="quotelev1">&gt; ac_cv_env_FFLAGS_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_FFLAGS_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_LDFLAGS_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_LDFLAGS_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_OBJCFLAGS_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_OBJCFLAGS_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_OBJC_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_OBJC_value=
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
<span class="quotelev1">&gt; ac_cv_exeext=
</span><br>
<span class="quotelev1">&gt; ac_cv_header_inttypes_h=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_header_memory_h=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_header_stdc=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_header_stdint_h=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_header_stdlib_h=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_header_string_h=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_header_strings_h=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_header_sys_stat_h=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_header_sys_types_h=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_header_unistd_h=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_host=x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; ac_cv_host_alias=x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; ac_cv_objext=o
</span><br>
<span class="quotelev1">&gt; ac_cv_path_install='/usr/bin/install -c'
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_AWK=mawk
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_CPP='/opt/intel/cce/9.1.042/bin/icc -E'
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_CXXCPP=/lib/cpp
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_ac_ct_CC=/opt/intel/cce/9.1.042/bin/icc
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_cc__opt_intel_cce_9_1_042_bin_icc_c_o=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_cc_g=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_cc_stdc=
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_cxx_g=no
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_egrep='grep -E'
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_make_make_set=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_char=1
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_double=8
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_float=4
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_int=4
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_long=8
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_long_double=16
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_long_long=8
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_ptrdiff_t=8
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_short=2
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_size_t=8
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_ssize_t=8
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_void_p=8
</span><br>
<span class="quotelev1">&gt; ac_cv_type_char=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_double=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_float=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_int=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_int16_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_int32_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_int64_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_int8_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_intptr_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_long=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_long_double=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_long_long=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_mode_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_ptrdiff_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_short=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_size_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_ssize_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_uint16_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_uint32_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_uint64_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_uint8_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_uintptr_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_void_p=yes
</span><br>
<span class="quotelev1">&gt; am_cv_CC_dependencies_compiler_type=gcc3
</span><br>
<span class="quotelev1">&gt; am_cv_CXX_dependencies_compiler_type=none
</span><br>
<span class="quotelev1">&gt; ompi_cv_Cpp_works=no
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_align_char=1
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_align_double=8
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_align_float=4
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_align_int=4
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_align_long=8
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_align_long_double=16
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_align_long_long=8
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_align_short=2
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_align_void_p=8
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_align_wchar_t=4
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_compiler_vendor=intel
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_weak_symbols=yes
</span><br>
<span class="quotelev1">&gt; ompi_cv_cc_finline_functions=yes
</span><br>
<span class="quotelev1">&gt; ompi_cv_cc_fno_strict_aliasing=yes
</span><br>
<span class="quotelev1">&gt; ompi_cv_cc_restrict_cflags=yes
</span><br>
<span class="quotelev1">&gt; ompi_cv_cc_supports___builtin_expect=yes
</span><br>
<span class="quotelev1">&gt; ompi_cv_cc_supports___builtin_prefetch=yes
</span><br>
<span class="quotelev1">&gt; ompi_cv_cxx_compiler_vendor=unknown
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
<span class="quotelev1">&gt; ACLOCAL='${SHELL} /usr/local/openmpi-1.2.3/config/missing --run aclocal-1.9'
</span><br>
<span class="quotelev1">&gt; AMDEPBACKSLASH='\'
</span><br>
<span class="quotelev1">&gt; AMDEP_FALSE='#'
</span><br>
<span class="quotelev1">&gt; AMDEP_TRUE=''
</span><br>
<span class="quotelev1">&gt; AMTAR='${SHELL} /usr/local/openmpi-1.2.3/config/missing --run tar'
</span><br>
<span class="quotelev1">&gt; AR=''
</span><br>
<span class="quotelev1">&gt; AUTOCONF='${SHELL} /usr/local/openmpi-1.2.3/config/missing --run autoconf'
</span><br>
<span class="quotelev1">&gt; AUTOHEADER='${SHELL} /usr/local/openmpi-1.2.3/config/missing --run
</span><br>
<span class="quotelev1">&gt; autoheader'
</span><br>
<span class="quotelev1">&gt; AUTOMAKE='${SHELL} /usr/local/openmpi-1.2.3/config/missing --run
</span><br>
<span class="quotelev1">&gt; automake-1.9'
</span><br>
<span class="quotelev1">&gt; AWK='mawk'
</span><br>
<span class="quotelev1">&gt; CASE_SENSITIVE_FS_FALSE=''
</span><br>
<span class="quotelev1">&gt; CASE_SENSITIVE_FS_TRUE=''
</span><br>
<span class="quotelev1">&gt; CC='/opt/intel/cce/9.1.042/bin/icc'
</span><br>
<span class="quotelev1">&gt; CCAS=''
</span><br>
<span class="quotelev1">&gt; CCASFLAGS=''
</span><br>
<span class="quotelev1">&gt; CCDEPMODE='depmode=gcc3'
</span><br>
<span class="quotelev1">&gt; CFLAGS='-O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict'
</span><br>
<span class="quotelev1">&gt; CFLAGS_WITHOUT_OPTFLAGS=''
</span><br>
<span class="quotelev1">&gt; CLEANFILES='*~ .\#*'
</span><br>
<span class="quotelev1">&gt; COMPILE_PROFILING_SEPARATELY_FALSE=''
</span><br>
<span class="quotelev1">&gt; COMPILE_PROFILING_SEPARATELY_TRUE='#'
</span><br>
<span class="quotelev1">&gt; CONFIGURE_DEPENDENCIES='$(top_srcdir)/VERSION'
</span><br>
<span class="quotelev1">&gt; CPP='/opt/intel/cce/9.1.042/bin/icc -E'
</span><br>
<span class="quotelev1">&gt; CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; CXX='/opt/intel/cce/9.1.042/icpc'
</span><br>
<span class="quotelev1">&gt; CXXCPP='/lib/cpp'
</span><br>
<span class="quotelev1">&gt; CXXCPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; CXXDEPMODE='depmode=none'
</span><br>
<span class="quotelev1">&gt; CXXFLAGS='-DNDEBUG '
</span><br>
<span class="quotelev1">&gt; CYGPATH_W='echo'
</span><br>
<span class="quotelev1">&gt; DEFS=''
</span><br>
<span class="quotelev1">&gt; DEPDIR='.deps'
</span><br>
<span class="quotelev1">&gt; DUMPBIN=''
</span><br>
<span class="quotelev1">&gt; ECHO_C=''
</span><br>
<span class="quotelev1">&gt; ECHO_N='-n'
</span><br>
<span class="quotelev1">&gt; ECHO_T=''
</span><br>
<span class="quotelev1">&gt; EGREP='grep -E'
</span><br>
<span class="quotelev1">&gt; EXEEXT=''
</span><br>
<span class="quotelev1">&gt; F77='/opt/intel/fce/9.1.036/bin/ifort'
</span><br>
<span class="quotelev1">&gt; FC='/opt/intel/fce/9.1.036/bin/ifort'
</span><br>
<span class="quotelev1">&gt; FCFLAGS=''
</span><br>
<span class="quotelev1">&gt; FCFLAGS_f90=''
</span><br>
<span class="quotelev1">&gt; FCFLAGS_f=''
</span><br>
<span class="quotelev1">&gt; FFLAGS=''
</span><br>
<span class="quotelev1">&gt; FGREP=''
</span><br>
<span class="quotelev1">&gt; GREP=''
</span><br>
<span class="quotelev1">&gt; INCLTDL=''
</span><br>
<span class="quotelev1">&gt; INSTALL_DATA='${INSTALL} -m 644'
</span><br>
<span class="quotelev1">&gt; INSTALL_PROGRAM='${INSTALL}'
</span><br>
<span class="quotelev1">&gt; INSTALL_SCRIPT='${INSTALL}'
</span><br>
<span class="quotelev1">&gt; INSTALL_STRIP_PROGRAM='${SHELL} $(install_sh) -c -s'
</span><br>
<span class="quotelev1">&gt; LD=''
</span><br>
<span class="quotelev1">&gt; LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; LEX=''
</span><br>
<span class="quotelev1">&gt; LEXLIB=''
</span><br>
<span class="quotelev1">&gt; LEX_OUTPUT_ROOT=''
</span><br>
<span class="quotelev1">&gt; LIBLTDL=''
</span><br>
<span class="quotelev1">&gt; LIBLTDL_LTLIB=''
</span><br>
<span class="quotelev1">&gt; LIBLTDL_SUBDIR=''
</span><br>
<span class="quotelev1">&gt; LIBOBJS=''
</span><br>
<span class="quotelev1">&gt; LIBS=''
</span><br>
<span class="quotelev1">&gt; LIBTOOL=''
</span><br>
<span class="quotelev1">&gt; LN_S=''
</span><br>
<span class="quotelev1">&gt; LTDLINCL=''
</span><br>
<span class="quotelev1">&gt; LTLIBOBJS=''
</span><br>
<span class="quotelev1">&gt; MAKEINFO='${SHELL} /usr/local/openmpi-1.2.3/config/missing --run makeinfo'
</span><br>
<span class="quotelev1">&gt; MCA_PROJECT_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_allocator_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_allocator_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_allocator_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_allocator_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_allocator_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_allocator_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_allocator_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_backtrace_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_backtrace_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_backtrace_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_backtrace_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_backtrace_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_backtrace_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_backtrace_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_bml_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_bml_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_bml_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_bml_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_bml_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_bml_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_bml_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_btl_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_btl_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_btl_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_btl_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_btl_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_btl_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_btl_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_coll_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_coll_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_coll_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_coll_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_coll_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_coll_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_coll_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_common_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_common_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_common_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_common_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_common_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_common_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_common_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_errmgr_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_errmgr_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_errmgr_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_errmgr_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_errmgr_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_errmgr_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_errmgr_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_gpr_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_gpr_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_gpr_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_gpr_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_gpr_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_gpr_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_gpr_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_installdirs_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_installdirs_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_installdirs_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_installdirs_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_installdirs_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_installdirs_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_installdirs_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_io_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_io_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_io_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_io_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_io_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_io_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_io_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_io_romio_SHOULD_BUILD_FALSE=''
</span><br>
<span class="quotelev1">&gt; MCA_io_romio_SHOULD_BUILD_TRUE=''
</span><br>
<span class="quotelev1">&gt; MCA_iof_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_iof_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_iof_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_iof_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_iof_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_iof_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_iof_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_maffinity_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_maffinity_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_maffinity_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_maffinity_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_maffinity_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_maffinity_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_maffinity_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_memcpy_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_memcpy_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_memcpy_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_memcpy_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_memcpy_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_memcpy_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_memcpy_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_memory_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_memory_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_memory_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_memory_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_memory_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_memory_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_memory_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_mpool_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_mpool_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_mpool_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_mpool_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_mpool_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_mpool_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_mpool_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_mtl_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_mtl_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_mtl_DIRECT_CALL_HEADER=''
</span><br>
<span class="quotelev1">&gt; MCA_mtl_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_mtl_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_mtl_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_mtl_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_mtl_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_ns_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_ns_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_ns_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_ns_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_ns_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_ns_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_ns_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_odls_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_odls_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_odls_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_odls_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_odls_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_odls_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_odls_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_ompi_FRAMEWORKS=''
</span><br>
<span class="quotelev1">&gt; MCA_ompi_FRAMEWORKS_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_ompi_FRAMEWORK_COMPONENT_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_ompi_FRAMEWORK_COMPONENT_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_ompi_FRAMEWORK_COMPONENT_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_ompi_FRAMEWORK_LIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_oob_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_oob_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_oob_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_oob_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_oob_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_oob_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_oob_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_opal_FRAMEWORKS=''
</span><br>
<span class="quotelev1">&gt; MCA_opal_FRAMEWORKS_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_opal_FRAMEWORK_COMPONENT_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_opal_FRAMEWORK_COMPONENT_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_opal_FRAMEWORK_COMPONENT_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_opal_FRAMEWORK_LIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_orte_FRAMEWORKS=''
</span><br>
<span class="quotelev1">&gt; MCA_orte_FRAMEWORKS_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_orte_FRAMEWORK_COMPONENT_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_orte_FRAMEWORK_COMPONENT_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_orte_FRAMEWORK_COMPONENT_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_orte_FRAMEWORK_LIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_osc_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_osc_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_osc_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_osc_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_osc_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_osc_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_osc_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_paffinity_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_paffinity_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_paffinity_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_paffinity_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_paffinity_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_paffinity_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_paffinity_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_pls_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_pls_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_pls_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_pls_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_pls_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_pls_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_pls_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_pml_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_pml_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_pml_DIRECT_CALL_HEADER=''
</span><br>
<span class="quotelev1">&gt; MCA_pml_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_pml_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_pml_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_pml_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_pml_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_ras_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_ras_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_ras_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_ras_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_ras_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_ras_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_ras_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rcache_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rcache_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rcache_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rcache_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rcache_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rcache_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_rcache_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rds_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rds_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rds_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rds_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rds_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rds_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_rds_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmaps_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmaps_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmaps_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmaps_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmaps_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmaps_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmaps_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmgr_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmgr_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmgr_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmgr_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmgr_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmgr_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmgr_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rml_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rml_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rml_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rml_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rml_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rml_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_rml_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_schema_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_schema_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_schema_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_schema_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_schema_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_schema_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_schema_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_sds_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_sds_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_sds_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_sds_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_sds_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_sds_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_sds_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_smr_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_smr_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_smr_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_smr_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_smr_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_smr_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_smr_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_timer_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_timer_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_timer_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_timer_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_timer_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_timer_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_timer_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_topo_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_topo_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_topo_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_topo_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_topo_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_topo_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_topo_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MPIF_H_PMPI_W_FUNCS=', PMPI_WTICK, PMPI_WTIME'
</span><br>
<span class="quotelev1">&gt; NM=''
</span><br>
<span class="quotelev1">&gt; OBJC=''
</span><br>
<span class="quotelev1">&gt; OBJCDEPMODE=''
</span><br>
<span class="quotelev1">&gt; OBJCFLAGS=''
</span><br>
<span class="quotelev1">&gt; OBJDUMP=''
</span><br>
<span class="quotelev1">&gt; OBJEXT='o'
</span><br>
<span class="quotelev1">&gt; OMPI_ASM_FILE=''
</span><br>
<span class="quotelev1">&gt; OMPI_ASM_GSYM=''
</span><br>
<span class="quotelev1">&gt; OMPI_ASM_LSYM=''
</span><br>
<span class="quotelev1">&gt; OMPI_ASM_SUPPORT_64BIT=''
</span><br>
<span class="quotelev1">&gt; OMPI_ASM_TEXT=''
</span><br>
<span class="quotelev1">&gt; OMPI_ASM_TYPE=''
</span><br>
<span class="quotelev1">&gt; OMPI_ASSEMBLY_ARCH=''
</span><br>
<span class="quotelev1">&gt; OMPI_ASSEMBLY_FORMAT=''
</span><br>
<span class="quotelev1">&gt; OMPI_AS_GLOBAL=''
</span><br>
<span class="quotelev1">&gt; OMPI_AS_LABEL_SUFFIX=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_allocator_basic_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_allocator_basic_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_allocator_bucket_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_allocator_bucket_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_backtrace_darwin_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_backtrace_darwin_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_backtrace_execinfo_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_backtrace_execinfo_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_backtrace_none_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_backtrace_none_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_backtrace_printstack_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_backtrace_printstack_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_bml_r2_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_bml_r2_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_gm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_gm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_mvapi_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_mvapi_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_mx_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_mx_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_openib_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_openib_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_portals_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_portals_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_self_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_self_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_sm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_sm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_tcp_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_tcp_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_udapl_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_udapl_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_coll_basic_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_coll_basic_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_coll_self_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_coll_self_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_coll_sm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_coll_sm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_coll_tuned_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_coll_tuned_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_common_mx_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_common_mx_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_common_portals_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_common_portals_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_common_sm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_common_sm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_errmgr_bproc_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_errmgr_bproc_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_errmgr_hnp_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_errmgr_hnp_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_errmgr_orted_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_errmgr_orted_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_errmgr_proxy_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_errmgr_proxy_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_gpr_null_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_gpr_null_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_gpr_proxy_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_gpr_proxy_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_gpr_replica_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_gpr_replica_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_installdirs_config_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_installdirs_config_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_installdirs_env_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_installdirs_env_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_io_romio_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_io_romio_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_iof_proxy_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_iof_proxy_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_iof_svc_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_iof_svc_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_maffinity_first_use_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_maffinity_first_use_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_maffinity_libnuma_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_maffinity_libnuma_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_memory_darwin_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_memory_darwin_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_memory_malloc_hooks_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_memory_malloc_hooks_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_memory_ptmalloc2_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_memory_ptmalloc2_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_mpool_rdma_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_mpool_rdma_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_mpool_sm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_mpool_sm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_mtl_mx_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_mtl_mx_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_mtl_psm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_mtl_psm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ns_proxy_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ns_proxy_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ns_replica_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ns_replica_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_odls_bproc_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_odls_bproc_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_odls_default_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_odls_default_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_oob_tcp_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_oob_tcp_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_osc_pt2pt_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_osc_pt2pt_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_paffinity_linux_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_paffinity_linux_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_paffinity_solaris_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_paffinity_solaris_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_paffinity_windows_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_paffinity_windows_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_bproc_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_bproc_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_cnos_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_cnos_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_gridengine_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_gridengine_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_poe_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_poe_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_proxy_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_proxy_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_rsh_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_rsh_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_slurm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_slurm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_tm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_tm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_xgrid_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_xgrid_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pml_cm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pml_cm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pml_ob1_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pml_ob1_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_bjs_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_bjs_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_dash_host_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_dash_host_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_gridengine_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_gridengine_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_loadleveler_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_loadleveler_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_localhost_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_localhost_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_lsf_bproc_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_lsf_bproc_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_slurm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_slurm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_tm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_tm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_xgrid_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_xgrid_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rcache_vma_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rcache_vma_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rds_hostfile_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rds_hostfile_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rds_proxy_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rds_proxy_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rds_resfile_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rds_resfile_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rmaps_round_robin_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rmaps_round_robin_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rmgr_cnos_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rmgr_cnos_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rmgr_proxy_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rmgr_proxy_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rmgr_urm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rmgr_urm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rml_cnos_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rml_cnos_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rml_oob_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rml_oob_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_bproc_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_bproc_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_cnos_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_cnos_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_env_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_env_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_pipe_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_pipe_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_portals_utcp_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_portals_utcp_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_seed_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_seed_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_singleton_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_singleton_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_slurm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_slurm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_smr_bproc_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_smr_bproc_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_aix_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_aix_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_altix_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_altix_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_darwin_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_darwin_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_linux_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_linux_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_solaris_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_solaris_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_windows_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_windows_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_topo_unity_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_topo_unity_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_CC_ABSOLUTE='/opt/intel/cce/9.1.042/bin/icc'
</span><br>
<span class="quotelev1">&gt; OMPI_CONFIGURE_DATE='Sun Jun 24 08:25:18 CEST 2007'
</span><br>
<span class="quotelev1">&gt; OMPI_CONFIGURE_HOST='deb64'
</span><br>
<span class="quotelev1">&gt; OMPI_CONFIGURE_USER='francesco'
</span><br>
<span class="quotelev1">&gt; OMPI_CXX_ABSOLUTE=''
</span><br>
<span class="quotelev1">&gt; OMPI_F77_ABSOLUTE=''
</span><br>
<span class="quotelev1">&gt; OMPI_F90_ABSOLUTE=''
</span><br>
<span class="quotelev1">&gt; OMPI_F90_BUILD_SIZE='small'
</span><br>
<span class="quotelev1">&gt; OMPI_F90_CKINDS=''
</span><br>
<span class="quotelev1">&gt; OMPI_F90_EXTRA_SHARED_LIBRARY_FLAGS=''
</span><br>
<span class="quotelev1">&gt; OMPI_F90_IKINDS=''
</span><br>
<span class="quotelev1">&gt; OMPI_F90_RKINDS=''
</span><br>
<span class="quotelev1">&gt; OMPI_FC_MODULE_FLAG=''
</span><br>
<span class="quotelev1">&gt; OMPI_FORTRAN_MAX_ARRAY_RANK='4'
</span><br>
<span class="quotelev1">&gt; OMPI_GREEK_VERSION=''
</span><br>
<span class="quotelev1">&gt; OMPI_HAVE_ASM_FILE_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_HAVE_ASM_FILE_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_HAVE_POSIX_THREADS_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_HAVE_POSIX_THREADS_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_HAVE_SOLARIS_THREADS_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_HAVE_SOLARIS_THREADS_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_INSTALL_BINARIES_FALSE='#'
</span><br>
<span class="quotelev1">&gt; OMPI_INSTALL_BINARIES_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_LIBEVENT_SOURCES=''
</span><br>
<span class="quotelev1">&gt; OMPI_MAJOR_VERSION='1'
</span><br>
<span class="quotelev1">&gt; OMPI_MINOR_VERSION='2'
</span><br>
<span class="quotelev1">&gt; OMPI_MPI_ADDRESS_KIND=''
</span><br>
<span class="quotelev1">&gt; OMPI_MPI_INTEGER_KIND=''
</span><br>
<span class="quotelev1">&gt; OMPI_MPI_OFFSET_KIND=''
</span><br>
<span class="quotelev1">&gt; OMPI_NEED_WINDOWS_REPLACEMENTS_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_NEED_WINDOWS_REPLACEMENTS_TRUE='#'
</span><br>
<span class="quotelev1">&gt; OMPI_RELEASE_VERSION='3'
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_COMPLEX16=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_COMPLEX32=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_COMPLEX8=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_COMPLEX=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_DOUBLE_COMPLEX=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_DOUBLE_PRECISION=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_INTEGER16=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_INTEGER1=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_INTEGER2=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_INTEGER4=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_INTEGER8=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_INTEGER=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_LOGICAL=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_REAL16=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_REAL4=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_REAL8=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_REAL=''
</span><br>
<span class="quotelev1">&gt; OMPI_SVN_R='r15136'
</span><br>
<span class="quotelev1">&gt; OMPI_TOP_BUILDDIR='/usr/local/openmpi-1.2.3'
</span><br>
<span class="quotelev1">&gt; OMPI_TOP_SRCDIR='/usr/local/openmpi-1.2.3'
</span><br>
<span class="quotelev1">&gt; OMPI_VERSION='1.2.3'
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_BUILD_F90_LARGE_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_BUILD_F90_LARGE_TRUE='#'
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_BUILD_F90_MEDIUM_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_BUILD_F90_MEDIUM_TRUE='#'
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_BUILD_F90_SMALL_FALSE='#'
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_BUILD_F90_SMALL_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_BUILD_F90_TRIVIAL_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_BUILD_F90_TRIVIAL_TRUE='#'
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_F77_BINDINGS_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_F77_BINDINGS_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_F90_BINDINGS_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_F90_BINDINGS_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_SVN='0'
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_CXX_LIB=''
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_CXX_REQUIRED_FILE=''
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_EXTRA_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_EXTRA_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_EXTRA_CXXFLAGS=''
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_EXTRA_FCFLAGS=''
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_EXTRA_FFLAGS=''
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_EXTRA_INCLUDES=''
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_EXTRA_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_EXTRA_LIBS=''
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_F77_REQUIRED_FILE=''
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_F90_REQUIRED_FILE=''
</span><br>
<span class="quotelev1">&gt; OPAL_BINDIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_DATADIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_DATAROOTDIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_EXEC_PREFIX=''
</span><br>
<span class="quotelev1">&gt; OPAL_GREEK_VERSION=''
</span><br>
<span class="quotelev1">&gt; OPAL_INCLUDEDIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_INFODIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_LIBDIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_LIBEXECDIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_LOCALSTATEDIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_LTDL_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; OPAL_MAJOR_VERSION='1'
</span><br>
<span class="quotelev1">&gt; OPAL_MANDIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_MINOR_VERSION='2'
</span><br>
<span class="quotelev1">&gt; OPAL_PREFIX=''
</span><br>
<span class="quotelev1">&gt; OPAL_RELEASE_VERSION='3'
</span><br>
<span class="quotelev1">&gt; OPAL_SBINDIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_SHAREDSTATEDIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_SVN_R='r15136'
</span><br>
<span class="quotelev1">&gt; OPAL_SYSCONFDIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_VERSION='1.2.3'
</span><br>
<span class="quotelev1">&gt; OPAL_WANT_SVN='0'
</span><br>
<span class="quotelev1">&gt; OPAL_WRAPPER_EXTRA_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; OPAL_WRAPPER_EXTRA_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; OPAL_WRAPPER_EXTRA_CXXFLAGS=''
</span><br>
<span class="quotelev1">&gt; OPAL_WRAPPER_EXTRA_INCLUDES=''
</span><br>
<span class="quotelev1">&gt; OPAL_WRAPPER_EXTRA_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; OPAL_WRAPPER_EXTRA_LIBS=''
</span><br>
<span class="quotelev1">&gt; ORTE_GREEK_VERSION=''
</span><br>
<span class="quotelev1">&gt; ORTE_MAJOR_VERSION='1'
</span><br>
<span class="quotelev1">&gt; ORTE_MINOR_VERSION='2'
</span><br>
<span class="quotelev1">&gt; ORTE_RELEASE_VERSION='3'
</span><br>
<span class="quotelev1">&gt; ORTE_SVN_R='r15136'
</span><br>
<span class="quotelev1">&gt; ORTE_VERSION='1.2.3'
</span><br>
<span class="quotelev1">&gt; ORTE_WANT_SVN='0'
</span><br>
<span class="quotelev1">&gt; ORTE_WRAPPER_EXTRA_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; ORTE_WRAPPER_EXTRA_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; ORTE_WRAPPER_EXTRA_CXXFLAGS=''
</span><br>
<span class="quotelev1">&gt; ORTE_WRAPPER_EXTRA_INCLUDES=''
</span><br>
<span class="quotelev1">&gt; ORTE_WRAPPER_EXTRA_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; ORTE_WRAPPER_EXTRA_LIBS=''
</span><br>
<span class="quotelev1">&gt; PACKAGE='openmpi'
</span><br>
<span class="quotelev1">&gt; PACKAGE_BUGREPORT='<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>'
</span><br>
<span class="quotelev1">&gt; PACKAGE_NAME='Open MPI'
</span><br>
<span class="quotelev1">&gt; PACKAGE_STRING='Open MPI 1.2.3'
</span><br>
<span class="quotelev1">&gt; PACKAGE_TARNAME='openmpi'
</span><br>
<span class="quotelev1">&gt; PACKAGE_VERSION='1.2.3'
</span><br>
<span class="quotelev1">&gt; PATH_SEPARATOR=':'
</span><br>
<span class="quotelev1">&gt; PERL=''
</span><br>
<span class="quotelev1">&gt; RANLIB=''
</span><br>
<span class="quotelev1">&gt; SED=''
</span><br>
<span class="quotelev1">&gt; SET_MAKE=''
</span><br>
<span class="quotelev1">&gt; SHELL='/bin/sh'
</span><br>
<span class="quotelev1">&gt; STRIP=''
</span><br>
<span class="quotelev1">&gt; TOTALVIEW_DEBUG_FLAGS=''
</span><br>
<span class="quotelev1">&gt; VERSION='1.2.3'
</span><br>
<span class="quotelev1">&gt; WANT_DEPRECATED_EXECUTABLE_NAMES_FALSE=''
</span><br>
<span class="quotelev1">&gt; WANT_DEPRECATED_EXECUTABLE_NAMES_TRUE='#'
</span><br>
<span class="quotelev1">&gt; WANT_INSTALL_HEADERS_FALSE=''
</span><br>
<span class="quotelev1">&gt; WANT_INSTALL_HEADERS_TRUE='#'
</span><br>
<span class="quotelev1">&gt; WANT_LIBLTDL_FALSE=''
</span><br>
<span class="quotelev1">&gt; WANT_LIBLTDL_TRUE=''
</span><br>
<span class="quotelev1">&gt; WANT_MPI_BINDINGS_LAYER_FALSE=''
</span><br>
<span class="quotelev1">&gt; WANT_MPI_BINDINGS_LAYER_TRUE='#'
</span><br>
<span class="quotelev1">&gt; WANT_MPI_CXX_BINDINGS_FALSE=''
</span><br>
<span class="quotelev1">&gt; WANT_MPI_CXX_BINDINGS_TRUE=''
</span><br>
<span class="quotelev1">&gt; WANT_MPI_F77_BINDINGS_LAYER_FALSE=''
</span><br>
<span class="quotelev1">&gt; WANT_MPI_F77_BINDINGS_LAYER_TRUE=''
</span><br>
<span class="quotelev1">&gt; WANT_PERUSE_FALSE=''
</span><br>
<span class="quotelev1">&gt; WANT_PERUSE_TRUE='#'
</span><br>
<span class="quotelev1">&gt; WANT_PMPI_BINDINGS_LAYER_FALSE='#'
</span><br>
<span class="quotelev1">&gt; WANT_PMPI_BINDINGS_LAYER_TRUE=''
</span><br>
<span class="quotelev1">&gt; WANT_PMPI_F77_BINDINGS_LAYER_FALSE=''
</span><br>
<span class="quotelev1">&gt; WANT_PMPI_F77_BINDINGS_LAYER_TRUE=''
</span><br>
<span class="quotelev1">&gt; WRAPPER_EXTRA_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; WRAPPER_EXTRA_CXXFLAGS=''
</span><br>
<span class="quotelev1">&gt; WRAPPER_EXTRA_FCFLAGS=''
</span><br>
<span class="quotelev1">&gt; WRAPPER_EXTRA_FFLAGS=''
</span><br>
<span class="quotelev1">&gt; WRAPPER_EXTRA_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; WRAPPER_EXTRA_LIBS=''
</span><br>
<span class="quotelev1">&gt; ac_ct_AR=''
</span><br>
<span class="quotelev1">&gt; ac_ct_CC='/opt/intel/cce/9.1.042/bin/icc'
</span><br>
<span class="quotelev1">&gt; ac_ct_CXX=''
</span><br>
<span class="quotelev1">&gt; ac_ct_DUMPBIN=''
</span><br>
<span class="quotelev1">&gt; ac_ct_F77=''
</span><br>
<span class="quotelev1">&gt; ac_ct_FC=''
</span><br>
<span class="quotelev1">&gt; ac_ct_OBJC=''
</span><br>
<span class="quotelev1">&gt; ac_ct_RANLIB=''
</span><br>
<span class="quotelev1">&gt; ac_ct_STRIP=''
</span><br>
<span class="quotelev1">&gt; ac_prefix_program=''
</span><br>
<span class="quotelev1">&gt; am__fastdepCC_FALSE='#'
</span><br>
<span class="quotelev1">&gt; am__fastdepCC_TRUE=''
</span><br>
<span class="quotelev1">&gt; am__fastdepCXX_FALSE=''
</span><br>
<span class="quotelev1">&gt; am__fastdepCXX_TRUE='#'
</span><br>
<span class="quotelev1">&gt; am__fastdepOBJC_FALSE=''
</span><br>
<span class="quotelev1">&gt; am__fastdepOBJC_TRUE=''
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
<span class="quotelev1">&gt; backtrace_darwin_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; bindir='${exec_prefix}/bin'
</span><br>
<span class="quotelev1">&gt; btl_gm_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_gm_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_gm_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_gm_LIBS=''
</span><br>
<span class="quotelev1">&gt; btl_mvapi_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_mvapi_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_mvapi_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_mvapi_LIBS=''
</span><br>
<span class="quotelev1">&gt; btl_mx_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_mx_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_mx_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_mx_LIBS=''
</span><br>
<span class="quotelev1">&gt; btl_openib_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_openib_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_openib_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_openib_LIBS=''
</span><br>
<span class="quotelev1">&gt; btl_portals_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_portals_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_portals_LIBS=''
</span><br>
<span class="quotelev1">&gt; btl_udapl_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_udapl_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_udapl_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_udapl_LIBS=''
</span><br>
<span class="quotelev1">&gt; build='x86_64-unknown-linux-gnu'
</span><br>
<span class="quotelev1">&gt; build_alias=''
</span><br>
<span class="quotelev1">&gt; build_cpu='x86_64'
</span><br>
<span class="quotelev1">&gt; build_os='linux-gnu'
</span><br>
<span class="quotelev1">&gt; build_vendor='unknown'
</span><br>
<span class="quotelev1">&gt; common_mx_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; common_mx_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; common_mx_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; common_mx_LIBS=''
</span><br>
<span class="quotelev1">&gt; common_portals_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; common_portals_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; common_portals_LIBS=''
</span><br>
<span class="quotelev1">&gt; datadir='${prefix}/share'
</span><br>
<span class="quotelev1">&gt; errmgr_bproc_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; errmgr_bproc_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; errmgr_bproc_LIBS=''
</span><br>
<span class="quotelev1">&gt; exec_prefix='NONE'
</span><br>
<span class="quotelev1">&gt; host='x86_64-unknown-linux-gnu'
</span><br>
<span class="quotelev1">&gt; host_alias=''
</span><br>
<span class="quotelev1">&gt; host_cpu='x86_64'
</span><br>
<span class="quotelev1">&gt; host_os='linux-gnu'
</span><br>
<span class="quotelev1">&gt; host_vendor='unknown'
</span><br>
<span class="quotelev1">&gt; includedir='${prefix}/include'
</span><br>
<span class="quotelev1">&gt; infodir='${prefix}/info'
</span><br>
<span class="quotelev1">&gt; install_sh='/usr/local/openmpi-1.2.3/config/install-sh'
</span><br>
<span class="quotelev1">&gt; libdir='${exec_prefix}/lib'
</span><br>
<span class="quotelev1">&gt; libexecdir='${exec_prefix}/libexec'
</span><br>
<span class="quotelev1">&gt; localstatedir='${prefix}/var'
</span><br>
<span class="quotelev1">&gt; lt_ECHO='echo'
</span><br>
<span class="quotelev1">&gt; maffinity_libnuma_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; maffinity_libnuma_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; maffinity_libnuma_LIBS=''
</span><br>
<span class="quotelev1">&gt; mandir='${prefix}/man'
</span><br>
<span class="quotelev1">&gt; memory_malloc_hooks_LIBS=''
</span><br>
<span class="quotelev1">&gt; memory_ptmalloc2_LIBS=''
</span><br>
<span class="quotelev1">&gt; mkdir_p='mkdir -p --'
</span><br>
<span class="quotelev1">&gt; mtl_mx_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; mtl_mx_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; mtl_mx_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; mtl_mx_LIBS=''
</span><br>
<span class="quotelev1">&gt; mtl_psm_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; mtl_psm_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; mtl_psm_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; mtl_psm_LIBS=''
</span><br>
<span class="quotelev1">&gt; odls_bproc_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; odls_bproc_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; odls_bproc_LIBS=''
</span><br>
<span class="quotelev1">&gt; oldincludedir='/usr/include'
</span><br>
<span class="quotelev1">&gt; pls_bproc_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; pls_bproc_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; pls_bproc_LIBS=''
</span><br>
<span class="quotelev1">&gt; pls_slurm_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; pls_slurm_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; pls_slurm_LIBS=''
</span><br>
<span class="quotelev1">&gt; pls_tm_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; pls_tm_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; pls_tm_LIBS=''
</span><br>
<span class="quotelev1">&gt; pls_xgrid_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; pls_xgrid_OBJCFLAGS=''
</span><br>
<span class="quotelev1">&gt; prefix='NONE'
</span><br>
<span class="quotelev1">&gt; program_transform_name='s,x,x,'
</span><br>
<span class="quotelev1">&gt; ras_bjs_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; ras_bjs_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; ras_bjs_LIBS=''
</span><br>
<span class="quotelev1">&gt; ras_loadleveler_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; ras_loadleveler_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; ras_loadleveler_LIBS=''
</span><br>
<span class="quotelev1">&gt; ras_lsf_bproc_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; ras_lsf_bproc_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; ras_lsf_bproc_LIBS=''
</span><br>
<span class="quotelev1">&gt; ras_slurm_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; ras_slurm_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; ras_slurm_LIBS=''
</span><br>
<span class="quotelev1">&gt; ras_tm_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; ras_tm_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; ras_tm_LIBS=''
</span><br>
<span class="quotelev1">&gt; sbindir='${exec_prefix}/sbin'
</span><br>
<span class="quotelev1">&gt; sds_bproc_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; sds_bproc_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; sds_bproc_LIBS=''
</span><br>
<span class="quotelev1">&gt; sds_portals_utcp_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; sds_portals_utcp_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; sds_portals_utcp_LIBS=''
</span><br>
<span class="quotelev1">&gt; sds_slurm_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; sds_slurm_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; sds_slurm_LIBS=''
</span><br>
<span class="quotelev1">&gt; sharedstatedir='${prefix}/com'
</span><br>
<span class="quotelev1">&gt; smr_bproc_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; smr_bproc_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; smr_bproc_LIBS=''
</span><br>
<span class="quotelev1">&gt; sysconfdir='${prefix}/etc'
</span><br>
<span class="quotelev1">&gt; target_alias=''
</span><br>
<span class="quotelev1">&gt; timer_aix_LIBS=''
</span><br>
<span class="quotelev1">&gt; top_ompi_builddir='/usr/local/openmpi-1.2.3'
</span><br>
<span class="quotelev1">&gt; top_ompi_srcdir='/usr/local/openmpi-1.2.3'
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
<span class="quotelev1">&gt; #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; #define OMPI_ARCH &quot;x86_64-unknown-linux-gnu&quot;
</span><br>
<span class="quotelev1">&gt; #define OMPI_CC &quot;/opt/intel/cce/9.1.042/bin/icc&quot;
</span><br>
<span class="quotelev1">&gt; #define OMPI_CXX &quot;/opt/intel/cce/9.1.042/icpc&quot;
</span><br>
<span class="quotelev1">&gt; #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_ENABLE_MPI_PROFILING 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_WEAK_SYMBOLS 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; #define OMPI_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; #define OPAL_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; #define OPAL_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; #define ORTE_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; #define ORTE_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_STRING &quot;Open MPI 1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_VERSION &quot;1.2.3&quot;
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; #define inline __inline__
</span><br>
<span class="quotelev1">&gt; #define restrict __restrict
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; #ifdef __cplusplus
</span><br>
<span class="quotelev1">&gt; #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; void exit (int);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure: exit 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
____________________________________________________________________________________
<br>
Need a vacation? Get great deals
<br>
to amazing places on Yahoo! Travel.
<br>
<a href="http://travel.yahoo.com/">http://travel.yahoo.com/</a>
<br>

<br><hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3545/config.log">pat1949203090</a>
</ul>
<!-- attachment="config.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3546.php">Gabb, Henry: "Re: [OMPI users] intel/openmpi"</a>
<li><strong>Previous message:</strong> <a href="3544.php">Francesco Pietra: "Re: [OMPI users] intel/openmpi"</a>
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
