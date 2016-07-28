<?
$subject_val = "Re: [MTT users] SVN URLs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 14:28:57 2007" -->
<!-- isoreceived="20071220192857" -->
<!-- sent="Thu, 20 Dec 2007 14:28:52 -0500" -->
<!-- isosent="20071220192852" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] SVN URLs" -->
<!-- id="20071220192851.GO12247_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B3E81AAE-D63D-45D9-A2D5-FEF4E009F44B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT users] SVN URLs<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-20 14:28:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0469.php">Jeff Squyres: "Re: [MTT users] SVN URLs"</a>
<li><strong>Previous message:</strong> <a href="0467.php">Jeff Squyres: "Re: [MTT users] SVN URLs"</a>
<li><strong>In reply to:</strong> <a href="0467.php">Jeff Squyres: "Re: [MTT users] SVN URLs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0469.php">Jeff Squyres: "Re: [MTT users] SVN URLs"</a>
<li><strong>Reply:</strong> <a href="0469.php">Jeff Squyres: "Re: [MTT users] SVN URLs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Dec/20/2007 11:51:30AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Dec 20, 2007, at 11:38 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; FYI: per my post to the OMPI devel list, I discovered the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;svnsync&quot;  command yesterday.  svnsync allows you to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mirror an entire SVN  repository in a read-only fashion; I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mirrored the ompi-tests  repository locally at Cisco.  A
</span><br>
<span class="quotelev3">&gt; &gt;&gt; one-line cron job keeps my ompi-tests SVN repo mirror up
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to date every night.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you post that crontab?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's just
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0 19 * * * . $HOME/.bashrc ; svnsync sync file:///home/mpiteam/mirrors-svnroots/ompi-test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (repeated for the other SVN repo's I'm mirroring)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See the SVN book docs for svnsync -- they discuss how to setup a local  
</span><br>
<span class="quotelev1">&gt; repo for mirroring with svnsync (there's a few steps you have to do to  
</span><br>
<span class="quotelev1">&gt; set it up).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hence, my SVN checkouts are no longer  serialized -- which
</span><br>
<span class="quotelev3">&gt; &gt;&gt; had been causing significant delays when the &quot;test  get&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; phases of many MTT jobs were running at more-or-less the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; same time.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I see this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ ls /foo
</span><br>
<span class="quotelev2">&gt; &gt; README.txt conf dav db format hooks locks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; How do I &quot;svn checkout&quot; from /foo using a &quot;file:&quot; URL?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; svn co file:///foo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A file:// URL is just like an http[s]:// URL -- just put the absolute  
</span><br>
<span class="quotelev1">&gt; directory name after it (to include the leading &quot;/&quot; -- so a file URL  
</span><br>
<span class="quotelev1">&gt; will have 3 /'s).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Ah. The *3* /'s are important. 2 slashes didn't do it :-)
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="0469.php">Jeff Squyres: "Re: [MTT users] SVN URLs"</a>
<li><strong>Previous message:</strong> <a href="0467.php">Jeff Squyres: "Re: [MTT users] SVN URLs"</a>
<li><strong>In reply to:</strong> <a href="0467.php">Jeff Squyres: "Re: [MTT users] SVN URLs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0469.php">Jeff Squyres: "Re: [MTT users] SVN URLs"</a>
<li><strong>Reply:</strong> <a href="0469.php">Jeff Squyres: "Re: [MTT users] SVN URLs"</a>
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
