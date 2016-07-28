<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 21 14:40:57 2006" -->
<!-- isoreceived="20061121194057" -->
<!-- sent="Tue, 21 Nov 2006 14:40:51 -0500" -->
<!-- isosent="20061121194051" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [MTT users] nightly OMPI tarballs" -->
<!-- id="ea86ce220611211140l79ea50f9j2da9b1f9b7dcbc2c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="80F7546E-673E-45E3-8EA3-DB116ED26DE3_at_cisco.com" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-21 14:40:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0230.php">Jeff Squyres: "Re: [MTT users] nightly OMPI tarballs"</a>
<li><strong>Previous message:</strong> <a href="0228.php">Jeff Squyres: "[MTT users] Updates to ini files"</a>
<li><strong>In reply to:</strong> <a href="0216.php">Jeff Squyres: "Re: [MTT users] nightly OMPI tarballs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0230.php">Jeff Squyres: "Re: [MTT users] nightly OMPI tarballs"</a>
<li><strong>Reply:</strong> <a href="0230.php">Jeff Squyres: "Re: [MTT users] nightly OMPI tarballs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,
<br>
I have moved the nightly tarball generation to start at 9pm US eastern time.
<br>
At current tarball creation times, it is safe to grab fresh tarballs by 10:30pm
<br>
assuming we have no more than three (trunk, v1.1, v1.2) that are queued for
<br>
generation.  If you want to live on the edge, they currently take about 23-25
<br>
minutes each to make...
<br>
<p>Happy thanksgiving!
<br>
<p>P.S. - If anyone would care to investigate a way to improve the tar build time,
<br>
please take a look at the contrib/nightly/create_tarball.sh script
<br>
which is in the trunk's SVN that is used to perform this nightly ritual.
<br>
The bulk of the time is spent in these three commands:
<br>
&nbsp;&nbsp;autogen.sh
<br>
&nbsp;&nbsp;configure
<br>
&nbsp;&nbsp;make -j 4 distcheck
<br>
But there is some inefficiency afterwards in the generation of the
<br>
md5sum &amp; sha1sum, since it recomputes them for each tarfile found
<br>
in the destination directory (the web dowload page), not just for the new
<br>
tarfile.
<br>
<p><p>On 11/8/06, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; How about the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Move to earlier, such as 9pm US eastern (want to see what west
</span><br>
<span class="quotelev1">&gt; coasters think of this, but I'm betting they don't care).  This can
</span><br>
<span class="quotelev1">&gt; be done more-or-less immediately.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. We implement MTT ticket #126 (will require some help from the
</span><br>
<span class="quotelev1">&gt; server-side tarball generation, but will be pretty easy).  This will
</span><br>
<span class="quotelev1">&gt; definitely need to wait until post-SC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 8, 2006, at 12:34 PM, Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; It would help us here at IU for MTT as well if the tarball
</span><br>
<span class="quotelev2">&gt; &gt; generation was a
</span><br>
<span class="quotelev2">&gt; &gt; little earlier each day.  9pm Indiana/Eastern time would be good I
</span><br>
<span class="quotelev2">&gt; &gt; think.
</span><br>
<span class="quotelev2">&gt; &gt; That would make it 6pm West coast time...  Does that work for
</span><br>
<span class="quotelev2">&gt; &gt; the West coasters?  or should we do 10pm Eastern/7pm West?
</span><br>
<span class="quotelev2">&gt; &gt; Gleb, George, hpcstork, as three that I know do svn commits outside
</span><br>
<span class="quotelev2">&gt; &gt; the typical
</span><br>
<span class="quotelev2">&gt; &gt; US workday, how would this affect you?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Maybe we could make the non-trunk tarballs even earlier, since
</span><br>
<span class="quotelev2">&gt; &gt; the gatekeepers would know when we were &quot;done for the day&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; What time would Sun need to have the 1.2 tarballs ready
</span><br>
<span class="quotelev2">&gt; &gt; for them to do their MTT runs?  7pm Eastern?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can work on making the tarball generation go more quickly,
</span><br>
<span class="quotelev2">&gt; &gt; but I suspect I can't get it reliably faster than 1 hour,
</span><br>
<span class="quotelev2">&gt; &gt; especially if
</span><br>
<span class="quotelev2">&gt; &gt; we have changes on all three branches (trunk, v1.1, v1.2).
</span><br>
<span class="quotelev2">&gt; &gt; I have some ideas on how to speed it up though from it's
</span><br>
<span class="quotelev2">&gt; &gt; current 2 hour span.  One of the ideas, is to have the v1.2 (and
</span><br>
<span class="quotelev2">&gt; &gt; maybe v1.1)
</span><br>
<span class="quotelev2">&gt; &gt; tarballs be built earlier, so that we only have one tarball to build
</span><br>
<span class="quotelev2">&gt; &gt; at the designated time.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As for doing multiple builds per day, I am a bit apposed to doing that
</span><br>
<span class="quotelev2">&gt; &gt; on a regular basis, for two reasons:
</span><br>
<span class="quotelev2">&gt; &gt; 1) It takes time &amp; resources (both human and computer) per tarball
</span><br>
<span class="quotelev2">&gt; &gt; for testing, and to look at the results from the testing.  One set per
</span><br>
<span class="quotelev2">&gt; &gt; day seems at the moment to be what we as a group can currently handle.
</span><br>
<span class="quotelev2">&gt; &gt; 2) If we have different groups testing from different tarball sets,
</span><br>
<span class="quotelev2">&gt; &gt; then it would become harder to aggregate the testing results,
</span><br>
<span class="quotelev2">&gt; &gt; since we would not necessarily be testing the same tarball.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 11/8/06, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm wondering if it's worthwhile to either a) move back the nightly
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tarball generation to, say, 9pm US Indiana time or b) perhaps make
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the tarballs at multiple times during the day.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Since we're doing more and more testing, it seems like we need more
</span><br>
<span class="quotelev3">&gt; &gt;&gt; time to do it before the 9am reports.  Right now, we're pretty
</span><br>
<span class="quotelev3">&gt; &gt;&gt; limited to starting at about 2am (to guarantee that the tarballs have
</span><br>
<span class="quotelev3">&gt; &gt;&gt; finished building).  If you start before then, you could be testing a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tarball that's about a day old.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This was happening to sun, for example, who (I just found out) starts
</span><br>
<span class="quotelev3">&gt; &gt;&gt; their testing at 7pm because they have limited time and access to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; resources (starting at 7pm lets them finish all their testing by
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 9am).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So what do people think about my proposals from above?  Either 9pm,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; or perhaps make them every 6 hours throughout the day.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Tim Mattox - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev2">&gt; &gt;  tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;     I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Tim Mattox - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0230.php">Jeff Squyres: "Re: [MTT users] nightly OMPI tarballs"</a>
<li><strong>Previous message:</strong> <a href="0228.php">Jeff Squyres: "[MTT users] Updates to ini files"</a>
<li><strong>In reply to:</strong> <a href="0216.php">Jeff Squyres: "Re: [MTT users] nightly OMPI tarballs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0230.php">Jeff Squyres: "Re: [MTT users] nightly OMPI tarballs"</a>
<li><strong>Reply:</strong> <a href="0230.php">Jeff Squyres: "Re: [MTT users] nightly OMPI tarballs"</a>
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
