<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 18:16:36 2007" -->
<!-- isoreceived="20070827221636" -->
<!-- sent="Mon, 27 Aug 2007 18:16:14 -0400" -->
<!-- isosent="20070827221614" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Performance Graph Notes" -->
<!-- id="CC9777BA-FB62-437E-8B40-0D4A05AB024E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070827160616.GJ12598_at_sun.com" -->
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
<strong>Date:</strong> 2007-08-27 18:16:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0030.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Previous message:</strong> <a href="0028.php">Ethan Mallove: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>In reply to:</strong> <a href="0022.php">Ethan Mallove: "Re: [MTT devel] Performance Graph Notes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0037.php">Ethan Mallove: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>Reply:</strong> <a href="0037.php">Ethan Mallove: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>Reply:</strong> <a href="0038.php">Josh Hursey: "Re: [MTT devel] Performance Graph Notes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 27, 2007, at 12:06 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev2">&gt;&gt; - It would be really useful to 'zoom' into sections of the graph.
</span><br>
<span class="quotelev2">&gt;&gt; Primarily restricting the x-axis (Message Size), but also having the
</span><br>
<span class="quotelev2">&gt;&gt; ability to restrict the y-axis (time)
</span><br>
<p>K.
<br>
<p><a href="https://svn.open-mpi.org/trac/mtt/ticket/153">https://svn.open-mpi.org/trac/mtt/ticket/153</a>
<br>
<p><span class="quotelev2">&gt;&gt; - Calling the y-axis 'latency' is a bit misleading, maybe 'time'
</span><br>
<span class="quotelev2">&gt;&gt; would be better. Minor issue.
</span><br>
<p>Easy to fix (and we should).
<br>
<p><a href="https://svn.open-mpi.org/trac/mtt/ticket/285">https://svn.open-mpi.org/trac/mtt/ticket/285</a>
<br>
<p><span class="quotelev2">&gt;&gt; - Torsten mentioned that he was interested in seeing the other skampi
</span><br>
<span class="quotelev2">&gt;&gt; data that we are throwing away. Namely the time-per-rank. And if
</span><br>
<span class="quotelev2">&gt;&gt; available communicator size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Torsten should be able to click the Detail button from
</span><br>
<span class="quotelev1">&gt; Performance view, and see everything that went to
</span><br>
<span class="quotelev1">&gt; stdout in the test. Would that show time-per-rank?
</span><br>
<p>Not ATM; the skampi build is currently configured to not show that  
<br>
info.  Darn that Torsten...
<br>
<p>If we want, we can resume the discussion of how to save that info  
<br>
(since Jelena told us &quot;no&quot;, I honestly dumped all that info from my  
<br>
brain...).
<br>
<p><span class="quotelev2">&gt;&gt; - Torsten mentioned that he wants to add some non-blocking collective
</span><br>
<span class="quotelev2">&gt;&gt; test that he is work on. I told him to contact Jeff on how to do  
</span><br>
<span class="quotelev2">&gt;&gt; this.
</span><br>
<p>Shouldn't be hard.  I'll wait for him to contact me.
<br>
<p><span class="quotelev2">&gt;&gt; - We need a well defined way to see what collective implementation
</span><br>
<span class="quotelev2">&gt;&gt; was used. Meaning that there are N AlltoAll collective
</span><br>
<span class="quotelev2">&gt;&gt; implementations in the 'tuned' component we need to know when looking
</span><br>
<span class="quotelev2">&gt;&gt; at the graph which one of the N we are looking at for Open MPI. For
</span><br>
<span class="quotelev2">&gt;&gt; other implementations we don't have so much control.
</span><br>
<p>I don't know if MTT can.  In order for MTT to do this, OMPI needs to  
<br>
export that data somehow.
<br>
<p><span class="quotelev2">&gt;&gt; - It is difficult to search in the reporter for queries like:
</span><br>
<span class="quotelev2">&gt;&gt; ----------
</span><br>
<span class="quotelev2">&gt;&gt;  * Open MPI run with only tcp,sm,self
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about something like this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/mtt/reporter.php?do_redir=288">http://www.open-mpi.org/mtt/reporter.php?do_redir=288</a>
</span><br>
<p>I did some skampi runs to see verbs results across 2 MPIs (Intel MPI  
<br>
uses udapl, not tcp).  I don't really think that this is hard:
<br>
<p>- network: verbs (or TCP in Josh's case)
<br>
- test suite: skampi
<br>
- command: bcast (granted, per #281, you have to fill in &quot;bcast&quot; on  
<br>
the &quot;command&quot; field on the advanced window, not the normal window)
<br>
<p>It should show all the MPI's.  You probably want to limit it down to  
<br>
a specific platform, though, in order to get apples-to-apples  
<br>
comparisons.
<br>
<p><a href="http://www.open-mpi.org/mtt/reporter.php?do_redir=290">http://www.open-mpi.org/mtt/reporter.php?do_redir=290</a>
<br>
<p><span class="quotelev2">&gt;&gt;  * Intel MPI (which is only tcp I believe)
</span><br>
<span class="quotelev2">&gt;&gt;  * MPICH2 with tcp results from running the skampi Bcast benchmark.
</span><br>
<span class="quotelev2">&gt;&gt; ----------
</span><br>
<span class="quotelev2">&gt;&gt; The reporter is designed to track a single MPI well for regression
</span><br>
<span class="quotelev2">&gt;&gt; tracking. However when we need to compare multiple MPIs and each may
</span><br>
<span class="quotelev2">&gt;&gt; need to be selected with a different type of query it is impossible/
</span><br>
<span class="quotelev2">&gt;&gt; hard to do.
</span><br>
<p>I don't see why this is hard...?  I disagree with the statement  
<br>
&quot;Reporter is design to track a single MPI well...&quot;  See the permalink  
<br>
above.
<br>
<p><span class="quotelev2">&gt;&gt; One solution I proposed was using the 'tagging' idea, but there might
</span><br>
<span class="quotelev2">&gt;&gt; be some alternative UI features that we can develop to better support
</span><br>
<span class="quotelev2">&gt;&gt; these types of queries. Tim P seemed interested/had some ideas on how
</span><br>
<span class="quotelev2">&gt;&gt; to do this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - They really liked the ability to look at the HTML version of the
</span><br>
<span class="quotelev2">&gt;&gt; raw data. They seemed frustrated that the popup window is reused when
</span><br>
<span class="quotelev2">&gt;&gt; looking at multiple HTML versions of the raw data. They wanted this
</span><br>
<span class="quotelev2">&gt;&gt; to be a static window that they could keep open so they could look at
</span><br>
<span class="quotelev2">&gt;&gt; multiple variants of this data in small screens.
</span><br>
<p>IIRC, that was some javascript trick that Ethan did in order to  
<br>
download everything once.  It could probably be changed if someone  
<br>
really wanted to (e.g., the CSV doesn't display this way).
<br>
<p>Ethan, can you explain further?
<br>
<p>&lt;from Josh's 2nd e-mail&gt;
<br>
<p><span class="quotelev1">&gt; - The performance graphs are sometimes placed side-by-side instead of
</span><br>
<span class="quotelev1">&gt; stacked on top of one another. This shinks the x-axis, and is
</span><br>
<span class="quotelev1">&gt; undesirable. They would prefer that the graphs be always stacked on
</span><br>
<span class="quotelev1">&gt; top of one another.
</span><br>
<p>That shouldn't be too hard, right Ethan?
<br>
<p><span class="quotelev1">&gt; - They lamented the lack of the cherry picking feature since it is
</span><br>
<span class="quotelev1">&gt; known to be broken in the new reporter.
</span><br>
<p>To be fixed...
<br>
<p><span class="quotelev1">&gt; - They noticed that sometimes there is 'wasted space' in the graphs
</span><br>
<span class="quotelev1">&gt; in both the x and y axis. They want the graph to be pushed to the
</span><br>
<span class="quotelev1">&gt; edges of the graph so they can see the most detail in the results.
</span><br>
<p>This might be a function of our PHP graphing package.  We seem to  
<br>
have jpgraph 1.20.5; the most recent seems to be 1.21b.  I doubt this  
<br>
issue has been fixed, but we might check / ask...?
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
<li><strong>Next message:</strong> <a href="0030.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Previous message:</strong> <a href="0028.php">Ethan Mallove: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>In reply to:</strong> <a href="0022.php">Ethan Mallove: "Re: [MTT devel] Performance Graph Notes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0037.php">Ethan Mallove: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>Reply:</strong> <a href="0037.php">Ethan Mallove: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>Reply:</strong> <a href="0038.php">Josh Hursey: "Re: [MTT devel] Performance Graph Notes"</a>
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
