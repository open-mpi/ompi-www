<?
$subject_val = "Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 24 02:29:14 2014" -->
<!-- isoreceived="20141224072914" -->
<!-- sent="Wed, 24 Dec 2014 07:29:07 +0000" -->
<!-- isosent="20141224072907" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4" -->
<!-- id="20141224162907.b2e413d43be2121e1bde3b71_at_jp.fujitsu.com" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="549A67DE.6020007_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-24 02:29:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26071.php">Siegmar Gross: "Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
<li><strong>Previous message:</strong> <a href="26069.php">Gilles Gouaillardet: "Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
<li><strong>In reply to:</strong> <a href="26069.php">Gilles Gouaillardet: "Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26072.php">Ralph Castain: "Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
<li><strong>Reply:</strong> <a href="26072.php">Ralph Castain: "Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>Ahh, I didn't know the current status. Thank you for the notice!
<br>
<p>Thanks,
<br>
Takahiro Kawashima
<br>
<p><span class="quotelev1">&gt; Kawashima-san,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i'd rather consider this as a bug in the README (!)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; heterogenous support has been broken for some time, but it was
</span><br>
<span class="quotelev1">&gt; eventually fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; truth is there are *very* limited resources (both human and hardware)
</span><br>
<span class="quotelev1">&gt; maintaining heterogeneous
</span><br>
<span class="quotelev1">&gt; support, but that does not mean heterogeneous support should not be
</span><br>
<span class="quotelev1">&gt; used, nor that bug report
</span><br>
<span class="quotelev1">&gt; will be ignored.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/12/24 9:26, Kawashima, Takahiro wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Siegmar,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Heterogeneous environment is not supported officially.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; README of Open MPI master says:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --enable-heterogeneous
</span><br>
<span class="quotelev2">&gt; &gt;   Enable support for running on heterogeneous clusters (e.g., machines
</span><br>
<span class="quotelev2">&gt; &gt;   with different endian representations).  Heterogeneous support is
</span><br>
<span class="quotelev2">&gt; &gt;   disabled by default because it imposes a minor performance penalty.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   *** THIS FUNCTIONALITY IS CURRENTLY BROKEN - DO NOT USE ***
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; today I installed openmpi-dev-602-g82c02b4 on my machines (Solaris 10 Sparc,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Solaris 10 x86_64, and openSUSE Linux 12.1 x86_64) with gcc-4.9.2 and the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; new Solaris Studio 12.4 compilers. All build processes finished without
</span><br>
<span class="quotelev3">&gt; &gt;&gt; errors, but I have a problem running a very small program. It works for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; three processes but hangs for six processes. I have the same behaviour
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for both compilers.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr small_prog 139 time; mpiexec -np 3 --host sunpc1,linpc1,tyr init_finalize; time
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 827.161u 210.126s 30:51.08 56.0%        0+0k 4151+20io 2898pf+0w
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 827.886u 210.335s 30:54.68 55.9%        0+0k 4151+20io 2898pf+0w
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr small_prog 140 time; mpiexec -np 6 --host sunpc1,linpc1,tyr init_finalize; time
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 827.946u 210.370s 31:15.02 55.3%        0+0k 4151+20io 2898pf+0w
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ^CKilled by signal 2.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Killed by signal 2.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 869.242u 221.644s 33:40.54 53.9%        0+0k 4151+20io 2898pf+0w
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr small_prog 141 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr small_prog 145 ompi_info | grep -e &quot;Open MPI repo revision:&quot; -e &quot;C compiler:&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Open MPI repo revision: dev-602-g82c02b4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               C compiler: cc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr small_prog 146 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr small_prog 146 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
</span><br>
<span class="quotelev3">&gt; &gt;&gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (gdb) run -np 3 --host sunpc1,linpc1,tyr init_finalize
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Starting program: /usr/local/openmpi-1.9.0_64_cc/bin/mpiexec -np 3 --host sunpc1,linpc1,tyr 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; init_finalize
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New LWP    2        ]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [LWP    2         exited]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New Thread 2        ]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to satisfy query
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (gdb) run -np 6 --host sunpc1,linpc1,tyr init_finalize
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The program being debugged has been started already.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Start it from the beginning? (y or n) y
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Starting program: /usr/local/openmpi-1.9.0_64_cc/bin/mpiexec -np 6 --host sunpc1,linpc1,tyr 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; init_finalize
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New LWP    2        ]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ^CKilled by signal 2.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Killed by signal 2.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Program received signal SIGINT, Interrupt.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0xffffffff7d1dc6b0 in __pollsys () from /lib/sparcv9/libc.so.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #0  0xffffffff7d1dc6b0 in __pollsys () from /lib/sparcv9/libc.so.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #1  0xffffffff7d1cb468 in _pollsys () from /lib/sparcv9/libc.so.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #2  0xffffffff7d170ed8 in poll () from /lib/sparcv9/libc.so.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #3  0xffffffff7e69a630 in poll_dispatch ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    from /usr/local/openmpi-1.9.0_64_cc/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #4  0xffffffff7e6894ec in opal_libevent2021_event_base_loop ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    from /usr/local/openmpi-1.9.0_64_cc/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #5  0x000000010000eb14 in orterun (argc=1757447168, argv=0xffffff7ed8550cff)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     at ../../../../openmpi-dev-602-g82c02b4/orte/tools/orterun/orterun.c:1090
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #6  0x0000000100004e2c in main (argc=256, argv=0xffffff7ed8af5c00)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     at ../../../../openmpi-dev-602-g82c02b4/orte/tools/orterun/main.c:13
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (gdb) 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any ideas? Unfortunately I'm leaving for vaccation so that I cannot test
</span><br>
<span class="quotelev3">&gt; &gt;&gt; any patches until the end of the year. Neverthess I wanted to report the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problem. At the moment I cannot test if I have the same behaviour in a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; homogeneous environment with three machines because the new version isn't
</span><br>
<span class="quotelev3">&gt; &gt;&gt; available before tomorrow on the other machines. I used the following
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure command.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ../openmpi-dev-602-g82c02b4/configure --prefix=/usr/local/openmpi-1.9.0_64_cc \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --libdir=/usr/local/openmpi-1.9.0_64_cc/lib64 \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   LDFLAGS=&quot;-m64 -mt&quot; \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   CFLAGS=&quot;-m64 -mt&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --enable-mpi-cxx \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --enable-mpi-java \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --with-threads=posix \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --without-verbs \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --with-wrapper-cflags=&quot;-m64 -mt&quot; \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --with-wrapper-cxxflags=&quot;-m64 -library=stlport4&quot; \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --with-wrapper-ldflags=&quot;-mt&quot; \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --enable-debug \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Furthermore I used the following test program.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   printf (&quot;Hello!\n&quot;);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   MPI_Finalize ();
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   return EXIT_SUCCESS;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26071.php">Siegmar Gross: "Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
<li><strong>Previous message:</strong> <a href="26069.php">Gilles Gouaillardet: "Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
<li><strong>In reply to:</strong> <a href="26069.php">Gilles Gouaillardet: "Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26072.php">Ralph Castain: "Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
<li><strong>Reply:</strong> <a href="26072.php">Ralph Castain: "Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
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
