<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 20 19:16:24 2013" -->
<!-- isoreceived="20131221001624" -->
<!-- sent="Fri, 20 Dec 2013 16:15:59 -0800" -->
<!-- isosent="20131221001559" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs" -->
<!-- id="C1B62E0B-552C-4150-BCA6-AF40819D9D82_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16tx20Xf3TC-8dJB5_Sc4oxn4pXMRg8puUVBPCm7z85Qg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-20 19:15:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13546.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>Previous message:</strong> <a href="13544.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="13543.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13547.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="13547.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="13549.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is the same problem Jeff and I are looking at on Solaris - it requires a slow machine to make it appear. I'm investigating and think I know where the issue might lie (a timer that is firing to indicate a failed connection attempt and causing a race condition)
<br>
<p><p>On Dec 20, 2013, at 4:02 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; FWIW:
</span><br>
<span class="quotelev1">&gt; I've confirmed that this is REGRESSION relative to 1.7.2, which works fine on OpenBSD-5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I could not build 1.7.3 due to some of issues fixed for 1.7.4rc in the past 24 hours.
</span><br>
<span class="quotelev1">&gt; I am going to try back-porting the fix(es) to see if 1.7.3 works or not .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 20, 2013 at 3:16 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Below is the backtrace again, this time configured w/ --enable-debug and for all threads.
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thread 2 (thread 1021110):
</span><br>
<span class="quotelev1">&gt; #0  0x00001bc0ef6c5e3a in nanosleep () at &lt;stdin&gt;:2
</span><br>
<span class="quotelev1">&gt; #1  0x00001bc0f317c2d4 in nanosleep (rqtp=0x7f7ffffbc900, rmtp=0x0)
</span><br>
<span class="quotelev1">&gt;     at /usr/src/lib/librthread/rthread_cancel.c:274
</span><br>
<span class="quotelev1">&gt; #2  0x00001bc0f2cd4621 in orte_routed_base_register_sync (setup=true)
</span><br>
<span class="quotelev1">&gt;     at /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7-latest/orte/mca/routed/base/routed_base_fns.c:344
</span><br>
<span class="quotelev1">&gt; #3  0x00001bc0efc5d602 in init_routes (job=3563782145, ndat=0x0)
</span><br>
<span class="quotelev1">&gt;     at /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7-latest/orte/mca/routed/binomial/routed_binomial.c:705
</span><br>
<span class="quotelev1">&gt; #4  0x00001bc0f2c9c832 in orte_ess_base_app_setup (db_restrict_local=true)
</span><br>
<span class="quotelev1">&gt;     at /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7-latest/orte/mca/ess/base/ess_base_std_app.c:233
</span><br>
<span class="quotelev1">&gt; #5  0x00001bc0f39ea9ec in rte_init ()
</span><br>
<span class="quotelev1">&gt;     at /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7-latest/orte/mca/ess/env/ess_env_module.c:146
</span><br>
<span class="quotelev1">&gt; #6  0x00001bc0f2c68764 in orte_init (pargc=0x0, pargv=0x0, flags=32)
</span><br>
<span class="quotelev1">&gt;     at /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7-latest/orte/runtime/orte_init.c:158
</span><br>
<span class="quotelev1">&gt; #7  0x00001bc0f75061c5 in ompi_mpi_init (argc=1, argv=0x7f7ffffbced0, requested=0, provided=0x7f7ffffbce38)
</span><br>
<span class="quotelev1">&gt;     at /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7-latest/ompi/runtime/ompi_mpi_init.c:451
</span><br>
<span class="quotelev1">&gt; #8  0x00001bc0f7544b96 in PMPI_Init (argc=0x7f7ffffbce6c, argv=0x7f7ffffbce60) at pinit.c:84
</span><br>
<span class="quotelev1">&gt; #9  0x00001bbeec701093 in main (argc=1, argv=0x7f7ffffbced0) at ring_c.c:19
</span><br>
<span class="quotelev1">&gt; Current language:  auto; currently asm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thread 1 (thread 1023703):
</span><br>
<span class="quotelev1">&gt; #0  0x00001bc0ef6d68fa in poll () at &lt;stdin&gt;:2
</span><br>
<span class="quotelev1">&gt; #1  0x00001bc0f317c0fd in poll (fds=0x1bc0f9482d00, nfds=2, timeout=-1)
</span><br>
<span class="quotelev1">&gt;     at /usr/src/lib/librthread/rthread_cancel.c:331
</span><br>
<span class="quotelev1">&gt; #2  0x00001bc0eebf47a8 in poll_dispatch (base=0x1bc0f5987400, tv=0x0)
</span><br>
<span class="quotelev1">&gt;     at /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7-latest/opal/mca/event/libevent2021/libevent/poll.c:165
</span><br>
<span class="quotelev1">&gt; #3  0x00001bc0eebe8314 in opal_libevent2021_event_base_loop (base=0x1bc0f5987400, flags=1)
</span><br>
<span class="quotelev1">&gt;     at /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7-latest/opal/mca/event/libevent2021/libevent/event.c:1631
</span><br>
<span class="quotelev1">&gt; #4  0x00001bc0f2c68855 in orte_progress_thread_engine (obj=0x1bc0f310e160)
</span><br>
<span class="quotelev1">&gt;     at /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7-latest/orte/runtime/orte_init.c:180
</span><br>
<span class="quotelev1">&gt; #5  0x00001bc0f317911e in _rthread_start (v=Variable &quot;v&quot; is not available.
</span><br>
<span class="quotelev1">&gt; ) at /usr/src/lib/librthread/rthread.c:122
</span><br>
<span class="quotelev1">&gt; #6  0x00001bc0ef6c003b in __tfork_thread () at /usr/src/lib/libc/arch/amd64/sys/tfork_thread.S:75
</span><br>
<span class="quotelev1">&gt; Cannot access memory at address 0x1bc0f857c000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 20, 2013 at 2:48 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Brian,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course, I should have thought of that myself.
</span><br>
<span class="quotelev1">&gt; See below for backtrace from a singleton run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm starting an --enable-debug build to maybe get some line number info too.
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
<span class="quotelev1">&gt;    from /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/lib/libopen-rte.so.7.0
</span><br>
<span class="quotelev1">&gt; #3  0x00000406490d943c in init_routes ()
</span><br>
<span class="quotelev1">&gt;    from /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/lib/openmpi/mca_routed_binomial.so
</span><br>
<span class="quotelev1">&gt; #4  0x0000040644a3c37f in orte_ess_base_app_setup ()
</span><br>
<span class="quotelev1">&gt;    from /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/lib/libopen-rte.so.7.0
</span><br>
<span class="quotelev1">&gt; #5  0x000004063eb1797d in rte_init ()
</span><br>
<span class="quotelev1">&gt;    from /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/lib/openmpi/mca_ess_env.so
</span><br>
<span class="quotelev1">&gt; #6  0x0000040644a1a3fe in orte_init ()
</span><br>
<span class="quotelev1">&gt;    from /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/lib/libopen-rte.so.7.0
</span><br>
<span class="quotelev1">&gt; #7  0x00000406482c7976 in ompi_mpi_init ()
</span><br>
<span class="quotelev1">&gt;    from /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/lib/libmpi.so.4.0
</span><br>
<span class="quotelev1">&gt; #8  0x00000406482eac92 in PMPI_Init ()
</span><br>
<span class="quotelev1">&gt;    from /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/lib/libmpi.so.4.0
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
<span class="quotelev1">&gt; On Fri, Dec 20, 2013 at 2:38 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Paul -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any chance you could grab a stack trace from the mpi app? That's probably the fastest next step
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent with Good (www.good.com)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Paul Hargrove [phhargrove_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Friday, December 20, 2013 03:33 PM Mountain Standard Time
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [EXTERNAL] [OMPI devel] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With plenty of help from Jeff and Ralph's bug fixes in the past 24 hours, I can now build OMPI for NetBSD.  However, running even a simple example fails:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Having set PATH and LD_LIBARY_PATH:
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 1 examples/ring_c
</span><br>
<span class="quotelev1">&gt; just hangs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Output from &quot;top&quot; shows idle procs:
</span><br>
<span class="quotelev1">&gt;   PID USERNAME PRI NICE  SIZE   RES STATE     WAIT      TIME    CPU COMMAND
</span><br>
<span class="quotelev1">&gt; 31841 phargrov  10    0 2140K 3960K sleep/1   nanosle   0:00  0.00% ring_c
</span><br>
<span class="quotelev1">&gt; 13490 phargrov   2    0 2540K 4892K sleep/1   poll      0:00  0.00% orterun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Distrusting then env vars and relying instead on the auto-prefix behavior:
</span><br>
<span class="quotelev1">&gt; $ /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/bin/mpirun -np 1 examples/ring_c
</span><br>
<span class="quotelev1">&gt; also hangs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure exactly what to infer from this, but a &quot;bogus&quot; btl doesn't produce any complaint, which may indicate how far startup got:
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl bogus -np 1 examples/ring_c
</span><br>
<span class="quotelev1">&gt; Still hangs, and no complaint about the blt selection
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All three cases above are singleton (-np 1) runs, but the behavior with &quot;-np 2&quot; is the same.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This does NOT appear to be an ORTE problem:
</span><br>
<span class="quotelev1">&gt; -bash-4.2$ orterun -np 1 date
</span><br>
<span class="quotelev1">&gt; Fri Dec 20 14:11:42 PST 2013
</span><br>
<span class="quotelev1">&gt; -bash-4.2$ orterun -np 2 date
</span><br>
<span class="quotelev1">&gt; Fri Dec 20 14:11:45 PST 2013
</span><br>
<span class="quotelev1">&gt; Fri Dec 20 14:11:45 PST 2013
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know what sort of verbose mca parameters to set and I'll collect the info.
</span><br>
<span class="quotelev1">&gt; Compressed output of &quot;ompi_info --all&quot; is attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13545/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13546.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>Previous message:</strong> <a href="13544.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="13543.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13547.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="13547.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="13549.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
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
