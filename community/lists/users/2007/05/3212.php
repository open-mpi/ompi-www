<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  8 09:17:07 2007" -->
<!-- isoreceived="20070508131707" -->
<!-- sent="Tue, 8 May 2007 09:16:57 -0400" -->
<!-- isosent="20070508131657" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI over uDAPL doesn't work" -->
<!-- id="054A73AF-4EEB-4269-8DBC-0D39E1ADC08B_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="464044D4.5010501_at_lfbs.rwth-aachen.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-08 09:16:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3213.php">Jeff Squyres: "[OMPI users] Fwd: [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<li><strong>Previous message:</strong> <a href="3211.php">Jeff Squyres: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3206.php">Boris Bierbaum: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3150.php">Andrew Friedley: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm forwarding this to the OpenFabrics general list -- as it just  
<br>
came up the other day, we know that Open MPI's UDAPL support works on  
<br>
Solaris, but we have done little/no testing of it on OFED (I  
<br>
personally know almost nothing about UDPAL).
<br>
<p>Can the UDAPL OFED wizards shed any light on the error messages that  
<br>
are listed below?  In particular, these seem to be worrysome:
<br>
<p><span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Address already in use
</span><br>
and
<br>
<span class="quotelev1">&gt;  create_qp Address already in use
</span><br>
<p>Thanks...
<br>
<p><p>On May 8, 2007, at 5:37 AM, Boris Bierbaum wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; we (my collegue Andreas and me) are still trying to solve this  
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt; I have compiled some additional information, maybe somebody has an  
</span><br>
<span class="quotelev1">&gt; idea
</span><br>
<span class="quotelev1">&gt; about what's going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OS: Debian GNU/Linux 4.0, Kernel 2.6.18, x86, 32-Bit
</span><br>
<span class="quotelev1">&gt; IB software: OFED 1.1
</span><br>
<span class="quotelev1">&gt; SM: OpenSM from OFED 1.1
</span><br>
<span class="quotelev1">&gt; uDAPL: DAPL reference implementation version gamma 3.02 (using DAPL  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; OFED 1.1 doesn't change anything, I suppose it's the same code, at  
</span><br>
<span class="quotelev1">&gt; least
</span><br>
<span class="quotelev1">&gt; roughly)
</span><br>
<span class="quotelev1">&gt; Test program: Intel MPI Benchmarks Version 2.3
</span><br>
<span class="quotelev1">&gt; OpenMPI version: 1.2.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running OpenMPI directly over IB verbs (mpirun --mca btl  
</span><br>
<span class="quotelev1">&gt; self,sm,openib
</span><br>
<span class="quotelev1">&gt; ...) works. Here's the output of ibv_devinfo and ifconfig for the two
</span><br>
<span class="quotelev1">&gt; nodes on which tried to run the benchmark (ulimit -l is unlimited on
</span><br>
<span class="quotelev1">&gt; both machines):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------ 1st node -------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; boris_at_pd-04:/work/boris/IMB_2.3/src$ /opt/infiniband/bin/ibv_devinfo
</span><br>
<span class="quotelev1">&gt; hca_id: mthca0
</span><br>
<span class="quotelev1">&gt;         fw_ver:                         1.2.0
</span><br>
<span class="quotelev1">&gt;         node_guid:                      0002:c902:0020:b528
</span><br>
<span class="quotelev1">&gt;         sys_image_guid:                 0002:c902:0020:b52b
</span><br>
<span class="quotelev1">&gt;         vendor_id:                      0x02c9
</span><br>
<span class="quotelev1">&gt;         vendor_part_id:                 25204
</span><br>
<span class="quotelev1">&gt;         hw_ver:                         0xA0
</span><br>
<span class="quotelev1">&gt;         board_id:                       MT_0230000001
</span><br>
<span class="quotelev1">&gt;         phys_port_cnt:                  1
</span><br>
<span class="quotelev1">&gt;                 port:   1
</span><br>
<span class="quotelev1">&gt;                         state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                         max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                         active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                         sm_lid:                 1
</span><br>
<span class="quotelev1">&gt;                         port_lid:               9
</span><br>
<span class="quotelev1">&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; boris_at_pd-04:/work/boris/IMB_2.3/src$ /sbin/ifconfig
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ib0       Protokoll:UNSPEC  Hardware Adresse
</span><br>
<span class="quotelev1">&gt; 00-00-04-04-FE-80-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev1">&gt;           inet Adresse:192.168.0.14  Bcast:192.168.0.255
</span><br>
<span class="quotelev1">&gt; Maske:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 Adresse: fe80::202:c902:20:b529/64
</span><br>
<span class="quotelev1">&gt; G&#252;ltigkeitsbereich:Verbindung
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:67 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:16 errors:0 dropped:2 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           Kollisionen:0 Sendewarteschlangenl&#228;nge:128
</span><br>
<span class="quotelev1">&gt;           RX bytes:3752 (3.6 KiB)  TX bytes:968 (968.0 b)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------ 2nd node -------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; boris_at_pd-05:~$  /opt/infiniband/bin/ibv_devinfo
</span><br>
<span class="quotelev1">&gt; hca_id: mthca0
</span><br>
<span class="quotelev1">&gt;         fw_ver:                         1.2.0
</span><br>
<span class="quotelev1">&gt;         node_guid:                      0002:c902:0020:b4f4
</span><br>
<span class="quotelev1">&gt;         sys_image_guid:                 0002:c902:0020:b4f7
</span><br>
<span class="quotelev1">&gt;         vendor_id:                      0x02c9
</span><br>
<span class="quotelev1">&gt;         vendor_part_id:                 25204
</span><br>
<span class="quotelev1">&gt;         hw_ver:                         0xA0
</span><br>
<span class="quotelev1">&gt;         board_id:                       MT_0230000001
</span><br>
<span class="quotelev1">&gt;         phys_port_cnt:                  1
</span><br>
<span class="quotelev1">&gt;                 port:   1
</span><br>
<span class="quotelev1">&gt;                         state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                         max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                         active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                         sm_lid:                 1
</span><br>
<span class="quotelev1">&gt;                         port_lid:               10
</span><br>
<span class="quotelev1">&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; boris_at_pd-05:~$ /sbin/ifconfig
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ib0       Protokoll:UNSPEC  Hardware Adresse
</span><br>
<span class="quotelev1">&gt; 00-00-04-04-FE-80-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev1">&gt;           inet Adresse:192.168.0.15  Bcast:192.168.0.255
</span><br>
<span class="quotelev1">&gt; Maske:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 Adresse: fe80::202:c902:20:b4f5/64
</span><br>
<span class="quotelev1">&gt; G&#252;ltigkeitsbereich:Verbindung
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:67 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:18 errors:0 dropped:2 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           Kollisionen:0 Sendewarteschlangenl&#228;nge:128
</span><br>
<span class="quotelev1">&gt;           RX bytes:3752 (3.6 KiB)  TX bytes:1088 (1.0 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the output from the failed run, with every DAT and DAPL debug
</span><br>
<span class="quotelev1">&gt; output enabled:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; boris_at_pd-04:/work/boris/IMB_2.3/src$ mpirun -np 2 -x DAT_DBG_TYPE -x
</span><br>
<span class="quotelev1">&gt; DAPL_DBG_TYPE -x DAT_OVERRIDE --mca btl self,sm,udapl --host  
</span><br>
<span class="quotelev1">&gt; pd-04,pd-05
</span><br>
<span class="quotelev1">&gt; /work/boris/IMB_2.3/src/IMB-MPI1 pingpong
</span><br>
<span class="quotelev1">&gt; DAT Registry: Started (dat_init)
</span><br>
<span class="quotelev1">&gt; DAT Registry: static registry file
</span><br>
<span class="quotelev1">&gt; &lt;/home/boris/dapl_on_dope_gamma3.2/doc/dat.conf&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: token
</span><br>
<span class="quotelev1">&gt;  type  string
</span><br>
<span class="quotelev1">&gt;  value &lt;OpenIB-cma&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: token
</span><br>
<span class="quotelev1">&gt;  type  string
</span><br>
<span class="quotelev1">&gt;  value &lt;u1.2&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: token
</span><br>
<span class="quotelev1">&gt;  type  string
</span><br>
<span class="quotelev1">&gt;  value &lt;nonthreadsafe&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: token
</span><br>
<span class="quotelev1">&gt;  type  string
</span><br>
<span class="quotelev1">&gt;  value &lt;default&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: token
</span><br>
<span class="quotelev1">&gt;  type  string
</span><br>
<span class="quotelev1">&gt;  value
</span><br>
<span class="quotelev1">&gt; &lt;/home/boris/dapl_on_dope_gamma3.2/dapl/udapl/Target/i686/ 
</span><br>
<span class="quotelev1">&gt; libdapl_openib_cma.so&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: token
</span><br>
<span class="quotelev1">&gt;  type  string
</span><br>
<span class="quotelev1">&gt;  value &lt;mv_dapl.1.2&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: token
</span><br>
<span class="quotelev1">&gt;  type  string
</span><br>
<span class="quotelev1">&gt;  value &lt;ib0 0&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: token
</span><br>
<span class="quotelev1">&gt;  type  string
</span><br>
<span class="quotelev1">&gt;  value &lt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: token
</span><br>
<span class="quotelev1">&gt;  type  eor
</span><br>
<span class="quotelev1">&gt;  value &lt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: entry
</span><br>
<span class="quotelev1">&gt;  ia_name OpenIB-cma
</span><br>
<span class="quotelev1">&gt;  api_version
</span><br>
<span class="quotelev1">&gt;      type 0x0
</span><br>
<span class="quotelev1">&gt;      major.minor 1.2
</span><br>
<span class="quotelev1">&gt;  is_thread_safe 0
</span><br>
<span class="quotelev1">&gt;  is_default 1
</span><br>
<span class="quotelev1">&gt;  lib_path
</span><br>
<span class="quotelev1">&gt; /home/boris/dapl_on_dope_gamma3.2/dapl/udapl/Target/i686/ 
</span><br>
<span class="quotelev1">&gt; libdapl_openib_cma.so
</span><br>
<span class="quotelev1">&gt;  provider_version
</span><br>
<span class="quotelev1">&gt;      id mv_dapl
</span><br>
<span class="quotelev1">&gt;      major.minor 1.2
</span><br>
<span class="quotelev1">&gt;  ia_params ib0 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: loading provider for OpenIB-cma
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: token
</span><br>
<span class="quotelev1">&gt;  type  eof
</span><br>
<span class="quotelev1">&gt;  value &lt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: dat_registry_list_providers () called
</span><br>
<span class="quotelev1">&gt; DAT Registry: dat_ia_openv (OpenIB-cma,1:2,0) called
</span><br>
<span class="quotelev1">&gt; DAT Registry: IA OpenIB-cma, trying to load library
</span><br>
<span class="quotelev1">&gt; /home/boris/dapl_on_dope_gamma3.2/dapl/udapl/Target/i686/ 
</span><br>
<span class="quotelev1">&gt; libdapl_openib_cma.so
</span><br>
<span class="quotelev1">&gt; DAPL: NOT Setting Loopback
</span><br>
<span class="quotelev1">&gt;  dapl_ib_init:
</span><br>
<span class="quotelev1">&gt; DAT Registry: dat_registry_add_provider (OpenIB-cma,1:2,0)
</span><br>
<span class="quotelev1">&gt;  open_hca: ib0 - 0x807cf28
</span><br>
<span class="quotelev1">&gt;  ib_thread_init(17919)
</span><br>
<span class="quotelev1">&gt;  ib_thread_init: waiting for ib_thread
</span><br>
<span class="quotelev1">&gt;  ib_thread(17919,0xa7b08bb0): ENTER: pipe 8 ucma 12
</span><br>
<span class="quotelev1">&gt; DAT Registry: Started (dat_init)
</span><br>
<span class="quotelev1">&gt; DAT Registry: static registry file
</span><br>
<span class="quotelev1">&gt; &lt;/home/boris/dapl_on_dope_gamma3.2/doc/dat.conf&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: token
</span><br>
<span class="quotelev1">&gt;  type  string
</span><br>
<span class="quotelev1">&gt;  value &lt;OpenIB-cma&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: token
</span><br>
<span class="quotelev1">&gt;  type  string
</span><br>
<span class="quotelev1">&gt;  value &lt;u1.2&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: token
</span><br>
<span class="quotelev1">&gt;  type  string
</span><br>
<span class="quotelev1">&gt;  value &lt;nonthreadsafe&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: token
</span><br>
<span class="quotelev1">&gt;  type  string
</span><br>
<span class="quotelev1">&gt;  value &lt;default&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: token
</span><br>
<span class="quotelev1">&gt;  type  string
</span><br>
<span class="quotelev1">&gt;  value
</span><br>
<span class="quotelev1">&gt; &lt;/home/boris/dapl_on_dope_gamma3.2/dapl/udapl/Target/i686/ 
</span><br>
<span class="quotelev1">&gt; libdapl_openib_cma.so&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: token
</span><br>
<span class="quotelev1">&gt;  type  string
</span><br>
<span class="quotelev1">&gt;  value &lt;mv_dapl.1.2&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: token
</span><br>
<span class="quotelev1">&gt;  type  string
</span><br>
<span class="quotelev1">&gt;  value &lt;ib0 0&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: token
</span><br>
<span class="quotelev1">&gt;  type  string
</span><br>
<span class="quotelev1">&gt;  value &lt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: token
</span><br>
<span class="quotelev1">&gt;  type  eor
</span><br>
<span class="quotelev1">&gt;  value &lt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: entry
</span><br>
<span class="quotelev1">&gt;  ia_name OpenIB-cma
</span><br>
<span class="quotelev1">&gt;  api_version
</span><br>
<span class="quotelev1">&gt;      type 0x0
</span><br>
<span class="quotelev1">&gt;      major.minor 1.2
</span><br>
<span class="quotelev1">&gt;  is_thread_safe 0
</span><br>
<span class="quotelev1">&gt;  is_default 1
</span><br>
<span class="quotelev1">&gt;  lib_path
</span><br>
<span class="quotelev1">&gt; /home/boris/dapl_on_dope_gamma3.2/dapl/udapl/Target/i686/ 
</span><br>
<span class="quotelev1">&gt; libdapl_openib_cma.so
</span><br>
<span class="quotelev1">&gt;  provider_version
</span><br>
<span class="quotelev1">&gt;      id mv_dapl
</span><br>
<span class="quotelev1">&gt;      major.minor 1.2
</span><br>
<span class="quotelev1">&gt;  ia_params ib0 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: loading provider for OpenIB-cma
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: token
</span><br>
<span class="quotelev1">&gt;  type  eof
</span><br>
<span class="quotelev1">&gt;  value &lt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DAT Registry: dat_registry_list_providers () called
</span><br>
<span class="quotelev1">&gt; DAT Registry: dat_ia_openv (OpenIB-cma,1:2,0) called
</span><br>
<span class="quotelev1">&gt; DAT Registry: IA OpenIB-cma, trying to load library
</span><br>
<span class="quotelev1">&gt; /home/boris/dapl_on_dope_gamma3.2/dapl/udapl/Target/i686/ 
</span><br>
<span class="quotelev1">&gt; libdapl_openib_cma.so
</span><br>
<span class="quotelev1">&gt;  ib_thread_init(17919) exit
</span><br>
<span class="quotelev1">&gt; DAPL: NOT Setting Loopback
</span><br>
<span class="quotelev1">&gt;  dapl_ib_init:
</span><br>
<span class="quotelev1">&gt; DAT Registry: dat_registry_add_provider (OpenIB-cma,1:2,0)
</span><br>
<span class="quotelev1">&gt;  open_hca: ib0 - 0x807cf18
</span><br>
<span class="quotelev1">&gt;  ib_thread_init(12326)
</span><br>
<span class="quotelev1">&gt;  ib_thread_init: waiting for ib_thread
</span><br>
<span class="quotelev1">&gt;  ib_thread(12326,0xa7b75bb0): ENTER: pipe 8 ucma 12
</span><br>
<span class="quotelev1">&gt;  ib_thread_init(12326) exit
</span><br>
<span class="quotelev1">&gt;  getipaddr: family 2 port 0 addr 192.168.0.14
</span><br>
<span class="quotelev1">&gt;  open_hca: ctx=0x809ecd0 port=1 GID subnet fe80000000000000 id
</span><br>
<span class="quotelev1">&gt; 0002c9020020b529
</span><br>
<span class="quotelev1">&gt;  open_hca: ib0, AF_INET 192.168.0.14 INLINE_MAX=128
</span><br>
<span class="quotelev1">&gt;  ib_thread(17919) poll_event:  async=0x1 pipe=0x1 cm=0x0 cq=0x0
</span><br>
<span class="quotelev1">&gt;  ib_thread(17919) poll_fd: hca[134729592]=0xb, async=8 pipe=12  
</span><br>
<span class="quotelev1">&gt; cm=13 cq=d
</span><br>
<span class="quotelev1">&gt;  query_hca: ib0 AF_INET  192.168.0.14
</span><br>
<span class="quotelev1">&gt;  query_hca: (ver=a0) ep 64512 ep_q 16384 evd 65408 evd_q 131071
</span><br>
<span class="quotelev1">&gt;  query_hca: msg 2147483648 rdma 2147483648 iov 30 lmr 131056 rmr 0  
</span><br>
<span class="quotelev1">&gt; rd_io 4
</span><br>
<span class="quotelev1">&gt;  setup_async_cb: ia 0x80a1648 type 0 hdl (nil) cb 0xa7b1ec6c ctx  
</span><br>
<span class="quotelev1">&gt; 0x80a16d0
</span><br>
<span class="quotelev1">&gt;  setup_async_cb: ia 0x80a1648 type 1 hdl (nil) cb 0xa7b1e9c0 ctx  
</span><br>
<span class="quotelev1">&gt; 0x80a16d0
</span><br>
<span class="quotelev1">&gt;  setup_async_cb: ia 0x80a1648 type 3 hdl (nil) cb 0xa7b1eb50 ctx  
</span><br>
<span class="quotelev1">&gt; 0x80a1648
</span><br>
<span class="quotelev1">&gt; dat_set_handle 0x80a1648 to 1
</span><br>
<span class="quotelev1">&gt; dat_get_ia_handle from 1 to 0x80a1648
</span><br>
<span class="quotelev1">&gt;  pd_alloc: pd_handle=0x80a1928
</span><br>
<span class="quotelev1">&gt; dat_get_ia_handle from 1 to 0x80a1648
</span><br>
<span class="quotelev1">&gt;  query_hca: ib0 AF_INET  192.168.0.14
</span><br>
<span class="quotelev1">&gt;  query_hca: (ver=a0) ep 64512 ep_q 16384 evd 65408 evd_q 131071
</span><br>
<span class="quotelev1">&gt;  query_hca: msg 2147483648 rdma 2147483648 iov 30 lmr 131056 rmr 0  
</span><br>
<span class="quotelev1">&gt; rd_io 4
</span><br>
<span class="quotelev1">&gt; dat_get_ia_handle from 1 to 0x80a1648
</span><br>
<span class="quotelev1">&gt;  cq_object_create: (0x80a1958,0x80a1a44)
</span><br>
<span class="quotelev1">&gt; dapls_ib_cq_alloc: evd 0x80a1958 cqlen=32
</span><br>
<span class="quotelev1">&gt; dapls_ib_cq_alloc: new_cq 0x80a1a68 cqlen=63
</span><br>
<span class="quotelev1">&gt;  setup_async_cb: ia 0x80a1648 type 2 hdl 0x80a1958 cb 0xa7b1f174 ctx
</span><br>
<span class="quotelev1">&gt; 0x80a1958
</span><br>
<span class="quotelev1">&gt; dat_get_ia_handle from 1 to 0x80a1648
</span><br>
<span class="quotelev1">&gt; dat_get_ia_handle from 1 to 0x80a1648
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Address already in use
</span><br>
<span class="quotelev1">&gt;  listen(ia_ptr 0x80a1648 SID 1025 sp 0x80a7a00 conn 0x80a7a70 id  
</span><br>
<span class="quotelev1">&gt; 134904736)
</span><br>
<span class="quotelev1">&gt;  listen(conn=0x80a7a70 cm_id=134904736)
</span><br>
<span class="quotelev1">&gt; dat_get_ia_handle from 1 to 0x80a1648
</span><br>
<span class="quotelev1">&gt;  mr_register: ia=0x80a1648, lmr=0x80a3718 va=0x80ae000 ln=266240  
</span><br>
<span class="quotelev1">&gt; pv=0x0
</span><br>
<span class="quotelev1">&gt;  mr_register: mr=0x80a37c8 h 4 pd 0x80a1928 ctx 0x809ecd0
</span><br>
<span class="quotelev1">&gt; lkey=0x72002700 rkey=0x72002700 priv=41000
</span><br>
<span class="quotelev1">&gt; dat_get_ia_handle from 1 to 0x80a1648
</span><br>
<span class="quotelev1">&gt;  mr_register: ia=0x80a1648, lmr=0x80a7f18 va=0x80ef000 ln=528384  
</span><br>
<span class="quotelev1">&gt; pv=0x0
</span><br>
<span class="quotelev1">&gt;  mr_register: mr=0x80a7fc8 h 5 pd 0x80a1928 ctx 0x809ecd0
</span><br>
<span class="quotelev1">&gt; lkey=0xf2002800 rkey=0xf2002800 priv=81000
</span><br>
<span class="quotelev1">&gt;  getipaddr: family 2 port 0 addr 192.168.0.15
</span><br>
<span class="quotelev1">&gt;  open_hca: ctx=0x809ecc0 port=1 GID subnet fe80000000000000 id
</span><br>
<span class="quotelev1">&gt; 0002c9020020b4f5
</span><br>
<span class="quotelev1">&gt;  open_hca: ib0, AF_INET 192.168.0.15 INLINE_MAX=128
</span><br>
<span class="quotelev1">&gt;  ib_thread(12326) poll_event:  async=0x1 pipe=0x1 cm=0x0 cq=0x0
</span><br>
<span class="quotelev1">&gt;  ib_thread(12326) poll_fd: hca[134729576]=0xb, async=8 pipe=12  
</span><br>
<span class="quotelev1">&gt; cm=13 cq=d
</span><br>
<span class="quotelev1">&gt;  query_hca: ib0 AF_INET  192.168.0.15
</span><br>
<span class="quotelev1">&gt;  query_hca: (ver=a0) ep 64512 ep_q 16384 evd 65408 evd_q 131071
</span><br>
<span class="quotelev1">&gt;  query_hca: msg 2147483648 rdma 2147483648 iov 30 lmr 131056 rmr 0  
</span><br>
<span class="quotelev1">&gt; rd_io 4
</span><br>
<span class="quotelev1">&gt;  setup_async_cb: ia 0x80a1638 type 0 hdl (nil) cb 0xa7b8bc6c ctx  
</span><br>
<span class="quotelev1">&gt; 0x80a16c0
</span><br>
<span class="quotelev1">&gt;  setup_async_cb: ia 0x80a1638 type 1 hdl (nil) cb 0xa7b8b9c0 ctx  
</span><br>
<span class="quotelev1">&gt; 0x80a16c0
</span><br>
<span class="quotelev1">&gt;  setup_async_cb: ia 0x80a1638 type 3 hdl (nil) cb 0xa7b8bb50 ctx  
</span><br>
<span class="quotelev1">&gt; 0x80a1638
</span><br>
<span class="quotelev1">&gt; dat_set_handle 0x80a1638 to 1
</span><br>
<span class="quotelev1">&gt; dat_get_ia_handle from 1 to 0x80a1638
</span><br>
<span class="quotelev1">&gt;  pd_alloc: pd_handle=0x80a1918
</span><br>
<span class="quotelev1">&gt; dat_get_ia_handle from 1 to 0x80a1638
</span><br>
<span class="quotelev1">&gt;  query_hca: ib0 AF_INET  192.168.0.15
</span><br>
<span class="quotelev1">&gt;  query_hca: (ver=a0) ep 64512 ep_q 16384 evd 65408 evd_q 131071
</span><br>
<span class="quotelev1">&gt;  query_hca: msg 2147483648 rdma 2147483648 iov 30 lmr 131056 rmr 0  
</span><br>
<span class="quotelev1">&gt; rd_io 4
</span><br>
<span class="quotelev1">&gt; dat_get_ia_handle from 1 to 0x80a1638
</span><br>
<span class="quotelev1">&gt;  cq_object_create: (0x80a1948,0x80a1a34)
</span><br>
<span class="quotelev1">&gt; dapls_ib_cq_alloc: evd 0x80a1948 cqlen=32
</span><br>
<span class="quotelev1">&gt; dapls_ib_cq_alloc: new_cq 0x80a1a58 cqlen=63
</span><br>
<span class="quotelev1">&gt;  setup_async_cb: ia 0x80a1638 type 2 hdl 0x80a1948 cb 0xa7b8c174 ctx
</span><br>
<span class="quotelev1">&gt; 0x80a1948
</span><br>
<span class="quotelev1">&gt; dat_get_ia_handle from 1 to 0x80a1638
</span><br>
<span class="quotelev1">&gt; dat_get_ia_handle from 1 to 0x80a1638
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;  listen(ia_ptr 0x80a1638 SID 1024 sp 0x80a7a00 conn 0x80a7a70 id  
</span><br>
<span class="quotelev1">&gt; 134904736)
</span><br>
<span class="quotelev1">&gt;  listen(conn=0x80a7a70 cm_id=134904736)
</span><br>
<span class="quotelev1">&gt; dat_get_ia_handle from 1 to 0x80a1638
</span><br>
<span class="quotelev1">&gt;  mr_register: ia=0x80a1638, lmr=0x80a3708 va=0x80ae000 ln=266240  
</span><br>
<span class="quotelev1">&gt; pv=0x0
</span><br>
<span class="quotelev1">&gt;  mr_register: mr=0x80a37b8 h 1 pd 0x80a1918 ctx 0x809ecc0
</span><br>
<span class="quotelev1">&gt; lkey=0x60002400 rkey=0x60002400 priv=41000
</span><br>
<span class="quotelev1">&gt; dat_get_ia_handle from 1 to 0x80a1638
</span><br>
<span class="quotelev1">&gt;  mr_register: ia=0x80a1638, lmr=0x80a7ee8 va=0x80ef000 ln=528384  
</span><br>
<span class="quotelev1">&gt; pv=0x0
</span><br>
<span class="quotelev1">&gt;  mr_register: mr=0x80a7f98 h 2 pd 0x80a1918 ctx 0x809ecc0
</span><br>
<span class="quotelev1">&gt; lkey=0x60002500 rkey=0x60002500 priv=81000
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #    Intel (R) MPI Benchmark Suite V2.3, MPI-1 part
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Date       : Tue May  8 11:16:58 2007
</span><br>
<span class="quotelev1">&gt; # Machine    : i686# System     : Linux
</span><br>
<span class="quotelev1">&gt; # Release    : 2.6.18
</span><br>
<span class="quotelev1">&gt; # Version    : #1 SMP Tue Nov 14 18:02:03 CET 2006
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Minimum message length in bytes:   0
</span><br>
<span class="quotelev1">&gt; # Maximum message length in bytes:   16777216
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # MPI_Datatype                   :   MPI_BYTE
</span><br>
<span class="quotelev1">&gt; # MPI_Datatype for reductions    :   MPI_FLOAT
</span><br>
<span class="quotelev1">&gt; # MPI_Op                         :   MPI_SUM
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # List of Benchmarks to run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # PingPong
</span><br>
<span class="quotelev1">&gt; dat_get_ia_handle from 1 to 0x80a1638
</span><br>
<span class="quotelev1">&gt;  query_hca: MAX msg 2147483648 dto 16384 iov 30 rdma i4,o4
</span><br>
<span class="quotelev1">&gt;  qp_alloc: ia_ptr 0x80a1638 ep_ptr 0x81741f8 ep_ctx_ptr 0x81741f8
</span><br>
<span class="quotelev1">&gt;  create_qp Address already in use
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The jobs hangs at this point. From the output of another simple test
</span><br>
<span class="quotelev1">&gt; program I assume that it hangs inside of a receive operation. Of  
</span><br>
<span class="quotelev1">&gt; course,
</span><br>
<span class="quotelev1">&gt; I have noticed the &quot;Permission denied&quot; messages, but I don't think  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; the probleme is there. These messages seem to come from RDMA CM when
</span><br>
<span class="quotelev1">&gt; things are set up, but the execution continues from there on and I  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt; seen these messages on successful DAPL runs, too. I'm not very  
</span><br>
<span class="quotelev1">&gt; familiar
</span><br>
<span class="quotelev1">&gt; with RDMA CM, though, so I don't know the cause of these messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's a lot of information, I know, but it would be great if someone
</span><br>
<span class="quotelev1">&gt; would have a look at it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Boris
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Donald Kerr wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have not tried Open MPI uDAPL on Linux nor do I have access to a  
</span><br>
<span class="quotelev2">&gt;&gt; Linux
</span><br>
<span class="quotelev2">&gt;&gt; box so I am having a difficult time trying to find a way to help you
</span><br>
<span class="quotelev2">&gt;&gt; debug this issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -DON
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Andreas Kuntze wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Linux you needn't initialise the dat registry. Your program  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prints:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;provider 1: OpenIB-cma&quot;. I successfully tested INTEL MPI  and   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mvapich2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with uDAPL .
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andreas
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Donald Kerr wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Andreas,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am going to guess at a minimum the interfaces are up and you can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ping them.  On Solaris there is an additional step required and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is initializing the dat registry. If &quot;/usr/sbin/datadm -v&quot; does not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; show some driver output then you would need to run &quot;/usr/sbin/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; datadm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -a /usr/share/dat/SUNWudaplt.conf&quot;. I don't know if there is an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; equivalent on Linux.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Attached is a simple udapl program which will check if the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interfaces
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are available in the dat registry.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -DON
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; |  _  RWTH | Boris Bierbaum
</span><br>
<span class="quotelev1">&gt; |_|_`_     | Lehrstuhl fuer Betriebssysteme
</span><br>
<span class="quotelev1">&gt;    | |_) _  | RWTH Aachen D-52056 Aachen
</span><br>
<span class="quotelev1">&gt;      |_)(_` | Tel: +49-241-80-27805
</span><br>
<span class="quotelev1">&gt;         ._) | Fax: +49-241-80-22339
</span><br>
<span class="quotelev1">&gt; &lt;config.log.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info.out.gz&gt;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3213.php">Jeff Squyres: "[OMPI users] Fwd: [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<li><strong>Previous message:</strong> <a href="3211.php">Jeff Squyres: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3206.php">Boris Bierbaum: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3150.php">Andrew Friedley: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
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
