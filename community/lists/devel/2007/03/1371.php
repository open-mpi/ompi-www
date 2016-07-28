<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 21 13:10:35 2007" -->
<!-- isoreceived="20070321171035" -->
<!-- sent="Wed, 21 Mar 2007 13:10:16 -0400" -->
<!-- isosent="20070321171016" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MCA parameter settings" -->
<!-- id="99A75949-64B5-4EEA-96AE-0B474A4BCED5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46014016.8070506_at_Sun.COM" -->
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
<strong>Date:</strong> 2007-03-21 13:10:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1372.php">Donald Kerr: "Re: [OMPI devel] MCA parameter settings"</a>
<li><strong>Previous message:</strong> <a href="1370.php">David Daniel: "[OMPI devel] mpirun --prefix question"</a>
<li><strong>In reply to:</strong> <a href="1369.php">Donald Kerr: "Re: [OMPI devel] MCA parameter settings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1372.php">Donald Kerr: "Re: [OMPI devel] MCA parameter settings"</a>
<li><strong>Reply:</strong> <a href="1372.php">Donald Kerr: "Re: [OMPI devel] MCA parameter settings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 21, 2007, at 10:24 AM, Donald Kerr wrote:
<br>
<p><span class="quotelev1">&gt; Case: A btl parameter is given a default setting and at some later  
</span><br>
<span class="quotelev1">&gt; point is potentially adjusted depending on the number of peers.   
</span><br>
<span class="quotelev1">&gt; Now if the MPI user sets this same parameter I don't won't to  
</span><br>
<span class="quotelev1">&gt; overright what they have set, or at least I would like to warn them  
</span><br>
<span class="quotelev1">&gt; before doing so.
</span><br>
<p>Gotcha.  Right now, there's no way to check this (i.e., what &quot;level&quot;  
<br>
an MCA param was set from).  I see two options for going forward:
<br>
<p>1. Add an API call to check what level a given MCA param is currently  
<br>
resolved from (probably return some kind of enum?).
<br>
<p>2. Don't use the MCA param API but rather keep your own state (e.g.,  
<br>
a global with the default, another with the adjusted value derived  
<br>
from the number of peers, etc.) and do your own comparisons to see if  
<br>
the value was changed.
<br>
<p>#2 is workable today, but obviously more work for you.  #1 is a  
<br>
better long-term solution.  It wouldn't be too much work to do, but I  
<br>
unfortunately do not have the cycles to do it at the moment.  I'd be  
<br>
happy to point you in the right direction, if you want...
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
<li><strong>Next message:</strong> <a href="1372.php">Donald Kerr: "Re: [OMPI devel] MCA parameter settings"</a>
<li><strong>Previous message:</strong> <a href="1370.php">David Daniel: "[OMPI devel] mpirun --prefix question"</a>
<li><strong>In reply to:</strong> <a href="1369.php">Donald Kerr: "Re: [OMPI devel] MCA parameter settings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1372.php">Donald Kerr: "Re: [OMPI devel] MCA parameter settings"</a>
<li><strong>Reply:</strong> <a href="1372.php">Donald Kerr: "Re: [OMPI devel] MCA parameter settings"</a>
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
