<?
$subject_val = "[OMPI devel] problem compiling trunk after r31810";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 18 22:44:03 2014" -->
<!-- isoreceived="20140519024403" -->
<!-- sent="Mon, 19 May 2014 11:44:00 +0900" -->
<!-- isosent="20140519024400" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] problem compiling trunk after r31810" -->
<!-- id="CAAkFZ5v=tJ_gjgrN8itYJGMsTa1FjRv=a9xJ7CGB+O+aRAdseA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] problem compiling trunk after r31810<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-18 22:44:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14824.php">Ralph Castain: "Re: [OMPI devel] problem compiling trunk after r31810"</a>
<li><strong>Previous message:</strong> <a href="14822.php">Ralph Castain: "[OMPI devel] RFC: revamp of ORTE global structures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14824.php">Ralph Castain: "Re: [OMPI devel] problem compiling trunk after r31810"</a>
<li><strong>Reply:</strong> <a href="14824.php">Ralph Castain: "Re: [OMPI devel] problem compiling trunk after r31810"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>i was unable to compile trunk after svn update.
<br>
<p>i use different directories (aka VPATH) for source and build
<br>
error message is related to the missing shmem/java directory
<br>
from the oshmem directory.
<br>
<p>The attached patch fixed this.
<br>
<p>/* that being said, i did not try to build java for oshmem,
<br>
so the i did not commit this patch since it might not work when needed */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14823/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14823/oshmem.patch">oshmem.patch</a>
</ul>
<!-- attachment="oshmem.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14824.php">Ralph Castain: "Re: [OMPI devel] problem compiling trunk after r31810"</a>
<li><strong>Previous message:</strong> <a href="14822.php">Ralph Castain: "[OMPI devel] RFC: revamp of ORTE global structures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14824.php">Ralph Castain: "Re: [OMPI devel] problem compiling trunk after r31810"</a>
<li><strong>Reply:</strong> <a href="14824.php">Ralph Castain: "Re: [OMPI devel] problem compiling trunk after r31810"</a>
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
