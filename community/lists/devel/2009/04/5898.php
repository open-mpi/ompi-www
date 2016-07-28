<?
$subject_val = "[OMPI devel] r21096";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 06:31:18 2009" -->
<!-- isoreceived="20090429103118" -->
<!-- sent="Wed, 29 Apr 2009 06:31:13 -0400" -->
<!-- isosent="20090429103113" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] r21096" -->
<!-- id="AE0B777F-7E2B-462B-8E8A-5605ACBD9623_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] r21096<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-29 06:31:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5899.php">Ralph Castain: "Re: [OMPI devel] Branching for 1.5.0"</a>
<li><strong>Previous message:</strong> <a href="5897.php">Jeff Squyres: "Re: [OMPI devel] Branching for 1.5.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5900.php">Rainer Keller: "Re: [OMPI devel] r21096"</a>
<li><strong>Reply:</strong> <a href="5900.php">Rainer Keller: "Re: [OMPI devel] r21096"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rainer --
<br>
<p>Can you explain this a little more:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;In ompi/mpi/c/ header files are moved up into the actual c-file,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;where necessary (these are the only additional #include),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;otherwise it is only deletions of #include (apart from the above
<br>
&nbsp;&nbsp;&nbsp;&nbsp;additions required due to notifier...)
<br>
<p>It looks like the addition of
<br>
<p>+#include &quot;ompi/runtime/params.h&quot;
<br>
+#include &quot;ompi/communicator/communicator.h&quot;
<br>
+#include &quot;ompi/errhandler/errhandler.h&quot;
<br>
<p>to lots of ompi/mpi/c/*.c files.  I don't quite grok from your commit  
<br>
comment why that was a good thing...?
<br>
<p>Thanks!
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
<li><strong>Next message:</strong> <a href="5899.php">Ralph Castain: "Re: [OMPI devel] Branching for 1.5.0"</a>
<li><strong>Previous message:</strong> <a href="5897.php">Jeff Squyres: "Re: [OMPI devel] Branching for 1.5.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5900.php">Rainer Keller: "Re: [OMPI devel] r21096"</a>
<li><strong>Reply:</strong> <a href="5900.php">Rainer Keller: "Re: [OMPI devel] r21096"</a>
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
