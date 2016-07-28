<?
$subject_val = "Re: [OMPI devel] Rankfile related problems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  1 15:15:28 2010" -->
<!-- isoreceived="20100301201528" -->
<!-- sent="Mon, 1 Mar 2010 13:15:17 -0700" -->
<!-- isosent="20100301201517" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Rankfile related problems" -->
<!-- id="B2A7B838-6B90-4055-80FE-7F43DD1FFE2F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="c609bc801003010815p7e4bf27clf691226df4db8162_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Rankfile related problems<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-01 15:15:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7518.php">Bogdan Costescu: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>Previous message:</strong> <a href="7516.php">Bogdan Costescu: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>In reply to:</strong> <a href="7516.php">Bogdan Costescu: "Re: [OMPI devel] Rankfile related problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7518.php">Bogdan Costescu: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>Reply:</strong> <a href="7518.php">Bogdan Costescu: "Re: [OMPI devel] Rankfile related problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tracking this down has reminded me of all the reasons why I despise the rankfile mapper... :-/
<br>
<p>I have created a fix for this mess and will submit it for inclusion in 1.4.
<br>
<p>Thanks - not your fault, so pardon the comments. Just had my fill of this particular code since the creators of it no longer support it.
<br>
Ralph
<br>
<p><p>On Mar 1, 2010, at 9:15 AM, Bogdan Costescu wrote:
<br>
<p><span class="quotelev1">&gt; On Sat, Feb 27, 2010 at 7:35 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I can't seem to replicate this first problem - it runs fine for me even if the rankfile contains only one entry.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First of all, thanks for taking a look at this !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For me it's repeatable. Please note that I do specify '-np 4' even
</span><br>
<span class="quotelev1">&gt; when in the ranks file there is only one entry; I've just checked that
</span><br>
<span class="quotelev1">&gt; this happens with some random value given to -np, the only time I
</span><br>
<span class="quotelev1">&gt; don't get a segv is with '-np 1' in which case I get the 'PAFFINITY
</span><br>
<span class="quotelev1">&gt; cannot get physical core id...' error message. However, with other
</span><br>
<span class="quotelev1">&gt; combinations, like 2 entries in the ranks file and '-np 4' the segv
</span><br>
<span class="quotelev1">&gt; doesn't appear, only the error message. Anyway, for the original case
</span><br>
<span class="quotelev1">&gt; (one entry in the ranks file and -np 4'), the output obtained with the
</span><br>
<span class="quotelev1">&gt; suggested debug is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] mca:base:select:(rmaps) Querying component [load_balance]
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] mca:base:select:(rmaps) Skipping component
</span><br>
<span class="quotelev1">&gt; [load_balance]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] mca:base:select:(rmaps) Querying component [rank_file]
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] mca:base:select:(rmaps) Query of component
</span><br>
<span class="quotelev1">&gt; [rank_file] set priority to 100
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] mca:base:select:(rmaps) Querying component [round_robin]
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] mca:base:select:(rmaps) Query of component
</span><br>
<span class="quotelev1">&gt; [round_robin] set priority to 70
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] mca:base:select:(rmaps) Querying component [seq]
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] mca:base:select:(rmaps) Query of component [seq] set
</span><br>
<span class="quotelev1">&gt; priority to 0
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] mca:base:select:(rmaps) Selected component [rank_file]
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-bq_bcostescu_at_mbm-01-24_0/36756/0/0
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] jobdir: /tmp/openmpi-sessions-bq_bcostescu_at_mbm-01-24_0/36756/0
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] top: openmpi-sessions-bq_bcostescu_at_mbm-01-24_0
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] mpirun: reset PATH:
</span><br>
<span class="quotelev1">&gt; /sw/openmpi/1.4.1-debug/gcc/4.4.3/bin:/usr/local/bin:/bin:/usr/bin:/home/bq_bcostescu/bin
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] mpirun: reset LD_LIBRARY_PATH:
</span><br>
<span class="quotelev1">&gt; /sw/openmpi/1.4.1-debug/gcc/4.4.3/lib
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [[36756,0],0] hostfile: checking hostfile hosts for nodes
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [[36756,0],0] hostfile: filtering nodes through hostfile hosts
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [[36756,0],0] rmaps:base:claim_slot: created new
</span><br>
<span class="quotelev1">&gt; proc [[36756,1],INVALID]
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [[36756,0],0] rmaps:base:claim_slot mapping proc in
</span><br>
<span class="quotelev1">&gt; job [36756,1] to node mbm-01-24
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [[36756,0],0] rmaps:base: adding node mbm-01-24 to map
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [[36756,0],0] rmaps:base: mapping proc for job
</span><br>
<span class="quotelev1">&gt; [36756,1] to node mbm-01-24
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [[36756,0],0] hostfile: filtering nodes through hostfile hosts
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [[36756,0],0] rmaps:base:claim_slot: created new
</span><br>
<span class="quotelev1">&gt; proc [[36756,1],INVALID]
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [[36756,0],0] rmaps:base:claim_slot mapping proc in
</span><br>
<span class="quotelev1">&gt; job [36756,1] to node mbm-01-24
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [[36756,0],0] rmaps:base: mapping proc for job
</span><br>
<span class="quotelev1">&gt; [36756,1] to node mbm-01-24
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [[36756,0],0] rmaps:base:claim_slot: created new
</span><br>
<span class="quotelev1">&gt; proc [[36756,1],INVALID]
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [[36756,0],0] rmaps:base:claim_slot mapping proc in
</span><br>
<span class="quotelev1">&gt; job [36756,1] to node mbm-01-24
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [[36756,0],0] rmaps:base: mapping proc for job
</span><br>
<span class="quotelev1">&gt; [36756,1] to node mbm-01-24
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [[36756,0],0] rmaps:base:claim_slot: created new
</span><br>
<span class="quotelev1">&gt; proc [[36756,1],INVALID]
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [[36756,0],0] rmaps:base:claim_slot mapping proc in
</span><br>
<span class="quotelev1">&gt; job [36756,1] to node mbm-01-24
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [[36756,0],0] rmaps:base: mapping proc for job
</span><br>
<span class="quotelev1">&gt; [36756,1] to node mbm-01-24
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [[36756,0],0] rmaps:base:compute_usage
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [[36756,0],0] rmaps:base:define_daemons
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [[36756,0],0] rmaps:base:define_daemons existing
</span><br>
<span class="quotelev1">&gt; daemon [[36756,0],0] already launched
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] Failing at address: 0x70
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [ 0] /lib64/libpthread.so.0 [0x2b04e8c727c0]
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [ 1]
</span><br>
<span class="quotelev1">&gt; /sw/openmpi/1.4.1-debug/gcc/4.4.3/lib/libopen-rte.so.0(orte_util_encode_pidmap+0x140)
</span><br>
<span class="quotelev1">&gt; [0x2b04e7c5b312]
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [ 2]
</span><br>
<span class="quotelev1">&gt; /sw/openmpi/1.4.1-debug/gcc/4.4.3/lib/libopen-rte.so.0(orte_odls_base_default_get_add_procs_data+0xb31)
</span><br>
<span class="quotelev1">&gt; [0x2b04e7c89557]
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [ 3]
</span><br>
<span class="quotelev1">&gt; /sw/openmpi/1.4.1-debug/gcc/4.4.3/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0x1f6)
</span><br>
<span class="quotelev1">&gt; [0x2b04e7ca9210]
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [ 4]
</span><br>
<span class="quotelev1">&gt; /sw/openmpi/1.4.1-debug/gcc/4.4.3/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; [0x2b04e7cb3f2f]
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [ 5] /sw/openmpi/1.4.1-debug/gcc/4.4.3/bin/mpirun [0x403d3b]
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [ 6] /sw/openmpi/1.4.1-debug/gcc/4.4.3/bin/mpirun [0x402ee4]
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b04e8e9c994]
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] [ 8] /sw/openmpi/1.4.1-debug/gcc/4.4.3/bin/mpirun [0x402e09]
</span><br>
<span class="quotelev1">&gt; [mbm-01-24:24102] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After applying by hand the r21728 to the original 1.4.1, I can start
</span><br>
<span class="quotelev1">&gt; properly the job as expected, the 'PAFFINITY cannot get physical core
</span><br>
<span class="quotelev1">&gt; id...' error message doesn't appear anymore, so I'd like to ask for it
</span><br>
<span class="quotelev1">&gt; to be applied to the 1.4 series. With this, I've tested the following
</span><br>
<span class="quotelev1">&gt; combinations:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; entries in ranks file   -np     result
</span><br>
<span class="quotelev1">&gt; 1                             1        OK
</span><br>
<span class="quotelev1">&gt; 1                             2        segv
</span><br>
<span class="quotelev1">&gt; 1                             4        segv
</span><br>
<span class="quotelev1">&gt; 2                             1        OK
</span><br>
<span class="quotelev1">&gt; 2                             2        OK
</span><br>
<span class="quotelev1">&gt; 2                             4        OK
</span><br>
<span class="quotelev1">&gt; 4                             4        OK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the segv's really only appear when there's only one entry in the
</span><br>
<span class="quotelev1">&gt; ranks file; if I'm the only one to be able to reproduce these segv's,
</span><br>
<span class="quotelev1">&gt; I'd be happy to look into it with some guidance about the actual
</span><br>
<span class="quotelev1">&gt; source code location...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Bogdan
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
<li><strong>Next message:</strong> <a href="7518.php">Bogdan Costescu: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>Previous message:</strong> <a href="7516.php">Bogdan Costescu: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>In reply to:</strong> <a href="7516.php">Bogdan Costescu: "Re: [OMPI devel] Rankfile related problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7518.php">Bogdan Costescu: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>Reply:</strong> <a href="7518.php">Bogdan Costescu: "Re: [OMPI devel] Rankfile related problems"</a>
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
