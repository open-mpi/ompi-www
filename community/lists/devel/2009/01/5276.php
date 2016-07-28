<?
$subject_val = "Re: [OMPI devel] Still troubles with 1.3 and MX";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 12:16:02 2009" -->
<!-- isoreceived="20090122171602" -->
<!-- sent="Thu, 22 Jan 2009 12:15:45 -0500" -->
<!-- isosent="20090122171545" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Still troubles with 1.3 and MX" -->
<!-- id="1062D358-5EE9-4EE4-965B-81A0CC62FB80_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0901221424190.25360_at_kenzo.iwr.uni-heidelberg.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Still troubles with 1.3 and MX<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-22 12:15:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5277.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5275.php">Ralph Castain: "Re: [OMPI devel] bug in odls_base_default_fns.c"</a>
<li><strong>In reply to:</strong> <a href="5272.php">Bogdan Costescu: "[OMPI devel] Still troubles with 1.3 and MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5293.php">Bogdan Costescu: "Re: [OMPI devel] Still troubles with 1.3 and MX"</a>
<li><strong>Reply:</strong> <a href="5293.php">Bogdan Costescu: "Re: [OMPI devel] Still troubles with 1.3 and MX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 22, 2009, at 9:18 AM, Bogdan Costescu wrote:
<br>
<p><span class="quotelev1">&gt; I'm still having some troubles using the newly released 1.3 with  
</span><br>
<span class="quotelev1">&gt; Myricom's MX. I've meant to send a message earlier, but the release  
</span><br>
<span class="quotelev1">&gt; candidates went so fast that I didn't have time to catch up and test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; General details:
</span><br>
<span class="quotelev1">&gt; 	Nodes with dual CPU, dual core Opteron 2220, 8 GB RAM
</span><br>
<span class="quotelev1">&gt; 	Debian etch x86_64, self-compiled kernel 2.6.22.18, gcc-4.1
</span><br>
<span class="quotelev1">&gt; 	Torque 2.1.10 (but this shouldn't make a difference)
</span><br>
<span class="quotelev1">&gt; 	MX 1.2.7 with a tiny patch from Myricom
</span><br>
<span class="quotelev1">&gt; 	OpenMPI 1.3
</span><br>
<span class="quotelev1">&gt; 	IMB 3.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI was configured with '--enable-shared --enable-static --with- 
</span><br>
<span class="quotelev1">&gt; mx=... --with-tm=...'
</span><br>
<span class="quotelev1">&gt; In all cases, there were no options specified at runtime (either in  
</span><br>
<span class="quotelev1">&gt; files or on the command line) except for the PML and BTL selection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Problem 1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I still see hangs of collective functions when running on large  
</span><br>
<span class="quotelev1">&gt; number of nodes (or maybe ranks) with the default OB1+BTL. F.e. with  
</span><br>
<span class="quotelev1">&gt; 128 ranks distributed as nodes=32:ppn=4 or nodes=64:ppn=2, the IMB  
</span><br>
<span class="quotelev1">&gt; hangs in Gather.
</span><br>
<p>Bogdan, this sounds like a similar issue to what you experienced in  
<br>
December and that it had been fixed. I do not remember if this was  
<br>
tied to the default collective or to free list management.
<br>
<p>Can you try a run with:
<br>
<p>&nbsp;&nbsp;&nbsp;-mca btl_mx_free_list_max 1000000
<br>
<p>added to the command line?
<br>
<p>After that, try a additional runs without the above but with:
<br>
<p>&nbsp;&nbsp;&nbsp;--mca coll_tuned_use_dynamic_rules 1 --mca  
<br>
coll_tuned_gather_algorithm N
<br>
<p>where N is 0, 1, 2, then 3 (one run for each value).
<br>
<p><span class="quotelev1">&gt; Problem 2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When using the CM+MTL with 128 ranks, it finishes fine when running  
</span><br>
<span class="quotelev1">&gt; on nodes=64:ppn=2, but on nodes=32:ppn=4 I get a stream of errors  
</span><br>
<span class="quotelev1">&gt; that I haven't seen before:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev1">&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev1">&gt;        type (2): send_medium
</span><br>
<span class="quotelev1">&gt;        state (0x14): buffered dead
</span><br>
<span class="quotelev1">&gt;        requeued: 1000 (timeout=510000ms)
</span><br>
<span class="quotelev1">&gt;        dest: 00:60:dd:47:89:40 (opt029:0)
</span><br>
<span class="quotelev1">&gt;        partner: peer_index=146, endpoint=3, seqnum=0x2944
</span><br>
<span class="quotelev1">&gt;        type (2): send_medium
</span><br>
<span class="quotelev1">&gt;        state (0x14): buffered dead
</span><br>
<span class="quotelev1">&gt;        requeued: 1000 (timeout=510000ms)
</span><br>
<span class="quotelev1">&gt;        dest: 00:60:dd:47:89:40 (opt029:0)
</span><br>
<span class="quotelev1">&gt;        partner: peer_index=146, endpoint=3, seqnum=0x2f9a
</span><br>
<span class="quotelev1">&gt;        matched_val: 0x0068002a_fffffff2
</span><br>
<span class="quotelev1">&gt;        slength=32768, xfer_length=32768
</span><br>
<span class="quotelev1">&gt;        matched_val: 0x0068002b_fffffff2
</span><br>
<span class="quotelev1">&gt;        slength=32768, xfer_length=32768
</span><br>
<span class="quotelev1">&gt;        seg: 0x2aaacc30f010,32768
</span><br>
<span class="quotelev1">&gt;        caller: 0x5b
</span><br>
<p>These are two, overlapped messages from the MX library. It is unable  
<br>
to send to opt029 (i.e. opt029 is not consuming messages).
<br>
<p><span class="quotelev1">&gt; From the MX experts out there, I would also need some help to  
</span><br>
<span class="quotelev1">&gt; understand what is the source of these messages - I can only see  
</span><br>
<span class="quotelev1">&gt; opt029 mentioned,
</span><br>
<p>Anyone, does 1.3 support rank labeling of stdout? If so, Bogdan should  
<br>
rerun it with --display-map and the option to support labeling.
<br>
<p><span class="quotelev1">&gt; so does it try to communicate intra-node ? (IOW the equivalent of  
</span><br>
<span class="quotelev1">&gt; &quot;self&quot; BTL in OpenMPI) This would be somehow consistent with running  
</span><br>
<span class="quotelev1">&gt; more ranks per node (4) than the successfull job (with 2 ranks per  
</span><br>
<span class="quotelev1">&gt; node).
</span><br>
<p>I am under the impression that the MTLs pass all messages to the  
<br>
interconnect. If so, then MX is handling self, shared memory (shmem),  
<br>
and host-to-host. Self, by the way, is a single rank (process)  
<br>
communicating with itself. In your case, you are using shmem.
<br>
<p><span class="quotelev1">&gt; At this point, the job hangs in Alltoallv. The strace output is the  
</span><br>
<span class="quotelev1">&gt; same as for OB1+BTL above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone suggest some ways forward ? I'd be happy to help in  
</span><br>
<span class="quotelev1">&gt; debugging if given some instructions.
</span><br>
<p>I would suggest the same test as above with:
<br>
<p>&nbsp;&nbsp;&nbsp;-mca btl_mx_free_list_max 1000000
<br>
<p>Additionally, try the following tuned collectives for alltoallv:
<br>
<p>&nbsp;&nbsp;&nbsp;--mca coll_tuned_use_dynamic_rules 1 --mca  
<br>
coll_tuned_alltoallv_algorithm N
<br>
<p>where N is 0, 1, then 2 (one run for each value).
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5277.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5275.php">Ralph Castain: "Re: [OMPI devel] bug in odls_base_default_fns.c"</a>
<li><strong>In reply to:</strong> <a href="5272.php">Bogdan Costescu: "[OMPI devel] Still troubles with 1.3 and MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5293.php">Bogdan Costescu: "Re: [OMPI devel] Still troubles with 1.3 and MX"</a>
<li><strong>Reply:</strong> <a href="5293.php">Bogdan Costescu: "Re: [OMPI devel] Still troubles with 1.3 and MX"</a>
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
