<?
$subject_val = "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 04:39:33 2010" -->
<!-- isoreceived="20100812083933" -->
<!-- sent="Thu, 12 Aug 2010 11:39:27 +0300" -->
<!-- isosent="20100812083927" -->
<!-- name="Saygin Arkan" -->
<!-- email="saygenius_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hyper-thread architecture effect on MPI jobs" -->
<!-- id="AANLkTinoA446zZWETCm-ww0BufZ_8gbjyhV7c9JOKF9O_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C62BF5B.5050601_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2010-08-12 04:39:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13984.php">lyb: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>Previous message:</strong> <a href="13982.php">Saygin Arkan: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>In reply to:</strong> <a href="13976.php">Gus Correa: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13986.php">Saygin Arkan: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Reply:</strong> <a href="13986.php">Saygin Arkan: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
<p>1 - first of all, turning off hyper-threading is not an option. And it gives
<br>
pretty good results if I can find a way to arrange the cores.
<br>
<p>2 - Actually Eugene (one of her messages in this thread) had suggested to
<br>
arrange the slots.
<br>
I did and wrote the results, it delivers the cores randomly, nothing
<br>
changed.
<br>
but I haven't checked loadbalance option. -byslot or -bynode is not gonna
<br>
help.
<br>
<p>3 - Could you give me a bit more detail how affinity works? or what it does
<br>
actually?
<br>
<p>Thanks a lot for your suggestions
<br>
<p>Saygin
<br>
<p>On Wed, Aug 11, 2010 at 6:18 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Saygin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You could:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) turn off hyperthreading (on BIOS), or
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) use the mpirun options (you didn't send your mpirun command)
</span><br>
<span class="quotelev1">&gt; to distribute the processes across the nodes, cores, etc.
</span><br>
<span class="quotelev1">&gt; &quot;man mpirun&quot; is a good resource, see the explanations about
</span><br>
<span class="quotelev1">&gt; the -byslot, -bynode, -loadbalance options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) In addition, you can use the mca parameters to set processor affinity
</span><br>
<span class="quotelev1">&gt; in the mpirun command line &quot;mpirun -mca mpi_paffinity_alone 1 ...&quot;
</span><br>
<span class="quotelev1">&gt; I don't know how this will play in a hyperthreaded machine,
</span><br>
<span class="quotelev1">&gt; but it works fine in our dual processor quad-core computers
</span><br>
<span class="quotelev1">&gt; (not hyperthreaded).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Depending on your code, hyperthreading may not help performance anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Saygin Arkan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm running mpi jobs in non-homogeneous cluster. 4 of my machines have the
</span><br>
<span class="quotelev2">&gt;&gt; following properties, os221, os222, os223, os224:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; vendor_id       : GenuineIntel
</span><br>
<span class="quotelev2">&gt;&gt; cpu family      : 6
</span><br>
<span class="quotelev2">&gt;&gt; model           : 23
</span><br>
<span class="quotelev2">&gt;&gt; model name      : Intel(R) Core(TM)2 Quad  CPU   Q9300  @ 2.50GHz
</span><br>
<span class="quotelev2">&gt;&gt; stepping        : 7
</span><br>
<span class="quotelev2">&gt;&gt; cache size      : 3072 KB
</span><br>
<span class="quotelev2">&gt;&gt; physical id     : 0
</span><br>
<span class="quotelev2">&gt;&gt; siblings        : 4
</span><br>
<span class="quotelev2">&gt;&gt; core id         : 3
</span><br>
<span class="quotelev2">&gt;&gt; cpu cores       : 4
</span><br>
<span class="quotelev2">&gt;&gt; fpu             : yes
</span><br>
<span class="quotelev2">&gt;&gt; fpu_exception   : yes
</span><br>
<span class="quotelev2">&gt;&gt; cpuid level     : 10
</span><br>
<span class="quotelev2">&gt;&gt; wp              : yes
</span><br>
<span class="quotelev2">&gt;&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca
</span><br>
<span class="quotelev2">&gt;&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe syscall nx lm
</span><br>
<span class="quotelev2">&gt;&gt; constant_tsc arch_perfmon pebs bts rep_good pni monitor ds_cpl vmx smx est
</span><br>
<span class="quotelev2">&gt;&gt; tm2 ssse3 cx16 xtpr sse4_1 lahf_lm
</span><br>
<span class="quotelev2">&gt;&gt; bogomips        : 4999.40
</span><br>
<span class="quotelev2">&gt;&gt; clflush size    : 64
</span><br>
<span class="quotelev2">&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev2">&gt;&gt; address sizes   : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and the problematic, hyper-threaded 2 machines are as follows, os228 and
</span><br>
<span class="quotelev2">&gt;&gt; os229:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; vendor_id       : GenuineIntel
</span><br>
<span class="quotelev2">&gt;&gt; cpu family      : 6
</span><br>
<span class="quotelev2">&gt;&gt; model           : 26
</span><br>
<span class="quotelev2">&gt;&gt; model name      : Intel(R) Core(TM) i7 CPU         920  @ 2.67GHz
</span><br>
<span class="quotelev2">&gt;&gt; stepping        : 5
</span><br>
<span class="quotelev2">&gt;&gt; cache size      : 8192 KB
</span><br>
<span class="quotelev2">&gt;&gt; physical id     : 0
</span><br>
<span class="quotelev2">&gt;&gt; siblings        : 8
</span><br>
<span class="quotelev2">&gt;&gt; core id         : 3
</span><br>
<span class="quotelev2">&gt;&gt; cpu cores       : 4
</span><br>
<span class="quotelev2">&gt;&gt; fpu             : yes
</span><br>
<span class="quotelev2">&gt;&gt; fpu_exception   : yes
</span><br>
<span class="quotelev2">&gt;&gt; cpuid level     : 11
</span><br>
<span class="quotelev2">&gt;&gt; wp              : yes
</span><br>
<span class="quotelev2">&gt;&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca
</span><br>
<span class="quotelev2">&gt;&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe syscall nx
</span><br>
<span class="quotelev2">&gt;&gt; rdtscp lm constant_tsc arch_perfmon pebs bts rep_good pni monitor ds_cpl vmx
</span><br>
<span class="quotelev2">&gt;&gt; est tm2 ssse3 cx16 xtpr sse4_1 sse4_2 popcnt lahf_lm ida
</span><br>
<span class="quotelev2">&gt;&gt; bogomips        : 5396.88
</span><br>
<span class="quotelev2">&gt;&gt; clflush size    : 64
</span><br>
<span class="quotelev2">&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev2">&gt;&gt; address sizes   : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is: those 2 machines seem to be having 8 cores (virtually,
</span><br>
<span class="quotelev2">&gt;&gt; actualy core number is 4).
</span><br>
<span class="quotelev2">&gt;&gt; When I submit an MPI job, I calculated the comparison times in the
</span><br>
<span class="quotelev2">&gt;&gt; cluster. I got strange results.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm running the job on 6 nodes, 3 core per node. And sometimes ( I can say
</span><br>
<span class="quotelev2">&gt;&gt; 1/3 of the tests) os228 or os229 returns strange results. 2 cores are slow
</span><br>
<span class="quotelev2">&gt;&gt; (slower than the first 4 nodes) but the 3rd core is extremely fast.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - RANK(0) Printing
</span><br>
<span class="quotelev2">&gt;&gt; Times...
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os221 RANK(1)
</span><br>
<span class="quotelev2">&gt;&gt;  :38 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os222 RANK(2)
</span><br>
<span class="quotelev2">&gt;&gt;  :38 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os224 RANK(3)
</span><br>
<span class="quotelev2">&gt;&gt;  :38 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os228 RANK(4)
</span><br>
<span class="quotelev2">&gt;&gt;  :37 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os229 RANK(5)
</span><br>
<span class="quotelev2">&gt;&gt;  :34 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os223 RANK(6)
</span><br>
<span class="quotelev2">&gt;&gt;  :38 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os221 RANK(7)
</span><br>
<span class="quotelev2">&gt;&gt;  :39 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os222 RANK(8)
</span><br>
<span class="quotelev2">&gt;&gt;  :37 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os224 RANK(9)
</span><br>
<span class="quotelev2">&gt;&gt;  :38 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os228 RANK(10)
</span><br>
<span class="quotelev2">&gt;&gt;  :*48 sec*
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os229 RANK(11)
</span><br>
<span class="quotelev2">&gt;&gt;  :35 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os223 RANK(12)
</span><br>
<span class="quotelev2">&gt;&gt;  :38 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os221 RANK(13)
</span><br>
<span class="quotelev2">&gt;&gt;  :37 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-05 14:30:58,926 50673 DEBUG [0x7fcadf98c740] - os222 RANK(14)
</span><br>
<span class="quotelev2">&gt;&gt;  :37 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-05 14:30:58,926 50673 DEBUG [0x7fcadf98c740] - os224 RANK(15)
</span><br>
<span class="quotelev2">&gt;&gt;  :38 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-05 14:30:58,926 50673 DEBUG [0x7fcadf98c740] - os228 RANK(16)
</span><br>
<span class="quotelev2">&gt;&gt;  :*43 sec*
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-05 14:30:58,926 50673 DEBUG [0x7fcadf98c740] - os229 RANK(17)
</span><br>
<span class="quotelev2">&gt;&gt;  :35 sec
</span><br>
<span class="quotelev2">&gt;&gt; TOTAL CORRELATION TIME: 48 sec
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; or another test:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - RANK(0) Printing
</span><br>
<span class="quotelev2">&gt;&gt; Times...
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os221 RANK(1)
</span><br>
<span class="quotelev2">&gt;&gt;  :170 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os222 RANK(2)
</span><br>
<span class="quotelev2">&gt;&gt;  :161 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os224 RANK(3)
</span><br>
<span class="quotelev2">&gt;&gt;  :158 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os228 RANK(4)
</span><br>
<span class="quotelev2">&gt;&gt;  :142 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os229 RANK(5)
</span><br>
<span class="quotelev2">&gt;&gt;  :*256 sec*
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os223 RANK(6)
</span><br>
<span class="quotelev2">&gt;&gt;  :156 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os221 RANK(7)
</span><br>
<span class="quotelev2">&gt;&gt;  :162 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os222 RANK(8)
</span><br>
<span class="quotelev2">&gt;&gt;  :159 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os224 RANK(9)
</span><br>
<span class="quotelev2">&gt;&gt;  :168 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os228 RANK(10)
</span><br>
<span class="quotelev2">&gt;&gt;  :141 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os229 RANK(11)
</span><br>
<span class="quotelev2">&gt;&gt;  :136 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os223 RANK(12)
</span><br>
<span class="quotelev2">&gt;&gt;  :173 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os221 RANK(13)
</span><br>
<span class="quotelev2">&gt;&gt;  :164 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os222 RANK(14)
</span><br>
<span class="quotelev2">&gt;&gt;  :171 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os224 RANK(15)
</span><br>
<span class="quotelev2">&gt;&gt;  :156 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os228 RANK(16)
</span><br>
<span class="quotelev2">&gt;&gt;  :136 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os229 RANK(17)
</span><br>
<span class="quotelev2">&gt;&gt;  :*250 sec*
</span><br>
<span class="quotelev2">&gt;&gt; 2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - TOTAL CORRELATION
</span><br>
<span class="quotelev2">&gt;&gt; TIME: 256 sec
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you have any idea? Why it is happening?
</span><br>
<span class="quotelev2">&gt;&gt; I assume that it gives 2 jobs to 2 cores in os229, but actually those 2
</span><br>
<span class="quotelev2">&gt;&gt; are one core.
</span><br>
<span class="quotelev2">&gt;&gt; Do you have any idea? If you have, how can I fix it? because the longest
</span><br>
<span class="quotelev2">&gt;&gt; time affects the whole time information. 100 sec delay is too much for 250
</span><br>
<span class="quotelev2">&gt;&gt; sec comparison time,
</span><br>
<span class="quotelev2">&gt;&gt; and it might have finish around 160 sec.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Saygin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13983/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13984.php">lyb: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>Previous message:</strong> <a href="13982.php">Saygin Arkan: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>In reply to:</strong> <a href="13976.php">Gus Correa: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13986.php">Saygin Arkan: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Reply:</strong> <a href="13986.php">Saygin Arkan: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
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
