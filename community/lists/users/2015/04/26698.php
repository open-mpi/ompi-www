<?
$subject_val = "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 16:17:31 2015" -->
<!-- isoreceived="20150413201731" -->
<!-- sent="Mon, 13 Apr 2015 13:17:22 -0700" -->
<!-- isosent="20150413201722" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC" -->
<!-- id="E2AF1E63-251D-422F-8409-AC80E3D5126D_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-13 16:17:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26699.php">Nathan Hjelm: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="26697.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="26697.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26699.php">Nathan Hjelm: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don&#226;&#128;&#153;t see that LD_PRELOAD showing up on the ssh path, Andy
<br>
<p><span class="quotelev1">&gt; /usr/bin/ssh mic1     PATH=/home/ariebs/mic/mpi-nightly/bin:$PATH ; export PATH ; LD_LIBRARY_PATH=/home/ariebs/mic/mpi-nightly/lib:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ; DYLD_LIBRARY_PATH=/home/ariebs/mic/mpi-nightly/lib:$DYLD_LIBRARY_PATH ; export DYLD_LIBRARY_PATH ;   /home/ariebs/mic/mpi-nightly/bin/orted --hnp-topo-sig 0N:1S:0L3:61L2:61L1:61C:244H:k1om -mca ess &quot;env&quot; -mca orte_ess_jobid &quot;1901330432&quot; -mca orte_ess_vpid 1 -mca orte_ess_num_procs &quot;2&quot; -mca orte_hnp_uri &quot;1901330432.0;usock;tcp://16.113.180.125,192.0.0.121:34249;ud://2359370.86.1&quot; --tree-spawn --mca spml &quot;yoda&quot; --mca btl &quot;sm,self,tcp&quot; --mca plm_base_verbose &quot;5&quot; --mca memheap_base_verbose &quot;100&quot; -mca plm &quot;rsh&quot; -mca rmaps_ppr_n_pernode &#226;&#128;&#156;2&quot;
</span><br>
<p>The -x option doesn&#226;&#128;&#153;t impact the ssh line - it only forwards the value to the application&#226;&#128;&#153;s environment. You&#226;&#128;&#153;ll need to include the path in your LD_LIBRARY_PATH
<br>
<p><p><span class="quotelev1">&gt; On Apr 13, 2015, at 1:06 PM, Andy Riebs &lt;andy.riebs_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Progress!  I can run my trivial program on the local PHI, but not the other PHI, on the system. Here are the interesting parts:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A pretty good recipe with last night's nightly master:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./configure --prefix=/home/ariebs/mic/mpi-nightly CC=&quot;icc -mmic&quot; CXX=&quot;icpc -mmic&quot; \
</span><br>
<span class="quotelev1">&gt;     --build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux \
</span><br>
<span class="quotelev1">&gt;      AR=x86_64-k1om-linux-ar RANLIB=x86_64-k1om-linux-ranlib  LD=x86_64-k1om-linux-ld \
</span><br>
<span class="quotelev1">&gt;      --enable-mpirun-prefix-by-default --disable-io-romio --disable-mpi-fortran \
</span><br>
<span class="quotelev1">&gt;      --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;      --enable-debug
</span><br>
<span class="quotelev1">&gt; $ make &amp;&amp; make install
</span><br>
<span class="quotelev1">&gt; $ shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -H localhost -N 2 --mca spml yoda --mca btl sm,self,tcp $PWD/mic.out
</span><br>
<span class="quotelev1">&gt; Hello World from process 0 of 2
</span><br>
<span class="quotelev1">&gt; Hello World from process 1 of 2
</span><br>
<span class="quotelev1">&gt; $ shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -H localhost -N 2 --mca spml yoda --mca btl openib,sm,self $PWD/mic.out
</span><br>
<span class="quotelev1">&gt; Hello World from process 0 of 2
</span><br>
<span class="quotelev1">&gt; Hello World from process 1 of 2
</span><br>
<span class="quotelev1">&gt; $ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I can't seem to cross the fabric. I can ssh freely back and forth between mic0 and mic1. However, running the next 2 tests from mic0, it  certainly seems like the second one should work, too:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -H mic0 -N 2 --mca spml yoda --mca btl sm,self,tcp $PWD/mic.out
</span><br>
<span class="quotelev1">&gt; Hello World from process 0 of 2
</span><br>
<span class="quotelev1">&gt; Hello World from process 1 of 2
</span><br>
<span class="quotelev1">&gt; $ shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -H mic1 -N 2 --mca spml yoda --mca btl sm,self,tcp $PWD/mic.out
</span><br>
<span class="quotelev1">&gt; /home/ariebs/mic/mpi-nightly/bin/orted: error while loading shared libraries: libimf.so: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt; This usually is caused by:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev1">&gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev1">&gt;   Please verify your allocation and authorities.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev1">&gt;   Please check with your sys admin to determine the correct location to use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *  compilation of the orted with dynamic libraries when static are required
</span><br>
<span class="quotelev1">&gt;   (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev1">&gt;   one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev1">&gt;   lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev1">&gt;   them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev1">&gt;   and network routing requirements).
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (Note that I get the same results with &quot;--mca btl openib,sm,self&quot;....)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ssh mic1 file /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so
</span><br>
<span class="quotelev1">&gt; /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so: ELF 64-bit LSB shared object, Intel Xeon Phi coprocessor (k1om), version 1 (SYSV), dynamically linked, not stripped
</span><br>
<span class="quotelev1">&gt; $ shmemrun -x LD_PRELOAD=/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so -H mic1 -N 2 --mca spml yoda --mca btl sm,self,tcp $PWD/mic.out
</span><br>
<span class="quotelev1">&gt; /home/ariebs/mic/mpi-nightly/bin/orted: error while loading shared libraries: libimf.so: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt; This usually is caused by:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev1">&gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev1">&gt;   Please verify your allocation and authorities.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev1">&gt;   Please check with your sys admin to determine the correct location to use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *  compilation of the orted with dynamic libraries when static are required
</span><br>
<span class="quotelev1">&gt;   (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev1">&gt;   one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev1">&gt;   lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev1">&gt;   them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev1">&gt;   and network routing requirements).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Following here is 
</span><br>
<span class="quotelev1">&gt; - IB information
</span><br>
<span class="quotelev1">&gt; - Running the failing case with lots of debugging information. (As you might imagine, I've tried 17 ways from Sunday to try to ensure that libimf.so is found.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ibv_devices
</span><br>
<span class="quotelev1">&gt;     device                 node GUID
</span><br>
<span class="quotelev1">&gt;     ------              ----------------
</span><br>
<span class="quotelev1">&gt;     mlx4_0              24be05ffffa57160
</span><br>
<span class="quotelev1">&gt;     scif0               4c79bafffe4402b6
</span><br>
<span class="quotelev1">&gt; $ ibv_devinfo
</span><br>
<span class="quotelev1">&gt; hca_id: mlx4_0
</span><br>
<span class="quotelev1">&gt;         transport:                      InfiniBand (0)
</span><br>
<span class="quotelev1">&gt;         fw_ver:                         2.11.1250
</span><br>
<span class="quotelev1">&gt;         node_guid:                      24be:05ff:ffa5:7160
</span><br>
<span class="quotelev1">&gt;         sys_image_guid:                 24be:05ff:ffa5:7163
</span><br>
<span class="quotelev1">&gt;         vendor_id:                      0x02c9
</span><br>
<span class="quotelev1">&gt;         vendor_part_id:                 4099
</span><br>
<span class="quotelev1">&gt;         hw_ver:                         0x0
</span><br>
<span class="quotelev1">&gt;         phys_port_cnt:                  2
</span><br>
<span class="quotelev1">&gt;                 port:   1
</span><br>
<span class="quotelev1">&gt;                         state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                         max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                         active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                         sm_lid:                 8
</span><br>
<span class="quotelev1">&gt;                         port_lid:               86
</span><br>
<span class="quotelev1">&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;                         link_layer:             InfiniBand
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 port:   2
</span><br>
<span class="quotelev1">&gt;                         state:                  PORT_DOWN (1)
</span><br>
<span class="quotelev1">&gt;                         max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                         active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                         sm_lid:                 0
</span><br>
<span class="quotelev1">&gt;                         port_lid:               0
</span><br>
<span class="quotelev1">&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;                         link_layer:             InfiniBand
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hca_id: scif0
</span><br>
<span class="quotelev1">&gt;         transport:                      SCIF (2)
</span><br>
<span class="quotelev1">&gt;         fw_ver:                         0.0.1
</span><br>
<span class="quotelev1">&gt;         node_guid:                      4c79:baff:fe44:02b6
</span><br>
<span class="quotelev1">&gt;         sys_image_guid:                 4c79:baff:fe44:02b6
</span><br>
<span class="quotelev1">&gt;         vendor_id:                      0x8086
</span><br>
<span class="quotelev1">&gt;         vendor_part_id:                 0
</span><br>
<span class="quotelev1">&gt;         hw_ver:                         0x1
</span><br>
<span class="quotelev1">&gt;         phys_port_cnt:                  1
</span><br>
<span class="quotelev1">&gt;                 port:   1
</span><br>
<span class="quotelev1">&gt;                         state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                         max_mtu:                4096 (5)
</span><br>
<span class="quotelev1">&gt;                         active_mtu:             4096 (5)
</span><br>
<span class="quotelev1">&gt;                         sm_lid:                 1
</span><br>
<span class="quotelev1">&gt;                         port_lid:               1001
</span><br>
<span class="quotelev1">&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;                         link_layer:             SCIF
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ shmemrun -x LD_PRELOAD=/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so -H mic1 -N 2 --mca spml yoda --mca btl sm,self,tcp --mca plm_base_verbose 5 --mca memheap_base_verbose 100 $PWD/mic.out
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[INVALID],INVALID] plm:rsh_lookup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] mca:base:select:(  plm) Querying component [isolated]
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] mca:base:select:(  plm) Query of component [isolated] set priority to 0
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] mca:base:select:(  plm) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] plm:base:set_hnp_name: initial bias 191024 nodename hash 4121194178
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] plm:base:set_hnp_name: final jobfam 29012
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] plm:rsh_setup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_job
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_vm creating map
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] setup:vm: working unmanaged allocation
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] using dash_host
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] checking node mic1
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_vm add new daemon [[29012,0],1]
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_vm assigning new daemon [[29012,0],1] to node mic1
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: launching vm
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: local shell: 0 (bash)
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: remote shell: 0 (bash)
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt;         /usr/bin/ssh &lt;template&gt;     PATH=/home/ariebs/mic/mpi-nightly/bin:$PATH ; export PATH ; LD_LIBRARY_PATH=/home/ariebs/mic/mpi-nightly/lib:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ; DYLD_LIBRARY_PATH=/home/ariebs/mic/mpi-nightly/lib:$DYLD_LIBRARY_PATH ; export DYLD_LIBRARY_PATH ;   /home/ariebs/mic/mpi-nightly/bin/orted --hnp-topo-sig 0N:1S:0L3:61L2:61L1:61C:244H:k1om -mca ess &quot;env&quot; -mca orte_ess_jobid &quot;1901330432&quot; -mca orte_ess_vpid &quot;&lt;template&gt;&quot; -mca orte_ess_num_procs &quot;2&quot; -mca orte_hnp_uri &quot;1901330432.0;usock;tcp://16.113.180.125,192.0.0.121:34249;ud://2359370.86.1&quot; --tree-spawn --mca spml &quot;yoda&quot; --mca btl &quot;sm,self,tcp&quot; --mca plm_base_verbose &quot;5&quot; --mca memheap_base_verbose &quot;100&quot; -mca plm &quot;rsh&quot; -mca rmaps_ppr_n_pernode &quot;2&quot;
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] plm:rsh:launch daemon 0 not a child of mine
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: adding node mic1 to launch list
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: activating launch event
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: recording launch of daemon [[29012,0],1]
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: executing: (/usr/bin/ssh) [/usr/bin/ssh mic1     PATH=/home/ariebs/mic/mpi-nightly/bin:$PATH ; export PATH ; LD_LIBRARY_PATH=/home/ariebs/mic/mpi-nightly/lib:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ; DYLD_LIBRARY_PATH=/home/ariebs/mic/mpi-nightly/lib:$DYLD_LIBRARY_PATH ; export DYLD_LIBRARY_PATH ;   /home/ariebs/mic/mpi-nightly/bin/orted --hnp-topo-sig 0N:1S:0L3:61L2:61L1:61C:244H:k1om -mca ess &quot;env&quot; -mca orte_ess_jobid &quot;1901330432&quot; -mca orte_ess_vpid 1 -mca orte_ess_num_procs &quot;2&quot; -mca orte_hnp_uri &quot;1901330432.0;usock;tcp://16.113.180.125,192.0.0.121:34249;ud://2359370.86.1&quot; --tree-spawn --mca spml &quot;yoda&quot; --mca btl &quot;sm,self,tcp&quot; --mca plm_base_verbose &quot;5&quot; --mca memheap_base_verbose &quot;100&quot; -mca plm &quot;rsh&quot; -mca rmaps_ppr_n_pernode &quot;2&quot;]
</span><br>
<span class="quotelev1">&gt; /home/ariebs/mic/mpi-nightly/bin/orted: error while loading shared libraries: libimf.so: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] daemon 1 failed with status 127
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] plm:base:orted_cmd sending orted_exit commands
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt; This usually is caused by:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev1">&gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev1">&gt;   Please verify your allocation and authorities.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev1">&gt;   Please check with your sys admin to determine the correct location to use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *  compilation of the orted with dynamic libraries when static are required
</span><br>
<span class="quotelev1">&gt;   (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev1">&gt;   one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev1">&gt;   lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev1">&gt;   them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev1">&gt;   and network routing requirements).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [atl1-01-mic0:191024] [[29012,0],0] plm:base:receive stop comm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 04/13/2015 08:50 AM, Andy Riebs wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here are the results with last night's &quot;master&quot; nightly, openmpi-dev-1487-g9c6d452.tar.bz2, and adding the memheap_base_verbose option (yes, it looks like the &quot;ERROR_LOG&quot; problem has gone away):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ cat /proc/sys/kernel/shmmax
</span><br>
<span class="quotelev2">&gt;&gt; 33554432
</span><br>
<span class="quotelev2">&gt;&gt; $ cat /proc/sys/kernel/shmall
</span><br>
<span class="quotelev2">&gt;&gt; 2097152
</span><br>
<span class="quotelev2">&gt;&gt; $ cat /proc/sys/kernel/shmmni
</span><br>
<span class="quotelev2">&gt;&gt; 4096
</span><br>
<span class="quotelev2">&gt;&gt; $ export SHMEM_SYMMETRIC_HEAP=1M
</span><br>
<span class="quotelev2">&gt;&gt; $ shmemrun -H localhost -N 2 --mca sshmem mmap  --mca plm_base_verbose 5 --mca memheap_base_verbose 100 $PWD/mic.out
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] [[INVALID],INVALID] plm:rsh_lookup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] mca:base:select:(  plm) Querying component [isolated]
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] mca:base:select:(  plm) Query of component [isolated] set priority to 0
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] mca:base:select:(  plm) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] plm:base:set_hnp_name: initial bias 190439 nodename hash 4121194178
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] plm:base:set_hnp_name: final jobfam 31875
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] [[31875,0],0] plm:rsh_setup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] [[31875,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] [[31875,0],0] plm:base:setup_job
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] [[31875,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] [[31875,0],0] plm:base:setup_vm creating map
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] [[31875,0],0] setup:vm: working unmanaged allocation
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] [[31875,0],0] using dash_host
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] [[31875,0],0] checking node atl1-01-mic0
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] [[31875,0],0] ignoring myself
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] [[31875,0],0] plm:base:setup_vm only HNP in allocation
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] [[31875,0],0] complete_setup on job [31875,1]
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] [[31875,0],0] plm:base:launch_apps for job [31875,1]
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] [[31875,0],0] plm:base:launch wiring up iof for job [31875,1]
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] [[31875,0],0] plm:base:launch [31875,1] registered
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] [[31875,0],0] plm:base:launch job [31875,1] is not a dynamic spawn
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190441] mca: base: components_register: registering memheap components
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190441] mca: base: components_register: found loaded component buddy
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190441] mca: base: components_register: component buddy has no register or open function
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190442] mca: base: components_register: registering memheap components
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190442] mca: base: components_register: found loaded component buddy
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190442] mca: base: components_register: component buddy has no register or open function
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190442] mca: base: components_register: found loaded component ptmalloc
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190442] mca: base: components_register: component ptmalloc has no register or open function
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190441] mca: base: components_register: found loaded component ptmalloc
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190441] mca: base: components_register: component ptmalloc has no register or open function
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190441] mca: base: components_open: opening memheap components
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190441] mca: base: components_open: found loaded component buddy
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190441] mca: base: components_open: component buddy open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190441] mca: base: components_open: found loaded component ptmalloc
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190441] mca: base: components_open: component ptmalloc open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190442] mca: base: components_open: opening memheap components
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190442] mca: base: components_open: found loaded component buddy
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190442] mca: base: components_open: component buddy open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190442] mca: base: components_open: found loaded component ptmalloc
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190442] mca: base: components_open: component ptmalloc open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190442] base/memheap_base_alloc.c:38 - mca_memheap_base_alloc_init() Memheap alloc memory: 270532608 byte(s), 1 segments by method: 1
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190441] base/memheap_base_alloc.c:38 - mca_memheap_base_alloc_init() Memheap alloc memory: 270532608 byte(s), 1 segments by method: 1
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190442] base/memheap_base_static.c:205 - _load_segments() add: 00600000-00601000 rw-p 00000000 00:11 6029314                                  /home/ariebs/bench/hello/mic.out
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190441] base/memheap_base_static.c:205 - _load_segments() add: 00600000-00601000 rw-p 00000000 00:11 6029314                                  /home/ariebs/bench/hello/mic.out
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190442] base/memheap_base_static.c:75 - mca_memheap_base_static_init() Memheap static memory: 3824 byte(s), 2 segments
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190442] base/memheap_base_register.c:39 - mca_memheap_base_reg() register seg#00: 0x0xff000000 - 0x0x10f200000 270532608 bytes type=0x1 id=0xFFFFFFFF
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190441] base/memheap_base_static.c:75 - mca_memheap_base_static_init() Memheap static memory: 3824 byte(s), 2 segments
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190441] base/memheap_base_register.c:39 - mca_memheap_base_reg() register seg#00: 0x0xff000000 - 0x0x10f200000 270532608 bytes type=0x1 id=0xFFFFFFFF
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190442] Error base/memheap_base_register.c:130 - _reg_segment() Failed to register segment
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190441] Error base/memheap_base_register.c:130 - _reg_segment() Failed to register segment
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190442] Error: pshmem_init.c:61 - shmem_init() SHMEM failed to initialize - aborting
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190441] Error: pshmem_init.c:61 - shmem_init() SHMEM failed to initialize - aborting
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like SHMEM_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during SHMEM_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open SHMEM
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   mca_memheap_base_select() failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; SHMEM_ABORT was invoked on rank 0 (pid 190441, host=atl1-01-mic0) with errorcode -1.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A SHMEM process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev2">&gt;&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev2">&gt;&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Local host: atl1-01-mic0
</span><br>
<span class="quotelev2">&gt;&gt; PID:        190441
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] [[31875,0],0] plm:base:orted_cmd sending orted_exit commands
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; shmemrun detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev2">&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Process name: [[31875,1],0]
</span><br>
<span class="quotelev2">&gt;&gt;   Exit code:    255
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] 1 more process has sent help message help-shmem-runtime.txt / shmem_init:startup:internal-failure
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] 1 more process has sent help message help-shmem-api.txt / shmem-abort
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] 1 more process has sent help message help-shmem-runtime.txt / oshmem shmem abort:cannot guarantee all killed
</span><br>
<span class="quotelev2">&gt;&gt; [atl1-01-mic0:190439] [[31875,0],0] plm:base:receive stop comm
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 04/12/2015 03:09 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry about that - I hadn&#226;&#128;&#153;t brought it over to the 1.8 branch yet. I&#226;&#128;&#153;ve done so now, which means the ERROR_LOG shouldn&#226;&#128;&#153;t show up any more. It won&#226;&#128;&#153;t fix the memheap problem, though.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You might try adding &#226;&#128;&#156;--mca memheap_base_verbose 100&#226;&#128;&#157; to your cmd line so we can see why none of the memheap components are being selected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 12, 2015, at 11:30 AM, Andy Riebs &lt;andy.riebs_at_[hidden] &lt;mailto:andy.riebs_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here's the output with openmpi-v1.8.4-202-gc2da6a5.tar.bz2 &lt;<a href="https://www.open-mpi.org/nightly/v1.8/openmpi-v1.8.4-202-gc2da6a5.tar.bz2">https://www.open-mpi.org/nightly/v1.8/openmpi-v1.8.4-202-gc2da6a5.tar.bz2</a>&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ shmemrun -H localhost -N 2 --mca sshmem mmap  --mca plm_base_verbose 5 $PWD/mic.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] [[INVALID],INVALID] plm:rsh_lookup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] mca:base:select:(  plm) Querying component [isolated]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] mca:base:select:(  plm) Query of component [isolated] set priority to 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] mca:base:select:(  plm) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] plm:base:set_hnp_name: initial bias 190189 nodename hash 4121194178
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] plm:base:set_hnp_name: final jobfam 32137
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] [[32137,0],0] plm:rsh_setup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] [[32137,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_vm creating map
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] [[32137,0],0] setup:vm: working unmanaged allocation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] [[32137,0],0] using dash_host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] [[32137,0],0] checking node atl1-01-mic0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] [[32137,0],0] ignoring myself
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_vm only HNP in allocation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] [[32137,0],0] complete_setup on job [32137,1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] [[32137,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 440
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] [[32137,0],0] plm:base:launch_apps for job [32137,1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] [[32137,0],0] plm:base:launch wiring up iof for job [32137,1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] [[32137,0],0] plm:base:launch [32137,1] registered
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] [[32137,0],0] plm:base:launch job [32137,1] is not a dynamic spawn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It looks like SHMEM_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fail during SHMEM_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; additional information (which may only be relevant to an Open SHMEM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   mca_memheap_base_select() failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190191] Error: pshmem_init.c:61 - shmem_init() SHMEM failed to initialize - aborting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190192] Error: pshmem_init.c:61 - shmem_init() SHMEM failed to initialize - aborting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SHMEM_ABORT was invoked on rank 1 (pid 190192, host=atl1-01-mic0) with errorcode -1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A SHMEM process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Local host: atl1-01-mic0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PID:        190192
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] [[32137,0],0] plm:base:orted_cmd sending orted_exit commands
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shmemrun detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Process name: [[32137,1],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Exit code:    255
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] 1 more process has sent help message help-shmem-runtime.txt / shmem_init:startup:internal-failure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] 1 more process has sent help message help-shmem-api.txt / shmem-abort
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] 1 more process has sent help message help-shmem-runtime.txt / oshmem shmem abort:cannot guarantee all killed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [atl1-01-mic0:190189] [[32137,0],0] plm:base:receive stop comm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 04/11/2015 07:41 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Got it - thanks. I fixed that ERROR_LOG issue (I think- please verify). I suspect the memheap issue relates to something else, but I probably need to let the OSHMEM folks comment on it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Apr 11, 2015, at 9:52 AM, Andy Riebs &lt;andy.riebs_at_[hidden] &lt;mailto:andy.riebs_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Everything is built on the Xeon side, with the icc &quot;-mmic&quot; switch. I then ssh into one of the PHIs, and run shmemrun from there.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 04/11/2015 12:00 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Let me try to understand the setup a little better. Are you running shmemrun on the PHI itself? Or is it running on the host processor, and you are trying to spawn a process onto the Phi?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Apr 11, 2015, at 7:55 AM, Andy Riebs &lt;andy.riebs_at_[hidden] &lt;mailto:andy.riebs_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Yes, this is attempting to get OSHMEM to run on the Phi.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I grabbed openmpi-dev-1484-g033418f.tar.bz2 and configured it with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ ./configure --prefix=/home/ariebs/mic/mpi-nightly    CC=icc -mmic CXX=icpc -mmic    \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     --build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux    \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      AR=x86_64-k1om-linux-ar RANLIB=x86_64-k1om-linux-ranlib  LD=x86_64-k1om-linux-ld   \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      --enable-mpirun-prefix-by-default --disable-io-romio     --disable-mpi-fortran    \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      --enable-debug     --enable-mca-no-build=btl-usnic,btl-openib,common-verbs,oob-ud
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (Note that I had to add &quot;oob-ud&quot; to the &quot;--enable-mca-no-build&quot; option, as the build complained that mca oob/ud needed mca common-verbs.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; With that configuration, here is what I am seeing now...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ export SHMEM_SYMMETRIC_HEAP_SIZE=1G
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ shmemrun -H localhost -N 2 --mca sshmem mmap  --mca plm_base_verbose 5 $PWD/mic.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] [[INVALID],INVALID] plm:rsh_lookup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] mca:base:select:(  plm) Querying component [isolated]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] mca:base:select:(  plm) Query of component [isolated] set priority to 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] mca:base:select:(  plm) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] plm:base:set_hnp_name: initial bias 189895 nodename hash 4121194178
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] plm:base:set_hnp_name: final jobfam 32419
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:rsh_setup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_vm creating map
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] setup:vm: working unmanaged allocation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] using dash_host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] checking node atl1-01-mic0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] ignoring myself
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_vm only HNP in allocation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] complete_setup on job [32419,1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 440
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch_apps for job [32419,1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch wiring up iof for job [32419,1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch [32419,1] registered
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch job [32419,1] is not a dynamic spawn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189899] Error: pshmem_init.c:61 - shmem_init() SHMEM failed to initialize - aborting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189898] Error: pshmem_init.c:61 - shmem_init() SHMEM failed to initialize - aborting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It looks like SHMEM_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fail during SHMEM_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; additional information (which may only be relevant to an Open SHMEM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   mca_memheap_base_select() failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SHMEM_ABORT was invoked on rank 1 (pid 189899, host=atl1-01-mic0) with errorcode -1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; A SHMEM process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local host: atl1-01-mic0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PID:        189899
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:base:orted_cmd sending orted_exit commands
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; shmemrun detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Process name: [[32419,1],1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Exit code:    255
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] 1 more process has sent help message help-shmem-runtime.txt / shmem_init:startup:internal-failure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] 1 more process has sent help message help-shmem-api.txt / shmem-abort
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] 1 more process has sent help message help-shmem-runtime.txt / oshmem shmem abort:cannot guarantee all killed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:base:receive stop comm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 04/10/2015 06:37 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Andy - could you please try the current 1.8.5 nightly tarball and see if it helps? The error log indicates that it is failing to get the topology from some daemon, I&#239;&#191;&#189;m assuming the one on the Phi?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You might also add &#239;&#191;&#189;enable-debug to that configure line and then put -mca plm_base_verbose on the shmemrun cmd to get more help
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Apr 10, 2015, at 11:55 AM, Andy Riebs &lt;andy.riebs_at_[hidden] &lt;mailto:andy.riebs_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Summary: MPI jobs work fine, SHMEM jobs work just often enough to be tantalizing, on an Intel Xeon Phi/MIC system.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Longer version
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks to the excellent write-up last June (&lt;<a href="https://www.open-mpi.org/community/lists/users/2014/06/24711.php">https://www.open-mpi.org/community/lists/users/2014/06/24711.php</a>&gt; &lt;<a href="https://www.open-mpi.org/community/lists/users/2014/06/24711.php">https://www.open-mpi.org/community/lists/users/2014/06/24711.php</a>&gt;), I have been able to build a version of Open MPI for the Xeon Phi coprocessor that runs MPI jobs on the Phi coprocessor with no problem, but not SHMEM jobs.  Just at the point where I was about to document the problems I was having with SHMEM, my trivial SHMEM job worked. And then failed when I tried to run it again, immediately afterwards. I have a feeling I may be in uncharted  territory here.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Environment
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; RHEL 6.5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Intel Composer XE 2015
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Xeon Phi/MIC
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Configuration
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ export PATH=/usr/linux-k1om-4.7/bin/:$PATH
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ source /opt/intel/15.0/composer_xe_2015/bin/compilervars.sh intel64
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ ./configure --prefix=/home/ariebs/mic/mpi \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    CC=&quot;icc -mmic&quot; CXX=&quot;icpc -mmic&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    --build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     AR=x86_64-k1om-linux-ar RANLIB=x86_64-k1om-linux-ranlib \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     LD=x86_64-k1om-linux-ld \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     --enable-mpirun-prefix-by-default --disable-io-romio \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     --disable-vt --disable-mpi-fortran \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     --enable-mca-no-build=btl-usnic,btl-openib,common-verbs
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ make
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ make install
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Test program
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;shmem.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         int me, num_pe;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         shmem_init();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         num_pe = num_pes();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         me = my_pe();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         printf(&quot;Hello World from process %ld of %ld\n&quot;, me, num_pe);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         exit(0);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Building the program
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; export PATH=/home/ariebs/mic/mpi/bin:$PATH
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; export PATH=/usr/linux-k1om-4.7/bin/:$PATH
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; source /opt/intel/15.0/composer_xe_2015/bin/compilervars.sh intel64
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; export LD_LIBRARY_PATH=/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; icc -mmic -std=gnu99 -I/home/ariebs/mic/mpi/include -pthread \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         -Wl,-rpath -Wl,/home/ariebs/mic/mpi/lib -Wl,--enable-new-dtags \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         -L/home/ariebs/mic/mpi/lib -loshmem -lmpi -lopen-rte -lopen-pal \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         -lm -ldl -lutil \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         -Wl,-rpath -Wl,/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         -L/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         -o mic.out  shmem_hello.c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Running the program
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (Note that the program had been consistently failing. Then, when I logged back into the system to capture the results, it worked once,  and then immediately failed when I tried again, as shown below. Logging in and out isn't sufficient to correct the problem. Overall, I think I had 3 successful runs in 30-40 attempts.)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ shmemrun -H localhost -N 2 --mca sshmem mmap ./mic.out
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189372] [[30936,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 426
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello World from process 0 of 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello World from process 1 of 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ shmemrun -H localhost -N 2 --mca sshmem mmap ./mic.out
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189381] [[30881,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 426
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189383] Error: pshmem_init.c:61 - shmem_init() SHMEM failed to initialize - aborting
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It looks like SHMEM_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fail during SHMEM_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; additional information (which may only be relevant to an Open SHMEM
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   mca_memheap_base_select() failed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SHMEM_ABORT was invoked on rank 0 (pid 189383, host=atl1-01-mic0) with errorcode -1.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; A SHMEM process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local host: atl1-01-mic0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PID:        189383
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; shmemrun detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Process name: [[30881,1],0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Exit code:    255
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any thoughts about where to go from here?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Andy
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Andy Riebs
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hewlett-Packard Company
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; High Performance Computing
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; +1 404 648 9024
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; My opinions are not necessarily those of HP
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26670.php">http://www.open-mpi.org/community/lists/users/2015/04/26670.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26670.php">http://www.open-mpi.org/community/lists/users/2015/04/26670.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26676.php">http://www.open-mpi.org/community/lists/users/2015/04/26676.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26676.php">http://www.open-mpi.org/community/lists/users/2015/04/26676.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26678.php">http://www.open-mpi.org/community/lists/users/2015/04/26678.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26678.php">http://www.open-mpi.org/community/lists/users/2015/04/26678.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26679.php">http://www.open-mpi.org/community/lists/users/2015/04/26679.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26679.php">http://www.open-mpi.org/community/lists/users/2015/04/26679.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26680.php">http://www.open-mpi.org/community/lists/users/2015/04/26680.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26680.php">http://www.open-mpi.org/community/lists/users/2015/04/26680.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26682.php">http://www.open-mpi.org/community/lists/users/2015/04/26682.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26682.php">http://www.open-mpi.org/community/lists/users/2015/04/26682.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26683.php">http://www.open-mpi.org/community/lists/users/2015/04/26683.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26683.php">http://www.open-mpi.org/community/lists/users/2015/04/26683.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26684.php">http://www.open-mpi.org/community/lists/users/2015/04/26684.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26684.php">http://www.open-mpi.org/community/lists/users/2015/04/26684.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26697.php">http://www.open-mpi.org/community/lists/users/2015/04/26697.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26698/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26699.php">Nathan Hjelm: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="26697.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="26697.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26699.php">Nathan Hjelm: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
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
