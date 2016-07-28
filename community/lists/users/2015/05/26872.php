<?
$subject_val = "Re: [OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 15 08:21:20 2015" -->
<!-- isoreceived="20150515122120" -->
<!-- sent="Fri, 15 May 2015 21:21:17 +0900" -->
<!-- isosent="20150515122117" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris" -->
<!-- id="CAAkFZ5vTTEvVNG9TmKQ7vfZzRsb+PzyP55PZET9pXPZPLoV6QA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201505151132.t4FBWX3Z029061_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-15 08:21:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26873.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<li><strong>Previous message:</strong> <a href="26871.php">Siegmar Gross: "[OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<li><strong>In reply to:</strong> <a href="26870.php">Siegmar Gross: "[OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26875.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar,
<br>
<p>do sunpc0 and sunpc1 run the same java version ?
<br>
<p>from sunpc1, can you run
<br>
mpiexec -np 1 java InitFinalizeMain ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, May 15, 2015, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I successfully installed openmpi-1.8.5 on my machines (Solaris 10
</span><br>
<span class="quotelev1">&gt; Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1 x86_64) with
</span><br>
<span class="quotelev1">&gt; gcc-4.9.2 and Sun C 5.13. Unfortunately I get an error for my Java
</span><br>
<span class="quotelev1">&gt; programs for both versions if I use two Solaris machines. It works
</span><br>
<span class="quotelev1">&gt; fine for two Linux machines. &quot;mpijavac&quot; compiles the program without
</span><br>
<span class="quotelev1">&gt; warnings or errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the following error if I use two different Solaris 10 x86_64
</span><br>
<span class="quotelev1">&gt; machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sunpc0 fd1026 104 mpiexec -np 1 -host sunpc0 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; sunpc0 fd1026 105 mpiexec -np 1 -host sunpc1 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; Exception in thread &quot;main&quot; java.lang.UnsupportedClassVersionError:
</span><br>
<span class="quotelev1">&gt; InitFinalizeMain : Unsupported major.minor version 52.0
</span><br>
<span class="quotelev1">&gt;         at java.lang.ClassLoader.defineClass1(Native Method)
</span><br>
<span class="quotelev1">&gt;         at java.lang.ClassLoader.defineClassCond(ClassLoader.java:631)
</span><br>
<span class="quotelev1">&gt;         at java.lang.ClassLoader.defineClass(ClassLoader.java:615)
</span><br>
<span class="quotelev1">&gt;         at
</span><br>
<span class="quotelev1">&gt; java.security.SecureClassLoader.defineClass(SecureClassLoader.java:141)
</span><br>
<span class="quotelev1">&gt;         at java.net.URLClassLoader.defineClass(URLClassLoader.java:283)
</span><br>
<span class="quotelev1">&gt;         at java.net.URLClassLoader.access$000(URLClassLoader.java:58)
</span><br>
<span class="quotelev1">&gt;         at java.net.URLClassLoader$1.run(URLClassLoader.java:197)
</span><br>
<span class="quotelev1">&gt;         at java.security.AccessController.doPrivileged(Native Method)
</span><br>
<span class="quotelev1">&gt;         at java.net.URLClassLoader.findClass(URLClassLoader.java:190)
</span><br>
<span class="quotelev1">&gt;         at java.lang.ClassLoader.loadClass(ClassLoader.java:306)
</span><br>
<span class="quotelev1">&gt;         at sun.misc.Launcher$AppClassLoader.loadClass(Launcher.java:301)
</span><br>
<span class="quotelev1">&gt;         at java.lang.ClassLoader.loadClass(ClassLoader.java:247)
</span><br>
<span class="quotelev1">&gt; Could not find the main class: InitFinalizeMain.  Program will exit.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus
</span><br>
<span class="quotelev1">&gt; causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process name: [[47580,1],0]
</span><br>
<span class="quotelev1">&gt;   Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; sunpc0 fd1026 106
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the following error if I use two different Solaris 10 Sparc
</span><br>
<span class="quotelev1">&gt; machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rs0 fd1026 107 mpiexec -np 1 -host rs0 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; rs0 fd1026 108 mpiexec -np 1 -host rs1 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; Exception in thread &quot;main&quot; java.lang.UnsupportedClassVersionError: Bad
</span><br>
<span class="quotelev1">&gt; version
</span><br>
<span class="quotelev1">&gt; number in .class file
</span><br>
<span class="quotelev1">&gt;         at java.lang.ClassLoader.defineClass1(Native Method)
</span><br>
<span class="quotelev1">&gt;         at java.lang.ClassLoader.defineClass(ClassLoader.java:626)
</span><br>
<span class="quotelev1">&gt;         at
</span><br>
<span class="quotelev1">&gt; java.security.SecureClassLoader.defineClass(SecureClassLoader.java:124)
</span><br>
<span class="quotelev1">&gt;         at java.net.URLClassLoader.defineClass(URLClassLoader.java:260)
</span><br>
<span class="quotelev1">&gt;         at java.net.URLClassLoader.access$100(URLClassLoader.java:56)
</span><br>
<span class="quotelev1">&gt;         at java.net.URLClassLoader$1.run(URLClassLoader.java:195)
</span><br>
<span class="quotelev1">&gt;         at java.security.AccessController.doPrivileged(Native Method)
</span><br>
<span class="quotelev1">&gt;         at java.net.URLClassLoader.findClass(URLClassLoader.java:188)
</span><br>
<span class="quotelev1">&gt;         at java.lang.ClassLoader.loadClass(ClassLoader.java:306)
</span><br>
<span class="quotelev1">&gt;         at sun.misc.Launcher$AppClassLoader.loadClass(Launcher.java:268)
</span><br>
<span class="quotelev1">&gt;         at java.lang.ClassLoader.loadClass(ClassLoader.java:251)
</span><br>
<span class="quotelev1">&gt;         at java.lang.ClassLoader.loadClassInternal(ClassLoader.java:319)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus
</span><br>
<span class="quotelev1">&gt; causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process name: [[28304,1],0]
</span><br>
<span class="quotelev1">&gt;   Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; rs0 fd1026 109
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Contents of InitFinalizeMain.java:
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; I would be grateful if somebody can fix the problem. Thank you very
</span><br>
<span class="quotelev1">&gt; much for any help in advance.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26870.php">http://www.open-mpi.org/community/lists/users/2015/05/26870.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26872/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26873.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<li><strong>Previous message:</strong> <a href="26871.php">Siegmar Gross: "[OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<li><strong>In reply to:</strong> <a href="26870.php">Siegmar Gross: "[OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26875.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris"</a>
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
