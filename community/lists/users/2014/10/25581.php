<?
$subject_val = "Re: [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 25 09:14:49 2014" -->
<!-- isoreceived="20141025131449" -->
<!-- sent="Sat, 25 Oct 2014 15:14:31 +0200 (CEST)" -->
<!-- isosent="20141025131431" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686on Solaris" -->
<!-- id="201410251314.s9PDEUMg003793_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686on Solaris" -->
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
<strong>Subject:</strong> Re: [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-25 09:14:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25582.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25580.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gilles and Oscar,
<br>
<p>unfortunately I didn't get anything useful. It's probably my fault,
<br>
because I'm still not very familiar with gdb or any other debugger.
<br>
I did the following things.
<br>
<p><p>1st window:
<br>
-----------
<br>
<p>tyr java 174 setenv OMPI_ATTACH 1
<br>
tyr java 175 mpijavac InitFinalizeMain.java 
<br>
warning: [path] bad path element
<br>
&nbsp;&nbsp;&quot;/usr/local/openmpi-1.9.0_64_gcc/lib64/shmem.jar&quot;:
<br>
&nbsp;&nbsp;no such file or directory
<br>
1 warning
<br>
tyr java 176 mpiexec -np 1 java InitFinalizeMain
<br>
<p><p><p>2nd window:
<br>
-----------
<br>
<p>tyr java 379 ps -aef | grep java
<br>
noaccess  1345     1   0   May 22 ?         113:23 /usr/java/bin/java -server -Xmx128m -XX:+UseParallelGC -XX:ParallelGCThreads=4 
<br>
&nbsp;&nbsp;fd1026  3661 10753   0 14:09:12 pts/14      0:00 mpiexec -np 1 java InitFinalizeMain
<br>
&nbsp;&nbsp;fd1026  3677 13371   0 14:16:55 pts/2       0:00 grep java
<br>
&nbsp;&nbsp;fd1026  3663  3661   0 14:09:12 pts/14      0:01 java -cp /home/fd1026/work/skripte/master/parallel/prog/mpi/java:/usr/local/jun
<br>
tyr java 380 /usr/local/gdb-7.6.1_64_gcc/bin/gdb
<br>
GNU gdb (GDB) 7.6.1
<br>
...
<br>
(gdb) attach 3663
<br>
Attaching to process 3663
<br>
[New process 3663]
<br>
Retry #1:
<br>
Retry #2:
<br>
Retry #3:
<br>
Retry #4:
<br>
0x7eadcb04 in ?? ()
<br>
(gdb) symbol-file /usr/local/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so
<br>
Reading symbols from /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so.0.0.0...done.
<br>
(gdb) set var _dbg=0
<br>
No symbol &quot;_dbg&quot; in current context.
<br>
(gdb) set var JNI_OnLoad::_dbg=0
<br>
No symbol &quot;_dbg&quot; in specified context.
<br>
(gdb) set JNI_OnLoad::_dbg=0
<br>
No symbol &quot;_dbg&quot; in specified context.
<br>
(gdb) info threads
<br>
[New LWP 12]
<br>
[New LWP 11]
<br>
[New LWP 10]
<br>
[New LWP 9]
<br>
[New LWP 8]
<br>
[New LWP 7]
<br>
[New LWP 6]
<br>
[New LWP 5]
<br>
[New LWP 4]
<br>
[New LWP 3]
<br>
[New LWP 2]
<br>
&nbsp;&nbsp;Id   Target Id         Frame 
<br>
&nbsp;&nbsp;12   LWP 2             0x7eadc6b0 in ?? ()
<br>
&nbsp;&nbsp;11   LWP 3             0x7eadcbb8 in ?? ()
<br>
&nbsp;&nbsp;10   LWP 4             0x7eadcbb8 in ?? ()
<br>
&nbsp;&nbsp;9    LWP 5             0x7eadcbb8 in ?? ()
<br>
&nbsp;&nbsp;8    LWP 6             0x7eadcbb8 in ?? ()
<br>
&nbsp;&nbsp;7    LWP 7             0x7eadcbb8 in ?? ()
<br>
&nbsp;&nbsp;6    LWP 8             0x7ead8b0c in ?? ()
<br>
&nbsp;&nbsp;5    LWP 9             0x7eadcbb8 in ?? ()
<br>
&nbsp;&nbsp;4    LWP 10            0x7eadcbb8 in ?? ()
<br>
&nbsp;&nbsp;3    LWP 11            0x7eadcbb8 in ?? ()
<br>
&nbsp;&nbsp;2    LWP 12            0x7eadcbb8 in ?? ()
<br>
* 1    LWP 1             0x7eadcb04 in ?? ()
<br>
(gdb) 
<br>
<p><p><p>It seems that &quot;_dbg&quot; is unknown and unavailable.
<br>
<p>tyr java 399 grep _dbg /export2/src/openmpi-1.9/openmpi-dev-124-g91e9686/ompi/mpi/java/c/*
<br>
/export2/src/openmpi-1.9/openmpi-dev-124-g91e9686/ompi/mpi/java/c/mpi_MPI.c:        volatile int _dbg = 1;
<br>
/export2/src/openmpi-1.9/openmpi-dev-124-g91e9686/ompi/mpi/java/c/mpi_MPI.c:        while (_dbg) poll(NULL, 0, 1);
<br>
tyr java 400 nm /usr/local/openmpi-1.9.0_64_gcc/lib64/*.so | grep -i _dbg
<br>
tyr java 401 nm /usr/local/openmpi-1.9.0_64_gcc/lib64/*.so | grep -i JNI_OnLoad
<br>
[1057]  |              139688|                 444|FUNC |GLOB |0    |11     |JNI_OnLoad
<br>
tyr java 402 
<br>
<p><p><p>How can I set _dbg to zero to continue mpiexec? I also tried to
<br>
set a breakpoint for function JNI_OnLoad, but it seems, that the
<br>
function isn't called before SIGSEGV.
<br>
<p><p>tyr java 177 unsetenv OMPI_ATTACH 
<br>
tyr java 178 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
<br>
GNU gdb (GDB) 7.6.1
<br>
...
<br>
(gdb) b mpi_MPI.c:JNI_OnLoad
<br>
No source file named mpi_MPI.c.
<br>
Make breakpoint pending on future shared library load? (y or [n]) y
<br>
<p>Breakpoint 1 (mpi_MPI.c:JNI_OnLoad) pending.
<br>
(gdb) run -np 1 java InitFinalizeMain 
<br>
Starting program: /usr/local/openmpi-1.9.0_64_gcc/bin/mpiexec -np 1 java InitFinalizeMain
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=3518, tid=2
<br>
...
<br>
<p><p><p>tyr java 381 cat InitFinalizeMain.java 
<br>
import mpi.*;
<br>
<p>public class InitFinalizeMain
<br>
{
<br>
&nbsp;&nbsp;public static void main (String args[]) throws MPIException
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI.Init (args);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;System.out.print (&quot;Hello!\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI.Finalize ();
<br>
&nbsp;&nbsp;}
<br>
}
<br>
<p><p>SIGSEGV happens in MPI.Init(args), because I can print a message
<br>
before I call the method.
<br>
<p>tyr java 192 unsetenv OMPI_ATTACH
<br>
tyr java 193 mpijavac InitFinalizeMain.java
<br>
tyr java 194 mpiexec -np 1 java InitFinalizeMain
<br>
Before MPI.Init()
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=3697, tid=2
<br>
...
<br>
<p><p><p>Any ideas, how I can continue? I couldn't find a C function for
<br>
MPI.Init() in a C file. Do you know, which function is called first,
<br>
so that I can set a breakpoint? By the way, I get the same error
<br>
for Solaris 10 x86_64.
<br>
<p>tyr java 388 ssh sunpc1
<br>
...
<br>
sunpc1 java 106 mpijavac InitFinalizeMain.java
<br>
sunpc1 java 107 uname -a
<br>
SunOS sunpc1 5.10 Generic_147441-21 i86pc i386 i86pc Solaris
<br>
sunpc1 java 108 isainfo -k
<br>
amd64
<br>
sunpc1 java 109 mpiexec -np 1 java InitFinalizeMain
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0xfffffd7fff1d77f0, pid=20256, tid=2
<br>
<p><p>Thank you very much for any help in advance.
<br>
<p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; thank you very much for your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; how did you configure openmpi ? which java version did you use ?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; i just found a regression and you currently have to explicitly add
</span><br>
<span class="quotelev2">&gt; &gt; CFLAGS=-D_REENTRANT CPPFLAGS=-D_REENTRANT
</span><br>
<span class="quotelev2">&gt; &gt; to your configure command line
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I added &quot;-D_REENTRANT&quot; to my command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-dev-124-g91e9686/configure --prefix=/usr/local/openmpi-1.9.0_64_gcc \
</span><br>
<span class="quotelev1">&gt;   --libdir=/usr/local/openmpi-1.9.0_64_gcc/lib64 \
</span><br>
<span class="quotelev1">&gt;   --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev1">&gt;   --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev1">&gt;   JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev1">&gt;   LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev1">&gt;   CFLAGS=&quot;-m64 -D_REENTRANT&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;   CPPFLAGS=&quot;-D_REENTRANT&quot; CXXCPPFLAGS=&quot;&quot; \
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
<span class="quotelev1">&gt;   --with-threads=posix \
</span><br>
<span class="quotelev1">&gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;   --without-verbs \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev1">&gt;   --enable-debug \
</span><br>
<span class="quotelev1">&gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use Java 8.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9 112 java -version
</span><br>
<span class="quotelev1">&gt; java version &quot;1.8.0&quot;
</span><br>
<span class="quotelev1">&gt; Java(TM) SE Runtime Environment (build 1.8.0-b132)
</span><br>
<span class="quotelev1">&gt; Java HotSpot(TM) 64-Bit Server VM (build 25.0-b70, mixed mode)
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9 113 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately I still get a SIGSEGV with openmpi-dev-124-g91e9686.
</span><br>
<span class="quotelev1">&gt; I have applied your patch and will try to debug my small Java
</span><br>
<span class="quotelev1">&gt; program tomorrow or next week and then let you know the result.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25582.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25580.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
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
