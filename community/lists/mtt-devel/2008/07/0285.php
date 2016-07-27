<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1216";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 12:35:08 2008" -->
<!-- isoreceived="20080723163508" -->
<!-- sent="Wed, 23 Jul 2008 12:34:58 -0400" -->
<!-- isosent="20080723163458" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1216" -->
<!-- id="98D10896-DA4F-4445-802C-3D1AE66A7309_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080723162127.GE6369_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1216<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 12:34:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/10/0286.php">Mike Dubman: "[MTT devel] mtt patch: summary digest"</a>
<li><strong>Previous message:</strong> <a href="0284.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1216"</a>
<li><strong>In reply to:</strong> <a href="0284.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1216"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 23, 2008, at 12:21 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Which device(s) does DiskFree.pm check for space on? I
</span><br>
<span class="quotelev1">&gt; occasionally run out of room in /tmp, so I would want it to
</span><br>
<span class="quotelev1">&gt; check my swap space.
</span><br>
<p>It seems to run &quot;df&quot; on all filesystenms, and then you can ask for the  
<br>
data from any given device.  I am simply passing in cwd() -- I didn't  
<br>
check closely; I assumed that the cwd() is what we cared about.
<br>
<p><span class="quotelev1">&gt; Can we remove these? (All but the .pm and README files.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; trunk/lib/Filesys/Changes
</span><br>
<span class="quotelev1">&gt; trunk/lib/Filesys/MANIFEST
</span><br>
<span class="quotelev1">&gt; trunk/lib/Filesys/Makefile.PL
</span><br>
<span class="quotelev1">&gt; trunk/lib/Filesys/eg/
</span><br>
<span class="quotelev1">&gt; trunk/lib/Filesys/eg/perldf
</span><br>
<span class="quotelev1">&gt; trunk/lib/Filesys/eg/silly
</span><br>
<span class="quotelev1">&gt; trunk/lib/Filesys/test.pl
</span><br>
<p>I simply untarred the tarball.  I don't think we need to distribute  
<br>
everything, but I figured what the heck...
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/10/0286.php">Mike Dubman: "[MTT devel] mtt patch: summary digest"</a>
<li><strong>Previous message:</strong> <a href="0284.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1216"</a>
<li><strong>In reply to:</strong> <a href="0284.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1216"</a>
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
