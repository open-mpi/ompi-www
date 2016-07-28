<?
$subject_val = "Re: [hwloc-devel] lstopo-gui";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 29 01:48:32 2012" -->
<!-- isoreceived="20120529054832" -->
<!-- sent="Tue, 29 May 2012 07:48:15 +0200" -->
<!-- isosent="20120529054815" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo-gui" -->
<!-- id="4FC4631F.1090100_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7F90A068-17FC-4FD7-B1F2-9D3732265408_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] lstopo-gui<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-29 01:48:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3107.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-gui"</a>
<li><strong>Previous message:</strong> <a href="3105.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4521)"</a>
<li><strong>In reply to:</strong> <a href="3103.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-gui"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3107.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-gui"</a>
<li><strong>Reply:</strong> <a href="3107.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-gui"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 25/05/2012 12:34, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Hmm. I typed &quot;lstopo-no-graphics&quot; above, just to be descriptive, but
</span><br>
<span class="quotelev1">&gt; is that a horrible name? If the main goal is for binary packagers who
</span><br>
<span class="quotelev1">&gt; assumedly have /etc/alternative-type solutions such that users will
</span><br>
<span class="quotelev1">&gt; rarely/never type that full name, how about just being descriptive
</span><br>
<span class="quotelev1">&gt; with a lengthy suffix like that? 
</span><br>
<p>I implemented this in the branch lstopo-no-graphics. Additional changes
<br>
to note:
<br>
1) lstopo-no-graphics is now text-only on Windows too
<br>
2) when cairo is disabled (and not running on windows), lstopo is a
<br>
symlink on lstopo-no-graphics
<br>
3) item (2) is only true in the installdir. not sure we should do it in
<br>
the builddir too
<br>
<p>If people are ok with this renaming, I'll merge the branch in the next
<br>
days. And I think we'll start talking about doing v1.5 since most other
<br>
branches aren't ready and/or need plugins before they can get merged.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3107.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-gui"</a>
<li><strong>Previous message:</strong> <a href="3105.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4521)"</a>
<li><strong>In reply to:</strong> <a href="3103.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-gui"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3107.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-gui"</a>
<li><strong>Reply:</strong> <a href="3107.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-gui"</a>
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
