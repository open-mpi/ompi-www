<?
$subject_val = "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 28 13:21:53 2009" -->
<!-- isoreceived="20091228182153" -->
<!-- sent="Mon, 28 Dec 2009 13:21:44 -0500" -->
<!-- isosent="20091228182144" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3" -->
<!-- id="4B38F738.5090209_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="24da22320912280657n3b688adeof5d1695bdb9b9aa6_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-28 13:21:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11642.php">Joshua Bernstein: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="11640.php">ilya zelenchuk: "[OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="11640.php">ilya zelenchuk: "[OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11648.php">ilya zelenchuk: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>Reply:</strong> <a href="11648.php">ilya zelenchuk: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ilya
<br>
<p>Did you recompile HPL with OpenMPI, or just launched the MPICH2
<br>
executable with the OpenMPI mpiexec?
<br>
You probably know this, but you cannot mix different MPIs at
<br>
compile and run time.
<br>
<p>Also, the HPL maximum problem size (N) depends on how much
<br>
memory/RAM you have.
<br>
If you make N too big, the arrays don't fit in the RAM,
<br>
you get into memory paging, which is no good for MPI.
<br>
How much RAM do you have?
<br>
N=17920 would require about 3.2GB, if I did the math right.
<br>
A rule of thumb is maximum N = sqrt(0.8 * RAM_in_bytes / 8)
<br>
Have you tried smaller values (above 10000, but below 17920)?
<br>
For which N does it start to break?
<br>
<p>The HPL TUNING file may help:
<br>
<a href="http://www.netlib.org/benchmark/hpl/tuning.html">http://www.netlib.org/benchmark/hpl/tuning.html</a>
<br>
<p>Good luck.
<br>
<p><p>My two cents,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>ilya zelenchuk wrote:
<br>
<span class="quotelev1">&gt; Good day, everyone!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have problem while running HPL benchmark with OPENMPI 1.3.3.
</span><br>
<span class="quotelev1">&gt; When problem size (Ns) smaller 10000 - all is good. But when I set Ns
</span><br>
<span class="quotelev1">&gt; to 17920 (for example) - I get errors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===
</span><br>
<span class="quotelev1">&gt; [ums1:05086] ../../ompi/datatype/datatype_pack.h:37
</span><br>
<span class="quotelev1">&gt;         Pointer 0xb27752c0 size 4032 is outside [0xb27752c0,0x10aeac8] for
</span><br>
<span class="quotelev1">&gt;         base ptr 0xb27752c0 count 1 and data
</span><br>
<span class="quotelev1">&gt; [ums1:05086] Datatype 0x83a0618[] size 5735048 align 4 id 0 length 244 used 81
</span><br>
<span class="quotelev1">&gt; true_lb 0 true_ub 1318295560 (true_extent 1318295560) lb 0 ub
</span><br>
<span class="quotelev1">&gt; 1318295560 (extent 1318295560)
</span><br>
<span class="quotelev1">&gt; nbElems 716881 loops 0 flags 102 (commited )-c-----GD--[---][---]
</span><br>
<span class="quotelev1">&gt;    contain MPI_DOUBLE
</span><br>
<span class="quotelev1">&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x0 (0) extent 8
</span><br>
<span class="quotelev1">&gt; (size 71040)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x11800 (71680)
</span><br>
<span class="quotelev1">&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x23000 (143360)
</span><br>
<span class="quotelev1">&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x34800 (215040)
</span><br>
<span class="quotelev1">&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x46000 (286720)
</span><br>
<span class="quotelev1">&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x57800 (358400)
</span><br>
<span class="quotelev1">&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x69000 (430080)
</span><br>
<span class="quotelev1">&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x7a800 (501760)
</span><br>
<span class="quotelev1">&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x8c000 (573440)
</span><br>
<span class="quotelev1">&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x9d800 (645120)
</span><br>
<span class="quotelev1">&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0xaf000 (716800)
</span><br>
<span class="quotelev1">&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0xc0800 (788480)
</span><br>
<span class="quotelev1">&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0xd2000 (860160)
</span><br>
<span class="quotelev1">&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0xe3800 (931840)
</span><br>
<span class="quotelev1">&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0xf5000 (1003520)
</span><br>
<span class="quotelev1">&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x106800
</span><br>
<span class="quotelev1">&gt; (1075200) extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x118000
</span><br>
<span class="quotelev1">&gt; (1146880) extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x129800
</span><br>
<span class="quotelev1">&gt; (1218560) extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; ===
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is my HPL.dat:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===
</span><br>
<span class="quotelev1">&gt; HPLinpack benchmark input file
</span><br>
<span class="quotelev1">&gt; Innovative Computing Laboratory, University of Tennessee
</span><br>
<span class="quotelev1">&gt; HPL.out      output file name (if any)
</span><br>
<span class="quotelev1">&gt; 6            device out (6=stdout,7=stderr,file)
</span><br>
<span class="quotelev1">&gt; 1            # of problems sizes (N)
</span><br>
<span class="quotelev1">&gt; 17920        Ns
</span><br>
<span class="quotelev1">&gt; 1            # of NBs
</span><br>
<span class="quotelev1">&gt; 80           NBs
</span><br>
<span class="quotelev1">&gt; 0            PMAP process mapping (0=Row-,1=Column-major)
</span><br>
<span class="quotelev1">&gt; 1            # of process grids (P x Q)
</span><br>
<span class="quotelev1">&gt; 2            Ps
</span><br>
<span class="quotelev1">&gt; 14           Qs
</span><br>
<span class="quotelev1">&gt; 16.0         threshold
</span><br>
<span class="quotelev1">&gt; 1            # of panel fact
</span><br>
<span class="quotelev1">&gt; 2            PFACTs (0=left, 1=Crout, 2=Right)
</span><br>
<span class="quotelev1">&gt; 1            # of recursive stopping criterium
</span><br>
<span class="quotelev1">&gt; 4            NBMINs (&gt;= 1)
</span><br>
<span class="quotelev1">&gt; 1            # of panels in recursion
</span><br>
<span class="quotelev1">&gt; 2            NDIVs
</span><br>
<span class="quotelev1">&gt; 1            # of recursive panel fact.
</span><br>
<span class="quotelev1">&gt; 2            RFACTs (0=left, 1=Crout, 2=Right)
</span><br>
<span class="quotelev1">&gt; 1            # of broadcast
</span><br>
<span class="quotelev1">&gt; 2            BCASTs (0=1rg,1=1rM,2=2rg,3=2rM,4=Lng,5=LnM)
</span><br>
<span class="quotelev1">&gt; 1            # of lookahead depth
</span><br>
<span class="quotelev1">&gt; 1            DEPTHs (&gt;=0)
</span><br>
<span class="quotelev1">&gt; 2            SWAP (0=bin-exch,1=long,2=mix)
</span><br>
<span class="quotelev1">&gt; 64           swapping threshold
</span><br>
<span class="quotelev1">&gt; 0            L1 in (0=transposed,1=no-transposed) form
</span><br>
<span class="quotelev1">&gt; 0            U  in (0=transposed,1=no-transposed) form
</span><br>
<span class="quotelev1">&gt; 1            Equilibration (0=no,1=yes)
</span><br>
<span class="quotelev1">&gt; 8            memory alignment in double (&gt; 0)
</span><br>
<span class="quotelev1">&gt; ===
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've run HPL with this HPL.dat by using MPICH2 - work's well.
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
<li><strong>Next message:</strong> <a href="11642.php">Joshua Bernstein: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="11640.php">ilya zelenchuk: "[OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="11640.php">ilya zelenchuk: "[OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11648.php">ilya zelenchuk: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>Reply:</strong> <a href="11648.php">ilya zelenchuk: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
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
