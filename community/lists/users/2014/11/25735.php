<?
$subject_val = "Re: [OMPI users] File-backed mmaped I/O and openib btl.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 11:48:56 2014" -->
<!-- isoreceived="20141110164856" -->
<!-- sent="Mon, 10 Nov 2014 17:48:56 +0100" -->
<!-- isosent="20141110164856" -->
<!-- name="Emmanuel Thom&#195;&#169;" -->
<!-- email="emmanuel.thome_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File-backed mmaped I/O and openib btl." -->
<!-- id="CAPLAFj72RXkytjpTfn32kQ3J8oCTi-ZBGHAF_QUQVzGm4SOVkA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG4F6z8SMzjDg2kFbNRfyo7GmQ=BjyRGZxz-oCQ_cRmJLEimsg_at_mail.gmail.com" -->
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
<strong>From:</strong> Emmanuel Thom&#195;&#169; (<em>emmanuel.thome_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-10 11:48:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25736.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25734.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25732.php">Joshua Ladd: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25740.php">Emmanuel Thomé: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<li><strong>Reply:</strong> <a href="25740.php">Emmanuel Thomé: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your answer.
<br>
<p>On Mon, Nov 10, 2014 at 4:31 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Just really quick off the top of my head, mmaping relies on the virtual
</span><br>
<span class="quotelev1">&gt; memory subsystem, whereas IB RDMA operations rely on physical memory being
</span><br>
<span class="quotelev1">&gt; pinned (unswappable.)
</span><br>
<p>Yes. Does that mean that the result of computations should be
<br>
undefined if I happen to give a user buffer which corresponds to a
<br>
file ? That would be surprising.
<br>
<p><span class="quotelev1">&gt; For a large message transfer, the OpenIB BTL will
</span><br>
<span class="quotelev1">&gt; register the user buffer, which will pin the pages and make them
</span><br>
<span class="quotelev1">&gt; unswappable.
</span><br>
<p>Yes. But what are the semantics of pinning the VM area pointed to by
<br>
ptr if ptr happens to be mmaped from a file ?
<br>
<p><span class="quotelev1">&gt; If the data being transfered is small, you'll copy-in/out to
</span><br>
<span class="quotelev1">&gt; internal bounce buffers and you shouldn't have issues.
</span><br>
<p>Are you saying that the openib layer does have provision in this case
<br>
for letting the RDMA happen with a pinned physical memory range, and
<br>
later perform the copy to the file-backed mmaped range ? That would
<br>
make perfect sense indeed, although I don't have enough familiarity
<br>
with the OMPI code to see where it happens, and more importantly
<br>
whether the completion properly waits for this post-RDMA copy to
<br>
complete.
<br>
<p><p><span class="quotelev1">&gt; 1.If you try to just bcast a few kilobytes of data using this technique, do
</span><br>
<span class="quotelev1">&gt; you run into issues?
</span><br>
<p>No. All &quot;simpler&quot; attempts were successful, unfortunately. Can you be
<br>
a little bit more precise about what scenario you imagine ? The
<br>
setting &quot;all ranks mmap a local file, and rank 0 broadcasts there&quot; is
<br>
successful.
<br>
<p><span class="quotelev1">&gt; 2. How large is the data in the collective (input and output), is in_place
</span><br>
<span class="quotelev1">&gt; used? I'm guess it's large enough that the BTL tries to work with the user
</span><br>
<span class="quotelev1">&gt; buffer.
</span><br>
<p>MPI_IN_PLACE is used in reduce_scatter and allgather in the code.
<br>
Collectives are with communicators of 2 nodes, and we're talking (for
<br>
the smallest failing run) 8kb per node (i.e. 16kb total for an
<br>
allgather).
<br>
<p>E.
<br>
<p><span class="quotelev1">&gt; On Mon, Nov 10, 2014 at 9:29 AM, Emmanuel Thom&#195;&#169; &lt;emmanuel.thome_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm stumbling on a problem related to the openib btl in
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.[78].*, and the (I think legitimate) use of file-backed
</span><br>
<span class="quotelev2">&gt;&gt; mmaped areas for receiving data through MPI collective calls.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A test case is attached. I've tried to make is reasonably small,
</span><br>
<span class="quotelev2">&gt;&gt; although I recognize that it's not extra thin. The test case is a
</span><br>
<span class="quotelev2">&gt;&gt; trimmed down version of what I witness in the context of a rather
</span><br>
<span class="quotelev2">&gt;&gt; large program, so there is no claim of relevance of the test case
</span><br>
<span class="quotelev2">&gt;&gt; itself. It's here just to trigger the desired misbehaviour. The test
</span><br>
<span class="quotelev2">&gt;&gt; case contains some detailed information on what is done, and the
</span><br>
<span class="quotelev2">&gt;&gt; experiments I did.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In a nutshell, the problem is as follows.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  - I do a computation, which involves MPI_Reduce_scatter and
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Allgather.
</span><br>
<span class="quotelev2">&gt;&gt;  - I save the result to a file (collective operation).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *If* I save the file using something such as:
</span><br>
<span class="quotelev2">&gt;&gt;  fd = open(&quot;blah&quot;, ...
</span><br>
<span class="quotelev2">&gt;&gt;  area = mmap(..., fd, )
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Gather(..., area, ...)
</span><br>
<span class="quotelev2">&gt;&gt; *AND* the MPI_Reduce_scatter is done with an alternative
</span><br>
<span class="quotelev2">&gt;&gt; implementation (which I believe is correct)
</span><br>
<span class="quotelev2">&gt;&gt; *AND* communication is done through the openib btl,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; then the file which gets saved is inconsistent with what is obtained
</span><br>
<span class="quotelev2">&gt;&gt; with the normal MPI_Reduce_scatter (alghough memory areas do coincide
</span><br>
<span class="quotelev2">&gt;&gt; before the save).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to dig a bit in the openib internals, but all I've been able
</span><br>
<span class="quotelev2">&gt;&gt; to witness was beyond my expertise (an RDMA read not transferring the
</span><br>
<span class="quotelev2">&gt;&gt; expected data, but I'm too uncomfortable with this layer to say
</span><br>
<span class="quotelev2">&gt;&gt; anything I'm sure about).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tests have been done with several openmpi versions including 1.8.3, on
</span><br>
<span class="quotelev2">&gt;&gt; a debian wheezy (7.5) + OFED 2.3 cluster.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It would be great if someone could tell me if he is able to reproduce
</span><br>
<span class="quotelev2">&gt;&gt; the bug, or tell me whether something which is done in this test case
</span><br>
<span class="quotelev2">&gt;&gt; is illegal in any respect. I'd be glad to provide further information
</span><br>
<span class="quotelev2">&gt;&gt; which could be of any help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; E. Thom&#195;&#169;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25730.php">http://www.open-mpi.org/community/lists/users/2014/11/25730.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25732.php">http://www.open-mpi.org/community/lists/users/2014/11/25732.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25736.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25734.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25732.php">Joshua Ladd: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25740.php">Emmanuel Thomé: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<li><strong>Reply:</strong> <a href="25740.php">Emmanuel Thomé: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
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
