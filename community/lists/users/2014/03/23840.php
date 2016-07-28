<?
$subject_val = "Re: [OMPI users] mpi.isend still not working (diagnosed)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 22:48:22 2014" -->
<!-- isoreceived="20140314024822" -->
<!-- sent="Thu, 13 Mar 2014 19:48:19 -0700" -->
<!-- isosent="20140314024819" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi.isend still not working (diagnosed)" -->
<!-- id="1394765299.15874.141.camel_at_localhost" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1394747592.15874.118.camel_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi.isend still not working (diagnosed)<br>
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-13 22:48:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23841.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Previous message:</strong> <a href="23839.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>In reply to:</strong> <a href="23837.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24249.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2014-03-13 at 14:53 -0700, Ross Boylan wrote:
<br>
<span class="quotelev1">&gt; On Thu, 2014-03-13 at 13:13 -0700, Ross Boylan wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I might just switch to mpi.send, though the fact that something is
</span><br>
<span class="quotelev2">&gt; &gt; going
</span><br>
<span class="quotelev2">&gt; &gt; wrong makes me nervous. 
</span><br>
<span class="quotelev1">&gt; I tried using mpi.send, but it fails also.  The failure behavior is
</span><br>
<span class="quotelev1">&gt; peculiar.
</span><br>
Actually, I hadn't stamped out all the mpi.isends.  When I did, it
<br>
worked.  From that and further debugging I determined that
<br>
<p>1. The messages were being sent and received at the MPI level.  After
<br>
getting the bytes Rmpi unserializes them; this was failing because the
<br>
bytes were corrupt (though of the expected length).  This failure
<br>
happened before the the message printed out saying the message was
<br>
received.  The error caused  the process to stop working, so it couldn't
<br>
get any more messages.
<br>
<p>So the immediate failure was on the receiver, not the sender.  It is
<br>
likely this was triggered by the sender sending something garbled.
<br>
<p>2. A small amount of testing with mpi.send finds no errors.
<br>
<p>3. Under half the bytes in the delivered stream matched those in the
<br>
sent stream.  The first apparent discrepancy was on the 10th byte, then
<br>
at 5176, and then a block that differed started at 102251.  Further the
<br>
very end of the stream was not all 0's.  I am not certain that I
<br>
correctly identified the original stream.
<br>
<p>4.  Although it's not entirely consistent with 3, my leading theory of
<br>
what happened is that the object being sent got garbage collected by R
<br>
before it was sent entirely.  But I'd expect the first part of the
<br>
stream to match (and possibly the last part to be 0, though that's less
<br>
likely) if that were true, and that doesn't exactly seem to be the case.
<br>
<p>Rmpi's R code for the send is
<br>
mpi.isend.Robj &lt;- function(obj, dest, tag, comm=1,request=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.isend(x=serialize(obj, NULL), type=4, dest=dest, tag=tag,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm=comm,request=request)
<br>
<p>The key thing is that serialize() returns the bytes to be sent, and from
<br>
R's point of view nobody needs them when the call returns.
<br>
<p>mpi.isend is a wrapper for a call to C code, and that C code invokes the
<br>
actual MPI_send.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23841.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Previous message:</strong> <a href="23839.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>In reply to:</strong> <a href="23837.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24249.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
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
