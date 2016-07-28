<?
$subject_val = "Re: [OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  8 02:11:22 2016" -->
<!-- isoreceived="20160608061122" -->
<!-- sent="Wed, 8 Jun 2016 15:11:17 +0900" -->
<!-- isosent="20160608061117" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode" -->
<!-- id="111bc6f0-0b0e-9571-73bd-a3c75786d72a_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5757AF2D.4040106_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-08 02:11:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29402.php">Maxim Reshetnyak: "[OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
<li><strong>Previous message:</strong> <a href="29400.php">Maxim Reshetnyak: "[OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
<li><strong>In reply to:</strong> <a href="29400.php">Maxim Reshetnyak: "[OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
mpirun binds a.out on a single core, so when you
<br>
<p>OMP_NUM_THREADS=2 mpirun -np 1 a.out
<br>
<p>the two OpenMP threads ends up doing time sharing.
<br>
<p><p>you can confirm that by running
<br>
<p>grep Cpus_allowed_list /proc/self/status
<br>
<p>mpirun -np 1 grep Cpus_allowed_list /proc/self/status
<br>
<p><p>here is what i get :
<br>
<p>[gilles_at_c7]$ grep Cpus_allowed_list /proc/self/status
<br>
Cpus_allowed_list:    0-3
<br>
[gilles_at_c7]$ ~/local/ompi-v1.8/bin/mpirun -np 1 grep Cpus_allowed_list 
<br>
/proc/self/status
<br>
Cpus_allowed_list:    0
<br>
<p><p>the easiest workaround is to
<br>
<p>mpirun --bind-to none ...
<br>
<p>[gilles_at_c7]$ ~/local/ompi-v1.8/bin/mpirun -np 1 --bind-to none grep 
<br>
Cpus_allowed_list /proc/self/status
<br>
Cpus_allowed_list:    0-3
<br>
<p>there is definitely a better option (e.g. ask mpirun to allocate 2 cores 
<br>
per MPI task) but i cannot remember it
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p>On 6/8/2016 2:37 PM, Maxim Reshetnyak wrote:
<br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a problem with the hybrid MPI/OpenMP C++ code, which does not 
</span><br>
<span class="quotelev1">&gt; produce acceleration in OpenMP mode at the local, 4th-core home computer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI loaded from www.open-mpi.org/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -V
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.8.1.
</span><br>
<span class="quotelev1">&gt; Compiled from the source.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ubuntu 14.04
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // ===
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; //main.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;omp.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;cmath&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;fstream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main ( int argc, char *argv[] )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int my_rank=0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI::Init (argc, argv);
</span><br>
<span class="quotelev1">&gt; int proc_num = MPI::COMM_WORLD.Get_size ( );
</span><br>
<span class="quotelev1">&gt; my_rank  = MPI::COMM_WORLD.Get_rank ( );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; double GG;
</span><br>
<span class="quotelev1">&gt; int i1,i2,i3,N=60;
</span><br>
<span class="quotelev1">&gt; for (int ITER=1; ITER&lt;=10000; ITER++) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #pragma omp parallel  for  private(i1,i2,i3,GG)
</span><br>
<span class="quotelev1">&gt;    for (i1=0; i1&lt;N; i1++) {
</span><br>
<span class="quotelev1">&gt; if ( (i1==0 &amp;&amp; ITER==1) || (i1==N-1 &amp;&amp; ITER==1) ) 
</span><br>
<span class="quotelev1">&gt; std::cout&lt;&lt;my_rank&lt;&lt;&quot; &quot;&lt;&lt;omp_get_thread_num()&lt;&lt;std::endl;
</span><br>
<span class="quotelev1">&gt;     for (i2=0; i2&lt;N; i2++) {
</span><br>
<span class="quotelev1">&gt;          for (i3=0; i3&lt;N; i3++)
</span><br>
<span class="quotelev1">&gt;              GG=i1+i2+i3+pow(i1+i2+i3,2);
</span><br>
<span class="quotelev1">&gt;                                            }}
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI::Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // ==
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpic++ main.c -fopenmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; echo &quot;run 1 &quot; ; export OMP_NUM_THREADS=1 ; time mpirun -np 1 a.out ;  
</span><br>
<span class="quotelev1">&gt; echo &quot;run 2 &quot; ;   export OMP_NUM_THREADS=2 ; time mpirun -np 1 a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; run 1
</span><br>
<span class="quotelev1">&gt; 0 0
</span><br>
<span class="quotelev1">&gt; 0 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; real    0m44.494s
</span><br>
<span class="quotelev1">&gt; user    0m43.594s
</span><br>
<span class="quotelev1">&gt; sys    0m0.320s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; run 2
</span><br>
<span class="quotelev1">&gt; 0 0
</span><br>
<span class="quotelev1">&gt; 0 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; real    0m44.796s
</span><br>
<span class="quotelev1">&gt; user    0m43.813s
</span><br>
<span class="quotelev1">&gt; sys    0m0.360s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No acceleration!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, if I exclude lines
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; //#include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; //MPI::Init (argc, argv);
</span><br>
<span class="quotelev1">&gt; //int proc_num = MPI::COMM_WORLD.Get_size ( );
</span><br>
<span class="quotelev1">&gt; //my_rank  = MPI::COMM_WORLD.Get_rank ( );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; //MPI::Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compile:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g++ main.c -fopenmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; echo &quot;run 1 &quot; ; export OMP_NUM_THREADS=1 ; time  a.out ;  echo &quot;run 2 
</span><br>
<span class="quotelev1">&gt; &quot; ;   export OMP_NUM_THREADS=2 ; time   a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; run 1
</span><br>
<span class="quotelev1">&gt; 0 0
</span><br>
<span class="quotelev1">&gt; 0 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; real    0m45.416s
</span><br>
<span class="quotelev1">&gt; user    0m45.402s
</span><br>
<span class="quotelev1">&gt; sys    0m0.025s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; run 2
</span><br>
<span class="quotelev1">&gt; 0 0
</span><br>
<span class="quotelev1">&gt; 0 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; real    0m22.783s
</span><br>
<span class="quotelev1">&gt; user    0m45.517s
</span><br>
<span class="quotelev1">&gt; sys    0m0.016s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I have acceleration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why I have not it in the first case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lstopo -v
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Machine (P#0 total=12240880KB DMIProductName=S5520SC 
</span><br>
<span class="quotelev1">&gt; DMIProductVersion=.................... DMIBoardVendor=&quot;Intel 
</span><br>
<span class="quotelev1">&gt; Corporation&quot; DMIBoardName=S5520SC DMIBoardVersion=&quot;FRU Ver 0.05&quot; 
</span><br>
<span class="quotelev1">&gt; DMIBoardAssetTag=.................... 
</span><br>
<span class="quotelev1">&gt; DMIChassisVendor=.............................. DMIChassisType=17 
</span><br>
<span class="quotelev1">&gt; DMIChassisVersion=.................. 
</span><br>
<span class="quotelev1">&gt; DMIChassisAssetTag=.................... DMIBIOSVendor=&quot;Intel Corp.&quot; 
</span><br>
<span class="quotelev1">&gt; DMIBIOSVersion=S5500.86B.01.00.0038.060120091503 
</span><br>
<span class="quotelev1">&gt; DMIBIOSDate=06/01/2009 DMISysVendor=&quot;Intel Corporation&quot; Backend=Linux 
</span><br>
<span class="quotelev1">&gt; OSName=Linux OSRelease=3.13.0-87-generic OSVersion=&quot;#133-Ubuntu SMP 
</span><br>
<span class="quotelev1">&gt; Tue May 24 18:32:09 UTC 2016&quot; HostName=mr Architecture=x86_64)
</span><br>
<span class="quotelev1">&gt;   NUMANode L#0 (P#0 local=6049180KB total=6049180KB)
</span><br>
<span class="quotelev1">&gt;     Socket L#0 (P#0 CPUModel=&quot;Intel(R) Xeon(R) CPU           E5502 @ 
</span><br>
<span class="quotelev1">&gt; 1.87GHz&quot;)
</span><br>
<span class="quotelev1">&gt;       L3Cache L#0 (size=4096KB linesize=64 ways=16)
</span><br>
<span class="quotelev1">&gt;         L2Cache L#0 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev1">&gt;           L1dCache L#0 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev1">&gt;             L1iCache L#0 (size=32KB linesize=64 ways=4)
</span><br>
<span class="quotelev1">&gt;               Core L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;                 PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;         L2Cache L#1 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev1">&gt;           L1dCache L#1 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev1">&gt;             L1iCache L#1 (size=32KB linesize=64 ways=4)
</span><br>
<span class="quotelev1">&gt;               Core L#1 (P#2)
</span><br>
<span class="quotelev1">&gt;                 PU L#1 (P#2)
</span><br>
<span class="quotelev1">&gt;   NUMANode L#1 (P#1 local=6191700KB total=6191700KB)
</span><br>
<span class="quotelev1">&gt;     Socket L#1 (P#1 CPUModel=&quot;Intel(R) Xeon(R) CPU           E5502 @ 
</span><br>
<span class="quotelev1">&gt; 1.87GHz&quot;)
</span><br>
<span class="quotelev1">&gt;       L3Cache L#1 (size=4096KB linesize=64 ways=16)
</span><br>
<span class="quotelev1">&gt;         L2Cache L#2 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev1">&gt;           L1dCache L#2 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev1">&gt;             L1iCache L#2 (size=32KB linesize=64 ways=4)
</span><br>
<span class="quotelev1">&gt;               Core L#2 (P#0)
</span><br>
<span class="quotelev1">&gt;                 PU L#2 (P#1)
</span><br>
<span class="quotelev1">&gt;         L2Cache L#3 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev1">&gt;           L1dCache L#3 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev1">&gt;             L1iCache L#3 (size=32KB linesize=64 ways=4)
</span><br>
<span class="quotelev1">&gt;               Core L#3 (P#2)
</span><br>
<span class="quotelev1">&gt;                 PU L#3 (P#3)
</span><br>
<span class="quotelev1">&gt;   Bridge Host-&gt;PCI L#0 (P#0 buses=0000:[00-07])
</span><br>
<span class="quotelev1">&gt;     Bridge PCI-&gt;PCI (P#16 busid=0000:00:01.0 id=8086:3408 
</span><br>
<span class="quotelev1">&gt; class=0604(PCI_B) buses=0000:[01-01] PCIVendor=&quot;Intel Corporation&quot; 
</span><br>
<span class="quotelev1">&gt; PCIDevice=&quot;5520/5500/X58 I/O Hub PCI Express Root Port 1&quot;) &quot;Intel 
</span><br>
<span class="quotelev1">&gt; Corporation 5520/5500/X58 I/O Hub PCI Express Root Port 1&quot;
</span><br>
<span class="quotelev1">&gt;       PCI 8086:10a7 (P#4096 busid=0000:01:00.0 class=0200(Ether) 
</span><br>
<span class="quotelev1">&gt; PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;82575EB Gigabit Network 
</span><br>
<span class="quotelev1">&gt; Connection&quot;) &quot;Intel Corporation 82575EB Gigabit Network Connection&quot;
</span><br>
<span class="quotelev1">&gt;         Network L#0 (Address=00:15:17:af:94:40) &quot;eth0&quot;
</span><br>
<span class="quotelev1">&gt;       PCI 8086:10a7 (P#4097 busid=0000:01:00.1 class=0200(Ether) 
</span><br>
<span class="quotelev1">&gt; PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;82575EB Gigabit Network 
</span><br>
<span class="quotelev1">&gt; Connection&quot;) &quot;Intel Corporation 82575EB Gigabit Network Connection&quot;
</span><br>
<span class="quotelev1">&gt;         Network L#1 (Address=00:15:17:af:94:41) &quot;eth1&quot;
</span><br>
<span class="quotelev1">&gt;     Bridge PCI-&gt;PCI (P#48 busid=0000:00:03.0 id=8086:340a 
</span><br>
<span class="quotelev1">&gt; class=0604(PCI_B) buses=0000:[02-02] PCIVendor=&quot;Intel Corporation&quot; 
</span><br>
<span class="quotelev1">&gt; PCIDevice=&quot;5520/5500/X58 I/O Hub PCI Express Root Port 3&quot;) &quot;Intel 
</span><br>
<span class="quotelev1">&gt; Corporation 5520/5500/X58 I/O Hub PCI Express Root Port 3&quot;
</span><br>
<span class="quotelev1">&gt;       PCI 1002:6819 (P#8192 busid=0000:02:00.0 class=0300(VGA) 
</span><br>
<span class="quotelev1">&gt; PCIVendor=&quot;Advanced Micro Devices, Inc. [AMD/ATI]&quot; PCIDevice=&quot;Pitcairn 
</span><br>
<span class="quotelev1">&gt; PRO [Radeon HD 7850 / R7 265 / R9 270 1024SP]&quot;) &quot;Advanced Micro 
</span><br>
<span class="quotelev1">&gt; Devices, Inc. [AMD/ATI] Pitcairn PRO [Radeon HD 7850 / R7 265 / R9 270 
</span><br>
<span class="quotelev1">&gt; 1024SP]&quot;
</span><br>
<span class="quotelev1">&gt;         GPU L#2 &quot;card0&quot;
</span><br>
<span class="quotelev1">&gt;         GPU L#3 &quot;controlD64&quot;
</span><br>
<span class="quotelev1">&gt;     PCI 8086:3a20 (P#498 busid=0000:00:1f.2 class=0101(IDE) 
</span><br>
<span class="quotelev1">&gt; PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;82801JI (ICH10 Family) 4 port 
</span><br>
<span class="quotelev1">&gt; SATA IDE Controller #1&quot;) &quot;Intel Corporation 82801JI (ICH10 Family) 4 
</span><br>
<span class="quotelev1">&gt; port SATA IDE Controller #1&quot;
</span><br>
<span class="quotelev1">&gt;       Block L#4 &quot;sda&quot;
</span><br>
<span class="quotelev1">&gt;       Block L#5 &quot;sdb&quot;
</span><br>
<span class="quotelev1">&gt;     PCI 8086:3a26 (P#501 busid=0000:00:1f.5 class=0101(IDE) 
</span><br>
<span class="quotelev1">&gt; PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;82801JI (ICH10 Family) 2 port 
</span><br>
<span class="quotelev1">&gt; SATA IDE Controller #2&quot;) &quot;Intel Corporation 82801JI (ICH10 Family) 2 
</span><br>
<span class="quotelev1">&gt; port SATA IDE Controller #2&quot;
</span><br>
<span class="quotelev1">&gt; depth 0:    1 Machine (type #1)
</span><br>
<span class="quotelev1">&gt;  depth 1:    2 NUMANode (type #2)
</span><br>
<span class="quotelev1">&gt;   depth 2:    2 Socket (type #3)
</span><br>
<span class="quotelev1">&gt;    depth 3:    2 L3Cache (type #4)
</span><br>
<span class="quotelev1">&gt;     depth 4:    4 L2Cache (type #4)
</span><br>
<span class="quotelev1">&gt;      depth 5:    4 L1dCache (type #4)
</span><br>
<span class="quotelev1">&gt;       depth 6:    4 L1iCache (type #4)
</span><br>
<span class="quotelev1">&gt;        depth 7:    4 Core (type #5)
</span><br>
<span class="quotelev1">&gt;         depth 8:    4 PU (type #6)
</span><br>
<span class="quotelev1">&gt; Special depth -3:    3 Bridge (type #9)
</span><br>
<span class="quotelev1">&gt; Special depth -4:    5 PCI Device (type #10)
</span><br>
<span class="quotelev1">&gt; Special depth -5:    6 OS Device (type #11)
</span><br>
<span class="quotelev1">&gt; latency matrix between NUMANodes (depth 1) by logical indexes:
</span><br>
<span class="quotelev1">&gt;   index     0     1
</span><br>
<span class="quotelev1">&gt;       0 1,000 2,100
</span><br>
<span class="quotelev1">&gt;       1 2,100 1,000
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29400.php">http://www.open-mpi.org/community/lists/users/2016/06/29400.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29402.php">Maxim Reshetnyak: "[OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
<li><strong>Previous message:</strong> <a href="29400.php">Maxim Reshetnyak: "[OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
<li><strong>In reply to:</strong> <a href="29400.php">Maxim Reshetnyak: "[OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
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
