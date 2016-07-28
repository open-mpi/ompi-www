<?
$subject_val = "[OMPI devel] vt Makefile.in's";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 09:58:07 2008" -->
<!-- isoreceived="20080128145807" -->
<!-- sent="Mon, 28 Jan 2008 09:57:29 -0500" -->
<!-- isosent="20080128145729" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] vt Makefile.in's" -->
<!-- id="B87613DB-2A83-4D02-A0E6-E47F524BCBCC_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] vt Makefile.in's<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-28 09:57:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3062.php">Andreas Knüpfer: "[OMPI devel] VT in trunk + how to disable"</a>
<li><strong>Previous message:</strong> <a href="3060.php">Jeff Squyres: "Re: [OMPI devel] Trunk borked"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see the following in SVN:
<br>
<p>&nbsp;&nbsp;&nbsp;ompi/contrib/vt/Makefile.in
<br>
&nbsp;&nbsp;&nbsp;ompi/contrib/vt/wrappers/Makefile.in
<br>
<p>I don't think that these should in SVN because there are corresponding  
<br>
Makefile.am's in those dirs.
<br>
<p>I'll remove them and update svn:ignore in those dirs tonight (because  
<br>
removing them will cause everyone to re-autogen).
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
<li><strong>Next message:</strong> <a href="3062.php">Andreas Knüpfer: "[OMPI devel] VT in trunk + how to disable"</a>
<li><strong>Previous message:</strong> <a href="3060.php">Jeff Squyres: "Re: [OMPI devel] Trunk borked"</a>
<!-- nextthread="start" -->
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
