<?
$subject_val = "Re: [OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  9 18:37:43 2010" -->
<!-- isoreceived="20100909223743" -->
<!-- sent="Fri, 10 Sep 2010 02:37:44 +0400" -->
<!-- isosent="20100909223744" -->
<!-- name="Alex A. Granovsky" -->
<!-- email="gran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce performance" -->
<!-- id="000201cb506f$a918ae30$5f45efc3_at_alexg" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C893644.7060505_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Reduce performance<br>
<strong>From:</strong> Alex A. Granovsky (<em>gran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-09 18:37:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14210.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14208.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14203.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14204.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene,
<br>
<p>you did not take into account the dispersion/dephasing between different processes. As cluster size and the 
<br>
number of instances of parallel process increase, the dispersion increases as well, making different instances 
<br>
to be a kind out of sync - not really out of sync, but just because of different speed of execution on different nodes, delays, etc... 
<br>
If you account for this, you get the result I mentioned.
<br>
<p>Alex
<br>
<p>&nbsp;&nbsp;----- Original Message ----- 
<br>
&nbsp;&nbsp;From: Eugene Loh 
<br>
&nbsp;&nbsp;To: Open MPI Users 
<br>
&nbsp;&nbsp;Sent: Thursday, September 09, 2010 11:32 PM
<br>
&nbsp;&nbsp;Subject: Re: [OMPI users] MPI_Reduce performance
<br>
<p><p>&nbsp;&nbsp;Alex A. Granovsky wrote: 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Isn't in evident from the theory of random processes and probability theory that in the limit of infinitely 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;large cluster and parallel process, the probability of deadlocks with current implementation is unfortunately 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;quite a finite quantity and in limit approaches to unity regardless on any particular details of the program.
<br>
&nbsp;&nbsp;No, not at all.  Consider simulating a physical volume.  Each process is assigned to some small subvolume.  It updates conditions locally, but on the surface of its simulation subvolume it needs information from &quot;nearby&quot; processes.  It cannot proceed along the surface until it has that neighboring information.  Its neighbors, in turn, cannot proceed until their neighbors have reached some point.  Two distant processes can be quite out of step with one another, but only by some bounded amount.  At some point, a leading process has to wait for information from a laggard to propagate to it.  All processes proceed together, in some loose lock-step fashion.  Many applications behave in this fashion.  Actually, in many applications, the synchronization is tightened in that &quot;physics&quot; is made to propagate faster than neighbor-by-neighbor.
<br>
<p>&nbsp;&nbsp;As the number of processes increases, the laggard might seem relatively slower in comparison, but that isn't deadlock.
<br>
<p>&nbsp;&nbsp;As the size of the cluster increases, the chances of a system component failure increase, but that also is a different matter.
<br>
<p><p><p>------------------------------------------------------------------------------
<br>
<p><p>&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14209/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14210.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14208.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14203.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14204.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
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
