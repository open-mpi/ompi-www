<?
$subject_val = "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 30 12:22:41 2009" -->
<!-- isoreceived="20091230172241" -->
<!-- sent="Wed, 30 Dec 2009 12:22:32 -0500" -->
<!-- isosent="20091230172232" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3" -->
<!-- id="4B3B8C58.1090805_at_ldeo.columbia.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="24da22320912292307m6f77cb1dl76cd926161b97239_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-12-30 12:22:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11667.php">Arunkumar C R: "[OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<li><strong>Previous message:</strong> <a href="11665.php">Daniel Sp&#229;ngberg: "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<li><strong>In reply to:</strong> <a href="11657.php">ilya zelenchuk: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11690.php">ilya zelenchuk: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11690.php">ilya zelenchuk: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ilya
<br>
<p>Well, many possibilities to explain the error have
<br>
been discarded already.
<br>
<p>Another long shot:
<br>
Have you tried to set the processor affinity?
<br>
Not sure how it would work on Xeons.
<br>
We have AMD processors here, and setting processor affinity
<br>
does help performance, on HPL and other programs.
<br>
It doesn't hurt to try.
<br>
Just add this to the mpirun command line:
<br>
&quot;-mca mpi_paffinity_alone 1&quot;
<br>
<p>Anyway, it may be that your OpenMPI built is broken,
<br>
as you suggested.
<br>
Since you say it works fine on another cluster,
<br>
you may want to compare the output of &quot;ompi_info&quot; on both of them,
<br>
with &quot;diff&quot; or just by inspection,
<br>
to see if something fishy stands out.
<br>
<p>Otherwise, you can rebuild OpenMPI in the problematic cluster.
<br>
Make sure you do that from scratch, with a &quot;make distclean&quot; first,
<br>
or even better, starting with a fresh tarball.
<br>
A useful thing to help further forensics/debugging is to
<br>
dump the output of &quot;configure&quot;, &quot;make&quot; and &quot;make install&quot;
<br>
to respective log files.
<br>
I could catch and fix few subtle issues here this way.
<br>
<p>Good luck
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
<span class="quotelev1">&gt; Hey!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2009/12/29 Gus Correa &lt;gus_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ilya
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OK, with 28 nodes and 4GB/node,
</span><br>
<span class="quotelev2">&gt;&gt; you have much more memory than I thought.
</span><br>
<span class="quotelev2">&gt;&gt; The maximum N is calculated based on the total memory
</span><br>
<span class="quotelev2">&gt;&gt; you have (assuming the nodes are homogeneous, have the same RAM),
</span><br>
<span class="quotelev2">&gt;&gt; not based on the memory per node.
</span><br>
<span class="quotelev1">&gt; Yep. I know. I've playing with HPL when thus errors came up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I haven't tried OpenMPI 1.3.3.
</span><br>
<span class="quotelev2">&gt;&gt; Last I ran HPL was with OpenMPI 1.3.2.
</span><br>
<span class="quotelev2">&gt;&gt; It worked fine.
</span><br>
<span class="quotelev2">&gt;&gt; It also worked with OpenMPI 1.3.1 and 1.3.0, but these versions
</span><br>
<span class="quotelev2">&gt;&gt; had a problem that caused memory leaks (at least on Infiniband, not sure
</span><br>
<span class="quotelev2">&gt;&gt; about Ethernet).
</span><br>
<span class="quotelev2">&gt;&gt; The problem was fixed in later OpenMPI versions (1.3.2. and newer).
</span><br>
<span class="quotelev2">&gt;&gt; In any case, there was even a workaround in the command line for that
</span><br>
<span class="quotelev2">&gt;&gt; (&quot;-mca mpi_leave_pinned 0&quot;) for 1.3.0 and 1.3.1.
</span><br>
<span class="quotelev2">&gt;&gt; However, AFAIK, this workaround is not needed for 1.3.2 and newer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What is your OpenMPI mpiexec command line?
</span><br>
<span class="quotelev1">&gt; $MPIRUN_HOME/mpirun --prefix $MPIR_HOME  --hostfile $mf -np $1
</span><br>
<span class="quotelev1">&gt; $progname $cmdLineArgs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where:
</span><br>
<span class="quotelev1">&gt; MPIR_HOME=/opt/openmpi/intel
</span><br>
<span class="quotelev1">&gt; MPIRUN_HOME=$MPIR_HOME/bin
</span><br>
<span class="quotelev1">&gt; $mf - is generated automatically by our task scheduler
</span><br>
<span class="quotelev1">&gt; $1 - number of proc from user
</span><br>
<span class="quotelev1">&gt; $progname - full path to the binary
</span><br>
<span class="quotelev1">&gt; $cmdLineArgs - ARGV
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible that you somehow mixed a 32-bit machine/OpenMPI build
</span><br>
<span class="quotelev2">&gt;&gt; with a 64-bit machine/OpenMPI build.
</span><br>
<span class="quotelev2">&gt;&gt; For instance, your head node (where you compiled the code) is
</span><br>
<span class="quotelev2">&gt;&gt; 64-bit, but the compute nodes - or some of them - are 32-bit,
</span><br>
<span class="quotelev2">&gt;&gt; or vice-versa?
</span><br>
<span class="quotelev2">&gt;&gt; The error messages you posted hint something like that,
</span><br>
<span class="quotelev2">&gt;&gt; a mix of MPI_DOUBLE  types, MPI_Aint types, etc.
</span><br>
<span class="quotelev1">&gt; No, all nodes (master, worker) is Xeon 2.4 GHz, 32-bit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, make sure no mpi.h/mpif.h is hardwired into your HPL code,
</span><br>
<span class="quotelev2">&gt;&gt; or into the supporting libraries BLAS/LAPACK, or Goto BLAS,
</span><br>
<span class="quotelev2">&gt;&gt; or ATLAS, etc.
</span><br>
<span class="quotelev2">&gt;&gt; Those include files are NOT portable across MPI flavors,
</span><br>
<span class="quotelev2">&gt;&gt; and a source of frustration when hardwired into the code.
</span><br>
<span class="quotelev1">&gt; Ok
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Furthermore, make sure you don't have leftover HPL processes
</span><br>
<span class="quotelev2">&gt;&gt; from old runs hanging on the compute nodes.
</span><br>
<span class="quotelev2">&gt;&gt; That is a common cause of trouble.
</span><br>
<span class="quotelev1">&gt; No, there is no other tasks on nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Would this be the reason for the problems you saw?
</span><br>
<span class="quotelev1">&gt; :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have the same OpenMPI on other cluster and it's work fine. Maybe I
</span><br>
<span class="quotelev1">&gt; have some prob. while compile OpenMPI?
</span><br>
<span class="quotelev1">&gt; Need some time to check it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Good luck.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope it helps.
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ilya zelenchuk wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, Gus!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry for the lack of debug info.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have 28 nodes. Each node have 2 processors Xeon 2.4 GHz with 4 Gb RAM.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI 1.3.3 was compiled as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC=icc CFLAGS=&quot; -O3&quot; CXX=icpc CXXFLAGS=&quot; -O3&quot; F77=ifort FFLAGS=&quot; -O3&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FC=ifort FCFLAGS=&quot; -O3&quot; ./configure --prefix=/opt/openmpi/intel/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-debug --enable-mpi-threads --disable-ipv6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009/12/28 Gus Correa &lt;gus_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ilya
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Did you recompile HPL with OpenMPI, or just launched the MPICH2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; executable with the OpenMPI mpiexec?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You probably know this, but you cannot mix different MPIs at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compile and run time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I know this bug. I compile HPL with OpenMPI and run with this one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For the MPICH2, I recompile HPL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also, the HPL maximum problem size (N) depends on how much
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; memory/RAM you have.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you make N too big, the arrays don't fit in the RAM,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you get into memory paging, which is no good for MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How much RAM do you have?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 Gb on each node. Also, I've watched meminfo through the top.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No swap.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; N=17920 would require about 3.2GB, if I did the math right.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A rule of thumb is maximum N = sqrt(0.8 * RAM_in_bytes / 8)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Have you tried smaller values (above 10000, but below 17920)?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For which N does it start to break?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With 8960 work's almost fine. I have same errors just once. They
</span><br>
<span class="quotelev3">&gt;&gt;&gt; disappear after rebooting cluster :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But if I set problem size to 11200 - errors comes again. At this point
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rebooting doesn't help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTW: in output i have:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type 11 count ints 82 count disp 81 count datatype 81
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ints:     81 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 6481
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Aint: 0 22400 44800 67200 89600 112000 134400 156800 179200 201600
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 224000 246400 268800 291200 313600 336000 358400 380800 403200 425600
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 448000 470400 492800 515200 537600 560000 582400 604800 627200 649600
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 672000 694400 716800 739200 761600 784000 806400 828800 851200 873600
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 896000 918400 940800 963200 985600 1008000 1030400 1052800 1075200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1097600 1120000 1142400 1164800 1187200 1209600 1232000 1254400
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1276800 1299200 1321600 1344000 1366400 1388800 1411200 1433600
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1456000 1478400 1500800 1523200 1545600 1568000 1590400 1612800
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1635200 1657600 1680000 1702400 1724800 1747200 1769600 1343143936
</span><br>
<span class="quotelev3">&gt;&gt;&gt; types:    (81 * MPI_DOUBLE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type 11 count ints 82 count disp 81 count datatype 81
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ints:     81 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 2800 6481
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Aint: 0 22400 44800 67200 89600 112000 134400 156800 179200 201600
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 224000 246400 268800 291200 313600 336000 358400 380800 403200 425600
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 448000 470400 492800 515200 537600 560000 582400 604800 627200 649600
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 672000 694400 716800 739200 761600 784000 806400 828800 851200 873600
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 896000 918400 940800 963200 985600 1008000 1030400 1052800 1075200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1097600 1120000 1142400 1164800 1187200 1209600 1232000 1254400
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1276800 1299200 1321600 1344000 1366400 1388800 1411200 1433600
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1456000 1478400 1500800 1523200 1545600 1568000 1590400 1612800
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1635200 1657600 1680000 1702400 1724800 1747200 1769600 1343143936
</span><br>
<span class="quotelev3">&gt;&gt;&gt; types:    (81 * MPI_DOUBLE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Interesting, but it seems that HPL running just fine. But with this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning messages in stdout and stderr.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, i've running HPL with OPENMPI 1.4 - no warning and errors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The HPL TUNING file may help:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.netlib.org/benchmark/hpl/tuning.html">http://www.netlib.org/benchmark/hpl/tuning.html</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, it's good one!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Good luck.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My two cents,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ilya zelenchuk wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Good day, everyone!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have problem while running HPL benchmark with OPENMPI 1.3.3.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When problem size (Ns) smaller 10000 - all is good. But when I set Ns
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to 17920 (for example) - I get errors:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ===
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [ums1:05086] ../../ompi/datatype/datatype_pack.h:37
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       Pointer 0xb27752c0 size 4032 is outside [0xb27752c0,0x10aeac8] for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       base ptr 0xb27752c0 count 1 and data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [ums1:05086] Datatype 0x83a0618[] size 5735048 align 4 id 0 length 244
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; used 81
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; true_lb 0 true_ub 1318295560 (true_extent 1318295560) lb 0 ub
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1318295560 (extent 1318295560)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nbElems 716881 loops 0 flags 102 (commited )-c-----GD--[---][---]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  contain MPI_DOUBLE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x0 (0) extent 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (size 71040)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x11800 (71680)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x23000 (143360)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x34800 (215040)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x46000 (286720)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x57800 (358400)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x69000 (430080)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x7a800 (501760)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x8c000 (573440)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x9d800 (645120)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0xaf000 (716800)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0xc0800 (788480)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0xd2000 (860160)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0xe3800 (931840)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0xf5000 (1003520)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x106800
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (1075200) extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x118000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (1146880) extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --C---P-D--[ C ][FLT]     MPI_DOUBLE count 8880 disp 0x129800
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (1218560) extent 8 (size 71040)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ....
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ===
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here is my HPL.dat:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ===
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HPLinpack benchmark input file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Innovative Computing Laboratory, University of Tennessee
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HPL.out      output file name (if any)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 6            device out (6=stdout,7=stderr,file)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1            # of problems sizes (N)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 17920        Ns
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1            # of NBs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 80           NBs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0            PMAP process mapping (0=Row-,1=Column-major)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1            # of process grids (P x Q)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2            Ps
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 14           Qs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 16.0         threshold
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1            # of panel fact
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2            PFACTs (0=left, 1=Crout, 2=Right)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1            # of recursive stopping criterium
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4            NBMINs (&gt;= 1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1            # of panels in recursion
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2            NDIVs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1            # of recursive panel fact.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2            RFACTs (0=left, 1=Crout, 2=Right)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1            # of broadcast
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2            BCASTs (0=1rg,1=1rM,2=2rg,3=2rM,4=Lng,5=LnM)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1            # of lookahead depth
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1            DEPTHs (&gt;=0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2            SWAP (0=bin-exch,1=long,2=mix)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 64           swapping threshold
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0            L1 in (0=transposed,1=no-transposed) form
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0            U  in (0=transposed,1=no-transposed) form
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1            Equilibration (0=no,1=yes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 8            memory alignment in double (&gt; 0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ===
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've run HPL with this HPL.dat by using MPICH2 - work's well.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11667.php">Arunkumar C R: "[OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<li><strong>Previous message:</strong> <a href="11665.php">Daniel Sp&#229;ngberg: "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<li><strong>In reply to:</strong> <a href="11657.php">ilya zelenchuk: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11690.php">ilya zelenchuk: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11690.php">ilya zelenchuk: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
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
