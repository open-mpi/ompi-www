<?
$subject_val = "Re: [OMPI users] MPI-IO: reading an unformatted binary fortran file";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 16 16:22:39 2009" -->
<!-- isoreceived="20090616202239" -->
<!-- sent="Tue, 16 Jun 2009 15:22:28 -0500" -->
<!-- isosent="20090616202228" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-IO: reading an unformatted binary fortran file" -->
<!-- id="20090616202228.GE3355_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="c615a6650906111433p6d41ae54ne9431fd3ea1cfa4e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI-IO: reading an unformatted binary fortran file<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-16 16:22:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9629.php">Kritiraj Sajadah: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>Previous message:</strong> <a href="9627.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>In reply to:</strong> <a href="9612.php">Greg Fischer: "[OMPI users] MPI-IO: reading an unformatted binary fortran file"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jun 11, 2009 at 05:33:58PM -0400, Greg Fischer wrote:
<br>
<span class="quotelev1">&gt; I'm attempting to wrap my brain around the MPI I/O mechanisms, and I was
</span><br>
<span class="quotelev1">&gt; hoping to find some guidance.  I'm trying to read a file that contains a
</span><br>
<span class="quotelev1">&gt; 117-character string, followed by a series records that contain integers and
</span><br>
<span class="quotelev1">&gt; reals.  The following code would read it in serial:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; character(len=117) :: cfx1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; read (nin) cfx1
</span><br>
<span class="quotelev1">&gt; do i=1,end_of_file
</span><br>
<span class="quotelev1">&gt;   read(nin) integer1,integer2,real1,real2,real3,real4,real5,real6,real7
</span><br>
<span class="quotelev1">&gt; enddo
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<p>Please note that raw binary fortran i/o acts nothing like raw binary C
<br>
i/o.  What I mean is that you have a fortran read there, and it's
<br>
pulling out records from your fortran file, but who knows how much
<br>
padding your compiler put between members of one of these records.
<br>
<p><span class="quotelev1">&gt; To simplify the problem, I removed the &quot;cfx1&quot; string from the file I'm
</span><br>
<span class="quotelev1">&gt; reading, and created an MPI_TYPE_STRUCT as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;       length( 1 ) = 1
</span><br>
<span class="quotelev1">&gt;       length( 2 ) = 2
</span><br>
<span class="quotelev1">&gt;       length( 3 ) = 7
</span><br>
<span class="quotelev1">&gt;       length( 3 ) = 1
</span><br>
<span class="quotelev1">&gt;       disp( 1 ) = 0
</span><br>
<span class="quotelev1">&gt;       disp( 2 ) = sizeof( MPI_LB )
</span><br>
<span class="quotelev1">&gt;       disp( 3 ) = disp( 2 ) + 2*sizeof(MPI_INTEGER)
</span><br>
<span class="quotelev1">&gt;       disp( 4 ) = disp( 3 ) + 7*sizeof(MPI_REAL)
</span><br>
<span class="quotelev1">&gt;       type( 1 ) = MPI_LB
</span><br>
<span class="quotelev1">&gt;       type( 2 ) = MPI_INTEGER
</span><br>
<span class="quotelev1">&gt;       type( 3 ) = MPI_REAL
</span><br>
<span class="quotelev1">&gt;       type( 4 ) = MPI_UB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       call MPI_TYPE_STRUCT( 4, length, disp, type, sptype, ierr )
</span><br>
<span class="quotelev1">&gt;       call MPI_TYPE_COMMIT( sptype, ierr )
</span><br>
<p>There's absolutely no guarantee that records line up in memory like
<br>
they do in unformatted binary Fortran files.   Fortran could put more,
<br>
less, or the same padding between records.
<br>
<p><span class="quotelev1">&gt; This almost works.  With some fiddling (I can't seem to make it work right
</span><br>
<span class="quotelev1">&gt; now), I'm able to get most of the reals and integers into &quot;sourcepart&quot;, but
</span><br>
<span class="quotelev1">&gt; something doesn't line up quite correctly.  I've spent a lot of time looking
</span><br>
<span class="quotelev1">&gt; at the documentation and tutorials on the web, but haven't found a resource
</span><br>
<span class="quotelev1">&gt; that helps me work through this problem.
</span><br>
<p>Yup.  Take into consideration that I'm a shameless C dude, but Fortran
<br>
i/o is pure evil!
<br>
<p><span class="quotelev1">&gt; Ultimately, the objective will be to allow an arbitrary number of processes
</span><br>
<span class="quotelev1">&gt; read this file, with each record being uniquely read by a single process.
</span><br>
<span class="quotelev1">&gt; (e.g. process 1 read record 1, process 2 reads record 2, process 1 reads
</span><br>
<span class="quotelev1">&gt; record 3, process 2 reads record 4, etc.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What's the best way to skin this cat?  Any assistance would be greatly
</span><br>
<span class="quotelev1">&gt; appreciated.
</span><br>
<p>Well, you could use something like parallel-netcdf or parallel-HDF5
<br>
which does everything you want to do already, with the added advantage
<br>
of being a self-describing portable file format that you could
<br>
exchange with collaborators or visualize with a whole ecosystem of
<br>
netcdf viewers.  
<br>
<p>How did you create this file?  I'm kind of surprised you cannot
<br>
MPI_FILE_READ  back what you've written.   The MPI-IO library just
<br>
provides a wrapper around C system calls, so if you created this file
<br>
with fortran, you'll have to read it back with fortran.  
<br>
<p>Since you eventually want to do parallel I/O, I'd suggest creating the
<br>
file with MPI-IO  (Even if it is MPI_FILE_WRITE from rank 0 or a
<br>
single process) as well as reading it back (perhaps with
<br>
MPI_FILE_READ_AT_ALL).
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9629.php">Kritiraj Sajadah: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>Previous message:</strong> <a href="9627.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>In reply to:</strong> <a href="9612.php">Greg Fischer: "[OMPI users] MPI-IO: reading an unformatted binary fortran file"</a>
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
