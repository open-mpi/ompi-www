<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep  5 10:04:10 2006" -->
<!-- isoreceived="20060905140410" -->
<!-- sent="Tue, 5 Sep 2006 10:04:06 -0400" -->
<!-- isosent="20060905140406" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT users] How's it going?" -->
<!-- id="C9F6D824-4977-4ED6-AE8A-E86014F4FC38_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C122E93A.25608%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-05 10:04:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0084.php">Jeff Squyres: "Re: [MTT users] How's it going?"</a>
<li><strong>Previous message:</strong> <a href="0082.php">Jeff Squyres: "[MTT users] How's it going?"</a>
<li><strong>In reply to:</strong> <a href="0082.php">Jeff Squyres: "[MTT users] How's it going?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0084.php">Jeff Squyres: "Re: [MTT users] How's it going?"</a>
<li><strong>Reply:</strong> <a href="0084.php">Jeff Squyres: "Re: [MTT users] How's it going?"</a>
<li><strong>Reply:</strong> <a href="0085.php">Ethan A Mallove - Sun Microsystems: "Re: [MTT users] How's it going?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 5, 2006, at 8:43 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; IU / HLRS -- How's it going?  I see a bunch of submits from you  
</span><br>
<span class="quotelev1">&gt; guys in the
</span><br>
<span class="quotelev1">&gt; database, so I assume things are running smoothly.  But let me know  
</span><br>
<span class="quotelev1">&gt; one way
</span><br>
<span class="quotelev1">&gt; or another.
</span><br>
<p>IU is setup and running on our Odin cluster.
<br>
<p>Nightly we run 8 nodes (16 procs):
<br>
&nbsp;&nbsp;&nbsp;trunk,v1.2 (gcc)
<br>
&nbsp;&nbsp;&nbsp;IBM,Trivial,Intel,IMB
<br>
&nbsp;&nbsp;&nbsp;Currently just using tcp,self (due to some cluster mgmt issues)
<br>
<p>Weekly we run 32 nodes (64 procs):
<br>
&nbsp;&nbsp;&nbsp;Same configuration as the nightly
<br>
<p>We are still doing some local debugging (not MTT issues really, just  
<br>
cluster stuff) so commits to the MTT DB may come a bit more  
<br>
frequently now then they would normally.
<br>
<p>We may have some other clusters coming online in the future, but we  
<br>
can't give specifics at the moment.
<br>
<p>I have been putting any bugs I see into Trac as they popup (sorry for  
<br>
duplicates).
<br>
<p>It seems that the DB 'cleans' itself every so often. Meaning that I  
<br>
notice that runs from a week or so ago are no longer in the summary  
<br>
page. Is this true? How often does it do this?
<br>
<p>Cheers for all the hard work. This is looking really nice and useful.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have a bunch of improvements waiting in the wings:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. The version that you are using makes N connections to the IU web  
</span><br>
<span class="quotelev1">&gt; server
</span><br>
<span class="quotelev1">&gt; to submit N results (i.e., one connection per result).  This is not a
</span><br>
<span class="quotelev1">&gt; problem for many people, but I kept getting cutoff by the Cisco web  
</span><br>
<span class="quotelev1">&gt; proxies
</span><br>
<span class="quotelev1">&gt; because they thought MTT was a worm.  So I implemented &quot;bulk submit&quot;,
</span><br>
<span class="quotelev1">&gt; meaning that results are gathered up (essentially a test run  
</span><br>
<span class="quotelev1">&gt; section at a
</span><br>
<span class="quotelev1">&gt; time) and submitted in one connection to the database.  Not only  
</span><br>
<span class="quotelev1">&gt; does this
</span><br>
<span class="quotelev1">&gt; make MTT not look like a worm, it's a bit more efficient (which is  
</span><br>
<span class="quotelev1">&gt; not a
</span><br>
<span class="quotelev1">&gt; necessarily primary concern, but it is a Good Thing).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We need to coordinate when to deploy this to you because it affects  
</span><br>
<span class="quotelev1">&gt; both the
</span><br>
<span class="quotelev1">&gt; &quot;mtt&quot; client and the PHP at the URL that you are submitting to.  More
</span><br>
<span class="quotelev1">&gt; details to come on this.  I realize that you guys apparently don't  
</span><br>
<span class="quotelev1">&gt; *need*
</span><br>
<span class="quotelev1">&gt; this, but a) I do, and b) others might when we deploy MTT to the  
</span><br>
<span class="quotelev1">&gt; entire
</span><br>
<span class="quotelev1">&gt; group.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Various bug fixes have been committed to the release branch over  
</span><br>
<span class="quotelev1">&gt; the last
</span><br>
<span class="quotelev1">&gt; week as a direct result of your feedback.  Keep the comments coming!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Sun is actively working on reporting the data in spiffy web  
</span><br>
<span class="quotelev1">&gt; pages.  Stay
</span><br>
<span class="quotelev1">&gt; tuned on this front.
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
<li><strong>Next message:</strong> <a href="0084.php">Jeff Squyres: "Re: [MTT users] How's it going?"</a>
<li><strong>Previous message:</strong> <a href="0082.php">Jeff Squyres: "[MTT users] How's it going?"</a>
<li><strong>In reply to:</strong> <a href="0082.php">Jeff Squyres: "[MTT users] How's it going?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0084.php">Jeff Squyres: "Re: [MTT users] How's it going?"</a>
<li><strong>Reply:</strong> <a href="0084.php">Jeff Squyres: "Re: [MTT users] How's it going?"</a>
<li><strong>Reply:</strong> <a href="0085.php">Ethan A Mallove - Sun Microsystems: "Re: [MTT users] How's it going?"</a>
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
