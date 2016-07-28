<?
$subject_val = "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 11 11:24:23 2010" -->
<!-- isoreceived="20100811152423" -->
<!-- sent="Wed, 11 Aug 2010 08:23:16 -0700" -->
<!-- isosent="20100811152316" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hyper-thread architecture effect on MPI jobs" -->
<!-- id="4C62C064.5080901_at_oracle.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-11 11:23:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13978.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13976.php">Gus Correa: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>In reply to:</strong> <a href="13974.php">Saygin Arkan: "[OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13982.php">Saygin Arkan: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Reply:</strong> <a href="13982.php">Saygin Arkan: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
The way MPI processes are being assigned to hardware threads is perhaps
neither controlled nor optimal.&nbsp; On the HT nodes, two processes may end
up sharing the same core, with poorer performance.<br>
<br>
Try submitting your job like this<br>
<br>
% cat myrankfile1<br>
rank&nbsp; 0=os223 slot=0<br>
rank&nbsp; 1=os221 slot=0<br>
rank&nbsp; 2=os222 slot=0<br>
rank&nbsp; 3=os224 slot=0<br>
rank&nbsp; 4=os228 slot=0<br>
rank&nbsp; 5=os229 slot=0<br>
rank&nbsp; 6=os223 slot=1<br>
rank&nbsp; 7=os221 slot=1<br>
rank&nbsp; 8=os222 slot=1<br>
rank&nbsp; 9=os224 slot=1<br>
rank 10=os228 slot=1<br>
rank 11=os229 slot=1<br>
rank 12=os223 slot=2<br>
rank 13=os221 slot=2<br>
rank 14=os222 slot=2<br>
rank 15=os224 slot=2<br>
rank 16=os228 slot=2<br>
rank 17=os229 slot=2<br>
% mpirun -host os221,os222,os223,os224,os228,os229 -np 18 --rankfile
myrankfile1 ./a.out<br>
<br>
You can also try<br>
<br>
% cat myrankfile2<br>
rank&nbsp; 0=os223 slot=0<br>
rank&nbsp; 1=os221 slot=0<br>
rank&nbsp; 2=os222 slot=0<br>
rank&nbsp; 3=os224 slot=0<br>
rank&nbsp; 4=os228 slot=0<br>
rank&nbsp; 5=os229 slot=0<br>
rank&nbsp; 6=os223 slot=1<br>
rank&nbsp; 7=os221 slot=1<br>
rank&nbsp; 8=os222 slot=1<br>
rank&nbsp; 9=os224 slot=1<br>
rank 10=os228 slot=2<br>
rank 11=os229 slot=2<br>
rank 12=os223 slot=2<br>
rank 13=os221 slot=2<br>
rank 14=os222 slot=2<br>
rank 15=os224 slot=2<br>
rank 16=os228 slot=4<br>
rank 17=os229 slot=4<br>
% mpirun -host os221,os222,os223,os224,os228,os229 -np 18 --rankfile
myrankfile2 ./a.out<br>
<br>
which one reproduces your problem and which one avoids it depends on
how the BIOS numbers your HTs.&nbsp; Once you can confirm you understand the
problem, you (with the help of this list) can devise a solution
approach for your situation.<br>
<br>
<br>
Saygin Arkan wrote:
<blockquote
 cite="midAANLkTimLVPKtsbXEKoA8diTSAU6k2FLu4jLjYW5fBv4D@mail.gmail.com"
 type="cite">Hello,<br>
  <br>
I'm running mpi jobs in non-homogeneous cluster. 4 of my machines have
the following properties, os221, os222, os223, os224:<br>
  <br>
  <font><font size="2">vendor_id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : GenuineIntel<br>
cpu family&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 6<br>
model&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 23<br>
model name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Intel(R) Core(TM)2 Quad&nbsp; CPU&nbsp;&nbsp; Q9300&nbsp; @ 2.50GHz<br>
stepping&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 7<br>
cache size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 3072 KB<br>
physical id&nbsp;&nbsp;&nbsp;&nbsp; : 0<br>
siblings&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 4<br>
core id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 3<br>
cpu cores&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 4<br>
fpu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : yes<br>
fpu_exception&nbsp;&nbsp; : yes<br>
cpuid level&nbsp;&nbsp;&nbsp;&nbsp; : 10<br>
wp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : yes<br>
flags&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge
mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe
syscall nx lm constant_tsc arch_perfmon pebs bts rep_good pni monitor
ds_cpl vmx smx est tm2 ssse3 cx16 xtpr sse4_1 lahf_lm<br>
bogomips&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 4999.40<br>
clflush size&nbsp;&nbsp;&nbsp; : 64<br>
cache_alignment : 64<br>
address sizes&nbsp;&nbsp; : 36 bits physical, 48 bits virtual<br>
  <br>
and the problematic, hyper-threaded 2 machines are as follows, os228
and os229:<br>
  <br>
  </font></font><font><font size="2">vendor_id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : GenuineIntel<br>
cpu family&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 6<br>
model&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 26<br>
model name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Intel(R) Core(TM) i7 CPU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 920&nbsp; @ 2.67GHz<br>
stepping&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 5<br>
cache size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 8192 KB<br>
physical id&nbsp;&nbsp;&nbsp;&nbsp; : 0<br>
siblings&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 8<br>
core id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 3<br>
cpu cores&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 4<br>
fpu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : yes<br>
fpu_exception&nbsp;&nbsp; : yes<br>
cpuid level&nbsp;&nbsp;&nbsp;&nbsp; : 11<br>
wp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : yes<br>
flags&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge
mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe
syscall nx rdtscp lm constant_tsc arch_perfmon pebs bts rep_good pni
monitor ds_cpl vmx est tm2 ssse3 cx16 xtpr sse4_1 sse4_2 popcnt lahf_lm
ida<br>
bogomips&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 5396.88<br>
clflush size&nbsp;&nbsp;&nbsp; : 64<br>
cache_alignment : 64<br>
address sizes&nbsp;&nbsp; : 36 bits physical, 48 bits virtual<br>
  <br>
  <br>
The problem is: those 2 machines seem to be having 8 cores (virtually,
actualy core number is 4).<br>
When I submit an MPI job, I calculated the comparison times in the
cluster. I got strange results.<br>
  <br>
I'm running the job on 6 nodes, 3 core per node. And sometimes ( I can
say 1/3 of the tests) os228 or os229 returns strange results. 2 cores
are slow (slower than the first 4 nodes) but the 3rd core is extremely
fast.<br>
  <br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - RANK(0) Printing
Times...<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os221 RANK(1)&nbsp;&nbsp;&nbsp;
:38 sec<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os222 RANK(2)&nbsp;&nbsp;&nbsp;
:38 sec<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os224 RANK(3)&nbsp;&nbsp;&nbsp;
:38 sec<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os228 RANK(4)&nbsp;&nbsp;&nbsp;
:37 sec<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os229 RANK(5)&nbsp;&nbsp;&nbsp;
:34 sec<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os223 RANK(6)&nbsp;&nbsp;&nbsp;
:38 sec<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os221 RANK(7)&nbsp;&nbsp;&nbsp;
:39 sec<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os222 RANK(8)&nbsp;&nbsp;&nbsp;
:37 sec<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os224 RANK(9)&nbsp;&nbsp;&nbsp;
:38 sec<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os228
RANK(10)&nbsp;&nbsp;&nbsp; :<b>48 sec</b><br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os229
RANK(11)&nbsp;&nbsp;&nbsp; :35 sec<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os223
RANK(12)&nbsp;&nbsp;&nbsp; :38 sec<br>
2010-08-05 14:30:58,926 50672 DEBUG [0x7fcadf98c740] - os221
RANK(13)&nbsp;&nbsp;&nbsp; :37 sec<br>
2010-08-05 14:30:58,926 50673 DEBUG [0x7fcadf98c740] - os222
RANK(14)&nbsp;&nbsp;&nbsp; :37 sec<br>
2010-08-05 14:30:58,926 50673 DEBUG [0x7fcadf98c740] - os224
RANK(15)&nbsp;&nbsp;&nbsp; :38 sec<br>
2010-08-05 14:30:58,926 50673 DEBUG [0x7fcadf98c740] - os228
RANK(16)&nbsp;&nbsp;&nbsp; :<b>43 sec</b><br>
2010-08-05 14:30:58,926 50673 DEBUG [0x7fcadf98c740] - os229
RANK(17)&nbsp;&nbsp;&nbsp; :35 sec<br>
  </font></font><font><font size="2">TOTAL CORRELATION TIME: 48 sec</font></font><br>
  <font><font size="2"><br>
  <br>
or another test:<br>
  <br>
2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - RANK(0)
Printing Times...<br>
2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os221
RANK(1)&nbsp;&nbsp;&nbsp; :170 sec<br>
2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os222
RANK(2)&nbsp;&nbsp;&nbsp; :161 sec<br>
2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os224
RANK(3)&nbsp;&nbsp;&nbsp; :158 sec<br>
2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os228
RANK(4)&nbsp;&nbsp;&nbsp; :142 sec<br>
2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os229
RANK(5)&nbsp;&nbsp;&nbsp; :<b>256 sec</b><br>
2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os223
RANK(6)&nbsp;&nbsp;&nbsp; :156 sec<br>
2010-08-09 15:28:10,947 272904 DEBUG [0x7f27dec27740] - os221
RANK(7)&nbsp;&nbsp;&nbsp; :162 sec<br>
2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os222
RANK(8)&nbsp;&nbsp;&nbsp; :159 sec<br>
2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os224
RANK(9)&nbsp;&nbsp;&nbsp; :168 sec<br>
2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os228
RANK(10)&nbsp;&nbsp;&nbsp; :141 sec<br>
2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os229
RANK(11)&nbsp;&nbsp;&nbsp; :136 sec<br>
2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os223
RANK(12)&nbsp;&nbsp;&nbsp; :173 sec<br>
2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os221
RANK(13)&nbsp;&nbsp;&nbsp; :164 sec<br>
2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os222
RANK(14)&nbsp;&nbsp;&nbsp; :171 sec<br>
2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os224
RANK(15)&nbsp;&nbsp;&nbsp; :156 sec<br>
2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os228
RANK(16)&nbsp;&nbsp;&nbsp; :136 sec<br>
2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - os229
RANK(17)&nbsp;&nbsp;&nbsp; :<b>250 sec</b><br>
2010-08-09 15:28:10,947 272905 DEBUG [0x7f27dec27740] - TOTAL
CORRELATION TIME: 256 sec<br>
  <br>
  </font></font><br>
Do you have any idea? Why it is happening?<br>
I assume that it gives 2 jobs to 2 cores in os229, but actually those 2
are one core.<br>
Do you have any idea? If you have, how can I fix it? because the
longest time affects the whole time information. 100 sec delay is too
much for 250 sec comparison time,<br>
and it might have finish around 160 sec.<br>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13978.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13976.php">Gus Correa: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>In reply to:</strong> <a href="13974.php">Saygin Arkan: "[OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13982.php">Saygin Arkan: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Reply:</strong> <a href="13982.php">Saygin Arkan: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
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
