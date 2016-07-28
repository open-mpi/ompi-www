<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 14:42:51 2009" -->
<!-- isoreceived="20090330184251" -->
<!-- sent="Mon, 30 Mar 2009 10:42:07 -0800" -->
<!-- isosent="20090330184207" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="49D1127F.1010603_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C53FBA0-543E-4567-8130-67EFCDE63B56_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM init failures<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 14:42:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5757.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5755.php">Patrick Geoffray: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5753.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5763.php">Sylvain Jeaugey: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; It's half done, actually.  But it was still going to be an option, 
</span><br>
<span class="quotelev1">&gt; not  necessarily the only way to do it:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/shm-sysv/">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/shm-sysv/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 30, 2009, at 1:40 PM, Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've been lurking on this conversation, and I am again left with the  
</span><br>
<span class="quotelev2">&gt;&gt; impression
</span><br>
<span class="quotelev2">&gt;&gt; that the underlying shared memory configuration based on sharing a  file
</span><br>
<span class="quotelev2">&gt;&gt; is flawed.  Why not use a System V shared memory segment without a
</span><br>
<span class="quotelev2">&gt;&gt; backing file as I described in ticket #1320?
</span><br>
<span class="quotelev1">&gt;
</span><br>
In some performance experiments so far, it appears that the start-up 
<br>
performance of the two approaches are rather different.  I don't 
<br>
understand the results, but I note here that they're different.
<br>
<p>Touching all that shared memory upon startup (which, as I noted, we 
<br>
essentially do now anyhow) adds noticeably to the start-up time.  (Less 
<br>
so now with the single-queue changes.  Whether the time is tolerable or 
<br>
not is a matter of taste, etc.)  Going from mmap to SysV speeds that 
<br>
time up a lot in the tests I've done.  But then (mysteriously) the time 
<br>
to exchange first messages takes much longer.
<br>
<p>I'm baffled.  For now, I just point out that the performance 
<br>
characteristics could be different.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5757.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5755.php">Patrick Geoffray: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5753.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5763.php">Sylvain Jeaugey: "Re: [OMPI devel] SM init failures"</a>
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
