<?
$subject_val = "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 27 21:34:21 2016" -->
<!-- isoreceived="20160428013421" -->
<!-- sent="Thu, 28 Apr 2016 10:34:09 +0900" -->
<!-- isosent="20160428013409" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8" -->
<!-- id="c173ccda-4979-d90c-a8ae-99f588e2625d_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="a8d0facb-7b67-2a79-8fba-015819983e68_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-27 21:34:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29043.php">dpchoudh .: "[OMPI users] Add release dates to release notes"</a>
<li><strong>Previous message:</strong> <a href="29041.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>In reply to:</strong> <a href="29041.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29044.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Reply:</strong> <a href="29044.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Reply:</strong> <a href="29047.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar,
<br>
<p><p>can you please also post the source of spawn_slave ?
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 4/28/2016 1:17 AM, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it is not necessary to have a heterogeneous environment to reproduce
</span><br>
<span class="quotelev1">&gt; the error as you can see below. All machines are 64 bit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr spawn 119 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C compiler 
</span><br>
<span class="quotelev1">&gt; absolute&quot;
</span><br>
<span class="quotelev1">&gt;       OPAL repo revision: v2.x-dev-1290-gbd0e4e1
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/local/gcc-5.1.0/bin/gcc
</span><br>
<span class="quotelev1">&gt; tyr spawn 120 uname -a
</span><br>
<span class="quotelev1">&gt; SunOS tyr.informatik.hs-fulda.de 5.10 Generic_150400-11 sun4u sparc 
</span><br>
<span class="quotelev1">&gt; SUNW,A70 Solaris
</span><br>
<span class="quotelev1">&gt; tyr spawn 121 mpiexec -np 1 --host tyr,tyr,tyr,tyr spawn_multiple_master
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parent process 0 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;   I create 3 slave processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:27286] PMIX ERROR: UNPACK-PAST-END in file 
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/pmix/pmix112/pmix/src/server/pmix_server_ops.c 
</span><br>
<span class="quotelev1">&gt; at line 829
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:27286] PMIX ERROR: UNPACK-PAST-END in file 
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/pmix/pmix112/pmix/src/server/pmix_server.c 
</span><br>
<span class="quotelev1">&gt; at line 2176
</span><br>
<span class="quotelev1">&gt; [tyr:27288] *** An error occurred in MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev1">&gt; [tyr:27288] *** reported by process [3434086401,0]
</span><br>
<span class="quotelev1">&gt; [tyr:27288] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [tyr:27288] *** MPI_ERR_SPAWN: could not spawn processes
</span><br>
<span class="quotelev1">&gt; [tyr:27288] *** MPI_ERRORS_ARE_FATAL (processes in this communicator 
</span><br>
<span class="quotelev1">&gt; will now abort,
</span><br>
<span class="quotelev1">&gt; [tyr:27288] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; tyr spawn 122
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
<span class="quotelev1">&gt; sunpc1 fd1026 105 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C 
</span><br>
<span class="quotelev1">&gt; compiler absolute&quot;
</span><br>
<span class="quotelev1">&gt;       OPAL repo revision: v2.x-dev-1290-gbd0e4e1
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/local/gcc-5.1.0/bin/gcc
</span><br>
<span class="quotelev1">&gt; sunpc1 fd1026 106 uname -a
</span><br>
<span class="quotelev1">&gt; SunOS sunpc1 5.10 Generic_147441-21 i86pc i386 i86pc Solaris
</span><br>
<span class="quotelev1">&gt; sunpc1 fd1026 107 mpiexec -np 1 --host sunpc1,sunpc1,sunpc1,sunpc1 
</span><br>
<span class="quotelev1">&gt; spawn_multiple_master
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parent process 0 running on sunpc1
</span><br>
<span class="quotelev1">&gt;   I create 3 slave processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [sunpc1:00368] PMIX ERROR: UNPACK-PAST-END in file 
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/pmix/pmix112/pmix/src/server/pmix_server_ops.c 
</span><br>
<span class="quotelev1">&gt; at line 829
</span><br>
<span class="quotelev1">&gt; [sunpc1:00368] PMIX ERROR: UNPACK-PAST-END in file 
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/pmix/pmix112/pmix/src/server/pmix_server.c 
</span><br>
<span class="quotelev1">&gt; at line 2176
</span><br>
<span class="quotelev1">&gt; [sunpc1:370] *** An error occurred in MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev1">&gt; [sunpc1:370] *** reported by process [43909121,0]
</span><br>
<span class="quotelev1">&gt; [sunpc1:370] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [sunpc1:370] *** MPI_ERR_SPAWN: could not spawn processes
</span><br>
<span class="quotelev1">&gt; [sunpc1:370] *** MPI_ERRORS_ARE_FATAL (processes in this communicator 
</span><br>
<span class="quotelev1">&gt; will now abort,
</span><br>
<span class="quotelev1">&gt; [sunpc1:370] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; sunpc1 fd1026 108
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
<span class="quotelev1">&gt; linpc1 fd1026 105 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C 
</span><br>
<span class="quotelev1">&gt; compiler absolute&quot;
</span><br>
<span class="quotelev1">&gt;       OPAL repo revision: v2.x-dev-1290-gbd0e4e1
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/local/gcc-5.1.0/bin/gcc
</span><br>
<span class="quotelev1">&gt; linpc1 fd1026 106 uname -a
</span><br>
<span class="quotelev1">&gt; Linux linpc1 3.1.10-1.29-desktop #1 SMP PREEMPT Fri May 31 20:10:04 
</span><br>
<span class="quotelev1">&gt; UTC 2013 (2529847) x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; linpc1 fd1026 107 mpiexec -np 1 --host linpc1,linpc1,linpc1,linpc1 
</span><br>
<span class="quotelev1">&gt; spawn_multiple_master
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parent process 0 running on linpc1
</span><br>
<span class="quotelev1">&gt;   I create 3 slave processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [linpc1:21502] PMIX ERROR: UNPACK-PAST-END in file 
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/pmix/pmix112/pmix/src/server/pmix_server_ops.c 
</span><br>
<span class="quotelev1">&gt; at line 829
</span><br>
<span class="quotelev1">&gt; [linpc1:21502] PMIX ERROR: UNPACK-PAST-END in file 
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/pmix/pmix112/pmix/src/server/pmix_server.c 
</span><br>
<span class="quotelev1">&gt; at line 2176
</span><br>
<span class="quotelev1">&gt; [linpc1:21507] *** An error occurred in MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev1">&gt; [linpc1:21507] *** reported by process [1005518849,0]
</span><br>
<span class="quotelev1">&gt; [linpc1:21507] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [linpc1:21507] *** MPI_ERR_SPAWN: could not spawn processes
</span><br>
<span class="quotelev1">&gt; [linpc1:21507] *** MPI_ERRORS_ARE_FATAL (processes in this 
</span><br>
<span class="quotelev1">&gt; communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [linpc1:21507] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; linpc1 fd1026 108
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used the following configure command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../openmpi-v2.x-dev-1290-gbd0e4e1/configure \
</span><br>
<span class="quotelev1">&gt;   --prefix=/usr/local/openmpi-2.0.0_64_gcc \
</span><br>
<span class="quotelev1">&gt;   --libdir=/usr/local/openmpi-2.0.0_64_gcc/lib64 \
</span><br>
<span class="quotelev1">&gt;   --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev1">&gt;   --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev1">&gt;   JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev1">&gt;   LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev1">&gt;   CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;   --without-verbs \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-cxxflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   --enable-debug \
</span><br>
<span class="quotelev1">&gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
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
<span class="quotelev1">&gt; Am 27.04.2016 um 13:21 schrieb Gilles Gouaillardet:
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; please add this to your CFLAGS for the time being.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure tries to detect which flags must be added for C99 support, 
</span><br>
<span class="quotelev2">&gt;&gt; and it seems
</span><br>
<span class="quotelev2">&gt;&gt; the test is not working for Solaris 10 and Oracle compilers.
</span><br>
<span class="quotelev2">&gt;&gt; this is no more a widely used environment, and I am not sure I can 
</span><br>
<span class="quotelev2">&gt;&gt; find the
</span><br>
<span class="quotelev2">&gt;&gt; time to fix this
</span><br>
<span class="quotelev2">&gt;&gt; in a near future.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; regarding the runtime issue, can you please describe your 4 hosts (os,
</span><br>
<span class="quotelev2">&gt;&gt; endianness and bitness)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wednesday, April 27, 2016, Siegmar Gross
</span><br>
<span class="quotelev2">&gt;&gt; &lt;siegmar.gross_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','siegmar.gross_at_[hidden]');&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hi Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     adding &quot;-std=c99&quot; to CFLAGS solves the problem with the missing 
</span><br>
<span class="quotelev2">&gt;&gt; library.
</span><br>
<span class="quotelev2">&gt;&gt;     Shall I add it permanently to my configure command or will you 
</span><br>
<span class="quotelev2">&gt;&gt; add it,
</span><br>
<span class="quotelev2">&gt;&gt;     so that I will not run into problems if you need the C11 standard 
</span><br>
<span class="quotelev2">&gt;&gt; later?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;spawn_multiple_master&quot; breaks with the same error that I reported
</span><br>
<span class="quotelev2">&gt;&gt;     yesterday for my gcc-version of Open MPI. Hopefully you can solve 
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;     problem as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Kind regards and thank you very much for your help
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Am 27.04.2016 um 08:05 schrieb Gilles Gouaillardet:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Siegmar,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         here is the error :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         configure:17969: cc -o conftest -m64 -D_REENTRANT -g  -g
</span><br>
<span class="quotelev2">&gt;&gt; -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1
</span><br>
<span class="quotelev2">&gt;&gt; -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1-SunOS.sparc.64_cc
</span><br>
<span class="quotelev2">&gt;&gt; -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1/opal/include
</span><br>
<span class="quotelev2">&gt;&gt; -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1-SunOS.sparc.64_cc/opal/include
</span><br>
<span class="quotelev2">&gt;&gt;         -D_REENTRANT
</span><br>
<span class="quotelev2">&gt;&gt; -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev2">&gt;&gt; -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1-SunOS.sparc.64_cc/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev2">&gt;&gt; -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/event/libevent2022/libevent
</span><br>
<span class="quotelev2">&gt;&gt; -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev2">&gt;&gt; -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1-SunOS.sparc.64_cc/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev2">&gt;&gt;         -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev2">&gt;&gt;         &quot;/usr/include/stdbool.h&quot;, line 42: #error: &quot;Use of 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;stdbool.h&gt; is
</span><br>
<span class="quotelev2">&gt;&gt;         valid only
</span><br>
<span class="quotelev2">&gt;&gt;         in a c99 compilation environment.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         i cannot reproduce this on solaris 11 with oracle studio 5.3 
</span><br>
<span class="quotelev2">&gt;&gt; compiler,
</span><br>
<span class="quotelev2">&gt;&gt;         and i
</span><br>
<span class="quotelev2">&gt;&gt;         do not have solaris 10 yet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         could you please re-configure with '-std=c99' appended to 
</span><br>
<span class="quotelev2">&gt;&gt; your CFLAGS
</span><br>
<span class="quotelev2">&gt;&gt;         and see
</span><br>
<span class="quotelev2">&gt;&gt;         if it helps ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On 4/26/2016 7:57 PM, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Hi Gilles and Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             I was able to sort out my mess. In my last email I 
</span><br>
<span class="quotelev2">&gt;&gt; compared the
</span><br>
<span class="quotelev2">&gt;&gt;             files from 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;SunOS_sparc/openmpi-2.0.0_64_gcc/lib64/openmpi&quot; from
</span><br>
<span class="quotelev2">&gt;&gt;             the attachment of my email to Ralph with the files from
</span><br>
<span class="quotelev2">&gt;&gt;             &quot;SunOS_sparc/openmpi-2.0.0_64_cc/lib64/openmpi&quot; from my 
</span><br>
<span class="quotelev2">&gt;&gt; current
</span><br>
<span class="quotelev2">&gt;&gt;             file system. That's the reason while I have had different
</span><br>
<span class="quotelev2">&gt;&gt;             timestamps. The other problem was that Ralph didn't 
</span><br>
<span class="quotelev2">&gt;&gt; recognize
</span><br>
<span class="quotelev2">&gt;&gt;             that &quot;mca_pmix_pmix112.so&quot; wasn't built on Solaris with the
</span><br>
<span class="quotelev2">&gt;&gt;             Sun C compiler. I've removed most of the files from the 
</span><br>
<span class="quotelev2">&gt;&gt; attachment
</span><br>
<span class="quotelev2">&gt;&gt;             of my email so that it is easier to see the relevant 
</span><br>
<span class="quotelev2">&gt;&gt; files. Below
</span><br>
<span class="quotelev2">&gt;&gt;             I try to give you more information that may be relevant 
</span><br>
<span class="quotelev2">&gt;&gt; to track
</span><br>
<span class="quotelev2">&gt;&gt;             down the problem. I still get an error running one of my 
</span><br>
<span class="quotelev2">&gt;&gt; small
</span><br>
<span class="quotelev2">&gt;&gt;             test programs, when I use my gcc-version of Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;             &quot;mca_pmix_pmix112.so&quot; is a 64 bits library.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Linux_x86_64/openmpi-2.0.0_64_cc/lib64/openmpi:
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root  261327 Apr 19 16:46 mca_plm_slurm.so
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root    1002 Apr 19 16:45 
</span><br>
<span class="quotelev2">&gt;&gt; mca_pmix_pmix112.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://mca_pmix_pmix112.la">http://mca_pmix_pmix112.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root 3906526 Apr 19 16:45 
</span><br>
<span class="quotelev2">&gt;&gt; mca_pmix_pmix112.so
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root     966 Apr 19 16:51 mca_pml_cm.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root 1574265 Apr 19 16:51 mca_pml_cm.so
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Linux_x86_64/openmpi-2.0.0_64_gcc/lib64/openmpi:
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root   70371 Apr 19 16:43 mca_plm_slurm.so
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root    1008 Apr 19 16:42 
</span><br>
<span class="quotelev2">&gt;&gt; mca_pmix_pmix112.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://mca_pmix_pmix112.la">http://mca_pmix_pmix112.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root 1029005 Apr 19 16:42 
</span><br>
<span class="quotelev2">&gt;&gt; mca_pmix_pmix112.so
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root     972 Apr 19 16:46 mca_pml_cm.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root  284858 Apr 19 16:46 mca_pml_cm.so
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             SunOS_sparc/openmpi-2.0.0_64_cc/lib64/openmpi:
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root  319816 Apr 19 19:58 mca_plm_rsh.so
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root     970 Apr 19 20:00 mca_pml_cm.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root 1507440 Apr 19 20:00 mca_pml_cm.so
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             SunOS_sparc/openmpi-2.0.0_64_gcc/lib64/openmpi:
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root  153280 Apr 19 19:49 mca_plm_rsh.so
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root    1007 Apr 19 19:47 
</span><br>
<span class="quotelev2">&gt;&gt; mca_pmix_pmix112.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://mca_pmix_pmix112.la">http://mca_pmix_pmix112.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root 1400512 Apr 19 19:47 
</span><br>
<span class="quotelev2">&gt;&gt; mca_pmix_pmix112.so
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root     971 Apr 19 19:52 mca_pml_cm.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root  342440 Apr 19 19:52 mca_pml_cm.so
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/openmpi:
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root  300096 Apr 19 17:18 mca_plm_rsh.so
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root     970 Apr 19 17:23 mca_pml_cm.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root 1458816 Apr 19 17:23 mca_pml_cm.so
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             SunOS_x86_64/openmpi-2.0.0_64_gcc/lib64/openmpi:
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root  133096 Apr 19 17:42 mca_plm_rsh.so
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root    1007 Apr 19 17:41 
</span><br>
<span class="quotelev2">&gt;&gt; mca_pmix_pmix112.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://mca_pmix_pmix112.la">http://mca_pmix_pmix112.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root 1320240 Apr 19 17:41 
</span><br>
<span class="quotelev2">&gt;&gt; mca_pmix_pmix112.so
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root     971 Apr 19 17:46 mca_pml_cm.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             -rwxr-xr-x 1 root root  419848 Apr 19 17:46 mca_pml_cm.so
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Yesterday I've installed openmpi-v2.x-dev-1290-gbd0e4e1 
</span><br>
<span class="quotelev2">&gt;&gt; so that we
</span><br>
<span class="quotelev2">&gt;&gt;             have a current version for the investigation of the 
</span><br>
<span class="quotelev2">&gt;&gt; problem. Once
</span><br>
<span class="quotelev2">&gt;&gt;             more mca_pmix_pmix112.so isn't available on Solaris if I 
</span><br>
<span class="quotelev2">&gt;&gt; use the
</span><br>
<span class="quotelev2">&gt;&gt;             Sun C compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &quot;config.log&quot; for gcc-5.1.0 shows the following.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;             configure:127799: /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; '../../../../../../openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/pmix/pmix112/
</span><br>
<span class="quotelev2">&gt;&gt;             pmix/configure' succeeded for opal/mca/pmix/pmix112/pmix
</span><br>
<span class="quotelev2">&gt;&gt;             configure:127916: checking if MCA component pmix:pmix112 
</span><br>
<span class="quotelev2">&gt;&gt; can compile
</span><br>
<span class="quotelev2">&gt;&gt;             configure:127918: result: yes
</span><br>
<span class="quotelev2">&gt;&gt;             configure:5637: --- MCA component pmix:external (m4 
</span><br>
<span class="quotelev2">&gt;&gt; configuration
</span><br>
<span class="quotelev2">&gt;&gt;             macro)
</span><br>
<span class="quotelev2">&gt;&gt;             configure:128523: checking for MCA component 
</span><br>
<span class="quotelev2">&gt;&gt; pmix:external compile
</span><br>
<span class="quotelev2">&gt;&gt;             mode
</span><br>
<span class="quotelev2">&gt;&gt;             configure:128529: result: dso
</span><br>
<span class="quotelev2">&gt;&gt;             configure:129054: checking if MCA component pmix:external 
</span><br>
<span class="quotelev2">&gt;&gt; can compile
</span><br>
<span class="quotelev2">&gt;&gt;             configure:129056: result: no
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;             config.status:3897: creating opal/mca/pmix/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;             config.status:3897: creating opal/mca/pmix/s1/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;             config.status:3897: creating opal/mca/pmix/cray/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;             config.status:3897: creating opal/mca/pmix/s2/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;             config.status:3897: creating opal/mca/pmix/pmix112/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;             config.status:3897: creating opal/mca/pmix/external/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_BUILD_opal_pmix_cray_DSO_FALSE='#'
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_BUILD_opal_pmix_cray_DSO_TRUE=''
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_BUILD_opal_pmix_external_DSO_FALSE='#'
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_BUILD_opal_pmix_external_DSO_TRUE=''
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_BUILD_opal_pmix_pmix112_DSO_FALSE='#'
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_BUILD_opal_pmix_pmix112_DSO_TRUE=''
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_BUILD_opal_pmix_s1_DSO_FALSE='#'
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_BUILD_opal_pmix_s1_DSO_TRUE=''
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_BUILD_opal_pmix_s2_DSO_FALSE='#'
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_BUILD_opal_pmix_s2_DSO_TRUE=''
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_opal_FRAMEWORKS='common  allocator backtrace btl dl 
</span><br>
<span class="quotelev2">&gt;&gt; event hwloc if
</span><br>
<span class="quotelev2">&gt;&gt;             installdirs memchecker memcpy memory mpool pmix pstat 
</span><br>
<span class="quotelev2">&gt;&gt; rcache sec
</span><br>
<span class="quotelev2">&gt;&gt;             shmem timer'
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_opal_FRAMEWORKS_SUBDIRS='mca/common mca/allocator
</span><br>
<span class="quotelev2">&gt;&gt;             mca/backtrace mca/btl
</span><br>
<span class="quotelev2">&gt;&gt;             mca/dl mca/event mca/hwloc mca/if mca/installdirs 
</span><br>
<span class="quotelev2">&gt;&gt; mca/memchecker
</span><br>
<span class="quotelev2">&gt;&gt;             mca/memcpy
</span><br>
<span class="quotelev2">&gt;&gt;             mca/memory mca/mpool mca/pmix mca/pstat mca/rcache mca/sec
</span><br>
<span class="quotelev2">&gt;&gt;             mca/shmem mca/timer'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_FRAMEWORK_COMPONENT_ALL_SUBDIRS='$(MCA_opal_common_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_allocator_ALL_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_backtrace_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_btl_ALL_SUBDIRS) $(MCA_opal_dl_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_event_ALL_SUBDIRS) $(MCA_opal_hwloc_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_if_ALL_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_installdirs_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_memchecker_ALL_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_memcpy_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_memory_ALL_SUBDIRS) $(MCA_opal_mpool_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_pmix_ALL_SUBDIRS) $(MCA_opal_pstat_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_rcache_ALL_SUBDIRS) $(MCA_opal_sec_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_shmem_ALL_SUBDIRS) $(MCA_opal_timer_ALL_SUBDIRS)'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_FRAMEWORK_COMPONENT_DSO_SUBDIRS='$(MCA_opal_common_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_allocator_DSO_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_backtrace_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_btl_DSO_SUBDIRS) $(MCA_opal_dl_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_event_DSO_SUBDIRS) $(MCA_opal_hwloc_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_if_DSO_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_installdirs_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_memchecker_DSO_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_memcpy_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_memory_DSO_SUBDIRS) $(MCA_opal_mpool_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_pmix_DSO_SUBDIRS) $(MCA_opal_pstat_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_rcache_DSO_SUBDIRS) $(MCA_opal_sec_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_shmem_DSO_SUBDIRS) $(MCA_opal_timer_DSO_SUBDIRS)'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_FRAMEWORK_COMPONENT_STATIC_SUBDIRS='$(MCA_opal_common_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;              $(MCA_opal_allocator_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_backtrace_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_btl_STATIC_SUBDIRS) $(MCA_opal_dl_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_event_STATIC_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_hwloc_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_if_STATIC_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_installdirs_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_memchecker_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_memcpy_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_memory_STATIC_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_mpool_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_pmix_STATIC_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_pstat_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_rcache_STATIC_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_sec_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_shmem_STATIC_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_timer_STATIC_SUBDIRS)'
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_opal_FRAMEWORK_LIBS=' $(MCA_opal_common_STATIC_LTLIBS)
</span><br>
<span class="quotelev2">&gt;&gt;             mca/allocator/libmca_allocator.la 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://libmca_allocator.la">http://libmca_allocator.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_allocator_STATIC_LTLIBS)
</span><br>
<span class="quotelev2">&gt;&gt;             mca/backtrace/libmca_backtrace.la 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://libmca_backtrace.la">http://libmca_backtrace.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_backtrace_STATIC_LTLIBS)
</span><br>
<span class="quotelev2">&gt;&gt;             mca/btl/libmca_btl.la &lt;<a href="http://libmca_btl.la">http://libmca_btl.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_btl_STATIC_LTLIBS) mca/dl/libmca_dl.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_dl.la">http://libmca_dl.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_dl_STATIC_LTLIBS) mca/event/libmca_event.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_event.la">http://libmca_event.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_event_STATIC_LTLIBS) mca/hwloc/libmca_hwloc.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_hwloc.la">http://libmca_hwloc.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_hwloc_STATIC_LTLIBS) mca/if/libmca_if.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_if.la">http://libmca_if.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_if_STATIC_LTLIBS) 
</span><br>
<span class="quotelev2">&gt;&gt; mca/installdirs/libmca_installdirs.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_installdirs.la">http://libmca_installdirs.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_installdirs_STATIC_LTLIBS)
</span><br>
<span class="quotelev2">&gt;&gt;             mca/memchecker/libmca_memchecker.la 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://libmca_memchecker.la">http://libmca_memchecker.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_memchecker_STATIC_LTLIBS) 
</span><br>
<span class="quotelev2">&gt;&gt; mca/memcpy/libmca_memcpy.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_memcpy.la">http://libmca_memcpy.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_memcpy_STATIC_LTLIBS) mca/memory/libmca_memory.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_memory.la">http://libmca_memory.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_memory_STATIC_LTLIBS) mca/mpool/libmca_mpool.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_mpool.la">http://libmca_mpool.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_mpool_STATIC_LTLIBS) mca/pmix/libmca_pmix.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_pmix.la">http://libmca_pmix.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_pmix_STATIC_LTLIBS) mca/pstat/libmca_pstat.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_pstat.la">http://libmca_pstat.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_pstat_STATIC_LTLIBS) mca/rcache/libmca_rcache.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_rcache.la">http://libmca_rcache.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_rcache_STATIC_LTLIBS) mca/sec/libmca_sec.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_sec.la">http://libmca_sec.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_sec_STATIC_LTLIBS) mca/shmem/libmca_shmem.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_shmem.la">http://libmca_shmem.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_shmem_STATIC_LTLIBS) mca/timer/libmca_timer.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_timer.la">http://libmca_timer.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_timer_STATIC_LTLIBS)'
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_opal_pmix_ALL_COMPONENTS=' s1 cray s2 pmix112 external'
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_opal_pmix_ALL_SUBDIRS=' mca/pmix/s1 mca/pmix/cray 
</span><br>
<span class="quotelev2">&gt;&gt; mca/pmix/s2
</span><br>
<span class="quotelev2">&gt;&gt;             mca/pmix/pmix112 mca/pmix/external'
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_opal_pmix_DSO_COMPONENTS=' pmix112'
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_opal_pmix_DSO_SUBDIRS=' mca/pmix/pmix112'
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_opal_pmix_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_opal_pmix_STATIC_LTLIBS=''
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_opal_pmix_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;             opal_pmix_ext_CPPFLAGS=''
</span><br>
<span class="quotelev2">&gt;&gt;             opal_pmix_ext_LDFLAGS=''
</span><br>
<span class="quotelev2">&gt;&gt;             opal_pmix_ext_LIBS=''
</span><br>
<span class="quotelev2">&gt;&gt; opal_pmix_pmix112_CPPFLAGS='-I$(OPAL_TOP_BUILDDIR)/opal/mca/pmix/pmix112/pmix/include/pmix
</span><br>
<span class="quotelev2">&gt;&gt; -I$(OPAL_TOP_BUILDDIR)/opal/mca/pmix/pmix112/pmix/include
</span><br>
<span class="quotelev2">&gt;&gt;             -I$(OPAL_TOP_BUILDDIR)/opal/mca/pmix/pmix112/pmix
</span><br>
<span class="quotelev2">&gt;&gt;             -I$(OPAL_TOP_SRCDIR)/opal/mca/pmix/pmix112/pmix'
</span><br>
<span class="quotelev2">&gt;&gt; opal_pmix_pmix112_LIBS='$(OPAL_TOP_BUILDDIR)/opal/mca/pmix/pmix112/pmix/libpmix.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libpmix.la">http://libpmix.la</a>&gt;'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &quot;config.log&quot; for Sun C 5.13 shows the following.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;             configure:127803: /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; '../../../../../../openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/pmix/pmix112/
</span><br>
<span class="quotelev2">&gt;&gt;             pmix/configure' *failed* for opal/mca/pmix/pmix112/pmix
</span><br>
<span class="quotelev2">&gt;&gt;             configure:128379: checking if MCA component pmix:pmix112 
</span><br>
<span class="quotelev2">&gt;&gt; can compile
</span><br>
<span class="quotelev2">&gt;&gt;             configure:128381: result: no
</span><br>
<span class="quotelev2">&gt;&gt;             configure:5637: --- MCA component pmix:external (m4 
</span><br>
<span class="quotelev2">&gt;&gt; configuration
</span><br>
<span class="quotelev2">&gt;&gt;             macro)
</span><br>
<span class="quotelev2">&gt;&gt;             configure:128523: checking for MCA component 
</span><br>
<span class="quotelev2">&gt;&gt; pmix:external compile
</span><br>
<span class="quotelev2">&gt;&gt;             mode
</span><br>
<span class="quotelev2">&gt;&gt;             configure:128529: result: dso
</span><br>
<span class="quotelev2">&gt;&gt;             configure:129054: checking if MCA component pmix:external 
</span><br>
<span class="quotelev2">&gt;&gt; can compile
</span><br>
<span class="quotelev2">&gt;&gt;             configure:129056: result: no
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;             config.status:3887: creating opal/mca/pmix/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;             config.status:3887: creating opal/mca/pmix/s1/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;             config.status:3887: creating opal/mca/pmix/cray/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;             config.status:3887: creating opal/mca/pmix/s2/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;             config.status:3887: creating opal/mca/pmix/pmix112/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;             config.status:3887: creating opal/mca/pmix/external/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_BUILD_opal_pmix_cray_DSO_FALSE='#'
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_BUILD_opal_pmix_cray_DSO_TRUE=''
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_BUILD_opal_pmix_external_DSO_FALSE='#'
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_BUILD_opal_pmix_external_DSO_TRUE=''
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_BUILD_opal_pmix_pmix112_DSO_FALSE='#'
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_BUILD_opal_pmix_pmix112_DSO_TRUE=''
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_BUILD_opal_pmix_s1_DSO_FALSE='#'
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_BUILD_opal_pmix_s1_DSO_TRUE=''
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_BUILD_opal_pmix_s2_DSO_FALSE='#'
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_BUILD_opal_pmix_s2_DSO_TRUE=''
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_opal_FRAMEWORKS='common  allocator backtrace btl dl 
</span><br>
<span class="quotelev2">&gt;&gt; event hwloc if
</span><br>
<span class="quotelev2">&gt;&gt;             installdirs memchecker memcpy memory mpool pmix pstat 
</span><br>
<span class="quotelev2">&gt;&gt; rcache sec
</span><br>
<span class="quotelev2">&gt;&gt;             shmem timer'
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_opal_FRAMEWORKS_SUBDIRS='mca/common mca/allocator
</span><br>
<span class="quotelev2">&gt;&gt;             mca/backtrace mca/btl
</span><br>
<span class="quotelev2">&gt;&gt;             mca/dl mca/event mca/hwloc mca/if mca/installdirs 
</span><br>
<span class="quotelev2">&gt;&gt; mca/memchecker
</span><br>
<span class="quotelev2">&gt;&gt;             mca/memcpy
</span><br>
<span class="quotelev2">&gt;&gt;             mca/memory mca/mpool mca/pmix mca/pstat mca/rcache mca/sec
</span><br>
<span class="quotelev2">&gt;&gt;             mca/shmem mca/timer'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_FRAMEWORK_COMPONENT_ALL_SUBDIRS='$(MCA_opal_common_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_allocator_ALL_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_backtrace_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_btl_ALL_SUBDIRS) $(MCA_opal_dl_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_event_ALL_SUBDIRS) $(MCA_opal_hwloc_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_if_ALL_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_installdirs_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_memchecker_ALL_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_memcpy_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_memory_ALL_SUBDIRS) $(MCA_opal_mpool_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_pmix_ALL_SUBDIRS) $(MCA_opal_pstat_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_rcache_ALL_SUBDIRS) $(MCA_opal_sec_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_shmem_ALL_SUBDIRS) $(MCA_opal_timer_ALL_SUBDIRS)'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_FRAMEWORK_COMPONENT_DSO_SUBDIRS='$(MCA_opal_common_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_allocator_DSO_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_backtrace_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_btl_DSO_SUBDIRS) $(MCA_opal_dl_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_event_DSO_SUBDIRS) $(MCA_opal_hwloc_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_if_DSO_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_installdirs_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_memchecker_DSO_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_memcpy_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_memory_DSO_SUBDIRS) $(MCA_opal_mpool_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_pmix_DSO_SUBDIRS) $(MCA_opal_pstat_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_rcache_DSO_SUBDIRS) $(MCA_opal_sec_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_shmem_DSO_SUBDIRS) $(MCA_opal_timer_DSO_SUBDIRS)'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_FRAMEWORK_COMPONENT_STATIC_SUBDIRS='$(MCA_opal_common_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;              $(MCA_opal_allocator_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_backtrace_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_btl_STATIC_SUBDIRS) $(MCA_opal_dl_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_event_STATIC_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_hwloc_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_if_STATIC_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_installdirs_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_memchecker_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_memcpy_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_memory_STATIC_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_mpool_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_pmix_STATIC_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_pstat_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_rcache_STATIC_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_sec_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_shmem_STATIC_SUBDIRS) 
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_timer_STATIC_SUBDIRS)'
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_opal_FRAMEWORK_LIBS=' $(MCA_opal_common_STATIC_LTLIBS)
</span><br>
<span class="quotelev2">&gt;&gt;             mca/allocator/libmca_allocator.la 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://libmca_allocator.la">http://libmca_allocator.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_allocator_STATIC_LTLIBS)
</span><br>
<span class="quotelev2">&gt;&gt;             mca/backtrace/libmca_backtrace.la 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://libmca_backtrace.la">http://libmca_backtrace.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_backtrace_STATIC_LTLIBS)
</span><br>
<span class="quotelev2">&gt;&gt;             mca/btl/libmca_btl.la &lt;<a href="http://libmca_btl.la">http://libmca_btl.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_btl_STATIC_LTLIBS) mca/dl/libmca_dl.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_dl.la">http://libmca_dl.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_dl_STATIC_LTLIBS) mca/event/libmca_event.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_event.la">http://libmca_event.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_event_STATIC_LTLIBS) mca/hwloc/libmca_hwloc.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_hwloc.la">http://libmca_hwloc.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_hwloc_STATIC_LTLIBS) mca/if/libmca_if.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_if.la">http://libmca_if.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_if_STATIC_LTLIBS) 
</span><br>
<span class="quotelev2">&gt;&gt; mca/installdirs/libmca_installdirs.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_installdirs.la">http://libmca_installdirs.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_installdirs_STATIC_LTLIBS)
</span><br>
<span class="quotelev2">&gt;&gt;             mca/memchecker/libmca_memchecker.la 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://libmca_memchecker.la">http://libmca_memchecker.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_memchecker_STATIC_LTLIBS) 
</span><br>
<span class="quotelev2">&gt;&gt; mca/memcpy/libmca_memcpy.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_memcpy.la">http://libmca_memcpy.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_memcpy_STATIC_LTLIBS) mca/memory/libmca_memory.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_memory.la">http://libmca_memory.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_memory_STATIC_LTLIBS) mca/mpool/libmca_mpool.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_mpool.la">http://libmca_mpool.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_mpool_STATIC_LTLIBS) mca/pmix/libmca_pmix.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_pmix.la">http://libmca_pmix.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_pmix_STATIC_LTLIBS) mca/pstat/libmca_pstat.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_pstat.la">http://libmca_pstat.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_pstat_STATIC_LTLIBS) mca/rcache/libmca_rcache.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_rcache.la">http://libmca_rcache.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_rcache_STATIC_LTLIBS) mca/sec/libmca_sec.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_sec.la">http://libmca_sec.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_sec_STATIC_LTLIBS) mca/shmem/libmca_shmem.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_shmem.la">http://libmca_shmem.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_shmem_STATIC_LTLIBS) mca/timer/libmca_timer.la
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://libmca_timer.la">http://libmca_timer.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             $(MCA_opal_timer_STATIC_LTLIBS)'
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_opal_pmix_ALL_COMPONENTS=' s1 cray s2 pmix112 external'
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_opal_pmix_ALL_SUBDIRS=' mca/pmix/s1 mca/pmix/cray 
</span><br>
<span class="quotelev2">&gt;&gt; mca/pmix/s2
</span><br>
<span class="quotelev2">&gt;&gt;             mca/pmix/pmix112 mca/pmix/external'
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_opal_pmix_DSO_COMPONENTS=''
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_opal_pmix_DSO_SUBDIRS=''
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_opal_pmix_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_opal_pmix_STATIC_LTLIBS=''
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_opal_pmix_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;             opal_pmix_ext_CPPFLAGS=''
</span><br>
<span class="quotelev2">&gt;&gt;             opal_pmix_ext_LDFLAGS=''
</span><br>
<span class="quotelev2">&gt;&gt;             opal_pmix_ext_LIBS=''
</span><br>
<span class="quotelev2">&gt;&gt;             opal_pmix_pmix112_CPPFLAGS=''
</span><br>
<span class="quotelev2">&gt;&gt;             opal_pmix_pmix112_LIBS=''
</span><br>
<span class="quotelev2">&gt;&gt;             ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             I've attached the config.log files for pmix.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             tyr openmpi-2.0.0 142 tar zvft pmix_config.log.tar.gz
</span><br>
<span class="quotelev2">&gt;&gt;             -rw-r--r-- root/root    136291 2016-04-25 08:05:34
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-v2.x-dev-1290-gbd0e4e1-SunOS.sparc.64_cc/opal/mca/pmix/pmix112/pmix/config.log
</span><br>
<span class="quotelev2">&gt;&gt;             -rw-r--r-- root/root    528808 2016-04-25 08:07:54
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-v2.x-dev-1290-gbd0e4e1-SunOS.sparc.64_gcc/opal/mca/pmix/pmix112/pmix/config.log
</span><br>
<span class="quotelev2">&gt;&gt;             tyr openmpi-2.0.0 143
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             I've also attached the output for the broken execution of
</span><br>
<span class="quotelev2">&gt;&gt;             &quot;spawn_multiple_master&quot; for my gcc-version of Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;             &quot;spawn_master&quot; works as expected with my gcc-version of 
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Hopefully you can fix the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Kind regards and thank you very much for your help
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Am 23.04.2016 um 21:34 schrieb Siegmar Gross:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Hi Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 I don't know what happened, but the files are not 
</span><br>
<span class="quotelev2">&gt;&gt; available now
</span><br>
<span class="quotelev2">&gt;&gt;                 and they were definitely available when I answered 
</span><br>
<span class="quotelev2">&gt;&gt; the email from
</span><br>
<span class="quotelev2">&gt;&gt;                 Ralph. The files also have a different timestamp now. 
</span><br>
<span class="quotelev2">&gt;&gt; This is an
</span><br>
<span class="quotelev2">&gt;&gt;                 extract from my email to Ralph for Solaris Sparc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 -rwxr-xr-x 1 root root     977 Apr 19 19:49 
</span><br>
<span class="quotelev2">&gt;&gt; mca_plm_rsh.la
</span><br>
<span class="quotelev2">&gt;&gt;                 &lt;<a href="http://mca_plm_rsh.la">http://mca_plm_rsh.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 -rwxr-xr-x 1 root root  153280 Apr 19 19:49 
</span><br>
<span class="quotelev2">&gt;&gt; mca_plm_rsh.so
</span><br>
<span class="quotelev2">&gt;&gt;                 -rwxr-xr-x 1 root root    1007 Apr 19 19:47
</span><br>
<span class="quotelev2">&gt;&gt;                 mca_pmix_pmix112.la &lt;<a href="http://mca_pmix_pmix112.la">http://mca_pmix_pmix112.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 -rwxr-xr-x 1 root root 1400512 Apr 19 19:47 
</span><br>
<span class="quotelev2">&gt;&gt; mca_pmix_pmix112.so
</span><br>
<span class="quotelev2">&gt;&gt;                 -rwxr-xr-x 1 root root     971 Apr 19 19:52 
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_cm.la
</span><br>
<span class="quotelev2">&gt;&gt;                 &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 -rwxr-xr-x 1 root root  342440 Apr 19 19:52 
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Now I have the following output for these files.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 -rwxr-xr-x 1 root root     976 Apr 19 19:58 
</span><br>
<span class="quotelev2">&gt;&gt; mca_plm_rsh.la
</span><br>
<span class="quotelev2">&gt;&gt;                 &lt;<a href="http://mca_plm_rsh.la">http://mca_plm_rsh.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 -rwxr-xr-x 1 root root  319816 Apr 19 19:58 
</span><br>
<span class="quotelev2">&gt;&gt; mca_plm_rsh.so
</span><br>
<span class="quotelev2">&gt;&gt;                 -rwxr-xr-x 1 root root     970 Apr 19 20:00 
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_cm.la
</span><br>
<span class="quotelev2">&gt;&gt;                 &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 -rwxr-xr-x 1 root root 1507440 Apr 19 20:00 
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 I'll try to find out what happened next week when I'm 
</span><br>
<span class="quotelev2">&gt;&gt; back in
</span><br>
<span class="quotelev2">&gt;&gt;                 my office.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Am 23.04.16 um 02:12 schrieb Gilles Gouaillardet:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     Siegmar,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     I will try to reproduce this on my solaris11 
</span><br>
<span class="quotelev2">&gt;&gt; x86_64 vm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     In the mean time, can you please double check
</span><br>
<span class="quotelev2">&gt;&gt;                     mca_pmix_pmix_pmix112.so
</span><br>
<span class="quotelev2">&gt;&gt;                     is a 64 bits library ?
</span><br>
<span class="quotelev2">&gt;&gt;                     (E.g, confirm &quot;-m64&quot; was correctly passed to pmix)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     On Friday, April 22, 2016, Siegmar Gross
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;siegmar.gross_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:siegmar.gross_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         I've already used &quot;-enable-debug&quot;. 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;SYSTEM_ENV&quot; is
</span><br>
<span class="quotelev2">&gt;&gt;                     &quot;SunOS&quot; or
</span><br>
<span class="quotelev2">&gt;&gt;                         &quot;Linux&quot; and &quot;MACHINE_ENV&quot; is &quot;sparc&quot; or 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;x86_84&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         mkdir
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-v2.x-dev-1280-gc110ae8-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev2">&gt;&gt;                         cd
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-v2.x-dev-1280-gc110ae8-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../openmpi-v2.x-dev-1280-gc110ae8/configure \
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/usr/local/openmpi-2.0.0_64_gcc \
</span><br>
<span class="quotelev2">&gt;&gt; --libdir=/usr/local/openmpi-2.0.0_64_gcc/lib64 \
</span><br>
<span class="quotelev2">&gt;&gt; --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev2">&gt;&gt; --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev2">&gt;&gt;                           JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev2">&gt;&gt;                           LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;                           CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;                           CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;                           --enable-mpi-cxx \
</span><br>
<span class="quotelev2">&gt;&gt;                           --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt;&gt;                           --enable-mpi-java \
</span><br>
<span class="quotelev2">&gt;&gt;                           --enable-heterogeneous \
</span><br>
<span class="quotelev2">&gt;&gt;                           --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev2">&gt;&gt;                           --with-hwloc=internal \
</span><br>
<span class="quotelev2">&gt;&gt;                           --without-verbs \
</span><br>
<span class="quotelev2">&gt;&gt;                           --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;                           --with-wrapper-cxxflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;                           --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;                           --enable-debug \
</span><br>
<span class="quotelev2">&gt;&gt;                           |&amp; tee 
</span><br>
<span class="quotelev2">&gt;&gt; log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         mkdir
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-v2.x-dev-1280-gc110ae8-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
</span><br>
<span class="quotelev2">&gt;&gt;                         cd
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-v2.x-dev-1280-gc110ae8-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../openmpi-v2.x-dev-1280-gc110ae8/configure \
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/usr/local/openmpi-2.0.0_64_cc \
</span><br>
<span class="quotelev2">&gt;&gt; --libdir=/usr/local/openmpi-2.0.0_64_cc/lib64 \
</span><br>
<span class="quotelev2">&gt;&gt; --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev2">&gt;&gt; --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev2">&gt;&gt;                           JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev2">&gt;&gt;                           LDFLAGS=&quot;-m64&quot; CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;                           CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 
</span><br>
<span class="quotelev2">&gt;&gt; -library=stlport4&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                     FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;                           CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;                           --enable-mpi-cxx \
</span><br>
<span class="quotelev2">&gt;&gt;                           --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt;&gt;                           --enable-mpi-java \
</span><br>
<span class="quotelev2">&gt;&gt;                           --enable-heterogeneous \
</span><br>
<span class="quotelev2">&gt;&gt;                           --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev2">&gt;&gt;                           --with-hwloc=internal \
</span><br>
<span class="quotelev2">&gt;&gt;                           --without-verbs \
</span><br>
<span class="quotelev2">&gt;&gt;                           --with-wrapper-cflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;                           --with-wrapper-cxxflags=&quot;-m64 
</span><br>
<span class="quotelev2">&gt;&gt; -library=stlport4&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;                           --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;                           --with-wrapper-ldflags=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;                           --enable-debug \
</span><br>
<span class="quotelev2">&gt;&gt;                           |&amp; tee 
</span><br>
<span class="quotelev2">&gt;&gt; log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Am 21.04.2016 um 18:18 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             Can you please rebuild OMPI with 
</span><br>
<span class="quotelev2">&gt;&gt; -enable-debug in
</span><br>
<span class="quotelev2">&gt;&gt;                     the configure
</span><br>
<span class="quotelev2">&gt;&gt;                             cmd? It will let us see more error output
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 On Apr 21, 2016, at 8:52 AM, Siegmar 
</span><br>
<span class="quotelev2">&gt;&gt; Gross
</span><br>
<span class="quotelev2">&gt;&gt; &lt;siegmar.gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 I don't see any additional information.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 tyr hello_1 108 mpiexec -np 4 --host
</span><br>
<span class="quotelev2">&gt;&gt;                                 tyr,sunpc1,linpc1,ruester -mca
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_component_show_load_errors 1 hello_1_mpi
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:06211
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de:06211">http://tyr.informatik.hs-fulda.de:06211</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de:06211">http://tyr.informatik.hs-fulda.de:06211</a>&gt;]
</span><br>
<span class="quotelev2">&gt;&gt;                     [[48741,0],0]
</span><br>
<span class="quotelev2">&gt;&gt;                                 ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 at line 638
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;                                 It looks like orte_init failed for some
</span><br>
<span class="quotelev2">&gt;&gt;                     reason; your
</span><br>
<span class="quotelev2">&gt;&gt;                                 parallel process is
</span><br>
<span class="quotelev2">&gt;&gt;                                 likely to abort.  There are many 
</span><br>
<span class="quotelev2">&gt;&gt; reasons that
</span><br>
<span class="quotelev2">&gt;&gt;                     a parallel
</span><br>
<span class="quotelev2">&gt;&gt;                                 process can
</span><br>
<span class="quotelev2">&gt;&gt;                                 fail during orte_init; some of which 
</span><br>
<span class="quotelev2">&gt;&gt; are due
</span><br>
<span class="quotelev2">&gt;&gt;                     to configuration or
</span><br>
<span class="quotelev2">&gt;&gt;                                 environment problems.  This failure 
</span><br>
<span class="quotelev2">&gt;&gt; appears to
</span><br>
<span class="quotelev2">&gt;&gt;                     be an
</span><br>
<span class="quotelev2">&gt;&gt;                                 internal failure;
</span><br>
<span class="quotelev2">&gt;&gt;                                 here's some additional information 
</span><br>
<span class="quotelev2">&gt;&gt; (which may
</span><br>
<span class="quotelev2">&gt;&gt;                     only be
</span><br>
<span class="quotelev2">&gt;&gt;                                 relevant to an
</span><br>
<span class="quotelev2">&gt;&gt;                                 Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                  opal_pmix_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;                                  --&gt; Returned value Not found (-13) 
</span><br>
<span class="quotelev2">&gt;&gt; instead of
</span><br>
<span class="quotelev2">&gt;&gt;                     ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 tyr hello_1 109 mpiexec -np 4 --host
</span><br>
<span class="quotelev2">&gt;&gt;                                 tyr,sunpc1,linpc1,ruester -mca
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_component_show_load_errors 1 -mca
</span><br>
<span class="quotelev2">&gt;&gt;                     pmix_base_verbose
</span><br>
<span class="quotelev2">&gt;&gt;                                 10 -mca pmix_server_verbose 5 
</span><br>
<span class="quotelev2">&gt;&gt; hello_1_mpi
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:06212
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;]
</span><br>
<span class="quotelev2">&gt;&gt;                     mca: base:
</span><br>
<span class="quotelev2">&gt;&gt;                                 components_register: registering 
</span><br>
<span class="quotelev2">&gt;&gt; framework
</span><br>
<span class="quotelev2">&gt;&gt;                     pmix components
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:06212
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;]
</span><br>
<span class="quotelev2">&gt;&gt;                     mca: base:
</span><br>
<span class="quotelev2">&gt;&gt;                                 components_open: opening pmix components
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:06212
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;]
</span><br>
<span class="quotelev2">&gt;&gt;                     mca:base:select:
</span><br>
<span class="quotelev2">&gt;&gt;                                 Auto-selecting pmix components
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:06212
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;]
</span><br>
<span class="quotelev2">&gt;&gt;                     mca:base:select:(
</span><br>
<span class="quotelev2">&gt;&gt;                                 pmix) No component selected!
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:06212
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;]
</span><br>
<span class="quotelev2">&gt;&gt;                     [[48738,0],0]
</span><br>
<span class="quotelev2">&gt;&gt;                                 ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 at line 638
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;                                 It looks like orte_init failed for some
</span><br>
<span class="quotelev2">&gt;&gt;                     reason; your
</span><br>
<span class="quotelev2">&gt;&gt;                                 parallel process is
</span><br>
<span class="quotelev2">&gt;&gt;                                 likely to abort.  There are many 
</span><br>
<span class="quotelev2">&gt;&gt; reasons that
</span><br>
<span class="quotelev2">&gt;&gt;                     a parallel
</span><br>
<span class="quotelev2">&gt;&gt;                                 process can
</span><br>
<span class="quotelev2">&gt;&gt;                                 fail during orte_init; some of which 
</span><br>
<span class="quotelev2">&gt;&gt; are due
</span><br>
<span class="quotelev2">&gt;&gt;                     to configuration or
</span><br>
<span class="quotelev2">&gt;&gt;                                 environment problems.  This failure 
</span><br>
<span class="quotelev2">&gt;&gt; appears to
</span><br>
<span class="quotelev2">&gt;&gt;                     be an
</span><br>
<span class="quotelev2">&gt;&gt;                                 internal failure;
</span><br>
<span class="quotelev2">&gt;&gt;                                 here's some additional information 
</span><br>
<span class="quotelev2">&gt;&gt; (which may
</span><br>
<span class="quotelev2">&gt;&gt;                     only be
</span><br>
<span class="quotelev2">&gt;&gt;                                 relevant to an
</span><br>
<span class="quotelev2">&gt;&gt;                                 Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                  opal_pmix_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;                                  --&gt; Returned value Not found (-13) 
</span><br>
<span class="quotelev2">&gt;&gt; instead of
</span><br>
<span class="quotelev2">&gt;&gt;                     ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;                                 tyr hello_1 110
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 Am 21.04.2016 um 17:24 schrieb Ralph 
</span><br>
<span class="quotelev2">&gt;&gt; Castain:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     Hmmm&#133;it looks like you built the 
</span><br>
<span class="quotelev2">&gt;&gt; right
</span><br>
<span class="quotelev2">&gt;&gt;                     components, but
</span><br>
<span class="quotelev2">&gt;&gt;                                     they are not being picked up. Can 
</span><br>
<span class="quotelev2">&gt;&gt; you run
</span><br>
<span class="quotelev2">&gt;&gt;                     your mpiexec
</span><br>
<span class="quotelev2">&gt;&gt;                                     command again, adding &#147;-mca
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_component_show_load_errors 1&#148; to
</span><br>
<span class="quotelev2">&gt;&gt;                     the cmd line?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                         On Apr 21, 2016, at 8:16 AM, 
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar Gross
</span><br>
<span class="quotelev2">&gt;&gt; &lt;siegmar.gross_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                         Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                         I have attached ompi_info 
</span><br>
<span class="quotelev2">&gt;&gt; output for
</span><br>
<span class="quotelev2">&gt;&gt;                     both compilers
</span><br>
<span class="quotelev2">&gt;&gt;                                         from my
</span><br>
<span class="quotelev2">&gt;&gt;                                         sparc machine and the 
</span><br>
<span class="quotelev2">&gt;&gt; listings for
</span><br>
<span class="quotelev2">&gt;&gt;                     both compilers
</span><br>
<span class="quotelev2">&gt;&gt;                                         from the
</span><br>
<span class="quotelev2">&gt;&gt; &lt;prefix&gt;/lib/openmpi directories.
</span><br>
<span class="quotelev2">&gt;&gt;                     Hopefully that
</span><br>
<span class="quotelev2">&gt;&gt;                                         helps to
</span><br>
<span class="quotelev2">&gt;&gt;                                         find the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                         hermes tmp 3 tar zvft
</span><br>
<span class="quotelev2">&gt;&gt;                     openmpi-2.x_info.tar.gz
</span><br>
<span class="quotelev2">&gt;&gt;                                         -rw-r--r-- root/root 10969
</span><br>
<span class="quotelev2">&gt;&gt;                     2016-04-21 17:06
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info_SunOS_sparc_cc.txt
</span><br>
<span class="quotelev2">&gt;&gt;                                         -rw-r--r-- root/root 11044
</span><br>
<span class="quotelev2">&gt;&gt;                     2016-04-21 17:06
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info_SunOS_sparc_gcc.txt
</span><br>
<span class="quotelev2">&gt;&gt;                                         -rw-r--r-- root/root 71252
</span><br>
<span class="quotelev2">&gt;&gt;                     2016-04-21 17:02
</span><br>
<span class="quotelev2">&gt;&gt;                                         lib64_openmpi.txt
</span><br>
<span class="quotelev2">&gt;&gt;                                         hermes tmp 4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                         Kind regards and thank you 
</span><br>
<span class="quotelev2">&gt;&gt; very much
</span><br>
<span class="quotelev2">&gt;&gt;                     once more for
</span><br>
<span class="quotelev2">&gt;&gt;                                         your help
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                         Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                         Am 21.04.2016 um 15:54 
</span><br>
<span class="quotelev2">&gt;&gt; schrieb Ralph
</span><br>
<span class="quotelev2">&gt;&gt;                     Castain:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                             Odd - it would appear 
</span><br>
<span class="quotelev2">&gt;&gt; that none of
</span><br>
<span class="quotelev2">&gt;&gt;                     the pmix
</span><br>
<span class="quotelev2">&gt;&gt;                                             components built? Can you 
</span><br>
<span class="quotelev2">&gt;&gt; send
</span><br>
<span class="quotelev2">&gt;&gt;                                             along the output from 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info?
</span><br>
<span class="quotelev2">&gt;&gt;                     Or just send a
</span><br>
<span class="quotelev2">&gt;&gt;                                             listing of the files in the
</span><br>
<span class="quotelev2">&gt;&gt; &lt;prefix&gt;/lib/openmpi directory?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                 On Apr 21, 2016, at 
</span><br>
<span class="quotelev2">&gt;&gt; 1:27 AM,
</span><br>
<span class="quotelev2">&gt;&gt;                     Siegmar Gross
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;Siegmar.Gross_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:Siegmar.Gross_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                 wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                 Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                 Am 21.04.2016 um 
</span><br>
<span class="quotelev2">&gt;&gt; 00:18 schrieb
</span><br>
<span class="quotelev2">&gt;&gt;                     Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                     Could you please 
</span><br>
<span class="quotelev2">&gt;&gt; rerun
</span><br>
<span class="quotelev2">&gt;&gt;                     these test and
</span><br>
<span class="quotelev2">&gt;&gt;                                                     add &#147;-mca 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_base_verbose 10
</span><br>
<span class="quotelev2">&gt;&gt;                                                     -mca 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_server_verbose
</span><br>
<span class="quotelev2">&gt;&gt;                     5&#148; to your cmd
</span><br>
<span class="quotelev2">&gt;&gt;                                                     line? I need to 
</span><br>
<span class="quotelev2">&gt;&gt; see why the
</span><br>
<span class="quotelev2">&gt;&gt;                                                     pmix components 
</span><br>
<span class="quotelev2">&gt;&gt; failed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                 tyr spawn 111 mpiexec 
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 --host
</span><br>
<span class="quotelev2">&gt;&gt; tyr,sunpc1,linpc1,ruester -mca
</span><br>
<span class="quotelev2">&gt;&gt; pmix_base_verbose 10 -mca
</span><br>
<span class="quotelev2">&gt;&gt; pmix_server_verbose 5
</span><br>
<span class="quotelev2">&gt;&gt;                     spawn_multiple_master
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652] mca:
</span><br>
<span class="quotelev2">&gt;&gt;                                                 base: 
</span><br>
<span class="quotelev2">&gt;&gt; components_register:
</span><br>
<span class="quotelev2">&gt;&gt;                     registering
</span><br>
<span class="quotelev2">&gt;&gt;                                                 framework pmix 
</span><br>
<span class="quotelev2">&gt;&gt; components
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652] mca:
</span><br>
<span class="quotelev2">&gt;&gt;                                                 base: 
</span><br>
<span class="quotelev2">&gt;&gt; components_open: opening
</span><br>
<span class="quotelev2">&gt;&gt;                     pmix components
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652]
</span><br>
<span class="quotelev2">&gt;&gt;                                                 mca:base:select:
</span><br>
<span class="quotelev2">&gt;&gt;                     Auto-selecting pmix components
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652]
</span><br>
<span class="quotelev2">&gt;&gt; mca:base:select:( pmix) No
</span><br>
<span class="quotelev2">&gt;&gt;                     component selected!
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652]
</span><br>
<span class="quotelev2">&gt;&gt;                                                 [[52794,0],0] 
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_ERROR_LOG:
</span><br>
<span class="quotelev2">&gt;&gt;                     Not found in file
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                 at line 638
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;                                                 It looks like 
</span><br>
<span class="quotelev2">&gt;&gt; orte_init failed
</span><br>
<span class="quotelev2">&gt;&gt;                     for some
</span><br>
<span class="quotelev2">&gt;&gt;                                                 reason; your parallel 
</span><br>
<span class="quotelev2">&gt;&gt; process is
</span><br>
<span class="quotelev2">&gt;&gt;                                                 likely to abort.  
</span><br>
<span class="quotelev2">&gt;&gt; There are
</span><br>
<span class="quotelev2">&gt;&gt;                     many reasons
</span><br>
<span class="quotelev2">&gt;&gt;                                                 that a parallel 
</span><br>
<span class="quotelev2">&gt;&gt; process can
</span><br>
<span class="quotelev2">&gt;&gt;                                                 fail during 
</span><br>
<span class="quotelev2">&gt;&gt; orte_init; some of
</span><br>
<span class="quotelev2">&gt;&gt;                     which are due
</span><br>
<span class="quotelev2">&gt;&gt;                                                 to configuration or
</span><br>
<span class="quotelev2">&gt;&gt;                                                 environment 
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This
</span><br>
<span class="quotelev2">&gt;&gt;                     failure appears
</span><br>
<span class="quotelev2">&gt;&gt;                                                 to be an internal 
</span><br>
<span class="quotelev2">&gt;&gt; failure;
</span><br>
<span class="quotelev2">&gt;&gt;                                                 here's some additional
</span><br>
<span class="quotelev2">&gt;&gt;                     information (which
</span><br>
<span class="quotelev2">&gt;&gt;                                                 may only be relevant 
</span><br>
<span class="quotelev2">&gt;&gt; to an
</span><br>
<span class="quotelev2">&gt;&gt;                                                 Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; opal_pmix_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;                                                 --&gt; Returned value 
</span><br>
<span class="quotelev2">&gt;&gt; Not found
</span><br>
<span class="quotelev2">&gt;&gt;                     (-13) instead
</span><br>
<span class="quotelev2">&gt;&gt;                                                 of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;                                                 tyr spawn 112
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                 tyr hello_1 116 
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -np 1
</span><br>
<span class="quotelev2">&gt;&gt;                     --host
</span><br>
<span class="quotelev2">&gt;&gt; tyr,sunpc1,linpc1,ruester -mca
</span><br>
<span class="quotelev2">&gt;&gt; pmix_base_verbose 10 -mca
</span><br>
<span class="quotelev2">&gt;&gt; pmix_server_verbose 5 hello_1_mpi
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261] mca:
</span><br>
<span class="quotelev2">&gt;&gt;                                                 base: 
</span><br>
<span class="quotelev2">&gt;&gt; components_register:
</span><br>
<span class="quotelev2">&gt;&gt;                     registering
</span><br>
<span class="quotelev2">&gt;&gt;                                                 framework pmix 
</span><br>
<span class="quotelev2">&gt;&gt; components
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261] mca:
</span><br>
<span class="quotelev2">&gt;&gt;                                                 base: 
</span><br>
<span class="quotelev2">&gt;&gt; components_open: opening
</span><br>
<span class="quotelev2">&gt;&gt;                     pmix components
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261]
</span><br>
<span class="quotelev2">&gt;&gt;                                                 mca:base:select:
</span><br>
<span class="quotelev2">&gt;&gt;                     Auto-selecting pmix components
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261]
</span><br>
<span class="quotelev2">&gt;&gt; mca:base:select:( pmix) No
</span><br>
<span class="quotelev2">&gt;&gt;                     component selected!
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261]
</span><br>
<span class="quotelev2">&gt;&gt;                                                 [[52315,0],0] 
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_ERROR_LOG:
</span><br>
<span class="quotelev2">&gt;&gt;                     Not found in file
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                 at line 638
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;                                                 It looks like 
</span><br>
<span class="quotelev2">&gt;&gt; orte_init failed
</span><br>
<span class="quotelev2">&gt;&gt;                     for some
</span><br>
<span class="quotelev2">&gt;&gt;                                                 reason; your parallel 
</span><br>
<span class="quotelev2">&gt;&gt; process is
</span><br>
<span class="quotelev2">&gt;&gt;                                                 likely to abort.  
</span><br>
<span class="quotelev2">&gt;&gt; There are
</span><br>
<span class="quotelev2">&gt;&gt;                     many reasons
</span><br>
<span class="quotelev2">&gt;&gt;                                                 that a parallel 
</span><br>
<span class="quotelev2">&gt;&gt; process can
</span><br>
<span class="quotelev2">&gt;&gt;                                                 fail during 
</span><br>
<span class="quotelev2">&gt;&gt; orte_init; some of
</span><br>
<span class="quotelev2">&gt;&gt;                     which are due
</span><br>
<span class="quotelev2">&gt;&gt;                                                 to configuration or
</span><br>
<span class="quotelev2">&gt;&gt;                                                 environment 
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This
</span><br>
<span class="quotelev2">&gt;&gt;                     failure appears
</span><br>
<span class="quotelev2">&gt;&gt;                                                 to be an internal 
</span><br>
<span class="quotelev2">&gt;&gt; failure;
</span><br>
<span class="quotelev2">&gt;&gt;                                                 here's some additional
</span><br>
<span class="quotelev2">&gt;&gt;                     information (which
</span><br>
<span class="quotelev2">&gt;&gt;                                                 may only be relevant 
</span><br>
<span class="quotelev2">&gt;&gt; to an
</span><br>
<span class="quotelev2">&gt;&gt;                                                 Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; opal_pmix_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;                                                 --&gt; Returned value 
</span><br>
<span class="quotelev2">&gt;&gt; Not found
</span><br>
<span class="quotelev2">&gt;&gt;                     (-13) instead
</span><br>
<span class="quotelev2">&gt;&gt;                                                 of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;                                                 tyr hello_1 117
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                 Thank you very much 
</span><br>
<span class="quotelev2">&gt;&gt; for your help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                 Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                 Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                     Thanks
</span><br>
<span class="quotelev2">&gt;&gt;                                                     Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                         On Apr 20, 
</span><br>
<span class="quotelev2">&gt;&gt; 2016, at
</span><br>
<span class="quotelev2">&gt;&gt;                     10:12 AM,
</span><br>
<span class="quotelev2">&gt;&gt;                                                         Siegmar Gross
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;Siegmar.Gross_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:Siegmar.Gross_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                         wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                         Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                         I have built
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     openmpi-v2.x-dev-1280-gc110ae8 on my
</span><br>
<span class="quotelev2">&gt;&gt;                                                         machines
</span><br>
<span class="quotelev2">&gt;&gt;                                                         (Solaris 10 
</span><br>
<span class="quotelev2">&gt;&gt; Sparc,
</span><br>
<span class="quotelev2">&gt;&gt;                     Solaris 10
</span><br>
<span class="quotelev2">&gt;&gt;                                                         x86_64, and 
</span><br>
<span class="quotelev2">&gt;&gt; openSUSE Linux
</span><br>
<span class="quotelev2">&gt;&gt;                                                         12.1 x86_64) 
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt;                     gcc-5.1.0 and Sun
</span><br>
<span class="quotelev2">&gt;&gt;                                                         C 5.13. 
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately
</span><br>
<span class="quotelev2">&gt;&gt;                     I get
</span><br>
<span class="quotelev2">&gt;&gt;                                                         runtime 
</span><br>
<span class="quotelev2">&gt;&gt; errors for
</span><br>
<span class="quotelev2">&gt;&gt;                     some programs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                         Sun C 5.13:
</span><br>
<span class="quotelev2">&gt;&gt; ===========
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                         For all my test
</span><br>
<span class="quotelev2">&gt;&gt;                     programs I get the
</span><br>
<span class="quotelev2">&gt;&gt;                                                         same error on 
</span><br>
<span class="quotelev2">&gt;&gt; Solaris
</span><br>
<span class="quotelev2">&gt;&gt;                     Sparc and
</span><br>
<span class="quotelev2">&gt;&gt;                                                         Solaris 
</span><br>
<span class="quotelev2">&gt;&gt; x86_64, while
</span><br>
<span class="quotelev2">&gt;&gt;                     the programs
</span><br>
<span class="quotelev2">&gt;&gt;                                                         work fine on 
</span><br>
<span class="quotelev2">&gt;&gt; Linux.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                         tyr hello_1 115
</span><br>
<span class="quotelev2">&gt;&gt;                     mpiexec -np 2
</span><br>
<span class="quotelev2">&gt;&gt; hello_1_mpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;:22373]
</span><br>
<span class="quotelev2">&gt;&gt; [[61763,0],0]
</span><br>
<span class="quotelev2">&gt;&gt;                     ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev2">&gt;&gt;                                                         found in file
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                         at line 638
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;                                                         It looks like
</span><br>
<span class="quotelev2">&gt;&gt;                     orte_init failed for
</span><br>
<span class="quotelev2">&gt;&gt;                                                         some reason; 
</span><br>
<span class="quotelev2">&gt;&gt; your
</span><br>
<span class="quotelev2">&gt;&gt;                     parallel process is
</span><br>
<span class="quotelev2">&gt;&gt;                                                         likely to abort.
</span><br>
<span class="quotelev2">&gt;&gt;                     There are many
</span><br>
<span class="quotelev2">&gt;&gt;                                                         reasons that a
</span><br>
<span class="quotelev2">&gt;&gt;                     parallel process can
</span><br>
<span class="quotelev2">&gt;&gt;                                                         fail during 
</span><br>
<span class="quotelev2">&gt;&gt; orte_init;
</span><br>
<span class="quotelev2">&gt;&gt;                     some of which
</span><br>
<span class="quotelev2">&gt;&gt;                                                         are due to
</span><br>
<span class="quotelev2">&gt;&gt;                     configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.
</span><br>
<span class="quotelev2">&gt;&gt;                     This failure
</span><br>
<span class="quotelev2">&gt;&gt;                                                         appears to be an
</span><br>
<span class="quotelev2">&gt;&gt;                     internal failure;
</span><br>
<span class="quotelev2">&gt;&gt;                                                         here's some 
</span><br>
<span class="quotelev2">&gt;&gt; additional
</span><br>
<span class="quotelev2">&gt;&gt;                     information
</span><br>
<span class="quotelev2">&gt;&gt;                                                         (which may 
</span><br>
<span class="quotelev2">&gt;&gt; only be
</span><br>
<span class="quotelev2">&gt;&gt;                     relevant to an
</span><br>
<span class="quotelev2">&gt;&gt;                                                         Open MPI 
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; opal_pmix_base_select
</span><br>
<span class="quotelev2">&gt;&gt;                     failed
</span><br>
<span class="quotelev2">&gt;&gt;                                                         --&gt; Returned 
</span><br>
<span class="quotelev2">&gt;&gt; value Not
</span><br>
<span class="quotelev2">&gt;&gt;                     found (-13)
</span><br>
<span class="quotelev2">&gt;&gt;                                                         instead of 
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;                                                         tyr hello_1 116
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; GCC-5.1.0:
</span><br>
<span class="quotelev2">&gt;&gt; ==========
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                         tyr spawn 121 
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec
</span><br>
<span class="quotelev2">&gt;&gt;                     -np 1 --host
</span><br>
<span class="quotelev2">&gt;&gt; tyr,sunpc1,linpc1,ruester
</span><br>
<span class="quotelev2">&gt;&gt; spawn_multiple_master
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                         Parent process 0
</span><br>
<span class="quotelev2">&gt;&gt;                     running on
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     tyr.informatik.hs-fulda.de 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                         I create 3 slave
</span><br>
<span class="quotelev2">&gt;&gt;                     processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;:25366]
</span><br>
<span class="quotelev2">&gt;&gt;                                                         PMIX ERROR:
</span><br>
<span class="quotelev2">&gt;&gt;                     UNPACK-PAST-END in file
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../openmpi-v2.x-dev-1280-gc110ae8/opal/mca/pmix/pmix112/pmix/src/server/pmix_server_ops.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                         at line 829
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;:25366]
</span><br>
<span class="quotelev2">&gt;&gt;                                                         PMIX ERROR:
</span><br>
<span class="quotelev2">&gt;&gt;                     UNPACK-PAST-END in file
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../openmpi-v2.x-dev-1280-gc110ae8/opal/mca/pmix/pmix112/pmix/src/server/pmix_server.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                         at line 2176
</span><br>
<span class="quotelev2">&gt;&gt; [tyr:25377] *** An
</span><br>
<span class="quotelev2">&gt;&gt;                     error occurred in
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev2">&gt;&gt; [tyr:25377] ***
</span><br>
<span class="quotelev2">&gt;&gt;                     reported by process
</span><br>
<span class="quotelev2">&gt;&gt; [3308257281,0]
</span><br>
<span class="quotelev2">&gt;&gt; [tyr:25377] *** on
</span><br>
<span class="quotelev2">&gt;&gt;                     communicator
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [tyr:25377] ***
</span><br>
<span class="quotelev2">&gt;&gt;                     MPI_ERR_SPAWN: could
</span><br>
<span class="quotelev2">&gt;&gt;                                                         not spawn 
</span><br>
<span class="quotelev2">&gt;&gt; processes
</span><br>
<span class="quotelev2">&gt;&gt; [tyr:25377] ***
</span><br>
<span class="quotelev2">&gt;&gt;                     MPI_ERRORS_ARE_FATAL
</span><br>
<span class="quotelev2">&gt;&gt; (processes in this
</span><br>
<span class="quotelev2">&gt;&gt;                     communicator will
</span><br>
<span class="quotelev2">&gt;&gt;                                                         now abort,
</span><br>
<span class="quotelev2">&gt;&gt; [tyr:25377] ***    and
</span><br>
<span class="quotelev2">&gt;&gt;                     potentially
</span><br>
<span class="quotelev2">&gt;&gt;                                                         your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt;                                                         tyr spawn 122
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                         I would be 
</span><br>
<span class="quotelev2">&gt;&gt; grateful if
</span><br>
<span class="quotelev2">&gt;&gt;                     somebody can
</span><br>
<span class="quotelev2">&gt;&gt;                                                         fix the 
</span><br>
<span class="quotelev2">&gt;&gt; problems.
</span><br>
<span class="quotelev2">&gt;&gt;                     Thank you very
</span><br>
<span class="quotelev2">&gt;&gt;                                                         much for any 
</span><br>
<span class="quotelev2">&gt;&gt; help in
</span><br>
<span class="quotelev2">&gt;&gt;                     advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                         Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                         Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;hello_1_mpi.c&gt;&lt;spawn_multiple_master.c&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                         users mailing 
</span><br>
<span class="quotelev2">&gt;&gt; list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;                                                         Link to this 
</span><br>
<span class="quotelev2">&gt;&gt; post:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28983.php">http://www.open-mpi.org/community/lists/users/2016/04/28983.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                                                     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;                                                     Link to this
</span><br>
<span class="quotelev2">&gt;&gt;                                                     post:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28986.php">http://www.open-mpi.org/community/lists/users/2016/04/28986.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                                                 users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                 Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;                                                 Link to this
</span><br>
<span class="quotelev2">&gt;&gt;                                                 post:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28987.php">http://www.open-mpi.org/community/lists/users/2016/04/28987.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                                             users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                                             users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                                             Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;                                             Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28988.php">http://www.open-mpi.org/community/lists/users/2016/04/28988.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;openmpi-2.x_info.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                                         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                                         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                                         Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;                                         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28989.php">http://www.open-mpi.org/community/lists/users/2016/04/28989.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                                     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                                     users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                                     Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;                                     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28990.php">http://www.open-mpi.org/community/lists/users/2016/04/28990.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                                 users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                                 users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                                 Subscription:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;                                 Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28991.php">http://www.open-mpi.org/community/lists/users/2016/04/28991.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                             users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                             users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                             Subscription:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;                             Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28992.php">http://www.open-mpi.org/community/lists/users/2016/04/28992.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                         Subscription:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;                         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28993.php">http://www.open-mpi.org/community/lists/users/2016/04/28993.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                     users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                     Subscription:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;                     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28999.php">http://www.open-mpi.org/community/lists/users/2016/04/28999.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                 users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                 users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                 Subscription: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;                 Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/29009.php">http://www.open-mpi.org/community/lists/users/2016/04/29009.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;             users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;             users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;             Subscription: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;             Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/29033.php">http://www.open-mpi.org/community/lists/users/2016/04/29033.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/29038.php">http://www.open-mpi.org/community/lists/users/2016/04/29038.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/29041.php">http://www.open-mpi.org/community/lists/users/2016/04/29041.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29042/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29043.php">dpchoudh .: "[OMPI users] Add release dates to release notes"</a>
<li><strong>Previous message:</strong> <a href="29041.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>In reply to:</strong> <a href="29041.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29044.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Reply:</strong> <a href="29044.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Reply:</strong> <a href="29047.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
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
