<?
$subject_val = "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 29 09:19:15 2009" -->
<!-- isoreceived="20091229141915" -->
<!-- sent="Tue, 29 Dec 2009 19:19:09 +0500" -->
<!-- isosent="20091229141909" -->
<!-- name="ilya zelenchuk" -->
<!-- email="ilya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3" -->
<!-- id="24da22320912290619o2f991ea1n99e02b37b018e412_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4B38F738.5090209_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3<br>
<strong>From:</strong> ilya zelenchuk (<em>ilya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-29 09:19:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11649.php">Ralph Castain: "Re: [OMPI users] MTT -trivial :All tests are not getting passed"</a>
<li><strong>Previous message:</strong> <a href="11647.php">vishal shorghar: "[OMPI users] MTT -trivial :All tests are not getting passed"</a>
<li><strong>In reply to:</strong> <a href="11641.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11650.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>Reply:</strong> <a href="11650.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, Gus!
<br>
<p>Sorry for the lack of debug info.
<br>
I have 28 nodes. Each node have 2 processors Xeon 2.4 GHz with 4 Gb RAM.
<br>
OpenMPI 1.3.3 was compiled as:
<br>
CC=icc CFLAGS=&quot; -O3&quot; CXX=icpc CXXFLAGS=&quot; -O3&quot; F77=ifort FFLAGS=&quot; -O3&quot;
<br>
FC=ifort FCFLAGS=&quot; -O3&quot; ./configure --prefix=/opt/openmpi/intel/
<br>
--enable-debug --enable-mpi-threads --disable-ipv6
<br>
<p>2009/12/28 Gus Correa &lt;gus_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi Ilya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you recompile HPL with OpenMPI, or just launched the MPICH2
</span><br>
<span class="quotelev1">&gt; executable with the OpenMPI mpiexec?
</span><br>
<span class="quotelev1">&gt; You probably know this, but you cannot mix different MPIs at
</span><br>
<span class="quotelev1">&gt; compile and run time.
</span><br>
Yes, I know this bug. I compile HPL with OpenMPI and run with this one.
<br>
For the MPICH2, I recompile HPL.
<br>
<p><span class="quotelev1">&gt; Also, the HPL maximum problem size (N) depends on how much
</span><br>
<span class="quotelev1">&gt; memory/RAM you have.
</span><br>
<span class="quotelev1">&gt; If you make N too big, the arrays don't fit in the RAM,
</span><br>
<span class="quotelev1">&gt; you get into memory paging, which is no good for MPI.
</span><br>
<span class="quotelev1">&gt; How much RAM do you have?
</span><br>
4 Gb on each node. Also, I've watched meminfo through the top.
<br>
No swap.
<br>
<p><span class="quotelev1">&gt; N=17920 would require about 3.2GB, if I did the math right.
</span><br>
<span class="quotelev1">&gt; A rule of thumb is maximum N = sqrt(0.8 * RAM_in_bytes / 8)
</span><br>
<span class="quotelev1">&gt; Have you tried smaller values (above 10000, but below 17920)?
</span><br>
<span class="quotelev1">&gt; For which N does it start to break?
</span><br>
With 8960 work's almost fine. I have same errors just once. They
<br>
disappear after rebooting cluster :)
<br>
But if I set problem size to 11200 - errors comes again. At this point
<br>
rebooting doesn't help.
<br>
<p>BTW: in output i have:
<br>
<p>===
<br>
type 11 count ints 82 count disp 81 count datatype 81
<br>
ints:     81 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800
<br>
2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800
<br>
2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800
<br>
2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800
<br>
2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800
<br>
2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 6481
<br>
MPI_Aint: 0 22400 44800 67200 89600 112000 134400 156800 179200 201600
<br>
224000 246400 268800 291200 313600 336000 358400 380800 403200 425600
<br>
448000 470400 492800 515200 537600 560000 582400 604800 627200 649600
<br>
672000 694400 716800 739200 761600 784000 806400 828800 851200 873600
<br>
896000 918400 940800 963200 985600 1008000 1030400 1052800 1075200
<br>
1097600 1120000 1142400 1164800 1187200 1209600 1232000 1254400
<br>
1276800 1299200 1321600 1344000 1366400 1388800 1411200 1433600
<br>
1456000 1478400 1500800 1523200 1545600 1568000 1590400 1612800
<br>
1635200 1657600 1680000 1702400 1724800 1747200 1769600 1343143936
<br>
types:    (81 * MPI_DOUBLE)
<br>
type 11 count ints 82 count disp 81 count datatype 81
<br>
ints:     81 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800
<br>
2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800
<br>
2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800
<br>
2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800
<br>
2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800
<br>
2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 6481
<br>
MPI_Aint: 0 22400 44800 67200 89600 112000 134400 156800 179200 201600
<br>
224000 246400 268800 291200 313600 336000 358400 380800 403200 425600
<br>
448000 470400 492800 515200 537600 560000 582400 604800 627200 649600
<br>
672000 694400 716800 739200 761600 784000 806400 828800 851200 873600
<br>
896000 918400 940800 963200 985600 1008000 1030400 1052800 1075200
<br>
1097600 1120000 1142400 1164800 1187200 1209600 1232000 1254400
<br>
1276800 1299200 1321600 1344000 1366400 1388800 1411200 1433600
<br>
1456000 1478400 1500800 1523200 1545600 1568000 1590400 1612800
<br>
1635200 1657600 1680000 1702400 1724800 1747200 1769600 1343143936
<br>
types:    (81 * MPI_DOUBLE)
<br>
...
<br>
===
<br>
<p>Interesting, but it seems that HPL running just fine. But with this
<br>
warning messages in stdout and stderr.
<br>
Also, i've running HPL with OPENMPI 1.4 - no warning and errors.
<br>
<p><span class="quotelev1">&gt; The HPL TUNING file may help:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.netlib.org/benchmark/hpl/tuning.html">http://www.netlib.org/benchmark/hpl/tuning.html</a>
</span><br>
Yes, it's good one!
<br>
<p><span class="quotelev1">&gt; Good luck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My two cents,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ilya zelenchuk wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Good day, everyone!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have problem while running HPL benchmark with OPENMPI 1.3.3.
</span><br>
<span class="quotelev2">&gt;&gt; When problem size (Ns) smaller 10000 - all is good. But when I set Ns
</span><br>
<span class="quotelev2">&gt;&gt; to 17920 (for example) - I get errors:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ===
</span><br>
<span class="quotelev2">&gt;&gt; [ums1:05086] ../../ompi/datatype/datatype_pack.h:37
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Pointer 0xb27752c0 size 4032 is outside [0xb27752c0,0x10aeac8] for
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;base ptr 0xb27752c0 count 1 and data
</span><br>
<span class="quotelev2">&gt;&gt; [ums1:05086] Datatype 0x83a0618[] size 5735048 align 4 id 0 length 244
</span><br>
<span class="quotelev2">&gt;&gt; used 81
</span><br>
<span class="quotelev2">&gt;&gt; true_lb 0 true_ub 1318295560 (true_extent 1318295560) lb 0 ub
</span><br>
<span class="quotelev2">&gt;&gt; 1318295560 (extent 1318295560)
</span><br>
<span class="quotelev2">&gt;&gt; nbElems 716881 loops 0 flags 102 (commited )-c-----GD--[---][---]
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; contain MPI_DOUBLE
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[ C ][FLT] &#194;&#160; &#194;&#160; MPI_DOUBLE count 8880 disp 0x0 (0) extent 8
</span><br>
<span class="quotelev2">&gt;&gt; (size 71040)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[ C ][FLT] &#194;&#160; &#194;&#160; MPI_DOUBLE count 8880 disp 0x11800 (71680)
</span><br>
<span class="quotelev2">&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[ C ][FLT] &#194;&#160; &#194;&#160; MPI_DOUBLE count 8880 disp 0x23000 (143360)
</span><br>
<span class="quotelev2">&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[ C ][FLT] &#194;&#160; &#194;&#160; MPI_DOUBLE count 8880 disp 0x34800 (215040)
</span><br>
<span class="quotelev2">&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[ C ][FLT] &#194;&#160; &#194;&#160; MPI_DOUBLE count 8880 disp 0x46000 (286720)
</span><br>
<span class="quotelev2">&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[ C ][FLT] &#194;&#160; &#194;&#160; MPI_DOUBLE count 8880 disp 0x57800 (358400)
</span><br>
<span class="quotelev2">&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[ C ][FLT] &#194;&#160; &#194;&#160; MPI_DOUBLE count 8880 disp 0x69000 (430080)
</span><br>
<span class="quotelev2">&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[ C ][FLT] &#194;&#160; &#194;&#160; MPI_DOUBLE count 8880 disp 0x7a800 (501760)
</span><br>
<span class="quotelev2">&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[ C ][FLT] &#194;&#160; &#194;&#160; MPI_DOUBLE count 8880 disp 0x8c000 (573440)
</span><br>
<span class="quotelev2">&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[ C ][FLT] &#194;&#160; &#194;&#160; MPI_DOUBLE count 8880 disp 0x9d800 (645120)
</span><br>
<span class="quotelev2">&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[ C ][FLT] &#194;&#160; &#194;&#160; MPI_DOUBLE count 8880 disp 0xaf000 (716800)
</span><br>
<span class="quotelev2">&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[ C ][FLT] &#194;&#160; &#194;&#160; MPI_DOUBLE count 8880 disp 0xc0800 (788480)
</span><br>
<span class="quotelev2">&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[ C ][FLT] &#194;&#160; &#194;&#160; MPI_DOUBLE count 8880 disp 0xd2000 (860160)
</span><br>
<span class="quotelev2">&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[ C ][FLT] &#194;&#160; &#194;&#160; MPI_DOUBLE count 8880 disp 0xe3800 (931840)
</span><br>
<span class="quotelev2">&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[ C ][FLT] &#194;&#160; &#194;&#160; MPI_DOUBLE count 8880 disp 0xf5000 (1003520)
</span><br>
<span class="quotelev2">&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[ C ][FLT] &#194;&#160; &#194;&#160; MPI_DOUBLE count 8880 disp 0x106800
</span><br>
<span class="quotelev2">&gt;&gt; (1075200) extent 8 (size 71040)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[ C ][FLT] &#194;&#160; &#194;&#160; MPI_DOUBLE count 8880 disp 0x118000
</span><br>
<span class="quotelev2">&gt;&gt; (1146880) extent 8 (size 71040)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[ C ][FLT] &#194;&#160; &#194;&#160; MPI_DOUBLE count 8880 disp 0x129800
</span><br>
<span class="quotelev2">&gt;&gt; (1218560) extent 8 (size 71040)
</span><br>
<span class="quotelev2">&gt;&gt; ....
</span><br>
<span class="quotelev2">&gt;&gt; ===
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is my HPL.dat:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ===
</span><br>
<span class="quotelev2">&gt;&gt; HPLinpack benchmark input file
</span><br>
<span class="quotelev2">&gt;&gt; Innovative Computing Laboratory, University of Tennessee
</span><br>
<span class="quotelev2">&gt;&gt; HPL.out &#194;&#160; &#194;&#160; &#194;&#160;output file name (if any)
</span><br>
<span class="quotelev2">&gt;&gt; 6 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;device out (6=stdout,7=stderr,file)
</span><br>
<span class="quotelev2">&gt;&gt; 1 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;# of problems sizes (N)
</span><br>
<span class="quotelev2">&gt;&gt; 17920 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Ns
</span><br>
<span class="quotelev2">&gt;&gt; 1 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;# of NBs
</span><br>
<span class="quotelev2">&gt;&gt; 80 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; NBs
</span><br>
<span class="quotelev2">&gt;&gt; 0 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;PMAP process mapping (0=Row-,1=Column-major)
</span><br>
<span class="quotelev2">&gt;&gt; 1 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;# of process grids (P x Q)
</span><br>
<span class="quotelev2">&gt;&gt; 2 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Ps
</span><br>
<span class="quotelev2">&gt;&gt; 14 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Qs
</span><br>
<span class="quotelev2">&gt;&gt; 16.0 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; threshold
</span><br>
<span class="quotelev2">&gt;&gt; 1 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;# of panel fact
</span><br>
<span class="quotelev2">&gt;&gt; 2 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;PFACTs (0=left, 1=Crout, 2=Right)
</span><br>
<span class="quotelev2">&gt;&gt; 1 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;# of recursive stopping criterium
</span><br>
<span class="quotelev2">&gt;&gt; 4 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;NBMINs (&gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt; 1 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;# of panels in recursion
</span><br>
<span class="quotelev2">&gt;&gt; 2 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;NDIVs
</span><br>
<span class="quotelev2">&gt;&gt; 1 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;# of recursive panel fact.
</span><br>
<span class="quotelev2">&gt;&gt; 2 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;RFACTs (0=left, 1=Crout, 2=Right)
</span><br>
<span class="quotelev2">&gt;&gt; 1 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;# of broadcast
</span><br>
<span class="quotelev2">&gt;&gt; 2 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;BCASTs (0=1rg,1=1rM,2=2rg,3=2rM,4=Lng,5=LnM)
</span><br>
<span class="quotelev2">&gt;&gt; 1 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;# of lookahead depth
</span><br>
<span class="quotelev2">&gt;&gt; 1 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;DEPTHs (&gt;=0)
</span><br>
<span class="quotelev2">&gt;&gt; 2 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;SWAP (0=bin-exch,1=long,2=mix)
</span><br>
<span class="quotelev2">&gt;&gt; 64 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; swapping threshold
</span><br>
<span class="quotelev2">&gt;&gt; 0 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;L1 in (0=transposed,1=no-transposed) form
</span><br>
<span class="quotelev2">&gt;&gt; 0 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;U &#194;&#160;in (0=transposed,1=no-transposed) form
</span><br>
<span class="quotelev2">&gt;&gt; 1 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Equilibration (0=no,1=yes)
</span><br>
<span class="quotelev2">&gt;&gt; 8 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;memory alignment in double (&gt; 0)
</span><br>
<span class="quotelev2">&gt;&gt; ===
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've run HPL with this HPL.dat by using MPICH2 - work's well.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="11649.php">Ralph Castain: "Re: [OMPI users] MTT -trivial :All tests are not getting passed"</a>
<li><strong>Previous message:</strong> <a href="11647.php">vishal shorghar: "[OMPI users] MTT -trivial :All tests are not getting passed"</a>
<li><strong>In reply to:</strong> <a href="11641.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11650.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>Reply:</strong> <a href="11650.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
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
