<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 14:14:01 2007" -->
<!-- isoreceived="20071031181401" -->
<!-- sent="Wed, 31 Oct 2007 11:13:46 -0700" -->
<!-- isosent="20071031181346" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems running parallel program" -->
<!-- id="4496CC04-1A9E-440A-A781-BBEDF416933B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071031174539.GH8920_at_dbmail.dk" -->
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
<strong>Date:</strong> 2007-10-31 14:13:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4367.php">Sefa Arslan: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>Previous message:</strong> <a href="4365.php">Amit Kumar Saha: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>In reply to:</strong> <a href="4364.php">Karsten Bolding: "Re: [OMPI users] problems running parallel program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4368.php">Karsten Bolding: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>Reply:</strong> <a href="4368.php">Karsten Bolding: "Re: [OMPI users] problems running parallel program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 31, 2007, at 10:45 AM, Karsten Bolding wrote:
<br>
<p><span class="quotelev1">&gt; In a different thread I read about a performance penalty in OpenMPI if
</span><br>
<span class="quotelev1">&gt; more than one MPI-process is running on one processor/core - is that
</span><br>
<span class="quotelev1">&gt; correct? I mean having max-slots&gt;4 on a quad-core machine.
</span><br>
<p>Open MPI polls for message passing progress (to get the absolute  
<br>
minimum latency -- it can be faster than blocking/waking up).  If you  
<br>
overload a machine, Open MPI will usually detect that and know to  
<br>
call yield() in the middle of its polling so that other processes can  
<br>
get swapped in and make progress.
<br>
<p>But if you lie to Open MPI and tell it that there are more processors  
<br>
than there really are, we may not recognize that the machine is  
<br>
oversubscribed and therefore not call yield().  Hence, performance  
<br>
will *really* go down the drain.
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
<li><strong>Next message:</strong> <a href="4367.php">Sefa Arslan: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>Previous message:</strong> <a href="4365.php">Amit Kumar Saha: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>In reply to:</strong> <a href="4364.php">Karsten Bolding: "Re: [OMPI users] problems running parallel program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4368.php">Karsten Bolding: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>Reply:</strong> <a href="4368.php">Karsten Bolding: "Re: [OMPI users] problems running parallel program"</a>
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
