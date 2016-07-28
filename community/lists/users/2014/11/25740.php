<?
$subject_val = "Re: [OMPI users] File-backed mmaped I/O and openib btl.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 07:07:54 2014" -->
<!-- isoreceived="20141111120754" -->
<!-- sent="Tue, 11 Nov 2014 13:07:53 +0100" -->
<!-- isosent="20141111120753" -->
<!-- name="Emmanuel Thom&#195;&#169;" -->
<!-- email="emmanuel.thome_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File-backed mmaped I/O and openib btl." -->
<!-- id="CAPLAFj43y8wnH7tsG4sYVand4mgy749jrN+N6Wf0CxjmkdeTeg_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAPLAFj72RXkytjpTfn32kQ3J8oCTi-ZBGHAF_QUQVzGm4SOVkA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-11-11 07:07:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25741.php">SLIM H.A.: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25739.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25735.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25743.php">Joshua Ladd: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<li><strong>Reply:</strong> <a href="25743.php">Joshua Ladd: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>I've been able to simplify my test case significantly. It now runs
<br>
with 2 nodes, and only a single MPI_Send / MPI_Recv pair is used.
<br>
<p>The pattern is as follows.
<br>
<p>&nbsp;*  - ranks 0 and 1 both own a local buffer.
<br>
&nbsp;*  - each fills it with (deterministically known) data.
<br>
&nbsp;*  - rank 0 collects the data from rank 1's local buffer
<br>
&nbsp;*    (whose contents should be no mystery), and writes this to a
<br>
&nbsp;*    file-backed mmaped area.
<br>
&nbsp;*  - rank 0 compares what it receives with what it knows it *should
<br>
&nbsp;*  have* received.
<br>
<p>The test fails if:
<br>
<p>&nbsp;*  - the openib btl is used among the 2 nodes
<br>
&nbsp;*  - a file-backed mmaped area is used for receiving the data.
<br>
&nbsp;*  - the write is done to a newly created file.
<br>
&nbsp;*  - per-node buffer is large enough.
<br>
<p>For a per-node buffer size above 12kb (12240 bytes to be exact), my
<br>
program fails, since the MPI_Recv does not receive the correct data
<br>
chunk (it just gets zeroes).
<br>
<p>I attach the simplified test case. I hope someone will be able to
<br>
reproduce the problem.
<br>
<p>Best regards,
<br>
<p>E.
<br>
<p><p>On Mon, Nov 10, 2014 at 5:48 PM, Emmanuel Thom&#195;&#169;
<br>
&lt;emmanuel.thome_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Thanks for your answer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Nov 10, 2014 at 4:31 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Just really quick off the top of my head, mmaping relies on the virtual
</span><br>
<span class="quotelev2">&gt;&gt; memory subsystem, whereas IB RDMA operations rely on physical memory being
</span><br>
<span class="quotelev2">&gt;&gt; pinned (unswappable.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes. Does that mean that the result of computations should be
</span><br>
<span class="quotelev1">&gt; undefined if I happen to give a user buffer which corresponds to a
</span><br>
<span class="quotelev1">&gt; file ? That would be surprising.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For a large message transfer, the OpenIB BTL will
</span><br>
<span class="quotelev2">&gt;&gt; register the user buffer, which will pin the pages and make them
</span><br>
<span class="quotelev2">&gt;&gt; unswappable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes. But what are the semantics of pinning the VM area pointed to by
</span><br>
<span class="quotelev1">&gt; ptr if ptr happens to be mmaped from a file ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the data being transfered is small, you'll copy-in/out to
</span><br>
<span class="quotelev2">&gt;&gt; internal bounce buffers and you shouldn't have issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you saying that the openib layer does have provision in this case
</span><br>
<span class="quotelev1">&gt; for letting the RDMA happen with a pinned physical memory range, and
</span><br>
<span class="quotelev1">&gt; later perform the copy to the file-backed mmaped range ? That would
</span><br>
<span class="quotelev1">&gt; make perfect sense indeed, although I don't have enough familiarity
</span><br>
<span class="quotelev1">&gt; with the OMPI code to see where it happens, and more importantly
</span><br>
<span class="quotelev1">&gt; whether the completion properly waits for this post-RDMA copy to
</span><br>
<span class="quotelev1">&gt; complete.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.If you try to just bcast a few kilobytes of data using this technique, do
</span><br>
<span class="quotelev2">&gt;&gt; you run into issues?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No. All &quot;simpler&quot; attempts were successful, unfortunately. Can you be
</span><br>
<span class="quotelev1">&gt; a little bit more precise about what scenario you imagine ? The
</span><br>
<span class="quotelev1">&gt; setting &quot;all ranks mmap a local file, and rank 0 broadcasts there&quot; is
</span><br>
<span class="quotelev1">&gt; successful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. How large is the data in the collective (input and output), is in_place
</span><br>
<span class="quotelev2">&gt;&gt; used? I'm guess it's large enough that the BTL tries to work with the user
</span><br>
<span class="quotelev2">&gt;&gt; buffer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_IN_PLACE is used in reduce_scatter and allgather in the code.
</span><br>
<span class="quotelev1">&gt; Collectives are with communicators of 2 nodes, and we're talking (for
</span><br>
<span class="quotelev1">&gt; the smallest failing run) 8kb per node (i.e. 16kb total for an
</span><br>
<span class="quotelev1">&gt; allgather).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Nov 10, 2014 at 9:29 AM, Emmanuel Thom&#195;&#169; &lt;emmanuel.thome_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm stumbling on a problem related to the openib btl in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.[78].*, and the (I think legitimate) use of file-backed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mmaped areas for receiving data through MPI collective calls.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A test case is attached. I've tried to make is reasonably small,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; although I recognize that it's not extra thin. The test case is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trimmed down version of what I witness in the context of a rather
</span><br>
<span class="quotelev3">&gt;&gt;&gt; large program, so there is no claim of relevance of the test case
</span><br>
<span class="quotelev3">&gt;&gt;&gt; itself. It's here just to trigger the desired misbehaviour. The test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; case contains some detailed information on what is done, and the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; experiments I did.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In a nutshell, the problem is as follows.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - I do a computation, which involves MPI_Reduce_scatter and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Allgather.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - I save the result to a file (collective operation).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *If* I save the file using something such as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  fd = open(&quot;blah&quot;, ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  area = mmap(..., fd, )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Gather(..., area, ...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *AND* the MPI_Reduce_scatter is done with an alternative
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementation (which I believe is correct)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *AND* communication is done through the openib btl,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then the file which gets saved is inconsistent with what is obtained
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the normal MPI_Reduce_scatter (alghough memory areas do coincide
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before the save).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to dig a bit in the openib internals, but all I've been able
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to witness was beyond my expertise (an RDMA read not transferring the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expected data, but I'm too uncomfortable with this layer to say
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anything I'm sure about).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tests have been done with several openmpi versions including 1.8.3, on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a debian wheezy (7.5) + OFED 2.3 cluster.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It would be great if someone could tell me if he is able to reproduce
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the bug, or tell me whether something which is done in this test case
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is illegal in any respect. I'd be glad to provide further information
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which could be of any help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; E. Thom&#195;&#169;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25730.php">http://www.open-mpi.org/community/lists/users/2014/11/25730.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25732.php">http://www.open-mpi.org/community/lists/users/2014/11/25732.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25740/prog5.c">prog5.c</a>
</ul>
<!-- attachment="prog5.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25741.php">SLIM H.A.: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25739.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25735.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25743.php">Joshua Ladd: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<li><strong>Reply:</strong> <a href="25743.php">Joshua Ladd: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
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
