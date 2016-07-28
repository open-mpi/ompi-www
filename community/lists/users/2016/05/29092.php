<?
$subject_val = "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 05:13:49 2016" -->
<!-- isoreceived="20160505091349" -->
<!-- sent="Thu, 5 May 2016 18:13:48 +0900" -->
<!-- isosent="20160505091348" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)" -->
<!-- id="CAAkFZ5thQn3L5PtdHS95pm4agwR=adjUZpE4cWLHaZhwyDUB8g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6972a363-00ae-2e60-2f7c-9aac16d376ac_at_informatik.hs-fulda.de" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-05 05:13:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29093.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Previous message:</strong> <a href="29091.php">Gilles Gouaillardet: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>In reply to:</strong> <a href="29090.php">Siegmar Gross: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29096.php">Siegmar Gross: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<li><strong>Reply:</strong> <a href="29096.php">Siegmar Gross: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar,
<br>
<p>is this Solaris 10 specific (e.g. Solaris 11 works fine)
<br>
<p>( I only have a x86_64 vm with Solaris 11 and sun compilers ...)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, May 5, 2016, Siegmar Gross &lt;
<br>
siegmar.gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph and Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 04.05.2016 um 20:02 schrieb rhc54:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @ggouaillardet &lt;<a href="https://github.com/ggouaillardet">https://github.com/ggouaillardet</a>&gt; Where does this stand?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#148;
</span><br>
<span class="quotelev2">&gt;&gt; You are receiving this because you were mentioned.
</span><br>
<span class="quotelev2">&gt;&gt; Reply to this email directly or view it on GitHub
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="https://github.com/open-mpi/ompi/issues/1569#issuecomment-216950103">https://github.com/open-mpi/ompi/issues/1569#issuecomment-216950103</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With my last installed version of openmpi-v1.10.x all of my
</span><br>
<span class="quotelev1">&gt; spawn programs fail on Solaris Sparc and x86_64 with the same
</span><br>
<span class="quotelev1">&gt; error for both compilers (gcc-5.1.0 and Sun C 5.13). Everything
</span><br>
<span class="quotelev1">&gt; works as expected on Linux. Tomorrow I'm back in my office and
</span><br>
<span class="quotelev1">&gt; I can try to build and test the latest version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sunpc1 fd1026 108 ompi_info | grep -e &quot;OPAL repo&quot; -e &quot;C compiler absolute&quot;
</span><br>
<span class="quotelev1">&gt;       OPAL repo revision: v1.10.2-163-g42da15d
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /opt/solstudio12.4/bin/cc
</span><br>
<span class="quotelev1">&gt; sunpc1 fd1026 114 mpiexec -np 1 --host sunpc1,sunpc1,sunpc1,sunpc1,sunpc1
</span><br>
<span class="quotelev1">&gt; spawnmaster
</span><br>
<span class="quotelev1">&gt; [sunpc1:00957] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [sunpc1:00957] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev1">&gt; [sunpc1:00957] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [sunpc1:00957] Failing at address: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalbacktrace_print+0x2d
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:0x2383c
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1:0xdd6b6
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1:0xd1f82
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1:strlen+0x30 [ Signal 11 (SEGV)]
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1:vsnprintf+0x51
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1:vasprintf+0x49
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalshow_help_vstring+0x83
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-rte.so.20.0.0:orteshow_help+0xd6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:ompi_mpi_nit+0x1010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:PMPI_Init0x9d
</span><br>
<span class="quotelev1">&gt; /home/fd1026/SunOS/x86_64/bin/spawn_master:main+0x21
</span><br>
<span class="quotelev1">&gt; [sunpc1:00957] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 0 with PID 957 on node sunpc1 exited on
</span><br>
<span class="quotelev1">&gt; signa 11 (Segmentation Fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sunpc1 fd1026 115 mpiexec -np 1 --host sunpc1,sunpc1,sunpc1,sunpc1,sunpc1
</span><br>
<span class="quotelev1">&gt; spawnmultiple_master
</span><br>
<span class="quotelev1">&gt; [sunpc1:00960] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [sunpc1:00960] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev1">&gt; [sunpc1:00960] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [sunpc1:00960] Failing at address: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalbacktrace_print+0x2d
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:0x2383c
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1:0xdd6b6
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1:0xd1f82
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1:strlen+0x30 [ Signal 11 (SEGV)]
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1:vsnprintf+0x51
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1:vasprintf+0x49
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalshow_help_vstring+0x83
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-rte.so.20.0.0:orteshow_help+0xd6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:ompi_mpi_nit+0x1010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:PMPI_Init0x9d
</span><br>
<span class="quotelev1">&gt; /home/fd1026/SunOS/x86_64/bin/spawn_multiple_master:main+0x5d
</span><br>
<span class="quotelev1">&gt; [sunpc1:00960] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 0 with PID 960 on node sunpc1 exited on
</span><br>
<span class="quotelev1">&gt; signa 11 (Segmentation Fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sunpc1 fd1026 116 mpiexec -np 1 --host sunpc1,sunpc1,sunpc1,sunpc1,sunpc1
</span><br>
<span class="quotelev1">&gt; spawnintra_comm
</span><br>
<span class="quotelev1">&gt; [sunpc1:00963] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [sunpc1:00963] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev1">&gt; [sunpc1:00963] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [sunpc1:00963] Failing at address: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalbacktrace_print+0x2d
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:0x2383c
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1:0xdd6b6
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1:0xd1f82
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1:strlen+0x30 [ Signal 11 (SEGV)]
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1:vsnprintf+0x51
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1:vasprintf+0x49
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalshow_help_vstring+0x83
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-rte.so.20.0.0:orteshow_help+0xd6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:ompi_mpi_nit+0x1010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:PMPI_Init0x9d
</span><br>
<span class="quotelev1">&gt; /home/fd1026/SunOS/x86_64/bin/spawn_intra_comm:main+0x23
</span><br>
<span class="quotelev1">&gt; [sunpc1:00963] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 0 with PID 963 on node sunpc1 exited on
</span><br>
<span class="quotelev1">&gt; signa 11 (Segmentation Fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; sunpc1 fd1026 117
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29090.php">http://www.open-mpi.org/community/lists/users/2016/05/29090.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29092/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29093.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Previous message:</strong> <a href="29091.php">Gilles Gouaillardet: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>In reply to:</strong> <a href="29090.php">Siegmar Gross: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29096.php">Siegmar Gross: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<li><strong>Reply:</strong> <a href="29096.php">Siegmar Gross: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
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
