<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat May  5 22:53:29 2007" -->
<!-- isoreceived="20070506025329" -->
<!-- sent="Sat, 5 May 2007 19:53:10 -0700 (PDT)" -->
<!-- isosent="20070506025310" -->
<!-- name="Rob" -->
<!-- email="spamrefuse_at_[hidden]" -->
<!-- subject="[OMPI users] AlphaServer &amp;amp; MPI" -->
<!-- id="644413.21676.qm_at_web33303.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Rob (<em>spamrefuse_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-05 22:53:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3197.php">Rob: "[OMPI users] mpirun: &quot;-wd&quot; depreciated?"</a>
<li><strong>Previous message:</strong> <a href="3195.php">Jeff Squyres: "Re: [OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have been trying to get MPI working on two old AlphaServers in my lab:
<br>
es40 and es45 models.
<br>
I prefer using OpenMPI, but as far as I understand, OpenMPI does not
<br>
support AlphaServers anymore.
<br>
<p>Just for the record here, I'd like to report that eventually I got MPI working
<br>
on my two AlphaServers using MPICH1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www-unix.mcs.anl.gov/mpi/mpich1">http://www-unix.mcs.anl.gov/mpi/mpich1</a>
<br>
as follows:
<br>
<p>setenv LD_LIBRARY_PATH /opt/gcc/lib
<br>
setenv PATH /opt/gcc/bin:${PATH}
<br>
setenv CXX /opt/gcc/bin/g++
<br>
setenv CCFLAGS -mfp-trap-mode=su
<br>
setenv CC /opt/gcc/bin/gcc
<br>
setenv CFLAGS -mfp-trap-mode=su
<br>
setenv FC /opt/gcc/bin/gfortran
<br>
setenv FFLAGS -mfp-trap-mode=su
<br>
setenv F90 /opt/gcc/bin/gfortran
<br>
setenv F90FLAGS -mfp-trap-mode=su
<br>
setenv F77_GETARGDECL &quot; &quot;
<br>
setenv RSHCOMMAND ssh
<br>
./configure --prefix=/opt/mpich --with-arch=LINUX_ALPHA
<br>
<p><p>The reference to /opt/gcc is my own compilation of current GCC gcc/g++ and
<br>
fortran compilers; the latter can handle F90 and F95 code, hence I'm able to
<br>
generate decent mpif77 and mpif90 compilers.
<br>
The &quot;-mfp-trap-mode=su&quot; flag is needed with GCC on the AlphaServers,
<br>
to prevent runtime SIGSEGV aborts.
<br>
Without the &quot;F77_GETARGDECL&quot;, the MPI fortran compiler will not build.
<br>
<p>Cheers,
<br>
Rob.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
---------------------------------
<br>
Ahhh...imagining that irresistible &quot;new car&quot; smell?
<br>
&nbsp;Check outnew cars at Yahoo! Autos.
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3196/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3197.php">Rob: "[OMPI users] mpirun: &quot;-wd&quot; depreciated?"</a>
<li><strong>Previous message:</strong> <a href="3195.php">Jeff Squyres: "Re: [OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
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
