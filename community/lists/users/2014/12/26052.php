<?
$subject_val = "[OMPI users] processes hang with openmpi-dev-602-g82c02b4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 22 11:33:51 2014" -->
<!-- isoreceived="20141222163351" -->
<!-- sent="Mon, 22 Dec 2014 14:48:18 +0100 (CET)" -->
<!-- isosent="20141222134818" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] processes hang with openmpi-dev-602-g82c02b4" -->
<!-- id="201412221348.sBMDmIVF011576_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] processes hang with openmpi-dev-602-g82c02b4<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-22 08:48:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26053.php">Ralph Castain: "Re: [OMPI users] Question on Mapping and Binding"</a>
<li><strong>Previous message:</strong> <a href="26051.php">Saliya Ekanayake: "[OMPI users] Question on Mapping and Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26067.php">Kawashima, Takahiro: "Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
<li><strong>Reply:</strong> <a href="26067.php">Kawashima, Takahiro: "Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
<li><strong>Reply:</strong> <a href="26068.php">Gilles Gouaillardet: "Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I installed openmpi-dev-602-g82c02b4 on my machines (Solaris 10 Sparc,
<br>
Solaris 10 x86_64, and openSUSE Linux 12.1 x86_64) with gcc-4.9.2 and the
<br>
new Solaris Studio 12.4 compilers. All build processes finished without
<br>
errors, but I have a problem running a very small program. It works for
<br>
three processes but hangs for six processes. I have the same behaviour
<br>
for both compilers.
<br>
<p>tyr small_prog 139 time; mpiexec -np 3 --host sunpc1,linpc1,tyr init_finalize; time
<br>
827.161u 210.126s 30:51.08 56.0%        0+0k 4151+20io 2898pf+0w
<br>
Hello!
<br>
Hello!
<br>
Hello!
<br>
827.886u 210.335s 30:54.68 55.9%        0+0k 4151+20io 2898pf+0w
<br>
tyr small_prog 140 time; mpiexec -np 6 --host sunpc1,linpc1,tyr init_finalize; time
<br>
827.946u 210.370s 31:15.02 55.3%        0+0k 4151+20io 2898pf+0w
<br>
^CKilled by signal 2.
<br>
Killed by signal 2.
<br>
869.242u 221.644s 33:40.54 53.9%        0+0k 4151+20io 2898pf+0w
<br>
tyr small_prog 141 
<br>
<p>tyr small_prog 145 ompi_info | grep -e &quot;Open MPI repo revision:&quot; -e &quot;C compiler:&quot;
<br>
&nbsp;&nbsp;Open MPI repo revision: dev-602-g82c02b4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: cc
<br>
tyr small_prog 146 
<br>
<p><p>tyr small_prog 146 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
<br>
GNU gdb (GDB) 7.6.1
<br>
...
<br>
(gdb) run -np 3 --host sunpc1,linpc1,tyr init_finalize
<br>
Starting program: /usr/local/openmpi-1.9.0_64_cc/bin/mpiexec -np 3 --host sunpc1,linpc1,tyr 
<br>
init_finalize
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
Hello!
<br>
Hello!
<br>
Hello!
<br>
[LWP    2         exited]
<br>
[New Thread 2        ]
<br>
[Switching to Thread 1 (LWP 1)]
<br>
sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to satisfy query
<br>
(gdb) run -np 6 --host sunpc1,linpc1,tyr init_finalize
<br>
The program being debugged has been started already.
<br>
Start it from the beginning? (y or n) y
<br>
<p>Starting program: /usr/local/openmpi-1.9.0_64_cc/bin/mpiexec -np 6 --host sunpc1,linpc1,tyr 
<br>
init_finalize
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
^CKilled by signal 2.
<br>
Killed by signal 2.
<br>
<p>Program received signal SIGINT, Interrupt.
<br>
[Switching to Thread 1 (LWP 1)]
<br>
0xffffffff7d1dc6b0 in __pollsys () from /lib/sparcv9/libc.so.1
<br>
(gdb) bt
<br>
#0  0xffffffff7d1dc6b0 in __pollsys () from /lib/sparcv9/libc.so.1
<br>
#1  0xffffffff7d1cb468 in _pollsys () from /lib/sparcv9/libc.so.1
<br>
#2  0xffffffff7d170ed8 in poll () from /lib/sparcv9/libc.so.1
<br>
#3  0xffffffff7e69a630 in poll_dispatch ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.9.0_64_cc/lib64/libopen-pal.so.0
<br>
#4  0xffffffff7e6894ec in opal_libevent2021_event_base_loop ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.9.0_64_cc/lib64/libopen-pal.so.0
<br>
#5  0x000000010000eb14 in orterun (argc=1757447168, argv=0xffffff7ed8550cff)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-602-g82c02b4/orte/tools/orterun/orterun.c:1090
<br>
#6  0x0000000100004e2c in main (argc=256, argv=0xffffff7ed8af5c00)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-602-g82c02b4/orte/tools/orterun/main.c:13
<br>
(gdb) 
<br>
<p>Any ideas? Unfortunately I'm leaving for vaccation so that I cannot test
<br>
any patches until the end of the year. Neverthess I wanted to report the
<br>
problem. At the moment I cannot test if I have the same behaviour in a
<br>
homogeneous environment with three machines because the new version isn't
<br>
available before tomorrow on the other machines. I used the following
<br>
configure command.
<br>
<p>../openmpi-dev-602-g82c02b4/configure --prefix=/usr/local/openmpi-1.9.0_64_cc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.9.0_64_cc/lib64 \
<br>
&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.8.0/bin \
<br>
&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.8.0/include \
<br>
&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.8.0 \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m64 -mt&quot; \
<br>
&nbsp;&nbsp;CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m64 -mt&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
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
&nbsp;&nbsp;--with-wrapper-cflags=&quot;-m64 -mt&quot; \
<br>
&nbsp;&nbsp;--with-wrapper-cxxflags=&quot;-m64 -library=stlport4&quot; \
<br>
&nbsp;&nbsp;--with-wrapper-ldflags=&quot;-mt&quot; \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
<br>
<p>Furthermore I used the following test program.
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main (int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Init (&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;printf (&quot;Hello!\n&quot;);
<br>
&nbsp;&nbsp;MPI_Finalize ();
<br>
&nbsp;&nbsp;return EXIT_SUCCESS;
<br>
}
<br>
<p><p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26053.php">Ralph Castain: "Re: [OMPI users] Question on Mapping and Binding"</a>
<li><strong>Previous message:</strong> <a href="26051.php">Saliya Ekanayake: "[OMPI users] Question on Mapping and Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26067.php">Kawashima, Takahiro: "Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
<li><strong>Reply:</strong> <a href="26067.php">Kawashima, Takahiro: "Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
<li><strong>Reply:</strong> <a href="26068.php">Gilles Gouaillardet: "Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
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
