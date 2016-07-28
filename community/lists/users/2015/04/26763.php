<?
$subject_val = "Re: [OMPI users] problem with Java in openmpi-dev-1567-g11e8c20";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 10:10:26 2015" -->
<!-- isoreceived="20150422141026" -->
<!-- sent="Wed, 22 Apr 2015 08:10:24 -0600" -->
<!-- isosent="20150422141024" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with Java in openmpi-dev-1567-g11e8c20" -->
<!-- id="CAF1Cqj51vQnQ_hsoLhojd870fEGK7BSqqkhqkRUTs9a_0yUBJg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201504211610.t3LGATWD018422_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-22 10:10:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26764.php">Jerome Vienne: "[OMPI users] Questions regarding MPI_T performance variables and Collective tuning"</a>
<li><strong>Previous message:</strong> <a href="26762.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>In reply to:</strong> <a href="26760.php">Siegmar Gross: "[OMPI users] problem with Java in openmpi-dev-1567-g11e8c20"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26767.php">Siegmar Gross: "Re: [OMPI users] problem with Java in openmpi-dev-1567-g11e8c20"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sigmar
<br>
<p>Could you double check that on the linux box you are using an ompi install
<br>
which has java support?
<br>
<p>Ive hit this error when Ive accidentally  picked up an ompi install where i
<br>
forgot to configure java support.
<br>
<p>Howard
<br>
On Apr 21, 2015 10:11 AM, &quot;Siegmar Gross&quot; &lt;
<br>
Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; today I installed openmpi-dev-1567-g11e8c20 on my machines
</span><br>
<span class="quotelev1">&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
</span><br>
<span class="quotelev1">&gt; x86_64) with gcc-4.9.2. I used the following configure command
</span><br>
<span class="quotelev1">&gt; for all platforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../openmpi-dev-1567-g11e8c20/configure \
</span><br>
<span class="quotelev1">&gt;   --prefix=/usr/local/openmpi-1.9.0_64_gcc \
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
<span class="quotelev1">&gt;   CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;   CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
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
<span class="quotelev1">&gt; I can run a small program on both Solaris machines without problems,
</span><br>
<span class="quotelev1">&gt; but get an error on Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr java 123 mpiexec -np 6 --host sunpc1 java
</span><br>
<span class="quotelev1">&gt; MatMultWithAnyProc2DarrayIn1DarrayMain
</span><br>
<span class="quotelev1">&gt; You have started 6 processes but I need at most 4 processes.
</span><br>
<span class="quotelev1">&gt; I build a new worker group with 4 processes. The processes with
</span><br>
<span class="quotelev1">&gt; the following ranks in the basic group belong to the new group:
</span><br>
<span class="quotelev1">&gt;   2   3   4   5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Group &quot;groupOther&quot; contains 2 processes which have
</span><br>
<span class="quotelev1">&gt; nothing to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Worker process 0 of 4 running on sunpc1.
</span><br>
<span class="quotelev1">&gt; Worker process 1 of 4 running on sunpc1.
</span><br>
<span class="quotelev1">&gt; Worker process 2 of 4 running on sunpc1.
</span><br>
<span class="quotelev1">&gt; Worker process 3 of 4 running on sunpc1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (4,6)-matrix a:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       1.00      2.00      3.00      4.00      5.00      6.00
</span><br>
<span class="quotelev1">&gt;       7.00      8.00      9.00     10.00     11.00     12.00
</span><br>
<span class="quotelev1">&gt;      13.00     14.00     15.00     16.00     17.00     18.00
</span><br>
<span class="quotelev1">&gt;      19.00     20.00     21.00     22.00     23.00     24.00
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the following error on my Linux machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr java 127 mpiexec -np 6 --host linpc1 java
</span><br>
<span class="quotelev1">&gt; MatMultWithAnyProc2DarrayIn1DarrayMain
</span><br>
<span class="quotelev1">&gt; Exception in thread &quot;main&quot; java.lang.NoClassDefFoundError: mpi/MPIException
</span><br>
<span class="quotelev1">&gt;         at java.lang.Class.getDeclaredMethods0(Native Method)
</span><br>
<span class="quotelev1">&gt;         at java.lang.Class.privateGetDeclaredMethods(Class.java:2688)
</span><br>
<span class="quotelev1">&gt;         at java.lang.Class.getMethod0(Class.java:2937)
</span><br>
<span class="quotelev1">&gt;         at java.lang.Class.getMethod(Class.java:1771)
</span><br>
<span class="quotelev1">&gt;         at
</span><br>
<span class="quotelev1">&gt; sun.launcher.LauncherHelper.validateMainClass(LauncherHelper.java:544)
</span><br>
<span class="quotelev1">&gt;         at
</span><br>
<span class="quotelev1">&gt; sun.launcher.LauncherHelper.checkAndLoadMain(LauncherHelper.java:526)
</span><br>
<span class="quotelev1">&gt; Caused by: java.lang.ClassNotFoundException: mpi.MPIException
</span><br>
<span class="quotelev1">&gt;         at java.net.URLClassLoader$1.run(URLClassLoader.java:372)
</span><br>
<span class="quotelev1">&gt;         at java.net.URLClassLoader$1.run(URLClassLoader.java:361)
</span><br>
<span class="quotelev1">&gt;         at java.security.AccessController.doPrivileged(Native Method)
</span><br>
<span class="quotelev1">&gt;         at java.net.URLClassLoader.findClass(URLClassLoader.java:360)
</span><br>
<span class="quotelev1">&gt;         at java.lang.ClassLoader.loadClass(ClassLoader.java:424)Exception
</span><br>
<span class="quotelev1">&gt; in thread &quot;main&quot;
</span><br>
<span class="quotelev1">&gt;         at sun.misc.Launcher$AppClassLoader.loadClass(Launcher.java:308)
</span><br>
<span class="quotelev1">&gt;         at java.lang.ClassLoader.loadClass(ClassLoader.java:357)
</span><br>
<span class="quotelev1">&gt;         ... 6 more
</span><br>
<span class="quotelev1">&gt; java.lang.NoClassDefFoundError: mpi/MPIException
</span><br>
<span class="quotelev1">&gt;         at java.lang.Class.getDeclaredMethods0(Native Method)
</span><br>
<span class="quotelev1">&gt;         at java.lang.Class.privateGetDeclaredMethods(Class.java:2688)
</span><br>
<span class="quotelev1">&gt;         at java.lang.Class.getMethod0(Class.java:2937)
</span><br>
<span class="quotelev1">&gt;         at java.lang.Class.getMethod(Class.java:1771)
</span><br>
<span class="quotelev1">&gt;         at
</span><br>
<span class="quotelev1">&gt; sun.launcher.LauncherHelper.validateMainClass(LauncherHelper.java:544)
</span><br>
<span class="quotelev1">&gt;         at
</span><br>
<span class="quotelev1">&gt; sun.launcher.LauncherHelper.checkAndLoadMain(LauncherHelper.java:526)
</span><br>
<span class="quotelev1">&gt; Caused by: java.lang.ClassNotFoundException: mpi.MPIException
</span><br>
<span class="quotelev1">&gt;         at java.net.URLClassLoader$1.run(URLClassLoader.java:372)
</span><br>
<span class="quotelev1">&gt;         at java.net.URLClassLoader$1.run(URLClassLoader.java:361)
</span><br>
<span class="quotelev1">&gt;         at java.security.AccessController.doPrivileged(Native Method)
</span><br>
<span class="quotelev1">&gt;         at java.net.URLClassLoader.findClass(URLClassLoader.java:360)
</span><br>
<span class="quotelev1">&gt;         at java.lang.ClassLoader.loadClass(ClassLoader.java:424)
</span><br>
<span class="quotelev1">&gt;         at sun.misc.Launcher$AppClassLoader.loadClass(Launcher.java:308)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         at java.lang.ClassLoader.loadClass(ClassLoader.java:357)
</span><br>
<span class="quotelev1">&gt;         ... 6 more
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process name: [[57804,1],0]
</span><br>
<span class="quotelev1">&gt;   Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; tyr java 128
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would be grateful if somebody can fix the problem. Thank
</span><br>
<span class="quotelev1">&gt; you very much for any help in advance.
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
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26760.php">http://www.open-mpi.org/community/lists/users/2015/04/26760.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26763/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26764.php">Jerome Vienne: "[OMPI users] Questions regarding MPI_T performance variables and Collective tuning"</a>
<li><strong>Previous message:</strong> <a href="26762.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>In reply to:</strong> <a href="26760.php">Siegmar Gross: "[OMPI users] problem with Java in openmpi-dev-1567-g11e8c20"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26767.php">Siegmar Gross: "Re: [OMPI users] problem with Java in openmpi-dev-1567-g11e8c20"</a>
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
