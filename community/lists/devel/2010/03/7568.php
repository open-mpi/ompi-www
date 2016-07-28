<?
$subject_val = "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  8 08:43:50 2010" -->
<!-- isoreceived="20100308134350" -->
<!-- sent="Mon, 8 Mar 2010 05:43:44 -0800" -->
<!-- isosent="20100308134344" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)" -->
<!-- id="E77B5D4D-7DA1-4AB8-800A-72779C5938AD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BABDB6D0-D395-4753-B62E-2102719C4B5F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-08 08:43:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7569.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
<li><strong>Previous message:</strong> <a href="7567.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD*(take 2)"</a>
<li><strong>In reply to:</strong> <a href="7567.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD*(take 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7569.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
<li><strong>Reply:</strong> <a href="7569.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 7, 2010, at 8:13 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt; &gt; How about calling it --enable-opal-event-progress-thread, or even  
</span><br>
<span class="quotelev1">&gt; --enable-open-libevent-progress-thread?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why not add another 100+ characters to the name while we are at  
</span><br>
<span class="quotelev1">&gt; it? :-/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>:-)
<br>
<p>I didn't really think the length mattered here, since it's a configure  
<br>
argument.  There has been a *lot* of confusion over the name of this  
<br>
particular switch over the past few years, so I'm suggesting that a  
<br>
longer, more descriptive name might be a little better.  Just my  
<br>
$0.02...
<br>
<p><span class="quotelev2">&gt; &gt; The openib BTL can have up to 2 progress threads (!) -- the async  
</span><br>
<span class="quotelev1">&gt; verbs event notifier and the RDMA CM agent.  They really should be  
</span><br>
<span class="quotelev1">&gt; consolidated.  If there's infrastructure to consolidate them via  
</span><br>
<span class="quotelev1">&gt; opal or something else, then so much the better...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Agreed, though I think that is best done as a separate effort from  
</span><br>
<span class="quotelev1">&gt; this RFC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Agreed -- sorry, I wasn't clear.  I wasn't trying to propose that that  
<br>
work be added to this RFC; I was just trying to mention that there  
<br>
could be a good use for the work from this RFC if such infrastructure  
<br>
was provided.
<br>
<p><span class="quotelev1">&gt; I believe there was a concern over latency if all the BTLs are  
</span><br>
<span class="quotelev1">&gt; driven by one progress thread that sequentially runs across their  
</span><br>
<span class="quotelev1">&gt; respective file descriptors, but I may be remembering it  
</span><br>
<span class="quotelev1">&gt; incorrectly...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>FWIW, I believe the openib progress threads were written the they way  
<br>
they were (i.e., without any opal progress thread support) because, at  
<br>
least in the current setup, to get the opal progress thread support,  
<br>
you have to turn on all the heavyweight locks, etc.  These two  
<br>
progress threads now simply pthread_create() and do minimal locking  
<br>
between the main thread and themselves, without affecting the rest of  
<br>
the locking machinery in the code base.
<br>
<p>I'm not saying that's perfect (or even good); I'm just saying that  
<br>
that's the way it currently is.  Indeed, at a minimum, Pasha and I  
<br>
have long talked about merging these two progress threads into 1.  It  
<br>
would be even better if we could merge these two project threads into  
<br>
some other infrastructure.  But it's always been somewhat of a low  
<br>
priority; we've never gotten a round tuit...
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
<li><strong>Next message:</strong> <a href="7569.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
<li><strong>Previous message:</strong> <a href="7567.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD*(take 2)"</a>
<li><strong>In reply to:</strong> <a href="7567.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD*(take 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7569.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
<li><strong>Reply:</strong> <a href="7569.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
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
