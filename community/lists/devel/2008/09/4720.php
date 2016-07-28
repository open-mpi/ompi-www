<?
$subject_val = "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 14:58:10 2008" -->
<!-- isoreceived="20080930185810" -->
<!-- sent="Tue, 30 Sep 2008 14:58:00 -0400" -->
<!-- isosent="20080930185800" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration" -->
<!-- id="6404E7DF-633F-47E6-81B6-F3BCEC1A3618_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="73a01bf20809301151o1233dd58r140b0a976525ff80_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-30 14:58:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4721.php">Ralph Castain: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>Previous message:</strong> <a href="4719.php">Rayson Ho: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>In reply to:</strong> <a href="4719.php">Rayson Ho: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4721.php">Ralph Castain: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>Reply:</strong> <a href="4721.php">Ralph Castain: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 30, 2008, at 2:51 PM, Rayson Ho wrote:
<br>
<p><span class="quotelev1">&gt; Restarting this discussion. A new update version of Grid Engine 6.2
</span><br>
<span class="quotelev1">&gt; will come out early next year [1], and I really hope that we can get
</span><br>
<span class="quotelev1">&gt; at least the interface defined.
</span><br>
<p>Great!
<br>
<p><span class="quotelev1">&gt; At the minimum, is it enough for the batch system to tell OpenMPI via
</span><br>
<span class="quotelev1">&gt; an env variable which core (or virtual core, in the SMT case) to start
</span><br>
<span class="quotelev1">&gt; binding the first MPI task?? I guess an added bonus would be
</span><br>
<span class="quotelev1">&gt; information about the number of processors to skip (the stride)
</span><br>
<span class="quotelev1">&gt; between the sibling tasks?? Stride of one is usually the case, but
</span><br>
<span class="quotelev1">&gt; something larger than one would allow the batch system to control the
</span><br>
<span class="quotelev1">&gt; level of cache and memory bandwidth sharing between the MPI tasks...
</span><br>
<p>Wouldn't it be better to give us a specific list of cores to bind to?   
<br>
As core counts go up in servers, I think we may see a re-emergence of  
<br>
having multiple MPI jobs on a single server.  And as core counts go  
<br>
even *higher*, then fragmentation of available cores over time is  
<br>
possible/likely.
<br>
<p>Would you be giving us a list of *relative* cores to bind to (i.e.,  
<br>
&quot;bind to the Nth online core on the machine&quot; -- which may be different  
<br>
than the OS's ID for that processor) or will you be giving us the  
<br>
actual OS virtual processor ID(s) to bind to?
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
<li><strong>Next message:</strong> <a href="4721.php">Ralph Castain: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>Previous message:</strong> <a href="4719.php">Rayson Ho: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>In reply to:</strong> <a href="4719.php">Rayson Ho: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4721.php">Ralph Castain: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>Reply:</strong> <a href="4721.php">Ralph Castain: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
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
