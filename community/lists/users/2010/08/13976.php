<?
$subject_val = "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 11 11:19:08 2010" -->
<!-- isoreceived="20100811151908" -->
<!-- sent="Wed, 11 Aug 2010 11:18:51 -0400" -->
<!-- isosent="20100811151851" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hyper-thread architecture effect on MPI jobs" -->
<!-- id="4C62BF5B.5050601_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimLVPKtsbXEKoA8diTSAU6k2FLu4jLjYW5fBv4D_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-11 11:18:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13977.php">Eugene Loh: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Previous message:</strong> <a href="13975.php">pooja varshneya: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>In reply to:</strong> <a href="13974.php">Saygin Arkan: "[OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13983.php">Saygin Arkan: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Reply:</strong> <a href="13983.php">Saygin Arkan: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Saygin
<br>
<p>You could:
<br>
<p>1) turn off hyperthreading (on BIOS), or
<br>
<p>2) use the mpirun options (you didn't send your mpirun command)
<br>
to distribute the processes across the nodes, cores, etc.
<br>
&quot;man mpirun&quot; is a good resource, see the explanations about
<br>
the -byslot, -bynode, -loadbalance options.
<br>
<p>3) In addition, you can use the mca parameters to set processor affinity
<br>
in the mpirun command line &quot;mpirun -mca mpi_paffinity_alone 1 ...&quot;
<br>
I don't know how this will play in a hyperthreaded machine,
<br>
but it works fine in our dual processor quad-core computers
<br>
(not hyperthreaded).
<br>
<p>Depending on your code, hyperthreading may not help performance anyway.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>Saygin Arkan wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running mpi jobs in non-homogeneous cluster. 4 of my machines have 
</span><br>
<span class="quotelev1">&gt; the following properties, os221, os222, os223, os224:
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
<span class="quotelev1">&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge 
</span><br>
<span class="quotelev1">&gt; mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe 
</span><br>
<span class="quotelev1">&gt; syscall nx lm constant_tsc arch_perfmon pebs bts rep_good pni monitor 
</span><br>
<span class="quotelev1">&gt; ds_cpl vmx smx est tm2 ssse3 cx16 xtpr sse4_1 lahf_lm
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
<span class="quotelev1">&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge 
</span><br>
<span class="quotelev1">&gt; mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe 
</span><br>
<span class="quotelev1">&gt; syscall nx rdtscp lm constant_tsc arch_perfmon pebs bts rep_good pni 
</span><br>
<span class="quotelev1">&gt; monitor ds_cpl vmx est tm2 ssse3 cx16 xtpr sse4_1 sse4_2 popcnt lahf_lm ida
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
<span class="quotelev1">&gt; When I submit an MPI job, I calculated the comparison times in the 
</span><br>
<span class="quotelev1">&gt; cluster. I got strange results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running the job on 6 nodes, 3 core per node. And sometimes ( I can 
</span><br>
<span class="quotelev1">&gt; say 1/3 of the tests) os228 or os229 returns strange results. 2 cores 
</span><br>
<span class="quotelev1">&gt; are slow (slower than the first 4 nodes) but the 3rd core is extremely fast.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - RANK(0) Printing 
</span><br>
<span class="quotelev1">&gt; Times...
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os221 RANK(1)    
</span><br>
<span class="quotelev1">&gt; :38 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os222 RANK(2)    
</span><br>
<span class="quotelev1">&gt; :38 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os224 RANK(3)    
</span><br>
<span class="quotelev1">&gt; :38 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os228 RANK(4)    
</span><br>
<span class="quotelev1">&gt; :37 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os229 RANK(5)    
</span><br>
<span class="quotelev1">&gt; :34 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os223 RANK(6)    
</span><br>
<span class="quotelev1">&gt; :38 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os221 RANK(7)    
</span><br>
<span class="quotelev1">&gt; :39 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os222 RANK(8)    
</span><br>
<span class="quotelev1">&gt; :37 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os224 RANK(9)    
</span><br>
<span class="quotelev1">&gt; :38 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os228 RANK(10)    
</span><br>
<span class="quotelev1">&gt; :*48 sec*
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
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50673 DEBUG [0x7fcadf98c740] - os228 RANK(16)    
</span><br>
<span class="quotelev1">&gt; :*43 sec*
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
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os229 RANK(5)    
</span><br>
<span class="quotelev1">&gt; :*256 sec*
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
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os228 
</span><br>
<span class="quotelev1">&gt; RANK(10)    :141 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os229 
</span><br>
<span class="quotelev1">&gt; RANK(11)    :136 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os223 
</span><br>
<span class="quotelev1">&gt; RANK(12)    :173 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os221 
</span><br>
<span class="quotelev1">&gt; RANK(13)    :164 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os222 
</span><br>
<span class="quotelev1">&gt; RANK(14)    :171 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os224 
</span><br>
<span class="quotelev1">&gt; RANK(15)    :156 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os228 
</span><br>
<span class="quotelev1">&gt; RANK(16)    :136 sec
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os229 
</span><br>
<span class="quotelev1">&gt; RANK(17)    :*250 sec*
</span><br>
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - TOTAL 
</span><br>
<span class="quotelev1">&gt; CORRELATION TIME: 256 sec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have any idea? Why it is happening?
</span><br>
<span class="quotelev1">&gt; I assume that it gives 2 jobs to 2 cores in os229, but actually those 2 
</span><br>
<span class="quotelev1">&gt; are one core.
</span><br>
<span class="quotelev1">&gt; Do you have any idea? If you have, how can I fix it? because the longest 
</span><br>
<span class="quotelev1">&gt; time affects the whole time information. 100 sec delay is too much for 
</span><br>
<span class="quotelev1">&gt; 250 sec comparison time,
</span><br>
<span class="quotelev1">&gt; and it might have finish around 160 sec.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saygin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13977.php">Eugene Loh: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Previous message:</strong> <a href="13975.php">pooja varshneya: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>In reply to:</strong> <a href="13974.php">Saygin Arkan: "[OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13983.php">Saygin Arkan: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Reply:</strong> <a href="13983.php">Saygin Arkan: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
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
