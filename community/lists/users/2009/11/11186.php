<?
$subject_val = "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 13 04:06:10 2009" -->
<!-- isoreceived="20091113090610" -->
<!-- sent="Fri, 13 Nov 2009 10:06:20 +0100" -->
<!-- isosent="20091113090620" -->
<!-- name="Stefan Kuhne" -->
<!-- email="Stefan.Kuhne_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB" -->
<!-- id="4AFD218C.9000703_at_dialup.fh-aachen.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="FB4091F1-9EDF-425D-9F30-FD6215CBFAA5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB<br>
<strong>From:</strong> Stefan Kuhne (<em>Stefan.Kuhne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-13 04:06:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11187.php">Jeff Squyres: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>Previous message:</strong> <a href="11185.php">Aaron Knister: "Re: [OMPI users] oob mca question"</a>
<li><strong>In reply to:</strong> <a href="11170.php">Jeff Squyres: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11187.php">Jeff Squyres: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>Reply:</strong> <a href="11187.php">Jeff Squyres: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres schrieb:
<br>
<p>Hello,
<br>
<p><span class="quotelev1">&gt; Can you submit all the information requested here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
OpenFabrics version: 1.5 RC1 (Download from www.openfrabrics.org)
<br>
<p>Distro: Ubuntu 9.04 (2.6.28-11-generic)
<br>
<p>SM: Infinicon InfinIO 9024 Switch
<br>
<p>ibv_devinfo:
<br>
user_at_head:~$ ibv_devinfo
<br>
hca_id: mthca0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                         3.5.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:                      0006:6a00:b000:476b
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:                 0006:6a00:b000:476e
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:                      0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:                 23108
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                         0xA1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:                       MT_0030000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:                  2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:                2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:             2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_DOWN (1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:                2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:             512 (2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>
<p>user_at_head:~$
<br>
<p>ifconfig:
<br>
user_at_head:~$ ifconfig ib0
<br>
ib0       Link encap:UNSPEC  Hardware Adresse 
<br>
80-00-04-04-FE-80-00-00-00-00-00-00-00-00-00-00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet Adresse:192.168.100.207  Bcast:192.168.100.255 
<br>
Maske:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6-Adresse: fe80::206:6a00:b000:476c/64 
<br>
G&#195;&#188;ltigkeitsbereich:Verbindung
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:65520  Metrik:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:0 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:0 errors:0 dropped:7 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kollisionen:0 Sendewarteschlangenl&#195;&#164;nge:256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:0 (0.0 B)  TX bytes:0 (0.0 B)
<br>
<p>user_at_head:~$
<br>
<p>ulimit -l:
<br>
user_at_head:~$ ulimit -l
<br>
64
<br>
user_at_head:~$
<br>
<p>I hope it's what you need.
<br>
<p>Regards,
<br>
Stefan Kuhne
<br>
<p><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11187.php">Jeff Squyres: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>Previous message:</strong> <a href="11185.php">Aaron Knister: "Re: [OMPI users] oob mca question"</a>
<li><strong>In reply to:</strong> <a href="11170.php">Jeff Squyres: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11187.php">Jeff Squyres: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>Reply:</strong> <a href="11187.php">Jeff Squyres: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
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
