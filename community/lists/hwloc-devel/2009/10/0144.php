<?
$subject_val = "Re: [hwloc-devel] release status";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  5 10:02:17 2009" -->
<!-- isoreceived="20091005140217" -->
<!-- sent="Mon, 5 Oct 2009 10:02:12 -0400" -->
<!-- isosent="20091005140212" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] release status" -->
<!-- id="3F07956B-9094-4DBC-9463-5A12AF1D0301_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D588FFE3-94C8-4045-B494-D944BA76E06D_at_gmx.ch" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] release status<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-05 10:02:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0145.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0143.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0142.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0146.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0146.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 5, 2009, at 9:23 AM, Fawzi Mohamed wrote:
<br>
<p><span class="quotelev1">&gt; yes you are right, I was unclear, I meant that I would pass a cpu_set
</span><br>
<span class="quotelev1">&gt; struct by value (not always pass a pointer).
</span><br>
<span class="quotelev1">&gt; If one wants to later migrate to passing just a pointer, then
</span><br>
<span class="quotelev1">&gt; internally this struct can have just a single pointer as field.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ah, gotcha.
<br>
<p>But if that struct contains a dynamically-malloced pointer, then we  
<br>
might get issues about confusion of ownership of the sub-data...
<br>
<p><span class="quotelev1">&gt; indeed, if you alloc, and it is fixed size (no sparse structure) then
</span><br>
<span class="quotelev1">&gt; one can just call free, but in general having a structure specific
</span><br>
<span class="quotelev1">&gt; free function gives just a lot more flexibility for the future (and is
</span><br>
<span class="quotelev1">&gt; needed to copy unknown size structs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I agree about the future, but it would seem weird if we have alloc/ 
<br>
free functions for public structs.  No one will use them, and then  
<br>
when/if we *do* change to opaque handles (or equiv), they *will* have  
<br>
to change their code.  Kinda defeats the point.
<br>
<p>So I think we can't go half-n-half -- it's either public structs until  
<br>
2.0 or something opaque (where you *have* to use hwloc alloc/free  
<br>
functions).
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
<li><strong>Next message:</strong> <a href="0145.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0143.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0142.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0146.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0146.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
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
