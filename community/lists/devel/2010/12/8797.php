<?
$subject_val = "[OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 20 10:59:48 2010" -->
<!-- isoreceived="20101220155948" -->
<!-- sent="Mon, 20 Dec 2010 10:59:25 -0500" -->
<!-- isosent="20101220155925" -->
<!-- name="William George" -->
<!-- email="wgeorge_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_File_get_size fails for files &amp;gt; 2 GB in Fortran" -->
<!-- id="4D0F7D5D.7030608_at_nist.gov" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran<br>
<strong>From:</strong> William George (<em>wgeorge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-20 10:59:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8798.php">George Bosilca: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>Previous message:</strong> <a href="8796.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when	child	crashes/terminates	(without finalizing)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8798.php">George Bosilca: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>Reply:</strong> <a href="8798.php">George Bosilca: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In Fortran, calls to MPI_File_get_size return a negative value
<br>
when the file is larger that 2GB.
<br>
<p>I am using Open MPI 1.4.3 on an x86_64 system.  This happens with OpenMPI
<br>
compiled with Intel compilers or GCC, so I don't think it has
<br>
anything to do with the particular compiler in use.
<br>
<p>I can fix this by removing the cast to MPI_Fint in
<br>
the function   mpi_file_get_size_ in ompi/mpi/f77/file_get_size_f.c.
<br>
<p>Changing:
<br>
&nbsp;&nbsp;&nbsp;*size = (MPI_Fint) c_size;
<br>
<p>To:
<br>
<p>&nbsp;&nbsp;&nbsp;*size = c_size;
<br>
<p><p>But my guess is that this is not a proper fix.
<br>
<p>There are a few other suspicious casts to MPI_Fint in the f77
<br>
directory too that probably cause similar problems:
<br>
<p>$  $ grep \(MPI_Fint\) *.c
<br>
address_f.c:        *address = (MPI_Fint) addr;
<br>
file_get_position_f.c:        *offset = (MPI_Fint) c_offset;
<br>
file_get_position_shared_f.c:        *offset = (MPI_Fint) c_offset;
<br>
file_get_size_f.c:        *size = (MPI_Fint) c_size;
<br>
file_get_view_f.c:        *disp = (MPI_Fint) c_disp;
<br>
type_extent_f.c:        *extent = (MPI_Fint)c_extent;
<br>
<p><p>I can also fix this problem by compiling OpenMPI with
<br>
the flag -i8, but promoting all Fortran INTEGERs to 8-bytes
<br>
does not seem correct either.
<br>
<p>So - is this a configuration problem, a compile problem.
<br>
a source code bug, or what?  Is there an MPI_FOffsetint
<br>
and/or MPI_FAddressint type that should be used
<br>
in these casts?
<br>
<p><p>Regards,
<br>
<pre>
--
Bill
   William L. George
   National Institute of Standards and Technology
   ITL - Applied and Computational Mathematics Division, Stop 8911
   100 Bureau Drive
   Gaithersburg, MD  20899-8911
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8798.php">George Bosilca: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>Previous message:</strong> <a href="8796.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when	child	crashes/terminates	(without finalizing)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8798.php">George Bosilca: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>Reply:</strong> <a href="8798.php">George Bosilca: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
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
