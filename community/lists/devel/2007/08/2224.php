<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Aug 25 16:40:58 2007" -->
<!-- isoreceived="20070825204058" -->
<!-- sent="Sat, 25 Aug 2007 16:40:37 -0400" -->
<!-- isosent="20070825204037" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_mpi_abort" -->
<!-- id="80E7B8EC-3326-4B42-9817-4C65FB16A4E2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="35D88998-B6B1-43C8-B260-9FC16DF54690_at_cisco.com" -->
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
<strong>Date:</strong> 2007-08-25 16:40:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2225.php">Manuel Prinz: "[OMPI devel] Minor bug: sattach gives bad advice"</a>
<li><strong>Previous message:</strong> <a href="2223.php">Jeff Squyres: "Re: [OMPI devel] ompi_mpi_abort"</a>
<li><strong>In reply to:</strong> <a href="2223.php">Jeff Squyres: "Re: [OMPI devel] ompi_mpi_abort"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 25, 2007, at 4:32 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I unfortunately do not remember whether I put that recursive
</span><br>
<span class="quotelev1">&gt; protection in to fix a real problem or whether I was trying to be
</span><br>
<span class="quotelev1">&gt; (incorrectly) proactive...
</span><br>
<p>The more I think about this, the more I think I put that protection  
<br>
in because of a real problem.
<br>
<p>I don't remember the specifics, but I have a distinct recollection of  
<br>
ompi_mpi_abort() being called, and then either  
<br>
orte_errmgr.abort_procs_request() or orte_errmgr.error_detected()  
<br>
eventually calling progress() which then triggered some other error  
<br>
and ompi_mpi_abort() ended up getting called again.
<br>
<p>In this scenario, both an endless sleep() *and* calling exit() are bad.
<br>
<p>What to do?  Even looping calling progress() may not do the Right  
<br>
Thing in the recursive case because some processing may not occur  
<br>
until control is returns all the way up to the top of the progress()  
<br>
stack.
<br>
<p>Note that as I stated in my first mail, since the proxy errmgr  
<br>
component is always selected in MPI processes,  
<br>
orte_errmgr.error_detected() will not return -- it eventually calls  
<br>
exit().
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
<li><strong>Next message:</strong> <a href="2225.php">Manuel Prinz: "[OMPI devel] Minor bug: sattach gives bad advice"</a>
<li><strong>Previous message:</strong> <a href="2223.php">Jeff Squyres: "Re: [OMPI devel] ompi_mpi_abort"</a>
<li><strong>In reply to:</strong> <a href="2223.php">Jeff Squyres: "Re: [OMPI devel] ompi_mpi_abort"</a>
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
