<?
$subject_val = "Re: [OMPI users] hcoll dependency on mxm configure error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 11:59:44 2015" -->
<!-- isoreceived="20151021155944" -->
<!-- sent="Wed, 21 Oct 2015 18:59:41 +0300" -->
<!-- isosent="20151021155941" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hcoll dependency on mxm configure error" -->
<!-- id="CAAO1KyYzK2MKVs4UYvQU0CvyoV1hiC+EMqBUt4r20pBJoZr3oA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5627B1EA.7000105_at_lanl.gov" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-21 11:59:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27909.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Previous message:</strong> <a href="27907.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>In reply to:</strong> <a href="27907.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27909.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Reply:</strong> <a href="27909.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi David,
<br>
what linux distro do you use? (and mofed version)?
<br>
Do you have /etc/ld.conf.d/mxm.conf file?
<br>
Can you please try add LD_LIBRARY_PATH=/opt/mellanox/mxm/lib ./configure
<br>
....?
<br>
<p><p>Thanks
<br>
<p>On Wed, Oct 21, 2015 at 6:40 PM, David Shrader &lt;dshrader_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I should probably point out that libhcoll.so does not know where libmxm.so
</span><br>
<span class="quotelev1">&gt; is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [dshrader_at_zo-fe1 ~]$ ldd /opt/mellanox/hcoll/lib/libhcoll.so
</span><br>
<span class="quotelev1">&gt;         linux-vdso.so.1 =&gt;  (0x00007fffb2f1f000)
</span><br>
<span class="quotelev1">&gt;         libibnetdisc.so.5 =&gt; /usr/lib64/libibnetdisc.so.5
</span><br>
<span class="quotelev1">&gt; (0x00007fe31bd0b000)
</span><br>
<span class="quotelev1">&gt;         libmxm.so.2 =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libz.so.1 =&gt; /lib64/libz.so.1 (0x00007fe31baf4000)
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007fe31b8f0000)
</span><br>
<span class="quotelev1">&gt;         libosmcomp.so.3 =&gt; /usr/lib64/libosmcomp.so.3 (0x00007fe31b6e2000)
</span><br>
<span class="quotelev1">&gt;         libocoms.so.0 =&gt; /opt/mellanox/hcoll/lib/libocoms.so.0
</span><br>
<span class="quotelev1">&gt; (0x00007fe31b499000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00007fe31b215000)
</span><br>
<span class="quotelev1">&gt;         libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1 (0x00007fe31b009000)
</span><br>
<span class="quotelev1">&gt;         libalog.so.0 =&gt; /opt/mellanox/hcoll/lib/libalog.so.0
</span><br>
<span class="quotelev1">&gt; (0x00007fe31adfe000)
</span><br>
<span class="quotelev1">&gt;         librt.so.1 =&gt; /lib64/librt.so.1 (0x00007fe31abf6000)
</span><br>
<span class="quotelev1">&gt;         libibumad.so.3 =&gt; /usr/lib64/libibumad.so.3 (0x00007fe31a9ee000)
</span><br>
<span class="quotelev1">&gt;         librdmacm.so.1 =&gt; /usr/lib64/librdmacm.so.1 (0x00007fe31a7d9000)
</span><br>
<span class="quotelev1">&gt;         libibverbs.so.1 =&gt; /usr/lib64/libibverbs.so.1 (0x00007fe31a5c7000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007fe31a3a9000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00007fe31a015000)
</span><br>
<span class="quotelev1">&gt;         libglib-2.0.so.0 =&gt; /lib64/libglib-2.0.so.0 (0x00007fe319cfe000)
</span><br>
<span class="quotelev1">&gt;         libibmad.so.5 =&gt; /usr/lib64/libibmad.so.5 (0x00007fe319ae3000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x00007fe31c2d3000)
</span><br>
<span class="quotelev1">&gt;         libwrap.so.0 =&gt; /lib64/libwrap.so.0 (0x00007fe3198d8000)
</span><br>
<span class="quotelev1">&gt;         libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00007fe3196c2000)
</span><br>
<span class="quotelev1">&gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00007fe3194a8000)
</span><br>
<span class="quotelev1">&gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00007fe3192a5000)
</span><br>
<span class="quotelev1">&gt;         libnl.so.1 =&gt; /lib64/libnl.so.1 (0x00007fe319052000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both hcoll and mxm where installed using the rpms provided by Mellanox.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again,
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/21/2015 09:34 AM, David Shrader wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm currently trying to install 1.10.0 with hcoll and mxm, and am getting
</span><br>
<span class="quotelev2">&gt;&gt; an error during configure:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- MCA component coll:hcoll (m4 configuration macro)
</span><br>
<span class="quotelev2">&gt;&gt; checking for MCA component coll:hcoll compile mode... static
</span><br>
<span class="quotelev2">&gt;&gt; checking hcoll/api/hcoll_api.h usability... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking hcoll/api/hcoll_api.h presence... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for hcoll/api/hcoll_api.h... yes
</span><br>
<span class="quotelev2">&gt;&gt; looking for library in lib
</span><br>
<span class="quotelev2">&gt;&gt; checking for library containing hcoll_get_version... no
</span><br>
<span class="quotelev2">&gt;&gt; looking for library in lib64
</span><br>
<span class="quotelev2">&gt;&gt; checking for library containing hcoll_get_version... no
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: HCOLL support requested but not found.  Aborting
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The configure line I used:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --with-mxm=/opt/mellanox/mxm --with-hcoll=/opt/mellanox/hcoll
</span><br>
<span class="quotelev2">&gt;&gt; --with-platform=contrib/platform/lanl/toss/optimized-panasas
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here are the corresponding lines from config.log:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:217014: gcc -std=gnu99 -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -I/opt/panfs/include -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt; -I/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.10.0/openmpi-1.10.0/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev2">&gt;&gt; -I/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.10.0/openmpi-1.10.0/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev2">&gt;&gt; -I/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.10.0/openmpi-1.10.0/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev2">&gt;&gt; -I/opt/mellanox/hcoll/include   -L/opt/mellanox/hcoll/lib conftest.c
</span><br>
<span class="quotelev2">&gt;&gt; -lhcoll  -lrt -lm -lutil   &gt;&amp;5
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: warning: libmxm.so.2, needed by
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so, not found (try using -rpath or
</span><br>
<span class="quotelev2">&gt;&gt; -rpath-link)
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to `mxm_req_recv'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev2">&gt;&gt; `mxm_ep_create'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev2">&gt;&gt; `mxm_config_free_context_opts'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev2">&gt;&gt; `mxm_ep_destroy'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev2">&gt;&gt; `mxm_config_free_ep_opts'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to `mxm_progress'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev2">&gt;&gt; `mxm_config_read_opts'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev2">&gt;&gt; `mxm_ep_disconnect'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev2">&gt;&gt; `mxm_mq_destroy'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev2">&gt;&gt; `mxm_mq_create'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to `mxm_cleanup'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to `mxm_req_send'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev2">&gt;&gt; `mxm_ep_connect'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to `mxm_init'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev2">&gt;&gt; `mxm_ep_get_address'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev2">&gt;&gt; `mxm_error_string'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev2">&gt;&gt; `mxm_mem_unmap'
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; An ldd on /opt/mellanox/hcoll/lib/libhcoll.so shows a dependency on
</span><br>
<span class="quotelev2">&gt;&gt; libmxm.so, so the above error makes sense. I am using hcoll version 3.3.768
</span><br>
<span class="quotelev2">&gt;&gt; and mxm version 3.4.3065 (reported by rpm).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, my question: is there a way to take care of this other than putting
</span><br>
<span class="quotelev2">&gt;&gt; '-L/opt/mellanox/lib -lmxm' in to LDFLAGS/LIBS? Using LDFLAGS/LIBS will
</span><br>
<span class="quotelev2">&gt;&gt; link mxm in to everything, which I would prefer not to do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance!
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Shrader
</span><br>
<span class="quotelev1">&gt; HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev1">&gt; Los Alamos National Lab
</span><br>
<span class="quotelev1">&gt; Email: dshrader &lt;at&gt; lanl.gov
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27907.php">http://www.open-mpi.org/community/lists/users/2015/10/27907.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind Regards,
M.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27908/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27909.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Previous message:</strong> <a href="27907.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>In reply to:</strong> <a href="27907.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27909.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Reply:</strong> <a href="27909.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
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
