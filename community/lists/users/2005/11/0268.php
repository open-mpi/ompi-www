<?
$subject_val = "[O-MPI users] can't get openmpi to run across two multi-NIC machines";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  1 12:02:42 2005" -->
<!-- isoreceived="20051101170242" -->
<!-- sent="Tue, 1 Nov 2005 12:02:24 -0500" -->
<!-- isosent="20051101170224" -->
<!-- name="Marty Humphrey" -->
<!-- email="humphrey_at_[hidden]" -->
<!-- subject="[O-MPI users] can't get openmpi to run across two multi-NIC machines" -->
<!-- id="02fc01c5df06$086a28e0$aa01a8c0_at_Roger2" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Marty Humphrey (<em>humphrey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-01 12:02:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0269.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across two multi-NIC machines"</a>
<li><strong>Previous message:</strong> <a href="0267.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0269.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across two multi-NIC machines"</a>
<li><strong>Reply:</strong> <a href="0269.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across two multi-NIC machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I want to use openmpi across two machines, each machine has more than one
<br>
NIC:
<br>
<p>wukong: eth0 (152.48.249.102, no MPI traffic), eth1 (128.109.34.20,yes MPI
<br>
traffic)
<br>
<p>zelda01: eth0 (130.207.252.131, yes MPI traffic), eth2 (10.0.0.12, no MPI
<br>
traffic)
<br>
<p>on wukong, I have :
<br>
[humphrey_at_wukong ~]$ more ~/.openmpi/mca-params.conf
<br>
btl_tcp_if_include=eth1
<br>
<p>on zelda01, I have : 
<br>
[humphrey_at_zelda01 humphrey]$ more ~/.openmpi/mca-params.conf
<br>
btl_tcp_if_include=eth0
<br>
<p>Here's what I get when I attempt to run it from wukong (128.109.34.20). It
<br>
just hangs at this point, as I believe the remote machine (Zelda01) is
<br>
trying to make contact with wukong on the non-accessible interface
<br>
(152.48.249.102). This is based on openmpi-1.0rc5r7944. 
<br>
<p>What am I doing wrong?
<br>
<p>Thanks,
<br>
Marty
<br>
<p>Marty Humphrey
<br>
Assistant Professor
<br>
Department of Computer Science
<br>
University of Virginia
<br>
<p><p>[humphrey_at_wukong ~]$ mpirun -d --mca btl tcp  --host
<br>
128.109.34.20,130.207.252.131 -np 2 a.out [wukong.ncren.net:17236] [0,0,0]
<br>
setting up session dir with
<br>
[wukong.ncren.net:17236]        universe default-universe
<br>
[wukong.ncren.net:17236]        user humphrey
<br>
[wukong.ncren.net:17236]        host wukong.ncren.net
<br>
[wukong.ncren.net:17236]        jobid 0
<br>
[wukong.ncren.net:17236]        procid 0
<br>
[wukong.ncren.net:17236] procdir:
<br>
/tmp/openmpi-sessions-humphrey_at_[hidden]_0/default-universe/0/0
<br>
[wukong.ncren.net:17236] jobdir:
<br>
/tmp/openmpi-sessions-humphrey_at_[hidden]_0/default-universe/0
<br>
[wukong.ncren.net:17236] unidir:
<br>
/tmp/openmpi-sessions-humphrey_at_[hidden]_0/default-universe
<br>
[wukong.ncren.net:17236] top: openmpi-sessions-humphrey_at_[hidden]_0
<br>
[wukong.ncren.net:17236] tmp: /tmp
<br>
[wukong.ncren.net:17236] [0,0,0] contact_file
<br>
/tmp/openmpi-sessions-humphrey_at_[hidden]_0/default-universe/universe-
<br>
setup.txt
<br>
[wukong.ncren.net:17236] [0,0,0] wrote setup file [wukong.ncren.net:17236]
<br>
pls:rsh: local csh: 0, local bash: 1 [wukong.ncren.net:17236] pls:rsh:
<br>
assuming same remote shell as local shell [wukong.ncren.net:17236] pls:rsh:
<br>
remote csh: 0, remote bash: 1 [wukong.ncren.net:17236] pls:rsh: final
<br>
template argv:
<br>
[wukong.ncren.net:17236] pls:rsh:     ssh &lt;template&gt; orted --debug
<br>
--bootproxy 1 --name &lt;template&gt; --num_procs 3 --vpid_start 0 --nodename
<br>
&lt;template&gt; --universe humphrey_at_[hidden]:default-universe --nsreplica
<br>
&quot;0.0.0;tcp://152.48.249.102:33964;tcp://128.109.34.20:33964&quot; --gprreplica
<br>
&quot;0.0.0;tcp://152.48.249.102:33964;tcp://128.109.34.20:33964&quot;
<br>
--mpi-call-yield 0
<br>
[wukong.ncren.net:17236] pls:rsh: launching on node 128.109.34.20
<br>
[wukong.ncren.net:17236] pls:rsh: not oversubscribed -- setting
<br>
mpi_yield_when_idle to 0 [wukong.ncren.net:17236] pls:rsh: 128.109.34.20 is
<br>
a LOCAL node [wukong.ncren.net:17236] pls:rsh: executing: orted --debug
<br>
--bootproxy 1 --name 0.0.1 --num_procs 3 --vpid_start 0 --nodename
<br>
128.109.34.20 --universe humphrey_at_[hidden]:default-universe
<br>
--nsreplica &quot;0.0.0;tcp://152.48.249.102:33964;tcp://128.109.34.20:33964&quot;
<br>
--gprreplica &quot;0.0.0;tcp://152.48.249.102:33964;tcp://128.109.34.20:33964&quot;
<br>
--mpi-call-yield 0 [wukong.ncren.net:17237] [0,0,1] setting up session dir
<br>
with
<br>
[wukong.ncren.net:17237]        universe default-universe
<br>
[wukong.ncren.net:17237]        user humphrey
<br>
[wukong.ncren.net:17237]        host 128.109.34.20
<br>
[wukong.ncren.net:17237]        jobid 0
<br>
[wukong.ncren.net:17237]        procid 1
<br>
[wukong.ncren.net:17237] procdir:
<br>
/tmp/openmpi-sessions-humphrey_at_128.109.34.20_0/default-universe/0/1
<br>
[wukong.ncren.net:17237] jobdir:
<br>
/tmp/openmpi-sessions-humphrey_at_128.109.34.20_0/default-universe/0
<br>
[wukong.ncren.net:17237] unidir:
<br>
/tmp/openmpi-sessions-humphrey_at_128.109.34.20_0/default-universe
<br>
[wukong.ncren.net:17237] top: openmpi-sessions-humphrey_at_128.109.34.20_0
<br>
[wukong.ncren.net:17237] tmp: /tmp
<br>
[wukong.ncren.net:17236] pls:rsh: launching on node 130.207.252.131
<br>
[wukong.ncren.net:17236] pls:rsh: not oversubscribed -- setting
<br>
mpi_yield_when_idle to 0 [wukong.ncren.net:17236] pls:rsh: 130.207.252.131
<br>
is a REMOTE node [wukong.ncren.net:17236] pls:rsh: executing: ssh
<br>
130.207.252.131 orted --debug --bootproxy 1 --name 0.0.2 --num_procs 3
<br>
--vpid_start 0 --nodename 130.207.252.131 --universe
<br>
humphrey_at_[hidden]:default-universe --nsreplica
<br>
&quot;0.0.0;tcp://152.48.249.102:33964;tcp://128.109.34.20:33964&quot; --gprreplica
<br>
&quot;0.0.0;tcp://152.48.249.102:33964;tcp://128.109.34.20:33964&quot;
<br>
--mpi-call-yield 0 [zelda01.localdomain:08631] [0,0,2] setting up session
<br>
dir with
<br>
[zelda01.localdomain:08631]     universe default-universe
<br>
[zelda01.localdomain:08631]     user humphrey
<br>
[zelda01.localdomain:08631]     host 130.207.252.131
<br>
[zelda01.localdomain:08631]     jobid 0
<br>
[zelda01.localdomain:08631]     procid 2
<br>
[zelda01.localdomain:08631] procdir:
<br>
/tmp/openmpi-sessions-humphrey_at_130.207.252.131_0/default-universe/0/2
<br>
[zelda01.localdomain:08631] jobdir:
<br>
/tmp/openmpi-sessions-humphrey_at_130.207.252.131_0/default-universe/0
<br>
[zelda01.localdomain:08631] unidir:
<br>
/tmp/openmpi-sessions-humphrey_at_130.207.252.131_0/default-universe
<br>
[zelda01.localdomain:08631] top: openmpi-sessions-humphrey_at_130.207.252.131_0
<br>
[zelda01.localdomain:08631] tmp: /tmp
<br>
[wukong.ncren.net:17239] [0,1,0] setting up session dir with
<br>
[wukong.ncren.net:17239]        universe default-universe
<br>
[wukong.ncren.net:17239]        user humphrey
<br>
[wukong.ncren.net:17239]        host 128.109.34.20
<br>
[wukong.ncren.net:17239]        jobid 1
<br>
[wukong.ncren.net:17239]        procid 0
<br>
[wukong.ncren.net:17239] procdir:
<br>
/tmp/openmpi-sessions-humphrey_at_128.109.34.20_0/default-universe/1/0
<br>
[wukong.ncren.net:17239] jobdir:
<br>
/tmp/openmpi-sessions-humphrey_at_128.109.34.20_0/default-universe/1
<br>
[wukong.ncren.net:17239] unidir:
<br>
/tmp/openmpi-sessions-humphrey_at_128.109.34.20_0/default-universe
<br>
[wukong.ncren.net:17239] top: openmpi-sessions-humphrey_at_128.109.34.20_0
<br>
[wukong.ncren.net:17239] tmp: /tmp
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0269.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across two multi-NIC machines"</a>
<li><strong>Previous message:</strong> <a href="0267.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0269.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across two multi-NIC machines"</a>
<li><strong>Reply:</strong> <a href="0269.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across two multi-NIC machines"</a>
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
