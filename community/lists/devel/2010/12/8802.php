<?
$subject_val = "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 20 16:31:53 2010" -->
<!-- isoreceived="20101220213153" -->
<!-- sent="Mon, 20 Dec 2010 16:31:48 -0500" -->
<!-- isosent="20101220213148" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_File_get_size fails for files &amp;gt; 2 GB in Fortran" -->
<!-- id="A7FC4225-EF5E-4848-98BE-0BBF5F9975EF_at_eecs.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4D0FB6BE.7030606_at_cs.uh.edu" -->
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
<strong>Date:</strong> 2010-12-20 16:31:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8803.php">N.M. Maclaren: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>Previous message:</strong> <a href="8801.php">Edgar Gabriel: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>In reply to:</strong> <a href="8801.php">Edgar Gabriel: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8803.php">N.M. Maclaren: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>Reply:</strong> <a href="8803.php">N.M. Maclaren: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a hint for F77 users at the bottom of the page. It suggests to use INTEGER*MPI_OFFSET_KIND as type for the SIZE. I guess if we cast it correctly, and the users follow the MPI specification, this should work.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Dec 20, 2010, at 15:04 , Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; well, but that is fortran90, bot f77
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/20/2010 1:55 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Not really. The Fortran prototype from our man page is:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    INCLUDE &#146;mpif.h&#146;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_FILE_GET_SIZE(FH, SIZE,  IERROR)
</span><br>
<span class="quotelev2">&gt;&gt;    INTEGER FH, ERROR
</span><br>
<span class="quotelev2">&gt;&gt;    INTEGER(KIND=MPI_OFFSET_KIND) SIZE
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So the size is of type MPI_OFSET_KIND which is INTEGER*8 (signed). There is still a mismatch between of C and the Fortran version (size_t vs. ssize_t on my platform), but let's save this for later.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 20, 2010, at 14:48 , Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; well, but the f77 interface defines that to be an integer, unless you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want to change the fortran API, you will have to map it to an MPI_Fint
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in my opinion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 12/20/2010 1:36 PM, George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Nice catch. The sizes are MPI_Offset in C, and therefore we should not cast them as MPI_Fint. I'll take a look, but I doubt it will be before next year. Meanwhile, patches are always welcomed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Dec 20, 2010, at 10:59 , William George wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In Fortran, calls to MPI_File_get_size return a negative value
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when the file is larger that 2GB.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am using Open MPI 1.4.3 on an x86_64 system.  This happens with OpenMPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compiled with Intel compilers or GCC, so I don't think it has
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; anything to do with the particular compiler in use.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I can fix this by removing the cast to MPI_Fint in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the function   mpi_file_get_size_ in ompi/mpi/f77/file_get_size_f.c.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Changing:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *size = (MPI_Fint) c_size;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *size = c_size;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But my guess is that this is not a proper fix.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There are a few other suspicious casts to MPI_Fint in the f77
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; directory too that probably cause similar problems:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $  $ grep \(MPI_Fint\) *.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; address_f.c:        *address = (MPI_Fint) addr;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file_get_position_f.c:        *offset = (MPI_Fint) c_offset;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file_get_position_shared_f.c:        *offset = (MPI_Fint) c_offset;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file_get_size_f.c:        *size = (MPI_Fint) c_size;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file_get_view_f.c:        *disp = (MPI_Fint) c_disp;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; type_extent_f.c:        *extent = (MPI_Fint)c_extent;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I can also fix this problem by compiling OpenMPI with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the flag -i8, but promoting all Fortran INTEGERs to 8-bytes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; does not seem correct either.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So - is this a configuration problem, a compile problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a source code bug, or what?  Is there an MPI_FOffsetint
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and/or MPI_FAddressint type that should be used
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in these casts?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Bill
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; William L. George
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; National Institute of Standards and Technology
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ITL - Applied and Computational Mathematics Division, Stop 8911
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 100 Bureau Drive
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gaithersburg, MD  20899-8911
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Assistant Professor
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
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
<li><strong>Next message:</strong> <a href="8803.php">N.M. Maclaren: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>Previous message:</strong> <a href="8801.php">Edgar Gabriel: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>In reply to:</strong> <a href="8801.php">Edgar Gabriel: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8803.php">N.M. Maclaren: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>Reply:</strong> <a href="8803.php">N.M. Maclaren: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
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
