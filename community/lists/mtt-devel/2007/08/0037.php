<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 28 18:08:21 2007" -->
<!-- isoreceived="20070828220821" -->
<!-- sent="Tue, 28 Aug 2007 18:08:15 -0400" -->
<!-- isosent="20070828220815" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Performance Graph Notes" -->
<!-- id="20070828220815.GD11675_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CC9777BA-FB62-437E-8B40-0D4A05AB024E_at_cisco.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-28 18:08:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0038.php">Josh Hursey: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>Previous message:</strong> <a href="0036.php">Jeff Squyres: "Re: [MTT devel] --trial pruning for v3 schema?"</a>
<li><strong>In reply to:</strong> <a href="0029.php">Jeff Squyres: "Re: [MTT devel] Performance Graph Notes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0038.php">Josh Hursey: "Re: [MTT devel] Performance Graph Notes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Aug/27/2007 06:16:14PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 27, 2007, at 12:06 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - It would be really useful to 'zoom' into sections of the graph.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Primarily restricting the x-axis (Message Size), but also having the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ability to restrict the y-axis (time)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; K.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/mtt/ticket/153">https://svn.open-mpi.org/trac/mtt/ticket/153</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - Calling the y-axis 'latency' is a bit misleading, maybe 'time'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; would be better. Minor issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Easy to fix (and we should).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/mtt/ticket/285">https://svn.open-mpi.org/trac/mtt/ticket/285</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Fixed.
<br>
<p><p><span class="quotelev3">&gt; &gt;&gt; - Torsten mentioned that he was interested in seeing the other skampi
</span><br>
<span class="quotelev3">&gt; &gt;&gt; data that we are throwing away. Namely the time-per-rank. And if
</span><br>
<span class="quotelev3">&gt; &gt;&gt; available communicator size.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Torsten should be able to click the Detail button from
</span><br>
<span class="quotelev2">&gt; &gt; Performance view, and see everything that went to
</span><br>
<span class="quotelev2">&gt; &gt; stdout in the test. Would that show time-per-rank?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not ATM; the skampi build is currently configured to not show that  
</span><br>
<span class="quotelev1">&gt; info.  Darn that Torsten...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If we want, we can resume the discussion of how to save that info  
</span><br>
<span class="quotelev1">&gt; (since Jelena told us &quot;no&quot;, I honestly dumped all that info from my  
</span><br>
<span class="quotelev1">&gt; brain...).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - Torsten mentioned that he wants to add some non-blocking collective
</span><br>
<span class="quotelev3">&gt; &gt;&gt; test that he is work on. I told him to contact Jeff on how to do  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shouldn't be hard.  I'll wait for him to contact me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - We need a well defined way to see what collective implementation
</span><br>
<span class="quotelev3">&gt; &gt;&gt; was used. Meaning that there are N AlltoAll collective
</span><br>
<span class="quotelev3">&gt; &gt;&gt; implementations in the 'tuned' component we need to know when looking
</span><br>
<span class="quotelev3">&gt; &gt;&gt; at the graph which one of the N we are looking at for Open MPI. For
</span><br>
<span class="quotelev3">&gt; &gt;&gt; other implementations we don't have so much control.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know if MTT can.  In order for MTT to do this, OMPI needs to  
</span><br>
<span class="quotelev1">&gt; export that data somehow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - It is difficult to search in the reporter for queries like:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  * Open MPI run with only tcp,sm,self
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; How about something like this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="http://www.open-mpi.org/mtt/reporter.php?do_redir=288">http://www.open-mpi.org/mtt/reporter.php?do_redir=288</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did some skampi runs to see verbs results across 2 MPIs (Intel MPI  
</span><br>
<span class="quotelev1">&gt; uses udapl, not tcp).  I don't really think that this is hard:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - network: verbs (or TCP in Josh's case)
</span><br>
<span class="quotelev1">&gt; - test suite: skampi
</span><br>
<span class="quotelev1">&gt; - command: bcast (granted, per #281, you have to fill in &quot;bcast&quot; on  
</span><br>
<span class="quotelev1">&gt; the &quot;command&quot; field on the advanced window, not the normal window)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It should show all the MPI's.  You probably want to limit it down to  
</span><br>
<span class="quotelev1">&gt; a specific platform, though, in order to get apples-to-apples  
</span><br>
<span class="quotelev1">&gt; comparisons.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mtt/reporter.php?do_redir=290">http://www.open-mpi.org/mtt/reporter.php?do_redir=290</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  * Intel MPI (which is only tcp I believe)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  * MPICH2 with tcp results from running the skampi Bcast benchmark.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The reporter is designed to track a single MPI well for regression
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tracking. However when we need to compare multiple MPIs and each may
</span><br>
<span class="quotelev3">&gt; &gt;&gt; need to be selected with a different type of query it is impossible/
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hard to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't see why this is hard...?  I disagree with the statement  
</span><br>
<span class="quotelev1">&gt; &quot;Reporter is design to track a single MPI well...&quot;  See the permalink  
</span><br>
<span class="quotelev1">&gt; above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; One solution I proposed was using the 'tagging' idea, but there might
</span><br>
<span class="quotelev3">&gt; &gt;&gt; be some alternative UI features that we can develop to better support
</span><br>
<span class="quotelev3">&gt; &gt;&gt; these types of queries. Tim P seemed interested/had some ideas on how
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to do this.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - They really liked the ability to look at the HTML version of the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; raw data. They seemed frustrated that the popup window is reused when
</span><br>
<span class="quotelev3">&gt; &gt;&gt; looking at multiple HTML versions of the raw data. They wanted this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to be a static window that they could keep open so they could look at
</span><br>
<span class="quotelev3">&gt; &gt;&gt; multiple variants of this data in small screens.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IIRC, that was some javascript trick that Ethan did in order to  
</span><br>
<span class="quotelev1">&gt; download everything once.  It could probably be changed if someone  
</span><br>
<span class="quotelev1">&gt; really wanted to (e.g., the CSV doesn't display this way).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ethan, can you explain further?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Every time reporter.php is visited, graphs and CSV dumps
<br>
that are more than 1 hour old are cleaned out from the MTT
<br>
tmp/ area. The HTML dumps live as long as the browser window
<br>
is kept open since they're downloaded with the report (which
<br>
I thought was preferable).
<br>
<p>I made the HTML raw data dumps go to their own windows.
<br>
<p><p><span class="quotelev1">&gt; &lt;from Josh's 2nd e-mail&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; - The performance graphs are sometimes placed side-by-side instead of
</span><br>
<span class="quotelev2">&gt; &gt; stacked on top of one another. This shinks the x-axis, and is
</span><br>
<span class="quotelev2">&gt; &gt; undesirable. They would prefer that the graphs be always stacked on
</span><br>
<span class="quotelev2">&gt; &gt; top of one another.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That shouldn't be too hard, right Ethan?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Not done.
<br>
<p><span class="quotelev2">&gt; &gt; - They lamented the lack of the cherry picking feature since it is
</span><br>
<span class="quotelev2">&gt; &gt; known to be broken in the new reporter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be fixed...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Fixed.
<br>
<p>-Ethan
<br>
<p><span class="quotelev2">&gt; &gt; - They noticed that sometimes there is 'wasted space' in the graphs
</span><br>
<span class="quotelev2">&gt; &gt; in both the x and y axis. They want the graph to be pushed to the
</span><br>
<span class="quotelev2">&gt; &gt; edges of the graph so they can see the most detail in the results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This might be a function of our PHP graphing package.  We seem to  
</span><br>
<span class="quotelev1">&gt; have jpgraph 1.20.5; the most recent seems to be 1.21b.  I doubt this  
</span><br>
<span class="quotelev1">&gt; issue has been fixed, but we might check / ask...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0038.php">Josh Hursey: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>Previous message:</strong> <a href="0036.php">Jeff Squyres: "Re: [MTT devel] --trial pruning for v3 schema?"</a>
<li><strong>In reply to:</strong> <a href="0029.php">Jeff Squyres: "Re: [MTT devel] Performance Graph Notes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0038.php">Josh Hursey: "Re: [MTT devel] Performance Graph Notes"</a>
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
