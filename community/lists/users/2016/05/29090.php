<?
$subject_val = "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 04:59:17 2016" -->
<!-- isoreceived="20160505085917" -->
<!-- sent="Thu, 5 May 2016 10:58:51 +0200" -->
<!-- isosent="20160505085851" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)" -->
<!-- id="6972a363-00ae-2e60-2f7c-9aac16d376ac_at_informatik.hs-fulda.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="open-mpi/ompi/issues/1569/216950103_at_github.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-05 04:58:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29091.php">Gilles Gouaillardet: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Previous message:</strong> <a href="29089.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29092.php">Gilles Gouaillardet: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<li><strong>Reply:</strong> <a href="29092.php">Gilles Gouaillardet: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph and Gilles,
<br>
<p>Am 04.05.2016 um 20:02 schrieb rhc54:
<br>
<span class="quotelev1">&gt; @ggouaillardet &lt;<a href="https://github.com/ggouaillardet">https://github.com/ggouaillardet</a>&gt; Where does this stand?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#148;
</span><br>
<span class="quotelev1">&gt; You are receiving this because you were mentioned.
</span><br>
<span class="quotelev1">&gt; Reply to this email directly or view it on GitHub
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://github.com/open-mpi/ompi/issues/1569#issuecomment-216950103">https://github.com/open-mpi/ompi/issues/1569#issuecomment-216950103</a>&gt;
</span><br>
<p>With my last installed version of openmpi-v1.10.x all of my
<br>
spawn programs fail on Solaris Sparc and x86_64 with the same
<br>
error for both compilers (gcc-5.1.0 and Sun C 5.13). Everything
<br>
works as expected on Linux. Tomorrow I'm back in my office and
<br>
I can try to build and test the latest version.
<br>
<p>sunpc1 fd1026 108 ompi_info | grep -e &quot;OPAL repo&quot; -e &quot;C compiler absolute&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: v1.10.2-163-g42da15d
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /opt/solstudio12.4/bin/cc
<br>
sunpc1 fd1026 114 mpiexec -np 1 --host sunpc1,sunpc1,sunpc1,sunpc1,sunpc1 
<br>
spawnmaster
<br>
[sunpc1:00957] *** Process received signal ***
<br>
[sunpc1:00957] Signal: Segmentation Fault (11)
<br>
[sunpc1:00957] Signal code: Address not mapped (1)
<br>
[sunpc1:00957] Failing at address: 0
<br>
/export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalbacktrace_print+0x2d
<br>
/export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:0x2383c
<br>
/lib/amd64/libc.so.1:0xdd6b6
<br>
/lib/amd64/libc.so.1:0xd1f82
<br>
/lib/amd64/libc.so.1:strlen+0x30 [ Signal 11 (SEGV)]
<br>
/lib/amd64/libc.so.1:vsnprintf+0x51
<br>
/lib/amd64/libc.so.1:vasprintf+0x49
<br>
/export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalshow_help_vstring+0x83
<br>
/export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-rte.so.20.0.0:orteshow_help+0xd6
<br>
/export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:ompi_mpi_nit+0x1010
<br>
/export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:PMPI_Init0x9d
<br>
/home/fd1026/SunOS/x86_64/bin/spawn_master:main+0x21
<br>
[sunpc1:00957] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 957 on node sunpc1 exited on 
<br>
signa 11 (Segmentation Fault).
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>sunpc1 fd1026 115 mpiexec -np 1 --host sunpc1,sunpc1,sunpc1,sunpc1,sunpc1 
<br>
spawnmultiple_master
<br>
[sunpc1:00960] *** Process received signal ***
<br>
[sunpc1:00960] Signal: Segmentation Fault (11)
<br>
[sunpc1:00960] Signal code: Address not mapped (1)
<br>
[sunpc1:00960] Failing at address: 0
<br>
/export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalbacktrace_print+0x2d
<br>
/export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:0x2383c
<br>
/lib/amd64/libc.so.1:0xdd6b6
<br>
/lib/amd64/libc.so.1:0xd1f82
<br>
/lib/amd64/libc.so.1:strlen+0x30 [ Signal 11 (SEGV)]
<br>
/lib/amd64/libc.so.1:vsnprintf+0x51
<br>
/lib/amd64/libc.so.1:vasprintf+0x49
<br>
/export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalshow_help_vstring+0x83
<br>
/export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-rte.so.20.0.0:orteshow_help+0xd6
<br>
/export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:ompi_mpi_nit+0x1010
<br>
/export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:PMPI_Init0x9d
<br>
/home/fd1026/SunOS/x86_64/bin/spawn_multiple_master:main+0x5d
<br>
[sunpc1:00960] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 960 on node sunpc1 exited on 
<br>
signa 11 (Segmentation Fault).
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>sunpc1 fd1026 116 mpiexec -np 1 --host sunpc1,sunpc1,sunpc1,sunpc1,sunpc1 
<br>
spawnintra_comm
<br>
[sunpc1:00963] *** Process received signal ***
<br>
[sunpc1:00963] Signal: Segmentation Fault (11)
<br>
[sunpc1:00963] Signal code: Address not mapped (1)
<br>
[sunpc1:00963] Failing at address: 0
<br>
/export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalbacktrace_print+0x2d
<br>
/export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:0x2383c
<br>
/lib/amd64/libc.so.1:0xdd6b6
<br>
/lib/amd64/libc.so.1:0xd1f82
<br>
/lib/amd64/libc.so.1:strlen+0x30 [ Signal 11 (SEGV)]
<br>
/lib/amd64/libc.so.1:vsnprintf+0x51
<br>
/lib/amd64/libc.so.1:vasprintf+0x49
<br>
/export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalshow_help_vstring+0x83
<br>
/export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-rte.so.20.0.0:orteshow_help+0xd6
<br>
/export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:ompi_mpi_nit+0x1010
<br>
/export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:PMPI_Init0x9d
<br>
/home/fd1026/SunOS/x86_64/bin/spawn_intra_comm:main+0x23
<br>
[sunpc1:00963] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 963 on node sunpc1 exited on 
<br>
signa 11 (Segmentation Fault).
<br>
--------------------------------------------------------------------------
<br>
sunpc1 fd1026 117
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29091.php">Gilles Gouaillardet: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Previous message:</strong> <a href="29089.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29092.php">Gilles Gouaillardet: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<li><strong>Reply:</strong> <a href="29092.php">Gilles Gouaillardet: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
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
