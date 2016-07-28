<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 19:20:49 2007" -->
<!-- isoreceived="20070322232049" -->
<!-- sent="Thu, 22 Mar 2007 19:20:36 -0400" -->
<!-- isosent="20070322232036" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] implementation of a message logging protocol" -->
<!-- id="F14C5C1A-76C7-408A-AB82-291B77D4E123_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="460242EC.4030402_at_irisa.fr" -->
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
<strong>Date:</strong> 2007-03-22 19:20:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2892.php">George Bosilca: "Re: [OMPI users] Fwd: [Allinea #6458] message queues"</a>
<li><strong>Previous message:</strong> <a href="2890.php">Brock Palen: "[OMPI users] Fwd: [Allinea #6458] message queues"</a>
<li><strong>In reply to:</strong> <a href="2869.php">Thomas Ropars: "[OMPI users] implementation of a message logging protocol"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thomas,
<br>
<p>We are working on this topic at the University of Tennessee. In fact,  
<br>
2 of the MPICH-V guys are now working on Open MPI on fault tolerant  
<br>
aspects. With all the expertise we gathered doing MPICH-V, we decided  
<br>
to take a different approach and to take advantage of the modular  
<br>
architecture offered by Open MPI. We don't focus on any specific  
<br>
message logging protocol right now (but we expect to have at least  
<br>
all those present in MPICH-V3). Instead what we target is a generic  
<br>
framework which will allow researchers to implement in a simple and  
<br>
straightforward way any message logging protocols they want, as well  
<br>
as providing all tools required to make their life easier.
<br>
<p>The code is not yet in the Open MPI trunk but it will get there soon.  
<br>
We expect to be able to start moving the message logging framework in  
<br>
the trunk over the next month.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 22, 2007, at 4:48 AM, Thomas Ropars wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am currently working on a fault tolerant protocol for message  
</span><br>
<span class="quotelev1">&gt; passing
</span><br>
<span class="quotelev1">&gt; applications based on message logging.
</span><br>
<span class="quotelev1">&gt; For my experimentations, I want to implement my protocol in a MPI  
</span><br>
<span class="quotelev1">&gt; library.
</span><br>
<span class="quotelev1">&gt; I know that message logging protocols have already been implemented in
</span><br>
<span class="quotelev1">&gt; MPICH with MPICH-V.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm wondering if in the actual state of Open MPI it is possible to do
</span><br>
<span class="quotelev1">&gt; the same kind of work in this library ?
</span><br>
<span class="quotelev1">&gt; Is there somebody currently working on the same subject ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thomas Ropars.
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
<li><strong>Next message:</strong> <a href="2892.php">George Bosilca: "Re: [OMPI users] Fwd: [Allinea #6458] message queues"</a>
<li><strong>Previous message:</strong> <a href="2890.php">Brock Palen: "[OMPI users] Fwd: [Allinea #6458] message queues"</a>
<li><strong>In reply to:</strong> <a href="2869.php">Thomas Ropars: "[OMPI users] implementation of a message logging protocol"</a>
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
