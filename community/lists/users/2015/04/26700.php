<?
$subject_val = "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 16:59:02 2015" -->
<!-- isoreceived="20150413205902" -->
<!-- sent="Mon, 13 Apr 2015 16:58:59 -0400" -->
<!-- isosent="20150413205859" -->
<!-- name="Andy Riebs" -->
<!-- email="andy.riebs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC" -->
<!-- id="552C2E13.1000008_at_hp.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20150413202500.GC99684_at_pn1246003.lanl.gov" -->
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
<strong>Date:</strong> 2015-04-13 16:58:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26701.php">John Cary: "[OMPI users] Build error with gcc-4.9.2?"</a>
<li><strong>Previous message:</strong> <a href="26699.php">Nathan Hjelm: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="26699.php">Nathan Hjelm: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26706.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26706.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->

  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  </head>
  <body bgcolor="#FFFFFF" text="#000000">
    Ralph and Nathan,<br>
    <br>
    The problem may be something trivial, as I don't typically use
    "shmemrun" to start jobs. With the following, I *think* I've 
    demonstrated that the problem library is where it belongs on the
    remote system:<br>
    <br>
    $ ldd mic.out<br>
            linux-vdso.so.1 =&gt;  (0x00007fffb83ff000)<br>
            liboshmem.so.0 =&gt;
    /home/ariebs/mic/mpi-nightly/lib/liboshmem.so.0 (0x00002b059cfbb000)<br>
            libmpi.so.0 =&gt;
    /home/ariebs/mic/mpi-nightly/lib/libmpi.so.0 (0x00002b059d35a000)<br>
            libopen-rte.so.0 =&gt;
    /home/ariebs/mic/mpi-nightly/lib/libopen-rte.so.0
    (0x00002b059d7e3000)<br>
            libopen-pal.so.0 =&gt;
    /home/ariebs/mic/mpi-nightly/lib/libopen-pal.so.0
    (0x00002b059db53000)<br>
            libm.so.6 =&gt; /lib64/libm.so.6 (0x00002b059df3d000)<br>
            libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002b059e16c000)<br>
            libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002b059e371000)<br>
            libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1
    (0x00002b059e574000)<br>
            libpthread.so.0 =&gt; /lib64/libpthread.so.0
    (0x00002b059e786000)<br>
            libc.so.6 =&gt; /lib64/libc.so.6 (0x00002b059e9a4000)<br>
            librt.so.1 =&gt; /lib64/librt.so.1 (0x00002b059ecfc000)<br>
            libimf.so =&gt;<b>
      /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so</b>
    (0x00002b059ef04000)<br>
            libsvml.so =&gt;
    /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libsvml.so
    (0x00002b059f356000)<br>
            libirng.so =&gt;
    /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libirng.so
    (0x00002b059fbef000)<br>
            libintlc.so.5 =&gt;
    /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libintlc.so.5
    (0x00002b059fe02000)<br>
            /lib64/ld-linux-k1om.so.2 (0x00002b059cd9a000)<br>
    $ echo $LD_LIBRARY_PATH <br>
    <b>/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic</b>:/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/intel64:/opt/intel/mic/coi/host-linux-release/lib:/opt/intel/mic/myo/lib:/opt/intel/15.0/composer_xe_2015.2.164/mpirt/lib/intel64:/opt/intel/15.0/composer_xe_2015.2.164/ipp/../compiler/lib/intel64:/opt/intel/15.0/composer_xe_2015.2.164/ipp/lib/intel64:/opt/intel/15.0/composer_xe_2015.2.164/ipp/tools/intel64/perfsys:/opt/intel/mic/coi/host-linux-release/lib:/opt/intel/mic/myo/lib:/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/intel64:/opt/intel/15.0/composer_xe_2015.2.164/mkl/lib/intel64:/opt/intel/15.0/composer_xe_2015.2.164/tbb/lib/intel64/gcc4.1:/opt/intel/15.0/composer_xe_2015.2.164/debugger/ipt/ia32/lib<br>
    $ ssh mic1 file <b>/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so</b><br>
    /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so:
    ELF 64-bit LSB shared object, Intel Xeon Phi coprocessor (k1om),
    version 1 (SYSV), dynamically linked, not stripped<br>
    $ shmemrun -H mic1 -N 2 --mca btl scif,self $PWD/mic.out<br>
    /home/ariebs/mic/mpi-nightly/bin/orted: <b>error while loading
      shared libraries: libimf.so</b>: cannot open shared object file:
    No such file or directory<br>
    ...<br>
    <br>
    <br>
    <div class="moz-cite-prefix">On 04/13/2015 04:25 PM, Nathan Hjelm
      wrote:<br>
    </div>
    <blockquote cite="mid:20150413202500.GC99684@pn1246003.lanl.gov"
      type="cite">
      <pre wrap="">
For talking between PHIs on the same system I recommend using the scif
BTL NOT tcp.

That said, it looks like the LD_LIBRARY_PATH is wrong on the remote
system. It looks like it can't find the intel compiler libraries.

-Nathan Hjelm
HPC-5, LANL

On Mon, Apr 13, 2015 at 04:06:21PM -0400, Andy Riebs wrote:
</pre>
      <blockquote type="cite">
        <pre wrap="">   Progress!  I can run my trivial program on the local PHI, but not the
   other PHI, on the system. Here are the interesting parts:

   A pretty good recipe with last night's nightly master:

   $ ./configure --prefix=/home/ariebs/mic/mpi-nightly CC="icc -mmic"
   CXX="icpc -mmic" \
       --build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux \
        AR=x86_64-k1om-linux-ar RANLIB=x86_64-k1om-linux-ranlib 
   LD=x86_64-k1om-linux-ld \
        --enable-mpirun-prefix-by-default --disable-io-romio
   --disable-mpi-fortran \
        --enable-orterun-prefix-by-default \
        --enable-debug
   $ make &amp;&amp; make install
   $ shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -H localhost -N 2 --mca spml
   yoda --mca btl sm,self,tcp $PWD/mic.out
   Hello World from process 0 of 2
   Hello World from process 1 of 2
   $ shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -H localhost -N 2 --mca spml
   yoda --mca btl openib,sm,self $PWD/mic.out
   Hello World from process 0 of 2
   Hello World from process 1 of 2
   $

   However, I can't seem to cross the fabric. I can ssh freely back and forth
   between mic0 and mic1. However, running the next 2 tests from mic0, it 
   certainly seems like the second one should work, too:

   $ shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -H mic0 -N 2 --mca spml yoda
   --mca btl sm,self,tcp $PWD/mic.out
   Hello World from process 0 of 2
   Hello World from process 1 of 2
   $ shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -H mic1 -N 2 --mca spml yoda
   --mca btl sm,self,tcp $PWD/mic.out
   /home/ariebs/mic/mpi-nightly/bin/orted: error while loading shared
   libraries: libimf.so: cannot open shared object file: No such file or
   directory
   --------------------------------------------------------------------------
   ORTE was unable to reliably start one or more daemons.
   This usually is caused by:

   * not finding the required libraries and/or binaries on
     one or more nodes. Please check your PATH and LD_LIBRARY_PATH
     settings, or configure OMPI with --enable-orterun-prefix-by-default

   * lack of authority to execute on one or more specified nodes.
     Please verify your allocation and authorities.

   * the inability to write startup files into /tmp
   (--tmpdir/orte_tmpdir_base).
     Please check with your sys admin to determine the correct location to
   use.

   *  compilation of the orted with dynamic libraries when static are
   required
     (e.g., on Cray). Please check your configure cmd line and consider using
     one of the contrib/platform definitions for your system type.

   * an inability to create a connection back to mpirun due to a
     lack of common network interfaces and/or no route found between
     them. Please check network connectivity (including firewalls
     and network routing requirements).
    ...
   $

   (Note that I get the same results with "--mca btl openib,sm,self"....)

   $ ssh mic1 file
   /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so
   /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so: ELF
   64-bit LSB shared object, Intel Xeon Phi coprocessor (k1om), version 1
   (SYSV), dynamically linked, not stripped
   $ shmemrun -x
   LD_PRELOAD=/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so
   -H mic1 -N 2 --mca spml yoda --mca btl sm,self,tcp $PWD/mic.out
   /home/ariebs/mic/mpi-nightly/bin/orted: error while loading shared
   libraries: libimf.so: cannot open shared object file: No such file or
   directory
   --------------------------------------------------------------------------
   ORTE was unable to reliably start one or more daemons.
   This usually is caused by:

   * not finding the required libraries and/or binaries on
     one or more nodes. Please check your PATH and LD_LIBRARY_PATH
     settings, or configure OMPI with --enable-orterun-prefix-by-default

   * lack of authority to execute on one or more specified nodes.
     Please verify your allocation and authorities.

   * the inability to write startup files into /tmp
   (--tmpdir/orte_tmpdir_base).
     Please check with your sys admin to determine the correct location to
   use.

   *  compilation of the orted with dynamic libraries when static are
   required
     (e.g., on Cray). Please check your configure cmd line and consider using
     one of the contrib/platform definitions for your system type.

   * an inability to create a connection back to mpirun due to a
     lack of common network interfaces and/or no route found between
     them. Please check network connectivity (including firewalls
     and network routing requirements).

   Following here is
   - IB information
   - Running the failing case with lots of debugging information. (As you
   might imagine, I've tried 17 ways from Sunday to try to ensure that
   libimf.so is found.)

   $ ibv_devices
       device                 node GUID
       ------              ----------------
       mlx4_0              24be05ffffa57160
       scif0               4c79bafffe4402b6
   $ ibv_devinfo
   hca_id: mlx4_0
           transport:                      InfiniBand (0)
           fw_ver:                         2.11.1250
           node_guid:                      24be:05ff:ffa5:7160
           sys_image_guid:                 24be:05ff:ffa5:7163
           vendor_id:                      0x02c9
           vendor_part_id:                 4099
           hw_ver:                         0x0
           phys_port_cnt:                  2
                   port:   1
                           state:                  PORT_ACTIVE (4)
                           max_mtu:                2048 (4)
                           active_mtu:             2048 (4)
                           sm_lid:                 8
                           port_lid:               86
                           port_lmc:               0x00
                           link_layer:             InfiniBand

                   port:   2
                           state:                  PORT_DOWN (1)
                           max_mtu:                2048 (4)
                           active_mtu:             2048 (4)
                           sm_lid:                 0
                           port_lid:               0
                           port_lmc:               0x00
                           link_layer:             InfiniBand

   hca_id: scif0
           transport:                      SCIF (2)
           fw_ver:                         0.0.1
           node_guid:                      4c79:baff:fe44:02b6
           sys_image_guid:                 4c79:baff:fe44:02b6
           vendor_id:                      0x8086
           vendor_part_id:                 0
           hw_ver:                         0x1
           phys_port_cnt:                  1
                   port:   1
                           state:                  PORT_ACTIVE (4)
                           max_mtu:                4096 (5)
                           active_mtu:             4096 (5)
                           sm_lid:                 1
                           port_lid:               1001
                           port_lmc:               0x00
                           link_layer:             SCIF

   $ shmemrun -x
   LD_PRELOAD=/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so
   -H mic1 -N 2 --mca spml yoda --mca btl sm,self,tcp --mca plm_base_verbose
   5 --mca memheap_base_verbose 100 $PWD/mic.out
   [atl1-01-mic0:191024] mca:base:select:(  plm) Querying component [rsh]
   [atl1-01-mic0:191024] [[INVALID],INVALID] plm:rsh_lookup on agent ssh :
   rsh path NULL
   [atl1-01-mic0:191024] mca:base:select:(  plm) Query of component [rsh] set
   priority to 10
   [atl1-01-mic0:191024] mca:base:select:(  plm) Querying component
   [isolated]
   [atl1-01-mic0:191024] mca:base:select:(  plm) Query of component
   [isolated] set priority to 0
   [atl1-01-mic0:191024] mca:base:select:(  plm) Querying component [slurm]
   [atl1-01-mic0:191024] mca:base:select:(  plm) Skipping component [slurm].
   Query failed to return a module
   [atl1-01-mic0:191024] mca:base:select:(  plm) Selected component [rsh]
   [atl1-01-mic0:191024] plm:base:set_hnp_name: initial bias 191024 nodename
   hash 4121194178
   [atl1-01-mic0:191024] plm:base:set_hnp_name: final jobfam 29012
   [atl1-01-mic0:191024] [[29012,0],0] plm:rsh_setup on agent ssh : rsh path
   NULL
   [atl1-01-mic0:191024] [[29012,0],0] plm:base:receive start comm
   [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_job
   [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_vm
   [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_vm creating map
   [atl1-01-mic0:191024] [[29012,0],0] setup:vm: working unmanaged allocation
   [atl1-01-mic0:191024] [[29012,0],0] using dash_host
   [atl1-01-mic0:191024] [[29012,0],0] checking node mic1
   [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_vm add new daemon
   [[29012,0],1]
   [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_vm assigning new daemon
   [[29012,0],1] to node mic1
   [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: launching vm
   [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: local shell: 0 (bash)
   [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: assuming same remote shell as
   local shell
   [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: remote shell: 0 (bash)
   [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: final template argv:
           /usr/bin/ssh &lt;template&gt;    
   PATH=/home/ariebs/mic/mpi-nightly/bin:$PATH ; export PATH ;
   LD_LIBRARY_PATH=/home/ariebs/mic/mpi-nightly/lib:$LD_LIBRARY_PATH ; export
   LD_LIBRARY_PATH ;
   DYLD_LIBRARY_PATH=/home/ariebs/mic/mpi-nightly/lib:$DYLD_LIBRARY_PATH ;
   export DYLD_LIBRARY_PATH ;   /home/ariebs/mic/mpi-nightly/bin/orted
   --hnp-topo-sig 0N:1S:0L3:61L2:61L1:61C:244H:k1om -mca ess "env" -mca
   orte_ess_jobid "1901330432" -mca orte_ess_vpid "&lt;template&gt;" -mca
   orte_ess_num_procs "2" -mca orte_hnp_uri
   "1901330432.0;usock;tcp://16.113.180.125,192.0.0.121:34249;ud://2359370.86.1"
   --tree-spawn --mca spml "yoda" --mca btl "sm,self,tcp" --mca
   plm_base_verbose "5" --mca memheap_base_verbose "100" -mca plm "rsh" -mca
   rmaps_ppr_n_pernode "2"
   [atl1-01-mic0:191024] [[29012,0],0] plm:rsh:launch daemon 0 not a child of
   mine
   [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: adding node mic1 to launch
   list
   [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: activating launch event
   [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: recording launch of daemon
   [[29012,0],1]
   [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: executing: (/usr/bin/ssh)
   [/usr/bin/ssh mic1     PATH=/home/ariebs/mic/mpi-nightly/bin:$PATH ;
   export PATH ;
   LD_LIBRARY_PATH=/home/ariebs/mic/mpi-nightly/lib:$LD_LIBRARY_PATH ; export
   LD_LIBRARY_PATH ;
   DYLD_LIBRARY_PATH=/home/ariebs/mic/mpi-nightly/lib:$DYLD_LIBRARY_PATH ;
   export DYLD_LIBRARY_PATH ;   /home/ariebs/mic/mpi-nightly/bin/orted
   --hnp-topo-sig 0N:1S:0L3:61L2:61L1:61C:244H:k1om -mca ess "env" -mca
   orte_ess_jobid "1901330432" -mca orte_ess_vpid 1 -mca orte_ess_num_procs
   "2" -mca orte_hnp_uri
   "1901330432.0;usock;tcp://16.113.180.125,192.0.0.121:34249;ud://2359370.86.1"
   --tree-spawn --mca spml "yoda" --mca btl "sm,self,tcp" --mca
   plm_base_verbose "5" --mca memheap_base_verbose "100" -mca plm "rsh" -mca
   rmaps_ppr_n_pernode "2"]
   /home/ariebs/mic/mpi-nightly/bin/orted: error while loading shared
   libraries: libimf.so: cannot open shared object file: No such file or
   directory
   [atl1-01-mic0:191024] [[29012,0],0] daemon 1 failed with status 127
   [atl1-01-mic0:191024] [[29012,0],0] plm:base:orted_cmd sending orted_exit
   commands
   --------------------------------------------------------------------------
   ORTE was unable to reliably start one or more daemons.
   This usually is caused by:

   * not finding the required libraries and/or binaries on
     one or more nodes. Please check your PATH and LD_LIBRARY_PATH
     settings, or configure OMPI with --enable-orterun-prefix-by-default

   * lack of authority to execute on one or more specified nodes.
     Please verify your allocation and authorities.

   * the inability to write startup files into /tmp
   (--tmpdir/orte_tmpdir_base).
     Please check with your sys admin to determine the correct location to
   use.

   *  compilation of the orted with dynamic libraries when static are
   required
     (e.g., on Cray). Please check your configure cmd line and consider using
     one of the contrib/platform definitions for your system type.

   * an inability to create a connection back to mpirun due to a
     lack of common network interfaces and/or no route found between
     them. Please check network connectivity (including firewalls
     and network routing requirements).
   --------------------------------------------------------------------------
   [atl1-01-mic0:191024] [[29012,0],0] plm:base:receive stop comm

   On 04/13/2015 08:50 AM, Andy Riebs wrote:

     Hi Ralph,

     Here are the results with last night's "master" nightly,
     openmpi-dev-1487-g9c6d452.tar.bz2, and adding the memheap_base_verbose
     option (yes, it looks like the "ERROR_LOG" problem has gone away):

     $ cat /proc/sys/kernel/shmmax
     33554432
     $ cat /proc/sys/kernel/shmall
     2097152
     $ cat /proc/sys/kernel/shmmni
     4096
     $ export SHMEM_SYMMETRIC_HEAP=1M
     $ shmemrun -H localhost -N 2 --mca sshmem mmap  --mca plm_base_verbose 5
     --mca memheap_base_verbose 100 $PWD/mic.out
     [atl1-01-mic0:190439] mca:base:select:(  plm) Querying component [rsh]
     [atl1-01-mic0:190439] [[INVALID],INVALID] plm:rsh_lookup on agent ssh :
     rsh path NULL
     [atl1-01-mic0:190439] mca:base:select:(  plm) Query of component [rsh]
     set priority to 10
     [atl1-01-mic0:190439] mca:base:select:(  plm) Querying component
     [isolated]
     [atl1-01-mic0:190439] mca:base:select:(  plm) Query of component
     [isolated] set priority to 0
     [atl1-01-mic0:190439] mca:base:select:(  plm) Querying component [slurm]
     [atl1-01-mic0:190439] mca:base:select:(  plm) Skipping component
     [slurm]. Query failed to return a module
     [atl1-01-mic0:190439] mca:base:select:(  plm) Selected component [rsh]
     [atl1-01-mic0:190439] plm:base:set_hnp_name: initial bias 190439
     nodename hash 4121194178
     [atl1-01-mic0:190439] plm:base:set_hnp_name: final jobfam 31875
     [atl1-01-mic0:190439] [[31875,0],0] plm:rsh_setup on agent ssh : rsh
     path NULL
     [atl1-01-mic0:190439] [[31875,0],0] plm:base:receive start comm
     [atl1-01-mic0:190439] [[31875,0],0] plm:base:setup_job
     [atl1-01-mic0:190439] [[31875,0],0] plm:base:setup_vm
     [atl1-01-mic0:190439] [[31875,0],0] plm:base:setup_vm creating map
     [atl1-01-mic0:190439] [[31875,0],0] setup:vm: working unmanaged
     allocation
     [atl1-01-mic0:190439] [[31875,0],0] using dash_host
     [atl1-01-mic0:190439] [[31875,0],0] checking node atl1-01-mic0
     [atl1-01-mic0:190439] [[31875,0],0] ignoring myself
     [atl1-01-mic0:190439] [[31875,0],0] plm:base:setup_vm only HNP in
     allocation
     [atl1-01-mic0:190439] [[31875,0],0] complete_setup on job [31875,1]
     [atl1-01-mic0:190439] [[31875,0],0] plm:base:launch_apps for job
     [31875,1]
     [atl1-01-mic0:190439] [[31875,0],0] plm:base:launch wiring up iof for
     job [31875,1]
     [atl1-01-mic0:190439] [[31875,0],0] plm:base:launch [31875,1] registered
     [atl1-01-mic0:190439] [[31875,0],0] plm:base:launch job [31875,1] is not
     a dynamic spawn
     [atl1-01-mic0:190441] mca: base: components_register: registering
     memheap components
     [atl1-01-mic0:190441] mca: base: components_register: found loaded
     component buddy
     [atl1-01-mic0:190441] mca: base: components_register: component buddy
     has no register or open function
     [atl1-01-mic0:190442] mca: base: components_register: registering
     memheap components
     [atl1-01-mic0:190442] mca: base: components_register: found loaded
     component buddy
     [atl1-01-mic0:190442] mca: base: components_register: component buddy
     has no register or open function
     [atl1-01-mic0:190442] mca: base: components_register: found loaded
     component ptmalloc
     [atl1-01-mic0:190442] mca: base: components_register: component ptmalloc
     has no register or open function
     [atl1-01-mic0:190441] mca: base: components_register: found loaded
     component ptmalloc
     [atl1-01-mic0:190441] mca: base: components_register: component ptmalloc
     has no register or open function
     [atl1-01-mic0:190441] mca: base: components_open: opening memheap
     components
     [atl1-01-mic0:190441] mca: base: components_open: found loaded component
     buddy
     [atl1-01-mic0:190441] mca: base: components_open: component buddy open
     function successful
     [atl1-01-mic0:190441] mca: base: components_open: found loaded component
     ptmalloc
     [atl1-01-mic0:190441] mca: base: components_open: component ptmalloc
     open function successful
     [atl1-01-mic0:190442] mca: base: components_open: opening memheap
     components
     [atl1-01-mic0:190442] mca: base: components_open: found loaded component
     buddy
     [atl1-01-mic0:190442] mca: base: components_open: component buddy open
     function successful
     [atl1-01-mic0:190442] mca: base: components_open: found loaded component
     ptmalloc
     [atl1-01-mic0:190442] mca: base: components_open: component ptmalloc
     open function successful
     [atl1-01-mic0:190442] base/memheap_base_alloc.c:38 -
     mca_memheap_base_alloc_init() Memheap alloc memory: 270532608 byte(s), 1
     segments by method: 1
     [atl1-01-mic0:190441] base/memheap_base_alloc.c:38 -
     mca_memheap_base_alloc_init() Memheap alloc memory: 270532608 byte(s), 1
     segments by method: 1
     [atl1-01-mic0:190442] base/memheap_base_static.c:205 - _load_segments()
     add: 00600000-00601000 rw-p 00000000 00:11
     6029314                            /home/ariebs/bench/hello/mic.out
     [atl1-01-mic0:190441] base/memheap_base_static.c:205 - _load_segments()
     add: 00600000-00601000 rw-p 00000000 00:11
     6029314                            /home/ariebs/bench/hello/mic.out
     [atl1-01-mic0:190442] base/memheap_base_static.c:75 -
     mca_memheap_base_static_init() Memheap static memory: 3824 byte(s), 2
     segments
     [atl1-01-mic0:190442] base/memheap_base_register.c:39 -
     mca_memheap_base_reg() register seg#00: 0x0xff000000 - 0x0x10f200000
     270532608 bytes type=0x1 id=0xFFFFFFFF
     [atl1-01-mic0:190441] base/memheap_base_static.c:75 -
     mca_memheap_base_static_init() Memheap static memory: 3824 byte(s), 2
     segments
     [atl1-01-mic0:190441] base/memheap_base_register.c:39 -
     mca_memheap_base_reg() register seg#00: 0x0xff000000 - 0x0x10f200000
     270532608 bytes type=0x1 id=0xFFFFFFFF
     [atl1-01-mic0:190442] Error base/memheap_base_register.c:130 -
     _reg_segment() Failed to register segment
     [atl1-01-mic0:190441] Error base/memheap_base_register.c:130 -
     _reg_segment() Failed to register segment
     [atl1-01-mic0:190442] Error: pshmem_init.c:61 - shmem_init() SHMEM
     failed to initialize - aborting
     [atl1-01-mic0:190441] Error: pshmem_init.c:61 - shmem_init() SHMEM
     failed to initialize - aborting
     --------------------------------------------------------------------------
     It looks like SHMEM_INIT failed for some reason; your parallel process
     is
     likely to abort.  There are many reasons that a parallel process can
     fail during SHMEM_INIT; some of which are due to configuration or
     environment
     problems.  This failure appears to be an internal failure; here's some
     additional information (which may only be relevant to an Open SHMEM
     developer):

       mca_memheap_base_select() failed
       --&gt; Returned "Error" (-1) instead of "Success" (0)
     --------------------------------------------------------------------------
     --------------------------------------------------------------------------
     SHMEM_ABORT was invoked on rank 0 (pid 190441, host=atl1-01-mic0) with
     errorcode -1.
     --------------------------------------------------------------------------
     --------------------------------------------------------------------------
     A SHMEM process is aborting at a time when it cannot guarantee that all
     of its peer processes in the job will be killed properly.  You should
     double check that everything has shut down cleanly.

     Local host: atl1-01-mic0
     PID:        190441
     --------------------------------------------------------------------------
     -------------------------------------------------------
     Primary job  terminated normally, but 1 process returned
     a non-zero exit code.. Per user-direction, the job has been aborted.
     -------------------------------------------------------
     [atl1-01-mic0:190439] [[31875,0],0] plm:base:orted_cmd sending
     orted_exit commands
     --------------------------------------------------------------------------
     shmemrun detected that one or more processes exited with non-zero
     status, thus causing
     the job to be terminated. The first process to do so was:

       Process name: [[31875,1],0]
       Exit code:    255
     --------------------------------------------------------------------------
     [atl1-01-mic0:190439] 1 more process has sent help message
     help-shmem-runtime.txt / shmem_init:startup:internal-failure
     [atl1-01-mic0:190439] Set MCA parameter "orte_base_help_aggregate" to 0
     to see all help / error messages
     [atl1-01-mic0:190439] 1 more process has sent help message
     help-shmem-api.txt / shmem-abort
     [atl1-01-mic0:190439] 1 more process has sent help message
     help-shmem-runtime.txt / oshmem shmem abort:cannot guarantee all killed
     [atl1-01-mic0:190439] [[31875,0],0] plm:base:receive stop comm

     On 04/12/2015 03:09 PM, Ralph Castain wrote:

       Sorry about that - I hadn't brought it over to the 1.8 branch yet.
       I've done so now, which means the ERROR_LOG shouldn't show up any
       more. It won't fix the memheap problem, though.
       You might try adding "--mca memheap_base_verbose 100" to your cmd line
       so we can see why none of the memheap components are being selected.

         On Apr 12, 2015, at 11:30 AM, Andy Riebs <a class="moz-txt-link-rfc2396E" href="mailto:andy.riebs@hp.com">&lt;andy.riebs@hp.com&gt;</a> wrote:
         Hi Ralph,

         Here's the output with openmpi-v1.8.4-202-gc2da6a5.tar.bz2:

         $ shmemrun -H localhost -N 2 --mca sshmem mmap  --mca
         plm_base_verbose 5 $PWD/mic.out
         [atl1-01-mic0:190189] mca:base:select:(  plm) Querying component
         [rsh]
         [atl1-01-mic0:190189] [[INVALID],INVALID] plm:rsh_lookup on agent
         ssh : rsh path NULL
         [atl1-01-mic0:190189] mca:base:select:(  plm) Query of component
         [rsh] set priority to 10
         [atl1-01-mic0:190189] mca:base:select:(  plm) Querying component
         [isolated]
         [atl1-01-mic0:190189] mca:base:select:(  plm) Query of component
         [isolated] set priority to 0
         [atl1-01-mic0:190189] mca:base:select:(  plm) Querying component
         [slurm]
         [atl1-01-mic0:190189] mca:base:select:(  plm) Skipping component
         [slurm]. Query failed to return a module
         [atl1-01-mic0:190189] mca:base:select:(  plm) Selected component
         [rsh]
         [atl1-01-mic0:190189] plm:base:set_hnp_name: initial bias 190189
         nodename hash 4121194178
         [atl1-01-mic0:190189] plm:base:set_hnp_name: final jobfam 32137
         [atl1-01-mic0:190189] [[32137,0],0] plm:rsh_setup on agent ssh : rsh
         path NULL
         [atl1-01-mic0:190189] [[32137,0],0] plm:base:receive start comm
         [atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_job
         [atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_vm
         [atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_vm creating map
         [atl1-01-mic0:190189] [[32137,0],0] setup:vm: working unmanaged
         allocation
         [atl1-01-mic0:190189] [[32137,0],0] using dash_host
         [atl1-01-mic0:190189] [[32137,0],0] checking node atl1-01-mic0
         [atl1-01-mic0:190189] [[32137,0],0] ignoring myself
         [atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_vm only HNP in
         allocation
         [atl1-01-mic0:190189] [[32137,0],0] complete_setup on job [32137,1]
         [atl1-01-mic0:190189] [[32137,0],0] ORTE_ERROR_LOG: Not found in
         file base/plm_base_launch_support.c at line 440
         [atl1-01-mic0:190189] [[32137,0],0] plm:base:launch_apps for job
         [32137,1]
         [atl1-01-mic0:190189] [[32137,0],0] plm:base:launch wiring up iof
         for job [32137,1]
         [atl1-01-mic0:190189] [[32137,0],0] plm:base:launch [32137,1]
         registered
         [atl1-01-mic0:190189] [[32137,0],0] plm:base:launch job [32137,1] is
         not a dynamic spawn
         --------------------------------------------------------------------------
         It looks like SHMEM_INIT failed for some reason; your parallel
         process is
         likely to abort.  There are many reasons that a parallel process can
         fail during SHMEM_INIT; some of which are due to configuration or
         environment
         problems.  This failure appears to be an internal failure; here's
         some
         additional information (which may only be relevant to an Open SHMEM
         developer):

           mca_memheap_base_select() failed
           --&gt; Returned "Error" (-1) instead of "Success" (0)
         --------------------------------------------------------------------------
         [atl1-01-mic0:190191] Error: pshmem_init.c:61 - shmem_init() SHMEM
         failed to initialize - aborting
         [atl1-01-mic0:190192] Error: pshmem_init.c:61 - shmem_init() SHMEM
         failed to initialize - aborting
         --------------------------------------------------------------------------
         SHMEM_ABORT was invoked on rank 1 (pid 190192, host=atl1-01-mic0)
         with errorcode -1.
         --------------------------------------------------------------------------
         --------------------------------------------------------------------------
         A SHMEM process is aborting at a time when it cannot guarantee that
         all
         of its peer processes in the job will be killed properly.  You
         should
         double check that everything has shut down cleanly.

         Local host: atl1-01-mic0
         PID:        190192
         --------------------------------------------------------------------------
         -------------------------------------------------------
         Primary job  terminated normally, but 1 process returned
         a non-zero exit code.. Per user-direction, the job has been aborted.
         -------------------------------------------------------
         [atl1-01-mic0:190189] [[32137,0],0] plm:base:orted_cmd sending
         orted_exit commands
         --------------------------------------------------------------------------
         shmemrun detected that one or more processes exited with non-zero
         status, thus causing
         the job to be terminated. The first process to do so was:

           Process name: [[32137,1],0]
           Exit code:    255
         --------------------------------------------------------------------------
         [atl1-01-mic0:190189] 1 more process has sent help message
         help-shmem-runtime.txt / shmem_init:startup:internal-failure
         [atl1-01-mic0:190189] Set MCA parameter "orte_base_help_aggregate"
         to 0 to see all help / error messages
         [atl1-01-mic0:190189] 1 more process has sent help message
         help-shmem-api.txt / shmem-abort
         [atl1-01-mic0:190189] 1 more process has sent help message
         help-shmem-runtime.txt / oshmem shmem abort:cannot guarantee all
         killed
         [atl1-01-mic0:190189] [[32137,0],0] plm:base:receive stop comm

         On 04/11/2015 07:41 PM, Ralph Castain wrote:

           Got it - thanks. I fixed that ERROR_LOG issue (I think- please
           verify). I suspect the memheap issue relates to something else,
           but I probably need to let the OSHMEM folks comment on it

             On Apr 11, 2015, at 9:52 AM, Andy Riebs <a class="moz-txt-link-rfc2396E" href="mailto:andy.riebs@hp.com">&lt;andy.riebs@hp.com&gt;</a>
             wrote:
             Everything is built on the Xeon side, with the icc "-mmic"
             switch. I then ssh into one of the PHIs, and run shmemrun from
             there.

             On 04/11/2015 12:00 PM, Ralph Castain wrote:

               Let me try to understand the setup a little better. Are you
               running shmemrun on the PHI itself? Or is it running on the
               host processor, and you are trying to spawn a process onto the
               Phi?

                 On Apr 11, 2015, at 7:55 AM, Andy Riebs <a class="moz-txt-link-rfc2396E" href="mailto:andy.riebs@hp.com">&lt;andy.riebs@hp.com&gt;</a>
                 wrote:
                 Hi Ralph,

                 Yes, this is attempting to get OSHMEM to run on the Phi.

                 I grabbed openmpi-dev-1484-g033418f.tar.bz2 and configured
                 it with

                 $ ./configure --prefix=/home/ariebs/mic/mpi-nightly   
                 CC=icc -mmic CXX=icpc -mmic    \
                     --build=x86_64-unknown-linux-gnu
                 --host=x86_64-k1om-linux    \
                      AR=x86_64-k1om-linux-ar
                 RANLIB=x86_64-k1om-linux-ranlib  LD=x86_64-k1om-linux-ld   \
                      --enable-mpirun-prefix-by-default
                 --disable-io-romio     --disable-mpi-fortran    \
                      --enable-debug    
                 --enable-mca-no-build=btl-usnic,btl-openib,common-verbs,oob-ud

                 (Note that I had to add "oob-ud" to the
                 "--enable-mca-no-build" option, as the build complained that
                 mca oob/ud needed mca common-verbs.)

                 With that configuration, here is what I am seeing now...

                 $ export SHMEM_SYMMETRIC_HEAP_SIZE=1G
                 $ shmemrun -H localhost -N 2 --mca sshmem mmap  --mca
                 plm_base_verbose 5 $PWD/mic.out
                 [atl1-01-mic0:189895] mca:base:select:(  plm) Querying
                 component [rsh]
                 [atl1-01-mic0:189895] [[INVALID],INVALID] plm:rsh_lookup on
                 agent ssh : rsh path NULL
                 [atl1-01-mic0:189895] mca:base:select:(  plm) Query of
                 component [rsh] set priority to 10
                 [atl1-01-mic0:189895] mca:base:select:(  plm) Querying
                 component [isolated]
                 [atl1-01-mic0:189895] mca:base:select:(  plm) Query of
                 component [isolated] set priority to 0
                 [atl1-01-mic0:189895] mca:base:select:(  plm) Querying
                 component [slurm]
                 [atl1-01-mic0:189895] mca:base:select:(  plm) Skipping
                 component [slurm]. Query failed to return a module
                 [atl1-01-mic0:189895] mca:base:select:(  plm) Selected
                 component [rsh]
                 [atl1-01-mic0:189895] plm:base:set_hnp_name: initial bias
                 189895 nodename hash 4121194178
                 [atl1-01-mic0:189895] plm:base:set_hnp_name: final jobfam
                 32419
                 [atl1-01-mic0:189895] [[32419,0],0] plm:rsh_setup on agent
                 ssh : rsh path NULL
                 [atl1-01-mic0:189895] [[32419,0],0] plm:base:receive start
                 comm
                 [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_job
                 [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_vm
                 [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_vm
                 creating map
                 [atl1-01-mic0:189895] [[32419,0],0] setup:vm: working
                 unmanaged allocation
                 [atl1-01-mic0:189895] [[32419,0],0] using dash_host
                 [atl1-01-mic0:189895] [[32419,0],0] checking node
                 atl1-01-mic0
                 [atl1-01-mic0:189895] [[32419,0],0] ignoring myself
                 [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_vm only
                 HNP in allocation
                 [atl1-01-mic0:189895] [[32419,0],0] complete_setup on job
                 [32419,1]
                 [atl1-01-mic0:189895] [[32419,0],0] ORTE_ERROR_LOG: Not
                 found in file base/plm_base_launch_support.c at line 440
                 [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch_apps for
                 job [32419,1]
                 [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch wiring
                 up iof for job [32419,1]
                 [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch
                 [32419,1] registered
                 [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch job
                 [32419,1] is not a dynamic spawn
                 [atl1-01-mic0:189899] Error: pshmem_init.c:61 - shmem_init()
                 SHMEM failed to initialize - aborting
                 [atl1-01-mic0:189898] Error: pshmem_init.c:61 - shmem_init()
                 SHMEM failed to initialize - aborting
                 --------------------------------------------------------------------------
                 It looks like SHMEM_INIT failed for some reason; your
                 parallel process is
                 likely to abort.  There are many reasons that a parallel
                 process can
                 fail during SHMEM_INIT; some of which are due to
                 configuration or environment
                 problems.  This failure appears to be an internal failure;
                 here's some
                 additional information (which may only be relevant to an
                 Open SHMEM
                 developer):

                   mca_memheap_base_select() failed
                   --&gt; Returned "Error" (-1) instead of "Success" (0)
                 --------------------------------------------------------------------------
                 --------------------------------------------------------------------------
                 SHMEM_ABORT was invoked on rank 1 (pid 189899,
                 host=atl1-01-mic0) with errorcode -1.
                 --------------------------------------------------------------------------
                 --------------------------------------------------------------------------
                 A SHMEM process is aborting at a time when it cannot
                 guarantee that all
                 of its peer processes in the job will be killed properly. 
                 You should
                 double check that everything has shut down cleanly.

                 Local host: atl1-01-mic0
                 PID:        189899
                 --------------------------------------------------------------------------
                 -------------------------------------------------------
                 Primary job  terminated normally, but 1 process returned
                 a non-zero exit code.. Per user-direction, the job has been
                 aborted.
                 -------------------------------------------------------
                 [atl1-01-mic0:189895] [[32419,0],0] plm:base:orted_cmd
                 sending orted_exit commands
                 --------------------------------------------------------------------------
                 shmemrun detected that one or more processes exited with
                 non-zero status, thus causing
                 the job to be terminated. The first process to do so was:

                   Process name: [[32419,1],1]
                   Exit code:    255
                 --------------------------------------------------------------------------
                 [atl1-01-mic0:189895] 1 more process has sent help message
                 help-shmem-runtime.txt / shmem_init:startup:internal-failure
                 [atl1-01-mic0:189895] Set MCA parameter
                 "orte_base_help_aggregate" to 0 to see all help / error
                 messages
                 [atl1-01-mic0:189895] 1 more process has sent help message
                 help-shmem-api.txt / shmem-abort
                 [atl1-01-mic0:189895] 1 more process has sent help message
                 help-shmem-runtime.txt / oshmem shmem abort:cannot guarantee
                 all killed
                 [atl1-01-mic0:189895] [[32419,0],0] plm:base:receive stop
                 comm

                 On 04/10/2015 06:37 PM, Ralph Castain wrote:

                   Andy - could you please try the current 1.8.5 nightly
                   tarball and see if it helps? The error log indicates that
                   it is failing to get the topology from some daemon, I**m
                   assuming the one on the Phi?
                   You might also add **enable-debug to that configure line
                   and then put -mca plm_base_verbose on the shmemrun cmd to
                   get more help

                     On Apr 10, 2015, at 11:55 AM, Andy Riebs
                     <a class="moz-txt-link-rfc2396E" href="mailto:andy.riebs@hp.com">&lt;andy.riebs@hp.com&gt;</a> wrote:
                     Summary: MPI jobs work fine, SHMEM jobs work just often
                     enough to be tantalizing, on an Intel Xeon Phi/MIC
                     system.

                     Longer version

                     Thanks to the excellent write-up last June
                     (<a class="moz-txt-link-rfc2396E" href="https://www.open-mpi.org/community/lists/users/2014/06/24711.php">&lt;https://www.open-mpi.org/community/lists/users/2014/06/24711.php&gt;</a>),
                     I have been able to build a version of Open MPI for the
                     Xeon Phi coprocessor that runs MPI jobs on the Phi
                     coprocessor with no problem, but not SHMEM jobs.  Just
                     at the point where I was about to document the problems
                     I was having with SHMEM, my trivial SHMEM job worked.
                     And then failed when I tried to run it again,
                     immediately afterwards. I have a feeling I may be in
                     uncharted  territory here.

                     Environment
                       * RHEL 6.5
                       * Intel Composer XE 2015
                       * Xeon Phi/MIC
                     ----------------

                     Configuration

                     $ export PATH=/usr/linux-k1om-4.7/bin/:$PATH
                     $ source
                     /opt/intel/15.0/composer_xe_2015/bin/compilervars.sh
                     intel64
                     $ ./configure --prefix=/home/ariebs/mic/mpi \
                        CC="icc -mmic" CXX="icpc -mmic" \
                        --build=x86_64-unknown-linux-gnu
                     --host=x86_64-k1om-linux \
                         AR=x86_64-k1om-linux-ar
                     RANLIB=x86_64-k1om-linux-ranlib \
                         LD=x86_64-k1om-linux-ld \
                         --enable-mpirun-prefix-by-default --disable-io-romio
                     \
                         --disable-vt --disable-mpi-fortran \
                        
                     --enable-mca-no-build=btl-usnic,btl-openib,common-verbs
                     $ make
                     $ make install

                     ----------------

                     Test program

                     #include &lt;stdio.h&gt;
                     #include &lt;stdlib.h&gt;
                     #include &lt;shmem.h&gt;
                     int main(int argc, char **argv)
                     {
                             int me, num_pe;
                             shmem_init();
                             num_pe = num_pes();
                             me = my_pe();
                             printf("Hello World from process %ld of %ld\n",
                     me, num_pe);
                             exit(0);
                     }

                     ----------------

                     Building the program

                     export PATH=/home/ariebs/mic/mpi/bin:$PATH
                     export PATH=/usr/linux-k1om-4.7/bin/:$PATH
                     source
                     /opt/intel/15.0/composer_xe_2015/bin/compilervars.sh
                     intel64
                     export
                     LD_LIBRARY_PATH=/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic:$LD_LIBRARY_PATH

                     icc -mmic -std=gnu99 -I/home/ariebs/mic/mpi/include
                     -pthread \
                             -Wl,-rpath -Wl,/home/ariebs/mic/mpi/lib
                     -Wl,--enable-new-dtags \
                             -L/home/ariebs/mic/mpi/lib -loshmem -lmpi
                     -lopen-rte -lopen-pal \
                             -lm -ldl -lutil \
                             -Wl,-rpath
                     -Wl,/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic
                     \
                            
                     -L/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic
                     \
                             -o mic.out  shmem_hello.c

                     ----------------

                     Running the program

                     (Note that the program had been consistently failing.
                     Then, when I logged back into the system to capture the
                     results, it worked once,  and then immediately failed
                     when I tried again, as shown below. Logging in and out
                     isn't sufficient to correct the problem. Overall, I
                     think I had 3 successful runs in 30-40 attempts.)

                     $ shmemrun -H localhost -N 2 --mca sshmem mmap ./mic.out
                     [atl1-01-mic0:189372] [[30936,0],0] ORTE_ERROR_LOG: Not
                     found in file base/plm_base_launch_support.c at line 426
                     Hello World from process 0 of 2
                     Hello World from process 1 of 2
                     $ shmemrun -H localhost -N 2 --mca sshmem mmap ./mic.out
                     [atl1-01-mic0:189381] [[30881,0],0] ORTE_ERROR_LOG: Not
                     found in file base/plm_base_launch_support.c at line 426
                     [atl1-01-mic0:189383] Error: pshmem_init.c:61 -
                     shmem_init() SHMEM failed to initialize - aborting
                     --------------------------------------------------------------------------
                     It looks like SHMEM_INIT failed for some reason; your
                     parallel process is
                     likely to abort.  There are many reasons that a parallel
                     process can
                     fail during SHMEM_INIT; some of which are due to
                     configuration or environment
                     problems.  This failure appears to be an internal
                     failure; here's some
                     additional information (which may only be relevant to an
                     Open SHMEM
                     developer):

                       mca_memheap_base_select() failed
                       --&gt; Returned "Error" (-1) instead of "Success" (0)
                     --------------------------------------------------------------------------
                     --------------------------------------------------------------------------
                     SHMEM_ABORT was invoked on rank 0 (pid 189383,
                     host=atl1-01-mic0) with errorcode -1.
                     --------------------------------------------------------------------------
                     --------------------------------------------------------------------------
                     A SHMEM process is aborting at a time when it cannot
                     guarantee that all
                     of its peer processes in the job will be killed
                     properly.  You should
                     double check that everything has shut down cleanly.

                     Local host: atl1-01-mic0
                     PID:        189383
                     --------------------------------------------------------------------------
                     -------------------------------------------------------
                     Primary job  terminated normally, but 1 process returned
                     a non-zero exit code.. Per user-direction, the job has
                     been aborted.
                     -------------------------------------------------------
                     --------------------------------------------------------------------------
                     shmemrun detected that one or more processes exited with
                     non-zero status, thus causing
                     the job to be terminated. The first process to do so
                     was:

                       Process name: [[30881,1],0]
                       Exit code:    255
                     --------------------------------------------------------------------------

                     Any thoughts about where to go from here?

                     Andy

 --
 Andy Riebs
 Hewlett-Packard Company
 High Performance Computing
 +1 404 648 9024
 My opinions are not necessarily those of HP

                     _______________________________________________
                     users mailing list
                     <a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
                     Subscription:
                     <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
                     Link to this post:
                     <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2015/04/26670.php">http://www.open-mpi.org/community/lists/users/2015/04/26670.php</a>

 _______________________________________________
 users mailing list
 <a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
 Subscription: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
 Link to this post: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2015/04/26676.php">http://www.open-mpi.org/community/lists/users/2015/04/26676.php</a>

                 _______________________________________________
                 users mailing list
                 <a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
                 Subscription:
                 <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
                 Link to this post:
                 <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2015/04/26678.php">http://www.open-mpi.org/community/lists/users/2015/04/26678.php</a>

 _______________________________________________
 users mailing list
 <a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
 Subscription: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
 Link to this post: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2015/04/26679.php">http://www.open-mpi.org/community/lists/users/2015/04/26679.php</a>

             _______________________________________________
             users mailing list
             <a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
             Subscription: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
             Link to this post:
             <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2015/04/26680.php">http://www.open-mpi.org/community/lists/users/2015/04/26680.php</a>

 _______________________________________________
 users mailing list
 <a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
 Subscription: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
 Link to this post: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2015/04/26682.php">http://www.open-mpi.org/community/lists/users/2015/04/26682.php</a>

         _______________________________________________
         users mailing list
         <a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
         Subscription: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
         Link to this post:
         <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2015/04/26683.php">http://www.open-mpi.org/community/lists/users/2015/04/26683.php</a>

 _______________________________________________
 users mailing list
 <a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
 Subscription: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
 Link to this post: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2015/04/26684.php">http://www.open-mpi.org/community/lists/users/2015/04/26684.php</a>
</pre>
      </blockquote>
      <pre wrap="">
</pre>
      <blockquote type="cite">
        <pre wrap="">_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
Subscription: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2015/04/26697.php">http://www.open-mpi.org/community/lists/users/2015/04/26697.php</a>
</pre>
      </blockquote>
      <pre wrap="">
</pre>
      <br>
      <fieldset class="mimeAttachmentHeader"></fieldset>
      <br>
      <pre wrap="">_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
Subscription: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2015/04/26699.php">http://www.open-mpi.org/community/lists/users/2015/04/26699.php</a></pre>
    </blockquote>
    <br>
  </body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26701.php">John Cary: "[OMPI users] Build error with gcc-4.9.2?"</a>
<li><strong>Previous message:</strong> <a href="26699.php">Nathan Hjelm: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="26699.php">Nathan Hjelm: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26706.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26706.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
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
