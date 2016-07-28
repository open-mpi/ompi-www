<?
$subject_val = "[hwloc-devel] Something lighter-weight than XML?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  1 11:30:43 2011" -->
<!-- isoreceived="20110901153043" -->
<!-- sent="Thu, 1 Sep 2011 11:30:38 -0400" -->
<!-- isosent="20110901153038" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] Something lighter-weight than XML?" -->
<!-- id="2D9D4DEF-6800-4379-9907-E35875A06831_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Something lighter-weight than XML?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-01 11:30:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2339.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/08/2337.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3730)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2339.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2339.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Maybe reply:</strong> <a href="2340.php">Samuel Thibault: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Maybe reply:</strong> <a href="2344.php">Samuel Thibault: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2349.php">Christopher Samuel: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Maybe reply:</strong> <a href="2353.php">Samuel Thibault: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2362.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We're (finally) bringing full hwloc services up in Open MPI.
<br>
<p>One of the things we want to do is send server topologies from back-end compute nodes to the front-end node.  The XML export/import functionality would work for this, but a) it's a bit heavyweight, and b) it seems weird to require XML to build MPI.
<br>
<p>Is there any chance that a lighter-weight, simple string parsing module could be added to hwloc?  I'm guessing that we could save a modest amount of string space (SWAG: 20%?), but we wouldn't need a dependency on libxml, which would be good.
<br>
<p>I took a lstopo --no-io foo.xml output on an older xeon machine and, while sitting on a boring teleconf, I manually converted it in emacs to a (slightly) simpler text format.  I attached the two files.  There's a modest space savings (about 17%).  But libxml clearly would not be necessary.
<br>
<p>Do you think this would be easy to implement?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>


</pre>
<p>
topology
<br>
version=1.2.1
<br>
object
<br>
type=Machine
<br>
os_level=-1
<br>
os_index=0
<br>
cpuset=cpuset=0x000000ff
<br>
complete_cpuset=0x000000ff
<br>
online_cpuset=0x000000ff
<br>
allowed_cpuset=0x000000ff
<br>
local_memory=4136591360
<br>
page_type
<br>
size=4096
<br>
count=1009910
<br>
end
<br>
page_type
<br>
size=2097152
<br>
count=0
<br>
end
<br>
info
<br>
name=Backend
<br>
value=Linux
<br>
end
<br>
info
<br>
name=OSName
<br>
value=Linux
<br>
end
<br>
info
<br>
name=OSRelease
<br>
value=2.6.18-164.el5
<br>
end
<br>
info
<br>
name=OSVersion
<br>
value=#1 SMP Tue Aug 18 15:51:48 EDT 2009
<br>
end
<br>
info
<br>
name=HostName
<br>
value=svbu-mpi.cisco.com
<br>
end
<br>
info
<br>
name=Architecture
<br>
value=x86_64
<br>
end
<br>
object
<br>
type=Socket
<br>
os_level=-1
<br>
os_index=0
<br>
cpuset=0x00000055
<br>
complete_cpuset=0x00000055
<br>
online_cpuset=0x00000055
<br>
allowed_cpuset=0x00000055
<br>
end
<br>
object
<br>
type=Cache
<br>
os_level=-1
<br>
cpuset=0x00000011
<br>
complete_cpuset=0x00000011
<br>
online_cpuset=0x00000011
<br>
allowed_cpuset=0x00000011
<br>
cache_size=2097152
<br>
depth=2
<br>
cache_linesize=64
<br>
cache_associativity=8
<br>
end
<br>
object
<br>
type=Cache
<br>
os_level=-1
<br>
cpuset=0x00000011
<br>
complete_cpuset=0x00000011
<br>
online_cpuset=0x00000011
<br>
allowed_cpuset=0x00000011
<br>
cache_size=16384
<br>
depth=1
<br>
cache_linesize=64
<br>
cache_associativity=8
<br>
end
<br>
object
<br>
type=Core
<br>
os_level=-1
<br>
os_index=0
<br>
cpuset=0x00000011
<br>
complete_cpuset=0x00000011
<br>
online_cpuset=0x00000011
<br>
allowed_cpuset=0x00000011
<br>
end
<br>
object
<br>
type=PU
<br>
os_level=-1
<br>
os_index=0
<br>
cpuset=0x00000001
<br>
complete_cpuset=0x00000001
<br>
online_cpuset=0x00000001
<br>
allowed_cpuset=0x00000001
<br>
end
<br>
object
<br>
type=PU
<br>
os_level=-1
<br>
os_index=4
<br>
cpuset=0x00000010
<br>
complete_cpuset=0x00000010
<br>
online_cpuset=0x00000010
<br>
allowed_cpuset=0x00000010
<br>
end
<br>
end
<br>
end
<br>
end
<br>
object
<br>
type=Cache
<br>
os_level=-1
<br>
cpuset=0x00000044
<br>
complete_cpuset=0x00000044
<br>
online_cpuset=0x00000044
<br>
allowed_cpuset=0x00000044
<br>
cache_size=2097152
<br>
depth=2
<br>
cache_linesize=64
<br>
cache_associativity=8
<br>
end
<br>
object
<br>
type=Cache
<br>
os_level=-1
<br>
cpuset=0x00000044
<br>
complete_cpuset=0x00000044
<br>
online_cpuset=0x00000044
<br>
allowed_cpuset=0x00000044
<br>
cache_size=16384
<br>
depth=1
<br>
cache_linesize=64
<br>
cache_associativity=8
<br>
end
<br>
object
<br>
type=Core
<br>
os_level=-1
<br>
os_index=1
<br>
cpuset=0x00000044
<br>
complete_cpuset=0x00000044
<br>
online_cpuset=0x00000044
<br>
allowed_cpuset=0x00000044
<br>
end
<br>
object
<br>
type=PU
<br>
os_level=-1
<br>
os_index=2
<br>
cpuset=0x00000004
<br>
complete_cpuset=0x00000004
<br>
online_cpuset=0x00000004
<br>
allowed_cpuset=0x00000004
<br>
end
<br>
object
<br>
type=PU
<br>
os_level=-1
<br>
os_index=6
<br>
cpuset=0x00000040
<br>
complete_cpuset=0x00000040
<br>
online_cpuset=0x00000040
<br>
allowed_cpuset=0x00000040
<br>
end
<br>
end
<br>
end
<br>
end
<br>
end
<br>
object
<br>
type=Socket
<br>
os_level=-1
<br>
os_index=1
<br>
cpuset=0x000000aa
<br>
complete_cpuset=0x000000aa
<br>
online_cpuset=0x000000aa
<br>
allowed_cpuset=0x000000aa
<br>
end
<br>
object
<br>
type=Cache
<br>
os_level=-1
<br>
cpuset=0x00000022
<br>
complete_cpuset=0x00000022
<br>
online_cpuset=0x00000022
<br>
allowed_cpuset=0x00000022
<br>
cache_size=2097152
<br>
depth=2
<br>
cache_linesize=64
<br>
cache_associativity=8
<br>
end
<br>
object
<br>
type=Cache
<br>
os_level=-1
<br>
cpuset=0x00000022
<br>
complete_cpuset=0x00000022
<br>
online_cpuset=0x00000022
<br>
allowed_cpuset=0x00000022
<br>
cache_size=16384
<br>
depth=1
<br>
cache_linesize=64
<br>
cache_associativity=8
<br>
end
<br>
object
<br>
type=Core
<br>
os_level=-1
<br>
os_index=0
<br>
cpuset=0x00000022
<br>
complete_cpuset=0x00000022
<br>
online_cpuset=0x00000022
<br>
allowed_cpuset=0x00000022
<br>
end
<br>
object
<br>
type=PU
<br>
os_level=-1
<br>
os_index=1
<br>
cpuset=0x00000002
<br>
complete_cpuset=0x00000002
<br>
online_cpuset=0x00000002
<br>
allowed_cpuset=0x00000002
<br>
end
<br>
object
<br>
type=PU
<br>
os_level=-1
<br>
os_index=5
<br>
cpuset=0x00000020
<br>
complete_cpuset=0x00000020
<br>
online_cpuset=0x00000020
<br>
allowed_cpuset=0x00000020
<br>
end
<br>
end
<br>
end
<br>
end
<br>
object
<br>
type=Cache
<br>
os_level=-1
<br>
cpuset=0x00000088
<br>
complete_cpuset=0x00000088
<br>
online_cpuset=0x00000088
<br>
allowed_cpuset=0x00000088
<br>
cache_size=2097152
<br>
depth=2
<br>
cache_linesize=64
<br>
cache_associativity=8
<br>
end
<br>
object
<br>
type=Cache
<br>
os_level=-1
<br>
cpuset=0x00000088
<br>
complete_cpuset=0x00000088
<br>
online_cpuset=0x00000088
<br>
allowed_cpuset=0x00000088
<br>
cache_size=16384
<br>
depth=1
<br>
cache_linesize=64
<br>
cache_associativity=8
<br>
end
<br>
object
<br>
type=Core
<br>
os_level=-1
<br>
os_index=1
<br>
cpuset=0x00000088
<br>
complete_cpuset=0x00000088
<br>
online_cpuset=0x00000088
<br>
allowed_cpuset=0x00000088
<br>
end
<br>
object
<br>
type=PU
<br>
os_level=-1
<br>
os_index=3
<br>
cpuset=0x00000008
<br>
complete_cpuset=0x00000008
<br>
online_cpuset=0x00000008
<br>
allowed_cpuset=0x00000008
<br>
end
<br>
object
<br>
type=PU
<br>
os_level=-1
<br>
os_index=7
<br>
cpuset=0x00000080
<br>
complete_cpuset=0x00000080
<br>
online_cpuset=0x00000080
<br>
allowed_cpuset=0x00000080
<br>
end
<br>
end
<br>
end
<br>
end
<br>
end
<br>
end
<br>
end
<br>
<p><hr>
<ul>
<li>application/xml attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2338/foo.xml">foo.xml</a>
</ul>
<!-- attachment="foo.xml" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2339.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/08/2337.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3730)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2339.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2339.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Maybe reply:</strong> <a href="2340.php">Samuel Thibault: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Maybe reply:</strong> <a href="2344.php">Samuel Thibault: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2349.php">Christopher Samuel: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Maybe reply:</strong> <a href="2353.php">Samuel Thibault: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2362.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
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
