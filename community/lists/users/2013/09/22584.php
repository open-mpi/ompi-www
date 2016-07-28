<?
$subject_val = "Re: [OMPI users] mpi_allgatherv";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  1 17:37:06 2013" -->
<!-- isoreceived="20130901213706" -->
<!-- sent="Sun, 1 Sep 2013 22:36:24 +0100" -->
<!-- isosent="20130901213624" -->
<!-- name="Huangwei" -->
<!-- email="hz283_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_allgatherv" -->
<!-- id="CAOQ90zHMF_JvkET3+JaCxL9sBKPF+8yxcy1yJs73oZycisZu=A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9EA256CF-912A-4AE0-9147-E1487D0E571D_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_allgatherv<br>
<strong>From:</strong> Huangwei (<em>hz283_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-01 17:36:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22585.php">Siegmar Gross: "[OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Previous message:</strong> <a href="22583.php">George Bosilca: "Re: [OMPI users] mpi_allgatherv"</a>
<li><strong>In reply to:</strong> <a href="22583.php">George Bosilca: "Re: [OMPI users] mpi_allgatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22591.php">George Bosilca: "Re: [OMPI users] mpi_allgatherv"</a>
<li><strong>Reply:</strong> <a href="22591.php">George Bosilca: "Re: [OMPI users] mpi_allgatherv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>Thank you for your reply. Please see below.
<br>
best regards,
<br>
Huangwei
<br>
<p><p><p><p>On 1 September 2013 22:03, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 31, 2013, at 14:56 , Huangwei &lt;hz283_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to send an array A, which has different dimensions in the
</span><br>
<span class="quotelev1">&gt; processors. Then the root receive these As and puts them into another array
</span><br>
<span class="quotelev1">&gt; globA. I know MPI_allgatherv can do this. However, there are still some
</span><br>
<span class="quotelev1">&gt; implementation issues that are not very clear for me. Thank you very much
</span><br>
<span class="quotelev1">&gt; if any of you can give me some suggestions and comments. The piece of code
</span><br>
<span class="quotelev1">&gt; is as follows (I am not sure if it is completely correct):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; !...calculate the total size for the total size of the globA,
</span><br>
<span class="quotelev1">&gt; PROCASize(myidf) is the size of array A in each processor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         allocate(PROCASize(numprocs))
</span><br>
<span class="quotelev1">&gt;         PROCASize(myidf) = Asize
</span><br>
<span class="quotelev1">&gt;         call
</span><br>
<span class="quotelev1">&gt; mpi_allreduce(PROCSize,PROCSize,numprocs,mpi_integer,mpi_sum,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt;         globAsize = sum(PROCAsize)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; !...calculate the RECS and DISP for MPI_allgatherv
</span><br>
<span class="quotelev1">&gt;         allocate(RECSASize(0:numprocs-1))
</span><br>
<span class="quotelev1">&gt;         allocate(DISP(0:numprocs-1))
</span><br>
<span class="quotelev1">&gt;         do i=1,numprocs
</span><br>
<span class="quotelev1">&gt;            RECSASize(i-1) = PROCASize(i)
</span><br>
<span class="quotelev1">&gt;         enddo
</span><br>
<span class="quotelev1">&gt;         call mpi_type_extent(mpi_integer, extent, ierr)
</span><br>
<span class="quotelev1">&gt;         do i=1,numprocs
</span><br>
<span class="quotelev1">&gt;              DISP(i-1) = 1 + (i-1)*RECSASIze(i-1)*extent
</span><br>
<span class="quotelev1">&gt;         enddo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; !...allocate the size of the array globA
</span><br>
<span class="quotelev1">&gt;         allocate(globA(globASize*extent))
</span><br>
<span class="quotelev1">&gt;         call mpi_allgatherv(A,ASize,MPI_INTEGER,globA, RECSASIze,
</span><br>
<span class="quotelev1">&gt; DISP,MPI_INTEGER,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My Questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1, How to allocate the globA, i.e. the receive buff's size? Should I use globASize*extent
</span><br>
<span class="quotelev1">&gt; or justglobalize?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't understand what globASize is supposed to be as you do the
</span><br>
<span class="quotelev1">&gt; reduction on PROCSize and then sum PROCAsize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><span class="quotelev1">&gt; Here I assume globASize is sum of the size of the array A in all the
</span><br>
<span class="quotelev1">&gt; processors. For example, in proc 1, it is A(3), in proc 2, it is A(5), in
</span><br>
<span class="quotelev1">&gt; proc 3 it is A(6). so  globSize =14. I aim to put these A arrays to globA
</span><br>
<span class="quotelev1">&gt; which is sized as 14. All the data in A are aimed to be stored in globA
</span><br>
<span class="quotelev1">&gt; consecutively based on rank number.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><span class="quotelev1">&gt; Anyway, you should always allocate the memory for collective based on the
</span><br>
<span class="quotelev1">&gt; total number of elements to receive times the extent of each element. In
</span><br>
<span class="quotelev1">&gt; fact to be even more accurate, if we suppose that you correctly computed
</span><br>
<span class="quotelev1">&gt; the DISP array, you should allocate globA as DISP(numprocs-1) + RECSASIze.
</span><br>
<span class="quotelev1">&gt;
</span><br>
&nbsp;&nbsp;&nbsp;If all the elements in all A arrays are integer or all are uniformly
<br>
double precision, the size of globA should be 14 or 14*extent_integer?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2, about the displacements in globA, i.e. DISP(:), it is stand for the
</span><br>
<span class="quotelev1">&gt; order of an array? like 1, 2, 3, ...., this corresponds to DISP(i-1) = 1
</span><br>
<span class="quotelev1">&gt; + (i-1)*RECSASIze(i-1)*extent. Or this array's elements are the address
</span><br>
<span class="quotelev1">&gt; at which the data from different processors will be stored in globA?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These are the displacement from the beginning of the array where the data
</span><br>
<span class="quotelev1">&gt; from a peer is stored. The index in this array is the rank of the peer
</span><br>
<span class="quotelev1">&gt; process in the communicator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I know. But I mean  the meaning of the elements of this array. Still
</span><br>
use that example mentioned above. Is the following specification correct:
<br>
DISP(1)=0, DISP(2)=3, DISP(3)=8 ?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3, should the arrays start from 0 to numprocs-1? or start from 1 to
</span><br>
<span class="quotelev1">&gt; numprocs? This may be important when they work as arguments in
</span><br>
<span class="quotelev1">&gt; mpi_allgatherv subroutine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It doesn't matter how you allocate it (0:numprocs-1) or simple (numprocs)
</span><br>
<span class="quotelev1">&gt; the compiler will do the right this when creating the call using the array.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Additional Question is:
<br>
<p>For fortran mpi, can the mpi subroutine send array with 0 size, i.e. in the
<br>
example, A is A(0), and ASize =0:
<br>
<p>call mpi_allgatherv(A,ASize,MPI_INTEGER,globA, RECSASIze,
<br>
DISP,MPI_INTEGER,MPI_COMM_WORLD,ierr)
<br>
<p>Is this valid in mpi calling? This case will appear in my work.
<br>
<p><p>Thank you very much for your help!
<br>
<p>Have a nice holiday!
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These questions may be too simple for MPI professionals, but I do not have
</span><br>
<span class="quotelev1">&gt; much experience on this. Thus I am sincerely eager to get some comments and
</span><br>
<span class="quotelev1">&gt; suggestions from you. Thank you in advance!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Huangwei
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22584/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22585.php">Siegmar Gross: "[OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Previous message:</strong> <a href="22583.php">George Bosilca: "Re: [OMPI users] mpi_allgatherv"</a>
<li><strong>In reply to:</strong> <a href="22583.php">George Bosilca: "Re: [OMPI users] mpi_allgatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22591.php">George Bosilca: "Re: [OMPI users] mpi_allgatherv"</a>
<li><strong>Reply:</strong> <a href="22591.php">George Bosilca: "Re: [OMPI users] mpi_allgatherv"</a>
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
