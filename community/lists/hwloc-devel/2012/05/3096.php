<?
$subject_val = "Re: [hwloc-devel] lstopo-gui";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 24 11:31:05 2012" -->
<!-- isoreceived="20120524153105" -->
<!-- sent="Thu, 24 May 2012 17:30:59 +0200" -->
<!-- isosent="20120524153059" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo-gui" -->
<!-- id="4FBE5433.1060003_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AA8D9764-5824-4345-B3E6-94DF445760EF_at_cisco.com" -->
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
<strong>Date:</strong> 2012-05-24 11:30:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3097.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-gui"</a>
<li><strong>Previous message:</strong> <a href="3095.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-gui"</a>
<li><strong>In reply to:</strong> <a href="3094.php">Jeff Squyres: "[hwloc-devel] lstopo-gui"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3097.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-gui"</a>
<li><strong>Reply:</strong> <a href="3097.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-gui"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 24/05/2012 17:16, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Just for the record, I really, really dislike the fact that we've now split lstopo into lstopo and lstopo-gui.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Especially since I keep flipping back and forth between hwloc 1.4 and the hwloc trunk, I continually get it wrong on the command line (e.g., use &quot;lstopo foo.pdf&quot; when I needed to use lstopo-gui, or use &quot;lstopo-gui foo.pdf&quot; when it doesn't exist).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think real users will be just as annoyed when they upgrade to hwloc 1.5.  I really think we should revisit the issue and find a way to accommodate those who don't want lots of dependencies in downstream binary packaging without splitting into 2 different binaries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** I say this because I think that the common case will be people who don't give a whit about extra dependencies and just want lstopo to output pretty jpg/pdf/whatever pictures -- just like it used to in all prior versions.  /etc/alternatives is not a good enough solution for us here upstream; consider platforms that don't have /etc/alternatives-like solutions (OS X, Windows).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>So what you dislike isn't the split, it's the fact that lstopo doesn't
<br>
behave as it did earlier. You want lstopo-nogui and lstopo instead of
<br>
lstopo and lstopo-gui. And alternative systems can make lstopo point to
<br>
lstopo-nogui when the real lstopo isn't installed.
<br>
<p>If you prefer adding plugin support, I won't be against : my intern will
<br>
likely need some plugin support in the core soon anyway.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3097.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-gui"</a>
<li><strong>Previous message:</strong> <a href="3095.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-gui"</a>
<li><strong>In reply to:</strong> <a href="3094.php">Jeff Squyres: "[hwloc-devel] lstopo-gui"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3097.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-gui"</a>
<li><strong>Reply:</strong> <a href="3097.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-gui"</a>
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
