<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 24 19:36:43 2006" -->
<!-- isoreceived="20060325003643" -->
<!-- sent="Fri, 24 Mar 2006 17:36:36 -0700" -->
<!-- isosent="20060325003636" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PBS Professional" -->
<!-- id="op.s6x1bap1ies9li_at_rygel.lnxi.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9A98CFB5-4B83-4422-93D9-1CAFEBA76F64_at_open-mpi.org" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-24 19:36:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0906.php">Allan Menezes: "[OMPI users] No increase in performance found using two Gigabit Nics"</a>
<li><strong>Previous message:</strong> <a href="0904.php">Brian Barrett: "Re: [OMPI users] PBS Professional"</a>
<li><strong>In reply to:</strong> <a href="0904.php">Brian Barrett: "Re: [OMPI users] PBS Professional"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 24 Mar 2006 17:17:09 -0700, Brian Barrett &lt;brbarret_at_[hidden]&gt;  
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I'm not sure we could do something like this internally in Open MPI's
</span><br>
<span class="quotelev1">&gt; build system and we definitely don't have the developer time to look
</span><br>
<span class="quotelev1">&gt; into it in the foreseeable future.
</span><br>
<p>Well, from my knowledge about it, it's pretty much impossible to fix from  
<br>
your end, even if you did have the time.  But I wanted to make sure there  
<br>
weren't any obvious workarounds at this point in time, and you've been  
<br>
quite helpful.
<br>
<p><span class="quotelev1">&gt; Thinking about it some more, there is one even more icky solution to
</span><br>
<span class="quotelev1">&gt; the problem.  Again, this is not something the Open MPI development
</span><br>
<span class="quotelev1">&gt; team can put cycles into.  Last I heard / looked, the TM interface
</span><br>
<span class="quotelev1">&gt; and the wire protocol to the pbs_mom hadn't changed much in years and
</span><br>
<span class="quotelev1">&gt; years.  There's an open source version of PBS out there that includes
</span><br>
<span class="quotelev1">&gt; code to implement this wire protocol.  There's no reason Open MPI pls
</span><br>
<span class="quotelev1">&gt; and ras components couldn't be developed that talked directly to the
</span><br>
<span class="quotelev1">&gt; pbs_mom rather than using the published API.  Nasty, yes.  But it
</span><br>
<span class="quotelev1">&gt; might work.  And since the PBS Pro libraries wouldn't need to be
</span><br>
<span class="quotelev1">&gt; linked in, the -fPIC problem is avoided.
</span><br>
<p>This at earns an evil eyebrow award.
<br>
<p><span class="quotelev1">&gt; If you're interested in having a stab at either work-around approach,
</span><br>
<span class="quotelev1">&gt; let me know (might be easiest to post to the devel mailing list so
</span><br>
<span class="quotelev1">&gt; that we don't bore all the users with the awful details).  I'd be
</span><br>
<span class="quotelev1">&gt; interested in seeing if something couldn't be done between now and
</span><br>
<span class="quotelev1">&gt; when Altair releases PBS Pro libraries for the Opteron compiled with -
</span><br>
<span class="quotelev1">&gt; fPIC.
</span><br>
<p>I'll see what I can do to stab this one a few times.  But after this post,  
<br>
I'll it all on the dev list.  (I figure I might as well finish the  
<br>
thread/message in -users, so when a user in my same situation goes  
<br>
searching through the archives...)  Well, that and I need to subscribe to  
<br>
-dev.
<br>
<pre>
-- 
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0906.php">Allan Menezes: "[OMPI users] No increase in performance found using two Gigabit Nics"</a>
<li><strong>Previous message:</strong> <a href="0904.php">Brian Barrett: "Re: [OMPI users] PBS Professional"</a>
<li><strong>In reply to:</strong> <a href="0904.php">Brian Barrett: "Re: [OMPI users] PBS Professional"</a>
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
