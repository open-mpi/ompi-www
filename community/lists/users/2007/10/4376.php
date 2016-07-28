<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 19:36:32 2007" -->
<!-- isoreceived="20071031233632" -->
<!-- sent="Wed, 31 Oct 2007 16:36:24 -0700" -->
<!-- isosent="20071031233624" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems running parallel program" -->
<!-- id="A0DA0394-D7AD-4521-B4A6-5A1CB98E768D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071031184735.GK8920_at_dbmail.dk" -->
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
<strong>Date:</strong> 2007-10-31 19:36:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4377.php">Jeff Squyres: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>Previous message:</strong> <a href="4375.php">George Bosilca: "Re: [OMPI users] Too many open files Error"</a>
<li><strong>In reply to:</strong> <a href="4368.php">Karsten Bolding: "Re: [OMPI users] problems running parallel program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 31, 2007, at 11:47 AM, Karsten Bolding wrote:
<br>
<p><span class="quotelev1">&gt; Does OpenMPI detect if procceses share memory and hence do not
</span><br>
<span class="quotelev1">&gt; communicate via sockets.
</span><br>
<p>Yes.
<br>
<p><span class="quotelev2">&gt;&gt; But if you lie to Open MPI and tell it that there are more processors
</span><br>
<span class="quotelev2">&gt;&gt; than there really are, we may not recognize that the machine is
</span><br>
<span class="quotelev2">&gt;&gt; oversubscribed and therefore not call yield().  Hence, performance
</span><br>
<span class="quotelev2">&gt;&gt; will *really* go down the drain.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and if I don't give any hints - just start my 13 jobs on 4 cores where
</span><br>
<span class="quotelev1">&gt; the load balancing is done based on CPU-requirement (this could  
</span><br>
<span class="quotelev1">&gt; also be
</span><br>
<span class="quotelev1">&gt; on 4 single-core processors where jobs can't be swapped) - that is in
</span><br>
<span class="quotelev1">&gt; principle OK?
</span><br>
<p>Yes, it should be; Open MPI should detect that you're oversubscribed  
<br>
and set itself to yield() during polling in the MPI library.
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
<li><strong>Next message:</strong> <a href="4377.php">Jeff Squyres: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>Previous message:</strong> <a href="4375.php">George Bosilca: "Re: [OMPI users] Too many open files Error"</a>
<li><strong>In reply to:</strong> <a href="4368.php">Karsten Bolding: "Re: [OMPI users] problems running parallel program"</a>
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
