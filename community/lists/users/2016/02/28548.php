<?
$subject_val = "[OMPI users] mpirun hanging after MPI_Abort";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 18 23:29:41 2016" -->
<!-- isoreceived="20160219042941" -->
<!-- sent="Fri, 19 Feb 2016 15:29:33 +1100" -->
<!-- isosent="20160219042933" -->
<!-- name="Ben Menadue" -->
<!-- email="ben.menadue_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun hanging after MPI_Abort" -->
<!-- id="009b01d16ace$230878a0$691969e0$_at_nci.org.au" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] mpirun hanging after MPI_Abort<br>
<strong>From:</strong> Ben Menadue (<em>ben.menadue_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-18 23:29:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28549.php">Ralph Castain: "Re: [OMPI users] mpirun hanging after MPI_Abort"</a>
<li><strong>Previous message:</strong> <a href="28547.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28549.php">Ralph Castain: "Re: [OMPI users] mpirun hanging after MPI_Abort"</a>
<li><strong>Reply:</strong> <a href="28549.php">Ralph Castain: "Re: [OMPI users] mpirun hanging after MPI_Abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm investigating an issue with mpirun *sometimes* hanging after programs
<br>
call MPI_Abort... all of the MPI processes have terminated, however the
<br>
mpirun is still there. This happens with 1.8.8 and 1.10.2. There look to be
<br>
two threads, one in this path:
<br>
<p>#0  0x00007fa09c3143b3 in select () from /lib64/libc.so.6
<br>
#1  0x00007fa09b001e2c in listen_thread (obj=0x7fa09b2109e8) at
<br>
../../../../../../../../orte/mca/oob/tcp/oob_tcp_listener.c:685
<br>
#2  0x00007fa09c5ceaa1 in start_thread () from /lib64/libpthread.so.0
<br>
#3  0x00007fa09c31b93d in clone () from /lib64/libc.so.6
<br>
<p>and the other in this:
<br>
<p>0  0x00007fa09c312113 in poll () from /lib64/libc.so.6
<br>
#1  0x00007fa09d318e7d in poll_dispatch (base=0x1568a80, tv=0x0) at
<br>
../../../../../../../../../opal/mca/event/libevent2021/libevent/poll.c:165
<br>
#2  0x00007fa09d30d96c in opal_libevent2021_event_base_loop (base=0x1568a80,
<br>
flags=1) at
<br>
../../../../../../../../../opal/mca/event/libevent2021/libevent/event.c:1633
<br>
#3  0x00000000004056fc in orterun (argc=2, argv=0x7ffe70248078) at
<br>
../../../../../../../orte/tools/orterun/orterun.c:1142
<br>
#4  0x0000000000403614 in main (argc=2, argv=0x7ffe70248078) at
<br>
../../../../../../../orte/tools/orterun/main.c:13
<br>
<p>But since this is in mpirun itself, I'm not sure how to delve deeper - is
<br>
there an MCA *_base_verbose parameter (or equivalent) that works on the
<br>
mpirun?
<br>
<p>Cheers,
<br>
Ben
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28549.php">Ralph Castain: "Re: [OMPI users] mpirun hanging after MPI_Abort"</a>
<li><strong>Previous message:</strong> <a href="28547.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28549.php">Ralph Castain: "Re: [OMPI users] mpirun hanging after MPI_Abort"</a>
<li><strong>Reply:</strong> <a href="28549.php">Ralph Castain: "Re: [OMPI users] mpirun hanging after MPI_Abort"</a>
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
