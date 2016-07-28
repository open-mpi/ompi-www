<?
$subject_val = "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  1 00:21:35 2014" -->
<!-- isoreceived="20140901042135" -->
<!-- sent="Mon, 01 Sep 2014 13:21:32 +0900" -->
<!-- isosent="20140901042132" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration" -->
<!-- id="5403F44C.8010004_at_iferc.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="OFFFE22B17.8A461D70-ON49257D46.000948C3-49257D46.00098A95_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-01 00:21:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15766.php">Gilles Gouaillardet: "Re: [OMPI devel] about the test_shmem_zero_get.x test from the	openshmem test suite"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15764.php">tmishima_at_[hidden]: "[OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15764.php">tmishima_at_[hidden]: "[OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15768.php">tmishima_at_[hidden]: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<li><strong>Reply:</strong> <a href="15768.php">tmishima_at_[hidden]: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<li><strong>Reply:</strong> <a href="15838.php">tmishima_at_[hidden]: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mishima-san,
<br>
<p>the root cause is macro expansion does not always occur as one would
<br>
have expected ...
<br>
<p>could you please give a try to the attached patch ?
<br>
<p>it compiles (at least with gcc) and i made zero tests so far ....
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/09/01 10:44, tmishima_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to build openmpi-1.8.2 with PGI fortran and -i8(64bit fortran int)
</span><br>
<span class="quotelev1">&gt; option
</span><br>
<span class="quotelev1">&gt; as shown below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure \
</span><br>
<span class="quotelev1">&gt; --prefix=/home/mishima/opt/mpi/openmpi-1.8.2-pgi14.7_int64 \
</span><br>
<span class="quotelev1">&gt; --enable-abi-breaking-fortran-status-i8-fix \
</span><br>
<span class="quotelev1">&gt; --with-tm \
</span><br>
<span class="quotelev1">&gt; --with-verbs \
</span><br>
<span class="quotelev1">&gt; --disable-ipv6 \
</span><br>
<span class="quotelev1">&gt; CC=pgcc CFLAGS=&quot;-tp k8-64e -fast&quot; \
</span><br>
<span class="quotelev1">&gt; CXX=pgCC CXXFLAGS=&quot;-tp k8-64e -fast&quot; \
</span><br>
<span class="quotelev1">&gt; F77=pgfortran FFLAGS=&quot;-i8 -tp k8-64e -fast&quot; \
</span><br>
<span class="quotelev1">&gt; FC=pgfortran FCFLAGS=&quot;-i8 -tp k8-64e -fast&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I saw this compile error in making oshmem at the last stage:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if test ! -r pshmem_real8_swap_f.c ; then \
</span><br>
<span class="quotelev1">&gt;                 pname=`echo pshmem_real8_swap_f.c | cut -b '2-'` ; \
</span><br>
<span class="quotelev1">&gt;                 ln -s ../../../../oshmem/shmem/fortran/$pname
</span><br>
<span class="quotelev1">&gt; pshmem_real8_swap_f.c ; \
</span><br>
<span class="quotelev1">&gt;         fi
</span><br>
<span class="quotelev1">&gt;   CC       pshmem_real8_swap_f.lo
</span><br>
<span class="quotelev1">&gt; if test ! -r pshmem_int4_cswap_f.c ; then \
</span><br>
<span class="quotelev1">&gt;                 pname=`echo pshmem_int4_cswap_f.c | cut -b '2-'` ; \
</span><br>
<span class="quotelev1">&gt;                 ln -s ../../../../oshmem/shmem/fortran/$pname
</span><br>
<span class="quotelev1">&gt; pshmem_int4_cswap_f.c ; \
</span><br>
<span class="quotelev1">&gt;         fi
</span><br>
<span class="quotelev1">&gt;   CC       pshmem_int4_cswap_f.lo
</span><br>
<span class="quotelev1">&gt; PGC-S-0058-Illegal lvalue (pshmem_int4_cswap_f.c: 39)
</span><br>
<span class="quotelev1">&gt; PGC/x86-64 Linux 14.7-0: compilation completed with severe errors
</span><br>
<span class="quotelev1">&gt; make[3]: *** [pshmem_int4_cswap_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/mishima/mis/openmpi/openmpi-pgi14.7/int64/openmpi-1.8.2/oshmem/shmem/fortran/profile'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/mishima/mis/openmpi/openmpi-pgi14.7/int64/openmpi-1.8.2/oshmem/shmem/fortran'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/mishima/mis/openmpi/openmpi-pgi14.7/int64/openmpi-1.8.2/oshmem'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I confirmed that it worked if I added configure option of --disable-oshmem.
</span><br>
<span class="quotelev1">&gt; So, I hope that oshmem experts would fix this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (additional note)
</span><br>
<span class="quotelev1">&gt; I switched to use gnu compiler and checked with this configuration, then
</span><br>
<span class="quotelev1">&gt; I got the same error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure \
</span><br>
<span class="quotelev1">&gt; --prefix=/home/mishima/opt/mpi/openmpi-1.8.2-gnu_int64 \
</span><br>
<span class="quotelev1">&gt; --enable-abi-breaking-fortran-status-i8-fix \
</span><br>
<span class="quotelev1">&gt; --disable-ipv6 \
</span><br>
<span class="quotelev1">&gt; F77=gfortran \
</span><br>
<span class="quotelev1">&gt; FC=gfortran \
</span><br>
<span class="quotelev1">&gt; CC=gcc \
</span><br>
<span class="quotelev1">&gt; CXX=g++ \
</span><br>
<span class="quotelev1">&gt; FFLAGS=&quot;-m64 -fdefault-integer-8&quot; \
</span><br>
<span class="quotelev1">&gt; FCFLAGS=&quot;-m64 -fdefault-integer-8&quot; \
</span><br>
<span class="quotelev1">&gt; CFLAGS=-m64 \
</span><br>
<span class="quotelev1">&gt; CXXFLAGS=-m64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; if test ! -r pshmem_int4_cswap_f.c ; then \
</span><br>
<span class="quotelev1">&gt;                 pname=`echo pshmem_int4_cswap_f.c | cut -b '2-'` ; \
</span><br>
<span class="quotelev1">&gt;                 ln -s ../../../../oshmem/shmem/fortran/$pname
</span><br>
<span class="quotelev1">&gt; pshmem_int4_cswap_f.c ; \
</span><br>
<span class="quotelev1">&gt;         fi
</span><br>
<span class="quotelev1">&gt;   CC       pshmem_int4_cswap_f.lo
</span><br>
<span class="quotelev1">&gt; pshmem_int4_cswap_f.c: In function 'shmem_int4_cswap_f':
</span><br>
<span class="quotelev1">&gt; pshmem_int4_cswap_f.c:39: error: invalid lvalue in unary '&amp;'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [pshmem_int4_cswap_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15764.php">http://www.open-mpi.org/community/lists/devel/2014/08/15764.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15765/oshmem.i8.patch">oshmem.i8.patch</a>
</ul>
<!-- attachment="oshmem.i8.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15766.php">Gilles Gouaillardet: "Re: [OMPI devel] about the test_shmem_zero_get.x test from the	openshmem test suite"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15764.php">tmishima_at_[hidden]: "[OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15764.php">tmishima_at_[hidden]: "[OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15768.php">tmishima_at_[hidden]: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<li><strong>Reply:</strong> <a href="15768.php">tmishima_at_[hidden]: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<li><strong>Reply:</strong> <a href="15838.php">tmishima_at_[hidden]: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
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
