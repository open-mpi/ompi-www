<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 20 18:16:27 2013" -->
<!-- isoreceived="20131220231627" -->
<!-- sent="Fri, 20 Dec 2013 15:16:24 -0800" -->
<!-- isosent="20131220231624" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs" -->
<!-- id="CAAvDA150g1Qg_T6C+Q+f73Y0bSUrjPUw8ow0rt5NYPEj+9jkqg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA1496FHnoPU6hnCYk30k+d-eszYWNc1jJPUC7xOLzA9MQw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-20 18:16:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13540.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>Previous message:</strong> <a href="13538.php">Dave Goodell (dgoodell): "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>In reply to:</strong> <a href="13536.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13543.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="13543.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Below is the backtrace again, this time configured w/ --enable-debug and
<br>
for all threads.
<br>
-Paul
<br>
<p>Thread 2 (thread 1021110):
<br>
#0  0x00001bc0ef6c5e3a in nanosleep () at &lt;stdin&gt;:2
<br>
#1  0x00001bc0f317c2d4 in nanosleep (rqtp=0x7f7ffffbc900, rmtp=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at /usr/src/lib/librthread/rthread_cancel.c:274
<br>
#2  0x00001bc0f2cd4621 in orte_routed_base_register_sync (setup=true)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7-latest/orte/mca/routed/base/routed_base_fns.c:344
<br>
#3  0x00001bc0efc5d602 in init_routes (job=3563782145, ndat=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7-latest/orte/mca/routed/binomial/routed_binomial.c:705
<br>
#4  0x00001bc0f2c9c832 in orte_ess_base_app_setup (db_restrict_local=true)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7-latest/orte/mca/ess/base/ess_base_std_app.c:233
<br>
#5  0x00001bc0f39ea9ec in rte_init ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7-latest/orte/mca/ess/env/ess_env_module.c:146
<br>
#6  0x00001bc0f2c68764 in orte_init (pargc=0x0, pargv=0x0, flags=32)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7-latest/orte/runtime/orte_init.c:158
<br>
#7  0x00001bc0f75061c5 in ompi_mpi_init (argc=1, argv=0x7f7ffffbced0,
<br>
requested=0, provided=0x7f7ffffbce38)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7-latest/ompi/runtime/ompi_mpi_init.c:451
<br>
#8  0x00001bc0f7544b96 in PMPI_Init (argc=0x7f7ffffbce6c,
<br>
argv=0x7f7ffffbce60) at pinit.c:84
<br>
#9  0x00001bbeec701093 in main (argc=1, argv=0x7f7ffffbced0) at ring_c.c:19
<br>
Current language:  auto; currently asm
<br>
<p>Thread 1 (thread 1023703):
<br>
#0  0x00001bc0ef6d68fa in poll () at &lt;stdin&gt;:2
<br>
#1  0x00001bc0f317c0fd in poll (fds=0x1bc0f9482d00, nfds=2, timeout=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at /usr/src/lib/librthread/rthread_cancel.c:331
<br>
#2  0x00001bc0eebf47a8 in poll_dispatch (base=0x1bc0f5987400, tv=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7-latest/opal/mca/event/libevent2021/libevent/poll.c:165
<br>
#3  0x00001bc0eebe8314 in opal_libevent2021_event_base_loop
<br>
(base=0x1bc0f5987400, flags=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7-latest/opal/mca/event/libevent2021/libevent/event.c:1631
<br>
#4  0x00001bc0f2c68855 in orte_progress_thread_engine (obj=0x1bc0f310e160)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7-latest/orte/runtime/orte_init.c:180
<br>
#5  0x00001bc0f317911e in _rthread_start (v=Variable &quot;v&quot; is not available.
<br>
) at /usr/src/lib/librthread/rthread.c:122
<br>
#6  0x00001bc0ef6c003b in __tfork_thread () at
<br>
/usr/src/lib/libc/arch/amd64/sys/tfork_thread.S:75
<br>
Cannot access memory at address 0x1bc0f857c000
<br>
<p><p><p>On Fri, Dec 20, 2013 at 2:48 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, I should have thought of that myself.
</span><br>
<span class="quotelev1">&gt; See below for backtrace from a singleton run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm starting an --enable-debug build to maybe get some line number info
</span><br>
<span class="quotelev1">&gt; too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x00000406457a9e3a in nanosleep () at &lt;stdin&gt;:2
</span><br>
<span class="quotelev1">&gt; #1  0x000004063947e2d4 in nanosleep (rqtp=0x7f7ffffeca30, rmtp=0x0)
</span><br>
<span class="quotelev1">&gt;     at /usr/src/lib/librthread/rthread_cancel.c:274
</span><br>
<span class="quotelev1">&gt; #2  0x0000040644a5a89b in orte_routed_base_register_sync ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/lib/libopen-rte.so.7.0
</span><br>
<span class="quotelev1">&gt; #3  0x00000406490d943c in init_routes ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/lib/openmpi/mca_routed_binomial.so
</span><br>
<span class="quotelev1">&gt; #4  0x0000040644a3c37f in orte_ess_base_app_setup ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/lib/libopen-rte.so.7.0
</span><br>
<span class="quotelev1">&gt; #5  0x000004063eb1797d in rte_init ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/lib/openmpi/mca_ess_env.so
</span><br>
<span class="quotelev1">&gt; #6  0x0000040644a1a3fe in orte_init ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/lib/libopen-rte.so.7.0
</span><br>
<span class="quotelev1">&gt; #7  0x00000406482c7976 in ompi_mpi_init ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/lib/libmpi.so.4.0
</span><br>
<span class="quotelev1">&gt; #8  0x00000406482eac92 in PMPI_Init ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/lib/libmpi.so.4.0
</span><br>
<span class="quotelev1">&gt; #9  0x0000040438c01093 in main (argc=1, argv=0x7f7ffffece60) at ring_c.c:19
</span><br>
<span class="quotelev1">&gt; Current language:  auto; currently asm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 20, 2013 at 2:38 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Paul -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any chance you could grab a stack trace from the mpi app? That's probably
</span><br>
<span class="quotelev2">&gt;&gt; the fastest next step
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent with Good (www.good.com)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; *From: *Paul Hargrove [phhargrove_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; *Sent: *Friday, December 20, 2013 03:33 PM Mountain Standard Time
</span><br>
<span class="quotelev2">&gt;&gt; *To: *Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; *Subject: *[EXTERNAL] [OMPI devel] 1.7.4rc2r30031 - OpenBSD-5 mpirun
</span><br>
<span class="quotelev2">&gt;&gt; hangs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With plenty of help from Jeff and Ralph's bug fixes in the past 24 hours,
</span><br>
<span class="quotelev2">&gt;&gt; I can now build OMPI for NetBSD.  However, running even a simple example
</span><br>
<span class="quotelev2">&gt;&gt; fails:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Having set PATH and LD_LIBARY_PATH:
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 1 examples/ring_c
</span><br>
<span class="quotelev2">&gt;&gt; just hangs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Output from &quot;top&quot; shows idle procs:
</span><br>
<span class="quotelev2">&gt;&gt;    PID USERNAME PRI NICE  SIZE   RES STATE     WAIT      TIME    CPU
</span><br>
<span class="quotelev2">&gt;&gt; COMMAND
</span><br>
<span class="quotelev2">&gt;&gt; 31841 phargrov  10    0 2140K 3960K sleep/1   nanosle   0:00  0.00% ring_c
</span><br>
<span class="quotelev2">&gt;&gt; 13490 phargrov   2    0 2540K 4892K sleep/1   poll      0:00  0.00%
</span><br>
<span class="quotelev2">&gt;&gt; orterun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Distrusting then env vars and relying instead on the auto-prefix
</span><br>
<span class="quotelev2">&gt;&gt; behavior:
</span><br>
<span class="quotelev2">&gt;&gt; $ /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 examples/ring_c
</span><br>
<span class="quotelev2">&gt;&gt; also hangs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Not sure exactly what to infer from this, but a &quot;bogus&quot; btl doesn't
</span><br>
<span class="quotelev2">&gt;&gt; produce any complaint, which may indicate how far startup got:
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -mca btl bogus -np 1 examples/ring_c
</span><br>
<span class="quotelev2">&gt;&gt;  Still hangs, and no complaint about the blt selection
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  All three cases above are singleton (-np 1) runs, but the behavior with
</span><br>
<span class="quotelev2">&gt;&gt; &quot;-np 2&quot; is the same.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  This does NOT appear to be an ORTE problem:
</span><br>
<span class="quotelev2">&gt;&gt;  -bash-4.2$ orterun -np 1 date
</span><br>
<span class="quotelev2">&gt;&gt; Fri Dec 20 14:11:42 PST 2013
</span><br>
<span class="quotelev2">&gt;&gt; -bash-4.2$ orterun -np 2 date
</span><br>
<span class="quotelev2">&gt;&gt; Fri Dec 20 14:11:45 PST 2013
</span><br>
<span class="quotelev2">&gt;&gt; Fri Dec 20 14:11:45 PST 2013
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Let me know what sort of verbose mca parameters to set and I'll collect
</span><br>
<span class="quotelev2">&gt;&gt; the info.
</span><br>
<span class="quotelev2">&gt;&gt; Compressed output of &quot;ompi_info --all&quot; is attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13539/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13540.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>Previous message:</strong> <a href="13538.php">Dave Goodell (dgoodell): "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>In reply to:</strong> <a href="13536.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13543.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="13543.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
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
