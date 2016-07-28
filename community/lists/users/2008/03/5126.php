<?
$subject_val = "[OMPI users] Problems Compiling gfortran on mac os-x 10.5.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 10:17:12 2008" -->
<!-- isoreceived="20080304151712" -->
<!-- sent="Tue, 4 Mar 2008 07:16:57 -0800 (PST)" -->
<!-- isosent="20080304151657" -->
<!-- name="Chase Latta" -->
<!-- email="chaselatta_at_[hidden]" -->
<!-- subject="[OMPI users] Problems Compiling gfortran on mac os-x 10.5.3" -->
<!-- id="335373.85536.qm_at_web31402.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3<br>
<strong>From:</strong> Chase Latta (<em>chaselatta_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-04 10:16:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5127.php">Aurélien Bouteiller: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>Previous message:</strong> <a href="5125.php">Tim Prins: "Re: [OMPI users] -prefix option to mpirun."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5128.php">Jeff Squyres: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Reply:</strong> <a href="5128.php">Jeff Squyres: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Maybe reply:</strong> <a href="5133.php">Chase Latta: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Maybe reply:</strong> <a href="5136.php">Frank Tabakin: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Maybe reply:</strong> <a href="5140.php">Frank Tabakin: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am working with a few other physics students on my campus to try to get open-mpi to run on a cluster of 8 imacs all running mac os-x 10.5.3.  Before I start I will let you know that we are not the most savvy programmers so any detailed information would be much appreciated.  
<br>
<p>We ran the default install of open-mpi and everything installed correctly.  We are able to compile and run c programs using the mpicc wrappers.  The problem that we are having is that we are unable to get the fortran wrappers to work.  We are using gfortran and the compiler works perfectly on its own.  To enable the wrapper compilers I ran the command ./configure --enable-f77 --enable-f90 F77=gfortran F90=gfortran.  I then ran the make and make install commands.  Everything appeared to work correctly.  The problem is that when I try to compile a program with mpif90 I get an error saying that open-mpi was not built with fortran 90 support (the same happens with f77).  I have looked everywhere in the faq's and cannot figure out why this is happening.  The only thing that I can think is that when I tell the F90 wrapper to use gfortran it tells me that there are no flags in my compiler to compiler to compile .f and .f90 files; even though I can compile .f
<br>
&nbsp;and .f90 files with my gfortran compiler.  Any help would be very much appreciated.
<br>
<p>Thanks in advance,
<br>
Chase
<br>
<p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________________________________________________________________
<br>
Be a better friend, newshound, and 
<br>
know-it-all with Yahoo! Mobile.  Try it now.  <a href="http://mobile.yahoo.com/;_ylt=Ahu06i62sR8HDtDypao8Wcj9tAcJ">http://mobile.yahoo.com/;_ylt=Ahu06i62sR8HDtDypao8Wcj9tAcJ</a> 
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5126/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5127.php">Aurélien Bouteiller: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>Previous message:</strong> <a href="5125.php">Tim Prins: "Re: [OMPI users] -prefix option to mpirun."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5128.php">Jeff Squyres: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Reply:</strong> <a href="5128.php">Jeff Squyres: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Maybe reply:</strong> <a href="5133.php">Chase Latta: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Maybe reply:</strong> <a href="5136.php">Frank Tabakin: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Maybe reply:</strong> <a href="5140.php">Frank Tabakin: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
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
