<?
$subject_val = "[OMPI devel] Please set svn:ignore properly";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 09:46:51 2008" -->
<!-- isoreceived="20080212144651" -->
<!-- sent="Tue, 12 Feb 2008 09:46:33 -0500" -->
<!-- isosent="20080212144633" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Please set svn:ignore properly" -->
<!-- id="7AEE05B2-F141-4FD7-AD20-747483F44CAB_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Please set svn:ignore properly<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 09:46:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3210.php">Jeff Squyres: "[OMPI devel] more memchecker q's"</a>
<li><strong>Previous message:</strong> <a href="3208.php">Jeff Squyres: "Re: [OMPI devel] Something wrong with vt?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3235.php">Ralph Castain: "Re: [OMPI devel] Please set svn:ignore properly"</a>
<li><strong>Reply:</strong> <a href="3235.php">Ralph Castain: "Re: [OMPI devel] Please set svn:ignore properly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Developers --
<br>
<p>When you add a new component, framework, or anything that includes one  
<br>
or more new directories: please be sure to set the svn:ignore property  
<br>
on each new directory properly.  Here's the SVN docs on the svn:ignore  
<br>
property:
<br>
<p><a href="http://svnbook.red-bean.com/en/1.4/svn-book.html#svn.advanced.props.special.ignore">http://svnbook.red-bean.com/en/1.4/svn-book.html#svn.advanced.props.special.ignore</a>
<br>
<p>It is proper to ignore all automatically-generated files, such as (but  
<br>
not limited to):
<br>
<p>*.la
<br>
*.lo
<br>
.libs
<br>
.deps
<br>
.dirstamp
<br>
Makefile
<br>
Makefile.in
<br>
static-components.h
<br>
...etc.
<br>
<p>Thanks.
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
<li><strong>Next message:</strong> <a href="3210.php">Jeff Squyres: "[OMPI devel] more memchecker q's"</a>
<li><strong>Previous message:</strong> <a href="3208.php">Jeff Squyres: "Re: [OMPI devel] Something wrong with vt?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3235.php">Ralph Castain: "Re: [OMPI devel] Please set svn:ignore properly"</a>
<li><strong>Reply:</strong> <a href="3235.php">Ralph Castain: "Re: [OMPI devel] Please set svn:ignore properly"</a>
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
