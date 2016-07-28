<?
$subject_val = "Re: [MTT users] Patch to add --local-scratch option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 09:10:44 2008" -->
<!-- isoreceived="20080918131044" -->
<!-- sent="Thu, 18 Sep 2008 09:10:38 -0400" -->
<!-- isosent="20080918131038" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch to add --local-scratch option" -->
<!-- id="86D87138-AF36-41EC-87EB-B31340ADA128_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-18 09:10:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0617.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0615.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>In reply to:</strong> <a href="0610.php">Tim Mattox: "[MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0617.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0617.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Patch looks good.  Please also update the CHANGES file (this file  
<br>
reflects bullets for things that have happened since the core testers  
<br>
branch).
<br>
<p><p>On Sep 15, 2008, at 6:15 PM, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
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
<span class="quotelev1">&gt; This local-scratch directory is then used for part of the --mpi- 
</span><br>
<span class="quotelev1">&gt; install
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
<span class="quotelev1">&gt; The downside is that if the MPI build fails, your build directory is  
</span><br>
<span class="quotelev1">&gt; out
</span><br>
<span class="quotelev1">&gt; on some compile-node's /tmp and is harder to go debug.  But, since
</span><br>
<span class="quotelev1">&gt; mpi build failures are now rare, this should make for quicker  
</span><br>
<span class="quotelev1">&gt; turnaround
</span><br>
<span class="quotelev1">&gt; for the general case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think I adjusted the code properly for the vpath build case, but  
</span><br>
<span class="quotelev1">&gt; I've
</span><br>
<span class="quotelev1">&gt; never used that so haven't tested it.  Also, I adjusted the free  
</span><br>
<span class="quotelev1">&gt; disk space
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt; I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt; &lt;mtt-local- 
</span><br>
<span class="quotelev1">&gt; scratch.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0617.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0615.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>In reply to:</strong> <a href="0610.php">Tim Mattox: "[MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0617.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0617.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
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
