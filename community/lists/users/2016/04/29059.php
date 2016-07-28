<?
$subject_val = "[OMPI users] MPI Datatypes and RMA";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 29 18:40:36 2016" -->
<!-- isoreceived="20160429224036" -->
<!-- sent="Fri, 29 Apr 2016 22:40:22 +0000" -->
<!-- isosent="20160429224022" -->
<!-- name="Palmer, Bruce J" -->
<!-- email="Bruce.Palmer_at_[hidden]" -->
<!-- subject="[OMPI users] MPI Datatypes and RMA" -->
<!-- id="61BD36C35043184BB5E9C6E07E2C74AB1A6315FF_at_EX10MBOX02.pnnl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] MPI Datatypes and RMA<br>
<strong>From:</strong> Palmer, Bruce J (<em>Bruce.Palmer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-29 18:40:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29060.php">Gilles Gouaillardet: "Re: [OMPI users] MPI Datatypes and RMA"</a>
<li><strong>Previous message:</strong> <a href="29058.php">Scott Shaw: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29060.php">Gilles Gouaillardet: "Re: [OMPI users] MPI Datatypes and RMA"</a>
<li><strong>Reply:</strong> <a href="29060.php">Gilles Gouaillardet: "Re: [OMPI users] MPI Datatypes and RMA"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/05/29061.php">Gilles Gouaillardet: "Re: [OMPI users] MPI Datatypes and RMA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been trying to recreate the semantics of the Global Array gather and scatter operations using MPI RMA routines and I've run into some issues with MPI Datatypes. I've been focusing on building MPI versions of the GA gather and scatter calls, which I've been trying to implement using MPI data types built with the MPI_Type_create_struct call. I've developed a test program that simulates copying data into and out of a 1D distributed array of size NSIZE. Each processor contains a segment of approximately size NSIZE/nproc and is responsible for assigning every nprocth value in the array starting with the value indexed by the rank of the array. After assigning values and synchronizing the distributed data structure, each processor then reads the values set by the processor of next higher rank (the process with rank nproc-1 reads the values set by process 0).
<br>
<p>The distributed array is represented by and MPI window and created using a standard MPI_Win_create call. The values in the array are set and read using MPI RMA operations, either MPI_Get/MPI_Put or MPI_Rget/MPI_Rput. Three different protocols have been used. The first is to call MPI_Win_lock and create a shared lock on the remote processor, then call MPI_Put/MPI_Get and then call MPI_Win_unlock to clear the lock. The second protocol is to use MPI request-based calls. After the call to MPI_Win_create, MPI_Win_lock_all is called to start a passive synchronization epoch on the window. Data is written and read to the distributed array using MPI_Rput/MPI_Rget immediately followed by a call to MPI_Wait, using the handle returned by the MPI_Rput/MPI_Rget call. The third protocol also immediately creates a passive synchronization epoch after window creation, but uses calls to MPI_Put/MPI_Get immediately followed by a call to MPI_Win_flush_local. These three protocols seem to cover all the possibilities that I have seen in other MPI/RMA based implementations of ARMCI/GA.
<br>
<p>The issue that I've run into is that these tests seem to work reliably if I build the data type using the MPI_Type_create_subbarray function but fail for larger arrays (NSIZE ~ 10000) when I use MPI_Type_create_struct. Because the values being set by each processor are evenly spaced, I can use either function in this case (this is not generally true in applications). The struct data type hangs on 2 processors using lock/unlock, crashes for the request-based protocol and does not get the correct values in the Get phase of the data transfer when using flush_local. These tests are done on a Linux cluster using an Infiniband interconnect and the value of NSIZE is 10000. For comparison, the same test using MPI_Type_create_subarray seems to function reliably for all three protocols for NSIZE=1000000 using 1,2,8 processors on 1 and 2 SMP nodes.
<br>
<p>I've attached the test program for these test cases. Does anyone have a suggestion about what might be going on here?
<br>
<p>Bruce
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29059/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29059/mpi_gatscat_test.c">mpi_gatscat_test.c</a>
</ul>
<!-- attachment="mpi_gatscat_test.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29060.php">Gilles Gouaillardet: "Re: [OMPI users] MPI Datatypes and RMA"</a>
<li><strong>Previous message:</strong> <a href="29058.php">Scott Shaw: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29060.php">Gilles Gouaillardet: "Re: [OMPI users] MPI Datatypes and RMA"</a>
<li><strong>Reply:</strong> <a href="29060.php">Gilles Gouaillardet: "Re: [OMPI users] MPI Datatypes and RMA"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/05/29061.php">Gilles Gouaillardet: "Re: [OMPI users] MPI Datatypes and RMA"</a>
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
