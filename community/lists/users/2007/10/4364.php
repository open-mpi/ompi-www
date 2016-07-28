<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 13:45:46 2007" -->
<!-- isoreceived="20071031174546" -->
<!-- sent="Wed, 31 Oct 2007 17:45:39 +0000" -->
<!-- isosent="20071031174539" -->
<!-- name="Karsten Bolding" -->
<!-- email="karsten_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems running parallel program" -->
<!-- id="20071031174539.GH8920_at_dbmail.dk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C2AC0DBF-C7BD-4F42-8C12-94B10BAF3EF3_at_cisco.com" -->
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
<strong>Date:</strong> 2007-10-31 13:45:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4365.php">Amit Kumar Saha: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Previous message:</strong> <a href="4363.php">Oleg Morajko: "[OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>In reply to:</strong> <a href="4362.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4366.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>Reply:</strong> <a href="4366.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 31, 2007 at 09:27:48 -0700, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I think you should use the MPI_PROC_NULL constant itself, not a hard- 
</span><br>
<span class="quotelev1">&gt; coded value of -1.
</span><br>
<p>the value -1 was in the neighbor specification file.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically: the value of MPI_PROC_NULL is not set in the MPI  
</span><br>
<span class="quotelev1">&gt; standard -- so implementations are free to choose whatever value they  
</span><br>
<span class="quotelev1">&gt; want.  In Open MPI, MPI_PROC_NULL is -2.  So using -1 is an illegal  
</span><br>
<span class="quotelev1">&gt; destination, and you therefore get the error that you described.
</span><br>
<p>now I make a check if the neighbor is -1 - then set to MPI_PROC_NULL -
<br>
and voila everything is OK.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>In a different thread I read about a performance penalty in OpenMPI if
<br>
more than one MPI-process is running on one processor/core - is that 
<br>
correct? I mean having max-slots&gt;4 on a quad-core machine.
<br>
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
<li><strong>Next message:</strong> <a href="4365.php">Amit Kumar Saha: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Previous message:</strong> <a href="4363.php">Oleg Morajko: "[OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>In reply to:</strong> <a href="4362.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4366.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>Reply:</strong> <a href="4366.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
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
