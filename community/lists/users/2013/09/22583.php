<?
$subject_val = "Re: [OMPI users] mpi_allgatherv";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  1 17:03:10 2013" -->
<!-- isoreceived="20130901210310" -->
<!-- sent="Sun, 1 Sep 2013 23:03:12 +0200" -->
<!-- isosent="20130901210312" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_allgatherv" -->
<!-- id="9EA256CF-912A-4AE0-9147-E1487D0E571D_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOQ90zFBakn02YC-2Q2VNJfk++BY9xQhDrOsVNmO=eMvLCNzzg_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-01 17:03:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22584.php">Huangwei: "Re: [OMPI users] mpi_allgatherv"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/08/22582.php">Huangwei: "[OMPI users] mpi_allgatherv"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/08/22582.php">Huangwei: "[OMPI users] mpi_allgatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22584.php">Huangwei: "Re: [OMPI users] mpi_allgatherv"</a>
<li><strong>Reply:</strong> <a href="22584.php">Huangwei: "Re: [OMPI users] mpi_allgatherv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 31, 2013, at 14:56 , Huangwei &lt;hz283_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I would like to send an array A, which has different dimensions in the processors. Then the root receive these As and puts them into another array globA. I know MPI_allgatherv can do this. However, there are still some implementation issues that are not very clear for me. Thank you very much if any of you can give me some suggestions and comments. The piece of code is as follows (I am not sure if it is completely correct):
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; !...calculate the total size for the total size of the globA, PROCASize(myidf) is the size of array A in each processor.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;         allocate(PROCASize(numprocs))
</span><br>
<span class="quotelev1">&gt;         PROCASize(myidf) = Asize
</span><br>
<span class="quotelev1">&gt;         call mpi_allreduce(PROCSize,PROCSize,numprocs,mpi_integer,mpi_sum,MPI_COMM_WORLD,ierr)
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
<span class="quotelev1">&gt;         call mpi_allgatherv(A,ASize,MPI_INTEGER,globA, RECSASIze, DISP,MPI_INTEGER,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; My Questions:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 1, How to allocate the globA, i.e. the receive buff's size? Should I use globASize*extent or justglobalize?
</span><br>
<p>I don't understand what globASize is supposed to be as you do the reduction on PROCSize and then sum PROCAsize.
<br>
<p>Anyway, you should always allocate the memory for collective based on the total number of elements to receive times the extent of each element. In fact to be even more accurate, if we suppose that you correctly computed the DISP array, you should allocate globA as DISP(numprocs-1) + RECSASIze.
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 2, about the displacements in globA, i.e. DISP(:), it is stand for the order of an array? like 1, 2, 3, ...., this corresponds to DISP(i-1) = 1 + (i-1)*RECSASIze(i-1)*extent. Or this array's elements are the address at which the data from different processors will be stored in globA?
</span><br>
<p>These are the displacement from the beginning of the array where the data from a peer is stored. The index in this array is the rank of the peer process in the communicator.
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 3, should the arrays start from 0 to numprocs-1? or start from 1 to numprocs? This may be important when they work as arguments in mpi_allgatherv subroutine.
</span><br>
<p>It doesn't matter how you allocate it (0:numprocs-1) or simple (numprocs) the compiler will do the right this when creating the call using the array.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; These questions may be too simple for MPI professionals, but I do not have much experience on this. Thus I am sincerely eager to get some comments and suggestions from you. Thank you in advance!
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22583/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22584.php">Huangwei: "Re: [OMPI users] mpi_allgatherv"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/08/22582.php">Huangwei: "[OMPI users] mpi_allgatherv"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/08/22582.php">Huangwei: "[OMPI users] mpi_allgatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22584.php">Huangwei: "Re: [OMPI users] mpi_allgatherv"</a>
<li><strong>Reply:</strong> <a href="22584.php">Huangwei: "Re: [OMPI users] mpi_allgatherv"</a>
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
