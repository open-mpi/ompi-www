<?
$subject_val = "Re: [OMPI devel] devel Digest, Vol 2631, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 26 05:00:40 2014" -->
<!-- isoreceived="20140226100040" -->
<!-- sent="Wed, 26 Feb 2014 10:00:25 +0000" -->
<!-- isosent="20140226100025" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] devel Digest, Vol 2631, Issue 1" -->
<!-- id="1032F889-230F-4B62-BD6E-44617F9A5588_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140226084418.57034.58331_at_magellan1.ze.tum.de" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-26 05:00:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14234.php">Oscar Vega-Gisbert: "[OMPI devel] Java: MPI_STATUS_IGNORE provokes SIGSEGV in MPI_Waitany and	MPI_Testany"</a>
<li><strong>Previous message:</strong> <a href="14232.php">Wolfgang Kallies: "Re: [OMPI devel] devel Digest, Vol 2631, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="14232.php">Wolfgang Kallies: "Re: [OMPI devel] devel Digest, Vol 2631, Issue 1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you saying that if you build and run test program 1, you see MPI_COMM_WORLD ranks of 0-(N-1), and if you build and run test program 2, you see N MPI_COMM_WORLD ranks 0?
<br>
<p>I would run ldd on your resulting executables and verify that they are linking against the libmpi.so that they should.
<br>
<p><p>On Feb 26, 2014, at 3:44 AM, Wolfgang Kallies &lt;w.kallies_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I had this kind of problem before, so I already checked that. The wrapper compiler
</span><br>
<span class="quotelev1">&gt; and mpirun match.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A very simple testprogram that I used gave me this result:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Total sum:   0.0000000000000000      id           1
</span><br>
<span class="quotelev1">&gt; Total sum:   1014.1131933453868      id           0
</span><br>
<span class="quotelev1">&gt; Total sum:   0.0000000000000000      id           2
</span><br>
<span class="quotelev1">&gt; Total sum:   0.0000000000000000      id           3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the makefile is appended:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; targ=output
</span><br>
<span class="quotelev1">&gt; sources=variables.o mpitest.o
</span><br>
<span class="quotelev1">&gt; cc=mpif90
</span><br>
<span class="quotelev1">&gt; flag=
</span><br>
<span class="quotelev1">&gt; all: dummy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; dummy: $(targ)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $(targ): $(sources)
</span><br>
<span class="quotelev1">&gt;        $(cc) $(flag) -o $(target) $@ $^  
</span><br>
<span class="quotelev1">&gt;        rm *.o
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; %.o: %.f90
</span><br>
<span class="quotelev1">&gt;        $(cc) -c -o $@ $^ $(flag)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It uses the same mpirun as well as the same wrapper
</span><br>
<span class="quotelev1">&gt; compiler as the previous example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (Admittedly I had the problem of mismatching mpirun
</span><br>
<span class="quotelev1">&gt; and wrapper compiler before, so this testprogram
</span><br>
<span class="quotelev1">&gt; used to give me a similar result,
</span><br>
<span class="quotelev1">&gt; but after fiddling around for a forenoon, 
</span><br>
<span class="quotelev1">&gt; I solved this already.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; devel-request_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Send devel mailing list submissions to
</span><br>
<span class="quotelev2">&gt;&gt; 	devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev2">&gt;&gt; 	<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev2">&gt;&gt; 	devel-request_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev2">&gt;&gt; 	devel-owner_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev2">&gt;&gt; than &quot;Re: Contents of devel digest...&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Today's Topics:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   1. wrapper compiler (Wolfgang Kallies)
</span><br>
<span class="quotelev2">&gt;&gt;   2. Re: wrapper compiler (Jeff Squyres (jsquyres))
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 25 Feb 2014 10:17:12 -0000
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Wolfgang Kallies&quot; &lt;w.kallies_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI devel] wrapper compiler
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;20140225101712.58049.3955_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am currently implementing MPI in a program I use at work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The program uses Ipopt and for testing purposes I reduced it to this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        program test
</span><br>
<span class="quotelev2">&gt;&gt;        use mpi
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_INIT(ierrmpi)
</span><br>
<span class="quotelev2">&gt;&gt;        call MPI_COMM_RANK(MPI_COMM_WORLD, myid, ierrmpi)
</span><br>
<span class="quotelev2">&gt;&gt;        call MPI_COMM_SIZE(MPI_COMM_WORLD, numprocs, ierrmpi)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        write(*,*)'old IDs:',myid,'of process',numprocs
</span><br>
<span class="quotelev2">&gt;&gt;        if(myid.eq.0)then
</span><br>
<span class="quotelev2">&gt;&gt;        write(*,*)'new IDs:',myid,'of process',numproc
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;        endif
</span><br>
<span class="quotelev2">&gt;&gt; 555    call MPI_FINALIZE(ierrmpi)
</span><br>
<span class="quotelev2">&gt;&gt;        end
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Using the MPI-Wrapper Compiler I got a result like this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; old IDs:           0 of process           1
</span><br>
<span class="quotelev2">&gt;&gt; new IDs:           0 of process           1
</span><br>
<span class="quotelev2">&gt;&gt; old IDs:           0 of process           1
</span><br>
<span class="quotelev2">&gt;&gt; new IDs:           0 of process           1
</span><br>
<span class="quotelev2">&gt;&gt; old IDs:           0 of process           1
</span><br>
<span class="quotelev2">&gt;&gt; new IDs:           0 of process           1
</span><br>
<span class="quotelev2">&gt;&gt; old IDs:           0 of process           1
</span><br>
<span class="quotelev2">&gt;&gt; new IDs:           0 of process           1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Without the wrapper compiler, setting the flags manually, I get what should be there:
</span><br>
<span class="quotelev2">&gt;&gt; old IDs:           3 of process           4
</span><br>
<span class="quotelev2">&gt;&gt; old IDs:           0 of process           4
</span><br>
<span class="quotelev2">&gt;&gt; new IDs:           0 of process           4
</span><br>
<span class="quotelev2">&gt;&gt; old IDs:           2 of process           4
</span><br>
<span class="quotelev2">&gt;&gt; old IDs:           1 of process           4
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am using Openmpi 1.5.4 with gfortran 4.4.7.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My new old makefile, that gave me the odd results looked like this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; EXECUTABLE = octopus
</span><br>
<span class="quotelev2">&gt;&gt; NEW_FILES =  variables.o test.o readxypulse.o writexypulse.o singlespin_te.o \
</span><br>
<span class="quotelev2">&gt;&gt;                rotation.o readoptparam.o OCT2.o dcar2pol.o\
</span><br>
<span class="quotelev2">&gt;&gt;                OCT2frprmninit.o OCT2frprmn.o OCT2te.o conv2uni.o\
</span><br>
<span class="quotelev2">&gt;&gt;                OCT2grad.o OCT2linmin.o f1dim.o OCT2mnbrak.o brent.o\
</span><br>
<span class="quotelev2">&gt;&gt;                crossproduct.o dpol2car.o readparam.o conv3uni.o\
</span><br>
<span class="quotelev2">&gt;&gt;                ranking.o backrotation.o genpulse.o normalize.o\
</span><br>
<span class="quotelev2">&gt;&gt;                convert2bruker.o help.o readtable.o addphase.o\
</span><br>
<span class="quotelev2">&gt;&gt;                integrate.o car2pol.o pol2car.o\
</span><br>
<span class="quotelev2">&gt;&gt;                Ipopt.o
</span><br>
<span class="quotelev2">&gt;&gt; FC = mpif90
</span><br>
<span class="quotelev2">&gt;&gt; FFLAGS = -O3 -fomit-frame-pointer -ffixed-line-length-none
</span><br>
<span class="quotelev2">&gt;&gt; F77LINKFLAGS =  -Wl,--rpath -Wl,/kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build/lib
</span><br>
<span class="quotelev2">&gt;&gt; IPOPTLIBDIR = ${exec_prefix}/lib/
</span><br>
<span class="quotelev2">&gt;&gt; exec_prefix = ${prefix}
</span><br>
<span class="quotelev2">&gt;&gt; prefix = /kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build
</span><br>
<span class="quotelev2">&gt;&gt; LIBS = -L$(IPOPTLIBDIR) -lipopt -ldl -lcoinmumps -lpthread -lcoinhsl -lcoinlapack -lcoinmetis -lcoinblas -lstdc++ -lm
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; all: dummy
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; dummy:$(EXECUTABLE)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; toinc=-I`echo /kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build/include/coin`
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $(EXECUTABLE):$(NEW_FILES)
</span><br>
<span class="quotelev2">&gt;&gt;        $(FC) $(F77LINKFLAGS) $(FFLAGS) $(toinc) -o  $@ $^ $(LIBS)      
</span><br>
<span class="quotelev2">&gt;&gt;        rm *.o *.mod
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; %.o:%.f
</span><br>
<span class="quotelev2">&gt;&gt;        $(FC) $(FFLAGS) $(toinc) -c -o $@ $^  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; clean:
</span><br>
<span class="quotelev2">&gt;&gt;        rm *.o *.mod octopus
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The new one is provided here:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; EXECUTABLE = octopus
</span><br>
<span class="quotelev2">&gt;&gt; NEW_FILES =  variables.o test.o readxypulse.o writexypulse.o singlespin_te.o \
</span><br>
<span class="quotelev2">&gt;&gt;                rotation.o readoptparam.o OCT2.o dcar2pol.o\
</span><br>
<span class="quotelev2">&gt;&gt;                OCT2frprmninit.o OCT2frprmn.o OCT2te.o conv2uni.o\
</span><br>
<span class="quotelev2">&gt;&gt;                OCT2grad.o OCT2linmin.o f1dim.o OCT2mnbrak.o brent.o\
</span><br>
<span class="quotelev2">&gt;&gt;                crossproduct.o dpol2car.o readparam.o conv3uni.o\
</span><br>
<span class="quotelev2">&gt;&gt;                ranking.o backrotation.o genpulse.o normalize.o\
</span><br>
<span class="quotelev2">&gt;&gt;                convert2bruker.o help.o readtable.o addphase.o\
</span><br>
<span class="quotelev2">&gt;&gt;                integrate.o car2pol.o pol2car.o\
</span><br>
<span class="quotelev2">&gt;&gt;                Ipopt.o
</span><br>
<span class="quotelev2">&gt;&gt; FC = gfortran
</span><br>
<span class="quotelev2">&gt;&gt; FFLAGS = -O3 -ffixed-line-length-none -I/usr/include/openmpi-x86_64 -pthread -m64 -I/usr/lib64/openmpi/lib -L/usr/lib64/openmpi/lib -lmpi_f90 -lmpi_f77 -lmpi -ldl
</span><br>
<span class="quotelev2">&gt;&gt; F77LINKFLAGS =  -Wl,--rpath -Wl,/kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build/lib
</span><br>
<span class="quotelev2">&gt;&gt; IPOPTLIBDIR = ${exec_prefix}/lib/
</span><br>
<span class="quotelev2">&gt;&gt; exec_prefix = ${prefix}
</span><br>
<span class="quotelev2">&gt;&gt; prefix = /kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build
</span><br>
<span class="quotelev2">&gt;&gt; LIBS = -L$(IPOPTLIBDIR) -lipopt -ldl -lcoinmumps -lpthread -lcoinhsl -lcoinlapack -lcoinmetis -lcoinblas -lstdc++ -lm
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; all: dummy
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; dummy:$(EXECUTABLE)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; toinc=-I`echo /kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build/include/coin`
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $(EXECUTABLE):$(NEW_FILES)
</span><br>
<span class="quotelev2">&gt;&gt;        $(FC) $(F77LINKFLAGS) $(FFLAGS) $(toinc) -o  $@ $^ $(LIBS)      
</span><br>
<span class="quotelev2">&gt;&gt;        rm *.o *.mod
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; %.o:%.f
</span><br>
<span class="quotelev2">&gt;&gt;        $(FC) $(FFLAGS) $(toinc) -c -o $@ $^  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; clean:
</span><br>
<span class="quotelev2">&gt;&gt;        rm *.o *.mod octopus
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a reason why I can't use the wrapper compiler?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Message: 2
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 25 Feb 2014 13:25:11 +0000
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] wrapper compiler
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;8880DAF3-9FBF-495D-9539-07CC3EBF869B_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is a classic symptom of getting the wrong wrapper compiler -- e.g., using an MPICH wrapper compiler but an Open MPI mpirun (or vice versa).  Make sure that your wrapper compiler matches the mpirun that you're using -- e.g., check your PATH and LD_LIBRARY_PATH values.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 25, 2014, at 5:17 AM, Wolfgang Kallies &lt;w.kallies_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am currently implementing MPI in a program I use at work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The program uses Ipopt and for testing purposes I reduced it to this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       program test
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       use mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call MPI_INIT(ierrmpi)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       call MPI_COMM_RANK(MPI_COMM_WORLD, myid, ierrmpi)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       call MPI_COMM_SIZE(MPI_COMM_WORLD, numprocs, ierrmpi)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       write(*,*)'old IDs:',myid,'of process',numprocs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       if(myid.eq.0)then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       write(*,*)'new IDs:',myid,'of process',numproc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 555    call MPI_FINALIZE(ierrmpi)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       end
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using the MPI-Wrapper Compiler I got a result like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; old IDs:           0 of process           1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; new IDs:           0 of process           1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; old IDs:           0 of process           1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; new IDs:           0 of process           1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; old IDs:           0 of process           1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; new IDs:           0 of process           1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; old IDs:           0 of process           1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; new IDs:           0 of process           1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Without the wrapper compiler, setting the flags manually, I get what should be there:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; old IDs:           3 of process           4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; old IDs:           0 of process           4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; new IDs:           0 of process           4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; old IDs:           2 of process           4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; old IDs:           1 of process           4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using Openmpi 1.5.4 with gfortran 4.4.7.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My new old makefile, that gave me the odd results looked like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EXECUTABLE = octopus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NEW_FILES =  variables.o test.o readxypulse.o writexypulse.o singlespin_te.o \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               rotation.o readoptparam.o OCT2.o dcar2pol.o\
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               OCT2frprmninit.o OCT2frprmn.o OCT2te.o conv2uni.o\
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               OCT2grad.o OCT2linmin.o f1dim.o OCT2mnbrak.o brent.o\
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               crossproduct.o dpol2car.o readparam.o conv3uni.o\
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               ranking.o backrotation.o genpulse.o normalize.o\
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               convert2bruker.o help.o readtable.o addphase.o\
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               integrate.o car2pol.o pol2car.o\
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Ipopt.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FC = mpif90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FFLAGS = -O3 -fomit-frame-pointer -ffixed-line-length-none
</span><br>
<span class="quotelev3">&gt;&gt;&gt; F77LINKFLAGS =  -Wl,--rpath -Wl,/kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IPOPTLIBDIR = ${exec_prefix}/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exec_prefix = ${prefix}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prefix = /kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LIBS = -L$(IPOPTLIBDIR) -lipopt -ldl -lcoinmumps -lpthread -lcoinhsl -lcoinlapack -lcoinmetis -lcoinblas -lstdc++ -lm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all: dummy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dummy:$(EXECUTABLE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; toinc=-I`echo /kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build/include/coin`
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $(EXECUTABLE):$(NEW_FILES)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       $(FC) $(F77LINKFLAGS) $(FFLAGS) $(toinc) -o  $@ $^ $(LIBS)      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       rm *.o *.mod
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; %.o:%.f
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       $(FC) $(FFLAGS) $(toinc) -c -o $@ $^  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clean:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       rm *.o *.mod octopus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The new one is provided here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EXECUTABLE = octopus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NEW_FILES =  variables.o test.o readxypulse.o writexypulse.o singlespin_te.o \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               rotation.o readoptparam.o OCT2.o dcar2pol.o\
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               OCT2frprmninit.o OCT2frprmn.o OCT2te.o conv2uni.o\
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               OCT2grad.o OCT2linmin.o f1dim.o OCT2mnbrak.o brent.o\
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               crossproduct.o dpol2car.o readparam.o conv3uni.o\
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               ranking.o backrotation.o genpulse.o normalize.o\
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               convert2bruker.o help.o readtable.o addphase.o\
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               integrate.o car2pol.o pol2car.o\
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Ipopt.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FC = gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FFLAGS = -O3 -ffixed-line-length-none -I/usr/include/openmpi-x86_64 -pthread -m64 -I/usr/lib64/openmpi/lib -L/usr/lib64/openmpi/lib -lmpi_f90 -lmpi_f77 -lmpi -ldl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; F77LINKFLAGS =  -Wl,--rpath -Wl,/kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IPOPTLIBDIR = ${exec_prefix}/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exec_prefix = ${prefix}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prefix = /kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LIBS = -L$(IPOPTLIBDIR) -lipopt -ldl -lcoinmumps -lpthread -lcoinhsl -lcoinlapack -lcoinmetis -lcoinblas -lstdc++ -lm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all: dummy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dummy:$(EXECUTABLE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; toinc=-I`echo /kain/aksg3/wkallies/project-coop/Ipopt-3.10.3/build/include/coin`
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $(EXECUTABLE):$(NEW_FILES)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       $(FC) $(F77LINKFLAGS) $(FFLAGS) $(toinc) -o  $@ $^ $(LIBS)      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       rm *.o *.mod
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; %.o:%.f
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       $(FC) $(FFLAGS) $(toinc) -c -o $@ $^  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clean:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       rm *.o *.mod octopus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a reason why I can't use the wrapper compiler?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Digest Footer
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; End of devel Digest, Vol 2631, Issue 1
</span><br>
<span class="quotelev2">&gt;&gt; **************************************
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="14234.php">Oscar Vega-Gisbert: "[OMPI devel] Java: MPI_STATUS_IGNORE provokes SIGSEGV in MPI_Waitany and	MPI_Testany"</a>
<li><strong>Previous message:</strong> <a href="14232.php">Wolfgang Kallies: "Re: [OMPI devel] devel Digest, Vol 2631, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="14232.php">Wolfgang Kallies: "Re: [OMPI devel] devel Digest, Vol 2631, Issue 1"</a>
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
