<?
$subject_val = "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 13:08:29 2010" -->
<!-- isoreceived="20100812170829" -->
<!-- sent="Thu, 12 Aug 2010 13:09:42 -0400" -->
<!-- isosent="20100812170942" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component" -->
<!-- id="741C9EF0-2A84-4CC8-AFD8-ACF75F1EC2EA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C63D933.5090908_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-12 13:09:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8266.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Previous message:</strong> <a href="8264.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>In reply to:</strong> <a href="8261.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8273.php">Rainer Keller: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Reply:</strong> <a href="8273.php">Rainer Keller: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 12, 2010, at 7:21 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Is there not a way to determine whether the fs is tmpfs or not?  
</span><br>
<p>I don't know -- Rainer?
<br>
<p><span class="quotelev1">&gt; It seems fixing that is a lot  less changes then adapting to Posix shared memory.  
</span><br>
<p>Keep in mind that the sm BTL itself did not change.
<br>
<p>The parts that changed were the sm common startup stuff -- how the memory gets mapped into the processes.  That has now been fully modularized (it was sorta modularized before).  Once the memory is in the process and the bootstrapping is done, then the sm BTL proper takes over, and nothing has changed.
<br>
<p><span class="quotelev1">&gt; My main concern is we have had quite a long runtime with the mmap implementation and know it works for us.  We haven't had nearly as much runtime with this Posix implementation and so who knows what issues we might run into.  
</span><br>
<p>Fair enough.  How about making posix not the default and having a bunch of us run MTT over it for a month or three?  Then we can re-evaluate whether to make it the default or not.
<br>
<p><span class="quotelev1">&gt; To me the fs homing issue seems like a weak case.  
</span><br>
<p>Agreed.
<br>
<p>To me, it's a slight performance improvement &quot;for free&quot; -- i.e., the user doesn't have to do anything and they get a slight performance improvement (vs. setting up a tmpfs themselves, setting some MCA params to tell the SM BTL to put the mmap file in that tmpfs, ...etc.).  It's not a huge improvement -- it is pretty small -- but as the Bull numbers show, it's noticeable.  Since it's &quot;for free&quot;, I think we should take it.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8266.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Previous message:</strong> <a href="8264.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>In reply to:</strong> <a href="8261.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8273.php">Rainer Keller: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Reply:</strong> <a href="8273.php">Rainer Keller: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
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
