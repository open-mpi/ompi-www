<?
$subject_val = "[OMPI users] Openmpi -MacOSX-mpif90 won't compile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 10:13:17 2009" -->
<!-- isoreceived="20090518141317" -->
<!-- sent="Mon, 18 May 2009 10:13:09 -0400" -->
<!-- isosent="20090518141309" -->
<!-- name="John Boccio" -->
<!-- email="boccio_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi -MacOSX-mpif90 won't compile" -->
<!-- id="30876C39-5029-4773-A324-6069E7318389_at_swarthmore.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Openmpi -MacOSX-mpif90 won't compile<br>
<strong>From:</strong> John Boccio (<em>boccio_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-18 10:13:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9361.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9359.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9362.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>Reply:</strong> <a href="9362.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I need to use mpif90 for some work on a parallel cluster for galaxy- 
<br>
galaxy collision research.
<br>
I am certainly not an expert in using UNIX to compile big packages  
<br>
like openmpi.
<br>
<p>I have list below all (I hope) relevant information and included  
<br>
output files(compressed) as an attachment.
<br>
<p>Thanks for any help,
<br>
<p>John Boccio
<br>
boccio_at_[hidden]
<br>
Department of Physics
<br>
Swarthmore College
<br>
<p><p>Here is g95 and xcode info.
<br>
Using openmpi-1.3
<br>
<p>Mac OSX Leopard 10.5.7
<br>
<p>g95 from www.g95.com
<br>
<p>g95 -v
<br>
Using built-in specs.
<br>
Target:
<br>
Configured with: ../configure --enable-languages=c
<br>
Thread model: posix
<br>
gcc version 4.0.3 (g95 0.92!) Oct 18 2008
<br>
<p>xcode311_2517_developerdvd.dmg
<br>
<p>openmpi-1.3
<br>
<p>sudo ./configure --enable-mpi-f77 --enable-mpi-f90 F77=&quot;/usr/bin/g95&quot;  
<br>
FC=&quot;/usr/bin/g95&quot; &gt; config.out
<br>
<p>sudo make clean
<br>
<p>sudo make clean prefix=/usr/local/openmpi-1.3
<br>
<p>sudo make &gt; make.out
<br>
<p>sudo make install prefix=/usr/local/openmpi-1.3 &gt; make-install.out
<br>
<p>/usr/local/openmpi-1.3/bin/mpif90
<br>
<p>--------------------------------------------------------------------------
<br>
Unfortunately, this installation of Open MPI was not compiled with
<br>
Fortran 90 support.  As such, the mpif90 compiler is non-functional.
<br>
--------------------------------------------------------------------------
<br>
<p>files included in attachment   ompi-output.tar.gz :
<br>
<p>config.out
<br>
config.status
<br>
config.log
<br>
Makefile
<br>
make.out
<br>
make-install.out
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9360/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9360/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9360/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9361.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9359.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9362.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>Reply:</strong> <a href="9362.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
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
