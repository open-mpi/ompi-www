<?
$subject_val = "Re: [MTT users] SVN URLs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 11:52:03 2007" -->
<!-- isoreceived="20071220165203" -->
<!-- sent="Thu, 20 Dec 2007 11:51:30 -0500" -->
<!-- isosent="20071220165130" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] SVN URLs" -->
<!-- id="B3E81AAE-D63D-45D9-A2D5-FEF4E009F44B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071220163844.GN12247_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-20 11:51:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0468.php">Ethan Mallove: "Re: [MTT users] SVN URLs"</a>
<li><strong>Previous message:</strong> <a href="0466.php">Ethan Mallove: "Re: [MTT users] SVN URLs"</a>
<li><strong>In reply to:</strong> <a href="0466.php">Ethan Mallove: "Re: [MTT users] SVN URLs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0468.php">Ethan Mallove: "Re: [MTT users] SVN URLs"</a>
<li><strong>Reply:</strong> <a href="0468.php">Ethan Mallove: "Re: [MTT users] SVN URLs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 20, 2007, at 11:38 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev2">&gt;&gt; FYI: per my post to the OMPI devel list, I discovered the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;svnsync&quot;  command yesterday.  svnsync allows you to
</span><br>
<span class="quotelev2">&gt;&gt; mirror an entire SVN  repository in a read-only fashion; I
</span><br>
<span class="quotelev2">&gt;&gt; mirrored the ompi-tests  repository locally at Cisco.  A
</span><br>
<span class="quotelev2">&gt;&gt; one-line cron job keeps my ompi-tests SVN repo mirror up
</span><br>
<span class="quotelev2">&gt;&gt; to date every night.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you post that crontab?
</span><br>
<p>It's just
<br>
<p>0 19 * * * . $HOME/.bashrc ; svnsync sync file:///home/mpiteam/mirrors-svnroots/ompi-test
<br>
<p>(repeated for the other SVN repo's I'm mirroring)
<br>
<p>See the SVN book docs for svnsync -- they discuss how to setup a local  
<br>
repo for mirroring with svnsync (there's a few steps you have to do to  
<br>
set it up).
<br>
<p><span class="quotelev2">&gt;&gt; Hence, my SVN checkouts are no longer  serialized -- which
</span><br>
<span class="quotelev2">&gt;&gt; had been causing significant delays when the &quot;test  get&quot;
</span><br>
<span class="quotelev2">&gt;&gt; phases of many MTT jobs were running at more-or-less the
</span><br>
<span class="quotelev2">&gt;&gt; same time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I see this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ls /foo
</span><br>
<span class="quotelev1">&gt; README.txt conf dav db format hooks locks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How do I &quot;svn checkout&quot; from /foo using a &quot;file:&quot; URL?
</span><br>
<p>svn co file:///foo
<br>
<p>A file:// URL is just like an http[s]:// URL -- just put the absolute  
<br>
directory name after it (to include the leading &quot;/&quot; -- so a file URL  
<br>
will have 3 /'s).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0468.php">Ethan Mallove: "Re: [MTT users] SVN URLs"</a>
<li><strong>Previous message:</strong> <a href="0466.php">Ethan Mallove: "Re: [MTT users] SVN URLs"</a>
<li><strong>In reply to:</strong> <a href="0466.php">Ethan Mallove: "Re: [MTT users] SVN URLs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0468.php">Ethan Mallove: "Re: [MTT users] SVN URLs"</a>
<li><strong>Reply:</strong> <a href="0468.php">Ethan Mallove: "Re: [MTT users] SVN URLs"</a>
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
