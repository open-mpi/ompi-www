<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  2 11:09:17 2006" -->
<!-- isoreceived="20060302160917" -->
<!-- sent="Thu, 2 Mar 2006 10:08:23 -0600 " -->
<!-- isosent="20060302160823" -->
<!-- name="Adams Samuel D Contr AFRL/HEDR" -->
<!-- email="Samuel.Adams.ctr_at_[hidden]" -->
<!-- subject="[OMPI users] Building OpenMPI with Lahey Fortran 95" -->
<!-- id="4F5BE74AB02653448520E9692496874101E4DC_at_fscnbc18.brooks.af.mil" -->
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
<strong>From:</strong> Adams Samuel D Contr AFRL/HEDR (<em>Samuel.Adams.ctr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-02 11:08:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0752.php">Jean Latour: "[OMPI users] Spawn and distribution of slaves"</a>
<li><strong>Previous message:</strong> <a href="0750.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0774.php">Adams Samuel D Contr AFRL/HEDR: "Re: [OMPI users] Building OpenMPI with Lahey Fortran 95"</a>
<li><strong>Maybe reply:</strong> <a href="0774.php">Adams Samuel D Contr AFRL/HEDR: "Re: [OMPI users] Building OpenMPI with Lahey Fortran 95"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to build OpenMPI using Lahey Fortran 95 6.2 on a Fedora Core 3
<br>
box.  I run the configure script ok, but the problem occurs when run make.
<br>
It appears that it is bombing out when it is building the Fortran libraries.
<br>
It seems like to me that OpenMPI is naming its modules with .ompi_mod
<br>
instead of .mod which my compiler expects.  Included below is the output
<br>
from what I was doing with building the code.  Do you know how to tell the
<br>
configure script to only make .mod modules, or is there something else that
<br>
I need to do?
<br>
<p>Output:
<br>
--------I think this is the relevant part-----------
<br>
creating libmpi_f77.la
<br>
(cd .libs &amp;&amp; rm -f libmpi_f77.la &amp;&amp; ln -s ../libmpi_f77.la libmpi_f77.la)
<br>
make[4]: Leaving directory `/root/openmpi-1.0.1/ompi/mpi/f77'
<br>
make[3]: Leaving directory `/root/openmpi-1.0.1/ompi/mpi/f77'
<br>
Making all in f90
<br>
make[3]: Entering directory `/root/openmpi-1.0.1/ompi/mpi/f90'
<br>
lf95 -I../../../include -I../../../include -I.  -c -o mpi_kinds.ompi_module
<br>
mpi_kinds.f90
<br>
f95: fatal: &quot;mpi_kinds.ompi_module&quot;: Invalid file suffix.
<br>
make[3]: *** [mpi_kinds.ompi_module] Error 1
<br>
make[3]: Leaving directory `/root/openmpi-1.0.1/ompi/mpi/f90'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/root/openmpi-1.0.1/ompi/mpi'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/root/openmpi-1.0.1/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>---------------attached is the rest of the output----------------
<br>
<p>Sam Adams
<br>
General Dynamics - Network Systems
<br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0751/OpenMPI.out.txt">OpenMPI.out.txt</a>
</ul>
<!-- attachment="OpenMPI.out.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0752.php">Jean Latour: "[OMPI users] Spawn and distribution of slaves"</a>
<li><strong>Previous message:</strong> <a href="0750.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0774.php">Adams Samuel D Contr AFRL/HEDR: "Re: [OMPI users] Building OpenMPI with Lahey Fortran 95"</a>
<li><strong>Maybe reply:</strong> <a href="0774.php">Adams Samuel D Contr AFRL/HEDR: "Re: [OMPI users] Building OpenMPI with Lahey Fortran 95"</a>
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
