<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v0.9.2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 10:12:33 2009" -->
<!-- isoreceived="20091105151233" -->
<!-- sent="Thu, 5 Nov 2009 10:12:28 -0500" -->
<!-- isosent="20091105151228" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v0.9.2 released" -->
<!-- id="4A1DFF16-29EF-425C-B9DF-280E138AB0B2_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v0.9.2 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 10:12:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2009/12/0003.php">Jeff Squyres: "[hwloc-announce] Hardware Locality (hwloc) v0.9.3 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2009/10/0001.php">Jeff Squyres: "[hwloc-announce] hwloc 0.9.1rc1 available"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the release  
<br>
of v0.9.2 (we made some trivial documentation-only changes after the  
<br>
v0.9.1 tarballs were posted publicly, and have therefore re-released  
<br>
with the version &quot;v0.9.2&quot;).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(mirrors will update shortly)
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
<p>hwloc primarily aims at helping high-performance computing (HPC)  
<br>
applications, but is also applicable to any project seeking to exploit  
<br>
code and/or data locality on modern computing platforms.
<br>
<p>*** Note that the hwloc project represents the merger of the  
<br>
libtopology project from INRIA and the Portable Linux Processor  
<br>
Affinity (PLPA) sub-project from Open MPI.  *Both of these prior  
<br>
projects are now deprecated.*  The hwloc v0.9.1/v0.9.2 release is  
<br>
essentially a &quot;re-branding&quot; of the libtopology code base, but with  
<br>
both a few genuinely new features and a few PLPA-like features added  
<br>
in.  More new features and more PLPA-like features will be added to  
<br>
hwloc over time.
<br>
<p>hwloc supports the following operating systems:
<br>
<p>&nbsp;&nbsp;* Linux (including old kernels not having sysfs topology  
<br>
information, with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;knowledge of cpusets, offline cpus, and Kerrighed support)
<br>
&nbsp;&nbsp;* Solaris
<br>
&nbsp;&nbsp;* AIX
<br>
&nbsp;&nbsp;* Darwin / OS X
<br>
&nbsp;&nbsp;* OSF/1 (a.k.a., Tru64)
<br>
&nbsp;&nbsp;* HP-UX
<br>
&nbsp;&nbsp;* Microsoft Windows
<br>
<p>hwloc only reports the number of processors on unsupported operating  
<br>
systems; no topology information is available.
<br>
<p>hwloc is available under the BSD license.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2009/12/0003.php">Jeff Squyres: "[hwloc-announce] Hardware Locality (hwloc) v0.9.3 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2009/10/0001.php">Jeff Squyres: "[hwloc-announce] hwloc 0.9.1rc1 available"</a>
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
