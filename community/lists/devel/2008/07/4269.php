<?
$subject_val = "[OMPI devel] Error after commit";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  3 13:58:17 2008" -->
<!-- isoreceived="20080703175817" -->
<!-- sent="Thu, 03 Jul 2008 11:58:04 -0600" -->
<!-- isosent="20080703175804" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Error after commit" -->
<!-- id="C4926F4C.566C%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Error after commit<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-03 13:58:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4270.php">Jeff Squyres: "Re: [OMPI devel] Error after commit"</a>
<li><strong>Previous message:</strong> <a href="4268.php">Torsten Hoefler: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4270.php">Jeff Squyres: "Re: [OMPI devel] Error after commit"</a>
<li><strong>Reply:</strong> <a href="4270.php">Jeff Squyres: "Re: [OMPI devel] Error after commit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not sure if anyone else is seeing this, but I got a strange error output
<br>
immediately following my last commit to the trunk:
<br>
<p>Warning: 'post-commit' hook failed with error output:
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;/opt/shnadm/rep/ompi/hooks/trac-post-commit-hook&quot;, line 200, in ?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CommitHook()
<br>
&nbsp;&nbsp;File &quot;/opt/shnadm/rep/ompi/hooks/trac-post-commit-hook&quot;, line 145, in
<br>
__init__
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.env = open_environment(project)
<br>
&nbsp;&nbsp;File &quot;/opt/trac/lib/python2.3/site-packages/trac/env.py&quot;, line 463, in
<br>
open_environment
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if env.needs_upgrade():
<br>
&nbsp;&nbsp;File &quot;/opt/trac/lib/python2.3/site-packages/trac/env.py&quot;, line 343, in
<br>
needs_upgrade
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if participant.environment_needs_upgrade(db):
<br>
&nbsp;&nbsp;File &quot;/opt/trac/lib/python2.3/site-packages/trac/env.py&quot;, line 401, in
<br>
environment_needs_upgrade
<br>
&nbsp;&nbsp;&nbsp;&nbsp;raise TracError, 'Database newer than Trac version'
<br>
trac.core.TracError: Database newer than Trac version
<br>
<p><p>Anyone have any insights? I know Trac was just updated - do we need to do
<br>
something to our local checkouts and/or systems? Note this commit was done
<br>
from milliways.osl.iu.edu, so perhaps there is some issue between the
<br>
systems at IU?
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4270.php">Jeff Squyres: "Re: [OMPI devel] Error after commit"</a>
<li><strong>Previous message:</strong> <a href="4268.php">Torsten Hoefler: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4270.php">Jeff Squyres: "Re: [OMPI devel] Error after commit"</a>
<li><strong>Reply:</strong> <a href="4270.php">Jeff Squyres: "Re: [OMPI devel] Error after commit"</a>
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
