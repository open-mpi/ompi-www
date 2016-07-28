<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  8 20:04:02 2006" -->
<!-- isoreceived="20061109010402" -->
<!-- sent="Wed, 8 Nov 2006 20:03:52 -0500" -->
<!-- isosent="20061109010352" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] nightly OMPI tarballs" -->
<!-- id="80F7546E-673E-45E3-8EA3-DB116ED26DE3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220611080934v33f6812dh6e1a4e0b9928c7f8_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-11-08 20:03:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0217.php">Ethan Mallove: "[MTT users] New MTT home page"</a>
<li><strong>Previous message:</strong> <a href="0215.php">Brian W. Barrett: "Re: [MTT users] nightly OMPI tarballs"</a>
<li><strong>In reply to:</strong> <a href="0214.php">Tim Mattox: "Re: [MTT users] nightly OMPI tarballs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0229.php">Tim Mattox: "Re: [MTT users] nightly OMPI tarballs"</a>
<li><strong>Reply:</strong> <a href="0229.php">Tim Mattox: "Re: [MTT users] nightly OMPI tarballs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How about the following:
<br>
<p>1. Move to earlier, such as 9pm US eastern (want to see what west  
<br>
coasters think of this, but I'm betting they don't care).  This can  
<br>
be done more-or-less immediately.
<br>
<p>2. We implement MTT ticket #126 (will require some help from the  
<br>
server-side tarball generation, but will be pretty easy).  This will  
<br>
definitely need to wait until post-SC.
<br>
<p><p><p>On Nov 8, 2006, at 12:34 PM, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; It would help us here at IU for MTT as well if the tarball  
</span><br>
<span class="quotelev1">&gt; generation was a
</span><br>
<span class="quotelev1">&gt; little earlier each day.  9pm Indiana/Eastern time would be good I  
</span><br>
<span class="quotelev1">&gt; think.
</span><br>
<span class="quotelev1">&gt; That would make it 6pm West coast time...  Does that work for
</span><br>
<span class="quotelev1">&gt; the West coasters?  or should we do 10pm Eastern/7pm West?
</span><br>
<span class="quotelev1">&gt; Gleb, George, hpcstork, as three that I know do svn commits outside  
</span><br>
<span class="quotelev1">&gt; the typical
</span><br>
<span class="quotelev1">&gt; US workday, how would this affect you?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe we could make the non-trunk tarballs even earlier, since
</span><br>
<span class="quotelev1">&gt; the gatekeepers would know when we were &quot;done for the day&quot;.
</span><br>
<span class="quotelev1">&gt; What time would Sun need to have the 1.2 tarballs ready
</span><br>
<span class="quotelev1">&gt; for them to do their MTT runs?  7pm Eastern?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can work on making the tarball generation go more quickly,
</span><br>
<span class="quotelev1">&gt; but I suspect I can't get it reliably faster than 1 hour,  
</span><br>
<span class="quotelev1">&gt; especially if
</span><br>
<span class="quotelev1">&gt; we have changes on all three branches (trunk, v1.1, v1.2).
</span><br>
<span class="quotelev1">&gt; I have some ideas on how to speed it up though from it's
</span><br>
<span class="quotelev1">&gt; current 2 hour span.  One of the ideas, is to have the v1.2 (and  
</span><br>
<span class="quotelev1">&gt; maybe v1.1)
</span><br>
<span class="quotelev1">&gt; tarballs be built earlier, so that we only have one tarball to build
</span><br>
<span class="quotelev1">&gt; at the designated time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for doing multiple builds per day, I am a bit apposed to doing that
</span><br>
<span class="quotelev1">&gt; on a regular basis, for two reasons:
</span><br>
<span class="quotelev1">&gt; 1) It takes time &amp; resources (both human and computer) per tarball
</span><br>
<span class="quotelev1">&gt; for testing, and to look at the results from the testing.  One set per
</span><br>
<span class="quotelev1">&gt; day seems at the moment to be what we as a group can currently handle.
</span><br>
<span class="quotelev1">&gt; 2) If we have different groups testing from different tarball sets,
</span><br>
<span class="quotelev1">&gt; then it would become harder to aggregate the testing results,
</span><br>
<span class="quotelev1">&gt; since we would not necessarily be testing the same tarball.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/8/06, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm wondering if it's worthwhile to either a) move back the nightly
</span><br>
<span class="quotelev2">&gt;&gt; tarball generation to, say, 9pm US Indiana time or b) perhaps make
</span><br>
<span class="quotelev2">&gt;&gt; the tarballs at multiple times during the day.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since we're doing more and more testing, it seems like we need more
</span><br>
<span class="quotelev2">&gt;&gt; time to do it before the 9am reports.  Right now, we're pretty
</span><br>
<span class="quotelev2">&gt;&gt; limited to starting at about 2am (to guarantee that the tarballs have
</span><br>
<span class="quotelev2">&gt;&gt; finished building).  If you start before then, you could be testing a
</span><br>
<span class="quotelev2">&gt;&gt; tarball that's about a day old.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This was happening to sun, for example, who (I just found out) starts
</span><br>
<span class="quotelev2">&gt;&gt; their testing at 7pm because they have limited time and access to
</span><br>
<span class="quotelev2">&gt;&gt; resources (starting at 7pm lets them finish all their testing by  
</span><br>
<span class="quotelev2">&gt;&gt; 9am).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So what do people think about my proposals from above?  Either 9pm,
</span><br>
<span class="quotelev2">&gt;&gt; or perhaps make them every 6 hours throughout the day.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;  tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0217.php">Ethan Mallove: "[MTT users] New MTT home page"</a>
<li><strong>Previous message:</strong> <a href="0215.php">Brian W. Barrett: "Re: [MTT users] nightly OMPI tarballs"</a>
<li><strong>In reply to:</strong> <a href="0214.php">Tim Mattox: "Re: [MTT users] nightly OMPI tarballs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0229.php">Tim Mattox: "Re: [MTT users] nightly OMPI tarballs"</a>
<li><strong>Reply:</strong> <a href="0229.php">Tim Mattox: "Re: [MTT users] nightly OMPI tarballs"</a>
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
