<?
$subject_val = "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklockingserver	*REVIEW NEEDED*";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 18 16:13:22 2010" -->
<!-- isoreceived="20100218211322" -->
<!-- sent="Thu, 18 Feb 2010 16:13:15 -0500" -->
<!-- isosent="20100218211315" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklockingserver	*REVIEW NEEDED*" -->
<!-- id="CE646745-CA4A-4E8B-860F-8981B6293201_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100218154849.GE18474_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklockingserver	*REVIEW NEEDED*<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-18 16:13:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0724.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklockingserver	*REVIEW NEEDED*"</a>
<li><strong>Previous message:</strong> <a href="0722.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklocking server	*REVIEW NEEDED*"</a>
<li><strong>In reply to:</strong> <a href="0722.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklocking server	*REVIEW NEEDED*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0724.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklockingserver	*REVIEW NEEDED*"</a>
<li><strong>Reply:</strong> <a href="0724.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklockingserver	*REVIEW NEEDED*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 18, 2010, at 10:48 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; To ensure there is never a collision between $a-&gt;{k} and $b-&gt;{k}, the
</span><br>
<span class="quotelev1">&gt; user can have two MTT clients share a $scratch, but they cannot both
</span><br>
<span class="quotelev1">&gt; run the same INI section simultaneously.  I setup my scheduler to run
</span><br>
<span class="quotelev1">&gt; batches of MPI get, MPI install, Test get, Test build, and Test run
</span><br>
<span class="quotelev1">&gt; sections in parallel with successor INI sections dependent on their
</span><br>
<span class="quotelev1">&gt; predecessor INI sections (e.g., [Test run: foo] only runs after [Test
</span><br>
<span class="quotelev1">&gt; build: foo] completes).  The limitation stinks, but the current
</span><br>
<span class="quotelev1">&gt; limitation is much worse: two MTT clients can't even run the same
</span><br>
<span class="quotelev1">&gt; *phase* out of one $scratch.
</span><br>
<p>Maybe it might be a little nicer just to protect the user from themselves -- if we ever detect a case where $a-&gt;{k} and $b-&gt;{k} both exist and are not the same value, dump out everything to a file and abort with an error message.  This is clearly an erroneous situation, but running MTT in big parallel batches like this is a worthwhile-but-complicated endeavor, and some people are likely to get it wrong.  So we should at least detect the situation and fail gracefully, rather than losing or corrupting results.
<br>
<p>Make sense?
<br>
<p><span class="quotelev1">&gt; I originally wanted the .dump files to be completely safe, but MTT
</span><br>
<span class="quotelev1">&gt; clients were getting locked out of the .dump files for way too long.
</span><br>
<span class="quotelev1">&gt; E.g., MTT::MPI::LoadInstalls happens very early in client/mtt, and an
</span><br>
<span class="quotelev1">&gt; hour could elapse before MTT::MPI::SaveInstalls is called in
</span><br>
<span class="quotelev1">&gt; Install.pm.
</span><br>
<p>Yep, if you lock from load-&gt;save, then that can definitely happen...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0724.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklockingserver	*REVIEW NEEDED*"</a>
<li><strong>Previous message:</strong> <a href="0722.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklocking server	*REVIEW NEEDED*"</a>
<li><strong>In reply to:</strong> <a href="0722.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklocking server	*REVIEW NEEDED*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0724.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklockingserver	*REVIEW NEEDED*"</a>
<li><strong>Reply:</strong> <a href="0724.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklockingserver	*REVIEW NEEDED*"</a>
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
