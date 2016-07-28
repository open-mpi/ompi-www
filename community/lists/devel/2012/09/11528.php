<?
$subject_val = "[OMPI devel] making Fortran MPI_Status components public";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 26 15:49:33 2012" -->
<!-- isoreceived="20120926194933" -->
<!-- sent="Wed, 26 Sep 2012 15:49:25 -0400" -->
<!-- isosent="20120926194925" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] making Fortran MPI_Status components public" -->
<!-- id="50635C45.309_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] making Fortran MPI_Status components public<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-26 15:49:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11529.php">Jeff Squyres: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Previous message:</strong> <a href="11527.php">Gutierrez, Samuel K: "Re: [OMPI devel] 1.7 Branch Head Link Failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11529.php">Jeff Squyres: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Reply:</strong> <a href="11529.php">Jeff Squyres: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The ibm tests aren't building for me.  One of the issues is 
<br>
mprobe_usempif08.f90 trying to access status%MPI_SOURCE and 
<br>
status%MPI_TAG.  I assume this is supposed to work, but it doesn't.  
<br>
E.g., trunk with Oracle Studio compilers:
<br>
<p>% cat a.f90
<br>
&nbsp;&nbsp;&nbsp;use mpi_f08
<br>
&nbsp;&nbsp;&nbsp;type(MPI_Status) status
<br>
&nbsp;&nbsp;&nbsp;write(6,*) status%MPI_SOURCE
<br>
&nbsp;&nbsp;&nbsp;write(6,*) status%MPI_TAG
<br>
&nbsp;&nbsp;&nbsp;end
<br>
% mpifort -m64 -c a.f90
<br>
<p>&nbsp;&nbsp;&nbsp;write(6,*) status%MPI_SOURCE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
&quot;a.f90&quot;, Line = 3, Column = 21: ERROR: &quot;MPI_SOURCE&quot; is a private 
<br>
component of &quot;MPI_STATUS&quot; and cannot be used outside of the module.
<br>
<p>&nbsp;&nbsp;&nbsp;write(6,*) status%MPI_TAG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
&quot;a.f90&quot;, Line = 4, Column = 21: ERROR: &quot;MPI_TAG&quot; is a private component 
<br>
of &quot;MPI_STATUS&quot; and cannot be used outside of the module.
<br>
<p>If I look in ompi/mpi/fortran/[base|use-mpi-f08-desc]/mpi-f08-types.f90, 
<br>
I see:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;type, BIND(C) :: MPI_Status
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: MPI_SOURCE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: MPI_TAG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: MPI_ERROR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer(C_INT)    OMPI_PRIVATE :: c_cancelled
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer(C_SIZE_T) OMPI_PRIVATE :: c_count
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end type MPI_Status
<br>
<p>Should the first three components explicitly be made public?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11529.php">Jeff Squyres: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Previous message:</strong> <a href="11527.php">Gutierrez, Samuel K: "Re: [OMPI devel] 1.7 Branch Head Link Failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11529.php">Jeff Squyres: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Reply:</strong> <a href="11529.php">Jeff Squyres: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
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
