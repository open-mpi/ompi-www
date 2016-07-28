<?
$subject_val = "Re: [OMPI devel] mpirun hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 22:02:07 2008" -->
<!-- isoreceived="20080528020207" -->
<!-- sent="Tue, 27 May 2008 22:01:56 -0400" -->
<!-- isosent="20080528020156" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun hangs" -->
<!-- id="45C94DE7-B190-4A19-BD37-08A2425B2649_at_computer.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C4620D71.525C%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-27 22:01:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4050.php">Greg Watson: "Re: [OMPI devel] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="4048.php">Ralph Castain: "Re: [OMPI devel] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="4048.php">Ralph Castain: "Re: [OMPI devel] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4051.php">Ralph Castain: "Re: [OMPI devel] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="4051.php">Ralph Castain: "Re: [OMPI devel] mpirun hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I tried rolling back to 18513 but no luck. Steps:
<br>
<p>$ ./autogen.sh
<br>
$ ./configure --prefix=/usr/local/openmpi-1.3-devel
<br>
$ make
<br>
$ make install
<br>
$ mpicc -g -o xxx xxx.c
<br>
$ mpirun -np 2 ./xxx
<br>
$ ps x
<br>
44832 s001  R+     0:50.00 mpirun -np 2 ./xxx
<br>
44833 s001  S+     0:00.03 ./xxx
<br>
$ gdb /usr/local/openmpi-1.3-devel/bin/mpirun
<br>
...
<br>
(gdb) attach 44832
<br>
Attaching to program: `/usr/local/openmpi-1.3-devel/bin/mpirun',  
<br>
process 44832.
<br>
Reading symbols for shared libraries ++++ 
<br>
+.......................................... done
<br>
0x9371b3dd in ioctl ()
<br>
(gdb) where
<br>
#0  0x9371b3dd in ioctl ()
<br>
#1  0x93754812 in grantpt ()
<br>
#2  0x9375470b in openpty ()
<br>
#3  0x001446d9 in opal_openpty ()
<br>
#4  0x000bf3bf in orte_iof_base_setup_prefork ()
<br>
#5  0x003da62f in odls_default_fork_local_proc (context=0x216a60,  
<br>
child=0x216dd0, environ_copy=0x217930) at odls_default_module.c:191
<br>
#6  0x000c3e76 in orte_odls_base_default_launch_local ()
<br>
#7  0x003daace in orte_odls_default_launch_local_procs (data=0x216780)  
<br>
at odls_default_module.c:360
<br>
#8  0x000ad2f6 in process_commands (sender=0x216768, buffer=0x216780,  
<br>
tag=1) at orted/orted_comm.c:441
<br>
#9  0x000acd52 in orte_daemon_cmd_processor (fd=-1, opal_event=1,  
<br>
data=0x216750) at orted/orted_comm.c:346
<br>
#10 0x0012bd21 in event_process_active () at opal_object.h:498
<br>
#11 0x0012c3c5 in opal_event_base_loop () at opal_object.h:498
<br>
#12 0x0012bf8c in opal_event_loop () at opal_object.h:498
<br>
#13 0x0011b334 in opal_progress () at runtime/opal_progress.c:169
<br>
#14 0x000cd9b4 in orte_plm_base_report_launched () at opal_object.h:498
<br>
#15 0x000cc2b7 in orte_plm_base_launch_apps () at opal_object.h:498
<br>
#16 0x0003d626 in orte_plm_rsh_launch (jdata=0x200ae0) at  
<br>
plm_rsh_module.c:1126
<br>
#17 0x00002604 in orterun (argc=4, argv=0xbffff880) at orterun.c:549
<br>
#18 0x00001bd6 in main (argc=4, argv=0xbffff880) at main.c:13
<br>
<p>On May 27, 2008, at 9:11 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Yo Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not seeing any problem on my Mac OSX - I'm running Leopard. Can  
</span><br>
<span class="quotelev1">&gt; you tell
</span><br>
<span class="quotelev1">&gt; me how you configured, and the precise command you executed?
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/27/08 5:15 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...well, it was working about 3 hours ago! I'll try to take a  
</span><br>
<span class="quotelev2">&gt;&gt; look
</span><br>
<span class="quotelev2">&gt;&gt; tonight, but it may be tomorrow.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try rolling it back just a little to r18513 - that's the last rev I  
</span><br>
<span class="quotelev2">&gt;&gt; tested
</span><br>
<span class="quotelev2">&gt;&gt; on my Mac.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 5/27/08 5:00 PM, &quot;Greg Watson&quot; &lt;g.watson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Something seems to be broken in the trunk for MacOS X. I can run a 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process job, but a &gt;1 process job hangs. It was working a few days  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ago.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
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
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4050.php">Greg Watson: "Re: [OMPI devel] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="4048.php">Ralph Castain: "Re: [OMPI devel] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="4048.php">Ralph Castain: "Re: [OMPI devel] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4051.php">Ralph Castain: "Re: [OMPI devel] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="4051.php">Ralph Castain: "Re: [OMPI devel] mpirun hangs"</a>
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
