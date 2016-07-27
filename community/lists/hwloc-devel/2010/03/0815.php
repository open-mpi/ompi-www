<?
$subject_val = "Re: [hwloc-devel] Strange difference";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 26 13:25:19 2010" -->
<!-- isoreceived="20100326172519" -->
<!-- sent="Fri, 26 Mar 2010 18:25:14 +0100" -->
<!-- isosent="20100326172514" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Strange difference" -->
<!-- id="4BACEDFA.4010607_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D0DBD566-C17C-4EF3-8688-2D6D8028652F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Strange difference<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-26 13:25:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0816.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Previous message:</strong> <a href="0814.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>In reply to:</strong> <a href="0814.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0816.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Reply:</strong> <a href="0816.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Mar 26, 2010, at 11:33 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Well, yes, it is supposed to display less information :)
</span><br>
<span class="quotelev2">&gt;&gt; Which precise difference are you referring to?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first section of both -- obviously, not the 2nd section of the -v output.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first section of both displays roughly the same information -- the only addition seems to be the phys number of the socket and the machine memory sizes (which don't agree between -v and non-v -- why?).  Indeed, the &quot;-v&quot; output seems to remove a lot of whitespace that was included in the non-v output.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just thought it was weird that the -v output is almost exactly the same information (in the first part), but expressed in more lines with less whitespace (L1 and core moved to their own lines).  More specifically, if adding the phys number of the socket and the machine sizes is the only information difference, why not add to the same output format as the non-v output?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>The reason was that the &quot;phys&quot; attribute is mostly useless for anything
<br>
but Proc and NUMANode.
<br>
<p>Current other differences when adding -v are:
<br>
* &quot;Proc&quot; if -v instead of &quot;P&quot;
<br>
* print local memory size
<br>
* print machine DMI attributes
<br>
* print memory sizes in verbose mode (not rounded to GB or so)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0816.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Previous message:</strong> <a href="0814.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>In reply to:</strong> <a href="0814.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0816.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Reply:</strong> <a href="0816.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
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
