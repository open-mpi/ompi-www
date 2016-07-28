<?
$subject_val = "[OMPI users] problem with Java in openmpi-dev-1567-g11e8c20";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 21 12:10:55 2015" -->
<!-- isoreceived="20150421161055" -->
<!-- sent="Tue, 21 Apr 2015 18:10:29 +0200 (CEST)" -->
<!-- isosent="20150421161029" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with Java in openmpi-dev-1567-g11e8c20" -->
<!-- id="201504211610.t3LGATWD018422_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problem with Java in openmpi-dev-1567-g11e8c20<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-21 12:10:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26761.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Previous message:</strong> <a href="26759.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [ompi] master heterogeneous build broken (#403)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26763.php">Howard Pritchard: "Re: [OMPI users] problem with Java in openmpi-dev-1567-g11e8c20"</a>
<li><strong>Reply:</strong> <a href="26763.php">Howard Pritchard: "Re: [OMPI users] problem with Java in openmpi-dev-1567-g11e8c20"</a>
<li><strong>Maybe reply:</strong> <a href="26767.php">Siegmar Gross: "Re: [OMPI users] problem with Java in openmpi-dev-1567-g11e8c20"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I installed openmpi-dev-1567-g11e8c20 on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
<br>
x86_64) with gcc-4.9.2. I used the following configure command
<br>
for all platforms.
<br>
<p>../openmpi-dev-1567-g11e8c20/configure \
<br>
&nbsp;&nbsp;--prefix=/usr/local/openmpi-1.9.0_64_gcc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.9.0_64_gcc/lib64 \
<br>
&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.8.0/bin \
<br>
&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.8.0/include \
<br>
&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.8.0 \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
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
&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;--without-verbs \
<br>
&nbsp;&nbsp;--with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
<br>
&nbsp;&nbsp;--with-wrapper-cxxflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;--with-wrapper-fcflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
<br>
<p>I can run a small program on both Solaris machines without problems,
<br>
but get an error on Linux.
<br>
<p>tyr java 123 mpiexec -np 6 --host sunpc1 java MatMultWithAnyProc2DarrayIn1DarrayMain
<br>
You have started 6 processes but I need at most 4 processes.
<br>
I build a new worker group with 4 processes. The processes with
<br>
the following ranks in the basic group belong to the new group:
<br>
&nbsp;&nbsp;2   3   4   5   
<br>
<p>Group &quot;groupOther&quot; contains 2 processes which have
<br>
nothing to do.
<br>
<p>Worker process 0 of 4 running on sunpc1.
<br>
Worker process 1 of 4 running on sunpc1.
<br>
Worker process 2 of 4 running on sunpc1.
<br>
Worker process 3 of 4 running on sunpc1.
<br>
<p>(4,6)-matrix a:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.00      2.00      3.00      4.00      5.00      6.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7.00      8.00      9.00     10.00     11.00     12.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13.00     14.00     15.00     16.00     17.00     18.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;19.00     20.00     21.00     22.00     23.00     24.00
<br>
...
<br>
<p><p>I get the following error on my Linux machine.
<br>
<p>tyr java 127 mpiexec -np 6 --host linpc1 java MatMultWithAnyProc2DarrayIn1DarrayMain
<br>
Exception in thread &quot;main&quot; java.lang.NoClassDefFoundError: mpi/MPIException
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.Class.getDeclaredMethods0(Native Method)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.Class.privateGetDeclaredMethods(Class.java:2688)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.Class.getMethod0(Class.java:2937)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.Class.getMethod(Class.java:1771)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at sun.launcher.LauncherHelper.validateMainClass(LauncherHelper.java:544)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at sun.launcher.LauncherHelper.checkAndLoadMain(LauncherHelper.java:526)
<br>
Caused by: java.lang.ClassNotFoundException: mpi.MPIException
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.net.URLClassLoader$1.run(URLClassLoader.java:372)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.net.URLClassLoader$1.run(URLClassLoader.java:361)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.security.AccessController.doPrivileged(Native Method)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.net.URLClassLoader.findClass(URLClassLoader.java:360)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.ClassLoader.loadClass(ClassLoader.java:424)Exception in thread &quot;main&quot; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at sun.misc.Launcher$AppClassLoader.loadClass(Launcher.java:308)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.ClassLoader.loadClass(ClassLoader.java:357)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;... 6 more
<br>
java.lang.NoClassDefFoundError: mpi/MPIException
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.Class.getDeclaredMethods0(Native Method)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.Class.privateGetDeclaredMethods(Class.java:2688)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.Class.getMethod0(Class.java:2937)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.Class.getMethod(Class.java:1771)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at sun.launcher.LauncherHelper.validateMainClass(LauncherHelper.java:544)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at sun.launcher.LauncherHelper.checkAndLoadMain(LauncherHelper.java:526)
<br>
Caused by: java.lang.ClassNotFoundException: mpi.MPIException
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.net.URLClassLoader$1.run(URLClassLoader.java:372)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.net.URLClassLoader$1.run(URLClassLoader.java:361)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.security.AccessController.doPrivileged(Native Method)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.net.URLClassLoader.findClass(URLClassLoader.java:360)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.ClassLoader.loadClass(ClassLoader.java:424)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at sun.misc.Launcher$AppClassLoader.loadClass(Launcher.java:308)
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.ClassLoader.loadClass(ClassLoader.java:357)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;... 6 more
<br>
--------------------------------------------------------------------------
<br>
mpiexec detected that one or more processes exited with non-zero status, thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[57804,1],0]
<br>
&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
tyr java 128 
<br>
<p><p><p>I would be grateful if somebody can fix the problem. Thank
<br>
you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26761.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Previous message:</strong> <a href="26759.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [ompi] master heterogeneous build broken (#403)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26763.php">Howard Pritchard: "Re: [OMPI users] problem with Java in openmpi-dev-1567-g11e8c20"</a>
<li><strong>Reply:</strong> <a href="26763.php">Howard Pritchard: "Re: [OMPI users] problem with Java in openmpi-dev-1567-g11e8c20"</a>
<li><strong>Maybe reply:</strong> <a href="26767.php">Siegmar Gross: "Re: [OMPI users] problem with Java in openmpi-dev-1567-g11e8c20"</a>
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
