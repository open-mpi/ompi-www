<?
$subject_val = "[OMPI users] MPI-IO: reading an unformatted binary fortran file";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 17:34:05 2009" -->
<!-- isoreceived="20090611213405" -->
<!-- sent="Thu, 11 Jun 2009 17:33:58 -0400" -->
<!-- isosent="20090611213358" -->
<!-- name="Greg Fischer" -->
<!-- email="greg.a.fischer_at_[hidden]" -->
<!-- subject="[OMPI users] MPI-IO: reading an unformatted binary fortran file" -->
<!-- id="c615a6650906111433p6d41ae54ne9431fd3ea1cfa4e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI-IO: reading an unformatted binary fortran file<br>
<strong>From:</strong> Greg Fischer (<em>greg.a.fischer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-11 17:33:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9613.php">George Bosilca: "Re: [OMPI users] Intermittent corruption"</a>
<li><strong>Previous message:</strong> <a href="9611.php">George Bosilca: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9628.php">Rob Latham: "Re: [OMPI users] MPI-IO: reading an unformatted binary fortran file"</a>
<li><strong>Reply:</strong> <a href="9628.php">Rob Latham: "Re: [OMPI users] MPI-IO: reading an unformatted binary fortran file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm attempting to wrap my brain around the MPI I/O mechanisms, and I was
<br>
hoping to find some guidance.  I'm trying to read a file that contains a
<br>
117-character string, followed by a series records that contain integers and
<br>
reals.  The following code would read it in serial:
<br>
<p><pre>
---
character(len=117) :: cfx1
read (nin) cfx1
do i=1,end_of_file
  read(nin) integer1,integer2,real1,real2,real3,real4,real5,real6,real7
enddo
---
To simplify the problem, I removed the &quot;cfx1&quot; string from the file I'm
reading, and created an MPI_TYPE_STRUCT as follows:
---
      length( 1 ) =
1
      length( 2 ) =
2
      length( 3 ) =
7
      length( 3 ) =
1
      disp( 1 ) =
0
      disp( 2 ) = sizeof( MPI_LB
)
      disp( 3 ) = disp( 2 ) + 2*sizeof(MPI_INTEGER)
      disp( 4 ) = disp( 3 ) + 7*sizeof(MPI_REAL)
      type( 1 ) = MPI_LB
      type( 2 ) = MPI_INTEGER
      type( 3 ) = MPI_REAL
      type( 4 ) = MPI_UB
      call MPI_TYPE_STRUCT( 4, length, disp, type, sptype, ierr )
      call MPI_TYPE_COMMIT( sptype, ierr )
---
I then open the file, set the view as follows and try to do a read:
---
      mode = MPI_MODE_RDONLY
      call MPI_FILE_OPEN( MPI_COMM_WORLD, filename, mode,
     +                    MPI_INFO_NULL, fh, ierr )
      offset = 0
      call MPI_FILE_SET_VIEW( fh, offset, sptype,
     +                        sptype, 'native', MPI_INFO_NULL, ierr )
      call MPI_FILE_READ( fh, sourcepart, 1, sptype,
     +                           status, ierr )
---
where &quot;sourcepart&quot; is:
---
     type source_particle_datatype
        integer :: ipt,idm
        real :: xxx,yyy,zzz,uuu,vvv,www,erg
      end type
---
This almost works.  With some fiddling (I can't seem to make it work right
now), I'm able to get most of the reals and integers into &quot;sourcepart&quot;, but
something doesn't line up quite correctly.  I've spent a lot of time looking
at the documentation and tutorials on the web, but haven't found a resource
that helps me work through this problem.
Ultimately, the objective will be to allow an arbitrary number of processes
read this file, with each record being uniquely read by a single process.
(e.g. process 1 read record 1, process 2 reads record 2, process 1 reads
record 3, process 2 reads record 4, etc.)
What's the best way to skin this cat?  Any assistance would be greatly
appreciated.
Thanks,
Greg
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9612/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9613.php">George Bosilca: "Re: [OMPI users] Intermittent corruption"</a>
<li><strong>Previous message:</strong> <a href="9611.php">George Bosilca: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9628.php">Rob Latham: "Re: [OMPI users] MPI-IO: reading an unformatted binary fortran file"</a>
<li><strong>Reply:</strong> <a href="9628.php">Rob Latham: "Re: [OMPI users] MPI-IO: reading an unformatted binary fortran file"</a>
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
