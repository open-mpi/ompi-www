<?
$subject_val = "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  3 08:05:22 2013" -->
<!-- isoreceived="20131203130522" -->
<!-- sent="Tue, 3 Dec 2013 08:04:29 -0500" -->
<!-- isosent="20131203130429" -->
<!-- name="Meredith, Karl" -->
<!-- email="karl.meredith_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)" -->
<!-- id="2ECD98E6-7425-4E9F-8829-B4F1BD7DBBDB_at_fmglobal.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="CAMD57odMqRDdzYR2H34pu1QyWy_i8xe_fMhXSBkRTLmX0D6n7Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Meredith, Karl (<em>karl.meredith_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-03 08:04:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23136.php">Ralph Castain: "Re: [OMPI users] Several questions about new Java bindings"</a>
<li><strong>Previous message:</strong> <a href="23134.php">Ralph Castain: "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>In reply to:</strong> <a href="23133.php">Ralph Castain: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23137.php">Ralph Castain: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23137.php">Ralph Castain: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I disconnected for our corporate network (ethernet connection) and tried running again:  same result, it stalls.
<br>
<p>Then, I also disconnected from our local wifi network and tried running again:  it worked!
<br>
<p>bash-4.2$ mpirun -np 2 --mca btl sm,self hello_c
<br>
Hello, world, I am 0 of 2, (Open MPI v1.7.4a1, package: Open MPI meredithk_at_[hidden]&lt;mailto:meredithk_at_[hidden]&gt; Distribution, ident: 1.7.4a1r29784, repo rev: r29784, Dec 02, 2013 (nightly snapshot tarball), 173)
<br>
Hello, world, I am 1 of 2, (Open MPI v1.7.4a1, package: Open MPI meredithk_at_[hidden]&lt;mailto:meredithk_at_[hidden]&gt; Distribution, ident: 1.7.4a1r29784, repo rev: r29784, Dec 02, 2013 (nightly snapshot tarball), 173)
<br>
bash-4.2$ mpirun -np 2 hello_c
<br>
Hello, world, I am 0 of 2, (Open MPI v1.7.4a1, package: Open MPI meredithk_at_[hidden]&lt;mailto:meredithk_at_[hidden]&gt; Distribution, ident: 1.7.4a1r29784, repo rev: r29784, Dec 02, 2013 (nightly snapshot tarball), 173)
<br>
Hello, world, I am 1 of 2, (Open MPI v1.7.4a1, package: Open MPI meredithk_at_[hidden]&lt;mailto:meredithk_at_[hidden]&gt; Distribution, ident: 1.7.4a1r29784, repo rev: r29784, Dec 02, 2013 (nightly snapshot tarball), 173)
<br>
<p>Why?  What would be causing the network to be interfering with mpirun?  Do you have any insight?
<br>
<p>Karl
<br>
<p><p><p>On Dec 3, 2013, at 7:54 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
<p>Hmmm...are you connected to a network, or at least have a network active, when you do this? It looks a little like the system is trying to open a port between the process and mpirun, but is failing to do so.
<br>
<p><p><p>On Tue, Dec 3, 2013 at 4:51 AM, Meredith, Karl &lt;karl.meredith_at_[hidden]&lt;mailto:karl.meredith_at_[hidden]&gt;&gt; wrote:
<br>
Using openmpi-1.7.4, no macports, only apple compilers/tools:
<br>
<p>mpirun -np 2 --mca btl sm,self hello_c
<br>
<p>This hangs, also in MPI_Init().
<br>
<p>Here&#146;s the back trace from the debugger:
<br>
<p>bash-4.2$ lldb -p 4517
<br>
Attaching to process with:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;process attach -p 4517
<br>
Process 4517 stopped
<br>
Executable module set to &quot;/Users/meredithk/tools/openmpi-1.7.4a1r29784/examples/hello_c&quot;.
<br>
Architecture set to: x86_64-apple-macosx.
<br>
(lldb) bt
<br>
* thread #1: tid = 0x57efb, 0x00007fff8c991a3a libsystem_kernel.dylib`__semwait_signal + 10, queue = 'com.apple.main-thread, stop reason = signal SIGSTOP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #0: 0x00007fff8c991a3a libsystem_kernel.dylib`__semwait_signal + 10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #1: 0x00007fff8ade4e60 libsystem_c.dylib`nanosleep + 200
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #2: 0x0000000108d668e3 libopen-rte.6.dylib`orte_routed_base_register_sync(setup=true) + 2435 at routed_base_fns.c:344
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #3: 0x000000010904e3a7 mca_routed_binomial.so`init_routes(job=1294401537, ndat=0x0000000000000000) + 2759 at routed_binomial.c:708
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #4: 0x0000000108d1b84d libopen-rte.6.dylib`orte_ess_base_app_setup(db_restrict_local=true) + 2109 at ess_base_std_app.c:233
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #5: 0x0000000108fbc442 mca_ess_env.so`rte_init + 418 at ess_env_module.c:146
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #6: 0x0000000108cd6cfe libopen-rte.6.dylib`orte_init(pargc=0x0000000000000000, pargv=0x0000000000000000, flags=32) + 718 at orte_init.c:158
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #7: 0x0000000108a3b3c8 libmpi.1.dylib`ompi_mpi_init(argc=1, argv=0x00007fff57200508, requested=0, provided=0x00007fff57200360) + 616 at ompi_mpi_init.c:451
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #8: 0x0000000108a895a0 libmpi.1.dylib`MPI_Init(argc=0x00007fff572004d0, argv=0x00007fff572004c8) + 480 at init.c:84
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #9: 0x00000001089ffe4a hello_c`main(argc=1, argv=0x00007fff57200508) + 58 at hello_c.c:18
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #10: 0x00007fff8d5df5fd libdyld.dylib`start + 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #11: 0x00007fff8d5df5fd libdyld.dylib`start + 1
<br>
<p><p>On Dec 2, 2013, at 2:11 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Karl --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you force the use of just the shared memory transport -- i.e., disable the TCP BTL?  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpirun -np 2 --mca btl sm,self hello_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If that also hangs, can you attach a debugger and see *where* it is hanging inside MPI_Init()?  (In OMPI, MPI::Init() simply invokes MPI_Init())
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 27, 2013, at 2:56 PM, &quot;Meredith, Karl&quot; &lt;karl.meredith_at_[hidden]&lt;mailto:karl.meredith_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/trunk/apple-only/bin/ompi_info --param oob tcp --level 9
</span><br>
<span class="quotelev2">&gt;&gt;                MCA oob: parameter &quot;oob_tcp_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                         Verbose level for the OOB tcp component
</span><br>
<span class="quotelev2">&gt;&gt;                MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                         Maximum number of peer connections to simultaneously maintain (-1 = infinite)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current value: &quot;60&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                         Number of times to try shutting down a connection before giving up
</span><br>
<span class="quotelev2">&gt;&gt;                MCA oob: parameter &quot;oob_tcp_debug&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                         Enable (1) / disable (0) debugging output for this component
</span><br>
<span class="quotelev2">&gt;&gt;                MCA oob: parameter &quot;oob_tcp_sndbuf&quot; (current value: &quot;131072&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                         TCP socket send buffering size (in bytes)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA oob: parameter &quot;oob_tcp_rcvbuf&quot; (current value: &quot;131072&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                         TCP socket receive buffering size (in bytes)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA oob: parameter &quot;oob_tcp_if_include&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string, synonyms: oob_tcp_include)
</span><br>
<span class="quotelev2">&gt;&gt;                         Comma-delimited list of devices and/or CIDR notation of networks to use for Open MPI bootstrap communication (e.g., &quot;eth0,192.168.0.0/16&lt;<a href="http://192.168.0.0/16">http://192.168.0.0/16</a>&gt;&quot;).  Mutually exclusive with oob_tcp_if_exclude.
</span><br>
<span class="quotelev2">&gt;&gt;                MCA oob: parameter &quot;oob_tcp_if_exclude&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string, synonyms: oob_tcp_exclude)
</span><br>
<span class="quotelev2">&gt;&gt;                         Comma-delimited list of devices and/or CIDR notation of networks to NOT use for Open MPI bootstrap communication -- all devices not matching these specifications will be used (e.g., &quot;eth0,192.168.0.0/16&lt;<a href="http://192.168.0.0/16">http://192.168.0.0/16</a>&gt;&quot;).  If set to a non-default value, it is mutually exclusive with oob_tcp_if_include.
</span><br>
<span class="quotelev2">&gt;&gt;                MCA oob: parameter &quot;oob_tcp_connect_sleep&quot; (current value: &quot;1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                         Enable (1) / disable (0) random sleep for connection wireup.
</span><br>
<span class="quotelev2">&gt;&gt;                MCA oob: parameter &quot;oob_tcp_listen_mode&quot; (current value: &quot;event&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                         Mode for HNP to accept incoming connections: event, listen_thread.
</span><br>
<span class="quotelev2">&gt;&gt;                         Valid values: 0:&quot;event&quot;, 1:&quot;listen_thread&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                MCA oob: parameter &quot;oob_tcp_listen_thread_max_queue&quot; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                         High water mark for queued accepted socket list size.  Used only when listen_mode is listen_thread.
</span><br>
<span class="quotelev2">&gt;&gt;                MCA oob: parameter &quot;oob_tcp_listen_thread_wait_time&quot; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                         Time in milliseconds to wait before actively checking for new connections when listen_mode is listen_thread.
</span><br>
<span class="quotelev2">&gt;&gt;                MCA oob: parameter &quot;oob_tcp_static_ports&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                         Static ports for daemons and procs (IPv4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA oob: parameter &quot;oob_tcp_dynamic_ports&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                         Range of ports to be dynamically used by daemons and procs (IPv4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA oob: parameter &quot;oob_tcp_disable_family&quot; (current value: &quot;none&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                         Disable IPv4 (4) or IPv6 (6)
</span><br>
<span class="quotelev2">&gt;&gt;                         Valid values: 0:&quot;none&quot;, 4:&quot;IPv4&quot;, 6:&quot;IPv6&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/trunk/apple-only/bin/ompi_info --param btl tcp --level 9
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_links&quot; (current value: &quot;1&quot;, data source: default, level: 4 tuner/basic, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value: &quot;&quot;, data source: default, level: 1 user/basic, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                         Comma-delimited list of devices and/or CIDR notation of networks to use for MPI communication (e.g., &quot;eth0,192.168.0.0/16&lt;<a href="http://192.168.0.0/16">http://192.168.0.0/16</a>&gt;&quot;).  Mutually exclusive with btl_tcp_if_exclude.
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value: &quot;127.0.0.1/8,sppp&lt;<a href="http://127.0.0.1/8,sppp">http://127.0.0.1/8,sppp</a>&gt;&quot;, data source: default, level: 1 user/basic, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                         Comma-delimited list of devices and/or CIDR notation of networks to NOT use for MPI communication -- all devices not matching these specifications will be used (e.g., &quot;eth0,192.168.0.0/16&lt;<a href="http://192.168.0.0/16">http://192.168.0.0/16</a>&gt;&quot;).  If set to a non-default value, it is mutually exclusive with btl_tcp_if_include.
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current value: &quot;8&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current value: &quot;-1&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current value: &quot;32&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value: &quot;131072&quot;, data source: default, level: 4 tuner/basic, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value: &quot;131072&quot;, data source: default, level: 4 tuner/basic, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_endpoint_cache&quot; (current value: &quot;30720&quot;, data source: default, level: 4 tuner/basic, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                         The size of the internal cache for each TCP connection. This cache is used to reduce the number of syscalls, by replacing them with memcpy. Every read will read the expected data plus the amount of the endpoint_cache
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_use_nagle&quot; (current value: &quot;0&quot;, data source: default, level: 4 tuner/basic, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                         Whether to use Nagle's algorithm or not (using Nagle's algorithm may increase short message latency)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_port_min_v4&quot; (current value: &quot;1024&quot;, data source: default, level: 2 user/detail, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                         The minimum port where the TCP BTL will try to bind (default 1024)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_port_range_v4&quot; (current value: &quot;64511&quot;, data source: default, level: 2 user/detail, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                         The number of ports where the TCP BTL will try to bind (default 64511). This parameter together with the port min, define a range of ports where Open MPI will open sockets.
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current value: &quot;100&quot;, data source: default, level: 7 dev/basic, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                         BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_flags&quot; (current value: &quot;314&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                         BTL bit flags (general flags: SEND=1, PUT=2, GET=4, SEND_INPLACE=8, RDMA_MATCHED=64, HETEROGENEOUS_RDMA=256; flags only used by the &quot;dr&quot; PML (ignored by others): ACK=16, CHECKSUM=32, RDMA_COMPLETION=128; flags only used by the &quot;bfo&quot; PML (ignored by others): FAILOVER_SUPPORT=512)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_rndv_eager_limit&quot; (current value: &quot;65536&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev2">&gt;&gt;                         Size (in bytes, including header) of &quot;phase 1&quot; fragment sent for all large messages (must be &gt;= 0 and &lt;= eager_limit)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current value: &quot;65536&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev2">&gt;&gt;                         Maximum size (in bytes, including header) of &quot;short&quot; messages (must be &gt;= 1).
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current value: &quot;131072&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev2">&gt;&gt;                         Maximum size (in bytes) of a single &quot;phase 2&quot; fragment of a long message when using the pipeline protocol (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_rdma_pipeline_send_length&quot; (current value: &quot;131072&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev2">&gt;&gt;                         Length of the &quot;phase 2&quot; portion of a large message (in bytes) when using the pipeline protocol.  This part of the message will be split into fragments of size max_send_size and sent using send/receive semantics (must be &gt;= 0; only relevant when the PUT flag is set)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_rdma_pipeline_frag_size&quot; (current value: &quot;2147483647&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev2">&gt;&gt;                         Maximum size (in bytes) of a single &quot;phase 3&quot; fragment from a long message when using the pipeline protocol.  These fragments will be sent using RDMA semantics (must be &gt;= 1; only relevant when the PUT flag is set)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_min_rdma_pipeline_size&quot; (current value: &quot;196608&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev2">&gt;&gt;                         Messages smaller than this size (in bytes) will not use the RDMA pipeline protocol.  Instead, they will be split into fragments of max_send_size and sent using send/receive semantics (must be &gt;=0, and is automatically adjusted up to at least (eager_limit+btl_rdma_pipeline_send_length); only relevant when the PUT flag is set)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_bandwidth&quot; (current value: &quot;100&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                         Approximate maximum bandwidth of interconnect (0 = auto-detect value at run-time [not supported in all BTL modules], &gt;= 1 = bandwidth in Mbps)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_disable_family&quot; (current value: &quot;0&quot;, data source: default, level: 2 user/detail, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: parameter &quot;btl_tcp_if_seq&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                         If specified, a comma-delimited list of TCP interfaces.  Interfaces will be assigned, one to each MPI process, in a round-robin fashion on each server.  For example, if the list is &quot;eth0,eth1&quot; and four MPI processes are run on a single server, then local ranks 0 and 2 will use eth0 and local ranks 1 and 3 will use eth1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 27, 2013, at 2:41 PM, George Bosilca &lt;bosilca_at_[hidden]&lt;mailto:bosilca_at_[hidden]&gt;&lt;mailto:bosilca_at_[hidden]&lt;mailto:bosilca_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info &#151;param oob tcp &#151;level 9
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info &#151;param btl tcp &#151;level 9
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23136.php">Ralph Castain: "Re: [OMPI users] Several questions about new Java bindings"</a>
<li><strong>Previous message:</strong> <a href="23134.php">Ralph Castain: "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>In reply to:</strong> <a href="23133.php">Ralph Castain: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23137.php">Ralph Castain: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23137.php">Ralph Castain: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
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
