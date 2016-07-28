<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 11:32:25 2007" -->
<!-- isoreceived="20070306163225" -->
<!-- sent="Tue, 6 Mar 2007 11:28:16 -0500" -->
<!-- isosent="20070306162816" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_PACK very slow?" -->
<!-- id="B2B34728-EF54-4547-A859-28FB03467176_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CF5A5CC8-5912-4481-ADF5-ED2202B7FB58_at_ieee.org" -->
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
<strong>Date:</strong> 2007-03-06 11:28:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2766.php">Christian Simon: "Re: [OMPI users] configure is too smart !"</a>
<li><strong>Previous message:</strong> <a href="2764.php">Michael: "[OMPI users] MPI_PACK very slow?"</a>
<li><strong>In reply to:</strong> <a href="2764.php">Michael: "[OMPI users] MPI_PACK very slow?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2768.php">Michael: "Re: [OMPI users] MPI_PACK very slow?"</a>
<li><strong>Reply:</strong> <a href="2768.php">Michael: "Re: [OMPI users] MPI_PACK very slow?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I doubt this come from the MPI_Pack/MPI_Unpack. The difference is 137  
<br>
seconds for 5 calls. That's basically 27 seconds by call to MPI_Pack,  
<br>
for packing 8 integers. I know the code and I'm affirmative there is  
<br>
no way to spend 27 seconds over there.
<br>
<p>Can you run your application using valgrind with the callgrind tool.  
<br>
This will give you some basic informations about where the time is  
<br>
spend. This will give us additional information about where to look.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 6, 2007, at 11:26 AM, Michael wrote:
<br>
<p><span class="quotelev1">&gt; I have a section of code were I need to send 8 separate integers via
</span><br>
<span class="quotelev1">&gt; BCAST.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Initially I was just putting the 8 integers into an array and then
</span><br>
<span class="quotelev1">&gt; sending that array.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just tried using MPI_PACK on those 8 integers and I'm seeing a
</span><br>
<span class="quotelev1">&gt; massive slow down in the code, I have a lot of other communication
</span><br>
<span class="quotelev1">&gt; and this section is being used only 5 times.  I went from 140 seconds
</span><br>
<span class="quotelev1">&gt; to 277 seconds on 16 processors using TCP via a dual gigabit ethernet
</span><br>
<span class="quotelev1">&gt; setup (I'm the only user working on this system today).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This was run with OpenMPI 1.1.2 to maintain compatibility with a
</span><br>
<span class="quotelev1">&gt; major HPC site.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a know problem with MPI_PACK/UNPACK in OpenMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
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
<li><strong>Next message:</strong> <a href="2766.php">Christian Simon: "Re: [OMPI users] configure is too smart !"</a>
<li><strong>Previous message:</strong> <a href="2764.php">Michael: "[OMPI users] MPI_PACK very slow?"</a>
<li><strong>In reply to:</strong> <a href="2764.php">Michael: "[OMPI users] MPI_PACK very slow?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2768.php">Michael: "Re: [OMPI users] MPI_PACK very slow?"</a>
<li><strong>Reply:</strong> <a href="2768.php">Michael: "Re: [OMPI users] MPI_PACK very slow?"</a>
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
