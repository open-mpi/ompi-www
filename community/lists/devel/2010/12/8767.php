<?
$subject_val = "[OMPI devel] Gatekeeper request";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  7 21:53:56 2010" -->
<!-- isoreceived="20101208025356" -->
<!-- sent="Tue, 7 Dec 2010 19:53:48 -0700" -->
<!-- isosent="20101208025348" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Gatekeeper request" -->
<!-- id="0038C7EE-D1F9-444E-9981-3E3AFF25D2A1_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Gatekeeper request<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-07 21:53:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8768.php">David Singleton: "[OMPI devel] memory binding"</a>
<li><strong>Previous message:</strong> <a href="8766.php">Jeff Squyres: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>When you submit a CMR that includes a patch (as opposed to applying a commit), would you -please- include a note indicating that &quot;this patch adds a new file&quot;?
<br>
<p>Unfortunately, applying a patch doesn't cause svn to add the new file. This leaves the branch broken without any warning. The gatekeeper can only catch this when they happen to do an &quot;svn status&quot; and notice there are untracked files...and then try to figure out if they are supposed to be tracked, are new generated files, or...?
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8768.php">David Singleton: "[OMPI devel] memory binding"</a>
<li><strong>Previous message:</strong> <a href="8766.php">Jeff Squyres: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
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
