<?
$subject_val = "Re: [OMPI devel] Fortran 90 Interface";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 09:17:40 2009" -->
<!-- isoreceived="20090122141740" -->
<!-- sent="Thu, 22 Jan 2009 09:17:26 -0500" -->
<!-- isosent="20090122141726" -->
<!-- name="David Robertson" -->
<!-- email="robertson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran 90 Interface" -->
<!-- id="49787FF6.1070706_at_marine.rutgers.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI devel] Fortran 90 Interface" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fortran 90 Interface<br>
<strong>From:</strong> David Robertson (<em>robertson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-22 09:17:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5272.php">Bogdan Costescu: "[OMPI devel] Still troubles with 1.3 and MX"</a>
<li><strong>Previous message:</strong> <a href="5270.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<li><strong>Maybe in reply to:</strong> <a href="5263.php">David Robertson: "[OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5283.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5283.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff,
<br>
<p>My mailing list settings were digest so I apologize if this does not get 
<br>
filed under the right thread.
<br>
<p>I have attached the requested info. I included the sources to the test 
<br>
program(s). I have left the copies of the .mod files. It should be 
<br>
mentioned that I did not write this code. It was written by the 
<br>
developer of the ROMS ocean model, Hernan Arango.
<br>
<p>I don't know how helpful this code will be unless you happen to have 
<br>
HDF5/NetCDF4 already installed. I looked at the code NetCDF4 uses to 
<br>
test parallel IO but it is all in C so it wasn't very helpful. If you 
<br>
have the NetCDF4 source code the parallel IO tests are in the nc_test4 
<br>
directory.
<br>
<p>We are using version 8.0-2 of the PGI compiler suite and OpenMPI 1.3 but 
<br>
the results were identical (aside from the format of the returned error) 
<br>
for versions 1.2.6 and 1.2.8. All versions of OpenMPI were compiled 
<br>
statically. I have also tried this with gfortran 4.2.5 and ifort 
<br>
10.1.018 with the same results.
<br>
<p>Thanks,
<br>
David Robertson
<br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5271/ompi_f90_problem.tar.gz">ompi_f90_problem.tar.gz</a>
</ul>
<!-- attachment="ompi_f90_problem.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5272.php">Bogdan Costescu: "[OMPI devel] Still troubles with 1.3 and MX"</a>
<li><strong>Previous message:</strong> <a href="5270.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<li><strong>Maybe in reply to:</strong> <a href="5263.php">David Robertson: "[OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5283.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5283.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
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
