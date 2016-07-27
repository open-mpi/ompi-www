<?
$subject_val = "Re: [MTT devel] fix zombie commit";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 26 05:32:24 2013" -->
<!-- isoreceived="20130226103224" -->
<!-- sent="Tue, 26 Feb 2013 10:32:19 +0000" -->
<!-- isosent="20130226103219" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] fix zombie commit" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F5BBC0_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1Kyb75=-JPMY2oLV1RPOie69GRA8Qf==usxYz1WYS3pxFQA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-26 05:32:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/03/0604.php">Jeff Squyres (jsquyres): "[MTT devel] Fwd: [OMPI svn-full] svn:open-mpi r28142 - trunk/ompi/mca/common/cuda"</a>
<li><strong>Previous message:</strong> <a href="0602.php">Mike Dubman: "Re: [MTT devel] fix zombie commit"</a>
<li><strong>In reply to:</strong> <a href="0602.php">Mike Dubman: "Re: [MTT devel] fix zombie commit"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 26, 2013, at 2:11 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Feb 25, 2013 at 6:24 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;Looking at the code, you're checking for zombie status before MTT kills the proc.  Am I reading that right?
</span><br>
<span class="quotelev1">&gt; I don`t think the order matters, if process is not Zombie yet and about to be killed by MTT later - it is a good flow.
</span><br>
<span class="quotelev1">&gt; If process is already Zombie - mtt will not be able to kill it anyway and and can stop waiting and switch to the new task.
</span><br>
<p>No, the _kill_proc() routine does both a kill() and a waitpid().  The waitpid() should reap the zombie.
<br>
<p>I.e., if the process has died, MTT simply just hasn't reaped it yet.  Hence, it's a zombie.
<br>
<p><span class="quotelev2">&gt; &gt;If so, then it could well be that the process has exited but not yet been reaped (because _kill_proc() hasn't been invoked yet).  If this is the case, is the real cause of the problem that &gt;the OUTread and ERRread aren't being closed when the child process exits, and therefore we keep looping looking for new output from them?
</span><br>
<span class="quotelev1">&gt; yep, sounds like it can be the cause, need to look into this code.
</span><br>
<p>Ok.  It would be interesting to see if the process dies, but:
<br>
<p>1) MTT is still blocking in select() (i.e., OUTread and OUTerr aren't returning 0 from sysread upon process death)
<br>
<p>2) $done is somehow not getting set to 0, and therefore MTT is still looping until the timeout expires
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/03/0604.php">Jeff Squyres (jsquyres): "[MTT devel] Fwd: [OMPI svn-full] svn:open-mpi r28142 - trunk/ompi/mca/common/cuda"</a>
<li><strong>Previous message:</strong> <a href="0602.php">Mike Dubman: "Re: [MTT devel] fix zombie commit"</a>
<li><strong>In reply to:</strong> <a href="0602.php">Mike Dubman: "Re: [MTT devel] fix zombie commit"</a>
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
