<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 17:09:34 2009" -->
<!-- isoreceived="20090817210934" -->
<!-- sent="Mon, 17 Aug 2009 22:10:17 +0100" -->
<!-- isosent="20090817211017" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="1250543417.3902.33.camel_at_alpha" -->
<!-- inreplyto="2C16C3AD-EFBA-4813-A66D-D189DEA6E495_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Heads up on new feature to 1.3.4<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 17:10:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6659.php">Paul H. Hargrove: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6657.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6647.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6659.php">Paul H. Hargrove: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6659.php">Paul H. Hargrove: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Some very good points in this thread all round.
<br>
<p>On Mon, 2009-08-17 at 09:00 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is probably not too surprising (i.e., allowing the OS to move  
</span><br>
<span class="quotelev1">&gt; jobs around between cores on a socket can probably involve a little  
</span><br>
<span class="quotelev1">&gt; cache thrashing, resulting in that 5-10% loss).  I'm hand-waving
</span><br>
<span class="quotelev1">&gt; here,  
</span><br>
<span class="quotelev1">&gt; and I have not tried this myself, but it's not too surprising of a  
</span><br>
<span class="quotelev1">&gt; result to me.  It's also not too surprising that others don't see
</span><br>
<span class="quotelev1">&gt; this  
</span><br>
<span class="quotelev1">&gt; effect at all (e.g., Sun didn't see any difference in bind-to-core
</span><br>
<span class="quotelev1">&gt; vs.  
</span><br>
<span class="quotelev1">&gt; bind-to-socket) when they ran their tests.  YMMV.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd actually be in favor of a by-core binding (not by-socket), but  
</span><br>
<span class="quotelev1">&gt; spreading the processes out round robin by socket, not by core.  All  
</span><br>
<span class="quotelev1">&gt; of this would be the *default* behavior, of course -- command line  
</span><br>
<span class="quotelev1">&gt; params/MCA params will be provided to change to whatever pattern is  
</span><br>
<span class="quotelev1">&gt; desired.
</span><br>
<p>I'm in favour of by-core binding, if it's done correctly I've seen
<br>
results that tie in with Ralphs 5-10% figure.  If it's done incorrectly
<br>
however it can be atrocious, the kernel scheduler may not be perfect but
<br>
at least it's never bad.
<br>
<p>One (small) point nobody has mentioned yet is that when using
<br>
round-robin core binding some applications prefer you to round robin
<br>
by-socket and some prefer you to round-robin by-core.   This will depend
<br>
on their level of comms and any cache-sharing benefits.
<br>
<p>Perhaps this is the reason Ralph saw improvements but Sun didn't?
<br>
<p>Ashley.
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6659.php">Paul H. Hargrove: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6657.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6647.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6659.php">Paul H. Hargrove: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6659.php">Paul H. Hargrove: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
