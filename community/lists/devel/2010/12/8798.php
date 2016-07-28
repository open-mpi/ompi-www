<?
$subject_val = "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 20 14:36:26 2010" -->
<!-- isoreceived="20101220193626" -->
<!-- sent="Mon, 20 Dec 2010 14:36:21 -0500" -->
<!-- isosent="20101220193621" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_File_get_size fails for files &amp;gt; 2 GB in Fortran" -->
<!-- id="E687B810-1662-4C89-B1DE-FE6DA6CB0B86_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D0F7D5D.7030608_at_nist.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-20 14:36:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8799.php">Edgar Gabriel: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>Previous message:</strong> <a href="8797.php">William George: "[OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>In reply to:</strong> <a href="8797.php">William George: "[OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8799.php">Edgar Gabriel: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>Reply:</strong> <a href="8799.php">Edgar Gabriel: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nice catch. The sizes are MPI_Offset in C, and therefore we should not cast them as MPI_Fint. I'll take a look, but I doubt it will be before next year. Meanwhile, patches are always welcomed.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Dec 20, 2010, at 10:59 , William George wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In Fortran, calls to MPI_File_get_size return a negative value
</span><br>
<span class="quotelev1">&gt; when the file is larger that 2GB.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using Open MPI 1.4.3 on an x86_64 system.  This happens with OpenMPI
</span><br>
<span class="quotelev1">&gt; compiled with Intel compilers or GCC, so I don't think it has
</span><br>
<span class="quotelev1">&gt; anything to do with the particular compiler in use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can fix this by removing the cast to MPI_Fint in
</span><br>
<span class="quotelev1">&gt; the function   mpi_file_get_size_ in ompi/mpi/f77/file_get_size_f.c.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Changing:
</span><br>
<span class="quotelev1">&gt;  *size = (MPI_Fint) c_size;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  *size = c_size;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But my guess is that this is not a proper fix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are a few other suspicious casts to MPI_Fint in the f77
</span><br>
<span class="quotelev1">&gt; directory too that probably cause similar problems:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $  $ grep \(MPI_Fint\) *.c
</span><br>
<span class="quotelev1">&gt; address_f.c:        *address = (MPI_Fint) addr;
</span><br>
<span class="quotelev1">&gt; file_get_position_f.c:        *offset = (MPI_Fint) c_offset;
</span><br>
<span class="quotelev1">&gt; file_get_position_shared_f.c:        *offset = (MPI_Fint) c_offset;
</span><br>
<span class="quotelev1">&gt; file_get_size_f.c:        *size = (MPI_Fint) c_size;
</span><br>
<span class="quotelev1">&gt; file_get_view_f.c:        *disp = (MPI_Fint) c_disp;
</span><br>
<span class="quotelev1">&gt; type_extent_f.c:        *extent = (MPI_Fint)c_extent;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can also fix this problem by compiling OpenMPI with
</span><br>
<span class="quotelev1">&gt; the flag -i8, but promoting all Fortran INTEGERs to 8-bytes
</span><br>
<span class="quotelev1">&gt; does not seem correct either.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So - is this a configuration problem, a compile problem.
</span><br>
<span class="quotelev1">&gt; a source code bug, or what?  Is there an MPI_FOffsetint
</span><br>
<span class="quotelev1">&gt; and/or MPI_FAddressint type that should be used
</span><br>
<span class="quotelev1">&gt; in these casts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Bill
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  William L. George
</span><br>
<span class="quotelev1">&gt;  National Institute of Standards and Technology
</span><br>
<span class="quotelev1">&gt;  ITL - Applied and Computational Mathematics Division, Stop 8911
</span><br>
<span class="quotelev1">&gt;  100 Bureau Drive
</span><br>
<span class="quotelev1">&gt;  Gaithersburg, MD  20899-8911
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="8799.php">Edgar Gabriel: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>Previous message:</strong> <a href="8797.php">William George: "[OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>In reply to:</strong> <a href="8797.php">William George: "[OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8799.php">Edgar Gabriel: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>Reply:</strong> <a href="8799.php">Edgar Gabriel: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
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
