<?
$subject_val = "Re: [OMPI users] mmaped memory and openib btl.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 13:51:46 2014" -->
<!-- isoreceived="20141112185146" -->
<!-- sent="Wed, 12 Nov 2014 19:51:45 +0100" -->
<!-- isosent="20141112185145" -->
<!-- name="Emmanuel Thom&#195;&#169;" -->
<!-- email="emmanuel.thome_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mmaped memory and openib btl." -->
<!-- id="CAPLAFj5FgYRZDobhCL8OdAS7nzFDiZ0sePWY_5Px61=T_yduTA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="ECE43E27-147C-4D56-AB00-F250E194CECE_at_cisco.com" -->
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
<strong>From:</strong> Emmanuel Thom&#195;&#169; (<em>emmanuel.thome_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-12 13:51:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25781.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25779.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mmaped memory and openib btl."</a>
<li><strong>In reply to:</strong> <a href="25779.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mmaped memory and openib btl."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25805.php">Emmanuel Thomé: "Re: [OMPI users] mmaped memory and openib btl."</a>
<li><strong>Reply:</strong> <a href="25805.php">Emmanuel Thomé: "Re: [OMPI users] mmaped memory and openib btl."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yes I confirm. Thanks for saying that this is the supposed behaviour.
<br>
<p>In the binary, the code goes to munmap_at_plt, which goes to the libc,
<br>
not to libopen-pal.so
<br>
<p>libc is 2.13-38+deb7u1
<br>
<p>I'm a total noob at got/plt relocations. What is the mechanism which
<br>
should make the opal relocation win over the libc one ?
<br>
<p>E.
<br>
<p><p>On Wed, Nov 12, 2014 at 7:40 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; FWIW, munmap is *supposed* to be intercepted.  Can you confirm that when your application calls munmap, it doesn't make a call to libopen-pal.so?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It should be calling this (1-line) function:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; /* intercept munmap, as the user can give back memory that way as well. */
</span><br>
<span class="quotelev1">&gt; OPAL_DECLSPEC int munmap(void* addr, size_t len)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     return opal_memory_linux_free_ptmalloc2_munmap(addr, len, 0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 12, 2014, at 11:08 AM, Emmanuel Thom&#195;&#169; &lt;emmanuel.thome_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As far as I have been able to understand while looking at the code, it
</span><br>
<span class="quotelev2">&gt;&gt; very much seems that Joshua pointed out the exact cause for the issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; munmap'ing a virtual address space region does not evict it from
</span><br>
<span class="quotelev2">&gt;&gt; mpool_grdma-&gt;pool-&gt;lru_list . If a later mmap happens to return the
</span><br>
<span class="quotelev2">&gt;&gt; same address (a priori tied to different physical location), the
</span><br>
<span class="quotelev2">&gt;&gt; userspace believes this segment is already registered, and eventually
</span><br>
<span class="quotelev2">&gt;&gt; the transfer is directed to a bogus location.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This also seems to match this old discussion:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://lists.openfabrics.org/pipermail/general/2009-April/058786.html">http://lists.openfabrics.org/pipermail/general/2009-April/058786.html</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; although I didn't read the whole discussion there, it very much seems
</span><br>
<span class="quotelev2">&gt;&gt; that the proposal for moving the pinning/caching logic to the kernel
</span><br>
<span class="quotelev2">&gt;&gt; did not make it, unfortunately.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So are we here in the situation where this &quot;munmap should be
</span><br>
<span class="quotelev2">&gt;&gt; intercepted&quot; logic actually proves too fragile ? (in that it's not
</span><br>
<span class="quotelev2">&gt;&gt; intercepted in my case). The memory MCA in my configuration is:
</span><br>
<span class="quotelev2">&gt;&gt;              MCA memory: linux (MCA v2.0, API v2.0, Component v1.8.3)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I traced a bit what happens at the mmap call, it seems to go straight
</span><br>
<span class="quotelev2">&gt;&gt; to the libc, not via openmpi first.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the time being, I think I'll have to consider any mmap()/munmap()
</span><br>
<span class="quotelev2">&gt;&gt; rather unsafe to play with in an openmpi application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; E.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; P.S: a last version of the test case is attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 11 nov. 2014 19:48, &quot;Emmanuel Thom&#195;&#169;&quot; &lt;emmanuel.thome_at_[hidden]&gt; a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks a lot for your analysis. This seems consistent with what I can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; obtain by playing around with my different test cases.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems that munmap() does *not* unregister the memory chunk from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache. I suppose this is the reason for the bug.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In fact using mmap(..., MAP_ANONYMOUS | MAP_PRIVATE) and munmap() as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; substitutes for malloc()/free() trigger the same problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks to me that there is an oversight in the OPAL hooks around the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory functions, then. Do you agree ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; E.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Nov 11, 2014 at 3:17 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was able to reproduce your issue and I think I understand the problem a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bit better at least. This demonstrates exactly what I was pointing to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It looks like when the test switches over from eager RDMA (I'll explain in a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; second), to doing a rendezvous protocol working entirely in user buffer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; space things go bad.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you're input is smaller than some threshold, the eager RDMA limit, then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the contents of your user buffer are copied into OMPI/OpenIB BTL scratch
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; buffers called &quot;eager fragments&quot;. This pool of resources is preregistered,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pinned, and have had their rkeys exchanged. So, in the eager protocol, your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; data is copied into these &quot;locked and loaded&quot; RDMA frags and the put/get is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; handled internally. When the data is received, it's copied back out into
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; your buffer. In your setup, this always works.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $mpirun -np 2 --map-by node --bind-to core -mca pml ob1 -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl_openib_if_include mlx4_0:1 -mca btl_openib_use_eager_rdma 1 -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl_openib_eager_limit 512 -mca btl openib,self ./ibtest -s 56
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; per-node buffer has size 448 bytes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node 0 iteration 0, lead word received from peer is 0x00000401 [ok]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node 0 iteration 1, lead word received from peer is 0x00000801 [ok]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node 0 iteration 2, lead word received from peer is 0x00000c01 [ok]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node 0 iteration 3, lead word received from peer is 0x00001001 [ok]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When you exceed the eager threshold, this always fails on the second
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; iteration. To understand this, you need to understand that there is a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; protocol switch where now your user buffer is used for the transfer. Hence,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the user buffer is registered with the HCA. This operation is an inherently
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; high latency operation and is one of the primary motives for doing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; copy-in/copy-out into preregistered buffers for small, latency sensitive
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ops. For bandwidth bound transfers, the cost to register can be amortized
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; over the whole transfer, but it still affects the total bandwidth. In the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; case of a rendezvous protocol where the user buffer is registered, there is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; an optimization mostly used to help improve the numbers in a bandwidth
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; benchmark called a registration cache. With registration caching the user
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; buffer is registered once and the mkey put into a cache and the memory is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; kept pinned until the system provides some notification via either memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hooks in p2p malloc, or ummunotify that the buffer has been freed and this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; signals that the mkey can be evicted from the cache.  On subsequent
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; send/recv operations from the same user buffer address, OpenIB BTL will find
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the address in the registration cache and take the cached mkey and avoid
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; paying the cost of the memory registration the memory registration and start
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the data transfer.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What I noticed is when the rendezvous protocol kicks in, it always fails on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the second iteration.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $mpirun -np 2 --map-by node --bind-to core -mca pml ob1 -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl_openib_if_include mlx4_0:1 -mca btl_openib_use_eager_rdma 1 -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl_openib_eager_limit 128 -mca btl openib,self ./ibtest -s 56
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; per-node buffer has size 448 bytes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node 0 iteration 0, lead word received from peer is 0x00000401 [ok]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node 0 iteration 1, lead word received from peer is 0x00000000 [NOK]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, I suspected it has something to do with the way the virtual address is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; being handled in this case. To test that theory, I just completely disabled
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the registration cache by setting -mca mpi_leave_pinned 0 and things start
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to work:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $mpirun -np 2 --map-by node --bind-to core -mca pml ob1 -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl_openib_if_include mlx4_0:1 -mca btl_openib_use_eager_rdma 1 -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl_openib_eager_limit 128 -mca mpi_leave_pinned 0 -mca btl openib,self
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./ibtest -s 56
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; per-node buffer has size 448 bytes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node 0 iteration 0, lead word received from peer is 0x00000401 [ok]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node 0 iteration 1, lead word received from peer is 0x00000801 [ok]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node 0 iteration 2, lead word received from peer is 0x00000c01 [ok]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node 0 iteration 3, lead word received from peer is 0x00001001 [ok]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't know enough about memory hooks or the registration cache
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; implementation to speak with any authority, but it looks like this is where
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the issue resides. As a workaround, can you try your original experiment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with -mca mpi_leave_pinned 0 and see if you get consistent results.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tue, Nov 11, 2014 at 7:07 AM, Emmanuel Thom&#195;&#169; &lt;emmanuel.thome_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi again,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've been able to simplify my test case significantly. It now runs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with 2 nodes, and only a single MPI_Send / MPI_Recv pair is used.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The pattern is as follows.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  - ranks 0 and 1 both own a local buffer.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  - each fills it with (deterministically known) data.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  - rank 0 collects the data from rank 1's local buffer
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *    (whose contents should be no mystery), and writes this to a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *    file-backed mmaped area.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  - rank 0 compares what it receives with what it knows it *should
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  have* received.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The test fails if:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  - the openib btl is used among the 2 nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  - a file-backed mmaped area is used for receiving the data.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  - the write is done to a newly created file.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  - per-node buffer is large enough.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For a per-node buffer size above 12kb (12240 bytes to be exact), my
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; program fails, since the MPI_Recv does not receive the correct data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; chunk (it just gets zeroes).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I attach the simplified test case. I hope someone will be able to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; reproduce the problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; E.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mon, Nov 10, 2014 at 5:48 PM, Emmanuel Thom&#195;&#169;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;emmanuel.thome_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks for your answer.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Mon, Nov 10, 2014 at 4:31 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Just really quick off the top of my head, mmaping relies on the virtual
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; memory subsystem, whereas IB RDMA operations rely on physical memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; being
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; pinned (unswappable.)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Yes. Does that mean that the result of computations should be
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; undefined if I happen to give a user buffer which corresponds to a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file ? That would be surprising.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; For a large message transfer, the OpenIB BTL will
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; register the user buffer, which will pin the pages and make them
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; unswappable.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Yes. But what are the semantics of pinning the VM area pointed to by
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ptr if ptr happens to be mmaped from a file ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; If the data being transfered is small, you'll copy-in/out to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; internal bounce buffers and you shouldn't have issues.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Are you saying that the openib layer does have provision in this case
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; for letting the RDMA happen with a pinned physical memory range, and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; later perform the copy to the file-backed mmaped range ? That would
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make perfect sense indeed, although I don't have enough familiarity
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with the OMPI code to see where it happens, and more importantly
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; whether the completion properly waits for this post-RDMA copy to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; complete.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.If you try to just bcast a few kilobytes of data using this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; technique, do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; you run into issues?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; No. All &quot;simpler&quot; attempts were successful, unfortunately. Can you be
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; a little bit more precise about what scenario you imagine ? The
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; setting &quot;all ranks mmap a local file, and rank 0 broadcasts there&quot; is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; successful.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2. How large is the data in the collective (input and output), is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; in_place
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; used? I'm guess it's large enough that the BTL tries to work with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; user
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; buffer.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_IN_PLACE is used in reduce_scatter and allgather in the code.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Collectives are with communicators of 2 nodes, and we're talking (for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the smallest failing run) 8kb per node (i.e. 16kb total for an
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; allgather).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; E.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Mon, Nov 10, 2014 at 9:29 AM, Emmanuel Thom&#195;&#169;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;emmanuel.thome_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm stumbling on a problem related to the openib btl in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.[78].*, and the (I think legitimate) use of file-backed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mmaped areas for receiving data through MPI collective calls.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; A test case is attached. I've tried to make is reasonably small,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; although I recognize that it's not extra thin. The test case is a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; trimmed down version of what I witness in the context of a rather
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; large program, so there is no claim of relevance of the test case
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; itself. It's here just to trigger the desired misbehaviour. The test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; case contains some detailed information on what is done, and the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; experiments I did.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; In a nutshell, the problem is as follows.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - I do a computation, which involves MPI_Reduce_scatter and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Allgather.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - I save the result to a file (collective operation).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; *If* I save the file using something such as:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fd = open(&quot;blah&quot;, ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; area = mmap(..., fd, )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Gather(..., area, ...)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; *AND* the MPI_Reduce_scatter is done with an alternative
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; implementation (which I believe is correct)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; *AND* communication is done through the openib btl,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; then the file which gets saved is inconsistent with what is obtained
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; with the normal MPI_Reduce_scatter (alghough memory areas do coincide
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; before the save).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I tried to dig a bit in the openib internals, but all I've been able
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to witness was beyond my expertise (an RDMA read not transferring the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; expected data, but I'm too uncomfortable with this layer to say
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; anything I'm sure about).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tests have been done with several openmpi versions including 1.8.3, on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a debian wheezy (7.5) + OFED 2.3 cluster.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It would be great if someone could tell me if he is able to reproduce
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the bug, or tell me whether something which is done in this test case
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; is illegal in any respect. I'd be glad to provide further information
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; which could be of any help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; E. Thom&#195;&#169;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25730.php">http://www.open-mpi.org/community/lists/users/2014/11/25730.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25732.php">http://www.open-mpi.org/community/lists/users/2014/11/25732.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25740.php">http://www.open-mpi.org/community/lists/users/2014/11/25740.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25743.php">http://www.open-mpi.org/community/lists/users/2014/11/25743.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; &lt;prog6.c&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25775.php">http://www.open-mpi.org/community/lists/users/2014/11/25775.php</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25779.php">http://www.open-mpi.org/community/lists/users/2014/11/25779.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25781.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25779.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mmaped memory and openib btl."</a>
<li><strong>In reply to:</strong> <a href="25779.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mmaped memory and openib btl."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25805.php">Emmanuel Thomé: "Re: [OMPI users] mmaped memory and openib btl."</a>
<li><strong>Reply:</strong> <a href="25805.php">Emmanuel Thomé: "Re: [OMPI users] mmaped memory and openib btl."</a>
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
