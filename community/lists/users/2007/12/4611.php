<?
$subject_val = "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 10:07:09 2007" -->
<!-- isoreceived="20071206150709" -->
<!-- sent="Thu, 06 Dec 2007 10:07:04 -0500" -->
<!-- isosent="20071206150704" -->
<!-- name="de Almeida, Valmor F." -->
<!-- email="dealmeidav_at_[hidden]" -->
<!-- subject="Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4" -->
<!-- id="D2D7D9FE2492524A925313E2D82E1B5307277FAE_at_ORNLEXCHANGE.ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="13D4ABB8-9CCB-431B-B3B6-F5E8DE0724FE_at_cisco.com" -->
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
<strong>From:</strong> de Almeida, Valmor F. (<em>dealmeidav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-06 10:07:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4612.php">Jeff Squyres: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="4610.php">Durga Choudhury: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="4607.php">Jeff Squyres: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
On
<br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If Intel is telling you that they don't support your glibc version, I
</span><br>
<span class="quotelev1">&gt; wouldn't be surprised by random segv's in any application that you
</span><br>
<span class="quotelev1">&gt; build on that platform (including Open MPI).
</span><br>
<p>The install script of the 10.1.008 suite lists the supported platform.
<br>
That includes kernel 2.6 and glibc 2.6. I guess there are some loose
<br>
ends.
<br>
<p><pre>
--
Valmor
&gt; 
&gt; 
&gt; 
&gt; On Dec 5, 2007, at 9:59 AM, de Almeida, Valmor F. wrote:
&gt; 
&gt; &gt;
&gt; &gt;
&gt; &gt; Attached is the config.log file for intel 9.1.052. I've also tried
the
&gt; &gt; intel 10.1.008 and posted to this list the config.log on a previous
&gt; &gt; e-mail (12/2/2007).
&gt; &gt;
&gt; &gt; Here are the key commands for building and installing
&gt; &gt;
&gt; &gt; export FC=ifort
&gt; &gt; export F77=ifort
&gt; &gt; export CXX=icpc
&gt; &gt; export CC=icc
&gt; &gt;
&gt; &gt; ./configure --prefix=/usr/local/packages/openmpi-1.2.4_intel-9.1.052
&gt; &gt; --with-mpi-param_check=always --with-mpi-f90-size=medium
&gt; &gt; --with-f90-max-array-dim=4 CC=icc CXX=icpc F90=ifort F77=ifort
&gt; &gt;
&gt; &gt; make -j 2
&gt; &gt; make -j 2 install
&gt; &gt;
&gt; &gt; Here is some info on my system
&gt; &gt;
&gt; &gt; -&gt;emerge --info
&gt; &gt; Portage 2.1.3.19 (default-linux/x86/2007.0, gcc-4.1.2,
glibc-2.6.1-r0,
&gt; &gt; 2.6.22.9 i686)
&gt; &gt; =================================================================
&gt; &gt; System uname: 2.6.22.9 i686 Intel(R) Xeon(TM) CPU 2.66GHz
&gt; &gt; Timestamp of tree: Sat, 17 Nov 2007 04:30:01 +0000
&gt; &gt; app-shells/bash:     3.2_p17
&gt; &gt; dev-java/java-config: 1.3.7, 2.0.33-r1
&gt; &gt; dev-lang/python:     2.4.4-r6
&gt; &gt; dev-python/pycrypto: 2.0.1-r6
&gt; &gt; sys-apps/baselayout: 1.12.9-r2
&gt; &gt; sys-apps/sandbox:    1.2.18.1-r2
&gt; &gt; sys-devel/autoconf:  2.13, 2.61-r1
&gt; &gt; sys-devel/automake:  1.5, 1.6.3, 1.7.9-r1, 1.8.5-r3, 1.9.6-r2, 1.10
&gt; &gt; sys-devel/binutils:  2.18-r1
&gt; &gt; sys-devel/gcc-config: 1.3.16
&gt; &gt; sys-devel/libtool:   1.5.24
&gt; &gt; virtual/os-headers:  2.6.22-r2
&gt; &gt;
&gt; &gt; Here is
&gt; &gt;
&gt; &gt; -&gt;echo $PATH
&gt; &gt;
/opt/cubit:/opt/gambit/bin:/opt/compilers/intel/idb/9.1.052/bin:/opt/
&gt; &gt; com
&gt; &gt;
pilers/intel/fc/9.1.052/bin:/opt/compilers/intel/cc/9.1.052/bin:/usr/
&gt; &gt; loc
&gt; &gt; al/nwchem/bin:/usr/local/visit/bin:/usr/local/ompi_intel/bin:/usr/
&gt; &gt; local/
&gt; &gt;
sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/opt/bin:/usr/i686-
&gt; &gt; pc-
&gt; &gt; linux-gnu/gcc-bin/4.1.2:/usr/local/packages/cca-
&gt; &gt; tools-0.6.4_gcc-4.1.2/bi
&gt; &gt; n:/usr/bin:/opt/chpl/bin/linux
&gt; &gt;
&gt; &gt; Here is
&gt; &gt;
&gt; &gt; -&gt;echo $LD_LIBRARY_PATH
&gt; &gt; /opt/compilers/intel/fc/9.1.052/lib:/opt/compilers/intel/cc/9.1.052/
&gt; &gt; lib:
&gt; &gt; /usr/local/ompi_intel/lib::/usr/local/packages/cca-
&gt; &gt; tools-0.6.4_gcc-4.1.2
&gt; &gt; /lib
&gt; &gt;
&gt; &gt;
&gt; &gt; I am also copying this to the person at Intel who is looking at the
&gt; &gt; problem, and here is a posting from the Intel Premier Support (Issue
&gt; &gt; number: 461117) for this case
&gt; &gt;
&gt; &gt;
&gt; &gt; 12/04/2007
&gt; &gt; Valmor,
&gt; &gt; Thanks for your submission. The Intel compilers have supported the
2.6
&gt; &gt; Linux kernel for some time now, but they do not yet support glibc
2.6.
&gt; &gt; The most recent version of glibc supported is 2.5, as represented by
&gt; &gt; the
&gt; &gt; Red Hat Enterprise Linux 5 and Ubuntu 7.04 distributions. There are
&gt; &gt; known issues with Ubuntu 7.10, for example, which has a later glibc.
&gt; &gt; What version of Gentoo are you using, and do you have the option to
&gt; &gt; try
&gt; &gt; an older glibc and gcc along with the Intel compiler version 10.1?
&gt; &gt;
&gt; &gt; It's not sure that the glibc version is the problem, so I will try
to
&gt; &gt; build OpenMPI with glibc 2.5 on Red Hat EL5 or Ubuntu 7.04 to see if
&gt; &gt; that shows any problems.
&gt; &gt;
&gt; &gt; Regards,
&gt; &gt; Martyn
&gt; &gt;
&gt; &gt; 12/05/2007
&gt; &gt; Martyn,
&gt; &gt;
&gt; &gt; During the installation of 10.1.008, the install script says that
&gt; &gt; glibc
&gt; &gt; 2.6 is supported.
&gt; &gt;
&gt; &gt; --
&gt; &gt; Valmor
&gt; &gt;
&gt; &gt;
&gt; &gt; Thanks for your help.
&gt; &gt;
&gt; &gt; --
&gt; &gt; Valmor
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;&gt; -----Original Message-----
&gt; &gt;&gt; From: users-bounces_at_[hidden]
[mailto:users-bounces_at_[hidden]]
&gt; &gt; On
&gt; &gt;&gt; Behalf Of Jeff Squyres
&gt; &gt;&gt; Sent: Tuesday, December 04, 2007 5:58 PM
&gt; &gt;&gt; To: Open MPI Users
&gt; &gt;&gt; Subject: Re: [OMPI users] suggested intel compiler version for
&gt; &gt; openmpi-
&gt; &gt;&gt; 1.2.4
&gt; &gt;&gt;
&gt; &gt;&gt; I have compiled Open MPI with Intel 10.0 and 9.1 with no problems
on
&gt; &gt;&gt; RHEL4U4.
&gt; &gt;&gt;
&gt; &gt;&gt; Can you send all the info that you can (obviously, ompi_info won't
&gt; &gt;&gt; run) from <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ?
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; On Dec 4, 2007, at 4:26 PM, de Almeida, Valmor F. wrote:
&gt; &gt;&gt;
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; Hello,
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; What is the suggested intel compiler version to compile
&gt; &gt; openmpi-1.2.4?
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; I tried versions 10.1.008 and 9.1.052 and no luck in getting a
&gt; &gt; working
&gt; &gt;&gt;&gt; library. In both cases I get:
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; -&gt;mpic++ --showme
&gt; &gt;&gt;&gt; Segmentation fault
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; -&gt;ompi_info
&gt; &gt;&gt;&gt; Segmentation fault
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; Thanks for your help.
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; --
&gt; &gt;&gt;&gt; Valmor de Almeida
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; --
&gt; &gt;&gt; Jeff Squyres
&gt; &gt;&gt; Cisco Systems
&gt; &gt;&gt; _______________________________________________
&gt; &gt;&gt; users mailing list
&gt; &gt;&gt; users_at_[hidden]
&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; &lt;config.log.bz2&gt;_______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; --
&gt; Jeff Squyres
&gt; Cisco Systems
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4612.php">Jeff Squyres: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="4610.php">Durga Choudhury: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="4607.php">Jeff Squyres: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
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
