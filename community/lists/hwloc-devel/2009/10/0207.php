<?
$subject_val = "Re: [hwloc-devel] MPICH2 question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 12:46:43 2009" -->
<!-- isoreceived="20091021164643" -->
<!-- sent="Wed, 21 Oct 2009 12:46:38 -0400" -->
<!-- isosent="20091021164638" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] MPICH2 question" -->
<!-- id="45C32E61-DE87-4A08-99EA-1A94F787EAF9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091021142017.GF4693_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] MPICH2 question<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 12:46:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0208.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Previous message:</strong> <a href="0206.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>In reply to:</strong> <a href="0199.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0210.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0210.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 21, 2009, at 10:20 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; I've checked configure, only the check for egrep may fail and does not
</span><br>
<span class="quotelev1">&gt; provide any fallback which we could have used. It's only used for the
</span><br>
<span class="quotelev1">&gt; documentation generation, Jeff, maybe we can find an alternative to
</span><br>
<span class="quotelev1">&gt; egrep for what we use it for?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>We use it for running latex (i.e., looking for some warning messages  
<br>
in the latex output to know if we need to run it again).  This could  
<br>
be coded around and/or removed entirely if desired.
<br>
<p>However, I notice that libtool makes extensive use of egrep.   
<br>
Specifically, even if I remove AC_PROG_EGREP, it's checked for later  
<br>
in configure and is used a lot by libtool.
<br>
<p>I'd be surprised if there's a system out there that doesn't have some  
<br>
flavor of egrep that satisfies AC_PROG_EGREP (especially if Libtool  
<br>
uses it heavily).  Do we know if this is the case, or is this a  
<br>
hypothetical that a suitable egrep might not be found?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0208.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Previous message:</strong> <a href="0206.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>In reply to:</strong> <a href="0199.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0210.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0210.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
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
