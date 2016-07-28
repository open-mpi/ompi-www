<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 10 07:07:48 2006" -->
<!-- isoreceived="20060310120748" -->
<!-- sent="Fri, 10 Mar 2006 07:07:42 -0500" -->
<!-- isosent="20060310120742" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]" -->
<!-- id="8C5AB196-B8B4-4510-B765-5A61FF8E87E9_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44115C72.4060907_at_blue.cft.edu.pl" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-10 07:07:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0820.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>Previous message:</strong> <a href="0818.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>In reply to:</strong> <a href="0817.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0820.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>Reply:</strong> <a href="0820.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>Reply:</strong> <a href="0826.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 10, 2006, at 6:01 AM, Cezary Sliwa wrote:
<br>
<p><span class="quotelev2">&gt;&gt;      <a href="http://www.open-mpi.org/community/lists/users/2006/02/0712.php">http://www.open-mpi.org/community/lists/users/2006/02/0712.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I have a simple program in which the rank 0 task dispatches compute
</span><br>
<span class="quotelev1">&gt; tasks to other processes. It works fine on one 4-way SMP machine, but
</span><br>
<span class="quotelev1">&gt; when I try to run it on two nodes, the processes on the other machine
</span><br>
<span class="quotelev1">&gt; seem to spin in a loop inside MPI_SEND (a message is not delivered).
</span><br>
<p>You still haven't answered whether your application does any of the  
<br>
things that I mentioned in my first post.  :-)  Have you examined the  
<br>
code to ensure that your application does not rely on buffering?   
<br>
This kind of thing can easily show up as blocking in some situations  
<br>
and not blocking in others (such as on-node vs. off-node communication).
<br>
<p>If it does not, can you send the information requested by the  
<br>
&quot;Getting Help&quot; section of the Open MPI web site?  This will give us  
<br>
more details that will hopefully enable us to resolve your problem:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>One additional question: are you using TCP as your communications  
<br>
network, and if so, do either of the nodes that you are running on  
<br>
have more than one TCP NIC?  We recently fixed a bug for situations  
<br>
where at least one node in on multiple TCP networks, not all of which  
<br>
were shared by the nodes where the peer MPI processes were running.   
<br>
If this situation describes your network setup (e.g., a cluster where  
<br>
the head node has a public and a private network, and where the  
<br>
cluster nodes only have a private network -- and your MPI process was  
<br>
running on the head node and a compute node), can you try upgrading  
<br>
to the latest 1.0.2 release candidate tarball:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.0/">http://www.open-mpi.org/software/ompi/v1.0/</a>
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0820.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>Previous message:</strong> <a href="0818.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>In reply to:</strong> <a href="0817.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0820.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>Reply:</strong> <a href="0820.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>Reply:</strong> <a href="0826.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
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
