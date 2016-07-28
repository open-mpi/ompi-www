<?
$subject_val = "Re: [OMPI devel] [PATCH] MPI_FILE_SEEK_SHARED is wrong in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 25 23:26:52 2012" -->
<!-- isoreceived="20120126042652" -->
<!-- sent="Wed, 25 Jan 2012 23:26:46 -0500" -->
<!-- isosent="20120126042646" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] MPI_FILE_SEEK_SHARED is wrong in Fortran" -->
<!-- id="0BA70BCC-240E-4884-BCC9-9358256391BC_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F1FD8A2.1000204_at_jp.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] MPI_FILE_SEEK_SHARED is wrong in Fortran<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-25 23:26:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10253.php">Paul H. Hargrove: "[OMPI devel] SOLVED: 1.4.5rc2 Solaris results [libtool problem]"</a>
<li><strong>Previous message:</strong> <a href="10251.php">Y.MATSUMOTO: "[OMPI devel] [PATCH]Some typos in error code, func_name and man"</a>
<li><strong>In reply to:</strong> <a href="10250.php">Y.MATSUMOTO: "[OMPI devel] [PATCH] MPI_FILE_SEEK_SHARED is wrong in Fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Yuki,
<br>
<p>All the submitted patches have been pushed into the trunk (<a href="https://svn.open-mpi.org/trac/ompi/changeset/25781">https://svn.open-mpi.org/trac/ompi/changeset/25781</a>) and are pending on the queue for 1.4 and 1.5.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 25, 2012, at 05:25 , Y.MATSUMOTO wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Next is about &quot;MPI_FILE_SEEK_SHARED&quot; in Fortran.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When MPI_FILE_SEEK_SHARED is called in Fortran Program,
</span><br>
<span class="quotelev1">&gt; the shared file pointer is not updated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Incorrent function call is  the following part:
</span><br>
<span class="quotelev1">&gt; ----ompi/mpi/f77/file_seek_shared_f.c-----------
</span><br>
<span class="quotelev1">&gt; 60 void mpi_file_seek_shared_f(MPI_Fint *fh, MPI_Offset *offset,
</span><br>
<span class="quotelev1">&gt; 61                 MPI_Fint *whence, MPI_Fint *ierr)
</span><br>
<span class="quotelev1">&gt; 62 {
</span><br>
<span class="quotelev1">&gt; 63     MPI_File c_fh = MPI_File_f2c(*fh);
</span><br>
<span class="quotelev1">&gt; 64
</span><br>
<span class="quotelev1">&gt; 65     *ierr = OMPI_INT_2_FINT(MPI_File_seek(c_fh, (MPI_Offset) *offset,
</span><br>
<span class="quotelev1">&gt; 66                       OMPI_FINT_2_INT(*whence)));
</span><br>
<span class="quotelev1">&gt; 67 }
</span><br>
<span class="quotelev1">&gt; ----ompi/mpi/f77/file_seek_shared_f.c-----------
</span><br>
<span class="quotelev1">&gt; Attached patch fixes it(Patch is for in V1.4x).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Yuki MATSUMOTO
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;Fortran-file_seek_shared.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10253.php">Paul H. Hargrove: "[OMPI devel] SOLVED: 1.4.5rc2 Solaris results [libtool problem]"</a>
<li><strong>Previous message:</strong> <a href="10251.php">Y.MATSUMOTO: "[OMPI devel] [PATCH]Some typos in error code, func_name and man"</a>
<li><strong>In reply to:</strong> <a href="10250.php">Y.MATSUMOTO: "[OMPI devel] [PATCH] MPI_FILE_SEEK_SHARED is wrong in Fortran"</a>
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
