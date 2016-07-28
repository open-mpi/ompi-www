<?
$subject_val = "[OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 10:24:51 2014" -->
<!-- isoreceived="20140909142451" -->
<!-- sent="Tue, 9 Sep 2014 19:24:44 +0500" -->
<!-- isosent="20140909142444" -->
<!-- name="Muhammad Ansar Javed" -->
<!-- email="muhammad.ansar_at_[hidden]" -->
<!-- subject="[OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand" -->
<!-- id="CACztQg2b4VMLHG6bdoM1KjRXzk-vUYydE69m40FEF2+mLMD8Zg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand<br>
<strong>From:</strong> Muhammad Ansar Javed (<em>muhammad.ansar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-09 10:24:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25298.php">George Bosilca: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="25296.php">Adrien Saladin: "[OMPI users] launch openmpi programs in Docker containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25298.php">George Bosilca: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>Reply:</strong> <a href="25298.php">George Bosilca: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>Maybe reply:</strong> <a href="25299.php">Muhammad Ansar Javed: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>Reply:</strong> <a href="25307.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead	of InfiniBand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am currently conducting some testing on system with Gigabit and
<br>
InfiniBand interconnects. Both Latency and Bandwidth benchmarks are doing
<br>
well as expected on InfiniBand interconnects but Ethernet interconnect is
<br>
achieving very high performance from expectations. Ethernet and InfiniBand
<br>
both are achieving equivalent performance.
<br>
<p>For some reason, it looks like openmpi (v1.8.1) is using the InfiniBand
<br>
interconnect rather than the Gigabit or TCP communication is being emulated
<br>
to use InifiniBand interconnect.
<br>
<p>Here are Latency and Bandwidth benchmark results.
<br>
#---------------------------------------------------
<br>
# Benchmarking PingPong
<br>
# processes = 2
<br>
# map-by node
<br>
#---------------------------------------------------
<br>
<p>Hello, world.  I am 1 on node124
<br>
Hello, world.  I am 0 on node123
<br>
Size Latency (usec) Bandwidth (Mbps)
<br>
1    1.65    4.62
<br>
2    1.67    9.16
<br>
4    1.66    18.43
<br>
8    1.66    36.74
<br>
16    1.85    66.00
<br>
32    1.83    133.28
<br>
64    1.83    266.36
<br>
128    1.88    519.10
<br>
256    1.99    982.29
<br>
512    2.23    1752.37
<br>
1024    2.58    3026.98
<br>
2048    3.32    4710.76
<br>
<p>I read some of the FAQs and noted that OpenMPI prefers the faster available
<br>
interconnect. In an effort to force it to use the gigabit interconnect I
<br>
ran it as follows
<br>
<p>1. mpirun -np 2 -machinefile machines -map-by node --mca btl tcp --mca
<br>
btl_tcp_if_include em1 ./latency.ompi
<br>
2. mpirun -np 2 -machinefile machines -map-by node --mca btl tcp,self,sm
<br>
--mca btl_tcp_if_include em1 ./latency.ompi
<br>
3. mpirun -np 2 -machinefile machines -map-by node --mca btl ^openib --mca
<br>
btl_tcp_if_include em1 ./latency.ompi
<br>
4. mpirun -np 2 -machinefile machines -map-by node --mca btl ^openib
<br>
./latency.ompi
<br>
<p>None of them resulted in a significantly different benchmark output.
<br>
<p>I am using OpenMPI by loading module on clustered environment and don't
<br>
have admin access. It is configured for both TCP and OpenIB (confirmed from
<br>
ompi_info). After trying all above mentioned methods without success I
<br>
installed OpenMPI v1.8.2 in my home directory and disable openib with
<br>
following configuration options
<br>
<p>--disable-openib-control-hdr-padding --disable-openib-dynamic-sl
<br>
--disable-openib-connectx-xrc --disable-openib-udcm
<br>
--disable-openib-rdmacm  --disable-btl-openib-malloc-alignment
<br>
--disable-io-romio --without-openib --without-verbs
<br>
<p>Now, openib is not enabled (confirmed from ompi_info script) and there is
<br>
no &quot;openib.so&quot; file in $prefix/lib/openmpi directory as well. Still, above
<br>
mentioned mpirun commands are getting the same latency and bandwidth as
<br>
that of InfiniBand.
<br>
<p>I tried mpirun in verbose mode with following command and here is the output
<br>
<p>Command:
<br>
mpirun -np 2 -machinefile machines -map-by node --mca btl tcp --mca
<br>
btl_base_verbose 30 --mca btl_tcp_if_include em1 ./latency.ompi
<br>
<p>Output:
<br>
[node123.prv.sciama.cluster:88310] mca: base: components_register:
<br>
registering btl components
<br>
[node123.prv.sciama.cluster:88310] mca: base: components_register: found
<br>
loaded component tcp
<br>
[node123.prv.sciama.cluster:88310] mca: base: components_register:
<br>
component tcp register function successful
<br>
[node123.prv.sciama.cluster:88310] mca: base: components_open: opening btl
<br>
components
<br>
[node123.prv.sciama.cluster:88310] mca: base: components_open: found loaded
<br>
component tcp
<br>
[node123.prv.sciama.cluster:88310] mca: base: components_open: component
<br>
tcp open function successful
<br>
[node124.prv.sciama.cluster:90465] mca: base: components_register:
<br>
registering btl components
<br>
[node124.prv.sciama.cluster:90465] mca: base: components_register: found
<br>
loaded component tcp
<br>
[node124.prv.sciama.cluster:90465] mca: base: components_register:
<br>
component tcp register function successful
<br>
[node124.prv.sciama.cluster:90465] mca: base: components_open: opening btl
<br>
components
<br>
[node124.prv.sciama.cluster:90465] mca: base: components_open: found loaded
<br>
component tcp
<br>
[node124.prv.sciama.cluster:90465] mca: base: components_open: component
<br>
tcp open function successful
<br>
Hello, world.  I am 1 on node124
<br>
Hello, world.  I am 0 on node123
<br>
Size Latency(usec) Bandwidth(Mbps)
<br>
1    4.18    1.83
<br>
2    3.66    4.17
<br>
4    4.08    7.48
<br>
8    3.12    19.57
<br>
16    3.83    31.84
<br>
32    3.40    71.84
<br>
64    4.10    118.97
<br>
128    3.89    251.19
<br>
256    4.22    462.77
<br>
512    2.95    1325.71
<br>
1024    2.63    2969.49
<br>
2048    3.38    4628.29
<br>
[node123.prv.sciama.cluster:88310] mca: base: close: component tcp closed
<br>
[node123.prv.sciama.cluster:88310] mca: base: close: unloading component tcp
<br>
[node124.prv.sciama.cluster:90465] mca: base: close: component tcp closed
<br>
[node124.prv.sciama.cluster:90465] mca: base: close: unloading component tcp
<br>
<p>Moreover, same benchmark applications using MPICH are working fine on
<br>
Ethernet and achieving expected Latency and Bandwidth.
<br>
<p>How can this be fixed?
<br>
<p>Thanks for help,
<br>
<p>--Ansar
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25297/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25298.php">George Bosilca: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="25296.php">Adrien Saladin: "[OMPI users] launch openmpi programs in Docker containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25298.php">George Bosilca: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>Reply:</strong> <a href="25298.php">George Bosilca: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>Maybe reply:</strong> <a href="25299.php">Muhammad Ansar Javed: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>Reply:</strong> <a href="25307.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead	of InfiniBand"</a>
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
