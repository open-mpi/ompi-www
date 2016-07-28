<?
$subject_val = "Re: [OMPI users] Using POSIX shared memory as send buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 13:56:23 2015" -->
<!-- isoreceived="20150930175623" -->
<!-- sent="Wed, 30 Sep 2015 19:56:16 +0200" -->
<!-- isosent="20150930175616" -->
<!-- name="marcin.krotkiewski" -->
<!-- email="marcin.krotkiewski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using POSIX shared memory as send buffer" -->
<!-- id="560C2240.4090609_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20150929223756.GH2128_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> marcin.krotkiewski (<em>marcin.krotkiewski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-30 13:56:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27749.php">George Bosilca: "Re: [OMPI users] about MPI communication complexity"</a>
<li><strong>Previous message:</strong> <a href="27747.php">Nathan Hjelm: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>In reply to:</strong> <a href="27718.php">Nathan Hjelm: "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27768.php">Brice Goglin: "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Nathan
<br>
<p>I have compiled 2.x with your patch. I must say it works _much_ better 
<br>
with your changes. I have no idea how you figured that out! A short 
<br>
table with my bandwidth calculations (MB/s)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROT_READ        PROT_READ | PROT_WRITE
<br>
1.10.0            2500                        5700
<br>
2.x+patch     4800-5200                5700
<br>
<p>That is not a very thorough study, but essentially I was getting 
<br>
2500MB/s with read-only shm. With your patch it is somewhat shaky (very 
<br>
rarely I get 2500 also), but most of the time it is around 5000MB/s.
<br>
<p>Seems mmaping the memory read-write still yields marginally better 
<br>
results. Again, I do not have very solid data to support it - just a 
<br>
bunch of runs.
<br>
<p>Do you have an idea as to why such performance difference exists?
<br>
<p>Thanks a lot!
<br>
<p>Marcin
<br>
<p><p>On 09/30/2015 12:37 AM, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; There was a bug in that patch that affected IB systems. Updated patch:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/hjelmn/ompi/commit/c53df23c0bcf8d1c531e04d22b96c8c19f9b3fd1.patch">https://github.com/hjelmn/ompi/commit/c53df23c0bcf8d1c531e04d22b96c8c19f9b3fd1.patch</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 29, 2015 at 03:35:21PM -0600, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have a branch with the changes available at:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/hjelmn/ompi.git">https://github.com/hjelmn/ompi.git</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in the mpool_update branch. If you prefer you can apply this patch to
</span><br>
<span class="quotelev2">&gt;&gt; either a 2.x or a master tarball.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/hjelmn/ompi/commit/8839dbfae85ba8f443b2857f9bbefdc36c4ebc1a.patch">https://github.com/hjelmn/ompi/commit/8839dbfae85ba8f443b2857f9bbefdc36c4ebc1a.patch</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me know if this resolves the performance issues.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Sep 29, 2015 at 09:57:54PM +0200, marcin.krotkiewski wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I've now run a few more tests and I think I can reasonably confidently say
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     that the read only mmap is a problem. Let me know if you have a possible
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     fix - I will gladly test it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Marcin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On 09/29/2015 04:59 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   We register the memory with the NIC for both read and write access. This
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   may be the source of the slowdown. We recently added internal support to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   allow the point-to-point layer to specify the access flags but the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   openib btl does not yet make use of the new support. I plan to make the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   necessary changes before the 2.0.0 release. I should have them complete
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   later this week. I can send you a note when they are ready if you would
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   like to try it and see if it addresses the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -Nathan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   On Tue, Sep 29, 2015 at 10:51:38AM +0200, Marcin Krotkiewski wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Thanks, Dave.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I have verified the memory locality and IB card locality, all's fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Quite accidentally I have found that there is a huge penalty if I mmap the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   shm with PROT_READ only. Using PROT_READ | PROT_WRITE yields good results,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   although I must look at this further. I'll report when I am certain, in case
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   sb finds this useful.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Is this an OS feature, or is OpenMPI somehow working differently? I don't
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   suspect you guys write to the send buffer, right? Even if you would there
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   would be a segfault. So I guess this could be OS preventing any writes to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   the pointer that introduced the overhead?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Marcin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   On 09/28/2015 09:44 PM, Dave Goodell (dgoodell) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   On Sep 27, 2015, at 1:38 PM, marcin.krotkiewski &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Hello, everyone
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I am struggling a bit with IB performance when sending data from a POSIX shared memory region (/dev/shm). The memory is shared among many MPI processes within the same compute node. Essentially, I see a bit hectic performance, but it seems that my code it is roughly twice slower than when using a usual, malloced send buffer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   It may have to do with NUMA effects and the way you're allocating/touching your shared memory vs. your private (malloced) memory.  If you have a multi-NUMA-domain system (i.e., any 2+ socket server, and even some single-socket servers) then you are likely to run into this sort of issue.  The PCI bus on which your IB HCA communicates is almost certainly closer to one NUMA domain than the others, and performance will usually be worse if you are sending/receiving from/to a &quot;remote&quot; NUMA domain.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   &quot;lstopo&quot; and other tools can sometimes help you get a handle on the situation, though I don't know if it knows how to show memory affinity.  I think you can find memory affinity for a process via &quot;/proc/&lt;pid&gt;/numa_maps&quot;.  There's lots of info about NUMA affinity here: <a href="https://queue.acm.org/detail.cfm?id=2513149">https://queue.acm.org/detail.cfm?id=2513149</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -Dave
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27702.php">http://www.open-mpi.org/community/lists/users/2015/09/27702.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27705.php">http://www.open-mpi.org/community/lists/users/2015/09/27705.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27711.php">http://www.open-mpi.org/community/lists/users/2015/09/27711.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27716.php">http://www.open-mpi.org/community/lists/users/2015/09/27716.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27717.php">http://www.open-mpi.org/community/lists/users/2015/09/27717.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27718.php">http://www.open-mpi.org/community/lists/users/2015/09/27718.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27748/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27749.php">George Bosilca: "Re: [OMPI users] about MPI communication complexity"</a>
<li><strong>Previous message:</strong> <a href="27747.php">Nathan Hjelm: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>In reply to:</strong> <a href="27718.php">Nathan Hjelm: "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27768.php">Brice Goglin: "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
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
