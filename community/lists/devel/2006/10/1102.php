<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 10 08:51:51 2006" -->
<!-- isoreceived="20061010125151" -->
<!-- sent="Tue, 10 Oct 2006 08:51:46 -0400" -->
<!-- isosent="20061010125146" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] ORTE fixes on v1.1" -->
<!-- id="C1510FA2.2A2E6%jsquyres_at_cisco.com" -->
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
<strong>Date:</strong> 2006-10-10 08:51:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1103.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r12092"</a>
<li><strong>Previous message:</strong> <a href="1101.php">Lisandro Dalcin: "[OMPI devel] MPI_XXX_{get|set}_errhandler in general , and for files in particular"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All --
<br>
<p>Here's a topic for debate on the call today: I just committed a few fixes
<br>
for ORTE's fork pls on the v1.1 branch.  These fixes are no longer relevant
<br>
to the trunk because the fork pls no longer exists (it was replaced by the
<br>
odls).  Hence, they will eventually not be relevant for the v1.2 branch.
<br>
But I think they are definitely relevant *now* on the v1.2 branch.  So the
<br>
question is: do we apply them on the branch?
<br>
<p>Pro: it'll make testing the v1.2 branch easier
<br>
Con: it'll make at least one or two minor conflicts when the MAD stuff is
<br>
brought over to the v1.2 branch
<br>
<p>The relevant r numbers are r11140 and r11141 and a trivial one-line patch to
<br>
remove a duplicate free() in the fork pls terminate_job() function.  At
<br>
least some of these fixes may be relevant even after the MAD stuff is gone,
<br>
but some will not.
<br>
<p>Ralph -- please correct if I misrepresented any of this.
<br>
<p>Discuss!  :-)
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
<li><strong>Next message:</strong> <a href="1103.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r12092"</a>
<li><strong>Previous message:</strong> <a href="1101.php">Lisandro Dalcin: "[OMPI devel] MPI_XXX_{get|set}_errhandler in general , and for files in particular"</a>
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
