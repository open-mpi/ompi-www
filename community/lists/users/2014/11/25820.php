<?
$subject_val = "Re: [OMPI users] OMPI users] error building openmpi-dev-274-g2177f9e withgcc-4.9.2";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 16 00:58:00 2014" -->
<!-- isoreceived="20141116055800" -->
<!-- sent="Sun, 16 Nov 2014 14:57:52 +0900" -->
<!-- isosent="20141116055752" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] error building openmpi-dev-274-g2177f9e withgcc-4.9.2" -->
<!-- id="yo3nmp3gnx1b5rstn0sregkj.1416117472906_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] OMPI users] error building openmpi-dev-274-g2177f9e withgcc-4.9.2" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] error building openmpi-dev-274-g2177f9e withgcc-4.9.2<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-16 00:57:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25821.php">Timur Ismagilov: "[OMPI users] shmalloc error with &gt;=512 mb"</a>
<li><strong>Previous message:</strong> <a href="25819.php">Siegmar Gross: "Re: [OMPI users] error building openmpi-dev-274-g2177f9e withgcc-4.9.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar,
<br>
<p>This is correct, --enable-heterogenous is now fixed in the trunk.
<br>
<p>Please also note that -D_REENTRANT is now automatically set on solaris
<br>
<p>Cheers
<br>
<p>Gilles
<br>
<p>Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Hi Jeff, hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This issue should now be fixed, too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Yes, it is. Thank you very much for your help. It seems that even
</span><br>
<span class="quotelev1">&gt;--enable-heterogeneous is working once more (Gilles told me last
</span><br>
<span class="quotelev1">&gt;month that it was broken in the trunk), because I could successfully
</span><br>
<span class="quotelev1">&gt;multiply a small matrix in my heterogeneous environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Kind regards and thank you very much once more
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 14, 2014, at 12:04 PM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; today I tried to install openmpi-dev-274-g2177f9e on my machines
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; x86_64) with gcc-4.9.2 and got the following error on all three
</span><br>
<span class="quotelev3">&gt;&gt; &gt; platforms.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; tyr openmpi-dev-274-g2177f9e-Linux.x86_64.64_gcc 117 tail -25 log.make.Linux.x86_64.64_gcc
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  SED      mpi/man/man3/MPI_Wtime.3
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  SED      mpi/man/man3/OpenMPI.3
</span><br>
<span class="quotelev3">&gt;&gt; &gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt;`/export2/src/openmpi-1.9/openmpi-dev-274-g2177f9e-Linux.x86_64.64_gcc/ompi'
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Making all in mpi/cxx
</span><br>
<span class="quotelev3">&gt;&gt; &gt; make[2]: Entering directory 
</span><br>
<span class="quotelev1">&gt;`/export2/src/openmpi-1.9/openmpi-dev-274-g2177f9e-Linux.x86_64.64_gcc/ompi/mpi/cxx'
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  CXX      mpicxx.lo
</span><br>
<span class="quotelev3">&gt;&gt; &gt; In file included from ../../../../openmpi-dev-274-g2177f9e/ompi/mca/rte/orte/rte_orte.h:33:0,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                 from ../../../../openmpi-dev-274-g2177f9e/ompi/mca/rte/rte.h:195,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                 from ../../../../openmpi-dev-274-g2177f9e/ompi/errhandler/errhandler.h:34,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                 from ../../../../openmpi-dev-274-g2177f9e/ompi/mpi/cxx/mpicxx.cc:37:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ../../../../openmpi-dev-274-g2177f9e/orte/mca/routed/routed.h:52:8: error: using typedef-name 
</span><br>
<span class="quotelev1">&gt;'orte_process_name_t' after 'struct'
</span><br>
<span class="quotelev3">&gt;&gt; &gt; struct orte_process_name_t;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        ^
</span><br>
<span class="quotelev3">&gt;&gt; &gt; In file included from ../../../../openmpi-dev-274-g2177f9e/ompi/mca/rte/orte/rte_orte.h:29:0,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                 from ../../../../openmpi-dev-274-g2177f9e/ompi/mca/rte/rte.h:195,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                 from ../../../../openmpi-dev-274-g2177f9e/ompi/errhandler/errhandler.h:34,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                 from ../../../../openmpi-dev-274-g2177f9e/ompi/mpi/cxx/mpicxx.cc:37:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ../../../../openmpi-dev-274-g2177f9e/orte/include/orte/types.h:102:29: note: 'orte_process_name_t' 
</span><br>
<span class="quotelev1">&gt;has a previous declaration here
</span><br>
<span class="quotelev3">&gt;&gt; &gt; typedef opal_process_name_t orte_process_name_t;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                             ^
</span><br>
<span class="quotelev3">&gt;&gt; &gt; make[2]: *** [mpicxx.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt;`/export2/src/openmpi-1.9/openmpi-dev-274-g2177f9e-Linux.x86_64.64_gcc/ompi/mpi/cxx'
</span><br>
<span class="quotelev3">&gt;&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; make[1]: Leaving directory 
</span><br>
<span class="quotelev1">&gt;`/export2/src/openmpi-1.9/openmpi-dev-274-g2177f9e-Linux.x86_64.64_gcc/ompi'
</span><br>
<span class="quotelev3">&gt;&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; tyr openmpi-dev-274-g2177f9e-Linux.x86_64.64_gcc 118 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I used the following configure command.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; tyr openmpi-dev-274-g2177f9e-Linux.x86_64.64_gcc 118 head config.log | grep openmpi
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  $ ../openmpi-dev-274-g2177f9e/configure --prefix=/usr/local/openmpi-1.9.0_64_gcc 
</span><br>
<span class="quotelev1">&gt;--libdir=/usr/local/openmpi-1.9.0_64_gcc/lib64 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --with-jdk-bindir=/usr/local/jdk1.8.0/bin --with-jdk-headers=/usr/local/jdk1.8.0/include 
</span><br>
<span class="quotelev1">&gt;JAVA_HOME=/usr/local/jdk1.8.0 LDFLAGS=-m64 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; CC=gcc CXX=g++ FC=gfortran CFLAGS=-m64 -D_REENTRANT CXXFLAGS=-m64 FCFLAGS=-m64 CPP=cpp CXXCPP=cpp 
</span><br>
<span class="quotelev1">&gt;CPPFLAGS= -D_REENTRANT 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; CXXCPPFLAGS= --enable-mpi-cxx --enable-cxx-exceptions --enable-mpi-java 
</span><br>
<span class="quotelev1">&gt;--enable-mpi-thread-multiple --with-threads=posix 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --with-hwloc=internal --without-verbs --with-wrapper-cflags=-std=c11 -m64 
</span><br>
<span class="quotelev1">&gt;--with-wrapper-cxxflags=-m64 --enable-debug
</span><br>
<span class="quotelev3">&gt;&gt; &gt; tyr openmpi-dev-274-g2177f9e-Linux.x86_64.64_gcc 119 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I would be grateful. if somebody can fix the problem. Thank
</span><br>
<span class="quotelev3">&gt;&gt; &gt; you very much for any help in advance.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25815.php">http://www.open-mpi.org/community/lists/users/2014/11/25815.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25819.php">http://www.open-mpi.org/community/lists/users/2014/11/25819.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25821.php">Timur Ismagilov: "[OMPI users] shmalloc error with &gt;=512 mb"</a>
<li><strong>Previous message:</strong> <a href="25819.php">Siegmar Gross: "Re: [OMPI users] error building openmpi-dev-274-g2177f9e withgcc-4.9.2"</a>
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
