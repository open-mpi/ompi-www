<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2149";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 28 07:05:09 2010" -->
<!-- isoreceived="20100528110509" -->
<!-- sent="Fri, 28 May 2010 07:05:04 -0400" -->
<!-- isosent="20100528110504" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2149" -->
<!-- id="AA30DA84-1EDD-4AF6-8F6D-C6237966DEB1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTilbD6fnID6TQspUBSeM0gFvFol3tA2jqPK1xcuT_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2149<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-28 07:05:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1028.php">Brice Goglin: "Re: [hwloc-devel] misc questions"</a>
<li><strong>Previous message:</strong> <a href="1026.php">Jeff Squyres (jsquyres): "[hwloc-devel] 1.0.1?"</a>
<li><strong>In reply to:</strong> <a href="1025.php">Bert Wesarg: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2149"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good call; thanks for the reminder.  Thankfully, hwloc doesn't suffer from such issues (I just sanity checked the trunk and v1.0 to be sure).  
<br>
<p>IIRC, the main issues in OMPI surrounded the use of its wrapper compilers (i.e., trying to exec something with &quot;gcc -m32&quot; wouldn't work -- you have to split it into multiple tokens so that you only exec &quot;gcc&quot; and pass -m32 as the first argument).
<br>
<p><p><p>On May 28, 2010, at 6:24 AM, Bert Wesarg wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sorry to chime in so late. Jeff you may remember that I reported a
</span><br>
<span class="quotelev1">&gt; similar problem to open-mpi some years ago. But I didn't use
</span><br>
<span class="quotelev1">&gt; CFLAGS=-m32 but CC=&quot;gcc -m32&quot; and CXX=&quot;g++ -m32&quot;, which is still in my
</span><br>
<span class="quotelev1">&gt; eyes the correct way to pass this flag to all compile commands. The
</span><br>
<span class="quotelev1">&gt; problem in open-mpi back than was, that configure didn't handled the
</span><br>
<span class="quotelev1">&gt; CC variable with spaces well. I haven't read the whole #35 thread
</span><br>
<span class="quotelev1">&gt; through, but just wanted to let you know.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bye
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1028.php">Brice Goglin: "Re: [hwloc-devel] misc questions"</a>
<li><strong>Previous message:</strong> <a href="1026.php">Jeff Squyres (jsquyres): "[hwloc-devel] 1.0.1?"</a>
<li><strong>In reply to:</strong> <a href="1025.php">Bert Wesarg: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2149"</a>
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
