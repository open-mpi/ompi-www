<?
$subject_val = "Re: [OMPI devel] Rankfile related problems";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 27 13:35:51 2010" -->
<!-- isoreceived="20100227183551" -->
<!-- sent="Sat, 27 Feb 2010 11:35:42 -0700" -->
<!-- isosent="20100227183542" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Rankfile related problems" -->
<!-- id="19A5E2BC-BA18-4369-A27E-CFC4555D2EAC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="406CB450-4DC8-46D1-ADE9-C5D8394537E3_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-02-27 13:35:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/03/7516.php">Bogdan Costescu: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>Previous message:</strong> <a href="7514.php">Ralph Castain: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>In reply to:</strong> <a href="7514.php">Ralph Castain: "Re: [OMPI devel] Rankfile related problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/03/7516.php">Bogdan Costescu: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/03/7516.php">Bogdan Costescu: "Re: [OMPI devel] Rankfile related problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't seem to replicate this first problem - it runs fine for me even if the rankfile contains only one entry.
<br>
<p>What you could do is build 1.4.1 with --enable-debug and then run with --debug-devel -mca rmaps_base_verbose 5 to get more info on what is happening. 
<br>
<p><p><p>On Feb 27, 2010, at 11:26 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I'm looking at the first problem - will get back to you on it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As to the second issue: it was r21728, and no - it does not appear to have been moved to the 1.4 series (rankfile is untested on a regular basis). I will do so now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 15, 2010, at 10:39 AM, Bogdan Costescu wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With version 1.4.1 I get a rather strange crash in mpirun whenever I
</span><br>
<span class="quotelev2">&gt;&gt; try to run a job using (I think) a rankfile which doesn't contain the
</span><br>
<span class="quotelev2">&gt;&gt; specified number of ranks. F.e. I ask for 4 ranks ('-np 4'), but the
</span><br>
<span class="quotelev2">&gt;&gt; rankfile contains only one entry:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; rank 0=mbm-01-24 slot=1:*
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and the following comes out:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [mbm-01-24:20985] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [mbm-01-24:20985] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [mbm-01-24:20985] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [mbm-01-24:20985] Failing at address: 0x50
</span><br>
<span class="quotelev2">&gt;&gt; [mbm-01-24:20985] [ 0] /lib64/libpthread.so.0 [0x2b9de894f7c0]
</span><br>
<span class="quotelev2">&gt;&gt; [mbm-01-24:20985] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt; /sw/openmpi/1.4.1/gcc/4.4.3/lib/libopen-rte.so.0(orte_util_encode_pidmap+0xbb)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b9de79b9f7b]
</span><br>
<span class="quotelev2">&gt;&gt; [mbm-01-24:20985] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /sw/openmpi/1.4.1/gcc/4.4.3/lib/libopen-rte.so.0(orte_odls_base_default_get_add_procs_data+0x2d0)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b9de79d49c0]
</span><br>
<span class="quotelev2">&gt;&gt; [mbm-01-24:20985] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /sw/openmpi/1.4.1/gcc/4.4.3/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0xbc)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b9de79e1fcc]
</span><br>
<span class="quotelev2">&gt;&gt; [mbm-01-24:20985] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /sw/openmpi/1.4.1/gcc/4.4.3/lib/libopen-rte.so.0 [0x2b9de79e6251]
</span><br>
<span class="quotelev2">&gt;&gt; [mbm-01-24:20985] [ 5] mpirun [0x403782]
</span><br>
<span class="quotelev2">&gt;&gt; [mbm-01-24:20985] [ 6] mpirun [0x402cb4]
</span><br>
<span class="quotelev2">&gt;&gt; [mbm-01-24:20985] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b9de8b79994]
</span><br>
<span class="quotelev2">&gt;&gt; [mbm-01-24:20985] [ 8] mpirun [0x402bd9]
</span><br>
<span class="quotelev2">&gt;&gt; [mbm-01-24:20985] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However if the rankfile contains a second entry, like:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; rank 0=mbm-01-24 slot=1:*
</span><br>
<span class="quotelev2">&gt;&gt; rank 1=mbm-01-24 slot=1:*
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I get an error, but no segmentation fault. I guess that the
</span><br>
<span class="quotelev2">&gt;&gt; segmentation fault is unintended... Is this known ? If not, how could
</span><br>
<span class="quotelev2">&gt;&gt; I debug this ?
</span><br>
<span class="quotelev2">&gt;&gt; Now to the second problem: the exact same error keeps coming even if I
</span><br>
<span class="quotelev2">&gt;&gt; specify 4 ranks, the messages are:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to start the specified application as it encountered an error:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Error name: Error
</span><br>
<span class="quotelev2">&gt;&gt; Node: mbm-01-24
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [mbm-01-24:21011] Rank 0: PAFFINITY cannot get physical core id for
</span><br>
<span class="quotelev2">&gt;&gt; logical core 4 in physical socket 1 (1)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; We were unable to successfully process/set the requested processor
</span><br>
<span class="quotelev2">&gt;&gt; affinity settings:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Specified slot list: 1:*
</span><br>
<span class="quotelev2">&gt;&gt; Error: Error
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This could mean that a non-existent processor was specified, or
</span><br>
<span class="quotelev2">&gt;&gt; that the specification had improper syntax.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The node has 2 slots, each with 4 cores, so what I'm trying to achieve
</span><br>
<span class="quotelev2">&gt;&gt; is using the 4 cores of the second slot. When searching the archives,
</span><br>
<span class="quotelev2">&gt;&gt; I stumbled on an e-mail from not too long ago which seemingly dealt
</span><br>
<span class="quotelev2">&gt;&gt; with the same error:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2009/07/6513.php">http://www.open-mpi.org/community/lists/devel/2009/07/6513.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; which suggests that a fix was found, but no commit was specified, so I
</span><br>
<span class="quotelev2">&gt;&gt; can't track down whether this was actually also applied to the stable
</span><br>
<span class="quotelev2">&gt;&gt; series. Could someone more knowledgeable in this area shed some light
</span><br>
<span class="quotelev2">&gt;&gt; ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance!
</span><br>
<span class="quotelev2">&gt;&gt; Bogdan
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/03/7516.php">Bogdan Costescu: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>Previous message:</strong> <a href="7514.php">Ralph Castain: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>In reply to:</strong> <a href="7514.php">Ralph Castain: "Re: [OMPI devel] Rankfile related problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/03/7516.php">Bogdan Costescu: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/03/7516.php">Bogdan Costescu: "Re: [OMPI devel] Rankfile related problems"</a>
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
