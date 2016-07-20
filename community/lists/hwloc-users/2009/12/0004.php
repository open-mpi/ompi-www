<?
$subject_val = "[hwloc-users] Hardware Locality (hwloc) v0.9.3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 12:40:19 2009" -->
<!-- isoreceived="20091201174019" -->
<!-- sent="Tue, 1 Dec 2009 12:40:12 -0500" -->
<!-- isosent="20091201174012" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-users] Hardware Locality (hwloc) v0.9.3 released" -->
<!-- id="204F1A4F-1006-4B7A-B329-56BDD2C1CF2B_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-users] Hardware Locality (hwloc) v0.9.3 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 12:40:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2010/01/0005.php">Brock Palen: "[hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2009/11/0003.php">Samuel Thibault: "Re: [hwloc-users] Not able to compile an hwloc program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the release  
<br>
of v0.9.3:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
&nbsp;&nbsp;&nbsp;(mirrors will update shortly)
<br>
<p>hwloc provides command line tools and a C API to obtain the  
<br>
hierarchical map of key computing elements, such as: NUMA memory  
<br>
nodes, shared caches, processor sockets, processor cores, and  
<br>
processor &quot;threads&quot;.  hwloc also gathers various attributes such as  
<br>
cache and memory information, and is portable across a variety of  
<br>
different operating systems and platforms.
<br>
<p>hwloc v0.9.3 is a bug fix release.  The following is a summary of  
<br>
changes as compared to v0.9.2:
<br>
<p>* Fix autogen.sh to work with Autoconf 2.63.
<br>
* Fix various crashes in particular conditions:
<br>
&nbsp;&nbsp;&nbsp;- xml files with root attributes
<br>
&nbsp;&nbsp;&nbsp;- offline CPUs
<br>
&nbsp;&nbsp;&nbsp;- partial sysfs support
<br>
&nbsp;&nbsp;&nbsp;- unparseable /proc/cpuinfo
<br>
&nbsp;&nbsp;&nbsp;- ignoring NUMA level while Misc level have been generated
<br>
* Tweak documentation a bit
<br>
* Do not require the pthread library for binding the current thread on  
<br>
Linux
<br>
* Do not erroneously consider the sched_setaffinity prototype is the  
<br>
old version
<br>
&nbsp;&nbsp;&nbsp;when there is actually none.
<br>
* Fix _syscall3 compilation on archs for which we do not have the
<br>
&nbsp;&nbsp;&nbsp;sched_setaffinity system call number.
<br>
* Fix AIX binding.
<br>
* Fix libraries dependencies: now only lstopo depends on libtermcap, fix
<br>
&nbsp;&nbsp;&nbsp;binutils-gold link
<br>
* Have make check always build and run hwloc-hello.c
<br>
* Do not limit size of a cpuset.
<br>
<p>*** Note that the hwloc project represents the merger of the  
<br>
libtopology project from INRIA and the Portable Linux Processor  
<br>
Affinity (PLPA) sub-project from Open MPI.  *Both of these prior  
<br>
projects are now deprecated.*
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2010/01/0005.php">Brock Palen: "[hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2009/11/0003.php">Samuel Thibault: "Re: [hwloc-users] Not able to compile an hwloc program"</a>
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
