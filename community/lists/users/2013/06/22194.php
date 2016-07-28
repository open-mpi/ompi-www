<?
$subject_val = "[OMPI users] errors trying to run a simple mpi task";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 23 05:42:19 2013" -->
<!-- isoreceived="20130623094219" -->
<!-- sent="Sun, 23 Jun 2013 12:42:10 +0300" -->
<!-- isosent="20130623094210" -->
<!-- name="dani" -->
<!-- email="dani_at_[hidden]" -->
<!-- subject="[OMPI users] errors trying to run a simple mpi task" -->
<!-- id="51C6C2F2.8050608_at_letai.org.il" -->
<!-- charset="ISO-8859-8-I" -->
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
<strong>Subject:</strong> [OMPI users] errors trying to run a simple mpi task<br>
<strong>From:</strong> dani (<em>dani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-23 05:42:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22195.php">Reem Alraddadi: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>Previous message:</strong> <a href="22193.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22196.php">Ralph Castain: "Re: [OMPI users] errors trying to run a simple mpi task"</a>
<li><strong>Reply:</strong> <a href="22196.php">Ralph Castain: "Re: [OMPI users] errors trying to run a simple mpi task"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<html style="direction: ltr;">
  <head>

    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-8-I">
    <style type="text/css">body p { margin-bottom: 0cm; margin-top: 0pt; } </style>
  </head>
  <body style="direction: ltr;"
    bidimailui-detected-decoding-type="preferred-charset" text="#000000"
    bgcolor="#FFFFFF">
    Hi,<br>
    <br>
    I've encountered strange issues when trying to run a simple mpi job
    on a single host which has IB.<br>
    The complete errors:<br>
    <br>
    <blockquote type="cite">-&gt; mpirun -n 1 hello<br>
--------------------------------------------------------------------------<br>
      WARNING: Failed to open "ofa-v2-mlx4_0-1"
      [DAT_PROVIDER_NOT_FOUND:DAT_NAME_NOT_REGISTERED]. <br>
      This may be a real error or it may be an invalid entry in the
      uDAPL<br>
      Registry which is contained in the dat.conf file. Contact your
      local<br>
      System Administrator to confirm the availability of the interfaces
      in<br>
      the dat.conf file.<br>
--------------------------------------------------------------------------<br>
--------------------------------------------------------------------------<br>
      [[53031,1],0]: A high-performance Open MPI point-to-point
      messaging module<br>
      was unable to find any relevant network interfaces:<br>
      <br>
      Module: uDAPL<br>
        Host: n01<br>
      <br>
      Another transport will be used instead, although this may result
      in<br>
      lower performance.<br>
--------------------------------------------------------------------------<br>
--------------------------------------------------------------------------<br>
      WARNING: It appears that your OpenFabrics subsystem is configured
      to only<br>
      allow registering part of your physical memory.  This can cause
      MPI jobs to<br>
      run with erratic performance, hang, and/or crash.<br>
      <br>
      This may be caused by your OpenFabrics vendor limiting the amount
      of<br>
      physical memory that can be registered.  You should investigate
      the<br>
      relevant Linux kernel module parameters that control how much
      physical<br>
      memory can be registered, and increase them to allow registering
      all<br>
      physical memory on your machine.<br>
      <br>
      See this Open MPI FAQ item for more information on these Linux
      kernel module<br>
      parameters:<br>
      <br>
         
      <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a><br>
      <br>
        Local host:              n01<br>
        Registerable memory:     32768 MiB<br>
        Total memory:            65503 MiB<br>
      <br>
      Your MPI job will continue, but may be behave poorly and/or hang.<br>
--------------------------------------------------------------------------<br>
      Process 0 on n01 out of 1<br>
      [n01:13534] 7 more processes have sent help message
      help-mpi-btl-udapl.txt / dat_ia_open fail<br>
      [n01:13534] Set MCA parameter "orte_base_help_aggregate" to 0 to
      see all help / error messages</blockquote>
    Following my setup and other info:<br>
    OS: CentOS 6.3 x86_64<br>
    installed ofed 3.5 from source ( ./install.pl --all)<br>
    installed openmpi 1.6.4 with the following build parameters:<br>
    <blockquote type="cite">rpmbuild --rebuild openmpi-1.6.4-1.src.rpm
      --define '_prefix /opt/openmpi/1.6.4/gcc' --define '_defaultdocdir
      /opt/openmpi/1.6.4/gcc' --define '_mandir %{_prefix}/share/man'
      --define '_datadir %{_prefix}/share' --define 'configure_options
      --with-openib=/usr --with-openib-libdir=/usr/lib64 CC=gcc CXX=g++
      F77=gfortran FC=gfortran --enable-mpirun-prefix-by-default
      --target=x86_64-unknown-linux-gnu --with-hwloc=/usr/local
      --with-libltdl --enable-branch-probabilities --with-udapl
      --with-sge --disable-vt' --define 'use_default_rpm_opt_flags 1'
      --define '_name openmpi-1.6.4_gcc' --define 'install_shell_scripts
      1' --define 'shell_scripts_basename mpivars' --define '_usr /usr'
      --define 'ofed 0' 2&gt;&amp;1 | tee openmpi.build.sge</blockquote>
    (disable -vt was used due to cuda presence which is automatically
    linked by vt, and becomes a dependency with no matching rpm).<br>
    <br>
    memorylocked is unlimited:<br>
    <blockquote type="cite">-&gt;ulimit -a<br>
      core file size          (blocks, -c) 0<br>
      data seg size           (kbytes, -d) unlimited<br>
      scheduling priority             (-e) 0<br>
      file size               (blocks, -f) unlimited<br>
      pending signals                 (-i) 515028<br>
      max locked memory       (kbytes, -l) unlimited<br>
      max memory size         (kbytes, -m) unlimited<br>
      open files                      (-n) 1024<br>
      pipe size            (512 bytes, -p) 8<br>
      POSIX message queues     (bytes, -q) 819200<br>
      real-time priority              (-r) 0<br>
      stack size              (kbytes, -s) 10240<br>
      cpu time               (seconds, -t) unlimited<br>
      max user processes              (-u) 1024<br>
      virtual memory          (kbytes, -v) unlimited<br>
      file locks                      (-x) unlimited</blockquote>
    IB devices are present:<br>
    <blockquote type="cite">-&gt;ibv_devinfo<br>
      hca_id:    mlx4_0<br>
          transport:            InfiniBand (0)<br>
          fw_ver:                2.9.1000<br>
          node_guid:            0002:c903:004d:b0e2<br>
          sys_image_guid:            0002:c903:004d:b0e5<br>
          vendor_id:            0x02c9<br>
          vendor_part_id:            26428<br>
          hw_ver:                0xB0<br>
          board_id:            MT_0D90110009<br>
          phys_port_cnt:            1<br>
              port:    1<br>
                  state:            PORT_ACTIVE (4)<br>
                  max_mtu:        4096 (5)<br>
                  active_mtu:        4096 (5)<br>
                  sm_lid:            2<br>
                  port_lid:        53<br>
                  port_lmc:        0x00<br>
                  link_layer:        InfiniBand<br>
    </blockquote>
    <br>
    the hello program source:<br>
    <blockquote type="cite">-&gt;cat hello.c<br>
      #include &lt;stdio.h&gt;<br>
      #include &lt;mpi.h&gt;<br>
      <br>
      int main(int argc, char *argv[]) {<br>
        int numprocs, rank, namelen;<br>
        char processor_name[MPI_MAX_PROCESSOR_NAME];<br>
      <br>
        MPI_Init(&amp;argc, &amp;argv);<br>
        MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);<br>
        MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);<br>
        MPI_Get_processor_name(processor_name, &amp;namelen);<br>
      <br>
        printf("Process %d on %s out of %d\n", rank, processor_name,
      numprocs);<br>
      <br>
        MPI_Finalize();<br>
      }</blockquote>
    simply compiled as:<br>
    <blockquote type="cite">mpicc hello.c -o hello</blockquote>
    <br>
    the IB modules seem to be present:<br>
    <blockquote type="cite">-&gt;service openibd status<br>
      <br>
        HCA driver loaded<br>
      <br>
      Configured IPoIB devices:<br>
      ib0<br>
      <br>
      Currently active IPoIB devices:<br>
      ib0<br>
      <br>
      The following OFED modules are loaded:<br>
      <br>
        rdma_ucm<br>
        rdma_cm<br>
        ib_addr<br>
        ib_ipoib<br>
        mlx4_core<br>
        mlx4_ib<br>
        mlx4_en<br>
        ib_mthca<br>
        ib_uverbs<br>
        ib_umad<br>
        ib_sa<br>
        ib_cm<br>
        ib_mad<br>
        ib_core<br>
        iw_cxgb3<br>
        iw_cxgb4<br>
        iw_nes<br>
        ib_qib</blockquote>
    <br>
    Can anyone help?<br>
  </body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22195.php">Reem Alraddadi: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>Previous message:</strong> <a href="22193.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22196.php">Ralph Castain: "Re: [OMPI users] errors trying to run a simple mpi task"</a>
<li><strong>Reply:</strong> <a href="22196.php">Ralph Castain: "Re: [OMPI users] errors trying to run a simple mpi task"</a>
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
