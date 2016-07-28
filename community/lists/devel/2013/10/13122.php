<?
$subject_val = "[OMPI devel] .mailmap added for github mirror";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 23 16:40:30 2013" -->
<!-- isoreceived="20131023204030" -->
<!-- sent="Wed, 23 Oct 2013 20:40:29 +0000" -->
<!-- isosent="20131023204029" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="[OMPI devel] .mailmap added for github mirror" -->
<!-- id="8E25A938F00ED34D90F8C49322FDF192B422EC_at_xmb-rcd-x09.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] .mailmap added for github mirror<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-23 16:40:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13123.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29489 - trunk/orte/mca/plm/base"</a>
<li><strong>Previous message:</strong> <a href="13121.php">Kenneth A. Lloyd: "Re: [OMPI devel] Open MPI shirts and more"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Based on discussion with Mellanox around the recent GitHub mirror updates, I've added a .mailmap file in r29494.  It helps address two goals:
<br>
<p>1) To be able to fix misspelled names without rewinding the Git history.
<br>
<p>2) To be able to add email addresses incrementally without rewinding Git history.  Mellanox would like email addresses so that they can automatically send build failure emails from their Jenkins continuous integration server.
<br>
<p>The initial version only contains email addresses for Cisco contributors.  I've put commented-out templates for all other contributors listed in the AUTHORS file.  If you are a contributor and you would like to opt-in to having your email address listed in this format, please follow the editing instructions listed in that file on the trunk.
<br>
<p>At some point I'll CMR the latest state of the file to the v1.7 branch as well.
<br>
<p>For more information about git's usage of the .mailmap file, see the man page for git-shortlog: <a href="https://www.kernel.org/pub/software/scm/git/docs/git-shortlog.html">https://www.kernel.org/pub/software/scm/git/docs/git-shortlog.html</a>
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13123.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29489 - trunk/orte/mca/plm/base"</a>
<li><strong>Previous message:</strong> <a href="13121.php">Kenneth A. Lloyd: "Re: [OMPI devel] Open MPI shirts and more"</a>
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
