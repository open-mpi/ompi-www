<?
$subject_val = "[OMPI users] Fortran MPI module and gfortran";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 30 14:43:44 2014" -->
<!-- isoreceived="20140330184344" -->
<!-- sent="Sun, 30 Mar 2014 11:43:41 -0700" -->
<!-- isosent="20140330184341" -->
<!-- name="W Spector" -->
<!-- email="w6ws_at_[hidden]" -->
<!-- subject="[OMPI users] Fortran MPI module and gfortran" -->
<!-- id="533865DD.7020106_at_earthlink.net" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Fortran MPI module and gfortran<br>
<strong>From:</strong> W Spector (<em>w6ws_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-30 14:43:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24020.php">Ralph Castain: "Re: [OMPI users] Fortran MPI module and gfortran"</a>
<li><strong>Previous message:</strong> <a href="24018.php">Ralph Castain: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24020.php">Ralph Castain: "Re: [OMPI users] Fortran MPI module and gfortran"</a>
<li><strong>Reply:</strong> <a href="24020.php">Ralph Castain: "Re: [OMPI users] Fortran MPI module and gfortran"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24092.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran MPI module and gfortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The mpi.mod file that is created from both the openmpi-1.7.4 and 
<br>
openmpi-1.8rc1 tarballs does not seem to be generating interface blocks 
<br>
for the Fortran API - whether the calls use choice buffers or not.
<br>
<p>I initially tried the default gfortran on my system - 4.7.2.  The 
<br>
configure commands are:
<br>
<p>export CC=gcc
<br>
export CXX=g++
<br>
export FC=gfortran
<br>
export F90=gfortran
<br>
./configure --prefix=/home/wws/openmpi_gfortran  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-fortran --enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpirun-prefix-by-default  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2&gt;&amp;1 | tee config.gfortran.out
<br>
<p>The relevant configure output reads:
<br>
<p>....
<br>
checking if building Fortran mpif.h bindings... yes
<br>
checking for Fortran compiler module include flag... -I
<br>
checking Fortran compiler ignore TKR syntax... not cached; checking variants
<br>
checking for Fortran compiler support of TYPE(*), DIMENSION(*)... no
<br>
checking for Fortran compiler support of !DEC$ ATTRIBUTES NO_ARG_CHECK... no
<br>
checking for Fortran compiler support of !$PRAGMA IGNORE_TKR... no
<br>
checking for Fortran compiler support of !DIR$ IGNORE_TKR... no
<br>
checking for Fortran compiler support of !IBM* IGNORE_TKR... no
<br>
checking Fortran compiler ignore TKR syntax... 0:real:!
<br>
checking if building Fortran 'use mpi' bindings... yes
<br>
checking if building Fortran 'use mpi_f08' bindings... no
<br>
....
<br>
<p>I have also tried using a version of the 4.9 trunk that I generated from 
<br>
a March 18th, 2014 snapshot of the gcc trunk.  This latter compiler 
<br>
supports some of the TS 29 features.  (I set the latter by setting PATH 
<br>
to find the 4.9 compilers first.  I also set the F90 and FC environment 
<br>
variables to point to the 4.9 compiler.)
<br>
<p>make clean
<br>
export PATH=/usr/local/gcc-trunk/bin:$PATH
<br>
export CC=gcc
<br>
export CXX=g++
<br>
export FC=/usr/local/gcc-trunk/bin/gfortran
<br>
export F90=/usr/local/gcc-trunk/bin/gfortran
<br>
./configure --prefix=/home/wws/openmpi_gfortran49  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-fortran --enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpirun-prefix-by-default  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2&gt;&amp;1 | tee config.gfortran49.out
<br>
<p>The configure output is identical to the 4.7 compiler.  Note that it did 
<br>
NOT recognize that gfortran now supports the !GCC$ ATTRIBUTE 
<br>
NO_ARG_CHECK directive, nor did it recognize that gfortran also accepts 
<br>
'TYPE(*), DIMENSION(*)'.
<br>
<p>I have also verified with strace that the proper mpi.mod file is being 
<br>
accessed when I am trying to USE the mpi module.
<br>
<p>I have not dug into the openmpi code yet.  Just wondering if this is a 
<br>
known problem before I start?  Or did I do something wrong during configure?
<br>
<p>Walter Spector
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24020.php">Ralph Castain: "Re: [OMPI users] Fortran MPI module and gfortran"</a>
<li><strong>Previous message:</strong> <a href="24018.php">Ralph Castain: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24020.php">Ralph Castain: "Re: [OMPI users] Fortran MPI module and gfortran"</a>
<li><strong>Reply:</strong> <a href="24020.php">Ralph Castain: "Re: [OMPI users] Fortran MPI module and gfortran"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24092.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran MPI module and gfortran"</a>
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
