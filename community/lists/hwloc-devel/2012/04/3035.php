<?
$subject_val = "Re: [hwloc-devel] lstopo-nox strikes back";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 11:11:12 2012" -->
<!-- isoreceived="20120425151112" -->
<!-- sent="Wed, 25 Apr 2012 11:11:07 -0400" -->
<!-- isosent="20120425151107" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo-nox strikes back" -->
<!-- id="23895226-731A-4D5B-AE09-6ACACA88303D_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120425150456.GV29782_at_type.famille.thibault.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 11:11:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3036.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Previous message:</strong> <a href="3034.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>In reply to:</strong> <a href="3034.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3036.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 25, 2012, at 11:04 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Yes, understood, but my point here is that there could be multiple hwloc packages -- one that installs the core and some base set of lstopo plugins (probably not cairo and X).  And then secondary packages install lstopo's cairo and X plugins.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hence, a sysadmin can choose whether to have cairo/X support (because presumably they will both pull in bunches of dependencies).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand that too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But the user always runs &quot;lstopo&quot; and gets the choice of whatever outputs the sysadmin has chosen to install.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which is quite different from what you said above :)
</span><br>
<p>Hmm.  Perhaps we're having a failure to communicate here.  :-(
<br>
<p><span class="quotelev1">&gt; And it's what is already achieved by the current status.
</span><br>
<p>Yes and no.
<br>
<p>Yes: the lstopo user gets whatever the sysadmin chose to install.
<br>
No: the system is not flexible for binary distributions
<br>
<p>Meaning: I see 2 ways to have binary packages that have X/cairo support and don't have X/cairo support:
<br>
<p>1. Have multiple, complimentary hwloc packages (i.e., they can both be installed at the same time) that have different lstopo executable names
<br>
2. Have multiple, exclusionary hwloc packages that both use the same &quot;lstopo&quot; executable name
<br>
<p>My goal in the plugin suggestion is to have one lstopo executable but allow multiple binary packages that can add or remove lstopo output support by installing/removing plugins.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3036.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Previous message:</strong> <a href="3034.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>In reply to:</strong> <a href="3034.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3036.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
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
