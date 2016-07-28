<?
$subject_val = "[OMPI devel] ptmalloc replacement";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 25 07:59:32 2009" -->
<!-- isoreceived="20090725115932" -->
<!-- sent="Sat, 25 Jul 2009 07:59:26 -0400" -->
<!-- isosent="20090725115926" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] ptmalloc replacement" -->
<!-- id="959D58AB-6CCE-4A9F-B13E-270474B14EE5_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] ptmalloc replacement<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-25 07:59:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6528.php">Iain Bason: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Previous message:</strong> <a href="6526.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
SHORT VERSION
<br>
=============
<br>
<p>OpenFabrics vendors (Sun, IBM, Mellanox, Voltaire): please try Roland  
<br>
Dreier's &quot;ummunot&quot; kernel module with my OMPI Mercurial branch on your  
<br>
systems (relevant URLs and instructions below).  This is the  
<br>
improvement to replace the not-bulletproof ptmalloc2 hooks for  
<br>
mpi_leave_pinned behavior.  A big change like this really requires  
<br>
testing by everyone.  Please let me know your testing results.
<br>
<p>MORE DETAILS
<br>
============
<br>
<p>Roland Dreier from Cisco sent his &quot;ummunot&quot; kernel module upstream to  
<br>
the Linux kernel the other day; initial reviews have been favorable.   
<br>
Here's the latest version of his module, incorporating a few early  
<br>
reviews:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://lkml.org/lkml/2009/7/24/308">http://lkml.org/lkml/2009/7/24/308</a>
<br>
<p>It replaces the not-guarnateeable ptmalloc memory hooks with a  
<br>
userspace notification system when MMU events occur down in the kernel  
<br>
(basically: when memory is unmapped from a process).  See Roland's  
<br>
post for more details on his implementation.
<br>
<p>It's passing all MPI tests that I can throw at it, so I think it's  
<br>
time for others to try this stuff with Open MPI.  I have a proof-of- 
<br>
concept mercurial branch here (I am keeping it up with the SVN trunk):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://bitbucket.org/jsquyres/ummunot/">http://bitbucket.org/jsquyres/ummunot/</a>
<br>
<p>I currently have the support implemented in a standalone OPAL memory  
<br>
&quot;ummunot&quot; component.  Further integration work is required before it  
<br>
comes to the trunk, but it's good enough for testing and ensuring that  
<br>
the concept actually works.  Specifically, you must disable building  
<br>
OMPI's ptmalloc2.  Here's how I configure to build it:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure --enable-mca-no-build=memory-ptmalloc2 CPPFLAGS=-I/ 
<br>
path/to/ummunot.h ...
<br>
<p>You should be able to see the &quot;ummunot&quot; component in the output of  
<br>
ompi_info when done.
<br>
<p>Then try running any MPI test that you can think of (ensure that  
<br>
mpi_leave_pinned==1 to guarantee testing this stuff).
<br>
<p>Please let me know your testing results.  I'm assuming that Sun, IBM,  
<br>
Mellanox, and Voltaire will be testing.
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6528.php">Iain Bason: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Previous message:</strong> <a href="6526.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
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
