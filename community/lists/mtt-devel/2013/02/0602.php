<?
$subject_val = "Re: [MTT devel] fix zombie commit";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 26 02:11:25 2013" -->
<!-- isoreceived="20130226071125" -->
<!-- sent="Tue, 26 Feb 2013 09:11:19 +0200" -->
<!-- isosent="20130226071119" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [MTT devel] fix zombie commit" -->
<!-- id="CAAO1Kyb75=-JPMY2oLV1RPOie69GRA8Qf==usxYz1WYS3pxFQA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F59931_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] fix zombie commit<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-26 02:11:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0603.php">Jeff Squyres (jsquyres): "Re: [MTT devel] fix zombie commit"</a>
<li><strong>Previous message:</strong> <a href="0601.php">Jeff Squyres (jsquyres): "Re: [MTT devel] fix zombie commit"</a>
<li><strong>In reply to:</strong> <a href="0601.php">Jeff Squyres (jsquyres): "Re: [MTT devel] fix zombie commit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0603.php">Jeff Squyres (jsquyres): "Re: [MTT devel] fix zombie commit"</a>
<li><strong>Reply:</strong> <a href="0603.php">Jeff Squyres (jsquyres): "Re: [MTT devel] fix zombie commit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Feb 25, 2013 at 6:24 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev2">&gt; &gt;Looking at the code, you're checking for zombie status before MTT kills
</span><br>
<span class="quotelev1">&gt; the proc.  Am I reading that right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
I don`t think the order matters, if process is not Zombie yet and about to
<br>
be killed by MTT later - it is a good flow.
<br>
If process is already Zombie - mtt will not be able to kill it anyway and
<br>
and can stop waiting and switch to the new task.
<br>
<p><p><span class="quotelev2">&gt; &gt;If so, then it could well be that the process has exited but not yet been
</span><br>
<span class="quotelev1">&gt; reaped (because _kill_proc() hasn't been invoked yet).  If this is the
</span><br>
<span class="quotelev1">&gt; case, is the real cause of the problem that &gt;the OUTread and ERRread aren't
</span><br>
<span class="quotelev1">&gt; being closed when the child process exits, and therefore we keep looping
</span><br>
<span class="quotelev1">&gt; looking for new output from them?
</span><br>
<span class="quotelev1">&gt;
</span><br>
yep, sounds like it can be the cause, need to look into this code.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0602/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0603.php">Jeff Squyres (jsquyres): "Re: [MTT devel] fix zombie commit"</a>
<li><strong>Previous message:</strong> <a href="0601.php">Jeff Squyres (jsquyres): "Re: [MTT devel] fix zombie commit"</a>
<li><strong>In reply to:</strong> <a href="0601.php">Jeff Squyres (jsquyres): "Re: [MTT devel] fix zombie commit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0603.php">Jeff Squyres (jsquyres): "Re: [MTT devel] fix zombie commit"</a>
<li><strong>Reply:</strong> <a href="0603.php">Jeff Squyres (jsquyres): "Re: [MTT devel] fix zombie commit"</a>
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
