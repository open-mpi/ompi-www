<?
$subject_val = "Re: [OMPI devel] mpirun hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 22:34:33 2008" -->
<!-- isoreceived="20080528023433" -->
<!-- sent="Tue, 27 May 2008 20:34:28 -0600" -->
<!-- isosent="20080528023428" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun hangs" -->
<!-- id="C46220D4.5267%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45C94DE7-B190-4A19-BD37-08A2425B2649_at_computer.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-27 22:34:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4052.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="4050.php">Greg Watson: "Re: [OMPI devel] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="4049.php">Greg Watson: "Re: [OMPI devel] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4053.php">Greg Watson: "Re: [OMPI devel] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="4053.php">Greg Watson: "Re: [OMPI devel] mpirun hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Aha! This is a problem that continues to bite us - it relates to the pty
<br>
problem in Mac OSX. Been a ton of chatter about this, but Mac doesn't seem
<br>
inclined to fix it.
<br>
<p>Try configuring --disable-pty-support and see if that helps. FWIW, you will
<br>
find a platform file for Mac OSX in the trunk - I always build with it, and
<br>
have spent considerable time fine-tuning it. You configure with:
<br>
<p>./configure --prefix=whatever
<br>
--with-platform=contrib/platform/lanl/macosx-dynamic
<br>
<p>In that directory, you will also find platform files for static builds under
<br>
both Tiger and Leopard (slight differences).
<br>
<p>ralph
<br>
<p><p>On 5/27/08 8:01 PM, &quot;Greg Watson&quot; &lt;g.watson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried rolling back to 18513 but no luck. Steps:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./autogen.sh
</span><br>
<span class="quotelev1">&gt; $ ./configure --prefix=/usr/local/openmpi-1.3-devel
</span><br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; $ make install
</span><br>
<span class="quotelev1">&gt; $ mpicc -g -o xxx xxx.c
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 ./xxx
</span><br>
<span class="quotelev1">&gt; $ ps x
</span><br>
<span class="quotelev1">&gt; 44832 s001  R+     0:50.00 mpirun -np 2 ./xxx
</span><br>
<span class="quotelev1">&gt; 44833 s001  S+     0:00.03 ./xxx
</span><br>
<span class="quotelev1">&gt; $ gdb /usr/local/openmpi-1.3-devel/bin/mpirun
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; (gdb) attach 44832
</span><br>
<span class="quotelev1">&gt; Attaching to program: `/usr/local/openmpi-1.3-devel/bin/mpirun',
</span><br>
<span class="quotelev1">&gt; process 44832.
</span><br>
<span class="quotelev1">&gt; Reading symbols for shared libraries ++++
</span><br>
<span class="quotelev1">&gt; +.......................................... done
</span><br>
<span class="quotelev1">&gt; 0x9371b3dd in ioctl ()
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x9371b3dd in ioctl ()
</span><br>
<span class="quotelev1">&gt; #1  0x93754812 in grantpt ()
</span><br>
<span class="quotelev1">&gt; #2  0x9375470b in openpty ()
</span><br>
<span class="quotelev1">&gt; #3  0x001446d9 in opal_openpty ()
</span><br>
<span class="quotelev1">&gt; #4  0x000bf3bf in orte_iof_base_setup_prefork ()
</span><br>
<span class="quotelev1">&gt; #5  0x003da62f in odls_default_fork_local_proc (context=0x216a60,
</span><br>
<span class="quotelev1">&gt; child=0x216dd0, environ_copy=0x217930) at odls_default_module.c:191
</span><br>
<span class="quotelev1">&gt; #6  0x000c3e76 in orte_odls_base_default_launch_local ()
</span><br>
<span class="quotelev1">&gt; #7  0x003daace in orte_odls_default_launch_local_procs (data=0x216780)
</span><br>
<span class="quotelev1">&gt; at odls_default_module.c:360
</span><br>
<span class="quotelev1">&gt; #8  0x000ad2f6 in process_commands (sender=0x216768, buffer=0x216780,
</span><br>
<span class="quotelev1">&gt; tag=1) at orted/orted_comm.c:441
</span><br>
<span class="quotelev1">&gt; #9  0x000acd52 in orte_daemon_cmd_processor (fd=-1, opal_event=1,
</span><br>
<span class="quotelev1">&gt; data=0x216750) at orted/orted_comm.c:346
</span><br>
<span class="quotelev1">&gt; #10 0x0012bd21 in event_process_active () at opal_object.h:498
</span><br>
<span class="quotelev1">&gt; #11 0x0012c3c5 in opal_event_base_loop () at opal_object.h:498
</span><br>
<span class="quotelev1">&gt; #12 0x0012bf8c in opal_event_loop () at opal_object.h:498
</span><br>
<span class="quotelev1">&gt; #13 0x0011b334 in opal_progress () at runtime/opal_progress.c:169
</span><br>
<span class="quotelev1">&gt; #14 0x000cd9b4 in orte_plm_base_report_launched () at opal_object.h:498
</span><br>
<span class="quotelev1">&gt; #15 0x000cc2b7 in orte_plm_base_launch_apps () at opal_object.h:498
</span><br>
<span class="quotelev1">&gt; #16 0x0003d626 in orte_plm_rsh_launch (jdata=0x200ae0) at
</span><br>
<span class="quotelev1">&gt; plm_rsh_module.c:1126
</span><br>
<span class="quotelev1">&gt; #17 0x00002604 in orterun (argc=4, argv=0xbffff880) at orterun.c:549
</span><br>
<span class="quotelev1">&gt; #18 0x00001bd6 in main (argc=4, argv=0xbffff880) at main.c:13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 27, 2008, at 9:11 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yo Greg
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not seeing any problem on my Mac OSX - I'm running Leopard. Can
</span><br>
<span class="quotelev2">&gt;&gt; you tell
</span><br>
<span class="quotelev2">&gt;&gt; me how you configured, and the precise command you executed?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 5/27/08 5:15 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmmm...well, it was working about 3 hours ago! I'll try to take a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; look
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tonight, but it may be tomorrow.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try rolling it back just a little to r18513 - that's the last rev I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tested
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on my Mac.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 5/27/08 5:00 PM, &quot;Greg Watson&quot; &lt;g.watson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Something seems to be broken in the trunk for MacOS X. I can run a 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process job, but a &gt;1 process job hangs. It was working a few days
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ago.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="4052.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="4050.php">Greg Watson: "Re: [OMPI devel] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="4049.php">Greg Watson: "Re: [OMPI devel] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4053.php">Greg Watson: "Re: [OMPI devel] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="4053.php">Greg Watson: "Re: [OMPI devel] mpirun hangs"</a>
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
