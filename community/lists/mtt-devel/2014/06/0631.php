<?
$subject_val = "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 09:48:11 2014" -->
<!-- isoreceived="20140623134811" -->
<!-- sent="Mon, 23 Jun 2014 16:48:10 +0300" -->
<!-- isosent="20140623134810" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594" -->
<!-- id="CAAO1KyYPj+ZRLjutfe_UQzeGceojW1rFMjRGkr3dp7ApLkiNfQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAO1Kyb2PtxSzQp9FL-Dk7E-6=rcB_wS96qhK7HEVMbK0NXHCA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-23 09:48:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0632.php">Dave Goodell (dgoodell): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>Previous message:</strong> <a href="0630.php">Mike Dubman: "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>In reply to:</strong> <a href="0630.php">Mike Dubman: "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0632.php">Dave Goodell (dgoodell): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>Reply:</strong> <a href="0632.php">Dave Goodell (dgoodell): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
btw, i think now, when parent process is killed before child, OS makes
<br>
child as &quot;&lt;defunct&gt;&quot; which stick around for good.
<br>
<p><p>On Mon, Jun 23, 2014 at 4:11 PM, Mike Dubman &lt;miked_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; it seems that mpirun got no signal (no evidence in the log). mtt was
</span><br>
<span class="quotelev1">&gt; spinning and mpirun was a only process who left on the node.
</span><br>
<span class="quotelev1">&gt; It was unclear why mtt did not kill mpirun.
</span><br>
<span class="quotelev1">&gt; will try to extract perl stacktrace from mtt on tomorrow`s nightly run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 23, 2014 at 2:59 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 23, 2014, at 7:47 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; after patch, it killed child processes but kept mpirun ... itself.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What does that mean -- are you saying that mpirun is still running?  Was
</span><br>
<span class="quotelev2">&gt;&gt; mpirun sent a signal at all?  What kind of messages are being displayed?
</span><br>
<span class="quotelev2">&gt;&gt;  ...etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The commits fix important bugs for me and others.  Clearly, there's still
</span><br>
<span class="quotelev2">&gt;&gt; something not right.  And of course I'm willing to track it down.  But I
</span><br>
<span class="quotelev2">&gt;&gt; can't help you if you just say &quot;it doesn't work.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; before that patch - all processes were killed (and you are right,
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpirun died right at the end of the timeout&quot; was reported)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...which led to many months of misleading ORTE debugging, BTW.  :-\
</span><br>
<span class="quotelev2">&gt;&gt;  That's why this commit was introduced into MTT -- in the quest of finally
</span><br>
<span class="quotelev2">&gt;&gt; fixing both the mysterious ORTE hangs and the erroneous timeouts/&quot;mpirun
</span><br>
<span class="quotelev2">&gt;&gt; died right at the end&quot; messages.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; but at least it left the cluster in the clean state w/o leftovers.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; now many &quot;orphan&quot; launchers  are alive from previous invocations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does &quot;launchers&quot; = mpirun?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0629.php">http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0629.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0631/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0632.php">Dave Goodell (dgoodell): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>Previous message:</strong> <a href="0630.php">Mike Dubman: "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>In reply to:</strong> <a href="0630.php">Mike Dubman: "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0632.php">Dave Goodell (dgoodell): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>Reply:</strong> <a href="0632.php">Dave Goodell (dgoodell): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
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
