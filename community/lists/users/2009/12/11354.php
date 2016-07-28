<?
$subject_val = "Re: [OMPI users] mpirun is using one PBS node only";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 21:59:28 2009" -->
<!-- isoreceived="20091202025928" -->
<!-- sent="Wed, 2 Dec 2009 02:56:31 +0000" -->
<!-- isosent="20091202025631" -->
<!-- name="Belaid MOA" -->
<!-- email="belaid_moa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun is using one PBS node only" -->
<!-- id="COL113-W38C8DD132C96917B13BB81F4950_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DF0128D6-39E3-46B8-ACCF-FBA6DFF2F4B1_at_open-mpi.org" -->
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
<strong>From:</strong> Belaid MOA (<em>belaid_moa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 21:56:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11355.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11353.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11352.php">Ralph Castain: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11358.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Reply:</strong> <a href="11358.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I actually tried both:
<br>
-- in the interactive mode, as soon as I hit enter, the PBS sends me to a worker node (WN2) that does not have tm support.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I guess if I added the head node to the list of PBS nodes, I would not run into the problem. However, I am glad I did run into 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the problem. You guys helped me understand how mpirun interacts with PBS.
<br>
-- in the batch mode, the PBS chooses WN2 as the root node (rank 0) to run mpirun. 
<br>
So, Both behaved in the same in my case.
<br>
<p>With many thanks Ralph for the clarification. I am now getting into the openMPI spirit. By the way, I love it :) 
<br>
<p>~Belaid.
<br>
<p><p><p>&nbsp;
<br>
<p>From: rhc_at_[hidden]
<br>
Date: Tue, 1 Dec 2009 19:44:38 -0700
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] mpirun is using one PBS node only
<br>
<p><p><p>Just to further show my confusion (since I wrote much of the TM support):
<br>
If you get an interactive allocation and then type &quot;mpirun ....&quot;, mpirun will execute on the node upon which you are sitting. Jeff's statement is -only- true if you &quot;qsub&quot; the job - i.e., you run it in batch mode.
<br>
<span class="quotelev1">&gt;From your prior notes, I was under the impression you were running interactively. If this is true, then you only need OMPI to be built with TM support on the node which you are interactively working on.
</span><br>
If you are running it in batch mode, then Jeff is correct - you will need OMPI built with TM support on all nodes since you (in general) cannot know which node PBS will launch you on.
<br>
Hope that is clearRalph
<br>
On Dec 1, 2009, at 7:35 PM, Belaid MOA wrote:&gt; Yes, this page is definitely incorrect if you want to run with PBS/TM 
<br>
<span class="quotelev1">&gt; support -- you definitely need to install with TM support on all nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reason is that PBS will launch your script (and therefore 
</span><br>
<span class="quotelev1">&gt; &quot;mpirun&quot;) on the first node of the job. This node must have an Open 
</span><br>
<span class="quotelev1">&gt; MPI mpirun with TM support so that it can query PBS to get the nodes 
</span><br>
<span class="quotelev1">&gt; to launch on, use the TM API to launch processes on the nodes 
</span><br>
<span class="quotelev1">&gt; allocated to the job, etc.
</span><br>
That's exactly the sound logic I understood from OpenMPI documentation but
<br>
I thought the website is reliable in the sense it configured the server node with
<br>
tm support.
<br>
<p>I am very grateful to subscribe to this list. It is one of the most active list I ever saw.
<br>
<p>Thanks a lot Jeff.
<br>
<p>With Best Regards.
<br>
~Belaid.
<br>
<p>Get a great deal on Windows 7 and see how it works the way you want. See the Windows 7 offers now._______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
Ready. Set. Get a great deal on Windows 7. See fantastic deals on Windows 7 now
<br>
<a href="http://go.microsoft.com/?linkid=9691818">http://go.microsoft.com/?linkid=9691818</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11354/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11355.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11353.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11352.php">Ralph Castain: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11358.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Reply:</strong> <a href="11358.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
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
