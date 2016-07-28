<?
$subject_val = "Re: [OMPI users] Collective operations and synchronization";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 17:02:37 2009" -->
<!-- isoreceived="20090323210237" -->
<!-- sent="Mon, 23 Mar 2009 13:01:57 -0800" -->
<!-- isosent="20090323210157" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Collective operations and synchronization" -->
<!-- id="49C7F8C5.3090206_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49C7F138.8040208_at_bcgsc.ca" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 17:01:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8554.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8552.php">Shaun Jackman: "[OMPI users] Collective operations and synchronization"</a>
<li><strong>In reply to:</strong> <a href="8552.php">Shaun Jackman: "[OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8554.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8554.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shaun Jackman wrote:
<br>
<p><span class="quotelev1">&gt; I've just read in the Open MPI documentation [1]
</span><br>
<p>That's the MPI spec, actually.
<br>
<p><span class="quotelev1">&gt; that collective operations, such as MPI_Allreduce, may synchronize, 
</span><br>
<span class="quotelev1">&gt; but do not necessarily synchronize. My algorithm requires a collective 
</span><br>
<span class="quotelev1">&gt; operation and synchronization; is there a better (more efficient?) 
</span><br>
<span class="quotelev1">&gt; method than simply calling MPI_Allreduce followed by MPI_Barrier?
</span><br>
<p>MPI_Allreduce is a case that actually &quot;requires&quot; synchronization in that 
<br>
no participating process may exit before all processes have entered.  
<br>
So, there should be no need to add additional synchronization.  A 
<br>
special case might be an MPI_Allreduce of a 0-length message, in which 
<br>
case I suppose an MPI implementation could simple &quot;do nothing&quot;, and the 
<br>
synchronization side-effect would be lost.
<br>
<p>The MPI spec is mainly talking about a &quot;typical&quot; collective where one 
<br>
could imagine a process exiting before some processes have entered.  
<br>
E.g., in a broadcast or scatter, the root could exit before any other 
<br>
process has entered the operation.  In a reduce or gather, the root 
<br>
could enter after all other processes have exited.  For all-to-all, 
<br>
allreduce, or allgather, however, no process can exit before all 
<br>
processes have entered, which is the synchronization condition effected 
<br>
by a barrier.  (Again, null message lengths can change things.)
<br>
<p><span class="quotelev1">&gt; [1] <a href="http://www.mpi-forum.org/docs/mpi21-report-bw/node85.htm">http://www.mpi-forum.org/docs/mpi21-report-bw/node85.htm</a>
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
<li><strong>Next message:</strong> <a href="8554.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8552.php">Shaun Jackman: "[OMPI users] Collective operations and synchronization"</a>
<li><strong>In reply to:</strong> <a href="8552.php">Shaun Jackman: "[OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8554.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8554.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
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
