<?
$subject_val = "Re: [OMPI users] [Open MPI Announce] Critical bug notice";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 14:35:03 2009" -->
<!-- isoreceived="20090330183503" -->
<!-- sent="Mon, 30 Mar 2009 14:34:58 -0400" -->
<!-- isosent="20090330183458" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI Announce] Critical bug notice" -->
<!-- id="4D56DEB9-4A1C-4459-8C4E-DC6B33DC7629_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1238180047.7005.4.camel_at_y-boda.ydc.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Open MPI Announce] Critical bug notice<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 14:34:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8652.php">Jeff Squyres: "Re: [OMPI users] Possible regression from 1.2 to 1.3 when BLACS isinvolved"</a>
<li><strong>Previous message:</strong> <a href="8650.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>In reply to:</strong> <a href="8618.php">&#197;ke Sandgren: "Re: [OMPI users] [Open MPI Announce] Critical bug notice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8658.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Critical bug notice"</a>
<li><strong>Reply:</strong> <a href="8658.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Critical bug notice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 27, 2009, at 2:54 PM, &#197;ke Sandgren wrote:
<br>
<p><span class="quotelev2">&gt; &gt; The Open MPI team is working on a fix; it will be included in the
</span><br>
<span class="quotelev2">&gt; &gt; v1.3.2 release.  Updates will be posted to the ticket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will --with-memory-manager=none also work?
</span><br>
<span class="quotelev1">&gt; I guess it would but I'd like a confirmation of this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, it should.  However, I'm running into some oddness when I  
<br>
configure --without-memory-manager.  This is frustrating because I  
<br>
know --without-memory-manager worked at some point; I'm disappointed  
<br>
that we seem to have broken it.  I'm working on a fix for the bug  
<br>
right now; I'll also check out why --without-memory-manager does not  
<br>
seem to be working.  :-(
<br>
<p>If you want to follow what I'm doing, I'm putting periodic updates on  
<br>
this hg branch (no full solution posted yet):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/mallopt/">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/mallopt/</a>
<br>
<p><span class="quotelev1">&gt; The reason is that I'm having problems with BLACS with the
</span><br>
<span class="quotelev1">&gt; memory-manager turned on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Yes; this could definitely be related to your prior posting...
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
<li><strong>Next message:</strong> <a href="8652.php">Jeff Squyres: "Re: [OMPI users] Possible regression from 1.2 to 1.3 when BLACS isinvolved"</a>
<li><strong>Previous message:</strong> <a href="8650.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>In reply to:</strong> <a href="8618.php">&#197;ke Sandgren: "Re: [OMPI users] [Open MPI Announce] Critical bug notice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8658.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Critical bug notice"</a>
<li><strong>Reply:</strong> <a href="8658.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Critical bug notice"</a>
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
