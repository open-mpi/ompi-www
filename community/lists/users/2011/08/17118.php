<?
$subject_val = "Re: [OMPI users] ConnectX with InfiniHost IB HCAs";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 27 16:02:51 2011" -->
<!-- isoreceived="20110827200251" -->
<!-- sent="Sat, 27 Aug 2011 23:02:47 +0300" -->
<!-- isosent="20110827200247" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ConnectX with InfiniHost IB HCAs" -->
<!-- id="4E594D67.8080506_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1BDCD53C-1BAD-4B45-8FD2-F41604080BAB_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] ConnectX with InfiniHost IB HCAs<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-27 16:02:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17119.php">Reuti: "Re: [OMPI users] How to add nodes while running job"</a>
<li><strong>Previous message:</strong> <a href="17117.php">Ralph Castain: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="17108.php">Shamis, Pavel: "Re: [OMPI users] ConnectX with InfiniHost IB HCAs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Egor,
<br>
<p>If updating OFED doesn't solve the problem (and I kinda have the
<br>
feeling that it does), you might want to try this mailing list
<br>
for IB interoperability questions:
<br>
linux-rdma_at_[hidden]
<br>
<p>-- YK
<br>
<p>On 26-Aug-11 4:42 PM, Shamis, Pavel wrote:
<br>
<span class="quotelev1">&gt; You may try to update your OFED version. I think 1.5.3 is the latest one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Application Performance Tools Group
</span><br>
<span class="quotelev1">&gt; Computer Science and Math Division
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 25, 2011, at 7:46 PM,&lt;worldeb_at_[hidden]&gt;  &lt;worldeb_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it is more hardware or system configuration question but
</span><br>
<span class="quotelev2">&gt;&gt; I hope people in this list have an experience.
</span><br>
<span class="quotelev2">&gt;&gt; I have just added new ConnectX IB card to cluster with InfiniHost cards.
</span><br>
<span class="quotelev2">&gt;&gt; And no mpi programs work. Even ofed's tests do not work.
</span><br>
<span class="quotelev2">&gt;&gt; For example ib_send_*, ib_write_* just segfault on the host with ConnectX card and
</span><br>
<span class="quotelev2">&gt;&gt; still wait on the hosts with InfiniHost card. rdma_lat/bw tests segfault too but
</span><br>
<span class="quotelev2">&gt;&gt; with messages on the InfiniHost card hosts like this:
</span><br>
<span class="quotelev2">&gt;&gt; server read: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; 5924:pp_server_exch_dest: 0/45 Couldn't read remote address
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; pp_read_keys: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; Couldn't read remote address
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Other diagnostic tools like ibv_device, ibchecknet, ibstat, ibstatus... show no errors
</span><br>
<span class="quotelev2">&gt;&gt; and show ConnectX card in system. All modules (mlx4_*, rdma_*) loaded. IPoIB configured.
</span><br>
<span class="quotelev2">&gt;&gt; openibd, opensmd services started without errors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 08:00.0 InfiniBand: Mellanox Technologies MT26428 [ConnectX VPI PCIe 2.0 5GT/s - IB QDR / 10GigE] (rev a0)
</span><br>
<span class="quotelev2">&gt;&gt; OFED is 1.3.1, CentOS 5.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ibstat
</span><br>
<span class="quotelev2">&gt;&gt; CA 'mlx4_0'
</span><br>
<span class="quotelev2">&gt;&gt;         CA type: MT26428
</span><br>
<span class="quotelev2">&gt;&gt;         Number of ports: 1
</span><br>
<span class="quotelev2">&gt;&gt;         Firmware version: 2.7.0
</span><br>
<span class="quotelev2">&gt;&gt;         Hardware version: a0
</span><br>
<span class="quotelev2">&gt;&gt;         Node GUID: 0x0002c903000cad14
</span><br>
<span class="quotelev2">&gt;&gt;         System image GUID: 0x0002c903000cad17
</span><br>
<span class="quotelev2">&gt;&gt;         Port 1:
</span><br>
<span class="quotelev2">&gt;&gt;                 State: Active
</span><br>
<span class="quotelev2">&gt;&gt;                 Physical state: LinkUp
</span><br>
<span class="quotelev2">&gt;&gt;                 Rate: 20
</span><br>
<span class="quotelev2">&gt;&gt;                 Base lid: 60
</span><br>
<span class="quotelev2">&gt;&gt;                 LMC: 0
</span><br>
<span class="quotelev2">&gt;&gt;                 SM lid: 60
</span><br>
<span class="quotelev2">&gt;&gt;                 Capability mask: 0x0251086a
</span><br>
<span class="quotelev2">&gt;&gt;                 Port GUID: 0x0002c903000cad15
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Where is a problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanx in advance,
</span><br>
<span class="quotelev2">&gt;&gt; Egor.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; hxxp://www.open-mpi.org/mailman/listinfo.cgi/users
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17119.php">Reuti: "Re: [OMPI users] How to add nodes while running job"</a>
<li><strong>Previous message:</strong> <a href="17117.php">Ralph Castain: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="17108.php">Shamis, Pavel: "Re: [OMPI users] ConnectX with InfiniHost IB HCAs"</a>
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
