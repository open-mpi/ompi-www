<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 11 15:52:55 2007" -->
<!-- isoreceived="20071011195255" -->
<!-- sent="Thu, 11 Oct 2007 15:51:49 -0400" -->
<!-- isosent="20071011195149" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="[OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts" -->
<!-- id="C333F715.FA14%rlgraham_at_ornl.gov" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-11 15:51:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2426.php">Jeff Squyres: "Re: [OMPI devel] DDT for v1.2 branch"</a>
<li><strong>Previous message:</strong> <a href="2424.php">Jeff Squyres: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2428.php">George Bosilca: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<li><strong>Reply:</strong> <a href="2428.php">George Bosilca: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<li><strong>Reply:</strong> <a href="2436.php">Terry Dontje: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell	scripts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What:  Change the mpicc/mpicxx/mpif77/mpif90 from being binaries to being
<br>
shell scripts
<br>
<p>Why: Our build environment assumes that wrapper compilers will use the same
<br>
binary format that the Open MPI libraries do.  In cross-compile environment,
<br>
the MPI wrapper compilers will run on the front-end and need to run on the
<br>
front-end, and not the back-end.  Jeff has suggested this as the simplest
<br>
way to build back-end libraries, and front-end wrapper-compilers.
<br>
<p>When: within the next several weeks (for the 1.3 release)
<br>
<p>Timeout: 10/19/2007
<br>
<p><p>Rich
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2426.php">Jeff Squyres: "Re: [OMPI devel] DDT for v1.2 branch"</a>
<li><strong>Previous message:</strong> <a href="2424.php">Jeff Squyres: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2428.php">George Bosilca: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<li><strong>Reply:</strong> <a href="2428.php">George Bosilca: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<li><strong>Reply:</strong> <a href="2436.php">Terry Dontje: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell	scripts"</a>
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
