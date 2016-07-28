<?
$subject_val = "[OMPI devel] Error while writing more than 2GB data at once to file";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 09:35:59 2009" -->
<!-- isoreceived="20090910133559" -->
<!-- sent="Thu, 10 Sep 2009 15:33:40 +0200" -->
<!-- isosent="20090910133340" -->
<!-- name="Markus Wittmann" -->
<!-- email="Markus.Wittmann_at_[hidden]" -->
<!-- subject="[OMPI devel] Error while writing more than 2GB data at once to file" -->
<!-- id="4AA90034.5060301_at_rrze.uni-erlangen.de" -->
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
<strong>Subject:</strong> [OMPI devel] Error while writing more than 2GB data at once to file<br>
<strong>From:</strong> Markus Wittmann (<em>Markus.Wittmann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-10 09:33:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6822.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] OSL server reboots"</a>
<li><strong>Previous message:</strong> <a href="6820.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>at RRZE we tried to write &gt; 2 GB data (per process) at once to a file
<br>
with MPI_File_write_at(_all). Thereby the function returns with error
<br>
code 35.
<br>
<p>Attached you will find the compressed output of &quot;ompi_info --all&quot; and a
<br>
test program (large_mpi_test.F90) with that the problem can be
<br>
reproduced.
<br>
<p>The Open MPI Vesion used was 1.3.3. The underlaying file system used is
<br>
Lustre which is able to deal with files &gt; 2GB.
<br>
<p><p>Further if we retrieve the file size with MPI_File_get_size for a file
<br>
<span class="quotelev1">  &gt;= 2 GB the returned size is negative. The attached test program
</span><br>
get_file_size.f90 will demonstrate the behavior:
<br>
<p>$ dd if=/dev/zero of=delme.dat bs=1K count=1M
<br>
1048576+0 records in
<br>
1048576+0 records out
<br>
1073741824 bytes (1.1 GB) copied, 9.1401 seconds, 117 MB/s
<br>
$ mpirun -n 1 get_file_size
<br>
file size of delme.dat:
<br>
[0] file size = 1073741824 bytes, 0.102E+04 MB
<br>
<p><p>$ dd if=/dev/zero of=delme.dat bs=1K count=2M
<br>
2097152+0 records in
<br>
2097152+0 records out
<br>
2147483648 bytes (2.1 GB) copied, 18.1567 seconds, 118 MB/s
<br>
$ mpirun -n 1 get_file_size
<br>
file size of delme.dat:
<br>
[0] file size = -2147483648 bytes, -.205E+04 MB
<br>
<p><p>Regards
<br>
Markus Wittmann
<br>
<p><p><p><p>


<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6821/ompi_info.log.tar.gz">ompi_info.log.tar.gz</a>
</ul>
<!-- attachment="ompi_info.log.tar.gz" -->
<hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6821/large_mpi_test.F90">large_mpi_test.F90</a>
</ul>
<!-- attachment="large_mpi_test.F90" -->
<hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6821/get_file_size.f90">get_file_size.f90</a>
</ul>
<!-- attachment="get_file_size.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6822.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] OSL server reboots"</a>
<li><strong>Previous message:</strong> <a href="6820.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
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
