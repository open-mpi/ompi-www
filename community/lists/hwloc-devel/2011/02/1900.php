<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3145";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  3 11:16:51 2011" -->
<!-- isoreceived="20110203161651" -->
<!-- sent="Thu, 03 Feb 2011 17:16:42 +0100" -->
<!-- isosent="20110203161642" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3145" -->
<!-- id="4D4AD4EA.2020000_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201102031612.p13GCXoB032230_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3145<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-03 11:16:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1901.php">Jeff Squyres: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<li><strong>Previous message:</strong> <a href="1899.php">Jeff Squyres: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 03/02/2011 17:12, jsquyres_at_[hidden] a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2011-02-03 11:12:32 EST (Thu, 03 Feb 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 3145
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/3145">https://svn.open-mpi.org/trac/hwloc/changeset/3145</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Move two header files:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  * include/private/config.h -&gt; include/private/autogen/config.h
</span><br>
<span class="quotelev1">&gt;  * include/hwloc/config.h -&gt; include/hwloc/autogen/config.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to avoid naming conflicts with system header files (because Automake
</span><br>
<span class="quotelev1">&gt; automatically inserts -I$(top_builddir)... to any file that was
</span><br>
<span class="quotelev1">&gt; generated with AC_CONFIG_HEADERS.  See
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/02/1895.php">http://www.open-mpi.org/community/lists/hwloc-devel/2011/02/1895.php</a>
</span><br>
<span class="quotelev1">&gt; for more details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;    trunk/include/hwloc/autogen/   (props changed)
</span><br>
<span class="quotelev1">&gt;    trunk/include/hwloc/autogen/config.h.in
</span><br>
<span class="quotelev1">&gt;       - copied, changed from r3143, /trunk/include/hwloc/config.h.in
</span><br>
<span class="quotelev1">&gt;    trunk/include/private/autogen/
</span><br>
<span class="quotelev1">&gt;    trunk/include/private/autogen/README.txt
</span><br>
<span class="quotelev1">&gt; Removed:
</span><br>
<span class="quotelev1">&gt;    trunk/include/hwloc/config.h.in
</span><br>
<span class="quotelev1">&gt; Properties modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/include/hwloc/   (props changed)
</span><br>
<span class="quotelev1">&gt;    trunk/include/private/   (props changed)
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/config/hwloc.m4                              |     7 ++++---                                 
</span><br>
<span class="quotelev1">&gt;    trunk/include/Makefile.am                          |     5 +++--                                   
</span><br>
<span class="quotelev1">&gt;    trunk/include/hwloc.h                              |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;    trunk/include/hwloc/autogen/config.h.in            |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;    trunk/include/hwloc/bitmap.h                       |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/include/hwloc/cuda.h                         |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/include/hwloc/cudart.h                       |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/include/hwloc/myriexpress.h                  |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/include/hwloc/openfabrics-verbs.h            |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/include/hwloc/rename.h                       |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/include/private/debug.h                      |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/include/private/misc.h                       |     5 +++--                                   
</span><br>
<span class="quotelev1">&gt;    trunk/include/private/private.h                    |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/src/bind.c                                   |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/src/cpuset.c                                 |     6 +++---                                  
</span><br>
<span class="quotelev1">&gt;    trunk/src/distances.c                              |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/src/misc.c                                   |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/src/topology-aix.c                           |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/src/topology-darwin.c                        |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/src/topology-freebsd.c                       |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/src/topology-hpux.c                          |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/src/topology-linux.c                         |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/src/topology-osf.c                           |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/src/topology-solaris.c                       |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/src/topology-synthetic.c                     |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/src/topology-windows.c                       |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/src/topology-x86.c                           |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/src/topology-xml.c                           |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/src/topology.c                               |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/src/traversal.c                              |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/tests/cuda.c                                 |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/tests/cudart.c                               |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/tests/glibc-sched.c                          |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/tests/hwloc_bind.c                           |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/tests/hwloc_bitmap.c                         |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/tests/hwloc_bitmap_first_last_weight.c       |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/tests/hwloc_bitmap_singlify.c                |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/tests/hwloc_bitmap_string.c                  |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/tests/hwloc_distances.c                      |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/tests/hwloc_get_cache_covering_cpuset.c      |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/tests/hwloc_get_closest_objs.c               |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/tests/hwloc_get_largest_objs_inside_cpuset.c |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/tests/hwloc_get_next_obj_covering_cpuset.c   |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/tests/hwloc_get_obj_below_array_by_type.c    |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/tests/hwloc_get_obj_covering_cpuset.c        |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/tests/hwloc_get_obj_inside_cpuset.c          |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/tests/hwloc_get_shared_cache_covering_obj.c  |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/tests/hwloc_insert_misc.c                    |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/tests/hwloc_is_thissystem.c                  |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/tests/hwloc_object_userdata.c                |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/tests/hwloc_set_distances.c                  |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/tests/hwloc_synthetic.c                      |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/tests/hwloc_type_depth.c                     |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/tests/linux-libnuma.c                        |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/tests/openfabrics-verbs.c                    |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/tests/xmlbuffer.c                            |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/utils/hwloc-calc.h                           |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/utils/hwloc-ps.c                             |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/utils/lstopo-cairo.c                         |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/utils/lstopo-draw.c                          |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/utils/lstopo-fig.c                           |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/utils/lstopo-text.c                          |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/utils/lstopo-xml.c                           |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/utils/lstopo.c                               |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/utils/lstopo.h                               |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/utils/misc.h                                 |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    66 files changed, 135 insertions(+), 95 deletions(-)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I wonder how many of these files actually still need one of our config.h
<br>
files :) Most of tests/*.c shouldn't. I'll look at cleaning this.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1901.php">Jeff Squyres: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<li><strong>Previous message:</strong> <a href="1899.php">Jeff Squyres: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
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
