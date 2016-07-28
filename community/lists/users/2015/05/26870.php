<?
$subject_val = "[OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 15 07:33:08 2015" -->
<!-- isoreceived="20150515113308" -->
<!-- sent="Fri, 15 May 2015 13:32:33 +0200 (CEST)" -->
<!-- isosent="20150515113233" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris" -->
<!-- id="201505151132.t4FBWX3Z029061_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-15 07:32:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26871.php">Siegmar Gross: "[OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<li><strong>Previous message:</strong> <a href="26869.php">Chaitra Kumar: "[OMPI users] About POSIX APIs used on openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26872.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris"</a>
<li><strong>Reply:</strong> <a href="26872.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris"</a>
<li><strong>Maybe reply:</strong> <a href="26875.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I successfully installed openmpi-1.8.5 on my machines (Solaris 10
<br>
Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1 x86_64) with
<br>
gcc-4.9.2 and Sun C 5.13. Unfortunately I get an error for my Java
<br>
programs for both versions if I use two Solaris machines. It works
<br>
fine for two Linux machines. &quot;mpijavac&quot; compiles the program without
<br>
warnings or errors.
<br>
<p><p>I get the following error if I use two different Solaris 10 x86_64
<br>
machines.
<br>
<p>sunpc0 fd1026 104 mpiexec -np 1 -host sunpc0 java InitFinalizeMain
<br>
Hello!
<br>
sunpc0 fd1026 105 mpiexec -np 1 -host sunpc1 java InitFinalizeMain
<br>
Exception in thread &quot;main&quot; java.lang.UnsupportedClassVersionError: 
<br>
InitFinalizeMain : Unsupported major.minor version 52.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.ClassLoader.defineClass1(Native Method)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.ClassLoader.defineClassCond(ClassLoader.java:631)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.ClassLoader.defineClass(ClassLoader.java:615)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
java.security.SecureClassLoader.defineClass(SecureClassLoader.java:141)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.net.URLClassLoader.defineClass(URLClassLoader.java:283)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.net.URLClassLoader.access$000(URLClassLoader.java:58)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.net.URLClassLoader$1.run(URLClassLoader.java:197)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.security.AccessController.doPrivileged(Native Method)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.net.URLClassLoader.findClass(URLClassLoader.java:190)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.ClassLoader.loadClass(ClassLoader.java:306)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at sun.misc.Launcher$AppClassLoader.loadClass(Launcher.java:301)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.ClassLoader.loadClass(ClassLoader.java:247)
<br>
Could not find the main class: InitFinalizeMain.  Program will exit.
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec detected that one or more processes exited with non-zero status, thus 
<br>
causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[47580,1],0]
<br>
&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
sunpc0 fd1026 106 
<br>
<p><p><p>I get the following error if I use two different Solaris 10 Sparc
<br>
machines.
<br>
<p>rs0 fd1026 107 mpiexec -np 1 -host rs0 java InitFinalizeMain
<br>
Hello!
<br>
rs0 fd1026 108 mpiexec -np 1 -host rs1 java InitFinalizeMain
<br>
Exception in thread &quot;main&quot; java.lang.UnsupportedClassVersionError: Bad version 
<br>
number in .class file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.ClassLoader.defineClass1(Native Method)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.ClassLoader.defineClass(ClassLoader.java:626)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
java.security.SecureClassLoader.defineClass(SecureClassLoader.java:124)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.net.URLClassLoader.defineClass(URLClassLoader.java:260)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.net.URLClassLoader.access$100(URLClassLoader.java:56)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.net.URLClassLoader$1.run(URLClassLoader.java:195)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.security.AccessController.doPrivileged(Native Method)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.net.URLClassLoader.findClass(URLClassLoader.java:188)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.ClassLoader.loadClass(ClassLoader.java:306)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at sun.misc.Launcher$AppClassLoader.loadClass(Launcher.java:268)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.ClassLoader.loadClass(ClassLoader.java:251)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.ClassLoader.loadClassInternal(ClassLoader.java:319)
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec detected that one or more processes exited with non-zero status, thus 
<br>
causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[28304,1],0]
<br>
&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
rs0 fd1026 109 
<br>
<p>...
<br>
<p><p>Contents of InitFinalizeMain.java:
<br>
<p>import mpi.*;
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
<p><p>I would be grateful if somebody can fix the problem. Thank you very
<br>
much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26871.php">Siegmar Gross: "[OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<li><strong>Previous message:</strong> <a href="26869.php">Chaitra Kumar: "[OMPI users] About POSIX APIs used on openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26872.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris"</a>
<li><strong>Reply:</strong> <a href="26872.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris"</a>
<li><strong>Maybe reply:</strong> <a href="26875.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris"</a>
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
