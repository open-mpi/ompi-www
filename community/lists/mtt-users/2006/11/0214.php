<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  8 12:34:54 2006" -->
<!-- isoreceived="20061108173454" -->
<!-- sent="Wed, 8 Nov 2006 12:34:37 -0500" -->
<!-- isosent="20061108173437" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [MTT users] nightly OMPI tarballs" -->
<!-- id="ea86ce220611080934v33f6812dh6e1a4e0b9928c7f8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5AC7CD91-7E9D-49F3-9240-739F46A35C9B_at_cisco.com" -->
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
<strong>Date:</strong> 2006-11-08 12:34:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0215.php">Brian W. Barrett: "Re: [MTT users] nightly OMPI tarballs"</a>
<li><strong>Previous message:</strong> <a href="0213.php">Jeff Squyres: "[MTT users] nightly OMPI tarballs"</a>
<li><strong>In reply to:</strong> <a href="0213.php">Jeff Squyres: "[MTT users] nightly OMPI tarballs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0216.php">Jeff Squyres: "Re: [MTT users] nightly OMPI tarballs"</a>
<li><strong>Reply:</strong> <a href="0216.php">Jeff Squyres: "Re: [MTT users] nightly OMPI tarballs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It would help us here at IU for MTT as well if the tarball generation was a
<br>
little earlier each day.  9pm Indiana/Eastern time would be good I think.
<br>
That would make it 6pm West coast time...  Does that work for
<br>
the West coasters?  or should we do 10pm Eastern/7pm West?
<br>
Gleb, George, hpcstork, as three that I know do svn commits outside the typical
<br>
US workday, how would this affect you?
<br>
<p>Maybe we could make the non-trunk tarballs even earlier, since
<br>
the gatekeepers would know when we were &quot;done for the day&quot;.
<br>
What time would Sun need to have the 1.2 tarballs ready
<br>
for them to do their MTT runs?  7pm Eastern?
<br>
<p>I can work on making the tarball generation go more quickly,
<br>
but I suspect I can't get it reliably faster than 1 hour, especially if
<br>
we have changes on all three branches (trunk, v1.1, v1.2).
<br>
I have some ideas on how to speed it up though from it's
<br>
current 2 hour span.  One of the ideas, is to have the v1.2 (and maybe v1.1)
<br>
tarballs be built earlier, so that we only have one tarball to build
<br>
at the designated time.
<br>
<p>As for doing multiple builds per day, I am a bit apposed to doing that
<br>
on a regular basis, for two reasons:
<br>
1) It takes time &amp; resources (both human and computer) per tarball
<br>
for testing, and to look at the results from the testing.  One set per
<br>
day seems at the moment to be what we as a group can currently handle.
<br>
2) If we have different groups testing from different tarball sets,
<br>
then it would become harder to aggregate the testing results,
<br>
since we would not necessarily be testing the same tarball.
<br>
<p>On 11/8/06, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I'm wondering if it's worthwhile to either a) move back the nightly
</span><br>
<span class="quotelev1">&gt; tarball generation to, say, 9pm US Indiana time or b) perhaps make
</span><br>
<span class="quotelev1">&gt; the tarballs at multiple times during the day.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since we're doing more and more testing, it seems like we need more
</span><br>
<span class="quotelev1">&gt; time to do it before the 9am reports.  Right now, we're pretty
</span><br>
<span class="quotelev1">&gt; limited to starting at about 2am (to guarantee that the tarballs have
</span><br>
<span class="quotelev1">&gt; finished building).  If you start before then, you could be testing a
</span><br>
<span class="quotelev1">&gt; tarball that's about a day old.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This was happening to sun, for example, who (I just found out) starts
</span><br>
<span class="quotelev1">&gt; their testing at 7pm because they have limited time and access to
</span><br>
<span class="quotelev1">&gt; resources (starting at 7pm lets them finish all their testing by 9am).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So what do people think about my proposals from above?  Either 9pm,
</span><br>
<span class="quotelev1">&gt; or perhaps make them every 6 hours throughout the day.
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
<li><strong>Next message:</strong> <a href="0215.php">Brian W. Barrett: "Re: [MTT users] nightly OMPI tarballs"</a>
<li><strong>Previous message:</strong> <a href="0213.php">Jeff Squyres: "[MTT users] nightly OMPI tarballs"</a>
<li><strong>In reply to:</strong> <a href="0213.php">Jeff Squyres: "[MTT users] nightly OMPI tarballs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0216.php">Jeff Squyres: "Re: [MTT users] nightly OMPI tarballs"</a>
<li><strong>Reply:</strong> <a href="0216.php">Jeff Squyres: "Re: [MTT users] nightly OMPI tarballs"</a>
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
