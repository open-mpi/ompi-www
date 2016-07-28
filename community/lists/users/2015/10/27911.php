<?
$subject_val = "Re: [OMPI users] hcoll dependency on mxm configure error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 14:00:11 2015" -->
<!-- isoreceived="20151021180011" -->
<!-- sent="Wed, 21 Oct 2015 12:00:02 -0600" -->
<!-- isosent="20151021180002" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hcoll dependency on mxm configure error" -->
<!-- id="5627D2A2.9060707_at_lanl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAO1Kya+dtwt37AYQ2J3692KpusAxyaacVgW=01LVCmm0rtCjQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-10-21 14:00:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27912.php">Shamis, Pavel: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Previous message:</strong> <a href="27910.php">Mike Dubman: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>In reply to:</strong> <a href="27910.php">Mike Dubman: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27913.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Reply:</strong> <a href="27913.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm sorry I missed reporting on that. I do not have 
<br>
/etc/ld.so.conf.d/mxm.conf.
<br>
<p>Interestingly enough, the rpm reports that it does include that file, 
<br>
but it isn't there:
<br>
<p>[dshrader_at_zo-fe1 serial]$ rpm -qa | grep mxm
<br>
mxm-3.4.3065-1.x86_64
<br>
[dshrader_at_zo-fe1 serial]$ rpm -ql mxm-3.4.3065-1.x86_64
<br>
/etc/ld.so.conf.d/mxm.conf
<br>
...output snipped...
<br>
[dshrader_at_zo-fe1 serial]$ ll /etc/ld.so.conf.d/mxm.conf
<br>
ls: cannot access /etc/ld.so.conf.d/mxm.conf: No such file or directory
<br>
<p>I'll follow up with the admin who installed the rpm.
<br>
<p>Thanks,
<br>
David
<br>
<p>On 10/21/2015 11:37 AM, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt; could you please check if you have file /etc/ld.so.conf.d/mxm.conf on 
</span><br>
<span class="quotelev1">&gt; your system?
</span><br>
<span class="quotelev1">&gt; it will help us understand why hcoll did not detect libmxm.so at the 
</span><br>
<span class="quotelev1">&gt; 1st attempt.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Oct 21, 2015 at 7:19 PM, David Shrader &lt;dshrader_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:dshrader_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     We're using TOSS which is based on Red Hat. The current version
</span><br>
<span class="quotelev1">&gt;     we're running is based on Red Hat 6.6. I'm actually not sure what
</span><br>
<span class="quotelev1">&gt;     mofed version we're using right now based on what I can find on
</span><br>
<span class="quotelev1">&gt;     the system and the admins over that are out. I'll get back to you
</span><br>
<span class="quotelev1">&gt;     on that as soon as I know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Using LD_LIBRARY_PATH before configure got it to work, which I
</span><br>
<span class="quotelev1">&gt;     didn't expect. Thanks for the tip! I didn't realize that loading
</span><br>
<span class="quotelev1">&gt;     in a shared library of a library that is being linked in on the
</span><br>
<span class="quotelev1">&gt;     active compile line fell under the runtime portion of linking, and
</span><br>
<span class="quotelev1">&gt;     could be affected by using LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks!
</span><br>
<span class="quotelev1">&gt;     David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 10/21/2015 09:59 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Hi David,
</span><br>
<span class="quotelev2">&gt;&gt;     what linux distro do you use? (and mofed version)?
</span><br>
<span class="quotelev2">&gt;&gt;     Do you have /etc/ld.conf.d/mxm.conf file?
</span><br>
<span class="quotelev2">&gt;&gt;     Can you please try add LD_LIBRARY_PATH=/opt/mellanox/mxm/lib
</span><br>
<span class="quotelev2">&gt;&gt;     ./configure ....?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Wed, Oct 21, 2015 at 6:40 PM, David Shrader &lt;dshrader_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:dshrader_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I should probably point out that libhcoll.so does not know
</span><br>
<span class="quotelev2">&gt;&gt;         where libmxm.so is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         [dshrader_at_zo-fe1 ~]$ ldd /opt/mellanox/hcoll/lib/libhcoll.so
</span><br>
<span class="quotelev2">&gt;&gt;                 linux-vdso.so.1 =&gt; (0x00007fffb2f1f000)
</span><br>
<span class="quotelev2">&gt;&gt;                 libibnetdisc.so.5 =&gt; /usr/lib64/libibnetdisc.so.5
</span><br>
<span class="quotelev2">&gt;&gt;         (0x00007fe31bd0b000)
</span><br>
<span class="quotelev2">&gt;&gt;                 libmxm.so.2 =&gt; not found
</span><br>
<span class="quotelev2">&gt;&gt;                 libz.so.1 =&gt; /lib64/libz.so.1 (0x00007fe31baf4000)
</span><br>
<span class="quotelev2">&gt;&gt;                 libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007fe31b8f0000)
</span><br>
<span class="quotelev2">&gt;&gt;                 libosmcomp.so.3 =&gt; /usr/lib64/libosmcomp.so.3
</span><br>
<span class="quotelev2">&gt;&gt;         (0x00007fe31b6e2000)
</span><br>
<span class="quotelev2">&gt;&gt;                 libocoms.so.0 =&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /opt/mellanox/hcoll/lib/libocoms.so.0 (0x00007fe31b499000)
</span><br>
<span class="quotelev2">&gt;&gt;                 libm.so.6 =&gt; /lib64/libm.so.6 (0x00007fe31b215000)
</span><br>
<span class="quotelev2">&gt;&gt;                 libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1
</span><br>
<span class="quotelev2">&gt;&gt;         (0x00007fe31b009000)
</span><br>
<span class="quotelev2">&gt;&gt;                 libalog.so.0 =&gt; /opt/mellanox/hcoll/lib/libalog.so.0
</span><br>
<span class="quotelev2">&gt;&gt;         (0x00007fe31adfe000)
</span><br>
<span class="quotelev2">&gt;&gt;                 librt.so.1 =&gt; /lib64/librt.so.1 (0x00007fe31abf6000)
</span><br>
<span class="quotelev2">&gt;&gt;                 libibumad.so.3 =&gt; /usr/lib64/libibumad.so.3
</span><br>
<span class="quotelev2">&gt;&gt;         (0x00007fe31a9ee000)
</span><br>
<span class="quotelev2">&gt;&gt;                 librdmacm.so.1 =&gt; /usr/lib64/librdmacm.so.1
</span><br>
<span class="quotelev2">&gt;&gt;         (0x00007fe31a7d9000)
</span><br>
<span class="quotelev2">&gt;&gt;                 libibverbs.so.1 =&gt; /usr/lib64/libibverbs.so.1
</span><br>
<span class="quotelev2">&gt;&gt;         (0x00007fe31a5c7000)
</span><br>
<span class="quotelev2">&gt;&gt;                 libpthread.so.0 =&gt; /lib64/libpthread.so.0
</span><br>
<span class="quotelev2">&gt;&gt;         (0x00007fe31a3a9000)
</span><br>
<span class="quotelev2">&gt;&gt;                 libc.so.6 =&gt; /lib64/libc.so.6 (0x00007fe31a015000)
</span><br>
<span class="quotelev2">&gt;&gt;                 libglib-2.0.so.0 =&gt; /lib64/libglib-2.0.so.0
</span><br>
<span class="quotelev2">&gt;&gt;         (0x00007fe319cfe000)
</span><br>
<span class="quotelev2">&gt;&gt;                 libibmad.so.5 =&gt; /usr/lib64/libibmad.so.5
</span><br>
<span class="quotelev2">&gt;&gt;         (0x00007fe319ae3000)
</span><br>
<span class="quotelev2">&gt;&gt;                 /lib64/ld-linux-x86-64.so.2 (0x00007fe31c2d3000)
</span><br>
<span class="quotelev2">&gt;&gt;                 libwrap.so.0 =&gt; /lib64/libwrap.so.0 (0x00007fe3198d8000)
</span><br>
<span class="quotelev2">&gt;&gt;                 libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev2">&gt;&gt;         (0x00007fe3196c2000)
</span><br>
<span class="quotelev2">&gt;&gt;                 libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00007fe3194a8000)
</span><br>
<span class="quotelev2">&gt;&gt;                 libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00007fe3192a5000)
</span><br>
<span class="quotelev2">&gt;&gt;                 libnl.so.1 =&gt; /lib64/libnl.so.1 (0x00007fe319052000)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Both hcoll and mxm where installed using the rpms provided by
</span><br>
<span class="quotelev2">&gt;&gt;         Mellanox.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Thanks again,
</span><br>
<span class="quotelev2">&gt;&gt;         David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On 10/21/2015 09:34 AM, David Shrader wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Hello All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             I'm currently trying to install 1.10.0 with hcoll and
</span><br>
<span class="quotelev2">&gt;&gt;             mxm, and am getting an error during configure:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             --- MCA component coll:hcoll (m4 configuration macro)
</span><br>
<span class="quotelev2">&gt;&gt;             checking for MCA component coll:hcoll compile mode... static
</span><br>
<span class="quotelev2">&gt;&gt;             checking hcoll/api/hcoll_api.h usability... yes
</span><br>
<span class="quotelev2">&gt;&gt;             checking hcoll/api/hcoll_api.h presence... yes
</span><br>
<span class="quotelev2">&gt;&gt;             checking for hcoll/api/hcoll_api.h... yes
</span><br>
<span class="quotelev2">&gt;&gt;             looking for library in lib
</span><br>
<span class="quotelev2">&gt;&gt;             checking for library containing hcoll_get_version... no
</span><br>
<span class="quotelev2">&gt;&gt;             looking for library in lib64
</span><br>
<span class="quotelev2">&gt;&gt;             checking for library containing hcoll_get_version... no
</span><br>
<span class="quotelev2">&gt;&gt;             configure: error: HCOLL support requested but not found. 
</span><br>
<span class="quotelev2">&gt;&gt;             Aborting
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             The configure line I used:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             ./configure --with-mxm=/opt/mellanox/mxm
</span><br>
<span class="quotelev2">&gt;&gt;             --with-hcoll=/opt/mellanox/hcoll
</span><br>
<span class="quotelev2">&gt;&gt;             --with-platform=contrib/platform/lanl/toss/optimized-panasas
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Here are the corresponding lines from config.log:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             configure:217014: gcc -std=gnu99 -o conftest -O3 -DNDEBUG
</span><br>
<span class="quotelev2">&gt;&gt;             -I/opt/panfs/include -finline-functions
</span><br>
<span class="quotelev2">&gt;&gt;             -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt;             -I/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.10.0/openmpi-1.10.0/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev2">&gt;&gt;             -I/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.10.0/openmpi-1.10.0/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev2">&gt;&gt;             -I/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.10.0/openmpi-1.10.0/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev2">&gt;&gt;             -I/opt/mellanox/hcoll/include  -L/opt/mellanox/hcoll/lib
</span><br>
<span class="quotelev2">&gt;&gt;             conftest.c -lhcoll  -lrt -lm -lutil   &gt;&amp;5
</span><br>
<span class="quotelev2">&gt;&gt;             /usr/bin/ld: warning: libmxm.so.2, needed by
</span><br>
<span class="quotelev2">&gt;&gt;             /opt/mellanox/hcoll/lib/libhcoll.so, not found (try using
</span><br>
<span class="quotelev2">&gt;&gt;             -rpath or -rpath-link)
</span><br>
<span class="quotelev2">&gt;&gt;             /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference
</span><br>
<span class="quotelev2">&gt;&gt;             to `mxm_req_recv'
</span><br>
<span class="quotelev2">&gt;&gt;             /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference
</span><br>
<span class="quotelev2">&gt;&gt;             to `mxm_ep_create'
</span><br>
<span class="quotelev2">&gt;&gt;             /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference
</span><br>
<span class="quotelev2">&gt;&gt;             to `mxm_config_free_context_opts'
</span><br>
<span class="quotelev2">&gt;&gt;             /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference
</span><br>
<span class="quotelev2">&gt;&gt;             to `mxm_ep_destroy'
</span><br>
<span class="quotelev2">&gt;&gt;             /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference
</span><br>
<span class="quotelev2">&gt;&gt;             to `mxm_config_free_ep_opts'
</span><br>
<span class="quotelev2">&gt;&gt;             /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference
</span><br>
<span class="quotelev2">&gt;&gt;             to `mxm_progress'
</span><br>
<span class="quotelev2">&gt;&gt;             /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference
</span><br>
<span class="quotelev2">&gt;&gt;             to `mxm_config_read_opts'
</span><br>
<span class="quotelev2">&gt;&gt;             /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference
</span><br>
<span class="quotelev2">&gt;&gt;             to `mxm_ep_disconnect'
</span><br>
<span class="quotelev2">&gt;&gt;             /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference
</span><br>
<span class="quotelev2">&gt;&gt;             to `mxm_mq_destroy'
</span><br>
<span class="quotelev2">&gt;&gt;             /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference
</span><br>
<span class="quotelev2">&gt;&gt;             to `mxm_mq_create'
</span><br>
<span class="quotelev2">&gt;&gt;             /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference
</span><br>
<span class="quotelev2">&gt;&gt;             to `mxm_cleanup'
</span><br>
<span class="quotelev2">&gt;&gt;             /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference
</span><br>
<span class="quotelev2">&gt;&gt;             to `mxm_req_send'
</span><br>
<span class="quotelev2">&gt;&gt;             /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference
</span><br>
<span class="quotelev2">&gt;&gt;             to `mxm_ep_connect'
</span><br>
<span class="quotelev2">&gt;&gt;             /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference
</span><br>
<span class="quotelev2">&gt;&gt;             to `mxm_init'
</span><br>
<span class="quotelev2">&gt;&gt;             /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference
</span><br>
<span class="quotelev2">&gt;&gt;             to `mxm_ep_get_address'
</span><br>
<span class="quotelev2">&gt;&gt;             /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference
</span><br>
<span class="quotelev2">&gt;&gt;             to `mxm_error_string'
</span><br>
<span class="quotelev2">&gt;&gt;             /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference
</span><br>
<span class="quotelev2">&gt;&gt;             to `mxm_mem_unmap'
</span><br>
<span class="quotelev2">&gt;&gt;             collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             An ldd on /opt/mellanox/hcoll/lib/libhcoll.so shows a
</span><br>
<span class="quotelev2">&gt;&gt;             dependency on libmxm.so, so the above error makes sense.
</span><br>
<span class="quotelev2">&gt;&gt;             I am using hcoll version 3.3.768 and mxm version 3.4.3065
</span><br>
<span class="quotelev2">&gt;&gt;             (reported by rpm).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             So, my question: is there a way to take care of this
</span><br>
<span class="quotelev2">&gt;&gt;             other than putting '-L/opt/mellanox/lib -lmxm' in to
</span><br>
<span class="quotelev2">&gt;&gt;             LDFLAGS/LIBS? Using LDFLAGS/LIBS will link mxm in to
</span><br>
<span class="quotelev2">&gt;&gt;             everything, which I would prefer not to do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Thanks in advance!
</span><br>
<span class="quotelev2">&gt;&gt;             David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         -- 
</span><br>
<span class="quotelev2">&gt;&gt;         David Shrader
</span><br>
<span class="quotelev2">&gt;&gt;         HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev2">&gt;&gt;         Los Alamos National Lab
</span><br>
<span class="quotelev2">&gt;&gt;         Email: dshrader &lt;at&gt; lanl.gov &lt;<a href="http://lanl.gov">http://lanl.gov</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/users/2015/10/27907.php">http://www.open-mpi.org/community/lists/users/2015/10/27907.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Kind Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     M.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________ users mailing
</span><br>
<span class="quotelev2">&gt;&gt;     list users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/10/27908.php">http://www.open-mpi.org/community/lists/users/2015/10/27908.php</a>
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
<span class="quotelev1">&gt;     Email: dshrader &lt;at&gt;lanl.gov &lt;<a href="http://lanl.gov">http://lanl.gov</a>&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/10/27909.php">http://www.open-mpi.org/community/lists/users/2015/10/27909.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27910.php">http://www.open-mpi.org/community/lists/users/2015/10/27910.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27911/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27912.php">Shamis, Pavel: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Previous message:</strong> <a href="27910.php">Mike Dubman: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>In reply to:</strong> <a href="27910.php">Mike Dubman: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27913.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Reply:</strong> <a href="27913.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
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
