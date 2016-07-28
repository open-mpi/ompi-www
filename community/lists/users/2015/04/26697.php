<?
$subject_val = "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 16:06:25 2015" -->
<!-- isoreceived="20150413200625" -->
<!-- sent="Mon, 13 Apr 2015 16:06:21 -0400" -->
<!-- isosent="20150413200621" -->
<!-- name="Andy Riebs" -->
<!-- email="andy.riebs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC" -->
<!-- id="552C21BD.7020700_at_hp.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="552BBB79.2070409_at_hp.com" -->
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
<strong>From:</strong> Andy Riebs (<em>andy.riebs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-13 16:06:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26698.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="26696.php">Howard Pritchard: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>In reply to:</strong> <a href="26689.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26698.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26698.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26699.php">Nathan Hjelm: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->

  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  </head>
  <body bgcolor="#FFFFFF" text="#000000">
    Progress!  I can run my trivial program on the local PHI, but not
    the other PHI, on the system. Here are the interesting parts:<br>
    <br>
    A pretty good recipe with last night's nightly master:<br>
    <br>
    $ ./configure --prefix=/home/ariebs/mic/mpi-nightly CC="icc -mmic"
    CXX="icpc -mmic" \<br>
        --build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux \<br>
         AR=x86_64-k1om-linux-ar RANLIB=x86_64-k1om-linux-ranlib 
    LD=x86_64-k1om-linux-ld \<br>
         --enable-mpirun-prefix-by-default --disable-io-romio
    --disable-mpi-fortran \<br>
         --enable-orterun-prefix-by-default \<br>
         --enable-debug<br>
    $ make &amp;&amp; make install<br>
    $ shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -H localhost -N 2 --mca
    spml yoda --mca btl sm,self,tcp $PWD/mic.out<br>
    Hello World from process 0 of 2<br>
    Hello World from process 1 of 2<br>
    $ shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -H localhost -N 2 --mca
    spml yoda --mca btl openib,sm,self $PWD/mic.out<br>
    Hello World from process 0 of 2<br>
    Hello World from process 1 of 2<br>
    $ <br>
    <br>
    However, I can't seem to cross the fabric. I can ssh freely back and
    forth between mic0 and mic1. However, running the next 2 tests from
    mic0, it  certainly seems like the second one should work, too:<br>
    <br>
    $ shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -H mic0 -N 2 --mca spml
    yoda --mca btl sm,self,tcp $PWD/mic.out<br>
    Hello World from process 0 of 2<br>
    Hello World from process 1 of 2<br>
    $ shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -H mic1 -N 2 --mca spml
    yoda --mca btl sm,self,tcp $PWD/mic.out<br>
    /home/ariebs/mic/mpi-nightly/bin/orted:<b> error while loading
      shared libraries: libimf.so: cannot open shared object file: No
      such file or directory</b><br>
--------------------------------------------------------------------------<br>
    ORTE was unable to reliably start one or more daemons.<br>
    This usually is caused by:<br>
    <br>
    * not finding the required libraries and/or binaries on<br>
      one or more nodes. Please check your PATH and LD_LIBRARY_PATH<br>
      settings, or configure OMPI with
    --enable-orterun-prefix-by-default<br>
    <br>
    * lack of authority to execute on one or more specified nodes.<br>
      Please verify your allocation and authorities.<br>
    <br>
    * the inability to write startup files into /tmp
    (--tmpdir/orte_tmpdir_base).<br>
      Please check with your sys admin to determine the correct location
    to use.<br>
    <br>
    *  compilation of the orted with dynamic libraries when static are
    required<br>
      (e.g., on Cray). Please check your configure cmd line and consider
    using<br>
      one of the contrib/platform definitions for your system type.<br>
    <br>
    * an inability to create a connection back to mpirun due to a<br>
      lack of common network interfaces and/or no route found between<br>
      them. Please check network connectivity (including firewalls<br>
      and network routing requirements).<br>
     ...<br>
    $<br>
    <br>
    (Note that I get the same results with "--mca btl openib,sm,self"....)<br>
    <br>
    <br>
    $ ssh mic1 file <b>/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so</b><br>
    /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so:
    ELF 64-bit LSB shared object, Intel Xeon Phi coprocessor (k1om),
    version 1 (SYSV), dynamically linked, not stripped<br>
    $ shmemrun -x <b>
LD_PRELOAD=/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so</b>
    -H mic1 -N 2 --mca spml yoda --mca btl sm,self,tcp $PWD/mic.out<br>
    /home/ariebs/mic/mpi-nightly/bin/orted: error while loading shared
    libraries: libimf.so: cannot open shared object file: No such file
    or directory<br>
--------------------------------------------------------------------------<br>
    ORTE was unable to reliably start one or more daemons.<br>
    This usually is caused by:<br>
    <br>
    * not finding the required libraries and/or binaries on<br>
      one or more nodes. Please check your PATH and LD_LIBRARY_PATH<br>
      settings, or configure OMPI with
    --enable-orterun-prefix-by-default<br>
    <br>
    * lack of authority to execute on one or more specified nodes.<br>
      Please verify your allocation and authorities.<br>
    <br>
    * the inability to write startup files into /tmp
    (--tmpdir/orte_tmpdir_base).<br>
      Please check with your sys admin to determine the correct location
    to use.<br>
    <br>
    *  compilation of the orted with dynamic libraries when static are
    required<br>
      (e.g., on Cray). Please check your configure cmd line and consider
    using<br>
      one of the contrib/platform definitions for your system type.<br>
    <br>
    * an inability to create a connection back to mpirun due to a<br>
      lack of common network interfaces and/or no route found between<br>
      them. Please check network connectivity (including firewalls<br>
      and network routing requirements).<br>
    <br>
    Following here is <br>
    - IB information<br>
    - Running the failing case with lots of debugging information. (As
    you might imagine, I've tried 17 ways from Sunday to try to ensure
    that libimf.so is found.)<br>
    <br>
    $ ibv_devices<br>
        device                 node GUID<br>
        ------              ----------------<br>
        mlx4_0              24be05ffffa57160<br>
        scif0               4c79bafffe4402b6<br>
    $ ibv_devinfo<br>
    hca_id: mlx4_0<br>
            transport:                      InfiniBand (0)<br>
            fw_ver:                         2.11.1250<br>
            node_guid:                      24be:05ff:ffa5:7160<br>
            sys_image_guid:                 24be:05ff:ffa5:7163<br>
            vendor_id:                      0x02c9<br>
            vendor_part_id:                 4099<br>
            hw_ver:                         0x0<br>
            phys_port_cnt:                  2<br>
                    port:   1<br>
                            state:                  PORT_ACTIVE (4)<br>
                            max_mtu:                2048 (4)<br>
                            active_mtu:             2048 (4)<br>
                            sm_lid:                 8<br>
                            port_lid:               86<br>
                            port_lmc:               0x00<br>
                            link_layer:             InfiniBand<br>
    <br>
                    port:   2<br>
                            state:                  PORT_DOWN (1)<br>
                            max_mtu:                2048 (4)<br>
                            active_mtu:             2048 (4)<br>
                            sm_lid:                 0<br>
                            port_lid:               0<br>
                            port_lmc:               0x00<br>
                            link_layer:             InfiniBand<br>
    <br>
    hca_id: scif0<br>
            transport:                      SCIF (2)<br>
            fw_ver:                         0.0.1<br>
            node_guid:                      4c79:baff:fe44:02b6<br>
            sys_image_guid:                 4c79:baff:fe44:02b6<br>
            vendor_id:                      0x8086<br>
            vendor_part_id:                 0<br>
            hw_ver:                         0x1<br>
            phys_port_cnt:                  1<br>
                    port:   1<br>
                            state:                  PORT_ACTIVE (4)<br>
                            max_mtu:                4096 (5)<br>
                            active_mtu:             4096 (5)<br>
                            sm_lid:                 1<br>
                            port_lid:               1001<br>
                            port_lmc:               0x00<br>
                            link_layer:             SCIF<br>
    <br>
    $ shmemrun -x
    LD_PRELOAD=/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so
    -H mic1 -N 2 --mca spml yoda --mca btl sm,self,tcp --mca
    plm_base_verbose 5 --mca memheap_base_verbose 100 $PWD/mic.out<br>
    [atl1-01-mic0:191024] mca:base:select:(  plm) Querying component
    [rsh]<br>
    [atl1-01-mic0:191024] [[INVALID],INVALID] plm:rsh_lookup on agent
    ssh : rsh path NULL<br>
    [atl1-01-mic0:191024] mca:base:select:(  plm) Query of component
    [rsh] set priority to 10<br>
    [atl1-01-mic0:191024] mca:base:select:(  plm) Querying component
    [isolated]<br>
    [atl1-01-mic0:191024] mca:base:select:(  plm) Query of component
    [isolated] set priority to 0<br>
    [atl1-01-mic0:191024] mca:base:select:(  plm) Querying component
    [slurm]<br>
    [atl1-01-mic0:191024] mca:base:select:(  plm) Skipping component
    [slurm]. Query failed to return a module<br>
    [atl1-01-mic0:191024] mca:base:select:(  plm) Selected component
    [rsh]<br>
    [atl1-01-mic0:191024] plm:base:set_hnp_name: initial bias 191024
    nodename hash 4121194178<br>
    [atl1-01-mic0:191024] plm:base:set_hnp_name: final jobfam 29012<br>
    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh_setup on agent ssh : rsh
    path NULL<br>
    [atl1-01-mic0:191024] [[29012,0],0] plm:base:receive start comm<br>
    [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_job<br>
    [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_vm<br>
    [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_vm creating map<br>
    [atl1-01-mic0:191024] [[29012,0],0] setup:vm: working unmanaged
    allocation<br>
    [atl1-01-mic0:191024] [[29012,0],0] using dash_host<br>
    [atl1-01-mic0:191024] [[29012,0],0] checking node mic1<br>
    [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_vm add new daemon
    [[29012,0],1]<br>
    [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_vm assigning new
    daemon [[29012,0],1] to node mic1<br>
    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: launching vm<br>
    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: local shell: 0 (bash)<br>
    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: assuming same remote
    shell as local shell<br>
    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: remote shell: 0 (bash)<br>
    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: final template argv:<br>
            /usr/bin/ssh &lt;template&gt;    
    PATH=/home/ariebs/mic/mpi-nightly/bin:$PATH ; export PATH ;
    LD_LIBRARY_PATH=/home/ariebs/mic/mpi-nightly/lib:$LD_LIBRARY_PATH ;
    export LD_LIBRARY_PATH ;
    DYLD_LIBRARY_PATH=/home/ariebs/mic/mpi-nightly/lib:$DYLD_LIBRARY_PATH
    ; export DYLD_LIBRARY_PATH ;  
    /home/ariebs/mic/mpi-nightly/bin/orted --hnp-topo-sig
    0N:1S:0L3:61L2:61L1:61C:244H:k1om -mca ess "env" -mca orte_ess_jobid
    "1901330432" -mca orte_ess_vpid "&lt;template&gt;" -mca
    orte_ess_num_procs "2" -mca orte_hnp_uri
    "1901330432.0;usock;tcp://16.113.180.125,192.0.0.121:34249;ud://2359370.86.1"
    --tree-spawn --mca spml "yoda" --mca btl "sm,self,tcp" --mca
    plm_base_verbose "5" --mca memheap_base_verbose "100" -mca plm "rsh"
    -mca rmaps_ppr_n_pernode "2"<br>
    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh:launch daemon 0 not a
    child of mine<br>
    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: adding node mic1 to
    launch list<br>
    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: activating launch event<br>
    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: recording launch of
    daemon [[29012,0],1]<br>
    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: executing:
    (/usr/bin/ssh) [/usr/bin/ssh mic1    
    PATH=/home/ariebs/mic/mpi-nightly/bin:$PATH ; export PATH ;
    LD_LIBRARY_PATH=/home/ariebs/mic/mpi-nightly/lib:$LD_LIBRARY_PATH ;
    export LD_LIBRARY_PATH ;
    DYLD_LIBRARY_PATH=/home/ariebs/mic/mpi-nightly/lib:$DYLD_LIBRARY_PATH
    ; export DYLD_LIBRARY_PATH ;  
    /home/ariebs/mic/mpi-nightly/bin/orted --hnp-topo-sig
    0N:1S:0L3:61L2:61L1:61C:244H:k1om -mca ess "env" -mca orte_ess_jobid
    "1901330432" -mca orte_ess_vpid 1 -mca orte_ess_num_procs "2" -mca
    orte_hnp_uri
    "1901330432.0;usock;tcp://16.113.180.125,192.0.0.121:34249;ud://2359370.86.1"
    --tree-spawn --mca spml "yoda" --mca btl "sm,self,tcp" --mca
    plm_base_verbose "5" --mca memheap_base_verbose "100" -mca plm "rsh"
    -mca rmaps_ppr_n_pernode "2"]<br>
    /home/ariebs/mic/mpi-nightly/bin/orted: error while loading shared
    libraries: libimf.so: cannot open shared object file: No such file
    or directory<br>
    [atl1-01-mic0:191024] [[29012,0],0] daemon 1 failed with status 127<br>
    [atl1-01-mic0:191024] [[29012,0],0] plm:base:orted_cmd sending
    orted_exit commands<br>
--------------------------------------------------------------------------<br>
    ORTE was unable to reliably start one or more daemons.<br>
    This usually is caused by:<br>
    <br>
    * not finding the required libraries and/or binaries on<br>
      one or more nodes. Please check your PATH and LD_LIBRARY_PATH<br>
      settings, or configure OMPI with
    --enable-orterun-prefix-by-default<br>
    <br>
    * lack of authority to execute on one or more specified nodes.<br>
      Please verify your allocation and authorities.<br>
    <br>
    * the inability to write startup files into /tmp
    (--tmpdir/orte_tmpdir_base).<br>
      Please check with your sys admin to determine the correct location
    to use.<br>
    <br>
    *  compilation of the orted with dynamic libraries when static are
    required<br>
      (e.g., on Cray). Please check your configure cmd line and consider
    using<br>
      one of the contrib/platform definitions for your system type.<br>
    <br>
    * an inability to create a connection back to mpirun due to a<br>
      lack of common network interfaces and/or no route found between<br>
      them. Please check network connectivity (including firewalls<br>
      and network routing requirements).<br>
--------------------------------------------------------------------------<br>
    [atl1-01-mic0:191024] [[29012,0],0] plm:base:receive stop comm<br>
    <br>
    <br>
    <br>
    <div class="moz-cite-prefix">On 04/13/2015 08:50 AM, Andy Riebs
      wrote:<br>
    </div>
    <blockquote cite="mid:552BBB79.2070409@hp.com" type="cite">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      Hi Ralph,<br>
      <br>
      Here are the results with last night's "master" nightly,
      openmpi-dev-1487-g9c6d452.tar.bz2, and adding the
      memheap_base_verbose option (yes, it looks like the "ERROR_LOG"
      problem has gone away):<br>
      <br>
      $ cat /proc/sys/kernel/shmmax<br>
      33554432<br>
      $ cat /proc/sys/kernel/shmall<br>
      2097152<br>
      $ cat /proc/sys/kernel/shmmni<br>
      4096<br>
      $ export SHMEM_SYMMETRIC_HEAP=1M<br>
      $ shmemrun -H localhost -N 2 --mca sshmem mmap  --mca
      plm_base_verbose 5 --mca memheap_base_verbose 100 $PWD/mic.out<br>
      [atl1-01-mic0:190439] mca:base:select:(  plm) Querying component
      [rsh]<br>
      [atl1-01-mic0:190439] [[INVALID],INVALID] plm:rsh_lookup on agent
      ssh : rsh path NULL<br>
      [atl1-01-mic0:190439] mca:base:select:(  plm) Query of component
      [rsh] set priority to 10<br>
      [atl1-01-mic0:190439] mca:base:select:(  plm) Querying component
      [isolated]<br>
      [atl1-01-mic0:190439] mca:base:select:(  plm) Query of component
      [isolated] set priority to 0<br>
      [atl1-01-mic0:190439] mca:base:select:(  plm) Querying component
      [slurm]<br>
      [atl1-01-mic0:190439] mca:base:select:(  plm) Skipping component
      [slurm]. Query failed to return a module<br>
      [atl1-01-mic0:190439] mca:base:select:(  plm) Selected component
      [rsh]<br>
      [atl1-01-mic0:190439] plm:base:set_hnp_name: initial bias 190439
      nodename hash 4121194178<br>
      [atl1-01-mic0:190439] plm:base:set_hnp_name: final jobfam 31875<br>
      [atl1-01-mic0:190439] [[31875,0],0] plm:rsh_setup on agent ssh :
      rsh path NULL<br>
      [atl1-01-mic0:190439] [[31875,0],0] plm:base:receive start comm<br>
      [atl1-01-mic0:190439] [[31875,0],0] plm:base:setup_job<br>
      [atl1-01-mic0:190439] [[31875,0],0] plm:base:setup_vm<br>
      [atl1-01-mic0:190439] [[31875,0],0] plm:base:setup_vm creating map<br>
      [atl1-01-mic0:190439] [[31875,0],0] setup:vm: working unmanaged
      allocation<br>
      [atl1-01-mic0:190439] [[31875,0],0] using dash_host<br>
      [atl1-01-mic0:190439] [[31875,0],0] checking node atl1-01-mic0<br>
      [atl1-01-mic0:190439] [[31875,0],0] ignoring myself<br>
      [atl1-01-mic0:190439] [[31875,0],0] plm:base:setup_vm only HNP in
      allocation<br>
      [atl1-01-mic0:190439] [[31875,0],0] complete_setup on job
      [31875,1]<br>
      [atl1-01-mic0:190439] [[31875,0],0] plm:base:launch_apps for job
      [31875,1]<br>
      [atl1-01-mic0:190439] [[31875,0],0] plm:base:launch wiring up iof
      for job [31875,1]<br>
      [atl1-01-mic0:190439] [[31875,0],0] plm:base:launch [31875,1]
      registered<br>
      [atl1-01-mic0:190439] [[31875,0],0] plm:base:launch job [31875,1]
      is not a dynamic spawn<br>
      [atl1-01-mic0:190441] mca: base: components_register: registering
      memheap components<br>
      [atl1-01-mic0:190441] mca: base: components_register: found loaded
      component buddy<br>
      [atl1-01-mic0:190441] mca: base: components_register: component
      buddy has no register or open function<br>
      [atl1-01-mic0:190442] mca: base: components_register: registering
      memheap components<br>
      [atl1-01-mic0:190442] mca: base: components_register: found loaded
      component buddy<br>
      [atl1-01-mic0:190442] mca: base: components_register: component
      buddy has no register or open function<br>
      [atl1-01-mic0:190442] mca: base: components_register: found loaded
      component ptmalloc<br>
      [atl1-01-mic0:190442] mca: base: components_register: component
      ptmalloc has no register or open function<br>
      [atl1-01-mic0:190441] mca: base: components_register: found loaded
      component ptmalloc<br>
      [atl1-01-mic0:190441] mca: base: components_register: component
      ptmalloc has no register or open function<br>
      [atl1-01-mic0:190441] mca: base: components_open: opening memheap
      components<br>
      [atl1-01-mic0:190441] mca: base: components_open: found loaded
      component buddy<br>
      [atl1-01-mic0:190441] mca: base: components_open: component buddy
      open function successful<br>
      [atl1-01-mic0:190441] mca: base: components_open: found loaded
      component ptmalloc<br>
      [atl1-01-mic0:190441] mca: base: components_open: component
      ptmalloc open function successful<br>
      [atl1-01-mic0:190442] mca: base: components_open: opening memheap
      components<br>
      [atl1-01-mic0:190442] mca: base: components_open: found loaded
      component buddy<br>
      [atl1-01-mic0:190442] mca: base: components_open: component buddy
      open function successful<br>
      [atl1-01-mic0:190442] mca: base: components_open: found loaded
      component ptmalloc<br>
      [atl1-01-mic0:190442] mca: base: components_open: component
      ptmalloc open function successful<br>
      [atl1-01-mic0:190442] base/memheap_base_alloc.c:38 -
      mca_memheap_base_alloc_init() Memheap alloc memory: 270532608
      byte(s), 1 segments by method: 1<br>
      [atl1-01-mic0:190441] base/memheap_base_alloc.c:38 -
      mca_memheap_base_alloc_init() Memheap alloc memory: 270532608
      byte(s), 1 segments by method: 1<br>
      [atl1-01-mic0:190442] base/memheap_base_static.c:205 -
      _load_segments() add: 00600000-00601000 rw-p 00000000 00:11
      6029314                           
      /home/ariebs/bench/hello/mic.out<br>
      [atl1-01-mic0:190441] base/memheap_base_static.c:205 -
      _load_segments() add: 00600000-00601000 rw-p 00000000 00:11
      6029314                           
      /home/ariebs/bench/hello/mic.out<br>
      [atl1-01-mic0:190442] base/memheap_base_static.c:75 -
      mca_memheap_base_static_init() Memheap static memory: 3824
      byte(s), 2 segments<br>
      [atl1-01-mic0:190442] base/memheap_base_register.c:39 -
      mca_memheap_base_reg() register seg#00: 0x0xff000000 -
      0x0x10f200000 270532608 bytes type=0x1 id=0xFFFFFFFF<br>
      [atl1-01-mic0:190441] base/memheap_base_static.c:75 -
      mca_memheap_base_static_init() Memheap static memory: 3824
      byte(s), 2 segments<br>
      [atl1-01-mic0:190441] base/memheap_base_register.c:39 -
      mca_memheap_base_reg() register seg#00: 0x0xff000000 -
      0x0x10f200000 270532608 bytes type=0x1 id=0xFFFFFFFF<br>
      [atl1-01-mic0:190442] Error base/memheap_base_register.c:130 -
      _reg_segment() Failed to register segment<br>
      [atl1-01-mic0:190441] Error base/memheap_base_register.c:130 -
      _reg_segment() Failed to register segment<br>
      [atl1-01-mic0:190442] Error: pshmem_init.c:61 - shmem_init() SHMEM
      failed to initialize - aborting<br>
      [atl1-01-mic0:190441] Error: pshmem_init.c:61 - shmem_init() SHMEM
      failed to initialize - aborting<br>
--------------------------------------------------------------------------<br>
      It looks like SHMEM_INIT failed for some reason; your parallel
      process is<br>
      likely to abort.  There are many reasons that a parallel process
      can<br>
      fail during SHMEM_INIT; some of which are due to configuration or
      environment<br>
      problems.  This failure appears to be an internal failure; here's
      some<br>
      additional information (which may only be relevant to an Open
      SHMEM<br>
      developer):<br>
      <br>
        mca_memheap_base_select() failed<br>
        --&gt; Returned "Error" (-1) instead of "Success" (0)<br>
--------------------------------------------------------------------------<br>
--------------------------------------------------------------------------<br>
      SHMEM_ABORT was invoked on rank 0 (pid 190441, host=atl1-01-mic0)
      with errorcode -1.<br>
--------------------------------------------------------------------------<br>
--------------------------------------------------------------------------<br>
      A SHMEM process is aborting at a time when it cannot guarantee
      that all<br>
      of its peer processes in the job will be killed properly.  You
      should<br>
      double check that everything has shut down cleanly.<br>
      <br>
      Local host: atl1-01-mic0<br>
      PID:        190441<br>
--------------------------------------------------------------------------<br>
      -------------------------------------------------------<br>
      Primary job  terminated normally, but 1 process returned<br>
      a non-zero exit code.. Per user-direction, the job has been
      aborted.<br>
      -------------------------------------------------------<br>
      [atl1-01-mic0:190439] [[31875,0],0] plm:base:orted_cmd sending
      orted_exit commands<br>
--------------------------------------------------------------------------<br>
      shmemrun detected that one or more processes exited with non-zero
      status, thus causing<br>
      the job to be terminated. The first process to do so was:<br>
      <br>
        Process name: [[31875,1],0]<br>
        Exit code:    255<br>
--------------------------------------------------------------------------<br>
      [atl1-01-mic0:190439] 1 more process has sent help message
      help-shmem-runtime.txt / shmem_init:startup:internal-failure<br>
      [atl1-01-mic0:190439] Set MCA parameter "orte_base_help_aggregate"
      to 0 to see all help / error messages<br>
      [atl1-01-mic0:190439] 1 more process has sent help message
      help-shmem-api.txt / shmem-abort<br>
      [atl1-01-mic0:190439] 1 more process has sent help message
      help-shmem-runtime.txt / oshmem shmem abort:cannot guarantee all
      killed<br>
      [atl1-01-mic0:190439] [[31875,0],0] plm:base:receive stop comm<br>
      <br>
      <br>
      <br>
      <div class="moz-cite-prefix">On 04/12/2015 03:09 PM, Ralph Castain
        wrote:<br>
      </div>
      <blockquote
        cite="mid:510B2D56-F191-4514-AECB-A1BD7BD392CA@open-mpi.org"
        type="cite"> Sorry about that - I hadn’t brought it over to the
        1.8 branch yet. I’ve done so now, which means the ERROR_LOG
        shouldn’t show up any more. It won’t fix the memheap problem,
        though.
        <div class=""><br class="">
        </div>
        <div class="">You might try adding “--mca memheap_base_verbose
          100” to your cmd line so we can see why none of the memheap
          components are being selected.</div>
        <div class=""><br class="">
        </div>
        <div class=""><br class="">
          <div>
            <blockquote type="cite" class="">
              <div class="">On Apr 12, 2015, at 11:30 AM, Andy Riebs
                &lt;<a moz-do-not-send="true"
                  href="mailto:andy.riebs@hp.com" class="">andy.riebs@hp.com</a>&gt;
                wrote:</div>
              <br class="Apple-interchange-newline">
              <div class="">
                <div bgcolor="#FFFFFF" text="#000000" class=""> Hi
                  Ralph,<br class="">
                  <br class="">
                  Here's the output with <a moz-do-not-send="true"
href="https://www.open-mpi.org/nightly/v1.8/openmpi-v1.8.4-202-gc2da6a5.tar.bz2"
                    class="">openmpi-v1.8.4-202-gc2da6a5.tar.bz2</a>:<br
                    class="">
                  <br class="">
                  $ shmemrun -H localhost -N 2 --mca sshmem mmap  --mca
                  plm_base_verbose 5 $PWD/mic.out<br class="">
                  [atl1-01-mic0:190189] mca:base:select:(  plm) Querying
                  component [rsh]<br class="">
                  [atl1-01-mic0:190189] [[INVALID],INVALID]
                  plm:rsh_lookup on agent ssh : rsh path NULL<br
                    class="">
                  [atl1-01-mic0:190189] mca:base:select:(  plm) Query of
                  component [rsh] set priority to 10<br class="">
                  [atl1-01-mic0:190189] mca:base:select:(  plm) Querying
                  component [isolated]<br class="">
                  [atl1-01-mic0:190189] mca:base:select:(  plm) Query of
                  component [isolated] set priority to 0<br class="">
                  [atl1-01-mic0:190189] mca:base:select:(  plm) Querying
                  component [slurm]<br class="">
                  [atl1-01-mic0:190189] mca:base:select:(  plm) Skipping
                  component [slurm]. Query failed to return a module<br
                    class="">
                  [atl1-01-mic0:190189] mca:base:select:(  plm) Selected
                  component [rsh]<br class="">
                  [atl1-01-mic0:190189] plm:base:set_hnp_name: initial
                  bias 190189 nodename hash 4121194178<br class="">
                  [atl1-01-mic0:190189] plm:base:set_hnp_name: final
                  jobfam 32137<br class="">
                  [atl1-01-mic0:190189] [[32137,0],0] plm:rsh_setup on
                  agent ssh : rsh path NULL<br class="">
                  [atl1-01-mic0:190189] [[32137,0],0] plm:base:receive
                  start comm<br class="">
                  [atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_job<br
                    class="">
                  [atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_vm<br
                    class="">
                  [atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_vm
                  creating map<br class="">
                  [atl1-01-mic0:190189] [[32137,0],0] setup:vm: working
                  unmanaged allocation<br class="">
                  [atl1-01-mic0:190189] [[32137,0],0] using dash_host<br
                    class="">
                  [atl1-01-mic0:190189] [[32137,0],0] checking node
                  atl1-01-mic0<br class="">
                  [atl1-01-mic0:190189] [[32137,0],0] ignoring myself<br
                    class="">
                  [atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_vm
                  only HNP in allocation<br class="">
                  [atl1-01-mic0:190189] [[32137,0],0] complete_setup on
                  job [32137,1]<br class="">
                  [atl1-01-mic0:190189] [[32137,0],0] ORTE_ERROR_LOG:
                  Not found in file base/plm_base_launch_support.c at
                  line 440<br class="">
                  [atl1-01-mic0:190189] [[32137,0],0]
                  plm:base:launch_apps for job [32137,1]<br class="">
                  [atl1-01-mic0:190189] [[32137,0],0] plm:base:launch
                  wiring up iof for job [32137,1]<br class="">
                  [atl1-01-mic0:190189] [[32137,0],0] plm:base:launch
                  [32137,1] registered<br class="">
                  [atl1-01-mic0:190189] [[32137,0],0] plm:base:launch
                  job [32137,1] is not a dynamic spawn<br class="">
--------------------------------------------------------------------------<br
                    class="">
                  It looks like SHMEM_INIT failed for some reason; your
                  parallel process is<br class="">
                  likely to abort.  There are many reasons that a
                  parallel process can<br class="">
                  fail during SHMEM_INIT; some of which are due to
                  configuration or environment<br class="">
                  problems.  This failure appears to be an internal
                  failure; here's some<br class="">
                  additional information (which may only be relevant to
                  an Open SHMEM<br class="">
                  developer):<br class="">
                  <br class="">
                    mca_memheap_base_select() failed<br class="">
                    --&gt; Returned "Error" (-1) instead of "Success"
                  (0)<br class="">
--------------------------------------------------------------------------<br
                    class="">
                  [atl1-01-mic0:190191] Error: pshmem_init.c:61 -
                  shmem_init() SHMEM failed to initialize - aborting<br
                    class="">
                  [atl1-01-mic0:190192] Error: pshmem_init.c:61 -
                  shmem_init() SHMEM failed to initialize - aborting<br
                    class="">
--------------------------------------------------------------------------<br
                    class="">
                  SHMEM_ABORT was invoked on rank 1 (pid 190192,
                  host=atl1-01-mic0) with errorcode -1.<br class="">
--------------------------------------------------------------------------<br
                    class="">
--------------------------------------------------------------------------<br
                    class="">
                  A SHMEM process is aborting at a time when it cannot
                  guarantee that all<br class="">
                  of its peer processes in the job will be killed
                  properly.  You should<br class="">
                  double check that everything has shut down cleanly.<br
                    class="">
                  <br class="">
                  Local host: atl1-01-mic0<br class="">
                  PID:        190192<br class="">
--------------------------------------------------------------------------<br
                    class="">
-------------------------------------------------------<br class="">
                  Primary job  terminated normally, but 1 process
                  returned<br class="">
                  a non-zero exit code.. Per user-direction, the job has
                  been aborted.<br class="">
-------------------------------------------------------<br class="">
                  [atl1-01-mic0:190189] [[32137,0],0] plm:base:orted_cmd
                  sending orted_exit commands<br class="">
--------------------------------------------------------------------------<br
                    class="">
                  shmemrun detected that one or more processes exited
                  with non-zero status, thus causing<br class="">
                  the job to be terminated. The first process to do so
                  was:<br class="">
                  <br class="">
                    Process name: [[32137,1],0]<br class="">
                    Exit code:    255<br class="">
--------------------------------------------------------------------------<br
                    class="">
                  [atl1-01-mic0:190189] 1 more process has sent help
                  message help-shmem-runtime.txt /
                  shmem_init:startup:internal-failure<br class="">
                  [atl1-01-mic0:190189] Set MCA parameter
                  "orte_base_help_aggregate" to 0 to see all help /
                  error messages<br class="">
                  [atl1-01-mic0:190189] 1 more process has sent help
                  message help-shmem-api.txt / shmem-abort<br class="">
                  [atl1-01-mic0:190189] 1 more process has sent help
                  message help-shmem-runtime.txt / oshmem shmem
                  abort:cannot guarantee all killed<br class="">
                  [atl1-01-mic0:190189] [[32137,0],0] plm:base:receive
                  stop comm<br class="">
                  <br class="">
                  <br class="">
                  <div class="moz-cite-prefix">On 04/11/2015 07:41 PM,
                    Ralph Castain wrote:<br class="">
                  </div>
                  <blockquote
                    cite="mid:0A4ECE92-D50F-4E2A-9380-C367B074766A@open-mpi.org"
                    type="cite" class=""> Got it - thanks. I fixed that
                    ERROR_LOG issue (I think- please verify). I suspect
                    the memheap issue relates to something else, but I
                    probably need to let the OSHMEM folks comment on it
                    <div class=""><br class="">
                    </div>
                    <div class=""><br class="">
                      <div class="">
                        <blockquote type="cite" class="">
                          <div class="">On Apr 11, 2015, at 9:52 AM,
                            Andy Riebs &lt;<a moz-do-not-send="true"
                              href="mailto:andy.riebs@hp.com" class="">andy.riebs@hp.com</a>&gt;

                            wrote:</div>
                          <br class="Apple-interchange-newline">
                          <div class="">
                            <div bgcolor="#FFFFFF" text="#000000"
                              class=""> Everything is built on the Xeon
                              side, with the icc "-mmic" switch. I then
                              ssh into one of the PHIs, and run shmemrun
                              from there.<br class="">
                              <br class="">
                              <br class="">
                              <div class="moz-cite-prefix">On 04/11/2015
                                12:00 PM, Ralph Castain wrote:<br
                                  class="">
                              </div>
                              <blockquote
                                cite="mid:D448D6B8-E6D8-4A85-8835-AB2A3DA53FCC@open-mpi.org"
                                type="cite" class=""> Let me try to
                                understand the setup a little better.
                                Are you running shmemrun on the PHI
                                itself? Or is it running on the host
                                processor, and you are trying to spawn a
                                process onto the Phi?
                                <div class=""><br class="">
                                </div>
                                <div class=""><br class="">
                                  <div class="">
                                    <blockquote type="cite" class="">
                                      <div class="">On Apr 11, 2015, at
                                        7:55 AM, Andy Riebs &lt;<a
                                          moz-do-not-send="true"
                                          href="mailto:andy.riebs@hp.com"
                                          class="">andy.riebs@hp.com</a>&gt;


                                        wrote:</div>
                                      <br
                                        class="Apple-interchange-newline">
                                      <div class="">
                                        <div bgcolor="#FFFFFF"
                                          text="#000000" class=""> Hi
                                          Ralph,<br class="">
                                          <br class="">
                                          Yes, this is attempting to get
                                          OSHMEM to run on the Phi.<br
                                            class="">
                                          <br class="">
                                          I grabbed
                                          openmpi-dev-1484-g033418f.tar.bz2
                                          and configured it with<br
                                            class="">
                                          <br class="">
                                          $ ./configure
                                          --prefix=/home/ariebs/mic/mpi-nightly   
                                          CC=icc -mmic CXX=icpc -mmic   
                                          \<br class="">
                                             
                                          --build=x86_64-unknown-linux-gnu
                                          --host=x86_64-k1om-linux    \<br
                                            class="">
                                               AR=x86_64-k1om-linux-ar
                                          RANLIB=x86_64-k1om-linux-ranlib 
                                          LD=x86_64-k1om-linux-ld   \<br
                                            class="">
                                              
                                          --enable-mpirun-prefix-by-default
                                          --disable-io-romio    
                                          --disable-mpi-fortran    \<br
                                            class="">
                                               --enable-debug    
                                          --enable-mca-no-build=btl-usnic,btl-openib,common-verbs,oob-ud<br
                                            class="">
                                          <br class="">
                                          (Note that I had to add
                                          "oob-ud" to the
                                          "--enable-mca-no-build"
                                          option, as the build
                                          complained that mca oob/ud
                                          needed mca common-verbs.)<br
                                            class="">
                                          <br class="">
                                          With that configuration, here
                                          is what I am seeing now...<br
                                            class="">
                                          <br class="">
                                          $ export
                                          SHMEM_SYMMETRIC_HEAP_SIZE=1G<br
                                            class="">
                                          $ shmemrun -H localhost -N 2
                                          --mca sshmem mmap  --mca
                                          plm_base_verbose 5
                                          $PWD/mic.out<br class="">
                                          [atl1-01-mic0:189895]
                                          mca:base:select:(  plm)
                                          Querying component [rsh]<br
                                            class="">
                                          [atl1-01-mic0:189895]
                                          [[INVALID],INVALID]
                                          plm:rsh_lookup on agent ssh :
                                          rsh path NULL<br class="">
                                          [atl1-01-mic0:189895]
                                          mca:base:select:(  plm) Query
                                          of component [rsh] set
                                          priority to 10<br class="">
                                          [atl1-01-mic0:189895]
                                          mca:base:select:(  plm)
                                          Querying component [isolated]<br
                                            class="">
                                          [atl1-01-mic0:189895]
                                          mca:base:select:(  plm) Query
                                          of component [isolated] set
                                          priority to 0<br class="">
                                          [atl1-01-mic0:189895]
                                          mca:base:select:(  plm)
                                          Querying component [slurm]<br
                                            class="">
                                          [atl1-01-mic0:189895]
                                          mca:base:select:(  plm)
                                          Skipping component [slurm].
                                          Query failed to return a
                                          module<br class="">
                                          [atl1-01-mic0:189895]
                                          mca:base:select:(  plm)
                                          Selected component [rsh]<br
                                            class="">
                                          [atl1-01-mic0:189895]
                                          plm:base:set_hnp_name: initial
                                          bias 189895 nodename hash
                                          4121194178<br class="">
                                          [atl1-01-mic0:189895]
                                          plm:base:set_hnp_name: final
                                          jobfam 32419<br class="">
                                          [atl1-01-mic0:189895]
                                          [[32419,0],0] plm:rsh_setup on
                                          agent ssh : rsh path NULL<br
                                            class="">
                                          [atl1-01-mic0:189895]
                                          [[32419,0],0] plm:base:receive
                                          start comm<br class="">
                                          [atl1-01-mic0:189895]
                                          [[32419,0],0]
                                          plm:base:setup_job<br class="">
                                          [atl1-01-mic0:189895]
                                          [[32419,0],0]
                                          plm:base:setup_vm<br class="">
                                          [atl1-01-mic0:189895]
                                          [[32419,0],0]
                                          plm:base:setup_vm creating map<br
                                            class="">
                                          [atl1-01-mic0:189895]
                                          [[32419,0],0] setup:vm:
                                          working unmanaged allocation<br
                                            class="">
                                          [atl1-01-mic0:189895]
                                          [[32419,0],0] using dash_host<br
                                            class="">
                                          [atl1-01-mic0:189895]
                                          [[32419,0],0] checking node
                                          atl1-01-mic0<br class="">
                                          [atl1-01-mic0:189895]
                                          [[32419,0],0] ignoring myself<br
                                            class="">
                                          [atl1-01-mic0:189895]
                                          [[32419,0],0]
                                          plm:base:setup_vm only HNP in
                                          allocation<br class="">
                                          [atl1-01-mic0:189895]
                                          [[32419,0],0] complete_setup
                                          on job [32419,1]<br class="">
                                          [atl1-01-mic0:189895]
                                          [[32419,0],0] ORTE_ERROR_LOG:
                                          Not found in file
                                          base/plm_base_launch_support.c
                                          at line 440<br class="">
                                          [atl1-01-mic0:189895]
                                          [[32419,0],0]
                                          plm:base:launch_apps for job
                                          [32419,1]<br class="">
                                          [atl1-01-mic0:189895]
                                          [[32419,0],0] plm:base:launch
                                          wiring up iof for job
                                          [32419,1]<br class="">
                                          [atl1-01-mic0:189895]
                                          [[32419,0],0] plm:base:launch
                                          [32419,1] registered<br
                                            class="">
                                          [atl1-01-mic0:189895]
                                          [[32419,0],0] plm:base:launch
                                          job [32419,1] is not a dynamic
                                          spawn<br class="">
                                          [atl1-01-mic0:189899] Error:
                                          pshmem_init.c:61 -
                                          shmem_init() SHMEM failed to
                                          initialize - aborting<br
                                            class="">
                                          [atl1-01-mic0:189898] Error:
                                          pshmem_init.c:61 -
                                          shmem_init() SHMEM failed to
                                          initialize - aborting<br
                                            class="">
--------------------------------------------------------------------------<br
                                            class="">
                                          It looks like SHMEM_INIT
                                          failed for some reason; your
                                          parallel process is<br
                                            class="">
                                          likely to abort.  There are
                                          many reasons that a parallel
                                          process can<br class="">
                                          fail during SHMEM_INIT; some
                                          of which are due to
                                          configuration or environment<br
                                            class="">
                                          problems.  This failure
                                          appears to be an internal
                                          failure; here's some<br
                                            class="">
                                          additional information (which
                                          may only be relevant to an
                                          Open SHMEM<br class="">
                                          developer):<br class="">
                                          <br class="">
                                            mca_memheap_base_select()
                                          failed<br class="">
                                            --&gt; Returned "Error" (-1)
                                          instead of "Success" (0)<br
                                            class="">
--------------------------------------------------------------------------<br
                                            class="">
--------------------------------------------------------------------------<br
                                            class="">
                                          SHMEM_ABORT was invoked on
                                          rank 1 (pid 189899,
                                          host=atl1-01-mic0) with
                                          errorcode -1.<br class="">
--------------------------------------------------------------------------<br
                                            class="">
--------------------------------------------------------------------------<br
                                            class="">
                                          A SHMEM process is aborting at
                                          a time when it cannot
                                          guarantee that all<br class="">
                                          of its peer processes in the
                                          job will be killed properly. 
                                          You should<br class="">
                                          double check that everything
                                          has shut down cleanly.<br
                                            class="">
                                          <br class="">
                                          Local host: atl1-01-mic0<br
                                            class="">
                                          PID:        189899<br class="">
--------------------------------------------------------------------------<br
                                            class="">
-------------------------------------------------------<br class="">
                                          Primary job  terminated
                                          normally, but 1 process
                                          returned<br class="">
                                          a non-zero exit code.. Per
                                          user-direction, the job has
                                          been aborted.<br class="">
-------------------------------------------------------<br class="">
                                          [atl1-01-mic0:189895]
                                          [[32419,0],0]
                                          plm:base:orted_cmd sending
                                          orted_exit commands<br
                                            class="">
--------------------------------------------------------------------------<br
                                            class="">
                                          shmemrun detected that one or
                                          more processes exited with
                                          non-zero status, thus causing<br
                                            class="">
                                          the job to be terminated. The
                                          first process to do so was:<br
                                            class="">
                                          <br class="">
                                            Process name: [[32419,1],1]<br
                                            class="">
                                            Exit code:    255<br
                                            class="">
--------------------------------------------------------------------------<br
                                            class="">
                                          [atl1-01-mic0:189895] 1 more
                                          process has sent help message
                                          help-shmem-runtime.txt /
                                          shmem_init:startup:internal-failure<br
                                            class="">
                                          [atl1-01-mic0:189895] Set MCA
                                          parameter
                                          "orte_base_help_aggregate" to
                                          0 to see all help / error
                                          messages<br class="">
                                          [atl1-01-mic0:189895] 1 more
                                          process has sent help message
                                          help-shmem-api.txt /
                                          shmem-abort<br class="">
                                          [atl1-01-mic0:189895] 1 more
                                          process has sent help message
                                          help-shmem-runtime.txt /
                                          oshmem shmem abort:cannot
                                          guarantee all killed<br
                                            class="">
                                          [atl1-01-mic0:189895]
                                          [[32419,0],0] plm:base:receive
                                          stop comm<br class="">
                                          <br class="">
                                          <br class="">
                                          <br class="">
                                          <br class="">
                                          <div class="moz-cite-prefix">On

                                            04/10/2015 06:37 PM, Ralph
                                            Castain wrote:<br class="">
                                          </div>
                                          <blockquote
                                            cite="mid:2E13CA6E-9B06-472F-A315-827348668ECF@open-mpi.org"
                                            type="cite" class=""> Andy -
                                            could you please try the
                                            current 1.8.5 nightly
                                            tarball and see if it helps?
                                            The error log indicates that
                                            it is failing to get the
                                            topology from some daemon,
                                            I�m assuming the one on the
                                            Phi?
                                            <div class=""><br class="">
                                            </div>
                                            <div class="">You might also
                                              add �enable-debug to that
                                              configure line and then
                                              put -mca plm_base_verbose
                                              on the shmemrun cmd to get
                                              more help</div>
                                            <div class=""><br class="">
                                            </div>
                                            <div class=""><br class="">
                                              <div class="">
                                                <blockquote type="cite"
                                                  class="">
                                                  <div class="">On Apr
                                                    10, 2015, at 11:55
                                                    AM, Andy Riebs &lt;<a
moz-do-not-send="true" href="mailto:andy.riebs@hp.com" class="">andy.riebs@hp.com</a>&gt;

                                                    wrote:</div>
                                                  <br
                                                    class="Apple-interchange-newline">
                                                  <div class="">
                                                    <div
                                                      bgcolor="#FFFFFF"
                                                      text="#000000"
                                                      class=""> Summary:
                                                      MPI jobs work
                                                      fine, SHMEM jobs
                                                      work just often
                                                      enough to be
                                                      tantalizing, on an
                                                      Intel Xeon Phi/MIC
                                                      system.<br
                                                        class="">
                                                      <br class="">
                                                      Longer version<br
                                                        class="">
                                                      <br class="">
                                                      Thanks to the
                                                      excellent write-up
                                                      last June (<a
                                                        moz-do-not-send="true"
class="moz-txt-link-rfc2396E"
                                                        href="https://www.open-mpi.org/community/lists/users/2014/06/24711.php">&lt;https://www.open-mpi.org/community/lists/users/2014/06/24711.php&gt;</a>),





                                                      I have been able
                                                      to build a version
                                                      of Open MPI for
                                                      the Xeon Phi
                                                      coprocessor that
                                                      runs MPI jobs on
                                                      the Phi
                                                      coprocessor with
                                                      no problem, but
                                                      not SHMEM jobs. 
                                                      Just at the point
                                                      where I was about
                                                      to document the
                                                      problems I was
                                                      having with SHMEM,
                                                      my trivial SHMEM
                                                      job worked. And
                                                      then failed when I
                                                      tried to run it
                                                      again, immediately
                                                      afterwards. I have
                                                      a feeling I may be
                                                      in uncharted 
                                                      territory here.<br
                                                        class="">
                                                      <br class="">
                                                      Environment<br
                                                        class="">
                                                      <ul class="">
                                                        <li class="">RHEL

                                                          6.5</li>
                                                        <li class="">Intel

                                                          Composer XE
                                                          2015</li>
                                                        <li class="">Xeon

                                                          Phi/MIC</li>
                                                      </ul>
                                                      ----------------<br
                                                        class="">
                                                      <br class="">
                                                      <br class="">
                                                      Configuration<br
                                                        class="">
                                                      <br class="">
                                                      $ export
                                                      PATH=/usr/linux-k1om-4.7/bin/:$PATH<br
                                                        class="">
                                                      $ source
                                                      /opt/intel/15.0/composer_xe_2015/bin/compilervars.sh
                                                      intel64<br
                                                        class="">
                                                      $ ./configure
                                                      --prefix=/home/ariebs/mic/mpi
                                                      \<br class="">
                                                         CC="icc -mmic"
                                                      CXX="icpc -mmic" \<br
                                                        class="">
                                                        
                                                      --build=x86_64-unknown-linux-gnu
                                                      --host=x86_64-k1om-linux

                                                      \<br class="">
                                                         
                                                      AR=x86_64-k1om-linux-ar
                                                      RANLIB=x86_64-k1om-linux-ranlib


                                                      \<br class="">
                                                         
                                                      LD=x86_64-k1om-linux-ld
                                                      \<br class="">
                                                         
                                                      --enable-mpirun-prefix-by-default
                                                      --disable-io-romio
                                                      \<br class="">
                                                          --disable-vt
                                                      --disable-mpi-fortran
                                                      \<br class="">
                                                         
                                                      --enable-mca-no-build=btl-usnic,btl-openib,common-verbs<br
                                                        class="">
                                                      $ make<br class="">
                                                      $ make install<br
                                                        class="">
                                                      <br class="">
                                                      ----------------<br
                                                        class="">
                                                      <br class="">
                                                      Test program<br
                                                        class="">
                                                      <br class="">
                                                      #include
                                                      &lt;stdio.h&gt;<br
                                                        class="">
                                                      #include
                                                      &lt;stdlib.h&gt;<br
                                                        class="">
                                                      #include
                                                      &lt;shmem.h&gt;<br
                                                        class="">
                                                      int main(int argc,
                                                      char **argv)<br
                                                        class="">
                                                      {<br class="">
                                                              int me,
                                                      num_pe;<br
                                                        class="">
                                                             
                                                      shmem_init();<br
                                                        class="">
                                                              num_pe =
                                                      num_pes();<br
                                                        class="">
                                                              me =
                                                      my_pe();<br
                                                        class="">
                                                             
                                                      printf("Hello
                                                      World from process
                                                      %ld of %ld\n", me,
                                                      num_pe);<br
                                                        class="">
                                                              exit(0);<br
                                                        class="">
                                                      }<br class="">
                                                      <br class="">
                                                      ----------------<br
                                                        class="">
                                                      <br class="">
                                                      Building the
                                                      program<br
                                                        class="">
                                                      <br class="">
                                                      export
                                                      PATH=/home/ariebs/mic/mpi/bin:$PATH<br
                                                        class="">
                                                      export
                                                      PATH=/usr/linux-k1om-4.7/bin/:$PATH<br
                                                        class="">
                                                      source
                                                      /opt/intel/15.0/composer_xe_2015/bin/compilervars.sh
                                                      intel64<br
                                                        class="">
                                                      export
LD_LIBRARY_PATH=/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic:$LD_LIBRARY_PATH<br
                                                        class="">
                                                      <br class="">
                                                      icc -mmic
                                                      -std=gnu99
                                                      -I/home/ariebs/mic/mpi/include
                                                      -pthread \<br
                                                        class="">
                                                              -Wl,-rpath
                                                      -Wl,/home/ariebs/mic/mpi/lib

                                                      -Wl,--enable-new-dtags

                                                      \<br class="">
                                                             
                                                      -L/home/ariebs/mic/mpi/lib
                                                      -loshmem -lmpi
                                                      -lopen-rte
                                                      -lopen-pal \<br
                                                        class="">
                                                              -lm -ldl
                                                      -lutil \<br
                                                        class="">
                                                              -Wl,-rpath
                                                      -Wl,/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic

                                                      \<br class="">
                                                             
                                                      -L/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic
                                                      \<br class="">
                                                              -o
                                                      mic.out 
                                                      shmem_hello.c<br
                                                        class="">
                                                      <br class="">
                                                      ----------------<br
                                                        class="">
                                                      <br class="">
                                                      Running the
                                                      program<br
                                                        class="">
                                                      <br class="">
                                                      (Note that the
                                                      program had been
                                                      consistently
                                                      failing. Then,
                                                      when I logged back
                                                      into the system to
                                                      capture the
                                                      results, it worked
                                                      once,  and then
                                                      immediately failed
                                                      when I tried
                                                      again, as shown
                                                      below. Logging in
                                                      and out isn't
                                                      sufficient to
                                                      correct the
                                                      problem. Overall,
                                                      I think I had 3
                                                      successful runs in
                                                      30-40 attempts.)<br
                                                        class="">
                                                      <br class="">
                                                      $ shmemrun -H
                                                      localhost -N 2
                                                      --mca sshmem mmap
                                                      ./mic.out<br
                                                        class="">
                                                      [atl1-01-mic0:189372]


                                                      [[30936,0],0]
                                                      ORTE_ERROR_LOG:
                                                      Not found in file
                                                      base/plm_base_launch_support.c

                                                      at line 426<br
                                                        class="">
                                                      Hello World from
                                                      process 0 of 2<br
                                                        class="">
                                                      Hello World from
                                                      process 1 of 2<br
                                                        class="">
                                                      $ shmemrun -H
                                                      localhost -N 2
                                                      --mca sshmem mmap
                                                      ./mic.out<br
                                                        class="">
                                                      [atl1-01-mic0:189381]


                                                      [[30881,0],0]
                                                      ORTE_ERROR_LOG:
                                                      Not found in file
                                                      base/plm_base_launch_support.c

                                                      at line 426<br
                                                        class="">
                                                      [atl1-01-mic0:189383]

                                                      Error:
                                                      pshmem_init.c:61 -
                                                      shmem_init() SHMEM
                                                      failed to
                                                      initialize -
                                                      aborting<br
                                                        class="">
--------------------------------------------------------------------------<br
                                                        class="">
                                                      It looks like
                                                      SHMEM_INIT failed
                                                      for some reason;
                                                      your parallel
                                                      process is<br
                                                        class="">
                                                      likely to abort. 
                                                      There are many
                                                      reasons that a
                                                      parallel process
                                                      can<br class="">
                                                      fail during
                                                      SHMEM_INIT; some
                                                      of which are due
                                                      to configuration
                                                      or environment<br
                                                        class="">
                                                      problems.  This
                                                      failure appears to
                                                      be an internal
                                                      failure; here's
                                                      some<br class="">
                                                      additional
                                                      information (which
                                                      may only be
                                                      relevant to an
                                                      Open SHMEM<br
                                                        class="">
                                                      developer):<br
                                                        class="">
                                                      <br class="">
                                                       
                                                      mca_memheap_base_select()
                                                      failed<br class="">
                                                        --&gt; Returned
                                                      "Error" (-1)
                                                      instead of
                                                      "Success" (0)<br
                                                        class="">
--------------------------------------------------------------------------<br
                                                        class="">
--------------------------------------------------------------------------<br
                                                        class="">
                                                      SHMEM_ABORT was
                                                      invoked on rank 0
                                                      (pid 189383,
                                                      host=atl1-01-mic0)
                                                      with errorcode -1.<br
                                                        class="">
--------------------------------------------------------------------------<br
                                                        class="">
--------------------------------------------------------------------------<br
                                                        class="">
                                                      A SHMEM process is
                                                      aborting at a time
                                                      when it cannot
                                                      guarantee that all<br
                                                        class="">
                                                      of its peer
                                                      processes in the
                                                      job will be killed
                                                      properly.  You
                                                      should<br class="">
                                                      double check that
                                                      everything has
                                                      shut down cleanly.<br
                                                        class="">
                                                      <br class="">
                                                      Local host:
                                                      atl1-01-mic0<br
                                                        class="">
                                                      PID:        189383<br
                                                        class="">
--------------------------------------------------------------------------<br
                                                        class="">
-------------------------------------------------------<br class="">
                                                      Primary job 
                                                      terminated
                                                      normally, but 1
                                                      process returned<br
                                                        class="">
                                                      a non-zero exit
                                                      code.. Per
                                                      user-direction,
                                                      the job has been
                                                      aborted.<br
                                                        class="">
-------------------------------------------------------<br class="">
--------------------------------------------------------------------------<br
                                                        class="">
                                                      shmemrun detected
                                                      that one or more
                                                      processes exited
                                                      with non-zero
                                                      status, thus
                                                      causing<br
                                                        class="">
                                                      the job to be
                                                      terminated. The
                                                      first process to
                                                      do so was:<br
                                                        class="">
                                                      <br class="">
                                                        Process name:
                                                      [[30881,1],0]<br
                                                        class="">
                                                        Exit code:   
                                                      255<br class="">
--------------------------------------------------------------------------<br
                                                        class="">
                                                      <br class="">
                                                      Any thoughts about
                                                      where to go from
                                                      here?<br class="">
                                                      <br class="">
                                                      Andy<br class="">
                                                      <br class="">
                                                      <pre class="moz-signature" cols="72">-- 
Andy Riebs
Hewlett-Packard Company
High Performance Computing
+1 404 648 9024
My opinions are not necessarily those of HP
</pre>
                                                    </div>
_______________________________________________<br class="">
                                                    users mailing list<br
                                                      class="">
                                                    <a
                                                      moz-do-not-send="true"
href="mailto:users@open-mpi.org" class="">users@open-mpi.org</a><br
                                                      class="">
                                                    Subscription: <a
                                                      moz-do-not-send="true"
class="moz-txt-link-freetext"
                                                      href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br
                                                      class="">
                                                    Link to this post: <a
moz-do-not-send="true" class="moz-txt-link-freetext"
                                                      href="http://www.open-mpi.org/community/lists/users/2015/04/26670.php">http://www.open-mpi.org/community/lists/users/2015/04/26670.php</a></div>
                                                </blockquote>
                                              </div>
                                              <br class="">
                                            </div>
                                            <br class="">
                                            <fieldset
                                              class="mimeAttachmentHeader"></fieldset>
                                            <br class="">
                                            <pre class="" wrap="">_______________________________________________
users mailing list
<a moz-do-not-send="true" class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
Subscription: <a moz-do-not-send="true" class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a moz-do-not-send="true" class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2015/04/26676.php">http://www.open-mpi.org/community/lists/users/2015/04/26676.php</a></pre>
                                          </blockquote>
                                          <br class="">
                                        </div>
_______________________________________________<br class="">
                                        users mailing list<br class="">
                                        <a moz-do-not-send="true"
                                          href="mailto:users@open-mpi.org"
                                          class="">users@open-mpi.org</a><br
                                          class="">
                                        Subscription: <a
                                          moz-do-not-send="true"
                                          class="moz-txt-link-freetext"
href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br
                                          class="">
                                        Link to this post: <a
                                          moz-do-not-send="true"
                                          class="moz-txt-link-freetext"
href="http://www.open-mpi.org/community/lists/users/2015/04/26678.php">http://www.open-mpi.org/community/lists/users/2015/04/26678.php</a></div>
                                    </blockquote>
                                  </div>
                                  <br class="">
                                </div>
                                <br class="">
                                <fieldset class="mimeAttachmentHeader"></fieldset>
                                <br class="">
                                <pre class="" wrap="">_______________________________________________
users mailing list
<a moz-do-not-send="true" class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
Subscription: <a moz-do-not-send="true" class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a moz-do-not-send="true" class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2015/04/26679.php">http://www.open-mpi.org/community/lists/users/2015/04/26679.php</a></pre>
                              </blockquote>
                              <br class="">
                            </div>
_______________________________________________<br class="">
                            users mailing list<br class="">
                            <a moz-do-not-send="true"
                              href="mailto:users@open-mpi.org" class="">users@open-mpi.org</a><br
                              class="">
                            Subscription: <a moz-do-not-send="true"
                              class="moz-txt-link-freetext"
                              href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br
                              class="">
                            Link to this post: <a
                              moz-do-not-send="true"
                              class="moz-txt-link-freetext"
                              href="http://www.open-mpi.org/community/lists/users/2015/04/26680.php">http://www.open-mpi.org/community/lists/users/2015/04/26680.php</a></div>
                        </blockquote>
                      </div>
                      <br class="">
                    </div>
                    <br class="">
                    <fieldset class="mimeAttachmentHeader"></fieldset>
                    <br class="">
                    <pre class="" wrap="">_______________________________________________
users mailing list
<a moz-do-not-send="true" class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
Subscription: <a moz-do-not-send="true" class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a moz-do-not-send="true" class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2015/04/26682.php">http://www.open-mpi.org/community/lists/users/2015/04/26682.php</a></pre>
                  </blockquote>
                  <br class="">
                </div>
                _______________________________________________<br
                  class="">
                users mailing list<br class="">
                <a moz-do-not-send="true"
                  href="mailto:users@open-mpi.org" class="">users@open-mpi.org</a><br
                  class="">
                Subscription: <a moz-do-not-send="true"
                  class="moz-txt-link-freetext"
                  href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br
                  class="">
                Link to this post: <a moz-do-not-send="true"
                  class="moz-txt-link-freetext"
                  href="http://www.open-mpi.org/community/lists/users/2015/04/26683.php">http://www.open-mpi.org/community/lists/users/2015/04/26683.php</a></div>
            </blockquote>
          </div>
          <br class="">
        </div>
        <br>
        <fieldset class="mimeAttachmentHeader"></fieldset>
        <br>
        <pre wrap="">_______________________________________________
users mailing list
<a moz-do-not-send="true" class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
Subscription: <a moz-do-not-send="true" class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a moz-do-not-send="true" class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2015/04/26684.php">http://www.open-mpi.org/community/lists/users/2015/04/26684.php</a></pre>
      </blockquote>
      <br>
    </blockquote>
    <br>
  </body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26698.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="26696.php">Howard Pritchard: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>In reply to:</strong> <a href="26689.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26698.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26698.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26699.php">Nathan Hjelm: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
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
