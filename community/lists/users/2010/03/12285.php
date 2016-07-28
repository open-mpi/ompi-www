<?
$subject_val = "Re: [OMPI users] MPI_Comm_accept() busy waiting?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  9 12:41:00 2010" -->
<!-- isoreceived="20100309174100" -->
<!-- sent="Tue, 9 Mar 2010 13:05:21 -0400" -->
<!-- isosent="20100309170521" -->
<!-- name="Douglas Guptill" -->
<!-- email="douglas.guptill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_accept() busy waiting?" -->
<!-- id="20100309170521.GA31110_at_sopalepc" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B967A96.5020008_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_accept() busy waiting?<br>
<strong>From:</strong> Douglas Guptill (<em>douglas.guptill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-09 12:05:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12286.php">Vasiliy G Tolstov: "[OMPI users] newbe question"</a>
<li><strong>Previous message:</strong> <a href="12284.php">Ralph Castain: "Re: [OMPI users] pipe function call failed..."</a>
<li><strong>In reply to:</strong> <a href="12283.php">Ramon: "Re: [OMPI users] MPI_Comm_accept() busy waiting?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Mar 09, 2010 at 05:43:02PM +0100, Ramon wrote:
<br>
<span class="quotelev1">&gt; Am I the only one experiencing such problem?  Is there any solution?
</span><br>
<p>No, you are not the only one.  Several others have mentioned the &quot;busy
<br>
wait&quot; problem.
<br>
<p>The response on the OpenMPI developers, as I understand it, is that
<br>
the MPI job should be the only one running, so a 100% busy wait is not
<br>
a problem.  I hope the OpenMPI developers will correct me if I have
<br>
mis-stated their position.
<br>
<p>I posted my cure for the problem some time ago.  I have attached it
<br>
again to this message.
<br>
<p>Hope that helps,
<br>
Douglas.
<br>
<p><p><span class="quotelev1">&gt; Ramon wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've recently been trying to develop a client-server distributed file  
</span><br>
<span class="quotelev2">&gt;&gt; system (for my thesis) using the MPI.  The communication between the  
</span><br>
<span class="quotelev2">&gt;&gt; machines is working great, however when ever the MPI_Comm_accept()  
</span><br>
<span class="quotelev2">&gt;&gt; function is called, the server starts like consuming 100% of the CPU.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One interesting thing is that I tried to compile the same code using  
</span><br>
<span class="quotelev2">&gt;&gt; the LAM/MPI library and the mentioned behaviour could not be observed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this a bug?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On a side note, I'm using Ubuntu 9.10's default OpenMPI deb package.   
</span><br>
<span class="quotelev2">&gt;&gt; Its version is 1.3.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ramon.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
  Douglas Guptill                       voice: 902-461-9749
  Research Assistant, LSC 4640          email: douglas.guptill_at_[hidden]
  Oceanography Department               fax:   902-494-3877
  Dalhousie University
  Halifax, NS, B3H 4J1, Canada


</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12285/MPI_Recv.c">MPI_Recv.c</a>
</ul>
<!-- attachment="MPI_Recv.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12285/MPI_Send.c">MPI_Send.c</a>
</ul>
<!-- attachment="MPI_Send.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12286.php">Vasiliy G Tolstov: "[OMPI users] newbe question"</a>
<li><strong>Previous message:</strong> <a href="12284.php">Ralph Castain: "Re: [OMPI users] pipe function call failed..."</a>
<li><strong>In reply to:</strong> <a href="12283.php">Ramon: "Re: [OMPI users] MPI_Comm_accept() busy waiting?"</a>
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
