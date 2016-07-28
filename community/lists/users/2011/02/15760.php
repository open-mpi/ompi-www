<?
$subject_val = "[OMPI users] RDMACM Differences";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 12:50:13 2011" -->
<!-- isoreceived="20110228175013" -->
<!-- sent="Mon, 28 Feb 2011 09:49:01 -0800" -->
<!-- isosent="20110228174901" -->
<!-- name="Jagga Soorma" -->
<!-- email="jagga13_at_[hidden]" -->
<!-- subject="[OMPI users] RDMACM Differences" -->
<!-- id="AANLkTimb31v0-V_KbULOfsQ9dg81tMWMC1J_122KMmX0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] RDMACM Differences<br>
<strong>From:</strong> Jagga Soorma (<em>jagga13_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-28 12:49:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15761.php">Rolf vandeVaart: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Previous message:</strong> <a href="15759.php">Jeff Squyres: "Re: [OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15774.php">Jeff Squyres: "Re: [OMPI users] RDMACM Differences"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15774.php">Jeff Squyres: "Re: [OMPI users] RDMACM Differences"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am running into the following issue while trying to run osu_latency:
<br>
<p><pre>
--
-bash-3.2$ mpiexec --mca btl openib,self -mca btl_openib_warn_default_gid_
prefix 0 -np 2 --hostfile mpihosts
/home/jagga/osu-micro-benchmarks-3.3/openmpi/ofed-1.5.2/bin/osu_latency
# OSU MPI Latency Test v3.3
# Size            Latency (us)
[amber04][[10252,1],1][connect/btl_openib_connect_oob.c:325:qp_connect_all]
error modifing QP to RTR errno says Invalid argument
[amber04][[10252,1],1][connect/btl_openib_connect_oob.c:815:rml_recv_cb]
error in endpoint reply start connect
--------------------------------------------------------------------------
mpiexec has exited due to process rank 1 with PID 6781 on
node amber04 exiting without calling &quot;finalize&quot;. This may
have caused other processes in the application to be
terminated by signals sent by mpiexec (as reported here).
--------------------------------------------------------------------------
--
I can get around this by adding the &quot;--mca btl_openib_cpc_include rdmacm&quot;
option.  However, I have another host with a different HCA with all the same
drivers and software versions that I can run this same command successfully
with using the rdmacm option.  What could be causing one of my environments
to fail but the other to work fine (without the rdmacm option)?
--
[root_at_amber03 ~]# ofed_info | grep OFED
MLNX_OFED_LINUX-1.5.2-1.0.0 (OFED-1.5.2-20101020-1520):
MLNX_OFED_LINUX-1.5.2-1.0.0
(/mswg/release/ofed-1.5.2-rpms/rnfs-utils/rnfs-utils-1.1.5-10.OFED.src.rpm):
[root_at_amber03 ~]# ibv_devinfo
hca_id:    mlx4_0
    transport:            InfiniBand (0)
    fw_ver:                2.7.9294
    node_guid:            78e7:d103:0021:8884
    sys_image_guid:            78e7:d103:0021:8887
    vendor_id:            0x02c9
    vendor_part_id:            26438
    hw_ver:                0xB0
    board_id:            HP_0200000003
    phys_port_cnt:            2
        port:    1
            state:            PORT_ACTIVE (4)
            max_mtu:        2048 (4)
            active_mtu:        2048 (4)
            sm_lid:            1
            port_lid:        20
            port_lmc:        0x00
            link_layer:        IB
        port:    2
            state:            PORT_ACTIVE (4)
            max_mtu:        2048 (4)
            active_mtu:        1024 (3)
            sm_lid:            0
            port_lid:        0
            port_lmc:        0x00
            link_layer:        Ethernet
--
Any help would be greatly appreciated.
Thanks,
-J
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15760/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15761.php">Rolf vandeVaart: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Previous message:</strong> <a href="15759.php">Jeff Squyres: "Re: [OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15774.php">Jeff Squyres: "Re: [OMPI users] RDMACM Differences"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15774.php">Jeff Squyres: "Re: [OMPI users] RDMACM Differences"</a>
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
