<?
$subject_val = "Re: [OMPI users] MPI Datatypes and RMA";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 00:42:33 2016" -->
<!-- isoreceived="20160502044233" -->
<!-- sent="Mon, 2 May 2016 13:42:21 +0900" -->
<!-- isosent="20160502044221" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Datatypes and RMA" -->
<!-- id="01c20fdf-c41b-96a8-6732-661745ddf272_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="61BD36C35043184BB5E9C6E07E2C74AB1A6315FF_at_EX10MBOX02.pnnl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Datatypes and RMA<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 00:42:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29062.php">RYAN RAY: "[OMPI users] OpenSHMEM + STM Linking Problem"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/04/29060.php">Gilles Gouaillardet: "Re: [OMPI users] MPI Datatypes and RMA"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/04/29059.php">Palmer, Bruce J: "[OMPI users] MPI Datatypes and RMA"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bruce,
<br>
<p><p>this issue was previously fixed on master and v2.x, but for some 
<br>
reasons, the fix was not backported to v1.10
<br>
<p>i made a PR at <a href="https://github.com/open-mpi/ompi-release/pull/1120/files">https://github.com/open-mpi/ompi-release/pull/1120/files</a>
<br>
<p>in the mean time, feel free to manually apply the patch at 
<br>
<a href="https://patch-diff.githubusercontent.com/raw/open-mpi/ompi-release/pull/1120.patch">https://patch-diff.githubusercontent.com/raw/open-mpi/ompi-release/pull/1120.patch</a>
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 4/30/2016 7:40 AM, Palmer, Bruce J wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;ve been trying to recreate the semantics of the Global Array gather 
</span><br>
<span class="quotelev1">&gt; and scatter operations using MPI RMA routines and I&#146;ve run into some 
</span><br>
<span class="quotelev1">&gt; issues with MPI Datatypes. I&#146;ve been focusing on building MPI versions 
</span><br>
<span class="quotelev1">&gt; of the GA gather and scatter calls, which I&#146;ve been trying to 
</span><br>
<span class="quotelev1">&gt; implement using MPI data types built with the MPI_Type_create_struct 
</span><br>
<span class="quotelev1">&gt; call. I&#146;ve developed a test program that simulates copying data into 
</span><br>
<span class="quotelev1">&gt; and out of a 1D distributed array of size NSIZE. Each processor 
</span><br>
<span class="quotelev1">&gt; contains a segment of approximately size NSIZE/nproc and is 
</span><br>
<span class="quotelev1">&gt; responsible for assigning every nprocth value in the array starting 
</span><br>
<span class="quotelev1">&gt; with the value indexed by the rank of the array. After assigning 
</span><br>
<span class="quotelev1">&gt; values and synchronizing the distributed data structure, each 
</span><br>
<span class="quotelev1">&gt; processor then reads the values set by the processor of next higher 
</span><br>
<span class="quotelev1">&gt; rank (the process with rank nproc-1 reads the values set by process 0).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The distributed array is represented by and MPI window and created 
</span><br>
<span class="quotelev1">&gt; using a standard MPI_Win_create call. The values in the array are set 
</span><br>
<span class="quotelev1">&gt; and read using MPI RMA operations, either MPI_Get/MPI_Put or 
</span><br>
<span class="quotelev1">&gt; MPI_Rget/MPI_Rput. Three different protocols have been used. The first 
</span><br>
<span class="quotelev1">&gt; is to call MPI_Win_lock and create a shared lock on the remote 
</span><br>
<span class="quotelev1">&gt; processor, then call MPI_Put/MPI_Get and then call MPI_Win_unlock to 
</span><br>
<span class="quotelev1">&gt; clear the lock. The second protocol is to use MPI request-based calls. 
</span><br>
<span class="quotelev1">&gt; After the call to MPI_Win_create, MPI_Win_lock_all is called to start 
</span><br>
<span class="quotelev1">&gt; a passive synchronization epoch on the window. Data is written and 
</span><br>
<span class="quotelev1">&gt; read to the distributed array using MPI_Rput/MPI_Rget immediately 
</span><br>
<span class="quotelev1">&gt; followed by a call to MPI_Wait, using the handle returned by the 
</span><br>
<span class="quotelev1">&gt; MPI_Rput/MPI_Rget call. The third protocol also immediately creates a 
</span><br>
<span class="quotelev1">&gt; passive synchronization epoch after window creation, but uses calls to 
</span><br>
<span class="quotelev1">&gt; MPI_Put/MPI_Get immediately followed by a call to MPI_Win_flush_local. 
</span><br>
<span class="quotelev1">&gt; These three protocols seem to cover all the possibilities that I have 
</span><br>
<span class="quotelev1">&gt; seen in other MPI/RMA based implementations of ARMCI/GA.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The issue that I&#146;ve run into is that these tests seem to work reliably 
</span><br>
<span class="quotelev1">&gt; if I build the data type using the MPI_Type_create_subbarray function 
</span><br>
<span class="quotelev1">&gt; but fail for larger arrays (NSIZE ~ 10000) when I use 
</span><br>
<span class="quotelev1">&gt; MPI_Type_create_struct. Because the values being set by each processor 
</span><br>
<span class="quotelev1">&gt; are evenly spaced, I can use either function in this case (this is not 
</span><br>
<span class="quotelev1">&gt; generally true in applications). The struct data type hangs on 2 
</span><br>
<span class="quotelev1">&gt; processors using lock/unlock, crashes for the request-based protocol 
</span><br>
<span class="quotelev1">&gt; and does not get the correct values in the Get phase of the data 
</span><br>
<span class="quotelev1">&gt; transfer when using flush_local. These tests are done on a Linux 
</span><br>
<span class="quotelev1">&gt; cluster using an Infiniband interconnect and the value of NSIZE is 
</span><br>
<span class="quotelev1">&gt; 10000. For comparison, the same test using MPI_Type_create_subarray 
</span><br>
<span class="quotelev1">&gt; seems to function reliably for all three protocols for NSIZE=1000000 
</span><br>
<span class="quotelev1">&gt; using 1,2,8 processors on 1 and 2 SMP nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;ve attached the test program for these test cases. Does anyone have 
</span><br>
<span class="quotelev1">&gt; a suggestion about what might be going on here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bruce
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/29059.php">http://www.open-mpi.org/community/lists/users/2016/04/29059.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29061/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29062.php">RYAN RAY: "[OMPI users] OpenSHMEM + STM Linking Problem"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/04/29060.php">Gilles Gouaillardet: "Re: [OMPI users] MPI Datatypes and RMA"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/04/29059.php">Palmer, Bruce J: "[OMPI users] MPI Datatypes and RMA"</a>
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
