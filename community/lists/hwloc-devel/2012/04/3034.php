<?
$subject_val = "Re: [hwloc-devel] lstopo-nox strikes back";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 11:05:02 2012" -->
<!-- isoreceived="20120425150502" -->
<!-- sent="Wed, 25 Apr 2012 17:04:56 +0200" -->
<!-- isosent="20120425150456" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo-nox strikes back" -->
<!-- id="20120425150456.GV29782_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1093730575.108736.1335366181335.JavaMail.root_at_zmbs5.inria.fr" -->
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
<strong>Date:</strong> 2012-04-25 11:04:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3035.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Previous message:</strong> <a href="3033.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Maybe in reply to:</strong> <a href="3022.php">Brice Goglin: "[hwloc-devel] lstopo-nox strikes back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3035.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Reply:</strong> <a href="3035.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Wed 25 Apr 2012 17:03:01 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Apr 25, 2012, at 10:58 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It already adapts itself, here.  The issue is that the user has to
</span><br>
<span class="quotelev2">&gt; &gt; install an X version to get potential for X support.  Which brings X.
</span><br>
<span class="quotelev2">&gt; &gt; If you do this with plugins, and you want automatic adaptation to
</span><br>
<span class="quotelev2">&gt; &gt; whether X is there, you'll have to install the plugin (it can't install
</span><br>
<span class="quotelev2">&gt; &gt; itself magically). And then that brings X too...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, understood, but my point here is that there could be multiple hwloc packages -- one that installs the core and some base set of lstopo plugins (probably not cairo and X).  And then secondary packages install lstopo's cairo and X plugins.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hence, a sysadmin can choose whether to have cairo/X support (because presumably they will both pull in bunches of dependencies).  
</span><br>
<p>I understand that too.
<br>
<p><span class="quotelev1">&gt; But the user always runs &quot;lstopo&quot; and gets the choice of whatever outputs the sysadmin has chosen to install.
</span><br>
<p>Which is quite different from what you said above :)
<br>
And it's what is already achieved by the current status.
<br>
<p><span class="quotelev3">&gt; &gt;&gt; But if I'm in the minority, no problem...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If I'm not, I can work on a patch to see if it would be horribly disruptive...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It would most probably not be, we already use a backend style, so it's a
</span><br>
<span class="quotelev2">&gt; &gt; matter of putting the code in separate plugins.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That was my assumption.  I am guessing/assuming that it's a matter of:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - adjusting configury to use libltdl
</span><br>
<span class="quotelev1">&gt; - building the back-ends as DSOs, installing them
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; - adapting the back-ends to advertise their function pointers neutrally
</span><br>
<p>They should be more or less already doing that.
<br>
<p><span class="quotelev1">&gt; - adding a bit of dlopen-based logic to find/load all available backends
</span><br>
<p>Yes.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3035.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Previous message:</strong> <a href="3033.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Maybe in reply to:</strong> <a href="3022.php">Brice Goglin: "[hwloc-devel] lstopo-nox strikes back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3035.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Reply:</strong> <a href="3035.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
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
