<?
$subject_val = "Re: [OMPI devel] Comm_spawn limits";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 18:14:16 2008" -->
<!-- isoreceived="20081027221416" -->
<!-- sent="Mon, 27 Oct 2008 18:14:10 -0400" -->
<!-- isosent="20081027221410" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Comm_spawn limits" -->
<!-- id="242E3CF6-FBF7-44FC-89C5-C4BA93E13479_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20081027215229.GA14815_at_wintermute" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Comm_spawn limits<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-27 18:14:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4816.php">Ralph Castain: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>Previous message:</strong> <a href="4814.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>In reply to:</strong> <a href="4814.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Comm_spawn limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4816.php">Ralph Castain: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>Reply:</strong> <a href="4816.php">Ralph Castain: "Re: [OMPI devel] Comm_spawn limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 27, 2008, at 5:52 PM, Andreas Sch&#228;fer wrote:
<br>
<p><span class="quotelev1">&gt; I don't know any implementation details, but is making a 16-bit
</span><br>
<span class="quotelev1">&gt; counter a 32-bit counter really so much harder than this fancy
</span><br>
<span class="quotelev1">&gt; (overengineered? ;-) ) table construction? The way I see it, this
</span><br>
<span class="quotelev1">&gt; table which might become a real mess if there are multiple
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn issued simultaneously in different communicators.  
</span><br>
<span class="quotelev1">&gt; (Would
</span><br>
<span class="quotelev1">&gt; that be legal MPI?)
</span><br>
<p>FWIW, all the spawns are proxied back to the HNP (i.e., mpirun), so  
<br>
there would only be a need for 1 table.  I don't think that a simple  
<br>
table lookup is overengineered.  :-)  It's a simple solution to the  
<br>
&quot;need a global ID&quot; issue.  By limiting the size of the table, you can  
<br>
avoid scalability issues as MPI jobs are being run on more and more  
<br>
cores (e.g., growing without bound, particularly for 99% of the apps  
<br>
out there that never call comm_spawn).
<br>
<p>We actually went down to 16 bits recently (it used to be 32) as one  
<br>
item toward reducing the memory footprint of MPI processes (and mpirun  
<br>
and the orted's), particularly when running very large scale jobs.  So  
<br>
while increasing this one value back to 32 bits may not be tragic, it  
<br>
would be nice to keep it down as 16 bits (IMHO).
<br>
<p>Regardless of how big the value is (8, 16, 32, 64...) you still need a  
<br>
unique value for comm_spawn.  Therefore, some kind of duplicate  
<br>
detection mechanism is needed.  If you increase the size of the  
<br>
container, you decrease the probability of collision, but it can still  
<br>
happen.  And since machines are growing in size and # of cores, it  
<br>
could just delay the probability of collision until someone runs on a  
<br>
big enough machine.  Regardless, I'd prefer to fix it the Right way  
<br>
rather than rely on probability to prevent a problem.  In my  
<br>
experience, &quot;that could *never* happen!&quot; is just an invitation for a  
<br>
disaster, even if it's 1-5 years in the future. (didn't someone say  
<br>
that we'd never need more than 640k of RAM? :-) )
<br>
<p>Just my IMHO, of course... (and I'm not the guy writing the code!)  :-)
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
<li><strong>Next message:</strong> <a href="4816.php">Ralph Castain: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>Previous message:</strong> <a href="4814.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>In reply to:</strong> <a href="4814.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Comm_spawn limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4816.php">Ralph Castain: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>Reply:</strong> <a href="4816.php">Ralph Castain: "Re: [OMPI devel] Comm_spawn limits"</a>
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
