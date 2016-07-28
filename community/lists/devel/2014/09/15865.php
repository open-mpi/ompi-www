<?
$subject_val = "[OMPI devel] RFC: remove the --with-threads configure option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 07:03:05 2014" -->
<!-- isoreceived="20140918110305" -->
<!-- sent="Thu, 18 Sep 2014 20:03:18 +0900" -->
<!-- isosent="20140918110318" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: remove the --with-threads configure option" -->
<!-- id="541ABBF6.4010208_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: remove the --with-threads configure option<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-18 07:03:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15866.php">Alina Sklarevich: "Re: [OMPI devel] Need to know your Github ID"</a>
<li><strong>Previous message:</strong> <a href="15864.php">Alex Margolin: "Re: [OMPI devel] Need to know your Github ID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15867.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove the --with-threads configure option"</a>
<li><strong>Reply:</strong> <a href="15867.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove the --with-threads configure option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>for both trunk and v1.8 branch, configure takes the --with-threads option.
<br>
valid usages are
<br>
--with-threads, --with-threads=yes, --with-threads=posix and
<br>
--with-threads=no
<br>
<p>/* v1.6 used to support the --with-threads=solaris */
<br>
<p>if we try to configure with --with-threads=no, this will result in a
<br>
fatal error :
<br>
<p>checking for working POSIX threads package... yes
<br>
checking for type of thread support... none
<br>
configure: error: User requested MPI threads, but no threading model
<br>
supported
<br>
<p>bottom line, the --with-threads configure option is useless in both v1.8
<br>
and trunk.
<br>
<p>is there any plan to support --with-threads=no in the future ?
<br>
if no, i'd like to simply remove the --with-threads option
<br>
<p>Thanks in advance for your feedback
<br>
<p>Gilles
<br>
<p>FYI
<br>
there is still some dead code / bug related to solaris threads, and this
<br>
will be removed / fixed
<br>
see <a href="https://svn.open-mpi.org/trac/ompi/ticket/4911">https://svn.open-mpi.org/trac/ompi/ticket/4911</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15866.php">Alina Sklarevich: "Re: [OMPI devel] Need to know your Github ID"</a>
<li><strong>Previous message:</strong> <a href="15864.php">Alex Margolin: "Re: [OMPI devel] Need to know your Github ID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15867.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove the --with-threads configure option"</a>
<li><strong>Reply:</strong> <a href="15867.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove the --with-threads configure option"</a>
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
