<?
$subject_val = "[OMPI devel] Open MPI + HWLOC + Static build  issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 25 17:56:55 2011" -->
<!-- isoreceived="20110725215655" -->
<!-- sent="Mon, 25 Jul 2011 17:56:50 -0400" -->
<!-- isosent="20110725215650" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI + HWLOC + Static build  issue" -->
<!-- id="BA9B139C-7A9C-4EF7-87A2-B36BB1235B49_at_ornl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI + HWLOC + Static build  issue<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-25 17:56:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9559.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9557.php">Ralph Castain: "Re: [OMPI devel] orte question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9559.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9559.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9591.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9592.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have been trying to compile Open MPI (trunk) static version with hwloc, the last is enabled by default in trunk.
<br>
The build platform is AMD machine, that has dynamic libnuma version only.
<br>
<p>Problem:
<br>
Open MPI fails to link orted, because it can't find static version of libnuma.
<br>
<p>Workaround:
<br>
add --without-hwloc
<br>
<p>Real solution:
<br>
Is it a way to keep hwloc enabled when static libnuma isn't presented on the system ? If it's a such way, I would like to know how to enable it.
<br>
Otherwise, I think configure script should handle such scenario, it means disable hwloc and enable some other alternative.
<br>
<p>Regards,
<br>
&nbsp;
<br>
Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9559.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9557.php">Ralph Castain: "Re: [OMPI devel] orte question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9559.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9559.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9591.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9592.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
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
