<?
$subject_val = "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 09:59:25 2007" -->
<!-- isoreceived="20071205145925" -->
<!-- sent="Wed, 05 Dec 2007 09:59:14 -0500" -->
<!-- isosent="20071205145914" -->
<!-- name="de Almeida, Valmor F." -->
<!-- email="dealmeidav_at_[hidden]" -->
<!-- subject="Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4" -->
<!-- id="D2D7D9FE2492524A925313E2D82E1B53072774D1_at_ORNLEXCHANGE.ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BA9BF008-2C3A-4724-B2D5-B6A891A18A89_at_cisco.com" -->
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
<strong>Date:</strong> 2007-12-05 09:59:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4598.php">Josh Hursey: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<li><strong>Previous message:</strong> <a href="4596.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast not broadcast to all processes"</a>
<li><strong>In reply to:</strong> <a href="4592.php">Jeff Squyres: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4607.php">Jeff Squyres: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<li><strong>Reply:</strong> <a href="4607.php">Jeff Squyres: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Attached is the config.log file for intel 9.1.052. I've also tried the
<br>
intel 10.1.008 and posted to this list the config.log on a previous
<br>
e-mail (12/2/2007).
<br>
<p>Here are the key commands for building and installing
<br>
<p>export FC=ifort
<br>
&nbsp;export F77=ifort
<br>
&nbsp;export CXX=icpc
<br>
&nbsp;export CC=icc
<br>
<p>./configure --prefix=/usr/local/packages/openmpi-1.2.4_intel-9.1.052
<br>
--with-mpi-param_check=always --with-mpi-f90-size=medium
<br>
--with-f90-max-array-dim=4 CC=icc CXX=icpc F90=ifort F77=ifort
<br>
<p>&nbsp;make -j 2
<br>
&nbsp;make -j 2 install
<br>
<p>Here is some info on my system
<br>
<p>-&gt;emerge --info
<br>
Portage 2.1.3.19 (default-linux/x86/2007.0, gcc-4.1.2, glibc-2.6.1-r0,
<br>
2.6.22.9 i686)
<br>
=================================================================
<br>
System uname: 2.6.22.9 i686 Intel(R) Xeon(TM) CPU 2.66GHz
<br>
Timestamp of tree: Sat, 17 Nov 2007 04:30:01 +0000
<br>
app-shells/bash:     3.2_p17
<br>
dev-java/java-config: 1.3.7, 2.0.33-r1
<br>
dev-lang/python:     2.4.4-r6
<br>
dev-python/pycrypto: 2.0.1-r6
<br>
sys-apps/baselayout: 1.12.9-r2
<br>
sys-apps/sandbox:    1.2.18.1-r2
<br>
sys-devel/autoconf:  2.13, 2.61-r1
<br>
sys-devel/automake:  1.5, 1.6.3, 1.7.9-r1, 1.8.5-r3, 1.9.6-r2, 1.10
<br>
sys-devel/binutils:  2.18-r1
<br>
sys-devel/gcc-config: 1.3.16
<br>
sys-devel/libtool:   1.5.24
<br>
virtual/os-headers:  2.6.22-r2
<br>
<p>Here is 
<br>
<p>-&gt;echo $PATH
<br>
/opt/cubit:/opt/gambit/bin:/opt/compilers/intel/idb/9.1.052/bin:/opt/com
<br>
pilers/intel/fc/9.1.052/bin:/opt/compilers/intel/cc/9.1.052/bin:/usr/loc
<br>
al/nwchem/bin:/usr/local/visit/bin:/usr/local/ompi_intel/bin:/usr/local/
<br>
sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/opt/bin:/usr/i686-pc-
<br>
linux-gnu/gcc-bin/4.1.2:/usr/local/packages/cca-tools-0.6.4_gcc-4.1.2/bi
<br>
n:/usr/bin:/opt/chpl/bin/linux
<br>
<p>Here is
<br>
<p>-&gt;echo $LD_LIBRARY_PATH
<br>
/opt/compilers/intel/fc/9.1.052/lib:/opt/compilers/intel/cc/9.1.052/lib:
<br>
/usr/local/ompi_intel/lib::/usr/local/packages/cca-tools-0.6.4_gcc-4.1.2
<br>
/lib
<br>
<p><p>I am also copying this to the person at Intel who is looking at the
<br>
problem, and here is a posting from the Intel Premier Support (Issue
<br>
number: 461117) for this case
<br>
<p><p>12/04/2007
<br>
Valmor,
<br>
Thanks for your submission. The Intel compilers have supported the 2.6
<br>
Linux kernel for some time now, but they do not yet support glibc 2.6.
<br>
The most recent version of glibc supported is 2.5, as represented by the
<br>
Red Hat Enterprise Linux 5 and Ubuntu 7.04 distributions. There are
<br>
known issues with Ubuntu 7.10, for example, which has a later glibc.
<br>
What version of Gentoo are you using, and do you have the option to try
<br>
an older glibc and gcc along with the Intel compiler version 10.1?
<br>
<p>It's not sure that the glibc version is the problem, so I will try to
<br>
build OpenMPI with glibc 2.5 on Red Hat EL5 or Ubuntu 7.04 to see if
<br>
that shows any problems.
<br>
<p>Regards,
<br>
Martyn
<br>
<p>12/05/2007
<br>
Martyn,
<br>
<p>During the installation of 10.1.008, the install script says that glibc
<br>
2.6 is supported.
<br>
<p><pre>
--
Valmor
Thanks for your help.
--
Valmor
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
On
&gt; Behalf Of Jeff Squyres
&gt; Sent: Tuesday, December 04, 2007 5:58 PM
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] suggested intel compiler version for
openmpi-
&gt; 1.2.4
&gt; 
&gt; I have compiled Open MPI with Intel 10.0 and 9.1 with no problems on
&gt; RHEL4U4.
&gt; 
&gt; Can you send all the info that you can (obviously, ompi_info won't
&gt; run) from <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ?
&gt; 
&gt; 
&gt; 
&gt; On Dec 4, 2007, at 4:26 PM, de Almeida, Valmor F. wrote:
&gt; 
&gt; &gt;
&gt; &gt; Hello,
&gt; &gt;
&gt; &gt; What is the suggested intel compiler version to compile
openmpi-1.2.4?
&gt; &gt;
&gt; &gt; I tried versions 10.1.008 and 9.1.052 and no luck in getting a
working
&gt; &gt; library. In both cases I get:
&gt; &gt;
&gt; &gt; -&gt;mpic++ --showme
&gt; &gt; Segmentation fault
&gt; &gt;
&gt; &gt; -&gt;ompi_info
&gt; &gt; Segmentation fault
&gt; &gt;
&gt; &gt; Thanks for your help.
&gt; &gt;
&gt; &gt; --
&gt; &gt; Valmor de Almeida
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; _______________________________________________
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
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4597/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4598.php">Josh Hursey: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<li><strong>Previous message:</strong> <a href="4596.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast not broadcast to all processes"</a>
<li><strong>In reply to:</strong> <a href="4592.php">Jeff Squyres: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4607.php">Jeff Squyres: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<li><strong>Reply:</strong> <a href="4607.php">Jeff Squyres: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
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
