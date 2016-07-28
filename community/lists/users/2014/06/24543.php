<?
$subject_val = "[OMPI users] OpenMPI Compilation Error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 01:34:48 2014" -->
<!-- isoreceived="20140605053448" -->
<!-- sent="Thu, 5 Jun 2014 13:34:47 +0800" -->
<!-- isosent="20140605053447" -->
<!-- name="Alan Sang Loon" -->
<!-- email="alan988_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI Compilation Error" -->
<!-- id="CADUh-ZXEUfm5-6aMoDt5pS2dhWFTDJmAxmrVDCns62PN4UYeWA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI Compilation Error<br>
<strong>From:</strong> Alan Sang Loon (<em>alan988_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-05 01:34:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24544.php">Michael.Rachner_at_[hidden]: "[OMPI users] Bug in OpenMPI-1.8.1: missing routines mpi_win_allocate_shared, mpi_win_shared_query  called from Ftn95-code"</a>
<li><strong>Previous message:</strong> <a href="24542.php">Ralph Castain: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24546.php">George Bosilca: "Re: [OMPI users] OpenMPI Compilation Error"</a>
<li><strong>Reply:</strong> <a href="24546.php">George Bosilca: "Re: [OMPI users] OpenMPI Compilation Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have downloaded OpenMPI-1.8.1 and compiled it using Intel Compilers
<br>
(Intel Composer XE Suites 2013) and the command used is as follow:
<br>
<p>[Code]
<br>
./configure --prefix=/opt/openmpi-1.8.1 CC=icc CXX=icpc F77=ifort FC=ifort
<br>
make all install
<br>
[/code]
<br>
<p>Everything works just fine except I realized that the MPI library was built
<br>
for 32-bit integers (fort integer size=4)
<br>
<p>Then I reconfigured it using this command:
<br>
<p>[Code]
<br>
./configure --prefix=/opt/openmpi-1.8.1 CC=icc CXX=icpc F77=ifort FC=ifort
<br>
FFLAGS=-i8 FCFLAGS=-i8
<br>
[/code]
<br>
<p>However, when I tried to compile it using the make all install command,
<br>
some errors appeared at the end of the compilation which is described as
<br>
followed:
<br>
<p>[qoute]
<br>
... ...
<br>
&nbsp;&nbsp;CC       pdist_graph_create_adjacent_f.lo
<br>
pdist_graph_create_adjacent_f.c(79): error: &quot;c_sourceweights&quot; has already
<br>
been declared in the current scope
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_ARRAY_NAME_DECL(sourceweights);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>pdist_graph_create_adjacent_f.c(81): error: &quot;c_destweights&quot; has already
<br>
been declared in the current scope
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_ARRAY_NAME_DECL(destweights);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>compilation aborted for pdist_graph_create_adjacent_f.c (code 2)
<br>
make[3]: *** [pdist_graph_create_adjacent_f.lo] Error 1
<br>
make[3]: Leaving directory
<br>
`/opt/openmpi-1.8.1/ompi/mpi/fortran/mpif-h/profile'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/opt/openmpi-1.8.1/ompi/mpi/fortran/mpif-h'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/opt/openmpi-1.8.1/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
[/qoute]
<br>
<p>I have no idea of what is happening. Would anyone please help me to solve
<br>
the problem if it is possible?
<br>
<p>Thank you very much.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24543/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24544.php">Michael.Rachner_at_[hidden]: "[OMPI users] Bug in OpenMPI-1.8.1: missing routines mpi_win_allocate_shared, mpi_win_shared_query  called from Ftn95-code"</a>
<li><strong>Previous message:</strong> <a href="24542.php">Ralph Castain: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24546.php">George Bosilca: "Re: [OMPI users] OpenMPI Compilation Error"</a>
<li><strong>Reply:</strong> <a href="24546.php">George Bosilca: "Re: [OMPI users] OpenMPI Compilation Error"</a>
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
