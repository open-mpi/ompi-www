<?
$subject_val = "Re: [MTT devel] GSOC application";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 22 09:51:49 2009" -->
<!-- isoreceived="20090322135149" -->
<!-- sent="Sun, 22 Mar 2009 15:48:22 +0200" -->
<!-- isosent="20090322134822" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] GSOC application" -->
<!-- id="b20b52800903220648o6677deb8r72e0c13e02c21255_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="988EA7A5-D691-48D0-959C-23B5832FDB2B_at_cisco.com" -->
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
<strong>Date:</strong> 2009-03-22 09:48:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0372.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0370.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1273(Analyze/Performance	plug-ins)"</a>
<li><strong>In reply to:</strong> <a href="0369.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0372.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0372.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello guys,
<br>
<p>I`m not sure if we should preserve current DB schema, from one simple reason
<br>
- datastore is an object oriented storage and have different rules and
<br>
techniques then rdbms.
<br>
The basic storage unit in the datastore is an object which can be saved,
<br>
loaded and queried.
<br>
(hadoop is based on the same principles, but open source.)
<br>
<p>It seems that DB model for mtt over datastore should not be complex at all.
<br>
The current mtt db schema is mostly optimized for specific queries dictated
<br>
by web UI. Datastore creates indexes automatically, based on submitted
<br>
queries history.
<br>
<p>I suggest we discuss/exchange db layout proposals by emails and when we get
<br>
to some general understanding how it should look like - we switch to
<br>
telepresence.
<br>
<p>Also, It seems not problem at all to get datastore access for existing gmail
<br>
account. You get 500MB quota for storage. It takes 5min to start using it.
<br>
<p>Here is some short info for datastore API:
<br>
- howto submit data model to datastore
<br>
- howto save, load, query
<br>
<p><a href="http://code.google.com/appengine/docs/python/gettingstarted/usingdatastore.html">http://code.google.com/appengine/docs/python/gettingstarted/usingdatastore.html</a>
<br>
<p>please comment.
<br>
<p>Thanks
<br>
<p>Mike
<br>
<p>On Fri, Mar 20, 2009 at 5:38 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 20, 2009, at 10:42 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Yeah I think this sounds like a good way to move forward with this
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
<span class="quotelev1">&gt; Yes, it probably would.  My understanding of hadoop (which is very
</span><br>
<span class="quotelev1">&gt; highlevel) is that just dump everything in without too much concern about
</span><br>
<span class="quotelev1">&gt; the structure / &quot;schema&quot;.  But I could be wrong on that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The Google Apps account is under my personal Google account, so I'm
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like there is a set that you can use for free.  When you go over
</span><br>
<span class="quotelev1">&gt; one of several metrics (CPU hours/day, storage, bandwidth in, bandwidth out,
</span><br>
<span class="quotelev1">&gt; etc.), then you have to start paying.  But even with that, the costs look
</span><br>
<span class="quotelev1">&gt; *quite* reasonable and should be easily covered by the combined Open MPI
</span><br>
<span class="quotelev1">&gt; organizations (I'm talking hundreds of dollars here, not tens of thousands).
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0371/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0372.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0370.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1273(Analyze/Performance	plug-ins)"</a>
<li><strong>In reply to:</strong> <a href="0369.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0372.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0372.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
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
