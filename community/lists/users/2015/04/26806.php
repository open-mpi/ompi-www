<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 13:42:13 2015" -->
<!-- isoreceived="20150428174213" -->
<!-- sent="Tue, 28 Apr 2015 10:37:48 -0700" -->
<!-- isosent="20150428173748" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3" -->
<!-- id="6E4FAFC1-D681-462D-80BA-42DC7F1932AA_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293EBA03E_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-28 13:37:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26807.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="26805.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>In reply to:</strong> <a href="26805.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is what I see in my 1.8.5 build lib directory:
<br>
<p>lrwxrwxrwx. 1 rhc       15 Apr 28 07:51 libmpi.so -&gt; libmpi.so.1.6.0*
<br>
lrwxrwxrwx. 1 rhc       15 Apr 28 07:51 libmpi.so.1 -&gt; libmpi.so.1.6.0*
<br>
-rwxr-xr-x. 1 rhc  1015923 Apr 28 07:51 libmpi.so.1.6.0*
<br>
<p>So it should just be a link
<br>
<p><span class="quotelev1">&gt; On Apr 28, 2015, at 10:30 AM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I copied the LAPACK benchmark binaries (xhpl being the binary) over to a development system (which
</span><br>
<span class="quotelev1">&gt; is running the same version of CentOS) but I'm getting some errors trying to run the OpenMPI LAPACK benchmark
</span><br>
<span class="quotelev1">&gt; on OpenMPI 1.8.5:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; xhpl: error while loading shared libraries: libmpi.so.1: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; xhpl: error while loading shared libraries: libmpi.so.1: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; xhpl: error while loading shared libraries: libmpi.so.1: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; xhpl: error while loading shared libraries: libmpi.so.1: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I look at the 1.8.5 install directory I find the following shared object library but no libmpi.so.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /apps/mpi/openmpi/1.8.5-dev/lib/libmpi.so
</span><br>
<span class="quotelev1">&gt; /apps/mpi/openmpi/1.8.5-dev/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it necessary to re-compile the OpenMPI LAPACK benchmark to run OpenMPI 1.8.5
</span><br>
<span class="quotelev1">&gt; as opposed to 1.8.2?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Bill L.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Friday, April 10, 2015 5:28 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will be in the next nightly 1.8.5 tarball.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bill: can you test it to see if we&#146;ve fixed the problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 10, 2015, at 2:15 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Okay, I at least now understand the behavior from this particular cmd line. Looks like we are binding-to-core by default, even if you specify use-hwthread-cpus. I&#146;ll fix that one - still don&#146;t understand the segfaults.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Bill: can you shed some light on those?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 9, 2015, at 8:28 PM, Lane, William &lt;William.Lane_at_[hidden] &lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In looking at the /proc/cpuinfo textfile it looks like hyperthreading
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is enabled (in that it indicates 16 siblings for each of the 8 cores of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; two LGA2011 CPU's). I don't have access to the BIOS on this system though
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so I'll have to check w/someone else.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have done more testing and found that at 104 slots requested OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; won't run the LAPACK benchmark. All the LGA2011 nodes exhibit the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; strange binding behavior (maybe because hyperthreading is turned on for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these nodes, but no the LGA 1366 nodes?). Below is all the relevant information to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that run:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; II.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a. $MPI_DIR/bin/mpirun -np $NSLOTS --report-bindings --hostfile hostfile-single --mca btl_tcp_if_include eth0 --hetero-nodes --use-hwthread-cpus --prefix $MPI_DIR $BENCH_DIR/$APP_DIR/$APP_BIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where NSLOTS=104
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; b.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [lanew_at_csclprd3s1 hpl]$ . /hpc/apps/benchmarks/runhpl4.job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-1:27586] MCW rank 3 bound to socket 1[core 3[hwt 0]]: [./.][./B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-1:27586] MCW rank 0 bound to socket 0[core 0[hwt 0]]: [B/.][./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-1:27586] MCW rank 1 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-1:27586] MCW rank 2 bound to socket 0[core 1[hwt 0]]: [./B][./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-2:04454] MCW rank 27 bound to socket 0[core 1[hwt 0]]: [./B/./././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-2:04454] MCW rank 28 bound to socket 0[core 2[hwt 0]]: [././B/././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-2:04454] MCW rank 29 bound to socket 0[core 3[hwt 0]]: [./././B/./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-2:04454] MCW rank 30 bound to socket 0[core 4[hwt 0]]: [././././B/.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-2:04454] MCW rank 31 bound to socket 0[core 5[hwt 0]]: [./././././B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-2:04454] MCW rank 26 bound to socket 0[core 0[hwt 0]]: [B/././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:21129] MCW rank 8 bound to socket 0[core 0[hwt 0]]: [B/././././.][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:21129] MCW rank 9 bound to socket 1[core 6[hwt 0]]: [./././././.][B/././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:21129] MCW rank 10 bound to socket 0[core 1[hwt 0]]: [./B/./././.][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:21129] MCW rank 11 bound to socket 1[core 7[hwt 0]]: [./././././.][./B/./././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:21129] MCW rank 12 bound to socket 0[core 2[hwt 0]]: [././B/././.][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:21129] MCW rank 13 bound to socket 1[core 8[hwt 0]]: [./././././.][././B/././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:21129] MCW rank 14 bound to socket 0[core 3[hwt 0]]: [./././B/./.][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:21129] MCW rank 15 bound to socket 1[core 9[hwt 0]]: [./././././.][./././B/./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:21129] MCW rank 16 bound to socket 0[core 4[hwt 0]]: [././././B/.][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:21129] MCW rank 17 bound to socket 1[core 10[hwt 0]]: [./././././.][././././B/.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:21129] MCW rank 18 bound to socket 0[core 5[hwt 0]]: [./././././B][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:21129] MCW rank 19 bound to socket 1[core 11[hwt 0]]: [./././././.][./././././B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-1:12882] MCW rank 22 bound to socket 0[core 2[hwt 0]]: [././B/././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-1:12882] MCW rank 23 bound to socket 0[core 3[hwt 0]]: [./././B/./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-1:12882] MCW rank 24 bound to socket 0[core 4[hwt 0]]: [././././B/.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-1:12882] MCW rank 25 bound to socket 0[core 5[hwt 0]]: [./././././B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-1:12882] MCW rank 20 bound to socket 0[core 0[hwt 0]]: [B/././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-1:12882] MCW rank 21 bound to socket 0[core 1[hwt 0]]: [./B/./././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27268] MCW rank 92 bound to socket 0[core 2[hwt 0-1]]: [../../BB/../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27268] MCW rank 93 bound to socket 1[core 10[hwt 0-1]]: [../../../../../../../..][../../BB/../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27268] MCW rank 94 bound to socket 0[core 3[hwt 0-1]]: [../../../BB/../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27268] MCW rank 95 bound to socket 1[core 11[hwt 0-1]]: [../../../../../../../..][../../../BB/../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27268] MCW rank 96 bound to socket 0[core 4[hwt 0-1]]: [../../../../BB/../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27268] MCW rank 97 bound to socket 1[core 12[hwt 0-1]]: [../../../../../../../..][../../../../BB/../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:22880] MCW rank 84 bound to socket 0[core 6[hwt 0-1]]: [../../../../../../BB/..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:22880] MCW rank 85 bound to socket 1[core 14[hwt 0-1]]: [../../../../../../../..][../../../../../../BB/..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:22880] MCW rank 86 bound to socket 0[core 7[hwt 0-1]]: [../../../../../../../BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:22880] MCW rank 87 bound to socket 1[core 15[hwt 0-1]]: [../../../../../../../..][../../../../../../../BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:22880] MCW rank 72 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:22880] MCW rank 73 bound to socket 1[core 8[hwt 0-1]]: [../../../../../../../..][BB/../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:22880] MCW rank 74 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:22880] MCW rank 75 bound to socket 1[core 9[hwt 0-1]]: [../../../../../../../..][../BB/../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:22880] MCW rank 76 bound to socket 0[core 2[hwt 0-1]]: [../../BB/../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:22880] MCW rank 77 bound to socket 1[core 10[hwt 0-1]]: [../../../../../../../..][../../BB/../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:22880] MCW rank 78 bound to socket 0[core 3[hwt 0-1]]: [../../../BB/../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-5:18000] MCW rank 7 bound to socket 1[core 3[hwt 0]]: [./.][./B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-5:18000] MCW rank 4 bound to socket 0[core 0[hwt 0]]: [B/.][./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-5:18000] MCW rank 5 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-5:18000] MCW rank 6 bound to socket 0[core 1[hwt 0]]: [./B][./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:08058] MCW rank 60 bound to socket 0[core 2[hwt 0-1]]: [../../BB/../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:08058] MCW rank 61 bound to socket 1[core 10[hwt 0-1]]: [../../../../../../../..][../../BB/../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:08058] MCW rank 62 bound to socket 0[core 3[hwt 0-1]]: [../../../BB/../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:08058] MCW rank 63 bound to socket 1[core 11[hwt 0-1]]: [../../../../../../../..][../../../BB/../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:08058] MCW rank 64 bound to socket 0[core 4[hwt 0-1]]: [../../../../BB/../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:08058] MCW rank 65 bound to socket 1[core 12[hwt 0-1]]: [../../../../../../../..][../../../../BB/../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:08058] MCW rank 66 bound to socket 0[core 5[hwt 0-1]]: [../../../../../BB/../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:08058] MCW rank 67 bound to socket 1[core 13[hwt 0-1]]: [../../../../../../../..][../../../../../BB/../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:08058] MCW rank 68 bound to socket 0[core 6[hwt 0-1]]: [../../../../../../BB/..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:08058] MCW rank 69 bound to socket 1[core 14[hwt 0-1]]: [../../../../../../../..][../../../../../../BB/..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:08058] MCW rank 70 bound to socket 0[core 7[hwt 0-1]]: [../../../../../../../BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:08058] MCW rank 71 bound to socket 1[core 15[hwt 0-1]]: [../../../../../../../..][../../../../../../../BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:08058] MCW rank 56 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:08058] MCW rank 57 bound to socket 1[core 8[hwt 0-1]]: [../../../../../../../..][BB/../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:08058] MCW rank 58 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:08058] MCW rank 59 bound to socket 1[core 9[hwt 0-1]]: [../../../../../../../..][../BB/../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-5:15446] MCW rank 44 bound to socket 0[core 0[hwt 0]]: [B/././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-5:15446] MCW rank 45 bound to socket 0[core 1[hwt 0]]: [./B/./././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-5:15446] MCW rank 46 bound to socket 0[core 2[hwt 0]]: [././B/././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-5:15446] MCW rank 47 bound to socket 0[core 3[hwt 0]]: [./././B/./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-5:15446] MCW rank 48 bound to socket 0[core 4[hwt 0]]: [././././B/.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-5:15446] MCW rank 49 bound to socket 0[core 5[hwt 0]]: [./././././B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27268] MCW rank 98 bound to socket 0[core 5[hwt 0-1]]: [../../../../../BB/../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27268] MCW rank 99 bound to socket 1[core 13[hwt 0-1]]: [../../../../../../../..][../../../../../BB/../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27268] MCW rank 100 bound to socket 0[core 6[hwt 0-1]]: [../../../../../../BB/..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27268] MCW rank 101 bound to socket 1[core 14[hwt 0-1]]: [../../../../../../../..][../../../../../../BB/..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27268] MCW rank 102 bound to socket 0[core 7[hwt 0-1]]: [../../../../../../../BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27268] MCW rank 103 bound to socket 1[core 15[hwt 0-1]]: [../../../../../../../..][../../../../../../../BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27268] MCW rank 88 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27268] MCW rank 89 bound to socket 1[core 8[hwt 0-1]]: [../../../../../../../..][BB/../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27268] MCW rank 90 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27268] MCW rank 91 bound to socket 1[core 9[hwt 0-1]]: [../../../../../../../..][../BB/../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-6:28854] MCW rank 51 bound to socket 0[core 1[hwt 0]]: [./B/./././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-6:28854] MCW rank 52 bound to socket 0[core 2[hwt 0]]: [././B/././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-6:28854] MCW rank 53 bound to socket 0[core 3[hwt 0]]: [./././B/./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-6:28854] MCW rank 54 bound to socket 0[core 4[hwt 0]]: [././././B/.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-6:28854] MCW rank 55 bound to socket 0[core 5[hwt 0]]: [./././././B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-6:28854] MCW rank 50 bound to socket 0[core 0[hwt 0]]: [B/././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-4:28072] MCW rank 38 bound to socket 0[core 0[hwt 0]]: [B/././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-4:28072] MCW rank 39 bound to socket 0[core 1[hwt 0]]: [./B/./././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-4:28072] MCW rank 40 bound to socket 0[core 2[hwt 0]]: [././B/././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-4:28072] MCW rank 41 bound to socket 0[core 3[hwt 0]]: [./././B/./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-4:28072] MCW rank 42 bound to socket 0[core 4[hwt 0]]: [././././B/.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-4:28072] MCW rank 43 bound to socket 0[core 5[hwt 0]]: [./././././B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:22880] MCW rank 79 bound to socket 1[core 11[hwt 0-1]]: [../../../../../../../..][../../../BB/../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:22880] MCW rank 80 bound to socket 0[core 4[hwt 0-1]]: [../../../../BB/../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:22880] MCW rank 81 bound to socket 1[core 12[hwt 0-1]]: [../../../../../../../..][../../../../BB/../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:22880] MCW rank 82 bound to socket 0[core 5[hwt 0-1]]: [../../../../../BB/../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:22880] MCW rank 83 bound to socket 1[core 13[hwt 0-1]]: [../../../../../../../..][../../../../../BB/../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-3:11837] MCW rank 33 bound to socket 0[core 1[hwt 0]]: [./B/./././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-3:11837] MCW rank 34 bound to socket 0[core 2[hwt 0]]: [././B/././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-3:11837] MCW rank 35 bound to socket 0[core 3[hwt 0]]: [./././B/./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-3:11837] MCW rank 36 bound to socket 0[core 4[hwt 0]]: [././././B/.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-3:11837] MCW rank 37 bound to socket 0[core 5[hwt 0]]: [./././././B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-3:11837] MCW rank 32 bound to socket 0[core 0[hwt 0]]: [B/././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27275] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27275] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27275] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27275] Failing at address: 0x7f1215253000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27276] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27276] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27276] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27276] Failing at address: 0x7f563e874380
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27277] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27277] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27277] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27277] Failing at address: 0x7fbbec79a300
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27278] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27278] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27278] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27278] Failing at address: 0x7fbadf816080
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27279] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27279] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27279] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27279] Failing at address: 0x7fab5dfa0100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27280] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27280] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27280] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27280] Failing at address: 0x7f0bb4034500
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27281] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27281] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27281] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27281] Failing at address: 0x7f49bb544f80
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27282] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27282] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27282] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27282] Failing at address: 0x7fe647f61f00
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27283] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27283] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27283] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27283] Failing at address: 0x7f79a9d25580
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27272] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27272] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27272] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27272] Failing at address: 0x7f64568adf80
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27269] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27269] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27269] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27269] Failing at address: 0x7f5e2a17e580
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27270] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27270] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27270] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27270] Failing at address: 0x7fda95421400
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27271] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27271] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27271] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27271] Failing at address: 0x7f873e76c100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27271] [ 0] [csclprd3-0-9:27273] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27273] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27273] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27273] Failing at address: 0x7f5dc6e99e80
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27274] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27274] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27274] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27274] Failing at address: 0x7f83afce2280
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27274] [ 0] [csclprd3-0-9:27269] [ 0] /lib64/libc.so.6(+0x32920)[0x7f5e39b82920]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27269] [ 1] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_btl_sm.so(+0x511a)[0x7f5e2f5f111a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27269] [ 2] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_grow+0x239)[0x7f5e3a6960c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27269] [ 3] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7f5e3a696200]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27269] [ 4] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_bml_r2.so(+0x138e)[0x7f5e2f9f838e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27269] [ 5] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xd5)[0x7f5e2eb204e5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27269] [ 6] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f5e3a6b0e26]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27269] [ 7] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(MPI_Init+0x170)[0x7f5e3a6cfe10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27269] [ 8] /hpc/apps/benchmarks/hpl/xhpl[0x401571]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27269] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f5e39b6ecdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27269] [10] /hpc/apps/benchmarks/hpl/xhpl[0x401439]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27269] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27270] [ 0] /lib64/libc.so.6(+0x32920)[0x7fdaa8d89920]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27270] [ 1] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_btl_sm.so(+0x511a)[0x7fdaa29d711a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27270] [ 2] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_grow+0x239)[0x7fdaa989d0c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27270] [ 3] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7fdaa989d200]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27270] [ 4] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_bml_r2.so(+0x138e)[0x7fdaa2dde38e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27270] [ 5] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xd5)[0x7fdaa1f064e5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27270] [ 6] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7fdaa98b7e26]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27270] [ 7] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(MPI_Init+0x170)[0x7fdaa98d6e10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27270] [ 8] /hpc/apps/benchmarks/hpl/xhpl[0x401571]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27270] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fdaa8d75cdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27270] [10] /hpc/apps/benchmarks/hpl/xhpl[0x401439]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27270] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(+0x32920)[0x7f875211a920]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27271] [ 1] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_btl_sm.so(+0x511a)[0x7f8747dfe11a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27271] [ 2] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_grow+0x239)[0x7f8752c2e0c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27271] [ 3] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7f8752c2e200]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27271] [ 4] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_bml_r2.so(+0x138e)[0x7f874c20538e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27271] [ 5] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xd5)[0x7f874732d4e5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27271] [ 6] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f8752c48e26]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27271] [ 7] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(MPI_Init+0x170)[0x7f8752c67e10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27271] [ 8] /hpc/apps/benchmarks/hpl/xhpl[0x401571]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27271] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f8752106cdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27271] [10] /hpc/apps/benchmarks/hpl/xhpl[0x401439]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27271] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27273] [ 0] /lib64/libc.so.6(+0x32920)[0x7f5ddaa3c920]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27273] [ 1] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_btl_sm.so(+0x511a)[0x7f5dd47ae11a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27273] [ 2] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_grow+0x239)[0x7f5ddb5500c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27273] [ 3] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7f5ddb550200]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27273] [ 4] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_bml_r2.so(+0x138e)[0x7f5dd4bb538e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27273] [ 5] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xd5)[0x7f5dcfbe54e5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27273] [ 6] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f5ddb56ae26]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27273] [ 7] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(MPI_Init+0x170)[0x7f5ddb589e10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27273] [ 8] /hpc/apps/benchmarks/hpl/xhpl[0x401571]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27273] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f5ddaa28cdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27273] [10] /hpc/apps/benchmarks/hpl/xhpl[0x401439]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27273] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27275] [ 0] /lib64/libc.so.6(+0x32920)[0x7f1228ede920]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27275] [ 1] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_btl_sm.so(+0x511a)[0x7f1222bac11a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27275] [ 2] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_grow+0x239)[0x7f12299f20c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27275] [ 3] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7f12299f2200]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27275] [ 4] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_bml_r2.so(+0x138e)[0x7f1222fb338e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27275] [ 5] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xd5)[0x7f12220db4e5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27275] [ 6] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f1229a0ce26]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27275] [ 7] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(MPI_Init+0x170)[0x7f1229a2be10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27275] [ 8] /hpc/apps/benchmarks/hpl/xhpl[0x401571]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27275] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f1228ecacdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27275] [10] /hpc/apps/benchmarks/hpl/xhpl[0x401439]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27275] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27276] [ 0] /lib64/libc.so.6(+0x32920)[0x7f565218a920]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27276] [ 1] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_btl_sm.so(+0x511a)[0x7f5647dfe11a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27276] [ 2] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_grow+0x239)[0x7f5652c9e0c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27276] [ 3] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7f5652c9e200]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27276] [ 4] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_bml_r2.so(+0x138e)[0x7f564c2f738e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27276] [ 5] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xd5)[0x7f564732d4e5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27276] [ 6] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f5652cb8e26]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27276] [ 7] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(MPI_Init+0x170)[0x7f5652cd7e10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27276] [ 8] /hpc/apps/benchmarks/hpl/xhpl[0x401571]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27276] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f5652176cdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27276] [10] /hpc/apps/benchmarks/hpl/xhpl[0x401439]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27276] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27277] [ 0] /lib64/libc.so.6(+0x32920)[0x7fbc00059920]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27277] [ 1] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_btl_sm.so(+0x511a)[0x7fbbf9de811a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27277] [ 2] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_grow+0x239)[0x7fbc00b6d0c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27277] [ 3] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7fbc00b6d200]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27277] [ 4] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_bml_r2.so(+0x138e)[0x7fbbfa1ef38e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27277] [ 5] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xd5)[0x7fbbf93174e5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27277] [ 6] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7fbc00b87e26]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27277] [ 7] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(MPI_Init+0x170)[0x7fbc00ba6e10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27277] [ 8] /hpc/apps/benchmarks/hpl/xhpl[0x401571]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27277] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fbc00045cdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27277] [10] /hpc/apps/benchmarks/hpl/xhpl[0x401439]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27277] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27278] [ 0] /lib64/libc.so.6(+0x32920)[0x7fbaf33a1920]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27278] [ 1] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_btl_sm.so(+0x511a)[0x7fbaed0a211a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27278] [ 2] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_grow+0x239)[0x7fbaf3eb50c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27278] [ 3] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7fbaf3eb5200]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27278] [ 4] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_bml_r2.so(+0x138e)[0x7fbaed4a938e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27278] [ 5] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xd5)[0x7fbaec5d14e5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27278] [ 6] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7fbaf3ecfe26]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27278] [ 7] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(MPI_Init+0x170)[0x7fbaf3eeee10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27278] [ 8] /hpc/apps/benchmarks/hpl/xhpl[0x401571]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27278] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fbaf338dcdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27278] [10] /hpc/apps/benchmarks/hpl/xhpl[0x401439]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27278] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27279] [ 0] /lib64/libc.so.6(+0x32920)[0x7fab71930920]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27279] [ 1] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_btl_sm.so(+0x511a)[0x7fab675f111a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27279] [ 2] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_grow+0x239)[0x7fab724440c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27279] [ 3] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7fab72444200]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27279] [ 4] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_bml_r2.so(+0x138e)[0x7fab679f838e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27279] [ 5] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xd5)[0x7fab66b204e5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27279] [ 6] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7fab7245ee26]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27279] [ 7] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(MPI_Init+0x170)[0x7fab7247de10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27279] [ 8] /hpc/apps/benchmarks/hpl/xhpl[0x401571]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27279] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fab7191ccdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27279] [10] /hpc/apps/benchmarks/hpl/xhpl[0x401439]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27279] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27280] [ 0] /lib64/libc.so.6(+0x32920)[0x7f0bc7a18920]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27280] [ 1] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_btl_sm.so(+0x511a)[0x7f0bc163b11a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27280] [ 2] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_grow+0x239)[0x7f0bc852c0c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27280] [ 3] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7f0bc852c200]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27280] [ 4] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_bml_r2.so(+0x138e)[0x7f0bc1a4238e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27280] [ 5] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xd5)[0x7f0bc0b6a4e5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27280] [ 6] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f0bc8546e26]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27280] [ 7] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(MPI_Init+0x170)[0x7f0bc8565e10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27280] [ 8] /hpc/apps/benchmarks/hpl/xhpl[0x401571]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27280] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f0bc7a04cdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27280] [10] /hpc/apps/benchmarks/hpl/xhpl[0x401439]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27280] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27281] [ 0] /lib64/libc.so.6(+0x32920)[0x7f49cf009920]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27281] [ 1] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_btl_sm.so(+0x511a)[0x7f49c8d0911a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27281] [ 2] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_grow+0x239)[0x7f49cfb1d0c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27281] [ 3] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7f49cfb1d200]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27281] [ 4] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_bml_r2.so(+0x138e)[0x7f49c911038e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27281] [ 5] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xd5)[0x7f49c82384e5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27281] [ 6] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f49cfb37e26]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27281] [ 7] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(MPI_Init+0x170)[0x7f49cfb56e10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27281] [ 8] /hpc/apps/benchmarks/hpl/xhpl[0x401571]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27281] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f49ceff5cdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27281] [10] /hpc/apps/benchmarks/hpl/xhpl[0x401439]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27281] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27282] [ 0] /lib64/libc.so.6(+0x32920)[0x7fe65bb89920]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27282] [ 1] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_btl_sm.so(+0x511a)[0x7fe6557b711a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27282] [ 2] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_grow+0x239)[0x7fe65c69d0c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27282] [ 3] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7fe65c69d200]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27282] [ 4] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_bml_r2.so(+0x138e)[0x7fe655bbe38e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27282] [ 5] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xd5)[0x7fe654ce64e5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27282] [ 6] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7fe65c6b7e26]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27282] [ 7] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(MPI_Init+0x170)[0x7fe65c6d6e10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27282] [ 8] /hpc/apps/benchmarks/hpl/xhpl[0x401571]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27282] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fe65bb75cdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27282] [10] /hpc/apps/benchmarks/hpl/xhpl[0x401439]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27282] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27283] [ 0] /lib64/libc.so.6(+0x32920)[0x7f79bd430920]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27283] [ 1] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_btl_sm.so(+0x511a)[0x7f79b31e911a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27283] [ 2] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_grow+0x239)[0x7f79bdf440c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27283] [ 3] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7f79bdf44200]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27283] [ 4] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_bml_r2.so(+0x138e)[0x7f79b35f038e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27283] [ 5] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xd5)[0x7f79b27184e5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27283] [ 6] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f79bdf5ee26]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27283] [ 7] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(MPI_Init+0x170)[0x7f79bdf7de10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27283] [ 8] /hpc/apps/benchmarks/hpl/xhpl[0x401571]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27283] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f79bd41ccdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27283] [10] /hpc/apps/benchmarks/hpl/xhpl[0x401439]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27283] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(+0x32920)[0x7f83c367f920]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27274] [ 1] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_btl_sm.so(+0x511a)[0x7f83bd2f211a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27274] [ 2] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_grow+0x239)[0x7f83c41930c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27274] [ 3] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7f83c4193200]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27274] [ 4] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_bml_r2.so(+0x138e)[0x7f83bd6f938e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27274] [ 5] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xd5)[0x7f83bc8214e5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27274] [ 6] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f83c41ade26]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27274] [ 7] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(MPI_Init+0x170)[0x7f83c41cce10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27274] [ 8] /hpc/apps/benchmarks/hpl/xhpl[0x401571]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27274] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f83c366bcdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27274] [10] /hpc/apps/benchmarks/hpl/xhpl[0x401439]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27274] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27284] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27284] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27284] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27284] Failing at address: 0x7f7273480e80
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27284] [ 0] /lib64/libc.so.6(+0x32920)[0x7f7287160920]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27284] [ 1] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_btl_sm.so(+0x511a)[0x7f7280ebf11a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27284] [ 2] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_grow+0x239)[0x7f7287c740c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27284] [ 3] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7f7287c74200]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27284] [ 4] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_bml_r2.so(+0x138e)[0x7f72812c638e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27284] [ 5] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xd5)[0x7f72803ee4e5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27284] [ 6] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f7287c8ee26]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27284] [ 7] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(MPI_Init+0x170)[0x7f7287cade10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27284] [ 8] /hpc/apps/benchmarks/hpl/xhpl[0x401571]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27284] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f728714ccdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27284] [10] /hpc/apps/benchmarks/hpl/xhpl[0x401439]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27284] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27272] [ 0] /lib64/libc.so.6(+0x32920)[0x7f646a415920]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27272] [ 1] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_btl_sm.so(+0x511a)[0x7f64641b911a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27272] [ 2] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_grow+0x239)[0x7f646af290c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27272] [ 3] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7f646af29200]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27272] [ 4] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_bml_r2.so(+0x138e)[0x7f64645c038e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27272] [ 5] /hpc/apps/mpi/openmpi/1.8.2/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xd5)[0x7f645f5344e5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27272] [ 6] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f646af43e26]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27272] [ 7] /hpc/apps/mpi/openmpi/1.8.2/lib/libmpi.so.1(MPI_Init+0x170)[0x7f646af62e10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27272] [ 8] /hpc/apps/benchmarks/hpl/xhpl[0x401571]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27272] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f646a401cdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27272] [10] /hpc/apps/benchmarks/hpl/xhpl[0x401439]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-9:27272] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 88 with PID 27269 on node csclprd3-0-9 exited on signal 7 (Bus error).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c. hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-6-1 slots=4 max-slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-6-5 slots=4 max-slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-0 slots=12 max-slots=24
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-1 slots=6 max-slots=12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-2 slots=6 max-slots=12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-3 slots=6 max-slots=12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-4 slots=6 max-slots=12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-5 slots=6 max-slots=12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-6 slots=6 max-slots=12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #total number of successfully tested non-hyperthreaded computes slots at this point is 56
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-7 slots=16 max-slots=32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #total number of successfully tested slots at this point is 72
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-8 slots=16 max-slots=32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #total number of successfully tested slots at this point is 88
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-9 slots=16 max-slots=32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #total number of slots at this point is 104
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #csclprd3-0-10 slots=16 max-slots=32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #csclprd3-0-11 slots=16 max-slots=32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #total number of slots at this point is 136
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users [users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Wednesday, April 08, 2015 11:31 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just for clarity: does the BIOS on the LGA2011 system have HT enabled?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 8, 2015, at 10:55 AM, Lane, William &lt;William.Lane_at_[hidden] &lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I added one of the newer LGA2011 nodes to my hostfile and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; re-ran the benchmark successfully and saw some strange results WRT the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; binding directives. Why are hyperthreading cores being used
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on the LGA2011 system but not any of other systems which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are mostly hyperthreaded Westmeres)? Isn't the --use-hwthread-cpus
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; switch supposed to prevent OpenMPI from using hyperthreaded
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cores?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI LAPACK invocation:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $MPI_DIR/bin/mpirun -np $NSLOTS --report-bindings --hostfile hostfile-single --mca btl_tcp_if_include eth0 --hetero-nodes --use-hwthread-cpus --prefix $MPI_DIR $BENCH_DIR/$APP_DIR/$APP_BIN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Where NSLOTS=72
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hostfile:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; csclprd3-6-1 slots=4 max-slots=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; csclprd3-6-5 slots=4 max-slots=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; csclprd3-0-0 slots=12 max-slots=24
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; csclprd3-0-1 slots=6 max-slots=12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; csclprd3-0-2 slots=6 max-slots=12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; csclprd3-0-3 slots=6 max-slots=12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; csclprd3-0-4 slots=6 max-slots=12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; csclprd3-0-5 slots=6 max-slots=12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; csclprd3-0-6 slots=6 max-slots=12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #total number of successfully tested non-hyperthreaded computes slots at this point is 56
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; csclprd3-0-7 slots=16 max-slots=32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LGA1366 Westmere w/two Intel Xeon X5675 6-core/12-hyperthread CPU's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:11848] MCW rank 11 bound to socket 1[core 7[hwt 0]]: [./././././.][./B/./././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:11848] MCW rank 12 bound to socket 0[core 2[hwt 0]]: [././B/././.][./././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:11848] MCW rank 13 bound to socket 1[core 8[hwt 0]]: [./././././.][././B/././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:11848] MCW rank 14 bound to socket 0[core 3[hwt 0]]: [./././B/./.][./././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:11848] MCW rank 15 bound to socket 1[core 9[hwt 0]]: [./././././.][./././B/./.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:11848] MCW rank 16 bound to socket 0[core 4[hwt 0]]: [././././B/.][./././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:11848] MCW rank 17 bound to socket 1[core 10[hwt 0]]: [./././././.][././././B/.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:11848] MCW rank 18 bound to socket 0[core 5[hwt 0]]: [./././././B][./././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:11848] MCW rank 19 bound to socket 1[core 11[hwt 0]]: [./././././.][./././././B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:11848] MCW rank 8 bound to socket 0[core 0[hwt 0]]: [B/././././.][./././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:11848] MCW rank 9 bound to socket 1[core 6[hwt 0]]: [./././././.][B/././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:11848] MCW rank 10 bound to socket 0[core 1[hwt 0]]: [./B/./././.][./././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but for the LGA2011 system w/two 8-core/16-hyperthread CPU's 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:30876] MCW rank 60 bound to socket 0[core 2[hwt 0-1]]: [../../BB/../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:30876] MCW rank 61 bound to socket 1[core 10[hwt 0-1]]: [../../../../../../../..][../../BB/../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:30876] MCW rank 62 bound to socket 0[core 3[hwt 0-1]]: [../../../BB/../../../..][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:30876] MCW rank 63 bound to socket 1[core 11[hwt 0-1]]: [../../../../../../../..][../../../BB/../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:30876] MCW rank 64 bound to socket 0[core 4[hwt 0-1]]: [../../../../BB/../../..][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:30876] MCW rank 65 bound to socket 1[core 12[hwt 0-1]]: [../../../../../../../..][../../../../BB/../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:30876] MCW rank 66 bound to socket 0[core 5[hwt 0-1]]: [../../../../../BB/../..][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:30876] MCW rank 67 bound to socket 1[core 13[hwt 0-1]]: [../../../../../../../..][../../../../../BB/../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:30876] MCW rank 68 bound to socket 0[core 6[hwt 0-1]]: [../../../../../../BB/..][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:30876] MCW rank 69 bound to socket 1[core 14[hwt 0-1]]: [../../../../../../../..][../../../../../../BB/..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:30876] MCW rank 70 bound to socket 0[core 7[hwt 0-1]]: [../../../../../../../BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:30876] MCW rank 71 bound to socket 1[core 15[hwt 0-1]]: [../../../../../../../..][../../../../../../../BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:30876] MCW rank 56 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:30876] MCW rank 57 bound to socket 1[core 8[hwt 0-1]]: [../../../../../../../..][BB/../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:30876] MCW rank 58 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:30876] MCW rank 59 bound to socket 1[core 9[hwt 0-1]]: [../../../../../../../..][../BB/../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users [users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Wednesday, April 08, 2015 10:26 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Apr 8, 2015, at 9:29 AM, Lane, William &lt;William.Lane_at_[hidden] &lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks for YOUR help,  I never
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; would've managed to get the LAPACK
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; benchmark running on more than one
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node in our cluster without your help.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph, is hyperthreading more of a curse
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; than an advantage for HPC applications?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Wow, you&#146;ll get a lot of argument over that issue! From what I can see, it is very application dependent. Some apps appear to benefit, while others can even suffer from it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think we should support a mix of nodes in this usage, so I&#146;ll try to come up with a way to do so.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm going to go through all the OpenMPI 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; articles on hyperthreading and NUMA to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; see if that will shed any light on these
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; issues.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Bill L.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: users [users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sent: Tuesday, April 07, 2015 7:32 PM
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I&#146;m not sure our man pages are good enough to answer your question, but here is the URL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/doc/v1.8/">http://www.open-mpi.org/doc/v1.8/</a> &lt;<a href="http://www.open-mpi.org/doc/v1.8/">http://www.open-mpi.org/doc/v1.8/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I&#146;m a tad tied up right now, but I&#146;ll try to address this prior to 1.8.5 release. Thanks for all that debug effort! Helps a bunch.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Apr 7, 2015, at 1:17 PM, Lane, William &lt;William.Lane_at_[hidden] &lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I've finally had some luck using the following:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $MPI_DIR/bin/mpirun -np $NSLOTS --report-bindings --hostfile hostfile-single --mca btl_tcp_if_include eth0 --hetero-nodes --use-hwthread-cpus --prefix $MPI_DIR $BENCH_DIR/$APP_DIR/$APP_BIN
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Where $NSLOTS was 56 and my hostfile hostfile-single is:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-0 slots=12 max-slots=24
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-1 slots=6 max-slots=12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-2 slots=6 max-slots=12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-3 slots=6 max-slots=12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-4 slots=6 max-slots=12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-5 slots=6 max-slots=12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-6 slots=6 max-slots=12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-6-1 slots=4 max-slots=4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-6-5 slots=4 max-slots=4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The max-slots differs from slots on some nodes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; because I include the hyperthreaded cores in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the max-slots, the last two nodes have CPU's that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; don't support hyperthreading at all.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Does --use-hwthread-cpus prevent slots from
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; being assigned to hyperthreading cores?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; For some reason the manpage for OpenMPI 1.8.2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; isn't installed on our CentOS 6.3 systems is there a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; URL I can I find a copy of the manpages for OpenMPI 1.8.2?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -Bill Lane
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: users [users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sent: Monday, April 06, 2015 1:39 PM
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hmmm&#133;well, that shouldn&#146;t be the issue. To check, try running it with &#147;bind-to none&#148;. If you can get a backtrace telling us where it is crashing, that would also help.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Apr 6, 2015, at 12:24 PM, Lane, William &lt;William.Lane_at_[hidden] &lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; For the following two different commandline invocations of the LAPACK benchmark
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; $MPI_DIR/bin/mpirun -np $NSLOTS --report-bindings --hostfile hostfile-no_slots --mca btl_tcp_if_include eth0 --hetero-nodes --use-hwthread-cpus --bind-to hwthread --prefix $MPI_DIR $BENCH_DIR/$APP_DIR/$APP_BIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; $MPI_DIR/bin/mpirun -np $NSLOTS --report-bindings --hostfile hostfile-no_slots --mca btl_tcp_if_include eth0 --hetero-nodes --bind-to-core --prefix $MPI_DIR $BENCH_DIR/$APP_DIR/$APP_BIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm receiving the same kinds of OpenMPI error messages (but for different nodes in the ring):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         [csclprd3-0-16:25940] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         [csclprd3-0-16:25940] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         [csclprd3-0-16:25940] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         [csclprd3-0-16:25940] Failing at address: 0x7f8b1b5a2600
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         mpirun noticed that process rank 82 with PID 25936 on node csclprd3-0-16 exited on signal 7 (Bus error).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         16 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; It seems to occur on systems that have more than one, physical CPU installed. Could
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; this be due to a lack of the correct NUMA libraries being installed?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -Bill L.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; From: users [users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sent: Sunday, April 05, 2015 6:09 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Apr 5, 2015, at 5:58 PM, Lane, William &lt;William.Lane_at_[hidden] &lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I think some of the Intel Blade systems in the cluster are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; dual core, but don't support hyperthreading. Maybe it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; would be better to exclude hyperthreading altogether
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; from submitted OpenMPI jobs?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Yes - or you can add &quot;--hetero-nodes -use-hwthread-cpus --bind-to hwthread&quot; to the cmd line. This tells mpirun that the nodes aren't all the same, and so it has to look at each node's topology instead of taking the first node as the template for everything. The second tells it to use the HTs as independent cpus where they are supported.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm not entirely sure the suggestion will work - if we hit a place where HT isn't supported, we may balk at being asked to bind to HTs. I can probably make a change that supports this kind of hetero arrangement (perhaps something like bind-to pu) - might make it into 1.8.5 (we are just starting the release process on it now).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OpenMPI doesn't crash, but it doesn't run the LAPACK
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; benchmark either.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks again Ralph.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Bill L.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; From: users [users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sent: Wednesday, April 01, 2015 8:40 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Bingo - you said the magic word. This is a terminology issue. When we say &quot;core&quot;, we mean the old definition of &quot;core&quot;, not &quot;hyperthreads&quot;. If you want to use HTs as your base processing unit and bind to them, then you need to specify --bind-to hwthread. That warning should then go away.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; We don't require a swap region be mounted - I didn't see anything in your original message indicating that OMPI had actually crashed, but just wasn't launching due to the above issue. Were you actually seeing crashes as well?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Wed, Apr 1, 2015 at 8:31 AM, Lane, William &lt;William.Lane_at_[hidden] &lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here's the associated hostfile:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #openMPI hostfile for csclprd3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #max slots prevents oversubscribing csclprd3-0-9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-0 slots=12 max-slots=12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-1 slots=6 max-slots=6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-2 slots=6 max-slots=6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-3 slots=6 max-slots=6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-4 slots=6 max-slots=6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-5 slots=6 max-slots=6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-6 slots=6 max-slots=6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-7 slots=32 max-slots=32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-8 slots=32 max-slots=32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-9 slots=32 max-slots=32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-10 slots=32 max-slots=32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-11 slots=32 max-slots=32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-12 slots=12 max-slots=12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-13 slots=24 max-slots=24
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-14 slots=16 max-slots=16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-15 slots=16 max-slots=16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-16 slots=24 max-slots=24
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-0-17 slots=24 max-slots=24
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-6-1 slots=4 max-slots=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; csclprd3-6-5 slots=4 max-slots=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The number of slots also includes hyperthreading
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cores.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; One more question, would not having defined swap
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; partitions on all the nodes in the ring cause OpenMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to crash? Because no swap partitions are defined
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; for any of the above systems.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -Bill L.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; From: users [users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sent: Wednesday, April 01, 2015 5:04 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The warning about binding to memory is due to not having numactl-devel installed on the system. The job would still run, but we are warning you that we cannot bind memory to the same domain as the core where we bind the process. Can cause poor performance, but not fatal. I forget the name of the param, but you can tell us to &quot;shut up&quot; :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The other warning/error indicates that we aren't seeing enough cores on the allocation you gave us via the hostile to support one proc/core - i.e., we didn't at least 128 cores in the sum of the nodes you told us about. I take it you were expecting that there were that many or more?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Wed, Apr 1, 2015 at 12:54 AM, Lane, William &lt;William.Lane_at_[hidden] &lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm having problems running OpenMPI jobs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (using a hostfile) on an HPC cluster running
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ROCKS on CentOS 6.3. I'm running OpenMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; outside of Sun Grid Engine (i.e. it is not submitted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; as a job to SGE). The program being run is a LAPACK
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; benchmark. The commandline parameter I'm 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; using to run the jobs is:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $MPI_DIR/bin/mpirun -np $NSLOTS -bind-to-core -report-bindings --hostfile hostfile --mca btl_tcp_if_include eth0 --prefix $MPI_DIR $BENCH_DIR/$APP_DIR/$APP_BIN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Where MPI_DIR=/hpc/apps/mpi/openmpi/1.8.2/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NSLOTS=128
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm getting errors of the form and OpenMPI never runs the LAPACK benchmark:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    support binding memory to the process location.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Node:  csclprd3-0-11
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    This usually is due to not having the required NUMA support installed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    on the node. In some Linux distributions, the required support is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    contained in the libnumactl and libnumactl-devel packages.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    This is a warning only; your job will continue, though performance may be degraded.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    processes than cpus on a resource:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       Bind to:     CORE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       Node:        csclprd3-0-11
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       #processes:  2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       #cpus:       1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    option to your binding directive.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The only installed numa packages are:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; numactl.x86_64                                                2.0.7-3.el6                        @centos6.3-x86_64-0/$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When I search for the available NUMA packages I find:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; yum search numa | less
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Loaded plugins: fastestmirror
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Loading mirror speeds from cached hostfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         ============================== N/S Matched: numa ===============================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         numactl-devel.i686 : Development package for building Applications that use numa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         numactl-devel.x86_64 : Development package for building Applications that use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                              : numa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         numad.x86_64 : NUMA user daemon
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         numactl.i686 : Library for tuning for Non Uniform Memory Access machines
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         numactl.x86_64 : Library for tuning for Non Uniform Memory Access machines
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do I need to install additional and/or different NUMA packages in order to get OpenMPI to work
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; on this cluster?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -Bill Lane
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/users/2015/04/index.php">http://www.open-mpi.org/community/lists/users/2015/04/index.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/index.php">http://www.open-mpi.org/community/lists/users/2015/04/index.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26589.php">http://www.open-mpi.org/community/lists/users/2015/04/26589.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26589.php">http://www.open-mpi.org/community/lists/users/2015/04/26589.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26611.php">http://www.open-mpi.org/community/lists/users/2015/04/26611.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26611.php">http://www.open-mpi.org/community/lists/users/2015/04/26611.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26618.php">http://www.open-mpi.org/community/lists/users/2015/04/26618.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26618.php">http://www.open-mpi.org/community/lists/users/2015/04/26618.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26643.php">http://www.open-mpi.org/community/lists/users/2015/04/26643.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26643.php">http://www.open-mpi.org/community/lists/users/2015/04/26643.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26655.php">http://www.open-mpi.org/community/lists/users/2015/04/26655.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26655.php">http://www.open-mpi.org/community/lists/users/2015/04/26655.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26659.php">http://www.open-mpi.org/community/lists/users/2015/04/26659.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26659.php">http://www.open-mpi.org/community/lists/users/2015/04/26659.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26664.php">http://www.open-mpi.org/community/lists/users/2015/04/26664.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26664.php">http://www.open-mpi.org/community/lists/users/2015/04/26664.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26805.php">http://www.open-mpi.org/community/lists/users/2015/04/26805.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26805.php">http://www.open-mpi.org/community/lists/users/2015/04/26805.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26806/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26807.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="26805.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>In reply to:</strong> <a href="26805.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
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
