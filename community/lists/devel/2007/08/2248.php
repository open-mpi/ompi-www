<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 28 14:49:08 2007" -->
<!-- isoreceived="20070828184908" -->
<!-- sent="Tue, 28 Aug 2007 14:48:42 -0400" -->
<!-- isosent="20070828184842" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Patch for reporter and friends" -->
<!-- id="7AF120E9-BC53-4E09-BC1A-A6A6F20AA48D_at_cisco.com" -->
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
<strong>Date:</strong> 2007-08-28 14:48:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2249.php">Jeff Squyres: "Re: [OMPI devel] Patch for reporter and friends"</a>
<li><strong>Previous message:</strong> <a href="2247.php">Ralph H Castain: "Re: [OMPI devel] [devel-core]  [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2249.php">Jeff Squyres: "Re: [OMPI devel] Patch for reporter and friends"</a>
<li><strong>Reply:</strong> <a href="2249.php">Jeff Squyres: "Re: [OMPI devel] Patch for reporter and friends"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Attached is a patch for the PHP side of things that does the following:
<br>
<p>&nbsp;&nbsp;* Creates a config.inc file for centralization of various user- 
<br>
settable parameters:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* HTTP username/password for curl (passwords still protected; see  
<br>
code)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* MTT database name/username/password
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* HTML header / footer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* Google Analytics account number
<br>
&nbsp;&nbsp;* Use the config.inc values in reporter, stats, and submit
<br>
&nbsp;&nbsp;* Preliminary GA integration; if GA account number set in config.inc:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* Report actual reporter URL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* Report stats URL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* Note that submits are not tracked by GA because the MTT client  
<br>
does not understand javascript
<br>
&nbsp;&nbsp;* Moved &quot;deny_mirror&quot; functionality out of report.inc to config.inc  
<br>
because it's very www.open-mpi.org-specific
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems


</pre>
<p>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2248/mtt-php.patch">mtt-php.patch</a>
</ul>
<!-- attachment="mtt-php.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2249.php">Jeff Squyres: "Re: [OMPI devel] Patch for reporter and friends"</a>
<li><strong>Previous message:</strong> <a href="2247.php">Ralph H Castain: "Re: [OMPI devel] [devel-core]  [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2249.php">Jeff Squyres: "Re: [OMPI devel] Patch for reporter and friends"</a>
<li><strong>Reply:</strong> <a href="2249.php">Jeff Squyres: "Re: [OMPI devel] Patch for reporter and friends"</a>
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
