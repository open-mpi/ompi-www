<?
$subject_val = "Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 11:51:36 2009" -->
<!-- isoreceived="20091022155136" -->
<!-- sent="Thu, 22 Oct 2009 16:51:52 +0100" -->
<!-- isosent="20091022155152" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs" -->
<!-- id="1256226712.3392.101.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="068.9eda77cbf93905849524ef58955ee131_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 11:51:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0248.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs"</a>
<li><strong>Previous message:</strong> <a href="0246.php">Pavan Balaji: "Re: [hwloc-devel] missing openfabrics-verbs.h"</a>
<li><strong>Maybe in reply to:</strong> <a href="0241.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0249.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs"</a>
<li><strong>Reply:</strong> <a href="0249.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Replying to hwloc-devel as I don't seem to have access to the bug
<br>
tracker directly.
<br>
<p>On Thu, 2009-10-22 at 15:29 +0000, hwloc wrote:
<br>
<span class="quotelev1">&gt;  I think it's not available on any other OS than Linux, but we could
</span><br>
<span class="quotelev1">&gt;  introduce a configuration function hwloc_topology_set_pid(topology, pid)
</span><br>
<span class="quotelev1">&gt;  that calls an OS-specific callback, or returns -1 (ENOSYS) when not
</span><br>
<span class="quotelev1">&gt;  supported.
</span><br>
<p>That would be great.  One thing though, I'm calling this from perl so
<br>
don't have access to the C api, could you also add a command line option
<br>
for this?
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0248.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs"</a>
<li><strong>Previous message:</strong> <a href="0246.php">Pavan Balaji: "Re: [hwloc-devel] missing openfabrics-verbs.h"</a>
<li><strong>Maybe in reply to:</strong> <a href="0241.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0249.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs"</a>
<li><strong>Reply:</strong> <a href="0249.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs"</a>
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
