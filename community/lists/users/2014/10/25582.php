<?
$subject_val = "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 25 09:44:41 2014" -->
<!-- isoreceived="20141025134441" -->
<!-- sent="Sat, 25 Oct 2014 15:44:15 +0200 (CEST)" -->
<!-- isosent="20141025134415" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris" -->
<!-- id="201410251344.s9PDiFUL013041_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris" -->
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
<strong>Subject:</strong> Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-25 09:44:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25583.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25581.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Maybe in reply to:</strong> <a href="25575.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>I changed _dbg to a static variable, so that it is visible in the
<br>
library, but unfortunately still not in the symbol table.
<br>
<p><p>tyr java 419 nm /usr/local/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so | grep -i _dbg
<br>
[271]   |  1249644|     4|OBJT |LOCL |0    |18     |_dbg.14258
<br>
tyr java 420 /usr/local/gdb-7.6.1_64_gcc/bin/gdb
<br>
GNU gdb (GDB) 7.6.1
<br>
...
<br>
(gdb) attach 13019
<br>
Attaching to process 13019
<br>
[New process 13019]
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
(gdb) set var _dbg.14258=0
<br>
No symbol &quot;_dbg&quot; in current context.
<br>
(gdb) 
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><p><span class="quotelev1">&gt; unfortunately I didn't get anything useful. It's probably my fault,
</span><br>
<span class="quotelev1">&gt; because I'm still not very familiar with gdb or any other debugger.
</span><br>
<span class="quotelev1">&gt; I did the following things.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1st window:
</span><br>
<span class="quotelev1">&gt; -----------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 174 setenv OMPI_ATTACH 1
</span><br>
<span class="quotelev1">&gt; tyr java 175 mpijavac InitFinalizeMain.java 
</span><br>
<span class="quotelev1">&gt; warning: [path] bad path element
</span><br>
<span class="quotelev1">&gt;   &quot;/usr/local/openmpi-1.9.0_64_gcc/lib64/shmem.jar&quot;:
</span><br>
<span class="quotelev1">&gt;   no such file or directory
</span><br>
<span class="quotelev1">&gt; 1 warning
</span><br>
<span class="quotelev1">&gt; tyr java 176 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2nd window:
</span><br>
<span class="quotelev1">&gt; -----------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 379 ps -aef | grep java
</span><br>
<span class="quotelev1">&gt; noaccess  1345     1   0   May 22 ?         113:23 /usr/java/bin/java -server -Xmx128m -XX:+UseParallelGC 
</span><br>
-XX:ParallelGCThreads=4 
<br>
<span class="quotelev1">&gt;   fd1026  3661 10753   0 14:09:12 pts/14      0:00 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt;   fd1026  3677 13371   0 14:16:55 pts/2       0:00 grep java
</span><br>
<span class="quotelev1">&gt;   fd1026  3663  3661   0 14:09:12 pts/14      0:01 java -cp 
</span><br>
/home/fd1026/work/skripte/master/parallel/prog/mpi/java:/usr/local/jun
<br>
<span class="quotelev1">&gt; tyr java 380 /usr/local/gdb-7.6.1_64_gcc/bin/gdb
</span><br>
<span class="quotelev1">&gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; (gdb) attach 3663
</span><br>
<span class="quotelev1">&gt; Attaching to process 3663
</span><br>
<span class="quotelev1">&gt; [New process 3663]
</span><br>
<span class="quotelev1">&gt; Retry #1:
</span><br>
<span class="quotelev1">&gt; Retry #2:
</span><br>
<span class="quotelev1">&gt; Retry #3:
</span><br>
<span class="quotelev1">&gt; Retry #4:
</span><br>
<span class="quotelev1">&gt; 0x7eadcb04 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) symbol-file /usr/local/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so
</span><br>
<span class="quotelev1">&gt; Reading symbols from /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so.0.0.0...done.
</span><br>
<span class="quotelev1">&gt; (gdb) set var _dbg=0
</span><br>
<span class="quotelev1">&gt; No symbol &quot;_dbg&quot; in current context.
</span><br>
<span class="quotelev1">&gt; (gdb) set var JNI_OnLoad::_dbg=0
</span><br>
<span class="quotelev1">&gt; No symbol &quot;_dbg&quot; in specified context.
</span><br>
<span class="quotelev1">&gt; (gdb) set JNI_OnLoad::_dbg=0
</span><br>
<span class="quotelev1">&gt; No symbol &quot;_dbg&quot; in specified context.
</span><br>
<span class="quotelev1">&gt; (gdb) info threads
</span><br>
<span class="quotelev1">&gt; [New LWP 12]
</span><br>
<span class="quotelev1">&gt; [New LWP 11]
</span><br>
<span class="quotelev1">&gt; [New LWP 10]
</span><br>
<span class="quotelev1">&gt; [New LWP 9]
</span><br>
<span class="quotelev1">&gt; [New LWP 8]
</span><br>
<span class="quotelev1">&gt; [New LWP 7]
</span><br>
<span class="quotelev1">&gt; [New LWP 6]
</span><br>
<span class="quotelev1">&gt; [New LWP 5]
</span><br>
<span class="quotelev1">&gt; [New LWP 4]
</span><br>
<span class="quotelev1">&gt; [New LWP 3]
</span><br>
<span class="quotelev1">&gt; [New LWP 2]
</span><br>
<span class="quotelev1">&gt;   Id   Target Id         Frame 
</span><br>
<span class="quotelev1">&gt;   12   LWP 2             0x7eadc6b0 in ?? ()
</span><br>
<span class="quotelev1">&gt;   11   LWP 3             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt;   10   LWP 4             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt;   9    LWP 5             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt;   8    LWP 6             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt;   7    LWP 7             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt;   6    LWP 8             0x7ead8b0c in ?? ()
</span><br>
<span class="quotelev1">&gt;   5    LWP 9             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt;   4    LWP 10            0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt;   3    LWP 11            0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt;   2    LWP 12            0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt; * 1    LWP 1             0x7eadcb04 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that &quot;_dbg&quot; is unknown and unavailable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 399 grep _dbg /export2/src/openmpi-1.9/openmpi-dev-124-g91e9686/ompi/mpi/java/c/*
</span><br>
<span class="quotelev1">&gt; /export2/src/openmpi-1.9/openmpi-dev-124-g91e9686/ompi/mpi/java/c/mpi_MPI.c:        volatile int _dbg = 1;
</span><br>
<span class="quotelev1">&gt; /export2/src/openmpi-1.9/openmpi-dev-124-g91e9686/ompi/mpi/java/c/mpi_MPI.c:        while (_dbg) poll(NULL, 0, 1);
</span><br>
<span class="quotelev1">&gt; tyr java 400 nm /usr/local/openmpi-1.9.0_64_gcc/lib64/*.so | grep -i _dbg
</span><br>
<span class="quotelev1">&gt; tyr java 401 nm /usr/local/openmpi-1.9.0_64_gcc/lib64/*.so | grep -i JNI_OnLoad
</span><br>
<span class="quotelev1">&gt; [1057]  |              139688|                 444|FUNC |GLOB |0    |11     |JNI_OnLoad
</span><br>
<span class="quotelev1">&gt; tyr java 402 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can I set _dbg to zero to continue mpiexec? I also tried to
</span><br>
<span class="quotelev1">&gt; set a breakpoint for function JNI_OnLoad, but it seems, that the
</span><br>
<span class="quotelev1">&gt; function isn't called before SIGSEGV.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 177 unsetenv OMPI_ATTACH 
</span><br>
<span class="quotelev1">&gt; tyr java 178 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
</span><br>
<span class="quotelev1">&gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; (gdb) b mpi_MPI.c:JNI_OnLoad
</span><br>
<span class="quotelev1">&gt; No source file named mpi_MPI.c.
</span><br>
<span class="quotelev1">&gt; Make breakpoint pending on future shared library load? (y or [n]) y
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Breakpoint 1 (mpi_MPI.c:JNI_OnLoad) pending.
</span><br>
<span class="quotelev1">&gt; (gdb) run -np 1 java InitFinalizeMain 
</span><br>
<span class="quotelev1">&gt; Starting program: /usr/local/openmpi-1.9.0_64_gcc/bin/mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; [New LWP    2        ]
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=3518, tid=2
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 381 cat InitFinalizeMain.java 
</span><br>
<span class="quotelev1">&gt; import mpi.*;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; public class InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   public static void main (String args[]) throws MPIException
</span><br>
<span class="quotelev1">&gt;   {
</span><br>
<span class="quotelev1">&gt;     MPI.Init (args);
</span><br>
<span class="quotelev1">&gt;     System.out.print (&quot;Hello!\n&quot;);
</span><br>
<span class="quotelev1">&gt;     MPI.Finalize ();
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SIGSEGV happens in MPI.Init(args), because I can print a message
</span><br>
<span class="quotelev1">&gt; before I call the method.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 192 unsetenv OMPI_ATTACH
</span><br>
<span class="quotelev1">&gt; tyr java 193 mpijavac InitFinalizeMain.java
</span><br>
<span class="quotelev1">&gt; tyr java 194 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; Before MPI.Init()
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=3697, tid=2
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas, how I can continue? I couldn't find a C function for
</span><br>
<span class="quotelev1">&gt; MPI.Init() in a C file. Do you know, which function is called first,
</span><br>
<span class="quotelev1">&gt; so that I can set a breakpoint? By the way, I get the same error
</span><br>
<span class="quotelev1">&gt; for Solaris 10 x86_64.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 388 ssh sunpc1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; sunpc1 java 106 mpijavac InitFinalizeMain.java
</span><br>
<span class="quotelev1">&gt; sunpc1 java 107 uname -a
</span><br>
<span class="quotelev1">&gt; SunOS sunpc1 5.10 Generic_147441-21 i86pc i386 i86pc Solaris
</span><br>
<span class="quotelev1">&gt; sunpc1 java 108 isainfo -k
</span><br>
<span class="quotelev1">&gt; amd64
</span><br>
<span class="quotelev1">&gt; sunpc1 java 109 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  SIGSEGV (0xb) at pc=0xfffffd7fff1d77f0, pid=20256, tid=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for any help in advance.
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
<span class="quotelev2">&gt; &gt; thank you very much for your help.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; how did you configure openmpi ? which java version did you use ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; i just found a regression and you currently have to explicitly add
</span><br>
<span class="quotelev3">&gt; &gt; &gt; CFLAGS=-D_REENTRANT CPPFLAGS=-D_REENTRANT
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to your configure command line
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I added &quot;-D_REENTRANT&quot; to my command.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ../openmpi-dev-124-g91e9686/configure --prefix=/usr/local/openmpi-1.9.0_64_gcc \
</span><br>
<span class="quotelev2">&gt; &gt;   --libdir=/usr/local/openmpi-1.9.0_64_gcc/lib64 \
</span><br>
<span class="quotelev2">&gt; &gt;   --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev2">&gt; &gt;   --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev2">&gt; &gt;   JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev2">&gt; &gt;   LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;   CFLAGS=&quot;-m64 -D_REENTRANT&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;   CPPFLAGS=&quot;-D_REENTRANT&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;   --enable-mpi-cxx \
</span><br>
<span class="quotelev2">&gt; &gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt; &gt;   --enable-mpi-java \
</span><br>
<span class="quotelev2">&gt; &gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev2">&gt; &gt;   --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev2">&gt; &gt;   --with-threads=posix \
</span><br>
<span class="quotelev2">&gt; &gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev2">&gt; &gt;   --without-verbs \
</span><br>
<span class="quotelev2">&gt; &gt;   --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;   --enable-debug \
</span><br>
<span class="quotelev2">&gt; &gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I use Java 8.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr openmpi-1.9 112 java -version
</span><br>
<span class="quotelev2">&gt; &gt; java version &quot;1.8.0&quot;
</span><br>
<span class="quotelev2">&gt; &gt; Java(TM) SE Runtime Environment (build 1.8.0-b132)
</span><br>
<span class="quotelev2">&gt; &gt; Java HotSpot(TM) 64-Bit Server VM (build 25.0-b70, mixed mode)
</span><br>
<span class="quotelev2">&gt; &gt; tyr openmpi-1.9 113 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately I still get a SIGSEGV with openmpi-dev-124-g91e9686.
</span><br>
<span class="quotelev2">&gt; &gt; I have applied your patch and will try to debug my small Java
</span><br>
<span class="quotelev2">&gt; &gt; program tomorrow or next week and then let you know the result.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25581.php">http://www.open-mpi.org/community/lists/users/2014/10/25581.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25583.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25581.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Maybe in reply to:</strong> <a href="25575.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
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
