<?
$subject_val = "Re: [OMPI users] mpi_allgatherv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  3 05:45:37 2013" -->
<!-- isoreceived="20130903094537" -->
<!-- sent="Tue, 3 Sep 2013 11:45:34 +0200" -->
<!-- isosent="20130903094534" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_allgatherv" -->
<!-- id="BAD45D88-9779-47D8-BD5A-3F5E96A699D6_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOQ90zHMF_JvkET3+JaCxL9sBKPF+8yxcy1yJs73oZycisZu=A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-09-03 05:45:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22592.php">Reuti: "Re: [OMPI users] Able to run mpirun as root, but not as a user."</a>
<li><strong>Previous message:</strong> <a href="22590.php">Siegmar Gross: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>In reply to:</strong> <a href="22584.php">Huangwei: "Re: [OMPI users] mpi_allgatherv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 1, 2013, at 23:36 , Huangwei &lt;hz283_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi George,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thank you for your reply. Please see below. 
</span><br>
<span class="quotelev1">&gt; best regards,
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
<span class="quotelev1">&gt; On 1 September 2013 22:03, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 31, 2013, at 14:56 , Huangwei &lt;hz283_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; I would like to send an array A, which has different dimensions in the processors. Then the root receive these As and puts them into another array globA. I know MPI_allgatherv can do this. However, there are still some implementation issues that are not very clear for me. Thank you very much if any of you can give me some suggestions and comments. The piece of code is as follows (I am not sure if it is completely correct):
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; !...calculate the total size for the total size of the globA, PROCASize(myidf) is the size of array A in each processor.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;         allocate(PROCASize(numprocs))
</span><br>
<span class="quotelev2">&gt;&gt;         PROCASize(myidf) = Asize
</span><br>
<span class="quotelev2">&gt;&gt;         call mpi_allreduce(PROCSize,PROCSize,numprocs,mpi_integer,mpi_sum,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;         globAsize = sum(PROCAsize)
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; !...calculate the RECS and DISP for MPI_allgatherv
</span><br>
<span class="quotelev2">&gt;&gt;         allocate(RECSASize(0:numprocs-1))
</span><br>
<span class="quotelev2">&gt;&gt;         allocate(DISP(0:numprocs-1))
</span><br>
<span class="quotelev2">&gt;&gt;         do i=1,numprocs
</span><br>
<span class="quotelev2">&gt;&gt;            RECSASize(i-1) = PROCASize(i)
</span><br>
<span class="quotelev2">&gt;&gt;         enddo
</span><br>
<span class="quotelev2">&gt;&gt;         call mpi_type_extent(mpi_integer, extent, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;         do i=1,numprocs
</span><br>
<span class="quotelev2">&gt;&gt;              DISP(i-1) = 1 + (i-1)*RECSASIze(i-1)*extent
</span><br>
<span class="quotelev2">&gt;&gt;         enddo
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; !...allocate the size of the array globA
</span><br>
<span class="quotelev2">&gt;&gt;         allocate(globA(globASize*extent))
</span><br>
<span class="quotelev2">&gt;&gt;         call mpi_allgatherv(A,ASize,MPI_INTEGER,globA, RECSASIze, DISP,MPI_INTEGER,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; My Questions:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 1, How to allocate the globA, i.e. the receive buff's size? Should I use globASize*extent or justglobalize?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I don't understand what globASize is supposed to be as you do the reduction on PROCSize and then sum PROCAsize.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Here I assume globASize is sum of the size of the array A in all the processors. For example, in proc 1, it is A(3), in proc 2, it is A(5), in proc 3 it is A(6). so  globSize =14. I aim to put these A arrays to globA which is sized as 14. All the data in A are aimed to be stored in globA consecutively based on rank number.   
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Anyway, you should always allocate the memory for collective based on the total number of elements to receive times the extent of each element. In fact to be even more accurate, if we suppose that you correctly computed the DISP array, you should allocate globA as DISP(numprocs-1) + RECSASIze.
</span><br>
<span class="quotelev1">&gt;    If all the elements in all A arrays are integer or all are uniformly double precision, the size of globA should be 14 or 14*extent_integer? 
</span><br>
<p>14 * extent(datatype).
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 2, about the displacements in globA, i.e. DISP(:), it is stand for the order of an array? like 1, 2, 3, ...., this corresponds to DISP(i-1) = 1 + (i-1)*RECSASIze(i-1)*extent. Or this array's elements are the address at which the data from different processors will be stored in globA?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These are the displacement from the beginning of the array where the data from a peer is stored. The index in this array is the rank of the peer process in the communicator.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I know. But I mean  the meaning of the elements of this array. Still use that example mentioned above. Is the following specification correct: DISP(1)=0, DISP(2)=3, DISP(3)=8 ?
</span><br>
<p>It depends on the amount of data sent by each process (as the ranges should not overlap).
<br>
<p><span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 3, should the arrays start from 0 to numprocs-1? or start from 1 to numprocs? This may be important when they work as arguments in mpi_allgatherv subroutine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It doesn't matter how you allocate it (0:numprocs-1) or simple (numprocs) the compiler will do the right this when creating the call using the array.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Additional Question is:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; For fortran mpi, can the mpi subroutine send array with 0 size, i.e. in the example, A is A(0), and ASize =0:
</span><br>
<p>As long as the peers expect 0 INTEGERS from this rank the call is correct.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; call mpi_allgatherv(A,ASize,MPI_INTEGER,globA, RECSASIze, DISP,MPI_INTEGER,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is this valid in mpi calling? This case will appear in my work.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thank you very much for your help!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Have a nice holiday!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; These questions may be too simple for MPI professionals, but I do not have much experience on this. Thus I am sincerely eager to get some comments and suggestions from you. Thank you in advance!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; regards,
</span><br>
<span class="quotelev2">&gt;&gt; Huangwei
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22591/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22592.php">Reuti: "Re: [OMPI users] Able to run mpirun as root, but not as a user."</a>
<li><strong>Previous message:</strong> <a href="22590.php">Siegmar Gross: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>In reply to:</strong> <a href="22584.php">Huangwei: "Re: [OMPI users] mpi_allgatherv"</a>
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
