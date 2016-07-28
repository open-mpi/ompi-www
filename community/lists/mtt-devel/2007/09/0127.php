<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 24 21:00:50 2007" -->
<!-- isoreceived="20070925010050" -->
<!-- sent="Mon, 24 Sep 2007 21:00:32 -0400" -->
<!-- isosent="20070925010032" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] if whatami is missing..." -->
<!-- id="5BB8EA63-1EB7-4D1B-AC8D-DF7F24EEBA69_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-24 21:00:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0128.php">Jeff Squyres: "[MTT devel] If jpgraph is missing..."</a>
<li><strong>Previous message:</strong> <a href="0126.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: uh)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0129.php">Ethan Mallove: "Re: [MTT devel] if whatami is missing..."</a>
<li><strong>Reply:</strong> <a href="0129.php">Ethan Mallove: "Re: [MTT devel] if whatami is missing..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If the &quot;whatami&quot; shell script is missing and we get blank values for  
<br>
the following fields, should we error/abort the MTT client?  I'm  
<br>
thinking yes... opinions?
<br>
<p>- platform_type
<br>
- platform_hardware
<br>
- os_name
<br>
- os_version
<br>
<p>All of these fields are settable from the INI file (in the [MTT]  
<br>
section).  The default value for them is to invoke &amp;whatami() (with  
<br>
various arguments, which ends up invoking the &quot;whatami&quot; executable)  
<br>
to get the values.  So most people won't need to do anything.  But  
<br>
when we go to an MTT tarball that does not ship &quot;whatami&quot;, it is  
<br>
plausible that you might get empty values for these fields without  
<br>
realizing it.
<br>
<p>Thoughts?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0128.php">Jeff Squyres: "[MTT devel] If jpgraph is missing..."</a>
<li><strong>Previous message:</strong> <a href="0126.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: uh)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0129.php">Ethan Mallove: "Re: [MTT devel] if whatami is missing..."</a>
<li><strong>Reply:</strong> <a href="0129.php">Ethan Mallove: "Re: [MTT devel] if whatami is missing..."</a>
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
