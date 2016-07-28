<?
$subject_val = "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 09:09:02 2007" -->
<!-- isoreceived="20071206140902" -->
<!-- sent="Thu, 6 Dec 2007 09:08:50 -0500" -->
<!-- isosent="20071206140850" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4" -->
<!-- id="13D4ABB8-9CCB-431B-B3B6-F5E8DE0724FE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D2D7D9FE2492524A925313E2D82E1B53072774D1_at_ORNLEXCHANGE.ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-06 09:08:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4608.php">Ralph H Castain: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<li><strong>Previous message:</strong> <a href="4606.php">Jeff Squyres: "Re: [OMPI users] arch question: long running app"</a>
<li><strong>In reply to:</strong> <a href="4597.php">de Almeida, Valmor F.: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4611.php">de Almeida, Valmor F.: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<li><strong>Reply:</strong> <a href="4611.php">de Almeida, Valmor F.: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If Intel is telling you that they don't support your glibc version, I  
<br>
wouldn't be surprised by random segv's in any application that you  
<br>
build on that platform (including Open MPI).
<br>
<p><p><p>On Dec 5, 2007, at 9:59 AM, de Almeida, Valmor F. wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached is the config.log file for intel 9.1.052. I've also tried the
</span><br>
<span class="quotelev1">&gt; intel 10.1.008 and posted to this list the config.log on a previous
</span><br>
<span class="quotelev1">&gt; e-mail (12/2/2007).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are the key commands for building and installing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export FC=ifort
</span><br>
<span class="quotelev1">&gt; export F77=ifort
</span><br>
<span class="quotelev1">&gt; export CXX=icpc
</span><br>
<span class="quotelev1">&gt; export CC=icc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/packages/openmpi-1.2.4_intel-9.1.052
</span><br>
<span class="quotelev1">&gt; --with-mpi-param_check=always --with-mpi-f90-size=medium
</span><br>
<span class="quotelev1">&gt; --with-f90-max-array-dim=4 CC=icc CXX=icpc F90=ifort F77=ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make -j 2
</span><br>
<span class="quotelev1">&gt; make -j 2 install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is some info on my system
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -&gt;emerge --info
</span><br>
<span class="quotelev1">&gt; Portage 2.1.3.19 (default-linux/x86/2007.0, gcc-4.1.2, glibc-2.6.1-r0,
</span><br>
<span class="quotelev1">&gt; 2.6.22.9 i686)
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; System uname: 2.6.22.9 i686 Intel(R) Xeon(TM) CPU 2.66GHz
</span><br>
<span class="quotelev1">&gt; Timestamp of tree: Sat, 17 Nov 2007 04:30:01 +0000
</span><br>
<span class="quotelev1">&gt; app-shells/bash:     3.2_p17
</span><br>
<span class="quotelev1">&gt; dev-java/java-config: 1.3.7, 2.0.33-r1
</span><br>
<span class="quotelev1">&gt; dev-lang/python:     2.4.4-r6
</span><br>
<span class="quotelev1">&gt; dev-python/pycrypto: 2.0.1-r6
</span><br>
<span class="quotelev1">&gt; sys-apps/baselayout: 1.12.9-r2
</span><br>
<span class="quotelev1">&gt; sys-apps/sandbox:    1.2.18.1-r2
</span><br>
<span class="quotelev1">&gt; sys-devel/autoconf:  2.13, 2.61-r1
</span><br>
<span class="quotelev1">&gt; sys-devel/automake:  1.5, 1.6.3, 1.7.9-r1, 1.8.5-r3, 1.9.6-r2, 1.10
</span><br>
<span class="quotelev1">&gt; sys-devel/binutils:  2.18-r1
</span><br>
<span class="quotelev1">&gt; sys-devel/gcc-config: 1.3.16
</span><br>
<span class="quotelev1">&gt; sys-devel/libtool:   1.5.24
</span><br>
<span class="quotelev1">&gt; virtual/os-headers:  2.6.22-r2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -&gt;echo $PATH
</span><br>
<span class="quotelev1">&gt; /opt/cubit:/opt/gambit/bin:/opt/compilers/intel/idb/9.1.052/bin:/opt/ 
</span><br>
<span class="quotelev1">&gt; com
</span><br>
<span class="quotelev1">&gt; pilers/intel/fc/9.1.052/bin:/opt/compilers/intel/cc/9.1.052/bin:/usr/ 
</span><br>
<span class="quotelev1">&gt; loc
</span><br>
<span class="quotelev1">&gt; al/nwchem/bin:/usr/local/visit/bin:/usr/local/ompi_intel/bin:/usr/ 
</span><br>
<span class="quotelev1">&gt; local/
</span><br>
<span class="quotelev1">&gt; sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/opt/bin:/usr/i686- 
</span><br>
<span class="quotelev1">&gt; pc-
</span><br>
<span class="quotelev1">&gt; linux-gnu/gcc-bin/4.1.2:/usr/local/packages/cca- 
</span><br>
<span class="quotelev1">&gt; tools-0.6.4_gcc-4.1.2/bi
</span><br>
<span class="quotelev1">&gt; n:/usr/bin:/opt/chpl/bin/linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -&gt;echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /opt/compilers/intel/fc/9.1.052/lib:/opt/compilers/intel/cc/9.1.052/ 
</span><br>
<span class="quotelev1">&gt; lib:
</span><br>
<span class="quotelev1">&gt; /usr/local/ompi_intel/lib::/usr/local/packages/cca- 
</span><br>
<span class="quotelev1">&gt; tools-0.6.4_gcc-4.1.2
</span><br>
<span class="quotelev1">&gt; /lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am also copying this to the person at Intel who is looking at the
</span><br>
<span class="quotelev1">&gt; problem, and here is a posting from the Intel Premier Support (Issue
</span><br>
<span class="quotelev1">&gt; number: 461117) for this case
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 12/04/2007
</span><br>
<span class="quotelev1">&gt; Valmor,
</span><br>
<span class="quotelev1">&gt; Thanks for your submission. The Intel compilers have supported the 2.6
</span><br>
<span class="quotelev1">&gt; Linux kernel for some time now, but they do not yet support glibc 2.6.
</span><br>
<span class="quotelev1">&gt; The most recent version of glibc supported is 2.5, as represented by  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; Red Hat Enterprise Linux 5 and Ubuntu 7.04 distributions. There are
</span><br>
<span class="quotelev1">&gt; known issues with Ubuntu 7.10, for example, which has a later glibc.
</span><br>
<span class="quotelev1">&gt; What version of Gentoo are you using, and do you have the option to  
</span><br>
<span class="quotelev1">&gt; try
</span><br>
<span class="quotelev1">&gt; an older glibc and gcc along with the Intel compiler version 10.1?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's not sure that the glibc version is the problem, so I will try to
</span><br>
<span class="quotelev1">&gt; build OpenMPI with glibc 2.5 on Red Hat EL5 or Ubuntu 7.04 to see if
</span><br>
<span class="quotelev1">&gt; that shows any problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Martyn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 12/05/2007
</span><br>
<span class="quotelev1">&gt; Martyn,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; During the installation of 10.1.008, the install script says that  
</span><br>
<span class="quotelev1">&gt; glibc
</span><br>
<span class="quotelev1">&gt; 2.6 is supported.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Valmor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Valmor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, December 04, 2007 5:58 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] suggested intel compiler version for
</span><br>
<span class="quotelev1">&gt; openmpi-
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have compiled Open MPI with Intel 10.0 and 9.1 with no problems on
</span><br>
<span class="quotelev2">&gt;&gt; RHEL4U4.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you send all the info that you can (obviously, ompi_info won't
</span><br>
<span class="quotelev2">&gt;&gt; run) from <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 4, 2007, at 4:26 PM, de Almeida, Valmor F. wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is the suggested intel compiler version to compile
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.4?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried versions 10.1.008 and 9.1.052 and no luck in getting a
</span><br>
<span class="quotelev1">&gt; working
</span><br>
<span class="quotelev3">&gt;&gt;&gt; library. In both cases I get:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -&gt;mpic++ --showme
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -&gt;ompi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Valmor de Almeida
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &lt;config.log.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4608.php">Ralph H Castain: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<li><strong>Previous message:</strong> <a href="4606.php">Jeff Squyres: "Re: [OMPI users] arch question: long running app"</a>
<li><strong>In reply to:</strong> <a href="4597.php">de Almeida, Valmor F.: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4611.php">de Almeida, Valmor F.: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<li><strong>Reply:</strong> <a href="4611.php">de Almeida, Valmor F.: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
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
