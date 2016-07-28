<?
$subject_val = "[OMPI devel] [PATCH] MPI_FILE_SEEK_SHARED is wrong in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 25 05:25:52 2012" -->
<!-- isoreceived="20120125102552" -->
<!-- sent="Wed, 25 Jan 2012 19:25:38 +0900" -->
<!-- isosent="20120125102538" -->
<!-- name="Y.MATSUMOTO" -->
<!-- email="yuki.matsumoto_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] MPI_FILE_SEEK_SHARED is wrong in Fortran" -->
<!-- id="4F1FD8A2.1000204_at_jp.fujitsu.com" -->
<!-- charset="ISO-2022-JP" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] MPI_FILE_SEEK_SHARED is wrong in Fortran<br>
<strong>From:</strong> Y.MATSUMOTO (<em>yuki.matsumoto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-25 05:25:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10251.php">Y.MATSUMOTO: "[OMPI devel] [PATCH]Some typos in error code, func_name and man"</a>
<li><strong>Previous message:</strong> <a href="10249.php">Paul Hargrove: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10252.php">George Bosilca: "Re: [OMPI devel] [PATCH] MPI_FILE_SEEK_SHARED is wrong in Fortran"</a>
<li><strong>Reply:</strong> <a href="10252.php">George Bosilca: "Re: [OMPI devel] [PATCH] MPI_FILE_SEEK_SHARED is wrong in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>Next is about &quot;MPI_FILE_SEEK_SHARED&quot; in Fortran.
<br>
<p>When MPI_FILE_SEEK_SHARED is called in Fortran Program,
<br>
the shared file pointer is not updated.
<br>
<p>Incorrent function call is  the following part:
<br>
----ompi/mpi/f77/file_seek_shared_f.c-----------
<br>
&nbsp;60 void mpi_file_seek_shared_f(MPI_Fint *fh, MPI_Offset *offset,
<br>
&nbsp;61                 MPI_Fint *whence, MPI_Fint *ierr)
<br>
&nbsp;62 {
<br>
&nbsp;63     MPI_File c_fh = MPI_File_f2c(*fh);
<br>
&nbsp;64
<br>
&nbsp;65     *ierr = OMPI_INT_2_FINT(MPI_File_seek(c_fh, (MPI_Offset) *offset,
<br>
&nbsp;66                       OMPI_FINT_2_INT(*whence)));
<br>
&nbsp;67 }
<br>
----ompi/mpi/f77/file_seek_shared_f.c-----------
<br>
Attached patch fixes it(Patch is for in V1.4x).
<br>
<p>Best regards,
<br>
Yuki MATSUMOTO
<br>
MPI development team,
<br>
Fujitsu
<br>
<p><p>
<br><p>
<p><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10250/Fortran-file_seek_shared.patch">Fortran-file_seek_shared.patch</a>
</ul>
<!-- attachment="Fortran-file_seek_shared.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10251.php">Y.MATSUMOTO: "[OMPI devel] [PATCH]Some typos in error code, func_name and man"</a>
<li><strong>Previous message:</strong> <a href="10249.php">Paul Hargrove: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10252.php">George Bosilca: "Re: [OMPI devel] [PATCH] MPI_FILE_SEEK_SHARED is wrong in Fortran"</a>
<li><strong>Reply:</strong> <a href="10252.php">George Bosilca: "Re: [OMPI devel] [PATCH] MPI_FILE_SEEK_SHARED is wrong in Fortran"</a>
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
