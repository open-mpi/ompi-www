<?
$subject_val = "[hwloc-users] [RFC] deprecating multiple load() support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 14:46:05 2013" -->
<!-- isoreceived="20130103194605" -->
<!-- sent="Thu, 03 Jan 2013 20:46:00 +0100" -->
<!-- isosent="20130103194600" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-users] [RFC] deprecating multiple load() support" -->
<!-- id="50E5DFF8.5010801_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-users] [RFC] deprecating multiple load() support<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-03 14:46:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0788.php">Rolf vandeVaart: "[hwloc-users] Single hwloc.h header files that work on linux and windows"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/12/0786.php">Brice Goglin: "[hwloc-users] upcoming hwloc tutorials"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>hwloc users are supposed to configure/build topologies like this:
<br>
&nbsp;&nbsp;hwloc_topology_init()
<br>
&nbsp;&nbsp;/* all configuration calls */
<br>
&nbsp;&nbsp;hwloc_topology_set_xml()
<br>
&nbsp;&nbsp;hwloc_topology_set_flags()
<br>
&nbsp;&nbsp;/* end of all configuration calls */
<br>
&nbsp;&nbsp;hwloc_topology_load() /* load from XML with flags enabled */
<br>
<p>We actually doing things like:
<br>
&nbsp;&nbsp;hwloc_topology_init()
<br>
&nbsp;&nbsp;hwloc_topology_set_xml()
<br>
&nbsp;&nbsp;hwloc_topology_load() /* load from XML */
<br>
&nbsp;&nbsp;hwloc_topology_set_flags()
<br>
&nbsp;&nbsp;hwloc_topology_load() /* reload from XML with flags enabled */
<br>
<p>That's convenient in some corner cases, but it is causing some headache
<br>
for maintenance. And it's not documented as far as I looked. So I am
<br>
willing to remove this feature. Users will only be allowed to do a
<br>
single load() per init(), and do set_foo() only between init() and this
<br>
single load(). That's what basically everybody does, and what the
<br>
documentation says.
<br>
<p>Of course, using different topologies will still be allowed.
<br>
<p><p>As a side-effect, tools such as hwloc-calc and hwloc-bind will no longer
<br>
let you mix options and locations in the command-line. You will have to
<br>
specify the input topology and flags at the beginning of the
<br>
command-line and then specify all locations within that topology.
<br>
<p><p>If anybody cares, please speakup now! The plan is to remove these
<br>
&quot;features&quot; in v1.8 (could be released in 2013Q3). The delay isn't long
<br>
but nobody is likely using these features anyway. In the meantime
<br>
(starting in v1.6.1), we'll issue a warning if somebody ever uses them.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0788.php">Rolf vandeVaart: "[hwloc-users] Single hwloc.h header files that work on linux and windows"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/12/0786.php">Brice Goglin: "[hwloc-users] upcoming hwloc tutorials"</a>
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
