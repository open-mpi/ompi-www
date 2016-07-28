<?
$subject_val = "Re: [OMPI users] Collective operations and synchronization";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 17:11:14 2009" -->
<!-- isoreceived="20090323211114" -->
<!-- sent="Mon, 23 Mar 2009 15:11:05 -0600" -->
<!-- isosent="20090323211105" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Collective operations and synchronization" -->
<!-- id="DEAAF790-F217-46E3-907A-B1776C1B7FB0_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49C7F8C5.3090206_at_sun.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 17:11:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8555.php">Rene Salmon: "Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 withintel compilers"</a>
<li><strong>Previous message:</strong> <a href="8553.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>In reply to:</strong> <a href="8553.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8556.php">George Bosilca: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8556.php">George Bosilca: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8557.php">Richard Treumann: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8558.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just one point to emphasize - Eugene said it, but many times people  
<br>
don't fully grasp the implication.
<br>
<p>On an MPI_Allreduce, the algorithm requires that all processes -enter-  
<br>
the call before anyone can exit.
<br>
<p>It does -not- require that they all exit at the same time.
<br>
<p>So if you want to synchronize on the -exit-, as your question  
<br>
indicated, then you must add the MPI_Barrier as you describe.
<br>
<p>Ralph
<br>
<p><p>On Mar 23, 2009, at 3:01 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Shaun Jackman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've just read in the Open MPI documentation [1]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's the MPI spec, actually.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; that collective operations, such as MPI_Allreduce, may synchronize,  
</span><br>
<span class="quotelev2">&gt;&gt; but do not necessarily synchronize. My algorithm requires a  
</span><br>
<span class="quotelev2">&gt;&gt; collective operation and synchronization; is there a better (more  
</span><br>
<span class="quotelev2">&gt;&gt; efficient?) method than simply calling MPI_Allreduce followed by  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Barrier?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce is a case that actually &quot;requires&quot; synchronization in  
</span><br>
<span class="quotelev1">&gt; that no participating process may exit before all processes have  
</span><br>
<span class="quotelev1">&gt; entered.  So, there should be no need to add additional  
</span><br>
<span class="quotelev1">&gt; synchronization.  A special case might be an MPI_Allreduce of a 0- 
</span><br>
<span class="quotelev1">&gt; length message, in which case I suppose an MPI implementation could  
</span><br>
<span class="quotelev1">&gt; simple &quot;do nothing&quot;, and the synchronization side-effect would be  
</span><br>
<span class="quotelev1">&gt; lost.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPI spec is mainly talking about a &quot;typical&quot; collective where  
</span><br>
<span class="quotelev1">&gt; one could imagine a process exiting before some processes have  
</span><br>
<span class="quotelev1">&gt; entered.  E.g., in a broadcast or scatter, the root could exit  
</span><br>
<span class="quotelev1">&gt; before any other process has entered the operation.  In a reduce or  
</span><br>
<span class="quotelev1">&gt; gather, the root could enter after all other processes have exited.   
</span><br>
<span class="quotelev1">&gt; For all-to-all, allreduce, or allgather, however, no process can  
</span><br>
<span class="quotelev1">&gt; exit before all processes have entered, which is the synchronization  
</span><br>
<span class="quotelev1">&gt; condition effected by a barrier.  (Again, null message lengths can  
</span><br>
<span class="quotelev1">&gt; change things.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [1] <a href="http://www.mpi-forum.org/docs/mpi21-report-bw/node85.htm">http://www.mpi-forum.org/docs/mpi21-report-bw/node85.htm</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8555.php">Rene Salmon: "Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 withintel compilers"</a>
<li><strong>Previous message:</strong> <a href="8553.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>In reply to:</strong> <a href="8553.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8556.php">George Bosilca: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8556.php">George Bosilca: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8557.php">Richard Treumann: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8558.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
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
