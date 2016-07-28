<?
$subject_val = "Re: [OMPI devel] Rankfile related problems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  1 11:15:50 2010" -->
<!-- isoreceived="20100301161550" -->
<!-- sent="Mon, 1 Mar 2010 17:15:44 +0100" -->
<!-- isosent="20100301161544" -->
<!-- name="Bogdan Costescu" -->
<!-- email="bcostescu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Rankfile related problems" -->
<!-- id="c609bc801003010815p7e4bf27clf691226df4db8162_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="19A5E2BC-BA18-4369-A27E-CFC4555D2EAC_at_open-mpi.org" -->
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
<strong>From:</strong> Bogdan Costescu (<em>bcostescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-01 11:15:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7517.php">Ralph Castain: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/02/7515.php">Ralph Castain: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/02/7515.php">Ralph Castain: "Re: [OMPI devel] Rankfile related problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7517.php">Ralph Castain: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>Reply:</strong> <a href="7517.php">Ralph Castain: "Re: [OMPI devel] Rankfile related problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Feb 27, 2010 at 7:35 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I can't seem to replicate this first problem - it runs fine for me even if the rankfile contains only one entry.
</span><br>
<p>First of all, thanks for taking a look at this !
<br>
<p>For me it's repeatable. Please note that I do specify '-np 4' even
<br>
when in the ranks file there is only one entry; I've just checked that
<br>
this happens with some random value given to -np, the only time I
<br>
don't get a segv is with '-np 1' in which case I get the 'PAFFINITY
<br>
cannot get physical core id...' error message. However, with other
<br>
combinations, like 2 entries in the ranks file and '-np 4' the segv
<br>
doesn't appear, only the error message. Anyway, for the original case
<br>
(one entry in the ranks file and -np 4'), the output obtained with the
<br>
suggested debug is:
<br>
<p>[mbm-01-24:24102] mca:base:select:(rmaps) Querying component [load_balance]
<br>
[mbm-01-24:24102] mca:base:select:(rmaps) Skipping component
<br>
[load_balance]. Query failed to return a module
<br>
[mbm-01-24:24102] mca:base:select:(rmaps) Querying component [rank_file]
<br>
[mbm-01-24:24102] mca:base:select:(rmaps) Query of component
<br>
[rank_file] set priority to 100
<br>
[mbm-01-24:24102] mca:base:select:(rmaps) Querying component [round_robin]
<br>
[mbm-01-24:24102] mca:base:select:(rmaps) Query of component
<br>
[round_robin] set priority to 70
<br>
[mbm-01-24:24102] mca:base:select:(rmaps) Querying component [seq]
<br>
[mbm-01-24:24102] mca:base:select:(rmaps) Query of component [seq] set
<br>
priority to 0
<br>
[mbm-01-24:24102] mca:base:select:(rmaps) Selected component [rank_file]
<br>
[mbm-01-24:24102] procdir:
<br>
/tmp/openmpi-sessions-bq_bcostescu_at_mbm-01-24_0/36756/0/0
<br>
[mbm-01-24:24102] jobdir: /tmp/openmpi-sessions-bq_bcostescu_at_mbm-01-24_0/36756/0
<br>
[mbm-01-24:24102] top: openmpi-sessions-bq_bcostescu_at_mbm-01-24_0
<br>
[mbm-01-24:24102] tmp: /tmp
<br>
[mbm-01-24:24102] mpirun: reset PATH:
<br>
/sw/openmpi/1.4.1-debug/gcc/4.4.3/bin:/usr/local/bin:/bin:/usr/bin:/home/bq_bcostescu/bin
<br>
[mbm-01-24:24102] mpirun: reset LD_LIBRARY_PATH:
<br>
/sw/openmpi/1.4.1-debug/gcc/4.4.3/lib
<br>
[mbm-01-24:24102] [[36756,0],0] hostfile: checking hostfile hosts for nodes
<br>
[mbm-01-24:24102] [[36756,0],0] hostfile: filtering nodes through hostfile hosts
<br>
[mbm-01-24:24102] [[36756,0],0] rmaps:base:claim_slot: created new
<br>
proc [[36756,1],INVALID]
<br>
[mbm-01-24:24102] [[36756,0],0] rmaps:base:claim_slot mapping proc in
<br>
job [36756,1] to node mbm-01-24
<br>
[mbm-01-24:24102] [[36756,0],0] rmaps:base: adding node mbm-01-24 to map
<br>
[mbm-01-24:24102] [[36756,0],0] rmaps:base: mapping proc for job
<br>
[36756,1] to node mbm-01-24
<br>
[mbm-01-24:24102] [[36756,0],0] hostfile: filtering nodes through hostfile hosts
<br>
[mbm-01-24:24102] [[36756,0],0] rmaps:base:claim_slot: created new
<br>
proc [[36756,1],INVALID]
<br>
[mbm-01-24:24102] [[36756,0],0] rmaps:base:claim_slot mapping proc in
<br>
job [36756,1] to node mbm-01-24
<br>
[mbm-01-24:24102] [[36756,0],0] rmaps:base: mapping proc for job
<br>
[36756,1] to node mbm-01-24
<br>
[mbm-01-24:24102] [[36756,0],0] rmaps:base:claim_slot: created new
<br>
proc [[36756,1],INVALID]
<br>
[mbm-01-24:24102] [[36756,0],0] rmaps:base:claim_slot mapping proc in
<br>
job [36756,1] to node mbm-01-24
<br>
[mbm-01-24:24102] [[36756,0],0] rmaps:base: mapping proc for job
<br>
[36756,1] to node mbm-01-24
<br>
[mbm-01-24:24102] [[36756,0],0] rmaps:base:claim_slot: created new
<br>
proc [[36756,1],INVALID]
<br>
[mbm-01-24:24102] [[36756,0],0] rmaps:base:claim_slot mapping proc in
<br>
job [36756,1] to node mbm-01-24
<br>
[mbm-01-24:24102] [[36756,0],0] rmaps:base: mapping proc for job
<br>
[36756,1] to node mbm-01-24
<br>
[mbm-01-24:24102] [[36756,0],0] rmaps:base:compute_usage
<br>
[mbm-01-24:24102] [[36756,0],0] rmaps:base:define_daemons
<br>
[mbm-01-24:24102] [[36756,0],0] rmaps:base:define_daemons existing
<br>
daemon [[36756,0],0] already launched
<br>
[mbm-01-24:24102] *** Process received signal ***
<br>
[mbm-01-24:24102] Signal: Segmentation fault (11)
<br>
[mbm-01-24:24102] Signal code: Address not mapped (1)
<br>
[mbm-01-24:24102] Failing at address: 0x70
<br>
[mbm-01-24:24102] [ 0] /lib64/libpthread.so.0 [0x2b04e8c727c0]
<br>
[mbm-01-24:24102] [ 1]
<br>
/sw/openmpi/1.4.1-debug/gcc/4.4.3/lib/libopen-rte.so.0(orte_util_encode_pidmap+0x140)
<br>
[0x2b04e7c5b312]
<br>
[mbm-01-24:24102] [ 2]
<br>
/sw/openmpi/1.4.1-debug/gcc/4.4.3/lib/libopen-rte.so.0(orte_odls_base_default_get_add_procs_data+0xb31)
<br>
[0x2b04e7c89557]
<br>
[mbm-01-24:24102] [ 3]
<br>
/sw/openmpi/1.4.1-debug/gcc/4.4.3/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0x1f6)
<br>
[0x2b04e7ca9210]
<br>
[mbm-01-24:24102] [ 4]
<br>
/sw/openmpi/1.4.1-debug/gcc/4.4.3/lib/libopen-rte.so.0
<br>
[0x2b04e7cb3f2f]
<br>
[mbm-01-24:24102] [ 5] /sw/openmpi/1.4.1-debug/gcc/4.4.3/bin/mpirun [0x403d3b]
<br>
[mbm-01-24:24102] [ 6] /sw/openmpi/1.4.1-debug/gcc/4.4.3/bin/mpirun [0x402ee4]
<br>
[mbm-01-24:24102] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b04e8e9c994]
<br>
[mbm-01-24:24102] [ 8] /sw/openmpi/1.4.1-debug/gcc/4.4.3/bin/mpirun [0x402e09]
<br>
[mbm-01-24:24102] *** End of error message ***
<br>
Segmentation fault
<br>
<p>After applying by hand the r21728 to the original 1.4.1, I can start
<br>
properly the job as expected, the 'PAFFINITY cannot get physical core
<br>
id...' error message doesn't appear anymore, so I'd like to ask for it
<br>
to be applied to the 1.4 series. With this, I've tested the following
<br>
combinations:
<br>
<p>entries in ranks file   -np     result
<br>
1                             1        OK
<br>
1                             2        segv
<br>
1                             4        segv
<br>
2                             1        OK
<br>
2                             2        OK
<br>
2                             4        OK
<br>
4                             4        OK
<br>
<p>So the segv's really only appear when there's only one entry in the
<br>
ranks file; if I'm the only one to be able to reproduce these segv's,
<br>
I'd be happy to look into it with some guidance about the actual
<br>
source code location...
<br>
<p>Cheers,
<br>
Bogdan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7517.php">Ralph Castain: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/02/7515.php">Ralph Castain: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/02/7515.php">Ralph Castain: "Re: [OMPI devel] Rankfile related problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7517.php">Ralph Castain: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>Reply:</strong> <a href="7517.php">Ralph Castain: "Re: [OMPI devel] Rankfile related problems"</a>
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
