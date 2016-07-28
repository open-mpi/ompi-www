<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 30 08:39:07 2006" -->
<!-- isoreceived="20060830123907" -->
<!-- sent="Wed, 30 Aug 2006 08:38:57 -0400" -->
<!-- isosent="20060830123857" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Change in snapshot tarball generation" -->
<!-- id="C11AFF21.24D24%jsquyres_at_cisco.com" -->
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
<strong>Date:</strong> 2006-08-30 08:38:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1019.php">Brian Barrett: "[OMPI devel] Stack trace printing"</a>
<li><strong>Previous message:</strong> <a href="1017.php">Jeff Squyres: "[OMPI devel] FW: EuroPVM/MPI 2006: Open Forum - invitation to participate"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have changed how we generate snapshot tarballs (previously called
<br>
&quot;nightly&quot; tarballs).  The old way was that if there had been any commits at
<br>
all to the SVN repository in the previous 24 hours, we would generate new
<br>
tarballs for all active OMPI development trees.  For example, if there had
<br>
been even a single commit to the SVN trunk in the previous 24 hours,
<br>
snapshot tarballs would be created for the trunk, v1.0, v1.1, and v1.2 --
<br>
regardless of whether anything had happened on the v1.0, v1.1, or v1.2
<br>
branches.
<br>
<p>The nightly snapshot tarball generation has now been made smarter in two
<br>
ways:
<br>
<p>1. Tarballs for particular branches will only be generated if there was a
<br>
change *to that branch* since the last time a snapshot was generated.
<br>
Hence, snapshots may not be generated every night.
<br>
<p>2. The SVN r number of snapshot tarballs will reflect the last commit on
<br>
that branch -- not the HEAD when the tarball was made.
<br>
<p>For pedantic reasons, we ended up deleting all prior snapshots as of today
<br>
and starting with a clean slate (e.g., all the existing v1.0 snapshots were
<br>
identical, anyway, because nothing has changed on that branch in a while).
<br>
Because some branches change at lower frequency than others, there may only
<br>
be one snapshot available for a while.  For example, most current work is
<br>
focused on the trunk, v1.1, and v1.2 -- there is little work on the v1.0
<br>
branch.
<br>
<p>I doubt that this will impact anyone, but I did want to explain why you
<br>
would potentially only see one snapshot in the v1.0 portion of the web site.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1019.php">Brian Barrett: "[OMPI devel] Stack trace printing"</a>
<li><strong>Previous message:</strong> <a href="1017.php">Jeff Squyres: "[OMPI devel] FW: EuroPVM/MPI 2006: Open Forum - invitation to participate"</a>
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
