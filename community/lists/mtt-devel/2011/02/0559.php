<?
$subject_val = "Re: [MTT devel] race condition in SCM module";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 21 13:53:39 2011" -->
<!-- isoreceived="20110221185339" -->
<!-- sent="Mon, 21 Feb 2011 13:53:34 -0500" -->
<!-- isosent="20110221185334" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] race condition in SCM module" -->
<!-- id="74223F01-19D8-4204-B3BC-810FFC4F0220_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=ePh=XYUug6xwK0xT5TvYJbJG-5ZLLega6obDX_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] race condition in SCM module<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-21 13:53:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0560.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1385"</a>
<li><strong>Previous message:</strong> <a href="0558.php">Mike Dubman: "Re: [MTT devel] race condition in SCM module"</a>
<li><strong>In reply to:</strong> <a href="0558.php">Mike Dubman: "Re: [MTT devel] race condition in SCM module"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 21, 2011, at 1:00 AM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; Mercurial uses &quot;Copytree&quot; to copy fresh checked-out copy to the build location.
</span><br>
<p>This statement threw me for a little while; I had to go to the code to figure it out.  It's not Mercurial.pm that uses copytree; it looks like SCM.pm sets up a pointer to use copytree later...?
<br>
<p>Can you send your MPI Get and MPI Install sections to help understand what is going on here?  I tried to dig into the code a bit, but it's been (literally) years since I looked at these parts of the code; it looks like the specific code paths are going to be driven by your ini file.
<br>
<p><span class="quotelev1">&gt; These are messages coming from mtt during problematic situation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Debug message stating that post-copy completed (should be applied AFTER copy to the build location):
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; copytree running post_copy command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Debug message stating that copying completed --&gt; race
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; copytree finished copying
</span><br>
<p>Actually, looking at lib/MTT/Common/Copytree.pm, it looks like this sequence of messages is normal in Copytree::PrepareForInstall...?  I.e., the Debug statement with &quot;&gt;&gt; copytree finished copying&quot; is actually output after the post-copy command, not before.  Perhaps it's just the location of this debug statement that is confusing / incorrect...
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 18, 2011 at 6:26 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hmm -- I'm having difficulty understanding the exact scenario here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you using the Mercurial SCM module, or copytree?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think that I have used the Mercurial SCM module before -- I believe Ethan added that.  Ethan -- does SCM/Mercurial work well for you?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 18, 2011, at 2:06 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. post_copy fails because does not find some files which should be already copied.
</span><br>
<span class="quotelev2">&gt; &gt; 2. In the mtt debug output, (attached in original post) you can see that &quot;post_copy&quot; is executed before &quot;copytree&quot; has finished.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; copytree running post_copy command:
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; copytree finished copying
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Feb 18, 2011 at 12:23 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 10, 2011, at 2:36 PM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; There is a race condition in SCM, Mercurial module when used from MPI GET phase:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - scm_post_copy hook can be started before MPI GET completed copy of fetched tree into install location.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; How have you verified this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - This leads to mtt failure, because post_copy starts too early (tree was not copied yet) and fails.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - adding sleeps to post_copy hook - helps.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - does copytree used during mtt get phase have async behave?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; No, it shouldn't.  Everything is serial.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ---------------- from the mtt -d -v output ---------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; copytree running post_copy command:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; copytree finished copying
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Please suggest.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; M
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
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
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="0560.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1385"</a>
<li><strong>Previous message:</strong> <a href="0558.php">Mike Dubman: "Re: [MTT devel] race condition in SCM module"</a>
<li><strong>In reply to:</strong> <a href="0558.php">Mike Dubman: "Re: [MTT devel] race condition in SCM module"</a>
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
