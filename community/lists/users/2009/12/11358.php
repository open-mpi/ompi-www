<?
$subject_val = "Re: [OMPI users] mpirun is using one PBS node only";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 22:40:14 2009" -->
<!-- isoreceived="20091202034014" -->
<!-- sent="Tue, 01 Dec 2009 22:40:04 -0500" -->
<!-- isosent="20091202034004" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun is using one PBS node only" -->
<!-- id="4B15E194.7030108_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="COL113-W38C8DD132C96917B13BB81F4950_at_phx.gbl" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 22:40:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11359.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11357.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11354.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11362.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Reply:</strong> <a href="11362.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Belaid
<br>
<p>PBS loves to read the nodes' list backwards.
<br>
If you want to start with WN1,
<br>
put it last on the Torque/PBS &quot;nodes&quot; file.
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p>Belaid MOA wrote:
<br>
<span class="quotelev1">&gt; I actually tried both:
</span><br>
<span class="quotelev1">&gt; -- in the interactive mode, as soon as I hit enter, the PBS sends me to 
</span><br>
<span class="quotelev1">&gt; a worker node (WN2) that does not have tm support.
</span><br>
<span class="quotelev1">&gt;     I guess if I added the head node to the list of PBS nodes, I would 
</span><br>
<span class="quotelev1">&gt; not run into the problem. However, I am glad I did run into
</span><br>
<span class="quotelev1">&gt;     the problem. You guys helped me understand how mpirun interacts with 
</span><br>
<span class="quotelev1">&gt; PBS.
</span><br>
<span class="quotelev1">&gt; -- in the batch mode, the PBS chooses WN2 as the root node (rank 0) to 
</span><br>
<span class="quotelev1">&gt; run mpirun.
</span><br>
<span class="quotelev1">&gt; So, Both behaved in the same in my case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With many thanks Ralph for the clarification. I am now getting into the 
</span><br>
<span class="quotelev1">&gt; openMPI spirit. By the way, I love it :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ~Belaid.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; From: rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Tue, 1 Dec 2009 19:44:38 -0700
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mpirun is using one PBS node only
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to further show my confusion (since I wrote much of the TM support):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you get an interactive allocation and then type &quot;mpirun ....&quot;, mpirun 
</span><br>
<span class="quotelev1">&gt; will execute on the node upon which you are sitting. Jeff's statement is 
</span><br>
<span class="quotelev1">&gt; -only- true if you &quot;qsub&quot; the job - i.e., you run it in batch mode.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  From your prior notes, I was under the impression you were running 
</span><br>
<span class="quotelev1">&gt; interactively. If this is true, then you only need OMPI to be built with 
</span><br>
<span class="quotelev1">&gt; TM support on the node which you are interactively working on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are running it in batch mode, then Jeff is correct - you will 
</span><br>
<span class="quotelev1">&gt; need OMPI built with TM support on all nodes since you (in general) 
</span><br>
<span class="quotelev1">&gt; cannot know which node PBS will launch you on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that is clear
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 1, 2009, at 7:35 PM, Belaid MOA wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;     &gt;  Yes, this page is definitely incorrect if you want to run with PBS/TM 
</span><br>
<span class="quotelev2">&gt;     &gt;  support -- you definitely need to install with TM support on all
</span><br>
<span class="quotelev1">&gt;     nodes.
</span><br>
<span class="quotelev2">&gt;     &gt; 
</span><br>
<span class="quotelev2">&gt;     &gt;  The reason is that PBS will launch your script (and therefore 
</span><br>
<span class="quotelev2">&gt;     &gt;  &quot;mpirun&quot;) on the first node of the job. This node must have an Open 
</span><br>
<span class="quotelev2">&gt;     &gt;  MPI mpirun with TM support so that it can query PBS to get the nodes 
</span><br>
<span class="quotelev2">&gt;     &gt;  to launch on, use the TM API to launch processes on the nodes 
</span><br>
<span class="quotelev2">&gt;     &gt;  allocated to the job, etc.
</span><br>
<span class="quotelev1">&gt;     That's exactly the sound logic I understood from OpenMPI
</span><br>
<span class="quotelev1">&gt;     documentation but
</span><br>
<span class="quotelev1">&gt;     I thought the website is reliable in the sense it configured the
</span><br>
<span class="quotelev1">&gt;     server node with
</span><br>
<span class="quotelev1">&gt;     tm support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I am very grateful to subscribe to this list. It is one of the most
</span><br>
<span class="quotelev1">&gt;     active list I ever saw.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Thanks a lot Jeff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     With Best Regards.
</span><br>
<span class="quotelev1">&gt;     ~Belaid.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     Get a great deal on Windows 7 and see how it works the way you
</span><br>
<span class="quotelev1">&gt;     want. See the Windows 7 offers now.
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://go.microsoft.com/?linkid=9691813">http://go.microsoft.com/?linkid=9691813</a>&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Get a great deal on Windows 7 and see how it works the way you want. See 
</span><br>
<span class="quotelev1">&gt; the Windows 7 offers now. &lt;<a href="http://go.microsoft.com/?linkid=9691813">http://go.microsoft.com/?linkid=9691813</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="11359.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11357.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11354.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11362.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Reply:</strong> <a href="11362.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
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
