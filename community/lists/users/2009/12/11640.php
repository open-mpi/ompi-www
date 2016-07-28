<?
$subject_val = "[OMPI users] Problem with HPL while using OpenMPI 1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 28 09:57:36 2009" -->
<!-- isoreceived="20091228145736" -->
<!-- sent="Mon, 28 Dec 2009 19:57:31 +0500" -->
<!-- isosent="20091228145731" -->
<!-- name="ilya zelenchuk" -->
<!-- email="ilya_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with HPL while using OpenMPI 1.3.3" -->
<!-- id="24da22320912280657n3b688adeof5d1695bdb9b9aa6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem with HPL while using OpenMPI 1.3.3<br>
<strong>From:</strong> ilya zelenchuk (<em>ilya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-28 09:57:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11641.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="11639.php">Aaron Knister: "Re: [OMPI users] strange undefined references to mpi_sizeofXXX_ errors with pgi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11641.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>Reply:</strong> <a href="11641.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good day, everyone!
<br>
<p>I have problem while running HPL benchmark with OPENMPI 1.3.3.
<br>
When problem size (Ns) smaller 10000 - all is good. But when I set Ns
<br>
to 17920 (for example) - I get errors:
<br>
<p>===
<br>
[ums1:05086] ../../ompi/datatype/datatype_pack.h:37
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pointer 0xb27752c0 size 4032 is outside [0xb27752c0,0x10aeac8] for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base ptr 0xb27752c0 count 1 and data
<br>
[ums1:05086] Datatype 0x83a0618[] size 5735048 align 4 id 0 length 244 used 81
<br>
true_lb 0 true_ub 1318295560 (true_extent 1318295560) lb 0 ub
<br>
1318295560 (extent 1318295560)
<br>
nbElems 716881 loops 0 flags 102 (commited )-c-----GD--[---][---]
<br>
&nbsp;&nbsp;&nbsp;contain MPI_DOUBLE
<br>
--C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x0 (0) extent 8
<br>
(size 71040)
<br>
--C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x11800 (71680)
<br>
extent 8 (size 71040)
<br>
--C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x23000 (143360)
<br>
extent 8 (size 71040)
<br>
--C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x34800 (215040)
<br>
extent 8 (size 71040)
<br>
--C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x46000 (286720)
<br>
extent 8 (size 71040)
<br>
--C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x57800 (358400)
<br>
extent 8 (size 71040)
<br>
--C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x69000 (430080)
<br>
extent 8 (size 71040)
<br>
--C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x7a800 (501760)
<br>
extent 8 (size 71040)
<br>
--C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x8c000 (573440)
<br>
extent 8 (size 71040)
<br>
--C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x9d800 (645120)
<br>
extent 8 (size 71040)
<br>
--C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0xaf000 (716800)
<br>
extent 8 (size 71040)
<br>
--C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0xc0800 (788480)
<br>
extent 8 (size 71040)
<br>
--C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0xd2000 (860160)
<br>
extent 8 (size 71040)
<br>
--C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0xe3800 (931840)
<br>
extent 8 (size 71040)
<br>
--C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0xf5000 (1003520)
<br>
extent 8 (size 71040)
<br>
--C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x106800
<br>
(1075200) extent 8 (size 71040)
<br>
--C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x118000
<br>
(1146880) extent 8 (size 71040)
<br>
--C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x129800
<br>
(1218560) extent 8 (size 71040)
<br>
....
<br>
===
<br>
<p>Here is my HPL.dat:
<br>
<p>===
<br>
HPLinpack benchmark input file
<br>
Innovative Computing Laboratory, University of Tennessee
<br>
HPL.out      output file name (if any)
<br>
6            device out (6=stdout,7=stderr,file)
<br>
1            # of problems sizes (N)
<br>
17920        Ns
<br>
1            # of NBs
<br>
80           NBs
<br>
0            PMAP process mapping (0=Row-,1=Column-major)
<br>
1            # of process grids (P x Q)
<br>
2            Ps
<br>
14           Qs
<br>
16.0         threshold
<br>
1            # of panel fact
<br>
2            PFACTs (0=left, 1=Crout, 2=Right)
<br>
1            # of recursive stopping criterium
<br>
4            NBMINs (&gt;= 1)
<br>
1            # of panels in recursion
<br>
2            NDIVs
<br>
1            # of recursive panel fact.
<br>
2            RFACTs (0=left, 1=Crout, 2=Right)
<br>
1            # of broadcast
<br>
2            BCASTs (0=1rg,1=1rM,2=2rg,3=2rM,4=Lng,5=LnM)
<br>
1            # of lookahead depth
<br>
1            DEPTHs (&gt;=0)
<br>
2            SWAP (0=bin-exch,1=long,2=mix)
<br>
64           swapping threshold
<br>
0            L1 in (0=transposed,1=no-transposed) form
<br>
0            U  in (0=transposed,1=no-transposed) form
<br>
1            Equilibration (0=no,1=yes)
<br>
8            memory alignment in double (&gt; 0)
<br>
===
<br>
<p>I've run HPL with this HPL.dat by using MPICH2 - work's well.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11641.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="11639.php">Aaron Knister: "Re: [OMPI users] strange undefined references to mpi_sizeofXXX_ errors with pgi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11641.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>Reply:</strong> <a href="11641.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
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
