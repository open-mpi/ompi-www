<?
$subject_val = "Re: [OMPI users] File-backed mmaped I/O and openib btl.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 10:31:32 2014" -->
<!-- isoreceived="20141110153132" -->
<!-- sent="Mon, 10 Nov 2014 10:31:25 -0500" -->
<!-- isosent="20141110153125" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File-backed mmaped I/O and openib btl." -->
<!-- id="CAG4F6z8SMzjDg2kFbNRfyo7GmQ=BjyRGZxz-oCQ_cRmJLEimsg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAPLAFj4FN64Z7QdbNtc9dkexMcVNA2smNY1sOMHZkvtBQ8QBtA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-11-10 10:31:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25733.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25731.php">Saliya Ekanayake: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="25730.php">Emmanuel Thom&#195;&#169;: "[OMPI users] File-backed mmaped I/O and openib btl."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25735.php">Emmanuel Thomé: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<li><strong>Reply:</strong> <a href="25735.php">Emmanuel Thomé: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just really quick off the top of my head, mmaping relies on the virtual
<br>
memory subsystem, whereas IB RDMA operations rely on physical memory being
<br>
pinned (unswappable.) For a large message transfer, the OpenIB BTL will
<br>
register the user buffer, which will pin the pages and make them
<br>
unswappable. If the data being transfered is small, you'll copy-in/out to
<br>
internal bounce buffers and you shouldn't have issues.
<br>
<p>1.If you try to just bcast a few kilobytes of data using this technique, do
<br>
you run into issues?
<br>
<p>2. How large is the data in the collective (input and output), is in_place
<br>
used? I'm guess it's large enough that the BTL tries to work with the user
<br>
buffer.
<br>
<p>Josh
<br>
<p>On Mon, Nov 10, 2014 at 9:29 AM, Emmanuel Thom&#195;&#169; &lt;emmanuel.thome_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm stumbling on a problem related to the openib btl in
</span><br>
<span class="quotelev1">&gt; openmpi-1.[78].*, and the (I think legitimate) use of file-backed
</span><br>
<span class="quotelev1">&gt; mmaped areas for receiving data through MPI collective calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A test case is attached. I've tried to make is reasonably small,
</span><br>
<span class="quotelev1">&gt; although I recognize that it's not extra thin. The test case is a
</span><br>
<span class="quotelev1">&gt; trimmed down version of what I witness in the context of a rather
</span><br>
<span class="quotelev1">&gt; large program, so there is no claim of relevance of the test case
</span><br>
<span class="quotelev1">&gt; itself. It's here just to trigger the desired misbehaviour. The test
</span><br>
<span class="quotelev1">&gt; case contains some detailed information on what is done, and the
</span><br>
<span class="quotelev1">&gt; experiments I did.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In a nutshell, the problem is as follows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - I do a computation, which involves MPI_Reduce_scatter and MPI_Allgather.
</span><br>
<span class="quotelev1">&gt;  - I save the result to a file (collective operation).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *If* I save the file using something such as:
</span><br>
<span class="quotelev1">&gt;  fd = open(&quot;blah&quot;, ...
</span><br>
<span class="quotelev1">&gt;  area = mmap(..., fd, )
</span><br>
<span class="quotelev1">&gt;  MPI_Gather(..., area, ...)
</span><br>
<span class="quotelev1">&gt; *AND* the MPI_Reduce_scatter is done with an alternative
</span><br>
<span class="quotelev1">&gt; implementation (which I believe is correct)
</span><br>
<span class="quotelev1">&gt; *AND* communication is done through the openib btl,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then the file which gets saved is inconsistent with what is obtained
</span><br>
<span class="quotelev1">&gt; with the normal MPI_Reduce_scatter (alghough memory areas do coincide
</span><br>
<span class="quotelev1">&gt; before the save).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to dig a bit in the openib internals, but all I've been able
</span><br>
<span class="quotelev1">&gt; to witness was beyond my expertise (an RDMA read not transferring the
</span><br>
<span class="quotelev1">&gt; expected data, but I'm too uncomfortable with this layer to say
</span><br>
<span class="quotelev1">&gt; anything I'm sure about).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tests have been done with several openmpi versions including 1.8.3, on
</span><br>
<span class="quotelev1">&gt; a debian wheezy (7.5) + OFED 2.3 cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be great if someone could tell me if he is able to reproduce
</span><br>
<span class="quotelev1">&gt; the bug, or tell me whether something which is done in this test case
</span><br>
<span class="quotelev1">&gt; is illegal in any respect. I'd be glad to provide further information
</span><br>
<span class="quotelev1">&gt; which could be of any help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E. Thom&#195;&#169;.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25730.php">http://www.open-mpi.org/community/lists/users/2014/11/25730.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25732/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25733.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25731.php">Saliya Ekanayake: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="25730.php">Emmanuel Thom&#195;&#169;: "[OMPI users] File-backed mmaped I/O and openib btl."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25735.php">Emmanuel Thomé: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<li><strong>Reply:</strong> <a href="25735.php">Emmanuel Thomé: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
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
