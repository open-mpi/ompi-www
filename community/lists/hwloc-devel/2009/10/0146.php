<?
$subject_val = "Re: [hwloc-devel] release status";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  5 10:26:45 2009" -->
<!-- isoreceived="20091005142645" -->
<!-- sent="Mon, 5 Oct 2009 16:26:39 +0200" -->
<!-- isosent="20091005142639" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] release status" -->
<!-- id="057315A6-9175-49E7-BDAB-0B1224E84A67_at_gmx.ch" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3F07956B-9094-4DBC-9463-5A12AF1D0301_at_cisco.com" -->
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
<strong>Date:</strong> 2009-10-05 10:26:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0147.php">Brice Goglin: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0145.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0144.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0147.php">Brice Goglin: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0147.php">Brice Goglin: "Re: [hwloc-devel] release status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5-ott-09, at 16:02, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 5, 2009, at 9:23 AM, Fawzi Mohamed wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; yes you are right, I was unclear, I meant that I would pass a cpu_set
</span><br>
<span class="quotelev2">&gt;&gt; struct by value (not always pass a pointer).
</span><br>
<span class="quotelev2">&gt;&gt; If one wants to later migrate to passing just a pointer, then
</span><br>
<span class="quotelev2">&gt;&gt; internally this struct can have just a single pointer as field.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, gotcha.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But if that struct contains a dynamically-malloced pointer, then we  
</span><br>
<span class="quotelev1">&gt; might get issues about confusion of ownership of the sub-data...
</span><br>
<p>well the situation is exactly the same as with handles, I am used to  
<br>
have struct for arrays (that know their length), and still have to be  
<br>
allocaded/freed, but maybe for others it is indeed strange.
<br>
<p><span class="quotelev2">&gt;&gt; indeed, if you alloc, and it is fixed size (no sparse structure) then
</span><br>
<span class="quotelev2">&gt;&gt; one can just call free, but in general having a structure specific
</span><br>
<span class="quotelev2">&gt;&gt; free function gives just a lot more flexibility for the future (and  
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt; needed to copy unknown size structs).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree about the future, but it would seem weird if we have alloc/ 
</span><br>
<span class="quotelev1">&gt; free functions for public structs.  No one will use them, and then  
</span><br>
<span class="quotelev1">&gt; when/if we *do* change to opaque handles (or equiv), they *will*  
</span><br>
<span class="quotelev1">&gt; have to change their code.  Kinda defeats the point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I think we can't go half-n-half -- it's either public structs  
</span><br>
<span class="quotelev1">&gt; until 2.0 or something opaque (where you *have* to use hwloc alloc/ 
</span><br>
<span class="quotelev1">&gt; free functions).
</span><br>
<p>ok as I said to me it is not so strange (maybe init/clear would be a  
<br>
better name though), but indeed it might confuse people, so probably  
<br>
better avoid it.
<br>
Force the user to to the right thing is better.
<br>
<p>So the question remains, opaque + functions, or public...
<br>
<p>Fawzi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0147.php">Brice Goglin: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0145.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0144.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0147.php">Brice Goglin: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0147.php">Brice Goglin: "Re: [hwloc-devel] release status"</a>
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
