<?
$subject_val = "Re: [MTT users] SVN URLs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 11:38:57 2007" -->
<!-- isoreceived="20071220163857" -->
<!-- sent="Thu, 20 Dec 2007 11:38:44 -0500" -->
<!-- isosent="20071220163844" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] SVN URLs" -->
<!-- id="20071220163844.GN12247_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E48BAAD1-533E-4087-994C-F0019ECDD90B_at_cisco.com" -->
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
<strong>Date:</strong> 2007-12-20 11:38:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0467.php">Jeff Squyres: "Re: [MTT users] SVN URLs"</a>
<li><strong>Previous message:</strong> <a href="0465.php">Jeff Squyres: "[MTT users] SVN URLs"</a>
<li><strong>In reply to:</strong> <a href="0465.php">Jeff Squyres: "[MTT users] SVN URLs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0467.php">Jeff Squyres: "Re: [MTT users] SVN URLs"</a>
<li><strong>Reply:</strong> <a href="0467.php">Jeff Squyres: "Re: [MTT users] SVN URLs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Dec/20/2007 06:34:27AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; FYI: per my post to the OMPI devel list, I discovered the
</span><br>
<span class="quotelev1">&gt; &quot;svnsync&quot;  command yesterday.  svnsync allows you to
</span><br>
<span class="quotelev1">&gt; mirror an entire SVN  repository in a read-only fashion; I
</span><br>
<span class="quotelev1">&gt; mirrored the ompi-tests  repository locally at Cisco.  A
</span><br>
<span class="quotelev1">&gt; one-line cron job keeps my ompi-tests SVN repo mirror up
</span><br>
<span class="quotelev1">&gt; to date every night.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Can you post that crontab?
<br>
<p><p><span class="quotelev1">&gt; Having a local mirror of ompi-tests allowed me to change
</span><br>
<span class="quotelev1">&gt; my MTT INI  file to have file:// SVN urls (vs. https://
</span><br>
<span class="quotelev1">&gt; URLs).  Not only did this  make the ompi-tests checkouts
</span><br>
<span class="quotelev1">&gt; [much] faster, I also was able to stop  using the MTT lock
</span><br>
<span class="quotelev1">&gt; daemon (*).  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yeah, I clocked an OMPI SVN checkout at 10 min the other day
<br>
:-\
<br>
<p><span class="quotelev1">&gt; Hence, my SVN checkouts are no longer  serialized -- which
</span><br>
<span class="quotelev1">&gt; had been causing significant delays when the &quot;test  get&quot;
</span><br>
<span class="quotelev1">&gt; phases of many MTT jobs were running at more-or-less the
</span><br>
<span class="quotelev1">&gt; same time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>If I see this:
<br>
<p>&nbsp;$ ls /foo
<br>
&nbsp;README.txt conf dav db format hooks locks
<br>
<p>How do I &quot;svn checkout&quot; from /foo using a &quot;file:&quot; URL?
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; (*) I had to use the lock MTT daemon because the Cisco engineering lab  
</span><br>
<span class="quotelev1">&gt; network is sanboxed; I have to use one of several proxies to be able  
</span><br>
<span class="quotelev1">&gt; to download from the greater internet.  The MTT lock server protected  
</span><br>
<span class="quotelev1">&gt; resetting the proxy server entry in the $HOME/.subversion/servers  
</span><br>
<span class="quotelev1">&gt; file.  The process is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - get the MTT lock on that file
</span><br>
<span class="quotelev1">&gt; - change the proxy entry in that file
</span><br>
<span class="quotelev1">&gt; - do the SVN checkout (loop to try all proxies in the presence of  
</span><br>
<span class="quotelev1">&gt; failure)
</span><br>
<span class="quotelev1">&gt; - reset the proxy entry back to its original value
</span><br>
<span class="quotelev1">&gt; - release the MTT lock on that file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
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
<li><strong>Next message:</strong> <a href="0467.php">Jeff Squyres: "Re: [MTT users] SVN URLs"</a>
<li><strong>Previous message:</strong> <a href="0465.php">Jeff Squyres: "[MTT users] SVN URLs"</a>
<li><strong>In reply to:</strong> <a href="0465.php">Jeff Squyres: "[MTT users] SVN URLs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0467.php">Jeff Squyres: "Re: [MTT users] SVN URLs"</a>
<li><strong>Reply:</strong> <a href="0467.php">Jeff Squyres: "Re: [MTT users] SVN URLs"</a>
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
