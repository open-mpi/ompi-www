<?
$subject_val = "Re: [hwloc-devel] release status";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  2 17:45:59 2009" -->
<!-- isoreceived="20091002214559" -->
<!-- sent="Fri, 2 Oct 2009 23:45:52 +0200" -->
<!-- isosent="20091002214552" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] release status" -->
<!-- id="ED83FFC9-B7ED-483E-A276-808AFA81C205_at_gmx.ch" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5DFC06AD-6DDE-4C88-8B25-1DB5E02E2047_at_cisco.com" -->
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
<strong>From:</strong> Fawzi Mohamed (<em>fawzi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-02 17:45:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0138.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0136.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0135.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0138.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0138.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff &amp; Samuel,
<br>
<p>about the problems with linking, passing only the handle I can  
<br>
recompile the .so, but I cannot initialize constants, at least on my  
<br>
system.
<br>
So exporting handles works, it is having addressing directly of  
<br>
external variables that have that type that is problematic, because  
<br>
then the address is a constant, but the variable is checked by the  
<br>
liker against its size. I have seen the trick with constant size  
<br>
struct that you use in openmpi.
<br>
<p>Adding functions that alloc &amp; dealloc does not mean that the struct  
<br>
has to be purely mallocated, I think it might be worthwhile to keep  
<br>
something size+pointer so that if the size is small say less than  
<br>
size_t the cpuset is stored where otherwise there is the pointer... or  
<br>
something like that.
<br>
<p>Indeed I would keep a minimal struct...
<br>
<p>Fawzi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0138.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0136.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0135.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0138.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0138.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
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
