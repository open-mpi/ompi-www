<?
$subject_val = "Re: [OMPI users] Performance: MPICH2 vs OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 15 12:20:28 2008" -->
<!-- isoreceived="20081015162028" -->
<!-- sent="Wed, 15 Oct 2008 11:20:20 -0500" -->
<!-- isosent="20081015162020" -->
<!-- name="Rajeev Thakur" -->
<!-- email="thakur_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance: MPICH2 vs OpenMPI" -->
<!-- id="D2ECC7D0BB1C439DB352B869034B7DE6_at_mcs.anl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.37.1224086442.24927.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance: MPICH2 vs OpenMPI<br>
<strong>From:</strong> Rajeev Thakur (<em>thakur_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-15 12:20:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6993.php">Jeff Squyres: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<li><strong>Previous message:</strong> <a href="6991.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<li><strong>Maybe in reply to:</strong> <a href="6891.php">Sangamesh B: "[OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For MPICH2 1.0.7, configure with --with-device=ch3:nemesis. That will use
<br>
shared memory within a node unlike ch3:sock which uses TCP. Nemesis is the
<br>
default in 1.1a1.
<br>
<p>Rajeev
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; Date: Wed, 15 Oct 2008 18:21:17 +0530
</span><br>
<span class="quotelev1">&gt; From: &quot;Sangamesh B&quot; &lt;forum.san_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Performance: MPICH2 vs OpenMPI
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; 	&lt;cb60cbc40810150551sf26acc6qb1113a289ac9de6e_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 10, 2008 at 10:40 PM, Brian Dobbins 
</span><br>
<span class="quotelev1">&gt; &lt;bdobbins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi guys,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Oct 10, 2008 at 12:57 PM, Brock Palen 
</span><br>
<span class="quotelev1">&gt; &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Actually I had a much differnt results,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; gromacs-3.3.1  one node dual core dual socket opt2218  
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.7
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  pgi/7.2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpich2 gcc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    For some reason, the difference in minutes didn't come 
</span><br>
<span class="quotelev1">&gt; through, it
</span><br>
<span class="quotelev2">&gt; &gt; seems, but I would guess that if it's a medium-large 
</span><br>
<span class="quotelev1">&gt; difference, then it has
</span><br>
<span class="quotelev2">&gt; &gt; its roots in PGI7.2 vs. GCC rather than MPICH2 vs. OpenMPI. 
</span><br>
<span class="quotelev1">&gt;  Though, to be
</span><br>
<span class="quotelev2">&gt; &gt; fair, I find GCC vs. PGI (for C code) is often a toss-up - 
</span><br>
<span class="quotelev1">&gt; one may beat the
</span><br>
<span class="quotelev2">&gt; &gt; other handily on one code, and then lose just as badly on another.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think my install of mpich2 may be bad, I have never 
</span><br>
<span class="quotelev1">&gt; installed it before,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  only mpich1, OpenMPI and LAM. So take my mpich2 numbers 
</span><br>
<span class="quotelev1">&gt; with salt, Lots of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; salt.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   I think the biggest difference in performance with 
</span><br>
<span class="quotelev1">&gt; various MPICH2 install
</span><br>
<span class="quotelev2">&gt; &gt; comes from differences in the 'channel' used..  I tend to 
</span><br>
<span class="quotelev1">&gt; make sure that I
</span><br>
<span class="quotelev2">&gt; &gt; use the 'nemesis' channel, which may or may not be the 
</span><br>
<span class="quotelev1">&gt; default these days.
</span><br>
<span class="quotelev2">&gt; &gt; If not, though, most people would probably want it.  I 
</span><br>
<span class="quotelev1">&gt; think it has issues
</span><br>
<span class="quotelev2">&gt; &gt; with threading (or did ages ago?), but I seem to recall it being
</span><br>
<span class="quotelev2">&gt; &gt; considerably faster than even the 'ssm' channel.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Sangamesh:  My advice to you would be to recompile 
</span><br>
<span class="quotelev1">&gt; Gromacs and specify,
</span><br>
<span class="quotelev2">&gt; &gt; in the *Gromacs* compile / configure, to use the same 
</span><br>
<span class="quotelev1">&gt; CFLAGS you used with
</span><br>
<span class="quotelev2">&gt; &gt; MPICH2.  Eg, &quot;-O2 -m64&quot;, whatever.  If you do that, I bet 
</span><br>
<span class="quotelev1">&gt; the times between
</span><br>
<span class="quotelev2">&gt; &gt; MPICH2 and OpenMPI will be pretty comparable for your 
</span><br>
<span class="quotelev1">&gt; benchmark case -
</span><br>
<span class="quotelev2">&gt; &gt; especially when run on a single processor.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I reinstalled all softwares with -O3 optimization. Following are the
</span><br>
<span class="quotelev1">&gt; performance numbers for a 4 process job on a single node:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPICH2:     26 m 54 s
</span><br>
<span class="quotelev1">&gt; OpenMPI:   24 m 39 s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More details:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ /home/san/PERF_TEST/mpich2/bin/mpich2version
</span><br>
<span class="quotelev1">&gt; MPICH2 Version:         1.0.7
</span><br>
<span class="quotelev1">&gt; MPICH2 Release date:    Unknown, built on Mon Oct 13 18:02:13 IST 2008
</span><br>
<span class="quotelev1">&gt; MPICH2 Device:          ch3:sock
</span><br>
<span class="quotelev1">&gt; MPICH2 configure:       --prefix=/home/san/PERF_TEST/mpich2
</span><br>
<span class="quotelev1">&gt; MPICH2 CC:      /usr/bin/gcc -O3 -O2
</span><br>
<span class="quotelev1">&gt; MPICH2 CXX:     /usr/bin/g++  -O2
</span><br>
<span class="quotelev1">&gt; MPICH2 F77:     /usr/bin/gfortran -O3 -O2
</span><br>
<span class="quotelev1">&gt; MPICH2 F90:     /usr/bin/gfortran  -O2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ /home/san/PERF_TEST/openmpi/bin/ompi_info
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.2.7
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r19401
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.2.7
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r19401
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.2.7
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r19401
</span><br>
<span class="quotelev1">&gt;                   Prefix: /home/san/PERF_TEST/openmpi
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: san
</span><br>
<span class="quotelev1">&gt;            Configured on: Mon Oct 13 19:10:13 IST 2008
</span><br>
<span class="quotelev1">&gt;           Configure host: locuzcluster.org
</span><br>
<span class="quotelev1">&gt;                 Built by: san
</span><br>
<span class="quotelev1">&gt;                 Built on: Mon Oct 13 19:18:25 IST 2008
</span><br>
<span class="quotelev1">&gt;               Built host: locuzcluster.org
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;               C compiler: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sangamesh
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6993.php">Jeff Squyres: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<li><strong>Previous message:</strong> <a href="6991.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<li><strong>Maybe in reply to:</strong> <a href="6891.php">Sangamesh B: "[OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
