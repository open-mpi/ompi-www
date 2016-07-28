<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  8 05:37:39 2007" -->
<!-- isoreceived="20070508093739" -->
<!-- sent="Tue, 08 May 2007 11:37:24 +0200" -->
<!-- isosent="20070508093724" -->
<!-- name="Boris Bierbaum" -->
<!-- email="boris_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI over uDAPL doesn't work" -->
<!-- id="464044D4.5010501_at_lfbs.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4630EFDE.8070608_at_Sun.COM" -->
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
<strong>From:</strong> Boris Bierbaum (<em>boris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-08 05:37:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3207.php">Rob: "[OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3205.php">Luis Kornblueh: "[OMPI users] SIGSEGV in mpiexec"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3149.php">Donald Kerr: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3212.php">Jeff Squyres: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>Reply:</strong> <a href="3212.php">Jeff Squyres: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>we (my collegue Andreas and me) are still trying to solve this problem.
<br>
I have compiled some additional information, maybe somebody has an idea
<br>
about what's going on.
<br>
<p>OS: Debian GNU/Linux 4.0, Kernel 2.6.18, x86, 32-Bit
<br>
IB software: OFED 1.1
<br>
SM: OpenSM from OFED 1.1
<br>
uDAPL: DAPL reference implementation version gamma 3.02 (using DAPL from
<br>
OFED 1.1 doesn't change anything, I suppose it's the same code, at least
<br>
roughly)
<br>
Test program: Intel MPI Benchmarks Version 2.3
<br>
OpenMPI version: 1.2.1
<br>
<p>Running OpenMPI directly over IB verbs (mpirun --mca btl self,sm,openib
<br>
...) works. Here's the output of ibv_devinfo and ifconfig for the two
<br>
nodes on which tried to run the benchmark (ulimit -l is unlimited on
<br>
both machines):
<br>
<p>------------ 1st node -------------------------------
<br>
<p>boris_at_pd-04:/work/boris/IMB_2.3/src$ /opt/infiniband/bin/ibv_devinfo
<br>
hca_id: mthca0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                         1.2.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:                      0002:c902:0020:b528
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:                 0002:c902:0020:b52b
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:                      0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:                 25204
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                         0xA0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:                       MT_0230000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:                  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:                2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:             2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>
<p>boris_at_pd-04:/work/boris/IMB_2.3/src$ /sbin/ifconfig
<br>
<p>...
<br>
<p>ib0       Protokoll:UNSPEC  Hardware Adresse
<br>
00-00-04-04-FE-80-00-00-00-00-00-00-00-00-00-00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet Adresse:192.168.0.14  Bcast:192.168.0.255
<br>
Maske:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 Adresse: fe80::202:c902:20:b529/64
<br>
G&#252;ltigkeitsbereich:Verbindung
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:67 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:16 errors:0 dropped:2 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kollisionen:0 Sendewarteschlangenl&#228;nge:128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:3752 (3.6 KiB)  TX bytes:968 (968.0 b)
<br>
<p>...
<br>
<p>------------ 2nd node -------------------------------
<br>
<p>boris_at_pd-05:~$  /opt/infiniband/bin/ibv_devinfo
<br>
hca_id: mthca0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                         1.2.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:                      0002:c902:0020:b4f4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:                 0002:c902:0020:b4f7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:                      0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:                 25204
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                         0xA0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:                       MT_0230000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:                  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:                2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:             2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>
<p>boris_at_pd-05:~$ /sbin/ifconfig
<br>
<p>...
<br>
<p>ib0       Protokoll:UNSPEC  Hardware Adresse
<br>
00-00-04-04-FE-80-00-00-00-00-00-00-00-00-00-00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet Adresse:192.168.0.15  Bcast:192.168.0.255
<br>
Maske:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 Adresse: fe80::202:c902:20:b4f5/64
<br>
G&#252;ltigkeitsbereich:Verbindung
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:67 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:18 errors:0 dropped:2 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kollisionen:0 Sendewarteschlangenl&#228;nge:128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:3752 (3.6 KiB)  TX bytes:1088 (1.0 KiB)
<br>
<p><p>...
<br>
<p>-------------------------------------------------------------------------
<br>
<p><p>Here's the output from the failed run, with every DAT and DAPL debug
<br>
output enabled:
<br>
<p><p><p>boris_at_pd-04:/work/boris/IMB_2.3/src$ mpirun -np 2 -x DAT_DBG_TYPE -x
<br>
DAPL_DBG_TYPE -x DAT_OVERRIDE --mca btl self,sm,udapl --host pd-04,pd-05
<br>
/work/boris/IMB_2.3/src/IMB-MPI1 pingpong
<br>
DAT Registry: Started (dat_init)
<br>
DAT Registry: static registry file
<br>
&lt;/home/boris/dapl_on_dope_gamma3.2/doc/dat.conf&gt;
<br>
<p>DAT Registry: token
<br>
&nbsp;type  string
<br>
&nbsp;value &lt;OpenIB-cma&gt;
<br>
<p><p>DAT Registry: token
<br>
&nbsp;type  string
<br>
&nbsp;value &lt;u1.2&gt;
<br>
<p><p>DAT Registry: token
<br>
&nbsp;type  string
<br>
&nbsp;value &lt;nonthreadsafe&gt;
<br>
<p><p>DAT Registry: token
<br>
&nbsp;type  string
<br>
&nbsp;value &lt;default&gt;
<br>
<p><p>DAT Registry: token
<br>
&nbsp;type  string
<br>
&nbsp;value
<br>
&lt;/home/boris/dapl_on_dope_gamma3.2/dapl/udapl/Target/i686/libdapl_openib_cma.so&gt;
<br>
<p><p>DAT Registry: token
<br>
&nbsp;type  string
<br>
&nbsp;value &lt;mv_dapl.1.2&gt;
<br>
<p><p>DAT Registry: token
<br>
&nbsp;type  string
<br>
&nbsp;value &lt;ib0 0&gt;
<br>
<p><p>DAT Registry: token
<br>
&nbsp;type  string
<br>
&nbsp;value &lt;&gt;
<br>
<p><p>DAT Registry: token
<br>
&nbsp;type  eor
<br>
&nbsp;value &lt;&gt;
<br>
<p><p>DAT Registry: entry
<br>
&nbsp;ia_name OpenIB-cma
<br>
&nbsp;api_version
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type 0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;major.minor 1.2
<br>
&nbsp;is_thread_safe 0
<br>
&nbsp;is_default 1
<br>
&nbsp;lib_path
<br>
/home/boris/dapl_on_dope_gamma3.2/dapl/udapl/Target/i686/libdapl_openib_cma.so
<br>
&nbsp;provider_version
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;id mv_dapl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;major.minor 1.2
<br>
&nbsp;ia_params ib0 0
<br>
<p>DAT Registry: loading provider for OpenIB-cma
<br>
<p>DAT Registry: token
<br>
&nbsp;type  eof
<br>
&nbsp;value &lt;&gt;
<br>
<p>DAT Registry: dat_registry_list_providers () called
<br>
DAT Registry: dat_ia_openv (OpenIB-cma,1:2,0) called
<br>
DAT Registry: IA OpenIB-cma, trying to load library
<br>
/home/boris/dapl_on_dope_gamma3.2/dapl/udapl/Target/i686/libdapl_openib_cma.so
<br>
DAPL: NOT Setting Loopback
<br>
&nbsp;dapl_ib_init:
<br>
DAT Registry: dat_registry_add_provider (OpenIB-cma,1:2,0)
<br>
&nbsp;open_hca: ib0 - 0x807cf28
<br>
&nbsp;ib_thread_init(17919)
<br>
&nbsp;ib_thread_init: waiting for ib_thread
<br>
&nbsp;ib_thread(17919,0xa7b08bb0): ENTER: pipe 8 ucma 12
<br>
DAT Registry: Started (dat_init)
<br>
DAT Registry: static registry file
<br>
&lt;/home/boris/dapl_on_dope_gamma3.2/doc/dat.conf&gt;
<br>
<p>DAT Registry: token
<br>
&nbsp;type  string
<br>
&nbsp;value &lt;OpenIB-cma&gt;
<br>
<p><p>DAT Registry: token
<br>
&nbsp;type  string
<br>
&nbsp;value &lt;u1.2&gt;
<br>
<p><p>DAT Registry: token
<br>
&nbsp;type  string
<br>
&nbsp;value &lt;nonthreadsafe&gt;
<br>
<p><p>DAT Registry: token
<br>
&nbsp;type  string
<br>
&nbsp;value &lt;default&gt;
<br>
<p><p>DAT Registry: token
<br>
&nbsp;type  string
<br>
&nbsp;value
<br>
&lt;/home/boris/dapl_on_dope_gamma3.2/dapl/udapl/Target/i686/libdapl_openib_cma.so&gt;
<br>
<p><p>DAT Registry: token
<br>
&nbsp;type  string
<br>
&nbsp;value &lt;mv_dapl.1.2&gt;
<br>
<p><p>DAT Registry: token
<br>
&nbsp;type  string
<br>
&nbsp;value &lt;ib0 0&gt;
<br>
<p><p>DAT Registry: token
<br>
&nbsp;type  string
<br>
&nbsp;value &lt;&gt;
<br>
<p><p>DAT Registry: token
<br>
&nbsp;type  eor
<br>
&nbsp;value &lt;&gt;
<br>
<p><p>DAT Registry: entry
<br>
&nbsp;ia_name OpenIB-cma
<br>
&nbsp;api_version
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type 0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;major.minor 1.2
<br>
&nbsp;is_thread_safe 0
<br>
&nbsp;is_default 1
<br>
&nbsp;lib_path
<br>
/home/boris/dapl_on_dope_gamma3.2/dapl/udapl/Target/i686/libdapl_openib_cma.so
<br>
&nbsp;provider_version
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;id mv_dapl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;major.minor 1.2
<br>
&nbsp;ia_params ib0 0
<br>
<p>DAT Registry: loading provider for OpenIB-cma
<br>
<p>DAT Registry: token
<br>
&nbsp;type  eof
<br>
&nbsp;value &lt;&gt;
<br>
<p>DAT Registry: dat_registry_list_providers () called
<br>
DAT Registry: dat_ia_openv (OpenIB-cma,1:2,0) called
<br>
DAT Registry: IA OpenIB-cma, trying to load library
<br>
/home/boris/dapl_on_dope_gamma3.2/dapl/udapl/Target/i686/libdapl_openib_cma.so
<br>
&nbsp;ib_thread_init(17919) exit
<br>
DAPL: NOT Setting Loopback
<br>
&nbsp;dapl_ib_init:
<br>
DAT Registry: dat_registry_add_provider (OpenIB-cma,1:2,0)
<br>
&nbsp;open_hca: ib0 - 0x807cf18
<br>
&nbsp;ib_thread_init(12326)
<br>
&nbsp;ib_thread_init: waiting for ib_thread
<br>
&nbsp;ib_thread(12326,0xa7b75bb0): ENTER: pipe 8 ucma 12
<br>
&nbsp;ib_thread_init(12326) exit
<br>
&nbsp;getipaddr: family 2 port 0 addr 192.168.0.14
<br>
&nbsp;open_hca: ctx=0x809ecd0 port=1 GID subnet fe80000000000000 id
<br>
0002c9020020b529
<br>
&nbsp;open_hca: ib0, AF_INET 192.168.0.14 INLINE_MAX=128
<br>
&nbsp;ib_thread(17919) poll_event:  async=0x1 pipe=0x1 cm=0x0 cq=0x0
<br>
&nbsp;ib_thread(17919) poll_fd: hca[134729592]=0xb, async=8 pipe=12 cm=13 cq=d
<br>
&nbsp;query_hca: ib0 AF_INET  192.168.0.14
<br>
&nbsp;query_hca: (ver=a0) ep 64512 ep_q 16384 evd 65408 evd_q 131071
<br>
&nbsp;query_hca: msg 2147483648 rdma 2147483648 iov 30 lmr 131056 rmr 0 rd_io 4
<br>
&nbsp;setup_async_cb: ia 0x80a1648 type 0 hdl (nil) cb 0xa7b1ec6c ctx 0x80a16d0
<br>
&nbsp;setup_async_cb: ia 0x80a1648 type 1 hdl (nil) cb 0xa7b1e9c0 ctx 0x80a16d0
<br>
&nbsp;setup_async_cb: ia 0x80a1648 type 3 hdl (nil) cb 0xa7b1eb50 ctx 0x80a1648
<br>
dat_set_handle 0x80a1648 to 1
<br>
dat_get_ia_handle from 1 to 0x80a1648
<br>
&nbsp;pd_alloc: pd_handle=0x80a1928
<br>
dat_get_ia_handle from 1 to 0x80a1648
<br>
&nbsp;query_hca: ib0 AF_INET  192.168.0.14
<br>
&nbsp;query_hca: (ver=a0) ep 64512 ep_q 16384 evd 65408 evd_q 131071
<br>
&nbsp;query_hca: msg 2147483648 rdma 2147483648 iov 30 lmr 131056 rmr 0 rd_io 4
<br>
dat_get_ia_handle from 1 to 0x80a1648
<br>
&nbsp;cq_object_create: (0x80a1958,0x80a1a44)
<br>
dapls_ib_cq_alloc: evd 0x80a1958 cqlen=32
<br>
dapls_ib_cq_alloc: new_cq 0x80a1a68 cqlen=63
<br>
&nbsp;setup_async_cb: ia 0x80a1648 type 2 hdl 0x80a1958 cb 0xa7b1f174 ctx
<br>
0x80a1958
<br>
dat_get_ia_handle from 1 to 0x80a1648
<br>
dat_get_ia_handle from 1 to 0x80a1648
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Address already in use
<br>
&nbsp;listen(ia_ptr 0x80a1648 SID 1025 sp 0x80a7a00 conn 0x80a7a70 id 134904736)
<br>
&nbsp;listen(conn=0x80a7a70 cm_id=134904736)
<br>
dat_get_ia_handle from 1 to 0x80a1648
<br>
&nbsp;mr_register: ia=0x80a1648, lmr=0x80a3718 va=0x80ae000 ln=266240 pv=0x0
<br>
&nbsp;mr_register: mr=0x80a37c8 h 4 pd 0x80a1928 ctx 0x809ecd0
<br>
lkey=0x72002700 rkey=0x72002700 priv=41000
<br>
dat_get_ia_handle from 1 to 0x80a1648
<br>
&nbsp;mr_register: ia=0x80a1648, lmr=0x80a7f18 va=0x80ef000 ln=528384 pv=0x0
<br>
&nbsp;mr_register: mr=0x80a7fc8 h 5 pd 0x80a1928 ctx 0x809ecd0
<br>
lkey=0xf2002800 rkey=0xf2002800 priv=81000
<br>
&nbsp;getipaddr: family 2 port 0 addr 192.168.0.15
<br>
&nbsp;open_hca: ctx=0x809ecc0 port=1 GID subnet fe80000000000000 id
<br>
0002c9020020b4f5
<br>
&nbsp;open_hca: ib0, AF_INET 192.168.0.15 INLINE_MAX=128
<br>
&nbsp;ib_thread(12326) poll_event:  async=0x1 pipe=0x1 cm=0x0 cq=0x0
<br>
&nbsp;ib_thread(12326) poll_fd: hca[134729576]=0xb, async=8 pipe=12 cm=13 cq=d
<br>
&nbsp;query_hca: ib0 AF_INET  192.168.0.15
<br>
&nbsp;query_hca: (ver=a0) ep 64512 ep_q 16384 evd 65408 evd_q 131071
<br>
&nbsp;query_hca: msg 2147483648 rdma 2147483648 iov 30 lmr 131056 rmr 0 rd_io 4
<br>
&nbsp;setup_async_cb: ia 0x80a1638 type 0 hdl (nil) cb 0xa7b8bc6c ctx 0x80a16c0
<br>
&nbsp;setup_async_cb: ia 0x80a1638 type 1 hdl (nil) cb 0xa7b8b9c0 ctx 0x80a16c0
<br>
&nbsp;setup_async_cb: ia 0x80a1638 type 3 hdl (nil) cb 0xa7b8bb50 ctx 0x80a1638
<br>
dat_set_handle 0x80a1638 to 1
<br>
dat_get_ia_handle from 1 to 0x80a1638
<br>
&nbsp;pd_alloc: pd_handle=0x80a1918
<br>
dat_get_ia_handle from 1 to 0x80a1638
<br>
&nbsp;query_hca: ib0 AF_INET  192.168.0.15
<br>
&nbsp;query_hca: (ver=a0) ep 64512 ep_q 16384 evd 65408 evd_q 131071
<br>
&nbsp;query_hca: msg 2147483648 rdma 2147483648 iov 30 lmr 131056 rmr 0 rd_io 4
<br>
dat_get_ia_handle from 1 to 0x80a1638
<br>
&nbsp;cq_object_create: (0x80a1948,0x80a1a34)
<br>
dapls_ib_cq_alloc: evd 0x80a1948 cqlen=32
<br>
dapls_ib_cq_alloc: new_cq 0x80a1a58 cqlen=63
<br>
&nbsp;setup_async_cb: ia 0x80a1638 type 2 hdl 0x80a1948 cb 0xa7b8c174 ctx
<br>
0x80a1948
<br>
dat_get_ia_handle from 1 to 0x80a1638
<br>
dat_get_ia_handle from 1 to 0x80a1638
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;setup_listener Permission denied
<br>
&nbsp;listen(ia_ptr 0x80a1638 SID 1024 sp 0x80a7a00 conn 0x80a7a70 id 134904736)
<br>
&nbsp;listen(conn=0x80a7a70 cm_id=134904736)
<br>
dat_get_ia_handle from 1 to 0x80a1638
<br>
&nbsp;mr_register: ia=0x80a1638, lmr=0x80a3708 va=0x80ae000 ln=266240 pv=0x0
<br>
&nbsp;mr_register: mr=0x80a37b8 h 1 pd 0x80a1918 ctx 0x809ecc0
<br>
lkey=0x60002400 rkey=0x60002400 priv=41000
<br>
dat_get_ia_handle from 1 to 0x80a1638
<br>
&nbsp;mr_register: ia=0x80a1638, lmr=0x80a7ee8 va=0x80ef000 ln=528384 pv=0x0
<br>
&nbsp;mr_register: mr=0x80a7f98 h 2 pd 0x80a1918 ctx 0x809ecc0
<br>
lkey=0x60002500 rkey=0x60002500 priv=81000
<br>
#---------------------------------------------------
<br>
#    Intel (R) MPI Benchmark Suite V2.3, MPI-1 part
<br>
#---------------------------------------------------
<br>
# Date       : Tue May  8 11:16:58 2007
<br>
# Machine    : i686# System     : Linux
<br>
# Release    : 2.6.18
<br>
# Version    : #1 SMP Tue Nov 14 18:02:03 CET 2006
<br>
<p>#
<br>
# Minimum message length in bytes:   0
<br>
# Maximum message length in bytes:   16777216
<br>
#
<br>
# MPI_Datatype                   :   MPI_BYTE
<br>
# MPI_Datatype for reductions    :   MPI_FLOAT
<br>
# MPI_Op                         :   MPI_SUM
<br>
#
<br>
#
<br>
<p># List of Benchmarks to run:
<br>
<p># PingPong
<br>
dat_get_ia_handle from 1 to 0x80a1638
<br>
&nbsp;query_hca: MAX msg 2147483648 dto 16384 iov 30 rdma i4,o4
<br>
&nbsp;qp_alloc: ia_ptr 0x80a1638 ep_ptr 0x81741f8 ep_ctx_ptr 0x81741f8
<br>
&nbsp;create_qp Address already in use
<br>
<p>-------------------------------------------------------------------------
<br>
<p>The jobs hangs at this point. From the output of another simple test
<br>
program I assume that it hangs inside of a receive operation. Of course,
<br>
I have noticed the &quot;Permission denied&quot; messages, but I don't think that
<br>
the probleme is there. These messages seem to come from RDMA CM when
<br>
things are set up, but the execution continues from there on and I have
<br>
seen these messages on successful DAPL runs, too. I'm not very familiar
<br>
with RDMA CM, though, so I don't know the cause of these messages.
<br>
<p>That's a lot of information, I know, but it would be great if someone
<br>
would have a look at it.
<br>
<p>Thanks in advance
<br>
Boris
<br>
<p><p><p>Donald Kerr wrote:
<br>
<span class="quotelev1">&gt; I have not tried Open MPI uDAPL on Linux nor do I have access to a Linux 
</span><br>
<span class="quotelev1">&gt; box so I am having a difficult time trying to find a way to help you 
</span><br>
<span class="quotelev1">&gt; debug this issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -DON
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andreas Kuntze wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Linux you needn't initialise the dat registry. Your program prints: 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;provider 1: OpenIB-cma&quot;. I successfully tested INTEL MPI  and  mvapich2 
</span><br>
<span class="quotelev2">&gt;&gt; with uDAPL .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Andreas
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Donald Kerr wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andreas,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am going to guess at a minimum the interfaces are up and you can 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ping them.  On Solaris there is an additional step required and that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is initializing the dat registry. If &quot;/usr/sbin/datadm -v&quot; does not 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; show some driver output then you would need to run &quot;/usr/sbin/datadm 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -a /usr/share/dat/SUNWudaplt.conf&quot;. I don't know if there is an 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; equivalent on Linux.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attached is a simple udapl program which will check if the interfaces 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are available in the dat registry.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -DON
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
|  _  RWTH | Boris Bierbaum
|_|_`_     | Lehrstuhl fuer Betriebssysteme
   | |_) _  | RWTH Aachen D-52056 Aachen
     |_)(_` | Tel: +49-241-80-27805
        ._) | Fax: +49-241-80-22339


</pre>
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3206/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3206/ompi_info.out.gz">ompi_info.out.gz</a>
</ul>
<!-- attachment="ompi_info.out.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3207.php">Rob: "[OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3205.php">Luis Kornblueh: "[OMPI users] SIGSEGV in mpiexec"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3149.php">Donald Kerr: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3212.php">Jeff Squyres: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>Reply:</strong> <a href="3212.php">Jeff Squyres: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
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
