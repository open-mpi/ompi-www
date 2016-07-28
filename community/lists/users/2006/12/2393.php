<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec 20 19:43:30 2006" -->
<!-- isoreceived="20061221004330" -->
<!-- sent="Wed, 20 Dec 2006 19:43:14 -0500" -->
<!-- isosent="20061221004314" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I compile OpenMPI with PGI compilers andF90 support?" -->
<!-- id="CB5D04B0-F261-49A1-8130-227ED95C5A2D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D392D4803D14354CBC49D772E19DD0CD4564DE_at_zeus.w2k.nrlmry.navy.mil" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-20 19:43:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2394.php">Andrew J Caird: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you proveto me that OpenMPI is using it?&quot;"</a>
<li><strong>Previous message:</strong> <a href="2392.php">Jeff Squyres: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<li><strong>In reply to:</strong> <a href="2390.php">Andrus, Mr. Brian \(Contractor\): "Re: [OMPI users] How do I compile OpenMPI with PGI compilers andF90 support?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 20, 2006, at 1:54 PM, Andrus, Mr. Brian ((Contractor)) wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the info.
</span><br>
<span class="quotelev1">&gt; I downloaded the newer stable (1.1.2-1) and have tried it with the  
</span><br>
<span class="quotelev1">&gt; same
</span><br>
<span class="quotelev1">&gt; results.
</span><br>
<span class="quotelev1">&gt; Since I am trying to use the rpm source, everything comes out in one
</span><br>
<span class="quotelev1">&gt; output file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have compressed and attached it.
</span><br>
<p>That works.
<br>
<p>The problem appears to be that configure is finding g77 for your  
<br>
Fortran compiler and pgf90 for your F90 compiler.  Since they're not  
<br>
link compatible, it takes the most conservative approach and goes  
<br>
ahead and compiles f77 support but disables f90 support.  Hence, the  
<br>
messages you see from mpif90.
<br>
<p>I think the problem is how you're invoking rpmbuild, specifically the  
<br>
--define parameter.  Try the following (not the spacing an quoting):
<br>
<p>shell$ rpmbuild --rebuild --define &quot;configure_options CC=pgcc \
<br>
CXX=pgCC F77=pgf77 FC=pgf90 FFLAGS=-fastsse FCFLAGS=-fastsse&quot; \
<br>
./openmpi-1.1.1-1.src.rpm
<br>
<p>(I artificially wrapped with \ characters so that the mail wouldn't  
<br>
look weird)
<br>
<p>Specifically, the token &quot;configure_options&quot; needs to appear in the  
<br>
same command line argument as its value (it's a weird RPM-ism).  So  
<br>
the whole string needs to be quoted together, and have a single space  
<br>
between the token &quot;configure_options&quot; and the value (&quot;CC=pgcc  
<br>
CXX=....&quot;).
<br>
<p><p><span class="quotelev1">&gt; Brian Andrus
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
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, December 20, 2006 9:48 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How do I compile OpenMPI with PGI compilers
</span><br>
<span class="quotelev1">&gt; andF90 support?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send the full output from configure and config.log?  See this
</span><br>
<span class="quotelev1">&gt; page for details of what we need for compile failures:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also note that there is a slightly newer version than what you're  
</span><br>
<span class="quotelev1">&gt; trying
</span><br>
<span class="quotelev1">&gt; --  v1.1.2 (1.1.3 may actually be out shortly, too).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that our servers will be offline several hours tomorrow  
</span><br>
<span class="quotelev1">&gt; morning for
</span><br>
<span class="quotelev1">&gt; planned maintence (it's that time of year), so be sure to look on the
</span><br>
<span class="quotelev1">&gt; web site today or after tomorrow morning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 20, 2006, at 12:05 PM, Andrus, Mr. Brian ((Contractor)) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to build an OpenMPI rpm for RHEL4U4 using the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rpmbuild --rebuild --define configure_options&quot;CC=pgcc CXX=pgCC
</span><br>
<span class="quotelev2">&gt;&gt; F77=pgf77
</span><br>
<span class="quotelev2">&gt;&gt; FC=pgf90 FFLAGS=-fastsse FCFLAGS=-fastsse&quot; ./openmpi-1.1.1-1.src.rpm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It builds the rpm but there are some warnings:
</span><br>
<span class="quotelev2">&gt;&gt; -------------------
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING:  -fno-strict-aliasing has been added to CFLAGS
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING:  -finline-functions has been added to CXXFLAGS
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** Fortran 77 and Fortran 90 compilers are not
</span><br>
<span class="quotelev2">&gt;&gt; link compatible
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** Disabling MPI Fortran 90/95 bindings
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: Unknown architecture ... proceeding anyway
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: File locks may not work with NFS.  See the
</span><br>
<span class="quotelev2">&gt;&gt; Installation and users manual for instructions on testing and if
</span><br>
<span class="quotelev2">&gt;&gt; necessary fixing this
</span><br>
<span class="quotelev2">&gt;&gt; -------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And when I try to compile a simple hello world fortran program:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_system ~]# mpif90 hello.f
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev2">&gt;&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have PGI v6.1 compilers installed at /usr/pgi/linux86-64/6.1/  
</span><br>
<span class="quotelev2">&gt;&gt; Help??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian Andrus
</span><br>
<span class="quotelev2">&gt;&gt; QSS Group, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; Naval Research Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; Monterey, California
</span><br>
<span class="quotelev2">&gt;&gt; Desk: 831-656-4839
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open- mpi.org]
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Renato Golin
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, December 20, 2006 7:48 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Suggestions needed for parallelisation of
</span><br>
<span class="quotelev2">&gt;&gt; sortingalgorithms (quicksort)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 12/20/06, Harakiri &lt;harakiri_23_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will study through the suggested paper, however i actually read a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different paper which suggested using less messages, i would imagine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that for arrays of numbers lets say 100 Millions - the network
</span><br>
<span class="quotelev3">&gt;&gt;&gt; messages become the critical factor.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IMHO,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It depends completely on your network topology and technology (ie.
</span><br>
<span class="quotelev2">&gt;&gt; bandwidth and latency). It's very hard to predict a generic behaviour
</span><br>
<span class="quotelev2">&gt;&gt; other than: &quot;more data is worse&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ethernet is quite good at bandwidth but not at latency so a few big
</span><br>
<span class="quotelev2">&gt;&gt; chunks are better than lots of small chunks but it also depends how
</span><br>
<span class="quotelev2">&gt;&gt; the network is carrying your packages along the way.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The network is a critical factor only if it's running time is
</span><br>
<span class="quotelev2">&gt;&gt; comparable or greater than the processing time. Copying 1Mb between
</span><br>
<span class="quotelev2">&gt;&gt; nodes is critical for a nanosecond computation but not if it'll take
</span><br>
<span class="quotelev2">&gt;&gt; days.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cheers,
</span><br>
<span class="quotelev2">&gt;&gt; --renato
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reclaim your digital rights, eliminate DRM, learn more at
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.defectivebydesign.org/what_is_drm">http://www.defectivebydesign.org/what_is_drm</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt; &lt;compile.out.gz&gt;
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2394.php">Andrew J Caird: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you proveto me that OpenMPI is using it?&quot;"</a>
<li><strong>Previous message:</strong> <a href="2392.php">Jeff Squyres: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<li><strong>In reply to:</strong> <a href="2390.php">Andrus, Mr. Brian \(Contractor\): "Re: [OMPI users] How do I compile OpenMPI with PGI compilers andF90 support?"</a>
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
