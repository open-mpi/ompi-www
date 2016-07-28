<?
$subject_val = "Re: [MTT users] Patch to add --local-scratch option";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 16 12:07:36 2008" -->
<!-- isoreceived="20080916160736" -->
<!-- sent="Tue, 16 Sep 2008 12:07:31 -0400" -->
<!-- isosent="20080916160731" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch to add --local-scratch option" -->
<!-- id="20080916160731.GB24599_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ea86ce220809151515t2da68c62y447e933073964cfc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Patch to add --local-scratch option<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-16 12:07:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0612.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0610.php">Tim Mattox: "[MTT users] Patch to add --local-scratch option"</a>
<li><strong>In reply to:</strong> <a href="0610.php">Tim Mattox: "[MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0612.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0612.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0615.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nice! A few thoughts ...
<br>
<p>What happens if one uses --local-scratch, but leaves out the
<br>
--scratch option? In this case, I think MTT should assume 
<br>
--scratch is the same as --local-scratch.
<br>
<p>Could the &quot;local&quot; in --local-scratch ever be misleading?
<br>
Couldn't a user ever use a mounted filesystem that's faster
<br>
than all their local filesystem? Should it be
<br>
--fast-scratch?
<br>
<p>For future work, how about --scratch taking a (CSV?) list of
<br>
scratch directories. MTT then does a quick check for which
<br>
is the fastest filesystem (if such a check is
<br>
possible/feasible), and proceeds accordingly. That is, doing
<br>
everything it possible can in a fast scratch (builds,
<br>
writing out metadata, etc.), and installing the MPI(s) into
<br>
the slow mounted scratch. Would this be possible?
<br>
<p>On Mon, Sep/15/2008 06:15:43PM, Tim Mattox wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; Attached is a patchfile for the mtt trunk that adds a
</span><br>
<span class="quotelev1">&gt; --local-scratch &lt;dir_name&gt;
</span><br>
<span class="quotelev1">&gt; option to client/mtt.  You can also specify something like
</span><br>
<span class="quotelev1">&gt; this in your [MTT] ini section:
</span><br>
<span class="quotelev1">&gt; local_scratch = &amp;shell(&quot;echo /tmp/`whoami`_mtt&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This local-scratch directory is then used for part of the --mpi-install
</span><br>
<span class="quotelev1">&gt; phase to speed up your run.  Specifically, the source-code of the
</span><br>
<span class="quotelev1">&gt; MPI is untarred there, configure is run, make all, and make check.
</span><br>
<span class="quotelev1">&gt; Then, when make install is invoked the MPI is installed into the
</span><br>
<span class="quotelev1">&gt; usual place as if you hadn't used --local-scratch.  If you don't
</span><br>
<span class="quotelev1">&gt; use --local-scratch, then the builds occur in the usual place that
</span><br>
<span class="quotelev1">&gt; they have before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the clusters at IU that seem to have slow NSF home directories,
</span><br>
<span class="quotelev1">&gt; this cuts the --mpi-install phase time in half.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The downside is that if the MPI build fails, your build directory is out
</span><br>
<span class="quotelev1">&gt; on some compile-node's /tmp and is harder to go debug.  But, since
</span><br>
<span class="quotelev1">&gt; mpi build failures are now rare, this should make for quicker turnaround
</span><br>
<span class="quotelev1">&gt; for the general case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think I adjusted the code properly for the vpath build case, but I've
</span><br>
<span class="quotelev1">&gt; never used that so haven't tested it.  Also, I adjusted the free disk space
</span><br>
<span class="quotelev1">&gt; check code.  Right now it only checks the free space on --scratch,
</span><br>
<span class="quotelev1">&gt; and won't detect if --local-scratch is full.  If people really care, I
</span><br>
<span class="quotelev1">&gt; could make it check both later.  But for now, if your /tmp is full
</span><br>
<span class="quotelev1">&gt; you probably have other problems to worry about.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Comments?  Can you try it out, and if I get no objections, I'd like
</span><br>
<span class="quotelev1">&gt; to put this into the MTT trunk this week.
</span><br>
<p>I'll test your patch soon.
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;  tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<li><strong>Next message:</strong> <a href="0612.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0610.php">Tim Mattox: "[MTT users] Patch to add --local-scratch option"</a>
<li><strong>In reply to:</strong> <a href="0610.php">Tim Mattox: "[MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0612.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0612.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0615.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
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
