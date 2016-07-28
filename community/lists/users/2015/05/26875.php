<?
$subject_val = "Re: [OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 15 10:18:40 2015" -->
<!-- isoreceived="20150515141840" -->
<!-- sent="Fri, 15 May 2015 16:18:18 +0200 (CEST)" -->
<!-- isosent="20150515141818" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris" -->
<!-- id="201505151418.t4FEIIM5000096_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-15 10:18:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26876.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<li><strong>Previous message:</strong> <a href="26874.php">Jeff Squyres (jsquyres): "Re: [OMPI users] About POSIX APIs used on openMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="26870.php">Siegmar Gross: "[OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p><span class="quotelev1">&gt; do sunpc0 and sunpc1 run the same java version ?
</span><br>
<p>Yes.
<br>
<p><p><p><span class="quotelev1">&gt; from sunpc1, can you run
</span><br>
<span class="quotelev1">&gt; mpiexec -np 1 java InitFinalizeMain ?
</span><br>
<p>Yes.
<br>
<p>sunpc1 java 114 mpiexec -np 1 java InitFinalizeMain
<br>
Hello!
<br>
sunpc1 java 115 ssh sunpc0
<br>
...
<br>
sunpc0 fd1026 107 mpiexec -np 1 java InitFinalizeMain
<br>
Hello!
<br>
sunpc0 fd1026 108 exit
<br>
logout
<br>
sunpc1 java 116 mpiexec -np 1 -host sunpc0 java InitFinalizeMain
<br>
Exception in thread &quot;main&quot; java.lang.UnsupportedClassVersionError: 
<br>
InitFinalizeMain : Unsupported major.minor version 52.0
<br>
...
<br>
<p><p>sunpc1 java 118 where mpijavac
<br>
mpijavac is aliased to \mpijavac -deprecation -Xlint:all
<br>
/usr/local/openmpi-1.8.5_64_cc/bin/mpijavac
<br>
sunpc1 java 119 
<br>
<p><p><p>Everything works fine with openmpi-1.9.
<br>
<p>sunpc1 java 110 where mpijavac
<br>
mpijavac is aliased to \mpijavac -deprecation -Xlint:all
<br>
/usr/local/openmpi-1.9.0_64_gcc/bin/mpijavac
<br>
sunpc1 java 111 mpiexec -np 1 -host sunpc0 java InitFinalizeMain
<br>
Hello!
<br>
sunpc1 java 112 
<br>
<p>I answer your other e-mail in a moment.
<br>
<p><p>Kind regards and thank you very much for your help
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; On Friday, May 15, 2015, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I successfully installed openmpi-1.8.5 on my machines (Solaris 10
</span><br>
<span class="quotelev2">&gt; &gt; Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1 x86_64) with
</span><br>
<span class="quotelev2">&gt; &gt; gcc-4.9.2 and Sun C 5.13. Unfortunately I get an error for my Java
</span><br>
<span class="quotelev2">&gt; &gt; programs for both versions if I use two Solaris machines. It works
</span><br>
<span class="quotelev2">&gt; &gt; fine for two Linux machines. &quot;mpijavac&quot; compiles the program without
</span><br>
<span class="quotelev2">&gt; &gt; warnings or errors.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I get the following error if I use two different Solaris 10 x86_64
</span><br>
<span class="quotelev2">&gt; &gt; machines.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; sunpc0 fd1026 104 mpiexec -np 1 -host sunpc0 java InitFinalizeMain
</span><br>
<span class="quotelev2">&gt; &gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt; sunpc0 fd1026 105 mpiexec -np 1 -host sunpc1 java InitFinalizeMain
</span><br>
<span class="quotelev2">&gt; &gt; Exception in thread &quot;main&quot; java.lang.UnsupportedClassVersionError:
</span><br>
<span class="quotelev2">&gt; &gt; InitFinalizeMain : Unsupported major.minor version 52.0
</span><br>
<span class="quotelev2">&gt; &gt;         at java.lang.ClassLoader.defineClass1(Native Method)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.lang.ClassLoader.defineClassCond(ClassLoader.java:631)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.lang.ClassLoader.defineClass(ClassLoader.java:615)
</span><br>
<span class="quotelev2">&gt; &gt;         at
</span><br>
<span class="quotelev2">&gt; &gt; java.security.SecureClassLoader.defineClass(SecureClassLoader.java:141)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.net.URLClassLoader.defineClass(URLClassLoader.java:283)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.net.URLClassLoader.access$000(URLClassLoader.java:58)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.net.URLClassLoader$1.run(URLClassLoader.java:197)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.security.AccessController.doPrivileged(Native Method)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.net.URLClassLoader.findClass(URLClassLoader.java:190)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.lang.ClassLoader.loadClass(ClassLoader.java:306)
</span><br>
<span class="quotelev2">&gt; &gt;         at sun.misc.Launcher$AppClassLoader.loadClass(Launcher.java:301)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.lang.ClassLoader.loadClass(ClassLoader.java:247)
</span><br>
<span class="quotelev2">&gt; &gt; Could not find the main class: InitFinalizeMain.  Program will exit.
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt; &gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev2">&gt; &gt; thus
</span><br>
<span class="quotelev2">&gt; &gt; causing
</span><br>
<span class="quotelev2">&gt; &gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Process name: [[47580,1],0]
</span><br>
<span class="quotelev2">&gt; &gt;   Exit code:    1
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; sunpc0 fd1026 106
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I get the following error if I use two different Solaris 10 Sparc
</span><br>
<span class="quotelev2">&gt; &gt; machines.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; rs0 fd1026 107 mpiexec -np 1 -host rs0 java InitFinalizeMain
</span><br>
<span class="quotelev2">&gt; &gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt; rs0 fd1026 108 mpiexec -np 1 -host rs1 java InitFinalizeMain
</span><br>
<span class="quotelev2">&gt; &gt; Exception in thread &quot;main&quot; java.lang.UnsupportedClassVersionError: Bad
</span><br>
<span class="quotelev2">&gt; &gt; version
</span><br>
<span class="quotelev2">&gt; &gt; number in .class file
</span><br>
<span class="quotelev2">&gt; &gt;         at java.lang.ClassLoader.defineClass1(Native Method)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.lang.ClassLoader.defineClass(ClassLoader.java:626)
</span><br>
<span class="quotelev2">&gt; &gt;         at
</span><br>
<span class="quotelev2">&gt; &gt; java.security.SecureClassLoader.defineClass(SecureClassLoader.java:124)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.net.URLClassLoader.defineClass(URLClassLoader.java:260)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.net.URLClassLoader.access$100(URLClassLoader.java:56)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.net.URLClassLoader$1.run(URLClassLoader.java:195)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.security.AccessController.doPrivileged(Native Method)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.net.URLClassLoader.findClass(URLClassLoader.java:188)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.lang.ClassLoader.loadClass(ClassLoader.java:306)
</span><br>
<span class="quotelev2">&gt; &gt;         at sun.misc.Launcher$AppClassLoader.loadClass(Launcher.java:268)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.lang.ClassLoader.loadClass(ClassLoader.java:251)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.lang.ClassLoader.loadClassInternal(ClassLoader.java:319)
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt; &gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev2">&gt; &gt; thus
</span><br>
<span class="quotelev2">&gt; &gt; causing
</span><br>
<span class="quotelev2">&gt; &gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Process name: [[28304,1],0]
</span><br>
<span class="quotelev2">&gt; &gt;   Exit code:    1
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; rs0 fd1026 109
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Contents of InitFinalizeMain.java:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; import mpi.*;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; public class InitFinalizeMain
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;   public static void main (String args[]) throws MPIException
</span><br>
<span class="quotelev2">&gt; &gt;   {
</span><br>
<span class="quotelev2">&gt; &gt;     MPI.Init (args);
</span><br>
<span class="quotelev2">&gt; &gt;     System.out.print (&quot;Hello!\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI.Finalize ();
</span><br>
<span class="quotelev2">&gt; &gt;   }
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would be grateful if somebody can fix the problem. Thank you very
</span><br>
<span class="quotelev2">&gt; &gt; much for any help in advance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26870.php">http://www.open-mpi.org/community/lists/users/2015/05/26870.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26876.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<li><strong>Previous message:</strong> <a href="26874.php">Jeff Squyres (jsquyres): "Re: [OMPI users] About POSIX APIs used on openMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="26870.php">Siegmar Gross: "[OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris"</a>
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
