<?
$subject_val = "[OMPI devel] New mapper module";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 17 10:06:20 2008" -->
<!-- isoreceived="20080417140620" -->
<!-- sent="Thu, 17 Apr 2008 08:06:11 -0600" -->
<!-- isosent="20080417140611" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] New mapper module" -->
<!-- id="C42CB573.D201%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] New mapper module<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-17 10:06:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3713.php">Jeff Squyres: "Re: [OMPI devel] New mapper module"</a>
<li><strong>Previous message:</strong> <a href="3711.php">Adrian Knoth: "[OMPI devel] Change in btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3713.php">Jeff Squyres: "Re: [OMPI devel] New mapper module"</a>
<li><strong>Reply:</strong> <a href="3713.php">Jeff Squyres: "Re: [OMPI devel] New mapper module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have implemented and committed (r18190) a new RMAPS module that
<br>
sequentially maps ranks to the hosts listed in a hostfile. You must set -mca
<br>
rmaps seq in order to access this module - it will -not- be selected any
<br>
other way.
<br>
<p>The basic method of operation respects the hostfile descriptions on the wiki
<br>
page, but I will describe it here briefly as well:
<br>
<p>1. if we are in a managed environment, we will only map to nodes within the
<br>
allocation. If your hostfile contains nodes outside the allocation, we will
<br>
report an error and abort. So if you want to map ranks sequentially, you
<br>
need to be sure that the hostfile describing this mapping contains only
<br>
hosts that -can- be mapped. In an unmanaged environment, we automatically
<br>
include all the nodes in any specified hostfiles, so this won't be a
<br>
problem.
<br>
<p>2. if you specify a default-hostfile, we will use it - however, any
<br>
hostfiles specified for an app_context will override the default-hostfile.
<br>
Any apps that do -not- have a hostfile specified will be mapped sequentially
<br>
to the hosts in the default-hostfile
<br>
<p>3. if your app_context does not specify a number of procs, we will
<br>
automatically map one proc to each and every entry in the hostfile
<br>
<p>4. if your app_context does specify a number of procs, we will sequentially
<br>
map that number of procs, one to each entry in the hostfile. Multiple
<br>
app_contexts are supported, with the sequence continuing across the
<br>
app_contexts.
<br>
<p>5. if you specify a number of procs greater than the number of entries in
<br>
your hostfile, we will map the overrun using byslot rules - i.e., we will
<br>
start by filling the remaining slots on the first node in your hostfile,
<br>
then proceed to fill the second node in your hostfile, etc.
<br>
<p>6. if your allocation does not permit oversubscription, we will report an
<br>
error and abort if you attempt to place more procs on a node than slots.
<br>
<p>Hope that helps
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3713.php">Jeff Squyres: "Re: [OMPI devel] New mapper module"</a>
<li><strong>Previous message:</strong> <a href="3711.php">Adrian Knoth: "[OMPI devel] Change in btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3713.php">Jeff Squyres: "Re: [OMPI devel] New mapper module"</a>
<li><strong>Reply:</strong> <a href="3713.php">Jeff Squyres: "Re: [OMPI devel] New mapper module"</a>
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
