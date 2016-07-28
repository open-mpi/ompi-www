<?
$subject_val = "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 17:53:14 2014" -->
<!-- isoreceived="20140313215314" -->
<!-- sent="Thu, 13 Mar 2014 14:53:12 -0700" -->
<!-- isosent="20140313215312" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)" -->
<!-- id="1394747592.15874.118.camel_at_localhost" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1394741608.15874.111.camel_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)<br>
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-13 17:53:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23838.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Previous message:</strong> <a href="23836.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<li><strong>In reply to:</strong> <a href="23836.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23840.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (diagnosed)"</a>
<li><strong>Reply:</strong> <a href="23840.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (diagnosed)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2014-03-13 at 13:13 -0700, Ross Boylan wrote:
<br>
<span class="quotelev1">&gt; I might just switch to mpi.send, though the fact that something is
</span><br>
<span class="quotelev1">&gt; going
</span><br>
<span class="quotelev1">&gt; wrong makes me nervous. 
</span><br>
I tried using mpi.send, but it fails also.  The failure behavior is
<br>
peculiar.
<br>
<p>After I launch the processes I can send a message to the assembler, the
<br>
one for which I was having problems.  It is still running a fake
<br>
process, which prints out a message to the terminal when it gets an MPI
<br>
message.  I see the terminal message on the rank 0 process, which I'm
<br>
running interactively.
<br>
<p>Another processes sends 2 messages to the assembler.  The sender
<br>
continues to operate, indicating mpi.send completed.  However, I never
<br>
see any messages from the assembler that it got a message.  A different
<br>
process then sends a message to the assembler, and that sender then
<br>
hangs.
<br>
<p>Ross Boylan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23838.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Previous message:</strong> <a href="23836.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<li><strong>In reply to:</strong> <a href="23836.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23840.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (diagnosed)"</a>
<li><strong>Reply:</strong> <a href="23840.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (diagnosed)"</a>
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
