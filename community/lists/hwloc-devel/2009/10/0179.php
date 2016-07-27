<?
$subject_val = "[hwloc-devel] MPICH2 question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 11:01:52 2009" -->
<!-- isoreceived="20091020150152" -->
<!-- sent="Tue, 20 Oct 2009 11:01:46 -0400" -->
<!-- isosent="20091020150146" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] MPICH2 question" -->
<!-- id="82A550F5-053B-4A5E-B8B0-92C451FF3F48_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] MPICH2 question<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-20 11:01:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0180.php">Brice Goglin: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Previous message:</strong> <a href="0178.php">Brice Goglin: "[hwloc-devel] last API change"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0180.php">Brice Goglin: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0180.php">Brice Goglin: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pavan and I chatted on the phone this morning about <a href="https://svn.open-mpi.org/trac/hwloc/ticket/4">https://svn.open-mpi.org/trac/hwloc/ticket/4</a> 
<br>
.
<br>
<p>The *easiest* solution for MPICH2 would be if they could  
<br>
AC_CONFIG_SUBDIRS our configure script.  However, this has the  
<br>
condition that hwloc's configure could never fail -- e.g., it can't  
<br>
call AC_MSG_ERROR.  For unsupported platforms, it will need to still  
<br>
succeed and build/install a token libhwloc.la.  This libhwloc.a can  
<br>
just return a graceful failure from hwloc_init() at run-time  
<br>
indicating that it can't do anything on this platform.
<br>
<p>By default, I'm not comfortable with this.  But I would be comfortable  
<br>
with such a scheme if a non-default flag is passed to configure (e.g.,  
<br>
&quot;--enable-always-build&quot;, or perhaps a better name).
<br>
<p>Would this be hard to do from the building side?  I.e., I have not  
<br>
looked in the C code much yet -- do we have much code that won't build  
<br>
on unsupported platforms, or do we need a &quot;generic / always fail&quot; .c  
<br>
file that is trivial/portable C, but always returns failures for all  
<br>
hwloc API functions...?
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
<li><strong>Next message:</strong> <a href="0180.php">Brice Goglin: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Previous message:</strong> <a href="0178.php">Brice Goglin: "[hwloc-devel] last API change"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0180.php">Brice Goglin: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0180.php">Brice Goglin: "Re: [hwloc-devel] MPICH2 question"</a>
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
