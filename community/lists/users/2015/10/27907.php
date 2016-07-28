<?
$subject_val = "Re: [OMPI users] hcoll dependency on mxm configure error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 11:40:30 2015" -->
<!-- isoreceived="20151021154030" -->
<!-- sent="Wed, 21 Oct 2015 09:40:26 -0600" -->
<!-- isosent="20151021154026" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hcoll dependency on mxm configure error" -->
<!-- id="5627B1EA.7000105_at_lanl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5627B085.5020907_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] hcoll dependency on mxm configure error<br>
<strong>From:</strong> David Shrader (<em>dshrader_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-21 11:40:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27908.php">Mike Dubman: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Previous message:</strong> <a href="27906.php">David Shrader: "[OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>In reply to:</strong> <a href="27906.php">David Shrader: "[OMPI users] hcoll dependency on mxm configure error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27908.php">Mike Dubman: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Reply:</strong> <a href="27908.php">Mike Dubman: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I should probably point out that libhcoll.so does not know where 
<br>
libmxm.so is:
<br>
<p>[dshrader_at_zo-fe1 ~]$ ldd /opt/mellanox/hcoll/lib/libhcoll.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fffb2f1f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libibnetdisc.so.5 =&gt; /usr/lib64/libibnetdisc.so.5 
<br>
(0x00007fe31bd0b000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmxm.so.2 =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libz.so.1 =&gt; /lib64/libz.so.1 (0x00007fe31baf4000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007fe31b8f0000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libosmcomp.so.3 =&gt; /usr/lib64/libosmcomp.so.3 (0x00007fe31b6e2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libocoms.so.0 =&gt; /opt/mellanox/hcoll/lib/libocoms.so.0 
<br>
(0x00007fe31b499000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00007fe31b215000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1 (0x00007fe31b009000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libalog.so.0 =&gt; /opt/mellanox/hcoll/lib/libalog.so.0 
<br>
(0x00007fe31adfe000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librt.so.1 =&gt; /lib64/librt.so.1 (0x00007fe31abf6000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libibumad.so.3 =&gt; /usr/lib64/libibumad.so.3 (0x00007fe31a9ee000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librdmacm.so.1 =&gt; /usr/lib64/librdmacm.so.1 (0x00007fe31a7d9000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libibverbs.so.1 =&gt; /usr/lib64/libibverbs.so.1 (0x00007fe31a5c7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007fe31a3a9000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00007fe31a015000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libglib-2.0.so.0 =&gt; /lib64/libglib-2.0.so.0 (0x00007fe319cfe000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libibmad.so.5 =&gt; /usr/lib64/libibmad.so.5 (0x00007fe319ae3000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00007fe31c2d3000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libwrap.so.0 =&gt; /lib64/libwrap.so.0 (0x00007fe3198d8000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00007fe3196c2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00007fe3194a8000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00007fe3192a5000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnl.so.1 =&gt; /lib64/libnl.so.1 (0x00007fe319052000)
<br>
<p>Both hcoll and mxm where installed using the rpms provided by Mellanox.
<br>
<p>Thanks again,
<br>
David
<br>
<p>On 10/21/2015 09:34 AM, David Shrader wrote:
<br>
<span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm currently trying to install 1.10.0 with hcoll and mxm, and am 
</span><br>
<span class="quotelev1">&gt; getting an error during configure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component coll:hcoll (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component coll:hcoll compile mode... static
</span><br>
<span class="quotelev1">&gt; checking hcoll/api/hcoll_api.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking hcoll/api/hcoll_api.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for hcoll/api/hcoll_api.h... yes
</span><br>
<span class="quotelev1">&gt; looking for library in lib
</span><br>
<span class="quotelev1">&gt; checking for library containing hcoll_get_version... no
</span><br>
<span class="quotelev1">&gt; looking for library in lib64
</span><br>
<span class="quotelev1">&gt; checking for library containing hcoll_get_version... no
</span><br>
<span class="quotelev1">&gt; configure: error: HCOLL support requested but not found.  Aborting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configure line I used:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --with-mxm=/opt/mellanox/mxm 
</span><br>
<span class="quotelev1">&gt; --with-hcoll=/opt/mellanox/hcoll 
</span><br>
<span class="quotelev1">&gt; --with-platform=contrib/platform/lanl/toss/optimized-panasas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are the corresponding lines from config.log:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:217014: gcc -std=gnu99 -o conftest -O3 -DNDEBUG 
</span><br>
<span class="quotelev1">&gt; -I/opt/panfs/include -finline-functions -fno-strict-aliasing -pthread 
</span><br>
<span class="quotelev1">&gt; -I/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.10.0/openmpi-1.10.0/opal/mca/hwloc/hwloc191/hwloc/include 
</span><br>
<span class="quotelev1">&gt; -I/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.10.0/openmpi-1.10.0/opal/mca/event/libevent2021/libevent 
</span><br>
<span class="quotelev1">&gt; -I/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.10.0/openmpi-1.10.0/opal/mca/event/libevent2021/libevent/include 
</span><br>
<span class="quotelev1">&gt; -I/opt/mellanox/hcoll/include   -L/opt/mellanox/hcoll/lib conftest.c 
</span><br>
<span class="quotelev1">&gt; -lhcoll  -lrt -lm -lutil   &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: warning: libmxm.so.2, needed by 
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so, not found (try using -rpath or 
</span><br>
<span class="quotelev1">&gt; -rpath-link)
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `mxm_req_recv'
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `mxm_ep_create'
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `mxm_config_free_context_opts'
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `mxm_ep_destroy'
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `mxm_config_free_ep_opts'
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `mxm_progress'
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `mxm_config_read_opts'
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `mxm_ep_disconnect'
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `mxm_mq_destroy'
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `mxm_mq_create'
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to `mxm_cleanup'
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `mxm_req_send'
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `mxm_ep_connect'
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to `mxm_init'
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `mxm_ep_get_address'
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `mxm_error_string'
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `mxm_mem_unmap'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An ldd on /opt/mellanox/hcoll/lib/libhcoll.so shows a dependency on 
</span><br>
<span class="quotelev1">&gt; libmxm.so, so the above error makes sense. I am using hcoll version 
</span><br>
<span class="quotelev1">&gt; 3.3.768 and mxm version 3.4.3065 (reported by rpm).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, my question: is there a way to take care of this other than 
</span><br>
<span class="quotelev1">&gt; putting '-L/opt/mellanox/lib -lmxm' in to LDFLAGS/LIBS? Using 
</span><br>
<span class="quotelev1">&gt; LDFLAGS/LIBS will link mxm in to everything, which I would prefer not 
</span><br>
<span class="quotelev1">&gt; to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance!
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<li><strong>Next message:</strong> <a href="27908.php">Mike Dubman: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Previous message:</strong> <a href="27906.php">David Shrader: "[OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>In reply to:</strong> <a href="27906.php">David Shrader: "[OMPI users] hcoll dependency on mxm configure error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27908.php">Mike Dubman: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Reply:</strong> <a href="27908.php">Mike Dubman: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
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
