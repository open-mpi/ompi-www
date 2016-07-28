<?
$subject_val = "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 16:25:21 2015" -->
<!-- isoreceived="20150413202521" -->
<!-- sent="Mon, 13 Apr 2015 14:25:00 -0600" -->
<!-- isosent="20150413202500" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC" -->
<!-- id="20150413202500.GC99684_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="552C21BD.7020700_at_hp.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-13 16:25:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26700.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="26698.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="26697.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26700.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26700.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For talking between PHIs on the same system I recommend using the scif
<br>
BTL NOT tcp.
<br>
<p>That said, it looks like the LD_LIBRARY_PATH is wrong on the remote
<br>
system. It looks like it can't find the intel compiler libraries.
<br>
<p>-Nathan Hjelm
<br>
HPC-5, LANL
<br>
<p>On Mon, Apr 13, 2015 at 04:06:21PM -0400, Andy Riebs wrote:
<br>
<span class="quotelev1">&gt;    Progress!  I can run my trivial program on the local PHI, but not the
</span><br>
<span class="quotelev1">&gt;    other PHI, on the system. Here are the interesting parts:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    A pretty good recipe with last night's nightly master:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    $ ./configure --prefix=/home/ariebs/mic/mpi-nightly CC=&quot;icc -mmic&quot;
</span><br>
<span class="quotelev1">&gt;    CXX=&quot;icpc -mmic&quot; \
</span><br>
<span class="quotelev1">&gt;        --build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux \
</span><br>
<span class="quotelev1">&gt;         AR=x86_64-k1om-linux-ar RANLIB=x86_64-k1om-linux-ranlib 
</span><br>
<span class="quotelev1">&gt;    LD=x86_64-k1om-linux-ld \
</span><br>
<span class="quotelev1">&gt;         --enable-mpirun-prefix-by-default --disable-io-romio
</span><br>
<span class="quotelev1">&gt;    --disable-mpi-fortran \
</span><br>
<span class="quotelev1">&gt;         --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;         --enable-debug
</span><br>
<span class="quotelev1">&gt;    $ make &amp;&amp; make install
</span><br>
<span class="quotelev1">&gt;    $ shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -H localhost -N 2 --mca spml
</span><br>
<span class="quotelev1">&gt;    yoda --mca btl sm,self,tcp $PWD/mic.out
</span><br>
<span class="quotelev1">&gt;    Hello World from process 0 of 2
</span><br>
<span class="quotelev1">&gt;    Hello World from process 1 of 2
</span><br>
<span class="quotelev1">&gt;    $ shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -H localhost -N 2 --mca spml
</span><br>
<span class="quotelev1">&gt;    yoda --mca btl openib,sm,self $PWD/mic.out
</span><br>
<span class="quotelev1">&gt;    Hello World from process 0 of 2
</span><br>
<span class="quotelev1">&gt;    Hello World from process 1 of 2
</span><br>
<span class="quotelev1">&gt;    $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    However, I can't seem to cross the fabric. I can ssh freely back and forth
</span><br>
<span class="quotelev1">&gt;    between mic0 and mic1. However, running the next 2 tests from mic0, it 
</span><br>
<span class="quotelev1">&gt;    certainly seems like the second one should work, too:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    $ shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -H mic0 -N 2 --mca spml yoda
</span><br>
<span class="quotelev1">&gt;    --mca btl sm,self,tcp $PWD/mic.out
</span><br>
<span class="quotelev1">&gt;    Hello World from process 0 of 2
</span><br>
<span class="quotelev1">&gt;    Hello World from process 1 of 2
</span><br>
<span class="quotelev1">&gt;    $ shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -H mic1 -N 2 --mca spml yoda
</span><br>
<span class="quotelev1">&gt;    --mca btl sm,self,tcp $PWD/mic.out
</span><br>
<span class="quotelev1">&gt;    /home/ariebs/mic/mpi-nightly/bin/orted: error while loading shared
</span><br>
<span class="quotelev1">&gt;    libraries: libimf.so: cannot open shared object file: No such file or
</span><br>
<span class="quotelev1">&gt;    directory
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt;    This usually is caused by:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev1">&gt;      one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;      settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev1">&gt;      Please verify your allocation and authorities.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    * the inability to write startup files into /tmp
</span><br>
<span class="quotelev1">&gt;    (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev1">&gt;      Please check with your sys admin to determine the correct location to
</span><br>
<span class="quotelev1">&gt;    use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    *  compilation of the orted with dynamic libraries when static are
</span><br>
<span class="quotelev1">&gt;    required
</span><br>
<span class="quotelev1">&gt;      (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev1">&gt;      one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev1">&gt;      lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev1">&gt;      them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev1">&gt;      and network routing requirements).
</span><br>
<span class="quotelev1">&gt;     ...
</span><br>
<span class="quotelev1">&gt;    $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    (Note that I get the same results with &quot;--mca btl openib,sm,self&quot;....)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    $ ssh mic1 file
</span><br>
<span class="quotelev1">&gt;    /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so
</span><br>
<span class="quotelev1">&gt;    /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so: ELF
</span><br>
<span class="quotelev1">&gt;    64-bit LSB shared object, Intel Xeon Phi coprocessor (k1om), version 1
</span><br>
<span class="quotelev1">&gt;    (SYSV), dynamically linked, not stripped
</span><br>
<span class="quotelev1">&gt;    $ shmemrun -x
</span><br>
<span class="quotelev1">&gt;    LD_PRELOAD=/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so
</span><br>
<span class="quotelev1">&gt;    -H mic1 -N 2 --mca spml yoda --mca btl sm,self,tcp $PWD/mic.out
</span><br>
<span class="quotelev1">&gt;    /home/ariebs/mic/mpi-nightly/bin/orted: error while loading shared
</span><br>
<span class="quotelev1">&gt;    libraries: libimf.so: cannot open shared object file: No such file or
</span><br>
<span class="quotelev1">&gt;    directory
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt;    This usually is caused by:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev1">&gt;      one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;      settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev1">&gt;      Please verify your allocation and authorities.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    * the inability to write startup files into /tmp
</span><br>
<span class="quotelev1">&gt;    (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev1">&gt;      Please check with your sys admin to determine the correct location to
</span><br>
<span class="quotelev1">&gt;    use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    *  compilation of the orted with dynamic libraries when static are
</span><br>
<span class="quotelev1">&gt;    required
</span><br>
<span class="quotelev1">&gt;      (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev1">&gt;      one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev1">&gt;      lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev1">&gt;      them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev1">&gt;      and network routing requirements).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Following here is
</span><br>
<span class="quotelev1">&gt;    - IB information
</span><br>
<span class="quotelev1">&gt;    - Running the failing case with lots of debugging information. (As you
</span><br>
<span class="quotelev1">&gt;    might imagine, I've tried 17 ways from Sunday to try to ensure that
</span><br>
<span class="quotelev1">&gt;    libimf.so is found.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    $ ibv_devices
</span><br>
<span class="quotelev1">&gt;        device                 node GUID
</span><br>
<span class="quotelev1">&gt;        ------              ----------------
</span><br>
<span class="quotelev1">&gt;        mlx4_0              24be05ffffa57160
</span><br>
<span class="quotelev1">&gt;        scif0               4c79bafffe4402b6
</span><br>
<span class="quotelev1">&gt;    $ ibv_devinfo
</span><br>
<span class="quotelev1">&gt;    hca_id: mlx4_0
</span><br>
<span class="quotelev1">&gt;            transport:                      InfiniBand (0)
</span><br>
<span class="quotelev1">&gt;            fw_ver:                         2.11.1250
</span><br>
<span class="quotelev1">&gt;            node_guid:                      24be:05ff:ffa5:7160
</span><br>
<span class="quotelev1">&gt;            sys_image_guid:                 24be:05ff:ffa5:7163
</span><br>
<span class="quotelev1">&gt;            vendor_id:                      0x02c9
</span><br>
<span class="quotelev1">&gt;            vendor_part_id:                 4099
</span><br>
<span class="quotelev1">&gt;            hw_ver:                         0x0
</span><br>
<span class="quotelev1">&gt;            phys_port_cnt:                  2
</span><br>
<span class="quotelev1">&gt;                    port:   1
</span><br>
<span class="quotelev1">&gt;                            state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                            max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                            active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                            sm_lid:                 8
</span><br>
<span class="quotelev1">&gt;                            port_lid:               86
</span><br>
<span class="quotelev1">&gt;                            port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;                            link_layer:             InfiniBand
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    port:   2
</span><br>
<span class="quotelev1">&gt;                            state:                  PORT_DOWN (1)
</span><br>
<span class="quotelev1">&gt;                            max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                            active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                            sm_lid:                 0
</span><br>
<span class="quotelev1">&gt;                            port_lid:               0
</span><br>
<span class="quotelev1">&gt;                            port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;                            link_layer:             InfiniBand
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    hca_id: scif0
</span><br>
<span class="quotelev1">&gt;            transport:                      SCIF (2)
</span><br>
<span class="quotelev1">&gt;            fw_ver:                         0.0.1
</span><br>
<span class="quotelev1">&gt;            node_guid:                      4c79:baff:fe44:02b6
</span><br>
<span class="quotelev1">&gt;            sys_image_guid:                 4c79:baff:fe44:02b6
</span><br>
<span class="quotelev1">&gt;            vendor_id:                      0x8086
</span><br>
<span class="quotelev1">&gt;            vendor_part_id:                 0
</span><br>
<span class="quotelev1">&gt;            hw_ver:                         0x1
</span><br>
<span class="quotelev1">&gt;            phys_port_cnt:                  1
</span><br>
<span class="quotelev1">&gt;                    port:   1
</span><br>
<span class="quotelev1">&gt;                            state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                            max_mtu:                4096 (5)
</span><br>
<span class="quotelev1">&gt;                            active_mtu:             4096 (5)
</span><br>
<span class="quotelev1">&gt;                            sm_lid:                 1
</span><br>
<span class="quotelev1">&gt;                            port_lid:               1001
</span><br>
<span class="quotelev1">&gt;                            port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;                            link_layer:             SCIF
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    $ shmemrun -x
</span><br>
<span class="quotelev1">&gt;    LD_PRELOAD=/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so
</span><br>
<span class="quotelev1">&gt;    -H mic1 -N 2 --mca spml yoda --mca btl sm,self,tcp --mca plm_base_verbose
</span><br>
<span class="quotelev1">&gt;    5 --mca memheap_base_verbose 100 $PWD/mic.out
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[INVALID],INVALID] plm:rsh_lookup on agent ssh :
</span><br>
<span class="quotelev1">&gt;    rsh path NULL
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] mca:base:select:(  plm) Query of component [rsh] set
</span><br>
<span class="quotelev1">&gt;    priority to 10
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] mca:base:select:(  plm) Querying component
</span><br>
<span class="quotelev1">&gt;    [isolated]
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] mca:base:select:(  plm) Query of component
</span><br>
<span class="quotelev1">&gt;    [isolated] set priority to 0
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] mca:base:select:(  plm) Skipping component [slurm].
</span><br>
<span class="quotelev1">&gt;    Query failed to return a module
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] plm:base:set_hnp_name: initial bias 191024 nodename
</span><br>
<span class="quotelev1">&gt;    hash 4121194178
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] plm:base:set_hnp_name: final jobfam 29012
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh_setup on agent ssh : rsh path
</span><br>
<span class="quotelev1">&gt;    NULL
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_job
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_vm creating map
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] setup:vm: working unmanaged allocation
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] using dash_host
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] checking node mic1
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_vm add new daemon
</span><br>
<span class="quotelev1">&gt;    [[29012,0],1]
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_vm assigning new daemon
</span><br>
<span class="quotelev1">&gt;    [[29012,0],1] to node mic1
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: launching vm
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: local shell: 0 (bash)
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: assuming same remote shell as
</span><br>
<span class="quotelev1">&gt;    local shell
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: remote shell: 0 (bash)
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt;            /usr/bin/ssh &lt;template&gt;    
</span><br>
<span class="quotelev1">&gt;    PATH=/home/ariebs/mic/mpi-nightly/bin:$PATH ; export PATH ;
</span><br>
<span class="quotelev1">&gt;    LD_LIBRARY_PATH=/home/ariebs/mic/mpi-nightly/lib:$LD_LIBRARY_PATH ; export
</span><br>
<span class="quotelev1">&gt;    LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev1">&gt;    DYLD_LIBRARY_PATH=/home/ariebs/mic/mpi-nightly/lib:$DYLD_LIBRARY_PATH ;
</span><br>
<span class="quotelev1">&gt;    export DYLD_LIBRARY_PATH ;   /home/ariebs/mic/mpi-nightly/bin/orted
</span><br>
<span class="quotelev1">&gt;    --hnp-topo-sig 0N:1S:0L3:61L2:61L1:61C:244H:k1om -mca ess &quot;env&quot; -mca
</span><br>
<span class="quotelev1">&gt;    orte_ess_jobid &quot;1901330432&quot; -mca orte_ess_vpid &quot;&lt;template&gt;&quot; -mca
</span><br>
<span class="quotelev1">&gt;    orte_ess_num_procs &quot;2&quot; -mca orte_hnp_uri
</span><br>
<span class="quotelev1">&gt;    &quot;1901330432.0;usock;tcp://16.113.180.125,192.0.0.121:34249;ud://2359370.86.1&quot;
</span><br>
<span class="quotelev1">&gt;    --tree-spawn --mca spml &quot;yoda&quot; --mca btl &quot;sm,self,tcp&quot; --mca
</span><br>
<span class="quotelev1">&gt;    plm_base_verbose &quot;5&quot; --mca memheap_base_verbose &quot;100&quot; -mca plm &quot;rsh&quot; -mca
</span><br>
<span class="quotelev1">&gt;    rmaps_ppr_n_pernode &quot;2&quot;
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh:launch daemon 0 not a child of
</span><br>
<span class="quotelev1">&gt;    mine
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: adding node mic1 to launch
</span><br>
<span class="quotelev1">&gt;    list
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: activating launch event
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: recording launch of daemon
</span><br>
<span class="quotelev1">&gt;    [[29012,0],1]
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: executing: (/usr/bin/ssh)
</span><br>
<span class="quotelev1">&gt;    [/usr/bin/ssh mic1     PATH=/home/ariebs/mic/mpi-nightly/bin:$PATH ;
</span><br>
<span class="quotelev1">&gt;    export PATH ;
</span><br>
<span class="quotelev1">&gt;    LD_LIBRARY_PATH=/home/ariebs/mic/mpi-nightly/lib:$LD_LIBRARY_PATH ; export
</span><br>
<span class="quotelev1">&gt;    LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev1">&gt;    DYLD_LIBRARY_PATH=/home/ariebs/mic/mpi-nightly/lib:$DYLD_LIBRARY_PATH ;
</span><br>
<span class="quotelev1">&gt;    export DYLD_LIBRARY_PATH ;   /home/ariebs/mic/mpi-nightly/bin/orted
</span><br>
<span class="quotelev1">&gt;    --hnp-topo-sig 0N:1S:0L3:61L2:61L1:61C:244H:k1om -mca ess &quot;env&quot; -mca
</span><br>
<span class="quotelev1">&gt;    orte_ess_jobid &quot;1901330432&quot; -mca orte_ess_vpid 1 -mca orte_ess_num_procs
</span><br>
<span class="quotelev1">&gt;    &quot;2&quot; -mca orte_hnp_uri
</span><br>
<span class="quotelev1">&gt;    &quot;1901330432.0;usock;tcp://16.113.180.125,192.0.0.121:34249;ud://2359370.86.1&quot;
</span><br>
<span class="quotelev1">&gt;    --tree-spawn --mca spml &quot;yoda&quot; --mca btl &quot;sm,self,tcp&quot; --mca
</span><br>
<span class="quotelev1">&gt;    plm_base_verbose &quot;5&quot; --mca memheap_base_verbose &quot;100&quot; -mca plm &quot;rsh&quot; -mca
</span><br>
<span class="quotelev1">&gt;    rmaps_ppr_n_pernode &quot;2&quot;]
</span><br>
<span class="quotelev1">&gt;    /home/ariebs/mic/mpi-nightly/bin/orted: error while loading shared
</span><br>
<span class="quotelev1">&gt;    libraries: libimf.so: cannot open shared object file: No such file or
</span><br>
<span class="quotelev1">&gt;    directory
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] daemon 1 failed with status 127
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:base:orted_cmd sending orted_exit
</span><br>
<span class="quotelev1">&gt;    commands
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt;    This usually is caused by:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev1">&gt;      one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;      settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev1">&gt;      Please verify your allocation and authorities.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    * the inability to write startup files into /tmp
</span><br>
<span class="quotelev1">&gt;    (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev1">&gt;      Please check with your sys admin to determine the correct location to
</span><br>
<span class="quotelev1">&gt;    use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    *  compilation of the orted with dynamic libraries when static are
</span><br>
<span class="quotelev1">&gt;    required
</span><br>
<span class="quotelev1">&gt;      (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev1">&gt;      one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev1">&gt;      lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev1">&gt;      them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev1">&gt;      and network routing requirements).
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:base:receive stop comm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    On 04/13/2015 08:50 AM, Andy Riebs wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Here are the results with last night's &quot;master&quot; nightly,
</span><br>
<span class="quotelev1">&gt;      openmpi-dev-1487-g9c6d452.tar.bz2, and adding the memheap_base_verbose
</span><br>
<span class="quotelev1">&gt;      option (yes, it looks like the &quot;ERROR_LOG&quot; problem has gone away):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      $ cat /proc/sys/kernel/shmmax
</span><br>
<span class="quotelev1">&gt;      33554432
</span><br>
<span class="quotelev1">&gt;      $ cat /proc/sys/kernel/shmall
</span><br>
<span class="quotelev1">&gt;      2097152
</span><br>
<span class="quotelev1">&gt;      $ cat /proc/sys/kernel/shmmni
</span><br>
<span class="quotelev1">&gt;      4096
</span><br>
<span class="quotelev1">&gt;      $ export SHMEM_SYMMETRIC_HEAP=1M
</span><br>
<span class="quotelev1">&gt;      $ shmemrun -H localhost -N 2 --mca sshmem mmap  --mca plm_base_verbose 5
</span><br>
<span class="quotelev1">&gt;      --mca memheap_base_verbose 100 $PWD/mic.out
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] [[INVALID],INVALID] plm:rsh_lookup on agent ssh :
</span><br>
<span class="quotelev1">&gt;      rsh path NULL
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] mca:base:select:(  plm) Query of component [rsh]
</span><br>
<span class="quotelev1">&gt;      set priority to 10
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] mca:base:select:(  plm) Querying component
</span><br>
<span class="quotelev1">&gt;      [isolated]
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] mca:base:select:(  plm) Query of component
</span><br>
<span class="quotelev1">&gt;      [isolated] set priority to 0
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] mca:base:select:(  plm) Skipping component
</span><br>
<span class="quotelev1">&gt;      [slurm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] plm:base:set_hnp_name: initial bias 190439
</span><br>
<span class="quotelev1">&gt;      nodename hash 4121194178
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] plm:base:set_hnp_name: final jobfam 31875
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:rsh_setup on agent ssh : rsh
</span><br>
<span class="quotelev1">&gt;      path NULL
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:base:setup_job
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:base:setup_vm creating map
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] [[31875,0],0] setup:vm: working unmanaged
</span><br>
<span class="quotelev1">&gt;      allocation
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] [[31875,0],0] using dash_host
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] [[31875,0],0] checking node atl1-01-mic0
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] [[31875,0],0] ignoring myself
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:base:setup_vm only HNP in
</span><br>
<span class="quotelev1">&gt;      allocation
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] [[31875,0],0] complete_setup on job [31875,1]
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:base:launch_apps for job
</span><br>
<span class="quotelev1">&gt;      [31875,1]
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:base:launch wiring up iof for
</span><br>
<span class="quotelev1">&gt;      job [31875,1]
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:base:launch [31875,1] registered
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:base:launch job [31875,1] is not
</span><br>
<span class="quotelev1">&gt;      a dynamic spawn
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190441] mca: base: components_register: registering
</span><br>
<span class="quotelev1">&gt;      memheap components
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190441] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt;      component buddy
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190441] mca: base: components_register: component buddy
</span><br>
<span class="quotelev1">&gt;      has no register or open function
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190442] mca: base: components_register: registering
</span><br>
<span class="quotelev1">&gt;      memheap components
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190442] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt;      component buddy
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190442] mca: base: components_register: component buddy
</span><br>
<span class="quotelev1">&gt;      has no register or open function
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190442] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt;      component ptmalloc
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190442] mca: base: components_register: component ptmalloc
</span><br>
<span class="quotelev1">&gt;      has no register or open function
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190441] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt;      component ptmalloc
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190441] mca: base: components_register: component ptmalloc
</span><br>
<span class="quotelev1">&gt;      has no register or open function
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190441] mca: base: components_open: opening memheap
</span><br>
<span class="quotelev1">&gt;      components
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190441] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt;      buddy
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190441] mca: base: components_open: component buddy open
</span><br>
<span class="quotelev1">&gt;      function successful
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190441] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt;      ptmalloc
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190441] mca: base: components_open: component ptmalloc
</span><br>
<span class="quotelev1">&gt;      open function successful
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190442] mca: base: components_open: opening memheap
</span><br>
<span class="quotelev1">&gt;      components
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190442] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt;      buddy
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190442] mca: base: components_open: component buddy open
</span><br>
<span class="quotelev1">&gt;      function successful
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190442] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt;      ptmalloc
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190442] mca: base: components_open: component ptmalloc
</span><br>
<span class="quotelev1">&gt;      open function successful
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190442] base/memheap_base_alloc.c:38 -
</span><br>
<span class="quotelev1">&gt;      mca_memheap_base_alloc_init() Memheap alloc memory: 270532608 byte(s), 1
</span><br>
<span class="quotelev1">&gt;      segments by method: 1
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190441] base/memheap_base_alloc.c:38 -
</span><br>
<span class="quotelev1">&gt;      mca_memheap_base_alloc_init() Memheap alloc memory: 270532608 byte(s), 1
</span><br>
<span class="quotelev1">&gt;      segments by method: 1
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190442] base/memheap_base_static.c:205 - _load_segments()
</span><br>
<span class="quotelev1">&gt;      add: 00600000-00601000 rw-p 00000000 00:11
</span><br>
<span class="quotelev1">&gt;      6029314                            /home/ariebs/bench/hello/mic.out
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190441] base/memheap_base_static.c:205 - _load_segments()
</span><br>
<span class="quotelev1">&gt;      add: 00600000-00601000 rw-p 00000000 00:11
</span><br>
<span class="quotelev1">&gt;      6029314                            /home/ariebs/bench/hello/mic.out
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190442] base/memheap_base_static.c:75 -
</span><br>
<span class="quotelev1">&gt;      mca_memheap_base_static_init() Memheap static memory: 3824 byte(s), 2
</span><br>
<span class="quotelev1">&gt;      segments
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190442] base/memheap_base_register.c:39 -
</span><br>
<span class="quotelev1">&gt;      mca_memheap_base_reg() register seg#00: 0x0xff000000 - 0x0x10f200000
</span><br>
<span class="quotelev1">&gt;      270532608 bytes type=0x1 id=0xFFFFFFFF
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190441] base/memheap_base_static.c:75 -
</span><br>
<span class="quotelev1">&gt;      mca_memheap_base_static_init() Memheap static memory: 3824 byte(s), 2
</span><br>
<span class="quotelev1">&gt;      segments
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190441] base/memheap_base_register.c:39 -
</span><br>
<span class="quotelev1">&gt;      mca_memheap_base_reg() register seg#00: 0x0xff000000 - 0x0x10f200000
</span><br>
<span class="quotelev1">&gt;      270532608 bytes type=0x1 id=0xFFFFFFFF
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190442] Error base/memheap_base_register.c:130 -
</span><br>
<span class="quotelev1">&gt;      _reg_segment() Failed to register segment
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190441] Error base/memheap_base_register.c:130 -
</span><br>
<span class="quotelev1">&gt;      _reg_segment() Failed to register segment
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190442] Error: pshmem_init.c:61 - shmem_init() SHMEM
</span><br>
<span class="quotelev1">&gt;      failed to initialize - aborting
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190441] Error: pshmem_init.c:61 - shmem_init() SHMEM
</span><br>
<span class="quotelev1">&gt;      failed to initialize - aborting
</span><br>
<span class="quotelev1">&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;      It looks like SHMEM_INIT failed for some reason; your parallel process
</span><br>
<span class="quotelev1">&gt;      is
</span><br>
<span class="quotelev1">&gt;      likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;      fail during SHMEM_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;      environment
</span><br>
<span class="quotelev1">&gt;      problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt;      additional information (which may only be relevant to an Open SHMEM
</span><br>
<span class="quotelev1">&gt;      developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        mca_memheap_base_select() failed
</span><br>
<span class="quotelev1">&gt;        --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;      SHMEM_ABORT was invoked on rank 0 (pid 190441, host=atl1-01-mic0) with
</span><br>
<span class="quotelev1">&gt;      errorcode -1.
</span><br>
<span class="quotelev1">&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;      A SHMEM process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev1">&gt;      of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev1">&gt;      double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Local host: atl1-01-mic0
</span><br>
<span class="quotelev1">&gt;      PID:        190441
</span><br>
<span class="quotelev1">&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;      -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;      Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt;      a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt;      -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:base:orted_cmd sending
</span><br>
<span class="quotelev1">&gt;      orted_exit commands
</span><br>
<span class="quotelev1">&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;      shmemrun detected that one or more processes exited with non-zero
</span><br>
<span class="quotelev1">&gt;      status, thus causing
</span><br>
<span class="quotelev1">&gt;      the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Process name: [[31875,1],0]
</span><br>
<span class="quotelev1">&gt;        Exit code:    255
</span><br>
<span class="quotelev1">&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt;      help-shmem-runtime.txt / shmem_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0
</span><br>
<span class="quotelev1">&gt;      to see all help / error messages
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt;      help-shmem-api.txt / shmem-abort
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt;      help-shmem-runtime.txt / oshmem shmem abort:cannot guarantee all killed
</span><br>
<span class="quotelev1">&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:base:receive stop comm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      On 04/12/2015 03:09 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Sorry about that - I hadn't brought it over to the 1.8 branch yet.
</span><br>
<span class="quotelev1">&gt;        I've done so now, which means the ERROR_LOG shouldn't show up any
</span><br>
<span class="quotelev1">&gt;        more. It won't fix the memheap problem, though.
</span><br>
<span class="quotelev1">&gt;        You might try adding &quot;--mca memheap_base_verbose 100&quot; to your cmd line
</span><br>
<span class="quotelev1">&gt;        so we can see why none of the memheap components are being selected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          On Apr 12, 2015, at 11:30 AM, Andy Riebs &lt;andy.riebs_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;          Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          Here's the output with openmpi-v1.8.4-202-gc2da6a5.tar.bz2:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          $ shmemrun -H localhost -N 2 --mca sshmem mmap  --mca
</span><br>
<span class="quotelev1">&gt;          plm_base_verbose 5 $PWD/mic.out
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] mca:base:select:(  plm) Querying component
</span><br>
<span class="quotelev1">&gt;          [rsh]
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] [[INVALID],INVALID] plm:rsh_lookup on agent
</span><br>
<span class="quotelev1">&gt;          ssh : rsh path NULL
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] mca:base:select:(  plm) Query of component
</span><br>
<span class="quotelev1">&gt;          [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] mca:base:select:(  plm) Querying component
</span><br>
<span class="quotelev1">&gt;          [isolated]
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] mca:base:select:(  plm) Query of component
</span><br>
<span class="quotelev1">&gt;          [isolated] set priority to 0
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] mca:base:select:(  plm) Querying component
</span><br>
<span class="quotelev1">&gt;          [slurm]
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] mca:base:select:(  plm) Skipping component
</span><br>
<span class="quotelev1">&gt;          [slurm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] mca:base:select:(  plm) Selected component
</span><br>
<span class="quotelev1">&gt;          [rsh]
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] plm:base:set_hnp_name: initial bias 190189
</span><br>
<span class="quotelev1">&gt;          nodename hash 4121194178
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] plm:base:set_hnp_name: final jobfam 32137
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:rsh_setup on agent ssh : rsh
</span><br>
<span class="quotelev1">&gt;          path NULL
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_job
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_vm creating map
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] [[32137,0],0] setup:vm: working unmanaged
</span><br>
<span class="quotelev1">&gt;          allocation
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] [[32137,0],0] using dash_host
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] [[32137,0],0] checking node atl1-01-mic0
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] [[32137,0],0] ignoring myself
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_vm only HNP in
</span><br>
<span class="quotelev1">&gt;          allocation
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] [[32137,0],0] complete_setup on job [32137,1]
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] [[32137,0],0] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev1">&gt;          file base/plm_base_launch_support.c at line 440
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:base:launch_apps for job
</span><br>
<span class="quotelev1">&gt;          [32137,1]
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:base:launch wiring up iof
</span><br>
<span class="quotelev1">&gt;          for job [32137,1]
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:base:launch [32137,1]
</span><br>
<span class="quotelev1">&gt;          registered
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:base:launch job [32137,1] is
</span><br>
<span class="quotelev1">&gt;          not a dynamic spawn
</span><br>
<span class="quotelev1">&gt;          --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;          It looks like SHMEM_INIT failed for some reason; your parallel
</span><br>
<span class="quotelev1">&gt;          process is
</span><br>
<span class="quotelev1">&gt;          likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;          fail during SHMEM_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;          environment
</span><br>
<span class="quotelev1">&gt;          problems.  This failure appears to be an internal failure; here's
</span><br>
<span class="quotelev1">&gt;          some
</span><br>
<span class="quotelev1">&gt;          additional information (which may only be relevant to an Open SHMEM
</span><br>
<span class="quotelev1">&gt;          developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            mca_memheap_base_select() failed
</span><br>
<span class="quotelev1">&gt;            --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;          --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190191] Error: pshmem_init.c:61 - shmem_init() SHMEM
</span><br>
<span class="quotelev1">&gt;          failed to initialize - aborting
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190192] Error: pshmem_init.c:61 - shmem_init() SHMEM
</span><br>
<span class="quotelev1">&gt;          failed to initialize - aborting
</span><br>
<span class="quotelev1">&gt;          --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;          SHMEM_ABORT was invoked on rank 1 (pid 190192, host=atl1-01-mic0)
</span><br>
<span class="quotelev1">&gt;          with errorcode -1.
</span><br>
<span class="quotelev1">&gt;          --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;          --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;          A SHMEM process is aborting at a time when it cannot guarantee that
</span><br>
<span class="quotelev1">&gt;          all
</span><br>
<span class="quotelev1">&gt;          of its peer processes in the job will be killed properly.  You
</span><br>
<span class="quotelev1">&gt;          should
</span><br>
<span class="quotelev1">&gt;          double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          Local host: atl1-01-mic0
</span><br>
<span class="quotelev1">&gt;          PID:        190192
</span><br>
<span class="quotelev1">&gt;          --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;          -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;          Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt;          a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt;          -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:base:orted_cmd sending
</span><br>
<span class="quotelev1">&gt;          orted_exit commands
</span><br>
<span class="quotelev1">&gt;          --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;          shmemrun detected that one or more processes exited with non-zero
</span><br>
<span class="quotelev1">&gt;          status, thus causing
</span><br>
<span class="quotelev1">&gt;          the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Process name: [[32137,1],0]
</span><br>
<span class="quotelev1">&gt;            Exit code:    255
</span><br>
<span class="quotelev1">&gt;          --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt;          help-shmem-runtime.txt / shmem_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] Set MCA parameter &quot;orte_base_help_aggregate&quot;
</span><br>
<span class="quotelev1">&gt;          to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt;          help-shmem-api.txt / shmem-abort
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt;          help-shmem-runtime.txt / oshmem shmem abort:cannot guarantee all
</span><br>
<span class="quotelev1">&gt;          killed
</span><br>
<span class="quotelev1">&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:base:receive stop comm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          On 04/11/2015 07:41 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Got it - thanks. I fixed that ERROR_LOG issue (I think- please
</span><br>
<span class="quotelev1">&gt;            verify). I suspect the memheap issue relates to something else,
</span><br>
<span class="quotelev1">&gt;            but I probably need to let the OSHMEM folks comment on it
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              On Apr 11, 2015, at 9:52 AM, Andy Riebs &lt;andy.riebs_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;              wrote:
</span><br>
<span class="quotelev1">&gt;              Everything is built on the Xeon side, with the icc &quot;-mmic&quot;
</span><br>
<span class="quotelev1">&gt;              switch. I then ssh into one of the PHIs, and run shmemrun from
</span><br>
<span class="quotelev1">&gt;              there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              On 04/11/2015 12:00 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                Let me try to understand the setup a little better. Are you
</span><br>
<span class="quotelev1">&gt;                running shmemrun on the PHI itself? Or is it running on the
</span><br>
<span class="quotelev1">&gt;                host processor, and you are trying to spawn a process onto the
</span><br>
<span class="quotelev1">&gt;                Phi?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  On Apr 11, 2015, at 7:55 AM, Andy Riebs &lt;andy.riebs_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                  wrote:
</span><br>
<span class="quotelev1">&gt;                  Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  Yes, this is attempting to get OSHMEM to run on the Phi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  I grabbed openmpi-dev-1484-g033418f.tar.bz2 and configured
</span><br>
<span class="quotelev1">&gt;                  it with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  $ ./configure --prefix=/home/ariebs/mic/mpi-nightly   
</span><br>
<span class="quotelev1">&gt;                  CC=icc -mmic CXX=icpc -mmic    \
</span><br>
<span class="quotelev1">&gt;                      --build=x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;                  --host=x86_64-k1om-linux    \
</span><br>
<span class="quotelev1">&gt;                       AR=x86_64-k1om-linux-ar
</span><br>
<span class="quotelev1">&gt;                  RANLIB=x86_64-k1om-linux-ranlib  LD=x86_64-k1om-linux-ld   \
</span><br>
<span class="quotelev1">&gt;                       --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt;                  --disable-io-romio     --disable-mpi-fortran    \
</span><br>
<span class="quotelev1">&gt;                       --enable-debug    
</span><br>
<span class="quotelev1">&gt;                  --enable-mca-no-build=btl-usnic,btl-openib,common-verbs,oob-ud
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  (Note that I had to add &quot;oob-ud&quot; to the
</span><br>
<span class="quotelev1">&gt;                  &quot;--enable-mca-no-build&quot; option, as the build complained that
</span><br>
<span class="quotelev1">&gt;                  mca oob/ud needed mca common-verbs.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  With that configuration, here is what I am seeing now...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  $ export SHMEM_SYMMETRIC_HEAP_SIZE=1G
</span><br>
<span class="quotelev1">&gt;                  $ shmemrun -H localhost -N 2 --mca sshmem mmap  --mca
</span><br>
<span class="quotelev1">&gt;                  plm_base_verbose 5 $PWD/mic.out
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] mca:base:select:(  plm) Querying
</span><br>
<span class="quotelev1">&gt;                  component [rsh]
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] [[INVALID],INVALID] plm:rsh_lookup on
</span><br>
<span class="quotelev1">&gt;                  agent ssh : rsh path NULL
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] mca:base:select:(  plm) Query of
</span><br>
<span class="quotelev1">&gt;                  component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] mca:base:select:(  plm) Querying
</span><br>
<span class="quotelev1">&gt;                  component [isolated]
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] mca:base:select:(  plm) Query of
</span><br>
<span class="quotelev1">&gt;                  component [isolated] set priority to 0
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] mca:base:select:(  plm) Querying
</span><br>
<span class="quotelev1">&gt;                  component [slurm]
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] mca:base:select:(  plm) Skipping
</span><br>
<span class="quotelev1">&gt;                  component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] mca:base:select:(  plm) Selected
</span><br>
<span class="quotelev1">&gt;                  component [rsh]
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] plm:base:set_hnp_name: initial bias
</span><br>
<span class="quotelev1">&gt;                  189895 nodename hash 4121194178
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] plm:base:set_hnp_name: final jobfam
</span><br>
<span class="quotelev1">&gt;                  32419
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:rsh_setup on agent
</span><br>
<span class="quotelev1">&gt;                  ssh : rsh path NULL
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:base:receive start
</span><br>
<span class="quotelev1">&gt;                  comm
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_job
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev1">&gt;                  creating map
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] [[32419,0],0] setup:vm: working
</span><br>
<span class="quotelev1">&gt;                  unmanaged allocation
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] [[32419,0],0] using dash_host
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] [[32419,0],0] checking node
</span><br>
<span class="quotelev1">&gt;                  atl1-01-mic0
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] [[32419,0],0] ignoring myself
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_vm only
</span><br>
<span class="quotelev1">&gt;                  HNP in allocation
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] [[32419,0],0] complete_setup on job
</span><br>
<span class="quotelev1">&gt;                  [32419,1]
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] [[32419,0],0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev1">&gt;                  found in file base/plm_base_launch_support.c at line 440
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch_apps for
</span><br>
<span class="quotelev1">&gt;                  job [32419,1]
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch wiring
</span><br>
<span class="quotelev1">&gt;                  up iof for job [32419,1]
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch
</span><br>
<span class="quotelev1">&gt;                  [32419,1] registered
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch job
</span><br>
<span class="quotelev1">&gt;                  [32419,1] is not a dynamic spawn
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189899] Error: pshmem_init.c:61 - shmem_init()
</span><br>
<span class="quotelev1">&gt;                  SHMEM failed to initialize - aborting
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189898] Error: pshmem_init.c:61 - shmem_init()
</span><br>
<span class="quotelev1">&gt;                  SHMEM failed to initialize - aborting
</span><br>
<span class="quotelev1">&gt;                  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                  It looks like SHMEM_INIT failed for some reason; your
</span><br>
<span class="quotelev1">&gt;                  parallel process is
</span><br>
<span class="quotelev1">&gt;                  likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev1">&gt;                  process can
</span><br>
<span class="quotelev1">&gt;                  fail during SHMEM_INIT; some of which are due to
</span><br>
<span class="quotelev1">&gt;                  configuration or environment
</span><br>
<span class="quotelev1">&gt;                  problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt;                  here's some
</span><br>
<span class="quotelev1">&gt;                  additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt;                  Open SHMEM
</span><br>
<span class="quotelev1">&gt;                  developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    mca_memheap_base_select() failed
</span><br>
<span class="quotelev1">&gt;                    --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;                  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                  SHMEM_ABORT was invoked on rank 1 (pid 189899,
</span><br>
<span class="quotelev1">&gt;                  host=atl1-01-mic0) with errorcode -1.
</span><br>
<span class="quotelev1">&gt;                  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                  A SHMEM process is aborting at a time when it cannot
</span><br>
<span class="quotelev1">&gt;                  guarantee that all
</span><br>
<span class="quotelev1">&gt;                  of its peer processes in the job will be killed properly. 
</span><br>
<span class="quotelev1">&gt;                  You should
</span><br>
<span class="quotelev1">&gt;                  double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  Local host: atl1-01-mic0
</span><br>
<span class="quotelev1">&gt;                  PID:        189899
</span><br>
<span class="quotelev1">&gt;                  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                  -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                  Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt;                  a non-zero exit code.. Per user-direction, the job has been
</span><br>
<span class="quotelev1">&gt;                  aborted.
</span><br>
<span class="quotelev1">&gt;                  -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:base:orted_cmd
</span><br>
<span class="quotelev1">&gt;                  sending orted_exit commands
</span><br>
<span class="quotelev1">&gt;                  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                  shmemrun detected that one or more processes exited with
</span><br>
<span class="quotelev1">&gt;                  non-zero status, thus causing
</span><br>
<span class="quotelev1">&gt;                  the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    Process name: [[32419,1],1]
</span><br>
<span class="quotelev1">&gt;                    Exit code:    255
</span><br>
<span class="quotelev1">&gt;                  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt;                  help-shmem-runtime.txt / shmem_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] Set MCA parameter
</span><br>
<span class="quotelev1">&gt;                  &quot;orte_base_help_aggregate&quot; to 0 to see all help / error
</span><br>
<span class="quotelev1">&gt;                  messages
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt;                  help-shmem-api.txt / shmem-abort
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt;                  help-shmem-runtime.txt / oshmem shmem abort:cannot guarantee
</span><br>
<span class="quotelev1">&gt;                  all killed
</span><br>
<span class="quotelev1">&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:base:receive stop
</span><br>
<span class="quotelev1">&gt;                  comm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  On 04/10/2015 06:37 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    Andy - could you please try the current 1.8.5 nightly
</span><br>
<span class="quotelev1">&gt;                    tarball and see if it helps? The error log indicates that
</span><br>
<span class="quotelev1">&gt;                    it is failing to get the topology from some daemon, I**m
</span><br>
<span class="quotelev1">&gt;                    assuming the one on the Phi?
</span><br>
<span class="quotelev1">&gt;                    You might also add **enable-debug to that configure line
</span><br>
<span class="quotelev1">&gt;                    and then put -mca plm_base_verbose on the shmemrun cmd to
</span><br>
<span class="quotelev1">&gt;                    get more help
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      On Apr 10, 2015, at 11:55 AM, Andy Riebs
</span><br>
<span class="quotelev1">&gt;                      &lt;andy.riebs_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;                      Summary: MPI jobs work fine, SHMEM jobs work just often
</span><br>
<span class="quotelev1">&gt;                      enough to be tantalizing, on an Intel Xeon Phi/MIC
</span><br>
<span class="quotelev1">&gt;                      system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      Longer version
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      Thanks to the excellent write-up last June
</span><br>
<span class="quotelev1">&gt;                      (&lt;<a href="https://www.open-mpi.org/community/lists/users/2014/06/24711.php">https://www.open-mpi.org/community/lists/users/2014/06/24711.php</a>&gt;),
</span><br>
<span class="quotelev1">&gt;                      I have been able to build a version of Open MPI for the
</span><br>
<span class="quotelev1">&gt;                      Xeon Phi coprocessor that runs MPI jobs on the Phi
</span><br>
<span class="quotelev1">&gt;                      coprocessor with no problem, but not SHMEM jobs.  Just
</span><br>
<span class="quotelev1">&gt;                      at the point where I was about to document the problems
</span><br>
<span class="quotelev1">&gt;                      I was having with SHMEM, my trivial SHMEM job worked.
</span><br>
<span class="quotelev1">&gt;                      And then failed when I tried to run it again,
</span><br>
<span class="quotelev1">&gt;                      immediately afterwards. I have a feeling I may be in
</span><br>
<span class="quotelev1">&gt;                      uncharted  territory here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      Environment
</span><br>
<span class="quotelev1">&gt;                        * RHEL 6.5
</span><br>
<span class="quotelev1">&gt;                        * Intel Composer XE 2015
</span><br>
<span class="quotelev1">&gt;                        * Xeon Phi/MIC
</span><br>
<span class="quotelev1">&gt;                      ----------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      Configuration
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      $ export PATH=/usr/linux-k1om-4.7/bin/:$PATH
</span><br>
<span class="quotelev1">&gt;                      $ source
</span><br>
<span class="quotelev1">&gt;                      /opt/intel/15.0/composer_xe_2015/bin/compilervars.sh
</span><br>
<span class="quotelev1">&gt;                      intel64
</span><br>
<span class="quotelev1">&gt;                      $ ./configure --prefix=/home/ariebs/mic/mpi \
</span><br>
<span class="quotelev1">&gt;                         CC=&quot;icc -mmic&quot; CXX=&quot;icpc -mmic&quot; \
</span><br>
<span class="quotelev1">&gt;                         --build=x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;                      --host=x86_64-k1om-linux \
</span><br>
<span class="quotelev1">&gt;                          AR=x86_64-k1om-linux-ar
</span><br>
<span class="quotelev1">&gt;                      RANLIB=x86_64-k1om-linux-ranlib \
</span><br>
<span class="quotelev1">&gt;                          LD=x86_64-k1om-linux-ld \
</span><br>
<span class="quotelev1">&gt;                          --enable-mpirun-prefix-by-default --disable-io-romio
</span><br>
<span class="quotelev1">&gt;                      \
</span><br>
<span class="quotelev1">&gt;                          --disable-vt --disable-mpi-fortran \
</span><br>
<span class="quotelev1">&gt;                         
</span><br>
<span class="quotelev1">&gt;                      --enable-mca-no-build=btl-usnic,btl-openib,common-verbs
</span><br>
<span class="quotelev1">&gt;                      $ make
</span><br>
<span class="quotelev1">&gt;                      $ make install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      ----------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      Test program
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;                      #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;                      #include &lt;shmem.h&gt;
</span><br>
<span class="quotelev1">&gt;                      int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt;                      {
</span><br>
<span class="quotelev1">&gt;                              int me, num_pe;
</span><br>
<span class="quotelev1">&gt;                              shmem_init();
</span><br>
<span class="quotelev1">&gt;                              num_pe = num_pes();
</span><br>
<span class="quotelev1">&gt;                              me = my_pe();
</span><br>
<span class="quotelev1">&gt;                              printf(&quot;Hello World from process %ld of %ld\n&quot;,
</span><br>
<span class="quotelev1">&gt;                      me, num_pe);
</span><br>
<span class="quotelev1">&gt;                              exit(0);
</span><br>
<span class="quotelev1">&gt;                      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      ----------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      Building the program
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      export PATH=/home/ariebs/mic/mpi/bin:$PATH
</span><br>
<span class="quotelev1">&gt;                      export PATH=/usr/linux-k1om-4.7/bin/:$PATH
</span><br>
<span class="quotelev1">&gt;                      source
</span><br>
<span class="quotelev1">&gt;                      /opt/intel/15.0/composer_xe_2015/bin/compilervars.sh
</span><br>
<span class="quotelev1">&gt;                      intel64
</span><br>
<span class="quotelev1">&gt;                      export
</span><br>
<span class="quotelev1">&gt;                      LD_LIBRARY_PATH=/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      icc -mmic -std=gnu99 -I/home/ariebs/mic/mpi/include
</span><br>
<span class="quotelev1">&gt;                      -pthread \
</span><br>
<span class="quotelev1">&gt;                              -Wl,-rpath -Wl,/home/ariebs/mic/mpi/lib
</span><br>
<span class="quotelev1">&gt;                      -Wl,--enable-new-dtags \
</span><br>
<span class="quotelev1">&gt;                              -L/home/ariebs/mic/mpi/lib -loshmem -lmpi
</span><br>
<span class="quotelev1">&gt;                      -lopen-rte -lopen-pal \
</span><br>
<span class="quotelev1">&gt;                              -lm -ldl -lutil \
</span><br>
<span class="quotelev1">&gt;                              -Wl,-rpath
</span><br>
<span class="quotelev1">&gt;                      -Wl,/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic
</span><br>
<span class="quotelev1">&gt;                      \
</span><br>
<span class="quotelev1">&gt;                             
</span><br>
<span class="quotelev1">&gt;                      -L/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic
</span><br>
<span class="quotelev1">&gt;                      \
</span><br>
<span class="quotelev1">&gt;                              -o mic.out  shmem_hello.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      ----------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      Running the program
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      (Note that the program had been consistently failing.
</span><br>
<span class="quotelev1">&gt;                      Then, when I logged back into the system to capture the
</span><br>
<span class="quotelev1">&gt;                      results, it worked once,  and then immediately failed
</span><br>
<span class="quotelev1">&gt;                      when I tried again, as shown below. Logging in and out
</span><br>
<span class="quotelev1">&gt;                      isn't sufficient to correct the problem. Overall, I
</span><br>
<span class="quotelev1">&gt;                      think I had 3 successful runs in 30-40 attempts.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      $ shmemrun -H localhost -N 2 --mca sshmem mmap ./mic.out
</span><br>
<span class="quotelev1">&gt;                      [atl1-01-mic0:189372] [[30936,0],0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev1">&gt;                      found in file base/plm_base_launch_support.c at line 426
</span><br>
<span class="quotelev1">&gt;                      Hello World from process 0 of 2
</span><br>
<span class="quotelev1">&gt;                      Hello World from process 1 of 2
</span><br>
<span class="quotelev1">&gt;                      $ shmemrun -H localhost -N 2 --mca sshmem mmap ./mic.out
</span><br>
<span class="quotelev1">&gt;                      [atl1-01-mic0:189381] [[30881,0],0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev1">&gt;                      found in file base/plm_base_launch_support.c at line 426
</span><br>
<span class="quotelev1">&gt;                      [atl1-01-mic0:189383] Error: pshmem_init.c:61 -
</span><br>
<span class="quotelev1">&gt;                      shmem_init() SHMEM failed to initialize - aborting
</span><br>
<span class="quotelev1">&gt;                      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                      It looks like SHMEM_INIT failed for some reason; your
</span><br>
<span class="quotelev1">&gt;                      parallel process is
</span><br>
<span class="quotelev1">&gt;                      likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev1">&gt;                      process can
</span><br>
<span class="quotelev1">&gt;                      fail during SHMEM_INIT; some of which are due to
</span><br>
<span class="quotelev1">&gt;                      configuration or environment
</span><br>
<span class="quotelev1">&gt;                      problems.  This failure appears to be an internal
</span><br>
<span class="quotelev1">&gt;                      failure; here's some
</span><br>
<span class="quotelev1">&gt;                      additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt;                      Open SHMEM
</span><br>
<span class="quotelev1">&gt;                      developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                        mca_memheap_base_select() failed
</span><br>
<span class="quotelev1">&gt;                        --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;                      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                      SHMEM_ABORT was invoked on rank 0 (pid 189383,
</span><br>
<span class="quotelev1">&gt;                      host=atl1-01-mic0) with errorcode -1.
</span><br>
<span class="quotelev1">&gt;                      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                      A SHMEM process is aborting at a time when it cannot
</span><br>
<span class="quotelev1">&gt;                      guarantee that all
</span><br>
<span class="quotelev1">&gt;                      of its peer processes in the job will be killed
</span><br>
<span class="quotelev1">&gt;                      properly.  You should
</span><br>
<span class="quotelev1">&gt;                      double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      Local host: atl1-01-mic0
</span><br>
<span class="quotelev1">&gt;                      PID:        189383
</span><br>
<span class="quotelev1">&gt;                      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                      -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                      Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt;                      a non-zero exit code.. Per user-direction, the job has
</span><br>
<span class="quotelev1">&gt;                      been aborted.
</span><br>
<span class="quotelev1">&gt;                      -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                      shmemrun detected that one or more processes exited with
</span><br>
<span class="quotelev1">&gt;                      non-zero status, thus causing
</span><br>
<span class="quotelev1">&gt;                      the job to be terminated. The first process to do so
</span><br>
<span class="quotelev1">&gt;                      was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                        Process name: [[30881,1],0]
</span><br>
<span class="quotelev1">&gt;                        Exit code:    255
</span><br>
<span class="quotelev1">&gt;                      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      Any thoughts about where to go from here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      Andy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  Andy Riebs
</span><br>
<span class="quotelev1">&gt;  Hewlett-Packard Company
</span><br>
<span class="quotelev1">&gt;  High Performance Computing
</span><br>
<span class="quotelev1">&gt;  +1 404 648 9024
</span><br>
<span class="quotelev1">&gt;  My opinions are not necessarily those of HP
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      _______________________________________________
</span><br>
<span class="quotelev1">&gt;                      users mailing list
</span><br>
<span class="quotelev1">&gt;                      users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                      Subscription:
</span><br>
<span class="quotelev1">&gt;                      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                      Link to this post:
</span><br>
<span class="quotelev1">&gt;                      <a href="http://www.open-mpi.org/community/lists/users/2015/04/26670.php">http://www.open-mpi.org/community/lists/users/2015/04/26670.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  users mailing list
</span><br>
<span class="quotelev1">&gt;  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26676.php">http://www.open-mpi.org/community/lists/users/2015/04/26676.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  _______________________________________________
</span><br>
<span class="quotelev1">&gt;                  users mailing list
</span><br>
<span class="quotelev1">&gt;                  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                  Subscription:
</span><br>
<span class="quotelev1">&gt;                  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                  Link to this post:
</span><br>
<span class="quotelev1">&gt;                  <a href="http://www.open-mpi.org/community/lists/users/2015/04/26678.php">http://www.open-mpi.org/community/lists/users/2015/04/26678.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  users mailing list
</span><br>
<span class="quotelev1">&gt;  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26679.php">http://www.open-mpi.org/community/lists/users/2015/04/26679.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              _______________________________________________
</span><br>
<span class="quotelev1">&gt;              users mailing list
</span><br>
<span class="quotelev1">&gt;              users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;              Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;              Link to this post:
</span><br>
<span class="quotelev1">&gt;              <a href="http://www.open-mpi.org/community/lists/users/2015/04/26680.php">http://www.open-mpi.org/community/lists/users/2015/04/26680.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  users mailing list
</span><br>
<span class="quotelev1">&gt;  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26682.php">http://www.open-mpi.org/community/lists/users/2015/04/26682.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          _______________________________________________
</span><br>
<span class="quotelev1">&gt;          users mailing list
</span><br>
<span class="quotelev1">&gt;          users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;          Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;          Link to this post:
</span><br>
<span class="quotelev1">&gt;          <a href="http://www.open-mpi.org/community/lists/users/2015/04/26683.php">http://www.open-mpi.org/community/lists/users/2015/04/26683.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  users mailing list
</span><br>
<span class="quotelev1">&gt;  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26684.php">http://www.open-mpi.org/community/lists/users/2015/04/26684.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26697.php">http://www.open-mpi.org/community/lists/users/2015/04/26697.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26699/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26700.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="26698.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="26697.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26700.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26700.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
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
