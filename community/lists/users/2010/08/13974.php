<?
$subject_val = "[OMPI users] Hyper-thread architecture effect on MPI jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 11 10:55:17 2010" -->
<!-- isoreceived="20100811145517" -->
<!-- sent="Wed, 11 Aug 2010 17:55:11 +0300" -->
<!-- isosent="20100811145511" -->
<!-- name="Saygin Arkan" -->
<!-- email="saygenius_at_[hidden]" -->
<!-- subject="[OMPI users] Hyper-thread architecture effect on MPI jobs" -->
<!-- id="AANLkTimLVPKtsbXEKoA8diTSAU6k2FLu4jLjYW5fBv4D_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Hyper-thread architecture effect on MPI jobs<br>
<strong>From:</strong> Saygin Arkan (<em>saygenius_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-11 10:55:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13975.php">pooja varshneya: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Previous message:</strong> <a href="13973.php">Ashley Pittman: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13975.php">pooja varshneya: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Reply:</strong> <a href="13975.php">pooja varshneya: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Reply:</strong> <a href="13976.php">Gus Correa: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Reply:</strong> <a href="13977.php">Eugene Loh: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm running mpi jobs in non-homogeneous cluster. 4 of my machines have the
<br>
following properties, os221, os222, os223, os224:
<br>
<p>vendor_id       : GenuineIntel
<br>
cpu family      : 6
<br>
model           : 23
<br>
model name      : Intel(R) Core(TM)2 Quad  CPU   Q9300  @ 2.50GHz
<br>
stepping        : 7
<br>
cache size      : 3072 KB
<br>
physical id     : 0
<br>
siblings        : 4
<br>
core id         : 3
<br>
cpu cores       : 4
<br>
fpu             : yes
<br>
fpu_exception   : yes
<br>
cpuid level     : 10
<br>
wp              : yes
<br>
flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca
<br>
cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe syscall nx lm
<br>
constant_tsc arch_perfmon pebs bts rep_good pni monitor ds_cpl vmx smx est
<br>
tm2 ssse3 cx16 xtpr sse4_1 lahf_lm
<br>
bogomips        : 4999.40
<br>
clflush size    : 64
<br>
cache_alignment : 64
<br>
address sizes   : 36 bits physical, 48 bits virtual
<br>
<p>and the problematic, hyper-threaded 2 machines are as follows, os228 and
<br>
os229:
<br>
<p>vendor_id       : GenuineIntel
<br>
cpu family      : 6
<br>
model           : 26
<br>
model name      : Intel(R) Core(TM) i7 CPU         920  @ 2.67GHz
<br>
stepping        : 5
<br>
cache size      : 8192 KB
<br>
physical id     : 0
<br>
siblings        : 8
<br>
core id         : 3
<br>
cpu cores       : 4
<br>
fpu             : yes
<br>
fpu_exception   : yes
<br>
cpuid level     : 11
<br>
wp              : yes
<br>
flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca
<br>
cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe syscall nx
<br>
rdtscp lm constant_tsc arch_perfmon pebs bts rep_good pni monitor ds_cpl vmx
<br>
est tm2 ssse3 cx16 xtpr sse4_1 sse4_2 popcnt lahf_lm ida
<br>
bogomips        : 5396.88
<br>
clflush size    : 64
<br>
cache_alignment : 64
<br>
address sizes   : 36 bits physical, 48 bits virtual
<br>
<p><p>The problem is: those 2 machines seem to be having 8 cores (virtually,
<br>
actualy core number is 4).
<br>
When I submit an MPI job, I calculated the comparison times in the cluster.
<br>
I got strange results.
<br>
<p>I'm running the job on 6 nodes, 3 core per node. And sometimes ( I can say
<br>
1/3 of the tests) os228 or os229 returns strange results. 2 cores are slow
<br>
(slower than the first 4 nodes) but the 3rd core is extremely fast.
<br>
<p>2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - RANK(0) Printing
<br>
Times...
<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os221 RANK(1)    :38
<br>
sec
<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os222 RANK(2)    :38
<br>
sec
<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os224 RANK(3)    :38
<br>
sec
<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os228 RANK(4)    :37
<br>
sec
<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os229 RANK(5)    :34
<br>
sec
<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os223 RANK(6)    :38
<br>
sec
<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os221 RANK(7)    :39
<br>
sec
<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os222 RANK(8)    :37
<br>
sec
<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os224 RANK(9)    :38
<br>
sec
<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os228 RANK(10)    :*48
<br>
sec*
<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os229 RANK(11)    :35
<br>
sec
<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os223 RANK(12)    :38
<br>
sec
<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os221 RANK(13)    :37
<br>
sec
<br>
2010-08-05 14:30:58,926 50673 DEBUG [0x7fcadf98c740] - os222 RANK(14)    :37
<br>
sec
<br>
2010-08-05 14:30:58,926 50673 DEBUG [0x7fcadf98c740] - os224 RANK(15)    :38
<br>
sec
<br>
2010-08-05 14:30:58,926 50673 DEBUG [0x7fcadf98c740] - os228 RANK(16)    :*43
<br>
sec*
<br>
2010-08-05 14:30:58,926 50673 DEBUG [0x7fcadf98c740] - os229 RANK(17)    :35
<br>
sec
<br>
TOTAL CORRELATION TIME: 48 sec
<br>
<p><p>or another test:
<br>
<p>2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - RANK(0) Printing
<br>
Times...
<br>
2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os221 RANK(1)
<br>
:170 sec
<br>
2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os222 RANK(2)
<br>
:161 sec
<br>
2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os224 RANK(3)
<br>
:158 sec
<br>
2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os228 RANK(4)
<br>
:142 sec
<br>
2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os229 RANK(5)    :*256
<br>
sec*
<br>
2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os223 RANK(6)
<br>
:156 sec
<br>
2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os221 RANK(7)
<br>
:162 sec
<br>
2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os222 RANK(8)
<br>
:159 sec
<br>
2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os224 RANK(9)
<br>
:168 sec
<br>
2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os228 RANK(10)
<br>
:141 sec
<br>
2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os229 RANK(11)
<br>
:136 sec
<br>
2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os223 RANK(12)
<br>
:173 sec
<br>
2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os221 RANK(13)
<br>
:164 sec
<br>
2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os222 RANK(14)
<br>
:171 sec
<br>
2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os224 RANK(15)
<br>
:156 sec
<br>
2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os228 RANK(16)
<br>
:136 sec
<br>
2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os229 RANK(17)    :*250
<br>
sec*
<br>
2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - TOTAL CORRELATION
<br>
TIME: 256 sec
<br>
<p><p>Do you have any idea? Why it is happening?
<br>
I assume that it gives 2 jobs to 2 cores in os229, but actually those 2 are
<br>
one core.
<br>
Do you have any idea? If you have, how can I fix it? because the longest
<br>
time affects the whole time information. 100 sec delay is too much for 250
<br>
sec comparison time,
<br>
and it might have finish around 160 sec.
<br>
<p><p><p><pre>
-- 
Saygin
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13974/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13975.php">pooja varshneya: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Previous message:</strong> <a href="13973.php">Ashley Pittman: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13975.php">pooja varshneya: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Reply:</strong> <a href="13975.php">pooja varshneya: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Reply:</strong> <a href="13976.php">Gus Correa: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Reply:</strong> <a href="13977.php">Eugene Loh: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
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
