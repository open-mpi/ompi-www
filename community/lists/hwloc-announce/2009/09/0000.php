<?
$subject_val = "[hwloc-announce] New project: Portable Hardware Locality (hwloc)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 13 19:46:47 2009" -->
<!-- isoreceived="20090913234647" -->
<!-- sent="Sun, 13 Sep 2009 19:46:44 -0400" -->
<!-- isosent="20090913234644" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-announce] New project: Portable Hardware Locality (hwloc)" -->
<!-- id="D0A4C581-0103-4D63-B45E-8B04CF49207C_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
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
<strong>Subject:</strong> [hwloc-announce] New project: Portable Hardware Locality (hwloc)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-13 19:46:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2009/10/0001.php">Jeff Squyres: "[hwloc-announce] hwloc 0.9.1rc1 available"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We&#146;re pleased to announce a new open source software project: Portable  
<br>
Hardware Locality (or &#147;hwloc&#148;, for short).  hwloc is a sub-project of  
<br>
the Open MPI umbrella project, meaning that it is a small utility not  
<br>
directly related to MPI applications, but has greater applicability  
<br>
outside of just the high-performance computing arena.
<br>
<p><p><p>The hwloc web site can be found here:
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p><p><p>The hwloc software discovers and maps the NUMA nodes, shared caches,  
<br>
and processor sockets, cores, and threads of Linux/Unix and Windows  
<br>
servers.  The resulting topological information can be displayed  
<br>
graphically or conveyed programatically though a C language API.   
<br>
Applications (and middleware) that use this information can optimize  
<br>
their performance in a variety of ways, including tuning computational  
<br>
cores to fit cache sizes and utilizing data locality-aware algorithms.
<br>
<p><p><p>hwloc actually represents the merger of two prior open source software  
<br>
projects:
<br>
<p><p>&nbsp;&nbsp;* libtopology, a package for discovering and reporting the internal  
<br>
processor and cache topology in Unix and Windows servers.
<br>
&nbsp;&nbsp;* Portable Linux Processor Affinity (PLPA), a package for solving  
<br>
Linux topological processor binding compatibility issues
<br>
<p><p>These two projects had a certain amount of functional overlap; both  
<br>
had elements from the other on their short- and long-term roadmaps.   
<br>
The maintainers of these projects felt it would be easier to combine  
<br>
forces to produce a new, unified code base representing the best ideas  
<br>
from both prior projects.  The first release of hwloc is expected in  
<br>
the not-distant future, and mainly represents a &#147;re-branding&#148; of  
<br>
libtopology (but will include a small number of bug fixes and  
<br>
improvements inspired from PLPA).  Future releases will further merge  
<br>
the code bases and ideas from the two project, and progress down both  
<br>
libtopology&#146;s and PLPA&#146;s roadmaps in terms of new features and  
<br>
optimizations.
<br>
<p><p><p>For more information, see the project web site.  Interested parties  
<br>
are encouraged to join the mailing lists (<a href="http://www.open-mpi.org/community/lists/hwloc.php">http://www.open-mpi.org/community/lists/hwloc.php</a> 
<br>
) to participate in the development process and/or provide feedback.
<br>
<p><p><p>Enjoy!
<br>
<p><p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2009/10/0001.php">Jeff Squyres: "[hwloc-announce] hwloc 0.9.1rc1 available"</a>
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
