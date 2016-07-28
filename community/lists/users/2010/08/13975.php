<?
$subject_val = "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 11 11:10:01 2010" -->
<!-- isoreceived="20100811151001" -->
<!-- sent="Wed, 11 Aug 2010 11:09:55 -0400" -->
<!-- isosent="20100811150955" -->
<!-- name="pooja varshneya" -->
<!-- email="pooja.varshneya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hyper-thread architecture effect on MPI jobs" -->
<!-- id="AANLkTinaiQOM5i3sjiSFsyFjrpOQ37XBig+523KEVTBO_at_mail.gmail.com" -->
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
<strong>From:</strong> pooja varshneya (<em>pooja.varshneya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-11 11:09:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13976.php">Gus Correa: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Previous message:</strong> <a href="13974.php">Saygin Arkan: "[OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>In reply to:</strong> <a href="13974.php">Saygin Arkan: "[OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13976.php">Gus Correa: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Saygin,
<br>
<p>You can use mpstat tool to see the load on each core at runtime.
<br>
<p>Do you know exactly which particular calls are taking longer time ?
<br>
You can run just those two computations (one at a time) on a different
<br>
machine and check if the other machines have similar or lesser
<br>
computation time.
<br>
<p>- Pooja
<br>
<p>On Wed, Aug 11, 2010 at 10:55 AM, Saygin Arkan &lt;saygenius_at_[hidden]&gt; wrote:
<br>
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
<span class="quotelev1">&gt; vendor_id&#160;&#160;&#160;&#160;&#160;&#160; : GenuineIntel
</span><br>
<span class="quotelev1">&gt; cpu family&#160;&#160;&#160;&#160;&#160; : 6
</span><br>
<span class="quotelev1">&gt; model&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; : 23
</span><br>
<span class="quotelev1">&gt; model name&#160;&#160;&#160;&#160;&#160; : Intel(R) Core(TM)2 Quad&#160; CPU&#160;&#160; Q9300&#160; @ 2.50GHz
</span><br>
<span class="quotelev1">&gt; stepping&#160;&#160;&#160;&#160;&#160;&#160;&#160; : 7
</span><br>
<span class="quotelev1">&gt; cache size&#160;&#160;&#160;&#160;&#160; : 3072 KB
</span><br>
<span class="quotelev1">&gt; physical id&#160;&#160;&#160;&#160; : 0
</span><br>
<span class="quotelev1">&gt; siblings&#160;&#160;&#160;&#160;&#160;&#160;&#160; : 4
</span><br>
<span class="quotelev1">&gt; core id&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; : 3
</span><br>
<span class="quotelev1">&gt; cpu cores&#160;&#160;&#160;&#160;&#160;&#160; : 4
</span><br>
<span class="quotelev1">&gt; fpu&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; : yes
</span><br>
<span class="quotelev1">&gt; fpu_exception&#160;&#160; : yes
</span><br>
<span class="quotelev1">&gt; cpuid level&#160;&#160;&#160;&#160; : 10
</span><br>
<span class="quotelev1">&gt; wp&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; : yes
</span><br>
<span class="quotelev1">&gt; flags&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca
</span><br>
<span class="quotelev1">&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe syscall nx lm
</span><br>
<span class="quotelev1">&gt; constant_tsc arch_perfmon pebs bts rep_good pni monitor ds_cpl vmx smx est
</span><br>
<span class="quotelev1">&gt; tm2 ssse3 cx16 xtpr sse4_1 lahf_lm
</span><br>
<span class="quotelev1">&gt; bogomips&#160;&#160;&#160;&#160;&#160;&#160;&#160; : 4999.40
</span><br>
<span class="quotelev1">&gt; clflush size&#160;&#160;&#160; : 64
</span><br>
<span class="quotelev1">&gt; cache_alignment : 64
</span><br>
<span class="quotelev1">&gt; address sizes&#160;&#160; : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the problematic, hyper-threaded 2 machines are as follows, os228 and
</span><br>
<span class="quotelev1">&gt; os229:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; vendor_id&#160;&#160;&#160;&#160;&#160;&#160; : GenuineIntel
</span><br>
<span class="quotelev1">&gt; cpu family&#160;&#160;&#160;&#160;&#160; : 6
</span><br>
<span class="quotelev1">&gt; model&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; : 26
</span><br>
<span class="quotelev1">&gt; model name&#160;&#160;&#160;&#160;&#160; : Intel(R) Core(TM) i7 CPU&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 920&#160; @ 2.67GHz
</span><br>
<span class="quotelev1">&gt; stepping&#160;&#160;&#160;&#160;&#160;&#160;&#160; : 5
</span><br>
<span class="quotelev1">&gt; cache size&#160;&#160;&#160;&#160;&#160; : 8192 KB
</span><br>
<span class="quotelev1">&gt; physical id&#160;&#160;&#160;&#160; : 0
</span><br>
<span class="quotelev1">&gt; siblings&#160;&#160;&#160;&#160;&#160;&#160;&#160; : 8
</span><br>
<span class="quotelev1">&gt; core id&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; : 3
</span><br>
<span class="quotelev1">&gt; cpu cores&#160;&#160;&#160;&#160;&#160;&#160; : 4
</span><br>
<span class="quotelev1">&gt; fpu&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; : yes
</span><br>
<span class="quotelev1">&gt; fpu_exception&#160;&#160; : yes
</span><br>
<span class="quotelev1">&gt; cpuid level&#160;&#160;&#160;&#160; : 11
</span><br>
<span class="quotelev1">&gt; wp&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; : yes
</span><br>
<span class="quotelev1">&gt; flags&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca
</span><br>
<span class="quotelev1">&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe syscall nx
</span><br>
<span class="quotelev1">&gt; rdtscp lm constant_tsc arch_perfmon pebs bts rep_good pni monitor ds_cpl vmx
</span><br>
<span class="quotelev1">&gt; est tm2 ssse3 cx16 xtpr sse4_1 sse4_2 popcnt lahf_lm ida
</span><br>
<span class="quotelev1">&gt; bogomips&#160;&#160;&#160;&#160;&#160;&#160;&#160; : 5396.88
</span><br>
<span class="quotelev1">&gt; clflush size&#160;&#160;&#160; : 64
</span><br>
<span class="quotelev1">&gt; cache_alignment : 64
</span><br>
<span class="quotelev1">&gt; address sizes&#160;&#160; : 36 bits physical, 48 bits virtual
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
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os221 RANK(1)&#160;&#160;&#160; :38
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os222 RANK(2)&#160;&#160;&#160; :38
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os224 RANK(3)&#160;&#160;&#160; :38
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os228 RANK(4)&#160;&#160;&#160; :37
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os229 RANK(5)&#160;&#160;&#160; :34
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os223 RANK(6)&#160;&#160;&#160; :38
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os221 RANK(7)&#160;&#160;&#160; :39
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os222 RANK(8)&#160;&#160;&#160; :37
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os224 RANK(9)&#160;&#160;&#160; :38
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os228 RANK(10)&#160;&#160;&#160; :48
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os229 RANK(11)&#160;&#160;&#160; :35
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os223 RANK(12)&#160;&#160;&#160; :38
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os221 RANK(13)&#160;&#160;&#160; :37
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50673 DEBUG [0x7fcadf98c740] - os222 RANK(14)&#160;&#160;&#160; :37
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50673 DEBUG [0x7fcadf98c740] - os224 RANK(15)&#160;&#160;&#160; :38
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50673 DEBUG [0x7fcadf98c740] - os228 RANK(16)&#160;&#160;&#160; :43
</span><br>
<span class="quotelev1">&gt; sec
</span><br>
<span class="quotelev1">&gt; 2010-08-05 14:30:58,926 50673 DEBUG [0x7fcadf98c740] - os229 RANK(17)&#160;&#160;&#160; :35
</span><br>
<span class="quotelev1">&gt; sec
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
<span class="quotelev1">&gt; :256 sec
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
<span class="quotelev1">&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os229 RANK(17)
</span><br>
<span class="quotelev1">&gt; :250 sec
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Saygin
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13976.php">Gus Correa: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Previous message:</strong> <a href="13974.php">Saygin Arkan: "[OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>In reply to:</strong> <a href="13974.php">Saygin Arkan: "[OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13976.php">Gus Correa: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
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
