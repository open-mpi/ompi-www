<?
$subject_val = "Re: [OMPI users] MPI Datatypes and RMA";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 29 21:35:22 2016" -->
<!-- isoreceived="20160430013522" -->
<!-- sent="Sat, 30 Apr 2016 10:35:21 +0900" -->
<!-- isosent="20160430013521" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Datatypes and RMA" -->
<!-- id="CAAkFZ5sw+0WQZ+XhNh_gv6HPrrOtjTCsYd8vV2wfkbDJpn4VhQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-29 21:35:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/05/29061.php">Gilles Gouaillardet: "Re: [OMPI users] MPI Datatypes and RMA"</a>
<li><strong>Previous message:</strong> <a href="29059.php">Palmer, Bruce J: "[OMPI users] MPI Datatypes and RMA"</a>
<li><strong>In reply to:</strong> <a href="29059.php">Palmer, Bruce J: "[OMPI users] MPI Datatypes and RMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/05/29061.php">Gilles Gouaillardet: "Re: [OMPI users] MPI Datatypes and RMA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bruce,
<br>
<p>which version of OpenMPI are you using ?
<br>
out of curiosity, did you try your program with an other MPI implementation
<br>
such as MPICH or it's derivative ?
<br>
when using derived datatypes (ddt) in one sided communication, the
<br>
ddt description must be sent with the data.
<br>
two protocols are internally used
<br>
- inline for &quot;short&quot; description
<br>
- within a new message for &quot;long&quot; description
<br>
assuming your program is correct, I can guess there is a bug in the way
<br>
ddt &quot;long&quot; description is handled, and I will investigate that.
<br>
<p>that being said, it is very likely MPI_Type_create_struct invoked with a
<br>
high count, will internally generate a long description, so it will always
<br>
be suboptimal compared to MPI_Type_create_subarray, or other subroutine
<br>
that can be used because of the &quot;regular shape&quot; of your ddt.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, April 30, 2016, Palmer, Bruce J &lt;Bruce.Palmer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I&#226;&#128;&#153;ve been trying to recreate the semantics of the Global Array gather and
</span><br>
<span class="quotelev1">&gt; scatter operations using MPI RMA routines and I&#226;&#128;&#153;ve run into some issues
</span><br>
<span class="quotelev1">&gt; with MPI Datatypes. I&#226;&#128;&#153;ve been focusing on building MPI versions of the GA
</span><br>
<span class="quotelev1">&gt; gather and scatter calls, which I&#226;&#128;&#153;ve been trying to implement using MPI
</span><br>
<span class="quotelev1">&gt; data types built with the MPI_Type_create_struct call. I&#226;&#128;&#153;ve developed a
</span><br>
<span class="quotelev1">&gt; test program that simulates copying data into and out of a 1D distributed
</span><br>
<span class="quotelev1">&gt; array of size NSIZE. Each processor contains a segment of approximately
</span><br>
<span class="quotelev1">&gt; size NSIZE/nproc and is responsible for assigning every nprocth value in
</span><br>
<span class="quotelev1">&gt; the array starting with the value indexed by the rank of the array. After
</span><br>
<span class="quotelev1">&gt; assigning values and synchronizing the distributed data structure, each
</span><br>
<span class="quotelev1">&gt; processor then reads the values set by the processor of next higher rank
</span><br>
<span class="quotelev1">&gt; (the process with rank nproc-1 reads the values set by process 0).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The distributed array is represented by and MPI window and created using a
</span><br>
<span class="quotelev1">&gt; standard MPI_Win_create call. The values in the array are set and read
</span><br>
<span class="quotelev1">&gt; using MPI RMA operations, either MPI_Get/MPI_Put or MPI_Rget/MPI_Rput.
</span><br>
<span class="quotelev1">&gt; Three different protocols have been used. The first is to call MPI_Win_lock
</span><br>
<span class="quotelev1">&gt; and create a shared lock on the remote processor, then call MPI_Put/MPI_Get
</span><br>
<span class="quotelev1">&gt; and then call MPI_Win_unlock to clear the lock. The second protocol is to
</span><br>
<span class="quotelev1">&gt; use MPI request-based calls. After the call to MPI_Win_create,
</span><br>
<span class="quotelev1">&gt; MPI_Win_lock_all is called to start a passive synchronization epoch on the
</span><br>
<span class="quotelev1">&gt; window. Data is written and read to the distributed array using
</span><br>
<span class="quotelev1">&gt; MPI_Rput/MPI_Rget immediately followed by a call to MPI_Wait, using the
</span><br>
<span class="quotelev1">&gt; handle returned by the MPI_Rput/MPI_Rget call. The third protocol also
</span><br>
<span class="quotelev1">&gt; immediately creates a passive synchronization epoch after window creation,
</span><br>
<span class="quotelev1">&gt; but uses calls to MPI_Put/MPI_Get immediately followed by a call to
</span><br>
<span class="quotelev1">&gt; MPI_Win_flush_local. These three protocols seem to cover all the
</span><br>
<span class="quotelev1">&gt; possibilities that I have seen in other MPI/RMA based implementations of
</span><br>
<span class="quotelev1">&gt; ARMCI/GA.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The issue that I&#226;&#128;&#153;ve run into is that these tests seem to work reliably if
</span><br>
<span class="quotelev1">&gt; I build the data type using the MPI_Type_create_subbarray function but fail
</span><br>
<span class="quotelev1">&gt; for larger arrays (NSIZE ~ 10000) when I use MPI_Type_create_struct.
</span><br>
<span class="quotelev1">&gt; Because the values being set by each processor are evenly spaced, I can use
</span><br>
<span class="quotelev1">&gt; either function in this case (this is not generally true in applications).
</span><br>
<span class="quotelev1">&gt; The struct data type hangs on 2 processors using lock/unlock, crashes for
</span><br>
<span class="quotelev1">&gt; the request-based protocol and does not get the correct values in the Get
</span><br>
<span class="quotelev1">&gt; phase of the data transfer when using flush_local. These tests are done on
</span><br>
<span class="quotelev1">&gt; a Linux cluster using an Infiniband interconnect and the value of NSIZE is
</span><br>
<span class="quotelev1">&gt; 10000. For comparison, the same test using MPI_Type_create_subarray seems
</span><br>
<span class="quotelev1">&gt; to function reliably for all three protocols for NSIZE=1000000 using 1,2,8
</span><br>
<span class="quotelev1">&gt; processors on 1 and 2 SMP nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;ve attached the test program for these test cases. Does anyone have a
</span><br>
<span class="quotelev1">&gt; suggestion about what might be going on here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bruce
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29060/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/05/29061.php">Gilles Gouaillardet: "Re: [OMPI users] MPI Datatypes and RMA"</a>
<li><strong>Previous message:</strong> <a href="29059.php">Palmer, Bruce J: "[OMPI users] MPI Datatypes and RMA"</a>
<li><strong>In reply to:</strong> <a href="29059.php">Palmer, Bruce J: "[OMPI users] MPI Datatypes and RMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/05/29061.php">Gilles Gouaillardet: "Re: [OMPI users] MPI Datatypes and RMA"</a>
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
