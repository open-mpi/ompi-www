<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct  6 12:40:49 2007" -->
<!-- isoreceived="20071006164049" -->
<!-- sent="Sat, 6 Oct 2007 18:40:43 +0200" -->
<!-- isosent="20071006164043" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Toy of the day: Cacti" -->
<!-- id="018F576B-C0AD-47F1-BC0B-C9BEEFE8D513_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070926173047.GB1914_at_sun.com" -->
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
<strong>Date:</strong> 2007-10-06 12:40:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0153.php">Jeff Squyres: "Re: [MTT devel] Run MTT with MTT"</a>
<li><strong>Previous message:</strong> <a href="0151.php">Jeff Squyres: "Re: [MTT devel] Differing DoCommand::Cmd return values depending on caller"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/09/0135.php">Ethan Mallove: "Re: [MTT devel] Toy of the day: Cacti"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I vote for adding this to the trac ticket about UI stuff unless  
<br>
someone wants to add it now.  ;-)
<br>
<p><p>On Sep 26, 2007, at 7:30 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Wow, that is fun! Looks like the graph-zooming stuff comes
</span><br>
<span class="quotelev1">&gt; from RRDgraph, which is part of RRDtool?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="http://oss.oetiker.ch/rrdtool/doc/rrdgraph.en.html">http://oss.oetiker.ch/rrdtool/doc/rrdgraph.en.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder if (and IANAL) that zoom feature could be pulled
</span><br>
<span class="quotelev1">&gt; into Jpgraph?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Sep/26/2007 11:12:37AM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The group I worked with in undergrad just setup Cacti for monitoring
</span><br>
<span class="quotelev2">&gt;&gt; three cluster setups they have running. It is pretty snazzy. One of
</span><br>
<span class="quotelev2">&gt;&gt; the cool things is the dynamic zoom feature they have going on.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Go to: (username/password -&gt; guest/guest) [This is publicly known
</span><br>
<span class="quotelev2">&gt;&gt; username/password so no worries about posting to a listserv, just
</span><br>
<span class="quotelev2">&gt;&gt; don't pass around too much as I don't want to overwhelm their  
</span><br>
<span class="quotelev2">&gt;&gt; servers]
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://hp.cluster.earlham.edu/cacti/">http://hp.cluster.earlham.edu/cacti/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Click on 'Servers' -&gt; 'Host: Hopper'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Click on the magnifying glass beside the lo0 graph (or any of the
</span><br>
<span class="quotelev2">&gt;&gt; graphs).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Use your mouse to make a bounding box in the graph by clicking and
</span><br>
<span class="quotelev2">&gt;&gt; dragging until the section you want to look at is in the red box.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When you release your mouse button it will zoon in the graph.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I thought this was totally cool for a variety of reasons, but the UI
</span><br>
<span class="quotelev2">&gt;&gt; of the graph zoom may influence how we want to integrate such
</span><br>
<span class="quotelev2">&gt;&gt; functionality in the MTT reporter.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0153.php">Jeff Squyres: "Re: [MTT devel] Run MTT with MTT"</a>
<li><strong>Previous message:</strong> <a href="0151.php">Jeff Squyres: "Re: [MTT devel] Differing DoCommand::Cmd return values depending on caller"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/09/0135.php">Ethan Mallove: "Re: [MTT devel] Toy of the day: Cacti"</a>
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
