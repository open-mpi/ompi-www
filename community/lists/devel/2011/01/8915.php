<?
$subject_val = "[OMPI devel] dummy component warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 24 09:26:42 2011" -->
<!-- isoreceived="20110124142642" -->
<!-- sent="Mon, 24 Jan 2011 09:26:37 -0500" -->
<!-- isosent="20110124142637" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] dummy component warnings" -->
<!-- id="BDB27C35-DC0B-4C3A-9C6B-7D8F10AC8B92_at_cisco.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] dummy component warnings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-24 09:26:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8916.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>Previous message:</strong> <a href="8914.php">Jeff Squyres: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8916.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>Reply:</strong> <a href="8916.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm getting these:
<br>
<p>&nbsp;&nbsp;CC     dummy_component.lo
<br>
dummy_component.c:25: warning: ISO C90 forbids specifying subobject to initialize
<br>
dummy_component.c:28: warning: ISO C90 forbids specifying subobject to initialize
<br>
dummy_component.c:29: warning: ISO C90 forbids specifying subobject to initialize
<br>
dummy_component.c:30: warning: ISO C90 forbids specifying subobject to initialize
<br>
dummy_component.c:31: warning: ISO C90 forbids specifying subobject to initialize
<br>
dummy_component.c:33: warning: ISO C90 forbids specifying subobject to initialize
<br>
dummy_component.c:34: warning: ISO C90 forbids specifying subobject to initialize
<br>
dummy_component.c:35: warning: ISO C90 forbids specifying subobject to initialize
<br>
dummy_component.c:37: warning: ISO C90 forbids specifying subobject to initialize
<br>
dummy_component.c:39: warning: ISO C90 forbids specifying subobject to initialize
<br>
dummy_component.c: In function &#145;component_open&#146;:
<br>
dummy_component.c:45: warning: unused variable &#145;c&#146;
<br>
dummy.c:67: warning: ISO C90 forbids specifying subobject to initialize
<br>
dummy.c:68: warning: ISO C90 forbids specifying subobject to initialize
<br>
dummy.c:69: warning: ISO C90 forbids specifying subobject to initialize
<br>
dummy.c:70: warning: ISO C90 forbids specifying subobject to initialize
<br>
&nbsp;&nbsp;CCLD   mca_debugger_dummy.la
<br>
<p>Did the autoconf tests not get added?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8916.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>Previous message:</strong> <a href="8914.php">Jeff Squyres: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8916.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>Reply:</strong> <a href="8916.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
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
