<?
$subject_val = "[OMPI users] hcoll dependency on mxm configure error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 11:34:33 2015" -->
<!-- isoreceived="20151021153433" -->
<!-- sent="Wed, 21 Oct 2015 09:34:29 -0600" -->
<!-- isosent="20151021153429" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="[OMPI users] hcoll dependency on mxm configure error" -->
<!-- id="5627B085.5020907_at_lanl.gov" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] hcoll dependency on mxm configure error<br>
<strong>From:</strong> David Shrader (<em>dshrader_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-21 11:34:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27907.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Previous message:</strong> <a href="27905.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Win_lock with MPI_MODE_NOCHECK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27907.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Reply:</strong> <a href="27907.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,
<br>
<p>I'm currently trying to install 1.10.0 with hcoll and mxm, and am 
<br>
getting an error during configure:
<br>
<p>--- MCA component coll:hcoll (m4 configuration macro)
<br>
checking for MCA component coll:hcoll compile mode... static
<br>
checking hcoll/api/hcoll_api.h usability... yes
<br>
checking hcoll/api/hcoll_api.h presence... yes
<br>
checking for hcoll/api/hcoll_api.h... yes
<br>
looking for library in lib
<br>
checking for library containing hcoll_get_version... no
<br>
looking for library in lib64
<br>
checking for library containing hcoll_get_version... no
<br>
configure: error: HCOLL support requested but not found.  Aborting
<br>
<p>The configure line I used:
<br>
<p>./configure --with-mxm=/opt/mellanox/mxm 
<br>
--with-hcoll=/opt/mellanox/hcoll 
<br>
--with-platform=contrib/platform/lanl/toss/optimized-panasas
<br>
<p>Here are the corresponding lines from config.log:
<br>
<p>configure:217014: gcc -std=gnu99 -o conftest -O3 -DNDEBUG 
<br>
-I/opt/panfs/include -finline-functions -fno-strict-aliasing -pthread 
<br>
-I/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.10.0/openmpi-1.10.0/opal/mca/hwloc/hwloc191/hwloc/include 
<br>
-I/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.10.0/openmpi-1.10.0/opal/mca/event/libevent2021/libevent 
<br>
-I/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.10.0/openmpi-1.10.0/opal/mca/event/libevent2021/libevent/include 
<br>
-I/opt/mellanox/hcoll/include   -L/opt/mellanox/hcoll/lib conftest.c 
<br>
-lhcoll  -lrt -lm -lutil   &gt;&amp;5
<br>
/usr/bin/ld: warning: libmxm.so.2, needed by 
<br>
/opt/mellanox/hcoll/lib/libhcoll.so, not found (try using -rpath or 
<br>
-rpath-link)
<br>
/opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to `mxm_req_recv'
<br>
/opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to `mxm_ep_create'
<br>
/opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to 
<br>
`mxm_config_free_context_opts'
<br>
/opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to `mxm_ep_destroy'
<br>
/opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to 
<br>
`mxm_config_free_ep_opts'
<br>
/opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to `mxm_progress'
<br>
/opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to 
<br>
`mxm_config_read_opts'
<br>
/opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to 
<br>
`mxm_ep_disconnect'
<br>
/opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to `mxm_mq_destroy'
<br>
/opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to `mxm_mq_create'
<br>
/opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to `mxm_cleanup'
<br>
/opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to `mxm_req_send'
<br>
/opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to `mxm_ep_connect'
<br>
/opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to `mxm_init'
<br>
/opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to 
<br>
`mxm_ep_get_address'
<br>
/opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to 
<br>
`mxm_error_string'
<br>
/opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to `mxm_mem_unmap'
<br>
collect2: ld returned 1 exit status
<br>
<p>An ldd on /opt/mellanox/hcoll/lib/libhcoll.so shows a dependency on 
<br>
libmxm.so, so the above error makes sense. I am using hcoll version 
<br>
3.3.768 and mxm version 3.4.3065 (reported by rpm).
<br>
<p>So, my question: is there a way to take care of this other than putting 
<br>
'-L/opt/mellanox/lib -lmxm' in to LDFLAGS/LIBS? Using LDFLAGS/LIBS will 
<br>
link mxm in to everything, which I would prefer not to do.
<br>
<p>Thanks in advance!
<br>
David
<br>
<p><pre>
-- 
David Shrader
HPC-3 High Performance Computer Systems
Los Alamos National Lab
Email: dshrader &lt;at&gt; lanl.gov
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27907.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Previous message:</strong> <a href="27905.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Win_lock with MPI_MODE_NOCHECK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27907.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Reply:</strong> <a href="27907.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
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
