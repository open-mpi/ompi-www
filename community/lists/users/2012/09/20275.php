<?
$subject_val = "Re: [OMPI users] 64-bit mpiJava in a heterogeneous environment";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 24 10:47:41 2012" -->
<!-- isoreceived="20120924144741" -->
<!-- sent="Mon, 24 Sep 2012 07:47:33 -0700" -->
<!-- isosent="20120924144733" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 64-bit mpiJava in a heterogeneous environment" -->
<!-- id="DC110A80-5662-4F91-8A91-6608B873088E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201209241004.q8OA3qru028813_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] 64-bit mpiJava in a heterogeneous environment<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-24 10:47:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20276.php">Ralph Castain: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<li><strong>Previous message:</strong> <a href="20274.php">Pavel Mezentsev: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>In reply to:</strong> <a href="20270.php">Siegmar Gross: "[OMPI users] 64-bit mpiJava in a heterogeneous environment"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid that's one for the Oracle folks. Only suggestion I can make here is to utilize the JAVA_HOME environmental variable to point to the correct location on the different machines - that's what I do, rather than trying to force a common installation location.
<br>
<p><p>On Sep 24, 2012, at 3:03 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to use mpiJava in openmpi-1.9a1r27361 in 64-bit mode in a
</span><br>
<span class="quotelev1">&gt; heterogeneous Solaris and Linux world and have a problem with the
</span><br>
<span class="quotelev1">&gt; installation of Java 7 update 7. I know that it is not exactly a
</span><br>
<span class="quotelev1">&gt; question for this group, but perhaps somebody wants to use mpiJava
</span><br>
<span class="quotelev1">&gt; in the same way and knows a solution for my problem. I have
</span><br>
<span class="quotelev1">&gt; downloaded and installed the following packages from
</span><br>
<span class="quotelev1">&gt; <a href="http://www.oracle.com/technetwork/java">http://www.oracle.com/technetwork/java</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; jdk-7u7-solaris-sparc.tar.gz
</span><br>
<span class="quotelev1">&gt; jdk-7u7-solaris-sparcv9.tar.gz
</span><br>
<span class="quotelev1">&gt; jdk-7u7-solaris-i586.tar.gz
</span><br>
<span class="quotelev1">&gt; jdk-7u7-solaris-x64.tar.gz
</span><br>
<span class="quotelev1">&gt; jdk-7u7-linux-i586.tar.gz
</span><br>
<span class="quotelev1">&gt; jdk-7u7-linux-x64.tar.gz
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The 32-bit Solaris packages contain everyting and the 64-bit packages
</span><br>
<span class="quotelev1">&gt; contain the add-ons for 64-bit. Especially they create separate
</span><br>
<span class="quotelev1">&gt; directories for the 64-bit binary programs in &lt;path to Java&gt;/bin and
</span><br>
<span class="quotelev1">&gt; &lt;path to Java&gt;/jre/bin. It's different for Linux, because both packages
</span><br>
<span class="quotelev1">&gt; contain everything and 32- and 64-bit binary programs are installed in
</span><br>
<span class="quotelev1">&gt; the same directory so that they overwrite each other. Therefore I
</span><br>
<span class="quotelev1">&gt; created subdirectories &quot;amd64&quot; in both &quot;bin&quot; directories, installed
</span><br>
<span class="quotelev1">&gt; the 64-bit package first and moved the binary programs into the new
</span><br>
<span class="quotelev1">&gt; subdirectories before I installed the 32-bit version. Unfortunately
</span><br>
<span class="quotelev1">&gt; that doesn't solve the problem, because the 64-bit version of &quot;javac&quot;
</span><br>
<span class="quotelev1">&gt; cannot find necessary libraries (although the library directory is
</span><br>
<span class="quotelev1">&gt; part of LD_LIBRARY_PATH).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/jdk1.7.0_07/bin/amd64/javac: error while loading
</span><br>
<span class="quotelev1">&gt;  shared libraries: libjli.so: cannot open shared object file:
</span><br>
<span class="quotelev1">&gt;  No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc4 fd1026 97 cd /usr/local/jdk1.7.0_07/bin/
</span><br>
<span class="quotelev1">&gt; linpc4 bin 98 ldd javac
</span><br>
<span class="quotelev1">&gt;        linux-gate.so.1 =&gt;  (0xffffe000)
</span><br>
<span class="quotelev1">&gt;        libpthread.so.0 =&gt; /lib/libpthread.so.0 (0xf7750000)
</span><br>
<span class="quotelev1">&gt;        libjli.so =&gt; /usr/local/jdk1.7.0_07/bin/../jre/lib/i386/jli/libjli.so (0xf773b000)
</span><br>
<span class="quotelev1">&gt;        libdl.so.2 =&gt; /lib/libdl.so.2 (0xf7736000)
</span><br>
<span class="quotelev1">&gt;        libc.so.6 =&gt; /lib/libc.so.6 (0xf75c9000)
</span><br>
<span class="quotelev1">&gt;        /lib/ld-linux.so.2 (0xf776c000)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc4 bin 99 cd amd64/
</span><br>
<span class="quotelev1">&gt; linpc4 amd64 100 ldd javac
</span><br>
<span class="quotelev1">&gt;        linux-vdso.so.1 =&gt;  (0x00007fffc11ff000)
</span><br>
<span class="quotelev1">&gt;        libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007f11d1083000)
</span><br>
<span class="quotelev1">&gt;        libjli.so =&gt; not found
</span><br>
<span class="quotelev1">&gt;        libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007f11d0e7f000)
</span><br>
<span class="quotelev1">&gt;        libc.so.6 =&gt; /lib64/libc.so.6 (0x00007f11d0aef000)
</span><br>
<span class="quotelev1">&gt;        /lib64/ld-linux-x86-64.so.2 (0x00007f11d12a0000)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that the path to the library is hardcoded in the Linux
</span><br>
<span class="quotelev1">&gt; version of &quot;javac&quot; so that it looks in the wrong directory if you move
</span><br>
<span class="quotelev1">&gt; the program into a subdirectory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc4 amd64 101 strings javac
</span><br>
<span class="quotelev1">&gt; /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; $ORIGIN/../lib/amd64/jli:$ORIGIN/../jre/lib/amd64/jli
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Solaris x86_64&quot; doesn't have this problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc4 bin 105 cd amd64/
</span><br>
<span class="quotelev1">&gt; sunpc4 amd64 106 ldd javac
</span><br>
<span class="quotelev1">&gt;        libthread.so.1 =&gt;        /usr/lib/amd64/libthread.so.1
</span><br>
<span class="quotelev1">&gt;        libjli.so =&gt;     /usr/local/jdk1.7.0_07/bin/amd64/../../jre/lib/amd64/jli/libjli.so
</span><br>
<span class="quotelev1">&gt;        libdl.so.1 =&gt;    /usr/lib/amd64/libdl.so.1
</span><br>
<span class="quotelev1">&gt;        libc.so.1 =&gt;     /usr/lib/amd64/libc.so.1
</span><br>
<span class="quotelev1">&gt;        libm.so.2 =&gt;     /usr/lib/amd64/libm.so.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc4 amd64 107 strings javac
</span><br>
<span class="quotelev1">&gt; -J-ms8m
</span><br>
<span class="quotelev1">&gt; Unknown
</span><br>
<span class="quotelev1">&gt; 1.7.0_07-b10
</span><br>
<span class="quotelev1">&gt; /classes
</span><br>
<span class="quotelev1">&gt; /lib/tools.jar
</span><br>
<span class="quotelev1">&gt; com.sun.tools.javac.Main
</span><br>
<span class="quotelev1">&gt; java
</span><br>
<span class="quotelev1">&gt; JAR file
</span><br>
<span class="quotelev1">&gt; Main class
</span><br>
<span class="quotelev1">&gt; /jdk
</span><br>
<span class="quotelev1">&gt; /usr/jdk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anybody solved this problem without installing two complete
</span><br>
<span class="quotelev1">&gt; and separate versions of Java? Does anybody know about a Java
</span><br>
<span class="quotelev1">&gt; package for Linux which behaves in the same manner as the package
</span><br>
<span class="quotelev1">&gt; for &quot;Solaris x86_64&quot;? Is sombody from Oracle in this group who
</span><br>
<span class="quotelev1">&gt; can provide such a package on the Java web page? Thank you very
</span><br>
<span class="quotelev1">&gt; much for any suggestions in advance.
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20276.php">Ralph Castain: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<li><strong>Previous message:</strong> <a href="20274.php">Pavel Mezentsev: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>In reply to:</strong> <a href="20270.php">Siegmar Gross: "[OMPI users] 64-bit mpiJava in a heterogeneous environment"</a>
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
