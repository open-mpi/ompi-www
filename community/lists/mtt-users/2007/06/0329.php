<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 15 10:20:07 2007" -->
<!-- isoreceived="20070615142007" -->
<!-- sent="Fri, 15 Jun 2007 10:19:45 -0400" -->
<!-- isosent="20070615141945" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] IBM thread tests" -->
<!-- id="7AD8ECEB-FD07-4434-8CD8-B31FA3A5A0D1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200706142256.55947.tprins_at_cs.indiana.edu" -->
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
<strong>Date:</strong> 2007-06-15 10:19:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0330.php">Ethan Mallove: "Re: [MTT users] Differentiating builds in the reporter"</a>
<li><strong>Previous message:</strong> <a href="0328.php">Jeff Squyres: "Re: [MTT users] Differentiating builds in the reporter"</a>
<li><strong>In reply to:</strong> <a href="0327.php">Tim Prins: "[MTT users] IBM thread tests"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let's migrate this over to the OMPI devel list; the MTT list is more  
<br>
about using MTT, not actually the tests that we choose to run for OMPI.
<br>
<p>On Jun 14, 2007, at 10:56 PM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; The IBM test suite has 3 very simple tests which just call  
</span><br>
<span class="quotelev1">&gt; Init_thread and ask
</span><br>
<span class="quotelev1">&gt; for the thread level. However, these are only run if  
</span><br>
<span class="quotelev1">&gt; OMPI_ENABLE_MPI_THREADS
</span><br>
<span class="quotelev1">&gt; is defined. This is causing them to be skipped in our MTT tests with a
</span><br>
<span class="quotelev1">&gt; threaded build. Is there a different define we should be checking  
</span><br>
<span class="quotelev1">&gt; for in the
</span><br>
<span class="quotelev1">&gt; tests?
</span><br>
<p>That is the right macro, but I think it's left over from when we used  
<br>
to include all of opal_config.h in mpi.h (we don't anymore).  Hence,  
<br>
this macro will never be defined for user applications (via the  
<br>
wrapper compilers), even if it is defined to be 1 when building Open  
<br>
MPI.
<br>
<p>Probably the Right thing to do here would be to call ompi_info in  
<br>
configure to see if we have thread support and then set an internal  
<br>
#define for it (in the ibm test suite) that would be visible via  
<br>
ompitest_config.h.
<br>
<p>I unfortunately do not have the cycles for this, but it should not be  
<br>
difficult to do.
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
<li><strong>Next message:</strong> <a href="0330.php">Ethan Mallove: "Re: [MTT users] Differentiating builds in the reporter"</a>
<li><strong>Previous message:</strong> <a href="0328.php">Jeff Squyres: "Re: [MTT users] Differentiating builds in the reporter"</a>
<li><strong>In reply to:</strong> <a href="0327.php">Tim Prins: "[MTT users] IBM thread tests"</a>
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
