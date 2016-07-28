<?
$subject_val = "Re: [OMPI users] File-backed mmaped I/O and openib btl.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 09:17:58 2014" -->
<!-- isoreceived="20141111141758" -->
<!-- sent="Tue, 11 Nov 2014 09:17:55 -0500" -->
<!-- isosent="20141111141755" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File-backed mmaped I/O and openib btl." -->
<!-- id="CAG4F6z864Y=+kVfApOuGm65Kruz+UmSsn33Sc93F2udQZFGGGA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAPLAFj43y8wnH7tsG4sYVand4mgy749jrN+N6Wf0CxjmkdeTeg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] File-backed mmaped I/O and openib btl.<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-11 09:17:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25744.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25742.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to hosts file"</a>
<li><strong>In reply to:</strong> <a href="25740.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25758.php">Emmanuel Thomé: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<li><strong>Reply:</strong> <a href="25758.php">Emmanuel Thomé: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was able to reproduce your issue and I think I understand the problem a
<br>
bit better at least. This demonstrates exactly what I was pointing to:
<br>
<p>It looks like when the test switches over from eager RDMA (I'll explain in
<br>
a second), to doing a rendezvous protocol working entirely in user buffer
<br>
space things go bad.
<br>
<p>If you're input is smaller than some threshold, the eager RDMA limit, then
<br>
the contents of your user buffer are copied into OMPI/OpenIB BTL scratch
<br>
buffers called &quot;eager fragments&quot;. This pool of resources is preregistered,
<br>
pinned, and have had their rkeys exchanged. So, in the eager protocol, your
<br>
data is copied into these &quot;locked and loaded&quot; RDMA frags and the put/get is
<br>
handled internally. When the data is received, it's copied back out into
<br>
your buffer. In your setup, this always works.
<br>
<p>$mpirun -np 2 --map-by node --bind-to core -mca pml ob1 -mca
<br>
btl_openib_if_include mlx4_0:1 -mca btl_openib_use_eager_rdma 1 -mca
<br>
btl_openib_eager_limit 512 -mca btl openib,self ./ibtest -s 56
<br>
per-node buffer has size 448 bytes
<br>
node 0 iteration 0, lead word received from peer is 0x00000401 [ok]
<br>
node 0 iteration 1, lead word received from peer is 0x00000801 [ok]
<br>
node 0 iteration 2, lead word received from peer is 0x00000c01 [ok]
<br>
node 0 iteration 3, lead word received from peer is 0x00001001 [ok]
<br>
<p>When you exceed the eager threshold, this always fails on the second
<br>
iteration. To understand this, you need to understand that there is a
<br>
protocol switch where now your user buffer is used for the transfer. Hence,
<br>
the user buffer is registered with the HCA. This operation is an inherently
<br>
high latency operation and is one of the primary motives for doing
<br>
copy-in/copy-out into preregistered buffers for small, latency sensitive
<br>
ops. For bandwidth bound transfers, the cost to register can be amortized
<br>
over the whole transfer, but it still affects the total bandwidth. In the
<br>
case of a rendezvous protocol where the user buffer is registered, there is
<br>
an optimization mostly used to help improve the numbers in a bandwidth
<br>
benchmark called a registration cache. With registration caching the user
<br>
buffer is registered once and the mkey put into a cache and the memory is
<br>
kept pinned until the system provides some notification via either memory
<br>
hooks in p2p malloc, or ummunotify that the buffer has been freed and this
<br>
signals that the mkey can be evicted from the cache.  On subsequent
<br>
send/recv operations from the same user buffer address, OpenIB BTL will
<br>
find the address in the registration cache and take the cached mkey and
<br>
avoid paying the cost of the memory registration the memory registration
<br>
and start the data transfer.
<br>
<p>What I noticed is when the rendezvous protocol kicks in, it always fails on
<br>
the second iteration.
<br>
<p>$mpirun -np 2 --map-by node --bind-to core -mca pml ob1 -mca
<br>
btl_openib_if_include mlx4_0:1 -mca btl_openib_use_eager_rdma 1 -mca
<br>
btl_openib_eager_limit 128 -mca btl openib,self ./ibtest -s 56
<br>
per-node buffer has size 448 bytes
<br>
node 0 iteration 0, lead word received from peer is 0x00000401 [ok]
<br>
node 0 iteration 1, lead word received from peer is 0x00000000 [NOK]
<br>
--------------------------------------------------------------------------
<br>
<p>So, I suspected it has something to do with the way the virtual address is
<br>
being handled in this case. To test that theory, I just completely disabled
<br>
the registration cache by setting -mca mpi_leave_pinned 0 and things start
<br>
to work:
<br>
<p>$mpirun -np 2 --map-by node --bind-to core -mca pml ob1 -mca
<br>
btl_openib_if_include mlx4_0:1 -mca btl_openib_use_eager_rdma 1 -mca
<br>
btl_openib_eager_limit 128 -mca mpi_leave_pinned 0 -mca btl openib,self
<br>
./ibtest -s 56
<br>
per-node buffer has size 448 bytes
<br>
node 0 iteration 0, lead word received from peer is 0x00000401 [ok]
<br>
node 0 iteration 1, lead word received from peer is 0x00000801 [ok]
<br>
node 0 iteration 2, lead word received from peer is 0x00000c01 [ok]
<br>
node 0 iteration 3, lead word received from peer is 0x00001001 [ok]
<br>
<p>I don't know enough about memory hooks or the registration cache
<br>
implementation to speak with any authority, but it looks like this is where
<br>
the issue resides. As a workaround, can you try your original experiment
<br>
with -mca mpi_leave_pinned 0 and see if you get consistent results.
<br>
<p><p>Josh
<br>
<p><p><p><p><p>On Tue, Nov 11, 2014 at 7:07 AM, Emmanuel Thom&#195;&#169; &lt;emmanuel.thome_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been able to simplify my test case significantly. It now runs
</span><br>
<span class="quotelev1">&gt; with 2 nodes, and only a single MPI_Send / MPI_Recv pair is used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The pattern is as follows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  *  - ranks 0 and 1 both own a local buffer.
</span><br>
<span class="quotelev1">&gt;  *  - each fills it with (deterministically known) data.
</span><br>
<span class="quotelev1">&gt;  *  - rank 0 collects the data from rank 1's local buffer
</span><br>
<span class="quotelev1">&gt;  *    (whose contents should be no mystery), and writes this to a
</span><br>
<span class="quotelev1">&gt;  *    file-backed mmaped area.
</span><br>
<span class="quotelev1">&gt;  *  - rank 0 compares what it receives with what it knows it *should
</span><br>
<span class="quotelev1">&gt;  *  have* received.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The test fails if:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  *  - the openib btl is used among the 2 nodes
</span><br>
<span class="quotelev1">&gt;  *  - a file-backed mmaped area is used for receiving the data.
</span><br>
<span class="quotelev1">&gt;  *  - the write is done to a newly created file.
</span><br>
<span class="quotelev1">&gt;  *  - per-node buffer is large enough.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For a per-node buffer size above 12kb (12240 bytes to be exact), my
</span><br>
<span class="quotelev1">&gt; program fails, since the MPI_Recv does not receive the correct data
</span><br>
<span class="quotelev1">&gt; chunk (it just gets zeroes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I attach the simplified test case. I hope someone will be able to
</span><br>
<span class="quotelev1">&gt; reproduce the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Nov 10, 2014 at 5:48 PM, Emmanuel Thom&#195;&#169;
</span><br>
<span class="quotelev1">&gt; &lt;emmanuel.thome_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your answer.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Nov 10, 2014 at 4:31 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Just really quick off the top of my head, mmaping relies on the virtual
</span><br>
<span class="quotelev3">&gt; &gt;&gt; memory subsystem, whereas IB RDMA operations rely on physical memory
</span><br>
<span class="quotelev1">&gt; being
</span><br>
<span class="quotelev3">&gt; &gt;&gt; pinned (unswappable.)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes. Does that mean that the result of computations should be
</span><br>
<span class="quotelev2">&gt; &gt; undefined if I happen to give a user buffer which corresponds to a
</span><br>
<span class="quotelev2">&gt; &gt; file ? That would be surprising.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For a large message transfer, the OpenIB BTL will
</span><br>
<span class="quotelev3">&gt; &gt;&gt; register the user buffer, which will pin the pages and make them
</span><br>
<span class="quotelev3">&gt; &gt;&gt; unswappable.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes. But what are the semantics of pinning the VM area pointed to by
</span><br>
<span class="quotelev2">&gt; &gt; ptr if ptr happens to be mmaped from a file ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If the data being transfered is small, you'll copy-in/out to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; internal bounce buffers and you shouldn't have issues.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Are you saying that the openib layer does have provision in this case
</span><br>
<span class="quotelev2">&gt; &gt; for letting the RDMA happen with a pinned physical memory range, and
</span><br>
<span class="quotelev2">&gt; &gt; later perform the copy to the file-backed mmaped range ? That would
</span><br>
<span class="quotelev2">&gt; &gt; make perfect sense indeed, although I don't have enough familiarity
</span><br>
<span class="quotelev2">&gt; &gt; with the OMPI code to see where it happens, and more importantly
</span><br>
<span class="quotelev2">&gt; &gt; whether the completion properly waits for this post-RDMA copy to
</span><br>
<span class="quotelev2">&gt; &gt; complete.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.If you try to just bcast a few kilobytes of data using this
</span><br>
<span class="quotelev1">&gt; technique, do
</span><br>
<span class="quotelev3">&gt; &gt;&gt; you run into issues?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; No. All &quot;simpler&quot; attempts were successful, unfortunately. Can you be
</span><br>
<span class="quotelev2">&gt; &gt; a little bit more precise about what scenario you imagine ? The
</span><br>
<span class="quotelev2">&gt; &gt; setting &quot;all ranks mmap a local file, and rank 0 broadcasts there&quot; is
</span><br>
<span class="quotelev2">&gt; &gt; successful.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2. How large is the data in the collective (input and output), is
</span><br>
<span class="quotelev1">&gt; in_place
</span><br>
<span class="quotelev3">&gt; &gt;&gt; used? I'm guess it's large enough that the BTL tries to work with the
</span><br>
<span class="quotelev1">&gt; user
</span><br>
<span class="quotelev3">&gt; &gt;&gt; buffer.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_IN_PLACE is used in reduce_scatter and allgather in the code.
</span><br>
<span class="quotelev2">&gt; &gt; Collectives are with communicators of 2 nodes, and we're talking (for
</span><br>
<span class="quotelev2">&gt; &gt; the smallest failing run) 8kb per node (i.e. 16kb total for an
</span><br>
<span class="quotelev2">&gt; &gt; allgather).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; E.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mon, Nov 10, 2014 at 9:29 AM, Emmanuel Thom&#195;&#169; &lt;
</span><br>
<span class="quotelev1">&gt; emmanuel.thome_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm stumbling on a problem related to the openib btl in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; openmpi-1.[78].*, and the (I think legitimate) use of file-backed
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mmaped areas for receiving data through MPI collective calls.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; A test case is attached. I've tried to make is reasonably small,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; although I recognize that it's not extra thin. The test case is a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; trimmed down version of what I witness in the context of a rather
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; large program, so there is no claim of relevance of the test case
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; itself. It's here just to trigger the desired misbehaviour. The test
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; case contains some detailed information on what is done, and the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; experiments I did.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; In a nutshell, the problem is as follows.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  - I do a computation, which involves MPI_Reduce_scatter and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_Allgather.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  - I save the result to a file (collective operation).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; *If* I save the file using something such as:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  fd = open(&quot;blah&quot;, ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  area = mmap(..., fd, )
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  MPI_Gather(..., area, ...)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; *AND* the MPI_Reduce_scatter is done with an alternative
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; implementation (which I believe is correct)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; *AND* communication is done through the openib btl,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; then the file which gets saved is inconsistent with what is obtained
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with the normal MPI_Reduce_scatter (alghough memory areas do coincide
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; before the save).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I tried to dig a bit in the openib internals, but all I've been able
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to witness was beyond my expertise (an RDMA read not transferring the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; expected data, but I'm too uncomfortable with this layer to say
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; anything I'm sure about).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Tests have been done with several openmpi versions including 1.8.3, on
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; a debian wheezy (7.5) + OFED 2.3 cluster.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; It would be great if someone could tell me if he is able to reproduce
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the bug, or tell me whether something which is done in this test case
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; is illegal in any respect. I'd be glad to provide further information
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; which could be of any help.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; E. Thom&#195;&#169;.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25730.php">http://www.open-mpi.org/community/lists/users/2014/11/25730.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25732.php">http://www.open-mpi.org/community/lists/users/2014/11/25732.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25740.php">http://www.open-mpi.org/community/lists/users/2014/11/25740.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25743/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25744.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25742.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to hosts file"</a>
<li><strong>In reply to:</strong> <a href="25740.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25758.php">Emmanuel Thomé: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<li><strong>Reply:</strong> <a href="25758.php">Emmanuel Thomé: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
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
