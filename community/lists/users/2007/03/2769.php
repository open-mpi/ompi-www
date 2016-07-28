<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 17:00:21 2007" -->
<!-- isoreceived="20070306220021" -->
<!-- sent="Tue, 6 Mar 2007 16:55:55 -0500" -->
<!-- isosent="20070306215555" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_PACK very slow?" -->
<!-- id="45AA7C51-4AA2-4921-9A9E-756AD203DF46_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="117B1806-DDC4-4A01-85CD-1303BBBFB7C4_at_ieee.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-06 16:55:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2770.php">Jean-Christophe Mignot: "[OMPI users] running jobs on heteregenous clusters"</a>
<li><strong>Previous message:</strong> <a href="2768.php">Michael: "Re: [OMPI users] MPI_PACK very slow?"</a>
<li><strong>In reply to:</strong> <a href="2768.php">Michael: "Re: [OMPI users] MPI_PACK very slow?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 6, 2007, at 4:51 PM, Michael wrote:
<br>
<p><span class="quotelev1">&gt; MPI_Type_creat_struct performs well only when all the data is
</span><br>
<span class="quotelev1">&gt; continuous in memory (at least for OpenMPI  1.1.2).
</span><br>
<p>There are always benefits for sending contiguous data, especially  
<br>
when the message is small. Packing and unpacking, are costly  
<br>
operations. Even having a highly optimized version, cannot beat a  
<br>
user hand pack routine when the data is small. Increase the size of  
<br>
your message to over 64K and you will see another story.
<br>
<p><span class="quotelev1">&gt; In my case the program has a f90 structure with 11 integers, 2
</span><br>
<span class="quotelev1">&gt; logicals, and five 50 element integer arrays.  But at the first stage
</span><br>
<span class="quotelev1">&gt; of the program only the first element of those arrays are used.  But
</span><br>
<span class="quotelev1">&gt; using MPI_Type_create_struct it is more efficient to send the entire
</span><br>
<span class="quotelev1">&gt; 263 words of continuous memory (58 sec's) than to try and send only
</span><br>
<span class="quotelev1">&gt; 18 words of noncontinuous memory (64 sec's).  At the second stage
</span><br>
<span class="quotelev1">&gt; it's 33 words and at that stage it becomes 47 sec's vs. 163 sec's, an
</span><br>
<span class="quotelev1">&gt; extra 116 seconds, which dominates the push of my overall wall clock
</span><br>
<span class="quotelev1">&gt; time from 130 to 278 seconds.  The third stage increases from 13
</span><br>
<span class="quotelev1">&gt; seconds to 37 seconds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Because I need to send this block of data back and forward a lot I
</span><br>
<span class="quotelev1">&gt; was hoping to find a way to speed up this data transfer of this odd
</span><br>
<span class="quotelev1">&gt; block of data and a couple other variables.  I may try PACK and
</span><br>
<span class="quotelev1">&gt; UNPACK on the structure, but calling those lots of times can't be
</span><br>
<span class="quotelev1">&gt; more efficient.
</span><br>
<p>Is there any way I can get access to your software ? Or at least the  
<br>
data-type related code ?
<br>
<p><span class="quotelev1">&gt; ps. I don't currently have valgrind installed on this cluster and
</span><br>
<span class="quotelev1">&gt; valgrind is not part of the Debian Linux 3.1r3 distribution.  Without
</span><br>
<span class="quotelev1">&gt; any experience with valgrind  I'm not sure how useful valgrind will
</span><br>
<span class="quotelev1">&gt; be with a MPI program of 500+ subroutines and 50K+ lines running on
</span><br>
<span class="quotelev1">&gt; 16 processes.  It took us a bit to get profiling working for the
</span><br>
<span class="quotelev1">&gt; OpenMP version of this code.
</span><br>
<p>It will be seamless. What I'm doing is the following:
<br>
<p>instead of: mpirun -np 16 my_program my_args
<br>
<p>I'm using: mpirun -np 16 valgrind --tool=callgrind my_program my_args
<br>
<p>Once the execution is completed (which will usually take about 20  
<br>
times more than without valgrind) I gather all resulting files on a  
<br>
common location (if not already over NFS) and analyze them with  
<br>
kcachegrind (comming by default with kde).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 6, 2007, at 11:28 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I doubt this come from the MPI_Pack/MPI_Unpack. The difference is 137
</span><br>
<span class="quotelev2">&gt;&gt; seconds for 5 calls. That's basically 27 seconds by call to MPI_Pack,
</span><br>
<span class="quotelev2">&gt;&gt; for packing 8 integers. I know the code and I'm affirmative there is
</span><br>
<span class="quotelev2">&gt;&gt; no way to spend 27 seconds over there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you run your application using valgrind with the callgrind tool.
</span><br>
<span class="quotelev2">&gt;&gt; This will give you some basic informations about where the time is
</span><br>
<span class="quotelev2">&gt;&gt; spend. This will give us additional information about where to look.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;      george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 6, 2007, at 11:26 AM, Michael wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a section of code were I need to send 8 separate integers via
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BCAST.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Initially I was just putting the 8 integers into an array and then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sending that array.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just tried using MPI_PACK on those 8 integers and I'm seeing a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; massive slow down in the code, I have a lot of other communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and this section is being used only 5 times.  I went from 140  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seconds
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to 277 seconds on 16 processors using TCP via a dual gigabit  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ethernet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setup (I'm the only user working on this system today).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This was run with OpenMPI 1.1.2 to maintain compatibility with a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; major HPC site.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a know problem with MPI_PACK/UNPACK in OpenMPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Michael
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Half of what I say is meaningless; but I say it so that the other
</span><br>
<span class="quotelev2">&gt;&gt; half may reach you&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                                    Kahlil Gibran
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
<span class="quotelev2">&gt;&gt;
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
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2770.php">Jean-Christophe Mignot: "[OMPI users] running jobs on heteregenous clusters"</a>
<li><strong>Previous message:</strong> <a href="2768.php">Michael: "Re: [OMPI users] MPI_PACK very slow?"</a>
<li><strong>In reply to:</strong> <a href="2768.php">Michael: "Re: [OMPI users] MPI_PACK very slow?"</a>
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
