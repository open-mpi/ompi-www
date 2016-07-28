<?
$subject_val = "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 14 12:24:41 2014" -->
<!-- isoreceived="20141114172441" -->
<!-- sent="Fri, 14 Nov 2014 17:24:39 +0000" -->
<!-- isosent="20141114172439" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12" -->
<!-- id="B94D22EF-A917-4354-9540-B80DD80BA652_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201411141704.sAEH4EAD029830_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-14 12:24:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25817.php">Ralph Castain: "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12"</a>
<li><strong>Previous message:</strong> <a href="25815.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-274-g2177f9e with gcc-4.9.2"</a>
<li><strong>In reply to:</strong> <a href="25814.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25817.php">Ralph Castain: "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12"</a>
<li><strong>Reply:</strong> <a href="25817.php">Ralph Castain: "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Todd K. just reported the same thing: <a href="https://github.com/open-mpi/ompi/issues/272">https://github.com/open-mpi/ompi/issues/272</a>
<br>
<p>Siegmar: do you have a github ID?  If so, we can effectively &quot;CC&quot; you on these kinds of tickets, like we used to do with Trac.
<br>
<p><p>On Nov 14, 2014, at 12:04 PM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; today I tried to install openmpi-dev-274-g2177f9e on my machines
</span><br>
<span class="quotelev1">&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
</span><br>
<span class="quotelev1">&gt; x86_64) with Sun C 5.12 and got the following error on all three
</span><br>
<span class="quotelev1">&gt; platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc 127 tail -13 log.make.Linux.x86_64.64_cc
</span><br>
<span class="quotelev1">&gt;  SED      mpi/man/man3/MPI_Wtime.3
</span><br>
<span class="quotelev1">&gt;  SED      mpi/man/man3/OpenMPI.3
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc/ompi'
</span><br>
<span class="quotelev1">&gt; Making all in mpi/cxx
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/export2/src/openmpi-1.9/openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt;  CXX      mpicxx.lo
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-274-g2177f9e/orte/mca/routed/routed.h&quot;, line 52: Error: A typedef name cannot be used in an elaborated type 
</span><br>
<span class="quotelev1">&gt; specifier..
</span><br>
<span class="quotelev1">&gt; 1 Error(s) detected.
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mpicxx.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc 128 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I used the following configure command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc 128 head config.log | grep openmpi
</span><br>
<span class="quotelev1">&gt;  $ ../openmpi-dev-274-g2177f9e/configure --prefix=/usr/local/openmpi-1.9.0_64_cc --libdir=/usr/local/openmpi-1.9.0_64_cc/lib64 
</span><br>
<span class="quotelev1">&gt; --with-jdk-bindir=/usr/local/jdk1.8.0/bin --with-jdk-headers=/usr/local/jdk1.8.0/include JAVA_HOME=/usr/local/jdk1.8.0 LDFLAGS=-m64 
</span><br>
<span class="quotelev1">&gt; CC=cc CXX=CC FC=f95 CFLAGS=-m64 -D_REENTRANT CXXFLAGS=-m64 -library=stlport4 FCFLAGS=-m64 CPP=cpp CXXCPP=cpp CPPFLAGS= -D_REENTRANT 
</span><br>
<span class="quotelev1">&gt; CXXCPPFLAGS= --enable-mpi-cxx --enable-cxx-exceptions --enable-mpi-java --enable-mpi-thread-multiple --with-threads=posix 
</span><br>
<span class="quotelev1">&gt; --with-hwloc=internal --without-verbs --with-wrapper-cflags=-m64 --with-wrapper-cxxflags=-m64 --enable-debug
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc 129 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful. if somebody can fix the problem. Thank
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25814.php">http://www.open-mpi.org/community/lists/users/2014/11/25814.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25817.php">Ralph Castain: "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12"</a>
<li><strong>Previous message:</strong> <a href="25815.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-274-g2177f9e with gcc-4.9.2"</a>
<li><strong>In reply to:</strong> <a href="25814.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25817.php">Ralph Castain: "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12"</a>
<li><strong>Reply:</strong> <a href="25817.php">Ralph Castain: "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12"</a>
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
