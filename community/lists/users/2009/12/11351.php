<?
$subject_val = "Re: [OMPI users] mpirun is using one PBS node only";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 21:37:14 2009" -->
<!-- isoreceived="20091202023714" -->
<!-- sent="Wed, 2 Dec 2009 02:35:45 +0000" -->
<!-- isosent="20091202023545" -->
<!-- name="Belaid MOA" -->
<!-- email="belaid_moa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun is using one PBS node only" -->
<!-- id="COL113-W49C2FA4A064E4CD3AADBAF4950_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AF97246B-BC4C-461E-B884-D67E88291F60_at_cisco.com" -->
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
<strong>Date:</strong> 2009-12-01 21:35:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11352.php">Ralph Castain: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11350.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11341.php">Jeff Squyres: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11352.php">Ralph Castain: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Reply:</strong> <a href="11352.php">Ralph Castain: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Yes, this page is definitely incorrect if you want to run with PBS/TM  
</span><br>
<span class="quotelev1">&gt; support -- you definitely need to install with TM support on all nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reason is that PBS will launch your script (and therefore  
</span><br>
<span class="quotelev1">&gt; &quot;mpirun&quot;) on the first node of the job.  This node must have an Open  
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11351/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11352.php">Ralph Castain: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11350.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11341.php">Jeff Squyres: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11352.php">Ralph Castain: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Reply:</strong> <a href="11352.php">Ralph Castain: "Re: [OMPI users] mpirun is using one PBS node only"</a>
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
