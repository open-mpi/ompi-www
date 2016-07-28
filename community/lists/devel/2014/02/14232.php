<?
$subject_val = "Re: [OMPI devel] devel Digest, Vol 2631, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 26 03:44:22 2014" -->
<!-- isoreceived="20140226084422" -->
<!-- sent="Wed, 26 Feb 2014 08:44:18 -0000" -->
<!-- isosent="20140226084418" -->
<!-- name="Wolfgang Kallies" -->
<!-- email="w.kallies_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] devel Digest, Vol 2631, Issue 1" -->
<!-- id="20140226084418.57034.58331_at_magellan1.ze.tum.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.3.1393347602.10042.devel_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] devel Digest, Vol 2631, Issue 1<br>
<strong>From:</strong> Wolfgang Kallies (<em>w.kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-26 03:44:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14233.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] devel Digest, Vol 2631, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="14231.php">Joshua Ladd: "Re: [OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14233.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] devel Digest, Vol 2631, Issue 1"</a>
<li><strong>Reply:</strong> <a href="14233.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] devel Digest, Vol 2631, Issue 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had this kind of problem before, so I already checked that. The wrapper compiler
<br>
and mpirun match.
<br>
<p>A very simple testprogram that I used gave me this result:
<br>
<p>Total sum:   0.0000000000000000      id           1
<br>
&nbsp;Total sum:   1014.1131933453868      id           0
<br>
&nbsp;Total sum:   0.0000000000000000      id           2
<br>
&nbsp;Total sum:   0.0000000000000000      id           3
<br>
<p>the makefile is appended:
<br>
<p><p>targ=output
<br>
sources=variables.o mpitest.o
<br>
cc=mpif90
<br>
flag=
<br>
all: dummy
<br>
<p>dummy: $(targ)
<br>
<p>$(targ): $(sources)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(cc) $(flag) -o $(target) $@ $^  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm *.o
<br>
<p>%.o: %.f90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(cc) -c -o $@ $^ $(flag)
<br>
<p>It uses the same mpirun as well as the same wrapper
<br>
compiler as the previous example.
<br>
<p>(Admittedly I had the problem of mismatching mpirun
<br>
and wrapper compiler before, so this testprogram
<br>
used to give me a similar result,
<br>
but after fiddling around for a forenoon, 
<br>
I solved this already.)
<br>
<p>devel-request_at_[hidden] wrote:
<br>
<p><p><span class="quotelev1">&gt; Send devel mailing list submissions to
</span><br>
<span class="quotelev1">&gt; 	devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt; 	<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt; 	devel-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt; 	devel-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of devel digest...&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    1. wrapper compiler (Wolfgang Kallies)
</span><br>
<span class="quotelev1">&gt;    2. Re: wrapper compiler (Jeff Squyres (jsquyres))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Tue, 25 Feb 2014 10:17:12 -0000
</span><br>
<span class="quotelev1">&gt; From: &quot;Wolfgang Kallies&quot; &lt;w.kallies_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] wrapper compiler
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;20140225101712.58049.3955_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
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
<span class="quotelev1">&gt;         program test
</span><br>
<span class="quotelev1">&gt;         use mpi
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; call MPI_INIT(ierrmpi)
</span><br>
<span class="quotelev1">&gt;         call MPI_COMM_RANK(MPI_COMM_WORLD, myid, ierrmpi)
</span><br>
<span class="quotelev1">&gt;         call MPI_COMM_SIZE(MPI_COMM_WORLD, numprocs, ierrmpi)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         write(*,*)'old IDs:',myid,'of process',numprocs
</span><br>
<span class="quotelev1">&gt;         if(myid.eq.0)then
</span><br>
<span class="quotelev1">&gt;         write(*,*)'new IDs:',myid,'of process',numproc
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;         endif
</span><br>
<span class="quotelev1">&gt;  555    call MPI_FINALIZE(ierrmpi)
</span><br>
<span class="quotelev1">&gt;         end
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using the MPI-Wrapper Compiler I got a result like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  old IDs:           0 of process           1
</span><br>
<span class="quotelev1">&gt;  new IDs:           0 of process           1
</span><br>
<span class="quotelev1">&gt;  old IDs:           0 of process           1
</span><br>
<span class="quotelev1">&gt;  new IDs:           0 of process           1
</span><br>
<span class="quotelev1">&gt;  old IDs:           0 of process           1
</span><br>
<span class="quotelev1">&gt;  new IDs:           0 of process           1
</span><br>
<span class="quotelev1">&gt;  old IDs:           0 of process           1
</span><br>
<span class="quotelev1">&gt;  new IDs:           0 of process           1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Without the wrapper compiler, setting the flags manually, I get what should be there:
</span><br>
<span class="quotelev1">&gt;  old IDs:           3 of process           4
</span><br>
<span class="quotelev1">&gt;  old IDs:           0 of process           4
</span><br>
<span class="quotelev1">&gt;  new IDs:           0 of process           4
</span><br>
<span class="quotelev1">&gt;  old IDs:           2 of process           4
</span><br>
<span class="quotelev1">&gt;  old IDs:           1 of process           4
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
<span class="quotelev1">&gt;                 rotation.o readoptparam.o OCT2.o dcar2pol.o\
</span><br>
<span class="quotelev1">&gt;                 OCT2frprmninit.o OCT2frprmn.o OCT2te.o conv2uni.o\
</span><br>
<span class="quotelev1">&gt;                 OCT2grad.o OCT2linmin.o f1dim.o OCT2mnbrak.o brent.o\
</span><br>
<span class="quotelev1">&gt;                 crossproduct.o dpol2car.o readparam.o conv3uni.o\
</span><br>
<span class="quotelev1">&gt;                 ranking.o backrotation.o genpulse.o normalize.o\
</span><br>
<span class="quotelev1">&gt;                 convert2bruker.o help.o readtable.o addphase.o\
</span><br>
<span class="quotelev1">&gt;                 integrate.o car2pol.o pol2car.o\
</span><br>
<span class="quotelev1">&gt;                 Ipopt.o
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
<span class="quotelev1">&gt;         $(FC) $(F77LINKFLAGS) $(FFLAGS) $(toinc) -o  $@ $^ $(LIBS)      
</span><br>
<span class="quotelev1">&gt;         rm *.o *.mod
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; %.o:%.f
</span><br>
<span class="quotelev1">&gt;         $(FC) $(FFLAGS) $(toinc) -c -o $@ $^  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; clean:
</span><br>
<span class="quotelev1">&gt;         rm *.o *.mod octopus
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
<span class="quotelev1">&gt;                 rotation.o readoptparam.o OCT2.o dcar2pol.o\
</span><br>
<span class="quotelev1">&gt;                 OCT2frprmninit.o OCT2frprmn.o OCT2te.o conv2uni.o\
</span><br>
<span class="quotelev1">&gt;                 OCT2grad.o OCT2linmin.o f1dim.o OCT2mnbrak.o brent.o\
</span><br>
<span class="quotelev1">&gt;                 crossproduct.o dpol2car.o readparam.o conv3uni.o\
</span><br>
<span class="quotelev1">&gt;                 ranking.o backrotation.o genpulse.o normalize.o\
</span><br>
<span class="quotelev1">&gt;                 convert2bruker.o help.o readtable.o addphase.o\
</span><br>
<span class="quotelev1">&gt;                 integrate.o car2pol.o pol2car.o\
</span><br>
<span class="quotelev1">&gt;                 Ipopt.o
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
<span class="quotelev1">&gt;         $(FC) $(F77LINKFLAGS) $(FFLAGS) $(toinc) -o  $@ $^ $(LIBS)      
</span><br>
<span class="quotelev1">&gt;         rm *.o *.mod
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; %.o:%.f
</span><br>
<span class="quotelev1">&gt;         $(FC) $(FFLAGS) $(toinc) -c -o $@ $^  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; clean:
</span><br>
<span class="quotelev1">&gt;         rm *.o *.mod octopus
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Tue, 25 Feb 2014 13:25:11 +0000
</span><br>
<span class="quotelev1">&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] wrapper compiler
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;8880DAF3-9FBF-495D-9539-07CC3EBF869B_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a classic symptom of getting the wrong wrapper compiler -- e.g., using an MPICH wrapper compiler but an Open MPI mpirun (or vice versa).  Make sure that your wrapper compiler matches the mpirun that you're using -- e.g., check your PATH and LD_LIBRARY_PATH values.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 25, 2014, at 5:17 AM, Wolfgang Kallies &lt;w.kallies_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am currently implementing MPI in a program I use at work.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The program uses Ipopt and for testing purposes I reduced it to this:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        program test
</span><br>
<span class="quotelev2">&gt; &gt;        use mpi
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; call MPI_INIT(ierrmpi)
</span><br>
<span class="quotelev2">&gt; &gt;        call MPI_COMM_RANK(MPI_COMM_WORLD, myid, ierrmpi)
</span><br>
<span class="quotelev2">&gt; &gt;        call MPI_COMM_SIZE(MPI_COMM_WORLD, numprocs, ierrmpi)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        write(*,*)'old IDs:',myid,'of process',numprocs
</span><br>
<span class="quotelev2">&gt; &gt;        if(myid.eq.0)then
</span><br>
<span class="quotelev2">&gt; &gt;        write(*,*)'new IDs:',myid,'of process',numproc
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;        endif
</span><br>
<span class="quotelev2">&gt; &gt; 555    call MPI_FINALIZE(ierrmpi)
</span><br>
<span class="quotelev2">&gt; &gt;        end
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Using the MPI-Wrapper Compiler I got a result like this:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; old IDs:           0 of process           1
</span><br>
<span class="quotelev2">&gt; &gt; new IDs:           0 of process           1
</span><br>
<span class="quotelev2">&gt; &gt; old IDs:           0 of process           1
</span><br>
<span class="quotelev2">&gt; &gt; new IDs:           0 of process           1
</span><br>
<span class="quotelev2">&gt; &gt; old IDs:           0 of process           1
</span><br>
<span class="quotelev2">&gt; &gt; new IDs:           0 of process           1
</span><br>
<span class="quotelev2">&gt; &gt; old IDs:           0 of process           1
</span><br>
<span class="quotelev2">&gt; &gt; new IDs:           0 of process           1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Without the wrapper compiler, setting the flags manually, I get what should be there:
</span><br>
<span class="quotelev2">&gt; &gt; old IDs:           3 of process           4
</span><br>
<span class="quotelev2">&gt; &gt; old IDs:           0 of process           4
</span><br>
<span class="quotelev2">&gt; &gt; new IDs:           0 of process           4
</span><br>
<span class="quotelev2">&gt; &gt; old IDs:           2 of process           4
</span><br>
<span class="quotelev2">&gt; &gt; old IDs:           1 of process           4
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am using Openmpi 1.5.4 with gfortran 4.4.7.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My new old makefile, that gave me the odd results looked like this:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; EXECUTABLE = octopus
</span><br>
<span class="quotelev2">&gt; &gt; NEW_FILES =  variables.o test.o readxypulse.o writexypulse.o singlespin_te.o \
</span><br>
<span class="quotelev2">&gt; &gt;                rotation.o readoptparam.o OCT2.o dcar2pol.o\
</span><br>
<span class="quotelev2">&gt; &gt;                OCT2frprmninit.o OCT2frprmn.o OCT2te.o conv2uni.o\
</span><br>
<span class="quotelev2">&gt; &gt;                OCT2grad.o OCT2linmin.o f1dim.o OCT2mnbrak.o brent.o\
</span><br>
<span class="quotelev2">&gt; &gt;                crossproduct.o dpol2car.o readparam.o conv3uni.o\
</span><br>
<span class="quotelev2">&gt; &gt;                ranking.o backrotation.o genpulse.o normalize.o\
</span><br>
<span class="quotelev2">&gt; &gt;                convert2bruker.o help.o readtable.o addphase.o\
</span><br>
<span class="quotelev2">&gt; &gt;                integrate.o car2pol.o pol2car.o\
</span><br>
<span class="quotelev2">&gt; &gt;                Ipopt.o
</span><br>
<span class="quotelev2">&gt; &gt; FC = mpif90
</span><br>
<span class="quotelev2">&gt; &gt; FFLAGS = -O3 -fomit-frame-pointer -ffixed-line-length-none
</span><br>
<span class="quotelev2">&gt; &gt; F77LINKFLAGS =  -Wl,--rpath -Wl,/kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build/lib
</span><br>
<span class="quotelev2">&gt; &gt; IPOPTLIBDIR = ${exec_prefix}/lib/
</span><br>
<span class="quotelev2">&gt; &gt; exec_prefix = ${prefix}
</span><br>
<span class="quotelev2">&gt; &gt; prefix = /kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build
</span><br>
<span class="quotelev2">&gt; &gt; LIBS = -L$(IPOPTLIBDIR) -lipopt -ldl -lcoinmumps -lpthread -lcoinhsl -lcoinlapack -lcoinmetis -lcoinblas -lstdc++ -lm
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; all: dummy
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; dummy:$(EXECUTABLE)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; toinc=-I`echo /kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build/include/coin`
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $(EXECUTABLE):$(NEW_FILES)
</span><br>
<span class="quotelev2">&gt; &gt;        $(FC) $(F77LINKFLAGS) $(FFLAGS) $(toinc) -o  $@ $^ $(LIBS)      
</span><br>
<span class="quotelev2">&gt; &gt;        rm *.o *.mod
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; %.o:%.f
</span><br>
<span class="quotelev2">&gt; &gt;        $(FC) $(FFLAGS) $(toinc) -c -o $@ $^  
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; clean:
</span><br>
<span class="quotelev2">&gt; &gt;        rm *.o *.mod octopus
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The new one is provided here:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; EXECUTABLE = octopus
</span><br>
<span class="quotelev2">&gt; &gt; NEW_FILES =  variables.o test.o readxypulse.o writexypulse.o singlespin_te.o \
</span><br>
<span class="quotelev2">&gt; &gt;                rotation.o readoptparam.o OCT2.o dcar2pol.o\
</span><br>
<span class="quotelev2">&gt; &gt;                OCT2frprmninit.o OCT2frprmn.o OCT2te.o conv2uni.o\
</span><br>
<span class="quotelev2">&gt; &gt;                OCT2grad.o OCT2linmin.o f1dim.o OCT2mnbrak.o brent.o\
</span><br>
<span class="quotelev2">&gt; &gt;                crossproduct.o dpol2car.o readparam.o conv3uni.o\
</span><br>
<span class="quotelev2">&gt; &gt;                ranking.o backrotation.o genpulse.o normalize.o\
</span><br>
<span class="quotelev2">&gt; &gt;                convert2bruker.o help.o readtable.o addphase.o\
</span><br>
<span class="quotelev2">&gt; &gt;                integrate.o car2pol.o pol2car.o\
</span><br>
<span class="quotelev2">&gt; &gt;                Ipopt.o
</span><br>
<span class="quotelev2">&gt; &gt; FC = gfortran
</span><br>
<span class="quotelev2">&gt; &gt; FFLAGS = -O3 -ffixed-line-length-none -I/usr/include/openmpi-x86_64 -pthread -m64 -I/usr/lib64/openmpi/lib -L/usr/lib64/openmpi/lib -lmpi_f90 -lmpi_f77 -lmpi -ldl
</span><br>
<span class="quotelev2">&gt; &gt; F77LINKFLAGS =  -Wl,--rpath -Wl,/kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build/lib
</span><br>
<span class="quotelev2">&gt; &gt; IPOPTLIBDIR = ${exec_prefix}/lib/
</span><br>
<span class="quotelev2">&gt; &gt; exec_prefix = ${prefix}
</span><br>
<span class="quotelev2">&gt; &gt; prefix = /kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build
</span><br>
<span class="quotelev2">&gt; &gt; LIBS = -L$(IPOPTLIBDIR) -lipopt -ldl -lcoinmumps -lpthread -lcoinhsl -lcoinlapack -lcoinmetis -lcoinblas -lstdc++ -lm
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; all: dummy
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; dummy:$(EXECUTABLE)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; toinc=-I`echo /kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build/include/coin`
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $(EXECUTABLE):$(NEW_FILES)
</span><br>
<span class="quotelev2">&gt; &gt;        $(FC) $(F77LINKFLAGS) $(FFLAGS) $(toinc) -o  $@ $^ $(LIBS)      
</span><br>
<span class="quotelev2">&gt; &gt;        rm *.o *.mod
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; %.o:%.f
</span><br>
<span class="quotelev2">&gt; &gt;        $(FC) $(FFLAGS) $(toinc) -c -o $@ $^  
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; clean:
</span><br>
<span class="quotelev2">&gt; &gt;        rm *.o *.mod octopus
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is there a reason why I can't use the wrapper compiler?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Subject: Digest Footer
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; End of devel Digest, Vol 2631, Issue 1
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14233.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] devel Digest, Vol 2631, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="14231.php">Joshua Ladd: "Re: [OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14233.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] devel Digest, Vol 2631, Issue 1"</a>
<li><strong>Reply:</strong> <a href="14233.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] devel Digest, Vol 2631, Issue 1"</a>
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
