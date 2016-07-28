<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  6 03:26:18 2006" -->
<!-- isoreceived="20060906072618" -->
<!-- sent="Tue, 05 Sep 2006 10:19:34 -0400" -->
<!-- isosent="20060905141934" -->
<!-- name="Ethan A Mallove - Sun Microsystems" -->
<!-- email="Ethan.Mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] How's it going?" -->
<!-- id="44FD8776.1060107_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C9F6D824-4977-4ED6-AE8A-E86014F4FC38_at_open-mpi.org" -->
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
<strong>From:</strong> Ethan A Mallove - Sun Microsystems (<em>Ethan.Mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-05 10:19:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0086.php">Josh Hursey: "[MTT users] Distinct Steps"</a>
<li><strong>Previous message:</strong> <a href="0084.php">Jeff Squyres: "Re: [MTT users] How's it going?"</a>
<li><strong>In reply to:</strong> <a href="0083.php">Josh Hursey: "Re: [MTT users] How's it going?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh Hursey wrote On 09/05/06 10:04,:
<br>
<span class="quotelev1">&gt; On Sep 5, 2006, at 8:43 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;IU / HLRS -- How's it going?  I see a bunch of submits from you  
</span><br>
<span class="quotelev2">&gt;&gt;guys in the
</span><br>
<span class="quotelev2">&gt;&gt;database, so I assume things are running smoothly.  But let me know  
</span><br>
<span class="quotelev2">&gt;&gt;one way
</span><br>
<span class="quotelev2">&gt;&gt;or another.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IU is setup and running on our Odin cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nightly we run 8 nodes (16 procs):
</span><br>
<span class="quotelev1">&gt;    trunk,v1.2 (gcc)
</span><br>
<span class="quotelev1">&gt;    IBM,Trivial,Intel,IMB
</span><br>
<span class="quotelev1">&gt;    Currently just using tcp,self (due to some cluster mgmt issues)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Weekly we run 32 nodes (64 procs):
</span><br>
<span class="quotelev1">&gt;    Same configuration as the nightly
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are still doing some local debugging (not MTT issues really, just  
</span><br>
<span class="quotelev1">&gt; cluster stuff) so commits to the MTT DB may come a bit more  
</span><br>
<span class="quotelev1">&gt; frequently now then they would normally.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We may have some other clusters coming online in the future, but we  
</span><br>
<span class="quotelev1">&gt; can't give specifics at the moment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been putting any bugs I see into Trac as they popup (sorry for  
</span><br>
<span class="quotelev1">&gt; duplicates).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that the DB 'cleans' itself every so often. Meaning that I  
</span><br>
<span class="quotelev1">&gt; notice that runs from a week or so ago are no longer in the summary  
</span><br>
<span class="quotelev1">&gt; page. Is this true? How often does it do this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>summary.php only shows results from yesterday through &quot;now&quot;. The data submitted
<br>
before that is not deleted, just not shown. We have a drill-down tool in the
<br>
works which will allow for more flexibility wrt a bunch of parameters.
<br>
<p><p><span class="quotelev1">&gt; Cheers for all the hard work. This is looking really nice and useful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>That's what we like to hear - thanks!
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;We have a bunch of improvements waiting in the wings:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;1. The version that you are using makes N connections to the IU web  
</span><br>
<span class="quotelev2">&gt;&gt;server
</span><br>
<span class="quotelev2">&gt;&gt;to submit N results (i.e., one connection per result).  This is not a
</span><br>
<span class="quotelev2">&gt;&gt;problem for many people, but I kept getting cutoff by the Cisco web  
</span><br>
<span class="quotelev2">&gt;&gt;proxies
</span><br>
<span class="quotelev2">&gt;&gt;because they thought MTT was a worm.  So I implemented &quot;bulk submit&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;meaning that results are gathered up (essentially a test run  
</span><br>
<span class="quotelev2">&gt;&gt;section at a
</span><br>
<span class="quotelev2">&gt;&gt;time) and submitted in one connection to the database.  Not only  
</span><br>
<span class="quotelev2">&gt;&gt;does this
</span><br>
<span class="quotelev2">&gt;&gt;make MTT not look like a worm, it's a bit more efficient (which is  
</span><br>
<span class="quotelev2">&gt;&gt;not a
</span><br>
<span class="quotelev2">&gt;&gt;necessarily primary concern, but it is a Good Thing).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;We need to coordinate when to deploy this to you because it affects  
</span><br>
<span class="quotelev2">&gt;&gt;both the
</span><br>
<span class="quotelev2">&gt;&gt;&quot;mtt&quot; client and the PHP at the URL that you are submitting to.  More
</span><br>
<span class="quotelev2">&gt;&gt;details to come on this.  I realize that you guys apparently don't  
</span><br>
<span class="quotelev2">&gt;&gt;*need*
</span><br>
<span class="quotelev2">&gt;&gt;this, but a) I do, and b) others might when we deploy MTT to the  
</span><br>
<span class="quotelev2">&gt;&gt;entire
</span><br>
<span class="quotelev2">&gt;&gt;group.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;2. Various bug fixes have been committed to the release branch over  
</span><br>
<span class="quotelev2">&gt;&gt;the last
</span><br>
<span class="quotelev2">&gt;&gt;week as a direct result of your feedback.  Keep the comments coming!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;3. Sun is actively working on reporting the data in spiffy web  
</span><br>
<span class="quotelev2">&gt;&gt;pages.  Stay
</span><br>
<span class="quotelev2">&gt;&gt;tuned on this front.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-- 
</span><br>
<span class="quotelev2">&gt;&gt;Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt;&gt;Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0086.php">Josh Hursey: "[MTT users] Distinct Steps"</a>
<li><strong>Previous message:</strong> <a href="0084.php">Jeff Squyres: "Re: [MTT users] How's it going?"</a>
<li><strong>In reply to:</strong> <a href="0083.php">Josh Hursey: "Re: [MTT users] How's it going?"</a>
<!-- nextthread="start" -->
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
