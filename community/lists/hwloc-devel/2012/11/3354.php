<?
$subject_val = "[hwloc-devel] plugins update";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 12:51:27 2012" -->
<!-- isoreceived="20121102165127" -->
<!-- sent="Fri, 02 Nov 2012 17:51:01 +0100" -->
<!-- isosent="20121102165101" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] plugins update" -->
<!-- id="5093F9F5.1030101_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] plugins update<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-02 12:51:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3355.php">Ralph Castain: "[hwloc-devel] Cgroup resource limits"</a>
<li><strong>Previous message:</strong> <a href="3353.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4949)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3383.php">Brice Goglin: "Re: [hwloc-devel] plugins update"</a>
<li><strong>Reply:</strong> <a href="3383.php">Brice Goglin: "Re: [hwloc-devel] plugins update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I pushed big changes to the components in the last days (what came from
<br>
last month discussion + recent CPUModel feature requests).
<br>
<p>Now we ombine information from multiple &quot;cpu&quot; backends. For instance the
<br>
x86 backend will add socket CPUModel to what native OS backends did.
<br>
Aside from xml/synthetic/custom excluding everything else, other
<br>
backends let others try to complete the topology if they have something
<br>
to add/annotate.
<br>
<p>Only component management has changed. Their &quot;pluginification&quot; is still
<br>
the same as earlier.
<br>
<p>Old &quot;core&quot; components are now called &quot;disc&quot; for discovery (that's all
<br>
they do, binding doesn't need to be componentified).
<br>
<p>Instead of describing everything, here are pointers to the new
<br>
documentation:
<br>
<a href="https://svn.open-mpi.org/trac/hwloc/browser/branches/components/doc/hwloc.doxy">https://svn.open-mpi.org/trac/hwloc/browser/branches/components/doc/hwloc.doxy</a>
<br>
Lines 1635-1725 for how it works from the user side
<br>
Lines 974-1011 for environment variables
<br>
<p><p>The components branch has a ugly SVN history now. Hopefully SVN will
<br>
combine all that history into one single commit and nobody will see the
<br>
ugly components history (except people using git-svn maybe).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3355.php">Ralph Castain: "[hwloc-devel] Cgroup resource limits"</a>
<li><strong>Previous message:</strong> <a href="3353.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4949)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3383.php">Brice Goglin: "Re: [hwloc-devel] plugins update"</a>
<li><strong>Reply:</strong> <a href="3383.php">Brice Goglin: "Re: [hwloc-devel] plugins update"</a>
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
