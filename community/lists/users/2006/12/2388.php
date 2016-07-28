<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec 20 12:05:08 2006" -->
<!-- isoreceived="20061220170508" -->
<!-- sent="Wed, 20 Dec 2006 09:05:03 -0800" -->
<!-- isosent="20061220170503" -->
<!-- name="Andrus, Mr. Brian \(Contractor\)" -->
<!-- email="brian.andrus_at_[hidden]" -->
<!-- subject="[OMPI users] How do I compile OpenMPI with PGI compilers and F90 support?" -->
<!-- id="D392D4803D14354CBC49D772E19DD0CD4564DD_at_zeus.w2k.nrlmry.navy.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="d9b9d95f0612200747j5d582125w9ac7f3be58b796c4_at_mail.gmail.com" -->
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
<strong>From:</strong> Andrus, Mr. Brian \(Contractor\) (<em>brian.andrus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-20 12:05:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2389.php">Jeff Squyres: "Re: [OMPI users] How do I compile OpenMPI with PGI compilers and F90 support?"</a>
<li><strong>Previous message:</strong> <a href="2387.php">Michael Alexander: "[OMPI users] CfP Workshops on Virtualization/XEN in HPC Cluster and Grid Computing"</a>
<li><strong>In reply to:</strong> <a href="2386.php">Renato Golin: "Re: [OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2389.php">Jeff Squyres: "Re: [OMPI users] How do I compile OpenMPI with PGI compilers and F90 support?"</a>
<li><strong>Reply:</strong> <a href="2389.php">Jeff Squyres: "Re: [OMPI users] How do I compile OpenMPI with PGI compilers and F90 support?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to build an OpenMPI rpm for RHEL4U4 using the following:
<br>
<p>rpmbuild --rebuild --define configure_options&quot;CC=pgcc CXX=pgCC F77=pgf77
<br>
FC=pgf90 FFLAGS=-fastsse FCFLAGS=-fastsse&quot; ./openmpi-1.1.1-1.src.rpm
<br>
<p>It builds the rpm but there are some warnings:
<br>
-------------------
<br>
configure: WARNING:  -fno-strict-aliasing has been added to CFLAGS
<br>
configure: WARNING:  -finline-functions has been added to CXXFLAGS
<br>
configure: WARNING: *** Fortran 77 and Fortran 90 compilers are not link
<br>
compatible
<br>
configure: WARNING: *** Disabling MPI Fortran 90/95 bindings
<br>
configure: WARNING: Unknown architecture ... proceeding anyway
<br>
configure: WARNING: File locks may not work with NFS.  See the
<br>
Installation and
<br>
users manual for instructions on testing and if necessary fixing this
<br>
-------------------
<br>
<p>And when I try to compile a simple hello world fortran program:
<br>
<p>[root_at_system ~]# mpif90 hello.f
<br>
------------------------------------------------------------------------
<br>
<pre>
--
Unfortunately, this installation of Open MPI was not compiled with
Fortran 90 support.  As such, the mpif90 compiler is non-functional.
------------------------------------------------------------------------
--
 
I have PGI v6.1 compilers installed at /usr/pgi/linux86-64/6.1/
Help??
Brian Andrus
QSS Group, Inc.
Naval Research Laboratory
Monterey, California
Desk: 831-656-4839
-----Original Message-----
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
Behalf Of Renato Golin
Sent: Wednesday, December 20, 2006 7:48 AM
To: Open MPI Users
Subject: Re: [OMPI users] Suggestions needed for parallelisation of
sortingalgorithms (quicksort)
On 12/20/06, Harakiri &lt;harakiri_23_at_[hidden]&gt; wrote:
&gt; I will study through the suggested paper, however i actually read a 
&gt; different paper which suggested using less messages, i would imagine 
&gt; that for arrays of numbers lets say 100 Millions - the network 
&gt; messages become the critical factor.
IMHO,
It depends completely on your network topology and technology (ie.
bandwidth and latency). It's very hard to predict a generic behaviour
other than: &quot;more data is worse&quot;.
Ethernet is quite good at bandwidth but not at latency so a few big
chunks are better than lots of small chunks but it also depends how the
network is carrying your packages along the way.
The network is a critical factor only if it's running time is comparable
or greater than the processing time. Copying 1Mb between nodes is
critical for a nanosecond computation but not if it'll take days.
cheers,
--renato
Reclaim your digital rights, eliminate DRM, learn more at
<a href="http://www.defectivebydesign.org/what_is_drm">http://www.defectivebydesign.org/what_is_drm</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2389.php">Jeff Squyres: "Re: [OMPI users] How do I compile OpenMPI with PGI compilers and F90 support?"</a>
<li><strong>Previous message:</strong> <a href="2387.php">Michael Alexander: "[OMPI users] CfP Workshops on Virtualization/XEN in HPC Cluster and Grid Computing"</a>
<li><strong>In reply to:</strong> <a href="2386.php">Renato Golin: "Re: [OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2389.php">Jeff Squyres: "Re: [OMPI users] How do I compile OpenMPI with PGI compilers and F90 support?"</a>
<li><strong>Reply:</strong> <a href="2389.php">Jeff Squyres: "Re: [OMPI users] How do I compile OpenMPI with PGI compilers and F90 support?"</a>
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
