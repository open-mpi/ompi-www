<?
$subject_val = "Re: [OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 15:22:29 2008" -->
<!-- isoreceived="20080403192229" -->
<!-- sent="Thu, 3 Apr 2008 15:22:18 -0400" -->
<!-- isosent="20080403192218" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine" -->
<!-- id="BD5416F1-266B-4847-8B88-17E75DE519B7_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3edd3e5a0804021655w7f730dbdh3d041720861353c5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-03 15:22:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5302.php">Pak Lui: "Re: [OMPI users] SGE error: executing task of job 22966 failed:"</a>
<li><strong>Previous message:</strong> <a href="5300.php">Korambath, Prakashan: "[OMPI users] SGE error: executing task of job 22966 failed:"</a>
<li><strong>In reply to:</strong> <a href="5297.php">Patrick Heckeler: "[OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5306.php">Patrick Heckeler: "Re: [OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine"</a>
<li><strong>Reply:</strong> <a href="5306.php">Patrick Heckeler: "Re: [OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Patrick,
<br>
<p>As far as I know this was working fine few months ago ...
<br>
I will take a look at this next week. Can you send me the 2 config.log  
<br>
files on your 2 machines.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 2, 2008, at 7:55 PM, Patrick Heckeler wrote:
<br>
<span class="quotelev1">&gt; Hi everybody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to submit a single 'long double' from an amd64 architecture to
</span><br>
<span class="quotelev1">&gt; a ppc, from an amd64 to a sparc machine and from ppc to sparc. The
</span><br>
<span class="quotelev1">&gt; testprogram and the results are shown below. All other basic datatypes
</span><br>
<span class="quotelev1">&gt; I have tested are working fine with heterogenous communication. Does
</span><br>
<span class="quotelev1">&gt; anybody have an idea? I am using openMPI 1.2.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Testprogramm:
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int me, numprocs;
</span><br>
<span class="quotelev1">&gt;  long double senddata = 3.14;
</span><br>
<span class="quotelev1">&gt;  long double recvdata;
</span><br>
<span class="quotelev1">&gt;  MPI_Status status;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;me);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if(me==0)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    std::cout &lt;&lt; &quot;Long double to send: &quot; &lt;&lt; senddata &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;    MPI_Send(&amp;senddata, 1, MPI_LONG_DOUBLE, 1, 123, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  else
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    MPI_Recv(&amp;recvdata, 1, MPI_LONG_DOUBLE, 0, 123, MPI_COMM_WORLD,  
</span><br>
<span class="quotelev1">&gt; &amp;status);
</span><br>
<span class="quotelev1">&gt;    std::cout &lt;&lt; &quot;Long double received: &quot; &lt;&lt; recvdata &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Output from amd64 to ppc:
</span><br>
<span class="quotelev1">&gt; unpack there is still room in the input buffer 8 bytes
</span><br>
<span class="quotelev1">&gt; Long double received: 8.19027e+3364
</span><br>
<span class="quotelev1">&gt; Long double to send: 3.14
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Output from amd64 to sparc:
</span><br>
<span class="quotelev1">&gt; Long double to send: 3.14
</span><br>
<span class="quotelev1">&gt; [hannibal:17063] *** An error occurred in MPI_Recv
</span><br>
<span class="quotelev1">&gt; [hannibal:17063] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [hannibal:17063] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; [hannibal:17063] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 21916 on node murdock exited
</span><br>
<span class="quotelev1">&gt; on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Output from ppc to sparc:
</span><br>
<span class="quotelev1">&gt; Long double to send: 3.14
</span><br>
<span class="quotelev1">&gt; Long double received: 1146.88
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *********************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Information of the amd64 machine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/ CFLAGS=-m32 CXXFLAGS=-m32 FFLAGS=-m32
</span><br>
<span class="quotelev1">&gt; FCFLAGS=-m32 --with-wrapper-cflags=-m32 --with-wrapper-cxxflags=-m32
</span><br>
<span class="quotelev1">&gt; --with-wrapper-fflags=-m32 --with-wrapper-fcflags=-m32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; uname -a:
</span><br>
<span class="quotelev1">&gt; Linux hannibal 2.6.22-14-server #1 SMP Tue Dec 18 05:52:24 UTC 2007
</span><br>
<span class="quotelev1">&gt; x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; less /proc/cpuinfo:
</span><br>
<span class="quotelev1">&gt; processor       : 0
</span><br>
<span class="quotelev1">&gt; vendor_id       : AuthenticAMD
</span><br>
<span class="quotelev1">&gt; cpu family      : 15
</span><br>
<span class="quotelev1">&gt; model           : 33
</span><br>
<span class="quotelev1">&gt; model name      : Dual Core AMD Opteron(tm) Processor 275
</span><br>
<span class="quotelev1">&gt; stepping        : 2
</span><br>
<span class="quotelev1">&gt; cpu MHz         : 2193.774
</span><br>
<span class="quotelev1">&gt; cache size      : 1024 KB
</span><br>
<span class="quotelev1">&gt; physical id     : 0
</span><br>
<span class="quotelev1">&gt; siblings        : 2
</span><br>
<span class="quotelev1">&gt; core id         : 0
</span><br>
<span class="quotelev1">&gt; cpu cores       : 2
</span><br>
<span class="quotelev1">&gt; fpu             : yes
</span><br>
<span class="quotelev1">&gt; fpu_exception   : yes
</span><br>
<span class="quotelev1">&gt; cpuid level     : 1
</span><br>
<span class="quotelev1">&gt; wp              : yes
</span><br>
<span class="quotelev1">&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge
</span><br>
<span class="quotelev1">&gt; mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext
</span><br>
<span class="quotelev1">&gt; fxsr_opt lm 3dnowext 3dnow pni lahf_lm cmp_legacy
</span><br>
<span class="quotelev1">&gt; bogomips        : 4390.91
</span><br>
<span class="quotelev1">&gt; TLB size        : 1024 4K pages
</span><br>
<span class="quotelev1">&gt; clflush size    : 64
</span><br>
<span class="quotelev1">&gt; cache_alignment : 64
</span><br>
<span class="quotelev1">&gt; address sizes   : 40 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt; power management: ts fid vid ttp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; processor       : 1
</span><br>
<span class="quotelev1">&gt; vendor_id       : AuthenticAMD
</span><br>
<span class="quotelev1">&gt; cpu family      : 15
</span><br>
<span class="quotelev1">&gt; model           : 33
</span><br>
<span class="quotelev1">&gt; model name      : Dual Core AMD Opteron(tm) Processor 275
</span><br>
<span class="quotelev1">&gt; stepping        : 2
</span><br>
<span class="quotelev1">&gt; cpu MHz         : 2193.774
</span><br>
<span class="quotelev1">&gt; cache size      : 1024 KB
</span><br>
<span class="quotelev1">&gt; physical id     : 0
</span><br>
<span class="quotelev1">&gt; siblings        : 2
</span><br>
<span class="quotelev1">&gt; core id         : 1
</span><br>
<span class="quotelev1">&gt; cpu cores       : 2
</span><br>
<span class="quotelev1">&gt; fpu             : yes
</span><br>
<span class="quotelev1">&gt; fpu_exception   : yes
</span><br>
<span class="quotelev1">&gt; cpuid level     : 1
</span><br>
<span class="quotelev1">&gt; wp              : yes
</span><br>
<span class="quotelev1">&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge
</span><br>
<span class="quotelev1">&gt; mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext
</span><br>
<span class="quotelev1">&gt; fxsr_opt lm 3dnowext 3dnow pni lahf_lm cmp_legacy
</span><br>
<span class="quotelev1">&gt; bogomips        : 4387.61
</span><br>
<span class="quotelev1">&gt; TLB size        : 1024 4K pages
</span><br>
<span class="quotelev1">&gt; clflush size    : 64
</span><br>
<span class="quotelev1">&gt; cache_alignment : 64
</span><br>
<span class="quotelev1">&gt; address sizes   : 40 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt; power management: ts fid vid ttp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; processor       : 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; information of the ppc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local --enable-static
</span><br>
<span class="quotelev1">&gt; --enable-ltdl-convenience --no-create --no-recursion
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; uname -a:
</span><br>
<span class="quotelev1">&gt; Linux baracus 2.6.18-5-powerpc #1 Sat Dec 22 21:05:48 UTC 2007 ppc  
</span><br>
<span class="quotelev1">&gt; GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; less /proc/cpuinfo:
</span><br>
<span class="quotelev1">&gt; processor       : 0
</span><br>
<span class="quotelev1">&gt; cpu             : 7410, altivec supported
</span><br>
<span class="quotelev1">&gt; temperature     : 23-25 C (uncalibrated)
</span><br>
<span class="quotelev1">&gt; clock           : 533.333332MHz
</span><br>
<span class="quotelev1">&gt; revision        : 0.3 (pvr 800c 1103)
</span><br>
<span class="quotelev1">&gt; bogomips        : 66.30
</span><br>
<span class="quotelev1">&gt; timebase        : 33290001
</span><br>
<span class="quotelev1">&gt; platform        : PowerMac
</span><br>
<span class="quotelev1">&gt; machine         : PowerMac3,4
</span><br>
<span class="quotelev1">&gt; motherboard     : PowerMac3,4 MacRISC2 MacRISC Power Macintosh
</span><br>
<span class="quotelev1">&gt; detected as     : 69 (PowerMac G4 Silver)
</span><br>
<span class="quotelev1">&gt; pmac flags      : 00000010
</span><br>
<span class="quotelev1">&gt; L2 cache        : 1024K unified
</span><br>
<span class="quotelev1">&gt; pmac-generation : NewWorld
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; information of the sparc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:
</span><br>
<span class="quotelev1">&gt; ./configure CFLAGS=-mv8plus CXXFLAGS=-mv8plus FFLAGS=-mv8plus
</span><br>
<span class="quotelev1">&gt; FCFLAGS=-mv8plus --prefix=/usr/local --enable-static
</span><br>
<span class="quotelev1">&gt; --enable-ltdl-convenience --no-create --no-recursion
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; uname -a:
</span><br>
<span class="quotelev1">&gt; Linux murdock 2.6.22-14-sparc64-smp #1 SMP Tue Dec 18 05:40:10 UTC
</span><br>
<span class="quotelev1">&gt; 2007 sparc64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; less /proc/cpuinfo:
</span><br>
<span class="quotelev1">&gt; cpu             : TI UltraSparc III (Cheetah)
</span><br>
<span class="quotelev1">&gt; fpu             : UltraSparc III integrated FPU
</span><br>
<span class="quotelev1">&gt; prom            : OBP 4.16.4 2004/12/18 05:18
</span><br>
<span class="quotelev1">&gt; type            : sun4u
</span><br>
<span class="quotelev1">&gt; ncpus probed    : 2
</span><br>
<span class="quotelev1">&gt; ncpus active    : 2
</span><br>
<span class="quotelev1">&gt; D$ parity tl1   : 0
</span><br>
<span class="quotelev1">&gt; I$ parity tl1   : 0
</span><br>
<span class="quotelev1">&gt; Cpu0ClkTck      : 000000002cb41780
</span><br>
<span class="quotelev1">&gt; Cpu1ClkTck      : 000000002cb41780
</span><br>
<span class="quotelev1">&gt; MMU Type        : Cheetah
</span><br>
<span class="quotelev1">&gt; State:
</span><br>
<span class="quotelev1">&gt; CPU0:           online
</span><br>
<span class="quotelev1">&gt; CPU1:           online
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for your help
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Viele Gr&#252;&#223;e / Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patrick Heckeler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Teckstr. 6
</span><br>
<span class="quotelev1">&gt; 72074 T&#252;bingen
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mobil: +49172 / 719 23 24
</span><br>
<span class="quotelev1">&gt; email: pheckeler [at] gmail [dot] com
</span><br>
<span class="quotelev1">&gt; skype: p_heckeler
</span><br>
<span class="quotelev1">&gt; ICQ: 200910972
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5301/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5302.php">Pak Lui: "Re: [OMPI users] SGE error: executing task of job 22966 failed:"</a>
<li><strong>Previous message:</strong> <a href="5300.php">Korambath, Prakashan: "[OMPI users] SGE error: executing task of job 22966 failed:"</a>
<li><strong>In reply to:</strong> <a href="5297.php">Patrick Heckeler: "[OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5306.php">Patrick Heckeler: "Re: [OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine"</a>
<li><strong>Reply:</strong> <a href="5306.php">Patrick Heckeler: "Re: [OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine"</a>
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
