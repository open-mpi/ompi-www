<?
$subject_val = "[OMPI users] 64-bit mpiJava in a heterogeneous environment";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 24 06:11:13 2012" -->
<!-- isoreceived="20120924101113" -->
<!-- sent="Mon, 24 Sep 2012 12:03:53 +0200 (CEST)" -->
<!-- isosent="20120924100353" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] 64-bit mpiJava in a heterogeneous environment" -->
<!-- id="201209241004.q8OA3qru028813_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] 64-bit mpiJava in a heterogeneous environment<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-24 06:03:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20271.php">Tim Prince: "Re: [OMPI users] Compiling 1.6.1 with cygwin 1.7 and gcc"</a>
<li><strong>Previous message:</strong> <a href="20269.php">Matt Steele: "[OMPI users] AUTO: Matt Steele is out of the office (returning 10/01/2012)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20275.php">Ralph Castain: "Re: [OMPI users] 64-bit mpiJava in a heterogeneous environment"</a>
<li><strong>Reply:</strong> <a href="20275.php">Ralph Castain: "Re: [OMPI users] 64-bit mpiJava in a heterogeneous environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I want to use mpiJava in openmpi-1.9a1r27361 in 64-bit mode in a
<br>
heterogeneous Solaris and Linux world and have a problem with the
<br>
installation of Java 7 update 7. I know that it is not exactly a
<br>
question for this group, but perhaps somebody wants to use mpiJava
<br>
in the same way and knows a solution for my problem. I have
<br>
downloaded and installed the following packages from
<br>
<a href="http://www.oracle.com/technetwork/java">http://www.oracle.com/technetwork/java</a>
<br>
<p>jdk-7u7-solaris-sparc.tar.gz
<br>
jdk-7u7-solaris-sparcv9.tar.gz
<br>
jdk-7u7-solaris-i586.tar.gz
<br>
jdk-7u7-solaris-x64.tar.gz
<br>
jdk-7u7-linux-i586.tar.gz
<br>
jdk-7u7-linux-x64.tar.gz
<br>
<p>The 32-bit Solaris packages contain everyting and the 64-bit packages
<br>
contain the add-ons for 64-bit. Especially they create separate
<br>
directories for the 64-bit binary programs in &lt;path to Java&gt;/bin and
<br>
&lt;path to Java&gt;/jre/bin. It's different for Linux, because both packages
<br>
contain everything and 32- and 64-bit binary programs are installed in
<br>
the same directory so that they overwrite each other. Therefore I
<br>
created subdirectories &quot;amd64&quot; in both &quot;bin&quot; directories, installed
<br>
the 64-bit package first and moved the binary programs into the new
<br>
subdirectories before I installed the 32-bit version. Unfortunately
<br>
that doesn't solve the problem, because the 64-bit version of &quot;javac&quot;
<br>
cannot find necessary libraries (although the library directory is
<br>
part of LD_LIBRARY_PATH).
<br>
<p>/usr/local/jdk1.7.0_07/bin/amd64/javac: error while loading
<br>
&nbsp;&nbsp;shared libraries: libjli.so: cannot open shared object file:
<br>
&nbsp;&nbsp;No such file or directory
<br>
<p><p>linpc4 fd1026 97 cd /usr/local/jdk1.7.0_07/bin/
<br>
linpc4 bin 98 ldd javac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-gate.so.1 =&gt;  (0xffffe000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/libpthread.so.0 (0xf7750000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libjli.so =&gt; /usr/local/jdk1.7.0_07/bin/../jre/lib/i386/jli/libjli.so (0xf773b000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/libdl.so.2 (0xf7736000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/libc.so.6 (0xf75c9000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib/ld-linux.so.2 (0xf776c000)
<br>
<p>linpc4 bin 99 cd amd64/
<br>
linpc4 amd64 100 ldd javac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fffc11ff000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007f11d1083000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libjli.so =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007f11d0e7f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00007f11d0aef000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00007f11d12a0000)
<br>
<p><p>The problem is that the path to the library is hardcoded in the Linux
<br>
version of &quot;javac&quot; so that it looks in the wrong directory if you move
<br>
the program into a subdirectory.
<br>
<p>linpc4 amd64 101 strings javac
<br>
/lib64/ld-linux-x86-64.so.2
<br>
...
<br>
$ORIGIN/../lib/amd64/jli:$ORIGIN/../jre/lib/amd64/jli
<br>
...
<br>
<p><p>&quot;Solaris x86_64&quot; doesn't have this problem.
<br>
<p>sunpc4 bin 105 cd amd64/
<br>
sunpc4 amd64 106 ldd javac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libthread.so.1 =&gt;        /usr/lib/amd64/libthread.so.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libjli.so =&gt;     /usr/local/jdk1.7.0_07/bin/amd64/../../jre/lib/amd64/jli/libjli.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.1 =&gt;    /usr/lib/amd64/libdl.so.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.1 =&gt;     /usr/lib/amd64/libc.so.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.2 =&gt;     /usr/lib/amd64/libm.so.2
<br>
<p>sunpc4 amd64 107 strings javac
<br>
-J-ms8m
<br>
Unknown
<br>
1.7.0_07-b10
<br>
/classes
<br>
/lib/tools.jar
<br>
com.sun.tools.javac.Main
<br>
java
<br>
JAR file
<br>
Main class
<br>
/jdk
<br>
/usr/jdk
<br>
<p><p>Has anybody solved this problem without installing two complete
<br>
and separate versions of Java? Does anybody know about a Java
<br>
package for Linux which behaves in the same manner as the package
<br>
for &quot;Solaris x86_64&quot;? Is sombody from Oracle in this group who
<br>
can provide such a package on the Java web page? Thank you very
<br>
much for any suggestions in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20271.php">Tim Prince: "Re: [OMPI users] Compiling 1.6.1 with cygwin 1.7 and gcc"</a>
<li><strong>Previous message:</strong> <a href="20269.php">Matt Steele: "[OMPI users] AUTO: Matt Steele is out of the office (returning 10/01/2012)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20275.php">Ralph Castain: "Re: [OMPI users] 64-bit mpiJava in a heterogeneous environment"</a>
<li><strong>Reply:</strong> <a href="20275.php">Ralph Castain: "Re: [OMPI users] 64-bit mpiJava in a heterogeneous environment"</a>
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
