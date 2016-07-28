<?
$subject_val = "Re: [OMPI users] hcoll dependency on mxm configure error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 12:19:13 2015" -->
<!-- isoreceived="20151021161913" -->
<!-- sent="Wed, 21 Oct 2015 10:19:09 -0600" -->
<!-- isosent="20151021161909" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hcoll dependency on mxm configure error" -->
<!-- id="5627BAFD.9060702_at_lanl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAO1KyYzK2MKVs4UYvQU0CvyoV1hiC+EMqBUt4r20pBJoZr3oA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-10-21 12:19:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27910.php">Mike Dubman: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Previous message:</strong> <a href="27908.php">Mike Dubman: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>In reply to:</strong> <a href="27908.php">Mike Dubman: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27910.php">Mike Dubman: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Reply:</strong> <a href="27910.php">Mike Dubman: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We're using TOSS which is based on Red Hat. The current version we're 
<br>
running is based on Red Hat 6.6. I'm actually not sure what mofed 
<br>
version we're using right now based on what I can find on the system and 
<br>
the admins over that are out. I'll get back to you on that as soon as I 
<br>
know.
<br>
<p>Using LD_LIBRARY_PATH before configure got it to work, which I didn't 
<br>
expect. Thanks for the tip! I didn't realize that loading in a shared 
<br>
library of a library that is being linked in on the active compile line 
<br>
fell under the runtime portion of linking, and could be affected by 
<br>
using LD_LIBRARY_PATH.
<br>
<p>Thanks!
<br>
David
<br>
<p>On 10/21/2015 09:59 AM, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt; Hi David,
</span><br>
<span class="quotelev1">&gt; what linux distro do you use? (and mofed version)?
</span><br>
<span class="quotelev1">&gt; Do you have /etc/ld.conf.d/mxm.conf file?
</span><br>
<span class="quotelev1">&gt; Can you please try add LD_LIBRARY_PATH=/opt/mellanox/mxm/lib 
</span><br>
<span class="quotelev1">&gt; ./configure ....?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Oct 21, 2015 at 6:40 PM, David Shrader &lt;dshrader_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:dshrader_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I should probably point out that libhcoll.so does not know where
</span><br>
<span class="quotelev1">&gt;     libmxm.so is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [dshrader_at_zo-fe1 ~]$ ldd /opt/mellanox/hcoll/lib/libhcoll.so
</span><br>
<span class="quotelev1">&gt;             linux-vdso.so.1 =&gt;  (0x00007fffb2f1f000)
</span><br>
<span class="quotelev1">&gt;             libibnetdisc.so.5 =&gt; /usr/lib64/libibnetdisc.so.5
</span><br>
<span class="quotelev1">&gt;     (0x00007fe31bd0b000)
</span><br>
<span class="quotelev1">&gt;             libmxm.so.2 =&gt; not found
</span><br>
<span class="quotelev1">&gt;             libz.so.1 =&gt; /lib64/libz.so.1 (0x00007fe31baf4000)
</span><br>
<span class="quotelev1">&gt;             libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007fe31b8f0000)
</span><br>
<span class="quotelev1">&gt;             libosmcomp.so.3 =&gt; /usr/lib64/libosmcomp.so.3
</span><br>
<span class="quotelev1">&gt;     (0x00007fe31b6e2000)
</span><br>
<span class="quotelev1">&gt;             libocoms.so.0 =&gt; /opt/mellanox/hcoll/lib/libocoms.so.0
</span><br>
<span class="quotelev1">&gt;     (0x00007fe31b499000)
</span><br>
<span class="quotelev1">&gt;             libm.so.6 =&gt; /lib64/libm.so.6 (0x00007fe31b215000)
</span><br>
<span class="quotelev1">&gt;             libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1 (0x00007fe31b009000)
</span><br>
<span class="quotelev1">&gt;             libalog.so.0 =&gt; /opt/mellanox/hcoll/lib/libalog.so.0
</span><br>
<span class="quotelev1">&gt;     (0x00007fe31adfe000)
</span><br>
<span class="quotelev1">&gt;             librt.so.1 =&gt; /lib64/librt.so.1 (0x00007fe31abf6000)
</span><br>
<span class="quotelev1">&gt;             libibumad.so.3 =&gt; /usr/lib64/libibumad.so.3
</span><br>
<span class="quotelev1">&gt;     (0x00007fe31a9ee000)
</span><br>
<span class="quotelev1">&gt;             librdmacm.so.1 =&gt; /usr/lib64/librdmacm.so.1
</span><br>
<span class="quotelev1">&gt;     (0x00007fe31a7d9000)
</span><br>
<span class="quotelev1">&gt;             libibverbs.so.1 =&gt; /usr/lib64/libibverbs.so.1
</span><br>
<span class="quotelev1">&gt;     (0x00007fe31a5c7000)
</span><br>
<span class="quotelev1">&gt;             libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007fe31a3a9000)
</span><br>
<span class="quotelev1">&gt;             libc.so.6 =&gt; /lib64/libc.so.6 (0x00007fe31a015000)
</span><br>
<span class="quotelev1">&gt;             libglib-2.0.so.0 =&gt; /lib64/libglib-2.0.so.0
</span><br>
<span class="quotelev1">&gt;     (0x00007fe319cfe000)
</span><br>
<span class="quotelev1">&gt;             libibmad.so.5 =&gt; /usr/lib64/libibmad.so.5 (0x00007fe319ae3000)
</span><br>
<span class="quotelev1">&gt;             /lib64/ld-linux-x86-64.so.2 (0x00007fe31c2d3000)
</span><br>
<span class="quotelev1">&gt;             libwrap.so.0 =&gt; /lib64/libwrap.so.0 (0x00007fe3198d8000)
</span><br>
<span class="quotelev1">&gt;             libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00007fe3196c2000)
</span><br>
<span class="quotelev1">&gt;             libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00007fe3194a8000)
</span><br>
<span class="quotelev1">&gt;             libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00007fe3192a5000)
</span><br>
<span class="quotelev1">&gt;             libnl.so.1 =&gt; /lib64/libnl.so.1 (0x00007fe319052000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Both hcoll and mxm where installed using the rpms provided by
</span><br>
<span class="quotelev1">&gt;     Mellanox.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks again,
</span><br>
<span class="quotelev1">&gt;     David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 10/21/2015 09:34 AM, David Shrader wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hello All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I'm currently trying to install 1.10.0 with hcoll and mxm, and
</span><br>
<span class="quotelev1">&gt;         am getting an error during configure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         --- MCA component coll:hcoll (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt;         checking for MCA component coll:hcoll compile mode... static
</span><br>
<span class="quotelev1">&gt;         checking hcoll/api/hcoll_api.h usability... yes
</span><br>
<span class="quotelev1">&gt;         checking hcoll/api/hcoll_api.h presence... yes
</span><br>
<span class="quotelev1">&gt;         checking for hcoll/api/hcoll_api.h... yes
</span><br>
<span class="quotelev1">&gt;         looking for library in lib
</span><br>
<span class="quotelev1">&gt;         checking for library containing hcoll_get_version... no
</span><br>
<span class="quotelev1">&gt;         looking for library in lib64
</span><br>
<span class="quotelev1">&gt;         checking for library containing hcoll_get_version... no
</span><br>
<span class="quotelev1">&gt;         configure: error: HCOLL support requested but not found.  Aborting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         The configure line I used:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         ./configure --with-mxm=/opt/mellanox/mxm
</span><br>
<span class="quotelev1">&gt;         --with-hcoll=/opt/mellanox/hcoll
</span><br>
<span class="quotelev1">&gt;         --with-platform=contrib/platform/lanl/toss/optimized-panasas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Here are the corresponding lines from config.log:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         configure:217014: gcc -std=gnu99 -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt;         -I/opt/panfs/include -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt;         -pthread
</span><br>
<span class="quotelev1">&gt;         -I/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.10.0/openmpi-1.10.0/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev1">&gt;         -I/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.10.0/openmpi-1.10.0/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev1">&gt;         -I/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.10.0/openmpi-1.10.0/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev1">&gt;         -I/opt/mellanox/hcoll/include  -L/opt/mellanox/hcoll/lib
</span><br>
<span class="quotelev1">&gt;         conftest.c -lhcoll  -lrt -lm -lutil   &gt;&amp;5
</span><br>
<span class="quotelev1">&gt;         /usr/bin/ld: warning: libmxm.so.2, needed by
</span><br>
<span class="quotelev1">&gt;         /opt/mellanox/hcoll/lib/libhcoll.so, not found (try using
</span><br>
<span class="quotelev1">&gt;         -rpath or -rpath-link)
</span><br>
<span class="quotelev1">&gt;         /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;         `mxm_req_recv'
</span><br>
<span class="quotelev1">&gt;         /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;         `mxm_ep_create'
</span><br>
<span class="quotelev1">&gt;         /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;         `mxm_config_free_context_opts'
</span><br>
<span class="quotelev1">&gt;         /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;         `mxm_ep_destroy'
</span><br>
<span class="quotelev1">&gt;         /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;         `mxm_config_free_ep_opts'
</span><br>
<span class="quotelev1">&gt;         /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;         `mxm_progress'
</span><br>
<span class="quotelev1">&gt;         /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;         `mxm_config_read_opts'
</span><br>
<span class="quotelev1">&gt;         /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;         `mxm_ep_disconnect'
</span><br>
<span class="quotelev1">&gt;         /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;         `mxm_mq_destroy'
</span><br>
<span class="quotelev1">&gt;         /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;         `mxm_mq_create'
</span><br>
<span class="quotelev1">&gt;         /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;         `mxm_cleanup'
</span><br>
<span class="quotelev1">&gt;         /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;         `mxm_req_send'
</span><br>
<span class="quotelev1">&gt;         /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;         `mxm_ep_connect'
</span><br>
<span class="quotelev1">&gt;         /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;         `mxm_init'
</span><br>
<span class="quotelev1">&gt;         /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;         `mxm_ep_get_address'
</span><br>
<span class="quotelev1">&gt;         /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;         `mxm_error_string'
</span><br>
<span class="quotelev1">&gt;         /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;         `mxm_mem_unmap'
</span><br>
<span class="quotelev1">&gt;         collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         An ldd on /opt/mellanox/hcoll/lib/libhcoll.so shows a
</span><br>
<span class="quotelev1">&gt;         dependency on libmxm.so, so the above error makes sense. I am
</span><br>
<span class="quotelev1">&gt;         using hcoll version 3.3.768 and mxm version 3.4.3065 (reported
</span><br>
<span class="quotelev1">&gt;         by rpm).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         So, my question: is there a way to take care of this other
</span><br>
<span class="quotelev1">&gt;         than putting '-L/opt/mellanox/lib -lmxm' in to LDFLAGS/LIBS?
</span><br>
<span class="quotelev1">&gt;         Using LDFLAGS/LIBS will link mxm in to everything, which I
</span><br>
<span class="quotelev1">&gt;         would prefer not to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thanks in advance!
</span><br>
<span class="quotelev1">&gt;         David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     David Shrader
</span><br>
<span class="quotelev1">&gt;     HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev1">&gt;     Los Alamos National Lab
</span><br>
<span class="quotelev1">&gt;     Email: dshrader &lt;at&gt; lanl.gov &lt;<a href="http://lanl.gov">http://lanl.gov</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/10/27907.php">http://www.open-mpi.org/community/lists/users/2015/10/27907.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27908.php">http://www.open-mpi.org/community/lists/users/2015/10/27908.php</a>
</span><br>
<p><pre>
-- 
David Shrader
HPC-3 High Performance Computer Systems
Los Alamos National Lab
Email: dshrader &lt;at&gt; lanl.gov
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27909/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27910.php">Mike Dubman: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Previous message:</strong> <a href="27908.php">Mike Dubman: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>In reply to:</strong> <a href="27908.php">Mike Dubman: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27910.php">Mike Dubman: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Reply:</strong> <a href="27910.php">Mike Dubman: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
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
