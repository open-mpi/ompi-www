<?
$subject_val = "Re: [OMPI users] Using POSIX shared memory as send buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 04:51:42 2015" -->
<!-- isoreceived="20150929085142" -->
<!-- sent="Tue, 29 Sep 2015 10:51:38 +0200" -->
<!-- isosent="20150929085138" -->
<!-- name="Marcin Krotkiewski" -->
<!-- email="marcin.krotkiewski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using POSIX shared memory as send buffer" -->
<!-- id="560A511A.8060806_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="3A0AF4DC-794B-448C-8B3C-95596F8D27C5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using POSIX shared memory as send buffer<br>
<strong>From:</strong> Marcin Krotkiewski (<em>marcin.krotkiewski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-29 04:51:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27706.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Previous message:</strong> <a href="27704.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>In reply to:</strong> <a href="27702.php">Dave Goodell (dgoodell): "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27711.php">Nathan Hjelm: "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<li><strong>Reply:</strong> <a href="27711.php">Nathan Hjelm: "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Dave.
<br>
<p>I have verified the memory locality and IB card locality, all's fine.
<br>
<p>Quite accidentally I have found that there is a huge penalty if I mmap 
<br>
the shm with PROT_READ only. Using PROT_READ | PROT_WRITE yields good 
<br>
results, although I must look at this further. I'll report when I am 
<br>
certain, in case sb finds this useful.
<br>
<p>Is this an OS feature, or is OpenMPI somehow working differently? I 
<br>
don't suspect you guys write to the send buffer, right? Even if you 
<br>
would there would be a segfault. So I guess this could be OS preventing 
<br>
any writes to the pointer that introduced the overhead?
<br>
<p>Marcin
<br>
<p><p><p>On 09/28/2015 09:44 PM, Dave Goodell (dgoodell) wrote:
<br>
<span class="quotelev1">&gt; On Sep 27, 2015, at 1:38 PM, marcin.krotkiewski &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello, everyone
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am struggling a bit with IB performance when sending data from a POSIX shared memory region (/dev/shm). The memory is shared among many MPI processes within the same compute node. Essentially, I see a bit hectic performance, but it seems that my code it is roughly twice slower than when using a usual, malloced send buffer.
</span><br>
<span class="quotelev1">&gt; It may have to do with NUMA effects and the way you're allocating/touching your shared memory vs. your private (malloced) memory.  If you have a multi-NUMA-domain system (i.e., any 2+ socket server, and even some single-socket servers) then you are likely to run into this sort of issue.  The PCI bus on which your IB HCA communicates is almost certainly closer to one NUMA domain than the others, and performance will usually be worse if you are sending/receiving from/to a &quot;remote&quot; NUMA domain.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;lstopo&quot; and other tools can sometimes help you get a handle on the situation, though I don't know if it knows how to show memory affinity.  I think you can find memory affinity for a process via &quot;/proc/&lt;pid&gt;/numa_maps&quot;.  There's lots of info about NUMA affinity here: <a href="https://queue.acm.org/detail.cfm?id=2513149">https://queue.acm.org/detail.cfm?id=2513149</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27702.php">http://www.open-mpi.org/community/lists/users/2015/09/27702.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27706.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Previous message:</strong> <a href="27704.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>In reply to:</strong> <a href="27702.php">Dave Goodell (dgoodell): "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27711.php">Nathan Hjelm: "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<li><strong>Reply:</strong> <a href="27711.php">Nathan Hjelm: "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
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
