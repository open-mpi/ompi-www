<?
$subject_val = "[OMPI users] bug in MPI_File_get_position_shared ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 19:06:24 2008" -->
<!-- isoreceived="20080813230624" -->
<!-- sent="Thu, 14 Aug 2008 01:06:16 +0200" -->
<!-- isosent="20080813230616" -->
<!-- name="Yvan Fournier" -->
<!-- email="yvan.fournier_at_[hidden]" -->
<!-- subject="[OMPI users] bug in MPI_File_get_position_shared ?" -->
<!-- id="1218668776.6367.5.camel_at_quarmall" -->
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
<strong>Subject:</strong> [OMPI users] bug in MPI_File_get_position_shared ?<br>
<strong>From:</strong> Yvan Fournier (<em>yvan.fournier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-13 19:06:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6337.php">Mohd Radzi Nurul Azri: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>Previous message:</strong> <a href="6335.php">Ron Brightwell: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6361.php">Jeff Squyres: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
<li><strong>Reply:</strong> <a href="6361.php">Jeff Squyres: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
<li><strong>Maybe reply:</strong> <a href="6370.php">Yvan Fournier: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I seem to have encountered a bug in MPI-IO, in which
<br>
MPI_File_get_position_shared hangs when called by multiple processes in
<br>
a communicator. It can be illustrated by the following simple test case,
<br>
in which a file is simply created with C IO, and opened with MPI-IO.
<br>
(defining or undefining MY_MPI_IO_BUG on line 5 enables/disables the
<br>
bug). From the MPI2 documentation, It seems that all processes should be
<br>
able to call MPI_File_get_position_shared, but if more than one process
<br>
uses it, it fails. Setting the shared pointer helps, but this should not
<br>
be necessary, and the code still hangs (in more complete code, after
<br>
writing data).
<br>
<p>I encounter the same problem with Open MPI 1.2.6 and MPICH2 1.0.7, so
<br>
I may have misread the documentation, but I suspect a ROMIO bug.
<br>
<p>Best regards,
<br>
<p>Yvan Fournier
<br>
<p><p><p>
<br><p>
<p><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6336/mpi_io_shared_ptr.c__charset_UTF-8">mpi_io_shared_ptr.c__charset_UTF-8</a>
</ul>
<!-- attachment="mpi_io_shared_ptr.c__charset_UTF-8" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6337.php">Mohd Radzi Nurul Azri: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>Previous message:</strong> <a href="6335.php">Ron Brightwell: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6361.php">Jeff Squyres: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
<li><strong>Reply:</strong> <a href="6361.php">Jeff Squyres: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
<li><strong>Maybe reply:</strong> <a href="6370.php">Yvan Fournier: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
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
