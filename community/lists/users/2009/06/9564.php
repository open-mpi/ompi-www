<?
$subject_val = "Re: [OMPI users] What flags for configure for a single	machine	installation ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 10:38:15 2009" -->
<!-- isoreceived="20090608143815" -->
<!-- sent="Mon, 08 Jun 2009 16:38:30 +0200" -->
<!-- isosent="20090608143830" -->
<!-- name="DEVEL Michel" -->
<!-- email="Michel.Devel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What flags for configure for a single	machine	installation ?" -->
<!-- id="4A2D2266.8010006_at_ens2m.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4A29116B.8080406_at_ens2m.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] What flags for configure for a single	machine	installation ?<br>
<strong>From:</strong> DEVEL Michel (<em>Michel.Devel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-08 10:38:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9565.php">tom fogal: "[OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Previous message:</strong> <a href="9563.php">Fran&#231;ois Trahay: "[OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>In reply to:</strong> <a href="9553.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for a single	machine	installation ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9570.php">Terry Frankcombe: "Re: [OMPI users] What flags for configure for a	single	machine	installation ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I have finally succeded to build a static openmpi library for my single
<br>
machine setup + using it to link and execute a code, either with
<br>
gfortran or ifort
<br>
I used
<br>
./configure --prefix=/usr/local --with-sge --enable-static
<br>
--without-openib --without-portals --without-udapl --without-elan
<br>
--without-gm --without-mx  --disable-dlopen
<br>
<p>remark : I have not tried with --without-memory-manager and
<br>
--without-libnuma since it already works like that.
<br>
<p>Then I built my Scalapack code with
<br>
gfortran -m64 -O3 -fPIC -fopenmp -fbounds-check -pthread --static  
<br>
dtype.o modules.o interfaces_sca.o field_sca.o get_param33.o adin33.o
<br>
fillmat33.o lu33.o calpol33.o solve_e033.o t33.o fillpol33.o rotate33.o
<br>
propag33.o init_sca.o distrib_par.o matgen_sca.o lu_sca.o solve_sca.o
<br>
derf.o -o bin/dfield_gfortran_static -L/usr/local/lib -lscalapack
<br>
-lblacsF77 -lblacs -lblacsF77 -I/usr/local/include -L/usr/local/lib
<br>
-lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl -lnsl -lutil -lm
<br>
-ldl /usr/lib64/liblapack.a -L/usr/local/lib -lptcblas -lptf77blas -latlas
<br>
<p>or
<br>
<p>ifort -Bstatic -fast -C -openmp -check noarg_temp_created   dtype.o
<br>
modules.o interfaces_sca.o field_sca.o get_param33.o adin33.o
<br>
fillmat33.o lu33.o calpol33.o solve_e033.o t33.o fillpol33.o rotate33.o
<br>
propag33.o init_sca.o distrib_par.o matgen_sca.o lu_sca.o solve_sca.o
<br>
derf.o -o bin/dfield_ifort_static -lmkl_scalapack_lp64
<br>
-lmkl_blacs_openmpi_lp64 -I/usr/local/include -L/usr/local/lib -lmpi_f90
<br>
-lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl -lnsl -lutil -lm -ldl
<br>
-Wl,--start-group -lmkl_intel_lp64 -lmkl_intel_thread -lmkl_core
<br>
-Wl,--end-group -lguide -lpthread
<br>
<p><pre>
-- 
Sincerely yours,
Michel DEVEL
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9565.php">tom fogal: "[OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Previous message:</strong> <a href="9563.php">Fran&#231;ois Trahay: "[OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>In reply to:</strong> <a href="9553.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for a single	machine	installation ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9570.php">Terry Frankcombe: "Re: [OMPI users] What flags for configure for a	single	machine	installation ?"</a>
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
