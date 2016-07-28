<?
$subject_val = "Re: [OMPI users] errors trying to run a simple mpi task";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 23 10:58:10 2013" -->
<!-- isoreceived="20130623145810" -->
<!-- sent="Sun, 23 Jun 2013 08:58:01 -0600" -->
<!-- isosent="20130623145801" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] errors trying to run a simple mpi task" -->
<!-- id="07F2E635-C1F6-4E30-9022-43BA73F69B5F_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="51C6C2F2.8050608_at_letai.org.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] errors trying to run a simple mpi task<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-23 10:58:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22197.php">Gustavo Correa: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>Previous message:</strong> <a href="22195.php">Reem Alraddadi: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>In reply to:</strong> <a href="22194.php">dani: "[OMPI users] errors trying to run a simple mpi task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22199.php">dani: "Re: [OMPI users] errors trying to run a simple mpi task"</a>
<li><strong>Reply:</strong> <a href="22199.php">dani: "Re: [OMPI users] errors trying to run a simple mpi task"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don't include udapl - that code may well be stale
<br>
<p>Sent from my iPhone
<br>
<p>On Jun 23, 2013, at 3:42 AM, dani &lt;dani_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've encountered strange issues when trying to run a simple mpi job on a single host which has IB.
</span><br>
<span class="quotelev1">&gt; The complete errors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -&gt; mpirun -n 1 hello
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: Failed to open &quot;ofa-v2-mlx4_0-1&quot; [DAT_PROVIDER_NOT_FOUND:DAT_NAME_NOT_REGISTERED]. 
</span><br>
<span class="quotelev2">&gt;&gt; This may be a real error or it may be an invalid entry in the uDAPL
</span><br>
<span class="quotelev2">&gt;&gt; Registry which is contained in the dat.conf file. Contact your local
</span><br>
<span class="quotelev2">&gt;&gt; System Administrator to confirm the availability of the interfaces in
</span><br>
<span class="quotelev2">&gt;&gt; the dat.conf file.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [[53031,1],0]: A high-performance Open MPI point-to-point messaging module
</span><br>
<span class="quotelev2">&gt;&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Module: uDAPL
</span><br>
<span class="quotelev2">&gt;&gt;   Host: n01
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: It appears that your OpenFabrics subsystem is configured to only
</span><br>
<span class="quotelev2">&gt;&gt; allow registering part of your physical memory.  This can cause MPI jobs to
</span><br>
<span class="quotelev2">&gt;&gt; run with erratic performance, hang, and/or crash.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This may be caused by your OpenFabrics vendor limiting the amount of
</span><br>
<span class="quotelev2">&gt;&gt; physical memory that can be registered.  You should investigate the
</span><br>
<span class="quotelev2">&gt;&gt; relevant Linux kernel module parameters that control how much physical
</span><br>
<span class="quotelev2">&gt;&gt; memory can be registered, and increase them to allow registering all
</span><br>
<span class="quotelev2">&gt;&gt; physical memory on your machine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; See this Open MPI FAQ item for more information on these Linux kernel module
</span><br>
<span class="quotelev2">&gt;&gt; parameters:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Local host:              n01
</span><br>
<span class="quotelev2">&gt;&gt;   Registerable memory:     32768 MiB
</span><br>
<span class="quotelev2">&gt;&gt;   Total memory:            65503 MiB
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job will continue, but may be behave poorly and/or hang.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 on n01 out of 1
</span><br>
<span class="quotelev2">&gt;&gt; [n01:13534] 7 more processes have sent help message help-mpi-btl-udapl.txt / dat_ia_open fail
</span><br>
<span class="quotelev2">&gt;&gt; [n01:13534] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; Following my setup and other info:
</span><br>
<span class="quotelev1">&gt; OS: CentOS 6.3 x86_64
</span><br>
<span class="quotelev1">&gt; installed ofed 3.5 from source ( ./install.pl --all)
</span><br>
<span class="quotelev1">&gt; installed openmpi 1.6.4 with the following build parameters:
</span><br>
<span class="quotelev2">&gt;&gt; rpmbuild --rebuild openmpi-1.6.4-1.src.rpm --define '_prefix /opt/openmpi/1.6.4/gcc' --define '_defaultdocdir /opt/openmpi/1.6.4/gcc' --define '_mandir %{_prefix}/share/man' --define '_datadir %{_prefix}/share' --define 'configure_options --with-openib=/usr --with-openib-libdir=/usr/lib64 CC=gcc CXX=g++ F77=gfortran FC=gfortran --enable-mpirun-prefix-by-default --target=x86_64-unknown-linux-gnu --with-hwloc=/usr/local --with-libltdl --enable-branch-probabilities --with-udapl --with-sge --disable-vt' --define 'use_default_rpm_opt_flags 1' --define '_name openmpi-1.6.4_gcc' --define 'install_shell_scripts 1' --define 'shell_scripts_basename mpivars' --define '_usr /usr' --define 'ofed 0' 2&gt;&amp;1 | tee openmpi.build.sge
</span><br>
<span class="quotelev1">&gt; (disable -vt was used due to cuda presence which is automatically linked by vt, and becomes a dependency with no matching rpm).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; memorylocked is unlimited:
</span><br>
<span class="quotelev2">&gt;&gt; -&gt;ulimit -a
</span><br>
<span class="quotelev2">&gt;&gt; core file size          (blocks, -c) 0
</span><br>
<span class="quotelev2">&gt;&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; scheduling priority             (-e) 0
</span><br>
<span class="quotelev2">&gt;&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; pending signals                 (-i) 515028
</span><br>
<span class="quotelev2">&gt;&gt; max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; open files                      (-n) 1024
</span><br>
<span class="quotelev2">&gt;&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev2">&gt;&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev2">&gt;&gt; real-time priority              (-r) 0
</span><br>
<span class="quotelev2">&gt;&gt; stack size              (kbytes, -s) 10240
</span><br>
<span class="quotelev2">&gt;&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; max user processes              (-u) 1024
</span><br>
<span class="quotelev2">&gt;&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev1">&gt; IB devices are present:
</span><br>
<span class="quotelev2">&gt;&gt; -&gt;ibv_devinfo
</span><br>
<span class="quotelev2">&gt;&gt; hca_id:    mlx4_0
</span><br>
<span class="quotelev2">&gt;&gt;     transport:            InfiniBand (0)
</span><br>
<span class="quotelev2">&gt;&gt;     fw_ver:                2.9.1000
</span><br>
<span class="quotelev2">&gt;&gt;     node_guid:            0002:c903:004d:b0e2
</span><br>
<span class="quotelev2">&gt;&gt;     sys_image_guid:            0002:c903:004d:b0e5
</span><br>
<span class="quotelev2">&gt;&gt;     vendor_id:            0x02c9
</span><br>
<span class="quotelev2">&gt;&gt;     vendor_part_id:            26428
</span><br>
<span class="quotelev2">&gt;&gt;     hw_ver:                0xB0
</span><br>
<span class="quotelev2">&gt;&gt;     board_id:            MT_0D90110009
</span><br>
<span class="quotelev2">&gt;&gt;     phys_port_cnt:            1
</span><br>
<span class="quotelev2">&gt;&gt;         port:    1
</span><br>
<span class="quotelev2">&gt;&gt;             state:            PORT_ACTIVE (4)
</span><br>
<span class="quotelev2">&gt;&gt;             max_mtu:        4096 (5)
</span><br>
<span class="quotelev2">&gt;&gt;             active_mtu:        4096 (5)
</span><br>
<span class="quotelev2">&gt;&gt;             sm_lid:            2
</span><br>
<span class="quotelev2">&gt;&gt;             port_lid:        53
</span><br>
<span class="quotelev2">&gt;&gt;             port_lmc:        0x00
</span><br>
<span class="quotelev2">&gt;&gt;             link_layer:        InfiniBand
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the hello program source:
</span><br>
<span class="quotelev2">&gt;&gt; -&gt;cat hello.c
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev2">&gt;&gt;   int numprocs, rank, namelen;
</span><br>
<span class="quotelev2">&gt;&gt;   char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;Process %d on %s out of %d\n&quot;, rank, processor_name, numprocs);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev1">&gt; simply compiled as:
</span><br>
<span class="quotelev2">&gt;&gt; mpicc hello.c -o hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the IB modules seem to be present:
</span><br>
<span class="quotelev2">&gt;&gt; -&gt;service openibd status
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   HCA driver loaded
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Configured IPoIB devices:
</span><br>
<span class="quotelev2">&gt;&gt; ib0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Currently active IPoIB devices:
</span><br>
<span class="quotelev2">&gt;&gt; ib0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The following OFED modules are loaded:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   rdma_ucm
</span><br>
<span class="quotelev2">&gt;&gt;   rdma_cm
</span><br>
<span class="quotelev2">&gt;&gt;   ib_addr
</span><br>
<span class="quotelev2">&gt;&gt;   ib_ipoib
</span><br>
<span class="quotelev2">&gt;&gt;   mlx4_core
</span><br>
<span class="quotelev2">&gt;&gt;   mlx4_ib
</span><br>
<span class="quotelev2">&gt;&gt;   mlx4_en
</span><br>
<span class="quotelev2">&gt;&gt;   ib_mthca
</span><br>
<span class="quotelev2">&gt;&gt;   ib_uverbs
</span><br>
<span class="quotelev2">&gt;&gt;   ib_umad
</span><br>
<span class="quotelev2">&gt;&gt;   ib_sa
</span><br>
<span class="quotelev2">&gt;&gt;   ib_cm
</span><br>
<span class="quotelev2">&gt;&gt;   ib_mad
</span><br>
<span class="quotelev2">&gt;&gt;   ib_core
</span><br>
<span class="quotelev2">&gt;&gt;   iw_cxgb3
</span><br>
<span class="quotelev2">&gt;&gt;   iw_cxgb4
</span><br>
<span class="quotelev2">&gt;&gt;   iw_nes
</span><br>
<span class="quotelev2">&gt;&gt;   ib_qib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone help?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22196/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22197.php">Gustavo Correa: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>Previous message:</strong> <a href="22195.php">Reem Alraddadi: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>In reply to:</strong> <a href="22194.php">dani: "[OMPI users] errors trying to run a simple mpi task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22199.php">dani: "Re: [OMPI users] errors trying to run a simple mpi task"</a>
<li><strong>Reply:</strong> <a href="22199.php">dani: "Re: [OMPI users] errors trying to run a simple mpi task"</a>
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
