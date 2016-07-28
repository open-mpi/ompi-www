<?
$subject_val = "[OMPI devel] wrapper compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 25 05:17:14 2014" -->
<!-- isoreceived="20140225101714" -->
<!-- sent="Tue, 25 Feb 2014 10:17:12 -0000" -->
<!-- isosent="20140225101712" -->
<!-- name="Wolfgang Kallies" -->
<!-- email="w.kallies_at_[hidden]" -->
<!-- subject="[OMPI devel] wrapper compiler" -->
<!-- id="20140225101712.58049.3955_at_magellan1.ze.tum.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] wrapper compiler<br>
<strong>From:</strong> Wolfgang Kallies (<em>w.kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-25 05:17:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] wrapper compiler"</a>
<li><strong>Previous message:</strong> <a href="14222.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] wrapper compiler"</a>
<li><strong>Reply:</strong> <a href="14224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] wrapper compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am currently implementing MPI in a program I use at work.
<br>
<p>The program uses Ipopt and for testing purposes I reduced it to this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program test
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use mpi
<br>
...
<br>
call MPI_INIT(ierrmpi)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD, myid, ierrmpi)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD, numprocs, ierrmpi)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*)'old IDs:',myid,'of process',numprocs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(myid.eq.0)then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*)'new IDs:',myid,'of process',numproc
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
&nbsp;555    call MPI_FINALIZE(ierrmpi)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<p>Using the MPI-Wrapper Compiler I got a result like this:
<br>
<p>&nbsp;old IDs:           0 of process           1
<br>
&nbsp;new IDs:           0 of process           1
<br>
&nbsp;old IDs:           0 of process           1
<br>
&nbsp;new IDs:           0 of process           1
<br>
&nbsp;old IDs:           0 of process           1
<br>
&nbsp;new IDs:           0 of process           1
<br>
&nbsp;old IDs:           0 of process           1
<br>
&nbsp;new IDs:           0 of process           1
<br>
<p>Without the wrapper compiler, setting the flags manually, I get what should be there:
<br>
&nbsp;old IDs:           3 of process           4
<br>
&nbsp;old IDs:           0 of process           4
<br>
&nbsp;new IDs:           0 of process           4
<br>
&nbsp;old IDs:           2 of process           4
<br>
&nbsp;old IDs:           1 of process           4
<br>
<p>I am using Openmpi 1.5.4 with gfortran 4.4.7.
<br>
<p>My new old makefile, that gave me the odd results looked like this:
<br>
<p>EXECUTABLE = octopus
<br>
NEW_FILES =  variables.o test.o readxypulse.o writexypulse.o singlespin_te.o \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rotation.o readoptparam.o OCT2.o dcar2pol.o\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OCT2frprmninit.o OCT2frprmn.o OCT2te.o conv2uni.o\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OCT2grad.o OCT2linmin.o f1dim.o OCT2mnbrak.o brent.o\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;crossproduct.o dpol2car.o readparam.o conv3uni.o\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ranking.o backrotation.o genpulse.o normalize.o\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;convert2bruker.o help.o readtable.o addphase.o\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integrate.o car2pol.o pol2car.o\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ipopt.o
<br>
FC = mpif90
<br>
FFLAGS = -O3 -fomit-frame-pointer -ffixed-line-length-none
<br>
F77LINKFLAGS =  -Wl,--rpath -Wl,/kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build/lib
<br>
IPOPTLIBDIR = ${exec_prefix}/lib/
<br>
exec_prefix = ${prefix}
<br>
prefix = /kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build
<br>
LIBS = -L$(IPOPTLIBDIR) -lipopt -ldl -lcoinmumps -lpthread -lcoinhsl -lcoinlapack -lcoinmetis -lcoinblas -lstdc++ -lm
<br>
<p>all: dummy
<br>
<p>dummy:$(EXECUTABLE)
<br>
<p>toinc=-I`echo /kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build/include/coin`
<br>
<p>$(EXECUTABLE):$(NEW_FILES)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(FC) $(F77LINKFLAGS) $(FFLAGS) $(toinc) -o  $@ $^ $(LIBS)      
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm *.o *.mod
<br>
<p>%.o:%.f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(FC) $(FFLAGS) $(toinc) -c -o $@ $^  
<br>
<p>clean:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm *.o *.mod octopus
<br>
<p>The new one is provided here:
<br>
<p><p>EXECUTABLE = octopus
<br>
NEW_FILES =  variables.o test.o readxypulse.o writexypulse.o singlespin_te.o \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rotation.o readoptparam.o OCT2.o dcar2pol.o\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OCT2frprmninit.o OCT2frprmn.o OCT2te.o conv2uni.o\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OCT2grad.o OCT2linmin.o f1dim.o OCT2mnbrak.o brent.o\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;crossproduct.o dpol2car.o readparam.o conv3uni.o\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ranking.o backrotation.o genpulse.o normalize.o\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;convert2bruker.o help.o readtable.o addphase.o\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integrate.o car2pol.o pol2car.o\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ipopt.o
<br>
FC = gfortran
<br>
FFLAGS = -O3 -ffixed-line-length-none -I/usr/include/openmpi-x86_64 -pthread -m64 -I/usr/lib64/openmpi/lib -L/usr/lib64/openmpi/lib -lmpi_f90 -lmpi_f77 -lmpi -ldl
<br>
F77LINKFLAGS =  -Wl,--rpath -Wl,/kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build/lib
<br>
IPOPTLIBDIR = ${exec_prefix}/lib/
<br>
exec_prefix = ${prefix}
<br>
prefix = /kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build
<br>
LIBS = -L$(IPOPTLIBDIR) -lipopt -ldl -lcoinmumps -lpthread -lcoinhsl -lcoinlapack -lcoinmetis -lcoinblas -lstdc++ -lm
<br>
<p>all: dummy
<br>
<p>dummy:$(EXECUTABLE)
<br>
<p>toinc=-I`echo /kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build/include/coin`
<br>
<p>$(EXECUTABLE):$(NEW_FILES)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(FC) $(F77LINKFLAGS) $(FFLAGS) $(toinc) -o  $@ $^ $(LIBS)      
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm *.o *.mod
<br>
<p>%.o:%.f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(FC) $(FFLAGS) $(toinc) -c -o $@ $^  
<br>
<p>clean:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm *.o *.mod octopus
<br>
<p><p>Is there a reason why I can't use the wrapper compiler?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] wrapper compiler"</a>
<li><strong>Previous message:</strong> <a href="14222.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] wrapper compiler"</a>
<li><strong>Reply:</strong> <a href="14224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] wrapper compiler"</a>
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
