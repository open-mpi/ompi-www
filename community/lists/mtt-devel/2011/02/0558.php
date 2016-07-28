<?
$subject_val = "Re: [MTT devel] race condition in SCM module";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 21 01:00:24 2011" -->
<!-- isoreceived="20110221060024" -->
<!-- sent="Mon, 21 Feb 2011 08:00:19 +0200" -->
<!-- isosent="20110221060019" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] race condition in SCM module" -->
<!-- id="AANLkTi=ePh=XYUug6xwK0xT5TvYJbJG-5ZLLega6obDX_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="07299FA3-10B8-4BAA-A00A-7989BB5CD569_at_cisco.com" -->
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
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-21 01:00:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0559.php">Jeff Squyres: "Re: [MTT devel] race condition in SCM module"</a>
<li><strong>Previous message:</strong> <a href="0557.php">Jeff Squyres: "Re: [MTT devel] race condition in SCM module"</a>
<li><strong>In reply to:</strong> <a href="0557.php">Jeff Squyres: "Re: [MTT devel] race condition in SCM module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0559.php">Jeff Squyres: "Re: [MTT devel] race condition in SCM module"</a>
<li><strong>Reply:</strong> <a href="0559.php">Jeff Squyres: "Re: [MTT devel] race condition in SCM module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mercurial uses &quot;Copytree&quot; to copy fresh checked-out copy to the build
<br>
location.
<br>
These are messages coming from mtt during problematic situation:
<br>
<p>Debug message stating that post-copy completed (should be applied AFTER copy
<br>
to the build location):
<br>
<span class="quotelev3">&gt; &gt;&gt; copytree running post_copy command:
</span><br>
<p>Debug message stating that copying completed --&gt; race
<br>
<span class="quotelev3">&gt; &gt;&gt; copytree finished copying
</span><br>
<p><p><p>On Fri, Feb 18, 2011 at 6:26 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmm -- I'm having difficulty understanding the exact scenario here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you using the Mercurial SCM module, or copytree?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think that I have used the Mercurial SCM module before -- I believe
</span><br>
<span class="quotelev1">&gt; Ethan added that.  Ethan -- does SCM/Mercurial work well for you?
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
<span class="quotelev2">&gt; &gt; 1. post_copy fails because does not find some files which should be
</span><br>
<span class="quotelev1">&gt; already copied.
</span><br>
<span class="quotelev2">&gt; &gt; 2. In the mtt debug output, (attached in original post) you can see that
</span><br>
<span class="quotelev1">&gt; &quot;post_copy&quot; is executed before &quot;copytree&quot; has finished.
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
<span class="quotelev2">&gt; &gt; On Fri, Feb 18, 2011 at 12:23 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 10, 2011, at 2:36 PM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; There is a race condition in SCM, Mercurial module when used from MPI
</span><br>
<span class="quotelev1">&gt; GET phase:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - scm_post_copy hook can be started before MPI GET completed copy of
</span><br>
<span class="quotelev1">&gt; fetched tree into install location.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; How have you verified this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - This leads to mtt failure, because post_copy starts too early (tree
</span><br>
<span class="quotelev1">&gt; was not copied yet) and fails.
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
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0558/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0559.php">Jeff Squyres: "Re: [MTT devel] race condition in SCM module"</a>
<li><strong>Previous message:</strong> <a href="0557.php">Jeff Squyres: "Re: [MTT devel] race condition in SCM module"</a>
<li><strong>In reply to:</strong> <a href="0557.php">Jeff Squyres: "Re: [MTT devel] race condition in SCM module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0559.php">Jeff Squyres: "Re: [MTT devel] race condition in SCM module"</a>
<li><strong>Reply:</strong> <a href="0559.php">Jeff Squyres: "Re: [MTT devel] race condition in SCM module"</a>
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
