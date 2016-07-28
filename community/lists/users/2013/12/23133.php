<?
$subject_val = "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  3 07:54:56 2013" -->
<!-- isoreceived="20131203125456" -->
<!-- sent="Tue, 3 Dec 2013 04:54:54 -0800" -->
<!-- isosent="20131203125454" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)" -->
<!-- id="CAMD57odMqRDdzYR2H34pu1QyWy_i8xe_fMhXSBkRTLmX0D6n7Q_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="195E18EB-2D72-4FCB-A899-A5CE4DBFF38F_at_fmglobal.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-03 07:54:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23134.php">Ralph Castain: "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>Previous message:</strong> <a href="23132.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23132.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23135.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23135.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...are you connected to a network, or at least have a network active,
<br>
when you do this? It looks a little like the system is trying to open a
<br>
port between the process and mpirun, but is failing to do so.
<br>
<p><p><p>On Tue, Dec 3, 2013 at 4:51 AM, Meredith, Karl
<br>
&lt;karl.meredith_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Using openmpi-1.7.4, no macports, only apple compilers/tools:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --mca btl sm,self hello_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This hangs, also in MPI_Init().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here&#146;s the back trace from the debugger:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bash-4.2$ lldb -p 4517
</span><br>
<span class="quotelev1">&gt; Attaching to process with:
</span><br>
<span class="quotelev1">&gt;     process attach -p 4517
</span><br>
<span class="quotelev1">&gt; Process 4517 stopped
</span><br>
<span class="quotelev1">&gt; Executable module set to
</span><br>
<span class="quotelev1">&gt; &quot;/Users/meredithk/tools/openmpi-1.7.4a1r29784/examples/hello_c&quot;.
</span><br>
<span class="quotelev1">&gt; Architecture set to: x86_64-apple-macosx.
</span><br>
<span class="quotelev1">&gt; (lldb) bt
</span><br>
<span class="quotelev1">&gt; * thread #1: tid = 0x57efb, 0x00007fff8c991a3a
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__semwait_signal + 10, queue =
</span><br>
<span class="quotelev1">&gt; 'com.apple.main-thread, stop reason = signal SIGSTOP
</span><br>
<span class="quotelev1">&gt;     frame #0: 0x00007fff8c991a3a libsystem_kernel.dylib`__semwait_signal +
</span><br>
<span class="quotelev1">&gt; 10
</span><br>
<span class="quotelev1">&gt;     frame #1: 0x00007fff8ade4e60 libsystem_c.dylib`nanosleep + 200
</span><br>
<span class="quotelev1">&gt;     frame #2: 0x0000000108d668e3
</span><br>
<span class="quotelev1">&gt; libopen-rte.6.dylib`orte_routed_base_register_sync(setup=true) + 2435 at
</span><br>
<span class="quotelev1">&gt; routed_base_fns.c:344
</span><br>
<span class="quotelev1">&gt;     frame #3: 0x000000010904e3a7
</span><br>
<span class="quotelev1">&gt; mca_routed_binomial.so`init_routes(job=1294401537, ndat=0x0000000000000000)
</span><br>
<span class="quotelev1">&gt; + 2759 at routed_binomial.c:708
</span><br>
<span class="quotelev1">&gt;     frame #4: 0x0000000108d1b84d
</span><br>
<span class="quotelev1">&gt; libopen-rte.6.dylib`orte_ess_base_app_setup(db_restrict_local=true) + 2109
</span><br>
<span class="quotelev1">&gt; at ess_base_std_app.c:233
</span><br>
<span class="quotelev1">&gt;     frame #5: 0x0000000108fbc442 mca_ess_env.so`rte_init + 418 at
</span><br>
<span class="quotelev1">&gt; ess_env_module.c:146
</span><br>
<span class="quotelev1">&gt;     frame #6: 0x0000000108cd6cfe
</span><br>
<span class="quotelev1">&gt; libopen-rte.6.dylib`orte_init(pargc=0x0000000000000000,
</span><br>
<span class="quotelev1">&gt; pargv=0x0000000000000000, flags=32) + 718 at orte_init.c:158
</span><br>
<span class="quotelev1">&gt;     frame #7: 0x0000000108a3b3c8 libmpi.1.dylib`ompi_mpi_init(argc=1,
</span><br>
<span class="quotelev1">&gt; argv=0x00007fff57200508, requested=0, provided=0x00007fff57200360) + 616 at
</span><br>
<span class="quotelev1">&gt; ompi_mpi_init.c:451
</span><br>
<span class="quotelev1">&gt;     frame #8: 0x0000000108a895a0
</span><br>
<span class="quotelev1">&gt; libmpi.1.dylib`MPI_Init(argc=0x00007fff572004d0, argv=0x00007fff572004c8) +
</span><br>
<span class="quotelev1">&gt; 480 at init.c:84
</span><br>
<span class="quotelev1">&gt;     frame #9: 0x00000001089ffe4a hello_c`main(argc=1,
</span><br>
<span class="quotelev1">&gt; argv=0x00007fff57200508) + 58 at hello_c.c:18
</span><br>
<span class="quotelev1">&gt;     frame #10: 0x00007fff8d5df5fd libdyld.dylib`start + 1
</span><br>
<span class="quotelev1">&gt;     frame #11: 0x00007fff8d5df5fd libdyld.dylib`start + 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 2, 2013, at 2:11 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Karl --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you force the use of just the shared memory transport -- i.e.,
</span><br>
<span class="quotelev1">&gt; disable the TCP BTL?  For example:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    mpirun -np 2 --mca btl sm,self hello_c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If that also hangs, can you attach a debugger and see *where* it is
</span><br>
<span class="quotelev1">&gt; hanging inside MPI_Init()?  (In OMPI, MPI::Init() simply invokes MPI_Init())
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 27, 2013, at 2:56 PM, &quot;Meredith, Karl&quot; &lt;
</span><br>
<span class="quotelev1">&gt; karl.meredith_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /opt/trunk/apple-only/bin/ompi_info --param oob tcp --level 9
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA oob: parameter &quot;oob_tcp_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Verbose level for the OOB tcp component
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Maximum number of peer connections to
</span><br>
<span class="quotelev1">&gt; simultaneously maintain (-1 = infinite)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;60&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Number of times to try shutting down a
</span><br>
<span class="quotelev1">&gt; connection before giving up
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA oob: parameter &quot;oob_tcp_debug&quot; (current value: &quot;0&quot;,
</span><br>
<span class="quotelev1">&gt; data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Enable (1) / disable (0) debugging output for
</span><br>
<span class="quotelev1">&gt; this component
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA oob: parameter &quot;oob_tcp_sndbuf&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         TCP socket send buffering size (in bytes)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA oob: parameter &quot;oob_tcp_rcvbuf&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         TCP socket receive buffering size (in bytes)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA oob: parameter &quot;oob_tcp_if_include&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;&quot;, data source: default, level: 9 dev/all, type: string, synonyms:
</span><br>
<span class="quotelev1">&gt; oob_tcp_include)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Comma-delimited list of devices and/or CIDR
</span><br>
<span class="quotelev1">&gt; notation of networks to use for Open MPI bootstrap communication (e.g.,
</span><br>
<span class="quotelev1">&gt; &quot;eth0,192.168.0.0/16&quot;).  Mutually exclusive with oob_tcp_if_exclude.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA oob: parameter &quot;oob_tcp_if_exclude&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;&quot;, data source: default, level: 9 dev/all, type: string, synonyms:
</span><br>
<span class="quotelev1">&gt; oob_tcp_exclude)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Comma-delimited list of devices and/or CIDR
</span><br>
<span class="quotelev1">&gt; notation of networks to NOT use for Open MPI bootstrap communication -- all
</span><br>
<span class="quotelev1">&gt; devices not matching these specifications will be used (e.g., &quot;eth0,
</span><br>
<span class="quotelev1">&gt; 192.168.0.0/16&quot;).  If set to a non-default value, it is mutually
</span><br>
<span class="quotelev1">&gt; exclusive with oob_tcp_if_include.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA oob: parameter &quot;oob_tcp_connect_sleep&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Enable (1) / disable (0) random sleep for
</span><br>
<span class="quotelev1">&gt; connection wireup.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA oob: parameter &quot;oob_tcp_listen_mode&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;event&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Mode for HNP to accept incoming connections:
</span><br>
<span class="quotelev1">&gt; event, listen_thread.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Valid values: 0:&quot;event&quot;, 1:&quot;listen_thread&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA oob: parameter &quot;oob_tcp_listen_thread_max_queue&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         High water mark for queued accepted socket list
</span><br>
<span class="quotelev1">&gt; size.  Used only when listen_mode is listen_thread.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA oob: parameter &quot;oob_tcp_listen_thread_wait_time&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Time in milliseconds to wait before actively
</span><br>
<span class="quotelev1">&gt; checking for new connections when listen_mode is listen_thread.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA oob: parameter &quot;oob_tcp_static_ports&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Static ports for daemons and procs (IPv4)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA oob: parameter &quot;oob_tcp_dynamic_ports&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Range of ports to be dynamically used by
</span><br>
<span class="quotelev1">&gt; daemons and procs (IPv4)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA oob: parameter &quot;oob_tcp_disable_family&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;none&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Disable IPv4 (4) or IPv6 (6)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Valid values: 0:&quot;none&quot;, 4:&quot;IPv4&quot;, 6:&quot;IPv6&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /opt/trunk/apple-only/bin/ompi_info --param btl tcp --level 9
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_links&quot; (current value: &quot;1&quot;,
</span><br>
<span class="quotelev1">&gt; data source: default, level: 4 tuner/basic, type: unsigned)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;&quot;, data source: default, level: 1 user/basic, type: string)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Comma-delimited list of devices and/or CIDR
</span><br>
<span class="quotelev1">&gt; notation of networks to use for MPI communication (e.g., &quot;eth0,
</span><br>
<span class="quotelev1">&gt; 192.168.0.0/16&quot;).  Mutually exclusive with btl_tcp_if_exclude.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value: &quot;
</span><br>
<span class="quotelev1">&gt; 127.0.0.1/8,sppp&quot;, data source: default, level: 1 user/basic, type:
</span><br>
<span class="quotelev1">&gt; string)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Comma-delimited list of devices and/or CIDR
</span><br>
<span class="quotelev1">&gt; notation of networks to NOT use for MPI communication -- all devices not
</span><br>
<span class="quotelev1">&gt; matching these specifications will be used (e.g., &quot;eth0,192.168.0.0/16&quot;).
</span><br>
<span class="quotelev1">&gt;  If set to a non-default value, it is mutually exclusive with
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;8&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;32&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;, data source: default, level: 4 tuner/basic, type: int)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;, data source: default, level: 4 tuner/basic, type: int)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_endpoint_cache&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;30720&quot;, data source: default, level: 4 tuner/basic, type: int)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         The size of the internal cache for each TCP
</span><br>
<span class="quotelev1">&gt; connection. This cache is used to reduce the number of syscalls, by
</span><br>
<span class="quotelev1">&gt; replacing them with memcpy. Every read will read the expected data plus the
</span><br>
<span class="quotelev1">&gt; amount of the endpoint_cache
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_use_nagle&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default, level: 4 tuner/basic, type: int)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Whether to use Nagle's algorithm or not (using
</span><br>
<span class="quotelev1">&gt; Nagle's algorithm may increase short message latency)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_port_min_v4&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;1024&quot;, data source: default, level: 2 user/detail, type: int)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         The minimum port where the TCP BTL will try to
</span><br>
<span class="quotelev1">&gt; bind (default 1024)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_port_range_v4&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;64511&quot;, data source: default, level: 2 user/detail, type: int)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         The number of ports where the TCP BTL will try
</span><br>
<span class="quotelev1">&gt; to bind (default 64511). This parameter together with the port min, define
</span><br>
<span class="quotelev1">&gt; a range of ports where Open MPI will open sockets.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;100&quot;, data source: default, level: 7 dev/basic, type: unsigned)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_flags&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;314&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         BTL bit flags (general flags: SEND=1, PUT=2,
</span><br>
<span class="quotelev1">&gt; GET=4, SEND_INPLACE=8, RDMA_MATCHED=64, HETEROGENEOUS_RDMA=256; flags only
</span><br>
<span class="quotelev1">&gt; used by the &quot;dr&quot; PML (ignored by others): ACK=16, CHECKSUM=32,
</span><br>
<span class="quotelev1">&gt; RDMA_COMPLETION=128; flags only used by the &quot;bfo&quot; PML (ignored by others):
</span><br>
<span class="quotelev1">&gt; FAILOVER_SUPPORT=512)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_rndv_eager_limit&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;65536&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Size (in bytes, including header) of &quot;phase 1&quot;
</span><br>
<span class="quotelev1">&gt; fragment sent for all large messages (must be &gt;= 0 and &lt;= eager_limit)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;65536&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Maximum size (in bytes, including header) of
</span><br>
<span class="quotelev1">&gt; &quot;short&quot; messages (must be &gt;= 1).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Maximum size (in bytes) of a single &quot;phase 2&quot;
</span><br>
<span class="quotelev1">&gt; fragment of a long message when using the pipeline protocol (must be &gt;= 1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_rdma_pipeline_send_length&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;131072&quot;, data source: default, level: 4 tuner/basic, type:
</span><br>
<span class="quotelev1">&gt; size_t)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Length of the &quot;phase 2&quot; portion of a large
</span><br>
<span class="quotelev1">&gt; message (in bytes) when using the pipeline protocol.  This part of the
</span><br>
<span class="quotelev1">&gt; message will be split into fragments of size max_send_size and sent using
</span><br>
<span class="quotelev1">&gt; send/receive semantics (must be &gt;= 0; only relevant when the PUT flag is
</span><br>
<span class="quotelev1">&gt; set)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_rdma_pipeline_frag_size&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;2147483647&quot;, data source: default, level: 4 tuner/basic,
</span><br>
<span class="quotelev1">&gt; type: size_t)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Maximum size (in bytes) of a single &quot;phase 3&quot;
</span><br>
<span class="quotelev1">&gt; fragment from a long message when using the pipeline protocol.  These
</span><br>
<span class="quotelev1">&gt; fragments will be sent using RDMA semantics (must be &gt;= 1; only relevant
</span><br>
<span class="quotelev1">&gt; when the PUT flag is set)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_min_rdma_pipeline_size&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;196608&quot;, data source: default, level: 4 tuner/basic, type:
</span><br>
<span class="quotelev1">&gt; size_t)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Messages smaller than this size (in bytes) will
</span><br>
<span class="quotelev1">&gt; not use the RDMA pipeline protocol.  Instead, they will be split into
</span><br>
<span class="quotelev1">&gt; fragments of max_send_size and sent using send/receive semantics (must be
</span><br>
<span class="quotelev2">&gt; &gt;=0, and is automatically adjusted up to at least
</span><br>
<span class="quotelev1">&gt; (eager_limit+btl_rdma_pipeline_send_length); only relevant when the PUT
</span><br>
<span class="quotelev1">&gt; flag is set)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_bandwidth&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;100&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Approximate maximum bandwidth of interconnect
</span><br>
<span class="quotelev1">&gt; (0 = auto-detect value at run-time [not supported in all BTL modules], &gt;= 1
</span><br>
<span class="quotelev1">&gt; = bandwidth in Mbps)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_disable_family&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default, level: 2 user/detail, type: int)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA btl: parameter &quot;btl_tcp_if_seq&quot; (current value: &quot;&quot;,
</span><br>
<span class="quotelev1">&gt; data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         If specified, a comma-delimited list of TCP
</span><br>
<span class="quotelev1">&gt; interfaces.  Interfaces will be assigned, one to each MPI process, in a
</span><br>
<span class="quotelev1">&gt; round-robin fashion on each server.  For example, if the list is
</span><br>
<span class="quotelev1">&gt; &quot;eth0,eth1&quot; and four MPI processes are run on a single server, then local
</span><br>
<span class="quotelev1">&gt; ranks 0 and 2 will use eth0 and local ranks 1 and 3 will use eth1.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Nov 27, 2013, at 2:41 PM, George Bosilca &lt;bosilca_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ompi_info &#151;param oob tcp &#151;level 9
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ompi_info &#151;param btl tcp &#151;level 9
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23133/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23134.php">Ralph Castain: "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>Previous message:</strong> <a href="23132.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23132.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23135.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23135.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
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
