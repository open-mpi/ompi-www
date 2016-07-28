<?
$subject_val = "Re: [OMPI users] Fortran MPI module and gfortran";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 30 16:00:14 2014" -->
<!-- isoreceived="20140330200014" -->
<!-- sent="Sun, 30 Mar 2014 12:59:59 -0700" -->
<!-- isosent="20140330195959" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran MPI module and gfortran" -->
<!-- id="1B036048-8CD3-4781-BC11-B89F005D8C1D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="533865DD.7020106_at_earthlink.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran MPI module and gfortran<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-30 15:59:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24021.php">Hamid Saeed: "Re: [OMPI users] problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="24019.php">W Spector: "[OMPI users] Fortran MPI module and gfortran"</a>
<li><strong>In reply to:</strong> <a href="24019.php">W Spector: "[OMPI users] Fortran MPI module and gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24092.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran MPI module and gfortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, Jeff just went on vacation for a week, so we won't be able to address this right away. I know he spent a bunch of time making sure everything worked okay with gfortran, so I expect there is something odd in the setup - but I'm afraid I don't know all the details
<br>
<p><p>On Mar 30, 2014, at 11:43 AM, W Spector &lt;w6ws_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The mpi.mod file that is created from both the openmpi-1.7.4 and openmpi-1.8rc1 tarballs does not seem to be generating interface blocks for the Fortran API - whether the calls use choice buffers or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I initially tried the default gfortran on my system - 4.7.2.  The configure commands are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export CC=gcc
</span><br>
<span class="quotelev1">&gt; export CXX=g++
</span><br>
<span class="quotelev1">&gt; export FC=gfortran
</span><br>
<span class="quotelev1">&gt; export F90=gfortran
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/wws/openmpi_gfortran  \
</span><br>
<span class="quotelev1">&gt;    --enable-mpi-fortran --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;    --enable-mpirun-prefix-by-default  \
</span><br>
<span class="quotelev1">&gt;    2&gt;&amp;1 | tee config.gfortran.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The relevant configure output reads:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; checking if building Fortran mpif.h bindings... yes
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler module include flag... -I
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler ignore TKR syntax... not cached; checking variants
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of TYPE(*), DIMENSION(*)... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !DEC$ ATTRIBUTES NO_ARG_CHECK... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !$PRAGMA IGNORE_TKR... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !DIR$ IGNORE_TKR... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !IBM* IGNORE_TKR... no
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler ignore TKR syntax... 0:real:!
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi' bindings... yes
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi_f08' bindings... no
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have also tried using a version of the 4.9 trunk that I generated from a March 18th, 2014 snapshot of the gcc trunk.  This latter compiler supports some of the TS 29 features.  (I set the latter by setting PATH to find the 4.9 compilers first.  I also set the F90 and FC environment variables to point to the 4.9 compiler.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make clean
</span><br>
<span class="quotelev1">&gt; export PATH=/usr/local/gcc-trunk/bin:$PATH
</span><br>
<span class="quotelev1">&gt; export CC=gcc
</span><br>
<span class="quotelev1">&gt; export CXX=g++
</span><br>
<span class="quotelev1">&gt; export FC=/usr/local/gcc-trunk/bin/gfortran
</span><br>
<span class="quotelev1">&gt; export F90=/usr/local/gcc-trunk/bin/gfortran
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/wws/openmpi_gfortran49  \
</span><br>
<span class="quotelev1">&gt;    --enable-mpi-fortran --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;    --enable-mpirun-prefix-by-default  \
</span><br>
<span class="quotelev1">&gt;    2&gt;&amp;1 | tee config.gfortran49.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The configure output is identical to the 4.7 compiler.  Note that it did NOT recognize that gfortran now supports the !GCC$ ATTRIBUTE NO_ARG_CHECK directive, nor did it recognize that gfortran also accepts 'TYPE(*), DIMENSION(*)'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have also verified with strace that the proper mpi.mod file is being accessed when I am trying to USE the mpi module.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have not dug into the openmpi code yet.  Just wondering if this is a known problem before I start?  Or did I do something wrong during configure?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Walter Spector
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24021.php">Hamid Saeed: "Re: [OMPI users] problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="24019.php">W Spector: "[OMPI users] Fortran MPI module and gfortran"</a>
<li><strong>In reply to:</strong> <a href="24019.php">W Spector: "[OMPI users] Fortran MPI module and gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24092.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran MPI module and gfortran"</a>
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
