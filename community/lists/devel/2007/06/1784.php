<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 28 04:03:40 2007" -->
<!-- isoreceived="20070628080340" -->
<!-- sent="Thu, 28 Jun 2007 09:49:31 +0200" -->
<!-- isosent="20070628074931" -->
<!-- name="Georg Wassen" -->
<!-- email="wassen_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem with openib, was: send/recv during initialization" -->
<!-- id="4683680B.3020001_at_lfbs.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F6AE2B5F-89BA-4932-BDE1-65E0B7E8407C_at_cisco.com" -->
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
<strong>From:</strong> Georg Wassen (<em>wassen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-28 03:49:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1785.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Previous message:</strong> <a href="1783.php">Jeff Squyres: "Re: [OMPI devel] Modex"</a>
<li><strong>In reply to:</strong> <a href="1782.php">Jeff Squyres: "Re: [OMPI devel] problem with openib, was: send/recv during initialization"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><span class="quotelev1">&gt; FWIW: the reason you have to use PML_CALL() is by design.  The MPI  
</span><br>
<span class="quotelev1">&gt; API has all the error checking stuff for ensuring that MPI_INIT  
</span><br>
<span class="quotelev1">&gt; completed, error checking of parameters, etc.  We never invoke the  
</span><br>
<span class="quotelev1">&gt; top-level MPI API from elsewhere in the OMPI code base (except for  
</span><br>
<span class="quotelev1">&gt; from within ROMIO; we didn't want to wholesale changes to that  
</span><br>
<span class="quotelev1">&gt; package because it would make for extreme difficulty every time we  
</span><br>
<span class="quotelev1">&gt; imported a new version).  There's fault tolerance reasons why it's  
</span><br>
<span class="quotelev1">&gt; not good to call back up to the top level MPI API, too.
</span><br>
<p>ok, this is obvious. The PML_CALL() works, but the OpenIB problem (also 
<br>
discovered without component in a regular MPI program) makes them very 
<br>
slow and they fail with too many processes.
<br>
<p><span class="quotelev1">&gt; But I agree with Andrew; if this is init-level stuff that is not  
</span><br>
<span class="quotelev1">&gt; necessary to be exchanged on a per-communicator basis, then the modex  
</span><br>
<span class="quotelev1">&gt; is probably your best bet.  Avoid using the RML directly if possible.
</span><br>
<p>I'm now using OOB during module-init. When the OpenIB issue will be 
<br>
fixed, I'll try to switch back to PML_SEND(). The use of Modex would 
<br>
require an architectural change...
<br>
<p>Thanks for your help!
<br>
Georg.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1785.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Previous message:</strong> <a href="1783.php">Jeff Squyres: "Re: [OMPI devel] Modex"</a>
<li><strong>In reply to:</strong> <a href="1782.php">Jeff Squyres: "Re: [OMPI devel] problem with openib, was: send/recv during initialization"</a>
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
