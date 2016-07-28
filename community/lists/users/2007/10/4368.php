<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 14:47:52 2007" -->
<!-- isoreceived="20071031184752" -->
<!-- sent="Wed, 31 Oct 2007 18:47:35 +0000" -->
<!-- isosent="20071031184735" -->
<!-- name="Karsten Bolding" -->
<!-- email="karsten_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems running parallel program" -->
<!-- id="20071031184735.GK8920_at_dbmail.dk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4496CC04-1A9E-440A-A781-BBEDF416933B_at_cisco.com" -->
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
<strong>From:</strong> Karsten Bolding (<em>karsten_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-31 14:47:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4369.php">kyron_at_[hidden]: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>Previous message:</strong> <a href="4367.php">Sefa Arslan: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>In reply to:</strong> <a href="4366.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4376.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>Reply:</strong> <a href="4376.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 31, 2007 at 11:13:46 -0700, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 31, 2007, at 10:45 AM, Karsten Bolding wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In a different thread I read about a performance penalty in OpenMPI if
</span><br>
<span class="quotelev2">&gt; &gt; more than one MPI-process is running on one processor/core - is that
</span><br>
<span class="quotelev2">&gt; &gt; correct? I mean having max-slots&gt;4 on a quad-core machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI polls for message passing progress (to get the absolute  
</span><br>
<span class="quotelev1">&gt; minimum latency -- it can be faster than blocking/waking up).  If you  
</span><br>
<span class="quotelev1">&gt; overload a machine, Open MPI will usually detect that and know to  
</span><br>
<span class="quotelev1">&gt; call yield() in the middle of its polling so that other processes can  
</span><br>
<span class="quotelev1">&gt; get swapped in and make progress.
</span><br>
<p>Does OpenMPI detect if procceses share memory and hence do not
<br>
communicate via sockets.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But if you lie to Open MPI and tell it that there are more processors  
</span><br>
<span class="quotelev1">&gt; than there really are, we may not recognize that the machine is  
</span><br>
<span class="quotelev1">&gt; oversubscribed and therefore not call yield().  Hence, performance  
</span><br>
<span class="quotelev1">&gt; will *really* go down the drain.
</span><br>
<p>and if I don't give any hints - just start my 13 jobs on 4 cores where
<br>
the load balancing is done based on CPU-requirement (this could also be
<br>
on 4 single-core processors where jobs can't be swapped) - that is in
<br>
principle OK?
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Karsten
<br>
<p><pre>
-- 
----------------------------------------------------------------------
Karsten Bolding                    Bolding &amp; Burchard Hydrodynamics
Strandgyden 25                     Phone: +45 64422058
DK-5466 Asperup                    Fax:   +45 64422068
Denmark                            Email: karsten_at_[hidden]
<a href="http://www.findvej.dk/Strandgyden25,5466,11,3">http://www.findvej.dk/Strandgyden25,5466,11,3</a>
----------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4369.php">kyron_at_[hidden]: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>Previous message:</strong> <a href="4367.php">Sefa Arslan: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>In reply to:</strong> <a href="4366.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4376.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>Reply:</strong> <a href="4376.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
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
