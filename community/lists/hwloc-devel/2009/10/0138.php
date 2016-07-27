<?
$subject_val = "Re: [hwloc-devel] release status";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  2 18:01:03 2009" -->
<!-- isoreceived="20091002220103" -->
<!-- sent="Fri, 2 Oct 2009 18:00:53 -0400" -->
<!-- isosent="20091002220053" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] release status" -->
<!-- id="E93D7E18-5295-45E8-9556-5DC99734EC05_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ED83FFC9-B7ED-483E-A276-808AFA81C205_at_gmx.ch" -->
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
<strong>Date:</strong> 2009-10-02 18:00:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0139.php">MPI Team: "[hwloc-devel] Create success (hwloc r0.9.1a1r1099)"</a>
<li><strong>Previous message:</strong> <a href="0137.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0137.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0140.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0140.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 2, 2009, at 5:45 PM, Fawzi Mohamed wrote:
<br>
<p><span class="quotelev1">&gt; about the problems with linking, passing only the handle I can
</span><br>
<span class="quotelev1">&gt; recompile the .so, but I cannot initialize constants, at least on my
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev1">&gt; So exporting handles works, it is having addressing directly of
</span><br>
<span class="quotelev1">&gt; external variables that have that type that is problematic, because
</span><br>
<span class="quotelev1">&gt; then the address is a constant, but the variable is checked by the
</span><br>
<span class="quotelev1">&gt; liker against its size. I have seen the trick with constant size
</span><br>
<span class="quotelev1">&gt; struct that you use in openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, I'm guessing/assuming all my fears are moot.
<br>
<p><span class="quotelev1">&gt; Adding functions that alloc &amp; dealloc does not mean that the struct
</span><br>
<span class="quotelev1">&gt; has to be purely mallocated
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>mallocated -- great word.  :-)
<br>
<p><span class="quotelev1">&gt; , I think it might be worthwhile to keep
</span><br>
<span class="quotelev1">&gt; something size+pointer so that if the size is small say less than
</span><br>
<span class="quotelev1">&gt; size_t the cpuset is stored where otherwise there is the pointer... or
</span><br>
<span class="quotelev1">&gt; something like that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed I would keep a minimal struct...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Especially with a large number of OS processor IDs, won't the size of  
<br>
the array dwarf that of the struct?  I think we're quibbling over just  
<br>
a few bytes here in an area where performance and space really aren't  
<br>
all that important...
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
<li><strong>Next message:</strong> <a href="0139.php">MPI Team: "[hwloc-devel] Create success (hwloc r0.9.1a1r1099)"</a>
<li><strong>Previous message:</strong> <a href="0137.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0137.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0140.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0140.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
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
