<?
$subject_val = "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 17:58:16 2008" -->
<!-- isoreceived="20080507215816" -->
<!-- sent="Wed, 7 May 2008 17:58:05 -0400" -->
<!-- isosent="20080507215805" -->
<!-- name="Linwei Wang" -->
<!-- email="lxw4393_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard" -->
<!-- id="D107CE45-F6B2-4F3B-A8E9-BD941F6B3924_at_rit.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45C93218-89EA-4F7D-B7B9-9C315E6C5F96_at_rain.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard<br>
<strong>From:</strong> Linwei Wang (<em>lxw4393_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-07 17:58:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5634.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5632.php">Barry Rountree: "Re: [OMPI users] A simple mpi code hangs at MPI_Init?"</a>
<li><strong>In reply to:</strong> <a href="5630.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5634.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Reply:</strong> <a href="5634.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Doug
<br>
<p>I've checked the makefiles and make sure that  flag -m64 is used for  
<br>
all the compiling
<br>
but the error still exists..
<br>
<p><p>Linwei
<br>
<p>On May 7, 2008, at 5:33 PM, Doug Reeder wrote:
<br>
<p><span class="quotelev1">&gt; Linwei,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like you are getting a mix of 32 and 64 bit code (hence the
</span><br>
<span class="quotelev1">&gt; 'file is not of required architecture' error). Are you using the
</span><br>
<span class="quotelev1">&gt; command line flag -m64 for some parts of the build and not for
</span><br>
<span class="quotelev1">&gt; others. You need to use either -m32 or -m64 for all the builds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; On May 7, 2008, at 2:25 PM, Linwei Wang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear sir,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks very much for your detailed guideline~
</span><br>
<span class="quotelev2">&gt;&gt;   I'm now trying to follow it out~
</span><br>
<span class="quotelev2">&gt;&gt;   I've installed gcc 4.3 &amp; openmpi~
</span><br>
<span class="quotelev2">&gt;&gt;   When compiling CLAPACK, I'm trying to use the optimized BLAS
</span><br>
<span class="quotelev2">&gt;&gt; library by ATLAS, so I set the BLASLIB in the make.inc as:
</span><br>
<span class="quotelev2">&gt;&gt;   BLASLIB     = ../../libcblaswr.a -lcblas -latlas
</span><br>
<span class="quotelev2">&gt;&gt;   then build the libraries  (also before that, I built the f2clib
</span><br>
<span class="quotelev2">&gt;&gt; following the guideline in netlib
</span><br>
<span class="quotelev2">&gt;&gt;   It went well, but when I tried to built the blas testing code, it
</span><br>
<span class="quotelev2">&gt;&gt; generates errors for &quot;undefined symbols&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   looks like those should be in the f2clib, but I already built
</span><br>
<span class="quotelev2">&gt;&gt; it....
</span><br>
<span class="quotelev2">&gt;&gt;  &quot;gcc    sblat2.o  \
</span><br>
<span class="quotelev2">&gt;&gt;          ../../F2CLIBS/libf2c.a -lm  -o ../xblat2s
</span><br>
<span class="quotelev2">&gt;&gt; Undefined symbols:
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;_f2c_ssbmv&quot;, referenced from:
</span><br>
<span class="quotelev2">&gt;&gt;       _schke_ in sblat2.o
</span><br>
<span class="quotelev2">&gt;&gt;       _schke_ in sblat2.o
</span><br>
<span class="quotelev2">&gt;&gt;       _schke_ in sblat2.o
</span><br>
<span class="quotelev2">&gt;&gt;       _schke_ in sblat2.o
</span><br>
<span class="quotelev2">&gt;&gt;       _schke_ in sblat2.o
</span><br>
<span class="quotelev2">&gt;&gt;       _schke_ in sblat2.o
</span><br>
<span class="quotelev2">&gt;&gt;       _schk2_ in sblat2.o
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;_f2c_sgbmv&quot;, referenced from:
</span><br>
<span class="quotelev2">&gt;&gt;       _schke_ in sblat2.o
</span><br>
<span class="quotelev2">&gt;&gt;       _schke_ in sblat2.o
</span><br>
<span class="quotelev2">&gt;&gt;       _schke_ in sblat2.o
</span><br>
<span class="quotelev2">&gt;&gt;       _schke_ in sblat2.o
</span><br>
<span class="quotelev2">&gt;&gt;       _schke_ in sblat2.o
</span><br>
<span class="quotelev2">&gt;&gt;       _schke_ in sblat2.o
</span><br>
<span class="quotelev2">&gt;&gt;       _schke_ in sblat2.o
</span><br>
<span class="quotelev2">&gt;&gt;       _schke_ in sblat2.o
</span><br>
<span class="quotelev2">&gt;&gt;       _schk1_ in sblat2.o
</span><br>
<span class="quotelev2">&gt;&gt; .......&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On the other side, when compiling ATLAS, I did the configure as you
</span><br>
<span class="quotelev2">&gt;&gt; said and &quot;make build&quot; went well.
</span><br>
<span class="quotelev2">&gt;&gt; But when I tried &quot;make check&quot; for testing, it again give errors for
</span><br>
<span class="quotelev2">&gt;&gt; &quot;undefined symbols&quot;...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;d: warning in /Users/maomaowlw/ATLAS/build/lib/liblapack.a, file is
</span><br>
<span class="quotelev2">&gt;&gt; not of required architecture
</span><br>
<span class="quotelev2">&gt;&gt; Undefined symbols:
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;_ATL_slauum&quot;, referenced from:
</span><br>
<span class="quotelev2">&gt;&gt;       _test_inv in sinvtst.o
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;_ATL_strtri&quot;, referenced from:
</span><br>
<span class="quotelev2">&gt;&gt;       _test_inv in sinvtst.o
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;_ATL_spotrf&quot;, referenced from:
</span><br>
<span class="quotelev2">&gt;&gt;       _test_inv in sinvtst.o
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;_ATL_sgetrf&quot;, referenced from:
</span><br>
<span class="quotelev2">&gt;&gt;       _test_inv in sinvtst.o
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;_ATL_sgetri&quot;, referenced from:
</span><br>
<span class="quotelev2">&gt;&gt;       _test_inv in sinvtst.o
</span><br>
<span class="quotelev2">&gt;&gt; &quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure where is the problem? Can you provide any help?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Linwei
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 6, 2008, at 11:11 AM, Gregory John Orris wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Points to clarify if I may, having gone through this relatively
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recently:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; g77 and gfortran are NOT one and the same.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gfortran from sourceforge works well, but it is based on gnu gcc 4.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and not on the gnu gcc 4.0.1 that comes with Leopard.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your best bet is to download the ENTIRE gcc package from sourceforge
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and install it into /usr/local. This includes gcc, g++, and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gfortran.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then you will need to do a number of things to actually get a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reliable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set of packages all compiled from the same version of gcc 4.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why? Because 4.3 seems to be notoriously faster. AND, I had a lot of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems integrating the 4.0.1 libs with the 4.3 libs without errors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. download CLAPACK-3.1.1 from netlib And compile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Download ATLAS-1.8 from dourceforge (netlib is a little behind
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here) and configure it with the --with-netlib-lapack=your just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled lapack from CLAPACK
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. Download OpenMPI 1.2.6 and install it also so that openMPI will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have the fortran not installed with Leopard.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. NOW you can compile BLACS and ScaLAPACK
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In all of this you will need to do a couple of additional things  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set the env's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setenv LDFLAGS &quot;-L/usr/local/lib/x86_64&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setenv DYLD_LIBRARY_PATH &quot;your openmpi path&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setenv LD_LIBRARY_PATH &quot;your openmpi path&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do all this right and make sure you compile with the -m64 -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtune=core2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flags and you will be golden.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So what will you have---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A new cblas, atlas, lapack, openmpi, fortran, c, c++, blacs, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scalapack.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All on the same version of gnu c.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alternatively you can buy and use the intel compiler. It is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; significantly faster than gfortran, but it has a host of other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems associated with it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But if you follow the outline above,  you will be left with the best
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that's available. I have lots more info on this, but time is short.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FINALLY, and this is important, DO NOT FORGET ABOUT THE small STACK
</span><br>
<span class="quotelev3">&gt;&gt;&gt; size on Mac's when using gfortran. It's so small that it's useless
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; large parallel jobs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 6, 2008, at 10:09 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FWIW, I'm not a fortran expert, but if you built your Fortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libraries with g77 and then tried to link against them with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gfortran,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you might run into problems.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My advice would be to use a single fortran compiler for building
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; everything: Open MPI, your libraries, your apps.  I prefer gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; because it's more modern, but I have not done any performance
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; evaluations of gfortran vs. g77 -- I have heard [unverified]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; anecdotes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that gfortran is &quot;slower&quot; than g77 -- google around and see what  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recent buzz is.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FWIW: I tend to use the gnu suite from http://
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hpc.sourceforge.net/ --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it contains pre-built gcc/g++/gfortran binaries and libraries for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Leopard.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 5, 2008, at 2:59 PM, Linwei Wang wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dear Reeder,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It does not work. I do think they are from the fortran programs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm using (they are files included from the BLACS installation
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; package, not written by my own.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The thing is last time when I was using g77, it caused no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problem...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; thanks for  your help.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Linwei.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On May 5, 2008, at 2:33 PM, Doug Reeder wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _s_wsle, _e_wsle
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="5634.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5632.php">Barry Rountree: "Re: [OMPI users] A simple mpi code hangs at MPI_Init?"</a>
<li><strong>In reply to:</strong> <a href="5630.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5634.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Reply:</strong> <a href="5634.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
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
