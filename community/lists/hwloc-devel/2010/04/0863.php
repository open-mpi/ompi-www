<?
$subject_val = "[hwloc-devel] comments on API changes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  2 06:35:06 2010" -->
<!-- isoreceived="20100402103506" -->
<!-- sent="Fri, 2 Apr 2010 12:34:58 +0200" -->
<!-- isosent="20100402103458" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="[hwloc-devel] comments on API changes" -->
<!-- id="6A9BE30E-8702-433B-ABA2-75237DEBEF17_at_gmx.ch" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [hwloc-devel] comments on API changes<br>
<strong>From:</strong> Fawzi Mohamed (<em>fawzi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-02 06:34:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0864.php">Brice Goglin: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Previous message:</strong> <a href="0862.php">Brice Goglin: "[hwloc-devel] need CONFIG_STATUS_DEPENDENCIES ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0864.php">Brice Goglin: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Reply:</strong> <a href="0864.php">Brice Goglin: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Reply:</strong> <a href="0870.php">Samuel Thibault: "Re: [hwloc-devel] comments on API changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody,
<br>
<p>I am updating my D bindings to the latest API.
<br>
Some comments in no particular order:
<br>
<p>Building tools
<br>
rather new autoconf/automake/libtool are requested
<br>
I had to install them even on new clusters, nothing terrible, but I  
<br>
just noted it...
<br>
<p>Memory handling:
<br>
nice I like it, in my wrappers already had a separate memory struct...
<br>
pages info, before there were free pages, now I suppose that the  
<br>
page_types array might contain several pages, and so also the free  
<br>
pages, any place to get information about the meaning of the various  
<br>
page types? or is it still possible to get the free pages?
<br>
<p>PU, ok, probably clearer.
<br>
<p>detecting current pinning, pinning, mapping os &lt;-&gt; hwloc, has become  
<br>
nicer
<br>
<p>checkout, configure -&gt; HWLOC_DEBUG 1 -&gt; very chatty
<br>
it could be that the debug is still considered the default for trunk,  
<br>
but 1.0 should definitely switch it off by default...
<br>
<p>flags attributes:
<br>
C bitfields are used, normally they are avoided because they are slow  
<br>
(a compiler can bit or at compile time the constants and check/set  
<br>
several at once.
<br>
Speed is not a concern here, but in any case I am wrapping to D that  
<br>
does not support bitfields directly, so I used flags, I was just  
<br>
wondering why bitfields were used...
<br>
<p>father -&gt; parent (politically correct gender neutral :)
<br>
<p>HWLOC_OBJ_SYSTEM seems on the way out
<br>
I treated it just as a MACHINE anyway, but I wonder, as the constant  
<br>
is still there, does it have special attributes?, has it machine  
<br>
attributes? the documentation could be clearer...
<br>
<p>I am looking forward to 1.0 ...
<br>
<p>ciao
<br>
Fawzi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0864.php">Brice Goglin: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Previous message:</strong> <a href="0862.php">Brice Goglin: "[hwloc-devel] need CONFIG_STATUS_DEPENDENCIES ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0864.php">Brice Goglin: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Reply:</strong> <a href="0864.php">Brice Goglin: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Reply:</strong> <a href="0870.php">Samuel Thibault: "Re: [hwloc-devel] comments on API changes"</a>
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
