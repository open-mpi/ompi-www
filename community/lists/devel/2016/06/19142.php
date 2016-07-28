<?
$subject_val = "Re: [OMPI devel] devel Digest, Vol 3283, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 29 05:49:24 2016" -->
<!-- isoreceived="20160629094924" -->
<!-- sent="Wed, 29 Jun 2016 15:18:56 +0530" -->
<!-- isosent="20160629094856" -->
<!-- name="Potnuri Bharat Teja" -->
<!-- email="bharat_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] devel Digest, Vol 3283, Issue 1" -->
<!-- id="20160629094854.GA17765_at_t5fpga-b1.asicdesigners.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.5.1467129602.30958.devel_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] devel Digest, Vol 3283, Issue 1<br>
<strong>From:</strong> Potnuri Bharat Teja (<em>bharat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-29 05:48:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19143.php">Jeff Squyres (jsquyres): "[OMPI devel] Are you coming to the August OMPI meeting?"</a>
<li><strong>Previous message:</strong> <a href="19141.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] August Open MPI dev meeting: Dallas, TX, USA"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday, June 06/28/16, 2016 at 12:00:02 -0400, devel-request_at_[hidden] wrote:
<br>
<p>I've opened <a href="https://github.com/open-mpi/ompi/issues/1826">https://github.com/open-mpi/ompi/issues/1826</a> for tracking
<br>
the issue.
<br>
Thanks,
<br>
<p><span class="quotelev1">&gt; Send devel mailing list submissions to
</span><br>
<span class="quotelev1">&gt; 	devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt; 	<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt; 	devel-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt; 	devel-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of devel digest...&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    1.  Master: Segfault seen while running imb tests
</span><br>
<span class="quotelev1">&gt;       (Potnuri Bharat Teja)
</span><br>
<span class="quotelev1">&gt;    2. Re: Master: Segfault seen while running imb tests
</span><br>
<span class="quotelev1">&gt;       (Jeff Squyres (jsquyres))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Tue, 28 Jun 2016 13:03:31 +0530
</span><br>
<span class="quotelev1">&gt; From: Potnuri Bharat Teja &lt;bharat_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel]  Master: Segfault seen while running imb tests
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;20160628073330.GC11044_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; I am seeing the following segfault with openmpi-master.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_maneybhanjang ~]# /usr/mpi/gcc/openmpi-2.0-dev/bin/mpirun
</span><br>
<span class="quotelev1">&gt; --allow-run-as-root --hostfile /root/mpd.hosts -np 8 --prefix
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-2.0-dev/ --map-by node --display-allocation
</span><br>
<span class="quotelev1">&gt; --oversubscribe --mca btl openib,sm,self
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-2.0-dev/tests/IMB/IMB-MPI1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt; maneybhanjang: flags=0x01 slots=8 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev1">&gt; 10.193.184.162: flags=0x03 slots=4 max_slots=0 slots_inuse=0 state=UNKNOWN
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; 		[maneybhanjang:28532] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; 		[maneybhanjang:28532] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; 		[maneybhanjang:28532] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev1">&gt; 		[maneybhanjang:28532] Failing at address: 0x106ca70
</span><br>
<span class="quotelev1">&gt; 		[maneybhanjang:28532] [ 0]
</span><br>
<span class="quotelev1">&gt; 		/lib64/libpthread.so.0[0x3aea40f710]
</span><br>
<span class="quotelev1">&gt; 		[maneybhanjang:28532] [ 1] [0x106ca70]
</span><br>
<span class="quotelev1">&gt; 		[maneybhanjang:28532] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 		[tonglu:02068] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; 		[tonglu:02068] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; 		[tonglu:02068] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev1">&gt; 		[tonglu:02068] Failing at address: 0x2478500
</span><br>
<span class="quotelev1">&gt; 		[tonglu:02068] [ 0] /lib64/libpthread.so.0[0x3ef5c0f710]
</span><br>
<span class="quotelev1">&gt; 		[tonglu:02068] [ 1] [0x2478500]
</span><br>
<span class="quotelev1">&gt; 		[tonglu:02068] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 		bash: line 1:  2068 Segmentation fault      (core
</span><br>
<span class="quotelev1">&gt; 		dumped) /usr/mpi/gcc/openmpi-2.0-dev/bin/orted
</span><br>
<span class="quotelev1">&gt; 		--hnp-topo-sig 0N:2S:0L3:4L2:8L1:8C:8H:x86_64 -mca ess
</span><br>
<span class="quotelev1">&gt; 		&quot;env&quot; -mca ess_base_jobid &quot;3921674240&quot; -mca
</span><br>
<span class="quotelev1">&gt; 		ess_base_vpid 1 -mca ess_base_num_procs &quot;2&quot; -mca
</span><br>
<span class="quotelev1">&gt; 		orte_hnp_uri
</span><br>
<span class="quotelev1">&gt; 		&quot;3921674240.0;usock;tcp://10.193.184.161,102.1.1.161,102.2.2.161:43160&quot;
</span><br>
<span class="quotelev1">&gt; 		--mca btl &quot;openib,sm,self&quot; -mca plm &quot;rsh&quot; -mca
</span><br>
<span class="quotelev1">&gt; 		rmaps_base_mapping_policy &quot;node&quot; -mca orte_display_alloc
</span><br>
<span class="quotelev1">&gt; 		&quot;1&quot; -mca rmaps_base_oversubscribe &quot;1&quot;
</span><br>
<span class="quotelev1">&gt; 		Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt; [root_at_maneybhanjang ~]# dmesg
</span><br>
<span class="quotelev1">&gt; mpirun[28532]: segfault at 106ca70 ip 000000000106ca70 sp 00007fffc00a7f28 error 15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Segfault is seen on the other peer too.
</span><br>
<span class="quotelev1">&gt; [root_at_tonglu ~]# dmesg
</span><br>
<span class="quotelev1">&gt; orted[2068]: segfault at 2478500 ip 0000000002478500 sp 00007fff521c2e68 error 15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gdb on coredump points me to orted/pmix/pmix_server_gen.c:80
</span><br>
<span class="quotelev1">&gt; Following is the Back trace.
</span><br>
<span class="quotelev1">&gt; [root_at_maneybhanjang ~]# gdb /usr/mpi/gcc/openmpi-2.0-dev/bin/mpirun core.28532
</span><br>
<span class="quotelev1">&gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; #0  0x000000000106ca70 in ?? ()
</span><br>
<span class="quotelev1">&gt; Missing separate debuginfos, use: debuginfo-install
</span><br>
<span class="quotelev1">&gt; glibc-2.12-1.149.el6.x86_64 libgcc-4.4.7-11.el6.x86_64
</span><br>
<span class="quotelev1">&gt; libudev-147-2.57.el6.x86_64
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x000000000106ca70 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  0x00002b217f7a43aa in _client_conn (sd=-1, args=4,
</span><br>
<span class="quotelev1">&gt; cbdata=0x2b2188022260)
</span><br>
<span class="quotelev1">&gt;     at orted/pmix/pmix_server_gen.c:80
</span><br>
<span class="quotelev1">&gt; #2  0x00002b217fad5a7c in event_process_active_single_queue
</span><br>
<span class="quotelev1">&gt;     (base=0xfcc730, flags=1)
</span><br>
<span class="quotelev1">&gt;         at event.c:1370
</span><br>
<span class="quotelev1">&gt; #3  event_process_active (base=0xfcc730, flags=1) at
</span><br>
<span class="quotelev1">&gt; 	event.c:1440
</span><br>
<span class="quotelev1">&gt; #4  opal_libevent2022_event_base_loop (base=0xfcc730, flags=1)
</span><br>
<span class="quotelev1">&gt; 	at event.c:1644
</span><br>
<span class="quotelev1">&gt; #5  0x00000000004014d3 in orterun (argc=16, argv=0x7fffc00a81e8)
</span><br>
<span class="quotelev1">&gt; 	at orterun.c:192
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000400f04 in main (argc=16, argv=0x7fffc00a81e8) at
</span><br>
<span class="quotelev1">&gt; 	main.c:13
</span><br>
<span class="quotelev1">&gt; (gdb) frame
</span><br>
<span class="quotelev1">&gt; #0  0x000000000106ca70 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) up
</span><br>
<span class="quotelev1">&gt; #1  0x00002b217f7a43aa in _client_conn (sd=-1, args=4,
</span><br>
<span class="quotelev1">&gt; cbdata=0x2b2188022260) at orted/pmix/pmix_server_gen.c:80
</span><br>
<span class="quotelev1">&gt; 	    80              cd-&gt;cbfunc(OPAL_SUCCESS, cd-&gt;cbdata);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the backtrace of peer machine, pointing to same line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_tonglu ~]# gdb /usr/mpi/gcc/openmpi-2.0-dev/bin/orted core.2068
</span><br>
<span class="quotelev1">&gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; #0  0x0000000002478500 in ?? ()
</span><br>
<span class="quotelev1">&gt; Missing separate debuginfos, use: debuginfo-install
</span><br>
<span class="quotelev1">&gt; glibc-2.12-1.149.el6.x86_64 libgcc-4.4.7-11.el6.x86_64
</span><br>
<span class="quotelev1">&gt; libudev-147-2.57.el6.x86_64 numactl-2.0.9-2.el6.x86_64
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x0000000002478500 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  0x00002af4511433ba in _client_conn (sd=-1, args=4,
</span><br>
<span class="quotelev1">&gt; cbdata=0x2af458022260)
</span><br>
<span class="quotelev1">&gt;     at orted/pmix/pmix_server_gen.c:80
</span><br>
<span class="quotelev1">&gt; #2  0x00002af451474cac in event_process_active_single_queue
</span><br>
<span class="quotelev1">&gt;     (base=0x2408e90, flags=1)
</span><br>
<span class="quotelev1">&gt;         at event.c:1370
</span><br>
<span class="quotelev1">&gt; #3  event_process_active (base=0x2408e90, flags=1) at
</span><br>
<span class="quotelev1">&gt; 	event.c:1440
</span><br>
<span class="quotelev1">&gt; #4  opal_libevent2022_event_base_loop (base=0x2408e90, flags=1)
</span><br>
<span class="quotelev1">&gt; 	at event.c:1644
</span><br>
<span class="quotelev1">&gt; #5  0x00002af451123c57 in orte_daemon (argc=33,
</span><br>
<span class="quotelev1">&gt; 	argv=0x7fff521c33d8)
</span><br>
<span class="quotelev1">&gt; 	    at orted/orted_main.c:859
</span><br>
<span class="quotelev1">&gt; #6  0x000000000040081a in main (argc=33,
</span><br>
<span class="quotelev1">&gt; 	    argv=0x7fff521c33d8) at orted.c:60
</span><br>
<span class="quotelev1">&gt; (gdb) frame
</span><br>
<span class="quotelev1">&gt; #0  0x0000000002478500 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) up
</span><br>
<span class="quotelev1">&gt; #1  0x00002af4511433ba in _client_conn (sd=-1, args=4,
</span><br>
<span class="quotelev1">&gt;     cbdata=0x2af458022260)
</span><br>
<span class="quotelev1">&gt;  at orted/pmix/pmix_server_gen.c:80
</span><br>
<span class="quotelev1">&gt; 		80              cd-&gt;cbfunc(OPAL_SUCCESS, cd-&gt;cbdata);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using the tot of openmpi-master :
</span><br>
<span class="quotelev1">&gt; commit 5795682aa56ce8f22e518462b22cfee49d407216
</span><br>
<span class="quotelev1">&gt; Merge: 5d32282 1bb7788
</span><br>
<span class="quotelev1">&gt; Author: Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Mon Jun 27 12:59:20 2016 -0400
</span><br>
<span class="quotelev1">&gt; Merge pull request #1817 from shamisp/topic/oshmem_init
</span><br>
<span class="quotelev1">&gt; OSHMEM: Removing erroneous initialization check
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am happy to provide any further information and would appreciate any suggestions regarding the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Bharat.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Tue, 28 Jun 2016 13:16:47 +0000
</span><br>
<span class="quotelev1">&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers List &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Master: Segfault seen while running imb
</span><br>
<span class="quotelev1">&gt; 	tests
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;40334C0F-5512-4ECA-8A00-BAFDECEE135B_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This looks like a segv in mpirun itself -- can you file an issue on github so that we can track this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 28, 2016, at 3:33 AM, Potnuri Bharat Teja &lt;bharat_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi All,
</span><br>
<span class="quotelev2">&gt; &gt; I am seeing the following segfault with openmpi-master.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_maneybhanjang ~]# /usr/mpi/gcc/openmpi-2.0-dev/bin/mpirun
</span><br>
<span class="quotelev2">&gt; &gt; --allow-run-as-root --hostfile /root/mpd.hosts -np 8 --prefix
</span><br>
<span class="quotelev2">&gt; &gt; /usr/mpi/gcc/openmpi-2.0-dev/ --map-by node --display-allocation
</span><br>
<span class="quotelev2">&gt; &gt; --oversubscribe --mca btl openib,sm,self
</span><br>
<span class="quotelev2">&gt; &gt; /usr/mpi/gcc/openmpi-2.0-dev/tests/IMB/IMB-MPI1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev2">&gt; &gt; maneybhanjang: flags=0x01 slots=8 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev2">&gt; &gt; 10.193.184.162: flags=0x03 slots=4 max_slots=0 slots_inuse=0 state=UNKNOWN
</span><br>
<span class="quotelev2">&gt; &gt; =================================================================
</span><br>
<span class="quotelev2">&gt; &gt; 		[maneybhanjang:28532] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; 		[maneybhanjang:28532] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; 		[maneybhanjang:28532] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev2">&gt; &gt; 		[maneybhanjang:28532] Failing at address: 0x106ca70
</span><br>
<span class="quotelev2">&gt; &gt; 		[maneybhanjang:28532] [ 0]
</span><br>
<span class="quotelev2">&gt; &gt; 		/lib64/libpthread.so.0[0x3aea40f710]
</span><br>
<span class="quotelev2">&gt; &gt; 		[maneybhanjang:28532] [ 1] [0x106ca70]
</span><br>
<span class="quotelev2">&gt; &gt; 		[maneybhanjang:28532] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; 		[tonglu:02068] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; 		[tonglu:02068] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; 		[tonglu:02068] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev2">&gt; &gt; 		[tonglu:02068] Failing at address: 0x2478500
</span><br>
<span class="quotelev2">&gt; &gt; 		[tonglu:02068] [ 0] /lib64/libpthread.so.0[0x3ef5c0f710]
</span><br>
<span class="quotelev2">&gt; &gt; 		[tonglu:02068] [ 1] [0x2478500]
</span><br>
<span class="quotelev2">&gt; &gt; 		[tonglu:02068] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; 		bash: line 1:  2068 Segmentation fault      (core
</span><br>
<span class="quotelev2">&gt; &gt; 		dumped) /usr/mpi/gcc/openmpi-2.0-dev/bin/orted
</span><br>
<span class="quotelev2">&gt; &gt; 		--hnp-topo-sig 0N:2S:0L3:4L2:8L1:8C:8H:x86_64 -mca ess
</span><br>
<span class="quotelev2">&gt; &gt; 		&quot;env&quot; -mca ess_base_jobid &quot;3921674240&quot; -mca
</span><br>
<span class="quotelev2">&gt; &gt; 		ess_base_vpid 1 -mca ess_base_num_procs &quot;2&quot; -mca
</span><br>
<span class="quotelev2">&gt; &gt; 		orte_hnp_uri
</span><br>
<span class="quotelev2">&gt; &gt; 		&quot;3921674240.0;usock;tcp://10.193.184.161,102.1.1.161,102.2.2.161:43160&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 		--mca btl &quot;openib,sm,self&quot; -mca plm &quot;rsh&quot; -mca
</span><br>
<span class="quotelev2">&gt; &gt; 		rmaps_base_mapping_policy &quot;node&quot; -mca orte_display_alloc
</span><br>
<span class="quotelev2">&gt; &gt; 		&quot;1&quot; -mca rmaps_base_oversubscribe &quot;1&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 		Segmentation fault (core dumped)
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_maneybhanjang ~]# dmesg
</span><br>
<span class="quotelev2">&gt; &gt; mpirun[28532]: segfault at 106ca70 ip 000000000106ca70 sp 00007fffc00a7f28 error 15
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Segfault is seen on the other peer too.
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_tonglu ~]# dmesg
</span><br>
<span class="quotelev2">&gt; &gt; orted[2068]: segfault at 2478500 ip 0000000002478500 sp 00007fff521c2e68 error 15
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; gdb on coredump points me to orted/pmix/pmix_server_gen.c:80
</span><br>
<span class="quotelev2">&gt; &gt; Following is the Back trace.
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_maneybhanjang ~]# gdb /usr/mpi/gcc/openmpi-2.0-dev/bin/mpirun core.28532
</span><br>
<span class="quotelev2">&gt; &gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x000000000106ca70 in ?? ()
</span><br>
<span class="quotelev2">&gt; &gt; Missing separate debuginfos, use: debuginfo-install
</span><br>
<span class="quotelev2">&gt; &gt; glibc-2.12-1.149.el6.x86_64 libgcc-4.4.7-11.el6.x86_64
</span><br>
<span class="quotelev2">&gt; &gt; libudev-147-2.57.el6.x86_64
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x000000000106ca70 in ?? ()
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00002b217f7a43aa in _client_conn (sd=-1, args=4,
</span><br>
<span class="quotelev2">&gt; &gt; cbdata=0x2b2188022260)
</span><br>
<span class="quotelev2">&gt; &gt;    at orted/pmix/pmix_server_gen.c:80
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00002b217fad5a7c in event_process_active_single_queue
</span><br>
<span class="quotelev2">&gt; &gt;    (base=0xfcc730, flags=1)
</span><br>
<span class="quotelev2">&gt; &gt;        at event.c:1370
</span><br>
<span class="quotelev2">&gt; &gt; #3  event_process_active (base=0xfcc730, flags=1) at
</span><br>
<span class="quotelev2">&gt; &gt; 	event.c:1440
</span><br>
<span class="quotelev2">&gt; &gt; #4  opal_libevent2022_event_base_loop (base=0xfcc730, flags=1)
</span><br>
<span class="quotelev2">&gt; &gt; 	at event.c:1644
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x00000000004014d3 in orterun (argc=16, argv=0x7fffc00a81e8)
</span><br>
<span class="quotelev2">&gt; &gt; 	at orterun.c:192
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x0000000000400f04 in main (argc=16, argv=0x7fffc00a81e8) at
</span><br>
<span class="quotelev2">&gt; &gt; 	main.c:13
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) frame
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x000000000106ca70 in ?? ()
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) up
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00002b217f7a43aa in _client_conn (sd=-1, args=4,
</span><br>
<span class="quotelev2">&gt; &gt; cbdata=0x2b2188022260) at orted/pmix/pmix_server_gen.c:80
</span><br>
<span class="quotelev2">&gt; &gt; 	    80              cd-&gt;cbfunc(OPAL_SUCCESS, cd-&gt;cbdata);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Here is the backtrace of peer machine, pointing to same line:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_tonglu ~]# gdb /usr/mpi/gcc/openmpi-2.0-dev/bin/orted core.2068
</span><br>
<span class="quotelev2">&gt; &gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x0000000002478500 in ?? ()
</span><br>
<span class="quotelev2">&gt; &gt; Missing separate debuginfos, use: debuginfo-install
</span><br>
<span class="quotelev2">&gt; &gt; glibc-2.12-1.149.el6.x86_64 libgcc-4.4.7-11.el6.x86_64
</span><br>
<span class="quotelev2">&gt; &gt; libudev-147-2.57.el6.x86_64 numactl-2.0.9-2.el6.x86_64
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x0000000002478500 in ?? ()
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00002af4511433ba in _client_conn (sd=-1, args=4,
</span><br>
<span class="quotelev2">&gt; &gt; cbdata=0x2af458022260)
</span><br>
<span class="quotelev2">&gt; &gt;    at orted/pmix/pmix_server_gen.c:80
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00002af451474cac in event_process_active_single_queue
</span><br>
<span class="quotelev2">&gt; &gt;    (base=0x2408e90, flags=1)
</span><br>
<span class="quotelev2">&gt; &gt;        at event.c:1370
</span><br>
<span class="quotelev2">&gt; &gt; #3  event_process_active (base=0x2408e90, flags=1) at
</span><br>
<span class="quotelev2">&gt; &gt; 	event.c:1440
</span><br>
<span class="quotelev2">&gt; &gt; #4  opal_libevent2022_event_base_loop (base=0x2408e90, flags=1)
</span><br>
<span class="quotelev2">&gt; &gt; 	at event.c:1644
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x00002af451123c57 in orte_daemon (argc=33,
</span><br>
<span class="quotelev2">&gt; &gt; 	argv=0x7fff521c33d8)
</span><br>
<span class="quotelev2">&gt; &gt; 	    at orted/orted_main.c:859
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x000000000040081a in main (argc=33,
</span><br>
<span class="quotelev2">&gt; &gt; 	    argv=0x7fff521c33d8) at orted.c:60
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) frame
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x0000000002478500 in ?? ()
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) up
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00002af4511433ba in _client_conn (sd=-1, args=4,
</span><br>
<span class="quotelev2">&gt; &gt;    cbdata=0x2af458022260)
</span><br>
<span class="quotelev2">&gt; &gt; at orted/pmix/pmix_server_gen.c:80
</span><br>
<span class="quotelev2">&gt; &gt; 		80              cd-&gt;cbfunc(OPAL_SUCCESS, cd-&gt;cbdata);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am using the tot of openmpi-master :
</span><br>
<span class="quotelev2">&gt; &gt; commit 5795682aa56ce8f22e518462b22cfee49d407216
</span><br>
<span class="quotelev2">&gt; &gt; Merge: 5d32282 1bb7788
</span><br>
<span class="quotelev2">&gt; &gt; Author: Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date:   Mon Jun 27 12:59:20 2016 -0400
</span><br>
<span class="quotelev2">&gt; &gt; Merge pull request #1817 from shamisp/topic/oshmem_init
</span><br>
<span class="quotelev2">&gt; &gt; OSHMEM: Removing erroneous initialization check
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am happy to provide any further information and would appreciate any suggestions regarding the issue.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Bharat.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19137.php">http://www.open-mpi.org/community/lists/devel/2016/06/19137.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Subject: Digest Footer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; End of devel Digest, Vol 3283, Issue 1
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19143.php">Jeff Squyres (jsquyres): "[OMPI devel] Are you coming to the August OMPI meeting?"</a>
<li><strong>Previous message:</strong> <a href="19141.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] August Open MPI dev meeting: Dallas, TX, USA"</a>
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
