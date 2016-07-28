<?
$subject_val = "Re: [MTT devel] GSOC application";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 09:53:59 2009" -->
<!-- isoreceived="20090323135359" -->
<!-- sent="Mon, 23 Mar 2009 15:53:53 +0200" -->
<!-- isosent="20090323135353" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] GSOC application" -->
<!-- id="b20b52800903230653u7ca36db3h9658470918168cb0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 09:53:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0375.php">Ethan Mallove: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0373.php">Josh Hursey: "Re: [MTT devel] GSOC application"</a>
<li><strong>In reply to:</strong> <a href="0372.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0375.php">Ethan Mallove: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0375.php">Ethan Mallove: "Re: [MTT devel] GSOC application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm playing with google datastore now and will send some proposal and
<br>
thoughts.
<br>
<p>On Mon, Mar 23, 2009 at 2:33 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes, I think you're right -- making a &quot;schema&quot; for the datastore might be
</span><br>
<span class="quotelev1">&gt; quite easy.  I'm on travel all this week and likely won't be able to look
</span><br>
<span class="quotelev1">&gt; into this stuff -- can you guys post a proposal and we can dive into it from
</span><br>
<span class="quotelev1">&gt; that angle?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 22, 2009, at 6:48 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hello guys,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I`m not sure if we should preserve current DB schema, from one simple
</span><br>
<span class="quotelev2">&gt;&gt; reason - datastore is an object oriented storage and have different rules
</span><br>
<span class="quotelev2">&gt;&gt; and techniques then rdbms.
</span><br>
<span class="quotelev2">&gt;&gt; The basic storage unit in the datastore is an object which can be saved,
</span><br>
<span class="quotelev2">&gt;&gt; loaded and queried.
</span><br>
<span class="quotelev2">&gt;&gt; (hadoop is based on the same principles, but open source.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that DB model for mtt over datastore should not be complex at
</span><br>
<span class="quotelev2">&gt;&gt; all. The current mtt db schema is mostly optimized for specific queries
</span><br>
<span class="quotelev2">&gt;&gt; dictated by web UI. Datastore creates indexes automatically, based on
</span><br>
<span class="quotelev2">&gt;&gt; submitted queries history.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suggest we discuss/exchange db layout proposals by emails and when we
</span><br>
<span class="quotelev2">&gt;&gt; get to some general understanding how it should look like - we switch to
</span><br>
<span class="quotelev2">&gt;&gt; telepresence.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, It seems not problem at all to get datastore access for existing
</span><br>
<span class="quotelev2">&gt;&gt; gmail account. You get 500MB quota for storage. It takes 5min to start using
</span><br>
<span class="quotelev2">&gt;&gt; it.
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
<span class="quotelev2">&gt;&gt; On Fri, Mar 20, 2009 at 5:38 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
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
<span class="quotelev2">&gt;&gt; highlevel) is that just dump everything in without too much concern about
</span><br>
<span class="quotelev2">&gt;&gt; the structure / &quot;schema&quot;.  But I could be wrong on that.
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
<span class="quotelev2">&gt;&gt; It looks like there is a set that you can use for free.  When you go over
</span><br>
<span class="quotelev2">&gt;&gt; one of several metrics (CPU hours/day, storage, bandwidth in, bandwidth out,
</span><br>
<span class="quotelev2">&gt;&gt; etc.), then you have to start paying.  But even with that, the costs look
</span><br>
<span class="quotelev2">&gt;&gt; *quite* reasonable and should be easily covered by the combined Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; organizations (I'm talking hundreds of dollars here, not tens of thousands).
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
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0374/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0375.php">Ethan Mallove: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0373.php">Josh Hursey: "Re: [MTT devel] GSOC application"</a>
<li><strong>In reply to:</strong> <a href="0372.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0375.php">Ethan Mallove: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0375.php">Ethan Mallove: "Re: [MTT devel] GSOC application"</a>
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
