<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 26 13:30:55 2007" -->
<!-- isoreceived="20070926173055" -->
<!-- sent="Wed, 26 Sep 2007 13:30:47 -0400" -->
<!-- isosent="20070926173047" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Toy of the day: Cacti" -->
<!-- id="20070926173047.GB1914_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="356216A1-AE21-4FAE-A9BC-11FA1C6EC43E_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-09-26 13:30:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0136.php">Ethan Mallove: "[MTT devel] Run MTT with MTT"</a>
<li><strong>Previous message:</strong> <a href="0134.php">Ethan Mallove: "[MTT devel] Differing DoCommand::Cmd return values depending on caller"</a>
<li><strong>In reply to:</strong> <a href="0133.php">Josh Hursey: "[MTT devel] Toy of the day: Cacti"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0152.php">Jeff Squyres: "Re: [MTT devel] Toy of the day: Cacti"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0152.php">Jeff Squyres: "Re: [MTT devel] Toy of the day: Cacti"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow, that is fun! Looks like the graph-zooming stuff comes
<br>
from RRDgraph, which is part of RRDtool?
<br>
<p>&nbsp;&nbsp;<a href="http://oss.oetiker.ch/rrdtool/doc/rrdgraph.en.html">http://oss.oetiker.ch/rrdtool/doc/rrdgraph.en.html</a>
<br>
<p>I wonder if (and IANAL) that zoom feature could be pulled
<br>
into Jpgraph? 
<br>
<p>-Ethan
<br>
<p><p>On Wed, Sep/26/2007 11:12:37AM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; The group I worked with in undergrad just setup Cacti for monitoring  
</span><br>
<span class="quotelev1">&gt; three cluster setups they have running. It is pretty snazzy. One of  
</span><br>
<span class="quotelev1">&gt; the cool things is the dynamic zoom feature they have going on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Go to: (username/password -&gt; guest/guest) [This is publicly known  
</span><br>
<span class="quotelev1">&gt; username/password so no worries about posting to a listserv, just  
</span><br>
<span class="quotelev1">&gt; don't pass around too much as I don't want to overwhelm their servers]
</span><br>
<span class="quotelev1">&gt;    <a href="http://hp.cluster.earlham.edu/cacti/">http://hp.cluster.earlham.edu/cacti/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Click on 'Servers' -&gt; 'Host: Hopper'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Click on the magnifying glass beside the lo0 graph (or any of the  
</span><br>
<span class="quotelev1">&gt; graphs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Use your mouse to make a bounding box in the graph by clicking and  
</span><br>
<span class="quotelev1">&gt; dragging until the section you want to look at is in the red box.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When you release your mouse button it will zoon in the graph.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought this was totally cool for a variety of reasons, but the UI  
</span><br>
<span class="quotelev1">&gt; of the graph zoom may influence how we want to integrate such  
</span><br>
<span class="quotelev1">&gt; functionality in the MTT reporter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="0136.php">Ethan Mallove: "[MTT devel] Run MTT with MTT"</a>
<li><strong>Previous message:</strong> <a href="0134.php">Ethan Mallove: "[MTT devel] Differing DoCommand::Cmd return values depending on caller"</a>
<li><strong>In reply to:</strong> <a href="0133.php">Josh Hursey: "[MTT devel] Toy of the day: Cacti"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0152.php">Jeff Squyres: "Re: [MTT devel] Toy of the day: Cacti"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0152.php">Jeff Squyres: "Re: [MTT devel] Toy of the day: Cacti"</a>
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
