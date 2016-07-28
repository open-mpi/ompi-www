<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 14 21:25:22 2013" -->
<!-- isoreceived="20131115022522" -->
<!-- sent="Thu, 14 Nov 2013 18:24:21 -0800" -->
<!-- isosent="20131115022421" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect" -->
<!-- id="90B66228-CF95-41E7-A976-7C608DD36F7C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C905121E-42FE-48F1-8AD2-FFD62A310EA4_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-14 21:24:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13283.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13281.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]	Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13272.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13283.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13283.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 14, 2013, at 1:16 PM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 1. Ralph made the OOB asynchronous.
</span><br>
<p><p>I pondered this for awhile today, and I just want to correct any misimpression this statement might leave, especially with folks who haven't been around the project that much over the last couple of years. Just to clarify: this wasn't a case of Ralph waking up one day and saying &quot;hey, let's make the OOB async!&quot;. Quite the contrary.
<br>
<p>This whole conversion process started nearly two years ago when we, as a community, decided to move towards an async progress model. We laid out all the things that we thought would need to be done to make that happen...and then we started down that path. First, we updated the event library to the 2.x series so we could separate the event bases for the different layers, and so we could have event priority levels. Some folks started hardening the BTLs for thread safety and adding progress threads inside them. Etc.
<br>
<p>One step on that path was to make ORTE operate asynchronously as a purely event-driven library. First, we rewrote the state machine so all ORTE operations ran in an event, except for the OOB as that can of worms was just too hard. Frankly, nobody wanted to touch it, so we left it alone and made everything else work.
<br>
<p>Finally, I took on the OOB rewrite. One of our continual problems was deadlocking somewhere because someone would call a blocking send/recv while in an OOB callback - usually way down in the stack somewhere that wasn't immediately obvious to the user. After spending time fiddling with things, it became clear that the only simple solution was to make the OOB totally non-blocking. This also made a much cleaner integration to the rest of the ORTE state machine.
<br>
<p>So we brought it up at a couple of developer meetings, talked a number of times on the weekly telecon, went thru several email threads, RFCs, etc. - with me emphasizing repeatedly that the OOB was going to lose its blocking interfaces. The fact that OOB callbacks would be occurring in the ORTE event base thread was also discussed, and was one of the reasons why we locked libevent thread protection &quot;on&quot; earlier this year. This fact may have escaped some people, but it was discussed on several occasions.
<br>
<p>The proof of the pudding is that all of the MPI layer has been adapted to the new async behavior -except- for the openib cpc's. The issue of what to do with these has been raised several times, especially once the ofacm code was committed. Unfortunately, lack of time and priorities left this code to bitrot.
<br>
<p>I'm not pointing fingers at anyone, nor am I saying this was all perfect. Just trying to point out that this was a community move that is part of our community roadmap, and we perhaps need to be better at finding a way to keep everyone/everything a little more connected to the convoy. This is going to get even more rocky in the next year as we push towards full thread safety and async progress, and re-implement checkpoint/restart support.
<br>
<p>So heads-up...!
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13282/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13283.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13281.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]	Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13272.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13283.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13283.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
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
