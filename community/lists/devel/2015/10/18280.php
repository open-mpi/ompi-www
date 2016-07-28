<?
$subject_val = "[OMPI devel] PMIX deadlock";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 12:25:20 2015" -->
<!-- isoreceived="20151027162520" -->
<!-- sent="Tue, 27 Oct 2015 12:25:16 -0400" -->
<!-- isosent="20151027162516" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] PMIX deadlock" -->
<!-- id="CAMJJpkXrp=WzGy3QrtPNDL5grfS4F_d2Qxfb9Vd8=eEm9w4ovg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] PMIX deadlock<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 12:25:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18281.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Previous message:</strong> <a href="18279.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Compile only one framework/component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18281.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Reply:</strong> <a href="18281.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I get intermittent deadlocks wit the latest trunk. The smallest reproducer
<br>
is a shell for loop around a small (2 processes) short (20 seconds) MPI
<br>
application. After few tens of iterations the MPI_Init will deadlock with
<br>
the following backtrace:
<br>
<p>#0  0x00007fa94b5d9aed in nanosleep () from /lib64/libc.so.6
<br>
#1  0x00007fa94b60ec94 in usleep () from /lib64/libc.so.6
<br>
#2  0x00007fa94960ba08 in OPAL_PMIX_PMIX1XX_PMIx_Fence (procs=0x0,
<br>
nprocs=0, info=0x7ffd7934fb90,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ninfo=1) at src/client/pmix_client_fence.c:100
<br>
#3  0x00007fa9498376a2 in pmix1_fence (procs=0x0, collect_data=1) at
<br>
pmix1_client.c:305
<br>
#4  0x00007fa94bb39ba4 in ompi_mpi_init (argc=3, argv=0x7ffd793500a8,
<br>
requested=3,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;provided=0x7ffd7934ff94) at runtime/ompi_mpi_init.c:645
<br>
#5  0x00007fa94bb77281 in PMPI_Init_thread (argc=0x7ffd7934ff8c,
<br>
argv=0x7ffd7934ff80, required=3,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;provided=0x7ffd7934ff94) at pinit_thread.c:69
<br>
#6  0x000000000040150f in main (argc=3, argv=0x7ffd793500a8) at
<br>
osu_mbw_mr.c:86
<br>
<p>On my machines this is reproducible at 100% after anywhere between 50 and
<br>
100 iterations.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18280/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18281.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Previous message:</strong> <a href="18279.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Compile only one framework/component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18281.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Reply:</strong> <a href="18281.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
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
