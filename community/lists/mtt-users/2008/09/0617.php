<?
$subject_val = "Re: [MTT users] Patch to add --local-scratch option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 10:08:07 2008" -->
<!-- isoreceived="20080918140807" -->
<!-- sent="Thu, 18 Sep 2008 10:08:02 -0400" -->
<!-- isosent="20080918140802" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch to add --local-scratch option" -->
<!-- id="ea86ce220809180708v5a812420ue2fc3fbd29ec81f6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="86D87138-AF36-41EC-87EB-B31340ADA128_at_cisco.com" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-18 10:08:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0618.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0616.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>In reply to:</strong> <a href="0616.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0619.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0619.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, so how about calling it --mpi-build-scratch?
<br>
Once we get a consensus on what to call it, I can commit the patch to svn.
<br>
<p>Can anyone check it quick for vpath builds?
<br>
<p>Just a FYI, I've already run into the &quot;downside&quot; I mentioned once this week.
<br>
I had to rerun my MTT to get access to the build directory, since it
<br>
was on /tmp on some random BigRed compute node.  Hmm... maybe a
<br>
feature enhancement would be to copy it to your regular --scratch if
<br>
a build failure was detected?  Maybe later I'll do that as yet another option,
<br>
say, --copy-mpi-build-on-failure.  No time this week, but hey, its an idea.
<br>
<p>On Thu, Sep 18, 2008 at 9:10 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Patch looks good.  Please also update the CHANGES file (this file reflects
</span><br>
<span class="quotelev1">&gt; bullets for things that have happened since the core testers branch).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 15, 2008, at 6:15 PM, Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; Attached is a patchfile for the mtt trunk that adds a
</span><br>
<span class="quotelev2">&gt;&gt; --local-scratch &lt;dir_name&gt;
</span><br>
<span class="quotelev2">&gt;&gt; option to client/mtt.  You can also specify something like
</span><br>
<span class="quotelev2">&gt;&gt; this in your [MTT] ini section:
</span><br>
<span class="quotelev2">&gt;&gt; local_scratch = &amp;shell(&quot;echo /tmp/`whoami`_mtt&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This local-scratch directory is then used for part of the --mpi-install
</span><br>
<span class="quotelev2">&gt;&gt; phase to speed up your run.  Specifically, the source-code of the
</span><br>
<span class="quotelev2">&gt;&gt; MPI is untarred there, configure is run, make all, and make check.
</span><br>
<span class="quotelev2">&gt;&gt; Then, when make install is invoked the MPI is installed into the
</span><br>
<span class="quotelev2">&gt;&gt; usual place as if you hadn't used --local-scratch.  If you don't
</span><br>
<span class="quotelev2">&gt;&gt; use --local-scratch, then the builds occur in the usual place that
</span><br>
<span class="quotelev2">&gt;&gt; they have before.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the clusters at IU that seem to have slow NSF home directories,
</span><br>
<span class="quotelev2">&gt;&gt; this cuts the --mpi-install phase time in half.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The downside is that if the MPI build fails, your build directory is out
</span><br>
<span class="quotelev2">&gt;&gt; on some compile-node's /tmp and is harder to go debug.  But, since
</span><br>
<span class="quotelev2">&gt;&gt; mpi build failures are now rare, this should make for quicker turnaround
</span><br>
<span class="quotelev2">&gt;&gt; for the general case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think I adjusted the code properly for the vpath build case, but I've
</span><br>
<span class="quotelev2">&gt;&gt; never used that so haven't tested it.  Also, I adjusted the free disk
</span><br>
<span class="quotelev2">&gt;&gt; space
</span><br>
<span class="quotelev2">&gt;&gt; check code.  Right now it only checks the free space on --scratch,
</span><br>
<span class="quotelev2">&gt;&gt; and won't detect if --local-scratch is full.  If people really care, I
</span><br>
<span class="quotelev2">&gt;&gt; could make it check both later.  But for now, if your /tmp is full
</span><br>
<span class="quotelev2">&gt;&gt; you probably have other problems to worry about.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Comments?  Can you try it out, and if I get no objections, I'd like
</span><br>
<span class="quotelev2">&gt;&gt; to put this into the MTT trunk this week.
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev2">&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mtt-local-scratch.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
 I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0618.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0616.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>In reply to:</strong> <a href="0616.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0619.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0619.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
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
