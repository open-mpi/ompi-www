<?
$subject_val = "Re: [hwloc-devel] lstopo-nox strikes back";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 11:18:30 2012" -->
<!-- isoreceived="20120425151830" -->
<!-- sent="Wed, 25 Apr 2012 17:18:24 +0200" -->
<!-- isosent="20120425151824" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo-nox strikes back" -->
<!-- id="20120425151824.GW29782_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2005323505.108830.1335366688470.JavaMail.root_at_zmbs5.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] lstopo-nox strikes back<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 11:18:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3037.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Previous message:</strong> <a href="3035.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Maybe in reply to:</strong> <a href="3022.php">Brice Goglin: "[hwloc-devel] lstopo-nox strikes back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3037.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Reply:</strong> <a href="3037.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Wed 25 Apr 2012 17:11:28 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Yes: the lstopo user gets whatever the sysadmin chose to install.
</span><br>
<span class="quotelev1">&gt; No: the system is not flexible for binary distributions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meaning: I see 2 ways to have binary packages that have X/cairo support and don't have X/cairo support:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Have multiple, complimentary hwloc packages (i.e., they can both be installed at the same time) that have different lstopo executable names
</span><br>
<span class="quotelev1">&gt; 2. Have multiple, exclusionary hwloc packages that both use the same &quot;lstopo&quot; executable name
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My goal in the plugin suggestion is to have one lstopo executable but allow multiple binary packages that can add or remove lstopo output support by installing/removing plugins.
</span><br>
<p>I fully understand that.
<br>
<p>But it still seems overkill to me to use approach 1 while approach 2
<br>
just works.  Yes, that conflicts with the original issue of the thread.
<br>
It happens that on Debian we can actually make hwloc and hwloc-nox
<br>
co-installable, by just putting a diversion: the hwloc /usr/bin/lstopo
<br>
would take over the hwloc-nox /usr/bin/lstopo.  Same command name, and
<br>
installation flexibility.
<br>
<p>Of course, my finding the whole thing overkill doesn't mean that I'm
<br>
against it being done.  I'm just giving my point of view.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3037.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Previous message:</strong> <a href="3035.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Maybe in reply to:</strong> <a href="3022.php">Brice Goglin: "[hwloc-devel] lstopo-nox strikes back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3037.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Reply:</strong> <a href="3037.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
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
