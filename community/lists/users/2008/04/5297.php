<?
$subject_val = "[OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 19:55:11 2008" -->
<!-- isoreceived="20080402235511" -->
<!-- sent="Wed, 2 Apr 2008 20:55:04 -0300" -->
<!-- isosent="20080402235504" -->
<!-- name="Patrick Heckeler" -->
<!-- email="pheckeler_at_[hidden]" -->
<!-- subject="[OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine" -->
<!-- id="3edd3e5a0804021655w7f730dbdh3d041720861353c5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine<br>
<strong>From:</strong> Patrick Heckeler (<em>pheckeler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 19:55:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5298.php">Jeff Squyres: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<li><strong>Previous message:</strong> <a href="5296.php">Jeff Squyres: "Re: [OMPI users] multi-rail failover with IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5301.php">George Bosilca: "Re: [OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine"</a>
<li><strong>Reply:</strong> <a href="5301.php">George Bosilca: "Re: [OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody,
<br>
<p>I tried to submit a single 'long double' from an amd64 architecture to
<br>
a ppc, from an amd64 to a sparc machine and from ppc to sparc. The
<br>
testprogram and the results are shown below. All other basic datatypes
<br>
I have tested are working fine with heterogenous communication. Does
<br>
anybody have an idea? I am using openMPI 1.2.4.
<br>
<p>Testprogramm:
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;iostream&gt;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;int me, numprocs;
<br>
&nbsp;&nbsp;long double senddata = 3.14;
<br>
&nbsp;&nbsp;long double recvdata;
<br>
&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;me);
<br>
<p>&nbsp;&nbsp;if(me==0)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;Long double to send: &quot; &lt;&lt; senddata &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;senddata, 1, MPI_LONG_DOUBLE, 1, 123, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;recvdata, 1, MPI_LONG_DOUBLE, 0, 123, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;Long double received: &quot; &lt;&lt; recvdata &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<pre>
--
Output from amd64 to ppc:
unpack there is still room in the input buffer 8 bytes
Long double received: 8.19027e+3364
Long double to send: 3.14
Output from amd64 to sparc:
Long double to send: 3.14
[hannibal:17063] *** An error occurred in MPI_Recv
[hannibal:17063] *** on communicator MPI_COMM_WORLD
[hannibal:17063] *** MPI_ERR_TRUNCATE: message truncated
[hannibal:17063] *** MPI_ERRORS_ARE_FATAL (goodbye)
mpirun noticed that job rank 0 with PID 21916 on node murdock exited
on signal 15 (Terminated).
Output from ppc to sparc:
Long double to send: 3.14
Long double received: 1146.88
*********************************************************
Information of the amd64 machine:
configure:
./configure --prefix=/usr/local/ CFLAGS=-m32 CXXFLAGS=-m32 FFLAGS=-m32
FCFLAGS=-m32 --with-wrapper-cflags=-m32 --with-wrapper-cxxflags=-m32
--with-wrapper-fflags=-m32 --with-wrapper-fcflags=-m32
uname -a:
Linux hannibal 2.6.22-14-server #1 SMP Tue Dec 18 05:52:24 UTC 2007
x86_64 GNU/Linux
less /proc/cpuinfo:
processor       : 0
vendor_id       : AuthenticAMD
cpu family      : 15
model           : 33
model name      : Dual Core AMD Opteron(tm) Processor 275
stepping        : 2
cpu MHz         : 2193.774
cache size      : 1024 KB
physical id     : 0
siblings        : 2
core id         : 0
cpu cores       : 2
fpu             : yes
fpu_exception   : yes
cpuid level     : 1
wp              : yes
flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge
mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext
fxsr_opt lm 3dnowext 3dnow pni lahf_lm cmp_legacy
bogomips        : 4390.91
TLB size        : 1024 4K pages
clflush size    : 64
cache_alignment : 64
address sizes   : 40 bits physical, 48 bits virtual
power management: ts fid vid ttp
processor       : 1
vendor_id       : AuthenticAMD
cpu family      : 15
model           : 33
model name      : Dual Core AMD Opteron(tm) Processor 275
stepping        : 2
cpu MHz         : 2193.774
cache size      : 1024 KB
physical id     : 0
siblings        : 2
core id         : 1
cpu cores       : 2
fpu             : yes
fpu_exception   : yes
cpuid level     : 1
wp              : yes
flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge
mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext
fxsr_opt lm 3dnowext 3dnow pni lahf_lm cmp_legacy
bogomips        : 4387.61
TLB size        : 1024 4K pages
clflush size    : 64
cache_alignment : 64
address sizes   : 40 bits physical, 48 bits virtual
power management: ts fid vid ttp
processor       : 2
************************************************************
information of the ppc:
configure:
./configure --prefix=/usr/local --enable-static
--enable-ltdl-convenience --no-create --no-recursion
uname -a:
Linux baracus 2.6.18-5-powerpc #1 Sat Dec 22 21:05:48 UTC 2007 ppc GNU/Linux
less /proc/cpuinfo:
processor       : 0
cpu             : 7410, altivec supported
temperature     : 23-25 C (uncalibrated)
clock           : 533.333332MHz
revision        : 0.3 (pvr 800c 1103)
bogomips        : 66.30
timebase        : 33290001
platform        : PowerMac
machine         : PowerMac3,4
motherboard     : PowerMac3,4 MacRISC2 MacRISC Power Macintosh
detected as     : 69 (PowerMac G4 Silver)
pmac flags      : 00000010
L2 cache        : 1024K unified
pmac-generation : NewWorld
************************************************************
information of the sparc:
configure:
./configure CFLAGS=-mv8plus CXXFLAGS=-mv8plus FFLAGS=-mv8plus
FCFLAGS=-mv8plus --prefix=/usr/local --enable-static
--enable-ltdl-convenience --no-create --no-recursion
uname -a:
Linux murdock 2.6.22-14-sparc64-smp #1 SMP Tue Dec 18 05:40:10 UTC
2007 sparc64 GNU/Linux
less /proc/cpuinfo:
cpu             : TI UltraSparc III (Cheetah)
fpu             : UltraSparc III integrated FPU
prom            : OBP 4.16.4 2004/12/18 05:18
type            : sun4u
ncpus probed    : 2
ncpus active    : 2
D$ parity tl1   : 0
I$ parity tl1   : 0
Cpu0ClkTck      : 000000002cb41780
Cpu1ClkTck      : 000000002cb41780
MMU Type        : Cheetah
State:
CPU0:           online
CPU1:           online
Thanks in advance for your help
-- 
Viele Gr&#195;&#188;&#195;&#159;e / Kind regards
Patrick Heckeler
Teckstr. 6
72074 T&#195;&#188;bingen
Germany
Mobil: +49172 / 719 23 24
email: pheckeler [at] gmail [dot] com
skype: p_heckeler
ICQ: 200910972
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5298.php">Jeff Squyres: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<li><strong>Previous message:</strong> <a href="5296.php">Jeff Squyres: "Re: [OMPI users] multi-rail failover with IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5301.php">George Bosilca: "Re: [OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine"</a>
<li><strong>Reply:</strong> <a href="5301.php">George Bosilca: "Re: [OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine"</a>
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
