<?
$subject_val = "Re: [hwloc-devel] lstopo-nox strikes back";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 11:02:44 2012" -->
<!-- isoreceived="20120425150244" -->
<!-- sent="Wed, 25 Apr 2012 11:02:39 -0400" -->
<!-- isosent="20120425150239" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo-nox strikes back" -->
<!-- id="37486219-290F-41A9-B5D9-E86EA67A38D2_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120425145848.GT29782_at_type.famille.thibault.fr" -->
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
<strong>Date:</strong> 2012-04-25 11:02:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3034.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Previous message:</strong> <a href="3032.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>In reply to:</strong> <a href="3031.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3032.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 25, 2012, at 10:58 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; It already adapts itself, here.  The issue is that the user has to
</span><br>
<span class="quotelev1">&gt; install an X version to get potential for X support.  Which brings X.
</span><br>
<span class="quotelev1">&gt; If you do this with plugins, and you want automatic adaptation to
</span><br>
<span class="quotelev1">&gt; whether X is there, you'll have to install the plugin (it can't install
</span><br>
<span class="quotelev1">&gt; itself magically). And then that brings X too...
</span><br>
<p>Yes, understood, but my point here is that there could be multiple hwloc packages -- one that installs the core and some base set of lstopo plugins (probably not cairo and X).  And then secondary packages install lstopo's cairo and X plugins.
<br>
<p>Hence, a sysadmin can choose whether to have cairo/X support (because presumably they will both pull in bunches of dependencies).  
<br>
<p>But the user always runs &quot;lstopo&quot; and gets the choice of whatever outputs the sysadmin has chosen to install.
<br>
<p><span class="quotelev2">&gt;&gt; But if I'm in the minority, no problem...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I'm not, I can work on a patch to see if it would be horribly disruptive...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would most probably not be, we already use a backend style, so it's a
</span><br>
<span class="quotelev1">&gt; matter of putting the code in separate plugins.
</span><br>
<p><p>That was my assumption.  I am guessing/assuming that it's a matter of:
<br>
<p>- adjusting configury to use libltdl
<br>
- building the back-ends as DSOs, installing them
<br>
- adapting the back-ends to advertise their function pointers neutrally
<br>
- adding a bit of dlopen-based logic to find/load all available backends
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
<li><strong>Next message:</strong> <a href="3034.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Previous message:</strong> <a href="3032.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>In reply to:</strong> <a href="3031.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3032.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
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
