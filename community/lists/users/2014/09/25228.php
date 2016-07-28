<?
$subject_val = "Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  2 16:07:08 2014" -->
<!-- isoreceived="20140902200708" -->
<!-- sent="Tue, 2 Sep 2014 13:06:55 -0700" -->
<!-- isosent="20140902200655" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657" -->
<!-- id="9162B78C-300A-4D4F-9D92-3688A21A5800_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201409021943.s82JhMG5016474_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-02 16:06:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25229.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt;	28	slots	(updated findings)"</a>
<li><strong>Previous message:</strong> <a href="25227.php">Swamy Kandadai: "[OMPI users] Open MPI 1.6.5 or 1.8.1 Please respond to swamyk@us.ibm.com"</a>
<li><strong>Maybe in reply to:</strong> <a href="25217.php">Siegmar Gross: "[OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The difficulty here is that you have bundled several errors again into a single message, making it hard to keep the conversation from getting terribly confused. I was trying to address the segfault errors on cleanup, which have nothing to do with the accept being rejected.
<br>
<p>It looks like those are being caused by MCA params that are not properly registered, so I'll keep poking for those - I fixed one earlier, but don't know where some of these others are originating.
<br>
<p>As for the accept error: it looks like your system is rejecting TCP connect requests for some reason, and so we are erroring out. You might check for firewalls, or see if there is something odd about the networking configuration. Setting -mca oob_base_verbose 20 might help generate some useful info.
<br>
<p><p>On Sep 2, 2014, at 12:43 PM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't see any line numbers on the errors I flagged - all I
</span><br>
<span class="quotelev2">&gt;&gt; see are the usual memory offsets in bytes, which is of little
</span><br>
<span class="quotelev2">&gt;&gt; help. I'm afraid I don't what what you'd have to do under SunOS
</span><br>
<span class="quotelev2">&gt;&gt; to get line numbers, but I can't do much without it
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I used &quot;truss&quot; to follow function calls. The error message is in
</span><br>
<span class="quotelev1">&gt; line 2566 of the attached file. Is the output helpful? Which
</span><br>
<span class="quotelev1">&gt; commands would you use in gdb for Linux to track down the error,
</span><br>
<span class="quotelev1">&gt; if you would try it on your machine?
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 2, 2014, at 10:26 AM, Siegmar Gross 
</span><br>
<span class="quotelev1">&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could you please configure this OMPI install with --enable-debug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so that gdb will provide line numbers where the error is occurring?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Otherwise, I'm having a hard time chasing this problem down.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I always configure with &quot;--enable-debug&quot; and I used the following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command. I my original email I have had a backtrace with line
</span><br>
<span class="quotelev3">&gt;&gt;&gt; numbers for both my C and Java problems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr openmpi-1.9a1r32657-SunOS.sparc.64_cc 119 head config.log
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This file contains any messages produced by compilers while
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running configure, to aid debugging if configure makes a mistake.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It was created by Open MPI configure 1.9a1, which was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; generated by GNU Autoconf 2.69.  Invocation command line was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ../openmpi-1.9a1r32657/configure --prefix=/usr/local/openmpi-1.9_64_cc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --libdir=/usr/local/openmpi-1.9_64_cc/lib64 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-jdk-bindir=/usr/local/jdk1.8.0/bin 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-jdk-headers=/usr/local/jdk1.8.0/include JAVA_HOME=/usr/local/jdk1.8.0 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LDFLAGS=-m64 CC=cc CXX=CC FC=f95 CFLAGS=-m64 CXXFLAGS=-m64 -library=stlport4 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FCFLAGS=-m64 CPP=cpp CXXCPP=cpp CPPFLAGS= CXXCPPFLAGS= --enable-mpi-cxx 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-cxx-exceptions --enable-mpi-java --enable-heterogeneous 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-mpi-thread-multiple --with-threads=posix --with-hwloc=internal 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --without-verbs --with-wrapper-cflags=-m64 --enable-debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What can I do to provide line numbers for the &quot;mca_oob_tcp_accept:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; accept() failed&quot; error?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 2, 2014, at 6:01 AM, Siegmar Gross 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; C problem:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ==========
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tyr small_prog 111 mpiexec -np 1 --host linpc0 init_finalize
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:00593] mca_oob_tcp_accept: accept() failed: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error 0 (11).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tyr small_prog 112 mpiexec -np 1 --host sunpc0 init_finalize
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:00597] mca_oob_tcp_accept: accept() failed: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error 0 (11).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tyr small_prog 113 mpiexec -np 1 --host tyr init_finalize
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [tyr:00606] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [tyr:00606] Signal: Bus Error (10)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [tyr:00606] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [tyr:00606] Failing at address: ffffffff7fffd7fc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_back
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trace_print+0x1c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x1a4960
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unpack_int64+0xf4 [ Signal 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2096416616 (?)]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unpack_buffer+0x168
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unpack+0x24c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/openmpi/mca_pmix_native.so:0x1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4e10
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libmpi.so.0.0.0:ompi_mpi_init+
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0xd18
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libmpi.so.0.0.0:MPI_Init+0x26c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/fd1026/SunOS/sparc/bin/init_finalize:main+0x10
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/fd1026/SunOS/sparc/bin/init_finalize:_start+0x12c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [tyr:00606] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec noticed that process rank 0 with PID 606 on node tyr exited on 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal 10 (Bus Error).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tyr small_prog 114 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; gdb shows the following backtrace.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tyr small_prog 115 /usr/local/gdb-7.6.1_64_gcc/bin/gdb 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.9_64_cc/bin/mpiexec 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; License GPLv3+: GNU GPL version 3 or later 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This GDB was configured as &quot;sparc-sun-solaris2.10&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Reading symbols from 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/bin/orterun...done.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (gdb) run -np 1 --host tyr init_finalize   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Starting program: /usr/local/openmpi-1.9_64_cc/bin/mpiexec -np 1 --host 
</span><br>
<span class="quotelev1">&gt; tyr 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; init_finalize
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [New LWP    2        ]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [tyr:00628] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [tyr:00628] Signal: Bus Error (10)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [tyr:00628] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [tyr:00628] Failing at address: ffffffff7fffd73c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_back
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trace_print+0x1c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x1a4960
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unpack_int64+0xf4 [ Signal 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2096416616 (?)]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unpack_buffer+0x168
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unpack+0x24c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/openmpi/mca_pmix_native.so:0x1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4e10
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libmpi.so.0.0.0:ompi_mpi_init+
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0xd18
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libmpi.so.0.0.0:MPI_Init+0x26c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/fd1026/SunOS/sparc/bin/init_finalize:main+0x10
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/fd1026/SunOS/sparc/bin/init_finalize:_start+0x12c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [tyr:00628] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec noticed that process rank 0 with PID 628 on node tyr exited on 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal 10 (Bus Error).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;accept_failed.truss.tar.gz&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25228/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25229.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt;	28	slots	(updated findings)"</a>
<li><strong>Previous message:</strong> <a href="25227.php">Swamy Kandadai: "[OMPI users] Open MPI 1.6.5 or 1.8.1 Please respond to swamyk@us.ibm.com"</a>
<li><strong>Maybe in reply to:</strong> <a href="25217.php">Siegmar Gross: "[OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
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
