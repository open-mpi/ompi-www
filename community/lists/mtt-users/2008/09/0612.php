<?
$subject_val = "Re: [MTT users] Patch to add --local-scratch option";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 16 16:26:54 2008" -->
<!-- isoreceived="20080916202654" -->
<!-- sent="Tue, 16 Sep 2008 16:26:49 -0400" -->
<!-- isosent="20080916202649" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch to add --local-scratch option" -->
<!-- id="20080916202648.GQ24614_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20080916160731.GB24599_at_sun.com" -->
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
<strong>Date:</strong> 2008-09-16 16:26:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0613.php">Lenny Verkhovsky: "[MTT users] mtt IBM reduce_scatter_in_place test failure"</a>
<li><strong>Previous message:</strong> <a href="0611.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>In reply to:</strong> <a href="0611.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0615.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Sep/16/2008 12:07:31PM, Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; Nice! A few thoughts ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What happens if one uses --local-scratch, but leaves out the
</span><br>
<span class="quotelev1">&gt; --scratch option? In this case, I think MTT should assume 
</span><br>
<span class="quotelev1">&gt; --scratch is the same as --local-scratch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could the &quot;local&quot; in --local-scratch ever be misleading?
</span><br>
<span class="quotelev1">&gt; Couldn't a user ever use a mounted filesystem that's faster
</span><br>
<span class="quotelev1">&gt; than all their local filesystem? Should it be
</span><br>
<span class="quotelev1">&gt; --fast-scratch?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For future work, how about --scratch taking a (CSV?) list of
</span><br>
<span class="quotelev1">&gt; scratch directories. MTT then does a quick check for which
</span><br>
<span class="quotelev1">&gt; is the fastest filesystem (if such a check is
</span><br>
<span class="quotelev1">&gt; possible/feasible), and proceeds accordingly. That is, doing
</span><br>
<span class="quotelev1">&gt; everything it possible can in a fast scratch (builds,
</span><br>
<span class="quotelev1">&gt; writing out metadata, etc.), and installing the MPI(s) into
</span><br>
<span class="quotelev1">&gt; the slow mounted scratch. Would this be possible?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Sep/15/2008 06:15:43PM, Tim Mattox wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt; Attached is a patchfile for the mtt trunk that adds a
</span><br>
<span class="quotelev2">&gt; &gt; --local-scratch &lt;dir_name&gt;
</span><br>
<span class="quotelev2">&gt; &gt; option to client/mtt.  You can also specify something like
</span><br>
<span class="quotelev2">&gt; &gt; this in your [MTT] ini section:
</span><br>
<span class="quotelev2">&gt; &gt; local_scratch = &amp;shell(&quot;echo /tmp/`whoami`_mtt&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This local-scratch directory is then used for part of the --mpi-install
</span><br>
<span class="quotelev2">&gt; &gt; phase to speed up your run.  Specifically, the source-code of the
</span><br>
<span class="quotelev2">&gt; &gt; MPI is untarred there, configure is run, make all, and make check.
</span><br>
<span class="quotelev2">&gt; &gt; Then, when make install is invoked the MPI is installed into the
</span><br>
<span class="quotelev2">&gt; &gt; usual place as if you hadn't used --local-scratch.  If you don't
</span><br>
<span class="quotelev2">&gt; &gt; use --local-scratch, then the builds occur in the usual place that
</span><br>
<span class="quotelev2">&gt; &gt; they have before.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; For the clusters at IU that seem to have slow NSF home directories,
</span><br>
<span class="quotelev2">&gt; &gt; this cuts the --mpi-install phase time in half.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The downside is that if the MPI build fails, your build directory is out
</span><br>
<span class="quotelev2">&gt; &gt; on some compile-node's /tmp and is harder to go debug.  But, since
</span><br>
<span class="quotelev2">&gt; &gt; mpi build failures are now rare, this should make for quicker turnaround
</span><br>
<span class="quotelev2">&gt; &gt; for the general case.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I think I adjusted the code properly for the vpath build case, but I've
</span><br>
<span class="quotelev2">&gt; &gt; never used that so haven't tested it.  Also, I adjusted the free disk space
</span><br>
<span class="quotelev2">&gt; &gt; check code.  Right now it only checks the free space on --scratch,
</span><br>
<span class="quotelev2">&gt; &gt; and won't detect if --local-scratch is full.  If people really care, I
</span><br>
<span class="quotelev2">&gt; &gt; could make it check both later.  But for now, if your /tmp is full
</span><br>
<span class="quotelev2">&gt; &gt; you probably have other problems to worry about.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Comments?  Can you try it out, and if I get no objections, I'd like
</span><br>
<span class="quotelev2">&gt; &gt; to put this into the MTT trunk this week.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll test your patch soon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I was able to do an MPI get/install after applying the patch.
<br>
<p>I ran:
<br>
<p>&nbsp;&nbsp;$ client/mtt --local-scratch /tmp/foo --scratch /nfs/bar ...
<br>
<p>Which resulted in the build directory ending up in:
<br>
<p>&nbsp;&nbsp;/tmp/foo/.../src
<br>
<p>And the resulting installation ending up in the below
<br>
directory via the DESTDIR macro passed to &quot;make install&quot;:
<br>
<p>&nbsp;&nbsp;/nfs/bar/.../src
<br>
<p>The patch seems to do what it's supposed to do.
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev2">&gt; &gt;  tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;  I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0613.php">Lenny Verkhovsky: "[MTT users] mtt IBM reduce_scatter_in_place test failure"</a>
<li><strong>Previous message:</strong> <a href="0611.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>In reply to:</strong> <a href="0611.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0615.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
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
