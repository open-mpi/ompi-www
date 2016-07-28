<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec 20 13:54:35 2006" -->
<!-- isoreceived="20061220185435" -->
<!-- sent="Wed, 20 Dec 2006 10:54:28 -0800" -->
<!-- isosent="20061220185428" -->
<!-- name="Andrus, Mr. Brian \(Contractor\)" -->
<!-- email="brian.andrus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I compile OpenMPI with PGI compilers andF90 support?" -->
<!-- id="D392D4803D14354CBC49D772E19DD0CD4564DE_at_zeus.w2k.nrlmry.navy.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49BFC3EB-46FE-416E-905C-52CDC3A97E4E_at_cisco.com" -->
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
<strong>Date:</strong> 2006-12-20 13:54:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2391.php">Michael John Hanby: "[OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<li><strong>Previous message:</strong> <a href="2389.php">Jeff Squyres: "Re: [OMPI users] How do I compile OpenMPI with PGI compilers and F90 support?"</a>
<li><strong>In reply to:</strong> <a href="2389.php">Jeff Squyres: "Re: [OMPI users] How do I compile OpenMPI with PGI compilers and F90 support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2393.php">Jeff Squyres: "Re: [OMPI users] How do I compile OpenMPI with PGI compilers andF90 support?"</a>
<li><strong>Reply:</strong> <a href="2393.php">Jeff Squyres: "Re: [OMPI users] How do I compile OpenMPI with PGI compilers andF90 support?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Thanks for the info.
<br>
I downloaded the newer stable (1.1.2-1) and have tried it with the same
<br>
results.
<br>
Since I am trying to use the rpm source, everything comes out in one
<br>
output file.
<br>
<p>I have compressed and attached it.
<br>
<p>Brian Andrus
<br>
QSS Group, Inc.
<br>
Naval Research Laboratory
<br>
Monterey, California
<br>
Desk: 831-656-4839
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: Wednesday, December 20, 2006 9:48 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] How do I compile OpenMPI with PGI compilers
<br>
andF90 support?
<br>
<p>Can you send the full output from configure and config.log?  See this
<br>
page for details of what we need for compile failures:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>Also note that there is a slightly newer version than what you're trying
<br>
--  v1.1.2 (1.1.3 may actually be out shortly, too).
<br>
<p>Note that our servers will be offline several hours tomorrow morning for
<br>
planned maintence (it's that time of year), so be sure to look on the
<br>
web site today or after tomorrow morning.
<br>
<p><p><p>On Dec 20, 2006, at 12:05 PM, Andrus, Mr. Brian ((Contractor)) wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to build an OpenMPI rpm for RHEL4U4 using the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rpmbuild --rebuild --define configure_options&quot;CC=pgcc CXX=pgCC
</span><br>
<span class="quotelev1">&gt; F77=pgf77
</span><br>
<span class="quotelev1">&gt; FC=pgf90 FFLAGS=-fastsse FCFLAGS=-fastsse&quot; ./openmpi-1.1.1-1.src.rpm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It builds the rpm but there are some warnings:
</span><br>
<span class="quotelev1">&gt; -------------------
</span><br>
<span class="quotelev1">&gt; configure: WARNING:  -fno-strict-aliasing has been added to CFLAGS
</span><br>
<span class="quotelev1">&gt; configure: WARNING:  -finline-functions has been added to CXXFLAGS
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Fortran 77 and Fortran 90 compilers are not 
</span><br>
<span class="quotelev1">&gt; link compatible
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Disabling MPI Fortran 90/95 bindings
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Unknown architecture ... proceeding anyway
</span><br>
<span class="quotelev1">&gt; configure: WARNING: File locks may not work with NFS.  See the 
</span><br>
<span class="quotelev1">&gt; Installation and users manual for instructions on testing and if 
</span><br>
<span class="quotelev1">&gt; necessary fixing this
</span><br>
<span class="quotelev1">&gt; -------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And when I try to compile a simple hello world fortran program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_system ~]# mpif90 hello.f
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Unfortunately, this installation of Open MPI was not compiled with 
</span><br>
<span class="quotelev1">&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have PGI v6.1 compilers installed at /usr/pgi/linux86-64/6.1/ Help??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Andrus
</span><br>
<span class="quotelev1">&gt; QSS Group, Inc.
</span><br>
<span class="quotelev1">&gt; Naval Research Laboratory
</span><br>
<span class="quotelev1">&gt; Monterey, California
</span><br>
<span class="quotelev1">&gt; Desk: 831-656-4839
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open- mpi.org] 
</span><br>
<span class="quotelev1">&gt; On Behalf Of Renato Golin
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, December 20, 2006 7:48 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Suggestions needed for parallelisation of 
</span><br>
<span class="quotelev1">&gt; sortingalgorithms (quicksort)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/20/06, Harakiri &lt;harakiri_23_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I will study through the suggested paper, however i actually read a 
</span><br>
<span class="quotelev2">&gt;&gt; different paper which suggested using less messages, i would imagine 
</span><br>
<span class="quotelev2">&gt;&gt; that for arrays of numbers lets say 100 Millions - the network 
</span><br>
<span class="quotelev2">&gt;&gt; messages become the critical factor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMHO,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It depends completely on your network topology and technology (ie.
</span><br>
<span class="quotelev1">&gt; bandwidth and latency). It's very hard to predict a generic behaviour 
</span><br>
<span class="quotelev1">&gt; other than: &quot;more data is worse&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ethernet is quite good at bandwidth but not at latency so a few big 
</span><br>
<span class="quotelev1">&gt; chunks are better than lots of small chunks but it also depends how 
</span><br>
<span class="quotelev1">&gt; the network is carrying your packages along the way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The network is a critical factor only if it's running time is 
</span><br>
<span class="quotelev1">&gt; comparable or greater than the processing time. Copying 1Mb between 
</span><br>
<span class="quotelev1">&gt; nodes is critical for a nanosecond computation but not if it'll take 
</span><br>
<span class="quotelev1">&gt; days.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; --renato
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Reclaim your digital rights, eliminate DRM, learn more at 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.defectivebydesign.org/what_is_drm">http://www.defectivebydesign.org/what_is_drm</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
Server Virtualization Business Unit
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

</pre>
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2390/compile.out.gz">compile.out.gz</a>
</ul>
<!-- attachment="compile.out.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2391.php">Michael John Hanby: "[OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<li><strong>Previous message:</strong> <a href="2389.php">Jeff Squyres: "Re: [OMPI users] How do I compile OpenMPI with PGI compilers and F90 support?"</a>
<li><strong>In reply to:</strong> <a href="2389.php">Jeff Squyres: "Re: [OMPI users] How do I compile OpenMPI with PGI compilers and F90 support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2393.php">Jeff Squyres: "Re: [OMPI users] How do I compile OpenMPI with PGI compilers andF90 support?"</a>
<li><strong>Reply:</strong> <a href="2393.php">Jeff Squyres: "Re: [OMPI users] How do I compile OpenMPI with PGI compilers andF90 support?"</a>
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
