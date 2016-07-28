<?
$subject_val = "Re: [OMPI users] Collective operations and synchronization";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 17:41:29 2009" -->
<!-- isoreceived="20090323214129" -->
<!-- sent="Mon, 23 Mar 2009 17:41:20 -0400" -->
<!-- isosent="20090323214120" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Collective operations and synchronization" -->
<!-- id="460E6590-6914-4A3E-9921-DE8A56A1C40A_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DEAAF790-F217-46E3-907A-B1776C1B7FB0_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Collective operations and synchronization<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 17:41:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8557.php">Richard Treumann: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8555.php">Rene Salmon: "Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 withintel compilers"</a>
<li><strong>In reply to:</strong> <a href="8554.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8557.php">Richard Treumann: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately even the MPI_Barrier doesn't guarantee a synchronous  
<br>
exit on all processes. There is no such thing in the MPI and there is  
<br>
no way to implement such a synchronization primitive in general (if  
<br>
one take in account metrics such as performance or scalability).
<br>
<p>In this particular context the MPI_Allreduce offers you exactly the  
<br>
same kind of synchronization as the MPI_Barrier. Moreover, all non  
<br>
rooted collectives (with the exception of the v versions) imply a  
<br>
synchronous behavior simply because all processes involved in the  
<br>
collective have to participate with some data.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 23, 2009, at 17:11 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Just one point to emphasize - Eugene said it, but many times people  
</span><br>
<span class="quotelev1">&gt; don't fully grasp the implication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On an MPI_Allreduce, the algorithm requires that all processes - 
</span><br>
<span class="quotelev1">&gt; enter- the call before anyone can exit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It does -not- require that they all exit at the same time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So if you want to synchronize on the -exit-, as your question  
</span><br>
<span class="quotelev1">&gt; indicated, then you must add the MPI_Barrier as you describe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 23, 2009, at 3:01 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Shaun Jackman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've just read in the Open MPI documentation [1]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's the MPI spec, actually.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that collective operations, such as MPI_Allreduce, may  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; synchronize, but do not necessarily synchronize. My algorithm  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; requires a collective operation and synchronization; is there a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; better (more efficient?) method than simply calling MPI_Allreduce  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; followed by MPI_Barrier?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Allreduce is a case that actually &quot;requires&quot; synchronization in  
</span><br>
<span class="quotelev2">&gt;&gt; that no participating process may exit before all processes have  
</span><br>
<span class="quotelev2">&gt;&gt; entered.  So, there should be no need to add additional  
</span><br>
<span class="quotelev2">&gt;&gt; synchronization.  A special case might be an MPI_Allreduce of a 0- 
</span><br>
<span class="quotelev2">&gt;&gt; length message, in which case I suppose an MPI implementation could  
</span><br>
<span class="quotelev2">&gt;&gt; simple &quot;do nothing&quot;, and the synchronization side-effect would be  
</span><br>
<span class="quotelev2">&gt;&gt; lost.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The MPI spec is mainly talking about a &quot;typical&quot; collective where  
</span><br>
<span class="quotelev2">&gt;&gt; one could imagine a process exiting before some processes have  
</span><br>
<span class="quotelev2">&gt;&gt; entered.  E.g., in a broadcast or scatter, the root could exit  
</span><br>
<span class="quotelev2">&gt;&gt; before any other process has entered the operation.  In a reduce or  
</span><br>
<span class="quotelev2">&gt;&gt; gather, the root could enter after all other processes have  
</span><br>
<span class="quotelev2">&gt;&gt; exited.  For all-to-all, allreduce, or allgather, however, no  
</span><br>
<span class="quotelev2">&gt;&gt; process can exit before all processes have entered, which is the  
</span><br>
<span class="quotelev2">&gt;&gt; synchronization condition effected by a barrier.  (Again, null  
</span><br>
<span class="quotelev2">&gt;&gt; message lengths can change things.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1] <a href="http://www.mpi-forum.org/docs/mpi21-report-bw/node85.htm">http://www.mpi-forum.org/docs/mpi21-report-bw/node85.htm</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8557.php">Richard Treumann: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8555.php">Rene Salmon: "Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 withintel compilers"</a>
<li><strong>In reply to:</strong> <a href="8554.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8557.php">Richard Treumann: "Re: [OMPI users] Collective operations and synchronization"</a>
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
