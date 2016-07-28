<?
$subject_val = "[OMPI devel] Trunk build problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 28 09:36:10 2012" -->
<!-- isoreceived="20120228143610" -->
<!-- sent="Tue, 28 Feb 2012 07:36:02 -0700" -->
<!-- isosent="20120228143602" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk build problem" -->
<!-- id="A4A2B440-C478-40B3-B8B4-13E7F3828893_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk build problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-28 09:36:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10629.php">Edgar Gabriel: "Re: [OMPI devel] Trunk build problem"</a>
<li><strong>Previous message:</strong> <a href="10627.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10629.php">Edgar Gabriel: "Re: [OMPI devel] Trunk build problem"</a>
<li><strong>Reply:</strong> <a href="10629.php">Edgar Gabriel: "Re: [OMPI devel] Trunk build problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried to build the trunk this morning on a machine where the fcoll framework could build and hit this:
<br>
<p>mca/fcoll/dynamic/.libs/libmca_fcoll_dynamic.a(fcoll_dynamic_file_write_all.o): In function `local_heap_sort':
<br>
/users/rcastain/openmpi-1.7a1/ompi/mca/fcoll/dynamic/fcoll_dynamic_file_write_all.c:1111: multiple definition of `local_heap_sort'
<br>
mca/fcoll/static/.libs/libmca_fcoll_static.a(fcoll_static_file_write_all.o):/users/rcastain/openmpi-1.7a1/ompi/mca/fcoll/static/fcoll_static_file_write_all.c:929: first defined here
<br>
<p><p>Any suggestions?
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10629.php">Edgar Gabriel: "Re: [OMPI devel] Trunk build problem"</a>
<li><strong>Previous message:</strong> <a href="10627.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10629.php">Edgar Gabriel: "Re: [OMPI devel] Trunk build problem"</a>
<li><strong>Reply:</strong> <a href="10629.php">Edgar Gabriel: "Re: [OMPI devel] Trunk build problem"</a>
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
