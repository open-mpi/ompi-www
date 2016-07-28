<?
$subject_val = "[OMPI users] File-backed mmaped I/O and openib btl.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 09:29:18 2014" -->
<!-- isoreceived="20141110142918" -->
<!-- sent="Mon, 10 Nov 2014 15:29:18 +0100" -->
<!-- isosent="20141110142918" -->
<!-- name="Emmanuel Thom&#195;&#169;" -->
<!-- email="emmanuel.thome_at_[hidden]" -->
<!-- subject="[OMPI users] File-backed mmaped I/O and openib btl." -->
<!-- id="CAPLAFj4FN64Z7QdbNtc9dkexMcVNA2smNY1sOMHZkvtBQ8QBtA_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] File-backed mmaped I/O and openib btl.<br>
<strong>From:</strong> Emmanuel Thom&#195;&#169; (<em>emmanuel.thome_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-10 09:29:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25731.php">Saliya Ekanayake: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="25729.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Wtime not working with -mno-sse flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25732.php">Joshua Ladd: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<li><strong>Reply:</strong> <a href="25732.php">Joshua Ladd: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm stumbling on a problem related to the openib btl in
<br>
openmpi-1.[78].*, and the (I think legitimate) use of file-backed
<br>
mmaped areas for receiving data through MPI collective calls.
<br>
<p>A test case is attached. I've tried to make is reasonably small,
<br>
although I recognize that it's not extra thin. The test case is a
<br>
trimmed down version of what I witness in the context of a rather
<br>
large program, so there is no claim of relevance of the test case
<br>
itself. It's here just to trigger the desired misbehaviour. The test
<br>
case contains some detailed information on what is done, and the
<br>
experiments I did.
<br>
<p>In a nutshell, the problem is as follows.
<br>
<p>&nbsp;- I do a computation, which involves MPI_Reduce_scatter and MPI_Allgather.
<br>
&nbsp;- I save the result to a file (collective operation).
<br>
<p>*If* I save the file using something such as:
<br>
&nbsp;fd = open(&quot;blah&quot;, ...
<br>
&nbsp;area = mmap(..., fd, )
<br>
&nbsp;MPI_Gather(..., area, ...)
<br>
*AND* the MPI_Reduce_scatter is done with an alternative
<br>
implementation (which I believe is correct)
<br>
*AND* communication is done through the openib btl,
<br>
<p>then the file which gets saved is inconsistent with what is obtained
<br>
with the normal MPI_Reduce_scatter (alghough memory areas do coincide
<br>
before the save).
<br>
<p>I tried to dig a bit in the openib internals, but all I've been able
<br>
to witness was beyond my expertise (an RDMA read not transferring the
<br>
expected data, but I'm too uncomfortable with this layer to say
<br>
anything I'm sure about).
<br>
<p>Tests have been done with several openmpi versions including 1.8.3, on
<br>
a debian wheezy (7.5) + OFED 2.3 cluster.
<br>
<p>It would be great if someone could tell me if he is able to reproduce
<br>
the bug, or tell me whether something which is done in this test case
<br>
is illegal in any respect. I'd be glad to provide further information
<br>
which could be of any help.
<br>
<p>Best regards,
<br>
<p>E. Thom&#195;&#169;.
<br>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25730/prog2.c">prog2.c</a>
</ul>
<!-- attachment="prog2.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25731.php">Saliya Ekanayake: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="25729.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Wtime not working with -mno-sse flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25732.php">Joshua Ladd: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<li><strong>Reply:</strong> <a href="25732.php">Joshua Ladd: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
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
