<?
$subject_val = "[OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  8 01:37:54 2016" -->
<!-- isoreceived="20160608053754" -->
<!-- sent="Wed, 8 Jun 2016 08:37:49 +0300" -->
<!-- isosent="20160608053749" -->
<!-- name="Maxim Reshetnyak" -->
<!-- email="m.reshetnyak_at_[hidden]" -->
<!-- subject="[OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode" -->
<!-- id="5757AF2D.4040106_at_gmail.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode<br>
<strong>From:</strong> Maxim Reshetnyak (<em>m.reshetnyak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-08 01:37:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29401.php">Gilles Gouaillardet: "Re: [OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
<li><strong>Previous message:</strong> <a href="29399.php">Ralph Castain: "Re: [OMPI users] mpirun and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29401.php">Gilles Gouaillardet: "Re: [OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
<li><strong>Reply:</strong> <a href="29401.php">Gilles Gouaillardet: "Re: [OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
<p>I have a problem with the hybrid MPI/OpenMP C++ code, which does not 
<br>
produce acceleration in OpenMP mode at the local, 4th-core home computer.
<br>
<p>Open MPI loaded from www.open-mpi.org/
<br>
<p>mpirun -V
<br>
mpirun (Open MPI) 1.8.1.
<br>
Compiled from the source.
<br>
<p>Ubuntu 14.04
<br>
<p>// ===
<br>
<p>//main.c
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;omp.h&gt;
<br>
#include &lt;cmath&gt;
<br>
#include &lt;iostream&gt;
<br>
#include &lt;fstream&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main ( int argc, char *argv[] )
<br>
{
<br>
<p>int my_rank=0;
<br>
<p>MPI::Init (argc, argv);
<br>
int proc_num = MPI::COMM_WORLD.Get_size ( );
<br>
my_rank  = MPI::COMM_WORLD.Get_rank ( );
<br>
<p>double GG;
<br>
int i1,i2,i3,N=60;
<br>
for (int ITER=1; ITER&lt;=10000; ITER++) {
<br>
<p>#pragma omp parallel  for  private(i1,i2,i3,GG)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i1=0; i1&lt;N; i1++) {
<br>
if ( (i1==0 &amp;&amp; ITER==1) || (i1==N-1 &amp;&amp; ITER==1) ) std::cout&lt;&lt;my_rank&lt;&lt;&quot; 
<br>
&quot;&lt;&lt;omp_get_thread_num()&lt;&lt;std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i2=0; i2&lt;N; i2++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i3=0; i3&lt;N; i3++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GG=i1+i2+i3+pow(i1+i2+i3,2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}}
<br>
}
<br>
<p>MPI::Finalize();
<br>
<p>}
<br>
<p>// ==
<br>
<p>mpic++ main.c -fopenmp
<br>
<p>echo &quot;run 1 &quot; ; export OMP_NUM_THREADS=1 ; time mpirun -np 1 a.out ;  
<br>
echo &quot;run 2 &quot; ;   export OMP_NUM_THREADS=2 ; time mpirun -np 1 a.out
<br>
<p>run 1
<br>
0 0
<br>
0 0
<br>
<p>real    0m44.494s
<br>
user    0m43.594s
<br>
sys    0m0.320s
<br>
<p>run 2
<br>
0 0
<br>
0 1
<br>
<p>real    0m44.796s
<br>
user    0m43.813s
<br>
sys    0m0.360s
<br>
<p>No acceleration!
<br>
<p><p>But, if I exclude lines
<br>
<p>//#include &lt;mpi.h&gt;
<br>
<p>//MPI::Init (argc, argv);
<br>
//int proc_num = MPI::COMM_WORLD.Get_size ( );
<br>
//my_rank  = MPI::COMM_WORLD.Get_rank ( );
<br>
<p>//MPI::Finalize();
<br>
<p>compile:
<br>
<p>g++ main.c -fopenmp
<br>
<p>and run
<br>
<p>echo &quot;run 1 &quot; ; export OMP_NUM_THREADS=1 ; time  a.out ;  echo &quot;run 2 &quot; 
<br>
;   export OMP_NUM_THREADS=2 ; time   a.out
<br>
<p>run 1
<br>
0 0
<br>
0 0
<br>
<p>real    0m45.416s
<br>
user    0m45.402s
<br>
sys    0m0.025s
<br>
<p>run 2
<br>
0 0
<br>
0 1
<br>
<p>real    0m22.783s
<br>
user    0m45.517s
<br>
sys    0m0.016s
<br>
<p>Then I have acceleration.
<br>
<p>Why I have not it in the first case?
<br>
<p>M.
<br>
<p>lstopo -v
<br>
<p>Machine (P#0 total=12240880KB DMIProductName=S5520SC 
<br>
DMIProductVersion=.................... DMIBoardVendor=&quot;Intel 
<br>
Corporation&quot; DMIBoardName=S5520SC DMIBoardVersion=&quot;FRU Ver 0.05&quot; 
<br>
DMIBoardAssetTag=.................... 
<br>
DMIChassisVendor=.............................. DMIChassisType=17 
<br>
DMIChassisVersion=.................. 
<br>
DMIChassisAssetTag=.................... DMIBIOSVendor=&quot;Intel Corp.&quot; 
<br>
DMIBIOSVersion=S5500.86B.01.00.0038.060120091503 DMIBIOSDate=06/01/2009 
<br>
DMISysVendor=&quot;Intel Corporation&quot; Backend=Linux OSName=Linux 
<br>
OSRelease=3.13.0-87-generic OSVersion=&quot;#133-Ubuntu SMP Tue May 24 
<br>
18:32:09 UTC 2016&quot; HostName=mr Architecture=x86_64)
<br>
&nbsp;&nbsp;&nbsp;NUMANode L#0 (P#0 local=6049180KB total=6049180KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Socket L#0 (P#0 CPUModel=&quot;Intel(R) Xeon(R) CPU           E5502 @ 
<br>
1.87GHz&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3Cache L#0 (size=4096KB linesize=64 ways=16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#0 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#0 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#0 (size=32KB linesize=64 ways=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#1 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#1 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#1 (size=32KB linesize=64 ways=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#1 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#1 (P#2)
<br>
&nbsp;&nbsp;&nbsp;NUMANode L#1 (P#1 local=6191700KB total=6191700KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Socket L#1 (P#1 CPUModel=&quot;Intel(R) Xeon(R) CPU           E5502 @ 
<br>
1.87GHz&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3Cache L#1 (size=4096KB linesize=64 ways=16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#2 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#2 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#2 (size=32KB linesize=64 ways=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#2 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#2 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#3 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#3 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#3 (size=32KB linesize=64 ways=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#3 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#3 (P#3)
<br>
&nbsp;&nbsp;&nbsp;Bridge Host-&gt;PCI L#0 (P#0 buses=0000:[00-07])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#16 busid=0000:00:01.0 id=8086:3408 
<br>
class=0604(PCI_B) buses=0000:[01-01] PCIVendor=&quot;Intel Corporation&quot; 
<br>
PCIDevice=&quot;5520/5500/X58 I/O Hub PCI Express Root Port 1&quot;) &quot;Intel 
<br>
Corporation 5520/5500/X58 I/O Hub PCI Express Root Port 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:10a7 (P#4096 busid=0000:01:00.0 class=0200(Ether) 
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;82575EB Gigabit Network 
<br>
Connection&quot;) &quot;Intel Corporation 82575EB Gigabit Network Connection&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Network L#0 (Address=00:15:17:af:94:40) &quot;eth0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:10a7 (P#4097 busid=0000:01:00.1 class=0200(Ether) 
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;82575EB Gigabit Network 
<br>
Connection&quot;) &quot;Intel Corporation 82575EB Gigabit Network Connection&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Network L#1 (Address=00:15:17:af:94:41) &quot;eth1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#48 busid=0000:00:03.0 id=8086:340a 
<br>
class=0604(PCI_B) buses=0000:[02-02] PCIVendor=&quot;Intel Corporation&quot; 
<br>
PCIDevice=&quot;5520/5500/X58 I/O Hub PCI Express Root Port 3&quot;) &quot;Intel 
<br>
Corporation 5520/5500/X58 I/O Hub PCI Express Root Port 3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 1002:6819 (P#8192 busid=0000:02:00.0 class=0300(VGA) 
<br>
PCIVendor=&quot;Advanced Micro Devices, Inc. [AMD/ATI]&quot; PCIDevice=&quot;Pitcairn 
<br>
PRO [Radeon HD 7850 / R7 265 / R9 270 1024SP]&quot;) &quot;Advanced Micro Devices, 
<br>
Inc. [AMD/ATI] Pitcairn PRO [Radeon HD 7850 / R7 265 / R9 270 1024SP]&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPU L#2 &quot;card0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPU L#3 &quot;controlD64&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3a20 (P#498 busid=0000:00:1f.2 class=0101(IDE) 
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;82801JI (ICH10 Family) 4 port 
<br>
SATA IDE Controller #1&quot;) &quot;Intel Corporation 82801JI (ICH10 Family) 4 
<br>
port SATA IDE Controller #1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#4 &quot;sda&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#5 &quot;sdb&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3a26 (P#501 busid=0000:00:1f.5 class=0101(IDE) 
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;82801JI (ICH10 Family) 2 port 
<br>
SATA IDE Controller #2&quot;) &quot;Intel Corporation 82801JI (ICH10 Family) 2 
<br>
port SATA IDE Controller #2&quot;
<br>
depth 0:    1 Machine (type #1)
<br>
&nbsp;&nbsp;depth 1:    2 NUMANode (type #2)
<br>
&nbsp;&nbsp;&nbsp;depth 2:    2 Socket (type #3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;depth 3:    2 L3Cache (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 4:    4 L2Cache (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 5:    4 L1dCache (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 6:    4 L1iCache (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 7:    4 Core (type #5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 8:    4 PU (type #6)
<br>
Special depth -3:    3 Bridge (type #9)
<br>
Special depth -4:    5 PCI Device (type #10)
<br>
Special depth -5:    6 OS Device (type #11)
<br>
latency matrix between NUMANodes (depth 1) by logical indexes:
<br>
&nbsp;&nbsp;&nbsp;index     0     1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 1,000 2,100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 2,100 1,000
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29401.php">Gilles Gouaillardet: "Re: [OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
<li><strong>Previous message:</strong> <a href="29399.php">Ralph Castain: "Re: [OMPI users] mpirun and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29401.php">Gilles Gouaillardet: "Re: [OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
<li><strong>Reply:</strong> <a href="29401.php">Gilles Gouaillardet: "Re: [OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
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
