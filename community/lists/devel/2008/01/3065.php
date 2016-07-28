<?
$subject_val = "[OMPI devel] Configure error/warning in nightly tarball";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 18:50:32 2008" -->
<!-- isoreceived="20080128235032" -->
<!-- sent="Mon, 28 Jan 2008 18:49:28 -0500" -->
<!-- isosent="20080128234928" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI devel] Configure error/warning in nightly tarball" -->
<!-- id="D34659BD-93AD-4F46-B2F4-BA3B97D557FE_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Configure error/warning in nightly tarball<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-28 18:49:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3066.php">George Bosilca: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Previous message:</strong> <a href="3064.php">Jeff Squyres: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3071.php">Jeff Squyres: "Re: [OMPI devel] Configure error/warning in nightly tarball"</a>
<li><strong>Reply:</strong> <a href="3071.php">Jeff Squyres: "Re: [OMPI devel] Configure error/warning in nightly tarball"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I noticed that when running configure on the nightly snapshot tarball  
<br>
the following errors (warnings really, since it didn't stop  
<br>
configure) were produced. These seem to be remnants from the  
<br>
autogen.sh script pointing to files that do not (and should not)  
<br>
exist in the distribution.
<br>
<p>---------------------
<br>
shell$ ./configure --prefix=/foo/bar/
<br>
...
<br>
grep: ./orte/mca/gpr/proxy/configure.params: No such file or directory
<br>
grep: ./orte/mca/gpr/replica/configure.params: No such file or directory
<br>
grep: ./orte/mca/gpr/null/configure.params: No such file or directory
<br>
---------------------
<br>
<p>Any thoughts on how to fix this? I was using the r17175 nightly tarball.
<br>
<p>Cheers,
<br>
Josh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3066.php">George Bosilca: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Previous message:</strong> <a href="3064.php">Jeff Squyres: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3071.php">Jeff Squyres: "Re: [OMPI devel] Configure error/warning in nightly tarball"</a>
<li><strong>Reply:</strong> <a href="3071.php">Jeff Squyres: "Re: [OMPI devel] Configure error/warning in nightly tarball"</a>
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
