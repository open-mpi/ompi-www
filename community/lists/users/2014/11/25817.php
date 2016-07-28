<?
$subject_val = "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 14 14:46:33 2014" -->
<!-- isoreceived="20141114194633" -->
<!-- sent="Fri, 14 Nov 2014 11:46:29 -0800" -->
<!-- isosent="20141114194629" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12" -->
<!-- id="B3870F57-25BD-415C-A864-E1521900DFCF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B94D22EF-A917-4354-9540-B80DD80BA652_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-14 14:46:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25818.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with gcc-4.9.2"</a>
<li><strong>Previous message:</strong> <a href="25816.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12"</a>
<li><strong>In reply to:</strong> <a href="25816.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: I just committed the fix to master
<br>
<p><p><span class="quotelev1">&gt; On Nov 14, 2014, at 9:24 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Todd K. just reported the same thing: <a href="https://github.com/open-mpi/ompi/issues/272">https://github.com/open-mpi/ompi/issues/272</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar: do you have a github ID?  If so, we can effectively &quot;CC&quot; you on these kinds of tickets, like we used to do with Trac.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 14, 2014, at 12:04 PM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; today I tried to install openmpi-dev-274-g2177f9e on my machines
</span><br>
<span class="quotelev2">&gt;&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
</span><br>
<span class="quotelev2">&gt;&gt; x86_64) with Sun C 5.12 and got the following error on all three
</span><br>
<span class="quotelev2">&gt;&gt; platforms.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; tyr openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc 127 tail -13 log.make.Linux.x86_64.64_cc
</span><br>
<span class="quotelev2">&gt;&gt; SED      mpi/man/man3/MPI_Wtime.3
</span><br>
<span class="quotelev2">&gt;&gt; SED      mpi/man/man3/OpenMPI.3
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mpi/cxx
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/export2/src/openmpi-1.9/openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc/ompi/mpi/cxx'
</span><br>
<span class="quotelev2">&gt;&gt; CXX      mpicxx.lo
</span><br>
<span class="quotelev2">&gt;&gt; &quot;../../../../openmpi-dev-274-g2177f9e/orte/mca/routed/routed.h&quot;, line 52: Error: A typedef name cannot be used in an elaborated type 
</span><br>
<span class="quotelev2">&gt;&gt; specifier..
</span><br>
<span class="quotelev2">&gt;&gt; 1 Error(s) detected.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [mpicxx.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc/ompi/mpi/cxx'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; tyr openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc 128 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I used the following configure command.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; tyr openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc 128 head config.log | grep openmpi
</span><br>
<span class="quotelev2">&gt;&gt; $ ../openmpi-dev-274-g2177f9e/configure --prefix=/usr/local/openmpi-1.9.0_64_cc --libdir=/usr/local/openmpi-1.9.0_64_cc/lib64 
</span><br>
<span class="quotelev2">&gt;&gt; --with-jdk-bindir=/usr/local/jdk1.8.0/bin --with-jdk-headers=/usr/local/jdk1.8.0/include JAVA_HOME=/usr/local/jdk1.8.0 LDFLAGS=-m64 
</span><br>
<span class="quotelev2">&gt;&gt; CC=cc CXX=CC FC=f95 CFLAGS=-m64 -D_REENTRANT CXXFLAGS=-m64 -library=stlport4 FCFLAGS=-m64 CPP=cpp CXXCPP=cpp CPPFLAGS= -D_REENTRANT 
</span><br>
<span class="quotelev2">&gt;&gt; CXXCPPFLAGS= --enable-mpi-cxx --enable-cxx-exceptions --enable-mpi-java --enable-mpi-thread-multiple --with-threads=posix 
</span><br>
<span class="quotelev2">&gt;&gt; --with-hwloc=internal --without-verbs --with-wrapper-cflags=-m64 --with-wrapper-cxxflags=-m64 --enable-debug
</span><br>
<span class="quotelev2">&gt;&gt; tyr openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc 129 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would be grateful. if somebody can fix the problem. Thank
</span><br>
<span class="quotelev2">&gt;&gt; you very much for any help in advance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25814.php">http://www.open-mpi.org/community/lists/users/2014/11/25814.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25816.php">http://www.open-mpi.org/community/lists/users/2014/11/25816.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25818.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with gcc-4.9.2"</a>
<li><strong>Previous message:</strong> <a href="25816.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12"</a>
<li><strong>In reply to:</strong> <a href="25816.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12"</a>
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
