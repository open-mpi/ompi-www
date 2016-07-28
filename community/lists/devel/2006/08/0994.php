<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 15 15:51:37 2006" -->
<!-- isoreceived="20060815195137" -->
<!-- sent="Tue, 15 Aug 2006 13:51:33 -0600" -->
<!-- isosent="20060815195133" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI v1.2 branch started" -->
<!-- id="1155671493.23025.44.camel_at_boxtop.lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-15 15:51:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0995.php">Ralf Wildenhues: "[OMPI devel] robustify config against picky compiler flags"</a>
<li><strong>Previous message:</strong> <a href="0993.php">Joachim Worringen: "[OMPI devel] EuroPVM/MPI 2006: Early Registation Deadline ahead!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all -
<br>
<p>The release branch for the v1.2 release of Open MPI was created this
<br>
afternoon.  The branch was created from r11198 of the trunk.  A couple
<br>
of minor changes have been made to the v1.2 branch that did not go
<br>
through the ordinary branch release process:
<br>
<p>&nbsp;&nbsp;* remove btl:ud and pls:xcpu components
<br>
&nbsp;&nbsp;* Remove the orte-ps, orte-clean, and console tools
<br>
<p>The removal of the tools was by suggestion of Ralph and Josh, with no
<br>
complaints from others.  It was also suggested that orteprobe be
<br>
removed, but there was fear by Ralph that orteprobe was needed for other
<br>
functionality.  I did not remove the orteprobe code because of this --
<br>
if it isn't needed, then it can always be removed later through the
<br>
normal gatekeeper process.
<br>
<p>At this point, the v1.2 branch is handed over to the 1.2 release
<br>
managers (Terry Dontje and Rich Graham) and gatekeepers (Tim Mattox and
<br>
Dan Lacher).  Changes that need to be pushed into the v1.2 branch should
<br>
have 'changeset move request tickets filed in Trac -- be sure to mark
<br>
the milestone as 1.2.
<br>
<p>Nightly tarballs from the v1.2 branch will begin appearing tonight.
<br>
Remember, there are issues with v1.2 and Libtool 1.5 and certain
<br>
compiler combinations:
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2006/08/0984.php">http://www.open-mpi.org/community/lists/devel/2006/08/0984.php</a>
<br>
<p><p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0995.php">Ralf Wildenhues: "[OMPI devel] robustify config against picky compiler flags"</a>
<li><strong>Previous message:</strong> <a href="0993.php">Joachim Worringen: "[OMPI devel] EuroPVM/MPI 2006: Early Registation Deadline ahead!"</a>
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
