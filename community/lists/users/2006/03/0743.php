<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar  1 14:39:35 2006" -->
<!-- isoreceived="20060301193935" -->
<!-- sent="Wed, 01 Mar 2006 11:38:47 -0800" -->
<!-- isosent="20060301193847" -->
<!-- name="Brent LEBACK" -->
<!-- email="brent.leback_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90" -->
<!-- id="4405F847.4080605_at_st.com" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="200603011955.18289.b.nachtwey_at_tu-bs.de" -->
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
<strong>From:</strong> Brent LEBACK (<em>brent.leback_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-01 14:38:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0744.php">Greg Lindahl: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<li><strong>Previous message:</strong> <a href="0742.php">Bjoern Nachtwey: "[OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>In reply to:</strong> <a href="0742.php">Bjoern Nachtwey: "[OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0762.php">Bjoern Nachtwey: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90 ==&gt; Problem solved"</a>
<li><strong>Reply:</strong> <a href="0762.php">Bjoern Nachtwey: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90 ==&gt; Problem solved"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've used
<br>
<p>./configure --with-gnu-ld F77=pgf77 FFLAGS=-fastsse FC=pgf90 
<br>
FCFLAGS=-fastsse
<br>
<p>and that worked for me.  Email direct if you have problems.
<br>
<p>- Brent
<br>
<p>Bjoern Nachtwey wrote:
<br>
<p><span class="quotelev1">&gt;Hi folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I tried to compile OpenMPI using the PortzlandGroup compiler Suite, but the 
</span><br>
<span class="quotelev1">&gt;configure-script tells me, my fortran compiler cannot compile .f or .f90 
</span><br>
<span class="quotelev1">&gt;files. I'm sure it can ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;well I think I have to set samespecial flags but I don't  have an idea which 
</span><br>
<span class="quotelev1">&gt;ones :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Perhaps somebody has done it and can tell me?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm running debian/Sarge with PGI 6.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;the use of ./configure looks like (it's part of a bash-script):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;===========/ snip /===========
</span><br>
<span class="quotelev1">&gt;#! /bin/bash
</span><br>
<span class="quotelev1">&gt;export PREFIX=/opt/OpenMPI-1.0.1/GM-STATIC/pgi60
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;export GM_HOME=/opt/gm
</span><br>
<span class="quotelev1">&gt;export CFLAGS=&quot;-O3 -tp k8-64&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;export CC=/opt/pgi/linux86-64/6.0/bin/pgcc
</span><br>
<span class="quotelev1">&gt;export CXX=/opt/pgi/linux86-64/6.0/bin/pgCC
</span><br>
<span class="quotelev1">&gt;export FC=/opt/pgi/linux86-64/6.0/bin/pgf77
</span><br>
<span class="quotelev1">&gt;export F90=/opt/pgi/linux86-64/6.0/bin/pgf95
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;export RSHCOMMAND=rsh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;export FCFLAGS=$CFLAGS
</span><br>
<span class="quotelev1">&gt;export F90FLAGS=$CFLAGS
</span><br>
<span class="quotelev1">&gt;export CXXFLAGS=$CFLAGS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;# configure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;rm -f log/config-mine.pgi.GM-STATIC.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;./configure --prefix=$PREFIX  --with-gm=$GM_HOME --without-threads \ 
</span><br>
<span class="quotelev1">&gt;--enable-static --disable-shared &gt;&amp; log/config-mine.pgi.GM-STATIC.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;===========/ snap /=========== 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;the error I get is this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;===========/ snip /===========
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;*** Fortran 90/95 compiler
</span><br>
<span class="quotelev1">&gt;checking whether we are using the GNU Fortran compiler... no
</span><br>
<span class="quotelev1">&gt;checking whether /opt/pgi/linux86-64/6.0/bin/pgf77 accepts -g... yes
</span><br>
<span class="quotelev1">&gt;checking for Fortran flag to compile .f files... none
</span><br>
<span class="quotelev1">&gt;checking for Fortran flag to compile .f90 files... unknown
</span><br>
<span class="quotelev1">&gt;configure: error: Fortran could not compile .f90 files
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;===========/ snap /=========== 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I also replaced pgf77 by pgf95 for FC, but without improvement:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;===========/ snip /===========
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;*** Fortran 90/95 compiler
</span><br>
<span class="quotelev1">&gt;checking whether we are using the GNU Fortran compiler... no
</span><br>
<span class="quotelev1">&gt;checking whether /opt/pgi/linux86-64/6.0/bin/pgf95 accepts -g... yes
</span><br>
<span class="quotelev1">&gt;checking for Fortran flag to compile .f files... none
</span><br>
<span class="quotelev1">&gt;checking for Fortran flag to compile .f90 files... none
</span><br>
<span class="quotelev1">&gt;checking for Fortran flag to compile .f95 files... none
</span><br>
<span class="quotelev1">&gt;checking whether g77 and /opt/pgi/linux86-64/6.0/bin/pgf95 compilers are 
</span><br>
<span class="quotelev1">&gt;compatible... no
</span><br>
<span class="quotelev1">&gt;configure: WARNING: *** Fortran 77 and Fortran 90 compilers are not link 
</span><br>
<span class="quotelev1">&gt;compatible
</span><br>
<span class="quotelev1">&gt;configure: WARNING: *** Disabling Fortran 90/95 bindings
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;===========/ snap /=========== 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks &amp; best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Bj&#248;rn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;PS: Full Script and Logfiles can be found at
</span><br>
<span class="quotelev1">&gt;<a href="http://www-public.tu-bs.de:8080/~nachtwey/OpenMPI/">http://www-public.tu-bs.de:8080/~nachtwey/OpenMPI/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;###################################################################
</span><br>
<span class="quotelev1">&gt;Dipl.-Ing. Bj&#248;rn Nachtwey
</span><br>
<span class="quotelev1">&gt;Technische Universit&#228;t Carolo Wilhelmina zu Braunschweig
</span><br>
<span class="quotelev1">&gt;Institut f&#252;r Computeranwendungen im Bauingenieurwesen (CAB)
</span><br>
<span class="quotelev1">&gt;Pockelsstra&#223;e 3 (Okerhochhaus, 9. Obergeschoss) 38106 Braunschweig
</span><br>
<span class="quotelev1">&gt;Telephon: +49 (0)531 / 391 - 7589  TeleFax: +49 (0)531 / 391 - 7599
</span><br>
<span class="quotelev1">&gt;<a href="http://www.cab.bau.tu-bs.de/">http://www.cab.bau.tu-bs.de/</a>             mailto:b.nachtwey_at_[hidden]
</span><br>
<span class="quotelev1">&gt;PGP-Fingerprint: B472 526A A903 4AEB 9269 EC0B 9CDE 7465 CE87
</span><br>
<span class="quotelev1">&gt;###################################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0744.php">Greg Lindahl: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<li><strong>Previous message:</strong> <a href="0742.php">Bjoern Nachtwey: "[OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>In reply to:</strong> <a href="0742.php">Bjoern Nachtwey: "[OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0762.php">Bjoern Nachtwey: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90 ==&gt; Problem solved"</a>
<li><strong>Reply:</strong> <a href="0762.php">Bjoern Nachtwey: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90 ==&gt; Problem solved"</a>
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
