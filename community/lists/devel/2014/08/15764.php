<?
$subject_val = "[OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 31 21:44:15 2014" -->
<!-- isoreceived="20140901014415" -->
<!-- sent="Mon, 1 Sep 2014 10:44:10 +0900" -->
<!-- isosent="20140901014410" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration" -->
<!-- id="OFFFE22B17.8A461D70-ON49257D46.000948C3-49257D46.00098A95_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20oshmem-openmpi-1.8.2%20causes%20compile%20error%20with%20-i8(64bit%20fortarn%20integer)%20configuration"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-08-31 21:44:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15765.php">Gilles Gouaillardet: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<li><strong>Previous message:</strong> <a href="15763.php">Ralph Castain: "Re: [OMPI devel] Contributor License Agreement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15765.php">Gilles Gouaillardet: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15765.php">Gilles Gouaillardet: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>
<p>I tried to build openmpi-1.8.2 with PGI fortran and -i8(64bit fortran int)
<br>
option
<br>
as shown below:
<br>
<p>./configure \
<br>
--prefix=/home/mishima/opt/mpi/openmpi-1.8.2-pgi14.7_int64 \
<br>
--enable-abi-breaking-fortran-status-i8-fix \
<br>
--with-tm \
<br>
--with-verbs \
<br>
--disable-ipv6 \
<br>
CC=pgcc CFLAGS=&quot;-tp k8-64e -fast&quot; \
<br>
CXX=pgCC CXXFLAGS=&quot;-tp k8-64e -fast&quot; \
<br>
F77=pgfortran FFLAGS=&quot;-i8 -tp k8-64e -fast&quot; \
<br>
FC=pgfortran FCFLAGS=&quot;-i8 -tp k8-64e -fast&quot;
<br>
<p>Then I saw this compile error in making oshmem at the last stage:
<br>
<p>if test ! -r pshmem_real8_swap_f.c ; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pname=`echo pshmem_real8_swap_f.c | cut -b '2-'` ; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ln -s ../../../../oshmem/shmem/fortran/$pname
<br>
pshmem_real8_swap_f.c ; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;CC       pshmem_real8_swap_f.lo
<br>
if test ! -r pshmem_int4_cswap_f.c ; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pname=`echo pshmem_int4_cswap_f.c | cut -b '2-'` ; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ln -s ../../../../oshmem/shmem/fortran/$pname
<br>
pshmem_int4_cswap_f.c ; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;CC       pshmem_int4_cswap_f.lo
<br>
PGC-S-0058-Illegal lvalue (pshmem_int4_cswap_f.c: 39)
<br>
PGC/x86-64 Linux 14.7-0: compilation completed with severe errors
<br>
make[3]: *** [pshmem_int4_cswap_f.lo] Error 1
<br>
make[3]: Leaving directory
<br>
`/home/mishima/mis/openmpi/openmpi-pgi14.7/int64/openmpi-1.8.2/oshmem/shmem/fortran/profile'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/mishima/mis/openmpi/openmpi-pgi14.7/int64/openmpi-1.8.2/oshmem/shmem/fortran'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/home/mishima/mis/openmpi/openmpi-pgi14.7/int64/openmpi-1.8.2/oshmem'
<br>
make: *** [all-recursive] Error 1
<br>
<p>I confirmed that it worked if I added configure option of --disable-oshmem.
<br>
So, I hope that oshmem experts would fix this problem.
<br>
<p>(additional note)
<br>
I switched to use gnu compiler and checked with this configuration, then
<br>
I got the same error:
<br>
<p>./configure \
<br>
--prefix=/home/mishima/opt/mpi/openmpi-1.8.2-gnu_int64 \
<br>
--enable-abi-breaking-fortran-status-i8-fix \
<br>
--disable-ipv6 \
<br>
F77=gfortran \
<br>
FC=gfortran \
<br>
CC=gcc \
<br>
CXX=g++ \
<br>
FFLAGS=&quot;-m64 -fdefault-integer-8&quot; \
<br>
FCFLAGS=&quot;-m64 -fdefault-integer-8&quot; \
<br>
CFLAGS=-m64 \
<br>
CXXFLAGS=-m64
<br>
<p>make
<br>
....
<br>
if test ! -r pshmem_int4_cswap_f.c ; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pname=`echo pshmem_int4_cswap_f.c | cut -b '2-'` ; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ln -s ../../../../oshmem/shmem/fortran/$pname
<br>
pshmem_int4_cswap_f.c ; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;CC       pshmem_int4_cswap_f.lo
<br>
pshmem_int4_cswap_f.c: In function 'shmem_int4_cswap_f':
<br>
pshmem_int4_cswap_f.c:39: error: invalid lvalue in unary '&amp;'
<br>
make[3]: *** [pshmem_int4_cswap_f.lo] Error 1
<br>
<p>Regards
<br>
Tetsuya Mishima
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15765.php">Gilles Gouaillardet: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<li><strong>Previous message:</strong> <a href="15763.php">Ralph Castain: "Re: [OMPI devel] Contributor License Agreement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15765.php">Gilles Gouaillardet: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15765.php">Gilles Gouaillardet: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
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
