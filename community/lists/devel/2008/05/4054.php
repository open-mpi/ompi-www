<?
$subject_val = "Re: [OMPI devel] mpirun hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 09:14:21 2008" -->
<!-- isoreceived="20080528131421" -->
<!-- sent="Wed, 28 May 2008 07:14:06 -0600" -->
<!-- isosent="20080528131406" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun hangs" -->
<!-- id="C462B6BE.D94A%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43DA7350-1D5B-49DF-A519-9300224EA8A3_at_computer.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpirun hangs<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-28 09:14:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4055.php">Gleb Natapov: "[OMPI devel] SM BTL NUMA awareness patches"</a>
<li><strong>Previous message:</strong> <a href="4053.php">Greg Watson: "Re: [OMPI devel] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="4053.php">Greg Watson: "Re: [OMPI devel] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4050.php">Greg Watson: "Re: [OMPI devel] mpirun hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It could be - I believe the Mac issue has been around for awhile. If you
<br>
like, you could use that same platform file and give it a try. I think there
<br>
are a few frameworks mentioned in there that aren't in 1.2, but that should
<br>
be easy to edit out.
<br>
<p><p>On 5/28/08 7:11 AM, &quot;Greg Watson&quot; &lt;g.watson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; That fixed it, thanks. I wonder if this is the same problem I'm seeing
</span><br>
<span class="quotelev1">&gt; for 1.2.x?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 27, 2008, at 10:34 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Aha! This is a problem that continues to bite us - it relates to the
</span><br>
<span class="quotelev2">&gt;&gt; pty
</span><br>
<span class="quotelev2">&gt;&gt; problem in Mac OSX. Been a ton of chatter about this, but Mac
</span><br>
<span class="quotelev2">&gt;&gt; doesn't seem
</span><br>
<span class="quotelev2">&gt;&gt; inclined to fix it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Try configuring --disable-pty-support and see if that helps. FWIW,
</span><br>
<span class="quotelev2">&gt;&gt; you will
</span><br>
<span class="quotelev2">&gt;&gt; find a platform file for Mac OSX in the trunk - I always build with
</span><br>
<span class="quotelev2">&gt;&gt; it, and
</span><br>
<span class="quotelev2">&gt;&gt; have spent considerable time fine-tuning it. You configure with:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=whatever
</span><br>
<span class="quotelev2">&gt;&gt; --with-platform=contrib/platform/lanl/macosx-dynamic
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In that directory, you will also find platform files for static
</span><br>
<span class="quotelev2">&gt;&gt; builds under
</span><br>
<span class="quotelev2">&gt;&gt; both Tiger and Leopard (slight differences).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 5/27/08 8:01 PM, &quot;Greg Watson&quot; &lt;g.watson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried rolling back to 18513 but no luck. Steps:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ./autogen.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ./configure --prefix=/usr/local/openmpi-1.3-devel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ make
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ make install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpicc -g -o xxx xxx.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -np 2 ./xxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ps x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 44832 s001  R+     0:50.00 mpirun -np 2 ./xxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 44833 s001  S+     0:00.03 ./xxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ gdb /usr/local/openmpi-1.3-devel/bin/mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) attach 44832
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attaching to program: `/usr/local/openmpi-1.3-devel/bin/mpirun',
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 44832.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reading symbols for shared libraries ++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +.......................................... done
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x9371b3dd in ioctl ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x9371b3dd in ioctl ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  0x93754812 in grantpt ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0x9375470b in openpty ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0x001446d9 in opal_openpty ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4  0x000bf3bf in orte_iof_base_setup_prefork ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5  0x003da62f in odls_default_fork_local_proc (context=0x216a60,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child=0x216dd0, environ_copy=0x217930) at odls_default_module.c:191
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6  0x000c3e76 in orte_odls_base_default_launch_local ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #7  0x003daace in orte_odls_default_launch_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (data=0x216780)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at odls_default_module.c:360
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #8  0x000ad2f6 in process_commands (sender=0x216768, buffer=0x216780,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tag=1) at orted/orted_comm.c:441
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #9  0x000acd52 in orte_daemon_cmd_processor (fd=-1, opal_event=1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data=0x216750) at orted/orted_comm.c:346
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #10 0x0012bd21 in event_process_active () at opal_object.h:498
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #11 0x0012c3c5 in opal_event_base_loop () at opal_object.h:498
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #12 0x0012bf8c in opal_event_loop () at opal_object.h:498
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #13 0x0011b334 in opal_progress () at runtime/opal_progress.c:169
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #14 0x000cd9b4 in orte_plm_base_report_launched () at opal_object.h:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 498
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #15 0x000cc2b7 in orte_plm_base_launch_apps () at opal_object.h:498
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #16 0x0003d626 in orte_plm_rsh_launch (jdata=0x200ae0) at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plm_rsh_module.c:1126
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #17 0x00002604 in orterun (argc=4, argv=0xbffff880) at orterun.c:549
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #18 0x00001bd6 in main (argc=4, argv=0xbffff880) at main.c:13
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 27, 2008, at 9:11 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yo Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not seeing any problem on my Mac OSX - I'm running Leopard. Can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you tell
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; me how you configured, and the precise command you executed?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 5/27/08 5:15 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hmmm...well, it was working about 3 hours ago! I'll try to take a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; look
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tonight, but it may be tomorrow.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Try rolling it back just a little to r18513 - that's the last rev I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tested
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on my Mac.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 5/27/08 5:00 PM, &quot;Greg Watson&quot; &lt;g.watson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Something seems to be broken in the trunk for MacOS X. I can run
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; a 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; process job, but a &gt;1 process job hangs. It was working a few days
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ago.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4055.php">Gleb Natapov: "[OMPI devel] SM BTL NUMA awareness patches"</a>
<li><strong>Previous message:</strong> <a href="4053.php">Greg Watson: "Re: [OMPI devel] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="4053.php">Greg Watson: "Re: [OMPI devel] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4050.php">Greg Watson: "Re: [OMPI devel] mpirun hangs"</a>
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
