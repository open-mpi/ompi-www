<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 10:50:08 2007" -->
<!-- isoreceived="20070813145008" -->
<!-- sent="Mon, 13 Aug 2007 10:49:58 -0400" -->
<!-- isosent="20070813144958" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl header caching" -->
<!-- id="14CEA6D4-97D0-4D39-9D50-452830D5BF0F_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070813143934.GC26964_at_minantech.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-13 10:49:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2120.php">Christian Bell: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2118.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2118.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2121.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2121.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You want a dirtier trick for benchmarks ... Here it is ...
<br>
<p>Implement a compression like algorithm based on checksum. The data- 
<br>
type engine can compute a checksum for each fragment and if the  
<br>
checksum match one in the peer [limitted] history (so we can claim  
<br>
our communication protocol is adaptive), then we replace the actual  
<br>
message content with the matched id in the common history. Checksums  
<br>
are fairly cheap, lookup in a balanced tree is cheap too, so we will  
<br>
end up with a lot of improvement (as instead of sending a full  
<br>
fragment we will end-up sending one int). Based on the way most of  
<br>
the benchmarks initialize the user data  (when they don't everything  
<br>
is mostly 0), this trick might work on all cases for the  
<br>
benchmarks ... But don't complain if your Linpack run fails.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 13, 2007, at 10:39 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Aug 13, 2007 at 10:36:19AM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; In short: it's an even dirtier trick than header caching (for
</span><br>
<span class="quotelev2">&gt;&gt; example), and we'd get beat up about it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; That was joke :) (But 3D drivers really do such things :( )
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2120.php">Christian Bell: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2118.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2118.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2121.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2121.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
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
