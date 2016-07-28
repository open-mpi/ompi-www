<?
$subject_val = "Re: [OMPI users] Collective operations and synchronization";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 17:43:23 2009" -->
<!-- isoreceived="20090323214323" -->
<!-- sent="Mon, 23 Mar 2009 17:43:16 -0400" -->
<!-- isosent="20090323214316" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Collective operations and synchronization" -->
<!-- id="OF2691E33D.C93892D5-ON85257582.00766E24-85257582.00775182_at_us.ibm.com" -->
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
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 17:43:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8558.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8556.php">George Bosilca: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>In reply to:</strong> <a href="8554.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8558.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is no synchronization operation in MPI that promises all tasks will
<br>
exit at the same time. For MPI_Barrier they will exit as close to the same
<br>
time as the implementation can reasonably support but as long as the
<br>
application is distributed and there are delays in the interconnect, it is
<br>
not possible to provide strict exit synchronization.
<br>
<p>If a task involved in the MPI_Barrier happens to be de-scheduled by the OS
<br>
in the middle of carrying out an MPI_Barrier, the skew can be quite
<br>
significant (even several milliseconds)
<br>
<p>The MPI standard only stipulates that no task in the group may exit
<br>
MPI_Barrier until all tasks have entered.
<br>
<p>As covered in an extensive discussion a couple week back, very few
<br>
applications actually require MPI_Barrier synchronization at all.
<br>
Applications in which tasks are affected by outside events or use non-MPI
<br>
communications can require MPI_Barrier.  Tasks that use MPI_ANY_SOURCE or
<br>
MPI_ANY_TAG receive can act in unexpected ways without judicious use of
<br>
MPI_Barrier.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dick
<br>
<p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 03/23/2009 05:11:05 PM:
<br>
<p><span class="quotelev1">&gt; [image removed]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Collective operations and synchronization
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 03/23/2009 05:12 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just one point to emphasize - Eugene said it, but many times people
</span><br>
<span class="quotelev1">&gt; don't fully grasp the implication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On an MPI_Allreduce, the algorithm requires that all processes -enter-
</span><br>
<span class="quotelev1">&gt; the call before anyone can exit.
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
<span class="quotelev2">&gt; &gt; Shaun Jackman wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've just read in the Open MPI documentation [1]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That's the MPI spec, actually.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that collective operations, such as MPI_Allreduce, may synchronize,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; but do not necessarily synchronize. My algorithm requires a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; collective operation and synchronization; is there a better (more
</span><br>
<span class="quotelev3">&gt; &gt;&gt; efficient?) method than simply calling MPI_Allreduce followed by
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Barrier?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Allreduce is a case that actually &quot;requires&quot; synchronization in
</span><br>
<span class="quotelev2">&gt; &gt; that no participating process may exit before all processes have
</span><br>
<span class="quotelev2">&gt; &gt; entered.  So, there should be no need to add additional
</span><br>
<span class="quotelev2">&gt; &gt; synchronization.  A special case might be an MPI_Allreduce of a 0-
</span><br>
<span class="quotelev2">&gt; &gt; length message, in which case I suppose an MPI implementation could
</span><br>
<span class="quotelev2">&gt; &gt; simple &quot;do nothing&quot;, and the synchronization side-effect would be
</span><br>
<span class="quotelev2">&gt; &gt; lost.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The MPI spec is mainly talking about a &quot;typical&quot; collective where
</span><br>
<span class="quotelev2">&gt; &gt; one could imagine a process exiting before some processes have
</span><br>
<span class="quotelev2">&gt; &gt; entered.  E.g., in a broadcast or scatter, the root could exit
</span><br>
<span class="quotelev2">&gt; &gt; before any other process has entered the operation.  In a reduce or
</span><br>
<span class="quotelev2">&gt; &gt; gather, the root could enter after all other processes have exited.
</span><br>
<span class="quotelev2">&gt; &gt; For all-to-all, allreduce, or allgather, however, no process can
</span><br>
<span class="quotelev2">&gt; &gt; exit before all processes have entered, which is the synchronization
</span><br>
<span class="quotelev2">&gt; &gt; condition effected by a barrier.  (Again, null message lengths can
</span><br>
<span class="quotelev2">&gt; &gt; change things.)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [1] <a href="http://www.mpi-forum.org/docs/mpi21-report-bw/node85.htm">http://www.mpi-forum.org/docs/mpi21-report-bw/node85.htm</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8557/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8558.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8556.php">George Bosilca: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>In reply to:</strong> <a href="8554.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8558.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
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
