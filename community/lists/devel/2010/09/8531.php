<?
$subject_val = "Re: [OMPI devel] Setting AUTOMAKE_JOBS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 20:22:57 2010" -->
<!-- isoreceived="20100923002257" -->
<!-- sent="Wed, 22 Sep 2010 20:22:53 -0400" -->
<!-- isosent="20100923002253" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Setting AUTOMAKE_JOBS" -->
<!-- id="68E39AC7-0FC2-4ED6-8F10-75F1A7B315FD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100922205136.GO21000_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Setting AUTOMAKE_JOBS<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 20:22:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8532.php">Jeff Squyres: "[OMPI devel] RFC: make hwloc first-class data"</a>
<li><strong>Previous message:</strong> <a href="8530.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>In reply to:</strong> <a href="8530.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8542.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2010, at 4:51 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the measurements!  I'm a bit surprised that the speedup is
</span><br>
<span class="quotelev1">&gt; not higher.  Do you have timings as to how much of the autogen.pl time
</span><br>
<span class="quotelev1">&gt; is spent inside automake?
</span><br>
<p>No, they didn't.  I re-ran them to just time autoreconf (is there a way to extract *just* the time spent in automake in there?).  Here's what I got:
<br>
<p>1    3:57.19
<br>
2    2:43.82
<br>
4    2:13.68
<br>
8    2:13.47
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="8532.php">Jeff Squyres: "[OMPI devel] RFC: make hwloc first-class data"</a>
<li><strong>Previous message:</strong> <a href="8530.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>In reply to:</strong> <a href="8530.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8542.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
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
