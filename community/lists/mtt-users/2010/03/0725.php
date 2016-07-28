<?
$subject_val = "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklockingserver	*REVIEW NEEDED*";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 14:05:14 2010" -->
<!-- isoreceived="20100305190514" -->
<!-- sent="Fri, 5 Mar 2010 14:05:08 -0500" -->
<!-- isosent="20100305190508" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklockingserver	*REVIEW NEEDED*" -->
<!-- id="20100305190507.GA39749_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100219170055.GF18474_at_sun.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 14:05:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0726.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Genericnetworklockingserver	*REVIEW NEEDED*"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2010/02/0724.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklockingserver	*REVIEW NEEDED*"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2010/02/0724.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklockingserver	*REVIEW NEEDED*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0726.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Genericnetworklockingserver	*REVIEW NEEDED*"</a>
<li><strong>Reply:</strong> <a href="0726.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Genericnetworklockingserver	*REVIEW NEEDED*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Feb/19/2010 12:00:55PM, Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; On Thu, Feb/18/2010 04:13:15PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 18, 2010, at 10:48 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To ensure there is never a collision between $a-&gt;{k} and $b-&gt;{k}, the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; user can have two MTT clients share a $scratch, but they cannot both
</span><br>
<span class="quotelev3">&gt; &gt; &gt; run the same INI section simultaneously.  I setup my scheduler to run
</span><br>
<span class="quotelev3">&gt; &gt; &gt; batches of MPI get, MPI install, Test get, Test build, and Test run
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sections in parallel with successor INI sections dependent on their
</span><br>
<span class="quotelev3">&gt; &gt; &gt; predecessor INI sections (e.g., [Test run: foo] only runs after [Test
</span><br>
<span class="quotelev3">&gt; &gt; &gt; build: foo] completes).  The limitation stinks, but the current
</span><br>
<span class="quotelev3">&gt; &gt; &gt; limitation is much worse: two MTT clients can't even run the same
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *phase* out of one $scratch.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Maybe it might be a little nicer just to protect the user from
</span><br>
<span class="quotelev2">&gt; &gt; themselves -- if we ever detect a case where $a-&gt;{k} and $b-&gt;{k}
</span><br>
<span class="quotelev2">&gt; &gt; both exist and are not the same value, dump out everything to a file
</span><br>
<span class="quotelev2">&gt; &gt; and abort with an error message.  This is clearly an erroneous
</span><br>
<span class="quotelev2">&gt; &gt; situation, but running MTT in big parallel batches like this is a
</span><br>
<span class="quotelev2">&gt; &gt; worthwhile-but-complicated endeavor, and some people are likely to
</span><br>
<span class="quotelev2">&gt; &gt; get it wrong.  So we should at least detect the situation and fail
</span><br>
<span class="quotelev2">&gt; &gt; gracefully, rather than losing or corrupting results.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Make sense?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.  I'll add this.
</span><br>
<p>The check is there now.  Ready for review.
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I originally wanted the .dump files to be completely safe, but MTT
</span><br>
<span class="quotelev3">&gt; &gt; &gt; clients were getting locked out of the .dump files for way too long.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; E.g., MTT::MPI::LoadInstalls happens very early in client/mtt, and an
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hour could elapse before MTT::MPI::SaveInstalls is called in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Install.pm.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yep, if you lock from load-&gt;save, then that can definitely happen...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0725/mtt-safe-dump-files-2.diff">mtt-safe-dump-files-2.diff</a>
</ul>
<!-- attachment="mtt-safe-dump-files-2.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0726.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Genericnetworklockingserver	*REVIEW NEEDED*"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2010/02/0724.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklockingserver	*REVIEW NEEDED*"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2010/02/0724.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklockingserver	*REVIEW NEEDED*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0726.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Genericnetworklockingserver	*REVIEW NEEDED*"</a>
<li><strong>Reply:</strong> <a href="0726.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Genericnetworklockingserver	*REVIEW NEEDED*"</a>
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
