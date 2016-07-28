<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May  5 11:43:37 2005" -->
<!-- isoreceived="20050505164337" -->
<!-- sent="Thu, 5 May 2005 12:43:38 -0400" -->
<!-- isosent="20050505164338" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Questions about Open MPI" -->
<!-- id="C402BAA9-EFA0-4877-BEE7-410340007194_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="428E9BFD_at_zathras" -->
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
<strong>Date:</strong> 2005-05-05 11:43:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2005/06/0053.php">Jonathan Day: "[O-MPI users] Questions on status"</a>
<li><strong>Previous message:</strong> <a href="0051.php">atarpley: "[O-MPI users] Questions about Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0051.php">atarpley: "[O-MPI users] Questions about Open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 5, 2005, at 7:58 AM, atarpley wrote:
<br>
<p><p><span class="quotelev1">&gt; 1) When will the final Open MPI be released (non development)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>As soon as everybody is happy with the stability and the features of  
<br>
a version. And like for most of the HPC software, SC05 seems like a  
<br>
reasonable deadline. Meanwhile, a beta version will be released soon  
<br>
(no specific deadline available at the moment).
<br>
<p><p><span class="quotelev1">&gt; 2) What fault tolerance mechanisms will be included?  Specifically,  
</span><br>
<span class="quotelev1">&gt; if a node
</span><br>
<span class="quotelev1">&gt; goes down, what happens?  Will everything bomb?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Several models of fault tolerance will be included. Maybe not on the  
<br>
first release but there are several teams already working on such  
<br>
projects. A short list of available fault tolerance mechanisms follow:
<br>
1. a coordinated checkpointing - a Chandy-Lamport (a la LAM)
<br>
2. an uncoordinated one (a la MPICH-V)
<br>
3. and one similar with FT-MPI.
<br>
In few words: most of the usual fault-tolerance mechanisms will be  
<br>
included.
<br>
<p>The behavior of the application when a node goes down depend on the  
<br>
user choice (via parameters at the initialization time). If the user  
<br>
let the error handler on the MPI communicators to fatal then of  
<br>
course everything will get destroyed by the Open MPI runtime  
<br>
environment. Otherwise, one (depending again on user parameters) of  
<br>
the fault tolerance mechanisms will take care of the rest of the  
<br>
execution.
<br>
<p><p><p><span class="quotelev1">&gt; 3) There will be FULL multi-threading support, correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Correct except that the FULL multi-threading support is already  
<br>
inside. We are currently testing the multi-threaded support for all  
<br>
of the drivers (only TCP is considered to be multi-threaded  
<br>
compliant). The next step will be to look at the performances, as we  
<br>
are using fine grained locking mechanisms.
<br>
This feature will definitively be in the stable release.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2005/06/0053.php">Jonathan Day: "[O-MPI users] Questions on status"</a>
<li><strong>Previous message:</strong> <a href="0051.php">atarpley: "[O-MPI users] Questions about Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0051.php">atarpley: "[O-MPI users] Questions about Open MPI"</a>
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
