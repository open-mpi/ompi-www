<?
$subject_val = "Re: [MTT users] SVN URLs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 21 10:46:31 2007" -->
<!-- isoreceived="20071221154631" -->
<!-- sent="Fri, 21 Dec 2007 10:46:21 -0500" -->
<!-- isosent="20071221154621" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] SVN URLs" -->
<!-- id="E25BAB49-7FDC-4985-AB39-CBA8501D69C0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071220192851.GO12247_at_sun.com" -->
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
<strong>Date:</strong> 2007-12-21 10:46:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/01/0470.php">Oleg Kats: "[MTT users] mtt multiple mpi install and non open mpi instal issues"</a>
<li><strong>Previous message:</strong> <a href="0468.php">Ethan Mallove: "Re: [MTT users] SVN URLs"</a>
<li><strong>In reply to:</strong> <a href="0468.php">Ethan Mallove: "Re: [MTT users] SVN URLs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I had to convert over to using svn://-style URLs (vs. file://- 
<br>
style) because my mirrored SVN roots are on an NFS filesystem;  
<br>
executing a bunch of checkouts simultaneously from the same root is  
<br>
Bad (and causes some checkouts to fail).
<br>
<p>Instead, I setup an svnserve on my cluster head node to serve the SVN  
<br>
repos in a read-only manner out to my cluster.  It was trivial to  
<br>
setup the svnserve, and it seems to work quite well in my MTT setup.
<br>
<p><p>On Dec 20, 2007, at 2:28 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Dec/20/2007 11:51:30AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 20, 2007, at 11:38 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FYI: per my post to the OMPI devel list, I discovered the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;svnsync&quot;  command yesterday.  svnsync allows you to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mirror an entire SVN  repository in a read-only fashion; I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mirrored the ompi-tests  repository locally at Cisco.  A
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one-line cron job keeps my ompi-tests SVN repo mirror up
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to date every night.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you post that crontab?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's just
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 0 19 * * * . $HOME/.bashrc ; svnsync sync file:///home/mpiteam/mirrors-svnroots/ompi-test
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (repeated for the other SVN repo's I'm mirroring)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See the SVN book docs for svnsync -- they discuss how to setup a  
</span><br>
<span class="quotelev2">&gt;&gt; local
</span><br>
<span class="quotelev2">&gt;&gt; repo for mirroring with svnsync (there's a few steps you have to do  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; set it up).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hence, my SVN checkouts are no longer  serialized -- which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; had been causing significant delays when the &quot;test  get&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; phases of many MTT jobs were running at more-or-less the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; same time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I see this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ls /foo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; README.txt conf dav db format hooks locks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How do I &quot;svn checkout&quot; from /foo using a &quot;file:&quot; URL?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; svn co file:///foo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A file:// URL is just like an http[s]:// URL -- just put the absolute
</span><br>
<span class="quotelev2">&gt;&gt; directory name after it (to include the leading &quot;/&quot; -- so a file URL
</span><br>
<span class="quotelev2">&gt;&gt; will have 3 /'s).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah. The *3* /'s are important. 2 slashes didn't do it :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/01/0470.php">Oleg Kats: "[MTT users] mtt multiple mpi install and non open mpi instal issues"</a>
<li><strong>Previous message:</strong> <a href="0468.php">Ethan Mallove: "Re: [MTT users] SVN URLs"</a>
<li><strong>In reply to:</strong> <a href="0468.php">Ethan Mallove: "Re: [MTT users] SVN URLs"</a>
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
