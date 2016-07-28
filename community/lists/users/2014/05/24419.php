<?
$subject_val = "[OMPI users] can't disable infiniband communication";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 11:21:42 2014" -->
<!-- isoreceived="20140516152142" -->
<!-- sent="Fri, 16 May 2014 17:21:42 +0200" -->
<!-- isosent="20140516152142" -->
<!-- name="Sylvain Huet" -->
<!-- email="sylvain.huet_at_[hidden]" -->
<!-- subject="[OMPI users] can't disable infiniband communication" -->
<!-- id="53762D06.8080705_at_gipsa-lab.grenoble-inp.fr" -->
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
<strong>Subject:</strong> [OMPI users] can't disable infiniband communication<br>
<strong>From:</strong> Sylvain Huet (<em>sylvain.huet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 11:21:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24420.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24418.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I am reinstalling a cluster where nodes are connected by
<br>
- 1 Gb ethernet interfaces
<br>
- 40 Gb infinband adapters
<br>
I installed OFED 3.12 on CentOS 6.5
<br>
<p>I would like to be able to tell mpirun to use either the Gb ethernet
<br>
interfaces or the infinband adapters.
<br>
<p>But, when I launch osu_bw with the following commands I always obtain
<br>
bandwidths of the infinibands links
<br>
(hostether is a file containing the IPs of the ethernet interfaces
<br>
IPs of ib adapters: 192.168.1.2,192.168.1.3
<br>
IPs of ethernet adapters: 192.168.70.12,192.168.70.13 )
<br>
<p>mpirun --map-by node --mca btl ^openib  --hostfile ./hostether  -np 2 
<br>
./osu_bw
<br>
<p>mpirun --map-by node --mca btl_tcp_if_include eth0,eth1 --mca btl 
<br>
tcp,self --hostfile ./hostether  -np 2 ./osu_bw
<br>
<p>mpirun --map-by node --mca btl_tcp_if_exclude ib0,ib1 --mca btl tcp,self 
<br>
--hostfile ./hostether  -np 2 ./osu_bw
<br>
<p>mpirun --map-by node --mca btl_tcp_if_exclude 
<br>
192.168.1.2,192.168.1.3,127.0.0.1/8,sppp --mca btl tcp,self --host 
<br>
192.168.70.12,192.168.70.13 -np 2 ./osu_bw
<br>
<p><p>All the previous commands lead to the following results with
<br>
either Open MPI 1.5.5, 1.7.5 or 1.8.1:
<br>
<p># OSU MPI Bandwidth Test (Version 2.3)
<br>
# Size          Bandwidth (MB/s)
<br>
1               2.14
<br>
...             ...
<br>
2097152         3015.64
<br>
4194304         3017.91
<br>
<p><p>If I stop openibd I logically obtain these results:
<br>
<p># OSU MPI Bandwidth Test (Version 2.3)
<br>
# Size          Bandwidth (MB/s)
<br>
1               0.19
<br>
...             ...
<br>
2097152         117.63
<br>
4194304         117.66
<br>
<p><p>Could someone give me some idea to investigate?
<br>
<p>PS. I previouslly used this cluster with older versions
<br>
of CentOS and OFED and I was able to tell mpirun not to use
<br>
the infiniband adapters.
<br>
<p><p>Best regards.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24420.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24418.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
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
