<?
$subject_val = "Re: [OMPI users] hcoll dependency on mxm configure error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 13:37:34 2015" -->
<!-- isoreceived="20151021173734" -->
<!-- sent="Wed, 21 Oct 2015 20:37:31 +0300" -->
<!-- isosent="20151021173731" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hcoll dependency on mxm configure error" -->
<!-- id="CAAO1Kya+dtwt37AYQ2J3692KpusAxyaacVgW=01LVCmm0rtCjQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5627BAFD.9060702_at_lanl.gov" -->
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
<strong>Date:</strong> 2015-10-21 13:37:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27911.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Previous message:</strong> <a href="27909.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>In reply to:</strong> <a href="27909.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27911.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Reply:</strong> <a href="27911.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
could you please check if you have file /etc/ld.so.conf.d/mxm.conf on your
<br>
system?
<br>
it will help us understand why hcoll did not detect libmxm.so at the 1st
<br>
attempt.
<br>
<p>Thanks
<br>
<p>On Wed, Oct 21, 2015 at 7:19 PM, David Shrader &lt;dshrader_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We're using TOSS which is based on Red Hat. The current version we're
</span><br>
<span class="quotelev1">&gt; running is based on Red Hat 6.6. I'm actually not sure what mofed version
</span><br>
<span class="quotelev1">&gt; we're using right now based on what I can find on the system and the admins
</span><br>
<span class="quotelev1">&gt; over that are out. I'll get back to you on that as soon as I know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using LD_LIBRARY_PATH before configure got it to work, which I didn't
</span><br>
<span class="quotelev1">&gt; expect. Thanks for the tip! I didn't realize that loading in a shared
</span><br>
<span class="quotelev1">&gt; library of a library that is being linked in on the active compile line
</span><br>
<span class="quotelev1">&gt; fell under the runtime portion of linking, and could be affected by using
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/21/2015 09:59 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi David,
</span><br>
<span class="quotelev1">&gt; what linux distro do you use? (and mofed version)?
</span><br>
<span class="quotelev1">&gt; Do you have /etc/ld.conf.d/mxm.conf file?
</span><br>
<span class="quotelev1">&gt; Can you please try add LD_LIBRARY_PATH=/opt/mellanox/mxm/lib ./configure
</span><br>
<span class="quotelev1">&gt; ....?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Oct 21, 2015 at 6:40 PM, David Shrader &lt;dshrader_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I should probably point out that libhcoll.so does not know where
</span><br>
<span class="quotelev2">&gt;&gt; libmxm.so is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [dshrader_at_zo-fe1 ~]$ ldd /opt/mellanox/hcoll/lib/libhcoll.so
</span><br>
<span class="quotelev2">&gt;&gt;         linux-vdso.so.1 =&gt;  (0x00007fffb2f1f000)
</span><br>
<span class="quotelev2">&gt;&gt;         libibnetdisc.so.5 =&gt; /usr/lib64/libibnetdisc.so.5
</span><br>
<span class="quotelev2">&gt;&gt; (0x00007fe31bd0b000)
</span><br>
<span class="quotelev2">&gt;&gt;         libmxm.so.2 =&gt; not found
</span><br>
<span class="quotelev2">&gt;&gt;         libz.so.1 =&gt; /lib64/libz.so.1 (0x00007fe31baf4000)
</span><br>
<span class="quotelev2">&gt;&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007fe31b8f0000)
</span><br>
<span class="quotelev2">&gt;&gt;         libosmcomp.so.3 =&gt; /usr/lib64/libosmcomp.so.3 (0x00007fe31b6e2000)
</span><br>
<span class="quotelev2">&gt;&gt;         libocoms.so.0 =&gt; /opt/mellanox/hcoll/lib/libocoms.so.0
</span><br>
<span class="quotelev2">&gt;&gt; (0x00007fe31b499000)
</span><br>
<span class="quotelev2">&gt;&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00007fe31b215000)
</span><br>
<span class="quotelev2">&gt;&gt;         libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1 (0x00007fe31b009000)
</span><br>
<span class="quotelev2">&gt;&gt;         libalog.so.0 =&gt; /opt/mellanox/hcoll/lib/libalog.so.0
</span><br>
<span class="quotelev2">&gt;&gt; (0x00007fe31adfe000)
</span><br>
<span class="quotelev2">&gt;&gt;         librt.so.1 =&gt; /lib64/librt.so.1 (0x00007fe31abf6000)
</span><br>
<span class="quotelev2">&gt;&gt;         libibumad.so.3 =&gt; /usr/lib64/libibumad.so.3 (0x00007fe31a9ee000)
</span><br>
<span class="quotelev2">&gt;&gt;         librdmacm.so.1 =&gt; /usr/lib64/librdmacm.so.1 (0x00007fe31a7d9000)
</span><br>
<span class="quotelev2">&gt;&gt;         libibverbs.so.1 =&gt; /usr/lib64/libibverbs.so.1 (0x00007fe31a5c7000)
</span><br>
<span class="quotelev2">&gt;&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007fe31a3a9000)
</span><br>
<span class="quotelev2">&gt;&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00007fe31a015000)
</span><br>
<span class="quotelev2">&gt;&gt;         libglib-2.0.so.0 =&gt; /lib64/libglib-2.0.so.0 (0x00007fe319cfe000)
</span><br>
<span class="quotelev2">&gt;&gt;         libibmad.so.5 =&gt; /usr/lib64/libibmad.so.5 (0x00007fe319ae3000)
</span><br>
<span class="quotelev2">&gt;&gt;         /lib64/ld-linux-x86-64.so.2 (0x00007fe31c2d3000)
</span><br>
<span class="quotelev2">&gt;&gt;         libwrap.so.0 =&gt; /lib64/libwrap.so.0 (0x00007fe3198d8000)
</span><br>
<span class="quotelev2">&gt;&gt;         libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00007fe3196c2000)
</span><br>
<span class="quotelev2">&gt;&gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00007fe3194a8000)
</span><br>
<span class="quotelev2">&gt;&gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00007fe3192a5000)
</span><br>
<span class="quotelev2">&gt;&gt;         libnl.so.1 =&gt; /lib64/libnl.so.1 (0x00007fe319052000)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Both hcoll and mxm where installed using the rpms provided by Mellanox.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again,
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/21/2015 09:34 AM, David Shrader wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm currently trying to install 1.10.0 with hcoll and mxm, and am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; getting an error during configure:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- MCA component coll:hcoll (m4 configuration macro)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for MCA component coll:hcoll compile mode... static
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking hcoll/api/hcoll_api.h usability... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking hcoll/api/hcoll_api.h presence... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for hcoll/api/hcoll_api.h... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking for library in lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for library containing hcoll_get_version... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking for library in lib64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for library containing hcoll_get_version... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: error: HCOLL support requested but not found.  Aborting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The configure line I used:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --with-mxm=/opt/mellanox/mxm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-hcoll=/opt/mellanox/hcoll
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-platform=contrib/platform/lanl/toss/optimized-panasas
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here are the corresponding lines from config.log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:217014: gcc -std=gnu99 -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/opt/panfs/include -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.10.0/openmpi-1.10.0/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.10.0/openmpi-1.10.0/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.10.0/openmpi-1.10.0/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/opt/mellanox/hcoll/include   -L/opt/mellanox/hcoll/lib conftest.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lhcoll  -lrt -lm -lutil   &gt;&amp;5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin/ld: warning: libmxm.so.2, needed by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so, not found (try using -rpath or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rpath-link)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `mxm_req_recv'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `mxm_ep_create'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `mxm_config_free_context_opts'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `mxm_ep_destroy'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `mxm_config_free_ep_opts'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `mxm_progress'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `mxm_config_read_opts'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `mxm_ep_disconnect'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `mxm_mq_destroy'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `mxm_mq_create'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to `mxm_cleanup'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `mxm_req_send'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `mxm_ep_connect'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to `mxm_init'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `mxm_ep_get_address'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `mxm_error_string'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `mxm_mem_unmap'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An ldd on /opt/mellanox/hcoll/lib/libhcoll.so shows a dependency on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmxm.so, so the above error makes sense. I am using hcoll version 3.3.768
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and mxm version 3.4.3065 (reported by rpm).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, my question: is there a way to take care of this other than putting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '-L/opt/mellanox/lib -lmxm' in to LDFLAGS/LIBS? Using LDFLAGS/LIBS will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; link mxm in to everything, which I would prefer not to do.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; David Shrader
</span><br>
<span class="quotelev2">&gt;&gt; HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Lab
</span><br>
<span class="quotelev2">&gt;&gt; Email: dshrader &lt;at&gt; lanl.gov
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27907.php">http://www.open-mpi.org/community/lists/users/2015/10/27907.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27908.php">http://www.open-mpi.org/community/lists/users/2015/10/27908.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27909.php">http://www.open-mpi.org/community/lists/users/2015/10/27909.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27910/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27911.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Previous message:</strong> <a href="27909.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>In reply to:</strong> <a href="27909.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27911.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Reply:</strong> <a href="27911.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
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
