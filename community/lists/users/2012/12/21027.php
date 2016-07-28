<?
$subject_val = "Re: [OMPI users] Infiniband errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 22:19:28 2012" -->
<!-- isoreceived="20121221031928" -->
<!-- sent="Fri, 21 Dec 2012 08:19:23 +0500" -->
<!-- isosent="20121221031923" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband errors" -->
<!-- id="CAMvdAs+Yj+Xr1Pd8VY+bPLmefJsUPKCLPrN9iRNWqX2v4mO78A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1355931510.2397.27.camel_at_test.quest-ce.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Infiniband errors<br>
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-20 22:19:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21028.php">Siegmar Gross: "[OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Previous message:</strong> <a href="21026.php">Corey Allen: "[OMPI users] Question about Lost Messages"</a>
<li><strong>In reply to:</strong> <a href="21012.php">Yann Droneaud: "Re: [OMPI users] Infiniband errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Yann
<br>
<p>Here is the output
<br>
<p>*[root_at_compute-01-01 ~]# cat /etc/redhat-release*
<br>
Red Hat Enterprise Linux Server release 5.3 (Tikanga)
<br>
*[root_at_compute-01-01 ~]# uname -a*
<br>
Linux compute-01-01.private.dns.zone 2.6.18-128.el5 #1 SMP Wed Dec 17
<br>
11:41:38 EST 2008 x86_64 x86_64 x86_64 GNU/Linux
<br>
*[root_at_compute-01-01 ~]# lsmod*
<br>
Module                  Size  Used by
<br>
blcr                  118276  0
<br>
blcr_vmadump           56728  1 blcr
<br>
blcr_imports           47488  2 blcr,blcr_vmadump
<br>
autofs4                57033  2
<br>
hidp                   83521  2
<br>
nfs                   290189  5
<br>
lockd                  99185  2 nfs
<br>
fscache                52385  1 nfs
<br>
nfs_acl                36673  1 nfs
<br>
rfcomm                104809  0
<br>
l2cap                  89281  10 hidp,rfcomm
<br>
bluetooth             118597  5 hidp,rfcomm,l2cap
<br>
sunrpc                197897  17 nfs,lockd,nfs_acl
<br>
cpufreq_ondemand       42449  8
<br>
acpi_cpufreq           47937  1
<br>
freq_table             40889  2 cpufreq_ondemand,acpi_cpufreq
<br>
rdma_ucm               47872  8
<br>
qlgc_vnic             151168  0
<br>
ib_sdp                147176  0
<br>
rdma_cm                68500  2 rdma_ucm,ib_sdp
<br>
iw_cm                  43656  1 rdma_cm
<br>
ib_addr                41992  1 rdma_cm
<br>
ib_ipoib              113240  0
<br>
ipoib_helper           35728  2 ib_ipoib
<br>
ib_cm                  73000  3 qlgc_vnic,rdma_cm,ib_ipoib
<br>
ib_sa                  75016  4 qlgc_vnic,rdma_cm,ib_ipoib,ib_cm
<br>
ipv6                  424609  71 ib_ipoib
<br>
xfrm_nalgo             43333  1 ipv6
<br>
crypto_api             42945  1 xfrm_nalgo
<br>
ib_uverbs              75824  1 rdma_ucm
<br>
ib_umad                50472  0
<br>
iw_cxgb3              107476  0
<br>
cxgb3                 155120  1 iw_cxgb3
<br>
ib_ipath              355456  0
<br>
mlx4_ib                99260  0
<br>
mlx4_core             136036  1 mlx4_ib
<br>
ib_mthca              157988  0
<br>
ib_mad                 70948  5 ib_cm,ib_sa,ib_umad,mlx4_ib,ib_mthca
<br>
ib_core               108544  15
<br>
rdma_ucm,qlgc_vnic,ib_sdp,rdma_cm,iw_cm,ib_ipoib,ib_cm,ib_sa,ib_uverbs,ib_umad,iw_cxgb3,ib_ipath,mlx4_ib,ib_mthca,ib_mad
<br>
dm_mirror              53193  0
<br>
dm_multipath           55257  0
<br>
scsi_dh                41665  1 dm_multipath
<br>
video                  53197  0
<br>
hwmon                  36553  0
<br>
backlight              39873  1 video
<br>
sbs                    49921  0
<br>
i2c_ec                 38593  1 sbs
<br>
i2c_core               56129  1 i2c_ec
<br>
button                 40545  0
<br>
battery                43849  0
<br>
asus_acpi              50917  0
<br>
acpi_memhotplug        40133  0
<br>
ac                     38729  0
<br>
parport_pc             62312  0
<br>
lp                     47121  0
<br>
parport                73165  2 parport_pc,lp
<br>
joydev                 43969  0
<br>
sr_mod                 50789  0
<br>
cdrom                  68713  1 sr_mod
<br>
bnx2                  210249  0
<br>
sg                     69993  0
<br>
i5000_edac             43465  0
<br>
edac_mc                60193  1 i5000_edac
<br>
serio_raw              40517  0
<br>
pcspkr                 36289  0
<br>
dm_raid45              99025  0
<br>
dm_message             36161  1 dm_raid45
<br>
dm_region_hash         46145  1 dm_raid45
<br>
dm_log                 44865  3 dm_mirror,dm_raid45,dm_region_hash
<br>
dm_mod                100369  4 dm_mirror,dm_multipath,dm_raid45,dm_log
<br>
dm_mem_cache           38977  1 dm_raid45
<br>
usb_storage           116129  0
<br>
qla2xxx              1107173  0
<br>
scsi_transport_fc      73801  1 qla2xxx
<br>
shpchp                 70637  0
<br>
mptsas                 69201  5
<br>
mptscsih               69697  1 mptsas
<br>
mptbase               113637  2 mptsas,mptscsih
<br>
scsi_transport_sas     66753  1 mptsas
<br>
sd_mod                 56385  6
<br>
scsi_mod              196569  10
<br>
scsi_dh,sr_mod,sg,usb_storage,qla2xxx,scsi_transport_fc,mptsas,mptscsih,scsi_transport_sas,sd_mod
<br>
ext3                  168017  4
<br>
jbd                    94257  1 ext3
<br>
uhci_hcd               57433  0
<br>
ohci_hcd               55925  0
<br>
ehci_hcd               65741  0
<br>
*[root_at_compute-01-01 ~]# cat /proc/mounts*
<br>
rootfs / rootfs rw 0 0
<br>
/dev/root / ext3 rw,data=ordered 0 0
<br>
/dev /dev tmpfs rw 0 0
<br>
/proc /proc proc rw 0 0
<br>
/sys /sys sysfs rw 0 0
<br>
/proc/bus/usb /proc/bus/usb usbfs rw 0 0
<br>
devpts /dev/pts devpts rw 0 0
<br>
/dev/sda5 /var ext3 rw,data=ordered 0 0
<br>
/dev/sda6 /data ext3 rw,data=ordered 0 0
<br>
/dev/sda1 /boot ext3 rw,data=ordered 0 0
<br>
tmpfs /dev/shm tmpfs rw 0 0
<br>
none /proc/sys/fs/binfmt_misc binfmt_misc rw 0 0
<br>
sunrpc /var/lib/nfs/rpc_pipefs rpc_pipefs rw 0 0
<br>
10.0.0.1:/depot/shared /shared nfs
<br>
rw,vers=3,rsize=32768,wsize=32768,hard,proto=tcp,timeo=600,retrans=2,sec=sys,addr=10.0.0.1
<br>
0 0
<br>
10.0.0.1:/home /home nfs
<br>
rw,vers=3,rsize=32768,wsize=32768,hard,proto=tcp,timeo=600,retrans=2,sec=sys,addr=10.0.0.1
<br>
0 0
<br>
10.0.0.1:/opt/intel /opt/intel nfs
<br>
rw,vers=3,rsize=32768,wsize=32768,hard,proto=tcp,timeo=600,retrans=2,sec=sys,addr=10.0.0.1
<br>
0 0
<br>
10.0.0.1:/SATA-Backup /SATA-Backup nfs
<br>
rw,vers=3,rsize=32768,wsize=32768,hard,proto=tcp,timeo=600,retrans=2,sec=sys,addr=10.0.0.1
<br>
0 0
<br>
10.0.0.1:/FC-data /FC-data nfs
<br>
rw,vers=3,rsize=32768,wsize=32768,hard,proto=tcp,timeo=600,retrans=2,sec=sys,addr=10.0.0.1
<br>
0 0
<br>
/etc/auto.misc /misc autofs
<br>
rw,fd=6,pgrp=3876,timeout=300,minproto=5,maxproto=5,indirect 0 0
<br>
-hosts /net autofs
<br>
rw,fd=12,pgrp=3876,timeout=300,minproto=5,maxproto=5,indirect 0 0
<br>
<p>Thanks and Regards
<br>
<p><p>On Wed, Dec 19, 2012 at 8:38 PM, Yann Droneaud &lt;ydroneaud_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Le mercredi 19 d&#233;cembre 2012 &#224; 12:12 +0500, Syed Ahsan Ali a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Dear John
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I found this output of ibstatus on some nodes (most probably the
</span><br>
<span class="quotelev2">&gt; &gt; problem causing)
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_compute-01-08 ~]# ibstatus
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Fatal error:  device '*': sys files not found
</span><br>
<span class="quotelev2">&gt; &gt; (/sys/class/infiniband/*/ports)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does this show any hardware or software issue?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a software issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which Linux (lsb_release --all or cat /etc/redhat-release) and kernel
</span><br>
<span class="quotelev1">&gt; (uname -a) version are you using ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which modules are loaded (lsmod) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is /sys mounted (mount and/or cat /proc/mounts) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Yann Droneaud
</span><br>
<span class="quotelev1">&gt; OPTEYA
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Syed Ahsan Ali Bokhari
Electronic Engineer (EE)
Research &amp; Development Division
Pakistan Meteorological Department H-8/4, Islamabad.
Phone # off  +92518358714
Cell # +923155145014
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21027/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21028.php">Siegmar Gross: "[OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Previous message:</strong> <a href="21026.php">Corey Allen: "[OMPI users] Question about Lost Messages"</a>
<li><strong>In reply to:</strong> <a href="21012.php">Yann Droneaud: "Re: [OMPI users] Infiniband errors"</a>
<!-- nextthread="start" -->
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
