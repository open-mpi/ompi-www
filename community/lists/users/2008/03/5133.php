<?
$subject_val = "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 01:31:14 2008" -->
<!-- isoreceived="20080305063114" -->
<!-- sent="Tue, 4 Mar 2008 22:31:07 -0800 (PST)" -->
<!-- isosent="20080305063107" -->
<!-- name="Chase Latta" -->
<!-- email="chaselatta_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3" -->
<!-- id="374354.74184.qm_at_web31405.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Problems Compiling gfortran on mac os-x 10.5.3" -->
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
<strong>From:</strong> Chase Latta (<em>chaselatta_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-05 01:31:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5134.php">George Bosilca: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Previous message:</strong> <a href="5132.php">Ashley Pittman: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>Maybe in reply to:</strong> <a href="5126.php">Chase Latta: "[OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5134.php">George Bosilca: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Reply:</strong> <a href="5134.php">George Bosilca: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for all of your quick replies.  However, I tried this an amstill receiving the error.  I completely removed open-mpi and  triedreinstalling it.  The configuration options I used were: 
<br>
<p>./configure--prefix=/usr/local --enable-f77 --enable-f90 F77=gfortran FC=gfortranFFLAGS=&quot;-m32 -std=legacy&quot; --with-wrapper-fflags=&quot;-m32 -std=legacy&quot; --with-mpi-f90-size=medium --enable-mpirun-prefix-by-defaultFCFLAGS=&quot;-m32&quot; --with-wrapper-fcflags=&quot;-m32&quot;
<br>
<p>The condensed output that I received was:
<br>
*** Configuration options
<br>
checking Whether to run code coverage... no
<br>
checking whether to debug memory usage... no
<br>
checking whether to profile memory usage... no
<br>
checking if want developer-level compiler pickyness... no
<br>
checking if want developer-level debugging code... no
<br>
checking if want Fortran 77 bindings... yes
<br>
checking if want Fortran 90 bindings... yes
<br>
checking desired Fortran 90 bindings &quot;size&quot;... medium
<br>
checking whether to enable PMPI... yes
<br>
checking if want C++ bindings... yes
<br>
checking if want MPI::SEEK_SET support... yes
<br>
checking if want to enable weak symbol support... yes
<br>
checking if want run-time MPI parameter checking... runtime
<br>
checking if want to install OMPI header files... no
<br>
checking if want pretty-print stacktrace... yes
<br>
checking if want deprecated executable names... no
<br>
checking if peruse support is required... no
<br>
checking max supported array dimension in F90 MPI bindings... 4
<br>
checking if pty support should be enabled... yes
<br>
checking if user wants dlopen support... yes
<br>
checking if heterogeneous support should be enabled... yes
<br>
checking if want trace file debugging... no
<br>
checking if want IPv6 support... yes (if underlying system supports it)
<br>
checking if want orterun &quot;--prefix&quot; behavior to be enabled by default... yes
<br>
...Lots of output
<br>
*** Fortran 90/95 compiler
<br>
checking whether we are using the GNU Fortran compiler... yes
<br>
checking whether gfortran accepts -g... yes
<br>
checking if Fortran compiler works... yes
<br>
checking whether gfortran and gfortran compilers are compatible... yes
<br>
checking for extra arguments to build a shard library... impossible -- -static
<br>
checking for Fortran flag to compile .f files... none
<br>
checking for Fortran flag to compile .f90 files... none
<br>
checking for Fortran 90 compiler module include flag... -I
<br>
checking if Fortran 90 compiler supports LOGICAL... yes
<br>
checking size of Fortran 90 LOGICAL... 4
<br>
checking if Fortran 77 and 90 type sizes match... yes
<br>
checking if Fortran 90 compiler supports INTEGER... yes
<br>
checking size of Fortran 90 INTEGER... 4
<br>
checking if Fortran 77 and 90 type sizes match... yes
<br>
checking if Fortran 90 compiler supports INTEGER*1... yes
<br>
checking size of Fortran 90 INTEGER*1... 1
<br>
checking if Fortran 77 and 90 type sizes match... yes
<br>
checking if Fortran 90 compiler supports INTEGER*2... yes
<br>
checking size of Fortran 90 INTEGER*2... 2
<br>
checking if Fortran 77 and 90 type sizes match... yes
<br>
checking if Fortran 90 compiler supports INTEGER*4... yes
<br>
checking size of Fortran 90 INTEGER*4... 4
<br>
checking if Fortran 77 and 90 type sizes match... yes
<br>
checking if Fortran 90 compiler supports INTEGER*8... yes
<br>
checking size of Fortran 90 INTEGER*8... 8
<br>
checking if Fortran 77 and 90 type sizes match... yes
<br>
checking if Fortran 90 compiler supports INTEGER*16... no
<br>
checking if Fortran 90 compiler supports REAL... yes
<br>
checking size of Fortran 90 REAL... 4
<br>
checking if Fortran 77 and 90 type sizes match... yes
<br>
checking if Fortran 90 compiler supports REAL*4... yes
<br>
checking size of Fortran 90 REAL*4... 4
<br>
checking if Fortran 77 and 90 type sizes match... yes
<br>
checking if Fortran 90 compiler supports REAL*8... yes
<br>
checking size of Fortran 90 REAL*8... 8
<br>
checking if Fortran 77 and 90 type sizes match... yes
<br>
checking if Fortran 90 compiler supports REAL*16... no
<br>
checking if Fortran 90 compiler supports DOUBLE PRECISION... yes
<br>
checking size of Fortran 90 DOUBLE PRECISION... 8
<br>
checking if Fortran 77 and 90 type sizes match... yes
<br>
checking if Fortran 90 compiler supports COMPLEX... yes
<br>
checking size of Fortran 90 COMPLEX... 8
<br>
checking if Fortran 77 and 90 type sizes match... yes
<br>
checking if Fortran 90 compiler supports COMPLEX*8... yes
<br>
checking size of Fortran 90 COMPLEX*8... 8
<br>
checking if Fortran 77 and 90 type sizes match... yes
<br>
checking if Fortran 90 compiler supports COMPLEX*16... yes
<br>
checking size of Fortran 90 COMPLEX*16... 16
<br>
checking if Fortran 77 and 90 type sizes match... yes
<br>
checking if Fortran 90 compiler supports COMPLEX*32... no
<br>
checking if Fortran 90 compiler supports DOUBLE COMPLEX... yes
<br>
checking size of Fortran 90 DOUBLE COMPLEX... 16
<br>
checking Fortran 90 kind of MPI_INTEGER_KIND (selected_int_kind(9))... 4
<br>
checking Fortran 90 kind of MPI_ADDRESS_KIND (selected_int_kind(9))... (cached) 4
<br>
checking Fortran 90 kind of MPI_OFFSET_KIND (selected_int_kind(18))... 
<br>
.... Plus a lot more output....
<br>
<p>However, when I run mpif90 I get the following output:
<br>
--------------------------------------------------------------------------
<br>
Unfortunately, this installation of Open MPI was not compiled with
<br>
Fortran 90 support.  As such, the mpif90 compiler is non-functional.
<br>
--------------------------------------------------------------------------
<br>
<p>Any ideas?????
<br>
<p>Thanks again,
<br>
Chase
<br>
<p>----- Original Message ----
<br>
From: &quot;Teige, Scott W&quot; &lt;steige_at_[hidden]&gt;
<br>
To: Chase Latta &lt;chaselatta_at_[hidden]&gt;
<br>
Sent: Tuesday, March 4, 2008 8:38:59 AM
<br>
Subject: Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3
<br>
<p>You might also add:
<br>
FFLAGS=&quot;-m32 -std=legacy&quot; \
<br>
--with-wrapper-fflags=&quot;-m32 -std=legacy&quot;
<br>
to your configure. This will get gfortran to compile f77 sources.
<br>
(and the mpi wrapped gfortran to do the same)
<br>
<p>S.
<br>
<p>Quoting Chase Latta &lt;chaselatta_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am working with a few other physics students on my campus to try to
</span><br>
<span class="quotelev1">&gt; get open-mpi to run on a cluster of 8 imacs all running mac os-x
</span><br>
<span class="quotelev1">&gt; 10.5.3.  Before I start I will let you know that we are not the most
</span><br>
<span class="quotelev1">&gt; savvy programmers so any detailed information would be much
</span><br>
<span class="quotelev1">&gt; appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We ran the default install of open-mpi and everything installed
</span><br>
<span class="quotelev1">&gt; correctly.  We are able to compile and run c programs using the mpicc
</span><br>
<span class="quotelev1">&gt; wrappers.  The problem that we are having is that we are unable to
</span><br>
<span class="quotelev1">&gt; get the fortran wrappers to work.  We are using gfortran and the
</span><br>
<span class="quotelev1">&gt; compiler works perfectly on its own.  To enable the wrapper compilers
</span><br>
<span class="quotelev1">&gt; I ran the command ./configure --enable-f77 --enable-f90 F77=gfortran
</span><br>
<span class="quotelev1">&gt; F90=gfortran.  I then ran the make and make install commands.
</span><br>
<span class="quotelev1">&gt; Everything appeared to work correctly.  The problem is that when I
</span><br>
<span class="quotelev1">&gt; try to compile a program with mpif90 I get an error saying that
</span><br>
<span class="quotelev1">&gt; open-mpi was not built with fortran 90 support (the same happens with
</span><br>
<span class="quotelev1">&gt; f77).  I have looked everywhere in the faq's and cannot figure out
</span><br>
<span class="quotelev1">&gt; why this is happening.  The only thing that I can think is that when
</span><br>
<span class="quotelev1">&gt; I tell the F90 wrapper to use gfortran it tells me that there are no
</span><br>
<span class="quotelev1">&gt; flags in my compiler to compiler to compile .f and .f90 files; even
</span><br>
<span class="quotelev1">&gt; though I can compile .f
</span><br>
<span class="quotelev1">&gt; and .f90 files with my gfortran compiler.  Any help would be very
</span><br>
<span class="quotelev1">&gt; much appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Chase
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
<span class="quotelev1">&gt; ____________________________________________________________________________________
</span><br>
<span class="quotelev1">&gt; Be a better friend, newshound, and
</span><br>
<span class="quotelev1">&gt; know-it-all with Yahoo! 
</span><br>
Mobile.  Try it now.
<br>
<span class="quotelev1">&gt; <a href="http://mobile.yahoo.com/;_ylt=Ahu06i62sR8HDtDypao8Wcj9tAcJ">http://mobile.yahoo.com/;_ylt=Ahu06i62sR8HDtDypao8Wcj9tAcJ</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________________________________________________________________
<br>
Never miss a thing.  Make Yahoo your home page. 
<br>
<a href="http://www.yahoo.com/r/hs">http://www.yahoo.com/r/hs</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5133/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5134.php">George Bosilca: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Previous message:</strong> <a href="5132.php">Ashley Pittman: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>Maybe in reply to:</strong> <a href="5126.php">Chase Latta: "[OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5134.php">George Bosilca: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Reply:</strong> <a href="5134.php">George Bosilca: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
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
