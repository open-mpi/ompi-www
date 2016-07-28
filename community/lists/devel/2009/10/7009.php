<?
$subject_val = "Re: [OMPI devel] Stack traces and message queues in MTT results.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 12:13:24 2009" -->
<!-- isoreceived="20091022161324" -->
<!-- sent="Thu, 22 Oct 2009 17:13:40 +0100" -->
<!-- isosent="20091022161340" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Stack traces and message queues in MTT results." -->
<!-- id="1256228020.3392.113.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5AC0B63A-20A8-4707-A277-BD649B9E7838_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Stack traces and message queues in MTT results.<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 12:13:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7010.php">Jeff Squyres: "[OMPI devel] SVN/trac server needs to reboot, Oct 23, 8am"</a>
<li><strong>Previous message:</strong> <a href="7008.php">Jeff Squyres: "Re: [OMPI devel] Stack traces and message queues in MTT results."</a>
<li><strong>In reply to:</strong> <a href="7008.php">Jeff Squyres: "Re: [OMPI devel] Stack traces and message queues in MTT results."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!  Ethan has committed the code to svn if other sites want to
<br>
enable it, it might be worth considering having one of the test sites
<br>
running debug code to be able to see variable values inside the MPI
<br>
library.
<br>
<p>It also appears that message queue support is broken on the head, the
<br>
DLL is complaining about not being able to find symbol
<br>
mca_topo_base_comm_1_0_0_t, I saw this myself on the head a few months
<br>
ago but can't reproduce it locally now.
<br>
<p>Ashley,
<br>
<p>On Thu, 2009-10-22 at 11:06 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; That rocks!!
</span><br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7010.php">Jeff Squyres: "[OMPI devel] SVN/trac server needs to reboot, Oct 23, 8am"</a>
<li><strong>Previous message:</strong> <a href="7008.php">Jeff Squyres: "Re: [OMPI devel] Stack traces and message queues in MTT results."</a>
<li><strong>In reply to:</strong> <a href="7008.php">Jeff Squyres: "Re: [OMPI devel] Stack traces and message queues in MTT results."</a>
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
