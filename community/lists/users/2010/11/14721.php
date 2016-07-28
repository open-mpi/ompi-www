<?
$subject_val = "[OMPI users] Compile fails OMPI-1.4.3 Sun Studio 12.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 10 11:54:25 2010" -->
<!-- isoreceived="20101110165425" -->
<!-- sent="Wed, 10 Nov 2010 11:54:09 -0500 (EST)" -->
<!-- isosent="20101110165409" -->
<!-- name="Gedaliah Wolosh" -->
<!-- email="gwolosh_at_[hidden]" -->
<!-- subject="[OMPI users] Compile fails OMPI-1.4.3 Sun Studio 12.2" -->
<!-- id="alpine.OSX.2.00.1011101150390.23469_at_maven.njit.edu" -->
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
<strong>Subject:</strong> [OMPI users] Compile fails OMPI-1.4.3 Sun Studio 12.2<br>
<strong>From:</strong> Gedaliah Wolosh (<em>gwolosh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-10 11:54:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14722.php">Number Cruncher: "[OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Previous message:</strong> <a href="14720.php">Jeff Squyres: "Re: [OMPI users] Creating 64-bit objects?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note: I had the same failure with OMPI 1.4.2
<br>
<p><p>libtool: link: f90 -G  .libs/mpi.o .libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o .libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o .libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o   -rpath /afs/cad/u/g/w/gwolosh/ftp/linux/openmpi-1.4.3/ompi/.libs -rpath /afs/cad/u/g/w/gwolosh/ftp/linux/openmpi-1.4.3/orte/.libs -rpath /afs/cad/u/g/w/gwolosh/ftp/linux/openmpi-1.4.3/opal/.libs -rpath /afs/cad/u/g/w/gwolosh/local/lib -L/afs/cad/u/g/w/gwolosh/ftp/linux/openmpi-1.4.3/or
<br>
te/.libs -L/afs/cad/u/g/w/gwolosh/ftp/linux/openmpi-1.4.3/opal/.libs ../../../ompi/.libs/libmpi.so /afs/cad/u/g/w/gwolosh/ftp/linu
<br>
x/openmpi-1.4.3/orte/.libs/libopen-rte.so /afs/cad/u/g/w/gwolosh/ftp/linux/openmpi-1.4.3/opal/.libs/libopen-pal.so -ldl -lnsl -lut
<br>
il -lm    -mt -soname libmpi_f90.so.0 -o .libs/libmpi_f90.so.0.0.1
<br>
f90: Warning: Option -path passed to ld, if ld is invoked, ignored otherwise
<br>
f90: Warning: Option -path passed to ld, if ld is invoked, ignored otherwise
<br>
f90: Warning: Option -path passed to ld, if ld is invoked, ignored otherwise
<br>
f90: Warning: Option -path passed to ld, if ld is invoked, ignored otherwise
<br>
f90: Warning: Option -soname passed to ld, if ld is invoked, ignored otherwise
<br>
/usr/bin/ld: unrecognized option '-path'
<br>
/usr/bin/ld: use the --help option for usage information
<br>
<p>Help??
<br>
<p><p>Gedaliah Wolosh
<br>
University Computing Systems - IST
<br>
New Jersey Institute of Technology
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14722.php">Number Cruncher: "[OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Previous message:</strong> <a href="14720.php">Jeff Squyres: "Re: [OMPI users] Creating 64-bit objects?"</a>
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
