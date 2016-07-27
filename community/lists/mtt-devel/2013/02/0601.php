<?
$subject_val = "Re: [MTT devel] fix zombie commit";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 25 11:24:33 2013" -->
<!-- isoreceived="20130225162433" -->
<!-- sent="Mon, 25 Feb 2013 16:24:28 +0000" -->
<!-- isosent="20130225162428" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] fix zombie commit" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F59931_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1KyYLvCQmXsr-yeD5iKWMG7cAKLUrbxrLbK254wrv40euRg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-02-25 11:24:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0602.php">Mike Dubman: "Re: [MTT devel] fix zombie commit"</a>
<li><strong>Previous message:</strong> <a href="0600.php">Mike Dubman: "Re: [MTT devel] fix zombie commit"</a>
<li><strong>In reply to:</strong> <a href="0600.php">Mike Dubman: "Re: [MTT devel] fix zombie commit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0602.php">Mike Dubman: "Re: [MTT devel] fix zombie commit"</a>
<li><strong>Reply:</strong> <a href="0602.php">Mike Dubman: "Re: [MTT devel] fix zombie commit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2013, at 6:59 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What protection do you mean? Check that /proc/pid/status exists? It is done in Grep()
</span><br>
<p>Ah, excellent -- I hadn't noticed that.
<br>
<p><span class="quotelev1">&gt; We observe that process which was launched by mtt and hangs (mtt detect timeout and starts do_command procedure), later enters into &quot;defunct&quot; state.
</span><br>
<p>Looking at the code, you're checking for zombie status before MTT kills the proc.  Am I reading that right?
<br>
<p>If so, then it could well be that the process has exited but not yet been reaped (because _kill_proc() hasn't been invoked yet).  If this is the case, is the real cause of the problem that the OUTread and ERRread aren't being closed when the child process exits, and therefore we keep looping looking for new output from them?
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
<li><strong>Next message:</strong> <a href="0602.php">Mike Dubman: "Re: [MTT devel] fix zombie commit"</a>
<li><strong>Previous message:</strong> <a href="0600.php">Mike Dubman: "Re: [MTT devel] fix zombie commit"</a>
<li><strong>In reply to:</strong> <a href="0600.php">Mike Dubman: "Re: [MTT devel] fix zombie commit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0602.php">Mike Dubman: "Re: [MTT devel] fix zombie commit"</a>
<li><strong>Reply:</strong> <a href="0602.php">Mike Dubman: "Re: [MTT devel] fix zombie commit"</a>
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
