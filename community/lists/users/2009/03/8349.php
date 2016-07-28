<?
$subject_val = "Re: [OMPI users] Runtime error only on one node.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 20:44:47 2009" -->
<!-- isoreceived="20090306014447" -->
<!-- sent="Thu, 5 Mar 2009 20:44:41 -0500" -->
<!-- isosent="20090306014441" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Runtime error only on one node." -->
<!-- id="FD596573-1032-4256-80AA-738D55731B5C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="19603_1236297918_n2605Dbb004532_49B068B6.8080608_at_anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Runtime error only on one node.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 20:44:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8350.php">Ashley Pittman: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="8348.php">Jeff Squyres: "Re: [OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
<li><strong>In reply to:</strong> <a href="8346.php">Shinta Bonnefoy: "Re: [OMPI users] Runtime error only on one node."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5, 2009, at 7:05 PM, Shinta Bonnefoy wrote:
<br>
<p><span class="quotelev1">&gt; Thanks, the option --mca btl ^openib  works fine !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Half of the cluster has Infiniband/OpenFabrics  (from node49 to  
</span><br>
<span class="quotelev1">&gt; node96)
</span><br>
<span class="quotelev1">&gt; and the other half (nodes from 01 to 48)  doesn't.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Aaaaahhhhh... this explains things.  I wonder if we have not tested  
<br>
the &quot;some have OF, some do not&quot; code paths well; I'm guessing we're  
<br>
hitting a corner case during the shutdown.
<br>
<p><span class="quotelev1">&gt; I just wanted to make openmpi run over ethernet/tcp first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will try to make it run using OpenFabrics but I guess I need to
</span><br>
<span class="quotelev1">&gt; recompile another package to do it so ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>No.  Open MPI hides the dependencies on networking libraries such as  
<br>
OF in its plugins.  So you don't need to recompile your application;  
<br>
you just run with or without the ^openib switch.
<br>
<p><span class="quotelev1">&gt; If I mix some nodes with OpenFabrics and some other which don't have
</span><br>
<span class="quotelev1">&gt; OpenFabrics, I should use the option &quot;--mca btl ^openib&quot; right ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>For now yes.  We should fix this, though.  But the fix won't be in  
<br>
1.3.1; possibly in 1.3.2.
<br>
<p><span class="quotelev1">&gt; And if I use exclusively similar nodes (either non OpenFabrics and  
</span><br>
<span class="quotelev1">&gt; only
</span><br>
<span class="quotelev1">&gt; OpenFabrics), I don't have to use the option anymore.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Correct.  OMPI will then automatically choose to use the openib BTL.
<br>
<p><span class="quotelev1">&gt; But over OpenFabrics, does openmpi will use automatically the  
</span><br>
<span class="quotelev1">&gt; Infiniband
</span><br>
<span class="quotelev1">&gt; hardware ???
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes.
<br>
<p>I'm guessing that there's only a problem when you have a job that  
<br>
spans nodes with and without OF hardware, but all with the OF software  
<br>
stack.  I'll file a bug about this and see what we can do.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8350.php">Ashley Pittman: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="8348.php">Jeff Squyres: "Re: [OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
<li><strong>In reply to:</strong> <a href="8346.php">Shinta Bonnefoy: "Re: [OMPI users] Runtime error only on one node."</a>
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
