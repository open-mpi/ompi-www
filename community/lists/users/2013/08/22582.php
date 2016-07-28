<?
$subject_val = "[OMPI users] mpi_allgatherv";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 31 08:57:25 2013" -->
<!-- isoreceived="20130831125725" -->
<!-- sent="Sat, 31 Aug 2013 13:56:43 +0100" -->
<!-- isosent="20130831125643" -->
<!-- name="Huangwei" -->
<!-- email="hz283_at_[hidden]" -->
<!-- subject="[OMPI users] mpi_allgatherv" -->
<!-- id="CAOQ90zFBakn02YC-2Q2VNJfk++BY9xQhDrOsVNmO=eMvLCNzzg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpi_allgatherv<br>
<strong>From:</strong> Huangwei (<em>hz283_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-31 08:56:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/09/22583.php">George Bosilca: "Re: [OMPI users] mpi_allgatherv"</a>
<li><strong>Previous message:</strong> <a href="22581.php">John Hearns: "Re: [OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/09/22583.php">George Bosilca: "Re: [OMPI users] mpi_allgatherv"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/09/22583.php">George Bosilca: "Re: [OMPI users] mpi_allgatherv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I would like to send an array A, which has different dimensions in the
<br>
processors. Then the root receive these As and puts them into another array
<br>
globA. I know MPI_allgatherv can do this. However, there are still some
<br>
implementation issues that are not very clear for me. Thank you very much
<br>
if any of you can give me some suggestions and comments. The piece of code
<br>
is as follows (I am not sure if it is completely correct):
<br>
<p><p>!...calculate the total size for the total size of the globA,
<br>
PROCASize(myidf) is the size of array A in each processor.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate(PROCASize(numprocs))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROCASize(myidf) = Asize
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call
<br>
mpi_allreduce(PROCSize,PROCSize,numprocs,mpi_integer,mpi_sum,MPI_COMM_WORLD,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;globAsize = sum(PROCAsize)
<br>
<p>!...calculate the RECS and DISP for MPI_allgatherv
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate(RECSASize(0:numprocs-1))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate(DISP(0:numprocs-1))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do i=1,numprocs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RECSASize(i-1) = PROCASize(i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_type_extent(mpi_integer, extent, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do i=1,numprocs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DISP(i-1) = 1 + (i-1)*RECSASIze(i-1)*extent
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
<p>!...allocate the size of the array globA
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate(globA(globASize*extent))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_allgatherv(A,ASize,MPI_INTEGER,globA, RECSASIze,
<br>
DISP,MPI_INTEGER,MPI_COMM_WORLD,ierr)
<br>
<p>My Questions:
<br>
<p>1, How to allocate the globA, i.e. the receive buff's size? Should I
<br>
use globASize*extent
<br>
or just globASize?
<br>
<p><p>2, about the displacements in globA, i.e. DISP(:), it is stand for the
<br>
order of an array? like 1, 2, 3, ...., this corresponds to DISP(i-1) = 1 +
<br>
(i-1)*RECSASIze(i-1)*extent. Or this array's elements are the address at
<br>
which the data from different processors will be stored in globA?
<br>
<p>3, should the arrays start from 0 to numprocs-1? or start from 1 to
<br>
numprocs? This may be important when they work as arguments in
<br>
mpi_allgatherv subroutine.
<br>
<p><p>These questions may be too simple for MPI professionals, but I do not have
<br>
much experience on this. Thus I am sincerely eager to get some comments and
<br>
suggestions from you. Thank you in advance!
<br>
<p><p>regards,
<br>
Huangwei
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22582/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/09/22583.php">George Bosilca: "Re: [OMPI users] mpi_allgatherv"</a>
<li><strong>Previous message:</strong> <a href="22581.php">John Hearns: "Re: [OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/09/22583.php">George Bosilca: "Re: [OMPI users] mpi_allgatherv"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/09/22583.php">George Bosilca: "Re: [OMPI users] mpi_allgatherv"</a>
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
