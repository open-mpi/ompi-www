<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 16:51:34 2007" -->
<!-- isoreceived="20070306215134" -->
<!-- sent="Tue, 6 Mar 2007 16:51:19 -0500" -->
<!-- isosent="20070306215119" -->
<!-- name="Michael" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_PACK very slow?" -->
<!-- id="117B1806-DDC4-4A01-85CD-1303BBBFB7C4_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B2B34728-EF54-4547-A859-28FB03467176_at_cs.utk.edu" -->
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
<strong>From:</strong> Michael (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-06 16:51:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2769.php">George Bosilca: "Re: [OMPI users] MPI_PACK very slow?"</a>
<li><strong>Previous message:</strong> <a href="2767.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>In reply to:</strong> <a href="2765.php">George Bosilca: "Re: [OMPI users] MPI_PACK very slow?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2769.php">George Bosilca: "Re: [OMPI users] MPI_PACK very slow?"</a>
<li><strong>Reply:</strong> <a href="2769.php">George Bosilca: "Re: [OMPI users] MPI_PACK very slow?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I discovered I made a minor change that cost me dearly (I had thought  
<br>
I had tested this single change but perhaps didn't track the timing  
<br>
data closely).
<br>
<p>MPI_Type_creat_struct performs well only when all the data is  
<br>
continuous in memory (at least for OpenMPI  1.1.2).
<br>
<p>Is this normal or expected?
<br>
<p>In my case the program has a f90 structure with 11 integers, 2  
<br>
logicals, and five 50 element integer arrays.  But at the first stage  
<br>
of the program only the first element of those arrays are used.  But  
<br>
using MPI_Type_create_struct it is more efficient to send the entire  
<br>
263 words of continuous memory (58 sec's) than to try and send only  
<br>
18 words of noncontinuous memory (64 sec's).  At the second stage  
<br>
it's 33 words and at that stage it becomes 47 sec's vs. 163 sec's, an  
<br>
extra 116 seconds, which dominates the push of my overall wall clock  
<br>
time from 130 to 278 seconds.  The third stage increases from 13  
<br>
seconds to 37 seconds.
<br>
<p>Because I need to send this block of data back and forward a lot I  
<br>
was hoping to find a way to speed up this data transfer of this odd  
<br>
block of data and a couple other variables.  I may try PACK and  
<br>
UNPACK on the structure, but calling those lots of times can't be  
<br>
more efficient.
<br>
<p>Previously I was equivalencing the structure to a integer array and  
<br>
sending the integer array as a fast dirty solution to get started and  
<br>
it worked.  Not completely portable no doubt.
<br>
<p>Michael
<br>
<p>ps. I don't currently have valgrind installed on this cluster and  
<br>
valgrind is not part of the Debian Linux 3.1r3 distribution.  Without  
<br>
any experience with valgrind  I'm not sure how useful valgrind will  
<br>
be with a MPI program of 500+ subroutines and 50K+ lines running on  
<br>
16 processes.  It took us a bit to get profiling working for the  
<br>
OpenMP version of this code.
<br>
<p>On Mar 6, 2007, at 11:28 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I doubt this come from the MPI_Pack/MPI_Unpack. The difference is 137
</span><br>
<span class="quotelev1">&gt; seconds for 5 calls. That's basically 27 seconds by call to MPI_Pack,
</span><br>
<span class="quotelev1">&gt; for packing 8 integers. I know the code and I'm affirmative there is
</span><br>
<span class="quotelev1">&gt; no way to spend 27 seconds over there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you run your application using valgrind with the callgrind tool.
</span><br>
<span class="quotelev1">&gt; This will give you some basic informations about where the time is
</span><br>
<span class="quotelev1">&gt; spend. This will give us additional information about where to look.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 6, 2007, at 11:26 AM, Michael wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a section of code were I need to send 8 separate integers via
</span><br>
<span class="quotelev2">&gt;&gt; BCAST.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Initially I was just putting the 8 integers into an array and then
</span><br>
<span class="quotelev2">&gt;&gt; sending that array.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just tried using MPI_PACK on those 8 integers and I'm seeing a
</span><br>
<span class="quotelev2">&gt;&gt; massive slow down in the code, I have a lot of other communication
</span><br>
<span class="quotelev2">&gt;&gt; and this section is being used only 5 times.  I went from 140 seconds
</span><br>
<span class="quotelev2">&gt;&gt; to 277 seconds on 16 processors using TCP via a dual gigabit ethernet
</span><br>
<span class="quotelev2">&gt;&gt; setup (I'm the only user working on this system today).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This was run with OpenMPI 1.1.2 to maintain compatibility with a
</span><br>
<span class="quotelev2">&gt;&gt; major HPC site.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a know problem with MPI_PACK/UNPACK in OpenMPI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael
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
<span class="quotelev1">&gt; &quot;Half of what I say is meaningless; but I say it so that the other
</span><br>
<span class="quotelev1">&gt; half may reach you&quot;
</span><br>
<span class="quotelev1">&gt;                                    Kahlil Gibran
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2769.php">George Bosilca: "Re: [OMPI users] MPI_PACK very slow?"</a>
<li><strong>Previous message:</strong> <a href="2767.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>In reply to:</strong> <a href="2765.php">George Bosilca: "Re: [OMPI users] MPI_PACK very slow?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2769.php">George Bosilca: "Re: [OMPI users] MPI_PACK very slow?"</a>
<li><strong>Reply:</strong> <a href="2769.php">George Bosilca: "Re: [OMPI users] MPI_PACK very slow?"</a>
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
