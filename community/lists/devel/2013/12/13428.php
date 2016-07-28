<?
$subject_val = "[OMPI devel] Configure refactor branch / merge";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 13 16:20:21 2013" -->
<!-- isoreceived="20131213212021" -->
<!-- sent="Fri, 13 Dec 2013 21:20:11 +0000" -->
<!-- isosent="20131213212011" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="[OMPI devel] Configure refactor branch / merge" -->
<!-- id="CED0D612.165A6%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Configure refactor branch / merge<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-13 16:20:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13429.php">Barrett, Brian W: "[OMPI devel] IB tests in OSHMEM"</a>
<li><strong>Previous message:</strong> <a href="13427.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI developer's meeting today"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>As some of you know, I've been working on refactoring the configure script
<br>
to be a bit more friendly to our multi-project approach.  I'm relatively
<br>
happy with where I ended up and would like to merge it into the trunk next
<br>
week.  The biggest change is in the OMPI_MCA macro; it's now per-project
<br>
and takes an argument as to whether that project is enabled (so you don't
<br>
run all the component tests for OSHMEM if you --disable-oshmem, for
<br>
example).
<br>
<p>The branch is in SVN at:
<br>
<p>&nbsp;&nbsp;<a href="https://svn.open-mpi.org/svn/ompi/tmp-public/bwb-config-refactor">https://svn.open-mpi.org/svn/ompi/tmp-public/bwb-config-refactor</a>
<br>
<p>Let me know if you see any issues.  Otherwise, I'll bring it into the
<br>
trunk end of next week.
<br>
<p><p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13429.php">Barrett, Brian W: "[OMPI devel] IB tests in OSHMEM"</a>
<li><strong>Previous message:</strong> <a href="13427.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI developer's meeting today"</a>
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
