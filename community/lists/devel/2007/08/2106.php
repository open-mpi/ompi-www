<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Aug 11 17:45:35 2007" -->
<!-- isoreceived="20070811214535" -->
<!-- sent="Sat, 11 Aug 2007 09:55:18 -0700" -->
<!-- isosent="20070811165518" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] openib btl header caching" -->
<!-- id="834A1FB7-6DDF-428E-8CEF-B008B1F108C6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2007-08-11 12:55:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2107.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2105.php">Ralph H Castain: "[OMPI devel] Status update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2107.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2107.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2110.php">Terry D. Dontje: "Re: [OMPI devel] openib btl header caching"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With Mellanox's new HCA (ConnectX), extremely low latencies are  
<br>
possible for short messages between two MPI processes.  Currently,  
<br>
OMPI's latency is around 1.9us while all other MPI's (HP MPI, Intel  
<br>
MPI, MVAPICH[2], etc.) are around 1.4us.  A big reason for this  
<br>
difference is that, at least with MVAPICH[2], they are doing wire  
<br>
protocol header caching where the openib BTL does not.  Specifically:
<br>
<p>- Mellanox tested MVAPICH with the header caching; latency was around  
<br>
1.4us
<br>
- Mellanox tested MVAPICH without the header caching; latency was  
<br>
around 1.9us
<br>
<p>Given that OMPI is the lone outlier around 1.9us, I think we have no  
<br>
choice except to implement the header caching and/or examine our  
<br>
header to see if we can shrink it.  Mellanox has volunteered to  
<br>
implement header caching in the openib btl.
<br>
<p>Any objections?  We can discuss what approaches we want to take  
<br>
(there's going to be some complications because of the PML driver,  
<br>
etc.); perhaps in the Tuesday Mellanox teleconf...?
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
<li><strong>Next message:</strong> <a href="2107.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2105.php">Ralph H Castain: "[OMPI devel] Status update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2107.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2107.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2110.php">Terry D. Dontje: "Re: [OMPI devel] openib btl header caching"</a>
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
