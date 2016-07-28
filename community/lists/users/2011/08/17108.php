<?
$subject_val = "Re: [OMPI users] ConnectX with InfiniHost IB HCAs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 26 09:42:37 2011" -->
<!-- isoreceived="20110826134237" -->
<!-- sent="Fri, 26 Aug 2011 09:42:32 -0400" -->
<!-- isosent="20110826134232" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ConnectX with InfiniHost IB HCAs" -->
<!-- id="1BDCD53C-1BAD-4B45-8FD2-F41604080BAB_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="10690.1314315970.10862437630054694912_at_ffe11.ukr.net" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-26 09:42:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17109.php">Eugene Loh: "Re: [OMPI users] poll taking too long in open-mpi"</a>
<li><strong>Previous message:</strong> <a href="17107.php">Rodrigo Oliveira: "[OMPI users] Flow control in OMPI"</a>
<li><strong>In reply to:</strong> <a href="17106.php">worldeb_at_[hidden]: "[OMPI users] ConnectX with InfiniHost IB HCAs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17118.php">Yevgeny Kliteynik: "Re: [OMPI users] ConnectX with InfiniHost IB HCAs"</a>
<li><strong>Reply:</strong> <a href="17118.php">Yevgeny Kliteynik: "Re: [OMPI users] ConnectX with InfiniHost IB HCAs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You may try to update your OFED version. I think 1.5.3 is the latest one.
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Aug 25, 2011, at 7:46 PM, &lt;worldeb_at_[hidden]&gt; &lt;worldeb_at_[hidden]&gt; wrote:
&gt; 
&gt; Hi all,
&gt; 
&gt; it is more hardware or system configuration question but 
&gt; I hope people in this list have an experience.
&gt; I have just added new ConnectX IB card to cluster with InfiniHost cards.
&gt; And no mpi programs work. Even ofed's tests do not work.
&gt; For example ib_send_*, ib_write_* just segfault on the host with ConnectX card and 
&gt; still wait on the hosts with InfiniHost card. rdma_lat/bw tests segfault too but
&gt; with messages on the InfiniHost card hosts like this:
&gt; server read: No such file or directory
&gt; 5924:pp_server_exch_dest: 0/45 Couldn't read remote address
&gt; 
&gt; pp_read_keys: No such file or directory
&gt; Couldn't read remote address
&gt; 
&gt; Other diagnostic tools like ibv_device, ibchecknet, ibstat, ibstatus... show no errors
&gt; and show ConnectX card in system. All modules (mlx4_*, rdma_*) loaded. IPoIB configured.
&gt; openibd, opensmd services started without errors.
&gt; 
&gt; 08:00.0 InfiniBand: Mellanox Technologies MT26428 [ConnectX VPI PCIe 2.0 5GT/s - IB QDR / 10GigE] (rev a0)
&gt; OFED is 1.3.1, CentOS 5.2.
&gt; 
&gt; ibstat
&gt; CA 'mlx4_0'
&gt;        CA type: MT26428
&gt;        Number of ports: 1
&gt;        Firmware version: 2.7.0
&gt;        Hardware version: a0
&gt;        Node GUID: 0x0002c903000cad14
&gt;        System image GUID: 0x0002c903000cad17
&gt;        Port 1:
&gt;                State: Active
&gt;                Physical state: LinkUp
&gt;                Rate: 20
&gt;                Base lid: 60
&gt;                LMC: 0
&gt;                SM lid: 60
&gt;                Capability mask: 0x0251086a
&gt;                Port GUID: 0x0002c903000cad15
&gt; 
&gt; Where is a problem?
&gt; 
&gt; Thanx in advance,
&gt; Egor.
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; hxxp://www.open-mpi.org/mailman/listinfo.cgi/users
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17109.php">Eugene Loh: "Re: [OMPI users] poll taking too long in open-mpi"</a>
<li><strong>Previous message:</strong> <a href="17107.php">Rodrigo Oliveira: "[OMPI users] Flow control in OMPI"</a>
<li><strong>In reply to:</strong> <a href="17106.php">worldeb_at_[hidden]: "[OMPI users] ConnectX with InfiniHost IB HCAs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17118.php">Yevgeny Kliteynik: "Re: [OMPI users] ConnectX with InfiniHost IB HCAs"</a>
<li><strong>Reply:</strong> <a href="17118.php">Yevgeny Kliteynik: "Re: [OMPI users] ConnectX with InfiniHost IB HCAs"</a>
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
