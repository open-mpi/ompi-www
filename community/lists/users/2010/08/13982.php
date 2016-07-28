<?
$subject_val = "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 04:29:52 2010" -->
<!-- isoreceived="20100812082952" -->
<!-- sent="Thu, 12 Aug 2010 11:29:46 +0300" -->
<!-- isosent="20100812082946" -->
<!-- name="Saygin Arkan" -->
<!-- email="saygenius_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hyper-thread architecture effect on MPI jobs" -->
<!-- id="AANLkTinknVzB4=PBOM-54TfJj4GzwU=hrkHOVLYnktxR_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C62C064.5080901_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hyper-thread architecture effect on MPI jobs<br>
<strong>From:</strong> Saygin Arkan (<em>saygenius_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-12 04:29:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13983.php">Saygin Arkan: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Previous message:</strong> <a href="13981.php">Shiqing Fan: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>In reply to:</strong> <a href="13977.php">Eugene Loh: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
for
<br>
...
<br>
rank 13=os221 slot=2
<br>
rank 14=os222 slot=2
<br>
rank 15=os224 slot=2
<br>
rank 16=os228 slot=4
<br>
rank 17=os229 slot=4
<br>
<p>I've tried and here are the results, same thing happened.
<br>
2010-08-12 11:09:28,814 59759 DEBUG [0x7fbd3fdce740] - RANK(0) Printing
<br>
Times...
<br>
2010-08-12 11:09:28,814 59759 DEBUG [0x7fbd3fdce740] - os221 RANK(1)    :24
<br>
sec
<br>
2010-08-12 11:09:28,814 59759 DEBUG [0x7fbd3fdce740] - os222 RANK(2)    :27
<br>
sec
<br>
2010-08-12 11:09:28,814 59759 DEBUG [0x7fbd3fdce740] - os224 RANK(3)    :27
<br>
sec
<br>
2010-08-12 11:09:28,814 59759 DEBUG [0x7fbd3fdce740] - os228 RANK(4)    :41
<br>
sec
<br>
2010-08-12 11:09:28,814 59759 DEBUG [0x7fbd3fdce740] - os229 RANK(5)    :42
<br>
sec
<br>
2010-08-12 11:09:28,815 59759 DEBUG [0x7fbd3fdce740] - os223 RANK(6)    :27
<br>
sec
<br>
2010-08-12 11:09:28,815 59759 DEBUG [0x7fbd3fdce740] - os221 RANK(7)    :28
<br>
sec
<br>
2010-08-12 11:09:28,815 59759 DEBUG [0x7fbd3fdce740] - os222 RANK(8)    :22
<br>
sec
<br>
2010-08-12 11:09:28,815 59759 DEBUG [0x7fbd3fdce740] - os224 RANK(9)    :22
<br>
sec
<br>
2010-08-12 11:09:28,815 59759 DEBUG [0x7fbd3fdce740] - os228 RANK(10)    :*40
<br>
sec*
<br>
2010-08-12 11:09:28,815 59759 DEBUG [0x7fbd3fdce740] - os229 RANK(11)    :24
<br>
sec
<br>
2010-08-12 11:09:28,815 59759 DEBUG [0x7fbd3fdce740] - os223 RANK(12)    :26
<br>
sec
<br>
2010-08-12 11:09:28,815 59759 DEBUG [0x7fbd3fdce740] - os221 RANK(13)    :28
<br>
sec
<br>
2010-08-12 11:09:28,815 59759 DEBUG [0x7fbd3fdce740] - os222 RANK(14)    :27
<br>
sec
<br>
2010-08-12 11:09:28,815 59759 DEBUG [0x7fbd3fdce740] - os224 RANK(15)    :27
<br>
sec
<br>
2010-08-12 11:09:28,815 59759 DEBUG [0x7fbd3fdce740] - os228 RANK(16)    :19
<br>
sec
<br>
2010-08-12 11:09:28,815 59759 DEBUG [0x7fbd3fdce740] - os229 RANK(17)    :*43
<br>
sec*
<br>
2010-08-12 11:09:28,815 59759 DEBUG [0x7fbd3fdce740] - TOTAL CORRELATION
<br>
TIME: 43 sec
<br>
<p>for
<br>
...
<br>
rank 12=os223 slot=2
<br>
rank 13=os221 slot=2
<br>
rank 14=os222 slot=2
<br>
rank 15=os224 slot=2
<br>
rank 16=os228 slot=2
<br>
rank 17=os229 slot=2
<br>
<p>here are the results
<br>
2010-08-12 11:19:33,916 54609 DEBUG [0x7f22881b5740] - os221 RANK(1)    :23
<br>
sec
<br>
2010-08-12 11:19:33,916 54609 DEBUG [0x7f22881b5740] - os222 RANK(2)    :23
<br>
sec
<br>
2010-08-12 11:19:33,916 54609 DEBUG [0x7f22881b5740] - os224 RANK(3)    :24
<br>
sec
<br>
2010-08-12 11:19:33,916 54609 DEBUG [0x7f22881b5740] - os228 RANK(4)    :20
<br>
sec
<br>
2010-08-12 11:19:33,916 54609 DEBUG [0x7f22881b5740] - os229 RANK(5)    :20
<br>
sec
<br>
2010-08-12 11:19:33,916 54609 DEBUG [0x7f22881b5740] - os223 RANK(6)    :24
<br>
sec
<br>
2010-08-12 11:19:33,916 54609 DEBUG [0x7f22881b5740] - os221 RANK(7)    :23
<br>
sec
<br>
2010-08-12 11:19:33,916 54609 DEBUG [0x7f22881b5740] - os222 RANK(8)    :22
<br>
sec
<br>
2010-08-12 11:19:33,916 54609 DEBUG [0x7f22881b5740] - os224 RANK(9)    :22
<br>
sec
<br>
2010-08-12 11:19:33,917 54609 DEBUG [0x7f22881b5740] - os228 RANK(10)    :19
<br>
sec
<br>
2010-08-12 11:19:33,917 54609 DEBUG [0x7f22881b5740] - os229 RANK(11)    :*35
<br>
sec*
<br>
2010-08-12 11:19:33,917 54609 DEBUG [0x7f22881b5740] - os223 RANK(12)    :23
<br>
sec
<br>
2010-08-12 11:19:33,917 54609 DEBUG [0x7f22881b5740] - os221 RANK(13)    :23
<br>
sec
<br>
2010-08-12 11:19:33,917 54609 DEBUG [0x7f22881b5740] - os222 RANK(14)    :23
<br>
sec
<br>
2010-08-12 11:19:33,917 54609 DEBUG [0x7f22881b5740] - os224 RANK(15)    :23
<br>
sec
<br>
2010-08-12 11:19:33,917 54609 DEBUG [0x7f22881b5740] - os228 RANK(16)    :19
<br>
sec
<br>
2010-08-12 11:19:33,917 54609 DEBUG [0x7f22881b5740] - os229 RANK(17)    :*37
<br>
sec*
<br>
<p>Again the same thing happened. I also tried to give the slots 0, 3, 7 and
<br>
some other combinations, but it didn't change the result. Sometimes it gave
<br>
pretty normal, then I got some strange ones again.
<br>
*I guess specifiying the slot number doesn't affect the BIOS rank
<br>
choice.*The last test was as follows:
<br>
<p>2010-08-12 11:25:02,599 55467 DEBUG [0x7f15af87a740] - os221 RANK(1)    :24
<br>
sec
<br>
2010-08-12 11:25:02,599 55467 DEBUG [0x7f15af87a740] - os222 RANK(2)    :23
<br>
sec
<br>
2010-08-12 11:25:02,599 55467 DEBUG [0x7f15af87a740] - os224 RANK(3)    :23
<br>
sec
<br>
*2010-08-12 11:25:02,599 55467 DEBUG [0x7f15af87a740] - os228 RANK(4)    :40
<br>
sec*
<br>
2010-08-12 11:25:02,599 55467 DEBUG [0x7f15af87a740] - os229 RANK(5)    :20
<br>
sec
<br>
2010-08-12 11:25:02,599 55467 DEBUG [0x7f15af87a740] - os223 RANK(6)    :24
<br>
sec
<br>
2010-08-12 11:25:02,599 55467 DEBUG [0x7f15af87a740] - os221 RANK(7)    :24
<br>
sec
<br>
2010-08-12 11:25:02,599 55467 DEBUG [0x7f15af87a740] - os222 RANK(8)    :22
<br>
sec
<br>
2010-08-12 11:25:02,599 55468 DEBUG [0x7f15af87a740] - os224 RANK(9)    :22
<br>
sec
<br>
2010-08-12 11:25:02,599 55468 DEBUG [0x7f15af87a740] - os228 RANK(10)    :20
<br>
sec
<br>
2010-08-12 11:25:02,599 55468 DEBUG [0x7f15af87a740] - os229 RANK(11)    :21
<br>
sec
<br>
2010-08-12 11:25:02,599 55468 DEBUG [0x7f15af87a740] - os223 RANK(12)    :23
<br>
sec
<br>
2010-08-12 11:25:02,599 55468 DEBUG [0x7f15af87a740] - os221 RANK(13)    :24
<br>
sec
<br>
2010-08-12 11:25:02,599 55468 DEBUG [0x7f15af87a740] - os222 RANK(14)    :24
<br>
sec
<br>
2010-08-12 11:25:02,599 55468 DEBUG [0x7f15af87a740] - os224 RANK(15)    :23
<br>
sec
<br>
2010-08-12 11:25:02,599 55468 DEBUG [0x7f15af87a740] - os228 RANK(16)    :38
<br>
sec
<br>
2010-08-12 11:25:02,599 55468 DEBUG [0x7f15af87a740] - os229 RANK(17)    :21
<br>
sec
<br>
2010-08-12 11:25:02,599 55468 DEBUG [0x7f15af87a740] - TOTAL CORRELATION
<br>
TIME: 40 sec
<br>
<p>Now I'm gonna try the other advices here. Such as mpstat, or -bynode etc. I
<br>
hope to find a solution.
<br>
Then I'm gonna post it here.
<br>
<p><p>On Wed, Aug 11, 2010 at 6:23 PM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  The way MPI processes are being assigned to hardware threads is perhaps
</span><br>
<span class="quotelev1">&gt; neither controlled nor optimal.  On the HT nodes, two processes may end up
</span><br>
<span class="quotelev1">&gt; sharing the same core, with poorer performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try submitting your job like this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % cat myrankfile1
</span><br>
<span class="quotelev1">&gt; rank  0=os223 slot=0
</span><br>
<span class="quotelev1">&gt; rank  1=os221 slot=0
</span><br>
<span class="quotelev1">&gt; rank  2=os222 slot=0
</span><br>
<span class="quotelev1">&gt; rank  3=os224 slot=0
</span><br>
<span class="quotelev1">&gt; rank  4=os228 slot=0
</span><br>
<span class="quotelev1">&gt; rank  5=os229 slot=0
</span><br>
<span class="quotelev1">&gt; rank  6=os223 slot=1
</span><br>
<span class="quotelev1">&gt; rank  7=os221 slot=1
</span><br>
<span class="quotelev1">&gt; rank  8=os222 slot=1
</span><br>
<span class="quotelev1">&gt; rank  9=os224 slot=1
</span><br>
<span class="quotelev1">&gt; rank 10=os228 slot=1
</span><br>
<span class="quotelev1">&gt; rank 11=os229 slot=1
</span><br>
<span class="quotelev1">&gt; rank 12=os223 slot=2
</span><br>
<span class="quotelev1">&gt; rank 13=os221 slot=2
</span><br>
<span class="quotelev1">&gt; rank 14=os222 slot=2
</span><br>
<span class="quotelev1">&gt; rank 15=os224 slot=2
</span><br>
<span class="quotelev1">&gt; rank 16=os228 slot=2
</span><br>
<span class="quotelev1">&gt; rank 17=os229 slot=2
</span><br>
<span class="quotelev1">&gt; % mpirun -host os221,os222,os223,os224,os228,os229 -np 18 --rankfile
</span><br>
<span class="quotelev1">&gt; myrankfile1 ./a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can also try
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % cat myrankfile2
</span><br>
<span class="quotelev1">&gt; rank  0=os223 slot=0
</span><br>
<span class="quotelev1">&gt; rank  1=os221 slot=0
</span><br>
<span class="quotelev1">&gt; rank  2=os222 slot=0
</span><br>
<span class="quotelev1">&gt; rank  3=os224 slot=0
</span><br>
<span class="quotelev1">&gt; rank  4=os228 slot=0
</span><br>
<span class="quotelev1">&gt; rank  5=os229 slot=0
</span><br>
<span class="quotelev1">&gt; rank  6=os223 slot=1
</span><br>
<span class="quotelev1">&gt; rank  7=os221 slot=1
</span><br>
<span class="quotelev1">&gt; rank  8=os222 slot=1
</span><br>
<span class="quotelev1">&gt; rank  9=os224 slot=1
</span><br>
<span class="quotelev1">&gt; rank 10=os228 slot=2
</span><br>
<span class="quotelev1">&gt; rank 11=os229 slot=2
</span><br>
<span class="quotelev1">&gt; rank 12=os223 slot=2
</span><br>
<span class="quotelev1">&gt; rank 13=os221 slot=2
</span><br>
<span class="quotelev1">&gt; rank 14=os222 slot=2
</span><br>
<span class="quotelev1">&gt; rank 15=os224 slot=2
</span><br>
<span class="quotelev1">&gt; rank 16=os228 slot=4
</span><br>
<span class="quotelev1">&gt; rank 17=os229 slot=4
</span><br>
<span class="quotelev1">&gt; % mpirun -host os221,os222,os223,os224,os228,os229 -np 18 --rankfile
</span><br>
<span class="quotelev1">&gt; myrankfile2 ./a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which one reproduces your problem and which one avoids it depends on how
</span><br>
<span class="quotelev1">&gt; the BIOS numbers your HTs.  Once you can confirm you understand the problem,
</span><br>
<span class="quotelev1">&gt; you (with the help of this list) can devise a solution approach for your
</span><br>
<span class="quotelev1">&gt; situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Saygin Arkan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running mpi jobs in non-homogeneous cluster. 4 of my machines have the
</span><br>
<span class="quotelev1">&gt; following properties, os221, os222, os223, os224:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; vendor_id       : GenuineIntel
</span><br>
<span class="quotelev1">&gt; cpu family      : 6
</span><br>
<span class="quotelev1">&gt; model           : 23
</span><br>
<span class="quotelev1">&gt; model name      : Intel(R) Core(TM)2 Quad  CPU   Q9300  @ 2.50GHz
</span><br>
<span class="quotelev1">&gt; stepping        : 7
</span><br>
<span class="quotelev1">&gt; cache size      : 3072 KB
</span><br>
<span class="quotelev1">&gt; physical id     : 0
</span><br>
<span class="quotelev1">&gt; siblings        : 4
</span><br>
<span class="quotelev1">&gt; core id         : 3
</span><br>
<span class="quotelev1">&gt; cpu cores       : 4
</span><br>
<span class="quotelev1">&gt; fpu             : yes
</span><br>
<span class="quotelev1">&gt; fpu_exception   : yes
</span><br>
<span class="quotelev1">&gt; cpuid level     : 10
</span><br>
<span class="quotelev1">&gt; wp              : yes
</span><br>
<span class="quotelev1">&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca
</span><br>
<span class="quotelev1">&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe syscall nx lm
</span><br>
<span class="quotelev1">&gt; constant_tsc arch_perfmon pebs bts rep_good pni monitor ds_cpl vmx smx est
</span><br>
<span class="quotelev1">&gt; tm2 ssse3 cx16 xtpr sse4_1 lahf_lm
</span><br>
<span class="quotelev1">&gt; bogomips        : 4999.40
</span><br>
<span class="quotelev1">&gt; clflush size    : 64
</span><br>
<span class="quotelev1">&gt; cache_alignment : 64
</span><br>
<span class="quotelev1">&gt; address sizes   : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the problematic, hyper-threaded 2 machines are as follows, os228 and
</span><br>
<span class="quotelev1">&gt; os229:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; vendor_id       : GenuineIntel
</span><br>
<span class="quotelev1">&gt; cpu family      : 6
</span><br>
<span class="quotelev1">&gt; model           : 26
</span><br>
<span class="quotelev1">&gt; model name      : Intel(R) Core(TM) i7 CPU         920  @ 2.67GHz
</span><br>
<span class="quotelev1">&gt; stepping        : 5
</span><br>
<span class="quotelev1">&gt; cache size      : 8192 KB
</span><br>
<span class="quotelev1">&gt; physical id     : 0
</span><br>
<span class="quotelev1">&gt; siblings        : 8
</span><br>
<span class="quotelev1">&gt; core id         : 3
</span><br>
<span class="quotelev1">&gt; cpu cores       : 4
</span><br>
<span class="quotelev1">&gt; fpu             : yes
</span><br>
<span class="quotelev1">&gt; fpu_exception   : yes
</span><br>
<span class="quotelev1">&gt; cpuid level     : 11
</span><br>
<span class="quotelev1">&gt; wp              : yes
</span><br>
<span class="quotelev1">&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca
</span><br>
<span class="quotelev1">&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe syscall nx
</span><br>
<span class="quotelev1">&gt; rdtscp lm constant_tsc arch_perfmon pebs bts rep_good pni monitor ds_cpl vmx
</span><br>
<span class="quotelev1">&gt; est tm2 ssse3 cx16 xtpr sse4_1 sse4_2 popcnt lahf_lm ida
</span><br>
<span class="quotelev1">&gt; bogomips        : 5396.88
</span><br>
<span class="quotelev1">&gt; clflush size    : 64
</span><br>
<span class="quotelev1">&gt; cache_alignment : 64
</span><br>
<span class="quotelev1">&gt; address sizes   : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is: those 2 machines seem to be having 8 cores (virtually,
</span><br>
<span class="quotelev1">&gt; actualy core number is 4).
</span><br>
<span class="quotelev1">&gt; When I submit an MPI job, I calculated the comparison times in the cluster.
</span><br>
<span class="quotelev1">&gt; I got strange results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running the job on 6 nodes, 3 core per node. And sometimes ( I can say
</span><br>
<span class="quotelev1">&gt; 1/3 of the tests) os228 or os229 returns strange results. 2 cores are slow
</span><br>
<span class="quotelev1">&gt; (slower than the first 4 nodes) but the 3rd core is extremely fast.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - RANK(0) Printing
</span><br>
<span class="quotelev1">&gt; Times...
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os221 RANK(1)    :38
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os222 RANK(2)    :38
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os224 RANK(3)    :38
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os228 RANK(4)    :37
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os229 RANK(5)    :34
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os223 RANK(6)    :38
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os221 RANK(7)    :39
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os222 RANK(8)    :37
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os224 RANK(9)    :38
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os228 RANK(10)    :
</span><br>
<span class="quotelev1">&gt; *48 sec*
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os229 RANK(11)
</span><br>
<span class="quotelev1">&gt; :35 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os223 RANK(12)
</span><br>
<span class="quotelev1">&gt; :38 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os221 RANK(13)
</span><br>
<span class="quotelev1">&gt; :37 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50673 DEBUG [0x7fcadf98c740] - os222 RANK(14)
</span><br>
<span class="quotelev1">&gt; :37 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50673 DEBUG [0x7fcadf98c740] - os224 RANK(15)
</span><br>
<span class="quotelev1">&gt; :38 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50673 DEBUG [0x7fcadf98c740] - os228 RANK(16)    :
</span><br>
<span class="quotelev1">&gt; *43 sec*
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50673 DEBUG [0x7fcadf98c740] - os229 RANK(17)
</span><br>
<span class="quotelev1">&gt; :35 sec
</span><br>
<span class="quotelev1">&gt; TOTAL CORRELATION TIME: 48 sec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or another test:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - RANK(0) Printing
</span><br>
<span class="quotelev1">&gt; Times...
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os221 RANK(1)
</span><br>
<span class="quotelev1">&gt; :170 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os222 RANK(2)
</span><br>
<span class="quotelev1">&gt; :161 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os224 RANK(3)
</span><br>
<span class="quotelev1">&gt; :158 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os228 RANK(4)
</span><br>
<span class="quotelev1">&gt; :142 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os229 RANK(5)    :
</span><br>
<span class="quotelev1">&gt; *256 sec*
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os223 RANK(6)
</span><br>
<span class="quotelev1">&gt; :156 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os221 RANK(7)
</span><br>
<span class="quotelev1">&gt; :162 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os222 RANK(8)
</span><br>
<span class="quotelev1">&gt; :159 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os224 RANK(9)
</span><br>
<span class="quotelev1">&gt; :168 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os228 RANK(10)
</span><br>
<span class="quotelev1">&gt; :141 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os229 RANK(11)
</span><br>
<span class="quotelev1">&gt; :136 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os223 RANK(12)
</span><br>
<span class="quotelev1">&gt; :173 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os221 RANK(13)
</span><br>
<span class="quotelev1">&gt; :164 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os222 RANK(14)
</span><br>
<span class="quotelev1">&gt; :171 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os224 RANK(15)
</span><br>
<span class="quotelev1">&gt; :156 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os228 RANK(16)
</span><br>
<span class="quotelev1">&gt; :136 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os229 RANK(17)    :
</span><br>
<span class="quotelev1">&gt; *250 sec*
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - TOTAL CORRELATION
</span><br>
<span class="quotelev1">&gt; TIME: 256 sec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any idea? Why it is happening?
</span><br>
<span class="quotelev1">&gt; I assume that it gives 2 jobs to 2 cores in os229, but actually those 2 are
</span><br>
<span class="quotelev1">&gt; one core.
</span><br>
<span class="quotelev1">&gt; Do you have any idea? If you have, how can I fix it? because the longest
</span><br>
<span class="quotelev1">&gt; time affects the whole time information. 100 sec delay is too much for 250
</span><br>
<span class="quotelev1">&gt; sec comparison time,
</span><br>
<span class="quotelev1">&gt; and it might have finish around 160 sec.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saygin
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13982/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13983.php">Saygin Arkan: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Previous message:</strong> <a href="13981.php">Shiqing Fan: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>In reply to:</strong> <a href="13977.php">Eugene Loh: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
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
