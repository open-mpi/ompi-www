<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 16 08:49:17 2006" -->
<!-- isoreceived="20060316134917" -->
<!-- sent="Thu, 16 Mar 2006 14:49:07 +0100" -->
<!-- isosent="20060316134907" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="[OMPI devel] ompi/Makefile.am: DIST_SUBDIRS" -->
<!-- id="20060316134907.GA8580_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-16 08:49:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0753.php">Brian Barrett: "Re: [OMPI devel] ompi/Makefile.am: DIST_SUBDIRS"</a>
<li><strong>Previous message:</strong> <a href="0751.php">Jeff Squyres \(jsquyres\): "[OMPI devel] Reminder: SVN outage today"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0753.php">Brian Barrett: "Re: [OMPI devel] ompi/Makefile.am: DIST_SUBDIRS"</a>
<li><strong>Reply:</strong> <a href="0753.php">Brian Barrett: "Re: [OMPI devel] ompi/Makefile.am: DIST_SUBDIRS"</a>
<li><strong>Maybe reply:</strong> <a href="0754.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] ompi/Makefile.am: DIST_SUBDIRS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please distribute trunk/ompi/datatype as below, thanks!  :-)
<br>
<p>BTW, a 'svn update' currently wants a password from me:
<br>
| Authentication realm: &lt;<a href="http://svn.open-mpi.org:80">http://svn.open-mpi.org:80</a>&gt; Open MPI Subversion repositories access
<br>
<p>A bit weird for read-only access.. but I guess that is part of the
<br>
temporary changes.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>Index: ompi/Makefile.am
<br>
===================================================================
<br>
--- ompi/Makefile.am	(revision 9285)
<br>
+++ ompi/Makefile.am	(working copy)
<br>
@@ -64,6 +64,7 @@
<br>
&nbsp;
<br>
&nbsp;DIST_SUBDIRS = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include \
<br>
+	datatype \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;debuggers \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;etc \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi \
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0753.php">Brian Barrett: "Re: [OMPI devel] ompi/Makefile.am: DIST_SUBDIRS"</a>
<li><strong>Previous message:</strong> <a href="0751.php">Jeff Squyres \(jsquyres\): "[OMPI devel] Reminder: SVN outage today"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0753.php">Brian Barrett: "Re: [OMPI devel] ompi/Makefile.am: DIST_SUBDIRS"</a>
<li><strong>Reply:</strong> <a href="0753.php">Brian Barrett: "Re: [OMPI devel] ompi/Makefile.am: DIST_SUBDIRS"</a>
<li><strong>Maybe reply:</strong> <a href="0754.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] ompi/Makefile.am: DIST_SUBDIRS"</a>
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
