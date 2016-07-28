<?
$subject_val = "Re: [OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 18:48:20 2008" -->
<!-- isoreceived="20080403224820" -->
<!-- sent="Thu, 3 Apr 2008 19:47:59 -0300" -->
<!-- isosent="20080403224759" -->
<!-- name="Patrick Heckeler" -->
<!-- email="pheckeler_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine" -->
<!-- id="3edd3e5a0804031547p38fb715aq602ef21a2be3efb2_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BD5416F1-266B-4847-8B88-17E75DE519B7_at_eecs.utk.edu" -->
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
<strong>From:</strong> Patrick Heckeler (<em>pheckeler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-03 18:47:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5307.php">clarkmpi_at_[hidden]: "[OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>Previous message:</strong> <a href="5305.php">Will Portnoy: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<li><strong>In reply to:</strong> <a href="5301.php">George Bosilca: "Re: [OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi george,
<br>
<p>thanks for your help... config.logs are attached.
<br>
<p>2008/4/3, George Bosilca &lt;bosilca_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Patrick,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  As far as I know this was working fine few months ago ...
</span><br>
<span class="quotelev1">&gt;  I will take a look at this next week. Can you send me the 2 config.log
</span><br>
<span class="quotelev1">&gt; files on your 2 machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Apr 2, 2008, at 7:55 PM, Patrick Heckeler wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi everybody,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried to submit a single 'long double' from an amd64 architecture to
</span><br>
<span class="quotelev2">&gt; &gt; a ppc, from an amd64 to a sparc machine and from ppc to sparc. The
</span><br>
<span class="quotelev2">&gt; &gt; testprogram and the results are shown below. All other basic datatypes
</span><br>
<span class="quotelev2">&gt; &gt; I have tested are working fine with heterogenous communication. Does
</span><br>
<span class="quotelev2">&gt; &gt; anybody have an idea? I am using openMPI 1.2.4.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Testprogramm:
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;  int me, numprocs;
</span><br>
<span class="quotelev2">&gt; &gt;  long double senddata = 3.14;
</span><br>
<span class="quotelev2">&gt; &gt;  long double recvdata;
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Status status;
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;me);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  if(me==0)
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt;   std::cout &lt;&lt; &quot;Long double to send: &quot; &lt;&lt; senddata &lt;&lt; std::endl;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Send(&amp;senddata, 1, MPI_LONG_DOUBLE, 1, 123, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;  else
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Recv(&amp;recvdata, 1, MPI_LONG_DOUBLE, 0, 123, MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt; &amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;   std::cout &lt;&lt; &quot;Long double received: &quot; &lt;&lt; recvdata &lt;&lt; std::endl;
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Output from amd64 to ppc:
</span><br>
<span class="quotelev2">&gt; &gt; unpack there is still room in the input buffer 8 bytes
</span><br>
<span class="quotelev2">&gt; &gt; Long double received: 8.19027e+3364
</span><br>
<span class="quotelev2">&gt; &gt; Long double to send: 3.14
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Output from amd64 to sparc:
</span><br>
<span class="quotelev2">&gt; &gt; Long double to send: 3.14
</span><br>
<span class="quotelev2">&gt; &gt; [hannibal:17063] *** An error occurred in MPI_Recv
</span><br>
<span class="quotelev2">&gt; &gt; [hannibal:17063] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [hannibal:17063] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev2">&gt; &gt; [hannibal:17063] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that job rank 0 with PID 21916 on node murdock exited
</span><br>
<span class="quotelev2">&gt; &gt; on signal 15 (Terminated).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Output from ppc to sparc:
</span><br>
<span class="quotelev2">&gt; &gt; Long double to send: 3.14
</span><br>
<span class="quotelev2">&gt; &gt; Long double received: 1146.88
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *********************************************************
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Information of the amd64 machine:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; configure:
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/usr/local/ CFLAGS=-m32 CXXFLAGS=-m32 FFLAGS=-m32
</span><br>
<span class="quotelev2">&gt; &gt; FCFLAGS=-m32 --with-wrapper-cflags=-m32 --with-wrapper-cxxflags=-m32
</span><br>
<span class="quotelev2">&gt; &gt; --with-wrapper-fflags=-m32 --with-wrapper-fcflags=-m32
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; uname -a:
</span><br>
<span class="quotelev2">&gt; &gt; Linux hannibal 2.6.22-14-server #1 SMP Tue Dec 18 05:52:24 UTC 2007
</span><br>
<span class="quotelev2">&gt; &gt; x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; less /proc/cpuinfo:
</span><br>
<span class="quotelev2">&gt; &gt; processor       : 0
</span><br>
<span class="quotelev2">&gt; &gt; vendor_id       : AuthenticAMD
</span><br>
<span class="quotelev2">&gt; &gt; cpu family      : 15
</span><br>
<span class="quotelev2">&gt; &gt; model           : 33
</span><br>
<span class="quotelev2">&gt; &gt; model name      : Dual Core AMD Opteron(tm) Processor 275
</span><br>
<span class="quotelev2">&gt; &gt; stepping        : 2
</span><br>
<span class="quotelev2">&gt; &gt; cpu MHz         : 2193.774
</span><br>
<span class="quotelev2">&gt; &gt; cache size      : 1024 KB
</span><br>
<span class="quotelev2">&gt; &gt; physical id     : 0
</span><br>
<span class="quotelev2">&gt; &gt; siblings        : 2
</span><br>
<span class="quotelev2">&gt; &gt; core id         : 0
</span><br>
<span class="quotelev2">&gt; &gt; cpu cores       : 2
</span><br>
<span class="quotelev2">&gt; &gt; fpu             : yes
</span><br>
<span class="quotelev2">&gt; &gt; fpu_exception   : yes
</span><br>
<span class="quotelev2">&gt; &gt; cpuid level     : 1
</span><br>
<span class="quotelev2">&gt; &gt; wp              : yes
</span><br>
<span class="quotelev2">&gt; &gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge
</span><br>
<span class="quotelev2">&gt; &gt; mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext
</span><br>
<span class="quotelev2">&gt; &gt; fxsr_opt lm 3dnowext 3dnow pni lahf_lm cmp_legacy
</span><br>
<span class="quotelev2">&gt; &gt; bogomips        : 4390.91
</span><br>
<span class="quotelev2">&gt; &gt; TLB size        : 1024 4K pages
</span><br>
<span class="quotelev2">&gt; &gt; clflush size    : 64
</span><br>
<span class="quotelev2">&gt; &gt; cache_alignment : 64
</span><br>
<span class="quotelev2">&gt; &gt; address sizes   : 40 bits physical, 48 bits virtual
</span><br>
<span class="quotelev2">&gt; &gt; power management: ts fid vid ttp
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; processor       : 1
</span><br>
<span class="quotelev2">&gt; &gt; vendor_id       : AuthenticAMD
</span><br>
<span class="quotelev2">&gt; &gt; cpu family      : 15
</span><br>
<span class="quotelev2">&gt; &gt; model           : 33
</span><br>
<span class="quotelev2">&gt; &gt; model name      : Dual Core AMD Opteron(tm) Processor 275
</span><br>
<span class="quotelev2">&gt; &gt; stepping        : 2
</span><br>
<span class="quotelev2">&gt; &gt; cpu MHz         : 2193.774
</span><br>
<span class="quotelev2">&gt; &gt; cache size      : 1024 KB
</span><br>
<span class="quotelev2">&gt; &gt; physical id     : 0
</span><br>
<span class="quotelev2">&gt; &gt; siblings        : 2
</span><br>
<span class="quotelev2">&gt; &gt; core id         : 1
</span><br>
<span class="quotelev2">&gt; &gt; cpu cores       : 2
</span><br>
<span class="quotelev2">&gt; &gt; fpu             : yes
</span><br>
<span class="quotelev2">&gt; &gt; fpu_exception   : yes
</span><br>
<span class="quotelev2">&gt; &gt; cpuid level     : 1
</span><br>
<span class="quotelev2">&gt; &gt; wp              : yes
</span><br>
<span class="quotelev2">&gt; &gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge
</span><br>
<span class="quotelev2">&gt; &gt; mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext
</span><br>
<span class="quotelev2">&gt; &gt; fxsr_opt lm 3dnowext 3dnow pni lahf_lm cmp_legacy
</span><br>
<span class="quotelev2">&gt; &gt; bogomips        : 4387.61
</span><br>
<span class="quotelev2">&gt; &gt; TLB size        : 1024 4K pages
</span><br>
<span class="quotelev2">&gt; &gt; clflush size    : 64
</span><br>
<span class="quotelev2">&gt; &gt; cache_alignment : 64
</span><br>
<span class="quotelev2">&gt; &gt; address sizes   : 40 bits physical, 48 bits virtual
</span><br>
<span class="quotelev2">&gt; &gt; power management: ts fid vid ttp
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; processor       : 2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ************************************************************
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; information of the ppc:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; configure:
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/usr/local --enable-static
</span><br>
<span class="quotelev2">&gt; &gt; --enable-ltdl-convenience --no-create --no-recursion
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; uname -a:
</span><br>
<span class="quotelev2">&gt; &gt; Linux baracus 2.6.18-5-powerpc #1 Sat Dec 22 21:05:48 UTC 2007 ppc
</span><br>
<span class="quotelev1">&gt; GNU/Linux
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; less /proc/cpuinfo:
</span><br>
<span class="quotelev2">&gt; &gt; processor       : 0
</span><br>
<span class="quotelev2">&gt; &gt; cpu             : 7410, altivec supported
</span><br>
<span class="quotelev2">&gt; &gt; temperature     : 23-25 C (uncalibrated)
</span><br>
<span class="quotelev2">&gt; &gt; clock           : 533.333332MHz
</span><br>
<span class="quotelev2">&gt; &gt; revision        : 0.3 (pvr 800c 1103)
</span><br>
<span class="quotelev2">&gt; &gt; bogomips        : 66.30
</span><br>
<span class="quotelev2">&gt; &gt; timebase        : 33290001
</span><br>
<span class="quotelev2">&gt; &gt; platform        : PowerMac
</span><br>
<span class="quotelev2">&gt; &gt; machine         : PowerMac3,4
</span><br>
<span class="quotelev2">&gt; &gt; motherboard     : PowerMac3,4 MacRISC2 MacRISC Power Macintosh
</span><br>
<span class="quotelev2">&gt; &gt; detected as     : 69 (PowerMac G4 Silver)
</span><br>
<span class="quotelev2">&gt; &gt; pmac flags      : 00000010
</span><br>
<span class="quotelev2">&gt; &gt; L2 cache        : 1024K unified
</span><br>
<span class="quotelev2">&gt; &gt; pmac-generation : NewWorld
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ************************************************************
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; information of the sparc:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; configure:
</span><br>
<span class="quotelev2">&gt; &gt; ./configure CFLAGS=-mv8plus CXXFLAGS=-mv8plus FFLAGS=-mv8plus
</span><br>
<span class="quotelev2">&gt; &gt; FCFLAGS=-mv8plus --prefix=/usr/local --enable-static
</span><br>
<span class="quotelev2">&gt; &gt; --enable-ltdl-convenience --no-create --no-recursion
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; uname -a:
</span><br>
<span class="quotelev2">&gt; &gt; Linux murdock 2.6.22-14-sparc64-smp #1 SMP Tue Dec 18 05:40:10 UTC
</span><br>
<span class="quotelev2">&gt; &gt; 2007 sparc64 GNU/Linux
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; less /proc/cpuinfo:
</span><br>
<span class="quotelev2">&gt; &gt; cpu             : TI UltraSparc III (Cheetah)
</span><br>
<span class="quotelev2">&gt; &gt; fpu             : UltraSparc III integrated FPU
</span><br>
<span class="quotelev2">&gt; &gt; prom            : OBP 4.16.4 2004/12/18 05:18
</span><br>
<span class="quotelev2">&gt; &gt; type            : sun4u
</span><br>
<span class="quotelev2">&gt; &gt; ncpus probed    : 2
</span><br>
<span class="quotelev2">&gt; &gt; ncpus active    : 2
</span><br>
<span class="quotelev2">&gt; &gt; D$ parity tl1   : 0
</span><br>
<span class="quotelev2">&gt; &gt; I$ parity tl1   : 0
</span><br>
<span class="quotelev2">&gt; &gt; Cpu0ClkTck      : 000000002cb41780
</span><br>
<span class="quotelev2">&gt; &gt; Cpu1ClkTck      : 000000002cb41780
</span><br>
<span class="quotelev2">&gt; &gt; MMU Type        : Cheetah
</span><br>
<span class="quotelev2">&gt; &gt; State:
</span><br>
<span class="quotelev2">&gt; &gt; CPU0:           online
</span><br>
<span class="quotelev2">&gt; &gt; CPU1:           online
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance for your help
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Viele Gr&#195;&#188;&#195;&#159;e / Kind regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Patrick Heckeler
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Teckstr. 6
</span><br>
<span class="quotelev2">&gt; &gt; 72074 T&#195;&#188;bingen
</span><br>
<span class="quotelev2">&gt; &gt; Germany
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mobil: +49172 / 719 23 24
</span><br>
<span class="quotelev2">&gt; &gt; email: pheckeler [at] gmail [dot] com
</span><br>
<span class="quotelev2">&gt; &gt; skype: p_heckeler
</span><br>
<span class="quotelev2">&gt; &gt; ICQ: 200910972
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;  users mailing list
</span><br>
<span class="quotelev1">&gt;  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Viele Gr&#195;&#188;&#195;&#159;e
Patrick Heckeler
Teckstr. 6
72074 T&#195;&#188;bingen
Germany
Mobil: +49172 / 719 23 24
email: pheckeler [at] gmail [dot] com
skype: p_heckeler
ICQ: 200910972



</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5306/config.log.amd64">config.log.amd64</a>
</ul>
<!-- attachment="config.log.amd64" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5306/config.log.ppc">config.log.ppc</a>
</ul>
<!-- attachment="config.log.ppc" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5306/config.log.sparc">config.log.sparc</a>
</ul>
<!-- attachment="config.log.sparc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5307.php">clarkmpi_at_[hidden]: "[OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>Previous message:</strong> <a href="5305.php">Will Portnoy: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<li><strong>In reply to:</strong> <a href="5301.php">George Bosilca: "Re: [OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine"</a>
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
