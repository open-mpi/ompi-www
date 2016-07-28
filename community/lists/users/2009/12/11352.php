<?
$subject_val = "Re: [OMPI users] mpirun is using one PBS node only";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 21:44:46 2009" -->
<!-- isoreceived="20091202024446" -->
<!-- sent="Tue, 1 Dec 2009 19:44:38 -0700" -->
<!-- isosent="20091202024438" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun is using one PBS node only" -->
<!-- id="DF0128D6-39E3-46B8-ACCF-FBA6DFF2F4B1_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="COL113-W49C2FA4A064E4CD3AADBAF4950_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun is using one PBS node only<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 21:44:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11353.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11351.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11351.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11354.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Reply:</strong> <a href="11354.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to further show my confusion (since I wrote much of the TM support):
<br>
<p>If you get an interactive allocation and then type &quot;mpirun ....&quot;, mpirun will execute on the node upon which you are sitting. Jeff's statement is -only- true if you &quot;qsub&quot; the job - i.e., you run it in batch mode.
<br>
<p>From your prior notes, I was under the impression you were running interactively. If this is true, then you only need OMPI to be built with TM support on the node which you are interactively working on.
<br>
<p>If you are running it in batch mode, then Jeff is correct - you will need OMPI built with TM support on all nodes since you (in general) cannot know which node PBS will launch you on.
<br>
<p>Hope that is clear
<br>
Ralph
<br>
<p>On Dec 1, 2009, at 7:35 PM, Belaid MOA wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Yes, this page is definitely incorrect if you want to run with PBS/TM 
</span><br>
<span class="quotelev2">&gt; &gt; support -- you definitely need to install with TM support on all nodes.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The reason is that PBS will launch your script (and therefore 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpirun&quot;) on the first node of the job. This node must have an Open 
</span><br>
<span class="quotelev2">&gt; &gt; MPI mpirun with TM support so that it can query PBS to get the nodes 
</span><br>
<span class="quotelev2">&gt; &gt; to launch on, use the TM API to launch processes on the nodes 
</span><br>
<span class="quotelev2">&gt; &gt; allocated to the job, etc.
</span><br>
<span class="quotelev1">&gt; That's exactly the sound logic I understood from OpenMPI documentation but
</span><br>
<span class="quotelev1">&gt; I thought the website is reliable in the sense it configured the server node with
</span><br>
<span class="quotelev1">&gt; tm support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am very grateful to subscribe to this list. It is one of the most active list I ever saw.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot Jeff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With Best Regards.
</span><br>
<span class="quotelev1">&gt; ~Belaid.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Get a great deal on Windows 7 and see how it works the way you want. See the Windows 7 offers now._______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11352/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11353.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11351.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11351.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11354.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Reply:</strong> <a href="11354.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
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
