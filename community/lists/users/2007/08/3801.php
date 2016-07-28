<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  2 19:08:33 2007" -->
<!-- isoreceived="20070802230833" -->
<!-- sent="Thu, 2 Aug 2007 17:07:23 -0600" -->
<!-- isosent="20070802230723" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] values of mca parameters whilst running program" -->
<!-- id="AAEC3FAD-5808-4D49-8C26-5D594E50AE7B_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="p05111b0ec2d8046896dd_at_[10.0.1.6]" -->
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
<strong>Date:</strong> 2007-08-02 19:07:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3802.php">George Bosilca: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>Previous message:</strong> <a href="3800.php">Juan Carlos Guzman: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>In reply to:</strong> <a href="3799.php">Glenn Carver: "[OMPI users] values of mca parameters whilst running program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3804.php">Don Kerr: "Re: [OMPI users] values of mca parameters whilst running program"</a>
<li><strong>Reply:</strong> <a href="3804.php">Don Kerr: "Re: [OMPI users] values of mca parameters whilst running program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 2, 2007, at 4:22 PM, Glenn Carver wrote:
<br>
<p><span class="quotelev1">&gt; Hopefully an easy question to answer... is it possible to get at the
</span><br>
<span class="quotelev1">&gt; values of mca parameters whilst a program is running?   What I had in
</span><br>
<span class="quotelev1">&gt; mind was either an open-mpi function to call which would print the
</span><br>
<span class="quotelev1">&gt; current values of mca parameters or a function to call for specific
</span><br>
<span class="quotelev1">&gt; mca parameters. I don't want to interrupt the running of the
</span><br>
<span class="quotelev1">&gt; application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bit of background. I have a large F90 application running with
</span><br>
<span class="quotelev1">&gt; OpenMPI (as Sun Clustertools 7) on Opteron CPUs with an IB network.
</span><br>
<span class="quotelev1">&gt; We're seeing swap thrashing occurring on some of the nodes at times
</span><br>
<span class="quotelev1">&gt; and having searched the archives and read the FAQ believe we may be
</span><br>
<span class="quotelev1">&gt; seeing the problem described in:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2007/01/2511.php">http://www.open-mpi.org/community/lists/users/2007/01/2511.php</a>
</span><br>
<span class="quotelev1">&gt; where the udapl free list is growing to a point where lockable  
</span><br>
<span class="quotelev1">&gt; memory runs out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Problem is, I have no feel for the kinds of numbers  that
</span><br>
<span class="quotelev1">&gt; &quot;btl_udapl_free_list_max&quot; might safely get up to?  Hence the request
</span><br>
<span class="quotelev1">&gt; to print mca parameter values whilst the program is running to see if
</span><br>
<span class="quotelev1">&gt; we can tie in high values of this parameter to when we're seeing swap
</span><br>
<span class="quotelev1">&gt; thrashing.
</span><br>
<p>Good news, the answer is easy.  Bad news is, it's not the one you  
<br>
want.  btl_udapl_free_list_max is the *greatest* the list will ever  
<br>
be allowed to grow to, not it's current size.  So if you don't  
<br>
specify a value and use the default of -1, it will return -1 for the  
<br>
life of the application, regardless of how big those free lists  
<br>
actually get.  If you specify value X, it'll return X for the lift of  
<br>
the application, as well.
<br>
<p>There is not a good way for a user to find out the current size of a  
<br>
free list or the largest it got for the life of an application  
<br>
(currently those two will always be the same, but that's another  
<br>
story).  Your best bet is to set the parameter to some value (say,  
<br>
128 or 256) and see if that helps with the swapping.
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
<li><strong>Next message:</strong> <a href="3802.php">George Bosilca: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>Previous message:</strong> <a href="3800.php">Juan Carlos Guzman: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>In reply to:</strong> <a href="3799.php">Glenn Carver: "[OMPI users] values of mca parameters whilst running program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3804.php">Don Kerr: "Re: [OMPI users] values of mca parameters whilst running program"</a>
<li><strong>Reply:</strong> <a href="3804.php">Don Kerr: "Re: [OMPI users] values of mca parameters whilst running program"</a>
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
