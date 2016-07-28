<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 12:06:22 2007" -->
<!-- isoreceived="20070827160622" -->
<!-- sent="Mon, 27 Aug 2007 12:06:17 -0400" -->
<!-- isosent="20070827160617" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Performance Graph Notes" -->
<!-- id="20070827160616.GJ12598_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CE1582C7-14B4-45E9-A9D2-F9B9847D409E_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-08-27 12:06:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0023.php">Ethan Mallove: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action	Required**"</a>
<li><strong>Previous message:</strong> <a href="0021.php">Ethan Mallove: "Re: [MTT devel] Thoughts on tagging..."</a>
<li><strong>In reply to:</strong> <a href="0015.php">Josh Hursey: "[MTT devel] Performance Graph Notes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0029.php">Jeff Squyres: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>Reply:</strong> <a href="0029.php">Jeff Squyres: "Re: [MTT devel] Performance Graph Notes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Aug/27/2007 10:33:26AM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Jeff asked me if I would talk to Rich and folks at IU on Friday about  
</span><br>
<span class="quotelev1">&gt; the performance graphs. Below are my notes from that meeting:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - It would be really useful to 'zoom' into sections of the graph.  
</span><br>
<span class="quotelev1">&gt; Primarily restricting the x-axis (Message Size), but also having the  
</span><br>
<span class="quotelev1">&gt; ability to restrict the y-axis (time)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Calling the y-axis 'latency' is a bit misleading, maybe 'time'  
</span><br>
<span class="quotelev1">&gt; would be better. Minor issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Torsten mentioned that he was interested in seeing the other skampi  
</span><br>
<span class="quotelev1">&gt; data that we are throwing away. Namely the time-per-rank. And if  
</span><br>
<span class="quotelev1">&gt; available communicator size.
</span><br>
<p>Torsten should be able to click the Detail button from
<br>
Performance view, and see everything that went to
<br>
stdout in the test. Would that show time-per-rank?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Torsten mentioned that he wants to add some non-blocking collective  
</span><br>
<span class="quotelev1">&gt; test that he is work on. I told him to contact Jeff on how to do this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - We need a well defined way to see what collective implementation  
</span><br>
<span class="quotelev1">&gt; was used. Meaning that there are N AlltoAll collective  
</span><br>
<span class="quotelev1">&gt; implementations in the 'tuned' component we need to know when looking  
</span><br>
<span class="quotelev1">&gt; at the graph which one of the N we are looking at for Open MPI. For  
</span><br>
<span class="quotelev1">&gt; other implementations we don't have so much control.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - It is difficult to search in the reporter for queries like:
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt;  * Open MPI run with only tcp,sm,self
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>How about something like this?
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/mtt/reporter.php?do_redir=288">http://www.open-mpi.org/mtt/reporter.php?do_redir=288</a>
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt;  * Intel MPI (which is only tcp I believe)
</span><br>
<span class="quotelev1">&gt;  * MPICH2 with tcp results from running the skampi Bcast benchmark.
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; The reporter is designed to track a single MPI well for regression  
</span><br>
<span class="quotelev1">&gt; tracking. However when we need to compare multiple MPIs and each may  
</span><br>
<span class="quotelev1">&gt; need to be selected with a different type of query it is impossible/ 
</span><br>
<span class="quotelev1">&gt; hard to do.
</span><br>
<span class="quotelev1">&gt; One solution I proposed was using the 'tagging' idea, but there might  
</span><br>
<span class="quotelev1">&gt; be some alternative UI features that we can develop to better support  
</span><br>
<span class="quotelev1">&gt; these types of queries. Tim P seemed interested/had some ideas on how  
</span><br>
<span class="quotelev1">&gt; to do this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - They really liked the ability to look at the HTML version of the  
</span><br>
<span class="quotelev1">&gt; raw data. They seemed frustrated that the popup window is reused when  
</span><br>
<span class="quotelev1">&gt; looking at multiple HTML versions of the raw data. They wanted this  
</span><br>
<span class="quotelev1">&gt; to be a static window that they could keep open so they could look at  
</span><br>
<span class="quotelev1">&gt; multiple variants of this data in small screens.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That was about it. They thought it was good over all, but the above  
</span><br>
<span class="quotelev1">&gt; were suggestions on ways to make the representation more useful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
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
<li><strong>Next message:</strong> <a href="0023.php">Ethan Mallove: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action	Required**"</a>
<li><strong>Previous message:</strong> <a href="0021.php">Ethan Mallove: "Re: [MTT devel] Thoughts on tagging..."</a>
<li><strong>In reply to:</strong> <a href="0015.php">Josh Hursey: "[MTT devel] Performance Graph Notes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0029.php">Jeff Squyres: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>Reply:</strong> <a href="0029.php">Jeff Squyres: "Re: [MTT devel] Performance Graph Notes"</a>
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
