<?
$subject_val = "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 02:09:50 2008" -->
<!-- isoreceived="20080305070950" -->
<!-- sent="Wed, 5 Mar 2008 02:09:41 -0500" -->
<!-- isosent="20080305070941" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3" -->
<!-- id="C2A41E8F-7738-48C2-BBEF-795CEB04023A_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="374354.74184.qm_at_web31405.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-05 02:09:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5135.php">Jeff Squyres: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Previous message:</strong> <a href="5133.php">Chase Latta: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>In reply to:</strong> <a href="5133.php">Chase Latta: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5135.php">Jeff Squyres: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Reply:</strong> <a href="5135.php">Jeff Squyres: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The correct options for configure are --enable-mpi-f77 and --enable- 
<br>
mpi-f90 and not their counterpart without the -mpi in the middle. I  
<br>
guess this will solve your issues, as the detection of the F77 and F90  
<br>
compilers seems to run smoothly.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 5, 2008, at 1:31 AM, Chase Latta wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for all of your quick replies.  However, I tried this an am  
</span><br>
<span class="quotelev1">&gt; still receiving the error.  I completely removed open-mpi and  tried  
</span><br>
<span class="quotelev1">&gt; reinstalling it.  The configuration options I used were:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local --enable-f77 --enable-f90  
</span><br>
<span class="quotelev1">&gt; F77=gfortran FC=gfortran FFLAGS=&quot;-m32 -std=legacy&quot; --with-wrapper- 
</span><br>
<span class="quotelev1">&gt; fflags=&quot;-m32 -std=legacy&quot;  --with-mpi-f90-size=medium --enable- 
</span><br>
<span class="quotelev1">&gt; mpirun-prefix-by-default FCFLAGS=&quot;-m32&quot; --with-wrapper-fcflags=&quot;-m32&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The condensed output that I received was:
</span><br>
<span class="quotelev1">&gt; *** Configuration options
</span><br>
<span class="quotelev1">&gt; checking Whether to run code coverage... no
</span><br>
<span class="quotelev1">&gt; checking whether to debug memory usage... no
</span><br>
<span class="quotelev1">&gt; checking whether to profile memory usage... no
</span><br>
<span class="quotelev1">&gt; checking if want developer-level compiler pickyness... no
</span><br>
<span class="quotelev1">&gt; checking if want developer-level debugging code... no
</span><br>
<span class="quotelev1">&gt; checking if want Fortran 77 bindings... yes
</span><br>
<span class="quotelev1">&gt; checking if want Fortran 90 bindings... yes
</span><br>
<span class="quotelev1">&gt; checking desired Fortran 90 bindings &quot;size&quot;... medium
</span><br>
<span class="quotelev1">&gt; checking whether to enable PMPI... yes
</span><br>
<span class="quotelev1">&gt; checking if want C++ bindings... yes
</span><br>
<span class="quotelev1">&gt; checking if want MPI::SEEK_SET support... yes
</span><br>
<span class="quotelev1">&gt; checking if want to enable weak symbol support... yes
</span><br>
<span class="quotelev1">&gt; checking if want run-time MPI parameter checking... runtime
</span><br>
<span class="quotelev1">&gt; checking if want to install OMPI header files... no
</span><br>
<span class="quotelev1">&gt; checking if want pretty-print stacktrace... yes
</span><br>
<span class="quotelev1">&gt; checking if want deprecated executable names... no
</span><br>
<span class="quotelev1">&gt; checking if peruse support is required... no
</span><br>
<span class="quotelev1">&gt; checking max supported array dimension in F90 MPI bindings... 4
</span><br>
<span class="quotelev1">&gt; checking if pty support should be enabled... yes
</span><br>
<span class="quotelev1">&gt; checking if user wants dlopen support... yes
</span><br>
<span class="quotelev1">&gt; checking if heterogeneous support should be enabled... yes
</span><br>
<span class="quotelev1">&gt; checking if want trace file debugging... no
</span><br>
<span class="quotelev1">&gt; checking if want IPv6 support... yes (if underlying system supports  
</span><br>
<span class="quotelev1">&gt; it)
</span><br>
<span class="quotelev1">&gt; checking if want orterun &quot;--prefix&quot; behavior to be enabled by  
</span><br>
<span class="quotelev1">&gt; default... yes
</span><br>
<span class="quotelev1">&gt; ...Lots of output
</span><br>
<span class="quotelev1">&gt; *** Fortran 90/95 compiler
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran compiler... yes
</span><br>
<span class="quotelev1">&gt; checking whether gfortran accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler works... yes
</span><br>
<span class="quotelev1">&gt; checking whether gfortran and gfortran compilers are compatible... yes
</span><br>
<span class="quotelev1">&gt; checking for extra arguments to build a shard library... impossible  
</span><br>
<span class="quotelev1">&gt; -- -static
</span><br>
<span class="quotelev1">&gt; checking for Fortran flag to compile .f files... none
</span><br>
<span class="quotelev1">&gt; checking for Fortran flag to compile .f90 files... none
</span><br>
<span class="quotelev1">&gt; checking for Fortran 90 compiler module include flag... -I
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports LOGICAL... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 90 LOGICAL... 4
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 and 90 type sizes match... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports INTEGER... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 90 INTEGER... 4
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 and 90 type sizes match... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports INTEGER*1... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 90 INTEGER*1... 1
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 and 90 type sizes match... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports INTEGER*2... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 90 INTEGER*2... 2
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 and 90 type sizes match... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports INTEGER*4... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 90 INTEGER*4... 4
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 and 90 type sizes match... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports INTEGER*8... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 90 INTEGER*8... 8
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 and 90 type sizes match... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports INTEGER*16... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports REAL... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 90 REAL... 4
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 and 90 type sizes match... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports REAL*4... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 90 REAL*4... 4
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 and 90 type sizes match... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports REAL*8... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 90 REAL*8... 8
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 and 90 type sizes match... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports REAL*16... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports DOUBLE PRECISION... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 90 DOUBLE PRECISION... 8
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 and 90 type sizes match... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports COMPLEX... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 90 COMPLEX... 8
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 and 90 type sizes match... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports COMPLEX*8... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 90 COMPLEX*8... 8
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 and 90 type sizes match... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports COMPLEX*16... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 90 COMPLEX*16... 16
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 and 90 type sizes match... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports COMPLEX*32... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports DOUBLE COMPLEX... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 90 DOUBLE COMPLEX... 16
</span><br>
<span class="quotelev1">&gt; checking Fortran 90 kind of MPI_INTEGER_KIND  
</span><br>
<span class="quotelev1">&gt; (selected_int_kind(9))... 4
</span><br>
<span class="quotelev1">&gt; checking Fortran 90 kind of MPI_ADDRESS_KIND  
</span><br>
<span class="quotelev1">&gt; (selected_int_kind(9))... (cached) 4
</span><br>
<span class="quotelev1">&gt; checking Fortran 90 kind of MPI_OFFSET_KIND (selected_int_kind(18))...
</span><br>
<span class="quotelev1">&gt; .... Plus a lot more output....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, when I run mpif90 I get the following output:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev1">&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas?????
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again,
</span><br>
<span class="quotelev1">&gt; Chase
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Original Message ----
</span><br>
<span class="quotelev1">&gt; From: &quot;Teige, Scott W&quot; &lt;steige_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Chase Latta &lt;chaselatta_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, March 4, 2008 8:38:59 AM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problems Compiling gfortran on mac os-x  
</span><br>
<span class="quotelev1">&gt; 10.5.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might also add:
</span><br>
<span class="quotelev1">&gt; FFLAGS=&quot;-m32 -std=legacy&quot; \
</span><br>
<span class="quotelev1">&gt; --with-wrapper-fflags=&quot;-m32 -std=legacy&quot;
</span><br>
<span class="quotelev1">&gt; to your configure. This will get gfortran to compile f77 sources.
</span><br>
<span class="quotelev1">&gt; (and the mpi wrapped gfortran to do the same)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; S.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Quoting Chase Latta &lt;chaselatta_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am working with a few other physics students on my campus to try  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt; &gt; get open-mpi to run on a cluster of 8 imacs all running mac os-x
</span><br>
<span class="quotelev2">&gt; &gt; 10.5.3.  Before I start I will let you know that we are not the most
</span><br>
<span class="quotelev2">&gt; &gt; savvy programmers so any detailed information would be much
</span><br>
<span class="quotelev2">&gt; &gt; appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We ran the default install of open-mpi and everything installed
</span><br>
<span class="quotelev2">&gt; &gt; correctly.  We are able to compile and run c programs using the  
</span><br>
<span class="quotelev1">&gt; mpicc
</span><br>
<span class="quotelev2">&gt; &gt; wrappers.  The problem that we are having is that we are unable to
</span><br>
<span class="quotelev2">&gt; &gt; get the fortran wrappers to work.  We are using gfortran and the
</span><br>
<span class="quotelev2">&gt; &gt; compiler works perfectly on its own.  To enable the wrapper  
</span><br>
<span class="quotelev1">&gt; compilers
</span><br>
<span class="quotelev2">&gt; &gt; I ran the command ./configure --enable-f77 --enable-f90 F77=gfortran
</span><br>
<span class="quotelev2">&gt; &gt; F90=gfortran.  I then ran the make and make install commands.
</span><br>
<span class="quotelev2">&gt; &gt; Everything appeared to work correctly.  The problem is that when I
</span><br>
<span class="quotelev2">&gt; &gt; try to compile a program with mpif90 I get an error saying that
</span><br>
<span class="quotelev2">&gt; &gt; open-mpi was not built with fortran 90 support (the same happens  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev2">&gt; &gt; f77).  I have looked everywhere in the faq's and cannot figure out
</span><br>
<span class="quotelev2">&gt; &gt; why this is happening.  The only thing that I can think is that when
</span><br>
<span class="quotelev2">&gt; &gt; I tell the F90 wrapper to use gfortran it tells me that there are no
</span><br>
<span class="quotelev2">&gt; &gt; flags in my compiler to compiler to compile .f and .f90 files; even
</span><br>
<span class="quotelev2">&gt; &gt; though I can compile .f
</span><br>
<span class="quotelev2">&gt; &gt; and .f90 files with my gfortran compiler.  Any help would be very
</span><br>
<span class="quotelev2">&gt; &gt; much appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt; &gt; Chase
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ____________________________________________________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; Be a better friend, newshound, and
</span><br>
<span class="quotelev2">&gt; &gt; know-it-all with Yahoo! Mobile.  Try it now.
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://mobile.yahoo.com/;_ylt=Ahu06i62sR8HDtDypao8Wcj9tAcJ">http://mobile.yahoo.com/;_ylt=Ahu06i62sR8HDtDypao8Wcj9tAcJ</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking for last minute shopping deals? Find them fast with Yahoo!  
</span><br>
<span class="quotelev1">&gt; Search._______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5134/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5135.php">Jeff Squyres: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Previous message:</strong> <a href="5133.php">Chase Latta: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>In reply to:</strong> <a href="5133.php">Chase Latta: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5135.php">Jeff Squyres: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Reply:</strong> <a href="5135.php">Jeff Squyres: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
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
