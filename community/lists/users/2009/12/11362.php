<?
$subject_val = "Re: [OMPI users] mpirun is using one PBS node only";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 01:01:48 2009" -->
<!-- isoreceived="20091202060148" -->
<!-- sent="Wed, 2 Dec 2009 06:01:02 +0000" -->
<!-- isosent="20091202060102" -->
<!-- name="Belaid MOA" -->
<!-- email="belaid_moa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun is using one PBS node only" -->
<!-- id="COL113-W90940289E9A9FF1D2DB4AF4950_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B15E194.7030108_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2009-12-02 01:01:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11363.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11361.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11358.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11342.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;PBS loves to read the nodes' list backwards.
</span><br>
<span class="quotelev1">&gt; If you want to start with WN1,
</span><br>
<span class="quotelev1">&gt; put it last on the Torque/PBS &quot;nodes&quot; file.
</span><br>
Nice to know. Thanks Gus for the tip!
<br>
<p>Best Regards.
<br>
~Belaid.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Belaid MOA wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I actually tried both:
</span><br>
<span class="quotelev2">&gt; &gt; -- in the interactive mode, as soon as I hit enter, the PBS sends me to 
</span><br>
<span class="quotelev2">&gt; &gt; a worker node (WN2) that does not have tm support.
</span><br>
<span class="quotelev2">&gt; &gt;     I guess if I added the head node to the list of PBS nodes, I would 
</span><br>
<span class="quotelev2">&gt; &gt; not run into the problem. However, I am glad I did run into
</span><br>
<span class="quotelev2">&gt; &gt;     the problem. You guys helped me understand how mpirun interacts with 
</span><br>
<span class="quotelev2">&gt; &gt; PBS.
</span><br>
<span class="quotelev2">&gt; &gt; -- in the batch mode, the PBS chooses WN2 as the root node (rank 0) to 
</span><br>
<span class="quotelev2">&gt; &gt; run mpirun.
</span><br>
<span class="quotelev2">&gt; &gt; So, Both behaved in the same in my case.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; With many thanks Ralph for the clarification. I am now getting into the 
</span><br>
<span class="quotelev2">&gt; &gt; openMPI spirit. By the way, I love it :)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ~Belaid.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; From: rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Date: Tue, 1 Dec 2009 19:44:38 -0700
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] mpirun is using one PBS node only
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Just to further show my confusion (since I wrote much of the TM support):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If you get an interactive allocation and then type &quot;mpirun ....&quot;, mpirun 
</span><br>
<span class="quotelev2">&gt; &gt; will execute on the node upon which you are sitting. Jeff's statement is 
</span><br>
<span class="quotelev2">&gt; &gt; -only- true if you &quot;qsub&quot; the job - i.e., you run it in batch mode.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  From your prior notes, I was under the impression you were running 
</span><br>
<span class="quotelev2">&gt; &gt; interactively. If this is true, then you only need OMPI to be built with 
</span><br>
<span class="quotelev2">&gt; &gt; TM support on the node which you are interactively working on.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If you are running it in batch mode, then Jeff is correct - you will 
</span><br>
<span class="quotelev2">&gt; &gt; need OMPI built with TM support on all nodes since you (in general) 
</span><br>
<span class="quotelev2">&gt; &gt; cannot know which node PBS will launch you on.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hope that is clear
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 1, 2009, at 7:35 PM, Belaid MOA wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;  Yes, this page is definitely incorrect if you want to run with PBS/TM 
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;  support -- you definitely need to install with TM support on all
</span><br>
<span class="quotelev2">&gt; &gt;     nodes.
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;  The reason is that PBS will launch your script (and therefore 
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;  &quot;mpirun&quot;) on the first node of the job. This node must have an Open 
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;  MPI mpirun with TM support so that it can query PBS to get the nodes 
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;  to launch on, use the TM API to launch processes on the nodes 
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;  allocated to the job, etc.
</span><br>
<span class="quotelev2">&gt; &gt;     That's exactly the sound logic I understood from OpenMPI
</span><br>
<span class="quotelev2">&gt; &gt;     documentation but
</span><br>
<span class="quotelev2">&gt; &gt;     I thought the website is reliable in the sense it configured the
</span><br>
<span class="quotelev2">&gt; &gt;     server node with
</span><br>
<span class="quotelev2">&gt; &gt;     tm support.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     I am very grateful to subscribe to this list. It is one of the most
</span><br>
<span class="quotelev2">&gt; &gt;     active list I ever saw.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     Thanks a lot Jeff.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     With Best Regards.
</span><br>
<span class="quotelev2">&gt; &gt;     ~Belaid.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;     Get a great deal on Windows 7 and see how it works the way you
</span><br>
<span class="quotelev2">&gt; &gt;     want. See the Windows 7 offers now.
</span><br>
<span class="quotelev2">&gt; &gt;     &lt;<a href="http://go.microsoft.com/?linkid=9691813">http://go.microsoft.com/?linkid=9691813</a>&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;     users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Get a great deal on Windows 7 and see how it works the way you want. See 
</span><br>
<span class="quotelev2">&gt; &gt; the Windows 7 offers now. &lt;<a href="http://go.microsoft.com/?linkid=9691813">http://go.microsoft.com/?linkid=9691813</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
Eligible CDN College &amp; University students can upgrade to Windows 7 before Jan 3 for only $39.99. Upgrade now!
<br>
<a href="http://go.microsoft.com/?linkid=9691819">http://go.microsoft.com/?linkid=9691819</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11362/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11363.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11361.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11358.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11342.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
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
