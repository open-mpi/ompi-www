<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar  1 13:55:22 2006" -->
<!-- isoreceived="20060301185522" -->
<!-- sent="Wed, 1 Mar 2006 19:55:16 +0100" -->
<!-- isosent="20060301185516" -->
<!-- name="Bjoern Nachtwey" -->
<!-- email="b.nachtwey_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.0.x and PGI pgf90" -->
<!-- id="200603011955.18289.b.nachtwey_at_tu-bs.de" -->
<!-- charset="iso-8859-15" -->
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
<strong>From:</strong> Bjoern Nachtwey (<em>b.nachtwey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-01 13:55:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0743.php">Brent LEBACK: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Previous message:</strong> <a href="0741.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0743.php">Brent LEBACK: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Reply:</strong> <a href="0743.php">Brent LEBACK: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Reply:</strong> <a href="0746.php">Troy Telford: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Reply:</strong> <a href="0749.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>
<p>I tried to compile OpenMPI using the PortzlandGroup compiler Suite, but the 
<br>
configure-script tells me, my fortran compiler cannot compile .f or .f90 
<br>
files. I'm sure it can ;-)
<br>
<p>well I think I have to set samespecial flags but I don't  have an idea which 
<br>
ones :-(
<br>
<p>Perhaps somebody has done it and can tell me?
<br>
<p>I'm running debian/Sarge with PGI 6.0
<br>
<p>the use of ./configure looks like (it's part of a bash-script):
<br>
<p>===========/ snip /===========
<br>
#! /bin/bash
<br>
export PREFIX=/opt/OpenMPI-1.0.1/GM-STATIC/pgi60
<br>
<p>export GM_HOME=/opt/gm
<br>
export CFLAGS=&quot;-O3 -tp k8-64&quot;
<br>
<p>export CC=/opt/pgi/linux86-64/6.0/bin/pgcc
<br>
export CXX=/opt/pgi/linux86-64/6.0/bin/pgCC
<br>
export FC=/opt/pgi/linux86-64/6.0/bin/pgf77
<br>
export F90=/opt/pgi/linux86-64/6.0/bin/pgf95
<br>
<p>export RSHCOMMAND=rsh
<br>
<p>export FCFLAGS=$CFLAGS
<br>
export F90FLAGS=$CFLAGS
<br>
export CXXFLAGS=$CFLAGS
<br>
<p># configure
<br>
<p>rm -f log/config-mine.pgi.GM-STATIC.log
<br>
<p>./configure --prefix=$PREFIX  --with-gm=$GM_HOME --without-threads \ 
<br>
--enable-static --disable-shared &gt;&amp; log/config-mine.pgi.GM-STATIC.log
<br>
<p>===========/ snap /=========== 
<br>
<p>the error I get is this:
<br>
<p>===========/ snip /===========
<br>
<p>*** Fortran 90/95 compiler
<br>
checking whether we are using the GNU Fortran compiler... no
<br>
checking whether /opt/pgi/linux86-64/6.0/bin/pgf77 accepts -g... yes
<br>
checking for Fortran flag to compile .f files... none
<br>
checking for Fortran flag to compile .f90 files... unknown
<br>
configure: error: Fortran could not compile .f90 files
<br>
<p>===========/ snap /=========== 
<br>
<p>I also replaced pgf77 by pgf95 for FC, but without improvement:
<br>
<p>===========/ snip /===========
<br>
<p>*** Fortran 90/95 compiler
<br>
checking whether we are using the GNU Fortran compiler... no
<br>
checking whether /opt/pgi/linux86-64/6.0/bin/pgf95 accepts -g... yes
<br>
checking for Fortran flag to compile .f files... none
<br>
checking for Fortran flag to compile .f90 files... none
<br>
checking for Fortran flag to compile .f95 files... none
<br>
checking whether g77 and /opt/pgi/linux86-64/6.0/bin/pgf95 compilers are 
<br>
compatible... no
<br>
configure: WARNING: *** Fortran 77 and Fortran 90 compilers are not link 
<br>
compatible
<br>
configure: WARNING: *** Disabling Fortran 90/95 bindings
<br>
<p>===========/ snap /=========== 
<br>
<p>Thanks &amp; best regards,
<br>
<p>Bj&#248;rn
<br>
<p>PS: Full Script and Logfiles can be found at
<br>
<a href="http://www-public.tu-bs.de:8080/~nachtwey/OpenMPI/">http://www-public.tu-bs.de:8080/~nachtwey/OpenMPI/</a>
<br>
<p>###################################################################
<br>
Dipl.-Ing. Bj&#248;rn Nachtwey
<br>
Technische Universit&#228;t Carolo Wilhelmina zu Braunschweig
<br>
Institut f&#252;r Computeranwendungen im Bauingenieurwesen (CAB)
<br>
Pockelsstra&#223;e 3 (Okerhochhaus, 9. Obergeschoss) 38106 Braunschweig
<br>
Telephon: +49 (0)531 / 391 - 7589  TeleFax: +49 (0)531 / 391 - 7599
<br>
<a href="http://www.cab.bau.tu-bs.de/">http://www.cab.bau.tu-bs.de/</a>             mailto:b.nachtwey_at_[hidden]
<br>
PGP-Fingerprint: B472 526A A903 4AEB 9269 EC0B 9CDE 7465 CE87
<br>
###################################################################
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0743.php">Brent LEBACK: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Previous message:</strong> <a href="0741.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0743.php">Brent LEBACK: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Reply:</strong> <a href="0743.php">Brent LEBACK: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Reply:</strong> <a href="0746.php">Troy Telford: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Reply:</strong> <a href="0749.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
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
