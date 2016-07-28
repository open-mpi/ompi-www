<?
$subject_val = "Re: [OMPI devel] wrapper compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 25 08:25:13 2014" -->
<!-- isoreceived="20140225132513" -->
<!-- sent="Tue, 25 Feb 2014 13:25:11 +0000" -->
<!-- isosent="20140225132511" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] wrapper compiler" -->
<!-- id="8880DAF3-9FBF-495D-9539-07CC3EBF869B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140225101712.58049.3955_at_magellan1.ze.tum.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] wrapper compiler<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-25 08:25:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14225.php">Joshua Ladd: "[OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="14223.php">Wolfgang Kallies: "[OMPI devel] wrapper compiler"</a>
<li><strong>In reply to:</strong> <a href="14223.php">Wolfgang Kallies: "[OMPI devel] wrapper compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a classic symptom of getting the wrong wrapper compiler -- e.g., using an MPICH wrapper compiler but an Open MPI mpirun (or vice versa).  Make sure that your wrapper compiler matches the mpirun that you're using -- e.g., check your PATH and LD_LIBRARY_PATH values.
<br>
<p><p>On Feb 25, 2014, at 5:17 AM, Wolfgang Kallies &lt;w.kallies_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am currently implementing MPI in a program I use at work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program uses Ipopt and for testing purposes I reduced it to this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        program test
</span><br>
<span class="quotelev1">&gt;        use mpi
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; call MPI_INIT(ierrmpi)
</span><br>
<span class="quotelev1">&gt;        call MPI_COMM_RANK(MPI_COMM_WORLD, myid, ierrmpi)
</span><br>
<span class="quotelev1">&gt;        call MPI_COMM_SIZE(MPI_COMM_WORLD, numprocs, ierrmpi)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        write(*,*)'old IDs:',myid,'of process',numprocs
</span><br>
<span class="quotelev1">&gt;        if(myid.eq.0)then
</span><br>
<span class="quotelev1">&gt;        write(*,*)'new IDs:',myid,'of process',numproc
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;        endif
</span><br>
<span class="quotelev1">&gt; 555    call MPI_FINALIZE(ierrmpi)
</span><br>
<span class="quotelev1">&gt;        end
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using the MPI-Wrapper Compiler I got a result like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; old IDs:           0 of process           1
</span><br>
<span class="quotelev1">&gt; new IDs:           0 of process           1
</span><br>
<span class="quotelev1">&gt; old IDs:           0 of process           1
</span><br>
<span class="quotelev1">&gt; new IDs:           0 of process           1
</span><br>
<span class="quotelev1">&gt; old IDs:           0 of process           1
</span><br>
<span class="quotelev1">&gt; new IDs:           0 of process           1
</span><br>
<span class="quotelev1">&gt; old IDs:           0 of process           1
</span><br>
<span class="quotelev1">&gt; new IDs:           0 of process           1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Without the wrapper compiler, setting the flags manually, I get what should be there:
</span><br>
<span class="quotelev1">&gt; old IDs:           3 of process           4
</span><br>
<span class="quotelev1">&gt; old IDs:           0 of process           4
</span><br>
<span class="quotelev1">&gt; new IDs:           0 of process           4
</span><br>
<span class="quotelev1">&gt; old IDs:           2 of process           4
</span><br>
<span class="quotelev1">&gt; old IDs:           1 of process           4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using Openmpi 1.5.4 with gfortran 4.4.7.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My new old makefile, that gave me the odd results looked like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; EXECUTABLE = octopus
</span><br>
<span class="quotelev1">&gt; NEW_FILES =  variables.o test.o readxypulse.o writexypulse.o singlespin_te.o \
</span><br>
<span class="quotelev1">&gt;                rotation.o readoptparam.o OCT2.o dcar2pol.o\
</span><br>
<span class="quotelev1">&gt;                OCT2frprmninit.o OCT2frprmn.o OCT2te.o conv2uni.o\
</span><br>
<span class="quotelev1">&gt;                OCT2grad.o OCT2linmin.o f1dim.o OCT2mnbrak.o brent.o\
</span><br>
<span class="quotelev1">&gt;                crossproduct.o dpol2car.o readparam.o conv3uni.o\
</span><br>
<span class="quotelev1">&gt;                ranking.o backrotation.o genpulse.o normalize.o\
</span><br>
<span class="quotelev1">&gt;                convert2bruker.o help.o readtable.o addphase.o\
</span><br>
<span class="quotelev1">&gt;                integrate.o car2pol.o pol2car.o\
</span><br>
<span class="quotelev1">&gt;                Ipopt.o
</span><br>
<span class="quotelev1">&gt; FC = mpif90
</span><br>
<span class="quotelev1">&gt; FFLAGS = -O3 -fomit-frame-pointer -ffixed-line-length-none
</span><br>
<span class="quotelev1">&gt; F77LINKFLAGS =  -Wl,--rpath -Wl,/kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build/lib
</span><br>
<span class="quotelev1">&gt; IPOPTLIBDIR = ${exec_prefix}/lib/
</span><br>
<span class="quotelev1">&gt; exec_prefix = ${prefix}
</span><br>
<span class="quotelev1">&gt; prefix = /kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build
</span><br>
<span class="quotelev1">&gt; LIBS = -L$(IPOPTLIBDIR) -lipopt -ldl -lcoinmumps -lpthread -lcoinhsl -lcoinlapack -lcoinmetis -lcoinblas -lstdc++ -lm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; all: dummy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; dummy:$(EXECUTABLE)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; toinc=-I`echo /kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build/include/coin`
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $(EXECUTABLE):$(NEW_FILES)
</span><br>
<span class="quotelev1">&gt;        $(FC) $(F77LINKFLAGS) $(FFLAGS) $(toinc) -o  $@ $^ $(LIBS)      
</span><br>
<span class="quotelev1">&gt;        rm *.o *.mod
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; %.o:%.f
</span><br>
<span class="quotelev1">&gt;        $(FC) $(FFLAGS) $(toinc) -c -o $@ $^  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; clean:
</span><br>
<span class="quotelev1">&gt;        rm *.o *.mod octopus
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The new one is provided here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; EXECUTABLE = octopus
</span><br>
<span class="quotelev1">&gt; NEW_FILES =  variables.o test.o readxypulse.o writexypulse.o singlespin_te.o \
</span><br>
<span class="quotelev1">&gt;                rotation.o readoptparam.o OCT2.o dcar2pol.o\
</span><br>
<span class="quotelev1">&gt;                OCT2frprmninit.o OCT2frprmn.o OCT2te.o conv2uni.o\
</span><br>
<span class="quotelev1">&gt;                OCT2grad.o OCT2linmin.o f1dim.o OCT2mnbrak.o brent.o\
</span><br>
<span class="quotelev1">&gt;                crossproduct.o dpol2car.o readparam.o conv3uni.o\
</span><br>
<span class="quotelev1">&gt;                ranking.o backrotation.o genpulse.o normalize.o\
</span><br>
<span class="quotelev1">&gt;                convert2bruker.o help.o readtable.o addphase.o\
</span><br>
<span class="quotelev1">&gt;                integrate.o car2pol.o pol2car.o\
</span><br>
<span class="quotelev1">&gt;                Ipopt.o
</span><br>
<span class="quotelev1">&gt; FC = gfortran
</span><br>
<span class="quotelev1">&gt; FFLAGS = -O3 -ffixed-line-length-none -I/usr/include/openmpi-x86_64 -pthread -m64 -I/usr/lib64/openmpi/lib -L/usr/lib64/openmpi/lib -lmpi_f90 -lmpi_f77 -lmpi -ldl
</span><br>
<span class="quotelev1">&gt; F77LINKFLAGS =  -Wl,--rpath -Wl,/kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build/lib
</span><br>
<span class="quotelev1">&gt; IPOPTLIBDIR = ${exec_prefix}/lib/
</span><br>
<span class="quotelev1">&gt; exec_prefix = ${prefix}
</span><br>
<span class="quotelev1">&gt; prefix = /kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build
</span><br>
<span class="quotelev1">&gt; LIBS = -L$(IPOPTLIBDIR) -lipopt -ldl -lcoinmumps -lpthread -lcoinhsl -lcoinlapack -lcoinmetis -lcoinblas -lstdc++ -lm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; all: dummy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; dummy:$(EXECUTABLE)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; toinc=-I`echo /kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build/include/coin`
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $(EXECUTABLE):$(NEW_FILES)
</span><br>
<span class="quotelev1">&gt;        $(FC) $(F77LINKFLAGS) $(FFLAGS) $(toinc) -o  $@ $^ $(LIBS)      
</span><br>
<span class="quotelev1">&gt;        rm *.o *.mod
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; %.o:%.f
</span><br>
<span class="quotelev1">&gt;        $(FC) $(FFLAGS) $(toinc) -c -o $@ $^  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; clean:
</span><br>
<span class="quotelev1">&gt;        rm *.o *.mod octopus
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a reason why I can't use the wrapper compiler?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14225.php">Joshua Ladd: "[OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="14223.php">Wolfgang Kallies: "[OMPI devel] wrapper compiler"</a>
<li><strong>In reply to:</strong> <a href="14223.php">Wolfgang Kallies: "[OMPI devel] wrapper compiler"</a>
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
