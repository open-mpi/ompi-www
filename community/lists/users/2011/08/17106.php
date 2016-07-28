<?
$subject_val = "[OMPI users] ConnectX with InfiniHost IB HCAs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 25 19:46:15 2011" -->
<!-- isoreceived="20110825234615" -->
<!-- sent="Fri, 26 Aug 2011 02:46:10 +0300" -->
<!-- isosent="20110825234610" -->
<!-- name="worldeb_at_[hidden]" -->
<!-- email="worldeb_at_[hidden]" -->
<!-- subject="[OMPI users] ConnectX with InfiniHost IB HCAs" -->
<!-- id="10690.1314315970.10862437630054694912_at_ffe11.ukr.net" -->
<!-- charset="windows-1251" -->
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
<strong>Subject:</strong> [OMPI users] ConnectX with InfiniHost IB HCAs<br>
<strong>From:</strong> <a href="mailto:worldeb_at_[hidden]?Subject=Re:%20[OMPI%20users]%20ConnectX%20with%20InfiniHost%20IB%20HCAs"><em>worldeb_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-08-25 19:46:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17107.php">Rodrigo Oliveira: "[OMPI users] Flow control in OMPI"</a>
<li><strong>Previous message:</strong> <a href="17105.php">Rayson Ho: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17108.php">Shamis, Pavel: "Re: [OMPI users] ConnectX with InfiniHost IB HCAs"</a>
<li><strong>Reply:</strong> <a href="17108.php">Shamis, Pavel: "Re: [OMPI users] ConnectX with InfiniHost IB HCAs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
 ('binary' encoding is not supported, stored as-is)
&nbsp;Hi all,
<br>
<p>it is more hardware or system configuration question but 
<br>
I hope people in this list have an experience.
<br>
I have just added new ConnectX IB card to cluster with InfiniHost cards.
<br>
And no mpi programs work. Even ofed's tests do not work.
<br>
For example ib_send_*, ib_write_* just segfault on the host with ConnectX card and 
<br>
still wait on the hosts with InfiniHost card. rdma_lat/bw tests segfault too but
<br>
with messages on the InfiniHost card hosts like this:
<br>
&nbsp;server read: No such file or directory
<br>
&nbsp;5924:pp_server_exch_dest: 0/45 Couldn't read remote address
<br>
<p>&nbsp;pp_read_keys: No such file or directory
<br>
&nbsp;Couldn't read remote address
<br>
<p>Other diagnostic tools like ibv_device, ibchecknet, ibstat, ibstatus... show no errors
<br>
and show ConnectX card in system. All modules (mlx4_*, rdma_*) loaded. IPoIB configured.
<br>
openibd, opensmd services started without errors.
<br>
<p>08:00.0 InfiniBand: Mellanox Technologies MT26428 [ConnectX VPI PCIe 2.0 5GT/s - IB QDR / 10GigE] (rev a0)
<br>
OFED is 1.3.1, CentOS 5.2.
<br>
<p>ibstat
<br>
CA 'mlx4_0'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CA type: MT26428
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Number of ports: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firmware version: 2.7.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hardware version: a0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Node GUID: 0x0002c903000cad14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System image GUID: 0x0002c903000cad17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Port 1:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: Active
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Physical state: LinkUp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rate: 20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Base lid: 60
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LMC: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SM lid: 60
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Capability mask: 0x0251086a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Port GUID: 0x0002c903000cad15
<br>
<p>Where is a problem?
<br>
<p>Thanx in advance,
<br>
Egor.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17107.php">Rodrigo Oliveira: "[OMPI users] Flow control in OMPI"</a>
<li><strong>Previous message:</strong> <a href="17105.php">Rayson Ho: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17108.php">Shamis, Pavel: "Re: [OMPI users] ConnectX with InfiniHost IB HCAs"</a>
<li><strong>Reply:</strong> <a href="17108.php">Shamis, Pavel: "Re: [OMPI users] ConnectX with InfiniHost IB HCAs"</a>
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
