<?
$subject_val = "Re: [OMPI users] mpirun is using one PBS node only";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 19:05:56 2009" -->
<!-- isoreceived="20091202000556" -->
<!-- sent="Tue, 1 Dec 2009 19:05:46 -0500" -->
<!-- isosent="20091202000546" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun is using one PBS node only" -->
<!-- id="AF97246B-BC4C-461E-B884-D67E88291F60_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="COL113-W177A9DFD4BAADFC5FA2A20F4950_at_phx.gbl" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 19:05:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11342.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11340.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11339.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11351.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Reply:</strong> <a href="11351.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 1, 2009, at 7:02 PM, Belaid MOA wrote:
<br>
<p><span class="quotelev1">&gt; The information on the following link has mislead me then:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.physics.iitm.ac.in/~sanoop/linux_files/cluster.html">http://www.physics.iitm.ac.in/~sanoop/linux_files/cluster.html</a>
</span><br>
<span class="quotelev1">&gt; (check OpenMPI Configuration section.)
</span><br>
<p><p>Yes, this page is definitely incorrect if you want to run with PBS/TM  
<br>
support -- you definitely need to install with TM support on all nodes.
<br>
<p>The reason is that PBS will launch your script (and therefore  
<br>
&quot;mpirun&quot;) on the first node of the job.  This node must have an Open  
<br>
MPI mpirun with TM support so that it can query PBS to get the nodes  
<br>
to launch on, use the TM API to launch processes on the nodes  
<br>
allocated to the job, etc.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11342.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11340.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11339.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11351.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Reply:</strong> <a href="11351.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
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
