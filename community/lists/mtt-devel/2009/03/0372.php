<?
$subject_val = "Re: [MTT devel] GSOC application";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 08:34:09 2009" -->
<!-- isoreceived="20090323123409" -->
<!-- sent="Mon, 23 Mar 2009 05:33:43 -0700" -->
<!-- isosent="20090323123343" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] GSOC application" -->
<!-- id="7B1CE953-61CF-4BCA-9F69-A37048BFA477_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b20b52800903220648o6677deb8r72e0c13e02c21255_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] GSOC application<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 08:33:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0373.php">Josh Hursey: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0371.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<li><strong>In reply to:</strong> <a href="0371.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0373.php">Josh Hursey: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0373.php">Josh Hursey: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0374.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I think you're right -- making a &quot;schema&quot; for the datastore might  
<br>
be quite easy.  I'm on travel all this week and likely won't be able  
<br>
to look into this stuff -- can you guys post a proposal and we can  
<br>
dive into it from that angle?
<br>
<p>On Mar 22, 2009, at 6:48 AM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; Hello guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I`m not sure if we should preserve current DB schema, from one  
</span><br>
<span class="quotelev1">&gt; simple reason - datastore is an object oriented storage and have  
</span><br>
<span class="quotelev1">&gt; different rules and techniques then rdbms.
</span><br>
<span class="quotelev1">&gt; The basic storage unit in the datastore is an object which can be  
</span><br>
<span class="quotelev1">&gt; saved, loaded and queried.
</span><br>
<span class="quotelev1">&gt; (hadoop is based on the same principles, but open source.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that DB model for mtt over datastore should not be complex  
</span><br>
<span class="quotelev1">&gt; at all. The current mtt db schema is mostly optimized for specific  
</span><br>
<span class="quotelev1">&gt; queries dictated by web UI. Datastore creates indexes automatically,  
</span><br>
<span class="quotelev1">&gt; based on submitted queries history.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suggest we discuss/exchange db layout proposals by emails and when  
</span><br>
<span class="quotelev1">&gt; we get to some general understanding how it should look like - we  
</span><br>
<span class="quotelev1">&gt; switch to telepresence.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, It seems not problem at all to get datastore access for  
</span><br>
<span class="quotelev1">&gt; existing gmail account. You get 500MB quota for storage. It takes  
</span><br>
<span class="quotelev1">&gt; 5min to start using it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is some short info for datastore API:
</span><br>
<span class="quotelev1">&gt; - howto submit data model to datastore
</span><br>
<span class="quotelev1">&gt; - howto save, load, query
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://code.google.com/appengine/docs/python/gettingstarted/usingdatastore.html">http://code.google.com/appengine/docs/python/gettingstarted/usingdatastore.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; please comment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mike
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Mar 20, 2009 at 5:38 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Mar 20, 2009, at 10:42 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yeah I think this sounds like a good way to move forward with this
</span><br>
<span class="quotelev1">&gt; work. The database schema is pretty complex. If you need help on the
</span><br>
<span class="quotelev1">&gt; database side of things let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To get started, would it be useful to have a meeting over the phone/
</span><br>
<span class="quotelev1">&gt; telepresence to design the datastore layout? This gives us an
</span><br>
<span class="quotelev1">&gt; opportunity to start from a blank slate with regards to the
</span><br>
<span class="quotelev1">&gt; datastore, so it may be useful brainstorm a bit beforehand.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, it probably would.  My understanding of hadoop (which is very  
</span><br>
<span class="quotelev1">&gt; highlevel) is that just dump everything in without too much concern  
</span><br>
<span class="quotelev1">&gt; about the structure / &quot;schema&quot;.  But I could be wrong on that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Google Apps account is under my personal Google account, so I'm
</span><br>
<span class="quotelev1">&gt; reluctant to use it. I think the reason it took so long for me, was
</span><br>
<span class="quotelev1">&gt; because when I originally signed up it was in limited beta. I think
</span><br>
<span class="quotelev1">&gt; the approval time is much shorter now (maybe a day?), and we can make
</span><br>
<span class="quotelev1">&gt; an openmpi or mtt account that we can use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With regard to Hadoop, I don't think that IU has a set of machines
</span><br>
<span class="quotelev1">&gt; that would work, but I can ask around. We could always try Hadoop on
</span><br>
<span class="quotelev1">&gt; a single machine if people wanted to play around with data querying/
</span><br>
<span class="quotelev1">&gt; storage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have a strong preference either way, but Google Apps may
</span><br>
<span class="quotelev1">&gt; provide us with a lower overhead solution for the long run even
</span><br>
<span class="quotelev1">&gt; though it costs $$.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like there is a set that you can use for free.  When you go  
</span><br>
<span class="quotelev1">&gt; over one of several metrics (CPU hours/day, storage, bandwidth in,  
</span><br>
<span class="quotelev1">&gt; bandwidth out, etc.), then you have to start paying.  But even with  
</span><br>
<span class="quotelev1">&gt; that, the costs look *quite* reasonable and should be easily covered  
</span><br>
<span class="quotelev1">&gt; by the combined Open MPI organizations (I'm talking hundreds of  
</span><br>
<span class="quotelev1">&gt; dollars here, not tens of thousands).
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0373.php">Josh Hursey: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0371.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<li><strong>In reply to:</strong> <a href="0371.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0373.php">Josh Hursey: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0373.php">Josh Hursey: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0374.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
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
