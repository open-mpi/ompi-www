<?
$subject_val = "Re: [MTT devel] GSOC application";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 09:39:50 2009" -->
<!-- isoreceived="20090323133950" -->
<!-- sent="Mon, 23 Mar 2009 09:41:23 -0400" -->
<!-- isosent="20090323134123" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] GSOC application" -->
<!-- id="2DBCC8FF-CCCE-4B4E-B38A-81D74353D62B_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7B1CE953-61CF-4BCA-9F69-A37048BFA477_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 09:41:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0374.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0372.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>In reply to:</strong> <a href="0372.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0374.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The next 2 weeks are pretty tight for me. I'll try to take a look at  
<br>
the API and send some comments as soon as I am able.
<br>
<p>-- Josh
<br>
<p>On Mar 23, 2009, at 8:33 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Yes, I think you're right -- making a &quot;schema&quot; for the datastore  
</span><br>
<span class="quotelev1">&gt; might be quite easy.  I'm on travel all this week and likely won't  
</span><br>
<span class="quotelev1">&gt; be able to look into this stuff -- can you guys post a proposal and  
</span><br>
<span class="quotelev1">&gt; we can dive into it from that angle?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 22, 2009, at 6:48 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello guys,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I`m not sure if we should preserve current DB schema, from one  
</span><br>
<span class="quotelev2">&gt;&gt; simple reason - datastore is an object oriented storage and have  
</span><br>
<span class="quotelev2">&gt;&gt; different rules and techniques then rdbms.
</span><br>
<span class="quotelev2">&gt;&gt; The basic storage unit in the datastore is an object which can be  
</span><br>
<span class="quotelev2">&gt;&gt; saved, loaded and queried.
</span><br>
<span class="quotelev2">&gt;&gt; (hadoop is based on the same principles, but open source.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that DB model for mtt over datastore should not be complex  
</span><br>
<span class="quotelev2">&gt;&gt; at all. The current mtt db schema is mostly optimized for specific  
</span><br>
<span class="quotelev2">&gt;&gt; queries dictated by web UI. Datastore creates indexes  
</span><br>
<span class="quotelev2">&gt;&gt; automatically, based on submitted queries history.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suggest we discuss/exchange db layout proposals by emails and  
</span><br>
<span class="quotelev2">&gt;&gt; when we get to some general understanding how it should look like -  
</span><br>
<span class="quotelev2">&gt;&gt; we switch to telepresence.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, It seems not problem at all to get datastore access for  
</span><br>
<span class="quotelev2">&gt;&gt; existing gmail account. You get 500MB quota for storage. It takes  
</span><br>
<span class="quotelev2">&gt;&gt; 5min to start using it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is some short info for datastore API:
</span><br>
<span class="quotelev2">&gt;&gt; - howto submit data model to datastore
</span><br>
<span class="quotelev2">&gt;&gt; - howto save, load, query
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://code.google.com/appengine/docs/python/gettingstarted/usingdatastore.html">http://code.google.com/appengine/docs/python/gettingstarted/usingdatastore.html</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; please comment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mike
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Mar 20, 2009 at 5:38 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 20, 2009, at 10:42 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yeah I think this sounds like a good way to move forward with this
</span><br>
<span class="quotelev2">&gt;&gt; work. The database schema is pretty complex. If you need help on the
</span><br>
<span class="quotelev2">&gt;&gt; database side of things let me know.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To get started, would it be useful to have a meeting over the phone/
</span><br>
<span class="quotelev2">&gt;&gt; telepresence to design the datastore layout? This gives us an
</span><br>
<span class="quotelev2">&gt;&gt; opportunity to start from a blank slate with regards to the
</span><br>
<span class="quotelev2">&gt;&gt; datastore, so it may be useful brainstorm a bit beforehand.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, it probably would.  My understanding of hadoop (which is very  
</span><br>
<span class="quotelev2">&gt;&gt; highlevel) is that just dump everything in without too much concern  
</span><br>
<span class="quotelev2">&gt;&gt; about the structure / &quot;schema&quot;.  But I could be wrong on that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Google Apps account is under my personal Google account, so I'm
</span><br>
<span class="quotelev2">&gt;&gt; reluctant to use it. I think the reason it took so long for me, was
</span><br>
<span class="quotelev2">&gt;&gt; because when I originally signed up it was in limited beta. I think
</span><br>
<span class="quotelev2">&gt;&gt; the approval time is much shorter now (maybe a day?), and we can make
</span><br>
<span class="quotelev2">&gt;&gt; an openmpi or mtt account that we can use.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With regard to Hadoop, I don't think that IU has a set of machines
</span><br>
<span class="quotelev2">&gt;&gt; that would work, but I can ask around. We could always try Hadoop on
</span><br>
<span class="quotelev2">&gt;&gt; a single machine if people wanted to play around with data querying/
</span><br>
<span class="quotelev2">&gt;&gt; storage.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't have a strong preference either way, but Google Apps may
</span><br>
<span class="quotelev2">&gt;&gt; provide us with a lower overhead solution for the long run even
</span><br>
<span class="quotelev2">&gt;&gt; though it costs $$.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like there is a set that you can use for free.  When you  
</span><br>
<span class="quotelev2">&gt;&gt; go over one of several metrics (CPU hours/day, storage, bandwidth  
</span><br>
<span class="quotelev2">&gt;&gt; in, bandwidth out, etc.), then you have to start paying.  But even  
</span><br>
<span class="quotelev2">&gt;&gt; with that, the costs look *quite* reasonable and should be easily  
</span><br>
<span class="quotelev2">&gt;&gt; covered by the combined Open MPI organizations (I'm talking  
</span><br>
<span class="quotelev2">&gt;&gt; hundreds of dollars here, not tens of thousands).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0374.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0372.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>In reply to:</strong> <a href="0372.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0374.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
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
