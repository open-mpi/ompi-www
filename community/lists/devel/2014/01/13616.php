<?
$subject_val = "[OMPI devel] trunk - broken logic for oshmem:bindings:fort";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 01:38:56 2014" -->
<!-- isoreceived="20140109063856" -->
<!-- sent="Wed, 8 Jan 2014 22:38:54 -0800" -->
<!-- isosent="20140109063854" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk - broken logic for oshmem:bindings:fort" -->
<!-- id="CAAvDA16ww14ExrZ5tHndLYWeLvdCpHz2FJVxhgr3jU=vD6w9Qw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] trunk - broken logic for oshmem:bindings:fort<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 01:38:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13617.php">marco atzeri: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13615.php">Paul Hargrove: "[OMPI devel] trunk - non-portable examples/Makefie"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Building the trunk on FreeBSD-9/x86-64, and using gmake to work around the
<br>
non-portable examples/Makefile, I *still* encounter issues with shmemfort
<br>
when running &quot;gmake&quot; in the examples subdirectory:
<br>
<p>$ gmake
<br>
mpicc -g    hello_c.c   -o hello_c
<br>
mpicc -g    ring_c.c   -o ring_c
<br>
mpicc -g    connectivity_c.c   -o connectivity_c
<br>
gmake[1]: Entering directory
<br>
`/usr/home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/BLD/examples'
<br>
shmemcc -g hello_oshmem_c.c -o hello_oshmem
<br>
gmake[1]: Leaving directory
<br>
`/usr/home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/BLD/examples'
<br>
gmake[1]: Entering directory
<br>
`/usr/home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/BLD/examples'
<br>
shmemcc -g ring_oshmem_c.c -o ring_oshmem
<br>
gmake[1]: Leaving directory
<br>
`/usr/home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/BLD/examples'
<br>
gmake[1]: Entering directory
<br>
`/usr/home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/BLD/examples'
<br>
shmemfort -g hello_oshmemfh.f90 -o hello_oshmemfh
<br>
--------------------------------------------------------------------------
<br>
No underlying compiler was specified in the wrapper compiler data file
<br>
(e.g., mpicc-wrapper-data.txt)
<br>
--------------------------------------------------------------------------
<br>
gmake[1]: *** [hello_oshmemfh] Error 1
<br>
gmake[1]: Leaving directory
<br>
`/usr/home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/BLD/examples'
<br>
gmake[1]: Entering directory
<br>
`/usr/home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/BLD/examples'
<br>
shmemfort -g ring_oshmemfh.f90 -o ring_oshmemfh
<br>
--------------------------------------------------------------------------
<br>
No underlying compiler was specified in the wrapper compiler data file
<br>
(e.g., mpicc-wrapper-data.txt)
<br>
--------------------------------------------------------------------------
<br>
gmake[1]: *** [ring_oshmemfh] Error 1
<br>
gmake[1]: Leaving directory
<br>
`/usr/home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/BLD/examples'
<br>
gmake: *** [mpi] Error 2
<br>
<p>If one looks at the logic in the Makefile, one sees use of shmem_info to
<br>
determine if the fortran bindings are available.  Running that utility
<br>
manually I see:
<br>
$ oshmem_info --parsable | grep bindings
<br>
bindings:c:yes
<br>
bindings:cxx:no
<br>
bindings:mpif.h:no
<br>
bindings:use_mpi:no
<br>
bindings:use_mpi:size:deprecated-ompi-info-value
<br>
bindings:use_mpi_f08:no
<br>
bindings:use_mpi_f08:compliance:The mpi_f08 module was not built
<br>
bindings:use_mpi_f08:subarrays-supported:no
<br>
bindings:java:no
<br>
oshmem:bindings:c:yes
<br>
oshmem:bindings:fort:yes
<br>
<p>This already looks suspicious because it reports fortran bindings for
<br>
oshmem but not for MPI.
<br>
Well, there is *no* fortran compiler on this system.  Quoting from the
<br>
configure output:
<br>
*** Fortran compiler
<br>
checking for gfortran... no
<br>
checking for f95... no
<br>
checking for fort... no
<br>
checking for xlf95... no
<br>
checking for ifort... no
<br>
checking for ifc... no
<br>
checking for efc... no
<br>
checking for pgfortran... no
<br>
checking for pgf95... no
<br>
checking for lf95... no
<br>
checking for f90... no
<br>
checking for xlf90... no
<br>
checking for pgf90... no
<br>
checking for epcf90... no
<br>
checking whether we are using the GNU Fortran compiler... no
<br>
checking whether  accepts -g... no
<br>
checking whether ln -s works... yes
<br>
configure: WARNING: *** All Fortran MPI bindings disabled (could not find
<br>
compiler)
<br>
<p>So, why &quot;oshmem:bindings:fort:yes&quot;?
<br>
The AM_CONDITIONAL &quot;OSHMEM_WANT_FORTRAN_BINDINGS&quot; is somehow &quot;true&quot; despite
<br>
the lack of a fortran compiler.  So, I assume something is busted
<br>
in config/oshmem_configure_options.m4.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13616/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13617.php">marco atzeri: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13615.php">Paul Hargrove: "[OMPI devel] trunk - non-portable examples/Makefie"</a>
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
