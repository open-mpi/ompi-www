<?
$subject_val = "[OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 12 10:54:00 2012" -->
<!-- isoreceived="20120712145400" -->
<!-- sent="Thu, 12 Jul 2012 10:53:52 -0400" -->
<!-- isosent="20120712145352" -->
<!-- name="Jonathan Dursi" -->
<!-- email="ljdursi_at_[hidden]" -->
<!-- subject="[OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?" -->
<!-- id="4FFEE500.70103_at_scinet.utoronto.ca" -->
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
<strong>Subject:</strong> [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?<br>
<strong>From:</strong> Jonathan Dursi (<em>ljdursi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-12 10:53:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19763.php">Paul Kapinos: "[OMPI users] Still bothered / cannot run an application"</a>
<li><strong>Previous message:</strong> <a href="19761.php">Jeff Squyres: "Re: [OMPI users] Connection refused with openmpi-1.6.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/19901.php">Rob Latham: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/19901.php">Rob Latham: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi:
<br>
<p>One of our users is reporting trouble reading large files with MPI_File_read (or read_all).  With a few different type sizes, to keep count lower than 2^31, the problem persists.   A simple C program to test this is attached; we see it in both OpenMPI 1.4.4 and OpenMPI 1.6, with the only difference being the error code returned.   We can read the amount of data required by looping over MPI_File_read()s, but in more complicated scenarios this gets awkward.  I always thought that the 32-bit signed count limitation wasn't so bad because you could create larger data types to get around it, but this appears not to be the case here.   Is this a known problem that we should just work around?
<br>
<p>Output from ompi_info --all for the 1.4.4 build is also attached.
<br>
<p><p>OpenMPI 1.4.4
<br>
<p>Trying 268435457 of float, 1073741828 bytes: successfully read 268435457
<br>
Trying 536870913 of float, 2147483652 bytes: failed: err=35, MPI_ERR_IO: input/output error
<br>
Trying 134217729 of double, 1073741832 bytes: successfully read 134217729
<br>
Trying 268435457 of double, 2147483656 bytes: failed: err=35, MPI_ERR_IO: input/output error
<br>
Trying 67108865 of 2xdouble, 1073741840 bytes: successfully read 67108865
<br>
Trying 134217729 of 2xdouble, 2147483664 bytes: failed: err=35, MPI_ERR_IO: input/output error
<br>
Trying 524289 of 256xdouble, 1073743872 bytes: successfully read 524289
<br>
Trying 1048577 of 256xdouble, 2147485696 bytes: failed: err=35, MPI_ERR_IO: input/output error
<br>
Chunk 1/2: Trying 524288 of 256xdouble, chunked, 1073741824 bytes: successfully read 524288
<br>
Chunk 2/2: Trying 524289 of 256xdouble, chunked, 1073743872 bytes: successfully read 524289
<br>
<p><p>OpenMPI 1.6
<br>
Trying 268435457 of float, 1073741828 bytes: successfully read 268435457
<br>
Trying 536870913 of float, 2147483652 bytes: failed: err=13, MPI_ERR_ARG: invalid argument of some other kind
<br>
Trying 134217729 of double, 1073741832 bytes: successfully read 134217729
<br>
Trying 268435457 of double, 2147483656 bytes: failed: err=13, MPI_ERR_ARG: invalid argument of some other kind
<br>
Trying 67108865 of 2xdouble, 1073741840 bytes: successfully read 67108865
<br>
Trying 134217729 of 2xdouble, 2147483664 bytes: failed: err=13, MPI_ERR_ARG: invalid argument of some other kind
<br>
Trying 524289 of 256xdouble, 1073743872 bytes: successfully read 524289
<br>
Trying 1048577 of 256xdouble, 2147485696 bytes: failed: err=13, MPI_ERR_ARG: invalid argument of some other kind
<br>
Chunk 1/2: Trying 524288 of 256xdouble, chunked, 1073741824 bytes: successfully read 524288
<br>
Chunk 2/2: Trying 524289 of 256xdouble, chunked, 1073743872 bytes: successfully read 524289
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;- Jonathan
<br>
<p><p><pre>
-- 
Jonathan Dursi | SciNet, Compute/Calcul Canada | www.SciNetHPC.ca


</pre>
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19762/foo.c">foo.c</a>
</ul>
<!-- attachment="foo.c" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19762/ompi-all.txt">ompi-all.txt</a>
</ul>
<!-- attachment="ompi-all.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19763.php">Paul Kapinos: "[OMPI users] Still bothered / cannot run an application"</a>
<li><strong>Previous message:</strong> <a href="19761.php">Jeff Squyres: "Re: [OMPI users] Connection refused with openmpi-1.6.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/19901.php">Rob Latham: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/19901.php">Rob Latham: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
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
