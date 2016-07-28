<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 19 17:39:26 2007" -->
<!-- isoreceived="20070719213926" -->
<!-- sent="Thu, 19 Jul 2007 15:39:05 -0600" -->
<!-- isosent="20070719213905" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_File_set_view rejecting subarray views." -->
<!-- id="96689034-522C-466F-914F-AD38D8B35764_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7137A9E1D1768C44BE7DF11D30FAB32303FD9F1C_at_ES21SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-19 17:39:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3730.php">SLIM H.A.: "[OMPI users] sge qdel fails"</a>
<li><strong>Previous message:</strong> <a href="3728.php">Moreland, Kenneth: "[OMPI users] MPI_File_set_view rejecting subarray views."</a>
<li><strong>In reply to:</strong> <a href="3728.php">Moreland, Kenneth: "[OMPI users] MPI_File_set_view rejecting subarray views."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3741.php">Moreland, Kenneth: "Re: [OMPI users] MPI_File_set_view rejecting subarray views."</a>
<li><strong>Reply:</strong> <a href="3741.php">Moreland, Kenneth: "Re: [OMPI users] MPI_File_set_view rejecting subarray views."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 19, 2007, at 3:24 PM, Moreland, Kenneth wrote:
<br>
<p><span class="quotelev1">&gt; I've run into a problem with the File I/O with openmpi version 1.2.3.
</span><br>
<span class="quotelev1">&gt; It is not possible to call MPI_File_set_view with a datatype created
</span><br>
<span class="quotelev1">&gt; from a subarray.  Instead of letting me set a view of this type, it
</span><br>
<span class="quotelev1">&gt; gives an invalid datatype error.  I have attached a simple program  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; demonstrates the problem.  In particular, the following sequence of
</span><br>
<span class="quotelev1">&gt; function calls should be supported, but they are not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Type_create_subarray(3, sizes, subsizes, starts,
</span><br>
<span class="quotelev1">&gt;                            MPI_ORDER_FORTRAN, MPI_BYTE, &amp;view);
</span><br>
<span class="quotelev1">&gt;   MPI_File_set_view(fd, 20, MPI_BYTE, view, &quot;native&quot;, MPI_INFO_NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After poking around in the source code a bit, I discovered that the  
</span><br>
<span class="quotelev1">&gt; I/O
</span><br>
<span class="quotelev1">&gt; implementation actually supports the subarray data type, but there  
</span><br>
<span class="quotelev1">&gt; is a
</span><br>
<span class="quotelev1">&gt; check that is issuing an error before the underlying I/O layer (ROMIO)
</span><br>
<span class="quotelev1">&gt; has a chance to handle the request.
</span><br>
<p>You need to commit the datatype after calling  
<br>
MPI_Type_create_subarray.  If you add:
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;view);
<br>
<p>after the Type_create, but before File_set_view, the code will run to  
<br>
completion.
<br>
<p>Well, the code will then complain about a Barrier after MPI_Finalize  
<br>
due to an error in how we shut down when there are files that have  
<br>
been opened but not closed (you should also add a call to  
<br>
MPI_File_close after the set_view, but I'm assuming it's not there  
<br>
because this is a test code).  This is something we need to fix, but  
<br>
also signifies a user error.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian W. Barrett
   Networking Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3730.php">SLIM H.A.: "[OMPI users] sge qdel fails"</a>
<li><strong>Previous message:</strong> <a href="3728.php">Moreland, Kenneth: "[OMPI users] MPI_File_set_view rejecting subarray views."</a>
<li><strong>In reply to:</strong> <a href="3728.php">Moreland, Kenneth: "[OMPI users] MPI_File_set_view rejecting subarray views."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3741.php">Moreland, Kenneth: "Re: [OMPI users] MPI_File_set_view rejecting subarray views."</a>
<li><strong>Reply:</strong> <a href="3741.php">Moreland, Kenneth: "Re: [OMPI users] MPI_File_set_view rejecting subarray views."</a>
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
