<?
$subject_val = "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 19:47:38 2015" -->
<!-- isoreceived="20150413234738" -->
<!-- sent="Mon, 13 Apr 2015 16:47:08 -0700" -->
<!-- isosent="20150413234708" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC" -->
<!-- id="0FD29869-A148-4088-BC82-F56A94C8BBF6_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="552C2E13.1000008_at_hp.com" -->
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
<strong>Date:</strong> 2015-04-13 19:47:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26707.php">XingFENG: "Re: [OMPI users] Running mpi with different account"</a>
<li><strong>Previous message:</strong> <a href="26705.php">John Cary: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<li><strong>In reply to:</strong> <a href="26700.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26716.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26716.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Weird. I&#226;&#128;&#153;m not sure what to try at that point - IIRC, building static won&#226;&#128;&#153;t resolve this problem (but you could try and see). You could add the following to the cmd line and see if it tells us anything useful:
<br>
<p>&#226;&#128;&#148;leave-session-attached &#226;&#128;&#148;mca mca_component_show_load_errors 1
<br>
<p>You might also do an ldd on /home/ariebs/mic/mpi-nightly/bin/orted and see where it is looking for libimf since it (and not mic.out) is the one complaining
<br>
<p><p><span class="quotelev1">&gt; On Apr 13, 2015, at 1:58 PM, Andy Riebs &lt;andy.riebs_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph and Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem may be something trivial, as I don't typically use &quot;shmemrun&quot; to start jobs. With the following, I *think* I've  demonstrated that the problem library is where it belongs on the remote system:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ldd mic.out
</span><br>
<span class="quotelev1">&gt;         linux-vdso.so.1 =&gt;  (0x00007fffb83ff000)
</span><br>
<span class="quotelev1">&gt;         liboshmem.so.0 =&gt; /home/ariebs/mic/mpi-nightly/lib/liboshmem.so.0 (0x00002b059cfbb000)
</span><br>
<span class="quotelev1">&gt;         libmpi.so.0 =&gt; /home/ariebs/mic/mpi-nightly/lib/libmpi.so.0 (0x00002b059d35a000)
</span><br>
<span class="quotelev1">&gt;         libopen-rte.so.0 =&gt; /home/ariebs/mic/mpi-nightly/lib/libopen-rte.so.0 (0x00002b059d7e3000)
</span><br>
<span class="quotelev1">&gt;         libopen-pal.so.0 =&gt; /home/ariebs/mic/mpi-nightly/lib/libopen-pal.so.0 (0x00002b059db53000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00002b059df3d000)
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002b059e16c000)
</span><br>
<span class="quotelev1">&gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002b059e371000)
</span><br>
<span class="quotelev1">&gt;         libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00002b059e574000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002b059e786000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00002b059e9a4000)
</span><br>
<span class="quotelev1">&gt;         librt.so.1 =&gt; /lib64/librt.so.1 (0x00002b059ecfc000)
</span><br>
<span class="quotelev1">&gt;         libimf.so =&gt; /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so (0x00002b059ef04000)
</span><br>
<span class="quotelev1">&gt;         libsvml.so =&gt; /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libsvml.so (0x00002b059f356000)
</span><br>
<span class="quotelev1">&gt;         libirng.so =&gt; /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libirng.so (0x00002b059fbef000)
</span><br>
<span class="quotelev1">&gt;         libintlc.so.5 =&gt; /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libintlc.so.5 (0x00002b059fe02000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-k1om.so.2 (0x00002b059cd9a000)
</span><br>
<span class="quotelev1">&gt; $ echo $LD_LIBRARY_PATH 
</span><br>
<span class="quotelev1">&gt; /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic:/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/intel64:/opt/intel/mic/coi/host-linux-release/lib:/opt/intel/mic/myo/lib:/opt/intel/15.0/composer_xe_2015.2.164/mpirt/lib/intel64:/opt/intel/15.0/composer_xe_2015.2.164/ipp/../compiler/lib/intel64:/opt/intel/15.0/composer_xe_2015.2.164/ipp/lib/intel64:/opt/intel/15.0/composer_xe_2015.2.164/ipp/tools/intel64/perfsys:/opt/intel/mic/coi/host-linux-release/lib:/opt/intel/mic/myo/lib:/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/intel64:/opt/intel/15.0/composer_xe_2015.2.164/mkl/lib/intel64:/opt/intel/15.0/composer_xe_2015.2.164/tbb/lib/intel64/gcc4.1:/opt/intel/15.0/composer_xe_2015.2.164/debugger/ipt/ia32/lib
</span><br>
<span class="quotelev1">&gt; $ ssh mic1 file /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so
</span><br>
<span class="quotelev1">&gt; /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so: ELF 64-bit LSB shared object, Intel Xeon Phi coprocessor (k1om), version 1 (SYSV), dynamically linked, not stripped
</span><br>
<span class="quotelev1">&gt; $ shmemrun -H mic1 -N 2 --mca btl scif,self $PWD/mic.out
</span><br>
<span class="quotelev1">&gt; /home/ariebs/mic/mpi-nightly/bin/orted: error while loading shared libraries: libimf.so: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 04/13/2015 04:25 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; For talking between PHIs on the same system I recommend using the scif
</span><br>
<span class="quotelev2">&gt;&gt; BTL NOT tcp.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That said, it looks like the LD_LIBRARY_PATH is wrong on the remote
</span><br>
<span class="quotelev2">&gt;&gt; system. It looks like it can't find the intel compiler libraries.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan Hjelm
</span><br>
<span class="quotelev2">&gt;&gt; HPC-5, LANL
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Apr 13, 2015 at 04:06:21PM -0400, Andy Riebs wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Progress!  I can run my trivial program on the local PHI, but not the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    other PHI, on the system. Here are the interesting parts:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    A pretty good recipe with last night's nightly master:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $ ./configure --prefix=/home/ariebs/mic/mpi-nightly CC=&quot;icc -mmic&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    CXX=&quot;icpc -mmic&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        --build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         AR=x86_64-k1om-linux-ar RANLIB=x86_64-k1om-linux-ranlib 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    LD=x86_64-k1om-linux-ld \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         --enable-mpirun-prefix-by-default --disable-io-romio
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --disable-mpi-fortran \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         --enable-debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $ make &amp;&amp; make install
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $ shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -H localhost -N 2 --mca spml
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    yoda --mca btl sm,self,tcp $PWD/mic.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Hello World from process 0 of 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Hello World from process 1 of 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $ shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -H localhost -N 2 --mca spml
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    yoda --mca btl openib,sm,self $PWD/mic.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Hello World from process 0 of 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Hello World from process 1 of 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    However, I can't seem to cross the fabric. I can ssh freely back and forth
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    between mic0 and mic1. However, running the next 2 tests from mic0, it 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    certainly seems like the second one should work, too:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $ shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -H mic0 -N 2 --mca spml yoda
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --mca btl sm,self,tcp $PWD/mic.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Hello World from process 0 of 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Hello World from process 1 of 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $ shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -H mic1 -N 2 --mca spml yoda
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --mca btl sm,self,tcp $PWD/mic.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /home/ariebs/mic/mpi-nightly/bin/orted: error while loading shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    libraries: libimf.so: cannot open shared object file: No such file or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    This usually is caused by:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Please verify your allocation and authorities.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    * the inability to write startup files into /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Please check with your sys admin to determine the correct location to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    *  compilation of the orted with dynamic libraries when static are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    required
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      and network routing requirements).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    (Note that I get the same results with &quot;--mca btl openib,sm,self&quot;....)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $ ssh mic1 file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so: ELF
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    64-bit LSB shared object, Intel Xeon Phi coprocessor (k1om), version 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    (SYSV), dynamically linked, not stripped
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $ shmemrun -x
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    LD_PRELOAD=/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    -H mic1 -N 2 --mca spml yoda --mca btl sm,self,tcp $PWD/mic.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /home/ariebs/mic/mpi-nightly/bin/orted: error while loading shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    libraries: libimf.so: cannot open shared object file: No such file or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    This usually is caused by:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Please verify your allocation and authorities.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    * the inability to write startup files into /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Please check with your sys admin to determine the correct location to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    *  compilation of the orted with dynamic libraries when static are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    required
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      and network routing requirements).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Following here is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    - IB information
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    - Running the failing case with lots of debugging information. (As you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    might imagine, I've tried 17 ways from Sunday to try to ensure that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    libimf.so is found.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $ ibv_devices
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        device                 node GUID
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ------              ----------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        mlx4_0              24be05ffffa57160
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        scif0               4c79bafffe4402b6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $ ibv_devinfo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    hca_id: mlx4_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            transport:                      InfiniBand (0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            fw_ver:                         2.11.1250
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            node_guid:                      24be:05ff:ffa5:7160
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            sys_image_guid:                 24be:05ff:ffa5:7163
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            vendor_id:                      0x02c9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            vendor_part_id:                 4099
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            hw_ver:                         0x0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            phys_port_cnt:                  2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    port:   1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            max_mtu:                2048 (4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            active_mtu:             2048 (4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            sm_lid:                 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            port_lid:               86
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            port_lmc:               0x00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            link_layer:             InfiniBand
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    port:   2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            state:                  PORT_DOWN (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            max_mtu:                2048 (4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            active_mtu:             2048 (4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            sm_lid:                 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            port_lid:               0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            port_lmc:               0x00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            link_layer:             InfiniBand
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    hca_id: scif0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            transport:                      SCIF (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            fw_ver:                         0.0.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            node_guid:                      4c79:baff:fe44:02b6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            sys_image_guid:                 4c79:baff:fe44:02b6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            vendor_id:                      0x8086
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            vendor_part_id:                 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            hw_ver:                         0x1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            phys_port_cnt:                  1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    port:   1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            max_mtu:                4096 (5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            active_mtu:             4096 (5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            sm_lid:                 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            port_lid:               1001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            port_lmc:               0x00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            link_layer:             SCIF
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $ shmemrun -x
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    LD_PRELOAD=/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    -H mic1 -N 2 --mca spml yoda --mca btl sm,self,tcp --mca plm_base_verbose
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    5 --mca memheap_base_verbose 100 $PWD/mic.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[INVALID],INVALID] plm:rsh_lookup on agent ssh :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    rsh path NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] mca:base:select:(  plm) Query of component [rsh] set
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    priority to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] mca:base:select:(  plm) Querying component
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [isolated]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] mca:base:select:(  plm) Query of component
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [isolated] set priority to 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] mca:base:select:(  plm) Skipping component [slurm].
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Query failed to return a module
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] plm:base:set_hnp_name: initial bias 191024 nodename
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    hash 4121194178
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] plm:base:set_hnp_name: final jobfam 29012
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh_setup on agent ssh : rsh path
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_job
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_vm creating map
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] setup:vm: working unmanaged allocation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] using dash_host
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] checking node mic1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_vm add new daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [[29012,0],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:base:setup_vm assigning new daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [[29012,0],1] to node mic1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: launching vm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: local shell: 0 (bash)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: assuming same remote shell as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    local shell
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: remote shell: 0 (bash)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: final template argv:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            /usr/bin/ssh &lt;template&gt;    
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    PATH=/home/ariebs/mic/mpi-nightly/bin:$PATH ; export PATH ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    LD_LIBRARY_PATH=/home/ariebs/mic/mpi-nightly/lib:$LD_LIBRARY_PATH ; export
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    DYLD_LIBRARY_PATH=/home/ariebs/mic/mpi-nightly/lib:$DYLD_LIBRARY_PATH ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    export DYLD_LIBRARY_PATH ;   /home/ariebs/mic/mpi-nightly/bin/orted
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --hnp-topo-sig 0N:1S:0L3:61L2:61L1:61C:244H:k1om -mca ess &quot;env&quot; -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    orte_ess_jobid &quot;1901330432&quot; -mca orte_ess_vpid &quot;&lt;template&gt;&quot; -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    orte_ess_num_procs &quot;2&quot; -mca orte_hnp_uri
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    &quot;1901330432.0;usock;tcp://16.113.180.125,192.0.0.121:34249;ud://2359370.86.1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --tree-spawn --mca spml &quot;yoda&quot; --mca btl &quot;sm,self,tcp&quot; --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    plm_base_verbose &quot;5&quot; --mca memheap_base_verbose &quot;100&quot; -mca plm &quot;rsh&quot; -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    rmaps_ppr_n_pernode &quot;2&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh:launch daemon 0 not a child of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mine
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: adding node mic1 to launch
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: activating launch event
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: recording launch of daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [[29012,0],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:rsh: executing: (/usr/bin/ssh)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [/usr/bin/ssh mic1     PATH=/home/ariebs/mic/mpi-nightly/bin:$PATH ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    export PATH ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    LD_LIBRARY_PATH=/home/ariebs/mic/mpi-nightly/lib:$LD_LIBRARY_PATH ; export
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    DYLD_LIBRARY_PATH=/home/ariebs/mic/mpi-nightly/lib:$DYLD_LIBRARY_PATH ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    export DYLD_LIBRARY_PATH ;   /home/ariebs/mic/mpi-nightly/bin/orted
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --hnp-topo-sig 0N:1S:0L3:61L2:61L1:61C:244H:k1om -mca ess &quot;env&quot; -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    orte_ess_jobid &quot;1901330432&quot; -mca orte_ess_vpid 1 -mca orte_ess_num_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    &quot;2&quot; -mca orte_hnp_uri
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    &quot;1901330432.0;usock;tcp://16.113.180.125,192.0.0.121:34249;ud://2359370.86.1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --tree-spawn --mca spml &quot;yoda&quot; --mca btl &quot;sm,self,tcp&quot; --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    plm_base_verbose &quot;5&quot; --mca memheap_base_verbose &quot;100&quot; -mca plm &quot;rsh&quot; -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    rmaps_ppr_n_pernode &quot;2&quot;]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /home/ariebs/mic/mpi-nightly/bin/orted: error while loading shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    libraries: libimf.so: cannot open shared object file: No such file or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] daemon 1 failed with status 127
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:base:orted_cmd sending orted_exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    commands
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    This usually is caused by:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Please verify your allocation and authorities.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    * the inability to write startup files into /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Please check with your sys admin to determine the correct location to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    *  compilation of the orted with dynamic libraries when static are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    required
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      and network routing requirements).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [atl1-01-mic0:191024] [[29012,0],0] plm:base:receive stop comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    On 04/13/2015 08:50 AM, Andy Riebs wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Here are the results with last night's &quot;master&quot; nightly,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      openmpi-dev-1487-g9c6d452.tar.bz2, and adding the memheap_base_verbose
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      option (yes, it looks like the &quot;ERROR_LOG&quot; problem has gone away):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      $ cat /proc/sys/kernel/shmmax
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      33554432
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      $ cat /proc/sys/kernel/shmall
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      2097152
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      $ cat /proc/sys/kernel/shmmni
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      4096
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      $ export SHMEM_SYMMETRIC_HEAP=1M
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      $ shmemrun -H localhost -N 2 --mca sshmem mmap  --mca plm_base_verbose 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      --mca memheap_base_verbose 100 $PWD/mic.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] [[INVALID],INVALID] plm:rsh_lookup on agent ssh :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      rsh path NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] mca:base:select:(  plm) Query of component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      set priority to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] mca:base:select:(  plm) Querying component
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [isolated]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] mca:base:select:(  plm) Query of component
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [isolated] set priority to 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] mca:base:select:(  plm) Skipping component
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [slurm]. Query failed to return a module
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] plm:base:set_hnp_name: initial bias 190439
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      nodename hash 4121194178
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] plm:base:set_hnp_name: final jobfam 31875
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:rsh_setup on agent ssh : rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      path NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:base:setup_job
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:base:setup_vm creating map
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] [[31875,0],0] setup:vm: working unmanaged
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      allocation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] [[31875,0],0] using dash_host
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] [[31875,0],0] checking node atl1-01-mic0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] [[31875,0],0] ignoring myself
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:base:setup_vm only HNP in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      allocation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] [[31875,0],0] complete_setup on job [31875,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:base:launch_apps for job
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [31875,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:base:launch wiring up iof for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      job [31875,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:base:launch [31875,1] registered
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:base:launch job [31875,1] is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      a dynamic spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190441] mca: base: components_register: registering
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      memheap components
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190441] mca: base: components_register: found loaded
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      component buddy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190441] mca: base: components_register: component buddy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      has no register or open function
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190442] mca: base: components_register: registering
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      memheap components
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190442] mca: base: components_register: found loaded
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      component buddy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190442] mca: base: components_register: component buddy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      has no register or open function
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190442] mca: base: components_register: found loaded
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      component ptmalloc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190442] mca: base: components_register: component ptmalloc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      has no register or open function
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190441] mca: base: components_register: found loaded
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      component ptmalloc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190441] mca: base: components_register: component ptmalloc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      has no register or open function
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190441] mca: base: components_open: opening memheap
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      components
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190441] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      buddy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190441] mca: base: components_open: component buddy open
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190441] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ptmalloc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190441] mca: base: components_open: component ptmalloc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190442] mca: base: components_open: opening memheap
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      components
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190442] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      buddy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190442] mca: base: components_open: component buddy open
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190442] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ptmalloc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190442] mca: base: components_open: component ptmalloc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190442] base/memheap_base_alloc.c:38 -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      mca_memheap_base_alloc_init() Memheap alloc memory: 270532608 byte(s), 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      segments by method: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190441] base/memheap_base_alloc.c:38 -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      mca_memheap_base_alloc_init() Memheap alloc memory: 270532608 byte(s), 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      segments by method: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190442] base/memheap_base_static.c:205 - _load_segments()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      add: 00600000-00601000 rw-p 00000000 00:11
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      6029314                            /home/ariebs/bench/hello/mic.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190441] base/memheap_base_static.c:205 - _load_segments()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      add: 00600000-00601000 rw-p 00000000 00:11
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      6029314                            /home/ariebs/bench/hello/mic.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190442] base/memheap_base_static.c:75 -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      mca_memheap_base_static_init() Memheap static memory: 3824 byte(s), 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      segments
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190442] base/memheap_base_register.c:39 -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      mca_memheap_base_reg() register seg#00: 0x0xff000000 - 0x0x10f200000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      270532608 bytes type=0x1 id=0xFFFFFFFF
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190441] base/memheap_base_static.c:75 -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      mca_memheap_base_static_init() Memheap static memory: 3824 byte(s), 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      segments
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190441] base/memheap_base_register.c:39 -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      mca_memheap_base_reg() register seg#00: 0x0xff000000 - 0x0x10f200000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      270532608 bytes type=0x1 id=0xFFFFFFFF
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190442] Error base/memheap_base_register.c:130 -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      _reg_segment() Failed to register segment
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190441] Error base/memheap_base_register.c:130 -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      _reg_segment() Failed to register segment
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190442] Error: pshmem_init.c:61 - shmem_init() SHMEM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      failed to initialize - aborting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190441] Error: pshmem_init.c:61 - shmem_init() SHMEM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      failed to initialize - aborting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      It looks like SHMEM_INIT failed for some reason; your parallel process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      fail during SHMEM_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      additional information (which may only be relevant to an Open SHMEM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        mca_memheap_base_select() failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      SHMEM_ABORT was invoked on rank 0 (pid 190441, host=atl1-01-mic0) with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      errorcode -1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      A SHMEM process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      double check that everything has shut down cleanly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Local host: atl1-01-mic0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      PID:        190441
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:base:orted_cmd sending
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      orted_exit commands
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      shmemrun detected that one or more processes exited with non-zero
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      status, thus causing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Process name: [[31875,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Exit code:    255
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] 1 more process has sent help message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      help-shmem-runtime.txt / shmem_init:startup:internal-failure
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      to see all help / error messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] 1 more process has sent help message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      help-shmem-api.txt / shmem-abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] 1 more process has sent help message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      help-shmem-runtime.txt / oshmem shmem abort:cannot guarantee all killed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [atl1-01-mic0:190439] [[31875,0],0] plm:base:receive stop comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      On 04/12/2015 03:09 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Sorry about that - I hadn't brought it over to the 1.8 branch yet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        I've done so now, which means the ERROR_LOG shouldn't show up any
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        more. It won't fix the memheap problem, though.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        You might try adding &quot;--mca memheap_base_verbose 100&quot; to your cmd line
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        so we can see why none of the memheap components are being selected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          On Apr 12, 2015, at 11:30 AM, Andy Riebs &lt;andy.riebs_at_[hidden]&gt; &lt;mailto:andy.riebs_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Here's the output with openmpi-v1.8.4-202-gc2da6a5.tar.bz2:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          $ shmemrun -H localhost -N 2 --mca sshmem mmap  --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          plm_base_verbose 5 $PWD/mic.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] mca:base:select:(  plm) Querying component
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] [[INVALID],INVALID] plm:rsh_lookup on agent
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          ssh : rsh path NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] mca:base:select:(  plm) Query of component
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [rsh] set priority to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] mca:base:select:(  plm) Querying component
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [isolated]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] mca:base:select:(  plm) Query of component
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [isolated] set priority to 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] mca:base:select:(  plm) Querying component
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [slurm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] mca:base:select:(  plm) Skipping component
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [slurm]. Query failed to return a module
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] mca:base:select:(  plm) Selected component
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] plm:base:set_hnp_name: initial bias 190189
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          nodename hash 4121194178
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] plm:base:set_hnp_name: final jobfam 32137
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:rsh_setup on agent ssh : rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          path NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_job
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_vm creating map
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] [[32137,0],0] setup:vm: working unmanaged
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          allocation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] [[32137,0],0] using dash_host
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] [[32137,0],0] checking node atl1-01-mic0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] [[32137,0],0] ignoring myself
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_vm only HNP in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          allocation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] [[32137,0],0] complete_setup on job [32137,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] [[32137,0],0] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          file base/plm_base_launch_support.c at line 440
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:base:launch_apps for job
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [32137,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:base:launch wiring up iof
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          for job [32137,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:base:launch [32137,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          registered
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:base:launch job [32137,1] is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          not a dynamic spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          It looks like SHMEM_INIT failed for some reason; your parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          fail during SHMEM_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          problems.  This failure appears to be an internal failure; here's
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          some
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          additional information (which may only be relevant to an Open SHMEM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            mca_memheap_base_select() failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190191] Error: pshmem_init.c:61 - shmem_init() SHMEM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          failed to initialize - aborting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190192] Error: pshmem_init.c:61 - shmem_init() SHMEM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          failed to initialize - aborting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          SHMEM_ABORT was invoked on rank 1 (pid 190192, host=atl1-01-mic0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          with errorcode -1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          A SHMEM process is aborting at a time when it cannot guarantee that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          of its peer processes in the job will be killed properly.  You
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          should
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          double check that everything has shut down cleanly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Local host: atl1-01-mic0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          PID:        190192
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:base:orted_cmd sending
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          orted_exit commands
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          shmemrun detected that one or more processes exited with non-zero
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          status, thus causing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Process name: [[32137,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Exit code:    255
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] 1 more process has sent help message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          help-shmem-runtime.txt / shmem_init:startup:internal-failure
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] Set MCA parameter &quot;orte_base_help_aggregate&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          to 0 to see all help / error messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] 1 more process has sent help message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          help-shmem-api.txt / shmem-abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] 1 more process has sent help message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          help-shmem-runtime.txt / oshmem shmem abort:cannot guarantee all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          killed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [atl1-01-mic0:190189] [[32137,0],0] plm:base:receive stop comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          On 04/11/2015 07:41 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Got it - thanks. I fixed that ERROR_LOG issue (I think- please
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            verify). I suspect the memheap issue relates to something else,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            but I probably need to let the OSHMEM folks comment on it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              On Apr 11, 2015, at 9:52 AM, Andy Riebs &lt;andy.riebs_at_[hidden]&gt; &lt;mailto:andy.riebs_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Everything is built on the Xeon side, with the icc &quot;-mmic&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              switch. I then ssh into one of the PHIs, and run shmemrun from
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              On 04/11/2015 12:00 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                Let me try to understand the setup a little better. Are you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                running shmemrun on the PHI itself? Or is it running on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                host processor, and you are trying to spawn a process onto the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                Phi?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  On Apr 11, 2015, at 7:55 AM, Andy Riebs &lt;andy.riebs_at_[hidden]&gt; &lt;mailto:andy.riebs_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  Yes, this is attempting to get OSHMEM to run on the Phi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  I grabbed openmpi-dev-1484-g033418f.tar.bz2 and configured
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  it with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  $ ./configure --prefix=/home/ariebs/mic/mpi-nightly   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  CC=icc -mmic CXX=icpc -mmic    \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      --build=x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  --host=x86_64-k1om-linux    \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       AR=x86_64-k1om-linux-ar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  RANLIB=x86_64-k1om-linux-ranlib  LD=x86_64-k1om-linux-ld   \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  --disable-io-romio     --disable-mpi-fortran    \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       --enable-debug    
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  --enable-mca-no-build=btl-usnic,btl-openib,common-verbs,oob-ud
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  (Note that I had to add &quot;oob-ud&quot; to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  &quot;--enable-mca-no-build&quot; option, as the build complained that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  mca oob/ud needed mca common-verbs.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  With that configuration, here is what I am seeing now...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  $ export SHMEM_SYMMETRIC_HEAP_SIZE=1G
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  $ shmemrun -H localhost -N 2 --mca sshmem mmap  --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  plm_base_verbose 5 $PWD/mic.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] mca:base:select:(  plm) Querying
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] [[INVALID],INVALID] plm:rsh_lookup on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  agent ssh : rsh path NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] mca:base:select:(  plm) Query of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  component [rsh] set priority to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] mca:base:select:(  plm) Querying
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  component [isolated]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] mca:base:select:(  plm) Query of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  component [isolated] set priority to 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] mca:base:select:(  plm) Querying
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  component [slurm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] mca:base:select:(  plm) Skipping
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] mca:base:select:(  plm) Selected
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] plm:base:set_hnp_name: initial bias
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  189895 nodename hash 4121194178
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] plm:base:set_hnp_name: final jobfam
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  32419
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:rsh_setup on agent
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  ssh : rsh path NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:base:receive start
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_job
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  creating map
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] [[32419,0],0] setup:vm: working
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  unmanaged allocation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] [[32419,0],0] using dash_host
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] [[32419,0],0] checking node
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  atl1-01-mic0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] [[32419,0],0] ignoring myself
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_vm only
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  HNP in allocation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] [[32419,0],0] complete_setup on job
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [32419,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] [[32419,0],0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  found in file base/plm_base_launch_support.c at line 440
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch_apps for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  job [32419,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch wiring
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  up iof for job [32419,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [32419,1] registered
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch job
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [32419,1] is not a dynamic spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189899] Error: pshmem_init.c:61 - shmem_init()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  SHMEM failed to initialize - aborting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189898] Error: pshmem_init.c:61 - shmem_init()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  SHMEM failed to initialize - aborting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  It looks like SHMEM_INIT failed for some reason; your
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  fail during SHMEM_INIT; some of which are due to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  configuration or environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  here's some
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  Open SHMEM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    mca_memheap_base_select() failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  SHMEM_ABORT was invoked on rank 1 (pid 189899,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  host=atl1-01-mic0) with errorcode -1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  A SHMEM process is aborting at a time when it cannot
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  guarantee that all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  of its peer processes in the job will be killed properly. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  You should
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  double check that everything has shut down cleanly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  Local host: atl1-01-mic0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  PID:        189899
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  a non-zero exit code.. Per user-direction, the job has been
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  aborted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:base:orted_cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  sending orted_exit commands
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  shmemrun detected that one or more processes exited with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  non-zero status, thus causing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    Process name: [[32419,1],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    Exit code:    255
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] 1 more process has sent help message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  help-shmem-runtime.txt / shmem_init:startup:internal-failure
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] Set MCA parameter
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  &quot;orte_base_help_aggregate&quot; to 0 to see all help / error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] 1 more process has sent help message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  help-shmem-api.txt / shmem-abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] 1 more process has sent help message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  help-shmem-runtime.txt / oshmem shmem abort:cannot guarantee
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  all killed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  [atl1-01-mic0:189895] [[32419,0],0] plm:base:receive stop
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  On 04/10/2015 06:37 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    Andy - could you please try the current 1.8.5 nightly
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    tarball and see if it helps? The error log indicates that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    it is failing to get the topology from some daemon, I**m
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    assuming the one on the Phi?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    You might also add **enable-debug to that configure line
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    and then put -mca plm_base_verbose on the shmemrun cmd to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    get more help
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      On Apr 10, 2015, at 11:55 AM, Andy Riebs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      &lt;andy.riebs_at_[hidden]&gt; &lt;mailto:andy.riebs_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      Summary: MPI jobs work fine, SHMEM jobs work just often
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      enough to be tantalizing, on an Intel Xeon Phi/MIC
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      Longer version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      Thanks to the excellent write-up last June
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      (&lt;<a href="https://www.open-mpi.org/community/lists/users/2014/06/24711.php">https://www.open-mpi.org/community/lists/users/2014/06/24711.php</a>&gt; &lt;<a href="https://www.open-mpi.org/community/lists/users/2014/06/24711.php">https://www.open-mpi.org/community/lists/users/2014/06/24711.php</a>&gt;),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      I have been able to build a version of Open MPI for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      Xeon Phi coprocessor that runs MPI jobs on the Phi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      coprocessor with no problem, but not SHMEM jobs.  Just
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      at the point where I was about to document the problems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      I was having with SHMEM, my trivial SHMEM job worked.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      And then failed when I tried to run it again,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      immediately afterwards. I have a feeling I may be in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      uncharted  territory here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      Environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        * RHEL 6.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        * Intel Composer XE 2015
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        * Xeon Phi/MIC
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      ----------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      Configuration
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      $ export PATH=/usr/linux-k1om-4.7/bin/:$PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      $ source
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      /opt/intel/15.0/composer_xe_2015/bin/compilervars.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      intel64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      $ ./configure --prefix=/home/ariebs/mic/mpi \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         CC=&quot;icc -mmic&quot; CXX=&quot;icpc -mmic&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         --build=x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      --host=x86_64-k1om-linux \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          AR=x86_64-k1om-linux-ar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      RANLIB=x86_64-k1om-linux-ranlib \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          LD=x86_64-k1om-linux-ld \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          --enable-mpirun-prefix-by-default --disable-io-romio
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          --disable-vt --disable-mpi-fortran \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      --enable-mca-no-build=btl-usnic,btl-openib,common-verbs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      $ make
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      $ make install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      ----------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      Test program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      #include &lt;shmem.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      int main(int argc, char **argv)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              int me, num_pe;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              shmem_init();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              num_pe = num_pes();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              me = my_pe();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              printf(&quot;Hello World from process %ld of %ld\n&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      me, num_pe);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              exit(0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      ----------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      Building the program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      export PATH=/home/ariebs/mic/mpi/bin:$PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      export PATH=/usr/linux-k1om-4.7/bin/:$PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      source
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      /opt/intel/15.0/composer_xe_2015/bin/compilervars.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      intel64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      export
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      LD_LIBRARY_PATH=/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      icc -mmic -std=gnu99 -I/home/ariebs/mic/mpi/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      -pthread \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              -Wl,-rpath -Wl,/home/ariebs/mic/mpi/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      -Wl,--enable-new-dtags \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              -L/home/ariebs/mic/mpi/lib -loshmem -lmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      -lopen-rte -lopen-pal \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              -lm -ldl -lutil \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              -Wl,-rpath
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      -Wl,/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      -L/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              -o mic.out  shmem_hello.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      ----------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      Running the program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      (Note that the program had been consistently failing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      Then, when I logged back into the system to capture the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      results, it worked once,  and then immediately failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      when I tried again, as shown below. Logging in and out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      isn't sufficient to correct the problem. Overall, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      think I had 3 successful runs in 30-40 attempts.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      $ shmemrun -H localhost -N 2 --mca sshmem mmap ./mic.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      [atl1-01-mic0:189372] [[30936,0],0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      found in file base/plm_base_launch_support.c at line 426
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      Hello World from process 0 of 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      Hello World from process 1 of 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      $ shmemrun -H localhost -N 2 --mca sshmem mmap ./mic.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      [atl1-01-mic0:189381] [[30881,0],0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      found in file base/plm_base_launch_support.c at line 426
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      [atl1-01-mic0:189383] Error: pshmem_init.c:61 -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      shmem_init() SHMEM failed to initialize - aborting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      It looks like SHMEM_INIT failed for some reason; your
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      fail during SHMEM_INIT; some of which are due to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      configuration or environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      problems.  This failure appears to be an internal
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      failure; here's some
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      Open SHMEM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        mca_memheap_base_select() failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      SHMEM_ABORT was invoked on rank 0 (pid 189383,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      host=atl1-01-mic0) with errorcode -1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      A SHMEM process is aborting at a time when it cannot
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      guarantee that all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      of its peer processes in the job will be killed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      properly.  You should
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      double check that everything has shut down cleanly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      Local host: atl1-01-mic0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      PID:        189383
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      a non-zero exit code.. Per user-direction, the job has
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      been aborted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      shmemrun detected that one or more processes exited with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      non-zero status, thus causing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      the job to be terminated. The first process to do so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      was:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        Process name: [[30881,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        Exit code:    255
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      Any thoughts about where to go from here?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      Andy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Andy Riebs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hewlett-Packard Company
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  High Performance Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  +1 404 648 9024
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  My opinions are not necessarily those of HP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      <a href="http://www.open-mpi.org/community/lists/users/2015/04/26670.php">http://www.open-mpi.org/community/lists/users/2015/04/26670.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26670.php">http://www.open-mpi.org/community/lists/users/2015/04/26670.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26676.php">http://www.open-mpi.org/community/lists/users/2015/04/26676.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26676.php">http://www.open-mpi.org/community/lists/users/2015/04/26676.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  <a href="http://www.open-mpi.org/community/lists/users/2015/04/26678.php">http://www.open-mpi.org/community/lists/users/2015/04/26678.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26678.php">http://www.open-mpi.org/community/lists/users/2015/04/26678.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26679.php">http://www.open-mpi.org/community/lists/users/2015/04/26679.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26679.php">http://www.open-mpi.org/community/lists/users/2015/04/26679.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              <a href="http://www.open-mpi.org/community/lists/users/2015/04/26680.php">http://www.open-mpi.org/community/lists/users/2015/04/26680.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26680.php">http://www.open-mpi.org/community/lists/users/2015/04/26680.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26682.php">http://www.open-mpi.org/community/lists/users/2015/04/26682.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26682.php">http://www.open-mpi.org/community/lists/users/2015/04/26682.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          <a href="http://www.open-mpi.org/community/lists/users/2015/04/26683.php">http://www.open-mpi.org/community/lists/users/2015/04/26683.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26683.php">http://www.open-mpi.org/community/lists/users/2015/04/26683.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26684.php">http://www.open-mpi.org/community/lists/users/2015/04/26684.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26684.php">http://www.open-mpi.org/community/lists/users/2015/04/26684.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26697.php">http://www.open-mpi.org/community/lists/users/2015/04/26697.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26697.php">http://www.open-mpi.org/community/lists/users/2015/04/26697.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26699.php">http://www.open-mpi.org/community/lists/users/2015/04/26699.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26699.php">http://www.open-mpi.org/community/lists/users/2015/04/26699.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26700.php">http://www.open-mpi.org/community/lists/users/2015/04/26700.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26706/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26707.php">XingFENG: "Re: [OMPI users] Running mpi with different account"</a>
<li><strong>Previous message:</strong> <a href="26705.php">John Cary: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<li><strong>In reply to:</strong> <a href="26700.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26716.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26716.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
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
