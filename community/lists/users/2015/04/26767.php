<?
$subject_val = "Re: [OMPI users] problem with Java in openmpi-dev-1567-g11e8c20";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 02:50:29 2015" -->
<!-- isoreceived="20150423065029" -->
<!-- sent="Thu, 23 Apr 2015 08:50:04 +0200 (CEST)" -->
<!-- isosent="20150423065004" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with Java in openmpi-dev-1567-g11e8c20" -->
<!-- id="201504230650.t3N6o4jN013170_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] problem with Java in openmpi-dev-1567-g11e8c20" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with Java in openmpi-dev-1567-g11e8c20<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-23 02:50:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26768.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Previous message:</strong> <a href="26766.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Maybe in reply to:</strong> <a href="26760.php">Siegmar Gross: "[OMPI users] problem with Java in openmpi-dev-1567-g11e8c20"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Howard,
<br>
<p><span class="quotelev1">&gt; Could you double check that on the linux box you are using an ompi install
</span><br>
<span class="quotelev1">&gt; which has java support?
</span><br>
<p>Yes, I have a script file that I call with the Open MPI version that I want
<br>
to build so that I can't forget to use an empty directory, to remove the
<br>
last installation before installing the new one, and so on. The strange thing
<br>
is that I cannot reproduce the error today. I've no idea why it didn't work
<br>
two days ago. Nevertheless I'm happy that it works now. Thank you very much
<br>
for your help which forced me to try again.
<br>
<p>linpc1 java 110 ls -l /usr/local/openmpi-1.9.0_64_gcc/bin/mpijavac
<br>
lrwxrwxrwx 1 root root 11 Apr 21 07:52 /usr/local/openmpi-1.9.0_64_gcc/bin/mpijavac -&gt; mpijavac.pl
<br>
linpc1 java 111 ls -l /usr/local/openmpi-1.9.0_64_gcc/lib64/*java*
<br>
-rwxr-xr-x 1 root root   1170 Apr 21 07:52 /usr/local/openmpi-1.9.0_64_gcc/lib64/libmpi_java.la
<br>
lrwxrwxrwx 1 root root     20 Apr 21 07:52 /usr/local/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so -&gt; libmpi_java.so.0.0.0
<br>
lrwxrwxrwx 1 root root     20 Apr 21 07:52 /usr/local/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so.0 -&gt; libmpi_java.so.0.0.0
<br>
-rwxr-xr-x 1 root root 538243 Apr 21 07:52 /usr/local/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so.0.0.0
<br>
-rwxr-xr-x 1 root root   1239 Apr 21 07:52 /usr/local/openmpi-1.9.0_64_gcc/lib64/liboshmem_java.la
<br>
lrwxrwxrwx 1 root root     23 Apr 21 07:52 /usr/local/openmpi-1.9.0_64_gcc/lib64/liboshmem_java.so -&gt; liboshmem_java.so.0.0.0
<br>
lrwxrwxrwx 1 root root     23 Apr 21 07:52 /usr/local/openmpi-1.9.0_64_gcc/lib64/liboshmem_java.so.0 -&gt; liboshmem_java.so.0.0.0
<br>
-rwxr-xr-x 1 root root 169198 Apr 21 07:52 /usr/local/openmpi-1.9.0_64_gcc/lib64/liboshmem_java.so.0.0.0
<br>
linpc1 java 112 
<br>
<p><p>tyr fd1026 104 mpiexec -np 6 -host tyr,linpc1,sunpc1 java MatMultWithAnyProc2DarrayIn1DarrayMain
<br>
<p>You have started 6 processes but I need at most 4 processes.
<br>
I build a new worker group with 4 processes. The processes with
<br>
the following ranks in the basic group belong to the new group:
<br>
&nbsp;&nbsp;2   3   4   5   
<br>
...
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><p><span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; On Apr 21, 2015 10:11 AM, &quot;Siegmar Gross&quot; &lt;
</span><br>
<span class="quotelev1">&gt; Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; today I installed openmpi-dev-1567-g11e8c20 on my machines
</span><br>
<span class="quotelev2">&gt; &gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
</span><br>
<span class="quotelev2">&gt; &gt; x86_64) with gcc-4.9.2. I used the following configure command
</span><br>
<span class="quotelev2">&gt; &gt; for all platforms.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ../openmpi-dev-1567-g11e8c20/configure \
</span><br>
<span class="quotelev2">&gt; &gt;   --prefix=/usr/local/openmpi-1.9.0_64_gcc \
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
<span class="quotelev2">&gt; &gt;   CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;   CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
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
<span class="quotelev2">&gt; &gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev2">&gt; &gt;   --without-verbs \
</span><br>
<span class="quotelev2">&gt; &gt;   --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;   --with-wrapper-cxxflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;   --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;   --enable-debug \
</span><br>
<span class="quotelev2">&gt; &gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can run a small program on both Solaris machines without problems,
</span><br>
<span class="quotelev2">&gt; &gt; but get an error on Linux.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tyr java 123 mpiexec -np 6 --host sunpc1 java
</span><br>
<span class="quotelev2">&gt; &gt; MatMultWithAnyProc2DarrayIn1DarrayMain
</span><br>
<span class="quotelev2">&gt; &gt; You have started 6 processes but I need at most 4 processes.
</span><br>
<span class="quotelev2">&gt; &gt; I build a new worker group with 4 processes. The processes with
</span><br>
<span class="quotelev2">&gt; &gt; the following ranks in the basic group belong to the new group:
</span><br>
<span class="quotelev2">&gt; &gt;   2   3   4   5
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Group &quot;groupOther&quot; contains 2 processes which have
</span><br>
<span class="quotelev2">&gt; &gt; nothing to do.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Worker process 0 of 4 running on sunpc1.
</span><br>
<span class="quotelev2">&gt; &gt; Worker process 1 of 4 running on sunpc1.
</span><br>
<span class="quotelev2">&gt; &gt; Worker process 2 of 4 running on sunpc1.
</span><br>
<span class="quotelev2">&gt; &gt; Worker process 3 of 4 running on sunpc1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (4,6)-matrix a:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       1.00      2.00      3.00      4.00      5.00      6.00
</span><br>
<span class="quotelev2">&gt; &gt;       7.00      8.00      9.00     10.00     11.00     12.00
</span><br>
<span class="quotelev2">&gt; &gt;      13.00     14.00     15.00     16.00     17.00     18.00
</span><br>
<span class="quotelev2">&gt; &gt;      19.00     20.00     21.00     22.00     23.00     24.00
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I get the following error on my Linux machine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tyr java 127 mpiexec -np 6 --host linpc1 java
</span><br>
<span class="quotelev2">&gt; &gt; MatMultWithAnyProc2DarrayIn1DarrayMain
</span><br>
<span class="quotelev2">&gt; &gt; Exception in thread &quot;main&quot; java.lang.NoClassDefFoundError: mpi/MPIException
</span><br>
<span class="quotelev2">&gt; &gt;         at java.lang.Class.getDeclaredMethods0(Native Method)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.lang.Class.privateGetDeclaredMethods(Class.java:2688)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.lang.Class.getMethod0(Class.java:2937)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.lang.Class.getMethod(Class.java:1771)
</span><br>
<span class="quotelev2">&gt; &gt;         at
</span><br>
<span class="quotelev2">&gt; &gt; sun.launcher.LauncherHelper.validateMainClass(LauncherHelper.java:544)
</span><br>
<span class="quotelev2">&gt; &gt;         at
</span><br>
<span class="quotelev2">&gt; &gt; sun.launcher.LauncherHelper.checkAndLoadMain(LauncherHelper.java:526)
</span><br>
<span class="quotelev2">&gt; &gt; Caused by: java.lang.ClassNotFoundException: mpi.MPIException
</span><br>
<span class="quotelev2">&gt; &gt;         at java.net.URLClassLoader$1.run(URLClassLoader.java:372)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.net.URLClassLoader$1.run(URLClassLoader.java:361)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.security.AccessController.doPrivileged(Native Method)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.net.URLClassLoader.findClass(URLClassLoader.java:360)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.lang.ClassLoader.loadClass(ClassLoader.java:424)Exception
</span><br>
<span class="quotelev2">&gt; &gt; in thread &quot;main&quot;
</span><br>
<span class="quotelev2">&gt; &gt;         at sun.misc.Launcher$AppClassLoader.loadClass(Launcher.java:308)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.lang.ClassLoader.loadClass(ClassLoader.java:357)
</span><br>
<span class="quotelev2">&gt; &gt;         ... 6 more
</span><br>
<span class="quotelev2">&gt; &gt; java.lang.NoClassDefFoundError: mpi/MPIException
</span><br>
<span class="quotelev2">&gt; &gt;         at java.lang.Class.getDeclaredMethods0(Native Method)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.lang.Class.privateGetDeclaredMethods(Class.java:2688)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.lang.Class.getMethod0(Class.java:2937)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.lang.Class.getMethod(Class.java:1771)
</span><br>
<span class="quotelev2">&gt; &gt;         at
</span><br>
<span class="quotelev2">&gt; &gt; sun.launcher.LauncherHelper.validateMainClass(LauncherHelper.java:544)
</span><br>
<span class="quotelev2">&gt; &gt;         at
</span><br>
<span class="quotelev2">&gt; &gt; sun.launcher.LauncherHelper.checkAndLoadMain(LauncherHelper.java:526)
</span><br>
<span class="quotelev2">&gt; &gt; Caused by: java.lang.ClassNotFoundException: mpi.MPIException
</span><br>
<span class="quotelev2">&gt; &gt;         at java.net.URLClassLoader$1.run(URLClassLoader.java:372)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.net.URLClassLoader$1.run(URLClassLoader.java:361)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.security.AccessController.doPrivileged(Native Method)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.net.URLClassLoader.findClass(URLClassLoader.java:360)
</span><br>
<span class="quotelev2">&gt; &gt;         at java.lang.ClassLoader.loadClass(ClassLoader.java:424)
</span><br>
<span class="quotelev2">&gt; &gt;         at sun.misc.Launcher$AppClassLoader.loadClass(Launcher.java:308)
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt; &gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;         at java.lang.ClassLoader.loadClass(ClassLoader.java:357)
</span><br>
<span class="quotelev2">&gt; &gt;         ... 6 more
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev2">&gt; &gt; thus causing
</span><br>
<span class="quotelev2">&gt; &gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Process name: [[57804,1],0]
</span><br>
<span class="quotelev2">&gt; &gt;   Exit code:    1
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; tyr java 128
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would be grateful if somebody can fix the problem. Thank
</span><br>
<span class="quotelev2">&gt; &gt; you very much for any help in advance.
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
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26760.php">http://www.open-mpi.org/community/lists/users/2015/04/26760.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26768.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Previous message:</strong> <a href="26766.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Maybe in reply to:</strong> <a href="26760.php">Siegmar Gross: "[OMPI users] problem with Java in openmpi-dev-1567-g11e8c20"</a>
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
