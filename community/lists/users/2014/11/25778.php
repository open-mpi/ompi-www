<?
$subject_val = "Re: [OMPI users] mmaped memory and openib btl.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 11:58:38 2014" -->
<!-- isoreceived="20141112165838" -->
<!-- sent="Wed, 12 Nov 2014 09:58:37 -0700" -->
<!-- isosent="20141112165837" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mmaped memory and openib btl." -->
<!-- id="20141112165837.GY6508_at_pn1246003.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAPLAFj4gWorYgDp09p2i1=iN2bL16OObSp7WQZqip0P8Sygh8g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mmaped memory and openib btl.<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-12 11:58:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25779.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mmaped memory and openib btl."</a>
<li><strong>Previous message:</strong> <a href="25777.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25775.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] mmaped memory and openib btl."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25779.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mmaped memory and openib btl."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You could just disable leave pinned:
<br>
<p>-mca mpi_leave_pinned 0 -mca mpi_leave_pinned_pipeline 0
<br>
<p>This will fix the issue but may reduce performance. Not sure why the
<br>
munmap wrapper is failing to execute but this will get you running.
<br>
<p>-Nathan Hjelm
<br>
HPC-5, LANL
<br>
<p>On Wed, Nov 12, 2014 at 05:08:06PM +0100, Emmanuel Thom&#233; wrote:
<br>
<span class="quotelev1">&gt; As far as I have been able to understand while looking at the code, it
</span><br>
<span class="quotelev1">&gt; very much seems that Joshua pointed out the exact cause for the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; munmap'ing a virtual address space region does not evict it from
</span><br>
<span class="quotelev1">&gt; mpool_grdma-&gt;pool-&gt;lru_list . If a later mmap happens to return the
</span><br>
<span class="quotelev1">&gt; same address (a priori tied to different physical location), the
</span><br>
<span class="quotelev1">&gt; userspace believes this segment is already registered, and eventually
</span><br>
<span class="quotelev1">&gt; the transfer is directed to a bogus location.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This also seems to match this old discussion:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://lists.openfabrics.org/pipermail/general/2009-April/058786.html">http://lists.openfabrics.org/pipermail/general/2009-April/058786.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; although I didn't read the whole discussion there, it very much seems
</span><br>
<span class="quotelev1">&gt; that the proposal for moving the pinning/caching logic to the kernel
</span><br>
<span class="quotelev1">&gt; did not make it, unfortunately.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So are we here in the situation where this &quot;munmap should be
</span><br>
<span class="quotelev1">&gt; intercepted&quot; logic actually proves too fragile ? (in that it's not
</span><br>
<span class="quotelev1">&gt; intercepted in my case). The memory MCA in my configuration is:
</span><br>
<span class="quotelev1">&gt;               MCA memory: linux (MCA v2.0, API v2.0, Component v1.8.3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I traced a bit what happens at the mmap call, it seems to go straight
</span><br>
<span class="quotelev1">&gt; to the libc, not via openmpi first.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the time being, I think I'll have to consider any mmap()/munmap()
</span><br>
<span class="quotelev1">&gt; rather unsafe to play with in an openmpi application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; E.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S: a last version of the test case is attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 11 nov. 2014 19:48, &quot;Emmanuel Thom&#233;&quot; &lt;emmanuel.thome_at_[hidden]&gt; a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks a lot for your analysis. This seems consistent with what I can
</span><br>
<span class="quotelev2">&gt; &gt; obtain by playing around with my different test cases.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It seems that munmap() does *not* unregister the memory chunk from the
</span><br>
<span class="quotelev2">&gt; &gt; cache. I suppose this is the reason for the bug.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In fact using mmap(..., MAP_ANONYMOUS | MAP_PRIVATE) and munmap() as
</span><br>
<span class="quotelev2">&gt; &gt; substitutes for malloc()/free() trigger the same problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It looks to me that there is an oversight in the OPAL hooks around the
</span><br>
<span class="quotelev2">&gt; &gt; memory functions, then. Do you agree ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; E.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Nov 11, 2014 at 3:17 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I was able to reproduce your issue and I think I understand the problem a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; bit better at least. This demonstrates exactly what I was pointing to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It looks like when the test switches over from eager RDMA (I'll explain in a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; second), to doing a rendezvous protocol working entirely in user buffer
</span><br>
<span class="quotelev3">&gt; &gt; &gt; space things go bad.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If you're input is smaller than some threshold, the eager RDMA limit, then
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the contents of your user buffer are copied into OMPI/OpenIB BTL scratch
</span><br>
<span class="quotelev3">&gt; &gt; &gt; buffers called &quot;eager fragments&quot;. This pool of resources is preregistered,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; pinned, and have had their rkeys exchanged. So, in the eager protocol, your
</span><br>
<span class="quotelev3">&gt; &gt; &gt; data is copied into these &quot;locked and loaded&quot; RDMA frags and the put/get is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; handled internally. When the data is received, it's copied back out into
</span><br>
<span class="quotelev3">&gt; &gt; &gt; your buffer. In your setup, this always works.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $mpirun -np 2 --map-by node --bind-to core -mca pml ob1 -mca
</span><br>
<span class="quotelev3">&gt; &gt; &gt; btl_openib_if_include mlx4_0:1 -mca btl_openib_use_eager_rdma 1 -mca
</span><br>
<span class="quotelev3">&gt; &gt; &gt; btl_openib_eager_limit 512 -mca btl openib,self ./ibtest -s 56
</span><br>
<span class="quotelev3">&gt; &gt; &gt; per-node buffer has size 448 bytes
</span><br>
<span class="quotelev3">&gt; &gt; &gt; node 0 iteration 0, lead word received from peer is 0x00000401 [ok]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; node 0 iteration 1, lead word received from peer is 0x00000801 [ok]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; node 0 iteration 2, lead word received from peer is 0x00000c01 [ok]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; node 0 iteration 3, lead word received from peer is 0x00001001 [ok]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; When you exceed the eager threshold, this always fails on the second
</span><br>
<span class="quotelev3">&gt; &gt; &gt; iteration. To understand this, you need to understand that there is a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; protocol switch where now your user buffer is used for the transfer. Hence,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the user buffer is registered with the HCA. This operation is an inherently
</span><br>
<span class="quotelev3">&gt; &gt; &gt; high latency operation and is one of the primary motives for doing
</span><br>
<span class="quotelev3">&gt; &gt; &gt; copy-in/copy-out into preregistered buffers for small, latency sensitive
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ops. For bandwidth bound transfers, the cost to register can be amortized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; over the whole transfer, but it still affects the total bandwidth. In the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; case of a rendezvous protocol where the user buffer is registered, there is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; an optimization mostly used to help improve the numbers in a bandwidth
</span><br>
<span class="quotelev3">&gt; &gt; &gt; benchmark called a registration cache. With registration caching the user
</span><br>
<span class="quotelev3">&gt; &gt; &gt; buffer is registered once and the mkey put into a cache and the memory is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; kept pinned until the system provides some notification via either memory
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hooks in p2p malloc, or ummunotify that the buffer has been freed and this
</span><br>
<span class="quotelev3">&gt; &gt; &gt; signals that the mkey can be evicted from the cache.  On subsequent
</span><br>
<span class="quotelev3">&gt; &gt; &gt; send/recv operations from the same user buffer address, OpenIB BTL will find
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the address in the registration cache and take the cached mkey and avoid
</span><br>
<span class="quotelev3">&gt; &gt; &gt; paying the cost of the memory registration the memory registration and start
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the data transfer.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What I noticed is when the rendezvous protocol kicks in, it always fails on
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the second iteration.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $mpirun -np 2 --map-by node --bind-to core -mca pml ob1 -mca
</span><br>
<span class="quotelev3">&gt; &gt; &gt; btl_openib_if_include mlx4_0:1 -mca btl_openib_use_eager_rdma 1 -mca
</span><br>
<span class="quotelev3">&gt; &gt; &gt; btl_openib_eager_limit 128 -mca btl openib,self ./ibtest -s 56
</span><br>
<span class="quotelev3">&gt; &gt; &gt; per-node buffer has size 448 bytes
</span><br>
<span class="quotelev3">&gt; &gt; &gt; node 0 iteration 0, lead word received from peer is 0x00000401 [ok]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; node 0 iteration 1, lead word received from peer is 0x00000000 [NOK]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So, I suspected it has something to do with the way the virtual address is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; being handled in this case. To test that theory, I just completely disabled
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the registration cache by setting -mca mpi_leave_pinned 0 and things start
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to work:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $mpirun -np 2 --map-by node --bind-to core -mca pml ob1 -mca
</span><br>
<span class="quotelev3">&gt; &gt; &gt; btl_openib_if_include mlx4_0:1 -mca btl_openib_use_eager_rdma 1 -mca
</span><br>
<span class="quotelev3">&gt; &gt; &gt; btl_openib_eager_limit 128 -mca mpi_leave_pinned 0 -mca btl openib,self
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ./ibtest -s 56
</span><br>
<span class="quotelev3">&gt; &gt; &gt; per-node buffer has size 448 bytes
</span><br>
<span class="quotelev3">&gt; &gt; &gt; node 0 iteration 0, lead word received from peer is 0x00000401 [ok]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; node 0 iteration 1, lead word received from peer is 0x00000801 [ok]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; node 0 iteration 2, lead word received from peer is 0x00000c01 [ok]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; node 0 iteration 3, lead word received from peer is 0x00001001 [ok]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I don't know enough about memory hooks or the registration cache
</span><br>
<span class="quotelev3">&gt; &gt; &gt; implementation to speak with any authority, but it looks like this is where
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the issue resides. As a workaround, can you try your original experiment
</span><br>
<span class="quotelev3">&gt; &gt; &gt; with -mca mpi_leave_pinned 0 and see if you get consistent results.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Josh
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Tue, Nov 11, 2014 at 7:07 AM, Emmanuel Thom&#233; &lt;emmanuel.thome_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hi again,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I've been able to simplify my test case significantly. It now runs
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; with 2 nodes, and only a single MPI_Send / MPI_Recv pair is used.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; The pattern is as follows.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  *  - ranks 0 and 1 both own a local buffer.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  *  - each fills it with (deterministically known) data.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  *  - rank 0 collects the data from rank 1's local buffer
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  *    (whose contents should be no mystery), and writes this to a
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  *    file-backed mmaped area.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  *  - rank 0 compares what it receives with what it knows it *should
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  *  have* received.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; The test fails if:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  *  - the openib btl is used among the 2 nodes
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  *  - a file-backed mmaped area is used for receiving the data.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  *  - the write is done to a newly created file.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  *  - per-node buffer is large enough.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; For a per-node buffer size above 12kb (12240 bytes to be exact), my
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; program fails, since the MPI_Recv does not receive the correct data
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; chunk (it just gets zeroes).
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I attach the simplified test case. I hope someone will be able to
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; reproduce the problem.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; E.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Mon, Nov 10, 2014 at 5:48 PM, Emmanuel Thom&#233;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; &lt;emmanuel.thome_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Thanks for your answer.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; On Mon, Nov 10, 2014 at 4:31 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; Just really quick off the top of my head, mmaping relies on the virtual
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; memory subsystem, whereas IB RDMA operations rely on physical memory
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; being
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; pinned (unswappable.)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Yes. Does that mean that the result of computations should be
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; undefined if I happen to give a user buffer which corresponds to a
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; file ? That would be surprising.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; For a large message transfer, the OpenIB BTL will
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; register the user buffer, which will pin the pages and make them
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; unswappable.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Yes. But what are the semantics of pinning the VM area pointed to by
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; ptr if ptr happens to be mmaped from a file ?
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; If the data being transfered is small, you'll copy-in/out to
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; internal bounce buffers and you shouldn't have issues.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Are you saying that the openib layer does have provision in this case
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; for letting the RDMA happen with a pinned physical memory range, and
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; later perform the copy to the file-backed mmaped range ? That would
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; make perfect sense indeed, although I don't have enough familiarity
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; with the OMPI code to see where it happens, and more importantly
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; whether the completion properly waits for this post-RDMA copy to
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; complete.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; 1.If you try to just bcast a few kilobytes of data using this
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; technique, do
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; you run into issues?
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; No. All &quot;simpler&quot; attempts were successful, unfortunately. Can you be
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; a little bit more precise about what scenario you imagine ? The
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; setting &quot;all ranks mmap a local file, and rank 0 broadcasts there&quot; is
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; successful.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; 2. How large is the data in the collective (input and output), is
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; in_place
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; used? I'm guess it's large enough that the BTL tries to work with the
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; user
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; buffer.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; MPI_IN_PLACE is used in reduce_scatter and allgather in the code.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Collectives are with communicators of 2 nodes, and we're talking (for
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; the smallest failing run) 8kb per node (i.e. 16kb total for an
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; allgather).
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; E.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; On Mon, Nov 10, 2014 at 9:29 AM, Emmanuel Thom&#233;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; &lt;emmanuel.thome_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; I'm stumbling on a problem related to the openib btl in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; openmpi-1.[78].*, and the (I think legitimate) use of file-backed
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; mmaped areas for receiving data through MPI collective calls.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; A test case is attached. I've tried to make is reasonably small,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; although I recognize that it's not extra thin. The test case is a
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; trimmed down version of what I witness in the context of a rather
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; large program, so there is no claim of relevance of the test case
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; itself. It's here just to trigger the desired misbehaviour. The test
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; case contains some detailed information on what is done, and the
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; experiments I did.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; In a nutshell, the problem is as follows.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt;  - I do a computation, which involves MPI_Reduce_scatter and
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; MPI_Allgather.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt;  - I save the result to a file (collective operation).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; *If* I save the file using something such as:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt;  fd = open(&quot;blah&quot;, ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt;  area = mmap(..., fd, )
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt;  MPI_Gather(..., area, ...)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; *AND* the MPI_Reduce_scatter is done with an alternative
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; implementation (which I believe is correct)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; *AND* communication is done through the openib btl,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; then the file which gets saved is inconsistent with what is obtained
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; with the normal MPI_Reduce_scatter (alghough memory areas do coincide
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; before the save).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; I tried to dig a bit in the openib internals, but all I've been able
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; to witness was beyond my expertise (an RDMA read not transferring the
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; expected data, but I'm too uncomfortable with this layer to say
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; anything I'm sure about).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; Tests have been done with several openmpi versions including 1.8.3, on
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; a debian wheezy (7.5) + OFED 2.3 cluster.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; It would be great if someone could tell me if he is able to reproduce
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; the bug, or tell me whether something which is done in this test case
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; is illegal in any respect. I'd be glad to provide further information
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; which could be of any help.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; E. Thom&#233;.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25730.php">http://www.open-mpi.org/community/lists/users/2014/11/25730.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25732.php">http://www.open-mpi.org/community/lists/users/2014/11/25732.php</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25740.php">http://www.open-mpi.org/community/lists/users/2014/11/25740.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25743.php">http://www.open-mpi.org/community/lists/users/2014/11/25743.php</a>
</span><br>
<p><span class="quotelev1">&gt; #define _GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/stat.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;fcntl.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdint.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;assert.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/mman.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* This test file illustrates how in certain circumstances, an mmap area
</span><br>
<span class="quotelev1">&gt;  * cannot correctly receive data sent from an MPI_Send call.
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * This program wants to run on 2 distinct nodes connected with
</span><br>
<span class="quotelev1">&gt;  * infiniband.
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * Normal behaviour of the program consists in printing output similar
</span><br>
<span class="quotelev1">&gt;  * to:
</span><br>
<span class="quotelev1">&gt; node 0 iteration 0, lead word received from peer is 0x00000401 [ok]
</span><br>
<span class="quotelev1">&gt; node 0 iteration 1, lead word received from peer is 0x00000801 [ok]
</span><br>
<span class="quotelev1">&gt; node 0 iteration 2, lead word received from peer is 0x00000c01 [ok]
</span><br>
<span class="quotelev1">&gt; node 0 iteration 3, lead word received from peer is 0x00001001 [ok]
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * Abnormal behaviour is when the job ends with MPI_Abort after printing
</span><br>
<span class="quotelev1">&gt;  * a line such as:
</span><br>
<span class="quotelev1">&gt; node 0 iteration 1, lead word received from peer is 0x00000000 [NOK]
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * Each iteration of the main loop does the same thing.
</span><br>
<span class="quotelev1">&gt;  *  - rank 0 allocates a buffer with mmap
</span><br>
<span class="quotelev1">&gt;  *  - rank 1 sends data there with MPI_Send
</span><br>
<span class="quotelev1">&gt;  *  - rank 0 verifies that the data has been correctly received.
</span><br>
<span class="quotelev1">&gt;  *  - rank 0 frees the buffer with munmap
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * The final check performed by rank 0 fails if the following conditions
</span><br>
<span class="quotelev1">&gt;  * are met:
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  *  - the openib btl is used among the 2 nodes
</span><br>
<span class="quotelev1">&gt;  *  - allocation is done via mmap/munmap (not via malloc/free)
</span><br>
<span class="quotelev1">&gt;  *  - the send is large enough.
</span><br>
<span class="quotelev1">&gt;  * 
</span><br>
<span class="quotelev1">&gt;  * The first condition is controlled by the btl mca.
</span><br>
<span class="quotelev1">&gt;  * The size of the transfer is controlled by the -s command line
</span><br>
<span class="quotelev1">&gt;  * argument */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* For compiling, one may do:
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;       MPI=$HOME/Packages/openmpi-1.8.3
</span><br>
<span class="quotelev1">&gt;       $MPI/bin/mpicc -W -Wall -std=c99 -O0 -g prog5.c
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;  * For running, assuming /tmp/hosts contains the list of 2 nodes, and
</span><br>
<span class="quotelev1">&gt;  * $SSH is used to connect to these:
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;       SSH_AUTH_SOCK= DISPLAY= $MPI/bin/mpiexec -machinefile /tmp/hosts --mca plm_rsh_agent $SSH --mca rmaps_base_mapping_policy node -n 2  ./a.out -s 2048
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Tested (FAIL means that setting USE_MMAP_FOR_FILE_IO above yields to a
</span><br>
<span class="quotelev1">&gt;  * program failure, while we succeed if it is unset).
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * IB boards MCX353A-FCBT, fw rev 2.32.5100, MLNX_OFED_LINUX-2.3-1.0.1-debian7.5-x86_64
</span><br>
<span class="quotelev1">&gt;  * openmpi-1.8.4rc1 FAIL   (ok with --mca btl ^openib)
</span><br>
<span class="quotelev1">&gt;  * openmpi-1.8.3 FAIL      (ok with --mca btl ^openib)
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * A previous, longer test case also failed with IB boards MHGH29-XTC.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Passing --mca mpi_leave_pinned 0 eliminates the bug */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char * argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     int size;
</span><br>
<span class="quotelev1">&gt;     int rank;
</span><br>
<span class="quotelev1">&gt;     int eitems = 1530;  /* eitems &gt;= 1530 seem to fail on my cluster */
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (size != 2) abort();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     int use_mmap = 1;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     for(argc--, argv++; argc ; ) {
</span><br>
<span class="quotelev1">&gt;         if (argc &gt;= 2 &amp;&amp; strcmp(argv[0], &quot;-s&quot;) == 0) {
</span><br>
<span class="quotelev1">&gt;             eitems = atoi(argv[1]);
</span><br>
<span class="quotelev1">&gt;             argc -= 2;
</span><br>
<span class="quotelev1">&gt;             argv += 2;
</span><br>
<span class="quotelev1">&gt;             continue;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         if (strcmp(argv[0], &quot;-malloc&quot;) == 0) {
</span><br>
<span class="quotelev1">&gt;             use_mmap = 0;
</span><br>
<span class="quotelev1">&gt;             argc--, argv++;
</span><br>
<span class="quotelev1">&gt;             continue;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         fprintf(stderr, &quot;Unexpected: %s\n&quot;, argv[0]);
</span><br>
<span class="quotelev1">&gt;         exit(EXIT_FAILURE);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     size_t chunksize = eitems * sizeof(unsigned long);
</span><br>
<span class="quotelev1">&gt;     size_t wsiz = ((chunksize - 1) | (sysconf (_SC_PAGESIZE)-1)) + 1;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     unsigned long * localbuf = malloc(chunksize);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     for(int iter = 0 ; iter &lt; 4 ; iter++) {
</span><br>
<span class="quotelev1">&gt;         unsigned long magic = (1 + iter) &lt;&lt; 10;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         int ok = 1;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         if (rank == 1) {
</span><br>
<span class="quotelev1">&gt;             for(int item = 0 ; item &lt; eitems ; item++) {
</span><br>
<span class="quotelev1">&gt;                 localbuf[item] = magic + rank;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             MPI_Send(localbuf, eitems, MPI_UNSIGNED_LONG, 0, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;         } else {
</span><br>
<span class="quotelev1">&gt;             unsigned long * recvbuf;
</span><br>
<span class="quotelev1">&gt;             if (use_mmap) {
</span><br>
<span class="quotelev1">&gt;                 recvbuf = mmap(NULL, wsiz, PROT_READ | PROT_WRITE, MAP_PRIVATE | MAP_ANONYMOUS, -1, 0);
</span><br>
<span class="quotelev1">&gt;             } else {
</span><br>
<span class="quotelev1">&gt;                 recvbuf = malloc(wsiz);
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             MPI_Recv(recvbuf, eitems, MPI_UNSIGNED_LONG, !rank, 0, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;             ok = (*recvbuf == magic + !rank);
</span><br>
<span class="quotelev1">&gt;             fprintf(stderr, &quot;node %d iteration %d, lead word received from peer is 0x%08lx [%s]\n&quot;, rank, iter, *recvbuf, ok?&quot;ok&quot;:&quot;NOK&quot;);
</span><br>
<span class="quotelev1">&gt;             if (use_mmap) {
</span><br>
<span class="quotelev1">&gt;                 munmap(recvbuf, wsiz);
</span><br>
<span class="quotelev1">&gt;             } else {
</span><br>
<span class="quotelev1">&gt;                 free(recvbuf);
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         /* only rank 0 has performed a new check */
</span><br>
<span class="quotelev1">&gt;         MPI_Bcast(&amp;ok, 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         if (!ok) MPI_Abort(MPI_COMM_WORLD, 1);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     free(localbuf);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25775.php">http://www.open-mpi.org/community/lists/users/2014/11/25775.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25778/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25779.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mmaped memory and openib btl."</a>
<li><strong>Previous message:</strong> <a href="25777.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25775.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] mmaped memory and openib btl."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25779.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mmaped memory and openib btl."</a>
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
