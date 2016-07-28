<?
$subject_val = "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 02:46:43 2012" -->
<!-- isoreceived="20121213074643" -->
<!-- sent="Thu, 13 Dec 2012 08:39:27 +0100 (CET)" -->
<!-- isosent="20121213073927" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux" -->
<!-- id="201212130739.qBD7dRu4011021_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-13 02:39:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20939.php">Shikha Maheshwari: "[OMPI users] Error in configuring hwloc(hardware locality) on Linux on System Z"</a>
<li><strong>Previous message:</strong> <a href="20937.php">Ng Shi Wei: "[OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<li><strong>Maybe in reply to:</strong> <a href="20927.php">Siegmar Gross: "[OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20987.php">Jeff Squyres: "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<li><strong>Reply:</strong> <a href="20987.php">Jeff Squyres: "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; Can you send the config.log for the platform where it failed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd like to see the specific compiler error that occurred.
</span><br>
<p>I found the error with your hint. For Open MPI 1.6.x I must also
<br>
specify &quot;F77&quot; and &quot;FFLAGS&quot; for the Fortran 77 compiler. Otherwise
<br>
it uses &quot;gfortran&quot; from the GNU package. &quot;gfortran&quot; worked for the
<br>
64 bit version and didn't work for the 32 bit version. (that's the
<br>
reason why I got only an error for the 32 bit version).
<br>
<p><p>Open MPI 1.6.4:
<br>
---------------
<br>
...
<br>
&nbsp;&nbsp;$ ../openmpi-1.6.4a1r27643/configure --prefix=/usr/local/openmpi-1.6.4_32_cc 
<br>
LDFLAGS=-m32 CC=cc CXX=CC FC=f95 CFLAGS=-m32 CXXFLAGS=-m32 -library=stlport4 
<br>
FCFLAGS=-m32 CPP=cpp CXXCPP=cpp CPPFLAGS= CXXCPPFLAGS= C_INCL_PATH= 
<br>
C_INCLUDE_PATH= CPLUS_INCLUDE_PATH= OBJC_INCLUDE_PATH= OPENMPI_HOME= 
<br>
--enable-cxx-exceptions --enable-heterogeneous --enable-opal-multi-threads 
<br>
--enable-mpi-thread-multiple --with-threads=posix --with-hwloc=internal 
<br>
--without-openib --without-udapl --with-wrapper-cflags=-m32 --enable-debug
<br>
...
<br>
ac_cv_env_CXX_value=CC
<br>
ac_cv_env_F77_set=
<br>
ac_cv_env_F77_value=
<br>
ac_cv_env_FCFLAGS_set=set
<br>
ac_cv_env_FCFLAGS_value=-m32
<br>
ac_cv_env_FC_set=set
<br>
ac_cv_env_FC_value=f95
<br>
...
<br>
configure:36508: checking if Fortran 77 compiler supports INTEGER*16
<br>
configure:36524: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:36524: $? = 0
<br>
configure:36537: result: yes
<br>
configure:36572: checking size of Fortran 77 INTEGER*16
<br>
configure:36640: cc -m32 -g  -I. -c conftest.c
<br>
configure:36647: $? = 0
<br>
configure:36657: gfortran  conftestf.f conftest.o -o conftest -m32  
<br>
conftestf.f:3.17:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER*16 x(2)                                                  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Old-style type declaration INTEGER*16 not supported at (1)
<br>
configure:36664: $? = 1
<br>
configure:36681: error: Could not determine size of INTEGER*16
<br>
...
<br>
<p><p><p><p>Open MPI 1.9:
<br>
-------------
<br>
...
<br>
&nbsp;&nbsp;$ ../openmpi-1.9a1r27668/configure --prefix=/usr/local/openmpi-1.9_32_cc 
<br>
--with-jdk-bindir=/usr/local/jdk1.7.0_07-32/bin 
<br>
--with-jdk-headers=/usr/local/jdk1.7.0_07-32/include 
<br>
JAVA_HOME=/usr/local/jdk1.7.0_07-32 LDFLAGS=-m32 CC=cc CXX=CC FC=f95 CFLAGS=-m32 
<br>
CXXFLAGS=-m32 -library=stlport4 FCFLAGS=-m32 CPP=cpp CXXCPP=cpp CPPFLAGS= 
<br>
CXXCPPFLAGS= C_INCL_PATH= C_INCLUDE_PATH= CPLUS_INCLUDE_PATH= OBJC_INCLUDE_PATH= 
<br>
OPENMPI_HOME= --enable-cxx-exceptions --enable-mpi-java --enable-heterogeneous 
<br>
--enable-opal-multi-threads --enable-mpi-thread-multiple --with-threads=posix 
<br>
--with-hwloc=internal --without-verbs --without-udapl --with-wrapper-cflags=-m32 
<br>
--enable-debug
<br>
...
<br>
ac_cv_env_CXX_value=CC
<br>
ac_cv_env_FCFLAGS_set=set
<br>
ac_cv_env_FCFLAGS_value=-m32
<br>
ac_cv_env_FC_set=set
<br>
ac_cv_env_FC_value=f95
<br>
...
<br>
<p><p>Thank you very much for your help.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><span class="quotelev1">&gt; On Dec 12, 2012, at 10:33 AM, Siegmar Gross wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I tried to build openmpi-1.6.4a1r27643 on several platforms
</span><br>
<span class="quotelev2">&gt; &gt; (Solaris Sparc, Solaris x86_64, and Linux x86_64) with Solaris
</span><br>
<span class="quotelev2">&gt; &gt; Studio C (Sun C 5.12) in 32 and 64 bit mode. &quot;configure&quot; broke
</span><br>
<span class="quotelev2">&gt; &gt; on Linux (openSuSE Linux 12.1) for the 32 bit version with the
</span><br>
<span class="quotelev2">&gt; &gt; following error:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; checking if Fortran 77 compiler supports INTEGER*16... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking size of Fortran 77 INTEGER*16... configure: error:
</span><br>
<span class="quotelev2">&gt; &gt;  Could not determine size of INTEGER*16
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 openmpi-1.6.4-Linux.x86_64.32_cc 144 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I could compile a 32 bit version of openmpi-1.9a1r27668 on the
</span><br>
<span class="quotelev2">&gt; &gt; machine without problems.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 openmpi-1.9-Linux.x86_64.32_cc 148 grep &quot;INTEGER\*16&quot; 
</span><br>
<span class="quotelev2">&gt; &gt; log.configure.Linux.x86_64.32_cc
</span><br>
<span class="quotelev2">&gt; &gt; checking if Fortran compiler supports INTEGER*16... no
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 openmpi-1.9-Linux.x86_64.32_cc 149 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Does anybody have an idea why &quot;configure&quot; broke for
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.6.4a1r27643 and how I can fix the problem? Thank you
</span><br>
<span class="quotelev2">&gt; &gt; very much for any help in advance.
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
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: 
</span><br>
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20939.php">Shikha Maheshwari: "[OMPI users] Error in configuring hwloc(hardware locality) on Linux on System Z"</a>
<li><strong>Previous message:</strong> <a href="20937.php">Ng Shi Wei: "[OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<li><strong>Maybe in reply to:</strong> <a href="20927.php">Siegmar Gross: "[OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20987.php">Jeff Squyres: "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<li><strong>Reply:</strong> <a href="20987.php">Jeff Squyres: "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
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
