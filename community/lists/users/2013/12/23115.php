<?
$subject_val = "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  2 14:11:58 2013" -->
<!-- isoreceived="20131202191158" -->
<!-- sent="Mon, 2 Dec 2013 19:11:56 +0000" -->
<!-- isosent="20131202191156" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)" -->
<!-- id="997E3DE1-6A43-40A5-941C-6EBBE5BD9EDE_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="74D528D6-5A3B-4E29-91C6-036D87DF3A04_at_fmglobal.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-02 14:11:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23116.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23114.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran	program. Aborting."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/23100.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23132.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23132.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Karl --
<br>
<p>Can you force the use of just the shared memory transport -- i.e., disable the TCP BTL?  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 2 --mca btl sm,self hello_c
<br>
<p>If that also hangs, can you attach a debugger and see *where* it is hanging inside MPI_Init()?  (In OMPI, MPI::Init() simply invokes MPI_Init())
<br>
<p><p>On Nov 27, 2013, at 2:56 PM, &quot;Meredith, Karl&quot; &lt;karl.meredith_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; /opt/trunk/apple-only/bin/ompi_info --param oob tcp --level 9
</span><br>
<span class="quotelev1">&gt;                 MCA oob: parameter &quot;oob_tcp_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                          Verbose level for the OOB tcp component
</span><br>
<span class="quotelev1">&gt;                 MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                          Maximum number of peer connections to simultaneously maintain (-1 = infinite)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current value: &quot;60&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                          Number of times to try shutting down a connection before giving up
</span><br>
<span class="quotelev1">&gt;                 MCA oob: parameter &quot;oob_tcp_debug&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                          Enable (1) / disable (0) debugging output for this component
</span><br>
<span class="quotelev1">&gt;                 MCA oob: parameter &quot;oob_tcp_sndbuf&quot; (current value: &quot;131072&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                          TCP socket send buffering size (in bytes)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: parameter &quot;oob_tcp_rcvbuf&quot; (current value: &quot;131072&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                          TCP socket receive buffering size (in bytes)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: parameter &quot;oob_tcp_if_include&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string, synonyms: oob_tcp_include)
</span><br>
<span class="quotelev1">&gt;                          Comma-delimited list of devices and/or CIDR notation of networks to use for Open MPI bootstrap communication (e.g., &quot;eth0,192.168.0.0/16&quot;).  Mutually exclusive with oob_tcp_if_exclude.
</span><br>
<span class="quotelev1">&gt;                 MCA oob: parameter &quot;oob_tcp_if_exclude&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string, synonyms: oob_tcp_exclude)
</span><br>
<span class="quotelev1">&gt;                          Comma-delimited list of devices and/or CIDR notation of networks to NOT use for Open MPI bootstrap communication -- all devices not matching these specifications will be used (e.g., &quot;eth0,192.168.0.0/16&quot;).  If set to a non-default value, it is mutually exclusive with oob_tcp_if_include.
</span><br>
<span class="quotelev1">&gt;                 MCA oob: parameter &quot;oob_tcp_connect_sleep&quot; (current value: &quot;1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                          Enable (1) / disable (0) random sleep for connection wireup.
</span><br>
<span class="quotelev1">&gt;                 MCA oob: parameter &quot;oob_tcp_listen_mode&quot; (current value: &quot;event&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                          Mode for HNP to accept incoming connections: event, listen_thread.
</span><br>
<span class="quotelev1">&gt;                          Valid values: 0:&quot;event&quot;, 1:&quot;listen_thread&quot;
</span><br>
<span class="quotelev1">&gt;                 MCA oob: parameter &quot;oob_tcp_listen_thread_max_queue&quot; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                          High water mark for queued accepted socket list size.  Used only when listen_mode is listen_thread.
</span><br>
<span class="quotelev1">&gt;                 MCA oob: parameter &quot;oob_tcp_listen_thread_wait_time&quot; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                          Time in milliseconds to wait before actively checking for new connections when listen_mode is listen_thread.
</span><br>
<span class="quotelev1">&gt;                 MCA oob: parameter &quot;oob_tcp_static_ports&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                          Static ports for daemons and procs (IPv4)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: parameter &quot;oob_tcp_dynamic_ports&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                          Range of ports to be dynamically used by daemons and procs (IPv4)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: parameter &quot;oob_tcp_disable_family&quot; (current value: &quot;none&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                          Disable IPv4 (4) or IPv6 (6)
</span><br>
<span class="quotelev1">&gt;                          Valid values: 0:&quot;none&quot;, 4:&quot;IPv4&quot;, 6:&quot;IPv6&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/trunk/apple-only/bin/ompi_info --param btl tcp --level 9
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_links&quot; (current value: &quot;1&quot;, data source: default, level: 4 tuner/basic, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value: &quot;&quot;, data source: default, level: 1 user/basic, type: string)
</span><br>
<span class="quotelev1">&gt;                          Comma-delimited list of devices and/or CIDR notation of networks to use for MPI communication (e.g., &quot;eth0,192.168.0.0/16&quot;).  Mutually exclusive with btl_tcp_if_exclude.
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value: &quot;127.0.0.1/8,sppp&quot;, data source: default, level: 1 user/basic, type: string)
</span><br>
<span class="quotelev1">&gt;                          Comma-delimited list of devices and/or CIDR notation of networks to NOT use for MPI communication -- all devices not matching these specifications will be used (e.g., &quot;eth0,192.168.0.0/16&quot;).  If set to a non-default value, it is mutually exclusive with btl_tcp_if_include.
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current value: &quot;8&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current value: &quot;-1&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current value: &quot;32&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value: &quot;131072&quot;, data source: default, level: 4 tuner/basic, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value: &quot;131072&quot;, data source: default, level: 4 tuner/basic, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_endpoint_cache&quot; (current value: &quot;30720&quot;, data source: default, level: 4 tuner/basic, type: int)
</span><br>
<span class="quotelev1">&gt;                          The size of the internal cache for each TCP connection. This cache is used to reduce the number of syscalls, by replacing them with memcpy. Every read will read the expected data plus the amount of the endpoint_cache
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_use_nagle&quot; (current value: &quot;0&quot;, data source: default, level: 4 tuner/basic, type: int)
</span><br>
<span class="quotelev1">&gt;                          Whether to use Nagle's algorithm or not (using Nagle's algorithm may increase short message latency)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_port_min_v4&quot; (current value: &quot;1024&quot;, data source: default, level: 2 user/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                          The minimum port where the TCP BTL will try to bind (default 1024)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_port_range_v4&quot; (current value: &quot;64511&quot;, data source: default, level: 2 user/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                          The number of ports where the TCP BTL will try to bind (default 64511). This parameter together with the port min, define a range of ports where Open MPI will open sockets.
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current value: &quot;100&quot;, data source: default, level: 7 dev/basic, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                          BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_flags&quot; (current value: &quot;314&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                          BTL bit flags (general flags: SEND=1, PUT=2, GET=4, SEND_INPLACE=8, RDMA_MATCHED=64, HETEROGENEOUS_RDMA=256; flags only used by the &quot;dr&quot; PML (ignored by others): ACK=16, CHECKSUM=32, RDMA_COMPLETION=128; flags only used by the &quot;bfo&quot; PML (ignored by others): FAILOVER_SUPPORT=512)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_rndv_eager_limit&quot; (current value: &quot;65536&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                          Size (in bytes, including header) of &quot;phase 1&quot; fragment sent for all large messages (must be &gt;= 0 and &lt;= eager_limit)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current value: &quot;65536&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                          Maximum size (in bytes, including header) of &quot;short&quot; messages (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current value: &quot;131072&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                          Maximum size (in bytes) of a single &quot;phase 2&quot; fragment of a long message when using the pipeline protocol (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_rdma_pipeline_send_length&quot; (current value: &quot;131072&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                          Length of the &quot;phase 2&quot; portion of a large message (in bytes) when using the pipeline protocol.  This part of the message will be split into fragments of size max_send_size and sent using send/receive semantics (must be &gt;= 0; only relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_rdma_pipeline_frag_size&quot; (current value: &quot;2147483647&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                          Maximum size (in bytes) of a single &quot;phase 3&quot; fragment from a long message when using the pipeline protocol.  These fragments will be sent using RDMA semantics (must be &gt;= 1; only relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_min_rdma_pipeline_size&quot; (current value: &quot;196608&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                          Messages smaller than this size (in bytes) will not use the RDMA pipeline protocol.  Instead, they will be split into fragments of max_send_size and sent using send/receive semantics (must be &gt;=0, and is automatically adjusted up to at least (eager_limit+btl_rdma_pipeline_send_length); only relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_bandwidth&quot; (current value: &quot;100&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                          Approximate maximum bandwidth of interconnect (0 = auto-detect value at run-time [not supported in all BTL modules], &gt;= 1 = bandwidth in Mbps)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_disable_family&quot; (current value: &quot;0&quot;, data source: default, level: 2 user/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_if_seq&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                          If specified, a comma-delimited list of TCP interfaces.  Interfaces will be assigned, one to each MPI process, in a round-robin fashion on each server.  For example, if the list is &quot;eth0,eth1&quot; and four MPI processes are run on a single server, then local ranks 0 and 2 will use eth0 and local ranks 1 and 3 will use eth1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 27, 2013, at 2:41 PM, George Bosilca &lt;bosilca_at_[hidden]&lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info &#151;param oob tcp &#151;level 9
</span><br>
<span class="quotelev1">&gt; ompi_info &#151;param btl tcp &#151;level 9
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23116.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23114.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran	program. Aborting."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/23100.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23132.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23132.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
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
