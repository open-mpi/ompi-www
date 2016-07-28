<?
$subject_val = "[hwloc-devel] python bindings updated to 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  4 16:18:19 2013" -->
<!-- isoreceived="20130104211819" -->
<!-- sent="Fri, 04 Jan 2013 15:18:14 -0600" -->
<!-- isosent="20130104211814" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="[hwloc-devel] python bindings updated to 1.6" -->
<!-- id="50E74716.9010702_at_redhat.com" -->
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
<strong>Subject:</strong> [hwloc-devel] python bindings updated to 1.6<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-04 16:18:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3453.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5218)"</a>
<li><strong>Previous message:</strong> <a href="3451.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6.1rc2r5215)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have finally made the 1.6 additions to python-hwloc. userdata and xml
<br>
import/export od userdata works.
<br>
<p>I spent some time trying to find a way to let userdata be a reference to a
<br>
python object, but in the end decided to leave associating the userdata value
<br>
with data in python space up to the user. Where in a C program you might make
<br>
userdata a pointer to some structure or data area, in python you would need to
<br>
put your data in a list or integer-keyed dictionary, and store the list index
<br>
or dictionary key in the userdata field.
<br>
<p>As always, the git repo is at
<br>
<a href="http://git.engineering.redhat.com/git/users/streeter/streeter-pyhwloc.git">http://git.engineering.redhat.com/git/users/streeter/streeter-pyhwloc.git</a>
<br>
and rpm/srpm packages and source tarball are at
<br>
<a href="http://people.redhat.com/streeter/">http://people.redhat.com/streeter/</a>
<br>
<p>--Guy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3453.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5218)"</a>
<li><strong>Previous message:</strong> <a href="3451.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6.1rc2r5215)"</a>
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
